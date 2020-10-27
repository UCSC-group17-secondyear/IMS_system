<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Enter Subjects' Details</title>

    <ul class="breadcrumbs">
        <li><a href="amHomeV.php">Home</a></li>
        <li>Enter Subjects' Details</li>
    </ul>

    <div class="row">
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Subject Details</h2>
            </div>
            <div class="contentForm">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Enter Subject Code</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="subject_code" placeholder="Subject Code" required/> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Enter Subject Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="subject_name" placeholder="Subject Name" required/> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Enter Description</label>
                        </div>
                        <div class="col-75">
                            <input type="textarea" name="description" placeholder="Description" required/> <br>
                        </div>
                    </div>
                    <button class="mainbtn" type="submit" name="enterSubject-submit">Enter Subject</button>
                </form>
                <form>
                    <button class="cancelbtn" type="submit" name="cancel-submit">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>