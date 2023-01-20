<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gokul Traders</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css" />
    <!-- preloader -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/index.min.css" />  
    <script src="https://unpkg.com/scrollreveal"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">    <!-- login Logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="png" href="images/favicon-2.png">
     @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

<body>
    <div class="loader-bg">
      <div class="loader"></div>
    </div>


  
   <section > 
         <!-- Navbar goes here    -->
      <nav class="bg-white">
        <div class="max-w-[95%]  mx-auto"> 
          <div class="flex justify-between">
            <div class="">
               <!-- Website Logo    -->
              <a href="index.php" class="flex items-start">
                <img src="images/GT-logo-4.png" alt="Logo" class="w-36 " />
              </a>
            </div>

            <?php  $active_page=basename($_SERVER['PHP_SELF'], ".php");    ?>

                <!-- <!-Secondary Navbar items      -->
            <div class="hidden xl:flex  items-center space-x-4">
              <a
                href="index.php"
                class=" text-2xl font-semi-bold text-blue-900  hover:text-[#FF52B4] btn1 btn-21 hover-slide-right <?php echo $active_page === 'index' ? 'border-b-4 border-[#FF52B4] text-[#FF52B4] ' : ''; ?>"><span>Home</span></a>
                
              
              <a
                href="about.php"
                class="  text-2xl font-semi-bold text-blue-900  hover:text-[#FF52B4]  btn1 btn-21 hover-slide-right  <?php echo $active_page === 'about' ? 'border-b-4 border-[#FF52B4] text-[#FF52B4]' : ''; ?>"><span>About</span></a>
              
            
              <a
                href="products.php"
                class="  text-2xl font-semi-bold text-blue-900  hover:text-[#FF52B4]  btn1 btn-21 hover-slide-right  <?php echo $active_page === 'products' ? 'border-b-4 border-[#FF52B4] text-[#FF52B4]' : ''; ?>"><span>Products</span></a>
                
              
              <a
                href="gallery.php"
                class="  text-2xl font-semi-bold text-blue-900  hover:text-[#FF52B4]  btn1 btn-21 hover-slide-right  <?php echo $active_page === 'gallery' ? 'border-b-4 border-[#FF52B4] text-[#FF52B4]' : ''; ?>"><span>Gallery</span></a>
              
              
              <a
                href="contact-us.php"
                class="  text-2xl font-semi-bold text-blue-900  hover:text-[#FF52B4]  btn1 btn-21 hover-slide-right  <?php echo $active_page === 'contact-us' ? 'border-b-4 border-[#FF52B4] text-[#FF52B4]' : ''; ?>"><span>Contact us</span></a>
              
           
              <div class="banner">
                  <a href="login.php" class="butn butn__new"><span><i class="fa fa-sign-in mr-2" style="font-size:20px"></i>Sign in</span></a>
              </div>

              <div class="banner">
                  <a href="sign-up.php" class="butn butn__new"><span><i class="fas fa-user pr-2" style="font-size:16px "></i>Sign Up</span></a> <span class=" border-r-2 pl-4 border-blue-900"></span>
              </div>
              

              <a href="#" class="text-2xl font-semi-bold text-blue-900  hover:text-[#FF52B4] btn1 btn-21 hover-slide-right  <?php echo $active_page === '#' ? 'border-b-4 border-[#FF52B4] text-[#FF52B4]' : ''; ?> "><i class = "fas fa-shopping-cart"  style="font-size:32px;" ></i><span class="ml-2">cart</span>
              </a> 

            </div>

              <!-- Mobile menu button    -->
         
            <div class="flex  xl:hidden items-center">
              <button
                class="outline-0 mobile-menu-button button-one"
                aria-controls=""
                aria-expanded="false"
                data-state="closed"
              >
                <svg
                  fill=" var(--primary)"
                  class="w-12 h-12 hamburger"
                  viewBox="0 0 100 100"
                  width="250"
                >
                  <rect
                    class="line top"
                    width="80"
                    height="10"
                    x="10"
                    y="25"
                    rx="5"
                  ></rect>
                  <rect
                    class="line middle"
                    width="80"
                    height="10"
                    x="10"
                    y="45"
                    rx="5"
                  ></rect>
                  <rect
                    class="line bottom"
                    width="80"
                    height="10"
                    x="10"
                    y="65"
                    rx="5"
                  ></rect>
                </svg>
              </button>
            </div>
          </div>
        </div>

          <!-- mobile menu     -->

        <?php  $active_page=basename($_SERVER['PHP_SELF'], ".php");    ?>

        <div class="mobile-menu w-screen h-screen closed">
          <ul class="w-full text-center">
            <li class="active">
              <a
                href="index.php"
                class="block text-sm px-2 py-2 text-[1.5rem] leading-[2.25rem] pt-[1rem] pb-[1rem] text-blue-900  <?php echo $active_page === 'index' ? 'bg-[#FF52B4] text-[white]' : ''; ?> "
                >Home</a
              >
            </li>
            <li>
              <a
                href="about.php"
                class="block text-sm px-2 py-2  text-[1.5rem] leading-[2.25rem] pt-[1rem] pb-[1rem] text-blue-900  <?php echo $active_page === 'about' ? 'bg-[#FF52B4] text-[white]' : ''; ?> "
                >About us</a
              >
            </li>
            <li>
              <a
                href="products.php"
                class="block text-sm px-2 py-2 text-[1.5rem] leading-[2.25rem] pt-[1rem] pb-[1rem]  text-blue-900  <?php echo $active_page === 'products' ? 'bg-[#FF52B4] text-[white]' : ''; ?> "
                >Products</a
              >
            </li>
            <li>
              <a
                href="gallery.php"
                class="block text-sm px-2 py-2  text-[1.5rem] leading-[2.25rem] pt-[1rem] pb-[1rem] text-blue-900  <?php echo $active_page === 'gallery' ? 'bg-[#FF52B4]  text-[white]' : ''; ?> "
                >Gallery</a
              >
            </li>
            <li>
              <a
                href="contact-us.php"
                class="block text-sm px-2 py-2  text-[1.5rem] leading-[2.25rem] pt-[1rem] pb-[1rem] text-blue-900  <?php echo $active_page === 'contact-us' ? 'bg-[#FF52B4] text-[white]' : ''; ?> "
                >Contact-us</a
              >
            </li>
            <li>
            <div class="banner">
                  <a href="login.php" class='butn butn__new'><span><i class="fas fa-user pr-2" style="font-size:16px "></i>Sign in</span></a>
              </div>
            </li>

            <li>
            <div class="banner">
                  <a href="sign-up.php" class='butn butn__new mt-4'><span><i class="fa fa-sign-in mr-2" style="font-size:20px "></i>Sign Up</span></a>
              </div>
            </li>

           <li class="mt-6" >
           <a href="#" class="py-4 px-2  text-2xl font-semi-bold text-blue-900 hover:text-[#FF52B4]  "><i class = "fas fa-shopping-cart"  style="font-size:36px;" ></i>
            </a>
           </li>
         
          </ul>
        </div>
      </nav>
   
   </section>    


 


