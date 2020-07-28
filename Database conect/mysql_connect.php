<?php 


try {
	$conexion = new PDO('mysql:host=127.0.0.1;dbname=clientes','root', '');
	//Prepared statments
	$statment = $conexion->prepare('SELECT * FROM USUARIO where id = :id ;');
	$statment->execute(
		array(':id' => 'JOSEFO')
	);
	$resultado = $statment->fetch();
	print_r($resultado);

} catch (\Throwable $th) {
	echo "Error:" . $th->getMessage();
}


///INSERT INTO `usuario` (`usuario_id`, `id`, `nombres`, `correo`, `clave`, `semilla`, `registro_fecha`, `actualizado_fecha`) VALUES ('1', 'JOSEFO', 'MACIEL', 'MACIELGALEANO.JH@GMAIL.COM', 'ANIMA162', 'QDQDQDQD', '2020-07-21 21:29:53', '2020-07-30 21:29:53');
?> 



