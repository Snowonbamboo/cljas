<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CLAJS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
  </head>
  <body id="course" class="modale-open" data-spy="scroll" data-target="#course-chapters">

		<section class="container">
			<div class="content row">
        <?php include "_/components/php/header.php"; ?>
				
		<section class="main col col-lg-8">
		 <?php include "_/components/php/registration_english.php"; ?>		
		</section>
	   <!-- main -->
				
		<section class="sidebar col col-lg-4">
    
		</section>
		<!-- sidebar -->
			</div>
	<!-- content -->
    <?php include "_/components/php/footer.php"; ?>
		</section>
		
	<!-- container -->

    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
    <div class="modal-backdrop fade in"></div>
    <script src="_/js/bootstrap.js"></script>
     
    <script>
   mixpanel.track("Page Viewed", {"Page Name": "Home Page",});
    </script>
    
     
    
    
    
  </body>
</html>
