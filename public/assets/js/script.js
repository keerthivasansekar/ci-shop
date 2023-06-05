function cart(event, id){
    event.preventDefault();
    $.ajax({
        url: $(location).attr('origin') + '/cart/add-to-cart/'+id,
        type: 'POST',
        dataType:'json',
        data: $('#form_'+id).serialize(),
        beforeSend: function(){
            $('#btnAddToCart_'+id).html('<i class="fas fa-circle-notch fa-spin fa-lg" style="color: #d19c97;"></i>');
        },
        success: function (resp){
            setTimeout(function(){
                $('#'+resp.id+'_quantity').val(0);
                $('#btnAddToCart_'+resp.id).html('<i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart');
            }, 1000);            
        }
    });

}

function qtyCheck(id){
    
    const content = $("#"+id+'_quantity').val();
    if (content != '' || content != 0) {
        $('#btnAddToCart_'+id).removeAttr('disabled');
    }
    if (content == '' || content == 0) {
        $('#btnAddToCart_'+id).attr('disabled', 'disabled');
    }
}

$(document).ready(function(){


});