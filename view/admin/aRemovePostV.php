<?php
    require '../basic/topnav.php';
?>

<main>
   <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">Remove a post</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Remove a post</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/adminControllers/managePostsC.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label>Select Post</label>
                            </div>
                            <div class="col-75">
                                <select name="post_name" id="">
                                    <option value="">Select Post</option>
                                    <?php echo $_SESSION['postNamesList'] ?>
                                </select>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="removePost-submit">Remove</button>
                        <button class="cancelbtn">
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