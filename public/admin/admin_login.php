<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrative Portal Login | Thomas Aquinas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap');
        
        :root {
            --navy: #0a1d37;
            --gold: #ffcc00;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
            color: #1a1a1a;
        }

        .serif-font {
            font-family: 'Playfair Display', serif;
        }

        .bg-navy { background-color: var(--navy); }
        .text-navy { color: var(--navy); }
        .bg-gold { background-color: var(--gold); }
        .text-gold { color: var(--gold); }

        .btn-institutional {
            display: inline-block;
            padding: 0.85rem 2rem;
            background-color: var(--navy);
            color: white;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.15em;
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

        .form-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #d1d5db;
            border-radius: 0;
            font-size: 0.875rem;
            transition: border-color 0.2s;
            appearance: none;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--navy);
            box-shadow: 0 0 0 1px var(--navy);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 md:p-6">

    <div class="w-full max-w-md bg-white border border-gray-200 p-6 md:p-10 shadow-sm">
        <div class="text-center mb-8">
            <div class="w-16 h-16 bg-navy flex items-center justify-center mx-auto mb-6">
                <i class="fa-solid fa-shield-halved text-gold text-2xl"></i>
            </div>
            <h1 class="serif-font text-2xl text-navy mb-1">Administrative Portal</h1>
            <p class="text-[10px] uppercase tracking-[0.2em] text-gray-400 font-bold">Authorized Personnel Only</p>
            <div class="w-12 h-px bg-gold mx-auto mt-4"></div>
        </div>
        
        <form id="loginForm" class="space-y-6">
            <div>
                <label for="username" class="block text-[10px] uppercase tracking-widest font-bold text-gray-500 mb-2">Username</label>
                <input type="text" id="username" name="username" required class="form-input" placeholder="Enter credentials">
            </div>
            
            <div>
                <label for="password" class="block text-[10px] uppercase tracking-widest font-bold text-gray-500 mb-2">Password</label>
                <input type="password" id="password" name="password" required class="form-input" placeholder="••••••••">
            </div>

            <div id="loginError" class="hidden border border-red-300 bg-red-50 p-4">
                <p class="text-[10px] uppercase tracking-widest text-red-700 font-bold text-center" id="errorMessage"></p>
            </div>

            <button type="submit" class="btn-institutional w-full">Access Dashboard</button>
        </form>
        
        <div class="mt-8 pt-8 border-t border-gray-100 text-center">
            <p class="text-[9px] uppercase tracking-widest text-gray-400 font-bold">Thomas Aquinas Institute of Learning</p>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    <script>
        const loginForm = document.getElementById('loginForm');
        const loginError = document.getElementById('loginError');
        const errorMessage = document.getElementById('errorMessage');

        loginForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            loginError.classList.add('hidden');

            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value;

            try {
                const response = await fetch('login_router.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: new URLSearchParams({ username, password })
                });

                const data = await response.json();

                if (data.success) {
                    window.location.href = 'dashboard.php';
                } else {
                    errorMessage.textContent = data.message || "Invalid Credentials";
                    loginError.classList.remove('hidden');
                }
            } catch (err) {
                errorMessage.textContent = "System Error: Routing Failed";
                loginError.classList.remove('hidden');
            }
        });
    </script>
</body>
</html>