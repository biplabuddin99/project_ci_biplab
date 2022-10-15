
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        <div class="title_left">
            <h3>Change Password</h3>
        </div>

        <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
            <?php if($this->session->flashdata('msg')){
                echo $this->session->flashdata('msg');
            } ?>
        
            <div class="col-sm-8 offset-sm-2 mt-5">
                        <?php $attributes = array('class' => 'form-horizontal'); ?>
						<?= form_open('',$attributes) ?>
                        
                        <div class="row mb-3">
                            <label for="opassword" class="col-sm-3 col-form-label">Old Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="opassword" id="opassword">
                                <span class="help-block"><small><?= form_error('opassword'); ?></small></span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-sm-3 col-form-label">New Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password" id="password">
                                <span class="help-block"><small><?= form_error('password'); ?></small></span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-sm-3 col-form-label">Confirm Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="cpassword" id="cpassword">
                                <span class="help-block"><small><?= form_error('cpassword'); ?></small></span>
                            </div>
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                
            </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

