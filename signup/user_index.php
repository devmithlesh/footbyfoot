<?php

session_start();

?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foot-By-Foot.com</title>
    <!-- stylesheet file for index html -->
    <link rel="stylesheet" href="style.css" />
    <!-- tailwind css cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- fontawesome cdn -->
    <script src="https://kit.fontawesome.com/1e3d70fa90.js" crossorigin="anonymous"></script>
    <!-- favicon logo -->
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
      <!-------------------------------------------------------------
      script
      ------------------------------------------------------------->
      <script src="./index.js"></script>
</head>

<body>
   
    <header class="text-gray-600">
        <div
            class="container mx-auto flex xl:justify-between md:justify-between xl:items-center md:items-center py-3 flex-col md:flex-row shadow-sm shadow-gray-100 xl:px-10 md:px-10 px-4">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <img src="./logo.png" alt="" class="xl:w-14 md:w-14 w-10" />
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
                    <a href="./user_index.php" class="xl:mr-10 md:mr-10 py-10 text-blue-500 cursor-pointer ">Home</a>
                    <a href="./men.php"
                        class="mr-10 hover:text-gray-900 cursor-pointer mrgn-top-btm active:text-blue-500">Men</a>
                    <a href="./women.php" class="mr-10 hover:text-gray-900 cursor-pointer mrgn-top-btm">Women</a>
                    <a href="./offer-section/offer.php"
                        class="mr-10 cursor-pointer hover:text-gray-900 mrgn-top-btm active:text-blue-500">Offers</a>
                    <!-- <i class="mr-10 fa-solid fa-cart-shopping text-base" ></i > -->

                    <?php echo $_SESSION['username'];?>
                    <i class="fa-solid fa-user py-0 px-1 bg-blue-400 text-sm text-gray-100 " onclick="myFunction()"></i>
                    <div class="dropdown">
                        <div id="myDropdown" class="dropdown-content">
                            <a href="#">My Profile</a>
                            <a href="#">My Wishlist</a>
                            <a href="../signup/orderhistory/history.php">My Order</a>
                            <a href="../index.php">Logout</a>
                        </div>
                    </div>

             
                </div>
            </nav>
            <a href="#" class="absolute right-4 sm:right-20 block xl:hidden md:hidden" id="burger"><i
                    class="fa-solid fa-bars"></i></a>
        </div>
        <!------------------------------------------------------------
      crousal slider start
      -------------------------------------------------------------->

        <div class="carousel relative shadow-2xl bg-white">
            <div class="carousel-inner relative overflow-hidden w-full">
                <!--Slide 1-->
                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
                    checked="checked" />
                <div class="carousel-item absolute opacity-0 backgraound-img-crousal-1">
                    <div class="absolute bottom-12 left-0 xl:right-0 md:right-0 text-center">
                        <h2 class="text-5xl font-bold text-gray-100 drop-shadow-xl">
                            Welcome to <span class="text-blue-500">Foot By Foot</span>
                        </h2>
                        <p class="text-gray-100 tracking-wider">

                        </p>
                    </div>
                </div>
                <label for="carousel-3"
                    class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-2"
                    class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                <!--Slide 2-->
                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true"
                    hidden="" />
                <div class="carousel-item absolute opacity-0 backgraound-img-crousal-2">
                    <div class="absolute bottom-12 left-0 xl:right-0 md:right-0 text-center">
                        <h2 class="text-5xl font-bold text-gray-100 drop-shadow-xl">
                            IF THE SHOE FITS<span class="text-blue-500">, BUY IT!</span>
                        </h2>
                        <p class="text-gray-100 tracking-wider">

                        </p>
                    </div>
                </div>
                <label for="carousel-1"
                    class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-3"
                    class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                <!--Slide 3-->
                <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true"
                    hidden="" />
                <div class="carousel-item absolute opacity-0 backgraound-img-crousal-3">
                    <div class="absolute bottom-12 left-0 xl:right-0 md:right-0 text-center">
                        <h2 class="text-5xl font-bold text-gray-100 drop-shadow-xl">
                            20%off On <span class="text-blue-500">Formal Shoes</span>
                        </h2>
                        <p class="text-gray-100 tracking-wider">

                        </p>
                    </div>
                </div>
                <label for="carousel-2"
                    class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-1"
                    class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                <!-- Add additional indicators for each slide-->
                <ol class="carousel-indicators">
                    <li class="inline-block mr-3">
                        <label for="carousel-1"
                            class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                    </li>
                    <li class="inline-block mr-3">
                        <label for="carousel-2"
                            class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                    </li>
                    <li class="inline-block mr-3">
                        <label for="carousel-3"
                            class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                    </li>
                </ol>
            </div>
        </div>
    </header>
    <!-- second section services-->
    <section>
        <div class="container mx-auto md:px-10 lg:px-10 py-12">
            <div class="grid grid-flow-col grid-cols-4 grid-rows-1 md:gap-4 lg:gap-4 gap-2 text-center">
                <div class="flex flex-col justify-center items-center border-right-sec">
                    <a href="#" class="mb-2 text-gray-900 hover:text-gray-700 text-3xl md:text-4xl"><i
                            class="fas fa-truck"></i></a>
                    <h1 class="text-gray-900 md:text-lg lg:text-lg text-xs font-bold">
                        Free World <span class="text-blue-500">delivery</span>
                    </h1>
                    <p class="text-xs text-blue-500">Lorem Ipus Dolor Site Amet</p>
                </div>
                <div class="flex flex-col justify-center items-center border-right-sec">
                    <a href="#" class="mb-2 text-gray-900 hover:text-gray-700 text-3xl md:text-4xl"><i
                            class="fas fa-hand-holding-usd"></i></a>
                    <h1 class="text-gray-900 md:text-lg lg:text-lg text-xs font-bold">
                        Money Bank <span class="text-blue-500">Gaurantee</span>
                    </h1>
                    <p class="text-xs text-blue-500">Lorem Ipus Dolor Site Amet</p>
                </div>
                <div class="flex flex-col justify-center items-center border-right-sec">
                    <a href="#" class="mb-2 text-gray-900 hover:text-gray-700 text-3xl md:text-4xl"><i
                            class="fas fa-question-circle"></i></a>
                    <h1 class="text-gray-900 md:text-lg lg:text-lg text-xs font-bold">
                        Best Online <span class="text-blue-500">Support</span>
                    </h1>
                    <p class="text-xs text-blue-500">Lorem Ipus Dolor Site Amet</p>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <a href="#" class="mb-2 text-gray-900 hover:text-gray-700 text-3xl md:text-4xl"><i
                            class="fas fa-gift"></i></a>
                    <h1 class="text-gray-900 md:text-lg lg:text-lg text-xs font-bold">
                        Special Gift <span class="text-blue-500">Card</span>
                    </h1>
                    <p class="text-xs text-blue-500">Lorem Ipus Dolor Site Amet</p>
                </div>
            </div>
        </div>
    </section>
    <!-- third section men & women-->
    <section class="text-gray-9">
        <div class="container md:px-10 lg:px-10 md:pt-10 lg:pt-10 pt-4 mx-auto">
            <div class="flex lg:flex-row md:flex-row flex-col items-center">
                <div class="lg:w-1/2 md:w-1/2 w-full image-center-css lg:mr-5 md:mr-5">
                    <h1 class="text-3xl font-bold text-center border-down-men">
                        Men <span class="text-blue-500">Collection</span>
                    </h1>
                    <p class="text-sm font-normal text-center mb-4 mt-2 tracking-wider md:w-10/12 lg:w-10/12">
                        Lorem, ipsum dolor sit amet consectetur adipisicings elit.
                        Nesciunt incidunt facere repudiandae culpa amet nemo ullam
                        nostrum, magnam assumenda eum quas sapiente, repellat
                    </p>
                   <a href="./men.php"> <img src="./all-type-shoes-img/men.jpg" class="men-block-img object-left " /></a>
                </div>
                <div class="md:w-1/2 lg:w-1/2 mt-10 md:mt-0 lg:mt-0 image-center-css md:ml-5 lg:ml-5">
                    <h1 class="text-3xl font-bold text-center border-down-men">
                        Women <span class="text-blue-500">Collection</span>
                    </h1>
                    <p class="text-sm font-normal text-center mb-4 mt-2 tracking-wider md:w-10/12 lg:w-10/12">
                        Consectetur adipisicing Lorem, ipsum dolor sit amet elit. Nesciunt
                        incidunt facere repudiandae culpa amet nemo ullam nostrum, magnam
                        assumenda eum quas sapiente, repellat
                    </p>
                    
                    <a href="./women.php"><img src="./all-type-shoes-img/women.jpg" class="men-block-img " /></a>
                </div>
            </div>
        </div>
    </section>
    <!-- down navigation bar -->
    <div class="text-gray-600 body-font xl:px-20 md:px-20 px-4 container mx-auto">
        <div class="flex justify-between pb-2 pt-10 flex-row items-center bottom-shadow-in-down-nav">
            <div class="flex items-center">
                <img src="./logo.png" alt="" class="xl:w-16 md:w-16 w-8 mr-5" />
                <span class="location-btn-design flex items-center">
                    <p class="mr-5 border-b border-blue-500 text-gray-800 text-sm">
                        Punjab
                    </p>
                    <i class="fa-solid fa-location-crosshairs"></i>
                    <select class="bg-transparent py-2 px-4 text-sm outline-0">
                        <option class="py-2">Your Location</option>
                        <option class="py-2">Jalandhar</option>
                        <option class="py-2">Ludhiana</option>
                        <option class="py-2">Patiala</option>
                        <option class="py-2">Bathinda</option>
                        <option class="py-2">Mohali</option>
                        <option class="py-2">Firozpur</option>
                        <option class="py-2">Batala</option>
                        <option class="py-2">Pathankot</option>
                        <option class="py-2">Moga</option>
                        <option class="py-2">Abohar</option>
                        <option class="py-2">Khanna</option>
                        <option class="py-2">Phagwara</option>
                        <option class="py-2">Kapurthala</option>
                        <option class="py-2">Faridkot</option>
                    </select>
                </span>
            </div>
            <div>
                <a href="#" class="xl:hidden md:hidden mr-2"><i class="fa-solid fa-bars"></i></a>
            </div>
            <nav class="md:ml-auto flex items-center text-base hidden xl:block md:block">
                <a class="mx-2 hover:text-gray-900 text-sm">Relevance</a>
                <a class="mx-2 hover:text-gray-900 text-sm">Delivery Time</a>
                <a class="mx-2 hover:text-gray-900 text-sm">Rating</a>
                <a class="mx-2 hover:text-gray-900 text-sm">Cost: Low To High</a>
                <a class="mx-2 hover:text-gray-900 text-sm">Cost: High To Low</a>
                <a class="mx-1 hover:text-gray-900 text-sm">Filters</a>
            </nav>
        </div>
    </div>
    <!-- card section -->
    <section class="text-gray-600 body-font">
        <div
            class="container xl:px-20 md:px-20 px-4 py-10 mx-auto grid xl:grid-cols-4 md:grid-cols-4 grid-cols-1 gap-4">
            <!-- card first row -->
            <div class="w-full border border-blue-100 hover:border-blue-500">
                <a href="./card--/card.php">
                    <div class="xl:w-56 lg:w-56 w-40 mx-auto">
                        <img src="../card--/card-profile-for-buy/5.jpeg" alt="shoes-img" class="w-full py-9" />
                    </div>
                    <div class="px-4 pb-4 text-sm">
                        <div>
                            <h2 class="text-gray-900 font-bold text-base mb-2">
                            Motorsport Shoes For Men
                            </h2>
                            <p class="text-xs">
                                <i class="fa-solid fa-location-dot text-blue-500"></i>
                                Ramamandi Jalandhar, Punjab 144001
                            </p>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-300">
                            <p>
                                <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>4.5
                            </p>
                            <p>34 Mins</p>
                            <p>रु 779 </p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2" /></span>
                            <p>30% Off | Use Try New</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="w-full border border-blue-100 hover:border-blue-500">
                <a href="./card--/card.php">
                    <div class="xl:w-56 lg:w-56 w-40 mx-auto">
                        <img src="./images-shoes/row15.jpeg" alt="shoes-img" class="w-full py-5 mt-1"  />
                    </div>
                    <div class="px-4 pb-4 text-sm">
                        <div>
                            <h2 class="text-gray-900 font-bold text-base mb-2">
                            Black Shoes
                            </h2>
                            <p class="text-xs">
                                <i class="fa-solid fa-location-dot text-blue-500"></i>
                                Ramamandi Jalandhar, Punjab 144001
                            </p>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-300">
                            <p>
                                <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>3.5
                            </p>
                            <p>30 Mins</p>
                            <p>रु 250</p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2" /></span>
                            <p>10% Off | Use Try New</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full border border-blue-100 hover:border-blue-500">
                <a href="#">
                    <div class="xl:w-56 lg:w-56 w-40 mx-auto">
                        <img src="./png-shoes/13.png" alt="shoes-img" class="w-full" />
                    </div>
                    <div class="px-4 pb-4 text-sm">
                        <div>
                            <h2 class="text-gray-900 font-bold text-base mb-2">
                            Sneaker Transparent
                            </h2>
                            <p class="text-xs">
                                <i class="fa-solid fa-location-dot text-blue-500"></i>
                                Ramamandi Jalandhar, Punjab 144001
                            </p>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-300">
                            <p>
                                <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>3.7
                            </p>
                            <p>20 Mins</p>
                            <p>रु 299</p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2" /></span>
                            <p>20% Off | Use Try New</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full border border-blue-100 hover:border-blue-500">
                <a href="#">
                    <div class="xl:w-56 lg:w-56 w-40 mx-auto">
                        <img src="./png-shoes/12.png" alt="shoes-img" class="w-full" />
                    </div>
                    <div class="px-4 pb-4 text-sm">
                        <div>
                            <h2 class="text-gray-900 font-bold text-base mb-2">
                            Red Shoes 
                            </h2>
                            <p class="text-xs">
                                <i class="fa-solid fa-location-dot text-blue-500"></i>
                                Ramamandi Jalandhar, Punjab 144001
                            </p>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-300">
                            <p>
                                <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>4.3
                            </p>
                            <p>34 Mins</p>
                            <p>रु 499</p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2" /></span>
                            <p>20% Off | Use Try New</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- card second row -->
            <div class="w-full border border-blue-100 hover:border-blue-500">
                <a href="#">
                    <div class="xl:w-56 lg:w-56 w-40 mx-auto">
                        <img src="./images-shoes/row110.jpeg" alt="shoes-img" class="w-full py-10" />
                    </div>
                    <div class="px-4 pb-4 text-sm">
                        <div>
                            <h2 class="text-gray-900 font-bold text-base mb-2">
                            Sneaker
                            </h2>
                            <p class="text-xs">
                                <i class="fa-solid fa-location-dot text-blue-500"></i>
                                Ramamandi Jalandhar, Punjab 144001
                            </p>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-300">
                            <p>
                                <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>4.7
                            </p>
                            <p>34 Mins</p>
                            <p>रु 499</p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2" /></span>
                            <p>60% Off | Use Try New</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full border border-blue-100 hover:border-blue-500">
                <a href="#">
                    <div class="xl:w-56 lg:w-56 w-40 mx-auto">
                        <img src="./images-shoes/row111.jpeg" alt="shoes-img" class="w-full py-4" />
                    </div>
                    <div class="px-4 pb-4 text-sm">
                        <div>
                            <h2 class="text-gray-900 font-bold text-base mb-2">
                                White Sneaker
                            </h2>
                            <p class="text-xs">
                                <i class="fa-solid fa-location-dot text-blue-500"></i>
                                Ramamandi Jalandhar, Punjab 144001
                            </p>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-300">
                            <p>
                                <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>5.0
                            </p>
                            <p>30 Mins</p>
                            <p>रु 350</p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2" /></span>
                            <p>10% Off | Use Try New</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full border border-blue-100 hover:border-blue-500">
                <a href="#">
                    <div class="xl:w-56 lg:w-56 w-40 mx-auto">
                        <img src="./images-shoes/row112.jpeg" alt="shoes-img" class="w-full py-8" />
                    </div>
                    <div class="px-4 pb-4 text-sm">
                        <div>
                            <h2 class="text-gray-900 font-bold text-base mb-2">
                                Black Sneaker
                            </h2>
                            <p class="text-xs">
                                <i class="fa-solid fa-location-dot text-blue-500"></i>
                                Ramamandi Jalandhar, Punjab 144001
                            </p>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-300">
                            <p>
                                <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>4.9
                            </p>
                            <p>40 Mins</p>
                            <p>रु 550</p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2" /></span>
                            <p>20% Off | Use Try New</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full border border-blue-100 hover:border-blue-500">
                <a href="#">
                    <div class="xl:w-56 lg:w-56 w-40 mx-auto">
                        <img src="./images-shoes/row12.jpeg" alt="shoes-img" class="w-full py-5" />
                    </div>
                    <div class="px-4 pb-4 text-sm">
                        <div>
                            <h2 class="text-gray-900 font-bold text-base mb-2">
                                Dark Blue Sneaker
                            </h2>
                            <p class="text-xs">
                                <i class="fa-solid fa-location-dot text-blue-500"></i>
                                Ramamandi Jalandhar, Punjab 144001
                            </p>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-300">
                            <p>
                                <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>4.8
                            </p>
                            <p>34 Mins</p>
                            <p>रु 499</p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2" /></span>
                            <p>20% Off | Use Try New</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- card third row -->
            <div class="w-full border border-blue-100 hover:border-blue-500">
                <a href="#">
                    <div class="xl:w-56 lg:w-56 w-40 mx-auto">
                        <img src="./images-shoes/row13.jpeg" alt="shoes-img" class="w-full py-10" />
                    </div>
                    <div class="px-4 pb-4 text-sm">
                        <div>
                            <h2 class="text-gray-900 font-bold text-base mb-2">
                                Red Sneaker
                            </h2>
                            <p class="text-xs">
                                <i class="fa-solid fa-location-dot text-blue-500"></i>
                                Ramamandi Jalandhar, Punjab 144001
                            </p>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-300">
                            <p>
                                <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>3.5
                            </p>
                            <p>35 Mins</p>
                            <p>रु 299</p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2" /></span>
                            <p>20% Off | Use Try New</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full border border-blue-100 hover:border-blue-500">
                <a href="#">
                    <div class="w-xl:w-56 lg:w-56 w-40 mx-auto">
                        <img src="./images-shoes/row14.jpeg" alt="shoes-img" class="w-full py-6" />
                    </div>
                    <div class="px-4 pb-4 text-sm">
                        <div>
                            <h2 class="text-gray-900 font-bold text-base mb-2">
                                White Sneaker
                            </h2>
                            <p class="text-xs">
                                <i class="fa-solid fa-location-dot text-blue-500"></i>
                                Ramamandi Jalandhar, Punjab 144001
                            </p>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-300">
                            <p>
                                <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>4.8
                            </p>
                            <p>34 Mins</p>
                            <p>रु 399</p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2" /></span>
                            <p>10% Off | Use Try New</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full border border-blue-100 hover:border-blue-500">
                <a href="#">
                    <div class="w-xl:w-56 lg:w-56 w-40 mx-auto">
                        <img src="./images-shoes/row15.jpeg" alt="shoes-img" class="w-full py-6" />
                    </div>
                    <div class="px-4 pb-4 text-sm">
                        <div>
                            <h2 class="text-gray-900 font-bold text-base mb-2">
                            Yellow  & Black Sneaker
                            </h2>
                            <p class="text-xs">
                                <i class="fa-solid fa-location-dot text-blue-500"></i>
                                Ramamandi Jalandhar, Punjab 144001
                            </p>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-300">
                            <p>
                                <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>3.8
                            </p>
                            <p>34 Mins</p>
                            <p>रु 350</p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2" /></span>
                            <p>40% Off | Use Try New</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full border border-blue-100 hover:border-blue-500">
                <a href="#">
                    <div class="w-xl:w-56 lg:w-56 w-40 mx-auto">
                        <img src="./images-shoes/row16.jpeg" alt="shoes-img" class="w-full py-11" />
                    </div>
                    <div class="px-4 pb-4 text-sm">
                        <div>
                            <h2 class="text-gray-900 font-bold text-base mb-2">
                                Black Sneaker
                            </h2>
                            <p class="text-xs">
                                <i class="fa-solid fa-location-dot text-blue-500"></i>
                                Ramamandi Jalandhar, Punjab 144001
                            </p>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-300">
                            <p>
                                <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>3.6
                            </p>
                            <p>34 Mins</p>
                            <p>रु 200</p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2" /></span>
                            <p>60% Off | Use Try New</p>
                        </div>
                    </div>
                </a>
            </div>
            <!--card forth row -->
            <div class="w-full border border-blue-100 hover:border-blue-500">
                <a href="#">
                    <div class="xl:w-56 lg:w-56 w-40 mx-auto">
                        <img src="./images-shoes/row17.jpeg" alt="shoes-img" class="w-full py-5" />
                    </div>
                    <div class="px-4 pb-4 text-sm">
                        <div>
                            <h2 class="text-gray-900 font-bold text-base mb-2">
                            Sneaker 
                            </h2>
                            <p class="text-xs">
                                <i class="fa-solid fa-location-dot text-blue-500"></i>
                                Ramamandi Jalandhar, Punjab 144001
                            </p>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-300">
                            <p>
                                <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>4.7
                            </p>
                            <p>30 Mins</p>
                            <p>रु 300</p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2" /></span>
                            <p>10% Off | Use Try New</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full border border-blue-100 hover:border-blue-500">
                <a href="#">
                    <div class="xl:w-56 lg:w-56 w-40 mx-auto">
                        <img src="./images-shoes/row18.jpeg" alt="shoes-img" class="w-full py-9" />
                    </div>
                    <div class="px-4 pb-4 text-sm">
                        <div>
                            <h2 class="text-gray-900 font-bold text-base mb-2">
                            Sneaker 
                            </h2>
                            <p class="text-xs">
                                <i class="fa-solid fa-location-dot text-blue-500"></i>
                                Ramamandi Jalandhar, Punjab 144001
                            </p>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-300">
                            <p>
                                <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>5.0
                            </p>
                            <p>34 Mins</p>
                            <p>रु 699</p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2" /></span>
                            <p>20% Off | Use Try New</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full border border-blue-100 hover:border-blue-500">
                <a href="#">
                    <div class="xl:w-56 lg:w-56 w-40 mx-auto">
                        <img src="./images-shoes/row19.jpeg" alt="shoes-img" class="w-full py-9" />
                    </div>
                    <div class="px-4 pb-4 text-sm">
                        <div>
                            <h2 class="text-gray-900 font-bold text-base mb-2">
                            Sneaker
                            </h2>
                            <p class="text-xs">
                                <i class="fa-solid fa-location-dot text-blue-500"></i>
                                Ramamandi Jalandhar, Punjab 144001
                            </p>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-300">
                            <p>
                                <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>4.5
                            </p>
                            <p>34 Mins</p>
                            <p>रु 399</p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2" /></span>
                            <p>10% Off | Use Try New</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full border border-blue-100 hover:border-blue-500">
                <a href="#">
                    <div class="xl:w-56 lg:w-56 w-40 mx-auto">
                        <img src="./png-shoes/14.png" alt="shoes-img" class="w-full" />
                    </div>
                    <div class="px-4 pb-4 text-sm">
                        <div>
                            <h2 class="text-gray-900 font-bold text-base mb-2">
                                Female Sandel
                            </h2>
                            <p class="text-xs">
                                <i class="fa-solid fa-location-dot text-blue-500"></i>
                                Ramamandi Jalandhar, Punjab 144001
                            </p>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-300">
                            <p>
                                <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>4.2
                            </p>
                            <p>34 Mins</p>
                            <p>रु 500</p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2" /></span>
                            <p>10% Off | Use Try New</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- fift crad row -->
            <div class="w-full border border-blue-100 hover:border-blue-500">
                <a href="#">
                    <div class="xl:w-56 lg:w-56 w-40 mx-auto">
                        <img src="./png-shoes/11.png" alt="shoes-img" class="w-full" />
                    </div>
                    <div class="px-4 pb-4 text-sm">
                        <div>
                            <h2 class="text-gray-900 font-bold text-base mb-2">
                                Adidas Shoe
                            </h2>
                            <p class="text-xs">
                                <i class="fa-solid fa-location-dot text-blue-500"></i>
                                Ramamandi Jalandhar, Punjab 144001
                            </p>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-300">
                            <p>
                                <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>4.1
                            </p>
                            <p>15 Mins</p>
                            <p>रु 300</p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2" /></span>
                            <p>10% Off | Use Try New</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full border border-blue-100 hover:border-blue-500">
                <a href="#">
                    <div class="xl:w-56 lg:w-56 w-40 mx-auto">
                        <img src="./png-shoes/12.png" alt="shoes-img" class="w-full" />
                    </div>
                    <div class="px-4 pb-4 text-sm">
                        <div>
                            <h2 class="text-gray-900 font-bold text-base mb-2">
                                Red Sneaker
                            </h2>
                            <p class="text-xs">
                                <i class="fa-solid fa-location-dot text-blue-500"></i>
                                Ramamandi Jalandhar, Punjab 144001
                            </p>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-300">
                            <p>
                                <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>3.6
                            </p>
                            <p>30 Mins</p>
                            <p>रु 250</p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2" /></span>
                            <p>30% Off | Use Try New</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full border border-blue-100 hover:border-blue-500">
                <a href="#">
                    <div class="xl:w-56 lg:w-56 w-40 mx-auto">
                        <img src="./png-shoes/13.png" alt="shoes-img" class="w-full" />
                    </div>
                    <div class="px-4 pb-4 text-sm">
                        <div>
                            <h2 class="text-gray-900 font-bold text-base mb-2">
                                Yellow Shoes
                            </h2>
                            <p class="text-xs">
                                <i class="fa-solid fa-location-dot text-blue-500"></i>
                                Ramamandi Jalandhar, Punjab 144001
                            </p>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-300">
                            <p>
                                <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>3.5
                            </p>
                            <p>35 Mins</p>
                            <p>रु 240</p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2" /></span>
                            <p>60% Off | Use Try New</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full border border-blue-100 hover:border-blue-500">
                <a href="#">
                    <div class="xl:w-56 lg:w-56 w-40 mx-auto">
                        <img src="./png-shoes/14.png" alt="shoes-img" class="w-full" />
                    </div>
                    <div class="px-4 pb-4 text-sm">
                        <div>
                            <h2 class="text-gray-900 font-bold text-base mb-2">
                                Red Sandel
                            </h2>
                            <p class="text-xs">
                                <i class="fa-solid fa-location-dot text-blue-500"></i>
                                Ramamandi Jalandhar, Punjab 144001
                            </p>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-300">
                            <p>
                                <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>3.7
                            </p>
                            <p>34 Mins</p>
                            <p>रु 200</p>
                        </div>
                        <div class="mt-4 flex items-center">
                            <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2" /></span>
                            <p>60% Off | Use Try New</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!----------------------------------------------
      start brand img section 
    ------------------------------------------------>

    <section class="text-gray-400 body-font">
        <div
            class="container mx-auto xl:px-20 md:px-20 px-4 pb-10 xl:flex md:flex sm:flex justify-between hidden xl:block md:block">
            <div class="mr-10">
                <a href="#"><img src="./Brands-png/1.jpg" /></a>
            </div>
            <div class="mr-12">
                <a href="#"><img src="./Brands-png/3.jpg" /></a>
            </div>
            <div class="mr-12">
                <a href="#"><img src="./Brands-png/4.jpg" /></a>
            </div>
            <div class="mr-12">
                <a href="#"><img src="./Brands-png/5.jpg" /></a>
            </div>
            <div class="mr-12">
                <a href="#"><img src="./Brands-png/7.jpg" /></a>
            </div>
            <div class="mr-12">
                <a href="#"><img src="./Brands-png/8.jpg" /></a>
            </div>
            <div>
                <a href="#"><img src="./Brands-png/9.jpg" /></a>
            </div>
        </div>
    </section>
    <!----------------------------------------------
     brand img section end
     ------------------------->
    <!-- footer start -->
    <footer class="text-gray-400 body-font bg-gray-900">
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
                    <h2 class="title-font text-blue-400 tracking-widest text-sm mb-3">
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
                    <h2 class="title-font text-blue-400 tracking-widest text-sm mb-3">
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
                    <h2 class="title-font font-medium text-blue-400 tracking-widest text-sm mb-3">
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
                    <h2 class="title-font font-medium text-blue-400 tracking-widest text-sm mb-3">
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