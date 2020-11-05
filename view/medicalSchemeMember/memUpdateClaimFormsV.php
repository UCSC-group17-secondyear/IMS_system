<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Update Claim Form</title>
    <div class="sansserif">    
            
                <ul class="breadcrumbs">
                    <li><a href="memHomeV.php">Home</a></li>
                    <li>Update Claim Form</li>
                </ul>
            
        <div class="row">
            <div class="col left20">
                <?php 
                    require('memSideNavV.php');
                ?>
            </div>
            
            <div class="col right80">
                <div>
                    <h2>Update Claim Forms</h2>
                </div>

                <div class="contentForm">
                    <table id="tableStyle">
                        <tr>
                            <th id="">S/O</th>
                            <th id="">Claim Form No</th>
                            <th id="">Update</th>
                            <th id="">Delete</th>
                        </tr>
                        <?php echo $_SESSION['claim_form_no']; ?>
                    </table>
                </div>

            </div>
        </div>
    </div>
</main>

<?php
    require_once('../basic/footer.php');
?>