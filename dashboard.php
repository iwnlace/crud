<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>
<body>
<h1 style="color: black; font-size: 24px; text-align: center; margin-right: 1150px; font-family: sans-serif;">Hello, <?php echo $user_data['user_name']; ?></h1>
    <script src="script.js"></script>
    <nav class = "sidebar close">
        <header>
                <div class = "text header-text">
                    <span class = "profession"></span>
                    <span class = "name">Live Fast, Die Last</span>
                </div>
            </div> 
            <i class ='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="search-box">
                        <a href="#">
                            <i class='bx bx-search icon'></i>
                           <input type="search" placeholder="Search">
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                        <i class='bx bx-home-alt icon'></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                    <i class='bx bx-bell icon'></i>
                    <span class="text nav-text">Notifications</span>
                </a>
            </li>
            <li class="nav-link">
                <a href="#">
                <i class='bx bx-bar-chart-alt icon'></i>
                <span class="text nav-text">Revenue</span>
            </a>
        </li>
        <li class="nav-link">
            <a href="#">
            <i class='bx bx-heart icon'></i>
            <span class="text nav-text">Likes</span>
        </a>
    </li>
    <li class="nav-link">
        <a href="#">
        <i class='bx bx-pie-chart-alt icon'></i>
        <span class="text nav-text">Analytics</span>
    </a>
</li>
<li class="nav-link">
    <a href="#">
    <i class='bx bx-wallet-alt icon'></i>
    <span class="text nav-text">Wallets</span>
</a>
</li>
</a>
<li class="nav-link">
    <a href="login.php">
    <i class='bx bx-log-out icon'></i>
    <span class="text nav-text">Log-out</span>
            </div>
        </div>
        </div>
    </nav>
</body>
</html>