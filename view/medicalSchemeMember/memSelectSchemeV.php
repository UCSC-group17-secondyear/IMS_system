<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Select Scheme</title>
        <div class="sansserif">
                
                    <ul class="breadcrumbs">
                        <li><a href="memHomeV.php">Home</a></li>
                        <li><a href="memRenewMembershipV.php?user_id=<?php echo $_SESSION['userId'] ?>">Renew Membership</a></li>
                        <li class="active">Select Scheme</li>
                    </ul>
               
            <div class="row">
                    <div class="col left20">
                        <?php 
                            require('memSideNavV.php');
                        ?>
                    </div>

                <div class="col right80">
                        <div>
                            <h2>Select a Scheme</h2>
                        </div>

                    <div class="contentForm">
                        <form action="../../controller/memControllers/currentMemberDetailsControllerOne.php?user_id=<?php echo $_SESSION['userId']?>&scheme_name=<?php echo $_SESSION['scheme_name']?>" method="POST">
                            <div class="row">
                                <div class="col-25">
                                    <label for="">Select Scheme</label>
                                </div>
                                <div class="col-75">
                                    <select name="scheme_name" id="" required>
                                        <option value=""><?php echo $_SESSION['schemeName'] ?></option>
                                    </select>
                                </div>
                            </div>

                            <button class="subbtn" type="submit" name="submit-scheme">Submit</button>
                            <button class="cancelbtn" type="submit" name="">
                                <a href="memRenewMembershipV.php">Back</a>
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