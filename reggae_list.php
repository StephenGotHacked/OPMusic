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
      <a href="reggae_list.php" class="active">Filipino Reggae</a>
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
      <h1>TOP PINOY REGGAE ARTIST</h1>
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
        "Brownman Revival": {
          image: "brownmanrevival.jpg",
          href: "https://open.spotify.com/artist/7ymgfUyJFViyg1qFo4M2nH?si=VgwhCMxmTfCTd-qaAK-UJg",
          song: "Lintik",
          time: "4:15",
        },
        "Tropical Depression": {
          image: "tropicaldepression.jpg",
          href: "https://open.spotify.com/artist/5jjulx3unldBbDDqduPA7u?si=GRhh9ATlSxKrt-rQUt2KHw",
          song: "Bilog Na Naman Ang Buwan",
          time: "4:00",
        },
        "Junior Kilat": {
          image: "juniorkilat.jpg",
          href: "https://open.spotify.com/artist/0xk4WuulCGnS9WPkUypUQJ?si=3-5QDRosQl2-W9omJODy3w",
          song: "Ako si M16",
          time: "3:36",
        },
        "Coffeebreak Island": {
          image: "coffeebreakisland.jpg",
          href: "https://open.spotify.com/artist/7tbM4UKwQWwnOKF1gITIWG?si=nea3EhfRRfaGNvvaH7g7kQ",
          song: "Pakipot",
          time: "4:00",
        },
        "Reggae Mistress": {
          image: "reggaemistress.jpg",
          href: "https://open.spotify.com/artist/2tE9MJSdazwqmu64QA9rLQ?si=4at4nsG4Qcmdt9f9p-DH3Q",
          song: "Maligayang Araw",
          time: "4:17",
        },
        "Coconut Head": {
          image: "coconuthead.jpg",
          href: "https://open.spotify.com/artist/1nYd85aV23dNQqrFmm9duO?si=_xf-faFARZO9FgJ_h88ixg",
          song: "Mangarap Ka",
          time: "4:29",
        },
        Put3ska: {
          image: "put3ska.jpg",
          href: "https://open.spotify.com/artist/5YLXhjQdVWkWgW3LEojsrh?si=3OkIcRyAR72g8Mm6zPuYSg",
          song: "Manila Girl",
          time: "3:29",
        },
        "Dreadknot Used": {
          image: "dreadknotused.jpg",
          href: "https://open.spotify.com/artist/1V2D7X6WPzjXVTgczRrSgz?si=kibdH_ImSfm2XVvOoT0dhA",
          song: "Ambisyoso",
          time: "4:35",
        },
        "Papa U-Gee": {
          image: "papaugee.jpg",
          href: "https://open.spotify.com/artist/4uj6MltSbo9l03VRhkEphE?si=4MrddaToShyYHKewhEMX-A",
          song: "Skankin’ Dayz",
          time: "3:56",
        },
        "Chocolate Factory": {
          image: "chocolatefactory.jpg",
          href: "https://open.spotify.com/artist/6yA7zdm9pZQnwATV2AqBom?si=o1n8_pk2SQOlIRitRnOgXw",
          song: "Kapayapaan",
          time: "4:54",
        },
        "The Oktaves": {
          image: "theoktaves.jpg",
          href: "https://open.spotify.com/artist/4dlsoFRsNu2hApC2vQSx7b?si=aqWWT4LvSM6prb0Ky5FKHA",
          song: "Kuwento ng Pag-Ibig",
          time: "3:51",
        },
        Peacepipe: {
          image: "peacepipe.jpg",
          href: "https://open.spotify.com/artist/5mCZyk5bpFDIYbGljMp8Ej?si=WKGrC1j6TRetI6oYQ_Q7Jg",
          song: "The Sun",
          time: "3:30",
        },
        Engkanto: {
          image: "engkanto.jpg",
          href: "https://open.spotify.com/artist/41EGqv77epAL6yMd6uBt1f?si=asWZjuFtQSKXf5pTVVl3Fg",
          song: "Tubig Alat",
          time: "4:05",
        },
        "The Chongkeys": {
          image: "thechongkeys.jpg",
          href: "https://open.spotify.com/artist/4xc7O7dV03nR7GglKnxjN7?si=BRjj4zLlQLGQEVGL5QuZbQ",
          song: "Gabing Kulimlim",
          time: "5:12",
        },
        "Jeepney Joyride": {
          image: "jeepneyjoyride.jpg",
          href: "https://open.spotify.com/artist/51XF7uuvmhZ2jBy4QJfyXL?si=pVbMzGCxRTq-LHXNdCjdhg",
          song: "Kulay ng Buhay",
          time: "3:58",
        },
        "The Buzzer Beaters": {
          image: "thebuzzerbeaters.jpg",
          href: "https://open.spotify.com/artist/0Mnreqj8QlaynX9PuZNCxs?si=u_j_zdozRxmnW9uFonUZww",
          song: "Pangarap Lang",
          time: "4:15",
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
