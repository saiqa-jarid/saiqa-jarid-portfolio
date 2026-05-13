<?php

$conn = mysqli_connect("localhost","root","","portfolio_db");

$result = mysqli_query($conn,"SELECT * FROM contacts ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Messages</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background:#050816;color:white;">

<div class="container py-5">

    <h1 class="mb-4 text-info">
        Contact Messages
    </h1>

    <div class="table-responsive">

        <table class="table table-dark table-bordered">

            <tr>

                <th>ID</th>

                <th>Name</th>

                <th>Email</th>

                <th>Message</th>

                <th>Date</th>

            </tr>

            <?php while($row = mysqli_fetch_assoc($result)) { ?>

            <tr>

                <td><?php echo $row['id']; ?></td>

                <td><?php echo $row['name']; ?></td>

                <td><?php echo $row['email']; ?></td>

                <td><?php echo $row['message']; ?></td>

                <td><?php echo $row['created_at']; ?></td>

            </tr>

            <?php } ?>

        </table>

    </div>

</div>

</body>
</html>