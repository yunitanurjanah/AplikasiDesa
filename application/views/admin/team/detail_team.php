<?php
require_once(APPPATH.'views/admin/layout/header.php');
?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
            require_once(APPPATH.'views/admin/layout/sidebar.php');
        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/Admin/edit_team" method="POST">
                                <div class="card-body">
                                    <h4 class="card-title">Edit Menu Team</h4>
                                    <?php foreach($isi as $data){ ?>
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Nama" value="<?php echo $data['nama_pegawai']; ?>">
                                                <input type="hidden" class="form-control" id="id" name="id" placeholder="Id Pegawai" value="<?php echo $data['id_pegawai']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Jabatan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" value="<?php echo $data['jabatan']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Foto Pegawai</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="foto_pegawai" name="foto_pegawai" placeholder="Foto Pegawai" value="<?php echo $data['foto_pegawai']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Facebook Pegawai</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="facebook_pegawai" name="facebook_pegawai" placeholder="Facebook Pegawai" value="<?php echo $data['facebook_pegawai']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Instagram Pegawai</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="instagram_pegawai" name="instagram_pegawai" placeholder="Instagram Pegawai" value="<?php echo $data['instagram_pegawai']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Twitter Pegawai</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="twitter_pegawai" name="twitter_pegawai" placeholder="Twitter Pegawai" value="<?php echo $data['twitter_pegawai']; ?>">
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php
                require_once(APPPATH.'views/admin/layout/footer.php');
            ?>