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
                            <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/Admin/edit_home" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Edit Menu Home</h4>
                                    <?php foreach($isi as $data){ ?>
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Title 1</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="title_1" name="title_1" placeholder="First Name Here" value="<?php echo $data['title_1']; ?>">
                                                <input type="hidden" class="form-control" id="id" name="id" placeholder="First Name Here" value="<?php echo $data['id_home']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Title 2</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="title_2" name="title_2" placeholder="Last Name Here" value="<?php echo $data['title_2']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Gambar Slider</label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" id="gambar_slider" name="gambar_slider" value="<?php echo $data['gambar_slider']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Page Scroll 1</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="page_scroll_1" name="page_scroll_1" placeholder="Company Name Here" value="<?php echo $data['page_scroll_1']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Page Scroll 2</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="page_scroll_2" name="page_scroll_2" placeholder="Contact No Here" value="<?php echo $data['page_scroll_2']; ?>">
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