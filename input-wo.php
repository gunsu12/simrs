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
							<h5 class="txt-dark">Work Order</h5>
						</div>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="#">Dashboard</a></li>
								<li><a href="#"><span>Work Order</span></a></li>
								<li class="active"><span>Form WO</span></li>
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
										<h6 class="panel-title txt-dark text-center">Form Work Order</h6>
									<div class="clearfix"></div>
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

												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Tanggal & Waktu</label>
														<div class='input-group date' id='date'>
															<input type='text' class="form-control" />
															<span class="input-group-addon">
															<span class="fa fa-calendar"></span>
															</span>
														</div>
													</div>
												</div>
												
												<div class="col-sm-12">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Permasalahan</label>
														<textarea class="form-control" rows="5"></textarea>
													</div>
												</div>

												<h6 class="txt-dark capitalize-font text-center">Petugas Yang Mengerjakan</h6>
												<hr class="light-grey-hr"/>

												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Nama Petugas</label>
														<input type="text" class="form-control">
													</div>

													
												</div>

												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Tanggal & Waktu Pengerjaan</label>
														<div class='input-group date' id='datetimepicker'>
															<input type='text' class="form-control" />
															<span class="input-group-addon">
															<span class="fa fa-calendar"></span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-sm-12">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Penyelesaian</label>
														<textarea class="form-control" rows="5"></textarea>
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