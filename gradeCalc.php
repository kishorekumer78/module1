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
        <h1>Grade Calculator</h1>
        <form method="post">
            <div class="mb-3">
                <label for="score1" class="form-label">Test Score 1:</label>
                <input type="number" class="form-control" id="score1" name="score1" required>
            </div>
            <div class="mb-3">
                <label for="score2" class="form-label">Test Score 2:</label>
                <input type="number" class="form-control" id="score2" name="score2" required>
            </div>
            <div class="mb-3">
                <label for="score3" class="form-label">Test Score 3:</label>
                <input type="number" class="form-control" id="score3" name="score3" required>
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

 $score1 = $_POST["score1"];
 $score2 = $_POST["score2"];
 $score3 = $_POST["score3"];

 // Calculate the average score
 $average = ($score1 + $score2 + $score3) / 3;

 if ($average >= 80) {
  $grade = "A+";
 } elseif ($average >= 70) {
  $grade = "A";
 } elseif ($average >= 60) {
  $grade = "A-";
 } elseif ($average >= 50) {
  $grade = "B";
 } elseif ($average >= 40) {
  $grade = "C";
 } else {
  $grade = "F";
 }

 echo "<div class='mt-3'><strong>Average Score:</strong> $average</div>";
 echo "<div class='mt-3'><strong>Letter Grade:</strong> $grade</div>";
}
?>
    </div>
</body>
</html>