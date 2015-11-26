<?php

$name = $_POST["name"];

if (empty($name)) {
    echo "Name is required";
  } else {
    echo "thanks" + $name;
  }
   ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
       <input name="name" />
       <input type="Submit" />
       
   </form>