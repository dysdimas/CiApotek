<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>



    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-2">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('laporan/cetak_routstock'); ?>">Print&nbsp;<i class="fas fa-print"></i></a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Transaction Id</th>
                            <th>Transaction Date</th>
                            <th>Medicine Id</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($routstock as $rou) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $rou['transaction_id']; ?></td>
                                <td><?= $rou['date_stock']; ?></td>
                                <td><?= $rou['medicine_id']; ?></td>
                                <td><?= $rou['medicine_name']; ?></td>
                                <td><?= $rou['medicine_type']; ?></td>
                                <td><?= $rou['medicine_qty']; ?></td>
                                <td><?= "Rp" . number_format($rou['price'], 0, ',', '.'); ?></td>
                                <td><?= "Rp" . number_format($rou['total'], 0, ',', '.'); ?></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Modal -->