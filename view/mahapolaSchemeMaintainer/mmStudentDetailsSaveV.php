<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Saved</title>
        <div class="sansserif">
            <ul class="breadcrumbs">
                <li><a href="mmHomeV.php">Home</a></li>
            </ul>
           
            <div class="row" style="margin-bottom: 7%;">
                <div class="col left20">
                    <?php 
                        require('mmSideNavV.php');
                    ?>
                </div>

                <div class="col right80">
                    <div>
                        <h2>Saved Successfully</h2>
                    </div>
                    <div class="contentForm">
                        <form  method="POST">
                            <?Php
                                $batch = $_SESSION['batch_no'];
                                $degree = $_SESSION['degree_id_new'];
                            ?>
                            <button class="subbtn" type="submit" name="display-stu-list" ><a href="mmMarkMahapolaStudentsListV.php">Add Another</a></button>
                            <button type="submit" class="cancelbtn">
                                    <a href="mmHomeV.php">Exit</a>
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