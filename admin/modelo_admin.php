<?php include '../HEADER.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
		if(($_SESSION['id']!=1) || (!isset($_SESSION['login'])) && (!isset($_SESSION['senha']))){
			echo "<script>alert('Você não está logado ou não tem o nível de acesso necessário!')</script>";
			echo "<script>window.location.replace('https://guilherme.cerestoeste.com.br/login.php');</script>";
		}else{
			$logado = $_SESSION['login'];
			$func = $_SESSION['func'];
			$senh = $_SESSION['senha'];
			$ide = $_SESSION['id'];
		}
		include '../database/db_connection.php';
		$con=OpenCon();
		$logado = $_SESSION['login'];
		$func = $_SESSION['func'];
		$senh = $_SESSION['senha'];
		$ide = $_SESSION['id'];
		?>
		<main>
			<div class="content text-break">
				<h1 id="t" class="text-justify"></h1>
				<p class="text-justify"></p>
			</div>
		</main>
		<?php include '../footer.html'; ?>
	</body>
</html>