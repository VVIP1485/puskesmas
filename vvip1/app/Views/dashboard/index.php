<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puskesmas Nurlinda</title>
    <style>
        /* Global styles */
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            height: 100vh;
            margin: 0;
            background-color: #f7fafc;
            color: #333;
        }

        /* Sidebar style */
        .sidebar {
            width: 280px;
            background-color: #00796b;
            color: white;
            padding-top: 50px;
            position: fixed;
            height: 100%;
            box-shadow: 4px 0 20px rgba(0, 0, 0, 0.2);
            transition: width 0.3s ease;
            z-index: 100;
            border-radius: 0 15px 15px 0;
            overflow: hidden;
        }

        .sidebar h2 {
            text-align: center;
            color: white;
            font-size: 2.2em;
            font-weight: bold;
            margin-bottom: 40px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 18px 24px;
            text-decoration: none;
            font-size: 1.1em;
            border-bottom: 1px solid #004d40;
            transition: background-color 0.3s, transform 0.3s, padding-left 0.3s;
            border-radius: 8px;
        }

        .sidebar a:hover {
            background-color: #004d40;
            transform: translateX(10px);
            padding-left: 30px;
        }

        /* Expandable menu */
        .sidebar .menu-item {
            display: none;
            padding-left: 20px;
            opacity: 0;
            transform: translateY(-20px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .sidebar .expandable {
            cursor: pointer;
            padding: 18px 24px;
            font-size: 1.1em;
            border-bottom: 1px solid #004d40;
            background-color: #00796b;
            transition: background-color 0.3s;
            border-radius: 8px;
        }

        .sidebar .expandable:hover {
            background-color: #004d40;
        }

        .sidebar .menu-item.show {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        .sidebar .menu-item a {
            font-size: 1em;
            padding: 12px 24px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .sidebar .menu-item a:hover {
            background-color: #004d40;
        }

        /* Logout button placed below the expandable menu */
        .sidebar .btn-logout {
            margin-top: 20px;
            text-align: center;
            background-color: #d32f2f;
            color: white;
            padding: 15px;
            text-decoration: none;
            font-size: 1.1em;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        .sidebar .btn-logout:hover {
            background-color: #b71c1c;
        }

        /* Main content style */
        .main-content {
            margin-left: 300px;
            padding: 40px;
            flex-grow: 1;
            background-color: white;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 40px;
            transition: margin-left 0.3s ease;
        }

        h1 {
            color: #00796b;
            font-size: 2.5em;
            margin-bottom: 30px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .statistics {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px; /* Reduced gap between cards */
            margin-top: 40px;
        }

        .stat-card {
            background-color: #ffffff;
            padding: 20px; /* Reduced padding */
            border-radius: 8px; /* Reduced border radius */
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); /* Smaller shadow */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .stat-card:hover {
            transform: translateY(-8px); /* Slight hover effect */
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15); /* Smaller hover shadow */
        }

        .stat-card h2 {
            color: #004d40;
            font-size: 1.4em; /* Slightly smaller font size */
            margin: 0;
            font-weight: 600;
        }

        .stat-card p {
            color: #00796b;
            font-size: 1.2em; /* Smaller font size */
            margin-top: 8px; /* Reduced margin */
            font-weight: 700;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .sidebar {
                width: 250px;
            }

            .main-content {
                margin-left: 270px;
            }

            .stat-card {
                padding: 15px; /* Reduced padding for smaller screens */
            }
        }

    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Puskesmas Dashboard</h2>
        <a href="/dashboard">Dashboard</a>
        
        <!-- Expandable menu for entities -->
        <div class="expandable">Menu</div>
        <div class="menu-item">
            <a href="/pasien">Pasien</a>
            <a href="/dokter">Dokter</a>
            <a href="/resep">Resep</a>
            <a href="/pemeriksaan">Pemeriksaan</a>
            <a href="/resepobat">Resep Obat</a>
            <a href="/obat">Obat</a>
        </div>

        <!-- Logout button -->
        <a href="/logout" class="btn-logout">Logout</a>
    </div>

    <!-- Main content -->
    <div class="main-content">
        <h1><?= esc($title) ?></h1>

        <div class="statistics">
            <div class="stat-card">
                <h2>Total Pasien</h2>
                <p><?= esc($totalPasien) ?></p>
            </div>
            <div class="stat-card">
                <h2>Total Dokter</h2>
                <p><?= esc($totalDokter) ?></p>
            </div>
            <div class="stat-card">
                <h2>Total Resep</h2>
                <p><?= esc($totalResep) ?></p>
            </div>
            <div class="stat-card">
                <h2>Total Pemeriksaan</h2>
                <p><?= esc($totalPemeriksaan) ?></p>
            </div>
            <div class="stat-card">
                <h2>Total Resep Obat</h2>
                <p><?= esc($totalResepObat) ?></p>
            </div>
            <div class="stat-card">
                <h2>Total Obat</h2>
                <p><?= esc($totalObat) ?></p>
            </div>
        </div>
    </div>

    <!-- Script untuk animasi dropdown -->
    <script>
        document.querySelector('.expandable').addEventListener('click', function() {
            var menu = document.querySelector('.menu-item');
            menu.classList.toggle('show'); // Toggle the 'show' class for smooth animation
        });
    </script>

</body>
</html>