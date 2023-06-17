<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;500&display=swap" rel="stylesheet">
  <title>About Us - CRCS</title>
  <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.header {
    background-color: #f1f1f1;
    font-family: 'Oswald';
    color: #393232;
    padding: 20px;
    text-align: center;
}

.content {
    margin: 20px;
}

.content h2 {
    margin-bottom: 20px;
}

.footer {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}

.right {
    position: absolute;
    right: 0;
    top: 0;
    margin-top: 25px;
    margin-right: 15px;
    height: 70px;
}

.left {
    position: absolute;
    left: 4px;
    top: 0;
    margin-top: 10px;
    margin-left: 60px;
    height: 100px;
    width: 80px;
}

@media (max-width: 480px) {
    .container {
        width: 90%;
        max-width: 400px;
        margin-top: 60px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .right {
      visibility: hidden;
    }

    .left {
        position: static;
        margin-top: 20px;
        margin-left: auto;
        margin-right: auto;
        height: 80px;
        width: 100px;
    }

    h1 {
        margin-top: 10px;
        font-size: 24px;
    }

    .content {
        margin: 10px;
    }

    .content p {
        font-size: 14px;
    }

    .footer {
        position: static;
        margin-top: 20px;
        padding: 10px;
    }
}
  </style>
</head>

<body>
  <div class="header">
    <a href="https://www.g20.org/en/"><img class="right" src="images/g-20-logo.png" alt="G20 Summit image"></a>
    <a href="index.php"><img class="left" src="images/embb.png" alt="Emblem Image (home screen)"></a>
    <h1>About Us</h1>
  </div>
  <div class="content">
    <h2>Central Registrar for Cooperative Societies</h2>
    <p>
      The Central Registrar for Cooperative Societies (CRCS) is a government organization responsible for regulating and overseeing cooperative societies at the national level. We work towards promoting the growth and development of cooperative societies across various sectors, ensuring compliance with relevant laws and regulations.
    </p>
    <p>
      Our mission is to foster a cooperative movement that contributes to the socio-economic development of the country, empowers communities, and encourages collaboration among individuals and organizations. We strive to create an enabling environment for cooperative societies to thrive, supporting them in their efforts to improve livelihoods and address social challenges.
    </p>
    <p>
      At CRCS, we provide guidance, facilitate registrations, offer legal support, and conduct inspections to ensure transparency, accountability, and efficient functioning of cooperative societies. We also promote best practices, knowledge sharing, and capacity building initiatives to enhance the effectiveness and sustainability of cooperative enterprises.
    </p>
    <p>
      We are committed to serving the cooperative sector and contributing to the overall growth and welfare of the nation. For any inquiries or assistance, please feel free to contact us using the provided contact details.
    </p>
  </div>
  <div class="footer">
    &copy; <?php echo date('Y'); ?> 
    Ministry of Cooperation
    Atal Akshay Urja Bhawan
    CGO Complex, Lodhi Road
    Behind NIA Building
    New Delhi – 110003.
  </div>
</body>

</html>
