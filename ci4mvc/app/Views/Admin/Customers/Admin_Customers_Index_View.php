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
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    <div class="col-2">
                        <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>/customers/add">
                            <i class="fas fa-user fa-sm text-white-50"></i> Adauga client
                        </a>
                    </div>
                    <div class="col-2-">
                        <h3>Total clienti: <small class="text-primary"><?php echo count($customers); ?></small></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <?php echo form_open('/customers/search',  ['method'=> 'get', 'class' => 'form-inline']); ?>
                            <?= csrf_field() ?>
                            <div class="form-group">
                                <label>Cod Unic</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" value="<?php echo $_GET['customer_unique_code'] ?? ''; ?>" id="customer_unique_code" name="customer_unique_code">
                            </div>
                        <div class="form-group">
                            <label>Nume</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" value="<?php echo $_GET['customer_name'] ?? ''; ?>" id="customer_name" name="customer_name">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">@</div>
                                </div>
                                <input type="text" class="form-control" value="<?php echo $_GET['customer_email']?? ''; ?>" id="customer_email" name="customer_email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Telefon</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" value="<?php echo $_GET['customer_phone']?? ''; ?>" id="customer_phone" name="customer_phone">
                        </div>
                        <input type="submit" class="btn btn-primary mb-2" value="Cauta">
                        </form>
                        <a href="/customers" class="btn btn-primary btn-sm">Refresh</a>
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
                                    <th>Telefon</th>
                                    <th>Cod unic client</th>
                                    <th>Actiuni</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($customers as $customer): ?>
                                    <tr>
                                        <td> <?= $customer['customer_id']; ?></td>
                                        <td> <?= $customer['customer_name']; ?></td>
                                        <td> <?= $customer['customer_phone']; ?></td>
                                        <td> <?= $customer['customer_unique_code']; ?></td>

                                        <td><a href="<?php echo base_url(); ?>/devices/add?device_customer_id=<?= $customer['customer_id']; ?>" class="btn btn-primary btn-sm">Dispozitive</a></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Nume</th>
                                    <th>Telefon</th>
                                    <th>Cod unic client</th>
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