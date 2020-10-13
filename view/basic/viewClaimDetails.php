<main>
    <link rel="stylesheet" type="text/css" href="../assests/css/main.css">

    <div class="content">
        <div>
            <h3>Scheme Details</h3>
        </div>

        <button type="button" class="collapsible">Scheme 1</button>
        <div class="collapse">
          <p>Contribution for the period of one year is RS.2,580/-</p>
          <p>Monthly deduction from your salary will be RS.215/-</p>
        </div>

        <button type="button" class="collapsible">Scheme 2</button>
        <div class="collapse">
          <p>Contribution for the period of one year is RS.10,800/-</p>
          <p>Monthly deduction from your salary will be RS.900/-</p>
          <p>Only for Individual Staff Members</p>
        </div>

        <button type="button" class="collapsible">Scheme 3</button>
        <div class="collapse">
          <p>Contribution for the period of one year is RS.1,440/-</p>
          <p>Monthly deduction from your salary will be RS.120/-</p>
        </div>

        <div>
            <h3>Eligibility Conditions: </h3>
        </div>

        <button type="button" class="collapsible">Permanent staf</button>
        <div class="collapse">
          <p>Could apply immediately with the appointment for individual scheme and Family coverage only after one year of service period</p>
        </div>

        <button type="button" class="collapsible">Contract staff</button>
        <div class="collapse">
          <p>Could apply for individual scheme after six months of service and family coverage after two years of service period </p>
        </div>

        <button type="button" class="collapsible">Assignment/Temporary staff</button>
        <div class="collapse">
          <p>Could apply for individual scheme after one year of service period and not eligible for the family coverage (⃰Exception: the temporary staff those who had already obtained both individual and family coverage of scheme could re-apply for both)</p>
        </div>
    </div>

    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
          coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
              content.style.display = "none";
            } else {
              content.style.display = "block";
            }
          });
        }
    </script>
</main>