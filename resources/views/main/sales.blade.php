<!doctype html>
<html lang="en">
  <head>
  	<title>Contact </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
<link rel="stylesheet" href="{{  asset('cssm/styleee.css') }}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-12 d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-12 p-4">
									<h3 class="mb-12">Add</h3>
									<div id="form-message-warning" class="mb-12"></div> 
				      		 
									<form method="POST" id="contactForm" name=" " action="{{route('good')}}">
                                      {{ csrf_field() }}
										<div class="row">
											<div class="col-md-6">
												
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="text" class="form-control" name="Person" id="email" placeholder="Person">
												</div>
											</div>
											<div class="col-md-12">
												
											</div>
											 <input type="hidden" id="custId" name="name" value="name">
                                             <input type="hidden" id="custId" name="email" value="<?php echo uniqid();  ?>">
                                             <input type="hidden" id="custId" name="password" value="gacss">

											<div class="col-md-12">
												
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Done" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						 	</div>
					</div>
				</div>
			</div>
		</div>
	</section>

  
	</body>
</html>

