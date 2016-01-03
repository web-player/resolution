<?php
//resolution.class.php
	
	/**
	* resolution class
	*/
	class res 
	{
		public $userid;		//userid of user
		public $title;		//resulatoin title
		public $text; 		//resolution text
		public $mode;		//resolution visibility mode
	
		public function read_table($uid)		//$uid == $userid
		{
			include '/dbms/dbms_imp.php';
			
			$sql_query="SELECT * FROM `res` WHERE `uid`='$uid'";
			$sql_result=$connection->query($sql_query);
			$count=$sql_result->num_rows;

			if ($count==0)		//no entry exist 
			{
				echo "Nothing entered";
			} 
			else
			{
				while ($rows=$sql_result->fetch_array())
				{
					$this->userid=$uid;
					$this->title=$rows[1];
					$this->text=$rows[2];
					$this->mode=$rows[3];
					
					echo "<p>$this->title</p></br><p>$this->text</p>";
				}
			}	
		}
	}
?>
