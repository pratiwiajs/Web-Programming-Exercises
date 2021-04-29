<?php
// jika ada cookie username tersimpan
if (isset($_COOKIE['username']) != null){
	setcookie("randomBil", null, time()+24*3600,"/");
	header("Location:tA.php");
}
// jika belum ada cookie username
else {
	?>
	<h1>GAME TEBAK ANGKA</h1>
	<form method="post" action="startGame.php">
		Username <input type="text" name="username">
		<input type="submit" name="login" value="MULAI">
	</form>	
	<?php
	if (isset($_POST['login'])){
		setcookie("username", $_POST['username'], time()+7*24*3600,"/");
		setcookie("randomBil", null, time()+24*3600,"/");

		header("Location:tA.php");
	}
}	
?>