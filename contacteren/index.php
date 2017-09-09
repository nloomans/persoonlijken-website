<!DOCTYPE html>

<html>

<head>

<title id="title">home</title>
<link rel="shortcut icon" href="/benodigdheden/plaatjes">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="index.css">

<!-- Libary p5.js -->
<script src="bibliotheek/p5.js"></script>
<script src="bibliotheek/p5dom.js"></script>

<!-- Jquery libary -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<script src="index.js"></script>

<script src="javascript/games1/spel1.js"></script>


</head>


<body style="background-color: lightgrey">


<nav class="navbar navbar-default" style="background: blanchedalmond">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/index.html">Bilal's website</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/index.html">Home</a></li>
      <li><a href="/wie ben ik/index.html">Wie ben ik</a></li>
      <li><a href="/creaties/index.html">Mijn creaties</a></li>
      <li class="active"><a href="#">mij contacteren</a></li>
    </ul>
  </div>
</nav>


<!-- contact forum -->

<center>

    <form action="server/server.php">
       <p>Naam</p>
        <input type="text" name="text" size="100" id="naam" placeholder="type je naam"/>
        <p>Email optioneel</p>
        <input type="text" name="email" size="100" id="email" placeholder="type je e-mail"/>
        <p>Vraag</p>
        <input type="text" name="vraag" size="100" id="vraag" placeholder="type je vraag"/><br>
        <input type="submit" name="verzenden" id="verzenden" value="verzenden"/>
    </form>


</center>









</body>



</html>
