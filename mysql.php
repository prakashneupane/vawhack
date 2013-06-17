<?php

/**
* 
*/
class mysqlWorks
{
	
	function __construct()
	{
		$sql = "CREATE TABLE IF NOT EXISTS `report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `district` varchar(100) NOT NULL,
  `title` text NOT NULL,
  `story` mediumtext NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
	) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1";

   mysql_query($sql);
	}

	public function insert($district,$title,$story,$name,$phone,$email,$date){
		$sql = "INSERT INTO `report`(`id`, `district`, `title`, `story`, `name`, `phone`, `email`, `date`) VALUES ('',$district,$title,$story,$name,$phone,$email,$date)";
		$q = mysql_query($sql);
		if($q){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

	public function search($value='')
	{
		$sql = "SELECT * FROM `report` WHERE  title='$value'";
	}
}
?>