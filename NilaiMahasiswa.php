<?php
include('CNilai.php');

try{
	$obj = new CNilai();
	$obj->setNim($_POST['nim']);
	$obj->setNama($_POST['nama']);
	$obj->setNilaiTugas($_POST['nilaitugas']);
	$obj->setNilaiUTS($_POST['nilaiuts']);
	$obj->setNilaiUAS($_POST['nilaiuas']);
	
	$nilaiakhir = $_POST['nilaitugas'] + $_POST['nilaiuts'] + $_POST['nilaiuas'];
	
	$obj->setNilaiAkhir($nilaiakhir);
	
	$insert = $obj->insert();

	if ($insert == true){
		$tugas = $obj->getNilaiTugas() * 0.2;
		$UTS = $obj->getNilaiUTS() * 0.3;
		$UAS = $obj->getNilaiUAS() * 0.3;
		$hasil = $tugas + $UTS + $UAS;
		
		$gradenilai;
		if($hasil >= 0 and $hasil <= 40 )
		{
			$gradenilai= 'E';
		}
		else if($hasil >= 40 and $hasil <= 50 )
		{
			$gradenilai= 'D';
		}
		else if($hasil >= 50 and $hasil <= 62 )
		{
			$gradenilai= 'C';
		}
		else if($hasil >= 62 and $hasil <= 79 )
		{
			$gradenilai= 'B';
		}
		else if($hasil >= 79 and $hasil <= 100 )
		{
			$gradenilai= 'A';
		}
		
		echo('data successfully save');
		$html = '<table><tr><td colspan="3" align="center">Cetak Nilai</td></tr>';
		$html .= '<tr><td>Nim</td><td>:</td><td>'.$obj->getNim().'</td></tr>';
		$html .= '<tr><td>Nama</td><td>:</td><td>'.$obj->getNama().'</td></tr>';
		$html .= '<tr><td>Tugas</td><td>:</td><td>'.$tugas.'</td></tr>';
		$html .= '<tr><td>UTS</td><td>:</td><td>'.$UTS.'</td></tr>';
		$html .= '<tr><td>UAS</td><td>:</td><td>'.$UAS.'</td></tr>';
		$html .= '<tr><td>Nilai Akhir</td><td>:</td><td>'.$hasil.'</td></tr>';
		$html .= '<tr><td>Grade</td><td>:</td><td>'.$gradenilai.'</td></tr>';
		echo $html;		
	}
	else{

		echo "Terjadi kesalahan";
	}	
	
	$obj = null;
} catch (Exception $ex) {
	echo($ex);
}

?>