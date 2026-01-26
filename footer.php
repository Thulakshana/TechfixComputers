<?php

include_once 'libs.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="footercss.css">
</head>
<body>
    



<?php

?>

<footer class="footer">
    <div class="footer-container">

        <!-- About -->
        <div class="footer-box">
            <h3>CM System</h3>
            <p>
                CM System is a simple and modern web solution designed to help users
                manage content efficiently and easily.
            </p>
        </div>

        <!-- Quick Links -->
        <div class="footer-box">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div class="footer-box">
            <h3>Contact Us</h3>
            <p>Email: support@cmsystem.com</p>
            <p>Phone: +94 77 123 4567</p>

            <div class="social-icons">
                <a href="#">🌐</a>
                <a href="#">📘</a>
                <a href="#">📸</a>
                <a href="#">🐦</a>
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        <p id="copyright"></p>
    </div>
</footer>

<script>
    const year = new Date().getFullYear();
    document.getElementById("copyright")
        .innerHTML = `© ${year} CM System. All Rights Reserved.`;
</script>

</body>
</html>