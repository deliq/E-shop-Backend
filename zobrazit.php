<head>
 <a href="index.php"><img src="home.jpg" class="home"></a>


<link rel="stylesheet" type="text/css" href="my.css">
</head>


<body>
    <?php
// Create connection
$conn = mysqli_connect("mysql80.websupport.sk", "projektwd2", "Xl8M=8iD,;", "projektwd2", 3314);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nazov, cena , mnozstvo , info , obrazok FROM Eshop";
$result = $conn->query($sql);

/*if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

    $showimage = $row['obrazok'];
    
    echo "<br> ID: ". $row["id"]. " - Nazov: ". $row["nazov"]. " | Cena: ". $row["cena"]."  | Mnozstvo: ". $row["mnozstvo"]. " | Info: ". $row["info"].  "| Obrazok: " ?> <img src= " <?php echo $showimage ?> " > <?php "<br>";
    }
    */
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //  echo "<br> ID: ". $row["ID"]. " - Nazov: ". $row["firstname"]. " " . $row["lastname"] . "<br>"; 
      $showimage = $row['obrazok'];

      echo "<br> ID: ". $row["id"]. " - Nazov: ". $row["nazov"]. " | Cena: ". $row["cena"]."  | Mnozstvo: ". $row["mnozstvo"]. " | Info: ". $row["info"].  "| Obrazok: " ?> <img src = "<?php echo $showimage ?>" style="width:75px;height:75px">  <?php " <br>"; 
    }
} else {
    echo "0 results";
}

$conn->close();
?>

    
    
</body>