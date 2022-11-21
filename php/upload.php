<?php
    include 'connect.php';

    if(isset($_POST['name']) && isset($_POST['age']) && isset($_FILES['picture'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $filename = $_FILES["picture"]["name"];
        
        // saving the uploaded image into image folder
        $tempname = $_FILES["picture"]["tmp_name"];
        $folder = "./image/" . $filename;
        move_uploaded_file($tempname, $folder);

        // uploading data into database
        $sql = "insert into `info` (name,age,picture) values ('$name','$age','$filename')";
        $result = mysqli_query($con,$sql);
        if(!$result){
            die(mysqli_error($result));
        }
    }
?>
