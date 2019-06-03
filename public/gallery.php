<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=false;">
    <meta name="description" content="5th Frets guitar repairs, based in clacton-on-sea, for all your guitar set-up, customisation, modification and repair needs" />
     <meta name="keywords" content="Guitar, repairs, servicing, modification, fretting, set-up, customisation, bodywork, electronics, restoration, Clacton, Essex">
    <title>5th Frets Guitar Repairs</title>
    <link rel="icon" type="image/png" href="images/main/smallIcon.png">
    <link rel="stylesheet" href="styles/lightbox.css" >
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="http://twitter.github.io/bootstrap/assets/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="styles/bootstrap.css">
    <link rel="stylesheet" href="styles/styles.css">
  </head>
  <body>
    <div>

				<nav class="navbar navbar-inverse">
					<div class="container">
					    
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand" href="index.html">5th Frets</a>
					    </div>

					    
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      <ul class="nav navbar-nav">
					        
					        
					        <li class="dropdown">
		                        <a to="" class="dropdown-toggle services" data-toggle="dropdown">Services</a>
		                        <ul class="dropdown-menu">
		                        	<li><a href="services/setup.html"><i class="fa fa-plus"></i>Set-up</a></li>
		                        	<li><a href="services/fretting.html"><i class="fa fa-plus"></i>Fretting</a></li>
		                            <li><a href="services/bodywork.html"><i class="fa fa-plus"></i>Bodywork</a></li>
		                            <li><a href="services/electronicRepair.html"><i class="fa fa-plus"></i>Electronic Repair</a></li>
		                            <li><a href="services/electronicModification.html"><i class="fa fa-plus"></i>Electronic Modification</a></li>
		                            <li><a href="services/customisation.html"><i class="fa fa-plus"></i>Customisation</a></li>
		                            <li><a href="services/restoration.html"><i class="fa fa-plus"></i>Restoration</a></li>
		                        </ul>
			                </li>
			                <li><a href="gallery.php">Gallery</a></li>
			                <li><a href="prices.html">Prices</a></li>
			              
			                <li><a href="contact.html">Contact</a></li>
						  </ul>
					    </div>
					   
					</div>
				</nav>



				<div class="container">
			 		<div class="innerContainer">
				
				
						<h1 class="page-header">Gallery</h1>
						

						<div class="row">
						<?php
							$folder_path = 'images/gallery/'; //image's folder path

							$num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

							$folder = opendir($folder_path);
							 
							if($num_files > 0)
							{
							 while(false !== ($file = readdir($folder))) 
							 {
							  $file_path = $folder_path.$file;
							  $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
							  $str_length = strlen($file_path);
							  $sub_length = $str_length - 19;
							  if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') 
							  {
							   ?>
							            
							            <div class="col-sm-4 text-center"><a href="<?php echo $file_path; ?>" data-title="<?php echo substr($file_path,15, $sub_length) ?>" data-lightbox="guitars"><img src="<?php echo $file_path; ?>" class="gallery" height="250px"/></a>
							            <p><?php echo substr($file_path,15, $sub_length) ?></p></div>
							            <?php
							  }
							 }
							}
							else
							{
							 echo "the folder was empty !";
							}
							closedir($folder);
							
							

							?>
						
							
						
						</div>
					</div>
				</div>



			 	<footer class="footer">
     				<div class="container">
        				<p class="smallExtraPadding">5th Frets website designed by Nick Short &copy; 2017</p>
      				</div>
    			</footer>
			</div>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_7QDan87iL7HaPV6iAokpCFwcWkv9_cE" async defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-transition.js"></script>
    <script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-collapse.js"></script>
    <script type="text/javascript" src="scripts/lightbox.js"></script>
    
  </body>
</html>