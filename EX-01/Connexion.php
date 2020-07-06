<html>
<head>
<title>mini-site-routing</title>
</head>

<body>
<h1>
<?php
session_start();
?>
</h1>

<form action="securite.php" methode="post">

<input type="text" placeholder="Login" name="login">
<br>

<input type="text" placeholder="Password" name="password">
<br>
<button type="submit" value="Envoyer">Envoyer</button>
</from>
</body>
</html>