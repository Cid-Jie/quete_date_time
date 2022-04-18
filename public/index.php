<?php

$destinationTime = new DateTime();
$destinationTime->setDate(2060, 8, 20);
$destinationTime->setTime(2, 30);
//echo 'Destination final time : ' . $destinationTime->format("m/d/y a H:i").'<br>';

$presentTime = new DateTime();
//echo 'Present time : '. $presentTime->format("m/d/y a H:i").'<br>';

$interval = $presentTime->diff($destinationTime);
//echo $interval->format('Elapsed time between dates : %Y years %M month %D days %H hours %m minutes').'<br>';

$yearsInMinutes = $interval->format("%Y")*525600;
$monthsInMinutes = $interval->format("%M")*1440*31;
$daysInMinutes = $interval->format("%D")*1440;
$hoursInMinutes = $interval->format("%H")*60;
$minutes = $interval->format("%m");

$intervalInMinutes = $yearsInMinutes + $monthsInMinutes + $daysInMinutes + $hoursInMinutes + $minutes;
//echo ($intervalInMinutes).'<br>';

for ($i=0; $i<$intervalInMinutes; $i++){
    while($intervalInMinutes > 0){
        $i++;
        $intervalInMinutes -= 10000;
    }
}
//echo $i.'<br>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retour vers le futur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
      <h1 class="text-center mt-5 mb-5">Retour vers le futur</h1>
      <table class="table w-50">
        <thead>
          <tr>
            <th></th>
            <th>Mon-Day-Year - Hr-Min</th>
          </tr>
        </thead>
        <tbody>
          <tr class="table-active">
            <td>Destination time</td>
            <td><?=$destinationTime->format("m - d - y a H : i")?></td> 
          </tr>
          <tr class="table-primary">
            <td>Present time</td>
            <td><?=$presentTime->format("m - d - y a H : i")?></td>
          </tr>
          <tr class="table-dark">
            <td>Elapsed time</td>
            <td><?= $interval->format('%Y y %M m %D d %H h %m mn')?></td>
          </tr>
          <tfoot>
            <td>You need <?= $i ?> number of oil liter.</td>
          </tfoot>
    </div>
</body>
</html>