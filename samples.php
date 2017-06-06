<?php include "includes/header.php";
	require_once 'includes/config.php';?>
	  	<link rel="stylesheet" href="css/most.css">
	<div id="wrap">
	<?php include "includes/nav.php";?>
		<main>
			<div class="samp">
<div class="grid-wine">
        <?php
          $query = "SELECT id, title, thumbnail FROM Projects";
          $result = mysqli_query($connection, $query);

          if (!$result) {
            die("Database query failed.");
          }

          while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <div>
            <figure><?php echo '<img src="', $row['thumbnail'], '" alt="Project', $row['id'], '\'s Thumbnail">'; ?>
              <figcaption>
                <?php
                  echo $row['title'];
                  // echo " <small>({$row['year']})</small>";
                ?>
              </figcaption>
            </figure>
            <p><a href="projects_single.php?id=<?php echo $row['id']; ?>">See Full Project</a></p>
          </div>

        <?php
          } // end while loop
          mysqli_free_result($result);
        ?>
      </div>
    </main>

    <?php mysqli_close($connection); ?>



				<!-- <h1>Sample Work</h1>
				<p>This is just a flavor of my work. More samples may be provided upon request.</p>

				<div id="jszodiac">
					<picture id="zodpic">
						<img src="../img/whynot.svg" alt="zodiac website">
    				</picture>
    				<p class="despara" id="zzz">Determination of what instrument you are based on your zodiac sign.</p>
    				<a class="buttbutt" id="zodlink" href="http://veronicaglin.com/zodiac/zodiac_clean.html"><h2>Check out what instrument you are!</h2></a>
				</div>

				<div id="UI1">
					<picture id="pup">
		 				<img src="../img/poppin.svg" alt="Mary Pawpin's website remake">
    				</picture>
					<p class="despara" id="pop">High fidelity prototype of Mary Pawpin's website made with InVision.</p>	
					<a class="buttbutt" id="marypop" href="https://tinyurl.com/l5p9sym"><h2>View the site live!</h2></a>
				</div> -->
		  	</div>
		</main>
<?php include"includes/footer.php"; ?>