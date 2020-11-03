<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Session Types</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Session Types</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require '../admin/aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Session Types List</h2>
                </div>

                <table id="tableStyle">
                    <tr>
                        <th>Session Type</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </table>
                <button class="mainbtn" type="submit">
                    <a href="aHomeV.php">Back</a>
                </button>
            </div>
        </div>
    </div>
</main>

<?php
    require "../basic/footer.php";
?>