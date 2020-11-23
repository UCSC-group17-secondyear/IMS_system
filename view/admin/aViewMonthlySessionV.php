<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="aViewSessionPerMonthV.php">View Monthly Sessions</a></li>
            <li class="active">Monthly sessions</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Monthly session details</h2>
                </div>

                <table id="tableStyle" class="mytable" style="margin-left: 30%;" >
                    <tr>
                        <th>Subject</th>
                        <th>Year</th>
                        <th>Month</th>
                        <th>Session type</th>
                        <th>Number of sessions</th>
                    </tr>
                    <?php echo $_SESSION['monthlySession']; ?>
                </table>
                <button class="subbtn">
                    <a href="aViewSessionPerMonthV.php">View another session</a>
                </button>
                <button class="cancelbtn">
                    <a href="aHomeV.php">Exit</a>
                </button>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>