<?php

require_once("includes/head.php");

if (!isset($_GET['index'])) {
  header("Location: new-collection.php?index=1");
  die();
}

$item_id = $_GET['index']-1;

$json = file_get_contents('data/collection.json');
$collection = json_decode($json, true);

?>

<body>

  <!-- <nav>
    <div class="nav-wrapper grey lighten-2">
      <a href="#" class="brand-logo black-text"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a class="waves-effect waves-light btn grey lighten-3 black-text">Login</a></li>
        <li><a href="account.php" class="waves-effect waves-light btn light-green darken-1">Mijn account</a></li>
      </ul>
    </div>
  </nav> -->

  <section id="head-new-collection" class="grey lighten-4">
    <div class="container">
      <?php if ($_GET['index'] < 6) { ?>
        <h1 class="center-align">Nieuw collectie van jouw favoriete groothandels</h1>
        <h2 class="center-align">Geef per item aan of je het leuk vind.</h2>
      <?php } else { ?>
        <h1 class="center-align single">Waar kan ik deze producten verkijgen</h1>
      <?php } ?>
    </div>
  </section>

  <section id="new-collection">
    <div class="container">
      <div class="row">
        <?php if ($_GET['index'] < 6) { ?>
          <div class="col s8">
            <div class="card-panel z-depth-3">
              <div class="row center-align">
                <h3 class="center-align"><?php echo $collection[$item_id]['name']; ?></h3>
                <div id="one" class="carousel">
                  <a class="carousel-item"><img src="<?php echo $collection[$item_id]['image']; ?>.jpg"></a>
                  <a class="carousel-item"><img src="<?php echo $collection[$item_id]['image']; ?>.jpg"></a>
                  <a class="carousel-item"><img src="<?php echo $collection[$item_id]['image']; ?>.jpg"></a>
                </div>
              </div>
              <div id="choose" class="row center-align">
                <a href="new-collection.php?index=<?php echo $_GET['index']+1; ?>" id="dislike" class="btn-floating btn-large waves-effect waves-light grey lighten-1 tooltipped" data-position="top" data-delay="50" data-tooltip="Niet leuk"><i class="material-icons">mood_bad</i></a>
                <a href="new-collection.php?index=<?php echo $_GET['index']+1; ?>" id="maybe" class="btn-floating btn-large waves-effect waves-light orange lighten-2 tooltipped" data-position="top" data-delay="50" data-tooltip="Misschien"><i class="material-icons">sentiment_neutral</i></a>
                <a href="new-collection.php?index=<?php echo $_GET['index']+1; ?>" id="like" class="btn-floating btn-large waves-effect waves-light green tooltipped" data-position="top" data-delay="50" data-tooltip="Leuk"><i class="material-icons">mood</i></a>
              </div>
            </div>
          </div>
          <?php if ($_GET['index'] < 6) { ?>
            <div class="col s4">
              <ul class="collection with-header z-depth-1">
                <li class="collection-header"><h4 class="center-align">Details</h4></li>
                <li class="collection-item"><div>Artikel-nummer: <strong><?php echo $collection[$item_id]['detail']['number'] ?></strong><a class="secondary-content grey-text"><i class="material-icons">content_paste</i></a></div></li>
                <li class="collection-item"><div>Materiaal: <strong><?php echo $collection[$item_id]['detail']['material'] ?></strong><a class="secondary-content grey-text"><i class="material-icons">gradient</i></a></div></li>
                <li class="collection-item"><div>Levertijd: <strong><?php echo $collection[$item_id]['detail']['deliver'] ?></strong><a class="secondary-content grey-text"><i class="material-icons">local_shipping</i></a></div></li>
                <li class="collection-item"><div>Merk: <strong><?php echo $collection[$item_id]['detail']['brand'] ?></strong><a class="secondary-content grey-text"><i class="material-icons">local_offer</i></a></div></li>
                <li class="collection-item"><div>Prijs: &euro; <strong><?php echo $collection[$item_id]['detail']['price'] ?></strong><a class="secondary-content grey-text"><i class="material-icons">attach_money</i></a></div></li>
              </ul>
            </div>
          <?php } ?>
        <?php } else { ?>
          <div class="col s10 offset-s1">
            <div class="card-panel">
              <div class="valign-wrapper">
                <div class="col s2">
                  <img src="http://lorempixel.com/150/150/city/3" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                </div>
                <div class="col s6">
                  <div class="rating">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star_border</i>
                  </div>
                  <div>
                    <strong>Amsterdam Fashion Centre</strong><br>
                    Koningin Wilhelminaplein 42<br>
                    1062 HH Amsterdam
                  </div>
                  <br>
                  <a href="detail.php" class="waves-effect waves-light btn green darken-1">Bekijken</a>
                </div>
                <div class="col s4">
                  <div>
                    <div class="chip">90 km</div><br>
                    <div class="chip">1 uur en 2 minuten rijden</div><br>
                    <div class="chip">Normale verkeersdrukte</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-panel">
              <div class="valign-wrapper">
                <div class="col s2">
                  <img src="http://lorempixel.com/150/150/city/2" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                </div>
                <div class="col s6">
                  <div class="rating">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star_half</i>
                    <i class="material-icons">star_border</i>
                  </div>
                  <div>
                    <strong>Fashion trends</strong><br>
                    Tussenbroekstraat 70<br>
                    3059 LR Rotterdam
                  </div>
                  <br>
                  <a href="detail.php" class="waves-effect waves-light btn green darken-1">Bekijken</a>
                </div>
                <div class="col s4">
                  <div>
                    <div class="chip">23 km</div><br>
                    <div class="chip">22 minuten rijden</div><br>
                    <div class="chip">Normale verkeersdrukte</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <form action="" method="post" id="dislike-form">
    <input type="hidden" name="item" value="<?php echo $_GET['index']; ?>">
    <input type="hidden" name="choose" value="dislike">
  </form>
  <form action="" method="post" id="like-form">
    <input type="hidden" name="item" value="<?php echo $_GET['index']; ?>">
    <input type="hidden" name="choose" value="like">
  </form>

  <!-- Includes footer section -->
  <?php require_once("includes/footer.php"); ?>
</body>
</html>
