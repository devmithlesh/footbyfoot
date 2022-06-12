<?php

session_start();
 include("conn.php");
error_reporting(0);
?>
 <?php

$e = $_GET['email'];
$c = $_GET['password'];
if(!empty($e) && !empty($c))
{
$sql = "select * FROM users where email = '$e' AND password = '$c'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
if($count == 1)
{
  
  while ($row = mysqli_fetch_assoc($result)) {

  $user = $row['username'];  
  $_SESSION['username'] = "$user";
  header("location: user_index.php");
  }
  

}
else
{
  echo '<script>alert("Login Failed-->Check Your Email And Password ")</script>';
}  
} 
  ?>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>log-in</title>
    <link rel="stylesheet" href="login.css" />
    <!-- stylesheet file for index html -->
    <link rel="stylesheet" href="style.css" />
    <!-- tailwind css cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- fontawesome cdn -->
    <script src="https://kit.fontawesome.com/1e3d70fa90.js" crossorigin="anonymous"></script>
    <!-- favicon logo -->
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
</head>

<body>
    <!-------------------------------------------------------------------------
     navigation bar start
    -------------------------------------------------------------------------->
    <div
        class="container mx-auto flex xl:justify-between md:justify-between xl:items-center md:items-center py-3 flex-col md:flex-row shadow-sm shadow-gray-100 xl:px-10 md:px-10 px-4">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <img src="./logo.png" alt="" class="xl:w-12 md:w-12 w-10" />
            <span class="ml-3 xl:text-lg md:text-lg text-xs">Foot By Foot</span>
        </a>
        <div href="#" class="border border-blue-500 flex items-center justify-between px-4 py-1 rounded-xl">
            <input type="text" placeholder="Search Items"
                class="border-0 outline-0 text-sm text-gray-500 font-light w-64" />
            <i class="fa-solid fa-magnifying-glass text-blue-500 hover:opacity-80">
            </i>
        </div>
        <nav class="flex flex-wrap items-center text-sm hidden xl:block md:block nav-bar-css" id="menu">
            <div class="mith-nav">
                <a href="../index.php"
                    class="xl:mr-10 md:mr-10 py-10 text-gray-500 hover:text-gray-900 cursor-pointer ">Home</a>
                <a href="../men.php"
                    class="mr-10 hover:text-gray-900 text-gray-500 cursor-pointer mrgn-top-btm active:text-blue-500">Men</a>
                <a href="../women.php"
                    class="mr-10 hover:text-gray-900 text-gray-500 cursor-pointer mrgn-top-btm">Women</a>
                <a href="../offer-section/offer.php"
                    class="mr-10 cursor-pointer text-gray-500 hover:text-gray-900 mrgn-top-btm active:text-blue-500">Offers</a>
                <a href="./signup.php" class="mr-10  cursor-pointer mrgn-top-btm hover:text-gray-900 text-gray-500">Sign In</a>
                <a href="#" class="hover:text-gray-900 cursor-pointer mrgn-top-btm"><i
                        class="fa-solid fa-cart-shopping text-base"></i></a>
            </div>
        </nav>
        <a href="#" class="absolute right-4 sm:right-20 block xl:hidden md:hidden" id="burger"><i
                class="fa-solid fa-bars"></i></a>
    </div>
    <!-- -----------------------------------------------------------------
   Login Form start
    ----------------------------------------------------------------------->
    <div class="container mx-auto ">
        <form class=" form mt-14" method="GET" action="">
            <h1>Log <span style="color: #1e90ff">In</span></h1>
            <div>
                <label for="emai">User Email</label>
                <input type="email" id="emai" class="my-6 py-1 px-2 border border-blue-500 w-full" name="email"
                    placeholder="User E-mail" required />
                <label for="passwor">Password</label>
                <input type="password" id="passwor" class="my-6 py-1 px-2 border border-blue-500 w-full"
                    name="password" placeholder="Password" required />
                <input type="submit" value="Log in " class="py-2 w-full bg-blue-400 hover:bg-blue-500 mt-2" />
                <p class="text-sm mt-4">Create a new Account <a href="./signup.php"
                        class="text-blue-500 border-b border-blue-500 hover:text-blue-400"> Signup</a></p>
            </div>
        </form>
    </div>

   

</body>

</html>