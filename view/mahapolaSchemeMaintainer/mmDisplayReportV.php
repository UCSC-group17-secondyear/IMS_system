<main>
    <title>Display Report</title>
    <?php
        require('../basic/header.php');
    ?>
        
    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="mmHomeV.php">Home</a></li>
            <li><a href="mmViewReportsMahapolaSchemeV.php">View Mahapola Scheme Reports</a></li>
            <li>View Report</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php 
        require('../mahapolaSchemeMaintainer/mmSideNavV.php');
        ?>
    </div>

    <div class="content">
        <div>
            <h4>Report</h4>
        </div>
            <!-- report eke generate kranna one -->
        <a href="mmViewReportsMahapolaSchemeV.php" ><button type="submit" name="" >OK</button></a><br>
    </div>
    
    <?php
        require_once('../basic/footer.php');
    ?>
</main>