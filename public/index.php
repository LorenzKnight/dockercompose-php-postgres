<?php
// require_once('connections/conexion.php');
require_once('logic/index_be.php');
?>
<html>
<head>
<meta charset="iso-8859-1">
<title><?php echo $pageName; ?></title>
<link href="css/index.css" rel="stylesheet" type="text/css"  media="all" />

</head>
<body>
    <?php 
        $user = u_all_info();

        foreach($user as $item)
        {
        echo $item['name'];
        }
    ?>
</body>
</html>