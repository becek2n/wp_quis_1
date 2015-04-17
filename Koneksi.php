<?php
class CConnection 
{	
	var $koneksi;
		
	public function connect()
	{
		$server = 'localhost';
		$db = 'quis_11150021';
		$user = 'root';
		$password = '';
		
		$this->koneksi = mysql_connect($server,$user, $password) or die(mysql_error());
		if ($this->koneksi){
			mysql_select_db($db);
		}
		else{
			echo ('koneksi ke database gagal');
		}
	}
	
	public function close()
	{
		mysql_close($this->koneksi);
	}
}
?>