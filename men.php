<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Men-section</title>
    <!-- tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/1e3d70fa90.js" crossorigin="anonymous"></script>
    <!-- men only css -->
    <link rel="stylesheet" href="men.css">
    <!-- main file css -->
    <link rel="stylesheet" href="./style.css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
</head>

<body>
    <header class="text-gray-600">
        <div
            class="container mx-auto flex xl:justify-between md:justify-between xl:items-center md:items-center py-3 flex-col md:flex-row shadow-sm shadow-gray-100 xl:px-10 md:px-10 px-4">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <img src="./logo.png" alt="" class="xl:w-14 md:w-14 w-10" />
                <span class="ml-3 xl:text-lg md:text-lg text-xs">Foot By Foot</span>
            </a>
            <div href="#" class="border border-blue-500 flex items-center justify-between px-4 py-1 rounded-xl">
                <input type="text" placeholder="Search Items"
                    class="border-0 outline-0 text-sm text-gray-500 font-light w-60" />
                <i class="fa-solid fa-magnifying-glass text-blue-500 hover:opacity-80">
                </i>
            </div>
            <nav class="flex flex-wrap items-center text-sm hidden xl:block md:block nav-bar-css" id="menu">
                <div class="mith-nav">
                    <a href="./index.php" class="xl:mr-10 md:mr-10 py-10 hover:text-gray-900 cursor-pointer">Home</a>
                    <a href="./men.php" class="mr-10 text-blue-500 cursor-pointer mrgn-top-btm">Men</a>
                    <a href="./women.php"
                        class="mr-10 hover:text-gray-900 cursor-pointer mrgn-top-btm active:text-blue-500">Women</a>
                    <a href="./offer-section/offer.php"
                        class="mr-10 hover:text-gray-900 cursor-pointer mrgn-top-btm">Offers</a>
                    <a href="./signup/signup.php" class="mr-10 hover:text-gray-900 cursor-pointer mrgn-top-btm">Sign
                        Up</a>
                    <a href="#" class="hover:text-gray-900 cursor-pointer mrgn-top-btm"><i
                            class="fa-solid fa-cart-shopping text-base"></i></a>
                </div>
            </nav>
            <a href="#" class="absolute right-4 sm:right-20 block xl:hidden md:hidden" id="burger"><i
                    class="fa-solid fa-bars"></i></a>
        </div>
    </header>
    <!-------------------------------------------------------------------------
        end header part
    ------------------------------------------------------------------------->
    <section class="text-gray-600 body-font">
        <div class="container xl:px-10 md:px-10 py-10 mx-auto flex ">
            <div class="w-3/12 flex flex-col text-sm hidden xl:block md:block">
                <div>
                    <h3 class="text-gray-800 font-bold pb-2">Delivery Day</h3>
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <input type="checkbox" class="mr-2" />
                            <p class="hover:text-gray-800 cursor-pointer py-1">
                                Get it in 1 hour
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" class="mr-2" />
                        <p class="hover:text-gray-800 cursor-pointer py-1">Get it in 1 Days</p>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" class="mr-2" />
                        <p class="hover:text-gray-800 cursor-pointer py-1">Get it in 2 Days</p>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" class="mr-2" />
                        <p class="hover:text-gray-800 cursor-pointer py-1">
                            Get it in 8 hours
                        </p>
                    </div>
                </div>
                <div>
                    <h3 class="text-gray-800 font-bold py-2">Department</h3>
                    <p class="cursor-pointer hover:text-gray-800 mb-1">
                        Men's Flip-Flops & Slippers
                    </p>
                    <p class="cursor-pointer hover:text-gray-800 my-1">
                        Men's Thong Sandals
                    </p>
                    <p class="cursor-pointer hover:text-gray-800 my-1">Men's Sneakers</p>
                    <p class="cursor-pointer hover:text-gray-800 my-1">
                        Women's Fashion Sandals
                    </p>
                    <p class="cursor-pointer hover:text-gray-800 my-1">
                        Women's Fashion Slippers
                    </p>
                    <p class="cursor-pointer hover:text-gray-800 my-1">
                        Men's Fashion Sandals
                    </p>
                    <p class="cursor-pointer hover:text-gray-800 my-1">
                        Men's Running Shoes
                    </p>
                    <p class="cursor-pointer hover:text-gray-800 my-1">
                        Boy's Flip-Flops & Slippers
                    </p>
                    <p class="cursor-pointer hover:text-gray-800 my-1">
                        Women's Flip-Flops & Slippers
                    </p>
                    <p class="cursor-pointer hover:text-gray-800 my-1">
                        Girl's Flip-Flops & Slippers
                    </p>
                </div>
                <div>
                    <h3 class="text-gray-800 font-bold py-2">Customer Review</h3>
                    <div class="flex cursor-pointer hover:text-gray-800">
                        <span>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star my-1"></i>
                            <i class="fa-solid fa-star my-1"></i>
                            <i class="fa-solid fa-star my-1"></i>
                            <i class="fa-regular fa-star my-1"></i>
                        </span>
                        <p class="ml-2">& Up</p>
                    </div>
                    <div class="flex cursor-pointer hover:text-gray-800">
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </span>
                        <p class="ml-2">& Up</p>
                    </div>
                    <div class="flex cursor-pointer hover:text-gray-800">
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </span>
                        <p class="ml-2">& Up</p>
                    </div>
                    <div class="flex cursor-pointer hover:text-gray-800">
                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </span>
                        <p class="ml-2">& Up</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-gray-800 font-bold py-2">Brand</h3>
                    <div class="flex items-center">
                        <input type="checkbox" class="mr-2" />
                        <p class="hover:text-gray-800 cursor-pointer mb-1">BATA</p>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" class="mr-2" />
                        <p class="hover:text-gray-800 cursor-pointer my-1">TRASE</p>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" class="mr-2" />
                        <p class="hover:text-gray-800 cursor-pointer my-1">ASIAN</p>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" class="mr-2" />
                        <p class="hover:text-gray-800 cursor-pointer my-1">SPARX</p>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" class="mr-2" />
                        <p class="hover:text-gray-800 cursor-pointer my-1">ADIDAS</p>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" class="mr-2" />
                        <p class="hover:text-gray-800 cursor-pointer my-1">REEBOX</p>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" class="mr-2" />
                        <p class="hover:text-gray-800 cursor-pointer my-1">PUMA</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-gray-800 font-bold py-2">Price</h3>
                    <p class="hover:text-gray-800 cursor-pointer mb-1">Under रु 500</p>
                    <p class="hover:text-gray-800 cursor-pointer my-1">रु 500 - रु 1,000</p>
                    <p class="hover:text-gray-800 cursor-pointer my-1">
                        रु 1,000 - रु 2,000
                    </p>
                    <p class="hover:text-gray-800 cursor-pointer my-1">
                        रु 2,000 - रु 5,000
                    </p>
                    <p class="hover:text-gray-800 cursor-pointer my-1">Over रु 5,000</p>
                    <div class="flex items-center pt-2">
                        <input type="text" placeholder="रु Min" class="border border-blue-500 text-sm p-2 w-20 mr-2" />
                        <input type="text" name="" placeholder="रु Max"
                            class="border border-blue-500 text-sm p-2 w-20 mr-2" />
                        <a href="#" class="py-2 px-3 border border-blue-500 text-sm">Go</a>
                    </div>
                </div>
                <div>
                    <h3 class="text-gray-800 font-bold py-2">Shoe Closure Type</h3>
                    <div class="flex items-center">
                        <input type="checkbox" class="mr-2" />
                        <p class="hover:text-gray-800 cursor-pointer mb-1">Buckle</p>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" class="mr-2" />
                        <p class="hover:text-gray-800 cursor-pointer my-1">Button</p>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" class="mr-2" />
                        <p class="hover:text-gray-800 cursor-pointer my-1">Hook & Loop</p>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" class="mr-2" />
                        <p class="hover:text-gray-800 cursor-pointer my-1">Lace-Up</p>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" class="mr-2" />
                        <p class="hover:text-gray-800 cursor-pointer my-1">Slip On</p>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" class="mr-2" />
                        <p class="hover:text-gray-800 cursor-pointer my-1">Zip</p>
                    </div>
                </div>
                <div>
                    <h3 class="font-bold py-2 text-gray-800">Pay On Delivery</h3>
                    <div class="flex items-center">
                        <input type="checkbox" class="mr-2" />
                        <p class="hover:text-gray-800 cursor-pointer">
                            Eligibal for Pay On Delivery
                        </p>
                    </div>
                </div>
                <div>
                    <h3 class="text-gray-800 font-bold py-2">Discount</h3>
                    <p class="hover:text-gray-800 cursor-pointer mb-1">10% Off or more</p>
                    <p class="hover:text-gray-800 cursor-pointer my-1">25% Off or more</p>
                    <p class="hover:text-gray-800 cursor-pointer my-1">35% Off or more</p>
                    <p class="hover:text-gray-800 cursor-pointer my-1">50% Off or more</p>
                    <p class="hover:text-gray-800 cursor-pointer my-1">60% Off or more</p>
                    <p class="hover:text-gray-800 cursor-pointer my-1">70% Off or more</p>
                </div>
            </div>
            <!--------------------------------------------------------------------------------
             Product section start 
            --------------------------------------------------------------------------------->
            <div class="w-9/12 container mx-auto grid xl:grid-cols-3 md:grid-cols-3 grid-cols-1 gap-4">
                <div class="w-full border border-blue-100 hover:border-blue-500">
                    <a href="#">
                        <div class="xl:w-56 lg:w-56 w-40 mx-auto ">
                            <img src="./png-shoes/11.png" alt="shoes-img" class="w-full">
                        </div>
                        <div class="px-4 pb-4 text-sm">
                            <div>
                                <h2 class="text-gray-900 font-bold text-base mb-2">Sport Shoes</h2>
                                <p class="text-xs"><i class="fa-solid fa-location-dot text-blue-500"></i> Ramamandi
                                    Jalandhar, Punjab 144001</p>
                            </div>
                            <div class="flex items-center justify-between py-2 border-b border-gray-300">
                                <p><span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>3.4</p>
                                <p>15 Mins</p>
                                <p>रु 399</p>
                            </div>
                            <div class="mt-4 flex items-center ">
                                <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2"></span>
                                <p>30% Off | Use Try New</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="w-full border border-blue-100 hover:border-blue-500">
                    <a href="#">
                        <div class="xl:w-56 lg:w-56 w-40 mx-auto ">
                            <img src="./png-shoes/12.png" alt="shoes-img" class="w-full">
                        </div>
                        <div class="px-4 pb-4 text-sm">
                            <div>
                                <h2 class="text-gray-900 font-bold text-base mb-2">Red Shoes</h2>
                                <p class="text-xs"><i class="fa-solid fa-location-dot text-blue-500"></i> Ramamandi
                                    Jalandhar, Punjab 144001</p>
                            </div>
                            <div class="flex items-center justify-between py-2 border-b border-gray-300">
                                <p><span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>3.8</p>
                                <p>30 Mins</p>
                                <p>रु 350</p>
                            </div>
                            <div class="mt-4 flex items-center ">
                                <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2"></span>
                                <p>10% Off | Use Try New</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="w-full border border-blue-100 hover:border-blue-500">
                    <a href="#">
                        <div class="xl:w-56 lg:w-56 w-40 mx-auto ">
                            <img src="./png-shoes/13.png" alt="shoes-img" class="w-full">
                        </div>
                        <div class="px-4 pb-4 text-sm">
                            <div>
                                <h2 class="text-gray-900 font-bold text-base mb-2">Yellow Shoes</h2>
                                <p class="text-xs"><i class="fa-solid fa-location-dot text-blue-500"></i> Ramamandi
                                    Jalandhar, Punjab 144001</p>
                            </div>
                            <div class="flex items-center justify-between py-2 border-b border-gray-300">
                                <p><span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>3.8</p>
                                <p>20 Mins</p>
                                <p>रु 300</p>
                            </div>
                            <div class="mt-4 flex items-center ">
                                <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2"></span>
                                <p>40% Off | Use Try New</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="w-full border border-blue-100 hover:border-blue-500">
                    <a href="#">
                        <div class="xl:w-56 lg:w-56 w-40 mx-auto">
                            <img src="./images-shoes/row13.jpeg" alt="shoes-img" class="w-full py-10" />
                        </div>
                        <div class="px-4 pb-4 text-sm">
                            <div>
                                <h2 class="text-gray-900 font-bold text-base mb-2">
                                    Red & Yellow Shoes Combination
                                </h2>
                                <p class="text-xs">
                                    <i class="fa-solid fa-location-dot text-blue-500"></i>
                                    Ramamandi Jalandhar, Punjab 144001
                                </p>
                            </div>
                            <div class="flex items-center justify-between py-2 border-b border-gray-300">
                                <p>
                                    <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>4.0
                                </p>
                                <p>10 Mins</p>
                                <p>रु 600</p>
                            </div>
                            <div class="mt-4 flex items-center">
                                <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2" /></span>
                                <p>50% Off | Use Try New</p>
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
                                    White Sports Shoes
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
                                <p>15 Mins</p>
                                <p>रु 450</p>
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
                        <div class="w-xl:w-56 lg:w-56 w-40 mx-auto">
                            <img src="./images-shoes/row15.jpeg" alt="shoes-img" class="w-full py-6" />
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
                                    <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>3.7
                                </p>
                                <p>28 Mins</p>
                                <p>रु 650</p>
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
                            <img src="./images-shoes/row16.jpeg" alt="shoes-img" class="w-full py-11" />
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
                                    <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>3.8
                                </p>
                                <p>34 Mins</p>
                                <p>रु 800</p>
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
                            <img src="./images-shoes/row17.jpeg" alt="shoes-img" class="w-full py-5" />
                        </div>
                        <div class="px-4 pb-4 text-sm">
                            <div>
                                <h2 class="text-gray-900 font-bold text-base mb-2">
                                    Gray Sport Shoes
                                </h2>
                                <p class="text-xs">
                                    <i class="fa-solid fa-location-dot text-blue-500"></i>
                                    Ramamandi Jalandhar, Punjab 144001
                                </p>
                            </div>
                            <div class="flex items-center justify-between py-2 border-b border-gray-300">
                                <p>
                                    <span class="text-blue-500"><i class="fa-solid fa-star"></i> </span>3.9
                                </p>
                                <p>34 Mins</p>
                                <p>रु 599</p>
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
                        <div class="xl:w-56 lg:w-56 w-40 mx-auto">
                            <img src="./images-shoes/row18.jpeg" alt="shoes-img" class="w-full py-9" />
                        </div>
                        <div class="px-4 pb-4 text-sm">
                            <div>
                                <h2 class="text-gray-900 font-bold text-base mb-2">
                                    Dark Gray Shoes
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
                                <p>50% Off | Use Try New</p>
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
                                    Light Gray Shoes
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
                                <p>रु 700</p>
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
                            <img src="./images-shoes/row112.jpeg" alt="shoes-img" class="w-full py-10" />
                        </div>
                        <div class="px-4 pb-4 text-sm">
                            <div>
                                <h2 class="text-gray-900 font-bold text-base mb-2">
                                    Black Sports Shoes
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
                                <p>10 Mins</p>
                                <p>रु 460</p>
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
                            <img src="./images-shoes/row12.jpeg" alt="shoes-img" class="w-full py-7" />
                        </div>
                        <div class="px-4 pb-4 text-sm">
                            <div>
                                <h2 class="text-gray-900 font-bold text-base mb-2">
                                    Dark Blue Shoes
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
                                <p>रु 799</p>
                            </div>
                            <div class="mt-4 flex items-center">
                                <span><img src="./icons8-discount-80.png" alt="" class="w-5 mr-2" /></span>
                                <p>60% Off | Use Try New</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-------------------------------------------------------------------------
        end header part
    ------------------------------------------------------------------------->
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
    <!-- ------------------------------------------------------------------------
      javascript fornavigation
    ------------------------------------------------------------------------------>
    <script src="./index.js"></script>
</body>

</html>