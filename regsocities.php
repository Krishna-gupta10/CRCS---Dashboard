<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <title>Registered Societies - CRCS</title>
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

table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

table th,
table td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ccc;
}

table th {
  background-color: #f1f1f1;
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
  top: 0px;
  margin-top: 10px;
  margin-left: 60px;
  height: 100px;
  width: 80px;
}

/* Responsive Styles */
@media (max-width: 1040px) {
  .content {
    margin: 10px;
  }

  table {
    font-size: 14px;
  }

  .right,
  .left {
    position: static;
    margin-top: 0;
    margin-right: 0;
    height: auto;
  }
}


  </style>
</head>

<body>
  <div class="header">
  <a href="https://www.g20.org/en/"><img class="right" src="images/g-20-logo.png" alt="G20 Summit image"> </a>
    <a href="index.php"><img class="left" src="images/embb.png" alt="Emblem Image (home screen)"> </a>
    <h1>Registered Societies</h1>
  </div>
  <div class="content">
    <h2>All Societies</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Society</th>
          <th>Registration Date </th>
          <th>Address</th>
          <th>Pincode</th>
          <th>District</th>
          <th>State</th> 
          <th>Areas of Operation</th>
          <th>Sector Type</th>
        </tr>
      </thead>
      <tbody>
        <?php
        require_once "connectdb.php";
        $sql = "SELECT * FROM society";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['societyname'] . "</td>";
          echo "<td>" . $row['regdate'] . "</td>";
          echo "<td>" . $row['address1'] . "</td>";
          echo "<td>" . $row['pin'] . "</td>";
          echo "<td>" . $row['district'] . "</td>";
          echo "<td>" . $row['state'] . "</td>";
          echo "<td>" . $row['area_of_operation'] . "</td>";
          echo "<td>" . $row['sectortype'] . "</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
    <p>No. of Registered Societies: <?php echo mysqli_num_rows($result); ?></p>
  </div>
  <div class="footer">
    &copy; <?php echo date('Y'); ?> Central Registrar for Cooperative Societies
  </div>
</body>
</html>
