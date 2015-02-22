$(document).ready(function(e) {
	// the navigation
	$('#nav a').click(function(){
		var href = $(this).data('href');
		var self = $(this);
		$('#nav a').removeClass('active');
		$('html, body').stop().animate({scrollTop: $('#'+href).offset().top - 106}, 1000,'easeOutQuart');
		$(this).addClass('active');
	});
		
	var $ht = $(window).height() - 106;
	$('.fullscreen,#the-banner').css({'min-height':$ht});


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

	$.ajax({
            type    : 'post',
            url     : '/ajax/register',
            data 	: $(this).serialize(),
            dataType: 'json',
            success : function(result){
            	$('div.form-group.has-error label').hide();
                $('div.form-group.has-error').removeClass('has-error');

                if(result.success){
                    clear_form_register();
                    $('.alert-success').show();
                }else{
                    $('.alert-success').hide();
                    if(undefined != result.error_message.lastname) { show_form_group_error('lastname',result.error_message.lastname); }
                    if(undefined != result.error_message.firstname) { show_form_group_error('firstname',result.error_message.firstname); }
                    if(undefined != result.error_message.address) { show_form_group_error('address',result.error_message.address); }
                    if(undefined != result.error_message.phone) { show_form_group_error('phone',result.error_message.phone); }
                    if(undefined != result.error_message.email) { show_form_group_error('email',result.error_message.email); }
                    if(undefined != result.error_message.age) { show_form_group_error('age',result.error_message.age); }
                    if(undefined != result.error_message.occupation) { show_form_group_error('occupation',result.error_message.occupation); }
                    if(undefined != result.error_message.or_number) { show_form_group_error('or_number',result.error_message.or_number); }
                    if(undefined != result.error_message.branch_code) { show_form_group_error('branch_code',result.error_message.branch_code); }
                    if(undefined != result.error_message.area) { show_form_group_error('area',result.error_message.area); }
                    if(undefined != result.error_message.dealer) { show_form_group_error('dealer',result.error_message.dealer); }
                    if(undefined != result.error_message.model) { show_form_group_error('model',result.error_message.model); }
                    if(undefined != result.error_message.sales) { show_form_group_error('sales',result.error_message.sales); }
                    if(undefined != result.error_message.color1) { show_form_group_error('color1',result.error_message.color1); }
                    if(undefined != result.error_message.color2) { show_form_group_error('color2',result.error_message.color2); }
                    if(undefined != result.error_message.color3) { show_form_group_error('color3',result.error_message.color3); }
                    if(undefined != result.error_message.current_brand_model) { show_form_group_error('current_brand_model',result.error_message.current_brand_model); }
                    if(undefined != result.error_message.like_most) { show_form_group_error('like_most',result.error_message.like_most); }
                    if(undefined != result.error_message.other_brand_model) { show_form_group_error('other_brand_model',result.error_message.other_brand_model); }
                    if(undefined != result.error_message.learn_source) { show_form_group_error('learn_source',result.error_message.learn_source); }
                }
            }
        });
	e.preventDefault();
});


$('#area').change(function(e){
	var location_id = $(this).val();
        $.ajax({
            type    : 'get',
            url     : '/ajax/branch-by-location-id/'+location_id,
            dataType: 'json',
            success : function(locations){
            	var options = '<option value="">Dealer</option>';
                if(locations.length > 0){
                	$.each(locations,function(i,location){
                		options += '<option value="'+location.code+'">'+$.ucfirst(location.name.toLowerCase())+' ('+location.company+')</option>';
                	});
                	
                	$('#dealer').html(options);
                }
            }
        });

	e.preventDefault();
});


 $('#users-list').dataTable({
    "aoColumnDefs": [
        { 'bSortable': false, 'aTargets': [ 0 ] }
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