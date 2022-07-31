<?php
require_once "connect.php";
$Ryugen = new Database(HOST,USER,PASS,DB);
$DATA = $Ryugen -> query("SELECT * FROM ".TABEL);
?>
<!Doctype html>
<!-- gw ngambil tugas ini -->
<!-- RyugenXD-->
	
<!-- BEGIN HEADER -->
<html lang="id">
    <head>
    	 <meta charset="UTF-8">
         <meta name="description" content="Ini halaman INDEX ADMINISTRATOR bang"/>
         <meta name="keywords" content="System administrator by ryugen"/>
         <meta name="author" content="RyugenXd">
    	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-calable=no"/>
        <title>Page Administrator</title>
        <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css"/>
     </head>
    <body>
    	
<!--END HEADER -->
    	<div class="container">
    	   <div class="row">
    	       
    	   </div>
    	</div>
     <script src="../asset/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>