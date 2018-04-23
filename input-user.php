<?php
include 'header-form.php';
include 'sidebar1.php';
?>

<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">User</h5>
						</div>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="#">Dashboard</a></li>
								<li><a href="#"><span>User</span></a></li>
								<li class="active"><span>Tambah User</span></li>
							</ol>
						</div>
						<!-- /Breadcrumb -->
					
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="panel-heading">
										<h6 class="panel-title txt-dark text-center">Form Tambah User
									</div>
									<div class="clearfix"></div>
								</div>

								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form>
												<div class="col-md-4">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Nama</label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Unit</label>
														<select class="form-control">
															<option>1</option>
															<option>2</option>
															<option>3</option>
															<option>4</option>
															<option>5</option>
														</select>
													</div>
												</div>

												<div class="col-md-4">
													<div class="form-group">
														<label class="control-label mb-10 text-left">User ID</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-md-4">
													<div class="form-group">
														<label class="control-label mb-10 text-left">NIK</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-md-4">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Kata Sandi</label>
														<input type="password" class="form-control">
													</div>
												</div>
												
												<div class="col-md-4">
													<div class="form-group"> 
														<label class="control-label mb-10 text-left">Konfirmasi Kata Sandi</label>
														<input type="password" class="form-control">
													</div>
												</div>

												

												<div class="form-actions col-sm-12 pull-right">
															<button type="submit" class="btn btn-success mr-10"> Simpan</button>
															<button type="reset" class="btn btn-default">Batal</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
					
				
				</div>
<?php
include 'footer-form.php';
?>