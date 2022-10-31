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
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Adauga categorie</h1>
                </div>

                <!-- Content Row -->
                <div class="row bg-primary text-white">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-md-6 p-lg-5 pt-5 pb-5">
                        <form action="/categories/update" method="POST">
                            <?= csrf_field() ?>
                            <input type="hidden" value="<?= $categories['category_id'] ?>" name="category_id">
                            <div class="form-group">
                                <label>Nume categorie</label>
                                <input type="text" class="form-control" name="category_name" value="<?= $categories['category_name'] ?>" id="category_name" placeholder="Categorie">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="1" name="category_status" id="category_status1"
                                        <?= $categories['category_status'] == 1 ? 'checked': '' ?>
                                    >
                                    <label class="form-check-label" for="category_status1">
                                        Activ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="0" name="category_status" id="category_status2"
                                        <?= $categories['category_status'] == 0 ? 'checked': '' ?>
                                    >
                                    <label class="form-check-label" for="category_status2">
                                        Inactiv
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-light">Salveaza</button>
                        </form>
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
<script src="<?php echo base_url(); ?>/assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url(); ?>/assets/js/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>