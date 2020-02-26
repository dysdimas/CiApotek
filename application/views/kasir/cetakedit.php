<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kwitansi</h1>

    <form action="<?= base_url('laporan/cetakedit'); ?>" method="post" name="autoSumForm">
        <input type="hidden" name="id" id="id" value="<?= $stock['id']; ?>">
        <div class="modal-body ml-5 mr-5">
            <div class="form-group">
                <label for="namepem">Name</label>
                <input type="text" class="form-control" id="namepem" name="namepem" placeholder="Input name" >
            </div>
            <div class="form-group">
                <label for="medicine_id">Medicine id</label>
                <input type="text" class="form-control" id="medicine_id" name="medicine_id" placeholder=" Medicine id" value="<?= $stock['medicine_id']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="transaction_id">Transaction id</label>
                <input type="text" class="form-control" id="transaction_id" name="transaction_id" placeholder="Transaction id" Value="<?= $stock['transaction_id']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="date_stock">Transaction date</label>
                <input type="date" class="form-control" id="date_stock" name="date_stock" placeholder="Transaction Date" value="<?= $stock['date_transaction']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="medicine_name">Medicine name</label>
                <input type="text" class="form-control" id="medicine_name" name="medicine_name" placeholder="Medicine name" value="<?= $stock['medicine_name']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="medicine_type">Medicine type</label>
                <select name="medicine_type" id="medicine_type" class="form-control" disabled>
                    <option value="<?= $stock['medicine_type']; ?>"><?= $stock['medicine_type']; ?></option>
                    <option value="Eksternal medicine" >Eksternal medicine</option>
                    <option value="Internal medicine" >Internal medicine</option>
                </select>
            </div>
            <div class="form-group">
                <label for="medicine_qty">Medicine qty</label>
                <input type="text" class="form-control" id="medicine_qty" name="medicine_qty" placeholder="Quantity" onfocus="startCalc();" onblur="stopCalc();" value="<?= $stock['medicine_qty']; ?>" readonly>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Price" onfocus="startCalc();" onblur="stopCalc();" value="<?= $stock['price']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="total">Total</label>
                <input type="text" class="form-control" id="total" name="total" placeholder="Price" onchange='tryNumberFormat(this.form.thirdBox);' value="<?= $stock['total']; ?>" readonly>
            </div>
        </div>
        <div class="modal-footer mr-5">
            <button type="submit" class="btn btn-danger">Cetak</button>
        </div>
    </form>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->