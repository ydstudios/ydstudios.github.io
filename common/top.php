<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>YD Studios | <?php echo $page_title ?></title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3052c91298.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    <script src="dropdown.js"></script>
  </head>
  <body>
    <nav>
      <div class="navbar">
        <img src="../images/logo.png"></img>
        <a href="https://ydstudios.github.io" class="nav-text">YD Studios</a>
        <div class="nav-buttons">
          <a href="../games.php">Games</a>
          <a href="../news.php">News</a>
        </div>
        <a class="nav-small-btn"><i class="fa fa-bars nav-small-btn-icon" area-hiddren="true" onclick="navSmallDrop()"></i></a>
      </div>
      <div class="nav-small-drop" id="nav-small-drop">
        <a href="../games.php">Games</a>
        <a href="../news.php">News</a>
      </div>
    </nav>
    <main>
