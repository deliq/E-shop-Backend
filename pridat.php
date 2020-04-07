<head>
    
 <a href="index.php"><img src="home.jpg" class="home"></a>


<link rel="stylesheet" type="text/css" href="my.css">
</head>


<body>
    <form class="cena_tovaru" method="post" action="/pripoj.php" enctype="multipart/form-data">
        <label for="nazov">Nazov tovaru:</label>
        <input type="text" name="nazov"><br>

        <label for="cena">Cena tovaru:</label>
        <input type="number" name="cena"><br>


        <label for="mnozstvo">Mnozstvo tovaru:</label>
        <input type="number" name="mnozstvo"><br>
            <div class="info_text">
            <label for="info">Info o tovare:</label>
            <textarea tybe="text" name="info" rows="4" cols="50">

                
            </textarea>
            </div>
        <label for="fileToUpload">Vyberte obrazok:</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" class="tlacitko_nahrat" />
    
    </form>
    

</body>