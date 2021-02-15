<?php
    require '../basic/topnav.php';
?>

<main>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li><a href="amEnterUpdateAttendaceSelectV.php">Enter or update attendance</a></li>
            <li class="active">Update attendance</li>
        </ul>

        <div class="row" style="margin-bottom: 4%;" >
            <div class="col left20">
                <?php
                    require 'amSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update attendance</h2>
                </div>
                <div class="contentForm">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label for="">Enter Student Index Number</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for a Student..." name="Index_no" required>
                            </div>
                        </div>
                    </form>
                </div>
                <form action="../../controller/amControllers/manageAttendanceC.php" method="post">
                    <table id="tableStyle" class="mytable" style="margin-left: 30%;" >
                        <tr>
                            <th>Student Index</th>
                            <th>Initials</th>
                            <th>Last Name</th>
                            <th>Presence</th>
                        </tr>
                        <?php echo $_SESSION['ds_students'] ?>
                    </table>

                    <button class="subbtn" type="submit" name="saveattendance-submit">Save Attendance</button>
                    <button class="cancelbtn"><a href="amHomeV.php">Cancel</a></button>
                </form>
                <button onclick="topFunction()" id="myTopBtn" title="Go to top"><i class="fa fa-arrow-circle-up"></i> Top</button>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>

<script>
    function myFunction() {
        $('#checked').prop('checked', true);

        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("tableStyle");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
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

    // function check() {
    //     var checkboxes = document.getElementsByName('checked[]');
    //     checkboxes = [...checkboxes];
    //     for (var i = 0; i < checkboxes.length; i++) {
    //         checkboxes[i].checked = true
    //     }
    // }

    // function un_check() {
    //     var checkboxes = document.getElementsByName('unchecked[]');
    //     checkboxes = [...checkboxes];
    //     for (var i = 0; i < checkboxes.length; i++) {
    //         checkboxes[i].checked = false;
    //     }
    // }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>