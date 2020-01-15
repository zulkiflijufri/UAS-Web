<?php 

include_once 'Person.php';

class Mahasiswa extends Person {

	private $nim;
	private $prodi;
	private $angkatan;
	private $ipk;

	public function __construct($firstname, $lastname, $gender,$nim, $prodi, $angkatan) {
		parent::__construct($firstname, $lastname, $gender);
		$this->nim = $nim;
		$this->prodi = $prodi;
		$this->angkatan = $angkatan;
	}

	public function getProdiAngkatan() {
		echo "Prodi: ".$this->prodi."Angkatan: ".$this->angkatan;
	}
}

 ?>