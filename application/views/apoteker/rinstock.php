<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-2">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('laporan/cetak_rinstok'); ?>">Print&nbsp;<i class="fas fa-print"></i></a></h6>
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
                        <?php foreach ($rinstock as $rin) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $rin['transaction_id']; ?></td>
                                <td><?= $rin['date_stock']; ?></td>
                                <td><?= $rin['medicine_id']; ?></td>
                                <td><?= $rin['medicine_name']; ?></td>
                                <td><?= $rin['medicine_type']; ?></td>
                                <td><?= $rin['medicine_qty']; ?></td>
                                <td><?= "Rp" . number_format($rin['price'], 0, ',', '.'); ?></td>
                                <td><?= "Rp" . number_format($rin['total'], 0, ',', '.'); ?></td>
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