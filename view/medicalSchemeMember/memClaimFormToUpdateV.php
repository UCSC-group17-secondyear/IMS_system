<main>
    <title>Update Claim Form</title>

    <?php
        require('../basic/header.php');
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="memHomeV.php">Home</a></li>
            <li><a href="memUpdateClaimFormsV.php">Select Form</a></li>
            <li>Form</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php 
            require('../medicalSchemeMember/memSideNavV.php');
        ?>
    </div>

    <div class="content">
        <div>
            <h4>Form</h4>
        </div>
        <form action="" method="POST">
            <label for="name">Name</label>
            <input type="text" value=""> <br>
            <label for="empNo">Employee Number</label>
            <input type="text" value=""> <br>

            <!-- auto fill wenna one database eken -->
            <label for="bill">Scanned copy of bill</label><br>
        </form>

        <a href="memFormUpdateSuccessV.php"><button type="submit" name="">Submit</button></a><br>
    </div>
    
    <?php
        require_once('../basic/footer.php');
    ?>
</main>