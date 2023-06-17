<!DOCTYPE html>
<html>

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;500&display=swap" rel="stylesheet">
  <title>CRCS - Portal</title>
  <style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.header {
  font-family: 'Oswald';
  color: #393232;
  background-color: white;
  padding: 20px;
  text-align: center;
}

.sidebar {
  background-color: #2f3f5d;
  float: left;
  width: 190px;
  padding: 20px;
  height: 85vh;
}

.sidebar ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.sidebar li {
  margin-bottom: 10px;
}

.sidebar li a {
  display: block;
  border: 2px solid #ffffff;
  border-radius: 12px;
  padding: 10px;
  background-color: #2f3f5d;
  color: #ffffff;
  text-decoration: none;
}

.sidebar li a:hover {
  background-color: #1e283a;
}

.content {
  padding: 20px;
}

.content h2 {
  margin-bottom: 20px;
}

.img {
  position: absolute;
  display: inline-block;
  top: 121px;
  right: 0.5px;
  width: 1100px;
  height: 300px;
}

.footer {
  background-color: #1e283a;
  color: #ffffff;
  padding: 20px;
  height: 10vh;
  text-align: center;
  clear: both;
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
  top: 0px;
  margin-top: 10px;
  margin-left: 60px;
  height: 100px;
  width: 80px;
}

.content-container {
  font-family: 'Oswald';
  color: #393232;
  position: absolute;
  background-color: white;
  top: 420px;
  right: 0px;
  height: 286px;
  padding: 20px;
  text-align: center;
  width: 25%;
  border-left: 4px solid #2f3f5d;
}

.txt {
  font-size: 15px;
  font-weight: 2px;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  top: 68%;
  width: 50%;
  left: 260px;
  color: black;
  text-align: center;
  position: absolute;
}

.logos {
  width: 2%;
  aspect-ratio: 1/2;
  display: inline-block;
  object-fit: contain;
}

.marquee-container {
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  padding: 10px;
  border-radius: 20px;
  margin-bottom: 20px;
  height: 100px;
  overflow: hidden;
  position: relative;
}

.marquee {
  position: absolute;
  top: 0;
  animation: marquee 10s linear infinite;
}

.marquee a {
  color: #ff0000;
  text-decoration: none;
}

.marquee a:hover {
  text-decoration: underline;
}


@media (max-width: 1333px) {

  .sidebar {
    width: 100%;
    float: none;
    height: auto;
  }

  .sidebar ul {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
  }

  .sidebar li {
    width: 100%;
    margin-bottom: 10px;
  }

  .sidebar li a {
    width: 100%;
    padding: 8px;
    margin: auto;
    text-align: center;
  }

  .content {
    margin-left: 0;
    padding: 20px;
  }

  .img {
    position: static;
    width: 100%;
    margin: auto;
    height: auto;
  }

  .footer {
    height: auto;
    width: 100%;
    text-align: center;
  }
  .right,
  .left {
    position: static;
    margin-top: 0;
    margin-right: 0;
    height: auto;
  }

  .content-container {
    position: relative;
    top: auto;
    right: auto;
    height: auto;
    width: 100%;
    border-left: none;
    margin-top: 20px;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center; 
  }

  .txt {
    top: auto;
    left: auto;
    width: 100%;
    font-size: 15px;
    position: static;
  }

  .logos {
    width: 10%;
  }

  .marquee {
    position: relative;
    animation: marquee 10s linear infinite;
  }

  .marquee-container {
    height: auto;
    margin-bottom: 20px;
    overflow: visible; 
  }
}


  </style>
</head>

<body>
  <div class="header">
    <a href="https://www.g20.org/en/"><img class="right" src="images/g-20-logo.png" alt="G20 Summit image"></a>
    <a href="index.php"><img class="left" src="images/embb.png" alt="Emblem Image (home screen)"></a>
    <h1>Central Registrar for Cooperative Societies</h1>
  </div>
  <div class="sidebar">
    <ul>
      <li><a href="register.php">Online Registration</a></li>
      <li><a href="amend.php">Amend Details</a></li>
      <li><a href="status.php">View Application Status</a></li>
      <li><a href="regsocities.php">Registered Societies</a></li>
      <li><a href="aboutus.php">About Us</a></li>
    </ul>
  </div>
  <div class="content">
    <div class="content-container">
      <h2>Notices and Updates</h2>
      <div class="marquee-container">
        <div class="marquee">
          ‣<a href="https://mscs.dac.gov.in/Guidelines/GuidelineAct2002.pdf">Multi-State Cooperative Societies Act,
            2002</a><br>
          ‣<a href="https://mscs.dac.gov.in/MSCS/UploadsDocs/Circulars/Sales_officer_order_scan.pdf">Under Section 97 of
            the Multi-state Cooperative Societies Act, 2002</a><br>
          ‣<a href="https://mscs.dac.gov.in/MSCS/UploadsDocs/Circulars/Gazette_of_India_21-03-2023.pdf">Gazette of India
            21-03-2023</a><br>
          ‣<a
            href="https://mscs.dac.gov.in/MSCS/UploadsDocs/Circulars/Provisions_for_liquidation_process.pdf">Provisions
            for liquidation process</a><br>
        </div>
      </div>
    </div>
  </div>
  <div class="txt">
    The Central Registrar of Cooperative Societies office is the statutory body responsible for registration and other
    processes of the MSCS. The Office of CRCS looks after the MSCS in their management, registration, yearly filings,
    and other regulatory processes - As per the nature of the work and issues related to Multi State Cooperative
    Societies, there is two major sections existing in CRCS office i.e., Registration and Management sections.
    - Registration section looks after the matters relates to registration of new Multi State Cooperative

    Societies/Banks, deemed registration, conversion of the societies and amendments of the Bye- laws.

    - The Management sections looks after the issues relates to elections matters, analysis of submitted annual returns
    & audit reports, complaints received against the registered societies and the liquidation of societies.
  </div>

  <img src="images/modiji3.jpg" class="img" alt="Image not loading!">
  <div class="footer">
    <a href="https://www.instagram.com/minofcooperatn/"><img class="logos" src="images/ig.png"></a>
    <a href="https://www.facebook.com/MinOfCooperatn/"> <img class="logos" src="images/fb.svg"></a>
    <a href="https://www.youtube.com/MinOfCooperatn"><img class="logos" src="images/yt.png"></a>
    <a href="https://twitter.com/MinOfCooperatn/"><img class="logos" src="images/twitter.png"></a>
    <br>
    &copy;
    <?php echo date('Y'); ?> Published and managed by Ministry of Cooperation, Government of India. All rights reserved.
  </div>
</body>

</html>