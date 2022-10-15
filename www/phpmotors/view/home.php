<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>Home | PHP Motors</title>
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
        <h1>Welcome to PHP Motors!</h1>

        <section class="info">
          <img src='/phpmotors/images/delorean.jpg' class="main-image" alt="Delorean" />

          <h2>DMC Delorean</h2>

          <div class="description">
            <p>3 Cup holders</p>
            <p>Superman doors</p>
            <p>Fuzzy dice!</p>

            <img src='/phpmotors/images/site/own_today.png' class="btn-own" alt="Own Today button" />
          </div>

          <img src='/phpmotors/images/site/own_today.png' class="btn-own" alt="Own Today button" />
        </section>

        <section class="reviews">
          <h3>DMC Delorean Reviews</h3>
          <ul class="description">
            <li class="review-item">"So fast its almost like traveling in time." (4/5)</li>
            <li class="review-item">"Coolest ride on the road." (4/5)</li>
            <li class="review-item">"I'm feeling Marty McFly!" (5/5)</li>
            <li class="review-item">"The most futuristic ride of our day." (4.5/5)</li>
            <li class="review-item">"80's livin and I love it!" (5/5)</li>
          </ul>
        </section>

        <section class="upgrades">
          <h3>Delorean Upgrades</h2>
          <div class="upgrades-container">
            <div class="upgrade">
              <div class="upgrade-image">
                <img src="/phpmotors/images/upgrades/flux-cap.png" alt="Flux cap diagram">
              </div>
              <a href="#" class="link-onLight">Flux Capacitor</a>
            </div>
            <div class="upgrade">
              <div class="upgrade-image">
                <img src="/phpmotors/images/upgrades/flame.jpg" alt="Big and orange flame">
              </div>
              <a href="#" class="link-onLight">Flame Decals</a>
            </div>
            <div class="upgrade">
              <div class="upgrade-image">
                <img src="/phpmotors/images/upgrades/bumper_sticker.jpg" alt="Bumper sticker">
              </div>
              <a href="#" class="link-onLight">Bumper Stickers</a>
            </div>
            <div class="upgrade">
              <div class="upgrade-image">
                <img src="/phpmotors/images/upgrades/hub-cap.jpg" alt="Silver hub cap image">
              </div>
              <a href="#" class="link-onLight">Hub Caps</a>
            </div>
          </div>
        </section>
      </main>

      <footer>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>
      </footer>
    </div>
  </body>
</html>