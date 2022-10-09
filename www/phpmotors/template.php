<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>Template | PHP Motors</title>
    <meta name="description" content="Assignment portal for Edgar Valderrama in CSE 340: Web Backend Development II at Brigham Young University - Idaho">
    <link rel="stylesheet" href="/phpmotors/css/style.css" media="screen">
  </head>

  <body>
    <div class="container">
      <header>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/header.php'; ?>
      </header>

      <nav class="navbar">
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/navigation.php'; ?>
      </nav>
      <main class="content">
        <h1>Content Title Here</h1>
      </main>

      <footer>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>
      </footer>
    </div>
  </body>
</html>