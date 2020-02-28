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
                            <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/Admin/edit_profile" method="POST">
                                <div class="card-body">
                                    <h4 class="card-title">Edit Menu Profile</h4>
                                    <?php foreach($isi as $data){ ?>
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Title Profile</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="title_profile" name="title_profile" placeholder="Title Profile" value="<?php echo $data['title_profile']; ?>">
                                                <input type="hidden" class="form-control" id="id" name="id" placeholder="Id Profile" value="<?php echo $data['id_profile']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Subtitle Profile</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="subtitle_profile" name="subtitle_profile" placeholder="Subtitle Profile" value="<?php echo $data['subtitle_profile']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="<?php echo $data['description']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Gambar Profile</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="gambar" name="gambar" placeholder="Gambar Profile" value="<?php echo $data['gambar_profile']; ?>">
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