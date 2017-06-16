<?php require_once 'includes/config.php'; 
    include "includes/header.php";
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  } else {
    $id = rand(1, 28);
  }
?>
<link rel="stylesheet" href="css/most.css">
<?php include 'includes/nav.php'; ?>
  <body>
    <header>
      <h1 id="projecthead">Project</h1>
    </header>
    <main>
      <div class="container">
        <?php
          $query = "SELECT * FROM projects WHERE id = {$id} LIMIT 1";
          $result = mysqli_query($connection, $query);
          while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <?php echo '<img src="', $row['picture'], '" alt="Project Image">';?> <br><br>
          <h2 class="titles"><?php echo $row['title'] ?></h2>
          <p class="descriptions"><?php echo $row['description']; ?> <br><br><br></p>
        <?php
          }
          mysqli_free_result($result);
        ?>
      </div>
    </main>
    <?php mysqli_close($connection); ?>
<?php include"includes/footer.php"; ?>