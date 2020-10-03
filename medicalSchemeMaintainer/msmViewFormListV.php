<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form List</title>
    <link rel="stylesheet" href="../assests/css/main.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <!-- <div class="nameLogo"> -->
            <img src="../assests/img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="msmHomeV.php">Home</a>
                <a href="#">Logout</a>
            </div>
        </div>
        <div class="header">breadcrums</div>
        <div class="side-nav"> 
            <!-- <div> -->
                <h2>Medical Scheme Maintainer</h2>
            <!-- </div> -->

            <!-- <div> -->
                <a href="msmViewMedicalMemberListV.php"><button type="submit" name="" class="button">View Medical Member List</button></a><br>
                <a href="msmRemoveMemberV.php"><button type="submit" name="" class="button">Remove Member</button></a><br>
                <a href="msmViewClaimDetailsV.php"><button type="submit" name="" class="button">View Claim Details</button></a><br>
                <a href="msmViewFormsV.php"><button type="submit" name="" class="button">View Forms of the Medical Scheme</button></a><br>
                <a href="msmViewSchemeDetailsV.php"><button type="submit" name="" class="button">View Medical Scheme Details</button></a><br>
                <a href="msmRegisterToMedicalSchemeV.php"><button type="submit" name="" class="button">Register to the Staff Medical Scheme</button></a><br>
            <!-- </div> -->
        </div>
        <!-- <div class="banner">Banner</div> -->
        <div class="content">
                        <div>
                        <h2>Form List</h2>
                    </div>

                    <div>
                        <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Enter Form Number" >

                        <ul id="formList">
                            <li><a href="msmFormV.php">Kamal</a></li>
                            <li><a href="msmFormV.php">Ajith</a></li>
                            <li><a href="msmFormV.php">Sunil</a></li>
                            <!-- database eken aran me list ekata danna -->
                        </ul>
                    </div>

                    <script>
                        function myFunction(){
                            var input, filter, ul, li, a, i;
                            input = document.getElementById("mySearch");
                            filter = input.value.toUpperCase();
                            ul = document.getElementById("formList");
                            li = ul.getElementsByTagName("li");

                            for (i = 0; i < li.length; i++) {             
                                a = li[i].getElementsByTagName("a")[0];
                                if(a.innerHTML.toUpperCase().indexOf(filter)>-1){
                                    li[i].style.display = "";
                                }
                                else{
                                    li[i].style.display = "none";
                                }
                            }
                        }
                    </script>
        </div>
        <div class="footer"><?php require "../footer.php"; ?></div>
    </div>
</body>
</html>