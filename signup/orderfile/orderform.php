<?php

session_start();

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order-Form</title>
    <link rel="stylesheet" href="./order.css">
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
                        <a href="../orderhistory/history.php">My Order</a>
                        <a href="../../index.php">Logout</a>
                    </div>
                </div>


            </div>
        </nav>
        <a href="#" class="absolute right-4 sm:right-20 block xl:hidden md:hidden" id="burger"><i
                class="fa-solid fa-bars"></i></a>
    </div>
    <!------------------------------------------------------------------------------------------------
start form
  ------------------------------------------------------------------------------------------------->
  <div class="container mt-10 form-flex-wrap">
  <div >
      <h2 class=" text-lg w-full bg-blue-400 py-2 text-gray-100 pl-2">Product Order Form</h2>
  </div>
<div class="d-flex">
  <form action="" method="">
    <label>
      <span class="fname w-full">First Name <span class="required">*</span></span>
      <input type="text" name="fname">
    </label>
    <label>
      <span class="lname w-full">Last Name <span class="required">*</span></span>
      <input type="text" name="lname">
    </label>
    <label>
      <span class="w-full">Country <span class="required">*</span></span>
      <input type="text" name="city"> 
    </label>
    <label>
      <span class="w-full">Street Address <span class="required">*</span></span>
      <input type="text" name="houseadd" placeholder="House number and street name" required>
    </label>
    <label>
      <span class="w-full">Town / City <span class="required">*</span></span>
      <input type="text" name="city"> 
    </label>
    <label>
      <span class="w-full">State / County <span class="required">*</span></span>
      <input type="text" name="city"> 
    </label>
    <label>
      <span class="w-full">Postcode / ZIP <span class="required">*</span></span>
      <input type="text" name="city"> 
    </label>
    <label>
      <span class="w-full">Phone <span class="required">*</span></span>
      <input type="tel" name="city"> 
    </label>
    <label>
      <span class="w-full">Email Address <span class="required">*</span></span>
      <input type="email" name="city"> 
    </label>
  </form>
  <div class="Yorder ">
    <table>
      <tr>
        <th colspan="2">Your order</th>
      </tr>
      <tr>
        <td>Product Name Shoes</td>
        <td>रु 779</td>
      </tr>
      <tr>
        <td>Total</td>
        <td>रु 779</td>
      </tr>
      <tr>
        <td>Shipping</td>
        <td>Free shipping</td>
      </tr>
    </table><br>
    <div>
      <input type="radio" name="dbt" value="dbt" checked> Direct Bank Transfer
    </div>
    <p class="text-xs p1">
        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
    </p>
    <div>
      <input type="radio" name="dbt" value="cd"> Cash on Delivery
    </div>
    <div>
      <input type="radio" name="dbt" value="cd"> Paypal <span>
      <img src="https://www.logolynx.com/images/logolynx/c3/c36093ca9fb6c250f74d319550acac4d.jpeg" alt="" width="50">
      </span>
    </div>
    <button type="button" class="py-2 text-sm text-gray-100 bg-blue-500 w-full"><a href="../payment/payment.php">Place Order</a></button>
  </div><!-- Yorder -->
 </div>
</div>

    <!-- footer start -->
    <footer class="text-gray-400 body-font bg-gray-900 mt-12">
        <div
            class="container mx-auto xl:px-20 md:px-20 px-4 xl:py-16 md:py-10 py-0 pt-16 flex flex-col xl:flex-row md:flex-row">
            <div class="w-1/4">
                <h1 class="text-2xl font-bold mb-2 tracking-widest text-blue-400">
                    CONTACT HERE
                </h1>
                <div class="flex">
                    <li class="list-none mr-6">
                        <i class="text-gray-100 text-2xl fab fa-twitter hover:text-blue-500"></i>
                    </li>
                    <li class="list-none mr-6">
                        <i class="text-gray-100 text-2xl fab fa-instagram hover:text-pink-500"></i>
                    </li>
                    <li class="list-none mr-6">
                        <i class="text-gray-100 text-2xl fab fa-facebook-square hover:text-blue-500"></i>
                    </li>
                    <li class="list-none">
                        <i class="text-gray-100 text-2xl fab fa-youtube hover:text-red-500"></i>
                    </li>
                </div>
                <div class="text-gray-100">
                    <p class="text-sm pt-2 py-1">mithleshnirmal786123@gmail.com</p>
                    <p class="text-sm pt-2 py-1">karansharma19926@gmail.com</p>
                    <p class="text-sm" py-1>LKCTC</p>
                    <p class="text-sm py-1">BCA 6<sup>th</sup></p>
                </div>
            </div>

            <div class="w-3/5 xl:mx-auto md:mx-auto flex justify-between flex-wrap">
                <div class="lg:w-1/4 md:w-1/2 w-full">
                    <h2 class="title-font text-blue-400 tracking-widest text-sm mb-3 heading-h2">
                        Product
                    </h2>
                    <nav class="list-none mb-10">
                        <li class="my-2">
                            <a
                                class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400">Download</a>
                        </li>
                        <li class="my-2">
                            <a
                                class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400">Nitro</a>
                        </li>
                        <li class="my-2">
                            <a
                                class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400">Status</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full">
                    <h2 class="title-font text-blue-400 tracking-widest text-sm mb-3 heading-h2">
                        Company
                    </h2>
                    <nav class="list-none mb-10">
                        <li class="my-2">
                            <a
                                class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400">About</a>
                        </li>
                        <li class="my-2">
                            <a
                                class="text-gray-100 hover:text-gray-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400">Jobs</a>
                        </li>
                        <li class="my-2">
                            <a
                                class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400">Branding</a>
                        </li>
                        <li class="my-2">
                            <a
                                class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400">Newsroom</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full">
                    <h2 class="title-font font-medium text-blue-400 tracking-widest text-sm mb-3 heading-h2">
                        Resources
                    </h2>
                    <nav class="list-none mb-10">
                        <li class="my-2">
                            <a
                                class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400">Collage</a>
                        </li>
                        <li class="my-2">
                            <a
                                class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400">Support</a>
                        </li>
                        <li class="my-2">
                            <a
                                class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400">Safety</a>
                        </li>
                        <li class="my-2">
                            <a
                                class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400">BLog</a>
                        </li>
                        <li class="my-2">
                            <a
                                class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400">Feedback</a>
                        </li>
                        <li class="my-2">
                            <a
                                class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400">Developers</a>
                        </li>
                        <li class="my-2">
                            <a
                                class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400">StreamKit</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full">
                    <h2 class="title-font font-medium text-blue-400 tracking-widest text-sm mb-3 heading-h2">
                        Policies
                    </h2>
                    <nav class="list-none mb-10">
                        <li class="my-2">
                            <a
                                class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400">Terms</a>
                        </li>
                        <li class="my-2">
                            <a
                                class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400">Privacy</a>
                        </li>
                        <li class="my-2">
                            <a
                                class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400">Guidelines</a>
                        </li>
                        <li class="my-2">
                            <a
                                class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400">Acknowledgements</a>
                        </li>
                        <li class="my-2">
                            <a
                                class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400">License</a>
                        </li>
                        <li class="my-2">
                            <a
                                class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400">Moderation</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>

        <div class="py-4 md:px-12 lg:px-12 px-4">
            <div class="container mx-auto flex justify-between items-center border-t border-gray-100 text-sm">
                <div class="flex text-xs xl:text-sm md:text-sm">
                    <p class="pt-4 mr-4">Condition of Use & Sale</p>
                    <p class="pt-4 mr-4">Privacy Notice</p>
                    <p class="pt-4 mr-4">Interest-Based Ads</p>
                </div>
                <p class="pt-4 text-xs xl:text-sm md:text-sm">
                    © 2021-2022, Foot By Foot.com, Inc. or its affiliates
                </p>
            </div>
        </div>
    </footer>
    <!-- footer end -->
</body>

</html>