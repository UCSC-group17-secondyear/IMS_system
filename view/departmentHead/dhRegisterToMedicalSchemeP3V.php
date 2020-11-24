<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Register to Medical Scheme</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="dhHomeV.php">Home</a></li>
            <li class="active">Register to the medical scheme - Part 3</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'dhSideNavV.php';
                ?>
            </div>
            <div class="col right80">
                <div>
                    <?php
                        require '../basic/registerToMedSchemeP3V.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- <button onclick="topFunction()" id="myTopBtn" title="Go to top"><i class="fa fa-arrow-circle-up"></i> Top</button>

<script type="text/javascript">
    var mybutton = document.getElementById("myTopBtn");

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script> -->

<?php
    require '../basic/footer.php';
?>