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
                                <th>Email:</th>
                                <th>Contact No:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if($auth_user){
                                foreach($auth_user as $st){
                            ?>
                            <tr>
                                <td><?= $st->id ?></td>
                                <td><?= $st->name ?></td>
                                <td><?= $st->email_address ?></td>
                                <td><?= $st->contact_no ?></td>
                                <td>
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
