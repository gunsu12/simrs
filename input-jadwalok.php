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
							<h5 class="txt-dark">Jadwal OK</h5>
						</div>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="#">Dashboard</a></li>
								<li><a href="#"><span>Jadwal OK</span></a></li>
								<li class="active"><span>Input Pasien</span></li>
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
										<h6 class="panel-title txt-dark text-center">Form Input Pasien</h6>
									<div class="clearfix"></div>
								</div>
									<div class="clearfix"></div>
								</div>

								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">

											<form>
												<div class="col-md-12">
													<div class="form-group">
													<label class="control-label mb-10 text-left">No. Booking</label>
														<div class="input-group margin">

	                										<select class="form-control">
																<option></option>
																<option>2</option>
																<option>3</option>
																<option>4</option>
																<option>5</option>
															</select>
	                    									<span class="input-group-btn">
	                      									<button type="button" class="btn btn-info btn-flat"><i class="fa fa-search"></i></button>
	                    									</span>
	              										</div>
	              									</div>
												</div>


												<div class="col-md-2">
													<div class="form-group">
														<label class="control-label mb-10 text-left">No. Registrasi</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-md-4">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Nama Pasien</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-sm-2">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Tanggal Mulai OK</label>
														<div class='input-group date' id='tanggal'>
															<input type='text' class="form-control" />
															<span class="input-group-addon">
															<span class="fa fa-calendar"></span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-sm-2">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Waktu Mulai OK</label>
														<div class='input-group date' id='time'>
															<input type='text' class="form-control" />
															<span class="input-group-addon">
															<span class="fa fa-clock-o"></span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-md-2">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Ruang OK</label>
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
														<label class="control-label mb-10 text-left">No. Rekam Medis</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-md-2">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Jenis Kelamin</label>
														<select class="form-control">
															<option>1</option>
															<option>2</option>
															<option>3</option>
															<option>4</option>
															<option>5</option>
														</select>
													</div>
												</div>

												<div class="col-md-2">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Umur</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-md-2">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Berat Badan</label>
														<input type="text" class="form-control">
													</div>
												</div>
												
												<div class="col-md-2">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Tinggi Badan</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Diagnosa</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Tindakan</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Operator</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Asisten</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Anastesiolog</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Penata</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Instrument</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group">
														<label class="control-label mb-10 text-left">On Loop</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Dokter Anak</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Perawat Anak</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-md-2">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Kassa</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-md-2">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Dram Gass</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-md-2">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Darah</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-md-2">
													<div class="form-group">
														<label class="control-label mb-10 text-left">HB</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-md-2">
													<div class="form-group">
														<label class="control-label mb-10 text-left">BT</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-md-2">
													<div class="form-group">
														<label class="control-label mb-10 text-left">CT</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Alergi</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Antibiotika</label>
														<input type="text" class="form-control">
													</div>
												</div>

												<div class="col-sm-12">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Keterangan</label>
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