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
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Data Peminjaman Belum Dikembalikan</h3>
        </div>
        <table class="table table-hover table-bordered datatable">
          <thead>
            <tr>
              <th>Nama</th>
              <th>NIP</th>
              <th>Nomor Seri</th>
              <th>Jenis</th>
              <th>Tanggal</th>
              <th>Durasi (Hari)</th>
              <th>Proses</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($this->db->get_where('peminjaman', ['status' => 1])->result() as $item) {
              ?>
              <tr>
                <td><?php echo $item->nama; ?></td>
                <td><?php echo $item->nip; ?></td>
                <td><?php echo $item->noseri; ?></td>
                <td><?php echo $item->jenis; ?></td>
                <td><?php echo $item->tanggal; ?></td>
                <td><?php echo $item->durasi; ?></td>
                <td><?php echo $item->durasi; ?></td>
              </tr>
              <?php
            } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

<div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Data Peminjaman Sudah Dikembalikan</h3>
        </div>
        <table class="table table-hover table-bordered datatable">
          <thead>
            <tr>
              <th>Nama</th>
              <th>NIP</th>
              <th>Nomor Seri</th>
              <th>Jenis</th>
              <th>Tanggal</th>
              <th>Durasi (Hari)</th>
              <th>Proses</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($this->db->get_where('peminjaman', ['status' => 0])->result() as $item) {
              ?>
              <tr>
                <td><?php echo $item->nama; ?></td>
                <td><?php echo $item->nip; ?></td>
                <td><?php echo $item->noseri; ?></td>
                <td><?php echo $item->jenis; ?></td>
                <td><?php echo $item->tanggal; ?></td>
                <td><?php echo $item->durasi; ?></td>
                <td><?php echo $item->durasi; ?></td>
              </tr>
              <?php
            } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>