<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>Accoun Login | PHP Motors</title>
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
      <main>
        <h1>Sign in</h1>
        <form action="#" method="post" class="login">
          <div class="form-control">
            <label for="clientEmail">Email</label>
            <input type="email" name="clientEmail" id="clientEmail" required>
          </div>
          <div class="form-control">
            <label for="clientPassword">Password</label>
            <input type="password" name="clientPassword" id="clientPassword">
          </div>

          <input type="submit" value="Sign-in">

          <br>
          <a href="/phpmotors/accounts/index.php?action=registration" class="lnk-registration">Not a member yet?</a>
        </form>

      </main>

      <footer>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>
      </footer>
    </div>
  </body>
</html>