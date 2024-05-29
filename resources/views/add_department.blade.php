<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELMS | Admin</title>
    <!-- Add your preferred icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
            background-color: #f4f5f7;
        }

        .navbar {
            width: 100%;
            background-color: #00acc1;
            color: white;
            display: flex;
            align-items: center;
            padding: 25px 80px;
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        .navbar .logo {
            font-size: 20px;
            font-weight: bold;
            margin-left: 30px; /* Tambahkan margin kiri untuk memberikan jarak antara ikon dan teks */
        }

        .navbar .bell-icon {
            font-size: 20px;
            margin-left: 1370px;
        }

        .menu-icon {
            font-size: 20px;
            cursor: pointer;
            margin-right: 10px;
            margin-left: -35px; /* Buat margin kiri negatif untuk menempel ke kiri */
        }

        .container {
            display: flex;
            flex: 1;
            width: 100%;
            padding-top: 5px; /* Adjust for navbar height */
        }

        .sidebar {
            width: 200px;
            background-color: #ffffff;
            color: black;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            position: fixed;
            top: 60px; /* Adjust for navbar height */
            bottom: 0;
            left: 0;
        }

        .sidebar .profile {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0 20px;
            align-items: flex-start;;
            margin-bottom: 30px;
        }

        .sidebar .profile img {
            border-radius: 50%;
            width: 60px;
            height: 60px;
            margin-bottom: 10px;
            margin-left: 10px;
        }

        .sidebar .profile h2 {
            font-size: 18px;
            margin: 0;
            margin-left: 10px;
        }

        .sidebar nav ul {
            list-style: none;
            padding: 0;
            width: 100%;
        }

        .sidebar nav ul li {
            width: 100%;
            margin: 10px 0;
        }

        .sidebar nav ul li a {
            color: grey;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar nav ul li a:hover {
            background-color: #546e7a;
        }

        .sidebar nav ul li a i {
            margin-right: 10px;
        }

        main {
            flex-grow: 1;
            padding: 20px;
            margin-left: 250px;
            margin-top: 60px; /* Adjust for navbar height */
            width: calc(100% - 250px);
        }

        main h1 {
            margin-bottom: 20px;
            font-weight: normal;
            font-size: 18px; 
            color: #777;
        }

        .form-container {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 550px;
            margin: auto;
            margin-left: 0;
        }

        .form-group {
            margin-bottom: 40px;
            position: relative;
        }

        .input-label {
            position: absolute;
            top: 0;
            left: 0;
            color: #777;
            margin-bottom: 16px; /* Ubah margin-bottom menjadi 16px */
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0;
            outline: none;
            margin-top: 20px; /* Tambahkan margin-top untuk jarak antara label dan input */
        }

        input {
            width: 100%;
            padding: 10px;
            border: none;
            border-bottom: 1px solid #ccc; /* Garis bawah input */
            border-radius: 0;
            outline: none;
        }

        input:focus {
            border-bottom-color: #3949ab; /* Warna garis bawah saat input difokuskan */
        }

        button {
            padding: 10px 20px;
            border: none;
            background-color: #3949ab;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #303f9f;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <i class="fas fa-bars menu-icon"></i>
        <div class="logo">ELMS | ADMIN</div>
        <i class="fas fa-bell bell-icon"></i>
    </div>
    <div class="container">
        <aside class="sidebar">
            <div class="profile">
                <img src="{{ asset('images/profile-pic.jpg') }}" alt="Profile Picture">
                <h2>Admin</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                    <li><a href="#"><i class="fas fa-building"></i> Department</a></li>
                    <li><a href="#"><i class="fas fa-sitemap"></i> Leave Type</a></li>
                    <li><a href="#"><i class="fas fa-users"></i> Employees</a></li>
                    <li><a href="#"><i class="fas fa-calendar-alt"></i> Leave Management</a></li>
                    <li><a href="#"><i class="fas fa-key"></i> Change Password</a></li>
                    <li><a href="#"><i class="fas fa-sign-out-alt"></i> Sign Out</a></li>
                </ul>
            </nav>
        </aside>
        <main>
            <h1>ADD DEPARTMENT</h1>
            <div class="form-container">
                <form action="{{ route('department.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <span class="input-label">Department Name</span>
                        <input type="text" id="department-name" name="department_name" required>
                    </div>
                    <div class="form-group">
                        <span class="input-label">Department Short Name</span>
                        <input type="text" id="department-short-name" name="department_short_name" required>
                    </div>
                    <div class="form-group">
                        <span class="input-label">Department Code</span>
                        <input type="text" id="department-code" name="department_code" required>
                    </div>
                    <button type="submit">Add</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
