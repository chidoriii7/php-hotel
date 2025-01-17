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

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <div>
        <h1 class="text-center">Hotels</h1>
    </div>
    <!-- <div class="row">
        <ul>
                <
            <li>
                <h2></h2>
                <div></div>
                <div>Parking: </div>
                <div>Vote: </div>
                <div>Distance to center: </div>
            </li>

        </ul>
    </div> -->

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Parking</th>
      <th scope="col">Vote</th>
      <th scope="col">Distance</th>
    </tr>
  </thead>
  <tbody>
        <?php foreach ($hotels as $hotel) :?>
    <tr>
      <td scope="row"><?php echo $hotel['name']; ?></td>
      <td><?php echo $hotel['description']; ?></td>
      <td><?php echo $hotel['parking']; ?></td>
      <td><?php echo $hotel['vote']; ?></td>
      <td><?php echo $hotel['distance_to_center']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
        
</body>
</html>