<?php
    include 'connect.php';
    if(isset($_POST['submit'])){

        $filename = $_FILES["picture"]["name"];
        $tempname = $_FILES["picture"]["tmp_name"];
        $folder = "./image/" . $filename;
        move_uploaded_file($tempname, $folder);

        $name = $_POST['name'];
        $age = $_POST['age'];        
        $sql = "insert into `info` (name,age,picture) values ('$name','$age','$filename')";
        $result = mysqli_query($con,$sql);
        if(!$result){
            die(mysqli_error($result));
        }
    }
?>
 
<!DOCTYPE html>
<html> 
<head>
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
 
<body>
    <main class="container">
        <h2 class="text-center my-4">Please Fill Up The Form Bellow</h2>
        <form method="post" enctype="multipart/form-data">  
            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label class="form-label">Age</label>
              <input type="number" class="form-control" id="age" name="age">
            </div>
            <div class="mb-3">
              <label class="form-label">Picture</label>
              <input type="file" class="form-control" id="picture" name="picture">
            </div>
            <button type="submit" name="submit" id="submit-btn" class="btn btn-dark">Submit</button>
        </form>

        <div id="display-image">
        <?php
        $query = " select * from info ";
        $result = mysqli_query($con, $query);
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
            <img src="image/<?php echo $data['picture']; ?>">
 
        <?php
        }
        ?>
    </div>
    </main>
</body>
 
</html>