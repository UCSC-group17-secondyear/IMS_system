<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Form List</title>
    <div class="sansserif">
            <ul class="breadcrumbs">
                <li><a href="memHomeV.php">Home</a></li>
                <li class="active">Form List</li>
            </ul>
            
            <div class="row">
                <div class="col left20">
                    <?php
                        require 'memSideNavV.php';
                    ?>
                </div>
                
                <div class="col right80">
                    <div>
                        <h2>Claim Form List</h2>
                    </div>
                    
                    <table id="tableStyle">
                        <tr>
                            <th id="">S/O</th>
                            <th id="">Claim Form No</th>
                            <th id=""></th>
                        </tr>

                        <?php echo $_SESSION['claim_form_no']; ?>
                    </table>
                </div>
            </div>
    </div>
</main>

<?php
    require_once('../basic/footer.php');
?>