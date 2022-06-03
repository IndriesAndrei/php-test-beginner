<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PHP Beginner test</title>
</head>
<body>
    <main class="container">
        <h1>Body Mass Calculator</h1>
        <form method="POST" action="">
            <div class="form-group mb-3">
                <label for="weight" class="m-1">Weight (in kilograms): </label>
                <input class="form-control" type="number" id="weight" name="weight" placeholder="Your weight in kilograms.." value="<?php echo isset($_POST['weight']) ? $_POST['weight'] : '' ?>"  />
            </div>
    
            <div class="form-group mb-3">
                <label for="height" class="m-1">Height (in centimeters):</label>
                <input class="form-control" type="number" id="height" name="height" placeholder="Your height in centimeters.." value="<?php echo isset($_POST['height']) ? $_POST['height'] : '' ?>"  />
            </div>
    
            <input type="submit" id="submit" name="submit" class="btn btn-primary" value="Calculate" />
        </form>

        <p class="alert alert-success mt-2">Your Body Mass Index is:
            <?php 
              if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $height = (int)$_POST['height'];
                $weight = (int)$_POST['weight'];


                $BMI = ($weight / $height / $height) * 10000;

                echo number_format($BMI, 2);
              }
            ?>
        </p>
    </main>
</body>
</html>