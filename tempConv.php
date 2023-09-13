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
        <h1 class="text-center">Temperature Converter</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST">
                    <div class="mb-3">
                        <label for="temperature" class="form-label">Enter Temperature:</label>
                        <input type="number" name="temperature" id="temperature" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Conversion Direction:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="conversion" id="celsiusToFahrenheit" value="celsiusToFahrenheit" required>
                            <label class="form-check-label" for="celsiusToFahrenheit">
                                Celsius to Fahrenheit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="conversion" id="fahrenheitToCelsius" value="fahrenheitToCelsius">
                            <label class="form-check-label" for="fahrenheitToCelsius">
                                Fahrenheit to Celsius
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Convert</button>
                </form>
            </div>
        </div>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $temperature = floatval($_POST["temperature"]);
 $conversion  = $_POST["conversion"];

 $result = 0;
 $unit1  = "";
 $unit2  = "";

 if ($conversion === "celsiusToFahrenheit") {

  $result = ($temperature * 9 / 5) + 32;
  $unit1  = "Celsius";
  $unit2  = "Fahrenheit";
 } elseif ($conversion === "fahrenheitToCelsius") {

  $result = ($temperature - 32) * 5 / 9;
  $unit1  = "Fahrenheit";
  $unit2  = "Celsius";
 }

 echo "<div class='mt-4 alert alert-success text-center'>{$temperature} {$unit1} is {$result} {$unit2}</div>";
}
?>
    </div>

</body>
</html>