<head>
    
 <a href="index.php"><img src="home.jpg" class="home"></a>


<link rel="stylesheet" type="text/css" href="my.css">
</head>


<body>
    <br />
    <br />

    <?php



$new_nazov = $_POST['new_nazov'];
$new_cena = $_POST['new_cena'];
$new_mnozstvo = $_POST['new_mnozstvo'];
$new_info = $_POST['new_info'];
$still_id = $_POST['still_id'];
echo $new_nazov;
echo "<br>";
echo $new_cena;
echo "<br>";
echo $new_mnozstvo;
echo "<br>";
echo $new_info;
echo "<br>";
echo $still_id;
echo "<br>";

// Create connection
$conn = mysqli_connect("mysql80.websupport.sk", "projektwd2", "Xl8M=8iD,;", "projektwd2", 3314);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//UPDATE table_name
//SET column1=value, column2=value2,...
//WHERE some_column=some_value 

$sql = "UPDATE Eshop SET nazov='$new_nazov', cena='$new_cena', mnozstvo='$new_mnozstvo', info='$new_info' WHERE id='$still_id' ";

if ($conn->query($sql) === TRUE) {
    echo "Pozadovane zmeny boli uspesne!";
} else {
    echo "CHYBA: " . $conn->error;
}

$conn->close();
 ?>   

</body>