<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Data</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 40px;
      background-color: #f0f0f0;
    }
    .container {
      background-color: #fff;
      border-radius: 8px;
      padding: 20px;
      max-width: 600px;
      margin: auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
      color: #333;
    }
    p {
      font-size: 18px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Submitted Registration Details</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      echo "<p><strong>Full Name:</strong> " . htmlspecialchars($_POST['fname']) . "</p>";
      echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "</p>";
      echo "<p><strong>Gender:</strong> " . htmlspecialchars($_POST['gender']) . "</p>";
      echo "<p><strong>Date of Birth:</strong> " . htmlspecialchars($_POST['dob']) . "</p>";
      echo "<p><strong>Country:</strong> " . htmlspecialchars($_POST['Country']) . "</p>";
      echo "<p><strong>Opinion:</strong> " . nl2br(htmlspecialchars($_POST['opinion'])) . "</p>";
      echo "<p><strong>Background Color:</strong> " . htmlspecialchars($_POST['bgcolor']) . "</p>";
    } else {
      echo "<p>No data submitted.</p>";
    }
    ?>
  </div>
</body>
</html>
