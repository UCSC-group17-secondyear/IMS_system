<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Search Form</title>
    <div class="sansserif">   
            
                <ul class="breadcrumbs">
                    <li><a href="memHomeV.php">Home</a></li>
                    <li class="active">Search By Reference</li>
                </ul>
            
        <div class="row">
            <div class="col left20">
                <?php 
                    require('memSideNavV.php');
                ?>
            </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            <div class="col right80">
                <div>
                    <h2>Search by Reference Number</h2>
                </div>

                <div class="contentForm">
                <form action="../../controller/claimFormReferenceController.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">
                
                <div class="row">
                    <div class="col-25">
                        <label for="">Enter Reference Number</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="claim_form_no" required> <br>
                    </div>
                </div>

                    <button class="mainbtn" type="submit" name="claim_form_no-submit">Display Form</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require_once('../basic/footer.php');
?>