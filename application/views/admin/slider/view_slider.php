<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
</head>

<body>
  <div class="container-fluid">
    <div class="container-fluid">

      <div class="card">
        <div class="card-body">
          <div class="card-header">
            <h5>View</h5>
            <a href="<?= base_url('admin/slider/add_slider'); ?>">
              <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add</button>
            </a>
          </div>
          <div class="card-body">
            <table id="table_id" class="table table-striped">
              <thead>
                <tr>
                  <th>SR NO</th>
                  <th>SLIDER IMAGE</th>
                  <th style="width: 150px;" class="text-right">OPTION</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $c = 1;
                foreach ($slider_view as $row) : ?>
                  <tr>
                    <td><?= $c++; ?></td>

                    <td>
                      <?php if ($row->slider_image) { ?>
                        <img src="<?php echo base_url('uploads/') . $row->slider_image; ?>" style="width:50px;height:80px">
                      <?php } ?>
                    </td>


                    <td class="text-right"><a href="<?= base_url('admin/slider/slider_edit/' . $row->id); ?>" class="ti ti-edit" style="font-size:40px; color:blue;" style="font-size:15px; padding:0px;"></a><a href="<?= base_url('admin/slider/slider_delete/' . $row->id); ?>" class="ti ti-trash" style="font-size:40px; color:red;" onclick="return confirm('Are you sure want to delete ?');" style="font-size:15px; padding:0px;"></a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>

            </table>
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