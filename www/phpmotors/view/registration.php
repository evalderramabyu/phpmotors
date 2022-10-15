<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>Account Registration | PHP Motors</title>
    <meta name="description" content="Assignment portal for Edgar Valderrama in CSE 340: Web Backend Development II at Brigham Young University - Idaho">
    <link rel="stylesheet" href="/phpmotors/css/style.css" media="screen">
  </head>

  <body>
    <div class="container">
      <header>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/header.php'; ?>
      </header>

      <nav class="navbar">
        <?php echo $navList; ?>
      </nav>
      <main class="content">
        <h1>Register</h1>
        <p class="hint">All fields are required.</p>

        <form action="/phpmotors/accounts/index.php" method="POST">
            <div class="form-control">
              <label for="clientFirstname">First Name</label>
              <input type="text" name="clientFirstname" id="clientFirstname" required>
            </div>

            <div class="form-control">
                <label for="clientLastname">Last Name</label>
              <input type="text" name="clientLastname" id="clientLastname" required>
            </div>

            <div class="form-control">
              <label for="clientEmail">Email</label>
              <input type="email" name="clientEmail" id="clientEmail" required>
            </div>

            <div class="form-control">
              <p class="hint">Passwords must be at least 8 characters and contains at least 1 number, 1 capital letter and 1 special character</p>

              <label for="clientPassword">Password</label>
              <input type="password" name="clientPassword" id="clientPassword" pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
            </div>

            <div class="form-control">
              <input type="submit" value="Register">

              <input type="hidden" name="action" value="register">
            </div>
        </form>
      </main>

      <footer>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>
      </footer>
    </div>
  </body>
</html>