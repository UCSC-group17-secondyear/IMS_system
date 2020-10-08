<?php
    require_once('../header.php');
    require_once('asmSideNavV.php');
?>

<main>
    <link rel="stylesheet" href="../assests/css/main.css">

    <div class="container">

        <!-- <div class="header">
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <div class="options">
                <a href="rvHomeV.php">Home</a>
                <a href="rvProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div> -->

        <div class="header">breadcrums</div>

        <div class="content">
            <div>
                <h3>Select a Scheme</h3>
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

            <a href="rvMedicalMemberlistV.php"><button type="submit"
                    name="viewMedicalMemberlist-submit">Select</button></a>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>