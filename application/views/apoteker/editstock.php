<script>
    function startCalc() {
        interval = setInterval("calc()", 1);
    }

    function calc() {
        one = document.autoSumForm.medicine_qty.value;
        two = document.autoSumForm.price.value;
        three = document.autoSumForm.minmedicine_qty.value;
        document.autoSumForm.total.value = (two * 1) * (three * 1);
        document.autoSumForm.tmedicine_qty.value = (one * 1) - (three * 1);
    }

    function stopCalc() {
        clearInterval(interval);
    }
</script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form action="<?= base_url('apoteker/dropstock'); ?>" method="post" name="autoSumForm">
        <input type="hidden" name="id" id="id" value="<?= $stock['id']; ?>">
        <div class="modal-body ml-5 mr-5">
            <div class="form-group">
                <label for="medicine_id">Medicine id</label>
                <input type="text" class="form-control" id="medicine_id" name="medicine_id" placeholder=" Medicine id" value="<?= $stock['medicine_id']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="transaction_id">Transaction id</label>
                <input type="text" class="form-control" id="transaction_id" name="transaction_id" placeholder="Transaction id" value="<?= $stock['transaction_id']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="date_stock">Transaction date</label>
                <input type="date" class="form-control" id="date_stock" name="date_stock" placeholder="Transaction Date" value="<?= $stock['date_stock']; ?>">
            </div>
            <div class="form-group">
                <label for="medicine_name">Medicine name</label>
                <input type="text" class="form-control" id="medicine_name" name="medicine_name" placeholder="Medicine name" value="<?= $stock['medicine_name']; ?>">
            </div>
            <div class="form-group">
                <label for="medicine_type">Medicine type</label>
                <select name="medicine_type" id="medicine_type" class="form-control">
                    <option value="<?= $stock['medicine_type']; ?>"><?= $stock['medicine_type']; ?></option>
                    <option value="Eksternal medicine">Eksternal medicine</option>
                    <option value="Internal medicine">Internal medicine</option>
                </select>
            </div>
            <div class="form-group">
                <label for="medicine_qty">Medicine qty</label>
                <input type="text" class="form-control" id="medicine_qty" name="medicine_qty" placeholder="Quantity" onfocus="startCalc();" onblur="stopCalc();" value="<?= $stock['medicine_qty']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="minmedicine_qty">Minus medicine qty</label>
                <input type="number" class="form-control" id="minmedicine_qty" name="minmedicine_qty" placeholder="Minus qty" onfocus="startCalc();" onblur="stopCalc();" max="<?= $stock['medicine_qty']; ?>">
            </div>
            <div class="form-group">
                <label for="tmedicine_qty">Medicine qty in stock</label>
                <input type="text" class="form-control" id="tmedicine_qty" name="tmedicine_qty" placeholder="Minus qty" onfocus="startCalc();" onblur="stopCalc();" readonly>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Price" onfocus="startCalc();" onblur="stopCalc();" value="<?= $stock['price']; ?>">
            </div>
            <div class="form-group">
                <label for="total">Total</label>
                <input type="text" class="form-control" id="total" name="total" placeholder="Price" value="0" onchange='tryNumberFormat(this.form.thirdBox);' readonly>
            </div>
        </div>
        <div class="modal-footer mr-5">
            <button type="submit" class="btn btn-danger">Drop</button>
        </div>
    </form>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->