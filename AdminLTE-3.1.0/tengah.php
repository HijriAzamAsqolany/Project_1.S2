<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Program Studi Teknik Informatika</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="ti.php">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Praktikum</a></li>
						<li class="breadcrumb-item"><a href="#">Praktikum 1</a></li>
						<li class="breadcrumb-item active">01_info</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">

		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<!-- Default box -->
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">PHP Info</h3>

							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
									<i class="fas fa-minus"></i>
								</button>
								<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
									<i class="fas fa-times"></i>
								</button>
							</div>
						</div>
						<div class="card-body">
                            <div id="layoutSidenav">
                                        <div id="layoutSidenav_nav">
                                            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                                                <div class="sb-sidenav-menu">
                                                    <div class="nav">
                                                        <div class="sb-sidenav-menu-heading">Core</div>
                                                        <a class="nav-link" href="index.html">
                                                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                                            Dashboard
                                                        </a>
                                                        <div class="sb-sidenav-menu-heading">Interface</div>
                                                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                                            Layouts
                                                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                        </a>
                                                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                                            <nav class="sb-sidenav-menu-nested nav">
                                                                <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                                                <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                                            </nav>
                                                        </div>
                                                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                                            Pages
                                                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                        </a>
                                                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                                                    Authentication
                                                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                                </a>
                                                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                                                    <nav class="sb-sidenav-menu-nested nav">
                                                                        <a class="nav-link" href="login.html">Login</a>
                                                                        <a class="nav-link" href="register.html">Register</a>
                                                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                                                    </nav>
                                                                </div>
                                                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                                                    Error
                                                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                                </a>
                                                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                                                    <nav class="sb-sidenav-menu-nested nav">
                                                                        <a class="nav-link" href="401.html">401 Page</a>
                                                                        <a class="nav-link" href="404.html">404 Page</a>
                                                                        <a class="nav-link" href="500.html">500 Page</a>
                                                                    </nav>
                                                                </div>
                                                            </nav>
                                                        </div>
                                                        <div class="sb-sidenav-menu-heading">Addons</div>
                                                        <a class="nav-link" href="charts.html">
                                                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                                            Charts
                                                        </a>
                                                        <a class="nav-link" href="tables.html">
                                                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                                            Tables
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="sb-sidenav-footer">
                                                    <div class="small">Logged in as:</div>
                                                    Start Bootstrap
                                                </div>
                                            </nav>
                                        </div>
                                        <div id="layoutSidenav_content">
                                            <main>
                                                <div class="container-fluid px-4">
                                                    <h1 class="mt-4">Dashboard</h1>
                                                    <ol class="breadcrumb mb-4">
                                                        <li class="breadcrumb-item active">Dashboard</li>
                                                    </ol>
                                                    <div class="row">
                                                        <div class="col-xl-3 col-md-6">
                                                            <div class="card bg-primary text-white mb-4">
                                                                <div class="card-body">Primary Card</div>
                                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-md-6">
                                                            <div class="card bg-warning text-white mb-4">
                                                                <div class="card-body">Warning Card</div>
                                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-md-6">
                                                            <div class="card bg-success text-white mb-4">
                                                                <div class="card-body">Success Card</div>
                                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-md-6">
                                                            <div class="card bg-danger text-white mb-4">
                                                                <div class="card-body">Danger Card</div>
                                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="card mb-4">
                                                                <div class="card-header">
                                                                    <i class="fas fa-chart-area me-1"></i>
                                                                    Area Chart Example
                                                                </div>
                                                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="card mb-4">
                                                                <div class="card-header">
                                                                    <i class="fas fa-chart-bar me-1"></i>
                                                                    Bar Chart Example
                                                                </div>
                                                                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                                            </div>
                                                        </div>
                                                    </div>                            
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include_once 'footer.php';
?>