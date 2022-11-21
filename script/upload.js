$(document).ready(function (e) {
    $("#form").on('submit',(function(e) {
        e.preventDefault(); // preventing form from refreshing
        $.ajax({
            url: "php/upload.php",
            type: "POST",
            data:  new FormData(this),// using FromData class to send all data of from
            contentType: false,
            cache: false,
            processData:false,
            success: function(data,status){
                $('div#alert-div').css("display","block");
                $('#name').val('');
                $('#age').val('');
                $('#picture').val('');
            },         
        });
    }));
});
