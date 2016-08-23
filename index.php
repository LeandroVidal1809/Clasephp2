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
		
		echo "<br>";
		echo"-------------------------------------------------------------------------";
		echo "<br>";
		echo "Ejercicio 9";
		echo "<br>";
		echo "<br>";

			$lapicera= array('color'=>'Celeste', 'marca'=>'Pencil','trazo'=>'fino','precio'=>10);
			$lapicera1= array('color'=>'Blanca', 'marca'=>'Faber','trazo'=>'Gruesa','precio'=>12);
			$lapicera2= array('color'=>'Azul', 'marca'=>'otro','trazo'=>'medio','precio'=>9);

			

			
			foreach ($lapicera as $key => $value) 
			{
				echo $key." de la lapicera: ".$value;
				echo "<br>";
			}
					echo "<br>";
			
				foreach ($lapicera1 as $key => $value) 
			{
				echo $key." de la lapicera: ".$value;
				echo "<br>";
			}
					echo "<br>";
			
				foreach ($lapicera2 as $key => $value) 
			{
				echo $key." de la lapicera: ".$value;
				echo "<br>";
			}


					echo "<br>";
		echo"-------------------------------------------------------------------------";
		echo "<br>";
		echo "Ejercicio 10";
		echo "<br>";
		echo "<br>";
	
			$lapicera= array('color'=>'Celeste', 'marca'=>'Pencil','trazo'=>'fino','precio'=>10);
			$lapicera1= array('color'=>'Blanca', 'marca'=>'Faber','trazo'=>'Gruesa','precio'=>12);
			$lapicera2= array('color'=>'Azul', 'marca'=>'otro','trazo'=>'medio','precio'=>9);

			$lista=array($lapicera,$lapicera1,$lapicera2);

		foreach($lista as $lapiz)
		{

				echo "La lapicera es: " . $lapiz['color'];
				echo "<br>";


		}

		?> 

</body>
</html>