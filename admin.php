<?php   
    require("header.php");
?>
    <div class="mt-4 p-5 bg-primary text-white rounded">
  <h1>Welcome to Admin Page</h1>
  <p></p>
</div>

<div class="container">
    <form action = "controller.php" method = "post">
        <label for ="">
            Name:<input type="text" class ="form form-control"name="name">
        </label>
<br>
        <label for ="">
            Contact:<input type="text" class ="form form-control"name="contact">
        </label>
<br>
<label for ="">
            Address:<input type="text" class ="form form-control" name="address">
        </label>
<button type="submit" class="btn btn-primary">Save</button>



    </form>



</div>








<?php
require('footer.php');
?>

