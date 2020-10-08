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
            <li>Surgical Form</li>
        </ul>

        <div class="banner">
            <div>
                <h2>Medical Scheme Member</h2>
            </div>
        </div>
        <div class="content">
            <div>
                <h4>Surgical Hospitalization Form</h4>
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

            <a href="memFormSubmitSuccessV.php"><button type="submit" name="">Submit</button></a><br>

            <p>Download the form to be filled by the surgeon and get if field before you fill the surgical
                hospitalization form.</p>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>