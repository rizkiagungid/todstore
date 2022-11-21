<?php
include_once('resources/init.php');

if(isset($_POST['title'],$_POST['contents'],$_POST['category'])){
    
    $errors = array();
    
    $title      = trim($_POST['title']);
    $contents   = trim($_POST['contents']);
    
    if(empty($title)){
     $errors[] = 'You need to supply a title';
    }
    else if(strlen($title)>255){
     $errors[] = 'The title can not be longer than 255 characters';   
    }
    
    if(empty($contents)){
     $errors[] = 'You need to supply some text';   
    }
    if(!category_exists('id',$_POST['category'])){
    $errors[] = 'That category does not exists';   
    }
    
    if(empty($errors)){
        add_post($title,$contents,$_POST['category']);
        
        $id = mysqli_insert_id();
        
        header("Location:index.php?id={$id}");
        die();
    }
}
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
					<header class="entry-header">
		<?php
        if(isset($errors) && !empty($errors)){
            echo"<ul><li>",implode("</li><li>",$errors),"</li></ul>";
        }
        ?>
						<h2 class="entry-title">
							<h2>Add Post</h2>
						</h2> 				 
					
						<div class="entry-meta">
							        <form action='' method='post'>
     <div>
        <label for='title'>Title</label>
         <input type='text' name='title' value='<?php if(isset($_POST['title'])) echo $_POST['title']; ?>' />
     </div>
     <div>
         <label for='contents'>Content</label>
         <textarea name='contents' cols=20 rows=10><?php if(isset($_POST['contents'])) echo $_POST['contents']; ?></textarea>
      </div>
     <div>
       <label for='category'>Category</label>
       <select name='category'>
        <?php
        foreach(get_categories() as $category){
         ?>
         <option value='<?php echo $category['id'] ?>'><?php echo $category['name'] ?></option>
         <?php
        }
        ?>
       </select>
     </div>
     <p><input type='submit' value='Add Post' /></p>
     </form>
						</div> 
					 
					</header> 
	
					
					<div class="entry-content">
						<p><!--insert here--></p>
					</div> 


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
      <p><a href="manage_category.php?id=<?php echo $category['id'];?>"><?php echo $category['name']; ?></a>
     <?php  
     }
     ?>
				</div>

				<div class="widget widget_text group">
					<h3>Daily Quote of the Day</h3>
   				<p>What is success?</p><br/>
				<p>"Success is not final; failure is not fatal: It is the courage to continue that counts." - Winston S. Churchill</p>

   			</div>
   			
   		</div> <!-- end sidebar -->

   	</div> <!-- end row -->

   </div> <!-- end content-wrap -->
   

   <!-- Footer
   ================================================== -->
   <footer>

      <div class="row"> 

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