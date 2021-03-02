<?php
include __DIR__ . '/src/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <title>Php Ajax Dischi</title>
</head>
<body>
  <!-- inzio header -->
  <header>
    <div class="container">
      <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/spotify-brands-logo-34.png" alt="logo">
    </div>
  </header>
  <!-- fine header -->
  <!-- inizio main -->
  <main>
    <div class="container">
      <?php
      foreach ($dischi as $disco) {?>
        <div class="disco">
          <img src="<?php echo $disco['poster']; ?>" alt="disco-img">
          <h2><?php echo $disco['title']; ?></h2>
          <h3><?php echo $disco['author']; ?></h3>
          <p><?php echo $disco['year']; ?></p>
        </div>
      <?php }
      ?>
    </div>
  </main>
  <!-- fine main -->
<!-- javascript -->
<script src="js/script.js" charset="utf-8"></script>
</body>
</html>
