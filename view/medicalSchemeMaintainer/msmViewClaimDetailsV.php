<main>
    <title>View Claim Details</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li>Claim Details</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require 'msmSideNavV.php';
        ?>
    </div>

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
        </form>

        <a href="msmClaimDetailsV.php"><button type="submit" name="selectwise-submit">Select</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>