<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
        <a  class="btn btn-primary" href="/module1">Back</a>
        <div class="container mt-5">
        <h1>Number Comparison Tool</h1>
        <form method="post">
            <div class="form-group">
                <label for="number1">Enter the first number:</label>
                <input type="number" class="form-control" id="number1" name="number1" required>
            </div>
            <div class="form-group">
                <label for="number2">Enter the second number:</label>
                <input type="number" class="form-control" id="number2" name="number2" required>
            </div>
            <button type="submit" class="btn btn-primary">Compare</button>
        </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

 $number1 = $_POST["number1"];
 $number2 = $_POST["number2"];

 $largerNumber = ($number1 > $number2) ? $number1 : $number2;

 echo "<div class='mt-3 alert alert-success'>The larger number is: $largerNumber</div>";
}
?>

    </div>

</body>
</html>