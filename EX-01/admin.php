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
    <form enctype="multipart/form-data" action="fileupload.php" method="post">
      <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
    <input type="file" name="monfichier" />
    <input type="submit" />
    <?php
    $extensionsAutorisees = array("jpeg", "jpg", "png");
    
    ?>
      
    </form>
  </body>
</html>