<?php 
	$id = $_GET['id'];
	$edit = $db_con->query("SELECT * FROM judul_ta WHERE id_ta='$id'");
	$row = $edit->fetch(PDO::FETCH_ASSOC);
	
?>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-body">
    <form action="" method="POST" class="form-horizontal" role="form">
      <div class="form-group">
        <center>
          <legend>Edit Judul Tugas Akhir </legend>
        </center>
      </div>

      <div class="form-group">
        <label for="input" class="col-sm-4 control-label">NIM Mahasiswa :</label>
        <div class="col-sm-6">
          <input type="hidden" name="id_ta" value="<?php echo $id; ?>">
          <input type="number" maxlength="10" name="nim" id="input" class="form-control"
            value="<?php echo $row['nim']; ?>" readonly required="required"
            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
        </div>
      </div>

      <div class="form-group">
        <label for="input" class="col-sm-4 control-label">Judul 1 :</label>
        <div class="col-sm-6">
          <input type="hidden" name="id_ta" value="<?php echo $id; ?>">
          <textarea type="text" name="judul1" id="input" class="form-control"
            required="required"><?php echo $row['judul1']; ?></textarea>
        </div>
      </div>

      <div class="form-group">
        <label for="input" class="col-sm-4 control-label">Judul 2 :</label>
        <div class="col-sm-6">
          <input type="hidden" name="id_ta" value="<?php echo $id; ?>">
          <textarea type="text" name="judul2" id="input" class="form-control"
            required="required"><?php echo $row['judul2']; ?></textarea>
        </div>
      </div>

      <div class="form-group">
        <label for="input" class="col-sm-4 control-label">Judul 3 :</label>
        <div class="col-sm-6">
          <input type="hidden" name="id_ta" value="<?php echo $id; ?>">
          <textarea type="text" name="judul3" id="input" class="form-control"
            required="required"><?php echo $row['judul3']; ?></textarea>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-6 col-sm-offset-4">
          <button name="edit_judulta" type="submit" class="btn btn-primary">Update</button>
          <a href="?apps=judulta" class="btn btn-warning">Batal</a>
        </div>
      </div>
    </form>
  </div>
</div>