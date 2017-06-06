<?php include "includes/header.php"; ?>
  	<link rel="stylesheet" href="css/new.css">
	<div id="wrap">
	<?php include "includes/nav.php";?>
		<main> <div class="import">
			<div id="foil" class="col">
			 	<picture class="derpderp">
	 				 <source media="(min-width: 650px)" srcset="img/smallercity.jpg">
	 				 <source media="(min-width: 465px)" srcset="img/nottoosmallcity.jpg">
	 				<img src="img/triL.jpg" alt="city at night from a plane">
    			</picture>
				<h1>Veronica Lin</h1>
				<h2>designer | developer | student</h2>
			</div>
			<div class="col">
				<div id="prettyPic" class="quarters">
					<picture class="derpderp">
		 				<img src="img/meh.jpg" alt="boat and ocean scenery">
	    			</picture>
					<div id="samp"><h1>Samples</h1></div>
					<div id="sampButt" class="buttonz">
					<a href="samples.php"><h2>See More Sample Work</h2></a></div>
				</div>
				<div id="mePic" class="quarters">
					<picture class="derpderp" id="bright">
<!-- 		 				<img src="img/amzZ.jpg" alt="concert">
 -->    				</picture>
					<div id="about"><h1>About</h1></div>
					<div id="aboutButt" class="buttonz">
					<a href="about.php"><h2>Learn More About Me</h2></a></div>
				</div>
				<div id="coffee" class="quarters">
					<picture class="derpderp workalready">
		 				<img src="img/croppedsea.jpg" alt="clouds over the sea">
	    			</picture>
					<div id="res"><h1>Resume</h1></div>
					<div id="resButt" class="buttonz">
					<a href="resume.php"><h2>See Qulifications</h2></a></div>
				</div>

			</div>
</div>
		</main>

<?php include"includes/footer.php"; ?>