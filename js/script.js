

jQuery(document).ready(function($){  

    $("#keyword").on("keyup",function(){
        var keyword = $(this).val();

        jQuery.ajax({
            url:   ajax_object.ajaxurl,
            type: 'POST',
            data: { 
                action: 'data_fetch',  
                keyword: keyword 
            },
            success: function(data) {
                jQuery('#datafetch').html( data );
            }
        });
    });


$("#mySelection").change(function()
{
    var keyword = $(this).find("option:selected").text();
    var keyword = $(this).val();
    // alert(keyword);
    jQuery.ajax({
        url:   ajax_object.ajaxurl,
        type: 'POST',
        data: 
        { 
            action: 'data_drop',  
            keyword: keyword 
        },
        success: function(data) {
            jQuery('#datafetch').html( data );
        }
    });
});
});