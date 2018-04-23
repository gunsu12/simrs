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
							<h5 class="txt-dark">Ruang OK</h5>
						</div>
					
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="#">Dashboard</a></li>
								<li><a href="#"><span>OK</span></a></li>
								<li class="active"><span>Ruang OK</span></li>
							</ol>
						</div>
						<!-- /Breadcrumb -->
					
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Editing Table</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="table-wrap">
											<table id="footable_2" class="table" data-paging="true" data-filtering="true" data-sorting="true">
												<thead>
												<tr>
													<th data-name="kd_ruangan" data-breakpoints="xs" data-type="number">Kode Ruangan</th>
													<th data-name="deskripsi">Deskripsi</th>
													<th data-name="ipkomputer">IP Komputer</th>
												</tr>
												</thead>
												<tbody>
												<tr data-expanded="true">
													<td>1</td>
													<td>Dennise</td>
													<td>Fuhrman</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Elodia</td>
													<td>Weisz</td>
												</tr>
												</tbody>
											</table>

											<!--Editor-->
											<div class="modal fade" id="editor-modal" tabindex="-1" role="dialog" aria-labelledby="editor-title">
											
											<div class="modal-dialog" role="document">
												<form class="modal-content form-horizontal" id="editor">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
														<h5 class="modal-title" id="editor-title">Tambah Ruangan</h5>
													</div>
													<div class="modal-body">
														<input type="number" id="kd_ruangan" name="kd_ruangan" class="hidden"/>

														<div class="form-group required">
															<label for="deskripsi" class="col-sm-3 control-label">Deskripsi</label>
															<div class="col-sm-9">
																<input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="First Name" required>
															</div>
														</div>

														<div class="form-group required">
															<label for="ipkomputer" class="col-sm-3 control-label">IP Komputer</label>
															<div class="col-sm-9">
																<input type="text" class="form-control" id="ipkomputer" name="ipkomputer" placeholder="Last Name" required>
															</div>
														</div>
														
													</div>
													<div class="modal-footer">
														<button type="submit" class="btn btn-primary">Simpan</button>
														<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
													</div>
												</form>
											</div>
										</div>
										<!--/Editor-->
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