<main>
    <title>Form List</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li>Forms</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require 'msmSideNavV.php';
        ?>
    </div>

    <div class="content">
            <div>
                <h3>Form List</h3>
            </div>

            <div>
                <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Enter Form Number">

                <ul id="formList">
                    <li><a href="msmFormV.php">Kamal</a></li>
                    <li><a href="msmFormV.php">Ajith</a></li>
                    <li><a href="msmFormV.php">Sunil</a></li>
                    <!-- database eken aran me list ekata danna -->
                </ul>
            </div>

            <script>
            function myFunction() {
                var input, filter, ul, li, a, i;
                input = document.getElementById("mySearch");
                filter = input.value.toUpperCase();
                ul = document.getElementById("formList");
                li = ul.getElementsByTagName("li");

                for (i = 0; i < li.length; i++) {
                    a = li[i].getElementsByTagName("a")[0];
                    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        li[i].style.display = "";
                    } else {
                        li[i].style.display = "none";
                    }
                }
            }
            </script>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>

