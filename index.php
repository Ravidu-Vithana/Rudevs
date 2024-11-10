<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rudevs - Home</title>
    
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
        <div class="w-full bg-[url('./resources/images/heroHome.jpg')] bg-cover bg-center flex items-center justify-center h-screen text-white relative">
            <div class="p-2 flex flex-col items-center justify-center text-center rounded-lg">
                <span class="font-medium text-5xl md:text-7xl">Welcome to</span>
                <span class="font-bold uppercase text-5xl sm:text-6xl md:text-8xl">Rudevs Cooperation</span>
                <a href="#companyBrief" class="absolute bottom-1/4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </a>
            </div>
        </div>
        <!-- HERO END -->

        <!-- COMPANY IN BRIEF START -->
        <div class="bg-[url('./resources/images/bgCompanyBrief.webp')] bg-cover bg-left-top py-28 px-8 flex items-center justify-center lg:justify-end text-white" id="companyBrief">
            <div class="flex flex-col items-center gap-2 w-full sm:w-8/12 xl:w-[51rem]">
                <div class="-skew-x-[19deg] bg-zinc-800 p-4">
                    <div class="skew-x-[19deg] text-center">
                        <span class="uppercase text-4xl lg:text-6xl">Our Company In Brief</span>
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
                <a href="./aboutUs.php" class="text-white border-white flex items-center gap-2 border-2 py-4 px-10 sm:text-xl font-medium mt-8 rounded-full hover:scale-[1.03] transition-all duration-300 ease-out">
                    View More
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5 inline-block">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                    </svg>
                </a>
            </div>
        </div>
        <!-- COMPANY IN BRIEF END -->

        <!-- BUSINESS MODEL START -->
        <div class="relative w-full text-white flex flex-col items-center px-8">
            <div class="absolute bg-[url('./resources/images/model1.jpg')] bg-cover bg-center w-full h-full blur-sm brightness-[0.3] -z-10"></div>
            <div class="flex flex-col items-center w-full sm:w-2/3 py-20">
                <div class="-skew-x-[19deg] bg-stone-800 p-4">
                    <div class="skew-x-[19deg] text-center">
                        <span class="uppercase text-4xl lg:text-6xl">Our Business Model</span>
                    </div>
                </div>
                <div class="-skew-x-[19deg] bg-stone-700 p-4 mt-8">
                    <div class="skew-x-[19deg]">
                        <span class="uppercase text-2xl lg:text-4xl">Pixel Alchemy HQ</span>
                    </div>
                </div>
                <span class="lg:text-xl">Where Imagination Takes Form</span>
                <div class="-skew-x-[19deg] bg-stone-700 p-4 mt-6">
                    <div class="skew-x-[19deg]">
                        <span class="uppercase text-2xl lg:text-4xl">Concept</span>
                    </div>
                </div>
                <span class="lg:text-xl">
                    Imagine a colossal atom, its nucleus a vibrant sphere pulsing with light, representing the heart of Rudevs Corporation. This is Pixel Alchemy HQ, a testament to the company's dedication to crafting groundbreaking experiences, one pixel at a time.
                </span>
                <div class="-skew-x-[19deg] bg-stone-700 p-4 mt-6">
                    <div class="skew-x-[19deg]">
                        <span class="uppercase text-2xl lg:text-4xl">Design</span>
                    </div>
                </div>
                <span class="lg:text-xl">
                    The building itself embodies the "one pixel at a time" philosophy. Its exterior is a mesmerizing mosaic of millions of individual tiles, each meticulously arranged to create ever-shifting patterns and animations. This facade serves as a living canvas, showcasing Rudevs' latest innovations and reflecting the company's dynamic spirit.
                </span>
                <div class="-skew-x-[19deg] bg-stone-700 p-4 mt-6">
                    <div class="skew-x-[19deg]">
                        <span class="uppercase text-2xl lg:text-4xl">Interior</span>
                    </div>
                </div>
                <span class="lg:text-xl">
                    Stepping inside is akin to entering a wonderland of cutting-edge technology and boundless creativity. Collaborative workspaces seamlessly blend with art studios and research labs, fostering a culture of open exchange and experimentation.
                </span>
                <a href="./model.php" class="text-white border-white border-2 flex items-center gap-2 py-4 px-10 sm:text-xl font-medium mt-8 rounded-full hover:scale-[1.03] transition-all duration-300 ease-out">
                    View More
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5 inline-block">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                    </svg>
                </a>
            </div>
        </div>
        <!-- BUSINESS MODEL END -->

        <!-- INCLUDE FOOTER -->
        <?php include "./views/footer.php" ?>

    </div>
    <script src="./src/script.js"></script>
</body>

</html>