<?php $this->load->view('include/header') ?>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">

<?php $this->load->view('include/sidebar') ?>

			<!-- top navigation -->
<?php $this->load->view('include/topbar') ?>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Student List</h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Design <small>different form elements</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>ID:</th>
											<th>Name:</th>
											<th>Father Name:</th>
											<th>Mother Name:</th>
											<th>Contact:</th>
											<th>Class:</th>
											<th>Address:</th>
											<th>Gender:</th>
											<th>Blood Group:</th>
											<th>Section:</th>
											<th>Shift:</th>
											<th>Birthday:</th>
											<th>Religion:</th>
											<th>Status</th>
											<th>Action:</th>
										</tr>
									</thead>
									<tbody>
										<?php
										if($student){
											foreach($student as $st){
												?>
										<tr>
											<td><?= $st->id ?></td>
											<td><?= $st->name ?></td>
											<td><?= $st->father_name ?></td>
											<td><?= $st->mother_name ?></td>
											<td><?= $st->contact ?></td>
											<td><?= $st->ad_class ?></td>
											<td><?= $st->address ?></td>
											<td><?= $st->gender ?></td>
											<td><?= $st->blood_group ?></td>
											<td><?= $st->section ?></td>
											<td><?= $st->shift ?></td>
											<td><?= $st->birthday ?></td>
											<td><?= $st->religion ?></td>
											<td><?= $st->paid_status==1?'paid':'due' ?></td>
											<td>
											<a href="<?= base_url() ?>admission/edit/<?= $st->id ?>"class="btn btn-sm btn-warning">Edite</a>
											<a href="<?= base_url() ?>admission/delete/<?= $st->id ?>" class="btn btn-sm btn-danger">Delet</a>
											</td>
										</tr>
										<?php	}
										} ?>

									</tbody>
								</table>
								</div>
							</div>
						</div>
					</div>


			<!-- footer content -->
			<?php $this->load->view('include/footer') ?>
