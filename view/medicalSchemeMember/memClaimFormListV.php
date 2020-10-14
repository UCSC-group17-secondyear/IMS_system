<main>
    <title>Form List</title>

    <?php
        require('../basic/header.php');
    ?>
        
    <div class="header">
        <!-- <ul class="breadcrumb">
            <li><a href="memHomeV.php">Home</a></li>
            <li>Form List</li>
        </ul> -->
    </div>

    <div class="side-nav">
        <?php 
            require('../medicalSchemeMember/memSideNavV.php');
        ?>
    </div>
    
    <div class="content">
        <div>
            <h4>Claim Form List</h4>
        </div>

        <h2>OPD Forms</h2>

        <ul>
            <li><a href="memClaimDetailsFormListV.php">Form 1</a></li>
            <li><a href="#">Form 2</a></li>
            <li><a href="#">Form 3</a></li>
            <!-- should generate as a pdf  -->
        </ul>

        <h2>Surgical Hospitalization Forms</h2>

        <ul>
            <li><a href="#">Form 1</a></li>
            <li><a href="#">Form 2</a></li>
            <li><a href="#">Form 3</a></li>
            <!-- fetch from database  -->
        </ul>
        <!-- when form is clicked data will be passed to claimDetails.php -->
    </div>
    
    <?php
        require_once('../basic/footer.php');
    ?>
</main>