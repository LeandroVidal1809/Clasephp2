<html>
<head>
	<title>Vidal</title>
</head>
<body>
		<h1>Clase Numero 2</h1>

		<?php
		echo"-------------------------------------------------------------------------";
		echo "Ejercicio 8";
		echo "<br>";

			$dato=0;
			$v[1]=90;
			$v[30]=7;
			$v['e']=99;
			$v['hola']='Mundo';

			var_dump($v);



				foreach ($v as $dato) 
				{
					echo "<br>";
					echo $dato;
				}
					echo "<br>";

					echo "CON CLAVE Y VALOR";
				
				$v2=array (1=>90,30=>7,"e"=>99,"hola"=>"Mundo" );
				echo "<br>";
				var_dump($v2);
					echo "<br>";
				foreach ($v2 as $key => $value)
				 {
					echo "<br>";
					echo "<br>";
					echo $key . " => " . $value;
				}
		?>

</body>
</html>