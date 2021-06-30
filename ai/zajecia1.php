<html>
<head>
	<title>Title</title>
</head>
<body>
	<h1>heading</h1>
	<p>paragraph</p>
	<?php
	echo "echo";
	$x = 10;
	$y = 20;
	print("printing variables...." . $x . " ... " . $y);
	$a = 1;
	$b = 2;
	$c = -3;
	$delta = $b*$b - 4*($a*$c);
	 if($delta>0){
	 $x1 = (-sqrt($delta) - $b)/(2*$a);
	 $x2 = (sqrt($delta) - $b)/(2*$a);
	 echo "Pierwiastki: ".$x1.", ".$x2;
	 }
	 else{
	 if($delta==0){
	 $x1 = (-$b/(2*$a));
	 echo "Pierwiastek: ".$x1;
	 }
	 else{
	 echo "Brak pierwiastków rzeczywistych";
	 }
	 }

	 for($i = 0; $i<10 ;$i++){
	 print("  ".$i);
	 }
	?>
</body>
</html>