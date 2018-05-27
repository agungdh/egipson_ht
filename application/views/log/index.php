<div class="app-title">
  <div>
    <h1><i class="fa fa-edit"></i> Log</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Log</li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Data Log</h3>
        </div>
        <table class="table table-hover table-bordered datatable">
          <thead>
            <tr>
              <th>TIME</th>
              <th>TAG</th>
              <th>URL</th>
              <th>VALUE</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $this->db->order_by('time', 'desc');
            foreach ($this->db->get('log')->result() as $item) {
              ?>
              <tr>
                <td><?php echo $this->pustaka->tanggal_waktu_indo($item->time); ?></td>
                <td><?php echo $item->tag; ?></td>
                <td><?php echo base_url($item->base_url); ?></td>
                <td><?php echo $item->value; ?></td>
              </tr>
              <?php
            } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>