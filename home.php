
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=" viewport" content="width=device-width,
    initial-scale=1.0">
    <title>Resume| Jutamanee C. </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link rel ="stylesheet" href="style.css">
</head>

<header>
        <h2 class="logo">RESUME</h2>
        <div class="menu-btn"></div>
        <div class="navigation">
        <div class="navigation-items">
            <a href="home.php">Home</a>
            <a href="profile.php">Personal Profile</a>
            <a href="experiance.php">Experiance</a>
            <a href="activities.php">Activities</a>
            <a href="skills.php">Skills</a>
            <a href="contact.php">Contact</a>
            <button class="btnLogin-popup">Login</button>
        </div>
</div>
</div>
</header>


<body>
  <section class="h">
  <div class="Previouss">
        <h5><a href="index.php" style color="#ff6347;">Main Page</a></h5>
        </div>
<div class="home">
<h1>Hello สวัสดี</h1>
    <p>My Website</p>
    <img src="pung.jpg" height="100%" width="100%">
</div>
 <div class="Nextt">
        <h5><a href="profile.php" style color="#ff6347;">Next Page</a></h5>
        </div>
</section>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
  const menuBtn = document.querySelector('.menu-btn');
  const navigation = document.querySelector('.navigation');
  menuBtn.addEventListener('click', () => {
    menuBtn.classList.toggle('active');
    navigation.classList.toggle('active');
  });
</script>
</body>
</html>

