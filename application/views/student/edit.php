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
							<h3>students Update</h3>
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
									<br />
									<!-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> -->

									<?= form_open_multipart() ?>

									<input type="hidden" name="id" value="<?= set_value('id',$students->id) ?>" >
									
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name:</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" value="<?= set_value('name',$students->name) ?>" id="name" class="form-control" name="name">
												<span class="text-danger"><?= form_error('name') ?></span>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="father_name">Father Name:</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" value="<?= set_value('father_name',$students->father_name) ?>" id="father_name" class="form-control" name="father_name">
												<span class="text-danger"><?= form_error('father_name') ?></span>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="mother_name">Mother Name:</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" value="<?= set_value('mother_name',$students->mother_name) ?>" id="mother_name" class="form-control" name="mother_name">
												<span class="text-danger"><?= form_error('mother_name') ?></span>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="contact">Contact:</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" value="<?= set_value('contact',$students->contact) ?>" id="contact" class="form-control" name="contact">
												<span class="text-danger"><?= form_error('contact') ?></span>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="ad_class">Class:</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" value="<?= set_value('ad_class',$students->ad_class) ?>" id="ad_class" class="form-control" name="ad_class">
												<span class="text-danger"><?= form_error('ad_class') ?></span>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="address">Address:</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" value="<?= set_value('address',$students->address) ?>" id="address" class="form-control" name="address">
												<span class="text-danger"><?= form_error('address') ?></span>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="gender">Gender</label>
											<div class="col-md-3 mt-2 col-sm-3 ">
											<input type="radio" value="Female" id="gender" name="gender">Female</label>
											<input type="radio" value="Male" id="gender" name="gender">Male</label>
											<span class="text-danger"><?= form_error('gender') ?></span>
											</div>
                						 </div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="blood_group">Blood Group:</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" value="<?= set_value('blood_group',$students->blood_group) ?>" id="blood_group" class="form-control" name="blood_group">
												<span class="text-danger"><?= form_error('blood_group') ?></span>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="section">Section:</label>
											<div class="col-md-6 col-sm-6 ">
											<select value="<?= set_value('section',$students->section) ?>" name="section" id="section" class="form-control">
													<option><?= set_value('section',$students->section) ?></option>
													<option value="science">Science</option>
													<option value="Arts">Arts</option>
													<option value="Commerce">Commerce</option>
												</select>
												<span class="text-danger"><?= form_error('section') ?></span>
											</div>
										</div>
											<div class="item form-group">
												<label class="col-form-label col-md-3 col-sm-3 label-align" for="shift">Shift:</label>
												<div class="col-md-6 col-sm-6 ">
												<select value="<?= set_value('shift',$students->shift) ?>" name="shift" id="shift" class="form-control">
													<option><?= set_value('shift',$students->shift) ?></option>
													<option value="morning">morning</option>
													<option value="evening">evening</option>
												</select>
													<span class="text-danger"><?= form_error('shift') ?></span>
												</div>
											</div>
											<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="birthday">Birthday:</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="date" value="<?= set_value('birthday',$students->birthday) ?>" id="birthday" class="form-control" name="birthday">
												<span class="text-danger"><?= form_error('birthday') ?></span>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="religion">Religion:</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" value="<?= set_value('religion',$students->religion) ?>" id="religion" class="form-control" name="religion">
												<span class="text-danger"><?= form_error('religion') ?></span>
											</div>
										</div>
	  									<button class="btn btn-primary ml-8" type="submit">Save</button>
									</form>
								</div>
							</div>
						</div>
					</div>


			<!-- footer content -->
			<?php $this->load->view('include/footer') ?>
