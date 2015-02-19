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
                    if(undefined != result.error_message.area) { show_form_group_error('area',result.error_message.area); }
                    if(undefined != result.error_message.dealer) { show_form_group_error('dealer',result.error_message.dealer); }
                    if(undefined != result.error_message.model) { show_form_group_error('model',result.error_message.model); }
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
	$('#occupation').val('');
	$('#family').val('');
	$('#learn').val('');
	$('#area').val('');
	$('#dealer').html('<option value="">Dealer</option>');
	$('#model').val('');
	$('#sales').val('');
	$('#color1').val('');
	$('#color2').val('');
	$('#color3').val('');
	$('#price').val('');
	$('#size').val('');
	$('#design').val('');
	$('#features').val('');
	$('#brand').val('');
	$('#other_models').val('');
	
}