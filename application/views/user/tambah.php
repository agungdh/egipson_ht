<div class="app-title">
  <div>
    <h1><i class="fa fa-edit"></i> Peminjaman</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Peminjaman</li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <h3 class="tile-title">Tambah Peminjaman</h3>
      <div class="tile-body">
        <form method="post" action="<?php echo base_url('peminjaman/aksi_tambah'); ?>">

          <input type="hidden" name="data[user_id]" value="">
          
          <div class="form-group">
            <label class="control-label">Nama</label>
            <input class="form-control" type="text" placeholder="Masukan Nama" name="data[nama]">
          </div>

          <div class="form-group">
            <label class="control-label">Username</label>
            <input class="form-control" type="text" placeholder="Masukan Username" name="data[username]">
          </div>

          <div class="form-group">
            <label class="control-label">Password</label>
            <input class="form-control" type="password" placeholder="Masukan Password" name="data[password]">
          </div>

          <div class="form-group">
            <label class="control-label">Level</label>
            <select class="form-control select2" name="data[level]">
              <option value="1">Administrator</option>
              <option value="2">Operator</option>
            </select>
          </div>

          </div>
          <div class="tile-footer">
            <button id="simpan" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-secondary" href="<?php echo base_url('user'); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a>
          </div>
        </form>
    </div>
  </div>
</div>