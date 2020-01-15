<?php include_once 'header.php'; ?>

<div class="container">
	<h3>Form Penilaian Mahasiswa</h3>
	<hr>

<form action="hasil-nilai-mahasiswa.php" method="POST">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label"  align="right">Nama Lengkap</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="nama_lengkap">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <label class="col-form-label col-sm-2 pt-0" align="right">Program Studi</label>
      <div class="col-sm-10">
        <div class="form-check" style="margin-left: 17px">
          <input class="form-check-input" type="radio" checked name="program_studi" value="Sistem Informasi">
          <label class="form-check-label">
            Sistem Informasi
          </label>
        </div>
        <div class="form-check" style="margin-left: 17px">
          <input class="form-check-input" type="radio" name="program_studi" value="Teknik Informatika">
          <label class="form-check-label">
            Teknik Informatika
          </label>
        </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label" align="right">Semester</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputEmail3" name="semester">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label" align="right">Mata Kuliah</label>
    <div class="col-sm-10">
      <select id="inputState" class="form-control" name="mata_kuliah">
        <option selected>Pemograman Web</option>
        <option>Basis Data 2</option>
        <option>Matematika Diskrit</option>
        <option>Bahasa Inggris</option>
        <option>Tata Kelola TI</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label" align="right">Nilai</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputEmail3" name="nilai">
    </div>
  </div>
  <br>
  <div class="form-group row" style="margin-left: 175px">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
</div>

<?php include_once 'header.php'; ?>