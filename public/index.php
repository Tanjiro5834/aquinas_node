<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thomas Aquinas Institute of Learning | Imus, Cavite</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap');
        
        :root {
            --navy: #0a1d37;
            --gold: #ffcc00;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: #1a1a1a;
            line-height: 1.6;
        }

        .serif-font {
            font-family: 'Playfair Display', serif;
        }

        .bg-navy { background-color: var(--navy); }
        .text-navy { color: var(--navy); }
        .bg-gold { background-color: var(--gold); }
        .text-gold { color: var(--gold); }
        .border-navy { border-color: var(--navy); }

        .btn-institutional {
            display: inline-block;
            padding: 1rem 2.5rem;
            background-color: var(--navy);
            color: white;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            border: 1px solid var(--navy);
            transition: all 0.3s ease;
            cursor: pointer;
            border-radius: 0;
        }

        .btn-institutional:hover {
            background-color: var(--gold);
            color: var(--navy);
            border-color: var(--gold);
        }

        .nav-link {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 0.15em;
            font-weight: 700;
            transition: color 0.2s;
        }

        .section-divider {
            width: 60px;
            height: 2px;
            background-color: var(--gold);
            margin: 1.5rem 0;
        }
    </style>
</head>
<body class="bg-white">

    <!-- Navigation -->
    <nav class="bg-white sticky top-0 z-50 border-b border-gray-200">
        <div class="container mx-auto px-6 flex justify-between items-center h-24">
            <a href="index.php" class="flex items-center space-x-4">
                <div class="w-14 h-14 flex items-center justify-center overflow-hidden">
                    <img src="images/thomas_aquinas_logo.jpg" 
                        alt="Thomas Aquinas Institute Logo"
                        class="h-full w-auto object-contain">
                </div>
                <div>
                    <h1 class="text-navy font-bold leading-none tracking-tighter text-lg uppercase">The Thomas Aquinas</h1>
                    <p class="text-[9px] uppercase tracking-[0.3em] text-gray-400 font-bold">Institute of Learning, Inc.</p>
                </div>
            </a>
            <div class="hidden lg:flex space-x-12">
                <a href="index.php" class="nav-link text-navy border-b-2 border-gold pb-1">The Institute</a>
                <a href="faculty.html" class="nav-link text-gray-400 hover:text-navy">Administrators and Faculty</a>
                <a href="tuition.html" class="nav-link text-gray-400 hover:text-navy">Admissions</a>
                <a href="#" class="nav-link text-gray-400 hover:text-navy">Curriculum</a>
            </div>
            <a href="enrollment_page.html" class="btn-institutional !py-3 !px-8 text-[10px]">Apply Now</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative h-[80vh] flex items-center overflow-hidden bg-navy">
        <div class="absolute inset-0 z-0 grayscale opacity-40">
            <img src="./images/bg1.jpg" alt="Campus" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-6 relative z-10 text-white">
            <div class="max-w-3xl">
                <span class="text-gold text-xs font-bold uppercase tracking-[0.4em] block mb-6">Established 1998 • Imus, Cavite</span>
                <h2 class="serif-font text-6xl md:text-8xl leading-tight mb-8">Nurturing Truth, Excellence & Faith</h2>
                <p class="text-lg text-gray-300 mb-10 max-w-xl font-light leading-relaxed">
                    Providing a distinguished Catholic education focused on academic rigor and the formation of character.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="enrollment_page.html" class="btn-institutional">Start Application</a>
                    <a href="#" class="px-10 py-4 border border-white/30 text-xs uppercase tracking-widest font-bold hover:bg-white hover:text-navy transition">View Curriculum</a>
                </div>
            </div>
        </div>
    </header>

    <!-- MISSION & VISION SECTION -->
    <section class="py-24 border-t border-gray-200 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16">
                <!-- Mission Box -->
                <div class="bg-white border border-gray-200 shadow-sm p-12">
                    <span class="text-[10px] uppercase tracking-[0.3em] font-bold text-gold block mb-4">Our Commitment</span>
                    <h3 class="serif-font text-4xl text-navy mb-4">The Mission</h3>
                    <div class="section-divider"></div>
                    <p class="text-gray-600 text-lg leading-relaxed italic">
                        The Thomas Aquinas Institute of Learning aims to be a premium learning institution which builds a culture of excellence and dynamism today and learners of tomorrow.
                    </p>
                </div>

                <!-- Vision Box -->
                <div class="bg-white border border-gray-200 shadow-sm p-12">
                    <span class="text-[10px] uppercase tracking-[0.3em] font-bold text-gold block mb-4">Our Future</span>
                    <h3 class="serif-font text-4xl text-navy mb-4">The Vision</h3>
                    <div class="section-divider"></div>
                    <p class="text-gray-600 text-lg leading-relaxed italic">
                        Strength and confidence through truthfulness and excellence in education.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- NEWS & EVENTS SECTION (Admin Managed Placeholder) -->
    <section class="py-24 border-t border-gray-200 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-[10px] uppercase tracking-[0.4em] font-bold text-gold block mb-4">Updates & Highlights</span>
                <h2 class="serif-font text-5xl text-navy mb-4">News & Events</h2>
                <p class="text-gray-500 text-sm tracking-wide">Stay informed with the latest happenings within our academic community.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <!-- News Card 1 -->
                <div class="bg-white border border-gray-200 shadow-sm p-8 group">
                    <div class="mb-6 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?auto=format&fit=crop&w=800&q=80" alt="News" class="w-full h-48 object-cover grayscale group-hover:grayscale-0 transition duration-500">
                    </div>
                    <span class="text-[10px] uppercase tracking-widest font-bold text-gold block mb-3">August 15, 2025</span>
                    <h4 class="font-bold text-navy text-lg mb-3 uppercase tracking-tighter">AY 2025-2026 General Convocation</h4>
                    <p class="text-gray-500 text-sm mb-6 line-clamp-3">Welcoming our students back to campus for another year of academic excellence and spiritual growth.</p>
                    <a href="#" class="text-[10px] uppercase tracking-widest font-bold text-navy border-b border-navy pb-1 hover:text-gold hover:border-gold transition">Read More</a>
                </div>

                <!-- News Card 2 -->
                <div class="bg-white border border-gray-200 shadow-sm p-8 group">
                    <div class="mb-6 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=80" alt="News" class="w-full h-48 object-cover grayscale group-hover:grayscale-0 transition duration-500">
                    </div>
                    <span class="text-[10px] uppercase tracking-widest font-bold text-gold block mb-3">September 05, 2025</span>
                    <h4 class="font-bold text-navy text-lg mb-3 uppercase tracking-tighter">New Science Laboratory Wing Inauguration</h4>
                    <p class="text-gray-500 text-sm mb-6 line-clamp-3">Advancing our curriculum with state-of-the-art facilities dedicated to innovation and discovery.</p>
                    <a href="#" class="text-[10px] uppercase tracking-widest font-bold text-navy border-b border-navy pb-1 hover:text-gold hover:border-gold transition">Read More</a>
                </div>

                <!-- News Card 3 -->
                <div class="bg-white border border-gray-200 shadow-sm p-8 group">
                    <div class="mb-6 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1577891748550-699763a921b7?auto=format&fit=crop&w=800&q=80" alt="News" class="w-full h-48 object-cover grayscale group-hover:grayscale-0 transition duration-500">
                    </div>
                    <span class="text-[10px] uppercase tracking-widest font-bold text-gold block mb-3">October 12, 2025</span>
                    <h4 class="font-bold text-navy text-lg mb-3 uppercase tracking-tighter">Annual Intramural Sports Festival</h4>
                    <p class="text-gray-500 text-sm mb-6 line-clamp-3">Celebrating sportsmanship, teamwork, and physical excellence across all grade levels.</p>
                    <a href="#" class="text-[10px] uppercase tracking-widest font-bold text-navy border-b border-navy pb-1 hover:text-gold hover:border-gold transition">Read More</a>
                </div>
            </div>

            <div class="text-center">
                <p class="text-[10px] text-gray-400 uppercase tracking-[0.2em] font-bold">
                    This section is dynamically managed by the School Administration through the Admin Portal.
                </p>
            </div>
        </div>
    </section>

    <!-- Legacy Information (Existing section maintained) -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <div class="relative">
                    <div class="aspect-square bg-gray-100 border border-gray-200">
                         <img src="https://images.unsplash.com/photo-1541339907198-e08756ebafe3?auto=format&fit=crop&w=800" alt="Tradition" class="w-full h-full object-cover grayscale p-4">
                    </div>
                    <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-navy p-10 hidden md:block border-8 border-white">
                        <h4 class="text-gold serif-font text-3xl mb-4 italic">Founded in Truth</h4>
                        <p class="text-white/70 text-xs leading-relaxed uppercase tracking-widest">A tradition of academic integrity in the heart of Cavite.</p>
                    </div>
                </div>
                <div>
                    <span class="text-gold text-xs font-bold uppercase tracking-[0.3em] block mb-4">Our Identity</span>
                    <h3 class="serif-font text-5xl text-navy mb-8 leading-tight">A Symbol of Stability and Excellence</h3>
                    <div class="space-y-8">
                        <div class="flex gap-6 pb-6 border-b border-gray-100">
                            <span class="font-bold text-navy text-xs tracking-widest">SHIELD:</span>
                            <p class="text-gray-500 text-sm italic">Symbolizes the protection of values and the strength of character against modern challenges.</p>
                        </div>
                        <div class="flex gap-6 pb-6 border-b border-gray-100">
                            <span class="font-bold text-navy text-xs tracking-widest">COLORS:</span>
                            <p class="text-gray-500 text-sm italic">Navy signifies stability and depth of knowledge, while Gold represents the preciousness of a refined mind.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-navy text-white pt-24 pb-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-12 mb-20">
                <div class="col-span-2">
                    <div class="flex items-center space-x-4 mb-8">
                        <div class="w-10 h-10 flex items-center justify-center overflow-hidden">
                            <img src="images/thomas_aquinas_logo.jpg"
                                alt="Thomas Aquinas Institute Logo"
                                class="h-full w-auto object-contain">
                        </div>
                        <h4 class="serif-font text-2xl">The Thomas Aquinas Institute of Learning, Inc.</h4>
                    </div>
                    <p class="text-gray-400 text-sm max-w-sm leading-relaxed mb-8">
                        A private academic institution dedicated to the holistic development of students through the lens of Catholic values and intellectual rigor.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-8 h-8 border border-white/20 flex items-center justify-center hover:bg-gold hover:text-navy transition"><i class="fa-brands fa-facebook-f text-xs"></i></a>
                        <a href="#" class="w-8 h-8 border border-white/20 flex items-center justify-center hover:bg-gold hover:text-navy transition"><i class="fa-brands fa-instagram text-xs"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="font-bold uppercase tracking-widest text-[10px] mb-8 text-gold">Academic Portal</h4>
                    <ul class="space-y-4 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Admission Policy</a></li>
                        <li><a href="tuition.html" class="hover:text-white transition">Tuition & Fees</a></li>
                        <li><a href="faculty.html" class="hover:text-white transition">Faculty Directory</a></li>
                        <li><a href="enrollment_page.html" class="hover:text-white transition">Online Application</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold uppercase tracking-widest text-[10px] mb-8 text-gold">Inquiries</h4>
                    <address class="not-italic text-sm text-gray-400 space-y-4">
                        <p>Brgy. Buhay na Tubig<br>Imus City, Cavite 4103</p>
                        <p>(046) 123-4567</p>
                        <p>admissions@aquinas-imus.edu.ph</p>
                    </address>
                </div>
            </div>
            <div class="pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-4 text-[9px] uppercase tracking-[0.3em] text-gray-500 font-bold">
                <p>&copy; 2025 Thomas Aquinas Institute of Learning. All Rights Reserved.</p>
                <div class="space-x-8">
                    <a href="#" class="hover:text-white">Privacy Policy</a>
                    <a href="#" class="hover:text-white">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>