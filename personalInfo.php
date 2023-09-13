<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</head>
<body>
    <a class="btn btn-primary" href="/module1">Back</a>
<?php

$name         = "Kishore Kumer";
$age          = 12;
$country      = "Bangladesh";
$introduction = "Hello, I'm Kishore Kumer. I am am preparing myself as full stack developer. I enjoy coding and traveling.";

// Display personal information using echo statements
echo "<h1>Personal Information</h1>";
echo "<p><strong>Name:</strong> $name</p>";
echo "<p><strong>Age:</strong> $age</p>";
echo "<p><strong>Country:</strong> $country</p>";
echo "<p><strong>Introduction:</strong> $introduction</p>";
?>
</body>
</html>