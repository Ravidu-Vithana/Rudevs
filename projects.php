<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rudevs - Projects</title>
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
        <div class="w-full bg-[url('./resources/images/heroProjects.jpg')] bg-cover bg-right-bottom flex items-center justify-center h-screen text-white relative">
            <div class="p-2 flex flex-col items-center justify-center rounded-lg">
                <span class="font-bold uppercase text-5xl sm:text-6xl md:text-8xl bg-gray-900/30 p-2 rounded-md">Projects</span>
                <a href="#projectInfo" class="absolute bottom-1/4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </a>
            </div>
        </div>
        <!-- HERO END -->

        <!-- PROJECT LIST START -->
        <div class="w-full flex flex-col items-center px-8" id="projectInfo">
            <div class="-skew-x-[19deg] bg-gray-700/70 p-4 mt-12">
                <div class="skew-x-[19deg] text-center">
                    <span class="uppercase text-4xl lg:text-6xl">Our Projects</span>
                </div>
            </div>
            <div class="flex justify-center flex-wrap gap-4 w-full sm:w-4/5 py-10">
                <div class="card project-card">
                    <div class="w-full h-3/4 overflow-hidden mb-4 rounded-2xl">
                        <img src="./resources/images/studentManagement.png" alt="">
                    </div>
                    <p class="font-bold text-gray-500">Desktop Application Development</p>
                    <p class="font-bold">Student Management System</p>
                </div>
                <div class="card project-card">
                    <div class="w-full h-3/4 overflow-hidden mb-4 rounded-2xl">
                        <img src="./resources/images/mobileApp.jpg" alt="">
                    </div>
                    <p class="font-bold text-gray-500">Mobile Development</p>
                    <p class="font-bold">Chat Application</p>
                </div>
                <div class="card project-card">
                    <div class="w-full h-3/4 overflow-hidden mb-4 rounded-2xl">
                        <img src="./resources/images/graphicsDesign.png" alt="">
                    </div>
                    <p class="font-bold text-gray-500">Graphics Designing</p>
                    <p class="font-bold">Brochure containing all company information</p>
                </div>
                <div class="card project-card">
                    <div class="w-full h-3/4 overflow-hidden mb-4 rounded-2xl">
                        <img src="./resources/images/pos.jpg" alt="">
                    </div>
                    <p class="font-bold text-gray-500">Desktop Application Development</p>
                    <p class="font-bold">Fully Functional POS System</p>
                </div>
                <div class="card project-card">
                    <div class="w-full h-3/4 overflow-hidden mb-4 rounded-2xl">
                        <img src="./resources/images/iot.jpg" alt="">
                    </div>
                    <p class="font-bold text-gray-500">IoT Implementations</p>
                    <p class="font-bold">Realtime Patient Health Monitoring System</p>
                </div>
                <div class="card project-card">
                    <div class="w-full h-3/4 overflow-hidden mb-4 rounded-2xl">
                        <img src="./resources/images/businessWeb.png" alt="">
                    </div>
                    <p class="font-bold text-gray-500">Web Development</p>
                    <p class="font-bold">Business Portfolio</p>
                </div>
                <div class="card project-card">
                    <div class="w-full h-3/4 overflow-hidden mb-4 rounded-2xl">
                        <img src="./resources/images/racingFever.jpg" alt="">
                    </div>
                    <p class="font-bold text-gray-500">Game Development</p>
                    <p class="font-bold">Racing Fever Game</p>
                </div>
            </div>
        </div>
        <!-- PROJECT LIST END -->

        <!-- INCLUDE FOOTER -->
        <?php include "./views/footer.php" ?>

    </div>


    <script src="./src/script.js"></script>
</body>

</html>