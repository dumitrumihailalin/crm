<?= $this->include('header') ?>
<!-- Page Wrapper -->
<div id="wrapper">
    <?= $this->include('sidebar') ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Cauta dispozitiv..."
                               aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="<?php echo base_url(); ?>/assets/img/undraw_profile_1.svg"
                                         alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                        problem I've been having.</div>
                                    <div class="small text-gray-500">Emily Fowler ?? 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="<?php echo base_url(); ?>/assets/img/undraw_profile_2.svg"
                                         alt="...">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how
                                        would you like them sent to you?</div>
                                    <div class="small text-gray-500">Jae Chun ?? 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="<?php echo base_url(); ?>/assets/img/undraw_profile_3.svg"
                                         alt="...">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy with
                                        the progress so far, keep up the good work!</div>
                                    <div class="small text-gray-500">Morgan Alvarez ?? 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                         alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                        told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class="small text-gray-500">Chicken the Dog ?? 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <?php if (current_user()): ?>
                                    <?= mb_strtolower(esc(current_user()->name)) ?>
                                <?php endif; ?>
                            </span>
                            <img class="img-profile rounded-circle"
                                 src="<?php echo base_url(); ?>/assets/img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>/logout" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">
                    Adaugare dispozitiv pentru clientul:
                    <small class="text-primary font-weight-bolder">
                        <i class="fa fa-user"></i> <?php echo $device_customer_id; ?></small>
                </h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="col-lg-12">
                            <?php if (isset($devices) && count($devices) > 0): ?>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nume</th>
                                            <th>Status</th>
                                            <th>Categorie</th>
                                            <th>Actiuni</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($devices as $device): ?>
                                            <tr>
                                                <td class="text-primary font-weight-bolder"> <i class="fa fa-user"></i> <?= $device['customer_id']; ?></td>
                                                <td> <?= $device['device_name']; ?></td>
                                                <td class="<?php echo $device['device_status'] == 1 ? 'text-danger': 'text-warning';  ?>">
                                                    <?php echo $device['device_status'] == 1 ? 'PRIMIT' : 'REPARAT'; ?>
                                                </td>
                                                <td><?= $device['category_name']; ?></td>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>/devices/edit/<?= $device['device_id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                                    <a href="<?php echo base_url(); ?>/devices/pdf/<?= $device['device_id']; ?>" class="btn btn-primary btn-sm">Printeaza</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nume</th>
                                            <th>Status</th>
                                            <th>Categorie</th>
                                            <th>Actiuni</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Dispozitiv nou</h1>
                                </div>
                                <form action="/devices/store" method="post">
                                    <?= csrf_field() ?>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="device_customer_id" name="device_customer_id" value="<?php echo $device_customer_id; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nume dispozitiv</label>
                                        <input type="text" class="form-control" id="device_name" name="device_name">
                                    </div>
                                    <div class="form-group">
                                        <label>Serie IMEI (International Mobile Equipment Identity)</label>
                                        <input type="text" class="form-control" id="device_serial" name="device_serial">
                                    </div>
                                    <div class="form-group">
                                        <label>Model</label>
                                        <input type="text" class="form-control" id="device_serial" name="device_model">
                                    </div>
                                    <div class="form-group">
                                        <label>Baterie</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="device_battery" id="device_battery">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Da
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="device_battery" id="device_battery">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Nu
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Incarcator</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="device_charger" id="device_charger">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Da
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="device_charger" id="device_charger">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Nu
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Categoria dispozitiv</label>
                                        <select class="custom-select" name="device_category">
                                            <option>-selecteaza-</option>
                                            <?php foreach($categories as $category): ?>
                                                <option value="<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Reparatie</label>
                                        <textarea class="form-control" name="device_repair"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Defect reclamat</label>
                                        <textarea class="form-control" name="device_claimed"></textarea>
                                    </div>
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Salveaza">
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

