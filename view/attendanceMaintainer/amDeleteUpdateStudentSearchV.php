<?php
    require '../basic/topnav.php';
?>

<main>
    <ul class="breadcrumbs">
        <li><a href="amHomeV.php">Home</a></li>
        <li class="active">Update or Remove Students</li>
    </ul>
    <div class="row" style="margin-bottom: 4%;" >
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Update or Remove Students</h2>
            </div>
            <div class="contentForm">
                <form action="../../controller/amControllers/manageStudentsC.php" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Enter Student Index Number</label>
                        </div>
                        <div class="col-75">
                            <select name="index_no" id="index_no">
                                <?php echo $_SESSION['stdIndexList'] ?>
                            </select>
                        </div>
                    </div>
                    <button class="subbtn" type="submit" name="deleteupdateStudent-submit">Select</button>
                    <button class="cancelbtn" type="submit" name="cancel-submit">
                        <a href="amHomeV.php">Cancel</a> 
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>