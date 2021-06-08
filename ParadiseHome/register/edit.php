<?php
   include("config.php");

   $userId = $_GET['ID'];
   $query = "select * from mysubscribers where userid = '" .$userId. "'";
  $result = mysqli_query($conn,$query);

   while ($row=mysqli_fetch_assoc($result)) {
        $userId = $row['userid'];
        $firstName = $row['firstname'];
        $lastName = $row['lastname'];
        $email = $row['email'];
   }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Form</title>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body style="text-align: center;">

<div>
  <h2>Update Form</h2>
  <form action="update.php?getID=<?php echo $userId?>" method='POST'>

  <div>
    <label for="userid">UserId:</label>
    <div>
      <input type="text" name="userid" placeholder="Enter UserId" value="<?php echo $userId?>">
    </div>
  </div>

  <div>
    <label for="firstname">First Name:</label>
    <div>
      <input type="text" name="firstname" placeholder="Enter First Name" value="<?php echo $firstName?>">
    </div>
  </div>

  <div>
    <label for="lastname">Last Name:</label>
    <div>
      <input type="text" name="lastname" placeholder="Enter Last Name" value="<?php echo $lastName?>">
    </div>
  </div>

  <div>
    <label for="email">Email:</label>
    <div>
      <input type="email" name="email" placeholder="Enter email" value="<?php echo $email?>">
    </div>
  </div>

  <br>
  <br>


    <div>
     <button class="btn btn-primary" name="update">Update</button>

    </div>

</form>
</div>

</body>
</html>
