<?php
	//include_once 'core.inc.php';
	//echo "$current_file \n";
	//echo "$http_referer\n";
	$title="Register";
	include_once 'head.php';
	include 'core.inc.php';
?>
<body>
<?php
	include_once 'title.php';
?>
<div id="wrapper2">
	<div id="welcome" class="container">
		<div class="title">
			<h2>Register</h2>
		</div>
		<p>Register to see whats going on</p>
	</div>
</div>
<div id="wrapper3">
	<div id="three-column" class="container"></br></br>
		<?php
			include 'sys/register.sys.php'; 
		?>
	</div>	
</div>
<?php
	include 'footer.php';
?>
</body>
</html>
