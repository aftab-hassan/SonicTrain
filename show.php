<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sonic Training</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="row">
    <div class="col-sm-12" style="background:url('image1.jpg');color:white;"><center><h1>Sonic Train</h1></center>
<center>A framework for dynamic CSV viewing</center></div>
</div>
<div class="row">
  <div class="jumbotron" style=" background-color:skyblue;">
<?php

//include('script.php');
include('train.php');
$my_file = 'file.txt';
		$myfile = fopen($my_file, "r") or die("Unable to open file!");
 while($a=fread($myfile,filesize($my_file)))
 echo $a;
 fclose($myfile);
?>
</div>
</div>
</div>
</body>
</html>
