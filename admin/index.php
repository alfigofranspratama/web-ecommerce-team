<?php
require_once "connect.php";
$Ryugen = new Database(HOST,USER,PASS,DB);
$DATA = $Ryugen -> query("SELECT * FROM ".TABEL);
?>
<!Doctype html>
<!-- gw ngambil tugas ini -->
<!-- RyugenXD-->
<html lang="id">
    <head>
    	 <meta charset="UTF-8">
         <meta name="description" content="INDEX ADMINISTRATOR">
    	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-calable=no"/>
        <title>Page Administrator</title>
        <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css"/>
     </head>
    <body>
    	<div class="container">
    	   <div class="row">
    	       
    	   </div>
    	</div>
     <script src="../asset/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>