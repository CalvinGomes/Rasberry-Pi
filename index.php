<?php
$file = "buttonStatus.txt";
$handle = fopen($file, 'w+');
if(isset($_POST['ON'])){
    $onstring = 'ON';
    fwrite($handle, $onstring);
    fclose($handle);
}else if(isset($_POST['OFF'])){
    $offstring = 'OFF';
    fwrite($handle, $offstring);
    fclose($handle);
}
?>

<html>

<head>
    <title>Rasberry Pi 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link rel="stylesheet" type="text/css" href="css/boys.css">
</head>

<body>
    <div id="boys">
        <h3>FAN</h3>
        <form method="POST">
            <button type="submit" id="ON" name="ON" value="ON">ON</button>
            <button type="submit" id="OFF" name="ON" value="OFF">OFF</button>
        </form> 
    </div>
    <script src="script/jquery/jquery-3.3.1.min.js"></script>
    <script src="script/script.js"></script>
</body>

</html>