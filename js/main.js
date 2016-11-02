$(document).ready(function (){
	$('#secure').click(function(){
		$.ajax({
		    url: base_url+"main/secure",
		    dataType: 'json',
		    type: 'post',
		    data: { text: $('.my-text').val() }
		}).done(function (data) {
		    if(data['status']){
		    	$('.masthead').after('<div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert">&times;</a><strong>Success!</strong> '+data['message']+'. Scroll down to see all details.</div>');
		    	$('.my-text').val("");
		    	$('#text-id').html(data['text_id']);
		    	$('#date-created').html(data['datetime']);
		    	$('#is-used').html(data['used']);
		    	$('#access_link').html(data['link']);
		    	$('#access_link').attr('href',data['link']);
		    	$('.details').fadeIn();
		    }
		    else{
		    	$('.masthead').after('<div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert">&times;</a><strong>Error!</strong> '+data['message']+'</div>');
		    }
		}).fail(function (jqXHR, textStatus) {
		    console.log(jqXHR+':'+textStatus );
		});
	});

	$('.my-text').keyup(function(){
		if($('.my-text').val().length>0){
			$('#secure').fadeIn();
		}
		else{
			$('#secure').fadeOut();	
		}
	});
	$('#login-form').submit(function(){
		$.ajax({
		    url: base_url+"main/authenticate",
		    dataType: 'json',
		    type: 'post',
		    data: $('#login-form').serialize()
		}).done(function (data) {
		    if(data['status']){
		    	$('.container').prepend('<div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert">&times;</a><strong>Success!</strong> '+data['message']+'. Scroll down to see all details.</div>');
		    	window.location.href=base_url+'admin'
		    }
		    else{
		    	$('.container').prepend('<div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert">&times;</a><strong>Error!</strong> '+data['message']+'</div>');
		    }
		}).fail(function (jqXHR, textStatus) {
		    console.log(jqXHR+':'+textStatus );
		});
		return false;
	});

	$(document).ready(function() {
    	if($('#example').length){
    		$('#example').DataTable();
    	}
	});
});