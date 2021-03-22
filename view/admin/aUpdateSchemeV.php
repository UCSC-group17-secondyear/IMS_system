<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update a scheme</title>
    
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">Update a scheme</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update a scheme</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/adminControllers/manageSchemesC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label>Scheme Name</label>
                            </div>
                            <div class="col-75">
                                <select name="schemeName" id="">
                                    <?php echo $_SESSION['schemes'] ?>
                                </select>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="getscheme-submit">Get Scheme Details</button>
                        <button class="cancelbtn" type="submit">
                            <a href="aHomeV.php">Cancel</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>