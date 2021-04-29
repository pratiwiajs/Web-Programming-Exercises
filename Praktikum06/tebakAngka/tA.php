<?php
if (isset($_COOKIE['username'])){
	if (isset($_COOKIE['randomBil']) == null){
		setcookie("randomBil", rand(0, 100), time()+24*3600,"/");
		echo "<p>Hallo ".$_COOKIE['username'].", nama Saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat antara 0-100. Silakan Anda menebak ya!!!</p>" ;
		?>
		<form method="post" action="tA.php">
			Bilangan tebakan Anda <input type="text" name="tebak">
			<input type="submit" name="submit" value="OK">
		</form>	
	<?php
	}
	if (isset($_COOKIE['randomBil']) != null) {
		if (isset($_POST['submit'])){
			if ($_POST['tebak'] > $_COOKIE['randomBil']) {
				echo "<p>Hallo, nama Saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat antara 0-100. Silakan Anda menebak ya!!!</p>" ;
				echo "<p>Wahhh.... masih salah ya,bilangan tebakan Anda terlalu tinggi</p>" ;
				?>
				<form method="post" action="tA.php">
					Bilangan tebakan Anda <input type="text" name="tebak">
					<input type="submit" name="submit" value="OK">
				</form>
				<?php
			}else if ($_POST['tebak'] < $_COOKIE['randomBil']){
				echo "<p>Hallo, nama Saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat 0-100. Silakan Anda menebak ya!!!</p>" ;
				echo "<p>Wahhh.... masih salah ya,bilangan tebakan Anda terlalu rendah</p>";
				?>
				<form method="post" action="tA.php">
					Bilangan tebakan Anda <input type="text" name="tebak">
					<input type="submit" name="submit" value="OK">
				</form>
				<?php
			}else if ($_POST['tebak'] == $_COOKIE['randomBil']){
				echo "<p>Selamat ya... Anda benar, saya telah memilih bilangan ".$_COOKIE['randomBil'].".</p>";
				setcookie("randomBil", null, time()+24*3600,"/");
				echo "<p><a href='tA.php'>Replay</a></p>";
				echo "<p><a href='logout.php'>Logout</a></p>";
			}
		}	
	}
}if (!isset($_COOKIE['username'])){
	echo "<p>Silahkan <a href='form.html'>Login</a> dulu!!!</p>";
}
?>