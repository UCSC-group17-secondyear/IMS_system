<?php
    require '../basic/topnav.php';
?>

<main> <ul class="breadcrumbs">
        <li><a href="amHomeV.php">Home</a></li>
        <li class="active">Update or Delete Subjects</li>
    </ul>

    <div class="row" style="margin-bottom: 4%;" >
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Update or Delete Subjects</h2>
            </div>
            <div class="contentForm">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Enter subject code</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="subject_code" placeholder="Subject Code" required/> <br>
                        </div>
                    </div>
                    <button class="subbtn" type="submit" name="deleteupdateSubject-submit">
                        <a href="amDeleteUpdateSubjectV.php">Select</a>
                    </button>
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