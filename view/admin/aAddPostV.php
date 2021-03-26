<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">Add a post</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Add a new post</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/adminControllers/managePostsC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Post Name</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="" name="post_name" placeholder="Post name" required/><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Employee Id of the employee assigned for the post</label>
                            </div>
                            <div class="col-75">
                                <select name = "empid">
                                    <?php echo $_SESSION['users_list']; ?>
                                </select>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="addPost-submit">Add post</button>
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