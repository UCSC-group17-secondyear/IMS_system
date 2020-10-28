<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Medical Scheme Member List</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li>Medical Scheme Member List</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'rvSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Medical Scheme Member List</h2>
                </div>

                <table id="tableStyle">
                    <tr>
                        <th>Lorem ipsum</th>
                        <th>dolor sit</th>
                        <th>amet consectetur</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                <!-- pdf generate karanna -->
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>