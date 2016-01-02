<?php
//resolution.class.php
	
	/**
	* resolution class
	*/
	class res 
	{
		public:

		$userid;	//userid of user
		$title;		//resulatoin title
		$text; 		//resolution text
		$mode;		//resolution visibility mode
	
		function read_table($uid)		//$uid == $userid
		{
			$sql_query="SELECT * FROM `res` WHERE `uid`='$uid'";
			$sql_result=$connection->query($sql_query);
			$count=$sql_result->num_rows;

			if ($count==0)		//no entry exist 
			{
				echo "F**k off";
			} 
			else
			{
				while ($rows=$sql_result->fetch_array())
				{
					
				}
			}
			
		}
	}
?>
