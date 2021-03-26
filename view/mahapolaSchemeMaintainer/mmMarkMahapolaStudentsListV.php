<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Mark Mahapola Selected Students</title>
        <div class="sansserif">
            <ul class="breadcrumbs">
                <li><a href="mmHomeV.php">Home</a></li>
                <li><a href="../../controller/mmControllers/markMahapolaController.php?btn=25">View Another List</a></li>
                <li class="active">Student List</li>
            </ul>
            
            <div class="row" style="margin-bottom: 6%;">
                <div class="col left20">
                    <?php 
                        require('mmSideNavV.php');
                    ?>
                </div>

                <div class="col right80">
                    <div>
                        <h2>Student List</h2>
                    </div>

                    <div class="contentForm">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-25">
                                    <label for="">Enter Student Index</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Student..." name="" >
                                </div>
                            </div>
                        
                    
                            <div class="">
                                <table id="tableStyle">
                                    <tr>
                                        <th>Student Index</th>
                                        <th>Student Name</th>
                                        <th>View Details</th>
                                    </tr>

                                    <?php echo $_SESSION['student_list']; ?>
                                </table>
                            </div>

                        </form>
                        <form action="../../controller/mmControllers/markMahapolaController.php" method="POST">
                            <button class="subbtn" type="submit" name="view-degree-list" >View Another</button>
                            <button type="submit" class="cancelbtn">
                                <a href="mmHomeV.php">Exit</a>
                            </button>
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