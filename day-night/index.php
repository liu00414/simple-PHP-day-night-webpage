<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include("includes/header.inc.php"); ?>
    <title>Webpage Includes</title>
</head>

<body class="<?php 
             date_default_timezone_set("America/New_York");
             $t=date('H');
if ($t >= '6'&& $t<= '18') {
    
    echo 'day';
} else {
    
    echo 'night';
}  ?>">
     <h1>Day - Night</h1>
    <?php
    echo 'The current time is ' . date('Y-m-d') . ' ' . date('h:i:sa');
    ?>
    
    <script>
    //setInterval(function(){location.reload(true); }, 1000);
        //console.log('a')
    </script>
</body>
</html>