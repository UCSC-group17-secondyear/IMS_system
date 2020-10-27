<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Select Scheme</title>
        <div class="sansserif">
                
                    <ul class="breadcrumbs">
                        <li><a href="memHomeV.php">Home</a></li>
                        <li><a href="memRenewMembershipV.php">Renew Membership</a></li>
                        <li>Select Scheme</li>
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
                        <div class="row">
                            <div class="col-25">
                                <label for=""></label>
                            </div>
                            <div class="col-75">
                                <select name="scheme" id="">
                                    <option value="">Select Scheme</option>
                                    <option value="scheme1">Scheme 1</option>
                                    <option value="scheme2">Scheme 2</option>
                                    <option value="scheme3">Scheme 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                        <br><br>

                        <a href="memCurrentMemberDetailsV.php"><button class="mainbtn" type="submit" name="">OK</button></a><br>
                    </div>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>