<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RouteMaster</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #0d0d0d;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
        }

        /* Navigation */
        .navbar {
            background: rgba(26, 26, 26, 0.95);
            border-bottom: 2px solid #e10600;
            padding: 0 20px;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #e10600;
            text-decoration: none;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 20px;
        }

        .nav-link {
            color: #fff;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 6px;
            transition: all 0.3s ease;
            font-weight: 500;
            font-size: 0.9rem;
        }

        .nav-link:hover {
            background: #e10600;
            color: white;
            transform: translateY(-2px);
        }

        .nav-link.active {
            background: #e10600;
            color: white;
        }

        /* Mobile Menu */
        .hamburger {
            display: none;
            cursor: pointer;
            flex-direction: column;
            gap: 4px;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background: #fff;
            transition: 0.3s;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hamburger {
                display: flex;
            }

            .nav-menu {
                position: fixed;
                left: -100%;
                top: 70px;
                flex-direction: column;
                background: rgba(26, 26, 26, 0.95);
                width: 100%;
                text-align: center;
                transition: 0.3s;
                box-shadow: 0 10px 27px rgba(0, 0, 0, 0.05);
                padding: 20px 0;
                gap: 0;
            }

            .nav-menu.active {
                left: 0;
            }

            .nav-link {
                display: block;
                padding: 15px;
                margin: 5px 0;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="/" class="logo">RouteMaster</a>

            <ul class="nav-menu">
                <li><a href="/" class="nav-link active">Accueil</a></li>
                <li><a href="/check-ip" class="nav-link">CheckIpLocal</a></li>
                <li><a href="/block-empty" class="nav-link">BlockEmptyRequest</a></li>
                <li><a href="/check-country" class="nav-link">CheckCountry</a></li>
                <li><a href="/min-length" class="nav-link">MinLength</a></li>
                <li><a href="/check-time" class="nav-link">CheckTime</a></li>
            </ul>

            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <script>
        // Mobile Menu Toggle
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-link').forEach(n => n.addEventListener('click', () => {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
        }));

        // Active link highlighting
        const currentLocation = location.href;
        const menuItems = document.querySelectorAll('.nav-link');

        menuItems.forEach(item => {
            if(item.href === currentLocation) {
                item.classList.add('active');
            }
        });
    </script>
</body>
</html>
