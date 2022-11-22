<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Most Trending Products</b></h3>
	  	</div>
	  	<div class="box-body">
	  		<ul id="trending">
	  		<?php
	  			$now = date('Y-m-d');
	  			$conn = $pdo->open();

	  			$stmt = $conn->prepare("SELECT * FROM products WHERE date_view=:now ORDER BY counter DESC LIMIT 10");
	  			$stmt->execute(['now'=>$now]);
	  			foreach($stmt as $row){
	  				echo "<li><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></li>";
	  			}

	  			$pdo->close();
	  		?>
	    	<ul>
	  	</div>
	</div>
</div>



<div class="row">
	<div class='box box-solid'>
	  	<div class='box-header with-border'>
	    	<h3 class='box-title'><b>Mechanical Keyboard Building Tutorials</b></h3>
	  	</div>
	  	<div class='box-body'>
		  <ul id="buildingtutorials">
		  
		  <a class="btn btn-social-icon btn-youtube" href ="https://www.youtube.com/watch?v=k-0pYy9I91A&list=PLN1Xo77TPNGhRd3qg1Nw6cKbLim4kQbtL"><i class="fa fa-brands fa-youtube"></i></a>
		  <a href="https://www.youtube.com/watch?v=k-0pYy9I91A&list=PLN1Xo77TPNGhRd3qg1Nw6cKbLim4kQbtL">Hamaji Neo</a>
		 <br>
		 <br> <a class="btn btn-social-icon btn-youtube" href ="https://www.youtube.com/watch?v=6tBGa7QG42I&list=PLMcEWOJbulwlcU5w_4pjIgTq7eicWxxyO"><i class="fa fa-brands fa-youtube"></i></a>
		  <a href="https://www.youtube.com/watch?v=6tBGa7QG42I&list=PLMcEWOJbulwlcU5w_4pjIgTq7eicWxxyO">Hipyo Tech</a>
			</ul>
	  	</div>
	</div>
</div>


