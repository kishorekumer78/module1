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
        <h1>Even/Odd Number Checker</h1>
        <form method="post" action="">
            <div class="mb-3">
                <label for="number" class="form-label">Enter a number:</label>
                <input type="number" class="form-control" id="number" name="number" required>
            </div>
            <button type="submit" class="btn btn-primary">Check</button>
        </form>

        <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $number = $_POST["number"];

            
            $result = ($number % 2 == 0) ? "Even" : "Odd";

            
            echo "<div class='mt-3 alert alert-success'>The number $number is $result.</div>";
        }
        ?>

    </div>
</body>
</html>