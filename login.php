<?php
	//include_once 'core.inc.php';
	//echo "$current_file \n";
	//echo "$http_referer\n";
	$title="Login";
	include_once 'head.php';
?>
<body>
<?php
	include_once 'title.php';
?>
<div id="wrapper2">
	<div id="welcome" class="container">
		<div class="title">
			<h2>login</h2>
		</div>
		<p>login to see whats going on</p>
		<p>New here click <a href="register.php">here</a> to register<p>
	</div>
</div>
<div id="wrapper3">
	<div id="three-column" class="container"></br></br>
		<?php
			include 'sys/login.sys.php'; 
		?>
	</div>	
</div>
<?php
	include 'footer.php';
?>
</body>
</html>
