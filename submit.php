<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Application Submitted</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <h1>Application Submitted Successfully</h1>
</header>

<div class="form-container">
    <h2>Your Submitted Details</h2>

    <p><strong>Name:</strong> <?php echo $_POST['fullname']; ?></p>
    <p><strong>Email:</strong> <?php echo $_POST['email']; ?></p>
    <p><strong>Phone:</strong> <?php echo $_POST['phone']; ?></p>
    <p><strong>Gender:</strong> <?php echo $_POST['gender']; ?></p>
    <p><strong>Address:</strong> <?php echo nl2br($_POST['address']); ?></p>
    <p><strong>Course Selected:</strong> <?php echo $_POST['course']; ?></p>

    <br>
    <a href="index.html">
        <button>Submit Another Application</button>
    </a>
</div>

<footer>
    <p>© 2025 Registration Portal</p>
</footer>

</body>
</html>
