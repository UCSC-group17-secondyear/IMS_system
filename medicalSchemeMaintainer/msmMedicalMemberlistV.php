<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member List</title>
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
                    <h2>Member List</h2>
                </div>

            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <br>

            <a href="msmViewMedicalMemberlistV.php"><button type="submit" name="MedicalMemberlist-submit">OK</button></a>
        </div>
        <div class="footer"><?php require "../footer.php"; ?></div>
    </div>
</body>
</html>
