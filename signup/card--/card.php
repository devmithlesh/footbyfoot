<?php

session_start();

?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crad-Section</title>
    <!-- tailwind css cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- font Awesome cdn-->
    <script
      src="https://kit.fontawesome.com/1e3d70fa90.js"
      crossorigin="anonymous"
    ></script>
    <!-- css file for res-navigation -->
    <link rel="stylesheet" href="../style.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
      <!-------------------------------------------------------------
      script
      ------------------------------------------------------------->
      <script src="../index.js"></script>
  </head>
  <body>
    <!-- -------------------------------------------
      navgation start
    --------------------------------------------- -->
    <div
            class="container mx-auto flex xl:justify-between md:justify-between xl:items-center md:items-center py-3 flex-col md:flex-row shadow-sm shadow-gray-100 xl:px-10 md:px-10 px-4">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <img src="../logo.png" alt="" class="xl:w-14 md:w-14 w-10" />
                <span class="ml-3 xl:text-lg md:text-lg text-xs">Foot By Foot</span>
            </a>
            <div class="border border-blue-500 flex items-center justify-between px-4 py-1 rounded-xl w-72">
                <input type="text" placeholder="Search Items"
                    class="border-0 outline-0 text-sm text-gray-500 font-light w-60" />
                <i class="fa-solid fa-magnifying-glass text-blue-500 hover:opacity-80 cursor-pointer">
                </i>
            </div>
            <nav class="flex flex-wrap items-center text-sm hidden xl:block md:block nav-bar-css" id="menu">
                <div class="mith-nav">
                    <a href="../user_index.php" class="xl:mr-10 md:mr-10 py-10 text-gray-500 hover:text-gray-900 cursor-pointer active:text-blue-500">Home</a>
                    <a href="../men.php"
                        class="mr-10 hover:text-gray-900 text-gray-500 cursor-pointer mrgn-top-btm active:text-blue-500">Men</a>
                    <a href="../women.php" class="mr-10 hover:text-gray-900 text-gray-500 cursor-pointer mrgn-top-btm">Women</a>
                    <a href="../offer-section/offer.php"
                        class="mr-10 cursor-pointer hover:text-gray-900 text-gray-500 mrgn-top-btm active:text-blue-500">Offers</a>
                    <!-- <i class="mr-10 fa-solid fa-cart-shopping text-base" ></i > -->

                    <?php echo $_SESSION['username'];?>
                    <i class="fa-solid fa-user py-0 px-1 bg-blue-400 text-sm text-gray-100 " onclick="myFunction()"></i>
                    <div class="dropdown">
                        <div id="myDropdown" class="dropdown-content">
                            <a href="#">My Profile</a>
                            <a href="#">My Wishlist</a>
                            <a href="../orderhistory/history.php">My Order</a>
                            <a href="../index.php">Logout</a>
                        </div>
                    </div>

             
                </div>
            </nav>
            <a href="#" class="absolute right-4 sm:right-20 block xl:hidden md:hidden" id="burger"><i
                    class="fa-solid fa-bars"></i></a>
        </div>
    <!-- ----------------------------------------
    card section start
    --------------------------------------------->
    <section>
      <div class="container mx-auto w-full flex justify-between py-10 flex-col md:flex-row xl:flex-row">
        <div class="w-full md:w-5/12 xl:w-5/12 px-4 ">
          <div class="flex ">
            <div class="flex flex-col">
              <img
                src="./card-profile-for-buy/5.jpeg"
                alt="main-img"
                class="w-24 p-2 my-2 border border-blue-400"
              />
              <img
                src="./card-profile-for-buy/1.jpeg"
                alt="1"
                class="w-24 p-2 my-2 hover:opacity-80"
              />
              <img
                src="./card-profile-for-buy/2.jpeg"
                alt="2"
                class="w-24 p-2 my-2 hover:opacity-80"
              />
              <img
                src="./card-profile-for-buy/3.jpeg"
                alt="3"
                class="w-24 p-2 my-2 hover:opacity-80"
              />
              <img
                src="./card-profile-for-buy/4.jpeg"
                alt="4"
                class="w-24 p-2 my-2 hover:opacity-80"
              />
            </div>
            <div class="py-4 px-4 w-full flex justify-center items-center">
              <img
                src="./card-profile-for-buy/5.jpeg"
                alt="main-img"
                class=""
              />
            </div>
          </div>
          <div class="py-10">
            <a href="#" class="py-4 md:px-12 xl:px-12 px-6 bg-yellow-400 mr-2 hover:bg-yellow-300 text-xs md:text-sm"
              ><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</a
            >
            <a href="../orderfile/orderform.php"  class="py-4 md:px-12 xl:px-12 px-6 bg-orange-400 hover:bg-orange-300 text-xs md:text-sm">
              <i class="fa-solid fa-bolt-lightning"></i> BUY NOW</a>
          </div>
        </div>
        <div class="w-full md:w-7/12 xl:w-7/12 md:ml-10 xl:ml-10 px-4">
          <h2 class="text-xl">Motorsport Shoes For Men</h2>
          <h2 class="text-lg my-2 font-bold tracking-wider">
            रु779 <del class="text-sm text-gray-600 tracking-wider">रु999</del>
          </h2>
          <span class="cursar-ponter py-1 px-2 bg-blue-500 rounded-xl text-sm text-gray-100"
            >3.5 <i class="fa-solid fa-star"></i></span
          ><span class="text-sm"> 7,292 rating and 727 reviews</span>
          <h3 class="my-2">Available offers</h3>
          <p class="my-2 text-sm">
            <i class="fa-solid fa-tag text-green-500 "></i> Bank Offer5% Cashback
            on Flipkart Axis Bank Card <span class="text-blue-500">T&C</span>
          </p>
          <p class="my-2 text-sm">
            <i class="fa-solid fa-tag text-green-500 "></i> Bank OfferFlat ₹100
            Off* On 1st Transaction through Flipkart Pay Later
            <span class="text-blue-500">T&C</span>
          </p>
          <div class="mt-4 flex items-center">
              <p class="mr-4 text-">Color</p>
              <a href="#" class="py-4 px-4 mr-2 bg-gray-400 rounded-full hover:opacity-80"></a>
              <a href="#" class="py-4 px-4 mr-2 bg-blue-600 rounded-full hover:opacity-80"></a>
              <a href="#" class="py-4 px-4 mr-2 bg-yellow-500 rounded-full hover:opacity-80"></a>
              <a href="#" class="py-4 px-4 mr-2 bg-gray-900 rounded-full hover:opacity-80"></a>
          </div>
          <div class="mt-5 flex items-center">
            <p class="mr-4 text-xs md:text-sm xl:text-sm">Size</p>
            <a href="#" class="md:py-2 xl:py-2 py-1 px-3 md:px-4 xl:px-4 py-1 px-3 mr-2 bg-gray-300 rounded hover:opacity-70">4</a>
            <a href="#" class="md:py-2 xl:py-2 py-1 px-3 md:px-4 xl:px-4 py-1 px-3 mr-2 bg-gray-300 rounded hover:opacity-70">5</a>
            <a href="#" class="md:py-2 xl:py-2 py-1 px-3 md:px-4 xl:px-4 py-1 px-3 mr-2 bg-gray-300 rounded hover:opacity-70">6</a>
            <a href="#" class="md:py-2 xl:py-2 py-1 px-3 md:px-4 xl:px-4 py-1 px-3 mr-2 bg-gray-300 rounded hover:opacity-70">7</a>
            <a href="#" class="md:py-2 xl:py-2 py-1 px-3 md:px-4 xl:px-4 py-1 px-3 mr-2 bg-gray-300 rounded hover:opacity-70">8</a>
            <a href="#" class="md:py-2 xl:py-2 py-1 px-3 md:px-4 xl:px-4 py-1 px-3 text-sm text-blue-500">Size chart</a>
        </div>
        <div class="mt-5 flex">
            <p class="mr-4 text-">Seller</p>
            <div class="flex flex-col text-sm">
                <p class="text-blue-500">Campusactivewear <span class="cursar-ponter py-1 px-2 bg-blue-500 rounded-xl text-gray-100 text-xs"
                    >3.5 <i class="fa-solid fa-star"></i></span</p>
            <p class="my-2">14 Days Return Policy?</p>
            <p class="text-blue-500">View more sellers starting from ₹519</p>
            </div>
        </div>
     <div class="mt-4 w-1/2 text-gray-700">
         <h2 class="my-4 text-gray-900">Product Details</h2>
         <div class="flex my-4 text-sm justify-around">
             <div>Color</div>
             <div>Gray</div>
         </div>
         <div class="flex my-4 text-sm justify-around">
            <div>Outer material</div>
            <div>Mesh</div>
        </div>
        <div class="flex my-4 text-sm justify-around">
            <div>Model name</div>
            <div>NOOR PLUS</div>
        </div>
        <div class="flex my-4 text-sm justify-around">
            <div>Ideal for</div>
            <div>Women</div>
        </div>
        <div class="flex my-4 text-sm justify-around">
            <div>Occasion</div>
            <div>Sports</div>
        </div>
        <div class="flex my-4 text-sm justify-around">
            <div>Sole material</div>
            <div>Phylon</div>
        </div>
        <div class="flex my-4 text-sm justify-around">
            <div>Closure</div>
            <div>350 g</div>
        </div>
     </div>

        </div>
      </div>
    </section>

     <!-- footer start -->
     <footer class="text-gray-400 body-font bg-gray-900">
      <div
        class="container mx-auto xl:px-20 md:px-20 px-4 xl:py-16 md:py-10 py-0 pt-16 flex flex-col xl:flex-row md:flex-row"
      >
        <div class="w-1/4">
          <h1 class="text-2xl font-bold mb-2 tracking-widest text-blue-400">
            CONTACT HERE
          </h1>
          <div class="flex">
            <li class="list-none mr-6">
              <i
                class="text-gray-100 text-2xl fab fa-twitter hover:text-blue-500"
              ></i>
            </li>
            <li class="list-none mr-6">
              <i
                class="text-gray-100 text-2xl fab fa-instagram hover:text-pink-500"
              ></i>
            </li>
            <li class="list-none mr-6">
              <i
                class="text-gray-100 text-2xl fab fa-facebook-square hover:text-blue-500"
              ></i>
            </li>
            <li class="list-none">
              <i
                class="text-gray-100 text-2xl fab fa-youtube hover:text-red-500"
              ></i>
            </li>
          </div>
          <div class="text-gray-100">
            <p class="text-sm pt-2 py-1">
              Mithlesh Nirmal <br> Karan Sharma
            </p>
            <p class="text-sm" py-1>LKCTC</p>
            <p class="text-sm py-1">BCA 6<sup>th</sup></p>
          </div>
        </div>

        <div class="w-3/5 xl:mx-auto md:mx-auto flex justify-between flex-wrap">
          <div class="lg:w-1/4 md:w-1/2 w-full">
            <h2 class="title-font text-blue-400 tracking-widest text-sm mb-3">
              Product
            </h2>
            <nav class="list-none mb-10">
              <li class="my-2">
                <a
                  class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400"
                  >Download</a
                >
              </li>
              <li class="my-2">
                <a
                  class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400"
                  >Nitro</a
                >
              </li>
              <li class="my-2">
                <a
                  class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400"
                  >Status</a
                >
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full">
            <h2 class="title-font text-blue-400 tracking-widest text-sm mb-3">
              Company
            </h2>
            <nav class="list-none mb-10">
              <li class="my-2">
                <a
                  class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400"
                  >About</a
                >
              </li>
              <li class="my-2">
                <a
                  class="text-gray-100 hover:text-gray-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400"
                  >Jobs</a
                >
              </li>
              <li class="my-2">
                <a
                  class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400"
                  >Branding</a
                >
              </li>
              <li class="my-2">
                <a
                  class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400"
                  >Newsroom</a
                >
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full">
            <h2
              class="title-font font-medium text-blue-400 tracking-widest text-sm mb-3"
            >
              Resources
            </h2>
            <nav class="list-none mb-10">
              <li class="my-2">
                <a
                  class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400"
                  >Collage</a
                >
              </li>
              <li class="my-2">
                <a
                  class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400"
                  >Support</a
                >
              </li>
              <li class="my-2">
                <a
                  class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400"
                  >Safety</a
                >
              </li>
              <li class="my-2">
                <a
                  class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400"
                  >BLog</a
                >
              </li>
              <li class="my-2">
                <a
                  class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400"
                  >Feedback</a
                >
              </li>
              <li class="my-2">
                <a
                  class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400"
                  >Developers</a
                >
              </li>
              <li class="my-2">
                <a
                  class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400"
                  >StreamKit</a
                >
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full">
            <h2
              class="title-font font-medium text-blue-400 tracking-widest text-sm mb-3"
            >
              Policies
            </h2>
            <nav class="list-none mb-10">
              <li class="my-2">
                <a
                  class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400"
                  >Terms</a
                >
              </li>
              <li class="my-2">
                <a
                  class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400"
                  >Privacy</a
                >
              </li>
              <li class="my-2">
                <a
                  class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400"
                  >Guidelines</a
                >
              </li>
              <li class="my-2">
                <a
                  class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400"
                  >Acknowledgements</a
                >
              </li>
              <li class="my-2">
                <a
                  class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400"
                  >License</a
                >
              </li>
              <li class="my-2">
                <a
                  class="text-gray-100 hover:text-blue-400 text-sm cursor-pointer border-transparent border-b-2 hover:border-blue-400"
                  >Moderation</a
                >
              </li>
            </nav>
          </div>
        </div>
      </div>

      <div class="py-4 md:px-12 lg:px-12 px-4">
        <div
          class="container mx-auto flex justify-between items-center border-t border-gray-100 text-sm"
        >
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
    <!-------------------------------------------------------------
      script
      ------------------------------------------------------------->
    <script src="../index.js"></script>
  </body>
</html>
