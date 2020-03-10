<html>
<head>
	
</head>
<body>
 <?php 
  $string = "10 09 2019";
  $string = str_replace(" ", "-", $string);
$_firstDate = date("m-d-Y", strtotime($string));
  $tgl = strtotime($_firstDate);
  var_dump($tgl);
?>
</body>
</html>