<?php

require_once "connectdb.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $applicationID= isset($_POST['applicationID']) ? trim($_POST['applicationID']) : '';
  $societyname = isset($_POST['societyname']) ? trim($_POST['societyname']) : '';
  $address1 = isset($_POST['address1']) ? trim($_POST['address1']) : '';
  $pin = isset($_POST['pincode']) ? trim($_POST['pincode']) : '';
  $state = isset($_POST['inputState']) ? trim($_POST['inputState']) : '';
  $district = isset($_POST['inputDistrict']) ? trim($_POST['inputDistrict']) : '';
  $sectortype = isset($_POST['sector']) ? trim($_POST['sector']) : '';
  $area_of_operation = isset($_POST['aop']) ? (is_array($_POST['aop']) ? implode(",", $_POST['aop']) : $_POST['aop']) : '';

  $selectQuery = "SELECT * FROM society WHERE applicationID = ?";
  $selectStmt = mysqli_prepare($conn, $selectQuery);
  mysqli_stmt_bind_param($selectStmt, "i", $applicationID);
  mysqli_stmt_execute($selectStmt);
  $result = mysqli_stmt_get_result($selectStmt);

  if (mysqli_num_rows($result) > 0) {

    $updateQuery = "UPDATE society SET societyname = ?, address1 = ?, pin = ?, state = ?, district = ?, sectortype = ?, area_of_operation = ? WHERE applicationID = ?";
    $updateStmt = mysqli_prepare($conn, $updateQuery);
    mysqli_stmt_bind_param($updateStmt, "ssissssi", $societyname, $address1, $pin, $state, $district, $sectortype, $area_of_operation, $applicationID);

    if (mysqli_stmt_execute($updateStmt)) {
        echo "<script>alert('Your Request is submitted successfully! Please wait for confirmation');</script>";
    } else {
      echo "Error updating society details: " . mysqli_error($conn);
    }

    mysqli_stmt_close($updateStmt);
  } else {
    echo "Invalid application ID. Please enter a valid ID.";
  }

  mysqli_stmt_close($selectStmt);
  mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Amend Society Details</title>
  <link rel="stylesheet" href="amend.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>

    <link href="https://unpkg.com/bootstrap@3.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/jquery@3.3.1/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/bootstrap@3.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/bootstrap-multiselect@0.9.13/dist/js/bootstrap-multiselect.js"></script>
    <link href="https://unpkg.com/bootstrap-multiselect@0.9.13/dist/css/bootstrap-multiselect.css" rel="stylesheet" />
</head>
<body>

 <a href="https://www.g20.org/en/"><img class="right" src="images/g-20-logo.png" alt="G20 Summit image"> </a>
    <a href="index.php"><img class="left" src="images/embb.png" alt="Emblem Image (home screen)"> </a>
    <div class="container">
        <form name="myform" action="" method="post" enctype="multipart/form-data">
    <label for="application_id">Application ID:</label>
    <input type="text" name="applicationID" class="form-label" required><br><br>

    <div class="mb-3">
                <label for="societyname" class="form-label">Name of society</label>
                <input type="text" name="societyname" id="societyname" class="form-control" required>
            </div>
            <br>
            <div class="mb-3">
                <label for="address1" class="form-label">Address</label>
                <input type="text" name="address1" id="address1" class="form-control">
            </div>
            <br>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="pincode" class="form-label">Pin code</label>
                    <input type="numeric" name="pincode" id="pincode" type="number" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label class="form-label" for="inputState">State</label>
                    <select class="form-control" name="inputState" id="inputState">
                        <option value="SelectState">Select State</option>
                        <option value="Andra Pradesh">Andra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madya Pradesh">Madya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttaranchal">Uttaranchal</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                        <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadeep">Lakshadeep</option>
                        <option value="Pondicherry">Pondicherry</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-label" for="inputDistrict">District</label>
                    <select class="form-control" name="inputDistrict" id="inputDistrict">
                        <option value="">-- select one -- </option>
                    </select>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="multi">
                <label class="form-label" for="aop">Areas of Operation</label>
                <select class="form-control" name="aop[]" id="aop" multiple="multiple">
                    <option value="Andra Pradesh">Andra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madya Pradesh">Madya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Orissa">Orissa</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttaranchal">Uttaranchal</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="West Bengal">West Bengal</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Pondicherry">Pondicherry</option>
                </select>
            </div>
            <br>
            <div class="form-group col-md-4">
                <label for="sectortype" class="form-label">Sector Type</label>
                <select name="sector" id="sector" class="form-control">
                    <option value="Argo">Argo</option>
                    <option value="CB">Cooperative Bank</option>
                    <option value="credit">Credit</option>
                    <option value="dairy">Dairy</option>
                    <option value="housing">Housing</option>

                </select>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>


            <button type="submit" name="submit" class="btn btn-primary">Submit Request</button>
  </form>
  <div class="footer">
            <div class="footer-content">
                <p><big><b>Ministry of Corporation, Govt. of India</b></big></p>
            </div>
        </div>
  <script src="register.js"></script>
</body>
</html>
