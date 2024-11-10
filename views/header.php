<!-- LARGE HEADER START -->
<nav class="hidden lg:flex justify-center h-32 fixed p-0 text-white font-mono bg-zinc-900 w-full z-50">
    <div class="flex flex-1 h-full"></div>
    <div class="flex flex-col w-[22rem] xl:w-[28rem] border-s-[1px] border-white/20 h-full skew-x-[19deg]">
        <div class="border-b-[1px] border-white/20 flex-1">
            <div class="-skew-x-[19deg] flex justify-end items-center flex-1 h-full ">
                <span class="uppercase text-2xl">One Pixel..</span>
            </div>
        </div>
        <div class="flex-1">
            <div class="-skew-x-[19deg] flex justify-evenly h-full w-full font-bold">
                <a href="./index.php" class="header-link" data-target="index.php" id="homeTag">Home</a>
                <a href="./aboutUs.php" class="header-link" data-target="aboutUs.php">About Us</a>
                <a href="./projects.php" class="header-link" data-target="projects.php">Projects</a>
            </div>
        </div>
    </div>
    <div class="flex w-52 h-full"></div>
    <div class="flex flex-col w-[22rem] xl:w-[28rem] border-e-[1px] border-white/20 h-full -skew-x-[19deg]">
        <div class="border-b-[1px] border-white/20 flex-1">
            <div class="skew-x-[19deg] flex justify-start items-center flex-1 h-full">
                <span class="uppercase text-2xl">..At A Time</span>
            </div>
        </div>
        <div class="flex-1">
            <div class="skew-x-[19deg] flex items-center justify-evenly h-full w-full font-bold">
                <a href="./services.php" class="header-link" data-target="services.php">Services</a>
                <a href="./news.php" class="header-link" data-target="news.php">News</a>
                <a href="./contact.php" class="header-link" data-target="contact.php">Contact</a>
            </div>
        </div>
    </div>
    <div class="flex flex-1 h-full"></div>
    <div class="absolute self-center flex items-center top-0 h-36 w-60 px-16 py-4 bg-[url('./resources/images/bgHeader.jpg')] bg-cover bg-center" style="clip-path: polygon(0 0,100% 0,81% 100%,19% 100%);">
        <img src="./resources/images/logo.png" class="object-contain" alt="">
    </div>
</nav>
<!-- LARGE HEADER END -->

<!-- SMALL HEADER START -->
<nav class="flex lg:hidden justify-center h-16 fixed p-0 text-white font-mono bg-zinc-900 w-full z-50">
    <div class="flex flex-1 h-full"></div>
    <div class="flex flex-col w-[22rem] xl:w-[28rem] border-s-[1px] border-white/20 h-full skew-x-[19deg]">
        <div class="border-b-[1px] border-white/20 flex-1">
            <div class="-skew-x-[19deg] flex justify-end items-center flex-1 h-full pr-1">
                <span class="uppercase text-base sm:text-xl">One Pixel</span>
            </div>
        </div>
    </div>
    <div class="flex flex-col w-[22rem] xl:w-[28rem] border-e-[1px] border-white/20 h-full -skew-x-[19deg]">
        <div class="border-b-[1px] border-white/20 flex-1">
            <div class="skew-x-[19deg] flex justify-start items-center flex-1 h-full pl-1 relative">
                <span class="uppercase text-base sm:text-xl">At A Time</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 absolute right-4 cursor-pointer transition-all duration-300 ease-out" onclick="revealMenu();">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </div>
        </div>
    </div>
    <div class="flex flex-1 h-full"></div>
    <div class="absolute self-center flex items-center justify-center top-12 h-16 w-60 px-4 py-2 bg-[url('./resources/images/bgHeader.jpg')] bg-cover bg-center" style="clip-path: polygon(0 0,100% 0,81% 100%,19% 100%);">
        <img src="./resources/images/logo.png" class="h-14" alt="">
    </div>
    <div class="absolute self-center flex flex-col items-center top-32 w-60 p-4 gap-4 rounded-2xl bg-zinc-900/95 origin-top duration-500 scale-y-0 opacity-0" id="menu">
        <a href="./index.php" class="header-link" data-target="index.php" id="homeTagSmall">Home</a>
        <a href="./aboutUs.php" class="header-link" data-target="aboutUs.php">About Us</a>
        <a href="./projects.php" class="header-link" data-target="projects.php">Projects</a>
        <a href="./services.php" class="header-link" data-target="services.php">Services</a>
        <a href="./news.php" class="header-link" data-target="news.php">News</a>
        <a href="./contact.php" class="header-link" data-target="contact.php">Contact</a>
    </div>

</nav>
<!-- SMALL HEADER END -->