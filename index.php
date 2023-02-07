<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

// VALUE OF SELECT PARKING
$select_parking = $_GET['select-parking'] ?? '';

// FLAG ALPHA
$has_parking = false;

if (array_key_exists("parking", $hotels) ){
    $has_parking = true;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
     <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="container">

<form action="" method="GET">
    <h4>Filtra gli Hotel con parcheggio o senza</h4>
    <select name="select-parking" class="form-select" >
        <option selected>---</option>
        <option value="parking" >Con parcheggio</option>
        <option value="no-parking">Senza parcheggio</option>
    </select>
    <button type="submit" class="btn btn-primary">Cerca</button>
</form>



<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Parcheggio</th>
      <th scope="col">Voto</th>
      <th scope="col">Distanza dal centro</th>
    </tr>
  </thead>

  <!-- FOREACH CYCLE ON HOTELS VAR -->
  <tbody>
        <?php foreach ($hotels as $hotel) : ?>
            <tr>
                <td><?= $hotel['name']?></td>
                <td><?= $hotel['description']?></td>
                <td><?= $hotel['parking']?></td>
                <td><?= $hotel['vote']?></td>
                <td><?= $hotel['distance_to_center']?></td>
            </tr>
        <?php endforeach; ?>
  </tbody>
</table>

</body>
</html>