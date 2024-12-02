<?php


try{
	$conexion=new PDO('mysql: host=localhost; dbname=lenguaje' , 'root' , '');
	
}
catch(Exeption $e){
	echo "error ". $e-> getMessage();
	

}
?>



