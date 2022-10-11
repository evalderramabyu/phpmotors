<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>Server Error | PHP Motors</title>
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
      <main>
        <section class="error">
          <h1>Server Error</h1>
          <p>Sorry our server seems to be experiencing some technical difficulties. Please check back later.</p>
        </section>
      </main>

      <footer>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>
      </footer>
    </div>
  </body>
</html>