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
                            <div class="card-body">
                                <h5 class="card-title">Basic Datatable</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID Team</th>
                                                <th>Nama</th>
                                                <th>Jabatan</th>
                                                <th>Foto</th>
                                                <th>Facebook</th>
                                                <th>Instagram</th>
                                                <th>Twitter</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                foreach($isi as $data){ ?>
                                                    <tr>
                                                        <td><?php echo $data['id_pegawai']; ?></td>
                                                        <td><?php echo $data['nama_pegawai']; ?></td>
                                                        <td><?php echo $data['jabatan']; ?></td>
                                                        <td><?php echo $data['foto_pegawai']; ?></td>
                                                        <td><?php echo $data['facebook_pegawai']; ?></td>
                                                        <td><?php echo $data['instagram_pegawai']; ?></td>
                                                        <td><?php echo $data['twitter_pegawai']; ?></td>
                                                        <td><form action="<?php echo base_url(); ?>index.php/Admin/detail_team" method="POST">
                                                            <input type="hidden" name="id" id="id" value="<?php echo $data['id_pegawai']; ?>">
                                                            <button type="submit" class="btn btn-primary">Edit</button>
                                                        </form></td>
                                                    </tr>
                                            <?php    
                                                }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID Team</th>
                                                <th>Nama</th>
                                                <th>Jabatan</th>
                                                <th>Foto</th>
                                                <th>Facebook</th>
                                                <th>Instagram</th>
                                                <th>Twitter</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
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