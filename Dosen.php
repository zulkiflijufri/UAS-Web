<?php 

include_once 'Person.php';

class Dosen extends Person {

	private $nidn;
	private $jabatan_fungsional;
	private $homebase_prodi;
	private $golongan;
	private $tahun_masuk;

	public function __construct($firstname, $lastname, $gender, $nidn, $jabatan_fungsional) {
		parent::__construct($firstname, $lastname, $gender);
		$this->nidn = $nidn;
		$this->jabatan_fungsional = $jabatan_fungsional;
	}

	public function getLamaKerja($tahun_masuk) {
		return "Lama Kerja: ".date('Y') - $tahun_masuk; 
	}
}

 ?>