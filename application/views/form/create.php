
<!doctype html>
<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"> 
		<title>Mohsin College</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js">
	</script>
</head>

<body class="hero-anime">
	<section class="">
		<div class="container">
			<img src="<?= base_url('assets/images/heading1.png') ?>">	
			<a href="<?= base_url() ?>./" class="btn btn-primary float-end mt-5">Home</a>
				<div class="row">
				<br/>	  
					<div  align="center" class="row bg-secondary text-white"><h1> Online Admission(2021-2022)</h1></div>
							<h3 align="center" class="mt-3 mb-3">Apply Admission</h3>	  
					<!-- admission form start-->
					<div class="">
						<?= form_open_multipart() ?>

						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name:</label>
							<div class="col-md-6 col-sm-6">
								<input type="text" value="<?= set_value('name') ?>" id="name" class="form-control" name="name">
								<span class="text-danger"><?= form_error('name') ?></span>
							</div>
						</div>
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="father_name">Father Name:</label>
							<div class="col-md-6 col-sm-6 ">
								<input type="text" value="<?= set_value('father_name') ?>" id="father_name" class="form-control" name="father_name">
								<span class="text-danger"><?= form_error('father_name') ?></span>
							</div>
						</div>
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="mother_name">Mother Name:</label>
							<div class="col-md-6 col-sm-6 ">
								<input type="text" value="<?= set_value('mother_name') ?>" id="mother_name" class="form-control" name="mother_name">
								<span class="text-danger"><?= form_error('mother_name') ?></span>
							</div>
						</div>
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="contact">Contact:</label>
							<div class="col-md-6 col-sm-6 ">
								<input type="text" value="<?= set_value('contact') ?>" id="contact" class="form-control" name="contact">
								<span class="text-danger"><?= form_error('contact') ?></span>
							</div>
						</div>
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="ad_class">Class:</label>
							<div class="col-md-6 col-sm-6 ">
								<input type="text" value="<?= set_value('ad_class') ?>" id="ad_class" class="form-control" name="ad_class">
								<span class="text-danger"><?= form_error('ad_class') ?></span>
							</div>
						</div>
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="address">Address:</label>
							<div class="col-md-6 col-sm-6 ">
								<input type="text" value="<?= set_value('address') ?>" id="address" class="form-control" name="address">
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
								<input type="text" value="<?= set_value('blood_group') ?>" id="blood_group" class="form-control" name="blood_group">
								<span class="text-danger"><?= form_error('blood_group') ?></span>
							</div>
						</div>
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="section">Section:</label>
							<div class="col-md-6 col-sm-6 ">
							<select value="<?= set_value('section') ?>" name="section" id="section" class="form-control">
									<option value="">select</option>
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
								<select value="<?= set_value('shift') ?>" name="shift" id="shift" class="form-control">
									<option value="">select</option>
									<option value="morning">morning</option>
									<option value="evening">evening</option>
								</select>
									<span class="text-danger"><?= form_error('shift') ?></span>
								</div>
							</div>
							<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="birthday">Birthday:</label>
							<div class="col-md-6 col-sm-6 ">
								<input type="date" value="<?= set_value('birthday') ?>" id="birthday" class="form-control" name="birthday">
								<span class="text-danger"><?= form_error('birthday') ?></span>
							</div>
						</div>
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="religion">Religion:</label>
							<div class="col-md-6 col-sm-6 ">
								<input type="text" value="<?= set_value('religion') ?>" id="religion" class="form-control" name="religion">
								<span class="text-danger"><?= form_error('religion') ?></span>
							</div>
						</div>
						<button class="btn btn-primary ml-8" type="submit">Save</button>
						</form>

					</div>

					<!-- admission form end-->
			</div>
		</div>	
	</section>	
		
			<!-- Jquery -->
			<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
			<!-- bootstrap -->
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
			<!-- carousel -->
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>	
			<script src="assets/js/bs-init.js"></script>	
</body>
</html>
