<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Degrees</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">Degrees</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require '../admin/aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Degrees List</h2>
                </div>

                <table id="tableStyle">
                    <tr>
                        <th>Degree Name</th>
                        <th>Degree Code</th>
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