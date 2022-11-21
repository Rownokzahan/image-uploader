$(document).ready(function () {
    displayData();
}); 

function displayData(){
    const displayData = "true";
    $.ajax({
        url:"php/display.php",
        type:"post",
        data:{
            displaySend: displayData,
        },
        success:function(data,status){
            // console.log(status);
            $('#table-body').html(data);
        }
    })
}