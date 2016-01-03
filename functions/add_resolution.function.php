<?php
//write_resolution.function.php
	
	function add_resolution()
	{
		$title=$_POST['title'];
		$text=$_POST['text'];
		$acess=1;
		
		if (isset($title) && isset($text) )
		{
			if (!empty($head) && !empty($comment) ) 
			{
				$title=htmlentities($title);
				$text=htmlentities($text);

				include '/dbms/dbms_imp.php';

				$sql = "INSERT INTO `res` (`rid`, `uid`, `title`, `text`, `visibility`) 
						VALUES (NULL, '$uid', '$title', '$text', 'public');";
				
				$mysql_query_run=$connection->query($sql);	//data adding query

				if(!$mysql_query_run)
				{
					// error occurs
					echo "<br>Error writing data".@mysqli_error($connection);
				}
				else
				{	//sucess in adding the data.
					echo "Resolution added";
					//header('location: $current_file');	//to refresh current page.
				}
			}
			else
			{
				echo "All fields are necessary";
				include '/forums/resolution.forum.php';
			}
		}
		else
		{
			include '/forums/resolution.forum.php';
		}
	}
?>

<?php