<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Offer-Section</title>
    <!-- main css file -->
    <link rel="stylesheet" href="../style.css" />
    <!-- tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- fontawesome cdn -->
    <script
      src="https://kit.fontawesome.com/1e3d70fa90.js"
      crossorigin="anonymous"
    ></script>
    <!-- favicon -->
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
     <!-- ------------------------------------------------------------------------
      javascript fornavigation
    ------------------------------------------------------------------------------>
    <script src="../index.js"></script>
  </head>
  <body>
    <header class="text-gray-600">
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
                    <a href="../user_index.php" class="xl:mr-10 md:mr-10 py-10 text-gray-500 hover:text-gray-900  active:text-blue-500 cursor-pointer ">Home</a>
                    <a href="../men.php"
                        class="mr-10 text-gray-500 hover:text-gray-900 cursor-pointer mrgn-top-btm active:text-blue-500">Men</a>
                    <a href="../women.php" class="mr-10 text-gray-500 hover:text-gray-900 cursor-pointer mrgn-top-btm">Women</a>
                    <a href="offer.php"
                        class="mr-10 cursor-pointer text-blue-500  mrgn-top-btm active:text-blue-500">Offers</a>
                    <!-- <i class="mr-10 fa-solid fa-cart-shopping text-base" ></i > -->

                    <?php echo $_SESSION['username'];?>
                    <i class="fa-solid fa-user  py-0 px-1 bg-blue-400 text-sm text-gray-100" onclick="myFunction()"></i>
                    <div class="dropdown">
                        <div id="myDropdown" class="dropdown-content">
                            <a href="#">My Profile</a>
                            <a href="#">My Wishlist</a>
                            <a href="../orderhistory/history.php">My Order</a>
                            <a href="../../index.php">Logout</a>
                        </div>
                    </div>

                    <!-- <a
              href="logout.php"
              class="p-10 hover:text-gray-900 cursor-pointer mrgn-top-btm"
              ><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full text-xs">Log Out</button></a
            > -->
                    <a href="#" class="hover:text-gray-900 cursor-pointer mrgn-top-btm"></a>
                </div>
            </nav>
            <a href="#" class="absolute right-4 sm:right-20 block xl:hidden md:hidden" id="burger"><i
                    class="fa-solid fa-bars"></i></a>
        </div>
    </header>
    <!-- -----------------------------------------------------------------------
        card section where offer discrive
      ---------------------------------------------------------------------------->
    <!-- card section -->
    <section class="text-gray-600 body-font">
      <div class="flex justify-center py-6 w-full bg-gray-200 mt-10">
        <h2 class="font-bold text-gray-800">Offer 60% Off</h2>
      </div>
      <div
        class="container xl:px-20 md:px-20 px-4 py-10 mx-auto grid xl:grid-cols-4 md:grid-cols-4 grid-cols-1 gap-4"
      >
        <!-- card first row -->
        <div class="w-full border border-blue-100 hover:border-blue-500">
          <a href="#">
            <div class="xl:w-56 lg:w-56 w-40 mx-auto">
              <img src="../png-shoes/11.png" alt="shoes-img" class="w-full" />
            </div>
            <div class="px-4 pb-4 text-sm">
              <div>
                <h2 class="text-gray-900 font-bold text-base mb-2">
                  Shoes shop 1
                </h2>
                <p class="text-xs">
                  <i class="fa-solid fa-location-dot text-blue-500"></i>
                  Ramamandi Jalandhar, Punjab 144001
                </p>
              </div>
              <div
                class="flex items-center justify-between py-2 border-b border-gray-300"
              >
                <p>
                  <span class="text-blue-500"
                    ><i class="fa-solid fa-star"></i> </span
                  >3.8
                </p>
                <p>34 Mins</p>
                <p>रु 299</p>
              </div>
              <div class="mt-4 flex items-center">
                <span
                  ><img src="../icons8-discount-80.png" alt="" class="w-5 mr-2"
                /></span>
                <p>60% Off | Use Try New</p>
              </div>
            </div>
          </a>
        </div>

        <div class="w-full border border-blue-100 hover:border-blue-500">
          <a href="#">
            <div class="xl:w-56 lg:w-56 w-40 mx-auto">
              <img src="../png-shoes/12.png" alt="shoes-img" class="w-full" />
            </div>
            <div class="px-4 pb-4 text-sm">
              <div>
                <h2 class="text-gray-900 font-bold text-base mb-2">
                  Shoes shop 2
                </h2>
                <p class="text-xs">
                  <i class="fa-solid fa-location-dot text-blue-500"></i>
                  Ramamandi Jalandhar, Punjab 144001
                </p>
              </div>
              <div
                class="flex items-center justify-between py-2 border-b border-gray-300"
              >
                <p>
                  <span class="text-blue-500"
                    ><i class="fa-solid fa-star"></i> </span
                  >3.8
                </p>
                <p>34 Mins</p>
                <p>रु 350</p>
              </div>
              <div class="mt-4 flex items-center">
                <span
                  ><img src="../icons8-discount-80.png" alt="" class="w-5 mr-2"
                /></span>
                <p>60% Off | Use Try New</p>
              </div>
            </div>
          </a>
        </div>
        <div class="w-full border border-blue-100 hover:border-blue-500">
          <a href="#">
            <div class="xl:w-56 lg:w-56 w-40 mx-auto">
              <img src="../png-shoes/13.png" alt="shoes-img" class="w-full" />
            </div>
            <div class="px-4 pb-4 text-sm">
              <div>
                <h2 class="text-gray-900 font-bold text-base mb-2">
                  Shoes shop 3
                </h2>
                <p class="text-xs">
                  <i class="fa-solid fa-location-dot text-blue-500"></i>
                  Ramamandi Jalandhar, Punjab 144001
                </p>
              </div>
              <div
                class="flex items-center justify-between py-2 border-b border-gray-300"
              >
                <p>
                  <span class="text-blue-500"
                    ><i class="fa-solid fa-star"></i> </span
                  >3.8
                </p>
                <p>34 Mins</p>
                <p>रु 259</p>
              </div>
              <div class="mt-4 flex items-center">
                <span
                  ><img src="../icons8-discount-80.png" alt="" class="w-5 mr-2"
                /></span>
                <p>60% Off | Use Try New</p>
              </div>
            </div>
          </a>
        </div>
        <div class="w-full border border-blue-100 hover:border-blue-500">
          <a href="#">
            <div class="xl:w-56 lg:w-56 w-40 mx-auto">
              <img src="../png-shoes/14.png" alt="shoes-img" class="w-full" />
            </div>
            <div class="px-4 pb-4 text-sm">
              <div>
                <h2 class="text-gray-900 font-bold text-base mb-2">
                  Shoes shop 4
                </h2>
                <p class="text-xs">
                  <i class="fa-solid fa-location-dot text-blue-500"></i>
                  Ramamandi Jalandhar, Punjab 144001
                </p>
              </div>
              <div
                class="flex items-center justify-between py-2 border-b border-gray-300"
              >
                <p>
                  <span class="text-blue-500"
                    ><i class="fa-solid fa-star"></i> </span
                  >3.8
                </p>
                <p>34 Mins</p>
                <p>रु 499</p>
              </div>
              <div class="mt-4 flex items-center">
                <span
                  ><img src="../icons8-discount-80.png" alt="" class="w-5 mr-2"
                /></span>
                <p>60% Off | Use Try New</p>
              </div>
            </div>
          </a>
        </div>
        <!-- card second row -->
        <div class="w-full border border-blue-100 hover:border-blue-500">
          <a href="#">
            <div class="xl:w-56 lg:w-56 w-40 mx-auto">
              <img
                src="../images-shoes/row110.jpeg"
                alt="shoes-img"
                class="w-full py-10"
              />
            </div>
            <div class="px-4 pb-4 text-sm">
              <div>
                <h2 class="text-gray-900 font-bold text-base mb-2">
                  Shoes shop 4
                </h2>
                <p class="text-xs">
                  <i class="fa-solid fa-location-dot text-blue-500"></i>
                  Ramamandi Jalandhar, Punjab 144001
                </p>
              </div>
              <div
                class="flex items-center justify-between py-2 border-b border-gray-300"
              >
                <p>
                  <span class="text-blue-500"
                    ><i class="fa-solid fa-star"></i> </span
                  >3.8
                </p>
                <p>34 Mins</p>
                <p>रु 200</p>
              </div>
              <div class="mt-4 flex items-center">
                <span
                  ><img src="../icons8-discount-80.png" alt="" class="w-5 mr-2"
                /></span>
                <p>60% Off | Use Try New</p>
              </div>
            </div>
          </a>
        </div>
        <div class="w-full border border-blue-100 hover:border-blue-500">
          <a href="#">
            <div class="xl:w-56 lg:w-56 w-40 mx-auto">
              <img
                src="../images-shoes/row111.jpeg"
                alt="shoes-img"
                class="w-full py-4"
              />
            </div>
            <div class="px-4 pb-4 text-sm">
              <div>
                <h2 class="text-gray-900 font-bold text-base mb-2">
                  Shoes shop 4
                </h2>
                <p class="text-xs">
                  <i class="fa-solid fa-location-dot text-blue-500"></i>
                  Ramamandi Jalandhar, Punjab 144001
                </p>
              </div>
              <div
                class="flex items-center justify-between py-2 border-b border-gray-300"
              >
                <p>
                  <span class="text-blue-500"
                    ><i class="fa-solid fa-star"></i> </span
                  >3.8
                </p>
                <p>34 Mins</p>
                <p>रु 200</p>
              </div>
              <div class="mt-4 flex items-center">
                <span
                  ><img src="../icons8-discount-80.png" alt="" class="w-5 mr-2"
                /></span>
                <p>60% Off | Use Try New</p>
              </div>
            </div>
          </a>
        </div>
        <div class="w-full border border-blue-100 hover:border-blue-500">
          <a href="#">
            <div class="xl:w-56 lg:w-56 w-40 mx-auto">
              <img
                src="../images-shoes/row112.jpeg"
                alt="shoes-img"
                class="w-full py-8"
              />
            </div>
            <div class="px-4 pb-4 text-sm">
              <div>
                <h2 class="text-gray-900 font-bold text-base mb-2">
                  Shoes shop 4
                </h2>
                <p class="text-xs">
                  <i class="fa-solid fa-location-dot text-blue-500"></i>
                  Ramamandi Jalandhar, Punjab 144001
                </p>
              </div>
              <div
                class="flex items-center justify-between py-2 border-b border-gray-300"
              >
                <p>
                  <span class="text-blue-500"
                    ><i class="fa-solid fa-star"></i> </span
                  >3.8
                </p>
                <p>34 Mins</p>
                <p>रु 200</p>
              </div>
              <div class="mt-4 flex items-center">
                <span
                  ><img src="../icons8-discount-80.png" alt="" class="w-5 mr-2"
                /></span>
                <p>60% Off | Use Try New</p>
              </div>
            </div>
          </a>
        </div>
        <div class="w-full border border-blue-100 hover:border-blue-500">
          <a href="#">
            <div class="xl:w-56 lg:w-56 w-40 mx-auto">
              <img
                src="../images-shoes/row12.jpeg"
                alt="shoes-img"
                class="w-full py-5"
              />
            </div>
            <div class="px-4 pb-4 text-sm">
              <div>
                <h2 class="text-gray-900 font-bold text-base mb-2">
                  Shoes shop 4
                </h2>
                <p class="text-xs">
                  <i class="fa-solid fa-location-dot text-blue-500"></i>
                  Ramamandi Jalandhar, Punjab 144001
                </p>
              </div>
              <div
                class="flex items-center justify-between py-2 border-b border-gray-300"
              >
                <p>
                  <span class="text-blue-500"
                    ><i class="fa-solid fa-star"></i> </span
                  >3.8
                </p>
                <p>34 Mins</p>
                <p>रु 200</p>
              </div>
              <div class="mt-4 flex items-center">
                <span
                  ><img src="../icons8-discount-80.png" alt="" class="w-5 mr-2"
                /></span>
                <p>60% Off | Use Try New</p>
              </div>
            </div>
          </a>
        </div>
        <!-- card third row -->
        <div class="w-full border border-blue-100 hover:border-blue-500">
          <a href="#">
            <div class="xl:w-56 lg:w-56 w-40 mx-auto">
              <img
                src="../images-shoes/row13.jpeg"
                alt="shoes-img"
                class="w-full py-10"
              />
            </div>
            <div class="px-4 pb-4 text-sm">
              <div>
                <h2 class="text-gray-900 font-bold text-base mb-2">
                  Shoes shop 4
                </h2>
                <p class="text-xs">
                  <i class="fa-solid fa-location-dot text-blue-500"></i>
                  Ramamandi Jalandhar, Punjab 144001
                </p>
              </div>
              <div
                class="flex items-center justify-between py-2 border-b border-gray-300"
              >
                <p>
                  <span class="text-blue-500"
                    ><i class="fa-solid fa-star"></i> </span
                  >3.8
                </p>
                <p>34 Mins</p>
                <p>रु 200</p>
              </div>
              <div class="mt-4 flex items-center">
                <span
                  ><img src="../icons8-discount-80.png" alt="" class="w-5 mr-2"
                /></span>
                <p>60% Off | Use Try New</p>
              </div>
            </div>
          </a>
        </div>
        <div class="w-full border border-blue-100 hover:border-blue-500">
          <a href="#">
            <div class="w-xl:w-56 lg:w-56 w-40 mx-auto">
              <img
                src="../images-shoes/row14.jpeg"
                alt="shoes-img"
                class="w-full py-6"
              />
            </div>
            <div class="px-4 pb-4 text-sm">
              <div>
                <h2 class="text-gray-900 font-bold text-base mb-2">
                  Shoes shop 4
                </h2>
                <p class="text-xs">
                  <i class="fa-solid fa-location-dot text-blue-500"></i>
                  Ramamandi Jalandhar, Punjab 144001
                </p>
              </div>
              <div
                class="flex items-center justify-between py-2 border-b border-gray-300"
              >
                <p>
                  <span class="text-blue-500"
                    ><i class="fa-solid fa-star"></i> </span
                  >3.8
                </p>
                <p>34 Mins</p>
                <p>रु 200</p>
              </div>
              <div class="mt-4 flex items-center">
                <span
                  ><img src="../icons8-discount-80.png" alt="" class="w-5 mr-2"
                /></span>
                <p>60% Off | Use Try New</p>
              </div>
            </div>
          </a>
        </div>
        <div class="w-full border border-blue-100 hover:border-blue-500">
          <a href="#">
            <div class="w-xl:w-56 lg:w-56 w-40 mx-auto">
              <img
                src="../images-shoes/row15.jpeg"
                alt="shoes-img"
                class="w-full py-6"
              />
            </div>
            <div class="px-4 pb-4 text-sm">
              <div>
                <h2 class="text-gray-900 font-bold text-base mb-2">
                  Shoes shop 4
                </h2>
                <p class="text-xs">
                  <i class="fa-solid fa-location-dot text-blue-500"></i>
                  Ramamandi Jalandhar, Punjab 144001
                </p>
              </div>
              <div
                class="flex items-center justify-between py-2 border-b border-gray-300"
              >
                <p>
                  <span class="text-blue-500"
                    ><i class="fa-solid fa-star"></i> </span
                  >3.8
                </p>
                <p>34 Mins</p>
                <p>रु 200</p>
              </div>
              <div class="mt-4 flex items-center">
                <span
                  ><img src="../icons8-discount-80.png" alt="" class="w-5 mr-2"
                /></span>
                <p>60% Off | Use Try New</p>
              </div>
            </div>
          </a>
        </div>
        <div class="w-full border border-blue-100 hover:border-blue-500">
          <a href="#">
            <div class="w-xl:w-56 lg:w-56 w-40 mx-auto">
              <img
                src="../images-shoes/row16.jpeg"
                alt="shoes-img"
                class="w-full py-11"
              />
            </div>
            <div class="px-4 pb-4 text-sm">
              <div>
                <h2 class="text-gray-900 font-bold text-base mb-2">
                  Shoes shop 4
                </h2>
                <p class="text-xs">
                  <i class="fa-solid fa-location-dot text-blue-500"></i>
                  Ramamandi Jalandhar, Punjab 144001
                </p>
              </div>
              <div
                class="flex items-center justify-between py-2 border-b border-gray-300"
              >
                <p>
                  <span class="text-blue-500"
                    ><i class="fa-solid fa-star"></i> </span
                  >3.8
                </p>
                <p>34 Mins</p>
                <p>रु 200</p>
              </div>
              <div class="mt-4 flex items-center">
                <span
                  ><img src="../icons8-discount-80.png" alt="" class="w-5 mr-2"
                /></span>
                <p>60% Off | Use Try New</p>
              </div>
            </div>
          </a>
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
        <p class="text-sm pt-2 py-1">mithleshnirmal786123@gmail.com</p>
        <p class="text-sm pt-2 py-1">karansharma19926@gmail.com</p>
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
   
  </body>
</html>
