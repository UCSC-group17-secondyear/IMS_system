<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Nominated List</title>
        <div class="sansserif">
            <ul class="breadcrumbs">
                <li><a href="mmHomeV.php">Home</a></li>
                <li class="active">Mahapola Nominated List</li>
            </ul>
        
            <div class="row">
                <div class="col left20">
                    <?php 
                        require('mmSideNavV.php');
                    ?>
                </div>

                <div class="col right80">
                    <div>
                        <h2>Nominated Student List</h2>
                    </div>

                    <div class="contentForm">
                        <table id="tableStyle">
                            <tr>
                                <th>Student Index</th>
                                <th>Student Name</th>
                            </tr>
                        </table>
                    </div>

                    <a href="mmViewMahapolaNominatedListV.php" ><button class="mainbtn" type="submit" name="" >Back</button></a><br>
                </div>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>