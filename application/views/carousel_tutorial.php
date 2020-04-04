<!DOCTYPE html>
<!------------------------------------------------------------------------------------------------------------
-- Carousel_tutorial page is where the carousel will be displayed. -------------------------------------------
--------------------------------------------------------------------------------------------------------------
-- Author: Irene Gayle Roque ---------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------->
<html>
<head>
	<title>Carousel</title>
	<!-- Links of Slick CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/slick/slick.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/slick/slick-theme.css'); ?>">
</head>
<body>
	
	<div class="my-carousel-example">
		<div><img src="<?php echo base_url('assets/images/image1.jpg'); ?>"></div>
		<div><img src="<?php echo base_url('assets/images/image2.jpg'); ?>"></div>
		<div><h2>This is an example of a Carousel</h2></div>
	</div>
    
    <!-- Links of Slick Scripts and Jquery -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/slick/slick.min.js'); ?>"></script>
    <script type="text/javascript">
    	//prepare and add additional parameters to slick function
    	$(document).ready(function(){
    		$('.my-carousel-example').slick({
    			arrows: true,
    			autoplay: true,
    			autoplaySpeed: 1000
    		});
    	});
    </script>
    <!-- Add styles to the page -->
    <style type="text/css">
    	.my-carousel-example{
    		margin: auto;
    		width: 400px;
    	}
    	body{
    		background-color: #888;
    	}
    </style>

</body>
</html>