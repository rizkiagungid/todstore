<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Profile TODSTORE</title>
        <?php
include 'includes/db.php';
?>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <!-- <form method="post"z>
				<?php
					$username = $_SESSION['username'];
					$query_users = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
					$da = mysqli_fetch_array($query_users);
					//var_dump($da);
					?> -->
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<input type="text" value="<?= $da['namalengkap']; ?>" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input type="text" readonly value="<?= $da['telepon']; ?>" class="form-control">
							</div>
						</div>
                        <div class="col-md-4">
							<div class="form-group">
								<input type="text" readonly value="<?= $da['id']; ?>" class="form-control">
							</div>
						</div>
                        <div class="col-md-4">
							<div class="form-group">
								<input type="text" readonly value="<?= $da['alamat']; ?>" class="form-control">
							</div>
						</div>
                        <div class="col-md-4">
							<div class="form-group">
								<input type="text" readonly value="<?= $da['level']; ?>" class="form-control">
							</div>
						</div>
                        <div class="col-md-4">
							<div class="form-group">
								<input type="text" readonly value="<?= $da['password']; ?>" class="form-control">
							</div>
						</div>
					</div>
					<td><a href="update_users.php?update=<?= $da['id']; ?>" class="btn btn-success btn-sm" role="button">Update</a>
            <a href="index.php?delete=<?= $da['id']; ?>" class="btn btn-danger btn-sm" id="delete" role="button">Delete</a></td>
        </tr>
   

					
    </body>
</html>