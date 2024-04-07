<!DOCTYPE html>
<html>
<?php 
session_start();
$username=$_SESSION["name"];
$email =$_SESSION["email"];
$enrol=$_SESSION["enrollment_no"];
$room=$_SESSION["room_no"];

?>
<head>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: cyan;
            color: #333;
        }

        header {
            background-color: rgb(42, 42, 42);
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #495057;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s ease-in-out;
        }

        nav a:hover {
            color: cyan;
        }

        .sec {
            padding: 10px;
            display: inline-block;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding-bottom: 0px;
            width: 100%;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 90%;
            text-align: center;
            margin-bottom: 20px;
            overflow-x: auto;
        }

        .card table {
            width: 100%;
            border-collapse: collapse;
        }

        .card th,
        .card td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        .card th {
            background-color: rgb(42, 42, 42);
            color: #fff;
            text-align: center; 
        }

        .card tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .card input[type="text"],
        .card input[type="email"],
        .card input[type="number"],
        .card select {
            width: calc(100% - 20px);
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .card input[type="submit"] {
            background-color: rgb(42, 42, 42);
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header>
        <h1>Hostel Management System</h1>
    </header>
    <nav>
        <a href="#">Home</a>
        <a href="#">Rooms</a>
        <a href="#">Students</a>
        <a href="#">Reports</a>
    </nav>
    <section class="sec">
        <section class="inner">
            <div class="card">
                <h2>User Information</h2>
                <table>
                    <tr>
                        <th style="text-align: center;">Attribute</th>
                        <th style="text-align: center;">Value</th> 
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><?php echo $username; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $email; ?></td>
                    </tr>
                    <tr>
                        <td>Enrollment No.</td>
                        <td><?php echo $enrol; ?></td>
                    </tr>
                    <tr>
                        <td>Room No.</td>
                        <td><?php echo $room; ?></td>
                    </tr>
                </table>
            </div>
        </section>
    </section>
    <footer>
        <p></p>
    </footer>
</body>

</html>
