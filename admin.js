$(document).ready(function(){

    setInterval(() => {
        $.post( "updAdmin.php", function(resp, stat){
            result = JSON.parse(resp)
            $("#container").html(result);
        })    
    }, 1000);


})