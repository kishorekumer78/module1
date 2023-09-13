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
        <h1>Weather Report</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="temperature" class="form-label">Enter Temperature (in Celsius)</label>
                <input type="number" class="form-control" id="temperature" name="temperature" required>
            </div>
            <button type="submit" class="btn btn-primary">Get Weather Report</button>
        </form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
 // Get the user's input temperature
 $temperature = $_POST["temperature"];

 // Check temperature range and display appropriate message
 if ($temperature <= 0) {
  echo '<div class="alert alert-danger mt-3">It\'s freezing!</div>';
 } elseif ($temperature > 0 && $temperature < 20) {
  echo '<div class="alert alert-info mt-3">It\'s cool.</div>';
 } else {
  echo '<div class="alert alert-success mt-3">It\'s warm.</div>';
 }
}
?>
    </div>
</body>
</html>