<!DOCTYPE html>
<html>
<head>
    <title>Group 5</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        form {
            max-width: 400px;
            width: 100%;
            margin-bottom: 20px;
            padding: 15px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
            box-sizing: border-box;
        }

        .form-group {
            display: flex;
            margin-bottom: 15px;
            align-items: center;
        }

        .form-group label {
            width: 80px;
            font-weight: bold;
        }

        .form-group input {
            flex: 1;
            padding: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 7px 15px;
            margin-left: 80px;
        }

        .output {
            max-width: 400px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .box {
            width: 100%;
            box-sizing: border-box;
            background: white;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
            text-align: center;
        }

        .title {
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<h2>Innovative Task</h2>

<form method="post">
    <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" required>
    </div>
    <div class="form-group">
        <label>Age:</label>
        <input type="number" name="age" required>
    </div>
    <div class="form-group">
        <label>Num1:</label>
        <input type="number" name="num1" required>
    </div>
    <div class="form-group">
        <label>Num2:</label>
        <input type="number" name="num2" required>
    </div>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    echo "<div class='output'>";

    echo "<div class='box'>";
    echo "<div class='title'>Simple loop</div>";
    for ($i = 3; $i >= 1; $i--) {
        echo "$i<br>";
    }
    echo "</div>";

    echo "<div class='box'>";
    echo "<div class='title'>Date function</div>";
    echo date("Y-m-d"); // Displays current date only
    echo "</div>";

    echo "<div class='box'>";
    echo "<div class='title'>The variables inputted</div>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Age: " . htmlspecialchars($age) . "<br>"; // Age is now aligned due to flexbox
    echo "Num1: " . htmlspecialchars($num1) . "<br>";
    echo "Num2: " . htmlspecialchars($num2);
    echo "</div>";

    // 🔹 STRING BOX
    echo "<div class='box'>";
    echo "<div class='title'>Strings</div>";
    echo "The length of your name '" . htmlspecialchars($name) . "' is " . strlen($name);
    echo "</div>";

    echo "<div class='box'>";
    echo "<div class='title'>If-else for the age classification</div>";
    if ($age >= 18) {
        echo "Your age is $age, thats makes youss an Adult.";
    } else {
        echo "Your age is $age, that means your still a minor.";
    }
    echo "</div>";

    echo "<div class='box'>";
    echo "<div class='title'>Operators using inputted numbers</div>";
    echo "Addition: " . ($num1 + $num2) . "<br>";
    echo "Subtraction: " . ($num1 - $num2) . "<br>";
    echo "Multiplication: " . ($num1 * $num2) . "<br>";
    // Add a check for division by zero
    if ($num2 != 0) {
        echo "Division: " . ($num1 / $num2);
    } else {
        echo "Division: Cannot divide by zero.";
    }
    echo "</div>";

    // 🔹 FINAL MESSAGE BOX
    echo "<div class='box'><b>That's all. Thank you!</b></div>";

    echo "</div>";
}
?>

</body>
</html>