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
    <a class="btn btn-primary" href="/module1">Back</a>
    <div class="container mt-5">
        <h1 class="mb-4">Simple Calculator</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="num1" class="form-label">Enter Number 1:</label>
                <input type="number" class="form-control" id="num1" name="num1" required>
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Enter Number 2:</label>
                <input type="number" class="form-control" id="num2" name="num2" required>
            </div>
            <div class="mb-3">
                <label for="operation" class="form-label">Select Operation:</label>
                <select class="form-select" id="operation" name="operation" required>
                    <option value="add">Addition (+)</option>
                    <option value="subtract">Subtraction (-)</option>
                    <option value="multiply">Multiplication (*)</option>
                    <option value="divide">Division (/)</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>
<?php
// PHP code for performing the calculation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $num1      = $_POST["num1"];
 $num2      = $_POST["num2"];
 $operation = $_POST["operation"];
 $result    = 0;

 switch ($operation) {
 case "add":
  $result = $num1 + $num2;
  break;
 case "subtract":
  $result = $num1 - $num2;
  break;
 case "multiply":
  $result = $num1 * $num2;
  break;
 case "divide":
  if ($num2 != 0) {
   $result = $num1 / $num2;
  } else {
   echo '<div class="alert alert-danger mt-3">Division by zero is not allowed.</div>';
  }
  break;
 }

 echo '<div class="alert alert-success mt-3">Result: ' . $result . '</div>';
}
?>

    </div>
</body>
</html>