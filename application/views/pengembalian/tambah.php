<div class="app-title">
  <div>
    <h1><i class="fa fa-edit"></i> Pengembalian</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Pengembalian</li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <h3 class="tile-title">Tambah Pengembalian</h3>
      <div class="tile-body">
        <form method="post" action="<?php echo base_url('pengembalian/aksi_tambah'); ?>">

          <input type="hidden" name="data[user_id]" value="<?php echo $this->session->id; ?>">
          <input type="hidden" name="data[status]" value="1">
          
          <div class="form-group">
            <label class="control-label">Nama</label>
            <input class="form-control" type="text" required placeholder="Masukan Nama" name="data[nama]">
          </div>

          <div class="form-group">
            <label class="control-label">NIP</label>
            <input class="form-control" type="text" required placeholder="Masukan NIP" name="data[nip]">
          </div>

          <div class="form-group">
            <label class="control-label">Nomor Seri</label>
            <select class="form-control select2" required name="data[noseri]">
              <?php
              foreach ($this->db->get_where('peminjaman', ['status' => 1])->result() as $item) {
                ?>
                <option value="<?php echo $item->id; ?>"><?php echo $item->noseri; ?></option>
                <?php
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <label class="control-label">Jenis</label>
            <input class="form-control" type="text" required placeholder="Masukan Jenis" name="data[jenis]">
          </div>

          <div class="form-group">
            <label class="control-label">Tanggal</label>
            <input class="form-control datepicker" type="text" required placeholder="Masukan Tanggal" name="data[tanggal]">
          </div>

          </div>
          <div class="tile-footer">
            <button id="simpan" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-secondary" href="<?php echo base_url('pengembalian'); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a> <input type="submit" style="visibility: hidden;">
          </div>
        </form>
    </div>
  </div>
</div>