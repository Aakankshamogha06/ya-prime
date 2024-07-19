<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">
                <div class="bg-secondary rounded p-4">
                    <h6 class="mb-4">VIEW CONTACT US</h6>
                    <hr>
                    <div class="table-container">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead style="color:#FEC83D;">
                                    <tr>
                                        <th>SR NO</th>
                                        <th>NAME</th>
                                        <th>EMAIL</th>
                                        <th>MOBILE</th>
                                        <th>LOCATION</th>
                                        <th>MESSAGE</th>
                                        <th style="width: 150px;" class="text-right">Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $c = 1; foreach ($contact_us_view as $row) : ?>
                                    <tr>
                                        <td><?= $c++; ?></td>
                                        <td><?= $row->name ?></td>
                                        <td><?= $row->email ?></td>
                                        <td><?= $row->phone_number ?></td>
                                        <td><?= $row->location ?></td>
                                        <td><?= $row->message ?></td>
                                        <td class="text-right">
                                        <a href="<?= base_url('admin/contact_us/contact_us_delete/' . $row->id); ?>" onclick="return confirm('Are you sure you want to delete this?');">
                                                <i class="fas fa-trash-alt" style="font-size: 24px; color: red;"></i>
                                            </a>
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
