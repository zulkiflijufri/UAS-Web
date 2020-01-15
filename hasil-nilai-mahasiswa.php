<?php 

include_once 'header.php'; 
include_once 'fungsi-nilai.php';

$namaLengkap = $_POST["nama_lengkap"];
$programStudi = $_POST["program_studi"];
$semester = $_POST["semester"];
$matkul = $_POST["mata_kuliah"];
$nilai = $_POST["nilai"];


$mahasiswa = new NilaiMahasiswa;

?>



<div class="container">
	<h3>Hasil Penilaian Mahasiswa</h3>
	<hr>
	<div class="form-group row">
    	<label class="col-sm-2 col-form-label"><b>Nama Lengkap</b></label>
    	<div class="col-sm-10">
      		<label class="col-sm-2 col-form-label"><?php echo $namaLengkap; ?></label>
    	</div>
  	</div>
  	<div class="form-group row">
    	<label class="col-sm-2 col-form-label"><b>Program Studi</b></label>
    	<div class="col-sm-10">
      		<label class="col-sm-6 col-form-label"><?php echo $programStudi; ?></label>
    	</div>
  	</div>
  	<div class="form-group row">
    	<label class="col-sm-2 col-form-label"><b>Semester</b></label>
    	<div class="col-sm-10">
      		<label class="col-sm-2 col-form-label"><?php echo $semester; ?></label>
    	</div>
  	</div>
  	<div class="form-group row">
    	<label class="col-sm-2 col-form-label"><b>Mata Kuliah</b></label>
    	<div class="col-sm-10">
      		<label class="col-sm-6 col-form-label"><?php echo $matkul; ?></label>
    	</div>
  	</div>
  	<div class="form-group row">
    	<label class="col-sm-2 col-form-label"><b>Nilai</b></label>
    	<div class="col-sm-10">
      		<label class="col-sm-2 col-form-label"><?php echo $nilai; ?></label>
    	</div>
  	</div>
  	<div class="form-group row">
    	<label class="col-sm-2 col-form-label"><b>Status Kelulusan</b></label>
    	<div class="col-sm-10">
      		<label class="col-sm-2 col-form-label"><?php echo $mahasiswa->getStatusKelulusan($nilai); ?></label>
    	</div>
  	</div>
  	<div class="form-group row">
    	<label class="col-sm-2 col-form-label"><b>Grade</b></label>
    	<div class="col-sm-10">
      		<label class="col-sm-2 col-form-label"><?php echo $mahasiswa->getGrade($nilai); ?></label>
    	</div>
  	</div>
  	<div class="form-group row">
    	<label class="col-sm-2 col-form-label"><b>Predikat</b></label>
    	<div class="col-sm-10">
      		<label class="col-sm-6 col-form-label"><?php echo $mahasiswa->getPredikat($nilai); ?></label>
    	</div>
  	</div>
</div>

<?php include_once 'footer.php'; ?>