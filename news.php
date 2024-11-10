<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rudevs - News</title>
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
        <div class="w-full bg-cover flex items-center justify-center h-screen text-white relative" style="background-image: url('./resources/images/heroAboutUs.png');">
            <div class="p-2 flex flex-col items-center justify-center rounded-lg">
                <span class="font-bold uppercase text-5xl sm:text-6xl md:text-8xl">News</span>
                <a href="#newsItems" class="absolute bottom-1/4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </a>
            </div>
        </div>
        <!-- HERO END -->

        <!-- NEWS ITEMS START -->
        <div class="flex flex-col items-center gap-6 py-10" id="newsItems">
            <div class="card news-card">
                <div class="w-full flex flex-1 overflow-hidden relative">
                    <img src="./resources/images/studentManagement.png" alt="" class="object-center object-cover w-full">
                    <div class="absolute py-2 px-5 rounded-full flex flex-col bg-red-600 z-10 right-4 top-4">
                        <span class="text-xl">05</span>
                        <span class="uppercase text-lg">Mar</span>
                    </div>
                </div>
                <div class="py-6 px-2 sm:px-10">
                    <p class="font-bold">Student Management System</p>
                    <p class="font-bold text-gray-500">Made a new student management system for an online teaching platform comprising of more than 3000 students presently. It can showcase the performance of each individual or a class students while having an AI suggesting improvement areas according to test results.</p>
                </div>
            </div>
            <div class="card news-card">
                <div class="w-full flex flex-1 overflow-hidden relative">
                    <img src="./resources/images/racingFever.jpg" alt="" class="object-center object-cover w-full">
                    <div class="absolute py-2 px-5 rounded-full flex flex-col bg-red-600 z-10 right-4 top-4">
                        <span class="text-xl">02</span>
                        <span class="uppercase text-lg">Feb</span>
                    </div>
                </div>
                <div class="py-6 px-2 sm:px-10">
                    <p class="font-bold">Racing Fever Game</p>
                    <p class="font-bold text-gray-500">Are you ready to feel the racing fever? Then enter into the realm of Racing Fever where players compete hand in hand to acheive the victory. Comprise of an open world where players can roam free with other online players in search of wonderful places hidden deep within a 35000 sq.km map! Consisting of more than 60 luxury, sport and offroad vehicles ready for action. Also has a community driven customised cars for your own taste!</p>
                </div>
            </div>
        </div>
        <!-- NEWS ITEMS END -->

        <!-- INCLUDE FOOTER -->
        <?php include "./views/footer.php" ?>

    </div>

    <script src="./src/script.js"></script>
</body>

</html>