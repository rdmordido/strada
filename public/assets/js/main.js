$(document).ready(function(e) {
	// the navigation
	$('#nav a,.register-btn').click(function(){
		var href = $(this).data('href');
		var self = $(this);
		$('#nav a').removeClass('active');
		$('html, body').stop().animate({scrollTop: $('#'+href).offset().top - 106}, 1000,'easeOutQuart');
		$(this).addClass('active');
	});
		
	var $ht = $(window).height() - 106;
	$('.fullscreen,#the-banner').css({'min-height':$ht});

	// features js
	$('.sidebar-nav ul li a.parent').click(function(){
		$('.sidebar-nav ul li a.parent').removeClass('active');
		$(this).addClass('active');
        $('.sidebar-nav ul li').removeClass('active');
        $(this).parent().addClass('active');
		var $panel = $(this).data('href');
		$('.the-panel').hide().removeClass('active');
		$('#'+$panel).show();
	});
    $('.sidebar-nav ul li a.child').click(function(){
        $('.sidebar-nav ul li a.child').removeClass('active');
        $(this).addClass('active');
        var $panel = $(this).data('href');
        $('.the-panel').hide().removeClass('active');
        $('#'+$panel).show();
    });
/*========================================================================================================================================================================
| ACTION SCRIPTS START
/*========================================================================================================================================================================*/
$('form#login').submit(function(e){	
    $.ajax({
            type    : 'post',
            url     : '/ajax/login',
            data    : $(this).serialize(),
            dataType: 'json',
            success : function(result){
               if(result.success){
                    $('#admin-login-alert').removeClass('alert-danger');
                    $('#admin-login-alert').addClass('alert-success');
                    $('#admin-login-alert p').html('<strong>Success!</strong> Redirecting..');
                    $('#admin-login-alert').show();
                    window.location = '/users';
                }else{                        
                    $('#admin-login-alert p').html(result.error_message);
                    $('#admin-login-alert').addClass('alert-danger');
                    $('#admin-login-alert').show();
                }
            }
        });
    e.preventDefault();
});

$('form#register').submit(function(e){
	$('#pleaseWait').show();
	$.ajax({
            type    : 'post',
            url     : '/ajax/register',
            data 	: $(this).serialize(),
            dataType: 'json',
            success : function(result){
                if(result.success){
                    clear_form_register();
                    $('.alert-danger').hide();
                    $('.alert-success').show();
                }else{

                    $('.alert-danger').text('Please fill up all fields');
                    
                    if(result.error_message.email != undefined && $('#email').val() != '') { $('.alert-danger').html(result.error_message.email); }
                    if(result.error_message.branch_code != undefined && $('#branch_code').val() != '' && $('#dealer').val() != '') { $('.alert-danger').html(result.error_message.branch_code); }


                    $('.alert-success').hide();
                    $('.alert-danger').show();
                }
                $('html, body').stop().animate({scrollTop: $('#registration').offset().top - 106}, 1000,'easeOutQuart');
            },
			complete: function(){
				$('#pleaseWait').hide();
			}
        });
	e.preventDefault();
});

$('form#edituser').submit(function(e){
    $('#pleaseWait').show();
    $.ajax({
            type    : 'post',
            url     : '/ajax/edit-user',
            data    : $(this).serialize(),
            dataType: 'json',
            success : function(result){
                if(result.success){                    
                    $('.alert-danger').hide();
                    $('.alert-success').show();
                }else{

                    $('.alert-success').hide();
                    $('.alert-danger').show();

                }
                $('html, body').stop().animate({scrollTop: $('#registration').offset().top - 106}, 1000,'easeOutQuart');
            },
            complete: function(){
                $('#pleaseWait').hide();
            }
        });
    e.preventDefault();
});

$('#area').change(function(e){
	$('#pleaseWait').show();
	var location_id = $(this).val();
        $.ajax({
            type    : 'get',
            url     : '/ajax/branch-by-location-id/'+location_id,
            dataType: 'json',
            success : function(locations){
            	var options = '<option value="">Dealer</option>';
                if(locations.length > 0){
                	$.each(locations,function(i,location){
                		options += '<option value="'+location.code+'">'+location.name+' ('+location.company+')</option>';
                	});
                	
                	$('#dealer').html(options);
                }
            },
            complete: function(){
                $('#pleaseWait').hide();
            }
        });

	e.preventDefault();
});

$('.btn-remove-user').click(function(){
    var user_id = $(this).attr('user-id');
    var confirm = window.confirm("Remove this user?");
    if(confirm){
        $.ajax({
            type    : 'delete',
            url     : '/ajax/user/'+user_id,
            dataType: 'json',
            success : function(result){
                if(result.success){
                    window.location.reload();
                }else
                    alert('Error occured while trying to remove the user');
            }
        });
    }else{
        return false;
    }
});

 $('#users-list').dataTable({
    "aoColumnDefs": [
        { 'bSortable': false, 'aTargets': [ 0,7 ] }
    ]
});


 $.ucfirst = function(str) {
    var text = str;
    var parts = text.split(' '),
        len = parts.length,
        i, words = [];
    for (i = 0; i < len; i++) {
        var part = parts[i];
        var first = part[0].toUpperCase();
        var rest = part.substring(1, part.length);
        var word = first + rest;
        words.push(word);

    }
    return words.join(' ');
};

show_form_group_error = function(field,message){
    $('#'+field).parent().addClass('has-error');
    //$('#'+field).parent().find('label').text(message);
    //$('#'+field).parent().find('label').show();
}

clear_form_register = function(){
	$('#coupon').val('');
	$('#reservation').val('');
	$('#lastname').val('');
	$('#firstname').val('');
	$('#mi').val('');
	$('#address').val('');
	$('#phone').val('');
	$('#email').val('');
    $('#age').val('');
	$('#occupation').val('');
    $('#or_number').val('');
    $('#branch_code').val('');
	$('#area').val('');
	$('#dealer').html('<option value="">Dealer</option>');
	$('#model').val('');
	$('#sales').val('');
	$('#color1').val('');
	$('#color2').val('');
	$('#color3').val('');
	$('#current_brand_model').val('');
    $('#like_most').val('');
	$('#other_brand_model').val('');
    $('#learn_source').val('');
	
}
});
/*========================================================================================================================================================================
| ACTION SCRIPTS END
/*========================================================================================================================================================================*/
