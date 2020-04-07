<head>
     <a href="index.php"><img src="home.jpg" class="home"></a>
    <link rel="stylesheet" type="text/css" href="my.css">
</head>

<body>
    <br />
    <br />

    <?php
$target_dir = "";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); //cesta ku obrazku <3 // 
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>










<?php
echo $_POST['nazov'];
echo "<br>";
echo $_POST['cena'];
echo "<br>";
echo $_POST['mnozstvo'];
echo "<br>";
echo $_POST['info'];


$nazov = $_POST['nazov'];
$cena = $_POST['cena'];
$mnozstvo = $_POST['mnozstvo'];
$info = $_POST['info'];
$obrazok = $target_file;
$conn = mysqli_connect("mysql80.websupport.sk", "projektwd2", "Xl8M=8iD,;", "projektwd2", 3314);


$sql = "INSERT INTO Eshop (nazov, cena, mnozstvo, info, obrazok)
VALUES ('$nazov', '$cena', '$mnozstvo' , '$info' , '$obrazok')";

if ($conn->query($sql) === TRUE) {
 $last_id = $conn->insert_id;
 echo "Nova polozka bola nahrata ID polozky je: " . $last_id;
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}




 $conn -> close();
 

?>

</body>

