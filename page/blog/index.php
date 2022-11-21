<?php
include_once('resources/init.php');
//$posts = (isset($_GET['id'])) ? get_posts($_GET['id']) : get_posts();
$posts = get_posts((isset($_GET['id']))? $_GET['id'] : null); 
?>
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>K!</title>
	<meta name="description" content="">  
	<meta name="author" content="">

	<!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">  
	<link rel="stylesheet" href="css/media-queries.css"> 

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="top">

   	<div class="row">

   		<div class="header-content twelve columns">

		      <h1 id="logo-text"><a href="index.php" title="">K!</a></h1>
				<p id="intro">You want to be at my level? CLIMB BITCH!</p>

			</div>			

	   </div>

	   <nav id="nav-wrap"> 

	   	<a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
		   <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>

	   	<div class="row">    		            

			   	<ul id="nav" class="nav">
			      	<li class="current"><a href="index.php">Home</a></li>
			      	<!--<li class="has-children"><a href="#">Dropdown</a>
	                  <ul>
	                     <li><a href="#">Submenu 01</a></li>
	                     <li><a href="#">Submenu 02</a></li>
	                     <li><a href="#">Submenu 03</a></li>
	                  </ul>
	               </li>
	               <li><a href="demo.html">Demo</a></li>	
	               <li><a href="archives.html">Archives</a></li>
			      	<li class="has-children"><a href="single.html">Blog</a>
							<ul>
	                     <li><a href="blog.html">Blog Entries</a></li>
	                     <li><a href="single.html">Single Blog</a></li>	                     
	                  </ul>
			      	</li>	-->	      	
			      	<li><a href="page.html">About</a></li>
			   	</ul> <!-- end #nav -->			   	 

	   	</div> 

	   </nav> <!-- end #nav-wrap --> 	     

   </header> <!-- Header End -->

   <!-- Content
   ================================================== -->
   <div id="content-wrap">

   	<div class="row">

   		<div id="main" class="eight columns">

	   		<article class="entry">
		<?php
     foreach($posts as $post){
      ?>
					<header class="entry-header">

						<h2 class="entry-title">
							<h2><a href='index.php?id=<?php echo $post['post_id']; ?>' ><?php echo $post['title']; ?></a></h2>
						</h2> 				 
					
						<div class="entry-meta">
							<ul>
								<li> <?php echo date('d-m-y h:i:s',strtotime($post['date_posted'])); ?></li>
								<span class="meta-sep">&bull;</span>								
								<li><a href="#" title="" rel="category tag">In <a href='category.php?id=<?php echo $post['category_id']; ?>' ><?php echo "<font color='green'>".$post['name']."</font>"; ?></a></li>
								<span class="meta-sep">&bull;</span>
								<li><!-- Blogger user--></li>
							</ul>
						</div> 
					 
					</header> 
	
					
					<div class="entry-content">
						<p><?php echo nl2br($post['contents']); ?></p>
					</div> 
									 <?php   
     }
     ?>

				</article> <!-- end entry -->

   		</div> <!-- end main -->

   		<div id="sidebar" class="four columns">

   			<div class="widget widget_search">
                  <h3>Search</h3> 
                  <form action="#">

                     <input type="text" value="Search here..." onblur="if(this.value == '') { this.value = 'Search here...'; }" onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search">
                     <input type="submit" value="" class="submit-search">

                  </form>
               </div>

   			<div class="widget widget_categories group">
   				<h3>Categories.</h3> 
   				<?php
     foreach(get_categories() as $category){
     ?>
      <p><a href="category.php?id=<?php echo $category['id'];?>"><?php echo $category['name']; ?></a>
     <?php  
     }
     ?>
				</div>

				<div class="widget widget_text group">
					<h3>Daily Quote of the Day</h3>
   				<p>What is success?</p><br/>
				<p>"Success is not final; failure is not fatal: It is the courage to continue that counts." - Winston S. Churchill</p>

   			</div>


           <!-- <div class="widget widget_popular">
               <h3>Popular Post.</h3>

               <ul class="link-list">
                  <li><a href="#">insert here</a></li>
                  <li><a href="#">insert here</a></li>
                  <li><a href="#">insert here</a></li>                     
               </ul>
                  
            </div> -->
   			
   		</div> <!-- end sidebar -->

   	</div> <!-- end row -->

   </div> <!-- end content-wrap -->
   

   <!-- Footer
   ================================================== -->
   <footer>

      <div class="row"> 

      	<!--<div class="twelve columns">	
				<ul class="social-links">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>               
               <li><a href="#"><i class="fa fa-github-square"></i></a></li>
               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#"><i class="fa fa-flickr"></i></a></li>               
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>			
      	</div> -->
      <!--
         <div class="six columns info">

            <h3>About The Blog</h3> 

            <p>Just Keep it Simple!
            </p>

         </div> -->

        <!-- <div class="four columns">

            <h3>Photostream</h3>
            
            <ul class="photostream group">
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
               <li><a href="#"><img alt="thumbnail" src="images/thumb.jpg"></a></li>
            </ul>           

         </div> -->

       <!--  <div class="two columns">
            <h3 class="social">Navigate</h3>

            <ul class="navigate group">
               <li><a href="#">Home</a></li>
               <li><a href="#">Blog</a></li>
               <li><a href="#">Demo</a></li>
               <li><a href="#">Archives</a></li>
               <li><a href="#">About</a></li>
            </ul>
         </div> -->

         <p class="copyright">&copy; Copyright 2017. The Blog. &nbsp; Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a>.</p>
        
      </div> <!-- End row -->

      <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-chevron-up"></i></a></div>

   </footer> <!-- End Footer-->


   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>  
   <script src="js/main.js"></script>

</body>

</html>