<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-2">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="<?= base_url('laporan/cetak_rsales'); ?>">Print&nbsp;<i class="fas fa-print"></i></a></h6>
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
                            <th>Kwitansi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($rsale as $rs) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $rs['transaction_id']; ?></td>
                                <td><?= $rs['date_transaction']; ?></td>
                                <td><?= $rs['medicine_id']; ?></td>
                                <td><?= $rs['medicine_name']; ?></td>
                                <td><?= $rs['medicine_type']; ?></td>
                                <td><?= $rs['medicine_qty']; ?></td>
                                <td><?= "Rp" . number_format($rs['price'], 0, ',', '.'); ?></td>
                                <td><?= "Rp" . number_format($rs['total'], 0, ',', '.'); ?></td>
                                <td><a href="<?= base_url(''); ?>kasir/stockidi/<?= $rs['id']; ?>" class="badge badge-success">Cetak</a>
                                </td>
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