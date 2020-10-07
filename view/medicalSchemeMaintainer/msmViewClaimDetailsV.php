<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Claim Details</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <!-- <div class="nameLogo"> -->
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="msmHomeV.php">Home</a>
                <a href="msmProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>

        <div class="header">breadcrums</div>

        <?php
            require_once('msmSideNavV.php');
        ?>

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
                <label for="departmentwise">Department-wise Claim Details</label> <br>
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

            <a href="msmClaimDetailsV.php"><button type="submit" name="selectwise-submit">Select</button></a>
            <!-- mekedi javascript function ekk liyla check krla tamai ywnna ona eka tornne -->
        </div>

        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>

</html>