<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gokul Traders</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="css/style.css" />
    
    <!-- preloader -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <link rel="stylesheet" href="css/index.min.css" />   
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">    <!-- login Logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="png" href="images/favicon-2.png">  

  
  
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
              <a href="/" class="flex items-start">
                <img src="images/GT-logo-4.png" alt="Logo" class="w-36 " />
              </a>
            </div>

            <?php  $active_page=basename($_SERVER['PHP_SELF'], ".php");    ?>

                <!-- <!-Secondary Navbar items      -->
            <div class="hidden xl:flex  items-center space-x-4">
              <a
                href="/"
                class=" text-2xl font-semi-bold text-blue-800  hover:text-[#FF52B4] btn1 btn-21 hover-slide-right <?php echo $active_page === 'index' ? 'border-b-4 border-[#FF52B4] text-[#FF52B4] ' : ''; ?>"><span>Home</span></a>
                
              
              <a
                href="/about"
                class="  text-2xl font-semi-bold text-blue-800  hover:text-[#FF52B4]  btn1 btn-21 hover-slide-right  <?php echo $active_page === 'about' ? 'border-b-4 border-[#FF52B4] text-[#FF52B4]' : ''; ?>"><span>About</span></a>
              

              <a
                href="/products"
                class="  text-2xl font-semi-bold text-blue-800  hover:text-[#FF52B4]  btn1 btn-21 hover-slide-right  <?php echo $active_page === 'products' ? 'border-b-4 border-[#FF52B4] text-[#FF52B4]' : ''; ?>"><span>Products</span></a>
                
                {{-- dropdown --}}
                
                <nav class="navbar navbar-expand-lg bg-gray-50 relative flex items-center justify-between">
                  <div class="px-6">
                    <button class="navbar-toggler border-0 py-3 lg:hidden leading-none text-xl bg-transparent text-gray-600 hover:text-gray-700 focus:text-gray-700 transition-shadow duration-150 ease-in-out" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContentX" aria-controls="navbarSupportedContentX" aria-expanded="false" aria-label="Toggle navigation">
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
                      </svg>
                    </button>
                    <div class="navbar-collapse collapse grow items-center" id="navbarSupportedContentX">
                      <ul class="navbar-nav mr-auto flex flex-row">
                        <li class="nav-item dropdown static">
                          <a class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out dropdown-toggle flex items-center whitespace-nowrap" href="#" data-mdb-ripple="true" data-mdb-ripple-color="light" type="button" id="dropdownMenuButtonX" data-bs-toggle="dropdown"
                          aria-expanded="false">Mega menu
                            <svg  aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                              <path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path>
                            </svg>
                          </a>
                          <div class="dropdown-menu w-full mt-0 hidden shadow-lg bg-white absolute left-0 top-full" style="width: 400%;" aria-labelledby="dropdownMenuButtonX">
                            <div class="px-6 lg:px-8 py-5">
                              <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                                <div class="bg-white text-gray-600">
                                  <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">AASDFm</a>
                                  <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">AASDF</a>
                                  <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">AASDFctetur</a>
                                  <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">AASDF odio</a>
                                  <a href="#!" aria-current="true" class="block px-6 py-2 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">AASDFg elit</a>
                                </div>
                                <div class="bg-white text-gray-600">
                                  <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">AASDFuptas</a>
                                  <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">AASDFis quo</a>
                                  <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">AASDF odio</a>
                                  <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">AASDFiores</a>
                                  <a href="#!" aria-current="true" class="block px-6 py-2 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">AASDFdolor</a>
                                </div>
                                <div class="bg-white text-gray-600">
                                  <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">AASDFato</a>
                                  <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">AASDF odio</a>
                                  <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">AASDF</a>
                                  <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">AASDFm</a>
                                  <a href="#!" aria-current="true" class="block px-6 py-2 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">AASDF</a>
                                </div>
                                <div class="bg-white text-gray-600">
                                  <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">AASDFato</a>
                                  <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">AASDF odio</a>
                                  <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">AASDF</a>
                                  <a href="#!" aria-current="true" class="block px-6 py-2 border-b border-gray-200 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">AASDFm</a>
                                  <a href="#!" aria-current="true" class="block px-6 py-2 w-full hover:bg-gray-50 hover:text-gray-700 transition duration-150 ease-in-out">AASDF</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
            
                {{-- dropdown --}}
              
              <a
                href="/gallery"
                class="  text-2xl font-semi-bold text-blue-800  hover:text-[#FF52B4]  btn1 btn-21 hover-slide-right  <?php echo $active_page === 'gallery' ? 'border-b-4 border-[#FF52B4] text-[#FF52B4]' : ''; ?>"><span>Gallery</span></a>
              
              
              <a
                href="/contact-us"
                class="  text-2xl font-semi-bold text-blue-800  hover:text-[#FF52B4]  btn1 btn-21 hover-slide-right  <?php echo $active_page === 'contact-us' ? 'border-b-4 border-[#FF52B4] text-[#FF52B4]' : ''; ?>"><span>Contact us</span></a>
               
         
                
              <div class="">
                  <a href="/login" class="butn butn__new"><span><i class="fa fa-sign-in mr-2" style="font-size:20px"></i>Sign in</span></a>
              </div>

              <div class="">
                  <a href="/sign-up" class="butn butn__new"><span><i class="fas fa-user pr-2" style="font-size:16px "></i>Sign Up</span></a> <span class=" border-r-2 pl-4 border-blue-900"></span>
              </div>
              

              <a href="#" class="text-2xl font-semi-bold text-blue-900  hover:text-[#FF52B4] btn1 btn-21 hover-slide-right  <?php echo $active_page === '#' ? 'border-b-2 border-[#FF52B4] text-[#FF52B4]' : ''; ?> "><i class = "fas fa-shopping-cart"  style="font-size:24px;" ></i><span class="ml-2">cart</span>
              </a> 
            </div>

            

              <!-- Mobile menu button -->
         
            <div class="flex  lg:hidden items-center">
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
                href="/"
                class="block text-sm px-2 py-2 text-[1.5rem] leading-[2.25rem] pt-[1rem] pb-[1rem] text-blue-900  <?php echo $active_page === 'index' ? 'bg-[#FF52B4] text-[white]' : ''; ?> "
                >Home</a
              >
            </li>
            <li>
              <a
                href="/about"
                class="block text-sm px-2 py-2  text-[1.5rem] leading-[2.25rem] pt-[1rem] pb-[1rem] text-blue-900  <?php echo $active_page === 'about' ? 'bg-[#FF52B4] text-[white]' : ''; ?> "
                >About us</a
              >
            </li>

            <li>
              <a
                href="/products"
                class="block text-sm px-2 py-2 text-[1.5rem] leading-[2.25rem] pt-[1rem] pb-[1rem]  text-blue-900  <?php echo $active_page === 'products' ? 'bg-[#FF52B4] text-[white]' : ''; ?> "
                >Products</a
              >
            </li>
            <li>
              <a
                href="/gallery"
                class="block text-sm px-2 py-2  text-[1.5rem] leading-[2.25rem] pt-[1rem] pb-[1rem] text-blue-900  <?php echo $active_page === 'gallery' ? 'bg-[#FF52B4]  text-[white]' : ''; ?> "
                >Gallery</a
              >
            </li>
            <li>
              <a
                href="/contact-us"
                class="block text-sm px-2 py-2  text-[1.5rem] leading-[2.25rem] pt-[1rem] pb-[1rem] text-blue-900  <?php echo $active_page === 'contact-us' ? 'bg-[#FF52B4] text-[white]' : ''; ?> "
                >Contact-us</a
              >
            </li>
            <li>
            <div class="banner">
                  <a href="/login" class='butn butn__new'><span><i class="fas fa-user pr-2" style="font-size:16px "></i>Sign in</span></a>
              </div>
            </li>

            <li>
            <div class="banner">
                  <a href="/sign-up" class='butn butn__new mt-4'><span><i class="fa fa-sign-in mr-2" style="font-size:20px ">           </i>Sign             Up</span></a>
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
   

 
