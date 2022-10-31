<?= $this->include('header') ?>

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?= $this->include('sidebar') ?>

    <!-- End of Sidebar -->

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
                <h1 class="h3 mb-2 text-gray-800">Adaugare dispozitiv</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Cauta client</h1>
                                </div>
                                <form class="user" action="<?php echo base_url(); ?>/devices/search" method="get">
                                    <div class="form-group row">
                                        <div class="col-md-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="customer_unique_code" name="customer_unique_code"
                                                   placeholder="Nume">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control form-control-user" id="prenume"
                                                   placeholder="Prenume">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control form-control-user" id="prenume"
                                                   placeholder="Prenume">
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Cautare">
                                </form>
                            </div>

                            <div class="py-1">
                                <?php if (isset($customer_unique_code)): ?>
                                    <h3>Client exista deja <a href="<?php echo base_url(); ?>/devices/create?customer_unique_code=<?php echo $customer_unique_code; ?>" class="btn btn-primary btn-sm">Adauga</a></h3>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Nume</th>
                                                    <th>Marca</th>
                                                    <th>Tip</th>
                                                    <th>Intrare</th>
                                                    <th>Actiuni</th>
                                                </tr>
                                                </thead>
                                                <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nume</th>
                                                    <th>Marca</th>
                                                    <th>Tip</th>
                                                    <th>Intrare</th>
                                                    <th>Actiuni</th>
                                                </tr>
                                                </tfoot>
                                                <tbody>
                                                <?php if(count($devices) == 0): ?>
                                                    <tr>
                                                        <td></td>
                                                        <td>Nici un client</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                <?php else: ?>
                                                    <?php foreach($devices as $device): ?>
                                                        <tr>
                                                            <td><?= $device['device_id'] ?></td>
                                                            <td><?= $device['device_name'] ?></td>
                                                            <td><?= $device['device_category'] ?></td>
                                                            <td><?= $device['device_type'] ?></td>
                                                            <td><?= $device['created_at'] ?></td>
                                                            <td><?= $device['device_status'] == 1 ? 'livrat': 'in service' ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <h3>Client nou <a href="<?php echo base_url(); ?>/devices/new" class="btn btn-primary btn-sm">Adauga</a></h3>
                                <?php endif; ?>

                            </div>
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
                <a class="btn btn-primary" href="<?php echo base_url(); ?>/logout">Logout</a>
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
<script src="<?php echo base_url(); ?>/assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url(); ?>/assets/js/demo/datatables-demo.js"></script>

</body>

</html>