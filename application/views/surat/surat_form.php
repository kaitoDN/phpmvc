
<div class="container">
	<h2>Penginputan Data kapal </h2>
	<br>
	<div class="container">
	<form action="" method="POST"> 
  <div class="form-group">
    <label>NAMA KAPAL</label>
    <input class="form-control" id="" class="Nama_Kapal" name="Nama_Kapal" value="<?= set_value('Nama_Kapal',$record->Nama_Kapal);?>" placeholder="Masukkan Nama Kapal" required>
  </div>
  <br> 
  <div class="form-group">
    <label >NO SO</label>
    <input class="form-control" id="No_So" class="No_So" name="No_So" placeholder="Masukkan No SO" value="<?= set_value('No_So',$record->No_So); ?>" required >
  </div>
  <br> 
  <div class="form-group">
    <label >JENIS BERKAS</label>
    <input class="form-control" id="Jenis_Berkas" class="Jenis_Berkas" name="Jenis_Berkas" value="<?= set_value('Jenis_Berkas',$record->Jenis_Berkas); ?>" required>
  </div>
  <br>
  <div class="form-group">
    <label>TANGGAL</label>
    <input type="date" class="date" id="Tanggal" class="Tanggal" name="Tanggal" value="<?= set_value('Tanggal',$record->Tanggal); ?>"  required>
  </div>
  <!-- <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Input file</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div> -->
  
<br>
  <button type="submit" class="btn btn-primary" href="">Submit</button>
</form>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal --
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->