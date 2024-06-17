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
      <a href="contemporary_list.php" class="active">Contemporary Folk</a>
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
      <h1>TOP PINOY CONTEMPORARY FOLK ARTIST</h1>
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
        "Moira Dela Torre": {
          image: "moiradelatorre.jpg",
          href: "https://open.spotify.com/artist/0rZRTXEmmPmx6gt92tBqIc?si=7QcG0JfLQpuSIbaEv26Izw",
          song: "Tagpuan",
          time: "4:36",
        },
        "Ben&Ben": {
          image: "benandben.jpg",
          href: "https://open.spotify.com/artist/4DAcJXcjX0zlQAZAPAx4Zb?si=X4fL3WcETD-qlDk6G3Nddw",
          song: "Kathang Isip",
          time: "4:31",
        },
        "IV Of Spades": {
          image: "ivofspades.jpg",
          href: "https://open.spotify.com/artist/4k9wp4ipHdA1bu1T4x1ZTG?si=cs1EoFv1Ti-XeymNDinLnw",
          song: "Mundo",
          time: "4:32",
        },
        "Unique Salonga": {
          image: "unique.jpg",
          href: "https://open.spotify.com/artist/30mZI7Hw2MhoarTVYxfyZM?si=g73c2IZRSE6I7kedWqV_qg",
          song: "Midnight Sky",
          time: "3:27",
        },
        "Leanne & Naara": {
          image: "leanneandnaara.jpg",
          href: "https://open.spotify.com/artist/2nZ18B9RTjJH56v2NTnNAI?si=cNLlSC6wTb2_bz5EICO3Zg",
          song: "Again",
          time: "3:49",
        },
        "Reese Lansangan": {
          image: "reeselansangan.jpg",
          href: "https://open.spotify.com/artist/2JI8ViuZDBybY6Xd9ujUrb?si=ojixEh33QZWAUWgvGR19uQ",
          song: "Grammar Nazi",
          time: "3:26",
        },
        Munimuni: {
          image: "kundiman_genre.jpg",
          href: "https://open.spotify.com/artist/4eKq7eArL96wSQjaaMg9Ic?si=HFsUuyo7TVCgvJp6Y1VMlA",
          song: "Sa’yo",
          time: "6:17",
        },
        "Clara Benin": {
          image: "clarabenin.jpg",
          href: "https://open.spotify.com/artist/5ebPSE9YI5aLeZ1Z2gkqjn?si=dug2LyGqQF-GtDlJNGmH5Q",
          song: "Tila",
          time: "4:32",
        },
        Autotelic: {
          image: "autotelic.jpg",
          href: "https://open.spotify.com/artist/3Hvxz2oZPYuo61ChHKcqQI?si=sBYJbhN5SPaGRZIjIlPZWg",
          song: "Gising",
          time: "5:03",
        },
        "Keiko Necesario": {
          image: "keikonecesario.jpg",
          href: "https://open.spotify.com/artist/0DouUeF604QbSdKYIL3xrq?si=ijaZnDGoTlS9Y_8iL-_QHg",
          song: "Away From the Current",
          time: "3:41",
        },
        "Oh, Flamingo!": {
          image: "ohflamingo.jpg",
          href: "https://open.spotify.com/artist/4MC36gyq8Z4HEKxAhaMF58?si=CJ73gEf0SOGfo68gVAyuJA",
          song: "June",
          time: "4:37",
        },
        "Up Dharma Down": {
          image: "updharmadown.jpg",
          href: "https://open.spotify.com/artist/3wbCeEPAW6po7J46netxMT?si=fEbM-_5kQDuMmD6gbIksYA",
          song: "Tadhana",
          time: "4:22",
        },
        "Johnoy Danao": {
          image: "johnoydanao.jpg",
          href: "https://open.spotify.com/artist/2zFBNsALb4M2FhKl98wcvd?si=603pwUV4SNe5d1ozDjcN_g",
          song: "Ikaw At Ako",
          time: "4:36",
        },
        "Bullet Dumas": {
          image: "bulletdumas.jpg",
          href: "https://open.spotify.com/artist/1hFH6NZJrhl0Un65IZxlZH?si=2WPN25zWS9qM7WxDuf_mxQ",
          song: "Ninuno",
          time: "3:59",
        },
        "The Ransom Collective": {
          image: "alt_genre.jpg",
          href: "https://open.spotify.com/artist/5TPt1cZ847Fr9CWd9vAm7s?si=jWIt-be1TR6xGIM22qxV9w",
          song: "Fools",
          time: "4:35",
        },
        "She’s Only Sixteen": {
          image: "shesonlysixteen.jpg",
          href: "https://open.spotify.com/artist/6sYQTuRBvPAaQ9Ba5ca1Yc?si=WYOI7N7kT3u0s8URf91YhA",
          song: "Magic",
          time: "4:38",
        },
        Cheats: {
          image: "cheats.jpg",
          href: "https://open.spotify.com/artist/4XUJ1FQti6aKrUrZTCBFKz?si=GbWyYNuOSBW1lt1IgrpnFA",
          song: "Drunk",
          time: "3:51",
        },
        "Tom’s Story": {
          image: "tomsstory.jpg",
          href: "https://open.spotify.com/artist/3EFd5mZTaObnwJuZvARO16?si=h2Co5kqsS3KWgBrG9JJ--A",
          song: "Anchors",
          time: "5:34",
        },
        "Jensen Gomez": {
          image: "jensengomez.jpg",
          href: "https://open.spotify.com/artist/3xZCL7YJQySq6zYycUfdSv?si=fhi2j-rNQ5O99oBk-7bWWA",
          song: "Slow",
          time: "3:48",
        },
        "The Itchyworms": {
          image: "itchyworms.jpg",
          href: "https://open.spotify.com/artist/5cYJYBMg1n71v7cvthr1SO?si=jZ7VnuglS8qbQZxM5QHMSg",
          song: "Di Na Muli",
          time: "5:03",
        },
        "BP Valenzuela": {
          image: "bpvalenzuela.jpg",
          href: "https://open.spotify.com/artist/2JqqCQCcocEQA6NH1fTvSw?si=ZxnA2zqzSdGFPeORuGzVeg",
          song: "Pretty Car",
          time: "4:19",
        },
        "Ang Bandang Shirley": {
          image: "angbandangshirley.jpg",
          href: "https://open.spotify.com/artist/7goaQP1sgbWsKOjrHenxFJ?si=3TLVBnjrSZuNEH-AoRHGwQ",
          song: "Nakauwi Na",
          time: "4:48",
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
