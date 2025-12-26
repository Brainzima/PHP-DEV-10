<?php
$page = basename($_SERVER['SCRIPT_FILENAME']);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        .live{
            color: white;
            font-weight: bold;
            border-bottom: 3px dotted red;
        }
    </style>
  </head>
  <body>
    
  <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link <?php echo $page == 'index.php' ? 'live' : ''; ?>" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $page == 'gallery.php' ? 'live' : ''; ?>" aria-current="page" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $page == 'about.php' ? 'live' : ''; ?>" aria-current="page" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $page == 'contact.php' ? 'live' : ''; ?>" aria-current="page" href="contact.php">Contact</a>
        </li>

      </ul>
    </div>
  </div>
</nav>