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
                <h3>View Claim Details</h3>
            </div>
            <form action="" method="POST">
                <label for="year">Enter medical year: </label>
                <input type="text" id="medicalYear"> <br> <br>
                <input type="radio" id="memberWise" name="wise" value="memberwise">
                <label for="memberwise">Member-wise Claim Details</label> <br>
                <label for="empId">Enter employee id: </label>
                <input type="text" id="empId"> <br>
                <input type="radio" id="departmentWise" name="wise" value="departmentwise">
                <label for="departmentwise">Department-wise Claim Details</label><br>
                Department <select name="department" id="department">
                    <option value="">Select a Department</option>
                    <option value="CS">CS</option>
                    <option value="IS">IS</option>
                    <option value="SE">SE</option>
                </select> <br>
                <input type="radio" id="UCSC" name="wise" value="UCSC">
                <label for="UCSC">UCSC Claim Details</label>
                <!-- meke name eka fill krnna -->
            </form>
            <a href="#"><button type="submit" name="selectwise-submit">Select</button></a>
            <!-- mekedi javascript function ekk liyla check krla tamai ywnna ona eka tornne -->
        </div>

    </div>
</main>

<?php
    require_once('../include/footer.php');
?>