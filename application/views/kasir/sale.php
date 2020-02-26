<script>
    function startCalc() {
        interval = setInterval("calc()", 1);
    }

    function calc() {
        one = document.autoSumForm.medicine_qty.value;
        two = document.autoSumForm.price.value;
        document.autoSumForm.total.value = (one * 1) * (two * 1);
    }

    function stopCalc() {
        clearInterval(interval);
    }
</script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-2">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Result Stock of Apoteker</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Medicine Id</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($stock as $s) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $s['medicine_id']; ?></td>
                                <td><?= $s['medicine_name']; ?></td>
                                <td><?= $s['medicine_type']; ?></td>
                                <td><?= $s['medicine_qty']; ?></td>
                                <td><?= "Rp" . number_format($s['price'], 0, ',', '.'); ?></td>
                                <td><a href="<?= base_url(''); ?>kasir/stockid/<?= $s['id']; ?>" class="badge badge-danger">Sale</a>
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
<div class="modal fade" id="stockModal" tabindex="-1" role="dialog" aria-labelledby="stockModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stockModalLabel">Add Medicine Stock</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('kasir/updatesale'); ?>" method="post" name="autoSumForm">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="medicine_id" name="medicine_id" placeholder="Medicine id">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="transaction_id" name="transaction_id" placeholder="Transaction id">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" id="date_stock" name="date_stock" placeholder="Transaction Date">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="medicine_name" name="medicine_name" placeholder="Medicine name">
                    </div>
                    <div class="form-group">
                        <select name="medicine_type" id="medicine_type" class="form-control">
                            <option value="">Choose</option>
                            <option value="Eksternal medicine">Eksternal medicine</option>
                            <option value="Internal medicine">Internal medicine</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="medicine_qty" name="medicine_qty" placeholder="Quantity" onfocus="startCalc();" onblur="stopCalc();">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="price" name="price" placeholder="Price" onfocus="startCalc();" onblur="stopCalc();">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="total" name="total" placeholder="Price" value="0" onchange='tryNumberFormat(this.form.thirdBox);' readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>