<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rudevs - About</title>
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
        <div class="w-full bg-[url('./resources/images/heroAboutUs.webp')] bg-cover flex items-center justify-center h-screen relative">
            <div class="p-2 flex flex-col items-center justify-center rounded-lg">

                <span class="font-bold uppercase text-5xl sm:text-6xl md:text-8xl bg-gray-900/30 p-2 rounded-md">About Us</span>

                <a href="#companyInfo" class="absolute bottom-1/4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </a>
            </div>
        </div>
        <!-- HERO END -->

        <!-- COMPANY INFO START-->
        <div class="w-full bg-[url('./resources/images/heroAboutUs.png')] bg-cover flex flex-col items-center relative px-8" id="companyInfo">
            <div class="flex flex-col items-center w-full sm:w-2/3 py-12">
                <div class="-skew-x-[19deg] bg-zinc-800 p-4">
                    <div class="skew-x-[19deg] text-center">
                        <span class="uppercase text-4xl lg:text-6xl">Our Company</span>
                    </div>
                </div>
                <div class="-skew-x-[19deg] bg-zinc-700 p-4 mt-8">
                    <div class="skew-x-[19deg]">
                        <span class="uppercase text-2xl lg:text-4xl">Slogan</span>
                    </div>
                </div>
                <span class="lg:text-xl">One Pixel At A Time</span>
                <div class="-skew-x-[19deg] bg-zinc-700 p-4 mt-6">
                    <div class="skew-x-[19deg]">
                        <span class="uppercase text-2xl lg:text-4xl">Vision</span>
                    </div>
                </div>
                <span class="lg:text-xl">
                    To revolutionize the industry by creating immersive and innovative experiences that transcend boundaries, captivate imaginations, and push the limits of virtual world
                </span>
                <div class="-skew-x-[19deg] bg-zinc-700 p-4 mt-6">
                    <div class="skew-x-[19deg]">
                        <span class="uppercase text-2xl lg:text-4xl">Mission</span>
                    </div>
                </div>
                <span class="lg:text-xl">
                    Empower everyone worldwide through cutting edge technology, creative story telling and unparalleled experience, fostering a global community that celebrates the joy of technology.One pixel at a time , to redefine the possibilities of interactive entertainment and create lasting memories
                </span>
                <div class="w-full p-2 my-6 border-t-[1px] border-b-[1px] border-stone-400 flex justify-center">
                    <span class="uppercase lg:text-xl">Objectives</span>
                </div>
                <div class="-skew-x-[19deg] bg-zinc-700 p-4 mt-6">
                    <div class="skew-x-[19deg] text-center">
                        <span class="uppercase text-2xl lg:text-4xl">Innovation Leadership</span>
                    </div>
                </div>
                <span class="lg:text-xl">
                    Continuously push the boundaries of technology and creativity to deliver ground braking gaming experiences that set industry standards
                </span>
                <div class="-skew-x-[19deg] bg-zinc-700 p-4 mt-6">
                    <div class="skew-x-[19deg] text-center">
                        <span class="uppercase text-2xl lg:text-4xl">Global community building</span>
                    </div>
                </div>
                <span class="lg:text-xl">
                    Cultivate vibrant and inclusive gaming community by fostering positive interactions
                </span>
                <div class="-skew-x-[19deg] bg-zinc-700 p-4 mt-6">
                    <div class="skew-x-[19deg] text-center">
                        <span class="uppercase text-2xl lg:text-4xl">Technological excellence</span>
                    </div>
                </div>
                <span class="lg:text-xl">
                    Invest in research and development to stay at the forefront of technological advancement
                </span>
                <div class="-skew-x-[19deg] bg-zinc-700 p-4 mt-6">
                    <div class="skew-x-[19deg] text-center">
                        <span class="uppercase text-2xl lg:text-4xl">Talent development</span>
                    </div>
                </div>
                <span class="lg:text-xl">
                    Attract, nurture and retain top-tier talent to drive creativity, innovation and excellence in every aspect of game development
                </span>
            </div>
        </div>
        <!-- COMPANY INFO END-->

        <!-- DEV TEAM START -->
        <div class="w-full flex flex-col items-center relative px-8">
            <div class="absolute bg-[url('./resources/images/bgDevTeam.jpg')] bg-cover bg-center h-full w-full -z-10 blur-[2px]"></div>
            <div class="-skew-x-[19deg] bg-gray-800/70 p-4 mt-12">
                <div class="skew-x-[19deg] text-center">
                    <span class="uppercase text-4xl lg:text-6xl">Our Development Team</span>
                </div>
            </div>
            <div class="flex items-center justify-center flex-wrap gap-4 w-full sm:w-4/5 py-12">
                <div class="card team-card">
                    <div class="w-40 h-40 overflow-hidden mb-4 rounded-full">
                        <img src="./resources/photos/Varshaan.jpg" class="object-cover" alt="">
                    </div>
                    <p class="font-bold">H. Varshaan</p>
                    <p class="font-bold">(Director)</p>
                </div>
                <div class="card team-card">
                    <div class="w-40 h-40 overflow-hidden mb-4 rounded-full">
                        <img src="./resources/photos/Kaveesha.jpg" class="object-cover" alt="">
                    </div>
                    <p class="font-bold">U.G.Kaveesha Sathsara</p>
                    <p class="font-bold">(Director)</p>
                </div>
                <div class="card team-card">
                    <div class="w-40 h-40 overflow-hidden mb-4 rounded-full">
                        <img src="./resources/photos/Gihan.jpg" class="object-cover" alt="">
                    </div>
                    <p class="font-bold">Gihan Pasindu</p>
                    <p class="font-bold">(Director)</p>
                </div>
                <div class="card team-card">
                    <div class="w-40 h-40 overflow-hidden mb-4 rounded-full">
                        <img src="./resources/photos/Hasindu.jpg" class="object-cover" alt="">
                    </div>
                    <p class="font-bold">W.M.Hasindu Theekshana</p>
                    <p class="font-bold">(CEO)</p>
                </div>
                <div class="card team-card">
                    <div class="w-40 h-40 overflow-hidden mb-4 rounded-full">
                        <img src="./resources/photos/Kavishka.jpg" class="object-cover" alt="">
                    </div>
                    <p class="font-bold">K.G.Kavishka Chathumal</p>
                    <p class="font-bold">(CPO)</p>
                </div>
                <div class="card team-card">
                    <div class="w-40 h-40 overflow-hidden mb-4 rounded-full">
                        <img src="./resources/photos/Savindu.jpg" class="object-cover" alt="">
                    </div>
                    <p class="font-bold">Y.M.Savindu Umantha</p>
                    <p class="font-bold">(Creative Director)</p>
                </div>
                <div class="card team-card">
                    <div class="w-40 h-40 overflow-hidden mb-4 rounded-full">
                        <img src="./resources/photos/Ravidu.jpg" class="object-cover" alt="">
                    </div>
                    <p class="font-bold">V.P.K.D.Ravidu Vithana</p>
                    <p class="font-bold">(CEO - Game)</p>
                </div>
                <div class="card team-card">
                    <div class="w-40 h-40 overflow-hidden mb-4 rounded-full">
                        <img src="./resources/photos/Niumal.jpg" class="object-cover" alt="">
                    </div>
                    <p class="font-bold">P.Hirusha Niumal Silva</p>
                    <p class="font-bold">(COO)</p>
                </div>
                <div class="card team-card">
                    <div class="w-40 h-40 overflow-hidden mb-4 rounded-full">
                        <img src="./resources/photos/Pasindu.jpg" class="object-cover" alt="">
                    </div>
                    <p class="font-bold">B.G Pasindu Dilshan Abeyrathna</p>
                    <p class="font-bold">(CEO - AI)</p>
                </div>
                <div class="card team-card">
                    <div class="w-40 h-40 overflow-hidden mb-4 rounded-full">
                        <img src="./resources/photos/Tharusha.jpg" class="object-cover" alt="">
                    </div>
                    <p class="font-bold">E.L.D.S. Tharusha Siriwardhana</p>
                    <p class="font-bold">(CEO - IOT)</p>
                </div>
                <div class="card team-card">
                    <div class="w-40 h-40 overflow-hidden mb-4 rounded-full">
                        <img src="./resources/photos/Wathsala.jpg" class="object-cover" alt="">
                    </div>
                    <p class="font-bold">Wathsala Senarathna</p>
                    <p class="font-bold">(CFO)</p>
                </div>
                <div class="card team-card">
                    <div class="w-40 h-40 overflow-hidden mb-4 rounded-full">
                        <img src="./resources/photos/Isuru.jpg" class="object-cover" alt="">
                    </div>
                    <p class="font-bold">R.A.Isuru Ranasingha</p>
                    <p class="font-bold">(CEO - Research)</p>
                </div>
            </div>
        </div>
        <!-- DEV TEAM END -->

        <!-- INCLUDE FOOTER -->
        <?php include "./views/footer.php" ?>

    </div>

    <script src="./src/script.js"></script>
</body>

</html>