<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$userdata=$this->session->get_userdata()['ud'];
?>

<?php $this->load->view('include/header') ?>

<?php $this->load->view('include/sidebar') ?>
            <!-- /menu footer buttons -->

        <!-- top navigation -->
<?php $this->load->view('include/topbar') ?>
        <!-- /top navigation -->

<?php $this->load->view($page) ?>

        <!-- footer content -->
<?php $this->load->view('include/footer') ?>
