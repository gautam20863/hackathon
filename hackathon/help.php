<?php

require "header.php";

?>
<main>
  <div>
    <section>
      <div class="form-wrapper2">
        <h1>HELP</h1>
        
        <form action="includes/help.inc.php" method="post"><br>
           <input type="text" name="name" placeholder="Name"><br>
           <input type="text" name="mail" placeholder="E-mail"><br>
           <input type="text" name="phone" placeholder="Phone no"><br>
           <input type="text" name="address" placeholder="Address"><br>
           <input type="text" name="desc" placeholder="Brief-Description of food"><br>
           <input type="text" name="quantity" placeholder="Quantity of food items"><br>

           <button class="help" type="submit" name="help-submit">Help</button>
        </form>  
      </div>  
    </section>
  </div>
</main>

<?php

require "footer.php";

?>