<div class="modal-dialog modal-md">
    <div class="modal-content">
        <form id="addSchedule" method="POST" enctype="multipart/form-data">
            <div class="modal-header">
                <h3 class="container-tittle label-required">Form Penambahan Tiket</h3>
            </div>
            <div class="modal-body">
                <div class="form-group-row">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" id="name" required>
                        <label for="name">Masukan nama anda</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-control select2" name="tujuanawal" id="tujuanawal" required>
                            <option value="PSN">Pasar Senen</option>
                            <option value="GBR">GAMBIR</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-control select2" name="tujuanakhir" id="tujuanakhir" required>
                            <option value="PST">PASAR TURI</option>
                            <option value="ML">MALANG KOTA BARU</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" name="jadwal" id="jadwal" required>
                        <label for="jadwal">Masukan jadwal keberangkatan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-control select2" id="pilihankereta">
                            <option value="jayabaya">JAYABAYA</option>
                            <option value="majapahit">MAJAPAHIT</option>
                            <option value="gajayana">GAJAYANA</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    <div class="modal-footer">
        <div class="col-md-12 p-0">
            <a class="btn btn-ef btn-ef-3 btn-ef-3a btn-danger" data-dismiss="modal">
                <i class="fa fa-times"></i>
                <p class="m-0">Cancel</p>
            </a>
        <button type="submit" class="btn btn-ef btn-ef-3 btn-ef-3a btn-success" id="btn-save">
            <i class="fa fa-save"></i>
            <p class="m-0">Confirm</p>
        </button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $.ajax({
        url: <?= base_url(uri_string(). '/addTrain') ?>,
        method: 'post',
        datatype: 'json',
        data: {
            FormData
        },
        success: function(response){
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Data keberangkatan anda sudah dicatat'
            });
        },
    });


    

</script>