<?php 

class Person {

	protected $firstname;
	protected $lastname;
	protected $birthplace;
	protected $birthdate;
	protected $gender;
	protected $address;

	public function __construct($firstname, $lastname, $gender) {
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->gender = $gender;
	}

	public function getFullName() {
		echo "Nama Lengkap : ".$this->firstname.' '.$this->lastname;
	}

	public function getAge($birthdate) {
		return 'Umur: '.date('Y') - $birthdate;
	}
}

 ?>