<?php
include("conn.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create-Account For Foot Buy Foot</title>
    <!-- signup css file only -->
    <link rel="stylesheet" href="signup.css" />
     <!-- stylesheet file for index html -->
     <link rel="stylesheet" href="style.css" />
    <!-- tailwind css cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- fontawesome cdn -->
    <script
      src="https://kit.fontawesome.com/1e3d70fa90.js"
      crossorigin="anonymous"
    ></script>
    <!-- favicon logo -->
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">

   
  </head>
 
  <body>
 
  <div
        class="container mx-auto flex xl:justify-between md:justify-between xl:items-center md:items-center py-3 flex-col md:flex-row shadow-sm shadow-gray-100 xl:px-10 md:px-10 px-4"
      >
        <a
          class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0"
        >
          <img src="./logo.png" alt="" class="xl:w-12 md:w-12 w-10" />
          <span class="ml-3 xl:text-lg md:text-lg text-xs">Foot By Foot</span>
        </a>
        <div
          href="#"
          class="border border-blue-500 flex items-center justify-between px-4 py-1 rounded-xl"
        >
          <input
            type="text"
            placeholder="Search Items"
            class="border-0 outline-0 text-sm text-gray-500 font-light w-64"
          />
          <i
            class="fa-solid fa-magnifying-glass text-blue-500 hover:opacity-80"
          >
          </i>
        </div>
        <nav
          class="flex flex-wrap items-center text-sm hidden xl:block md:block nav-bar-css"
          id="menu"
        >
          <div class="mith-nav">
            <a
              href="../index.php"
              class="xl:mr-10 md:mr-10 py-10 text-gray-500 hover:text-gray-900 cursor-pointer "
              >Home</a
            >
            <a
              href="../men.php"
              class="mr-10 hover:text-gray-900 text-gray-500 cursor-pointer mrgn-top-btm active:text-blue-500"
              >Men</a
            >
            <a
              href="../women.php"
              class="mr-10 hover:text-gray-900 text-gray-500 cursor-pointer mrgn-top-btm"
              >Women</a
            >
            <a
              href="../offer-section/offer.php"
              class="mr-10 cursor-pointer text-gray-500 hover:text-gray-900 mrgn-top-btm active:text-blue-500"
              >Offers</a
            >
            <a
              href="./signup.php"
              class="mr-10  cursor-pointer mrgn-top-btm text-blue-500"
              >Sign In</a
            >
            <a href="#" class="hover:text-gray-900 cursor-pointer mrgn-top-btm"
              ><i class="fa-solid fa-cart-shopping text-base"></i
            ></a>
          </div>
        </nav>
        <a
          href="#"
          class="absolute right-4 sm:right-20 block xl:hidden md:hidden"
          id="burger"
          ><i class="fa-solid fa-bars"></i
        ></a>
      </div>
    <!-----------------------------------------------------------------------------------------
     sign up start 
    ------------------------------------------------------------------------------------------->
    <div class="container mx-auto ">
      <form class="pt-10 form " method="GET">
        <h1>Sign <span style="color: #1e90ff">Up</span></h1>
        <div class="text-sm">
          <label for="usernam" class="my-2">User Name</label>
          <input type="text" class="my-2 py-1 px-2 border border-blue-500 w-full" id="usernam" name="username" placeholder="Name" required/>
          <label for="emai" class="my-2">Email Address</label>
          <input type="email" class="my-2 py-1 px-2 border border-blue-500 w-full" id="emai" name="email" placeholder="E-mail" required/>
          <label for="passwor" class="my-2">Password</label>
          <input type="password" class="my-2 py-1 px-2 border border-blue-500 w-full" id="passwor" name="password" placeholder="Password" required/>
          <label for="cpasswor" class="my-2">Confirm Password</label>
          <input type="password" class="my-2 py-1 px-2 border border-blue-500 w-full" id="cpasswor" name="cpassword" placeholder="Password" required/>
          <input type="checkbox" class="mb-5" required />
           I read and agree <b><a href="#">Term & Conditions</a></b> 
          <input type="submit" value="CREATE ACCOUNT" class="py-2 w-full bg-blue-400 hover:bg-blue-500" />
          <p class="mt-4"> Already have an account?<b><a href="./login.php"> Log in </a></b> </p>
        
        </div>
      </form>
    </div>
    <script src="./index.js"></script>
    <?php
  $u=$_GET['username'];
  $e=$_GET['email'];
  $c=$_GET['password'];
  $d=$_GET['cpassword'];
 

  if($c != $d)
  {
    echo"password not match";
  }
  else{
    $query = "insert into users values ('$u', '$e','$c')";
    $data = mysqli_query($conn, $query);
  
  }
  
  if(!$data)
  {
   
    die("".mysqli_error($con));
  }
  else{
    echo '<script>alert("Congratulations,your Account has been Successfully Created.")</script>';
  }
  ?>
 
  </body>
</html>
