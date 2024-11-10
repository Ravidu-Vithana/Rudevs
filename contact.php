<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rudevs - Contact</title>
    <link rel="stylesheet" href="output.css">
</head>

<body class="font-mono bg-zinc-700 text-zinc-200">
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <div>
        <!-- INCLUDNG HEADER -->
        <?php include "./views/header.php" ?>

        <div class="w-full flex flex-col items-center py-12 px-4">
            <span class="uppercase text-2xl lg:text-4xl mt-20 lg:mt-32 mb-6 text-center">We would love to hear more from you!</span>
            <div class="w-full md:w-2/3 rounded-2xl overflow-hidden flex flex-col lg:flex-row p-0">
                <div class="flex flex-col flex-1 bg-zinc-800 p-3 lg:p-10">
                    <span class="uppercase text-xl lg:text-2xl mb-4 text-center lg:text-start">Write Us</span>
                    <input type="text" placeholder="Name" id="name" class="bg-zinc-800 lg:text-lg py-2 px-2 border-b-2 border-zinc-700 placeholder-gray-400 outline-none">
                    <input type="text" placeholder="Email" id="email" class="bg-zinc-800 lg:text-lg py-2 px-2 border-b-2 border-zinc-700 placeholder-gray-400 outline-none">
                    <input type="text" placeholder="Subject" id="subject" class="bg-zinc-800 lg:text-lg py-2 px-2 border-b-2 border-zinc-700 placeholder-gray-400 outline-none">
                    <textarea id="description" rows="5" placeholder="Message (Max: 1000 Characters)" maxlength="1000" class="bg-zinc-800 lg:text-lg py-2 px-2 border-b-2 border-zinc-700 placeholder-gray-400 outline-none"></textarea>
                    <button class=" border-zinc-700 w-max border-2 py-4 px-10 lg:text-lg font-medium mt-8 rounded-full hover:scale-[1.03] transition-all duration-300 ease-out mx-auto" onclick="sendMessage();">
                        Send Message
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-col items-center flex-1 bg-zinc-900 p-4 lg:p-10">
                    <span class="uppercase text-xl lg:text-2xl mb-6 text-center">Contact Information</span>
                    <div class="sm:flex sm:gap-2 sm:items-center text-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-20 h-20 mx-auto sm:w-6 sm:h-6 block sm:mx-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                        <span class="lg:text-lg">Email: </span>
                        <span class="lg:text-lg text-gray-400">inforudevs@gmail.com</span>
                    </div>
                    <div class="sm:flex sm:gap-2 sm:items-center text-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-20 h-20 mx-auto sm:w-6 sm:h-6 block sm:mx-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                        <span class="lg:text-lg">Contact: </span>
                        <span class="lg:text-lg text-gray-400">+94763738202</span>
                    </div>
                    <div class="sm:flex sm:gap-2 sm:items-center text-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-20 h-20 mx-auto sm:w-6 sm:h-6 block sm:mx-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>
                        <span class="lg:text-lg">Location: </span>
                        <span class="lg:text-lg text-gray-400">Kurunegala, Sri Lanka</span>
                    </div>
                    <span class="uppercase text-xl lg:text-2xl my-6">Social Media</span>
                    <div class="flex items-center gap-6">
                        <a href="#"><img src="./resources/images/icon_facebook.png" alt="" class="h-8"></a>
                        <a href="#"><img src="./resources/images/icon_instagram.png" alt="" class="h-8"></a>
                        <a href="#"><img src="./resources/images/icon_linkedin.png" alt="" class="h-8"></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- INCLUDE FOOTER -->
        <?php include "./views/footer.php" ?>

    </div>

    <script src="./src/script.js"></script>
</body>

</html>