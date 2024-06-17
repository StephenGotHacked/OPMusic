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
      <a href="indie_list.php" class="active">Indie Filipino</a>
    </div>
    <div class="navbar">
      <span style="font-size: 30px; cursor: pointer" onclick="openNav()">☰</span>
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
      <h1>TOP PINOY INDIE ARTIST</h1>
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
        "Oh, Flamingo!": {
          image: "ohflamingo.jpg",
          href: "https://open.spotify.com/artist/4MC36gyq8Z4HEKxAhaMF58?si=-Uc-xU2AT369NFgqyhgXYA",
          song: "June",
          time: "4:37",
        },
        Autotelic: {
          image: "autotelic.jpg",
          href: "https://open.spotify.com/artist/3Hvxz2oZPYuo61ChHKcqQI?si=PfZ1cHu9Sh62-MqpUMkaXA",
          song: "Laro",
          time: "4:23",
        },
        "Ben&Ben": {
          image: "benandben.jpg",
          href: "https://open.spotify.com/artist/4DAcJXcjX0zlQAZAPAx4Zb?si=2yYrnYIRS3K6pjojlPebZQ",
          song: "Kathang Isip",
          time: "4:31",
        },
        Munimuni: {
          image: "kundiman_genre.jpg",
          href: "https://open.spotify.com/artist/4eKq7eArL96wSQjaaMg9Ic?si=jNzOrG1KSYiA_LfU_Gga5A",
          song: "Sa’yo",
          time: "6:17",
        },
        "The Ransom Collective": {
          image: "theransomcollective.jpg",
          href: "https://open.spotify.com/artist/5TPt1cZ847Fr9CWd9vAm7s?si=bGHfhZZBRZC9ORNniYhdRw",
          song: "Fools",
          time: "4:35",
        },
        "She’s Only Sixteen": {
          image: "shesonlysixteen.jpg",
          href: "https://open.spotify.com/artist/6sYQTuRBvPAaQ9Ba5ca1Yc?si=LzsNvDvUSy-lQoem2qlJMg",
          song: "Magic",
          time: "4:38",
        },
        "Reese Lansangan": {
          image: "reeselansangan.jpg",
          href: "https://open.spotify.com/artist/2JI8ViuZDBybY6Xd9ujUrb?si=j45xwfVDRaCVK_Py202RDQ",
          song: "For the Fickle",
          time: "3:45",
        },
        "Tom’s Story": {
          image: "tomsstory.jpg",
          href: "https://open.spotify.com/artist/3EFd5mZTaObnwJuZvARO16?si=E52JeH-HRAiYySPoEfr-xw",
          song: "Anchors",
          time: "5:34",
        },
        "Ang Bandang Shirley": {
          image: "angbandangshirley.jpg",
          href: "https://open.spotify.com/artist/7goaQP1sgbWsKOjrHenxFJ?si=IMSjyYxVQsuL8bUpicBf4w",
          song: "Nakauwi Na",
          time: "4:48",
        },
        "Jensen and The Flips": {
          image: "jensenandtheflips.jpg",
          href: "https://open.spotify.com/artist/7fVbBzDDOt79tXJsAo5fsw?si=cfWdD1IjQf-FAPjby6bbbg",
          song: "Slow",
          time: "4:21",
        },
        "BP Valenzuela": {
          image: "bpvalenzuela.jpg",
          href: "https://open.spotify.com/artist/2JqqCQCcocEQA6NH1fTvSw?si=n-lnyIw4Ql6gGEibAbYYeA",
          song: "Pretty Car",
          time: "4:19",
        },
        Cheats: {
          image: "cheats.jpg",
          href: "https://open.spotify.com/artist/2z8VAtyLyqBvtYWEK7DCLw?si=7Uz-F3flSvKB2fth8TLU2Q",
          song: "Drunk",
          time: "3:51",
        },
        "Up Dharma Down": {
          image: "updharmadown.jpg",
          href: "https://open.spotify.com/artist/3wbCeEPAW6po7J46netxMT?si=DvzBSXtmSJaQDdkQ5x4oDg",
          song: "Tadhana",
          time: "4:22",
        },
        "Clara Benin": {
          image: "clarabenin.jpg",
          href: "https://open.spotify.com/artist/5ebPSE9YI5aLeZ1Z2gkqjn?si=jsf1KMhDRC6g51ziUNMS8A",
          song: "Tila",
          time: "4:32",
        },
        "IV Of Spades": {
          image: "ivofspades.jpg",
          href: "https://open.spotify.com/artist/4k9wp4ipHdA1bu1T4x1ZTG?si=GAAgfFK-SZODxuDPvgn2wA",
          song: "Mundo",
          time: "4:32",
        },
        "Leanne & Naara": {
          image: "leanneandnaara.jpg",
          href: "https://open.spotify.com/artist/2nZ18B9RTjJH56v2NTnNAI?si=7Xlj1u2YRiiyefXo46azKQ",
          song: "Again",
          time: "3:49",
        },
        "Over October": {
          image: "overoctober.jpg",
          href: "https://open.spotify.com/artist/1hMAGfvamVXuSWBFQRFMeq?si=rb6uAce_RBWuNu9uTcdBkA",
          song: "Wait",
          time: "4:03",
        },
        "Fools & Foes": {
          image: "foolsandfoes.jpg",
          href: "https://open.spotify.com/artist/0WtFxsDBgEqhYYcCcA4N9N?si=hTTasUH3SRKk9ec3Ql2wZA",
          song: "Under",
          time: "4:17",
        },
        "Ourselves the Elves": {
          image: "ourselvestheelves.jpg",
          href: "https://open.spotify.com/artist/62bdZHVpBgv8SRJ9bRfSWE?si=6jtD-BwOQi26yL56xc6Nrw",
          song: "Longing for",
          time: "4:07",
        },
        "Unit 406": {
          image: "unit406.jpg",
          href: "https://open.spotify.com/artist/6zENDSrnNJjA3iCrYmMEJe?si=Yqg6fussQQmtpwOJt3BM2g",
          song: "Pag Uwi",
          time: "5:01",
        },
        "Carousel Casualties": {
          image: "carouselcasualties.jpg",
          href: "https://open.spotify.com/artist/5JKO1slXmXcPZghqTrYG1I?si=l045Jo7LRW-W1uoqhtST9g",
          song: "San Junipero",
          time: "4:32",
        },
        Brisom: {
          image: "brisom.jpg",
          href: "https://open.spotify.com/artist/52AFbIsIjRLcaHCt8KV1rg?si=j-Z67gqrRRCkw1bYBijnrg",
          song: "Balewala",
          time: "4:51",
        },
        Sud: {
          image: "sud.jpg",
          href: "https://open.spotify.com/artist/0jKQrxK2zHqxyOAyIMrUQt?si=FNBG7gtOSmyewsKvpo96Qg",
          song: "Silong",
          time: "4:27",
        },
        "Rusty Machines": {
          image: "rustymachines.jpg",
          href: "https://open.spotify.com/artist/6NdRRHX07ypBWnbKLMDbpM?si=prcm4LHbSEC9WcDEblKnxw",
          song: "What Went Wrong",
          time: "4:38",
        },
        "Banna Harbera": {
          image: "bannaharbera.jpg",
          href: "https://open.spotify.com/artist/53EF6PS4UcQwjNrpaE0968?si=zyX1O3HkR2yLl6ATisTyrg",
          song: "Sorrys & Goodbyes",
          time: "4:23",
        },
        "Any Name’s Okay": {
          image: "anynamesokay.jpg",
          href: "https://open.spotify.com/artist/1CZ6BqSNNDTbyne4SltF0e?si=MFmAq2TVR9GAMr-ue62AMA",
          song: "Blackout",
          time: "4:27",
        },
        "Farewell Fair Weather": {
          image: "farewellfairweather.jpg",
          href: "https://open.spotify.com/artist/7EiOmH9WkXoKhNxkJJd9qy?si=WQaQv4cGRqCsis_iGelHmA",
          song: "Pasakalye",
          time: "4:37",
        },
        TheSunManager: {
          image: "thesunmanager.jpg",
          href: "https://open.spotify.com/artist/6fL2er0LELDZ9HeFSmVKjf?si=syrnOOfpS82Bl9jN9TGhZw",
          song: "No Goodbyes",
          time: "3:55",
        },
        "Shirebound and Busking": {
          image: "shireboundandbusking.jpg",
          href: "https://open.spotify.com/artist/5F6Eu8EFrLQXOqgEj5gbhJ?si=Q34W1YUfTIqWqwztDwurrQ",
          song: "Walang Papel",
          time: "4:02",
        },
        BennyBunnyBand: {
          image: "bennybunnyband.jpg",
          href: "https://open.spotify.com/artist/7F4ismyvXiSnQjigS9sEqL?si=8tjtbo-3TOyMDsGHuVgteA",
          song: "Ambisyoso",
          time: "4:28",
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
