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
							<h3>User List</h3>
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
                  <h2>Register form</h2>
                  <?= form_open('') ?>
                    <div class="mb-3 mt-3">
                      <label for="role">Role:</label>
                        <select class="form-control" id="role" name="role">
                            <option value="">select role</option>
                            <?php
                                if($role){
                                    foreach($role as $r){
                            ?>  
                                <option <?= set_value('role')==$r->id?"selected":"" ?> value="<?= $r->id ?>"> <?= $r->role_name ?> </option>
                            <?php }} ?>
                        </select>
                        <b class="text-danger"><?= form_error('role'); ?></b>
                    </div>
                    <div class="mb-3 mt-3">
                      <label for="name">Name:</label>
                      <input type="text" value="<?= set_value('name') ?>" class="form-control" id="name" placeholder="Enter name" name="name">
                      <b class="text-danger"><?= form_error('name'); ?></b>
                    </div>
                    <div class="mb-3 mt-3">
                      <label for="email">Email:</label>
                      <input type="email" value="<?= set_value('email') ?>" class="form-control" id="email" placeholder="Enter email" name="email">
                      <b class="text-danger"><?= form_error('email'); ?></b>
                    </div>
                    <div class="mb-3 mt-3">
                      <label for="contact">Contact No:</label>
                      <input type="text" value="<?= set_value('contact') ?>" class="form-control" id="contact" placeholder="Enter contact" name="contact">
                      <b class="text-danger"><?= form_error('contact'); ?></b>
                    </div>
                    <div class="mb-3 mt-3">
                      <label for="uname">User Name:</label>
                      <input type="text" value="<?= set_value('uname') ?>" class="form-control" id="uname" placeholder="Enter User name" name="uname">
                      <b class="text-danger"><?= form_error('uname'); ?></b>
                    </div>
                    <div class="mb-3">
                      <label for="pwd">Password:</label>
                      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                      <b class="text-danger"><?= form_error('pwd'); ?></b>
                    </div>
                    <div class="mb-3">
                      <label for="cpwd">Confirm Password:</label>
                      <input type="password" class="form-control" id="cpwd" placeholder="Enter confirm password" name="cpswd">
                      <b class="text-danger"><?= form_error('cpwd'); ?></b>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
								</div>
							</div>
						</div>
					</div>


			<!-- footer content -->
			<?php $this->load->view('include/footer') ?>
