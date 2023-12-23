<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>MyClub</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/acss.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/jcarousel.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="wrapper">

    
    <header>
      <div class="container ">
        <!-- hidden top area toggle link -->
       
        <!-- end toggle link -->
        <div style="margin-top:15px; margin-bottom:10px; margin-left:5px" class="row nomargin">
        
        <div class="row">
             <div>
              <a href="index.html"><img style="width:50px; height:70px" src="img/logo1.png" alt="" class="logo" /></a>
              <a href="index.html"><img style="width:250px; height:30px; margin-top:10px; margin-left:5px" src="img/l1.jpg" alt="" class="logo" /></a>
              
      </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
			  <form autocomplete="off" action="Demo.php" method="post">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown active">
                      <a href="index.php">Home </a>
                
                    </li>
                    <li class="dropdown">
                      <a href="#">About Us <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu" name="service">
                        	<?php 
										include('database.php');
										$result1 = mysqli_query($con, "SELECT * FROM `about_services` ORDER BY services");
										//print_r($result1);
										$row1 = mysqli_num_rows($result1);
										
										while($row = mysqli_fetch_array($result1))
										{
										 ?>
										     <li class="dropdown"><a href="#"><?php echo $row['services']; ?></a>
										     <ul class="dropdown-menu sub-menu-level1" name="s_service">
										      <?php 
										include('database.php');
										$service=$row['services'];
										if($row['services']){
										$result22 = mysqli_query($con, "SELECT * FROM `child_services` WHERE `services`='$service'");
										//print_r($result1);
										$row222 = mysqli_num_rows($result22);  
											while($row22 = mysqli_fetch_array($result22))
										{
										 ?>  <li class="dropdown"><a href="gallery.php?s1=<?php echo $row['services'];?> & s2=<?php echo $row22['sub_services'];?> & y=0 & m=0"><?php echo $row22['sub_services']; ?></a>
										     <ul class="dropdown-menu sub-menu-level2" name="year">
										      
										      
										       <?php 
										include('database.php');
										$sub_serv=$row22['sub_services'];
										$result33 = mysqli_query($con, "SELECT * FROM `gallery` WHERE `services`='$service' && `sub_services`='$sub_serv' GROUP  BY `year` ");
										//print_r($result1);
										$row33 = mysqli_num_rows($result33);
										
										while($row3 = mysqli_fetch_array($result33))
										{
										 ?>
										      <li class="dropdown"><a href="gallery.php?s1=<?php echo $service;?>&s2=<?php echo $sub_serv;?>&y=<?php echo $row3['year'];?>"><?php echo $row3['year']; ?></a>
										     </li>
                                            	<?php 	     
									} 
									?>  
										      
										        
										 </ul>        
										 </li>  
                                             	<?php 	     
									} 
									
										}
										else{
										$result11 = mysqli_query($con, "SELECT * FROM `about_services` ORDER BY services");
										//print_r($result1);
										$row111 = mysqli_num_rows($result11);
										
										while($row11 = mysqli_fetch_array($result11))
										{
										 ?>  <li class="dropdown"><a href="#"><?php echo $row11['services']; ?> </a></li>  
                                             	<?php 	     
									}
										}
									?>
                                             </ul>
                                             </li>
									<?php 	     
									} 
									?>
                        
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Registration<i class="icon-angle-down"></i></a>
                     <ul class="dropdown-menu" name="service">
                        
                          <li class="dropdown"><a href="census.php">Census of Jain</a></li>
                          </ul>
                    </li>
                  
                    <li class="dropdown">
                      <a href="history.php">History <i class="icon-angle-down"></i></a>
                       <ul class="dropdown-menu" name="menu">
                        	<?php 
										include('database.php');
										$history="History";
										$result1 = mysqli_query($con, "SELECT * FROM `About` WHERE `type`='$history'");
										//print_r($result1);
										$row1 = mysqli_num_rows($result1);
										
										while($row = mysqli_fetch_array($result1))
										{
										 ?>
										     <li class="dropdown"><a href="history.php?h1=<?php echo $row['menu'];?>"><?php echo $row['menu']; ?></a>
										     </li>
                                	<?php 	     
									} 
									?>  
					</ul>
                    </li>
                    <li>
                      <a href="contact.php">Contact </a>
                    </li>
                      <li>
                      <a href="login.php">User Login </a>
                    </li>  
					
                   
                  </ul>
				 
                </nav>
			</form>
              <!-- end navigation -->
			
          </div>
		  
          </div>
        </div>
         <div>

      </div>
      </div>
     
    </div>
    </div>
    </header>
   
    <!-- end header -->
<div>
    
</div>
    <section id="featured">
      <!-- start slider -->
      <!-- Slider -->
      <div id="nivo-slider">
        <div class="nivo-slider">
          <!-- Slide #1 image -->
          <img  src="img/sl1.png" alt="" />
          <img  src="img/sl2.png" alt="" />
          <img  src="img/sl3.png" alt="" />
          <img  src="img/sl4.png" alt=""  />
          <img  src="img/sl5.png" alt=""  />
          
        </div>
       
      </div>
      <!-- end slider -->
    </section>

    <section id="content" >
        
        <div id="cf" style="width:87%; height:115px; margin-bottom:50px;">
      
           <img style="width:100%; height:95%;" src="img/re3.png" alt="" class="bottom" />
           <!--<img style="width:260px; height:70px; margin-left:40%;" src="img/a1.png" alt="" class="a2" />-->
           <img style="width:100%; height:95%;" src="img/re2.png" alt="" class="top" />
           <img style="width:100%; height:95%;" src="img/re1.png" alt="" class="a1" />
           <img style="width:100%; height:95%;" src="img/re4.png" alt="" class="a2" />
           <img style="width:100%; height:95%;" src="img/re5.png" alt="" class="a3" />
           <img style="width:100%; height:95%;" src="img/re6.png" alt="" class="a4" />
           <img style="width:100%; height:95%;" src="img/re7.png" alt="" class="a5" />
           <img style="width:100%; height:95%;" src="img/re8.png" alt="" class="a6" />
           
      </div>
      <div class="container">
     
     <div class="row">
          <div class="span6">
            <h4><strong>Welcome To</strong> <img style="margin-left:5px; width:230px; height:100px;" src="img/a1.png"></h4>
            <?php>
            include('database.php');
									
										$result33 = mysqli_query($con, "SELECT * FROM `About` WHERE `type`='Home' ");
										//print_r($result1);
										$row33 = mysqli_num_rows($result33);
										
									   $row3 = mysqli_fetch_array($result33);
										
										 ?>
										     
                                         <p><?php echo $row3['des'];?> </p>
                            	
                          
          </div>
          <div class="span6">
            <!-- start flexslider -->
            <div class="flexslider">
              <ul class="slides">
                   
                 <li>
                  <img src="img/temp9.jpg" alt="" />
                </li>
                <li>
                  <img src="img/temp9.jpg" alt="" />
                </li>
                <li>
                  <img src="img/temp10.jpg" alt="" />
                </li>
                <li>
                  <img src="img/temp8.jpg" alt="" />
                </li>
              </ul>
            </div>
            <!-- end flexslider -->
          </div>
        </div>
      
      
       <div class="row">
          <div class="span12">
            <h4 class="heading"><strong>Video Gallery</strong></h4>
            <div class="row">
              <section id="projects">
                <ul id="thumbs" class="portfolio">
                  <!-- Item Project and Filter Name -->
                  
                  	<?php 
										include('database.php');
										$result1 = mysqli_query($con, "SELECT * FROM `gallery`");
										//print_r($result1);
										$row1 = mysqli_num_rows($result1);
										
										while($row = mysqli_fetch_array($result1))
										{
										 ?>
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="" href="<?php echo 'admin/upload/'.$row['pic'];?>">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img style="height:200px;" src="<?php echo 'admin/upload/'.$row['pic'];?>" alt="<?php echo $row['des'];?>">
                  </li>
                  	<?php
						}
					?>		
										
                 
                  <!-- End Item Project -->
                </ul>
              </section>
            </div>
          </div>
        </div>
        <!-- End Portfolio Projects -->
        <!-- divider -->
       
        <!-- end divider -->
        
      </div>
    </section>
    
    
  
    <footer>
     
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; MyClub - All right reserved.</span>
                </p>
                <div class="credits">
                  <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                  -->
                  Designed by <a href="#">Almighty's Technology Pvt. Ltd.</a>
                </div>
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/jquery.fancybox-media.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script src="js/jquery.nivo.slider.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/jquery.ba-cond.min.js"></script>
  <script src="js/jquery.slitslider.js"></script>
  <script src="js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>

</body>
</html>
