<div class="app-title">
  <div>
    <h1><i class="fa fa-book"></i> Pengembalian</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Pengembalian</li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Data Pengembalian</h3>
          <p><a class="btn btn-primary icon-btn" href="<?php echo base_url('pengembalian/tambah'); ?>"><i class="fa fa-plus"></i>Pengembalian</a></p>
        </div>
        <table class="table table-hover table-bordered datatable">
          <thead>
            <tr>
              <th>Nama</th>
              <th>NIP</th>
              <th>Nomor Seri</th>
              <th>Jenis</th>
              <th>Tanggal</th>
              <th>Proses</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($this->db->get('pengembalian')->result() as $item) {
              ?>
              <tr>
                <td><?php echo $item->nama; ?></td>
                <td><?php echo $item->nip; ?></td>
                <td><?php echo $item->noseri; ?></td>
                <td><?php echo $item->jenis; ?></td>
                <td><?php echo $this->pustaka->tanggal_indo($item->tanggal); ?></td>
                <td>
                  <div class="btn-group">
                    <a class="btn btn-primary" href="<?php echo base_url('pengembalian/ubah/' . $item->id); ?>" data-toggle="tooltip" title="Ubah"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-primary" href="#" onclick="hapus('<?php echo $item->id; ?>')" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>
                  </div>
                </td>
              </tr>
              <?php
            } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>