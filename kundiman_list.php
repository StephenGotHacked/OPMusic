<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="CSS/all_genre.css" />
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
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <a href="index.php">Home</a>
      <a href="about.php">About us</a>
      <a href="genre.php">Genre</a>
      <a href="artist_list.php">List of Artist</a>
      <a href="kundiman_list.php" class="active">Kundiman</a>
    </div>
    <div class="navbar">
      <span style="font-size: 30px; cursor: pointer" onclick="openNav()"
        >☰</span
      >
      <div class="header-text">
        <h1 id="title">OPMusic</h1>
      </div>
    </div>

    <header>
      <div class="search-container">
        <input type="text" id="search-input" placeholder="Search artist..." />
        <button type="submit"><i class="fa fa-search"></i></button>
      </div>
    </header>

    <div class="container">
      <h1>TOP KUNDIMAN ARTIST</h1>
      <div class="row header">
        <span class="cell" id="art">Artist</span>
        <span class="cell">Artist name</span>
        <span class="cell">Song</span>
        <span class="cell">Time</span>
      </div>
      <div id="artist-list">
        <div class="row">
          <span class="cell"
            ><img src="" alt="Album Art" /><a href="" target="_blank"></a
          ></span>
          <span class="cell"></span>
          <span class="cell"></span>
          <span class="cell"></span>
        </div>
      </div>
      <div id="loading" style="display: none">
        <div class="spinner"></div>
      </div>
      <button id="loadMore">Load More</button>
    </div>
  </body>
  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }

    document.addEventListener("DOMContentLoaded", function () {
      var artistsData = {
        "Sylvia La Torre": {
          image: "sylvialatorre.jpg",
          href: "https://open.spotify.com/artist/7yUUZoUtgScxQWdWQ4sh2O?si=rJPJiL9FQcKl9O6oxdg4tQ",
          song: "Pamaypay ng Maynila",
          time: "3:23",
        },
        "Ruben Tagalog": {
          image: "rubentagalog.jpg",
          href: "https://open.spotify.com/artist/6zxkAiS0yx0UPQTkjJBOhD?si=ils_xmGGTMWrW-O6iHccgw",
          song: "Nasaan Ka Irog",
          time: "3:11",
        },
        "Diomedes Maturan": {
          image: "diomedesmaturan.jpg",
          href: "https://open.spotify.com/artist/796pWs9Xqrk4DNYsJS2X0i?si=2jRfNZ4zT3CEc7MxFgvPbg",
          song: "Dahil Sa Iyo",
          time: "3:13",
        },
        "Conching Rosal": {
          image: "conchingrosal.jpg",
          href: "https://open.spotify.com/artist/5CXaoIxClu0ZKpXRyMxxlm?si=qb3MQFbLQmOUQjZ_ZgrglQ",
          song: "Mutya Ng Pasig",
          time: "3:17",
        },
        "Ric Manrique Jr.": {
          image: "ricmanriquejr.jpg",
          href: "https://open.spotify.com/artist/4L9XV8FKfsJKAgxcSZOiP3?si=mbjeaXy1RAKPqTCYt1iiIA",
          song: "Gaano Ko Ikaw Kamahal",
          time: "3:03",
        },
        "Pilita Corrales": {
          image: "pilitacorrales.jpg",
          href: "https://open.spotify.com/artist/3uyWI5aciHqr4PTPD0dIyu?si=pYmCcI9yQIuyvEqCejsmKg",
          song: "Bakit Kita Iiwan",
          time: "3:21",
        },
        "Nora Aunor": {
          image: "noraaunor.jpg",
          href: "https://open.spotify.com/artist/6leSyRPRq3rJby5v0NmFgA?si=SMb_NpGyRAWJPLtbqmuzSQ",
          song: "Pearly Shells",
          time: "2:24",
        },
        "Celeste Legaspi": {
          image: "celestelagaspi.jpg",
          href: "https://open.spotify.com/artist/20gOeXI8NLUKdSr9Z4YeD6?si=TbHtHr_QTTuG-FiL4GSR2w",
          song: "Ikaw",
          time: "3:08",
        },
        "Susan Fuentes": {
          image: "susanfuentes.jpg",
          href: "https://open.spotify.com/artist/58L3G2GAOh65Sx4f3qGQIG?si=cmgKTSRISnqt1esH1swAHA",
          song: "Usahay",
          time: "3:17",
        },
        "Claire dela Fuente": {
          image: "clairedelafuente.jpg",
          href: "https://open.spotify.com/artist/1R7cDvSSEiWp9VjAKyn0xo?si=1a__Qz-4TmGRy72U9w67Kg",
          song: "Kundiman ng Lahi",
          time: "3:24",
        },
        "Hajji Alejandro": {
          image: "hajjialejandro.jpg",
          href: "https://open.spotify.com/artist/4u6tIl0ae3m9HUtUubJsa6?si=-NWtJspSQ36iwy3I8mQokg",
          song: "Kay Ganda ng Ating Musika",
          time: "3:10",
        },
        "Basil Valdez": {
          image: "basilvaldez.jpg",
          href: "https://open.spotify.com/artist/2ctUvNSyw4TfFtQMkBYiKZ?si=BLUwCQUPSJSckkfIg42bdA",
          song: "Kahit Ikaw Ay Isang Panaginip Lang",
          time: "3:47",
        },
        "Imelda Papin": {
          image: "imeldapapin.jpg",
          href: "https://open.spotify.com/artist/4Cv7ZBrxBTEHfZIKD7oSLv?si=AZ_EiQF0RFStVrfy7U-y1A",
          song: "Sa Ugoy ng Duyan",
          time: "3:12",
        },
        "Victor Wood": {
          image: "victorwood.jpg",
          href: "https://open.spotify.com/artist/69U0Mjj15pDu1zJ0oyWN9u?si=-wmBoiLKSMqWFzM6o3c6OA",
          song: "Magbalik Ka Na Mahal",
          time: "3:02",
        },
        Asin: {
          image: "asin.jpg",
          href: "https://open.spotify.com/artist/5pbdyhkEpMobD6Fs6h729Q?si=FwNgbgffTMeorL6hy3k45g",
          song: "Masdan Mo Ang Kapaligiran",
          time: "4:45",
        },
        "Rico J. Puno": {
          image: "ricojpuno.jpg",
          href: "https://open.spotify.com/artist/77hvqYqKgIrS1SC0BhRdQx?si=ayfX8c54TY6eynOMUKKKcQ",
          song: "Kapalaran",
          time: "3:27",
        },
      };

      var artistListContainer = document.getElementById("artist-list");

      function filterArtists(searchValue) {
        artistListContainer.innerHTML = "";
        Object.keys(artistsData).forEach(function (artist) {
          if (artist.toLowerCase().includes(searchValue)) {
            var row = document.createElement("div");
            row.classList.add("row");
            row.innerHTML = `
                        <span class="cell"><a href="${artistsData[artist].href}" target="_blank"><img src="${artistsData[artist].image}" alt="Album Art"></a></span>
                        <span class="cell">${artist}</span>
                        <span class="cell">${artistsData[artist].song}</span>
                        <span class="cell">${artistsData[artist].time}</span>
                    `;
            artistListContainer.appendChild(row);
          }
        });
      }

      var searchInput = document.getElementById("search-input");
      searchInput.addEventListener("input", function (e) {
        var searchValue = e.target.value.toLowerCase();
        filterArtists(searchValue);
      });
      filterArtists("");
    });
    window.onload = function () {
      var rows = document.getElementsByClassName("row");
      var loadMoreButton = document.getElementById("loadMore");
      var loadingText = document.getElementById("loading");
      var totalRows = rows.length;

      for (var i = 10; i < totalRows; i++) {
        rows[i].style.display = "none";
      }

      loadMoreButton.onclick = function () {
        loadingText.style.display = "block";

        setTimeout(function () {
          loadingText.style.display = "none";
          var shownCount = 0;
          for (var i = 10; i < totalRows; i++) {
            if (rows[i].style.display === "none") {
              rows[i].style.display = "flex";
              shownCount++;
              if (shownCount >= 10) {
                break;
              }
            }
          }
          if (
            document.querySelectorAll('.row:not([style*="display: none"])')
              .length === totalRows
          ) {
            loadMoreButton.style.display = "none";
          }
        }, 1000);
      };
    };
  </script>
</html>
