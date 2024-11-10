<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rudevs - Services</title>
    <link rel="stylesheet" href="output.css">
</head>

<body class="font-mono bg-gray-950 text-white">
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <div>
        <!-- INCLUDNG HEADER -->
        <?php include "./views/header.php" ?>

        <!-- HERO START -->
        <div class="w-full bg-[url('./resources/images/heroOurServices.jpg')] bg-cover flex items-center justify-center h-screen text-white relative">
            <div class="p-2 flex flex-col items-center justify-center rounded-lg">
                <span class="font-bold uppercase text-5xl sm:text-6xl md:text-8xl">Services</span>
                <a href="#servicesInfo" class="absolute bottom-1/4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </a>
            </div>
        </div>
        <!-- HERO END -->

        <!-- OUR SERVICES START -->
        <div class="w-full flex flex-col items-center px-8" id="servicesInfo">
            <div class="-skew-x-[19deg] bg-gray-700/70 p-4 mt-12">
                <div class="skew-x-[19deg] text-center">
                    <span class="uppercase text-4xl lg:text-6xl">Our Services</span>
                </div>
            </div>
            <div class="flex justify-center flex-wrap gap-4 w-full sm:w-4/5 py-12">
                <div class="card project-card">
                    <div class="w-full flex h-48 lg:h-64 overflow-hidden mb-4 rounded-2xl">
                        <img src="./resources/images/desktopDevelopment.webp" class="object-cover w-full" alt="">
                    </div>
                    <p class="font-bold text-gray-400 text-lg">Desktop Application Development</p>
                </div>
                <div class="card project-card">
                    <div class="w-full flex h-48 lg:h-64 overflow-hidden mb-4 rounded-2xl">
                        <img src="./resources/images/webdesign.png" class="object-cover w-full" alt="">
                    </div>
                    <p class="font-bold text-gray-400 text-lg">Web Development</p>
                </div>
                <div class="card project-card">
                    <div class="w-full flex h-48 lg:h-64 overflow-hidden mb-4 rounded-2xl">
                        <img src="./resources/images/mobileDesign.jpg" class="object-cover w-full" alt="">
                    </div>
                    <p class="font-bold text-gray-400 text-lg">Mobile Development</p>
                </div>
                <div class="card project-card">
                    <div class="w-full flex h-48 lg:h-64 overflow-hidden mb-4 rounded-2xl">
                        <img src="./resources/images/gameDevelopment.webp" class="object-cover w-full" alt="">
                    </div>
                    <p class="font-bold text-gray-400 text-lg">Game Development</p>
                </div>
                <div class="card project-card">
                    <div class="w-full flex h-48 lg:h-64 overflow-hidden mb-4 rounded-2xl">
                        <img src="./resources/images/graphicsDesign.jpg" class="object-cover w-full" alt="">
                    </div>
                    <p class="font-bold text-gray-400 text-lg">Graphics Designing</p>
                </div>
                <div class="card project-card">
                    <div class="w-full flex h-48 lg:h-64 overflow-hidden mb-4 rounded-2xl">
                        <img src="./resources/images/iotDesign.jpg" class="object-cover w-full" alt="">
                    </div>
                    <p class="font-bold text-gray-400 text-lg">IoT Implementations</p>
                </div>
            </div>
            <a href="./projects.php" class="text-white border-white border-2 py-4 px-10 flex items-center gap-2 lg:text-xl font-medium mb-10 rounded-full hover:scale-[1.03] transition-all duration-300 ease-out">
                View Projects
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5 inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                </svg>
            </a>
        </div>
        <!-- OUR SERVICES END -->

        <!-- INCLUDE FOOTER -->
        <?php include "./views/footer.php" ?>

    </div>

    <script src="./src/script.js"></script>
</body>

</html>