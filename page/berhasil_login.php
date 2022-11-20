<?php 
// check session start or not
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.2/css/all.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <!-- weight 400 -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>ABOUT US</title>
</head>

<body>
<?php

$user_agent     =   $_SERVER['HTTP_USER_AGENT'];

function get_client_ip_env() {
 $ipaddress = '';
 if (getenv('HTTP_CLIENT_IP'))
  $ipaddress = getenv('HTTP_CLIENT_IP');
 else if(getenv('HTTP_X_FORWARDED_FOR'))
  $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
 else if(getenv('HTTP_X_FORWARDED'))
  $ipaddress = getenv('HTTP_X_FORWARDED');
 else if(getenv('HTTP_FORWARDED_FOR'))
  $ipaddress = getenv('HTTP_FORWARDED_FOR');
 else if(getenv('HTTP_FORWARDED'))
  $ipaddress = getenv('HTTP_FORWARDED');
 else if(getenv('REMOTE_ADDR'))
  $ipaddress = getenv('REMOTE_ADDR');
 else
  $ipaddress = 'UNKNOWN IP Address';

 return $ipaddress;
}

function get_os(){ 
    global $user_agent;
    $os_platform    =   "Unknown OS Platform";
    $daftar_os      =   array(
       '/windows nt 6.2/i'     =>  'Windows 8',
       '/windows nt 6.1/i'     =>  'Windows 7',
       '/windows nt 6.0/i'     =>  'Windows Vista',
       '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
       '/windows nt 5.1/i'     =>  'Windows XP',
       '/windows xp/i'         =>  'Windows XP',
       '/windows nt 5.0/i'     =>  'Windows 2000',
       '/windows me/i'         =>  'Windows ME',
       '/win98/i'              =>  'Windows 98',
       '/win95/i'              =>  'Windows 95',
       '/win16/i'              =>  'Windows 3.11',
       '/macintosh|mac os x/i' =>  'Mac OS X',
       '/mac_powerpc/i'        =>  'Mac OS 9',
       '/linux/i'              =>  'Linux',
       '/ubuntu/i'             =>  'Ubuntu',
       '/iphone/i'             =>  'iPhone',
       '/ipod/i'               =>  'iPod',
       '/ipad/i'               =>  'iPad',
       '/android/i'            =>  'Android',
       '/blackberry/i'         =>  'BlackBerry',
       '/webos/i'              =>  'Mobile'
                        );

    foreach ($daftar_os as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }
    }   
    return $os_platform;
}

function getting_browser(){
    global $user_agent;
 $browser        =   "Unknown Browser";
    $daftar_browser  =   array(
                            '/msie/i'       =>  'Internet Explorer',
                            '/firefox/i'    =>  'Firefox',
                            '/safari/i'     =>  'Safari',
                            '/chrome/i'     =>  'Chrome',
                            '/opera/i'      =>  'Opera',
                            '/netscape/i'   =>  'Netscape',
                            '/maxthon/i'    =>  'Maxthon',
                            '/konqueror/i'  =>  'Konqueror',
                            '/mobile/i'     =>  'Handheld Browser'
                        );

    foreach ($daftar_browser as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }
    }
    return $browser;
}
$user_os        =   get_os();
$user_browser   =   getting_browser();
$ip_user  = get_client_ip_env();

?>
     <!-- navbar -->
     <div class="main-navbar">
        <div class="navbar">
            <img src="../images/logo.png" alt="" class="logo">

            <ul class="list-menu">
                <li class="menu">
                    HOME
                </li>
                <li class="menu">
                    SHOP
                </li>
                <li class="menu">
                    PRODUCT
                </li>
                <li class="menu">
                    BLOG
                </li>
                <li class="menu">
                    PAGE
                </li>
            </ul>

            <ul class="list-icon">
                <li class="icon-nav">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </li>
                <li class="icon-nav">
                    <i class="fa-solid fa-heart"></i>
                </li>
                <li class="icon-nav">
                    <i class="fa-solid fa-cart-shopping"></i>
                </li>
            </ul>
        </div>
    </div>
    <div class="container-logout">
        <form action="" method="POST" class="login-email">

       <center>
       <div class="card">
  <div class="card-header">
  <?php echo "<h1>Login Sebagai:, " . $_SESSION['username'] ."!". "</h1>";
   ?>
  </div>
  <div class="card-body">
    <a href="homepage.php" class="btn btn-primary">Halaman Admin</a>
  </div>
</div>
            <br>
            <a href="logout.php" class="btn">Logout</a>
           
            
            </div>
        </form>

        
  
    </center>
 </div>
</body>
</html>
