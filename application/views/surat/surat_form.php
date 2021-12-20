
<div class="container">
	<h2>Penginputan Data kapal </h2>
	<br>
	<div class="container">
	<form>
  <div class="form-group">
    <label>NAMA KAPAL</label>
    <input class="form-control" id="" class="Nama_Kapal" value="" placeholder="Masukkan Nama Kapal" required>
  </div>
  <br> 
  <div class="form-group">
    <label for="exampleInputPassword1">NO SO</label>
    <input class="form-control" id="No_SO" class="No_SO" value="" placeholder="Masukkan No SO" required>
  </div>
  <br> 
  <div class="form-group">
    <label for="exampleInputPassword1">JENIS BERKAS</label>
    <input class="form-control" id="Jenis_Berkas" class="Jenis_Berkas" value="" required>
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputPassword1">TANGGAL</label>
    <input type="date" class="date" id="Tanggal" class="Tanggal" value=""  required>
  </div>
  <!-- <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Input file</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div> -->
  
<br>
  <button type="submit" class="btn btn-primary" href=<?= site_url('surat/created')?>>Submit</button>
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