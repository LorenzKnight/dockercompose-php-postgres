<?php require_once('logic/start_be.php');?>

<html>
<head>
<meta charset="iso-8859-1">
<title><?php echo $pageName; ?></title>
<!-- <link rel="shortcut icon" href="favicon-32x32.png"> -->
<link href="css/styles.css" rel="stylesheet" type="text/css"  media="all" />
<link href="css/header.css" rel="stylesheet" type="text/css"  media="all" />
<link href="css/post_wall_profile.css" rel="stylesheet" type="text/css"  media="all" />
<script defer src="js/start_page.js"></script>
<!-- <script src="js/jquery.taconite.js"></script> -->
<!-- <script src="js/jquery-1.11.3.min.js"></script> -->

</head>
<body 
    onload="
    bridge(
        '<?= $user['pic']; ?>',
        '<?= $user['name']; ?>', 
        '<?= $user['surname']; ?>', 
        <?= $user['rank']; ?>
    ) 
    // postwall('text2')
    ">
    <?php include("src/wrap_start.php"); ?>
</body>
</html>