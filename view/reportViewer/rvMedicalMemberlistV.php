<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Medical Scheme Member List</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li class="active">Medical Scheme Member List</li>
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
                <div class="contentForm">
                    <form action="" method="post">
                    
                    <div class="row">
                        <div class="col-25">
                            <label for="">Enter Initials</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for a member..." name="member_ini" required>
                        </div>
                    </div>
                        <!-- <button class="mainbtn" formaction="../../controller/claimFormReferenceController.php?user_id=<?php // echo $_SESSION['userId'] ?>" type="submit" name="claim_form_no-submit">Display Form</button> -->
                    </form>
                </div>
                <table id="tableStyle">
                    <tr>
                        <th>Employee ID</th>
                        <th>Initials</th>
                        <th>Surname</th>
                        <th>Department</th>
                        <th>Health Condition</th>
                        <th>Civil Status</th>
                        <th>Scheme</th>
                        <th>Member Type</th>
                    </tr>
                    <?php echo $_SESSION['medical_members'] ?>
                </table>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("tableStyle");
            tr = table.getElementsByTagName("tr");
            
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</main>

<?php
    require '../basic/footer.php';
?>