<?php
  include('HEADERFOOTER/header.html');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/genre.css" />
    <link rel="shortcut icon" type="x-icon" href="sonatrix.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Calistoga&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Calistoga&family=Zen+Old+Mincho&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
  </head>
  <body>
    <header>
      <div class="search-container">
        <input
          type="text"
          placeholder="Search..."
          name="search"
          id="search-input"
        />
        <button type="submit"><i class="fa fa-search"></i></button>
      </div>
    </header>

    <div class="collage">
      <div class="genre opm">
        <h2>OPM</h2>
        <a href="opm_list.php">
          <img src="opm_genre.jpg" alt="OPM band" id="opm" />
        </a>
      </div>
      <div class="genre pinoy-rock">
        <h2>Pinoy Rock</h2>
        <a href="pinoyrock_list.php">
          <img src="rock_genre.jpg" alt="Pinoy Rock band" id="rock" />
        </a>
      </div>
      <div class="genre pinoy-pop">
        <h2>Pinoy Pop</h2>
        <a href="pop_list.php">
          <img src="pop_genre.jpg" alt="Pinoy Pop band" id="pop" />
        </a>
      </div>
      <div class="genre pinoy-hiphop">
        <h2>Pinoy Hip-Hop/Rap</h2>
        <a href="hiphop_rap.php">
          <img
            src="hiphop_genre.jpg"
            alt="Pinoy Hip-Hop/Rap band"
            id="hiphop"
          />
        </a>
      </div>
      <div class="genre kundiman">
        <h2>Kundiman</h2>
        <a href="kundiman_list.php">
          <img src="kundiman_genre.jpg" alt="Kundiman band" id="kundiman" />
        </a>
      </div>
      <div class="genre alternative">
        <h2>Alternative Music</h2>
        <a href="alt_list.php">
          <img
            src="alt_genre.jpg"
            alt="Alternative Music band"
            id="alternative"
          />
        </a>
      </div>
      <div class="genre contemporary-filipino-folk">
        <h2>Contemporary Folk</h2>
        <a href="contemporary_list.php">
          <img
            src="contemporary_genre.jpg"
            alt="Contemporary Filipino Folk band"
            id="contemporary"
          />
        </a>
      </div>
      <div class="genre indie-filipino">
        <h2>Indie Filipino</h2>
        <a href="indie_list.php">
          <img src="indie_genre.jpg" alt="Indie Filipino band" id="indie" />
        </a>
      </div>
      <div class="genre filipino-reggae">
        <h2>Filipino Reggae</h2>
        <a href="reggae_list.php">
          <img src="reggae_genre.jpg" alt="Filipino Reggae band" id="reggae" />
        </a>
      </div>
      <div class="genre filipino-rnb">
        <h2>Filipino R&B/Soul</h2>
        <a href="r&bsoul_list.php">
          <img src="rnb_genre.jpg" alt="Filipino R&B/Soul band" id="rnb" />
        </a>
      </div>
    </div>
  </body>
  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }

    document
      .getElementById("search-input")
      .addEventListener("input", function (e) {
        var searchValue = e.target.value.toLowerCase();

        var genres = [
          "opm",
          "pinoy-rock",
          "pinoy-pop",
          "pinoy-hiphop",
          "kundiman",
          "alternative",
          "contemporary-filipino-folk",
          "indie-filipino",
          "filipino-reggae",
          "filipino-rnb",
        ];

        genres.forEach(function (genre) {
          var genreDiv = document.querySelector("." + genre);
          var genreText = genreDiv.querySelector("h2");

          if (genreText.textContent.toLowerCase().includes(searchValue)) {
            genreDiv.style.display = "block";
          } else {
            genreDiv.style.display = "none";
          }
        });
      });
  </script>
</html>
<?php
  include('HEADERFOOTER/footer.html');
?>