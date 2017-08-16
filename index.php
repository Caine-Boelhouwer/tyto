<?php require_once("includes/head.php"); ?>
<body>

  <div class="fixed-action-btn">
    <!-- Element Showed -->
    <a id="new-collection-btn" class="waves-effect waves-light btn-floating btn-large red" ><i class="material-icons">warning</i></a>

    <!-- Tap Target Structure -->
    <div class="tap-target" data-activates="new-collection-btn">
      <div class="tap-target-content white-text">
        <h5>Nieuwe collectie!</h5>
        <p>De nieuwe collectie van favarieten groothandels nu beschikbaar.</p>
        <a href="new-collection.php" class="waves-effect waves-light btn green darken-1">Bekijken</a>
      </div>
    </div>
  </div>

  <nav>
    <div class="nav-wrapper grey lighten-4">
      <a href="#" class="brand-logo black-text"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <!-- <li><a class="waves-effect waves-light btn grey lighten-3 black-text">Login</a></li> -->

        <li><a href="account.php" class="waves-effect waves-light btn light-green darken-1">Mijn account</a></li>
      </ul>
    </div>
  </nav>

  <section id="fast-search" class="grey lighten-4">
    <div class="container">
      <h1 class="center-align">Groothandel nodig?</h1>
      <p class="center-align">Vind hier jouw geschikte groothandel</p>
      <div class="search-wrapper">
        <div class="row card-panel">
          <div class="input-field col s4">
            <input placeholder="Rotterdam" type="text" id="location-input" class="autocomplete">
            <label for="location-input">Locatie</label>
          </div>
          <div class="input-field col s4">
            <input placeholder="Kleding" type="text" id="branche-input" class="autocomplete">
            <label for="branche-input">Branche</label>
          </div>
          <div class="input-field col s2">
            <select>
              <option value="5">5 km</option>
              <option value="10">10 km</option>
              <option value="15">15 km</option>
              <option value="20">20 km</option>
            </select>
            <label>Straal</label>
          </div>
          <div class="input-field col s2">
            <a href="search.php" class="search btn waves-effect waves-light">Zoeken</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="populair-items">
    <div class="container">
      <h2>Populaire groothandels</h2>
      <div class="row">
        <div class="col s4">
          <div class="card">
            <div class="card-image">
              <img src="http://lorempixel.com/300/300/city/2">
              <span class="card-title">Groothandel</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.</p>
            </div>
            <div class="card-action">
              <a href="detail.php">Bekijk</a>
            </div>
          </div>
        </div>
        <div class="col s4">
          <div class="card">
            <div class="card-image">
              <img src="http://lorempixel.com/300/300/city/3">
              <span class="card-title">Groothandel</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.</p>
            </div>
            <div class="card-action">
              <a href="detail.php">Bekijk</a>
            </div>
          </div>
        </div>
        <div class="col s4">
          <div class="card">
            <div class="card-image">
              <img src="http://lorempixel.com/300/300/city/5">
              <span class="card-title">Groothandel</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.</p>
            </div>
            <div class="card-action">
              <a href="detail.php">Bekijk</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="populair-items">
    <div class="container">
      <h2>Nieuw groothandels</h2>
      <div class="row">
        <div class="col s3">
          <div class="card">
            <div class="card-image">
              <img src="http://lorempixel.com/300/300/city/8">
              <span class="card-title">Groothandel</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.</p>
            </div>
            <div class="card-action">
              <a href="detail.php">Bekijk</a>
            </div>
          </div>
        </div>
        <div class="col s3">
          <div class="card">
            <div class="card-image">
              <img src="http://lorempixel.com/300/300/city/4">
              <span class="card-title">Groothandel</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.</p>
            </div>
            <div class="card-action">
              <a href="detail.php">Bekijk</a>
            </div>
          </div>
        </div>
        <div class="col s3">
          <div class="card">
            <div class="card-image">
              <img src="http://lorempixel.com/300/300/city/7">
              <span class="card-title">Groothandel</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.</p>
            </div>
            <div class="card-action">
              <a href="detail.php">Bekijk</a>
            </div>
          </div>
        </div>
        <div class="col s3">
          <div class="card">
            <div class="card-image">
              <img src="http://lorempixel.com/300/300/city/9">
              <span class="card-title">Groothandel</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.</p>
            </div>
            <div class="card-action">
              <a href="detail.php">Bekijk</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s3">
          <div class="card">
            <div class="card-image">
              <img src="http://lorempixel.com/300/300/city/10">
              <span class="card-title">Groothandel</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.</p>
            </div>
            <div class="card-action">
              <a href="detail.php">Bekijk</a>
            </div>
          </div>
        </div>
        <div class="col s3">
          <div class="card">
            <div class="card-image">
              <img src="http://lorempixel.com/300/300/city/1">
              <span class="card-title">Groothandel</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.</p>
            </div>
            <div class="card-action">
              <a href="detail.php">Bekijk</a>
            </div>
          </div>
        </div>
        <div class="col s3">
          <div class="card">
            <div class="card-image">
              <img src="http://lorempixel.com/300/300/city/5">
              <span class="card-title">Groothandel</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.</p>
            </div>
            <div class="card-action">
              <a href="detail.php">Bekijk</a>
            </div>
          </div>
        </div>
        <div class="col s3">
          <div class="card">
            <div class="card-image">
              <img src="http://lorempixel.com/300/300/city/3">
              <span class="card-title">Groothandel</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.</p>
            </div>
            <div class="card-action">
              <a href="detail.php">Bekijk</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Includes footer section -->
  <?php require_once("includes/footer.php"); ?>
</body>
</html>
