<?php
	
	$fname=$current_user->fname ;
	//echo "$fname";
	include_once '/functions/islogin.function.php';
	include '/core.inc.php'
?>		
		<div id="menu">
			<ul>
			<?php
				
				if ($debug && $menu) 
				{
					$islogin=islogin();
					echo "$islogin<br>$current_file";
				}
				
				if (islogin()==0) 
				{
					if ($current_file=="/resolution/index.php") 
					{
					?>	
						<li class="current_page_item"><a href="index.php" accesskey="1" title="">Home</a></li>
						<li><a href="login.php" accesskey="2" title="">Login</a></li>
					<?php
					} 
					elseif ($current_file=="/resolution/login.php") 
					{
					?>	
						<li ><a href="index.php" accesskey="1" title="">Home</a></li>
						<li class="current_page_item"><a href="login.php" accesskey="2" title="">Login</a></li>
					<?php
					}
				} 
				elseif (islogin()==1) 
				{
					if ($current_file=="/resolution/index.php") 
					{
					?>	
						<li class="current_page_item"><a href="index.php" accesskey="1" title=""><?php echo "$fname";?></a></li>
						<li><a href="logout.php" accesskey="2" title="">Logout</a></li>
					<?php
					}
				}			
					?>
			</ul>
		</div>