
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
							<h3 align="center" class="mt-3 mb-3">All Student List</h3>	  
					<!-- admission form start-->
					<table class="table table-hover">
									<thead>
										<tr>
											<th>ID:</th>
											<th>Name:</th>
											<th>Father Name:</th>
											<th>Class:</th>
											<th>Gender:</th>
											<th>Section:</th>
											<th>Shift:</th>
											<th>Paid Status:</th>
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
											<td><?= $st->ad_class ?></td>
											<td><?= $st->gender ?></td>
											<td><?= $st->section ?></td>
											<td><?= $st->shift ?></td>
											<td><?= $st->paid_status ?></td>
											<td>
											</td>
										</tr>
										<?php	}
										} ?>

									</tbody>
								</table>

					<!-- admission form end-->
			</div>
		</div>	
	</section>		
			
	<section class="blog_section p-0 m-0 bg-success bg-gradient">
	<!-- Footer Section -->
		
		<footer id="contact" class="bg-secondary text-white pt-3">
			<div class="container">
				<div class="row">
						<div class="col-md-4 col-sm-6">
							<h3 class="p-0 m-0">Mohsin College</h3>
								<hr class="bg-white">	
							<p><i class="fas fa-map-marker"></i>College Road, Chittagong</p>
							<p><i class="fas fa-phone"></i>Phone : 02333364690</p>
							<p><i class="fas fa-print"></i>Fax : 02333365485</p>	
							<p><i class="fas fa-mail-bulk"></i>Email : mohsincollege_ctg@yahoo.com</p>		
						</div>
						<div class="col-md-4 col-sm-6">
							<h3 class="p-0 m-0">Important links</h3>
							<hr>
							<ul>
								<li><a class="text-white" href="http://www.moedu.gov.bd/">Ministry of Education</a></li>
								<li><a class="text-white" href="http://www.dshe.gov.bd/">Department of Secondary and Higher Education</a></li>
								<li><a class="text-white" href="http://www.nu.edu.bd/">National University</a></li>
								<li><a class="text-white" href="http://www.naem.gov.bd/">National Academy of Education Management (NAEM)</a></li>
								<li><a class="text-white" href="http://www.nctb.gov.bd/">National Curriculum and Textbook Board</a></li>
							</ul>
						</div>
						<div class="col-md-4 col-sm-6">
							<h3 class="p-0 m-0">Important links</h3>
							<hr>
							<ul>
								<li><a class="text-white" href="https://bise-ctg.portal.gov.bd/">Board of Secondary and Higher Secondary Education, Chittagong</a></li>
								<li><a class="text-white" href="http://www.banbeis.gov.bd/">banbais</a></li>
								<li><a class="text-white" href="https://www.teachers.gov.bd/">Teacher Batayan</a></li>
								<li><a class="text-white" href="http://www.ugc.gov.bd/en">Bangladesh University Grants Commission</a></li>
								<li><a class="text-white" href="http://www.infokosh.gov.bd/">National e-database</a></li>
							</ul>
						</div>              
				</div>
			</div>
		</footer>	

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
