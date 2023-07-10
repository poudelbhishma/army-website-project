<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Establish database connection
    include('db_connection.php');

    // Function to retrieve the profile data from the appropriate table
    function getProfileData($conn, $table, $email) {
      $query = "SELECT * FROM $table WHERE email = ?";
      $stmt = mysqli_prepare($conn, $query);
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
      }

      return null;
    }

    // Check if the email address is present in the query parameter
    if (isset($_GET['email'])) {
      $email = $_GET['email'];

      // Retrieve the user's profile information from the appropriate table
      $table = 'teacher';
      $photoColumn = 'photo';
      $profileData = getProfileData($conn, $table, $email);
    }

    // Close database connection
    mysqli_close($conn);
    ?>

    <form action="" method="GET">
        Email: <input type="email" name="email">
        <input type="submit" value="Get Photo"><br><br>
    </form>

    <?php
    // Display the profile photo if available
    if (isset($profileData) && isset($profileData[$photoColumn])) {
        echo '<img src="' . $profileData[$photoColumn] . '" class="preview-image" alt="Profile Photo">';
    }
    ?>
</body>
</html>