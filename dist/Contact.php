<!-- Contact -->
<section class="h-fit py-8 w-full">
    <div class="h-[20%] pb-8 w-full flex flex-col justify-center items-center">
        <h1 class="text-4xl pb-8 font-[poppins] h-full flex justify-center items-center uppercase">Contact us</h1>
        <hr class="w-[90%]">
    </div>
    <div class="px-4 h-fit text-gray-800 rounded-lg body-font relative">
        <div class="absolute inset-0 px-12">
            <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238133.18800900166!2d72.65748353239132!3d21.159120355102836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1705636788271!5m2!1sen!2sin" style="filter: contrast(1.2) opacity(70%);"></iframe>
        </div>
        <div class="container px-5 py-24 mx-auto flex">
            <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                <h2 class="text-gray-900 text-2xl mb-1 font-serif title-font">Contact Us</h2>
                <form id="contactForm" method="post" action="#">
                    <p class="leading-relaxed mb-5 text-gray-800">Got a question? we'd love to hear from you. <br> Send us a message and we'll respond as soon as possible.</p>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-800">Email</label>
                        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="leading-7 text-sm text-gray-800">Message</label>
                        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                    </div>
                    <button class="text-white bg-green-600 hover:bg-green-700 border-0 py-2 px-6 w-full focus:outline-none rounded text-lg" onclick="return validateContactForm()">Submit</button>
                    <p class="text-sm mt-3">If you don't have an account ? <a href="Register.php" class="text-blue-800 underline italic">Register</a></p>
                </form>
            </div>
            <input type="hidden" id="status" class="">
        </div>
    </div>
</section>
