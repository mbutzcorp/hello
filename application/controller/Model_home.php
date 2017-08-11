<?php 

require_once 'database.php';
class database_home{


	function __construct(){
		mysql_connect(hostname, user, password);
		mysql_select_db(db_name);
	}


	function select_home(){
		$query_select = mysql_query("select * from tb_project");
		while($d = mysql_fetch_array($query_select)){
			$hasil[] = $d;
		}
		return $hasil;
	}



	
}

?>