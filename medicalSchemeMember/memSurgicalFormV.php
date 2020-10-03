<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surgical Hospitalization Form</title>
    <link rel="stylesheet" href="../css/main.css"></link>
</head>

<body>
    <div class="container">
        <div class="header">
            <!-- <div class="nameLogo"> -->
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="memHomeV.php">Home</a>
                <a href="#">Logout</a>
            </div>
        </div>
        <div class="header">breadcrums</div>
        <div class="side-nav">
            <div>
                  <h2>Medical Scheme Member</h2>
            </div>
            
                  <a href="memRenewMembershipV.php" ><button type="submit" name="" class="button">Renew Membership</button></a><br>
                  <a href="memViewSchemeDetailsV.php" ><button type="submit" name="" class="button">View Medical Scheme Details</button></a><br>
                  <a href="memFillClaimFormsV.php" ><button type="submit" name="" class="button">Fill Claim Forms</button></a><br>
                  <a href="memUpdateClaimFormsV.php" ><button type="submit" name="" class="button">Update Claim Form</button></a><br>
                  <a href="memViewClaimFormsV.php" ><button type="submit" name="" class="button">View Claim Forms</button></a><br>
                  <a href="memGetClaimDetailsV.php" ><button type="submit" name="" class="button">Get Claim Detials</button></a><br>
        </div>
        <!-- <div class="banner">Banner</div> -->
        <div class="content">
                <div>
                    <h2>Surgical Hospitalization Form</h2>
                </div>

            <form action="" method="post">
                <label for="patientName">Enter Patient's Name</label>
                <input type="text" value=""> <br>

                <label for="patientName">Select relationship</label>
                <select name="relationship" id="">
                    <option value="myself">Myself</option>
                    <option value="husband">Husband</option>
                    <option value="wife">Wife</option>
                    <option value="daughter">Daughter</option>
                    <option value="son">Son</option>
                </select> <br>

                <label for="doctor">Date of the Accident</label>
                <input type="date" value=""> <br>

                <label for="trecieveddate">How Accident Occured</label>
                <input type="text" value=""> <br>

                <label for="bissuedate">Nature and Extend of Injuries</label>
                <input type="text" value=""> <br>

                <label for="purpose">Nature of Illness</label>
                <input type="text" value=""> <br>

                <label for="amount">Date of Commencement of Illness</label>
                <input type="date" value=""> <br>

                <label for="bill">Date of First Consultation</label>
                <input type="date" value=""> <br>

                <label for="bill">Name of the Doctor</label>
                <input type="text" value=""> <br>

                <label for="bill">Address of the Doctor</label>
                <input type="text" value=""> <br>

                <label for="bill">Hospitalized On</label>
                <input type="date" value=""> <br>

                <label for="bill">Discharged On</label>
                <input type="date" value=""> <br>

                <label for="bill">Scanned Copy of the Form Filled by the Surgeon</label>

                <!-- scaaned copy eka upload kranna -->

                
            </form>

            <a href="memFormSubmitSuccessV.php" ><button type="submit" name="" >Submit</button></a><br>

        </div>
        <div class="footer">Footer</div>
    </div>
</body>
</html>