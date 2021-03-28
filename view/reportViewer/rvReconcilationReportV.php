<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Nominated List</title>
        <div class="sansserif">
            <ul class="breadcrumbs">
                <li><a href="rvHomeV.php">Home</a></li>
                <li><a href="../../controller/rvControllers/mahapolaListController.php?btn=11">View Another List</a></li>
                <li class="active">Reconciliation Report</li>
            </ul>
        
            <div class="row" style="margin-bottom: 4%;">
                <div class="col left20">
                    <?php 
                        require('rvSideNavV.php');
                    ?>
                </div>

                <div class="col right80">
                    <div>
                        <h2>Reconciliation Report</h2>
                    </div>

                    <div class="contentForm">
                        <form action="../../controller/rvControllers/mahapolaListController.php" method="post">
                           
                            <br><div class="">
                                <table id="tableStyle">
                                    <tr>
                                        <th>Year</th>
                                        <th>Month</th>
                                        <th>Degree</th>
                                        <th>Batch Number</th>
                                        <th>Merit Scholarship</th>
                                        <th>Ordinary Scholarship</th>
                                        <th>Non Eligible</th>
                                    </tr>

                                    <?php echo $_SESSION['reco_list']; ?>
                                </table>
                            </div><br>

                            <br><h2>Eligibility List</h2><br>

                            <div class="">
                                <table id="tableStyle">
                                    <tr>
                                        <th>Index No</th>
                                        <th>Registration No</th>
                                        <th>Name</th>
                                        <th>Mahapola Scheme</th>
                                    </tr>

                                    <?php echo $_SESSION['reco_eligible_stu']; ?>
                                </table>
                            </div>

                            <br><h2>Ineligibility List</h2><br>

                            <div class="">
                                <table id="tableStyle">
                                    <tr>
                                        <th>Index No</th>
                                        <th>Registration No</th>
                                        <th>Name</th>
                                    </tr>

                                    <?php echo $_SESSION['reco_non_eligible_stu']; ?>
                                </table>
                            </div>

                            <button class="subbtn" type="submit" name="view-mahapola-report" >View Another</button></a>
                            <button type="submit" class="cancelbtn">
                                <a href="rvHomeV.php">Exit</a>
                            </button>
                        </form>
                    </div>
                
                </div>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>