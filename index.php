<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthTrack</title>

    <link rel="icon" href="media/websiteicon.png">

    <!-- adding bootstrap & css  & js-->
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.js">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- Header starts here -->
    
        <h1 id="title_home">Welcome to HealthTrack <br> <span style="font-size: 60px;">Your wellness companion</span></h1>
    
    <div class="row">
        <div class="col-md-4" id="home-page">
            <center><h3 class="text-white">Choose login role</h3></center>
            <br>
            <a href="user_login.php" class="btn btn_home" style="margin-right: 20px;">User login</a>
            <a href="registration.php" class="btn btn_home" style="margin-right: 20px;">User registration</a>
            <a href="admin/admin_login.php" class="btn btn_home">Admin login</a>
            <br>
            <img src="media/usericon.png" alt="usericon" style="padding-top: 20px;">
        </div>
    </div>

    <p class="fixed-bottom text-center">Develop by: Eimron Ruwie Cortez</p>
</body>

<script>
      function createHeart() {
    const newHeart = document.createElement('div');
    newHeart.classList.add('heart');
    newHeart.style.left = Math.random() * window.innerWidth + 'px';
    newHeart.style.top = window.innerHeight + 'px'; // Start from top of the window
    document.body.appendChild(newHeart);

    setTimeout(() => {
      newHeart.remove();
    }, 10000); // Remove after 10 seconds
  }

  setInterval(createHeart, 2000); // Create a new heart every 2 seconds
</script>

</html>