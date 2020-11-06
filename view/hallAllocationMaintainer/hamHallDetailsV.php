<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Hall Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li class="active">Hall Details</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'hamSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Hall Details</h2>
                </div>

                <div class="contentForm">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-25">
                              <label>Select Hall</label>
                            </div>
                            <div class="col-75">
                                <select name="hall" id="hall">
                                    <option value="">Select a Hall</option>
                                    <option value="E401">E401</option>
                                    <option value="S104">S104</option>
                                    <option value="W001">W001</option>
                                </select>
                            </div>
                        </div>
                        <button class="subbtn" type="submit" name="">
                            <a href="hamViewHallDetailsV.php">Display Details</a>
                        </button>
                        <button class="cancelbtn" type="submit">
                            <a href="hamHomeV.php">Cancel</a>
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