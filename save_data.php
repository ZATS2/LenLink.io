<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $userInput = $_POST["user_input"];
    $file = fopen("user_input.txt", "w");
    fwrite($file, $userInput);
    fclose($file);
    echo "Data saved successfully!";
}
?>
