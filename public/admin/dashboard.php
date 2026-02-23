<?php
//require_once __DIR__ . '/../../app/Controller/EnrollmentController.php';

// $controller = new EnrollmentController();
// $enrollments = $controller->getPending();

require_once __DIR__ . '/../../app/Controller/PreRegistrationController.php';
$controller = new PreRegistrationController();
$preReg = $controller->getPreRegistrations();
$activeStudents = 1284; // Placeholder for active students count    
$facultyCount = 42; // Placeholder for faculty count
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Administrative Portal</title>
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
            background-color: #ffffff;
            color: #1a1a1a;
            overflow-x: hidden; /* Prevent horizontal scroll on body */
        }

        .serif-font {
            font-family: 'Playfair Display', serif;
        }

        .bg-navy { background-color: var(--navy); }
        .text-navy { color: var(--navy); }
        .bg-gold { background-color: var(--gold); }
        .text-gold { color: var(--gold); }

        .sidebar-item {
            display: flex;
            align-items: center;
            padding: 1rem 1.5rem;
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: #64748b;
            border-left: 4px solid transparent;
            transition: all 0.2s;
            text-align: left;
        }

        .sidebar-item:hover {
            color: var(--navy);
            background-color: #f8fafc;
        }

        .sidebar-item.active {
            color: var(--navy);
            background-color: #f8fafc;
            border-left-color: var(--gold);
        }

        .table-header {
            background-color: #f8fafc;
            text-transform: uppercase;
            font-size: 0.65rem;
            letter-spacing: 0.1em;
            font-weight: 700;
            color: #64748b;
            border-bottom: 2px solid #e2e8f0;
        }

        .status-pill {
            padding: 0.25rem 0.75rem;
            font-size: 0.6rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            white-space: nowrap;
        }

        .status-pending { background-color: #fef9c3; color: #854d0e; }

        .btn-action {
            padding: 0.5rem 1rem;
            font-size: 0.65rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border: 1px solid #e2e8f0;
            transition: all 0.2s;
            white-space: nowrap;
        }

        .btn-action:hover {
            background-color: var(--navy);
            color: white;
            border-color: var(--navy);
        }

        /* Responsive Sidebar Logic */
        #sidebar {
            transition: transform 0.3s ease-in-out;
            z-index: 100;
        }
        
        @media (max-width: 1024px) {
            #sidebar {
                position: fixed;
                left: 0;
                transform: translateX(-100%);
            }
            #sidebar.open {
                transform: translateX(0);
            }
        }
    </style>
</head>
<body class="bg-white">

    <!-- Top Header -->
    <nav class="bg-navy h-20 flex items-center justify-between px-4 md:px-8 sticky top-0 z-50">
        <div class="flex items-center space-x-4">
            <!-- Hamburger Menu Button -->
            <button onclick="toggleSidebar()" class="lg:hidden text-white p-2 focus:outline-none hover:text-gold transition-colors">
                <i class="fa-solid fa-bars text-xl"></i>
            </button>
            
            <div class="flex items-center space-x-3">
                <div class="w-8 h-8 md:w-10 md:h-10 bg-white/10 flex items-center justify-center">
                    <i class="fa-solid fa-shield-halved text-gold"></i>
                </div>
                <div>
                    <h1 class="text-white font-bold text-xs md:text-sm tracking-tighter leading-none uppercase">Thomas Aquinas</h1>
                    <p class="text-[7px] md:text-[8px] uppercase tracking-widest text-white/50 font-bold">Admin Portal</p>
                </div>
            </div>
        </div>
        <div class="flex items-center space-x-4 md:space-x-6">
            <span class="text-white/70 text-[10px] font-bold uppercase tracking-widest hidden md:block">Registrar's Office</span>
            <a href="logout.php" class="px-3 py-2 md:px-5 border border-white/20 text-white text-[9px] md:text-[10px] uppercase tracking-widest font-bold hover:bg-gold hover:text-navy transition">Logout</a>
        </div>
    </nav>

    <div class="flex">
        <!-- Sidebar Navigation -->
        <aside id="sidebar" class="w-72 border-r border-gray-200 sticky top-20 bg-white h-[calc(100vh-5rem)] overflow-y-auto shrink-0">
            <div class="py-8">
                <p class="px-6 text-[9px] uppercase tracking-widest font-bold text-gray-400 mb-4">Core Management</p>
                <nav class="space-y-1">
                    <button onclick="showSection('dashboard', event)" class="sidebar-item active w-full">
                        <i class="fa-solid fa-gauge-high w-8"></i> Overview
                    </button>
                    <button onclick="showSection('enrollments', event)" class="sidebar-item w-full">
                        <i class="fa-solid fa-file-signature w-8"></i> Enrollment Pre-Registration
                    </button>
                    <button onclick="showSection('announcements', event)" class="sidebar-item w-full">
                        <i class="fa-solid fa-bullhorn w-8"></i> Announcements
                    </button>
                    <button onclick="showSection('calendar', event)" class="sidebar-item w-full">
                        <i class="fa-solid fa-calendar-days w-8"></i> Event Calendar
                    </button>
                </nav>

                <p class="px-6 text-[9px] uppercase tracking-widest font-bold text-gray-400 mt-10 mb-4">System Settings</p>
                <nav class="space-y-1">
                    <button class="sidebar-item w-full"><i class="fa-solid fa-user-gear w-8"></i> User Accounts</button>
                    <button class="sidebar-item w-full"><i class="fa-solid fa-database w-8"></i> Backup & Logs</button>
                    <button onclick="showSection('contact', event)" class="sidebar-item w-full">
                        <i class="fa-solid fa-headset w-8"></i> Contact
                    </button>
                </nav>
            </div>
        </aside>

        <!-- Overlay for mobile -->
        <div id="overlay" onclick="toggleSidebar()" class="fixed inset-0 bg-black/50 z-40 hidden lg:hidden"></div>

        <!-- Main Content Area -->
        <main class="flex-1 p-6 md:p-12 bg-gray-50 min-h-screen min-w-0">
            <div class="container mx-auto max-w-7xl">
                <div class="mb-8 md:mb-12">
                    <h2 id="sectionTitle" class="serif-font text-3xl md:text-4xl text-navy mb-2">Dashboard Overview</h2>
                    <div class="w-16 h-1 bg-gold"></div>
                </div>

                <!-- Section: Overview Stats -->
                <div id="section-dashboard" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 mb-12">
                    <div class="bg-white border border-gray-200 p-6 md:p-8 shadow-sm">
                        <p class="text-[10px] uppercase tracking-widest font-bold text-gray-400 mb-2">Pending Applications</p>
                        <h3 class="serif-font text-4xl md:text-5xl text-navy"><?= count($preReg) ?></h3>
                        <p class="text-[9px] text-gray-500 mt-4 uppercase tracking-widest">Requires Registrar Review</p>
                    </div>
                    <div class="bg-white border border-gray-200 p-6 md:p-8 shadow-sm">
                        <p class="text-[10px] uppercase tracking-widest font-bold text-gray-400 mb-2">Active Students</p>
                        <h3 class="serif-font text-4xl md:text-5xl text-navy">1,284</h3>
                        <p class="text-[9px] text-gray-500 mt-4 uppercase tracking-widest">Current Student Count</p>
                    </div>
                    <div class="bg-white border border-gray-200 p-6 md:p-8 shadow-sm">
                        <p class="text-[10px] uppercase tracking-widest font-bold text-gray-400 mb-2">Faculty Count</p>
                        <h3 class="serif-font text-4xl md:text-5xl text-navy">42</h3>
                        <p class="text-[9px] text-gray-500 mt-4 uppercase tracking-widest">Academic Personnel</p>
                    </div>
                </div>

                <!-- Section: Enrollments Table -->
                <div id="section-enrollments" class="hidden">
                    <div class="bg-white border border-gray-200 shadow-sm overflow-hidden">
                        <div class="p-6 border-b border-gray-100 flex flex-col sm:row justify-between items-start sm:items-center gap-4">
                            <h4 class="font-bold text-xs uppercase tracking-widest text-navy">Recent Pre-Registrations</h4>
                            <button class="w-full sm:w-auto text-[10px] font-bold uppercase tracking-widest text-navy bg-gold px-4 py-2 hover:bg-navy hover:text-white transition">Export Data</button>
                        </div>
                        
                        <!-- CRITICAL: Added overflow-x-auto to prevent layout breaking -->
                        <div class="overflow-x-auto">
                            <table class="w-full text-left min-w-[700px]">
                                <thead>
                                    <tr class="table-header">
                                        <th class="p-4">Applicant Name</th>
                                        <th class="p-4">Grade Level</th>
                                        <th class="p-4">Contact Info</th>
                                        <th class="p-4">Status</th>
                                        <th class="p-4 text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    <?php if (empty($preReg)): ?>
                                        <tr><td colspan="5" class="p-10 text-center text-xs text-gray-400 font-bold uppercase tracking-widest">No pending applications found</td></tr>
                                    <?php else: ?>
                                        <?php foreach ($preReg as $row): ?>
                                        <tr class="text-sm">
                                            <td class="p-4">
                                                <p class="font-bold text-navy uppercase tracking-tighter"><?= htmlspecialchars($row['first_name'] . ' ' . $row['last_name']) ?></p>
                                            </td>
                                            <td class="p-4">
                                                <span class="text-[10px] font-bold text-gray-500 uppercase"><?= htmlspecialchars($row['grade_level'] ?? 'N/A') ?></span>
                                            </td>
                                            <td class="p-4">
                                                <p class="text-xs text-gray-600 font-medium"><?= htmlspecialchars($row['email'] ?? 'N/A') ?></p>
                                                <p class="text-[9px] text-gray-400"><?= htmlspecialchars($row['contact_number'] ?? 'N/A') ?></p>
                                            </td>
                                            <td class="p-4">
                                                <span class="status-pill status-pending">Pending Review</span>
                                            </td>
                                            <td class="p-4 text-right space-x-1">
                                                <button class="btn-action">View</button>
                                                <button class="btn-action text-green-700 hover:bg-green-700 hover:text-white">Approve</button>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Section: Contact Support -->
                <div id="section-contact" class="hidden">
                    <div class="bg-white border border-gray-200 shadow-sm max-w-4xl">
                         <div class="p-8 border-b border-gray-100 bg-gray-50/50">
                            <h4 class="font-bold text-[10px] uppercase tracking-[0.3em] text-gray-400 mb-2">Technical Support</h4>
                            <p class="text-navy serif-font text-3xl">System Developers</p>
                        </div>
                        <div class="p-8 space-y-8">
                            <div class="flex items-center space-x-6">
                                <div class="w-12 h-12 bg-navy flex items-center justify-center text-gold">
                                    <i class="fa-solid fa-code"></i>
                                </div>
                                <div>
                                    <h5 class="text-sm font-bold text-navy uppercase tracking-tight">Nathaniel Coronacion</h5>
                                    <p class="text-[10px] text-gray-500 uppercase font-bold mt-1">Lead Software Engineer</p>

                                    <p class="text-xs text-gray-600 flex items-center mt-2">
                                        <i class="fa-solid fa-envelope mr-2 text-navy"></i>
                                        <a href="mailto:nathanielcoronacion3@gmail.com"
                                        class="hover:text-navy transition">
                                        nathanielcoronacion3@gmail.com
                                        </a>
                                    </p>

                                    <!-- Availability -->
                                    <p class="text-xs text-gray-600 flex items-center">
                                        <i class="fa-solid fa-clock mr-2 text-navy"></i>
                                        Mon – Fri | 8:00 AM – 5:00 PM
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-6">
                                <div class="w-12 h-12 bg-navy flex items-center justify-center text-gold">
                                    <i class="fa-solid fa-laptop-code"></i>
                                </div>
                                <div>
                                    <h5 class="text-sm font-bold text-navy uppercase tracking-tight">John Christian Serrano</h5>
                                    <p class="text-[10px] text-gray-500 uppercase font-bold mt-1">Software Engineer</p>
                                    <p class="text-xs text-gray-600 flex items-center mt-2">
                                        <i class="fa-solid fa-envelope mr-2 text-navy"></i>
                                        <a href="mailto:johnemail@gmail.com"
                                        class="hover:text-navy transition">
                                        johnemail@gmail.com
                                        </a>
                                    </p>

                                    <!-- Availability -->
                                    <p class="text-xs text-gray-600 flex items-center">
                                        <i class="fa-solid fa-clock mr-2 text-navy"></i>
                                        Mon – Fri | 9:00 AM – 6:00 PM
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 bg-navy text-center">
                            <a href="mailto:yourgmail@gmail.com"
                            class="text-[10px] font-bold text-gold uppercase tracking-widest flex items-center justify-center mx-auto hover:text-white transition">
                                <i class="fa-solid fa-envelope mr-2"></i> Email Support
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Placeholders -->
                <div id="section-announcements" class="hidden">
                    <div class="bg-white border border-gray-200 p-12 text-center text-gray-400 text-xs font-bold uppercase tracking-widest italic">Announcements Module Offline</div>
                </div>
                <div id="section-calendar" class="hidden">
                    <div class="bg-white border border-gray-200 p-12 text-center text-gray-400 text-xs font-bold uppercase tracking-widest italic">Event Calendar Integration Pending</div>
                </div>

            </div>
        </main>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('overlay');
            sidebar.classList.toggle('open');
            overlay.classList.toggle('hidden');
        }

        function showSection(sectionId, event) {
            const titles = {
                'dashboard': 'Dashboard Overview',
                'enrollments': 'Enrollment Management',
                'announcements': 'Communications Portal',
                'calendar': 'Academic Calendar',
                'contact': 'Technical Support'
            };
            
            document.getElementById('sectionTitle').innerText = titles[sectionId];

            const sections = ['dashboard', 'enrollments', 'announcements', 'calendar', 'contact'];
            sections.forEach(id => {
                const el = document.getElementById(`section-${id}`);
                if (el) el.classList.add('hidden');
            });
            
            const target = document.getElementById(`section-${sectionId}`);
            if (target) target.classList.remove('hidden');

            // Update sidebar button active state
            document.querySelectorAll('.sidebar-item').forEach(btn => {
                btn.classList.remove('active');
            });
            
            if (event && event.currentTarget) {
                event.currentTarget.classList.add('active');
            }

            // Close sidebar on mobile after selection
            if (window.innerWidth < 1024) {
                const sidebar = document.getElementById('sidebar');
                if (sidebar.classList.contains('open')) {
                    toggleSidebar();
                }
            }
        }
    </script>
</body>
</html>