<?php include('Header.php'); ?>
<!-- component -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.freepik.com/256/10341/10341413.png?ga=GA1.1.253096211.1707907143&semt=ais">
    <title>KrishiCare - Farmer Information System</title>
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="stylesheet" href="../src/Js/styles.css">
    <script src="../src/Js/code.js"></script>
    <script src="../flowbite.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.3/tailwind.min.css" integrity="sha512-wl80ucxCRpLkfaCnbM88y4AxnutbGk327762eM9E/rRTvY/ZGAHWMZrYUq66VQBYMIYDFpDdJAOGSLyIPHZ2IQ==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@600&display=swap" rel="stylesheet">
</head>

<style>
    * {
        font-family: 'Quicksand', sans-serif;
    }
</style>


<body>
    <div class="pt-4">
        <div class="mx-auto max-w-6xl">
            <div class="p-2 rounded">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3  text-sm">
                        <div class="sticky inset-x-0 top-0 left-0 ">
                            <div class="text-3xl text-green-500 mb-8">Frequently asked questions.</div>
                            <div class="mb-2">You have any question ?</div>
                            <div class="text-xs text-gray-700">See our FAQ for more details</div>
                            <div class=" text-gray-600 mt-8 lg:mr-16">
                                <label for="" class="text-xl flex justify-center items-center hover">
                                    🔎<input type="search" name="serch" placeholder="Search" class="bg-white w-full h-10 px-5 rounded-full text-sm focus:outline-green-600">
                                </label>
                            </div>
                            <div>
                                <img src="../img/FAQs-bro.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="md:w-2/3 py-12 ">
                        <div class="p-4">
                            <div class="item px-6 py-6 " x-data="{isOpen : false}">
                                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">what does this website ?</h4>
                                    <svg :class="{'transform rotate-180' : isOpen == true}" class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </a>
                                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3 text-justify" :class="{'text-gray-600' : isOpen == true}">
                                    <p></p>
                                </div>
                            </div>

                            <div class="item px-6 py-6" x-data="{isOpen : false}">
                                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">How can we use Krishicare ?</h4>
                                    <svg :class="{'transform rotate-180' : isOpen == true}" class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </a>
                                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3 text-justify" :class="{'text-gray-600' : isOpen == true}">
                                    <p></p>
                                </div>
                            </div>

                            <div class="item px-6 py-6" x-data="{isOpen : false}">
                                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">How many types user suports ?</h4>
                                    <svg :class="{'transform rotate-180' : isOpen == true}" class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </a>
                                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3 text-justify" :class="{'text-gray-600' : isOpen == true}">
                                    <p></p>
                                </div>
                            </div>

                            <div class="item px-6 py-6" x-data="{isOpen : false}">
                                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">How can i register on Krishicare ?</h4>
                                    <svg :class="{'transform rotate-180' : isOpen == true}" class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </a>
                                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3 text-justify" :class="{'text-gray-600' : isOpen == true}">
                                    <p></p>
                                </div>
                            </div>

                            <div class="item px-6 py-6" x-data="{isOpen : false}">
                                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">My data will be secure or not ?</h4>
                                    <svg :class="{'transform rotate-180' : isOpen == true}" class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </a>
                                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3 text-justify" :class="{'text-gray-600' : isOpen == true}">
                                    <p></p>
                                </div>
                            </div>

                            <div class="item px-6 py-6" x-data="{isOpen : false}">
                                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">Question 6 ?</h4>
                                    <svg :class="{'transform rotate-180' : isOpen == true}" class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </a>
                                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3 text-justify" :class="{'text-gray-600' : isOpen == true}">
                                    <p></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </article>

    <div x-data="scrollHandler(document.getElementById('the-article'))" x-cloak aria-hidden="true" @scroll.window="calculateHeight(window.scrollY)" class="fixed h-screen w-1 hover:bg-gray-200 top-0 left-0 bg-gray-300">
        <div :style="`max-height:${height}%`" class="h-full bg-green-400"></div>
    </div>

    <div id="alpine-devtools" x-data="devtools()" x-show="alpines.length" x-init="start()">
    </div>
    <script>
        function scrollHandler(element = null) {
            return {
                height: 0,
                element: element,
                calculateHeight(position) {
                    const distanceFromTop = this.element.offsetTop
                    const contentHeight = this.element.clientHeight
                    const visibleContent = contentHeight - window.innerHeight
                    const start = Math.max(0, position - distanceFromTop)
                    const percent = (start / visibleContent) * 100;
                    requestAnimationFrame(() => {
                        this.height = percent;
                    });
                },
                init() {
                    this.element = this.element || document.body;
                    this.calculateHeight(window.scrollY);
                }
            };
        }
    </script>
</body>
<!-- <section class="bg-white">
    <div class="container px-6 py-12 mx-auto">
        <h1 class="text-2xl font-semibold text-gray-800 lg:text-3xl">Frequently asked questions.</h1>

        <div class="grid grid-cols-1 gap-8 mt-8 lg:mt-16 md:grid-cols-2 xl:grid-cols-3">
            <div>
                <div class="inline-block p-3 text-white bg-green-600 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>

                <div>
                    <h1 class="text-xl font-semibold text-gray-700">What can i expect at my first consultation?</h1>

                    <p class="mt-2 text-sm text-gray-500 ">
                        Question dolor sit amet consectetur adipisicing elit. Provident placeat, consequatur eveniet veritatis quos dignissimos beatae dolores exercitationem laboriosam officia magnam atque blanditiis illum doloremque magni ex corrupti tempora quis.
                    </p>
                </div>
            </div>

            <div>
                <div class="inline-block p-3 text-white bg-green-600 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>

                <div>
                    <h1 class="text-xl font-semibold text-gray-700">What are your opening house?</h1>

                    <p class="mt-2 text-sm text-gray-500 ">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident placeat, consequatur eveniet veritatis quos dignissimos beatae dolores exercitationem laboriosam officia magnam atque blanditiis illum doloremque magni ex corrupti tempora quis.
                    </p>
                </div>
            </div>

            <div>
                <div class="inline-block p-3 text-white bg-green-600 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>

                <div>
                    <h1 class="text-xl font-semibold text-gray-700">Do i need a referral?</h1>

                    <p class="mt-2 text-sm text-gray-500 ">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident placeat, consequatur eveniet veritatis quos dignissimos beatae dolores exercitationem laboriosam officia magnam atque blanditiis illum doloremque magni ex corrupti tempora quis.
                    </p>
                </div>
            </div>

            <div>
                <div class="inline-block p-3 text-white bg-green-600 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>

                <div>
                    <h1 class="text-xl font-semibold text-gray-700">Is the cost of the appoinment covered by private health insurance?</h1>

                    <p class="mt-2 text-sm text-gray-500 ">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident placeat, consequatur eveniet veritatis quos dignissimos beatae dolores exercitationem laboriosam officia magnam atque blanditiis illum doloremque magni ex corrupti tempora quis.
                    </p>
                </div>
            </div>

            <div>
                <div class="inline-block p-3 text-white bg-green-600 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>

                <div>
                    <h1 class="text-xl font-semibold text-gray-700">What is your cancellation policy?</h1>

                    <p class="mt-2 text-sm text-gray-500 ">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident placeat, consequatur eveniet veritatis quos dignissimos beatae dolores exercitationem laboriosam officia magnam atque blanditiis illum doloremque magni ex corrupti tempora quis.
                    </p>
                </div>
            </div>

            <div>
                <div class="inline-block p-3 text-white bg-green-600 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>

                <div>
                    <h1 class="text-xl font-semibold text-gray-700">What are the parking and public transport options?</h1>

                    <p class="mt-2 text-sm text-gray-500 ">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident placeat, consequatur eveniet veritatis quos dignissimos beatae dolores exercitationem laboriosam officia magnam atque blanditiis illum doloremque magni ex corrupti tempora quis.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> -->
<?php include('Footer.php'); ?>