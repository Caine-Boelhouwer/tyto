<?php require_once("includes/head.php"); ?>
<body>

  <nav>
    <div class="nav-wrapper grey lighten-2">
      <a href="#" class="brand-logo black-text"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <!-- <li><a class="waves-effect waves-light btn grey lighten-3 black-text">Login</a></li>
        <li><a class="waves-effect waves-light btn light-green darken-1">Mijn account</a></li> -->
      </ul>
    </div>
  </nav>

  <section id="head-search" class="grey lighten-4">
    <div class="container">
      <h1 class="center-align">Ik ben opzoek naar</h1>
      <h2 class="center-align">Een <strong>kleding</strong> groothandel in de buurt van <strong>Rotterdam</strong></h2>
    </div>
  </section>

  <section id="results-search">
    <div class="container">
      <div class="row sort-bar">
        <div class="col s3">
          <h3>Resultaten</h3>
        </div>
        <div class="col s9 right-align">
          Soorteren op:
          <div class="input-field inline">
            <select>
              <option value="1">Branche oplopend</option>
              <option value="2">Branche aflopend</option>
              <option value="3">Locatie oplopend</option>
              <option value="4">Locatie aflopend</option>
            </select>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col s3">
          <div class="filter">
            <h3>Locatie</h3>
            <form action="#">
              <p>
                <input type="checkbox" class="filled-in" id="rotterdam" checked="checked" />
                <label for="rotterdam">Rotterdam</label>
              </p>
              <p>
                <input type="checkbox" class="filled-in" id="amsterdam" />
                <label for="amsterdam">Amsterdam</label>
              </p>
              <p>
                <input type="checkbox" class="filled-in" id="den-haag" />
                <label for="den-haag">Den Haag</label>
              </p>
              <p>
                <input type="checkbox" class="filled-in" id="utrecht" />
                <label for="utrecht">Utrecht</label>
              </p>
              <p>
                <input type="checkbox" class="filled-in" id="eindhoven" />
                <label for="eindhoven">Eindhoven</label>
              </p>
              <p>
                <input type="checkbox" class="filled-in" id="groningen" />
                <label for="groningen">Groningen</label>
              </p>
            </form>
            <h3>Branche</h3>
            <form action="#">
              <p>
                <input type="checkbox" class="filled-in" id="kleding" checked="checked" />
                <label for="kleding">Kleding</label>
              </p>
              <p>
                <input type="checkbox" class="filled-in" id="tuin" />
                <label for="tuin">Tuin</label>
              </p>
              <p>
                <input type="checkbox" class="filled-in" id="wonen" />
                <label for="wonen">Wonen</label>
              </p>
              <p>
                <input type="checkbox" class="filled-in" id="elektronica" />
                <label for="elektronica">Elektronica</label>
              </p>
              <p>
                <input type="checkbox" class="filled-in" id="horeca" />
                <label for="horeca">Horeca</label>
              </p>
              <p>
                <input type="checkbox" class="filled-in" id="educatie-vrijetijd" />
                <label for="educatie-vrijetijd">Educatie & Vrijetijd</label>
              </p>
            </form>
            <h3>Straal</h3>
            <form action="#">
              <p>
                <input type="radio" name="straal" class="filled-in" id="5-km" checked="checked" />
                <label for="5-km">5 km</label>
              </p>
              <p>
                <input type="radio" name="straal" class="filled-in" id="10-km" />
                <label for="10-km">10 km</label>
              </p>
              <p>
                <input type="radio" name="straal" class="filled-in" id="15-km" />
                <label for="15-km">15 km</label>
              </p>
              <p>
                <input type="radio" name="straal" class="filled-in" id="20-km" />
                <label for="20-km">20 km</label>
              </p>
              <p>
                <input type="radio" name="straal" class="filled-in" id="25-km" />
                <label for="25-km">25 km</label>
              </p>
              <p>
                <input type="radio" name="straal" class="filled-in" id="30-km" />
                <label for="30-km">30 km</label>
              </p>
            </form>
          </div>
        </div>
        <div class="col s9">

          <div class="card horizontal">
            <div class="card-image">
              <img src="http://lorempixel.com/250/250/city/3">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <strong>Groothandel</strong>
                <div class="rating">
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star_half</i>
                </div>
                <p>I am a very simple card. I am good at containing small bits of information.</p>
              </div>
              <div class="card-action">
                <div class="col s6">
                  <a href="detail.php" class="waves-effect waves-light btn green darken-1">Bekijken</a>
                </div>
                <div class="col s6 right-align">
                   <a class="btn-floating waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="card horizontal">
            <div class="card-image">
              <img src="http://lorempixel.com/250/250/city/5">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <strong>Groothandel</strong>
                <div class="rating">
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star_border</i>
                </div>
                <p>I am a very simple card. I am good at containing small bits of information.</p>
              </div>
              <div class="card-action">
                <div class="col s6">
                  <a href="detail.php" class="waves-effect waves-light btn green darken-1">Bekijken</a>
                </div>
                <div class="col s6 right-align">
                   <a class="btn-floating waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="card horizontal">
            <div class="card-image">
              <img src="http://lorempixel.com/250/250/city/7">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <strong>Groothandel</strong>
                <div class="rating">
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                </div>
                <p>I am a very simple card. I am good at containing small bits of information.</p>
              </div>
              <div class="card-action">
                <div class="col s6">
                  <a href="detail.php" class="waves-effect waves-light btn green darken-1">Bekijken</a>
                </div>
                <div class="col s6 right-align">
                   <a class="btn-floating waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="card horizontal">
            <div class="card-image">
              <img src="http://lorempixel.com/250/250/city/2">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <strong>Groothandel</strong>
                <div class="rating">
                  <i class="material-icons">star</i>
                  <i class="material-icons">star</i>
                  <i class="material-icons">star_border</i>
                  <i class="material-icons">star_border</i>
                  <i class="material-icons">star_border</i>
                </div>
                <p>I am a very simple card. I am good at containing small bits of information.</p>
              </div>
              <div class="card-action">
                <div class="col s6">
                  <a href="detail.php" class="waves-effect waves-light btn green darken-1">Bekijken</a>
                </div>
                <div class="col s6 right-align">
                   <a class="btn-floating waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                </div>
              </div>
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
