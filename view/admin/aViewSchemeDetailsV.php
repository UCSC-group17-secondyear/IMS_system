<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Medical Scheme Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">View Medical Scheme Details</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Scheme Details</h2>
                </div>

                <div class="contentForm">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label for="">Enter Scheme Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search a scheme" name="Index_no" required>
                            </div>
                        </div>
                    </form>
                </div>

                <table id="tableStyle" class="mytable">
                    <tr>
                        <th>Scheme Name</th>
                        <th>Maximum Room Charge</th>
                        <th>Hospital Charges</th>
                        <th>Annual Premium</th>
                        <th>Gvt No Paying Ward</th>
                        <th>Gvt Child Birth Cover</th>
                        <th>Consultant Fee</th>
                        <th>Spectacles Cost</th>
                        <th>Permanent Staff (required service period)</th>
                        <th>Contract Staff (required service period)</th>
                        <th>Temporary Staff (required service period)</th>
                    </tr>
                    <?php echo $_SESSION['scheme_list']; ?>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>

<script>
    function myFunction() {
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
</script>