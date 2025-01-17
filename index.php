<!DOCTYPE html>
<html class="no-js" lang="">
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <link rel="apple-touch-icon" href="icon.png">
  <link href="css/styles.css" rel="stylesheet">
  <title>Soundwave</title>
</head>
<body>
  <div id="root">
    <header class="main-header">
      <div class="container">
        <a href="index.html" class="brand-logo">
          <img src="images/logo.png">
          <div class="brand-logo-name">Soundwave</div>
        </a>
        <nav class="main-nav">
          <ul>
            <li><a href="#discover">Discover</a></li>
            <li><a href="#join">Join</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <main class="main">
      <div class="container">
        <section class="section home-main-section">
          <div class="img-wrapper">
            <div class="lady-image"></div>
          </div>
          <div class="call-to-action">
            <h1 class="title">Feel The Music</h1>
            <span class="subtitle">Stream over 20 thousand songs with one click</span>
            <a href="#join" class="btn">Join Now</a>
          </div>
          <div class="home-page-circle-1"></div>
          <div class="home-page-circle-2"></div>
          <div class="home-page-circle-3"></div>
        </section>
        <section id="discover" class="section discover-main-section">
          <div class="call-to-action">
            <h1 class="title">Discover new music</h1>
            <div class="icon-section">
              <div class="icon">
                <img src="images/microphone.svg">
                Charts
              </div>
              <div class="icon">
                <img src="images/albums.svg">
                Albums
              </div>
              <div class="icon">
                <img src="images/more.svg">
                More
              </div>
            </div>
            By joining you can benefit by listening to the latest albums released.
          </div>
          <img class="covers-image" src="images/covers.jpg">
        </section>
        <section id="join" class="section join-main-section">
          <h1 class="join-text">
            Join the
            <span class="accent-text">fun.</span>
          </h1>
          <form action="process.php" method="post" class="join-form">
            <div class="input-group">
              <!-- <label>Name:</label> -->
              <input type="text" name="UName" placeholder="User">
            </div>
            <div class="input-group">
              <!-- <label>Email:</label> -->
              <input type="email" name="Email" placeholder="Email">
            </div>
            <div class="input-group">
              <!-- <label>Password:</label> -->
              <input type="password" name="password" placeholder="Password">
            </div>
            <div class="input-group">
              <button type="submit" class="btn">Join Now</button>
            </div>
          </form>
        </section>
      </div>
    </main>
    <footer class="main-footer">
      <div class="container">
        <nav class="footer-nav">
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
        <nav class="footer-nav">
          <ul>
            <li>
              <a href="https://twitter.com/?lang=de" target="_blank" class="social-link">
                <img src="images/twitter.svg">
                Twitter
              </a>
            </li>
            <li>
              <a href="https://www.facebook.com/" target="_blank" class="social-link">
                <img src="images/facebook.svg">
                Facebook
              </a>
            </li>
          </ul>
        </nav>
      </footer>  
      </div>
      
  </div>
</body>
<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
</html>