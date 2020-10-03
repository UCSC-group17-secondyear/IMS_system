<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Scheme Member List</title>
    <link rel="stylesheet" href="../assests/css/main.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <!-- <div class="nameLogo"> -->
            <img src="../assests/img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="msmHomeV.php">Home</a>
                <a href="#">Logout</a>
            </div>
        </div>
        <div class="header">breadcrums</div>
        <div class="side-nav"> 
            <!-- <div> -->
                <h2>Medical Scheme Maintainer</h2>
            <!-- </div> -->

            <!-- <div> -->
                <a href="msmViewMedicalMemberListV.php"><button type="submit" name="" class="button">View Medical Member List</button></a><br>
                <a href="msmRemoveMemberV.php"><button type="submit" name="" class="button">Remove Member</button></a><br>
                <a href="msmViewClaimDetailsV.php"><button type="submit" name="" class="button">View Claim Details</button></a><br>
                <a href="msmViewFormsV.php"><button type="submit" name="" class="button">View Forms of the Medical Scheme</button></a><br>
                <a href="msmViewSchemeDetailsV.php"><button type="submit" name="" class="button">View Medical Scheme Details</button></a><br>
                <a href="msmRegisterToMedicalSchemeV.php"><button type="submit" name="" class="button">Register to the Staff Medical Scheme</button></a><br>
            <!-- </div> -->
        </div>
        <!-- <div class="banner">Banner</div> -->
        <div class="content">
                    <div>
                    <h2>Select a Scheme</h2>
                </div>
                
                <select name="scheme" id="">
                    <option value="">Select a Scheme</option>
                    <option value="scheme1">Scheme 1</option>
                    <option value="scheme2">Scheme 2</option>
                    <option value="scheme3">Scheme 3</option>
                </select>
                <br>
                <select name="memberType" id="">
                    <option value="">Select a Member Type</option>
                    <option value="academic">Academic</option>
                    <option value="non-academic">Non - Academic</option>
                    <option value="temporary">Temporary</option>
                </select>
                <br>
                
                <a href="msmMedicalMemberlistV.php"><button type="submit" name="viewMedicalMemberlist-submit">Select</button></a>
        </div>
        <div class="footer"><?php require "../footer.php"; ?></div>
    </div>
</body>
</html>