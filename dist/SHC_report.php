<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../tailwind.css"> -->
    <script src="../tailwind.js"></script>

    <script src="../flowbite.js"></script>
</head>

<body>

    <section class="max-w-4xl p-8 mx-auto rounded-md shadow-xl mt-10">
        <h1 class="text-xl font-bold capitalize text-center">SOIL HEALTH CARD REPORT</h1>
        <form>
            <div class="grid gap-6 mt-4 grid-cols-1">
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="text-lg" for="username">Farmer Name</label>
                        <input id="username" type="name" class="block w-full px-4 py-2 mt-2  bg-white border border-gray-300 rounded-md  " autocomplete="off">
                    </div>
                    <div>
                        <label class="text-lg" for="emailAddress">Email Address</label>
                        <input id="emailAddress" type="emailid" class="block w-full px-4 py-2 mt-2  bg-white border border-gray-300 rounded-md  " autocomplete="off">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="text-lg" for="passwordConfirmation">Mobile Number</label>
                        <input id="contact" type="contact" class="block w-full px-4 py-2 mt-2  bg-white border border-gray-300 rounded-md  " autocomplete="off">
                    </div>
                    <div>
                        <label class="text-lg" for="passwordConfirmation">Date</label>
                        <input id="date" type="testdate" class="block w-full px-4 py-2 mt-2  bg-white border border-gray-300 rounded-md  " autocomplete="off">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="text-lg" for="passwordConfirmation">Type Of Soil</label>
                        <input id="contact" type="contact" class="block w-full px-4 py-2 mt-2  bg-white border border-gray-300 rounded-md  " autocomplete="off">
                    </div>
                    <div>
                        <label class="text-lg" for="passwordConfirmation">Individual Soil Analaysis</label>
                        <input id="date" type="testdate" class="block w-full px-4 py-2 mt-2  bg-white border border-gray-300 rounded-md  " autocomplete="off">
                    </div>
                </div>
                <div>
                    <div>
                        <label class="text-lg" for="passwordConfirmation">Address</label>
                        <textarea id="date" type="textarea" class="block w-full px-4 py-2 mt-2  bg-white border border-gray-300 rounded-md  " autocomplete="off"></textarea>
                    </div>
                </div>
                <div>
                    <label class="block text-lg font-medium border-2 p-4">
                        <p class="font-mono">Soil Testing Report Image</p>
                        <div class="flex w-full items-center justify-center bg-grey-lighter">
                            <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-green-700 hover:text-white">
                                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                </svg>
                                <span class="mt-2 text-center leading-normal">Select The Image of Soil <br> Health Card Report</span>
                                <input type='file' class="hidden" />
                            </label>
                        </div>
                    </label>
                </div>
            </div>
            <div class="flex justify-end mt-6">
                <button class="bg-green-600 px-4 py-1 text-xl rounded-md text-white">Save</button>
            </div>
        </form>
    </section>

</body>

</html>