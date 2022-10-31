<?= $this->include('header') ?>


<!-- Page Wrapper -->
<div id="wrapper">

    <?= $this->include('sidebar') ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?= $this->include('topbar') ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-2">
                        <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>/categories/add">
                            <i class="fas fa-user fa-sm text-white-50"></i> Adauga categorie
                        </a>
                    </div>
                    <div class="col-2-">
                        <h3>Total categorii: <small class="text-primary"><?php echo count($categories); ?></small></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <form>
                            <label>Nume</label>
                            <input type="text">
                        </form>
                    </div>
                </div>
                <?php if (session()->getFlashdata('msg') !== NULL): ?>
                    <div class="alert alert-primary" role="alert">
                        <?php echo session()->getFlashdata('msg'); ?>
                    </div>
                <?php endif; ?>
                <!-- Content Row -->
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nume</th>
                                    <th>Status</th>
                                    <th>Actiuni</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($categories as $category): ?>

                                    <tr>
                                        <td> <?= $category->category_id; ?></td>
                                        <td> <?= $category->category_name; ?></td>
                                        <td> <small class="btn <?= $category->category_status == 1 ? 'btn-primary' : 'btn-danger'; ?> btn-sm"><?php echo $category->category_status == 1 ? 'Activ' : 'Inactiv'; ?></small></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>/categories/edit/<?= $category->category_id; ?>" class="btn btn-primary btn-sm">Editeaza categorie</a>

                                            <a href="<?php echo base_url(); ?>/categories/delete/<?= $category->category_id; ?>" class="btn btn-outline-danger btn-sm <?php echo $category->count_devices > 0 ? 'disabled': '';?>"

                                            > Sterge categorie </a> Dispozitive: <?php echo $category->count_devices; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Nume</th>
                                    <th>Status</th>
                                    <th>Actiuni</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?= $this->include('footer') ?>

        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?php echo base_url('logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url(); ?>/assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->

<!-- Page level custom scripts -->

</body>

</html>