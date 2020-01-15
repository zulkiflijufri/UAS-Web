<?php

class NilaiMahasiswa {

	public function getStatusKelulusan($nilai) {
	if ($nilai > 55) {
		return "LULUS";
	} else {
		return "TIDAK LULUS";
	}
}

public function getGrade($nilai) {
	if ($nilai >= 0 && $nilai <= 35) {
		return "E";
	}
	elseif ($nilai >= 36 && $nilai <= 55) {
		return "D";
	}
	elseif ($nilai >= 56 && $nilai <= 69) {
		return "C";
	}
	elseif ($nilai >= 70 && $nilai <= 84) {
		return "B";
	}
	elseif ($nilai >= 85 && $nilai <= 100) {
		return "A";
	}
	elseif ($nilai < 0 || $nilai > 100) {
		return "I";
	}
}

public function getPredikat($grade) {
		switch ($this->getGrade($grade)) {
			case 'E':
				echo "Sangat Kurang";
				break;
			case 'D':
				echo "Kurang";
				break;
			case 'C':
				echo "Cukup";
				break;
			case 'B':
				echo "Memuaskan";
				break;
			case 'A':
				echo "Sangat Memuaskan";
				break;
			default:
				echo "Tidak Ada";
				break;
		}
	}
}

?>	