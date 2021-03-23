<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Enter Students' Details</title>

    <ul class="breadcrumbs">
         <li><a href="amHomeV.php">Home</a></li>
            <li><a href="amFetchStudentV.php">Remove Non-mandatory Subjects</a></li>
            <li class="active">Remove Subjects</li>
    </ul>

    <div class="row"  style="margin-bottom: 1.5%;" >
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Student's Non-Mandatory Subjects</h2>
            </div>
            <div class="contentForm">
                <form action="../../controller/amControllers/manageStudentsC.php" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Student's Index Number</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="index_no" disabled <?php echo 'value="'.$_SESSION['index_no'].'"' ?> /><br>
                        </div>
                    </div>

                    <table id="tableStyle" class="mytable">
                        <tr>
                            <th>Subject Code</th>
                            <th>Subject Name</th>
                            <th>Remove</th>
                        </tr>
                        <?php echo $_SESSION['nonMandatorySubList'];  ?>
                    </table>

                    <button class="subbtn" type="submit" name="removeNonMandatory-submit">Remove selected subjects
                    </button>
                    <button class="cancelbtn" type="submit" name="cancel-submit">
                        <a href="amHomeV.php">Exit</a>
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>