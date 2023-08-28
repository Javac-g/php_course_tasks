<!DOCTYPE html>
<html>
<head>
<style>
  body {
    /* Add any desired body styling here */
  }

  .even {
    color: green;
  }

  .odd {
    color: red;
  }

  .grid {
    display: grid;
    grid-template-columns: repeat(10, 1fr); /* 10 columns per row */
    grid-gap: 5px; /* Gap between cells */
  }
</style>
</head>
<body>
<div class="grid">
  <?php
  for ($x = 1; $x <= 1000; $x++) {
    echo "<table><tr>";

    for ($i = 1; $i <= 10; $i++) {
      $number = ($x - 1) * 10 + $i; // Calculate the current number
      if ($number > 1000) {
        break; // Stop when we exceed 1000
      }

      if ($i == 1) {
        echo "<td class='odd'>$number</td>";
        continue;
      }

      $class = $number % 2 == 0 ? "even" : "odd";
      echo "<td class='$class'>$number</td>";
    }

    echo "</tr></table>";
  }
  ?>
</div>
</body>
</html>
