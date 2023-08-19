<!DOCTYPE html>
<html>
<head>
    <title>Booked Cars List</title>
</head>
<body>
    <h1>Booked Cars List</h1>

    <?php
    // Sample booked car data (you can replace this with a database or other data source)
    $bookedCars = array(
        array("Car ID" => 1, "Car Model" => "Honda Civic", "Renter" => "Arpit Chauhan", "Booking Date" => "2023-08-20"),
        array("Car ID" => 2, "Car Model" => "Honda Civic", "Renter" => "Shivam Gupta", "Booking Date" => "2023-08-21"),
        array("Car ID" => 3, "Car Model" => "Honda Civic", "Renter" => "Ritik Verma", "Booking Date" => "2023-08-22")
    );

    // Display booked cars
    echo '<table border="1">
            <tr>
                <th>Car ID</th>
                <th>Car Model</th>
                <th>Renter</th>
                <th>Booking Date</th>
            </tr>';

    foreach ($bookedCars as $car) {
        echo '<tr>
                <td>' . $car["Car ID"] . '</td>
                <td>' . $car["Car Model"] . '</td>
                <td>' . $car["Renter"] . '</td>
                <td>' . $car["Booking Date"] . '</td>
            </tr>';
    }

    echo '</table>';
    ?>

</body>
</html>
