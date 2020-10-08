<?php
    require_once('../header.php');
    require_once('memSideNavV.php');
?>

<main>
    <link rel="stylesheet" href="../assests/css/main.css">
    <div class="container">
        <!-- <div class="header">
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <div class="options">
                <a href="memHomeV.php">Home</a>
                <a href="memProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div> -->

        <!-- breadcrumbs -->
        <ul class="breadcrumb">
            <li><a href="memHomeV.php">Home</a></li>
            <!-- <li><a href="memFillClaimFormsV.php">Select Form Type</a></li> -->
            <li>OPD Form</li>
        </ul>

        <div class="banner">
            <div>
                <h2>Medical Scheme Member</h2>
            </div>
        </div>
        <div class="content">
            <div>
                <h2>OPD Form</h2>
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

                <label for="doctor">Name of the Doctor</label>
                <input type="text" value=""> <br>
                <label for="trecieveddate">Treatment Recieved Date</label>
                <input type="date" value=""> <br>
                <label for="bissuedate">Bill Issued Date</label>
                <input type="date" value=""> <br>
                <label for="purpose">Purpose</label>
                <input type="text" value=""> <br>
                <label for="amount">Bill Amount</label>
                <input type="text" value=""> <br>
                <label for="bill">Scanned copy of bill</label><br><br>
                <!-- scaaned copy eka upload kranna -->


            </form>

            <a href="memFormSubmitSuccessV.php"><button type="submit" name="">Submit</button></a><br>

            <p>Download the form to be filled by the surgeon and get if field before you fill the surgical
                hospitalization form.</p>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>