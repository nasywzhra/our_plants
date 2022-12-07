<?php
require 'function.php';

if(isset($_POST["submit"])){
    if(tambahData($_POST) > 0){
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href='index.php';
        </script>";
    }else{
        echo "<script>
        alert('data gagal ditambahkan');
        document.location.href='index.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add plant data</title>
</head>
<body>
    <h1>Add plant data</h1>

    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
    Id: <input type="text" name="plantId" required>
    <br></br>
    Name: <input type="text" name="plantName" required>
    <br></br>
    Color: <input type="text" name="plantColor" required>
    <br></br>
    Price: <input type="text" name="plantPrice" required>
    <br></br>
    Image: <input type="text" name="plantImage" required>
    <br></br>
    <button type="submit" name="submit">Add data</button>

</form>
</body>
</html>