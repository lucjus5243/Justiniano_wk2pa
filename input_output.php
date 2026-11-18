
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lucas Justiniano Wk 2 Performance Assessment</title>
</head>
<body>

    <h1>Lucas Justiniano Wk 2 Performance Assessment</h1>

    <!-- Form for collecting user information -->
    <form method="post" action="">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name">
        <br><br>

        <label for="birthdate">Enter your birthdate:</label>
        <input type="text" id="birthdate" name="birthdate">
        <br><br>

        <label for="color">Enter your favorite color:</label>
        <input type="text" id="color" name="color">
        <br><br>

        <label for="place">Enter your favorite place to visit:</label>
        <input type="text" id="place" name="place">
        <br><br>

        <label for="nickname">Enter your nickname:</label>
        <input type="text" id="nickname" name="nickname">
        <br><br>

        <input type="submit" value="Submit Values">
    </form>

    <?php
    // Check whether the form has been submitted.
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        // Collect values entered into the form.
        $name = trim($_POST["name"] ?? "");
        $birthdate = trim($_POST["birthdate"] ?? "");
        $color = trim($_POST["color"] ?? "");
        $place = trim($_POST["place"] ?? "");
        $nickname = trim($_POST["nickname"] ?? "");
       
        // Display the name or a message if it was left blank.
        if ($name !== "") {
            echo "<p>The name you entered is: " .
                htmlspecialchars($name, ENT_QUOTES, "UTF-8") . "</p>";
        } else {
            echo "<p>You didn't enter a name!</p>";
        }

        // Display the birthdate.
        if ($birthdate !== "") {
            echo "<p>The birthdate you gave is: " .
                htmlspecialchars($birthdate, ENT_QUOTES, "UTF-8") . "</p>";
        } else {
            echo "<p>You didn't enter a birthdate!</p>";
        }

        // Display the favorite color.
        if ($color !== "") {
            echo "<p>You said your favorite color is: " .
                htmlspecialchars($color, ENT_QUOTES, "UTF-8") . "</p>";
        } else {
            echo "<p>You didn't enter a favorite color!</p>";
        }

        // Display the favorite place.
        if ($place !== "") {
            echo "<p>You said your favorite place is: " .
                htmlspecialchars($place, ENT_QUOTES, "UTF-8") . "</p>";
        } else {
            echo "<p>You didn't enter a favorite place!</p>";
        }

        // Display the nickname.
        if ($nickname !== "") {
            echo "<p>You said your nickname is: " .
                htmlspecialchars($nickname, ENT_QUOTES, "UTF-8") . "</p>";
        } else {
            echo "<p>You didn't enter a nickname!</p>";
        }
    }
    ?>

</body>
</html>
