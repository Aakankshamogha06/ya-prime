<div class="content">
  <div class="container-fluid pt-4 px-4">
    <div class="row g-4 justify-content-center">
      <div class="col-lg-12">
        <div class="bg-secondary rounded p-4">
          <h6 class="mb-4">VIEW REQUEST QUOTE</h6>
          <hr>
          <div class="table-container">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead style="color:#FEC83D;">
                  <tr>
                  <th>SR NO</th>
                  <th>NAME</th>
                  <th>EMAIL</th>
                  <th>PHONE NUMBER</th>
                  <th>COUNTRY</th>
                  <th>ARE YOU A?</th>
                  <th>PRODUCTS</th>
                  <th>QOUTE</th>
                  <th>MESSAGE</th>
                
                <th style="width: 150px;" class="text-right">Option</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $c = 1;
              foreach ($request_quote_view as $row) : ?>
                <tr>
                <td><?= $c++; ?></td>
                    <td><?= $row->name ?></td>
                    <td><?= $row->email ?></td>
                    <td><?= $row->contact_number ?></td>
                    <td><?= $row->country ?></td>
                    <td><?= $row->areyoua ?></td>
                    <td><?= $row->products ?></td>
                    <td><?= $row->qoute ?></td>
                    <td><?= $row->message ?></td>
                  <td class="text-right">
                        <a href="<?= base_url('admin/request_quote/request_quote_delete/' . $row->id); ?>" onclick="return confirm('Are you sure want to delete ?');">
                          <i class="fas fa-trash-alt" style="font-size: 24px; color: red;"></i>
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