<?php
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["csvToUpload"]["name"]);
  $uploadOk = 1;
  $fileType = pathinfo($target_file,PATHINFO_EXTENSION);

  if($fileType != "csv") {
      echo "Sorry, only CSV files are allowed.";
      $uploadOk = 0;
  }
  if ($_FILES["csvToUpload"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
  }
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  } else {
      echo "<table>\n\n";
      $f = fopen($target_file, "r");
      while (($line = fgetcsv($f)) !== false) {
              echo "<tr>";
              foreach ($line as $cell) {
                      echo "<td>" . htmlspecialchars($cell) . "</td>";
              }
              echo "</tr>\n";
      }
      fclose($target_file);
      echo "\n</table>";
  }
?>
