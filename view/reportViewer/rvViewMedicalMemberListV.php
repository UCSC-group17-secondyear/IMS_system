<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Medical Member List</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li>View Medical Member List</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'rvSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>View Medical Member List</h2>
                </div>

                <div class="contentForm">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-25">
                              <label>Select a Scheme</label>
                            </div>
                            <div class="col-75">
                                <select name="scheme" id="">
                                    <option value="">Select a Scheme</option>
                                    <option value="scheme1">Scheme 1</option>
                                    <option value="scheme2">Scheme 2</option>
                                    <option value="scheme3">Scheme 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Member Type</label>
                            </div>
                            <div class="col-75">
                                <select name="memberType" id="">
                                    <option value="">Select a Member Type</option>
                                    <option value="academic">Academic</option>
                                    <option value="non-academic">Non - Academic</option>
                                    <option value="temporary">Temporary</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <form action="" method="post">
                        <a href="rvMedicalMemberlistV.php"><button class="subbtn" type="submit" name="viewMedicalMemberlist-submit">Select</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>