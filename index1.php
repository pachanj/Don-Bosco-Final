<!DOCTYPE html>
<html>
<head>
	<?php
	mysql_connect("localhost","root","Marvin123456") or die
	("Error en la conexion");
	mysql_select_db("4physics") or die ("Error en la base de datos");
	 ?>
	<meta charset="utf-8">
	<title>Don Bosco</title>
	<meta name ="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximun-scale=3.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="estilo.css">

</head>
<body>




	<!-- The Modal -->
	<div id="id01" class="w3-modal">
	  <div class="w3-modal-content">
	    <div class="w3-container">
	      <span onclick="document.getElementById('id01').style.display='none'"
	      class="w3-button w3-display-topright">&times;</span>
				<center>
<h2>Login</h2>
<form class="" action="index1.php" method="post">


<input type="text" name="user" placeholder="Usuario"><br>
<br>
<input type="password" name="pass" placeholder="Contraseña"><br>
<br>
<input type="submit" name="btnlogin" value="Login">
<br><br>
<br><br><br><br>
</form>
<?php
if(isset($_POST['btnlogin']) && !empty($_POST['user'])
               && !empty($_POST['pass'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];

    $sql="SELECT * FROM teachers WHERE `user`='$user' AND `password`='$pass'";
    $consulta=mysql_query($sql);
    $numero_filas = mysql_num_rows($consulta);
    echo $numero_filas;
    if($numero_filas>0){
    header("Location: http://localhost/DonBosco/menu1.php");

}else{
  echo "<script>alert('Usuario/Contraseña no validos')</script>";
}

}
 ?>
</center>
	    </div>
	  </div>
	</div>

<header class="main-header">

</header>
<div class="container container--flex">
		<div class="logo-container column column--33">
				<h1 class="logo">Don Bosco</h1>
		</div>
	<div class="column column--33">

			<a href="menu.php" class="btn btn--contact">Login</a>
			<!-- Trigger/Open the Modal -->
		<button onclick="document.getElementById('id01').style.display='block'"
		class="btn btn--contact" >Maestro</button>
		</div>
<section class="banner">
	<img src="fondo.jpg" alt="" class="banner__img">
	<div class="banner__content">Math and science done right</div>
		<h2 class="today-special__title">Master key ideas in math, science, and computer.</h2>
		<a href="" class="btn btn--contact">Sing up for free</a>
</section>

<main class="main">
	<section class="group group--color">
		<div class="container">
			<h2 class="main__title">Bienvenido</h2>
			<p class="main__txt">Descripcion</p>
		</div>
	</section>
	<section class="group group--color">
		<div class="container">
			<h2 class="main__title">Efectivo y divertido</h2>
			<p class="main__txt">Descripcion</p>
		</div>
	</section>
	<section class="group group--color">
		<div class="container">
			<h2 class="main__title">Instructores principales</h2>
			<p class="main__txt">Descripcion</p>
		</div>
	</section>
	<section class="group group--color">
		<div class="container">
			<h2 class="main__title">Aprendizaje del tamaño de un bocado</h2>
			<p class="main__txt">Descripcion</p>
		</div>


	</section>

	<section class="group main__about__description">
		<div class="container container--flex">
			<div class="column column--50">
			<img src="fondo2.jpg" alt="">
		</div>
		<div class="column column--50">
			<h3 class="column__title">¿Poqué aprender en nombre?</h3>
			<p class="column__txt">Descripcion</p>
				<img src="fondo2.jpg" alt="">
		</div>
			<div class="column column--50">
			<h3 class="column__title">Termina tu dia
un poco más inteligente</h3>
			<p class="column__txt">Descripcion</p>

		</div>

		<div class="column column--50">
			<h3 class="column__title">Experimente el aprendizaje permanente de clase mundial.
		</h3>
			<p class="column__txt">Descripcion</p>
				<img src="fondo2.jpg" alt="">
		</div>

		</div>



	</section>
	<section class="group today-special">
		<h2 class="today-special__title">Caracteristicas</h2>
		<div class="container container--flex">
			<div class="column column--50-25">
					<img src="plato2.jpg" alt="" class="today-special__img">
					<div class="today-special__title">Nuevos retos diarios</div>
					<div class="today-special__price">Descripcion</div>
			</div>
			<div class="column column--50-25">
					<img src="plato3.jpg" alt="" class="today-special__img">
					<div class="today-special__title">Aprende en cualquier lado</div>
					<div class="today-special__price">Descripcion</div>
			</div>


		</div>
	</section>


</main>
<footer class="main-footer">
		<div class="container container--flex">

			<div class="column column--33">
				<h2 class="column__title">¿Por qué boom?</h2>
				<p class="column__txt">Descripcion</p>
			</div>
				<div class="column column--33">
				<h2 class="column__title">Contáctanos</h2>
				<p class="column__txt">2 Calle 5-51, Guatemala</p>
				<p class="column__txt">55594771</p>
				<p class="column__txt">lopezrosales9@gmail.com</p>
			</div>
				<div class="column column--33">
				<h2 class="column__title">Siguenos en nuestras redes</h2>
				<p class="column__txt"><a href="" class="icon-facebook">Facebook</a></p>
				<p class="column__txt"><a href="" class="icon-twitter">Twitter</a></p>
				<p class="column__txt"><a href="" class="icon-emal">Email</a></p>
				</div>
				<p class="copy">C 2019 Boom | Todos los derechos reservados</p>
		</div>
</footer>
<script src="menu.js"></script>
</body>
</html>
