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
                            <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/Admin/edit_berita" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Edit Menu Berita</h4>
                                    <?php foreach($isi as $data){ ?>
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Judul Berita</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="title_berita" name="title_berita" placeholder="Judul title_berita" value="<?php echo $data['title_berita']; ?>">
                                                <input type="hidden" class="form-control" id="id" name="id" placeholder="Id Pegawai" value="<?php echo $data['id_berita']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Isi Berita</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="body_berita" name="body_berita" placeholder="Isi Berita" value="<?php echo $data['body_berita']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Sumber Berita</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="sumber_berita" name="sumber_berita" placeholder="Sumber Berita" value="<?php echo $data['sumber_berita']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Foto Berita</label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" id="foto_berita" name="foto_berita" value="<?php echo $data['foto_berita']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Tanggal</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Facebook Pegawai" value="<?php echo $data['tanggal']; ?>">
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