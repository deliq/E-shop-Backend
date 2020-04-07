<head>
     <a href="index.php"><img src="home.jpg" class="home"></a>



    <link rel="stylesheet" type="text/css" href="my.css">
</head>
<body>
  <br />
  <br />
    <?php
    
    $id_zmenit = $_POST['id_zmenit'];


    // Create connection
$conn = mysqli_connect("mysql80.websupport.sk", "projektwd2", "Xl8M=8iD,;", "projektwd2", 3314);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $sql = "SELECT id, nazov, cena , mnozstvo , info , obrazok FROM Eshop WHERE id='$id_zmenit' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //  echo "<br> ID: ". $row["ID"]. " - Nazov: ". $row["firstname"]. " " . $row["lastname"] . "<br>"; 
      $showimage = $row['obrazok'];

      echo "<br> ID: ". $row["id"]. " - Nazov: ". $row["nazov"]. " | Cena: ". $row["cena"]."  | Mnozstvo: ". $row["mnozstvo"]. " | Info: ". $row["info"].  "| Obrazok: " ?> <img src = "<?php echo $showimage ?>" style="width:200px;height:200px">  <?php " <br>"; 
   

    $still_id = $row["id"];
    $old_nazov = $row["nazov"];
    $old_cena = $row["cena"];
    $old_mnozstvo = $row["mnozstvo"];
    $old_info = $row["info"];
       
    }
} else {
    echo "0 results";
}

?>
 <form class="cena_tovaru" method="post" action="/edit.php">
     
        <label for="new_nazov">Nazov tovaru:</label>
        <input type="text" name="new_nazov" value = "<?php echo $old_nazov ?>" ><br>

        <label for="new_cena">Cena tovaru:</label>
        <input type="number" name="new_cena" value = "<?php echo $old_cena ?>" ><br>
     

        <label for="new_mnozstvo">Mnozstvo tovaru:</label>
        <input type="number" name="new_mnozstvo" value = "<?php echo $old_mnozstvo ?>"><br>
            <div class="info_text">
            <label for="new_info">Info o tovare:</label>
            <textarea tybe="text" name="new_info" rows="4" cols="50"  ><?php echo $old_info ?>
        
                
            </textarea>
            </div>
     <label for="still_id"> Vase zvolene ID: </label>
        <input type="number" name="still_id" value = "<?php echo $still_id  ?>"  readonly /> <br>
       
        <input type="submit" class="tlacitko_nahrat" />
    
    </form>
    
    
<?php




/*
echo "<br>";
    $sql = "SELECT id, nazov, cena , mnozstvo , info , obrazok FROM Eshop WHERE id='$id_zmenit' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<br> ID: ". $row["id"]. " - Nazov: ". $row["nazov"]. " | Cena: ". $row["cena"]."  | Mnozstvo: ". $row["mnozstvo"]. " | Info: ". $row["info"]. " <br>"; 
    }
} else {
    echo "0 results";
}
*/


$conn->close();
?>
 </body>