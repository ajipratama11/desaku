<!-- Begin Page Content -->
<?= $this->load->view('templates/header'); ?>
<?= $this->load->view('templates/sidebar'); ?>
<?= $this->load->view('templates/topbar'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"></h1>

    <div class="row">
        <div class="col-lg">

    
            <?= $this->session->flashdata('message'); ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Bagian Kerja</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                
                    
                        <tr>

                            <th scope="row"><?= $i; ?></th>
                     
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="" class="badge badge-danger">hapus</a>
                            </td>
                        </tr>
                     
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<?= $this->load->view('templates/footer'); ?>