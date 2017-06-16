<?php require_once 'includes/config.php'; 
    include "includes/header.php"; ?>
    <link rel="stylesheet" href="css/most.css">
<?php include 'includes/nav.php'; ?>
    <h1 class="samp">Sample Work</h1>
      <div id="search">
        <?php
            $query = $_GET['query'];
            $query = htmlspecialchars($query);
           $query = mysqli_real_escape_string($connection, $query);
            $result = mysqli_query($connection, "SELECT id, title, thumbnail, tag FROM projects WHERE (tag LIKE '%$query%')");
            if (!$result) {
              die("Database query failed.");
            }
         if(mysqli_num_rows($result) > 0) {   
          ?> <h2>Your Search Results for <?php echo $query; ?>:</h2>
        <?php 
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <div>
          <div class="images"><?php echo '<img src="', $row['thumbnail'], '" alt="Project Thumbnail">'; ?></div>
            <div class="titles"><?php echo $row['title'];?>
            <p class="links"><a  href="projects_single.php?id=<?php echo $row['id']; ?>">See Full Project>></a></p></div></div>
        <?php
          }}
          else {
            ?> <p id="styledResult">Sorry there are no results. Suggested search: pencil or illustrator. Feel free to browse my work as well.</p>
            <?php }
          mysqli_free_result($query); 
          mysqli_free_result($result);
        ?>
      <br><br><br> <!-- solve spacing issue with footer -->
    </div>
<?php mysqli_close($connection); ?>
<?php include"includes/footer.php"; ?>