<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Mahapola Ineligibility List</title>
        <div class="sansserif">
            <ul class="breadcrumbs">
                <li><a href="rvHomeV.php">Home</a></li>
                <li><a href="../../controller/rvControllers/mahapolaListController.php?btn=11">View Another List</a></li>
                <li class="active">Mahapola Ineligibility List</li>
            </ul>
        
            <div class="row" style="margin-bottom: 4%;">
                <div class="col left20">
                    <?php 
                        require('rvSideNavV.php');
                    ?>
                </div>

                <div class="col right80">
                    <div>
                        <h2>Mahapola Ineligibility Student List</h2>
                    </div>

                    <div class="contentForm">
                        <form action="../../controller/rvControllers/mahapolaListController.php" method="post">
                        
                            <div class="row">
                                <div class="col-25">
                                    <label for="">Enter Student Index</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Student..." name="nominated_stu" >
                                </div>
                            </div>

                            <div class="">
                                <table id="tableStyle">
                                    <tr>
                                        <th>Index No</th>
                                        <th>Registration No</th>
                                        <th>Name</th>
                                    </tr>

                                    <?php echo $_SESSION['non_eligible_stu']; ?>
                                </table>
                            </div>

                            <button class="subbtn" type="submit" name="view-mahapola-report" >View Another</button></a>
                            <button type="submit" class="cancelbtn">
                                <a href="rvHomeV.php">Exit</a>
                            </button>
                            <button class="mainbtn" type="submit" name="inEligiblePDF" >Generate PDF</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function myFunction() {
                // Declare variables
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("tableStyle");
                tr = table.getElementsByTagName("tr");

                // Loop through all table rows, and hide those who don't match the search query
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
</main>

<?php
    require_once('../basic/footer.php');
?>