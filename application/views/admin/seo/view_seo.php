<div class="container-fluid pt-4 px-4">
    <div class="row g-4 justify-content-center">
        <div class="col-lg-8">
            <div class="bg-secondary rounded p-4">
                <h6 class="mb-4">Responsive Table</h6>
                <div class="table-container">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead style="color:#FEC83D;">
                <tr>
                  <th>SR NO</th>
                  <th>PAGE NAME</th>
                  <th>URL</th>
                  <th>KEYWORDS</th>
                  <th>TITLE</th>
                  <th>META DESCRIPTION</th>
                  <th style="width: 150px;" class="text-right">OPTION</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $c = 1;
                foreach ($seo_view as $row) : ?>
                  <tr>
                    <td><?= $c++; ?></td>
                    <td><?= $row->page_name ?></td>
                    <td><?= $row->url ?></td>
                    <td><?= $row->keywords ?></td>
                    <td><?= $row->title ?></td>
                    <td><?= $row->meta_description ?></td>
                    <td class="text-right"><a href="<?= base_url('admin/seo/seo_edit/' . $row->id); ?>">
                        <i class="ti ti-edit" style="font-size:40px; color:blue;" style="font-size:15px; padding:0px; "></i></a>
                      <a href="<?= base_url('admin/seo/seo_delete/' . $row->id); ?>" class="ti ti-trash" style="font-size:40px; color:red;" onclick="return confirm('Are you sure want to delete ?');"></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
              </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script>
    jQuery(document).ready(function($) {
      $('#table_id').DataTable();
    });
  </script>

</body>

</html>