<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen-Film</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script type="text/javascript" src="requete.js"></script>
    <script>
        objetXMLHttpRequest = creationObjetXMLHttpRequest();
        objetXMLHttpRequest.open("get", "listeFilm.php", true);
        objetXMLHttpRequest.onreadystatechange = fonctionDeRappel;
        objetXMLHttpRequest.send(null);

        function fonctionDeRappel() {
            document.getElementById("table").innerHTML = objetXMLHttpRequest.responseText;
        }
    </script>
</head>

<body style="background-color:rgb(255, 238, 127)">
    <div id="div">
        <center>
        <h3>Listes des films</h3>
        <br>
        <a href="ajout.php">Ajouter un nouveau film</a>
        <br>
        </center>
    </div>
    <center>
        <br>
        <div id="table">
            
        </div>
    </center>
</body>

</html>