<?php
	//profile.php
	$title="Home";
	include_once 'head.php';
	$uid;

	include '/classes/user.class.php';

	$current_user = new user();
	$current_user->read_user($uid);
?>
<body>
<?php
	include_once 'title.php';
?>
<div id="wrapper2">
	<div id="welcome" class="container">
		<div class="title">
			<h2>Add a new Resolution</h2>
		</div>
		<?php
			include '/functions/add_resolution.function.php';
				add_resolution();
		?>
	</div>
</div>
<div id="wrapper3">
	<div id="three-column" class="container"></br></br>
		<?php
			include '/classes/resolution.class.php';
			$res_obj = new res();

			$res_obj->read_table($uid);
		?>
	</div>	
</div>
<?php
	include 'footer.php';
?>
</body>
</html>
