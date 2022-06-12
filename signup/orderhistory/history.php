<?php

session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FootbyFoot: Your Order History</title>
        <!-- stylesheet file for index html -->
        <link rel="stylesheet" href="../style.css" />
    <!-- tailwind css cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- fontawesome cdn -->
    <script src="https://kit.fontawesome.com/1e3d70fa90.js" crossorigin="anonymous"></script>
    <!-- favicon logo -->
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
    <!-------------------------------------------------------------
      script
     ------------------------------------------------------------->
     <script src="../index.js"></script>
</head>
<body>

    <div
    class="container mx-auto flex xl:justify-between md:justify-between xl:items-center md:items-center mb-5 py-3 flex-col md:flex-row shadow-sm shadow-gray-100 xl:px-10 md:px-10 px-4">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <img src="../logo.png" alt="" class="xl:w-14 md:w-14 w-10" />
        <span class="ml-3 xl:text-lg md:text-lg text-xs">Foot By Foot</span>
    </a>
    <div class="border border-blue-500 flex items-center justify-between px-4 py-1 rounded-xl w-72">
        <span class="text-sm">Search Items</span>
        <i class="fa-solid fa-magnifying-glass text-blue-500 hover:opacity-80 cursor-pointer">
        </i>
    </div>
    <nav class="flex flex-wrap items-center text-sm hidden xl:block md:block nav-bar-css" id="menu">
        <div class="mith-nav">
            <a href="../user_index.php" class="xl:mr-10 md:mr-10 py-10  cursor-pointer ">Home</a>
            <a href="../men.php"
                class="mr-10 hover:text-gray-900 cursor-pointer mrgn-top-btm active:text-blue-500">Men</a>
            <a href="../women.php" class="mr-10 hover:text-gray-900 cursor-pointer mrgn-top-btm">Women</a>
            <a href="../offer-section/offer.php"
                class="mr-10 cursor-pointer hover:text-gray-900 mrgn-top-btm active:text-blue-500">Offers</a>
            <!-- <i class="mr-10 fa-solid fa-cart-shopping text-base" ></i > -->

            <?php echo $_SESSION['username'];?>
            <i class="fa-solid fa-user py-0 px-1 bg-blue-400 text-sm text-gray-100 " onclick="myFunction()"></i>
            <div class="dropdown">
                <div id="myDropdown" class="dropdown-content">
                    <a href="#">My Profile</a>
                    <a href="#">My Wishlist</a>
                    <a href="./history.php">My Order</a>
                    <a href="../../index.php">Logout</a>
                </div>
            </div>


        </div>
    </nav>
    <a href="#" class="absolute right-4 sm:right-20 block xl:hidden md:hidden" id="burger"><i
            class="fa-solid fa-bars"></i></a>
</div>
    <!-------------------------------------------------------------------------------------------
    History section start
    -------------------------------------------------------------------------------------------->
    <section>
        <div class="container mx-auto border border-gray-100 my-20">
            <h2 class="py-2 px-2 text-lg">Order History</h2>
                <div class="flex p-4 border border-gray-100 w-full relative">
                    <img src="http://localhost/footbyfoot/card--/card-profile-for-buy/5.jpeg" alt="product" class="w-40 border-r border-gray-100">
                    <div class="pl-4 ">
                        <h2 class="font-normal">Order Name: Motorsport Shoes For Men</h2>
                        <p class="pb-2 text-sm">Quantity : 1, Cost: रु 779</p>
                        <i class="fa-solid fa-check py-1 px-1 bg-green-500 rounded text-gray-100"></i>
                        <i class="fa-solid fa-trash-can py-1 px-1 bg-red-500 rounded text-gray-100"></i>
                        <i class="fa-solid fa-dollar-sign py-1 px-1 bg-blue-500 rounded text-gray-100"></i>
                        <p class="text-sm pt-2">order made on: 13/06/2022 by mithlesh</p>
                    </div>
                    <button class="absolute top-4 right-10 py-1 px-2 text-xs text-gray-100 bg-green-500">Approved</button>
                </div>
                <div class="flex p-4 border border-gray-100 w-full relative">
                    <img src="http://localhost/footbyfoot/card--/card-profile-for-buy/5.jpeg" alt="product" class="w-40 border-r border-gray-100">
                    <div class="pl-4 ">
                        <h2 class="font-normal">Order Name: Motorsport Shoes For Men</h2>
                        <p class="pb-2 text-sm">Quantity : 1, Cost: रु 779</p>
                        <i class="fa-solid fa-check py-1 px-1 bg-green-500 rounded text-gray-100"></i>
                        <i class="fa-solid fa-trash-can py-1 px-1 bg-red-500 rounded text-gray-100"></i>
                        <i class="fa-solid fa-dollar-sign py-1 px-1 bg-blue-500 rounded text-gray-100"></i>
                        <p class="text-sm pt-2">order made on: 13/06/2022 by mithlesh</p>
                    </div>
                    <button class="absolute top-4 right-10 py-1 px-2 text-xs text-gray-100 bg-red-500">Rejected</button>
                </div>
        </div>
    </section>
</body>
</html>