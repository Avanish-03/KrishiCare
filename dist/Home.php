<?php include("Header.php"); ?>
<!-- section 1 -->
<section>
    <!-- background img on landing page -->
    <div class="w-full lg:h-screen h-96 object-cover bg-gray-100 sm:block -z-30 overflow-hidden">
        <div class="relative flex justify-center items-center h-full z-10 bg-center bg-cover" style="background-image: url('https://images.pexels.com/photos/8323174/pexels-photo-8323174.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
            <h1 class="text-black lg:text-7xl md:text-5xl text-3xl text-center sm:font-bold md:font-thin lg:font-semibold">"FARMING IS A PEOFESSION <br> OF HOPE" <br>
                <span class="text-black lg:text-3xl md:text-xl text-lg font-bold">TAKING AGRICULTURE TO THE NEXT LEVEL</span>
                <div class="w-full h-full text-center mt-5 ">
                    <a class="w-fit border-2 border-white bg-white font-bold rounded-md md:py-2 py-1 px-2 md:px-5 text-black text-lg md:text-2xl" href="Admin_login.php">Get Started</a>
                </div>
            </h1>
        </div>
    </div>
</section>

<!-- crop overview section -->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
            <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                <div class="rounded-lg h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full" src="https://images.pexels.com/photos/158603/wheat-wheat-field-cereals-field-158603.jpeg?auto=compress&cs=tinysrgb&w=600">
                </div>
                <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Crop Name: Wheat</h2>
                <p class="text-base leading-relaxed mt-2">Wheat is the main cereal crop in India. The total area under the crop is about 29.8 million hectares in the country. The production of wheat in the country has increased significantly from 75.81 million MT in 2006-07 to an all time record high of 94.88 million MT in 2011-12.</p>
                <a href="../dist/Crop.php#wheat" class="text-white bg-gray-800 cursor-pointer px-2 py-1 rounded inline-flex items-center mt-3">Veiw More</a>
            </div>
            <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                <div class="rounded-lg h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full" src="https://media.istockphoto.com/id/519309790/photo/pile-of-raw-basmati-rice-with-a-spoon.jpg?b=1&s=612x612&w=0&k=20&c=1d7uNxyAaqRG2xscgXhaOy7aeZ7IP78K-Jr-jaGosz4=">
                </div>
                <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Basmati Rice</h2>
                <p class="text-base leading-relaxed mt-2">Rice is a staple food for a significant portion of the world's population. It is the seed of the grass species Oryza sativa. Basmati rice is known for its long grains and unique fragrance. It is typically grown in regionswith warm temperatures and adequate water supply.</p>
                <a href="../dist/Crop.php#basmati" class="text-white bg-gray-800 px-2 py-1 rounded cursor-pointer inline-flex items-center mt-3">View More</a>
            </div>
            <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                <div class="rounded-lg h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full" src="https://images.pexels.com/photos/7717489/pexels-photo-7717489.jpeg?auto=compress&cs=tinysrgb&w=600">
                </div>
                <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Jute</h2>
                <p class="text-base leading-relaxed mt-2">Jute is an important natural fibre crop in India next to cotton. In trade and industry, jute and mesta crop together known as raw jute as their uses are almost same. Raw jute plays an important role in the country’s economy. Raw jute was originally considered as a source of raw material for packaging industries only.</p>
                <a href="../dist/Crop.php#jute" class="text-white bg-gray-800 px-2 py-1 rounded cursor-pointer inline-flex items-center mt-3">View More</a>
            </div>
        </div>
    </div>
</section>



<?php include("Footer.php"); ?>
