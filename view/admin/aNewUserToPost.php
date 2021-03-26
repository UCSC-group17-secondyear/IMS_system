<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="aUpdateUserPost.php">Update user of a Post</a></li>
            <li class="active">Assign a new user</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Assign a new user</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/adminControllers/managePostsC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label>Selected the post</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="post_name" disabled <?php echo 'value="'.$_SESSION['post_name'].'"' ?> /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Previous User</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="prev_empid" disabled <?php echo 'value="'.$_SESSION['empid'].'"' ?> /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Select new user</label>
                            </div>
                            <div class="col-75">
                                <select name = "empid">
                                    <?php echo $_SESSION['users_list']; ?>
                                </select>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="updateUser-submit">Enter</button>
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