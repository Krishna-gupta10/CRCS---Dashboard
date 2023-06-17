<?php
require_once "connectdb.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $societyname = isset($_POST['societyname']) ? trim($_POST['societyname']) : '';
    $address1 = isset($_POST['address1']) ? trim($_POST['address1']) : '';
    $pin = isset($_POST['pincode']) ? trim($_POST['pincode']) : '';
    $state = isset($_POST['inputState']) ? trim($_POST['inputState']) : '';
    $district = isset($_POST['inputDistrict']) ? trim($_POST['inputDistrict']) : '';
    $sectortype = isset($_POST['sector']) ? trim($_POST['sector']) : '';
    $area_of_operation = isset($_POST['aop']) ? (is_array($_POST['aop']) ? implode(",", $_POST['aop']) : $_POST['aop']) : '';


    $pdfFileData = file_get_contents($_FILES['bankFile']['tmp_name']);


    $applicationID = mt_rand(100000, 999999);

    $sql = "INSERT INTO society (applicationID, societyname, address1, pin, state, district, sectortype, area_of_operation, pdfFileData) VALUES (?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssssssss", $applicationID, $societyname, $address1, $pin, $state, $district, $sectortype, $area_of_operation, $pdfFileData);
        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('Application submitted successfully. Your Application ID is: $applicationID');</script>";
        } else {
            echo "<script>alert('Failed to submit the application. Please try again.');</script>";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "<script>alert('Failed to submit the application. Please try again.');</script>";
    }

    mysqli_close($conn);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Form Registration</title>
    <link rel="stylesheet" href="register.css">
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
            <center>
                <h2><b>FORM - I</b></h2>
            </center>
            <center> Application for registration of a Multi-State Cooperative Society under the Multi-State Cooperative
                Societies Act, 2002</center>

            <center> Submission of proposal for registration of the following Multi-State Cooperative Society:</center>
            <br>
            <br>
            <b>Documents to be enclosed:</b><br>
            <br>
            A certificate from Bank stating credit balance there in favour of the proposed multi-state cooperative
            society <input type="file" name="bankFile" id="bankFile"
                accept="application/pdf,application/vnd.ms-excel" required/><br>
            <br>
            <br>
            <br>
            <div class="mb-3">
                <label for="societyname" class="form-label">Name of society</label>
                <input type="text" name="societyname" id="societyname" class="form-control" required>
            </div>
            <br>
            <div class="mb-3">
                <label for="address1" class="form-label">Address</label>
                <input type="text" name="address1" id="address1" class="form-control" required>
            </div>
            <br>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="pincode" class="form-label">Pin code</label>
                    <input type="numeric" name="pincode" id="pincode" type="number" class="form-control" required>
                </div>
                <div class="form-group col-md-4">
                    <label class="form-label" for="inputState">State</label>
                    <select class="form-control" name="inputState" id="inputState" required>
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
                    <select class="form-control" name="inputDistrict" id="inputDistrict" required>
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
                <select name="sector" id="sector" class="form-control" required>
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
            <input type="checkbox" id="declare" name="declare" value="declare" required>
            <label for="declare"> We declare that the information given herewith including that in the enclosures is
                correct to the best of our knowledge.</label><br>
            <button type="submit" name="submit" class="btn btn-primary">Register my
                Society</button>
        </form>

        <div class="footer">
            <div class="footer-content">
                <p><big><b>Ministry of Corporation, Govt. of India</b></big></p>
            </div>
        </div>
        <script src="register.js"></script>
</body>

</html>