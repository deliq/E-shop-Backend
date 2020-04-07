<head>
     <a href="index.php"><img src="home.jpg" class="home"></a>



    <link rel="stylesheet" type="text/css" href="my.css">
</head>
<body>
    <br />
    <br />
        <?php 
    echo $_POST['id_zmena'];
    $id_zmena = $_POST['id_zmena'];

    // Create connection
$conn = mysqli_connect("mysql80.websupport.sk", "projektwd2", "Xl8M=8iD,;", "projektwd2", 3314);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE FROM Eshop WHERE id='$id_zmena'";

if ($conn->query($sql) === TRUE) {
    echo "Pozadovany riadok bol vymazany uspesne!";
} else {
    echo "CHYBA pri mazani: " . $conn->error;
}


$conn->close();



?>


</body>