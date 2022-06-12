<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment-Method</title>
    <!-- fontawesome cdn -->
    <script src="https://kit.fontawesome.com/1e3d70fa90.js" crossorigin="anonymous"></script>
    <!-- tailwind css cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
  <!-- payment section design only css file -->
    <link rel="stylesheet" href="payment.css">
    <!-- css file for res-navigation -->
    <link rel="stylesheet" href="../style.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
</head>
<body>
   <!-- -------------------------------------------
      navgation start
    --------------------------------------------- -->
    <div
    class="container mx-auto flex xl:justify-between md:justify-between xl:items-center md:items-center py-3 flex-col md:flex-row shadow-sm shadow-gray-100 xl:px-10 md:px-10 px-4"
  >
    <a
      class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0"
    >
      <img src="../logo.png" alt="" class="xl:w-14 md:w-14 w-10" />
      <span class="ml-3 xl:text-lg md:text-lg text-xs">Foot By Foot</span>
    </a>
    <div
      href="#"
      class="border border-blue-500 flex items-center justify-between px-4 py-1 rounded-xl"
    >
      <input
        type="text"
        placeholder="Search Items"
        class="border-0 outline-0 text-sm text-gray-500 font-light w-62"
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
          href="../index.html"
          class="xl:mr-10 md:mr-10 py-10 text-blue-500 cursor-pointer"
          >Home</a
        >
        <a
          href="../men.html"
          class="mr-10 hover:text-gray-900 cursor-pointer mrgn-top-btm"
          >Men</a
        >
        <a
          href="../women.html"
          class="mr-10 hover:text-gray-900 cursor-pointer mrgn-top-btm"
          >Women</a
        >
        <a
          href="../offer-section/offer.html"
          class="mr-10 hover:text-gray-900 cursor-pointer mrgn-top-btm"
          >Offers</a
        >
        <a
          href="../signup/sign.html"
          class="mr-10 hover:text-gray-900 cursor-pointer mrgn-top-btm"
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

  <!-----------------------------------------------------
   checkout payment start 
  ------------------------------------------------------>
    <section>
      <div class=" mx-auto container w-full md:w-7/12 xl:7/12 px-6">
        <div class=" py-10 font-bold overflow-hidden text-xs md:text-sm xl:text-sm">
            <h2 class="text-xl">Checkout</h2>
            <div class="flex justify-between py-10">
                <div class="step"></div>
                <div class="step"></div>
                <div class="step"></div>
                <div class="step"></div>
            </div>
            <div class="payment-method">
                <label for="card" class="method">
                  <div class="card-logos">
                    <img src="./visa_logo.png"/>
                    <img src="./mastercard_logo.png"/>
                  </div>
           
                  <div class="radio-input">
                    <input id="card" type="radio" name="payment">
                    Pay ₹ 200.00 with credit card
                  </div>
                </label>
           
                <label for="paypal" class="method">
                  <img src="./paypal_logo.png"/>
                  <div class="radio-input">
                    <input id="paypal" type="radio" name="payment">
                    Pay ₹ 200.00 with PayPal
                  </div>
                </label>
              </div>
              <!-- input field -->
              <div class="flex justify-between w-full text-gray-500 md:gap-6 xl:gap-6 gap-2 font-light ">
                <div class="w-1/2">
                  <label for="cardholder">Cardholder's Name</label>
                  <input type="text" id="cardholder" class="w-full py-2 px-2 mt-3 border border-gray-400 outline-input-design"/>
                  <div class="flex mt-4 w-full">
                    <div class="w-1/2 mr-4">
                      <label for="date">Valid thru</label>
                      <input type="text" id="date" placeholder="MM / YY"  class="w-full py-2 px-2 mt-2 border border-gray-400 outline-input-design"/>
                    </div>
           
                    <div class="w-1/2 ">
                      <label for="verification">CVV / CVC</label>
                      <input type="password" id="verification" class="w-full py-2 px-2 mt-2 border border-gray-400 outline-input-design"/>
                    </div>
                  </div>
           
                </div>
                <div class="flex flex-col w-1/2">
                    <div>
                  <label for="cardnumber">Card Number</label>
                  <input type="password" id="cardnumber" class="w-full py-2 px-2 mt-3 border border-gray-400 outline-input-design"/>
                </div>
                  <span class="mt-10 text-sm font-light">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</span>
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
      <!-------------------------------------------------------------
        footer end
      ----------------------------------------------------------- -->
      <!-------------------------------------------------------------
        script
        ------------------------------------------------------------->
      <script src="../index.js"></script>
</body>
</html>