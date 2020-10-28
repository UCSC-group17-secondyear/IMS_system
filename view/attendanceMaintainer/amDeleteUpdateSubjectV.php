<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Enter Subject Details</title>

    <ul class="breadcrumbs">
        <li><a href="amHomeV.php">home</a></li>
        <li>Enter Subject Details</li>
    </ul>

    <div class="row">
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Subjects' Details</h2>
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

                    <button class="subbtn" type="submit" name="updateSubject-submit">Save Updates</button>
                    <button class="cancelbtn" type="submit" name="deleteSubject-submit">Remove Subject</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>