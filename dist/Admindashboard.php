<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="./output.css">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"></script>

</head>

<body class="bg-gray-300">

    <div class="">
        <!-- side navbar -->
        <div class="w-[18%] md:block hidden h-screen fixed bg-white md:text-xl text-gray-500 list pt-6 shadow-md">
            <div class="flex items-center mb-4 -mt-4">
                <img src="https://cdn-icons-png.freepik.com/256/552/552721.png?ga=GA1.1.1933265658.1701935286&semt=ais" alt="" class="h-10 px-4">
                <h3 class="text-black font-mono text-xl">Avanish Yadav
                    <span class="text-xs font-bold">avanishyadav123@gmail.com</span>
                </h3>
            </div>
            <ul class="mb-72">
                <li class="py-4 text-black cursor-pointer hover:bg-gray-300">
                    <button id="am1" class="flex jus px-10" onclick="showContent('ao1', 'am1')">
                        <img class="h-5 pr-2" src="https://cdn-icons-png.freepik.com/256/747/747327.png?ga=GA1.1.1583059735.1708077775&semt=ais" alt="">
                        Dashboard
                    </button>
                </li>

                <li class="py-4 flex text-black cursor-pointer hover:bg-gray-300">

                    <button id="am2" class="flex px-10" onclick="showContent('ao2', 'am2')">
                        <img class="h-6 pr-2" src="https://cdn-icons-png.freepik.com/256/10320/10320461.png?ga=GA1.1.1933265658.1701935286&semt=ais" alt="">
                        page 2
                    </button>
                </li>

                <li class="py-4 flex text-black cursor-pointer hover:bg-gray-300">

                    <button id="am3" class="flex px-10" onclick="showContent('ao3', 'am3')">
                        <img class="h-6 pr-2" src="https://cdn-icons-png.freepik.com/256/10320/10320461.png?ga=GA1.1.1933265658.1701935286&semt=ais" alt="">
                        page 3
                    </button>
                </li>

                <li class="py-4 flex text-black cursor-pointer hover:bg-gray-300">

                    <button id="am4" class="flex px-10" onclick="showContent('ao4', 'am4')">
                        <img class="h-6 pr-2" src="https://cdn-icons-png.freepik.com/256/10320/10320461.png?ga=GA1.1.1933265658.1701935286&semt=ais" alt="">
                        page 4
                    </button>
                </li>

                <li class="py-4 flex text-black cursor-pointer hover:bg-gray-300">

                    <button id="am5" class="flex px-10" onclick="showContent('ao5', 'am5')">
                        <img class="h-6 pr-2" src="https://cdn-icons-png.freepik.com/256/10320/10320461.png?ga=GA1.1.1933265658.1701935286&semt=ais" alt="">
                        page 5
                    </button>
                </li>
            </ul>

            <a href="../Backend/logout.php" class="border-2 border-black px-2 py-1 rounded mx-10 text-white bg-black font-mono">Logout</a>

        </div>

        <div class="h-full md:w-[82%] w-full md:ml-[18%]">
            <div class="sticky top-0">
                <nav class="bg-white md:h-20 h-10 text-md shadow-md">
                    <ul class="flex justify-around mx-1 px-1 md:py-5">
                        <li>
                            <h1 class="md:text-2xl md:ml-44 text-lg font-bold mt-2">WELLCOME TO ADMIN PANEL - ADMIN</h1>
                        </li>
                        <li class="md:hidden block" >
                            <button><img src="https://cdn-icons-png.freepik.com/256/3889/3889524.png?ga=GA1.1.253096211.1707907143&semt=ais" alt="" class="h-6 mt-2"></button>
                        </li>
                    </ul>
                </nav>

            </div>
            <!-- main content -->
            <div class="text-justify md:mx-10 md:my-4">

                <!-- page 1 -->
                <div id="ao1" class="content">
                    <div class="md:mt-20 my-5 md:mx-10 mx-24">
                        <div class="md:flex md:flex-row md:justify-between flex-col flex ">

                            <div class="flex  justify-around items-center md:my-0 my-4 border-2 md:py-4 md:w-48 py-8 w-52 rounded-2xl cursor-pointer bg-gray-100 hover:scale-105 duration-700">
                                <div class=" px-4">
                                    <h2 class="text-2xl font-bold">60.5k</h2>
                                    <h2 class="text-lg">Views</h2>
                                </div>

                                <img class="h-10" src="https://cdn-icons-png.freepik.com/256/65/65000.png?ga=GA1.1.1583059735.1708077775&semt=ais" alt="Views">
                            </div>

                            <div class="flex justify-around items-center md:my-0 my-4 border-2 md:py-4 md:w-48 py-8 w-52 rounded-2xl bg-gray-100 cursor-pointer hover:scale-105 duration-700">
                                <div class=" px-4">
                                    <h2 class="text-2xl font-bold">150</h2>
                                    <h2 class="text-lg">Likes</h2>
                                </div>

                                <img class="h-10" src="https://cdn-icons-png.freepik.com/256/739/739282.png?ga=GA1.1.1583059735.1708077775&semt=ais" alt="likes">
                            </div>

                            <div class="flex justify-around items-center md:my-0 my-4 border-2 md:py-4 md:w-48 py-8 w-52 rounded-2xl bg-gray-100 cursor-pointer hover:scale-105 duration-700">
                                <div class=" px-4">
                                    <h2 class="text-2xl font-bold">320</h2>
                                    <h2 class="text-lg">Comments</h2>
                                </div>

                                <img class="h-10" src="https://cdn-icons-png.freepik.com/256/2961/2961490.png?ga=GA1.1.1583059735.1708077775&semt=ais" alt="comments">
                            </div>

                            <div class="flex justify-around items-center md:my-0 my-4 border-2 md:py-4 md:w-48 py-8 w-52 rounded-2xl bg-gray-100 cursor-pointer hover:scale-105 duration-700">
                                <div class=" px-4">
                                    <h2 class="text-2xl font-bold">70</h2>
                                    <h2 class="text-lg">Published</h2>
                                </div>

                                <img class="h-10" src="https://cdn-icons-png.freepik.com/256/1292/1292834.png?ga=GA1.1.1583059735.1708077775&semt=ais" alt="published">
                            </div>
                        </div>

                    </div>

                </div>

                <!-- page 2 -->
                <div id="ao2" class="content hidden">
                    <h2 class=" text-center font-bold">page 2</h2>
                    <div class="text-gray-600 body-font">
                        <div class="container px-5 py-24 mx-auto">
                            <div class="flex flex-wrap -m-4">
                                <div class="p-4 lg:w-1/3">
                                    <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                                        <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Raclette Blueberry Nextious Level</h1>
                                        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                        <a class="text-indigo-500 inline-flex items-center">Learn More
                                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                        <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                                            <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>1.2K
                                            </span>
                                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                                </svg>6
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 lg:w-1/3">
                                    <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                                        <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Ennui Snackwave Thundercats</h1>
                                        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                        <a class="text-indigo-500 inline-flex items-center">Learn More
                                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                        <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                                            <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>1.2K
                                            </span>
                                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                                </svg>6
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 lg:w-1/3">
                                    <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                                        <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Selvage Poke Waistcoat Godard</h1>
                                        <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                        <a class="text-indigo-500 inline-flex items-center">Learn More
                                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                        <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                                            <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>1.2K
                                            </span>
                                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                                </svg>6
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- page 3 -->
                <div id="ao3" class="content hidden">
                    <h2 class=" text-center font-bold">page 3</h2>
                    <div class="text-gray-600 body-font">
                        <div class="container px-5 py-24 mx-auto">
                            <div class="flex flex-col text-center w-full mb-20">
                                <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">ROOF PARTY POLAROID</h2>
                                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Master Cleanse Reliac Heirloom</h1>
                                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
                            </div>
                            <div class="flex flex-wrap">
                                <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                                    <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Shooting Stars</h2>
                                    <p class="leading-relaxed text-base mb-4">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                    <a class="text-indigo-500 inline-flex items-center">Learn More
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                                    <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">The Catalyzer</h2>
                                    <p class="leading-relaxed text-base mb-4">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                    <a class="text-indigo-500 inline-flex items-center">Learn More
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                                    <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Neptune</h2>
                                    <p class="leading-relaxed text-base mb-4">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                    <a class="text-indigo-500 inline-flex items-center">Learn More
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                                    <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Melanchole</h2>
                                    <p class="leading-relaxed text-base mb-4">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                                    <a class="text-indigo-500 inline-flex items-center">Learn More
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                        </div>
                    </div>
                </div>

                <!-- page 4 -->
                <div id="ao4" class="content hidden">
                    <h2 class=" text-center font-bold">page 4</h2>
                    <div class="text-gray-600 body-font">
                        <div class="container px-5 py-24 mx-auto">
                            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Pitchfork Kickstarter Taxidermy</h1>
                                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table.</p>
                            </div>
                            <div class="flex flex-wrap -m-4">
                                <div class="xl:w-1/3 md:w-1/2 p-4">
                                    <div class="border border-gray-200 p-6 rounded-lg">
                                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                            </svg>
                                        </div>
                                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Shooting Stars</h2>
                                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                                    </div>
                                </div>
                                <div class="xl:w-1/3 md:w-1/2 p-4">
                                    <div class="border border-gray-200 p-6 rounded-lg">
                                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                                <circle cx="6" cy="6" r="3"></circle>
                                                <circle cx="6" cy="18" r="3"></circle>
                                                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                                            </svg>
                                        </div>
                                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">The Catalyzer</h2>
                                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                                    </div>
                                </div>
                                <div class="xl:w-1/3 md:w-1/2 p-4">
                                    <div class="border border-gray-200 p-6 rounded-lg">
                                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                        </div>
                                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Neptune</h2>
                                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                                    </div>
                                </div>
                                <div class="xl:w-1/3 md:w-1/2 p-4">
                                    <div class="border border-gray-200 p-6 rounded-lg">
                                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                                <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7"></path>
                                            </svg>
                                        </div>
                                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Melanchole</h2>
                                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                                    </div>
                                </div>
                                <div class="xl:w-1/3 md:w-1/2 p-4">
                                    <div class="border border-gray-200 p-6 rounded-lg">
                                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                                <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                                            </svg>
                                        </div>
                                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Bunker</h2>
                                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                                    </div>
                                </div>
                                <div class="xl:w-1/3 md:w-1/2 p-4">
                                    <div class="border border-gray-200 p-6 rounded-lg">
                                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                            </svg>
                                        </div>
                                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Ramona Falls</h2>
                                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                                    </div>
                                </div>
                            </div>
                            <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                        </div>
                    </div>
                </div>

                <!-- page 5 -->
                <div id="ao5" class="content hidden">
                    <h2 class=" text-center font-bold">page 5</h2>
                    <div class="text-gray-600 body-font overflow-hidden">
                        <div class="container px-5 py-24 mx-auto">
                            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                                <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
                                    <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2>
                                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">Animated Night Hill Illustrations</h1>
                                    <div class="flex mb-4">
                                        <a class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1">Description</a>
                                        <a class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1">Reviews</a>
                                        <a class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1">Details</a>
                                    </div>
                                    <p class="leading-relaxed mb-4">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY. XOXO fam inxigo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean.</p>
                                    <div class="flex border-t border-gray-200 py-2">
                                        <span class="text-gray-500">Color</span>
                                        <span class="ml-auto text-gray-900">Blue</span>
                                    </div>
                                    <div class="flex border-t border-gray-200 py-2">
                                        <span class="text-gray-500">Size</span>
                                        <span class="ml-auto text-gray-900">Medium</span>
                                    </div>
                                    <div class="flex border-t border-b mb-6 border-gray-200 py-2">
                                        <span class="text-gray-500">Quantity</span>
                                        <span class="ml-auto text-gray-900">4</span>
                                    </div>
                                    <div class="flex">
                                        <span class="title-font font-medium text-2xl text-gray-900">$58.00</span>
                                        <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
                                        <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                                <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://images.pexels.com/photos/20204362/pexels-photo-20204362/free-photo-of-ashville-appalachian-mountains-north-carolina.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- java script -->
    <script>
        // button change code
        var display = 0;

        function showContent(contentId, buttonId) {
            // Hide all content 
            var contentDivs = document.getElementsByClassName('content');
            for (var i = 0; i < contentDivs.length; i++) {
                contentDivs[i].classList.add('hidden');
            }

            // Deactivate all buttons
            var buttonElements = document.getElementsByTagName('button');
            for (var i = 0; i < buttonElements.length; i++) {
                buttonElements[i].classList.remove('active');
            }

            // Show the selected content and activate the corresponding button
            document.getElementById(contentId).classList.remove('hidden');
            document.getElementById(buttonId).classList.add('active');

            // Store the active button in local storage
            localStorage.setItem('activeButtonId', buttonId);
        }
    </script>
</body>

</html>