<div class="app-title">
  <div>
    <h1><i class="fa fa-edit"></i> Config</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Config</li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <form method="post" action="<?php echo base_url('config/aksi_ubah'); ?>">
        
          <h3 class="tile-title">Aplikasi</h3>
          
          <div class="form-group">
            <label class="control-label">Judul Aplikasi</label>
            <input class="form-control" type="text" value="<?php echo $data['config']->judul_aplikasi; ?>" required placeholder="Masukan Judul Aplikasi" name="data[judul_aplikasi]">
          </div>

          <div class="form-group">
            <label class="control-label">Judul Menu</label>
            <input class="form-control" type="text" value="<?php echo $data['config']->judul_menu; ?>" required placeholder="Masukan Judul Menu" name="data[judul_menu]">
          </div>

          <br>

          <h3 class="tile-title">Zenziva Api</h3>
          
          <div class="form-group">
            <label class="control-label">Zenziva Userkey</label>
            <input class="form-control" type="text" value="<?php echo $data['config']->zenziva_userkey; ?>" required placeholder="Masukan Zenziva Userkey" name="data[zenziva_userkey]">
          </div>

          <div class="form-group">
            <label class="control-label">Zenziva Passkey</label>
            <input class="form-control" type="text" value="<?php echo $data['config']->zenziva_passkey; ?>" required placeholder="Masukan Zenziva Passkey" name="data[zenziva_passkey]">
          </div>

          <div class="form-group">
            <label class="control-label">Zenziva SMS</label>
            <textarea class="form-control" name="data[zenziva_sms]" placeholder="Tulis SMS disini" required><?php echo $data['config']->zenziva_sms; ?></textarea>
          </div>

          </div>
          <div class="tile-footer">
            <button id="simpan" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-secondary" href="<?php echo base_url(); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a> <input type="submit" style="visibility: hidden;">
          </div>
        </form>
    </div>
  </div>
</div>