<?php require_once 'includes/config.php'; 
    include "includes/header.php";?>
  
<?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  } else {
    $id = rand(1, 28);
  }
?>
<link rel="stylesheet" href="css/most.css">
<?php include 'includes/_nav.php'; ?>
  <body>
    <header>
      <h1>Project</h1>
    </header>
    <main>
      <div class="container">

        <?php
          $query = "SELECT * FROM Projects WHERE id = {$id} LIMIT 1";
          $result = mysqli_query($connection, $query);

          while ($row = mysqli_fetch_assoc($result)) {
        ?>

          <?php echo '<img src="', $row['picture'], '" alt="Project', $row['id'], '\'s Image">';?>
          <h2><?php echo $row['title'] ?></h2>
          <p><?php echo $row['description']; ?></p>

        <?php
          } // end while loop
          mysqli_free_result($result);
        ?>
      </div>
    </main>
    <?php mysqli_close($connection); ?>
<?php include"includes/footer.php"; ?>

