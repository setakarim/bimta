<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-body">
    <form action="" method="POST" class="form-horizontal" role="form">
      <div class="form-group">
        <center>
          <legend>Tambah Materi Bimbingan</legend>
        </center>
      </div>

      <div class="form-group">
        <label for="input" class="col-sm-4 control-label">NIM Mahasiswa :</label>
        <div class="col-sm-6">
          <input type="number" maxlength="10" name="nim" id="input" class="form-control" readonly=""
            value="<?php if ($_SESSION['user_level']=='mahasiswa') {echo $row2['nim'];} else {echo "";} ?>"
            required="required"
            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
        </div>
      </div>

      <div class="form-group">
        <label for="input" class="col-sm-4 control-label">Subjek Bimbingan :</label>
        <div class="col-sm-6">
          <input type="text" name="subject" id="input" class="form-control" value=""
            placeholder="Subjek akan otomatis menjadi materi dalam kartu bimbingan" required="required">
        </div>
      </div>

      <div class="form-group">
        <label for="inputLevel" class="col-sm-4 control-label">Status Bimbingan :</label>
        <div class="col-sm-4">
          <select name="status_bimbingan" id="inputLevel" class="form-control" required="required">
            <option>-- Pilih Status Bimbingan --</option>
            <option value="Bimbingan Judul">Bimbingan Judul</option>
            <option value="Bimbingan 1">Bimbingan 1</option>
            <option value="Bimbingan 2">Bimbingan 2</option>
            <option value="Bimbingan 3">Bimbingan 3</option>
            <option value="Bimbingan 4">Bimbingan 4</option>
            <option value="Bimbingan 5">Bimbingan 5</option>
            <option value="Bimbingan 6">Bimbingan 6</option>
            <option value="Bimbingan 7">Bimbingan 7</option>
            <option value="Bimbingan 8">Bimbingan 8</option>
            <option value="Bimbingan 9">Bimbingan 9</option>
            <option value="Bimbingan 10">Bimbingan 10</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-4">
          <button name="tambah_materi" type="submit" class="btn btn-primary">Tambah Materi</button>
          <a href="?apps=materi" class="btn btn-warning">Batal</a>
        </div>
      </div>
    </form>
  </div>
</div>