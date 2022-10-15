
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        <div class="title_left">
            <h3>User Profile</h3>
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
                        <div class="x_title">
                            <h2>User Report <small>Activity report</small></h2>
                        </div>
                        <?php if($this->session->flashdata('msg')){
                        echo $this->session->flashdata('msg');
                       } ?>
                
                      <div class="col-sm-8 offset-sm-2">
                                <?php $attributes = array('class' => 'form-horizontal'); ?>
                                <?= form_open_multipart('',$attributes) ?>
                                
                                <div class="row mb-3">
                                    <label for="uname" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= set_value('name', $userdata->name) ?>" name="name" id="uname">
                                        <span class="help-block"><small><?= form_error('name'); ?></small></span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email_address" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" id="email_address" name="email_address" class="form-control" value="<?= set_value('email_address)', $userdata->email_address) ?>">
                                        <span class="help-block"><small><?= form_error('email_address'); ?></small></span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="username" name="username" class="form-control" value="<?= set_value('username)', $userdata->username) ?>">
                                        <span class="help-block"><small><?= form_error('username'); ?></small></span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="contact_no" class="col-sm-2 col-form-label">Contact</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="contact_no" name="contact_no" class="form-control" value="<?= set_value('contact_no)', $userdata->contact_no) ?>">
                                        <span class="help-block"><small><?= form_error('contact_no'); ?></small></span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                                    <div class="col-sm-10">
                                        <input type="file" id="photo" name="photo" class="form-control" onchange="pview(this)">
										<img src="<?= base_url('upload/profile/demo.jpg') ?>"id="photo_p" class="my-1" width="100px" alt="">
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
<script>
	function pview(e){
		document.getElementById('photo_p').src=window.URL.createObjectURL(e.files[0]);
	}
</script>

