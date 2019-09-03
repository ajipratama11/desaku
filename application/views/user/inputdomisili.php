<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"></h1>



    <div class="row">
        <div class="col-lg-6">


            <!-- <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Add New Menu</a> -->

            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Pembuatan Surat Domisili</h4>

            </div>
            <?= form_open_multipart('dashbord/add_domisili'); ?>
            <div class="modal-body mx-3">
                <div class="md-form mb-3">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-email">NIK</label>
                    <input type="number" id="nik" name="nik" class="form-control validate">
                </div>
                <div class="md-form mb-3">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control validate">
                </div>
                <div class="md-form mb-3">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Tempat & Tanggal Lahir</label>
                    <input type="text" id="ttl" name="ttl" class="form-control validate">
                </div>
                
               <div class="md-form mb-3">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Jenis Kelamin</label>
            
                    <select class="form-control validate" id="Jenis_kelamin" name="jenis_kelamin">
                        <option selected>Pilih..</option>
                        <option value="l">Laki-laki</option>
                        <option value="p">Perempuan</option>
                    </select>
                </div>
                <div class="md-form mb-3">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Pekerjaan</label>
                    <input type="text" id="pekerjaan" name="pekerjaan" class="form-control validate">
                </div>
                <div class="md-form mb-3">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Agama</label>
                    <!-- <input type="text" id="agama" name="agama" class=""> -->
                    <select class="form-control validate" id="agama" name="agama">
                        <option selected>Pilih Agama..</option>
                        <option value="Islam">Islam</option>
                        <option value="Khatolik">Khatolik</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghuchu">Konghuchu</option>
                        <option value="lain-lain">lain-lain</option>
                    </select>
                </div>
                <div class="md-form mb-3">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Status Perkawinan</label>
                    <!-- <input type="text" id="agama" name="agama" class=""> -->
                    <select class="form-control validate" id="status_perkawinan" name="status_perkawinan">
                        <option selected>Pilih..</option>
                        <option value="l">Menikah</option>
                        <option value="p">Belum Menikah</option>
                    </select>
                </div>
                <div class="md-form mb-3">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Kewarganegaraan</label>
                    <input type="text" id="kewarganegaraan" name="kewarganegaraan" class="form-control validate">
                </div>
                <div class="md-form mb-3">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Alamat</label>
                    <input type="text" id="alamat" name="alamat" class="form-control validate">
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-default">submit</button>
            </div>
            <?php form_close(); ?>
        </div>
    </div>
</div>



</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name">
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