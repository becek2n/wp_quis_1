<?php
require("Koneksi.php");
	
class CNilai
{
	private $Nim;
	private $Nama;
	private $NilaiTugas;
	private $NilaiUTS;
	private $NilaiUAS;
	
	
	public function getNim(){
		return $this->Nim;
	}
	public function setNim($sNim){
		$this->Nim = $sNim ;
	}
	public function getNama(){
		return $this->Nama;
	}
	public function setNama($sNama){
		$this->Nama= $sNama ;
	}
	public function getNilaiTugas(){
		return $this->NilaiTugas;
	}
	public function setNilaiTugas($iNilaiTugas){
		$this->NilaiTugas = $iNilaiTugas ;
	}
	public function getNilaiUTS(){
		return $this->NilaiUTS;
	}
	public function setNilaiUTS($iNilaiUTS){
		$this->NilaiUTS = $iNilaiUTS ;
	}
	
	public function getNilaiUAS(){
		return $this->NilaiUAS;
	}
	public function setNilaiUAS($iNilaiUAS){
		$this->NilaiUAS = $iNilaiUAS ;
	}
	
	public function getNilaiAkhir(){
		return $this->NilaiAkhir;
	}
	public function setNilaiAkhir($iNilaiAkhir){
		$this->NilaiAkhir = $iNilaiAkhir ;
	}
	
	public function insert() {
		$insert = false;
		
		$sql = "insert into nilai(Nim, Nama, N_Tugas, N_UTS, N_UAS, N_Akhir) values('".$this->getNim()."','".$this->getNama()."','".$this->getNilaiTugas()."','".$this->getNilaiUTS()."','".$this->getNilaiUAS()."','".$this->getNilaiAkhir()."')";
		
		$obj = new CConnection();
		$obj->connect();
		
		$executesql = mysql_query($sql);
		if ($executesql){
			$insert = true;
		}
		else{
			$insert = false;
		}

		$obj->close();
			
		return $insert;
	}
	
	
}



?>