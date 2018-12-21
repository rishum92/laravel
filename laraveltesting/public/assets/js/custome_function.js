$(document).ready(function()
{ 
    $('#composer').click(function()
    {
        var url = base_url+'view/composer.php';
        $.ajax({    
            url : url,
            success: function(data)
            {   
                $('.pull-left').html("Compose");
                $('.inbox-content').html(data);
                //alert(include 'composer.php');
            }   
        });     
    });

});