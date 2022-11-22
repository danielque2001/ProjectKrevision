<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>


<body class="hold-transition skin-blue layout-top-nav">


	<?php include 'includes/navbar.php'; ?>
    
    <div class ="trybg1">
        
    
    <div class="delform">
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <img src="images/SWITCHlogo.png" class ="switch">
        <h1 class ="aboutt"> PROJECT K</h1>
        
        <h4 class="About">
        The sole purpose of this website is to be a platform for an online ecommerce for 
        those who want to venture on selling mechanical keyboards. We offer pre built mechanical keyboards and 
        customization for your own keyboard here in our website. This system was created in compliance for our final project in our 
        subject Capstone 2.
            <br>
            <br>
            <br>
            TSM-4B | GROUP 5
            <br>
            <br>
           
            Kurth Clarenze Novesteras <br>
            Aaron Joshua Quesada <br>
            Daniel John Rey Que <br>
            Benito Catubay III <br>
          

            
            </h4>
        </form>
    </div>
    </div>
    <div class ="quotation">
								<img src ="images/quotation.png" width="110" height="60">
					</div>
					<div class ="quote">
		<p>I love playing. The keyboard is my journal.</p>
					</div>
					<div class ="quotename">
		<p> — Pharrell Williams —</p>
					</div>

    <?php include 'includes/footer.php'; ?>
    

    <?php include 'includes/scripts.php'; ?>
    <style type="text/css">
    .switch{
      width: 12%;
      height: 20%;

        position: absolute;
        left: 50%;
        right: 50%;
        transform: translate(-50%, -85%);
     
      
    }

    </style>
    </body>