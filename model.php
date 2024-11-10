<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rudevs - Model</title>
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
        <div class="flex flex-col items-center justify-center text-center h-screen p-2">
            <div class="absolute bg-[url('./resources/images/model1.jpg')] bg-cover bg-center w-full h-full blur-sm brightness-[0.3] -z-10"></div>
            <span class="font-bold uppercase text-5xl sm:text-6xl md:text-8xl">Our Business Model</span>
            <a href="#gallery" class="absolute bottom-1/4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </a>
        </div>
        <!-- HERO END -->

        <!-- GALLERY CAROUSEL START -->
        <div class="flex flex-col items-center w-full py-12" id="gallery">
            <div class="-skew-x-[19deg] bg-gray-600 p-4 mb-8">
                <div class="skew-x-[19deg]">
                    <span class="uppercase text-6xl mb-8">Gallery</span>
                </div>
            </div>
            <div class="carousel">
                <div class="carousel-item">
                    <img src="./resources/images/model1.jpg" class="object-cover" alt="" />
                </div>
                <div class="carousel-item">
                    <img src="./resources/images/model2.jpg" class="object-cover" alt="" />
                </div>
                <div class="carousel-item">
                    <img src="./resources/images/model3.jpg" class="object-cover" alt="" />
                </div>
                <div class="carousel-item">
                    <img src="./resources/images/model4.jpg" class="object-cover" alt="" />
                </div>
                <div class="carousel-item">
                    <img src="./resources/images/model5.jpg" class="object-cover" alt="" />
                </div>
                <div class="carousel-item">
                    <img src="./resources/images/model6.jpg" class="object-cover" alt="" />
                </div>
                <div class="carousel-item">
                    <img src="./resources/images/model7.jpg" class="object-cover" alt="" />
                </div>
                <button class="btn btn-next">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
                <button class="btn btn-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- GALLERY CAROUSEL END -->

        <!-- MODEL DESCRIPTION START -->
        <div class="w-full flex flex-col items-center border-t-2 border-stone-800 px-8">
            <div class="flex flex-col items-center w-full sm:w-2/3 py-12">
                <div class="-skew-x-[19deg] bg-stone-800 p-4">
                    <div class="skew-x-[19deg] text-center">
                        <span class="uppercase text-4xl lg:text-6xl">Our Business Model</span>
                    </div>
                </div>
                <div class="-skew-x-[19deg] bg-stone-700 p-4 mt-8">
                    <div class="skew-x-[19deg] text-center">
                        <span class="uppercase text-2xl lg:text-4xl">Pixel Alchemy HQ</span>
                    </div>
                </div>
                <span class="lg:text-xl">Where Imagination Takes Form</span>
                <div class="-skew-x-[19deg] bg-stone-700 p-4 mt-6">
                    <div class="skew-x-[19deg] text-center">
                        <span class="uppercase text-2xl lg:text-4xl">Concept</span>
                    </div>
                </div>
                <span class="lg:text-xl">
                    Imagine a colossal atom, its nucleus a vibrant sphere pulsing with light, representing the heart of Rudevs Corporation. This is Pixel Alchemy HQ, a testament to the company's dedication to crafting groundbreaking experiences, one pixel at a time.
                </span>
                <div class="-skew-x-[19deg] bg-stone-700 p-4 mt-6">
                    <div class="skew-x-[19deg] text-center">
                        <span class="uppercase text-2xl lg:text-4xl">Design</span>
                    </div>
                </div>
                <span class="lg:text-xl">
                    The building itself embodies the "one pixel at a time" philosophy. Its exterior is a mesmerizing mosaic of millions of individual tiles, each meticulously arranged to create ever-shifting patterns and animations. This facade serves as a living canvas, showcasing Rudevs' latest innovations and reflecting the company's dynamic spirit.
                </span>
                <div class="-skew-x-[19deg] bg-stone-700 p-4 mt-6">
                    <div class="skew-x-[19deg] text-center">
                        <span class="uppercase text-2xl lg:text-4xl">Interior</span>
                    </div>
                </div>
                <span class="lg:text-xl">
                    Stepping inside is akin to entering a wonderland of cutting-edge technology and boundless creativity. Collaborative workspaces seamlessly blend with art studios and research labs, fostering a culture of open exchange and experimentation.
                </span>
                <div class="w-full p-2 my-6 border-y-[1px] border-stone-400 flex justify-center">
                    <span class="uppercase lg:text-xl">Key Features</span>
                </div>
                <div class="-skew-x-[19deg] bg-stone-700 p-4">
                    <div class="skew-x-[19deg] text-center">
                        <span class="uppercase text-2xl lg:text-4xl">Atomic Core</span>
                    </div>
                </div>
                <span class="lg:text-xl">
                    The central atrium, shaped like the nucleus of an atom, houses a grand auditorium with breathtaking digital installation . This ever-evolving display visualizes Rudevs' ongoing projects, pulsating with the energy of their collective vision.
                </span>
                <div class="-skew-x-[19deg] bg-stone-700 p-4 mt-6">
                    <div class="skew-x-[19deg] text-center">
                        <span class="uppercase text-2xl lg:text-4xl">Pixel Labs</span>
                    </div>
                </div>
                <span class="lg:text-xl">
                    State-of-the-art research and development labs equipped with the latest AI, IoT, and gaming technologies empower Rudevs' team to push the boundaries of the possible.
                </span>
                <div class="-skew-x-[19deg] bg-stone-700 p-4 mt-6">
                    <div class="skew-x-[19deg] text-center">
                        <span class="uppercase text-2xl lg:text-4xl">Pixel Studios</span>
                    </div>
                </div>
                <span class="lg:text-xl">
                    Immersive art studios, bathed in soft, natural light, provide the perfect environment for designers and artists to bring their imaginative visions to life.
                </span>
                <div class="-skew-x-[19deg] bg-stone-700 p-4 mt-6">
                    <div class="skew-x-[19deg] text-center">
                        <span class="uppercase text-2xl lg:text-4xl">Collaboration Hubs</span>
                    </div>
                </div>
                <span class="lg:text-xl">
                    Open, dynamic spaces designed to foster teamwork and brainstorming, featuring interactive walls, holographic displays, and comfortable seating areas.
                </span>
                <div class="-skew-x-[19deg] bg-stone-700 p-4 mt-6">
                    <div class="skew-x-[19deg] text-center">
                        <span class="uppercase text-2xl lg:text-4xl">Metaverse Gateway</span>
                    </div>
                </div>
                <span class="lg:text-xl">
                    A dedicated portal to the metaverse, allowing employees and partners to explore virtual worlds, collaborate on projects, and host events in groundbreaking new ways.
                </span>
                <div class="w-full p-2 my-6 border-y-[1px] border-stone-400 flex justify-center">
                    <span class="uppercase lg:text-xl">Symbolism</span>
                </div>
                <div class="-skew-x-[19deg] bg-stone-700 p-4">
                    <div class="skew-x-[19deg] text-center">
                        <span class="uppercase text-2xl lg:text-4xl">The Atom</span>
                    </div>
                </div>
                <span class="lg:text-xl">
                    Represents the fundamental building blocks of creation, reflecting Rudevs' focus on crafting experiences from the ground up.
                </span>
                <div class="-skew-x-[19deg] bg-stone-700 p-4 mt-6">
                    <div class="skew-x-[19deg] text-center">
                        <span class="uppercase text-2xl lg:text-4xl">The Pixel</span>
                    </div>
                </div>
                <span class="lg:text-xl">
                    Embodies the company's meticulous attention to detail and its commitment to excellence in every aspect.
                </span>
                <div class="-skew-x-[19deg] bg-stone-700 p-4 mt-6">
                    <div class="skew-x-[19deg] text-center">
                        <span class="uppercase text-2xl lg:text-4xl">The Pulsating Light</span>
                    </div>
                </div>
                <span class="lg:text-xl">
                    Symbolizes the constant innovation and dynamic nature of Rudevs' work.
                </span>
                <span class="text-lg my-6 py-4 border-y-[1px] border-stone-400">
                    Pixel Alchemy HQ is more than just a building; it's a tangible expression of Rudevs' values and ambitions. It serves as a beacon of inspiration for employees, partners, and the wider tech community, showcasing the transformative power of "one pixel at a time" thinking.
                </span>
            </div>
        </div>
        <!-- MODEL DESCRIPTION END -->

        <!-- ROADMAP START -->
        <div class="w-full flex flex-col items-center px-8 relative">
            <div class="absolute bg-[url('./resources/images/bgRoadMap.jpeg')] bg-cover bg-center h-full w-full -z-10 blur-sm brightness-[0.2]"></div>
            <div class="-skew-x-[19deg] bg-amber-800/20 p-4 mt-12">
                <div class="skew-x-[19deg]">
                    <span class="uppercase text-4xl lg:text-6xl">Road Map</span>
                </div>
            </div>
            <div class="py-8 mb-2 flex flex-col text-center gap-8 w-full sm:w-11/12">
                <span class="lg:text-xl">Rudevs Corporation: One Pixel at a Time - A Roadmap to the Future</span>
                <span class="lg:text-xl">To evolve from pixel-perfect gaming experiences to a pioneer at the intersection of gaming, AI, IoT, and cutting-edge research, crafting intelligent, immersive, and impactful realities.</span>
                <span class="lg:text-xl">Innovation, Excellence, Collaboration, Continuous Learning</span>
            </div>
            <div class="flex flex-col text-center w-full sm:w-2/3">
                <div class="-skew-x-[19deg] bg-amber-600/30 p-4">
                    <div class="skew-x-[19deg]">
                        <span class="uppercase text-2xl lg:text-4xl text-center">Phase 1: Pixel Perfection (Years 1-3)</span>
                    </div>
                </div>
                <span class="lg:text-xl mt-8">Focus: Solidify foundation in gaming, build community, initiate AI research.</span>
                <div class="w-full p-2 my-6 border-y-[1px] border-amber-800/60 flex justify-center">
                    <span class="uppercase text-xl">Key Objectives</span>
                </div>
                <span class="lg:text-xl mt-8">Focus: Solidify foundation in gaming, build community, initiate AI research.</span>
                <span class="lg:text-xl mt-4 underline">Gaming</span>
                <span class="lg:text-xl mt-2">Release 2-3 high-quality pixel art games across multiple platforms.</span>
                <span class="lg:text-xl">Establish a loyal gaming community through active engagement and feedback incorporation.</span>
                <span class="lg:text-xl">Refine development process with data-driven insights.</span>

                <span class="lg:text-xl mt-4 underline">AI</span>
                <span class="lg:text-xl mt-2">Build a dedicated AI research team with top talent</span>
                <span class="lg:text-xl">Initiate research on AI integration in games (NPCs, content generation, personalization).</span>
                <span class="lg:text-xl">Partner with academic institutions and industry leaders for knowledge sharing.</span>

                <div class="-skew-x-[19deg] bg-amber-600/30 p-4 mt-10">
                    <div class="skew-x-[19deg]">
                        <span class="uppercase text-2xl lg:text-4xl text-center">Phase 2: Expanding Horizons (Years 4-6)</span>
                    </div>
                </div>
                <span class="lg:text-xl mt-8">Focus: Infuse AI into games, explore IoT integration, showcase expertise.</span>
                <div class="w-full p-2 my-6 border-y-[1px] border-amber-800/60 flex justify-center">
                    <span class="uppercase text-xl">Key Objectives</span>
                </div>
                <span class="lg:text-xl mt-4 underline">AI in Gaming</span>
                <span class="lg:text-xl mt-2">Seamlessly integrate AI advancements into new and existing games.</span>
                <span class="lg:text-xl">Develop AI-powered tools for game developers.</span>
                <span class="lg:text-xl">Showcase expertise at industry events and conferences.</span>

                <span class="lg:text-xl mt-4 underline">IoT Integration</span>
                <span class="lg:text-xl mt-2">Experiment with incorporating IoT devices into gameplay for unique interactions.</span>
                <span class="lg:text-xl">Research potential of IoT for data collection and game design refinement.</span>
                <span class="lg:text-xl">Partner with IoT hardware manufacturers for co-creation opportunities.</span>

                <div class="-skew-x-[19deg] bg-amber-600/30 p-4 mt-10">
                    <div class="skew-x-[19deg]">
                        <span class="uppercase text-2xl lg:text-4xl text-center">Phase 3: The Future Pixelated (Years 7 and Beyond)</span>
                    </div>
                </div>
                <span class="lg:text-xl mt-8">Focus: Research emerging technologies, diversify into new industries, maintain leadership position</span>
                <div class="w-full p-2 my-6 border-y-[1px] border-amber-800/60 flex justify-center">
                    <span class="uppercase text-xl">Key Objectives</span>
                </div>
                <span class="lg:text-xl mt-4 underline">Cutting-Edge Research</span>
                <span class="lg:text-xl mt-2">Conduct research in brain-computer interfaces, augmented reality, and the metaverse.</span>
                <span class="lg:text-xl">Explore potential for future gaming experiences.</span>

                <span class="lg:text-xl mt-4 underline">Industry Diversification</span>
                <span class="lg:text-xl mt-2">Apply AI and IoT expertise to develop innovative solutions in healthcare, education, and other sectors.</span>
                <span class="lg:text-xl">Foster a culture of continuous learning and adaptation.</span>

                <span class="lg:text-xl mt-4 underline">Leadership and Collaboration</span>
                <span class="lg:text-xl mt-2">Collaborate with external partners to stay at the forefront of emerging technologies.</span>
                <span class="lg:text-xl">Maintain a strong reputation for innovation and excellence.</span>

                <span class="lg:text-xl my-6 py-4 border-y-[1px] border-amber-800/60">
                    By consistently innovating, fostering collaboration, and embracing new challenges, Rudevs Corporation can solidify its position as a leader shaping the future of interactive experiences.
                </span>
            </div>
        </div>
        <!-- ROADMAP END -->

        <!-- INCLUDE FOOTER -->
        <?php include "./views/footer.php" ?>

    </div>

    <script src="./src/script.js"></script>
</body>

</html>