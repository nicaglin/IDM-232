<?php include "includes/header.php";
	require_once 'includes/config.php';?>
      <title>Veronica Lin || Samples</title>
	  	<link rel="stylesheet" href="css/most.css">
      <div><?php include "includes/nav.php";?></div>
	<div id="wrap">
		<main>
    <h1 class="samp">Sample Work</h1>
    <h2 id="pushover">Here is a little sample of my work. More is available upon request.</h2>
      <form action="search.php" method="GET">
        <input type="text" name="query">
        <input type="submit" value="Search">
      </form>
			<div class="samp">
        <?php
          $query = "SELECT id, title, thumbnail FROM projects";
          $result = mysqli_query($connection, $query);
          if (!$result) {
            die("Database query failed.");
          }
          while ($row = mysqli_fetch_assoc($result)) {
        ?><div>
          <div class="images"><?php echo '<img src="', $row['thumbnail'], '" alt="Project Thumbnail">'; ?></div>
            <div class="titles"><?php echo $row['title'];?>
            <p class="links"><a  href="projects_single.php?id=<?php echo $row['id']; ?>">See Full Project>></a></p></div></div>
        <?php
          } 
          mysqli_free_result($result);
        ?>
      </div>
      <br><br><br> <!-- solve spacing issue with footer -->
    </main>
    <?php mysqli_close($connection); ?>
<?php include"includes/footer.php"; ?>