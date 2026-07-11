<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Trip - Travel Packages</title>
    <link rel="stylesheet" href="stylesheet2.css"> 
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="image/logo.jpeg" alt="My Trip Logo">
        </div>
        <nav class="menu">
            <ul>
                <li><a href="homep.php">Home</a></li>
                <li><a href="#">Company</a>
                    <ul class="dropdown">
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="Ourteam.php">Our Team</a></li>
                        <li><a href="career.php">Careers</a></li>
                    </ul>
                </li>
                <li><a href="#">Group Tours</a>
                    <ul class="dropdown">
                        <li><a href="domestic travel.php">Domestic</a></li>
                        <li><a href="international.php">International</a></li>
                    </ul>
                </li>
                <li><a href="#">Packages</a>
                    <ul class="dropdown">
                        <li><a href="honeymoon.php">Honeymoon</a></li>
                        <li><a href="familytours.php">Family</a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <h1 class="content">Welcome to My Trip</h1>
    <h2 class="content">Available Travel Packages</h2>
    <div class="package-container">
        <?php
        $conn = new mysqli('localhost', 'root', '', 'travel_agency_db');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM packages ORDER BY popularity DESC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='package'>
                        <img src='images/{$row['image_url']}' alt='{$row['name']}'>
                        <h3>{$row['name']}</h3>
                        <p>Destination: {$row['destination']}</p>
                        <p>Price: ₹{$row['price']}</p>
                        <p>Duration: {$row['duration']}</p>
                        <p>Category: {$row['category']}</p>
                        <a href='book.php?package_id={$row['package_id']}' class='book-btn'>Book Now</a>
                      </div>";
            }
        } else {
            echo "<p>No packages available.</p>";
        }
        $conn->close();
        ?>
    </div>

    <footer class="footer">
        <span class="f">&copy; 2024 My Trip. All Rights Reserved.</span>
        <div class="instagram">
            <a href="https://www.instagram.com/d.d_travels/?hl=en" target="_blank">INSTAGRAM<i class="fa fa-instagram"></i></a>
        </div>
    </footer>
</body>
</html>
