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
      <a href="r&bsoul_list.php" class="active">Filipino R&B/Soul</a>
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
      <h1>TOP PINOY R&B/SOUL ARTIST</h1>
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
        "Jay R": {
          image: "jayr.jpg",
          href: "https://open.spotify.com/artist/3z0IVhtuFvt9VYUZGT98PU?si=kwHyl4cWTrOFxYwd2BlR1A",
          song: "Bakit Pa Ba",
          time: "4:39",
        },
        Kyla: {
          image: "kyla.jpg",
          href: "https://open.spotify.com/artist/2vTbuBRo7ACOZ3JsCnaL7S?si=YRPXJoE0TdeWXIsafmrteQ",
          song: "Hanggang Ngayon",
          time: "4:39",
        },
        "Daryl Ong": {
          image: "darylong.jpg",
          href: "https://open.spotify.com/artist/1vg8YXdgvLLPPeXZkM7g5W?si=bbVVLR2LQGKLTAr8PuuRXA",
          song: "Stay",
          time: "4:10",
        },
        "Kris Lawrence": {
          image: "krislawrence.jpg",
          href: "https://open.spotify.com/artist/11Jdq2gOTBhmfEYmFrZlue?si=IgDv7n0-SoeH7WnLml6RFA",
          song: "Ikaw Pala",
          time: "4:02",
        },
        "KZ Tandingan": {
          image: "rnb_genre.jpg",
          href: "https://open.spotify.com/artist/1mcqfNCReSFxun2vIWvC28?si=wMcT3g_lSayi2gc3PCBSOQ",
          song: "Labo",
          time: "4:48",
        },
        Morissette: {
          image: "morissette.jpg",
          href: "https://open.spotify.com/artist/62WbvkXqQGvXQvw74GU3kQ?si=tucWOKWATNilUTYKs6yKiQ",
          song: "Akin Ka Na Lang",
          time: "4:00",
        },
        JRoa: {
          image: "jroa.jpg",
          href: "https://open.spotify.com/artist/2U5mF0PZqGu6glnz55yY0y?si=svIdYT91Qq2wMhpM1nsLnQ",
          song: "Dati",
          time: "4:28",
        },
        "Marion Aunor": {
          image: "marionaunor.jpg",
          href: "https://open.spotify.com/artist/0lslA51eKXwTUY0TSX9Emy?si=Ib_XooiFSe6zRvHD2Gdquw",
          song: "Pumapag-ibig",
          time: "4:05",
        },
        "Sam Concepcion": {
          image: "samconcepcion.jpg",
          href: "https://open.spotify.com/artist/2P3aLwJ41aRYkyFFw2FRM7?si=Saz2eu1_QUmvvFMksrDFjA",
          song: "Mahal Na Mahal",
          time: "4:30",
        },
        "Jason Dy": {
          image: "jasondy.jpg",
          href: "https://open.spotify.com/artist/74KlZuH1AECATYKwBlWAdg?si=bDgmGREpRH2Zr6sdIPfsxA",
          song: "Milagro",
          time: "4:27",
        },
        "Bugoy Drilon": {
          image: "bugoydrilon.jpg",
          href: "https://open.spotify.com/artist/0kRAKgEOVI43Qkz9PLmPt8?si=zel7qqZXSvO6f8NsoTbl_Q",
          song: "Paano Na Kaya",
          time: "4:43",
        },
        "Erik Santos": {
          image: "eriksantos.jpg",
          href: "https://open.spotify.com/artist/7ygtjsCTrCQZAYYPOne9uE?si=aoOsNAAYRMmiTIL7AEdH-w",
          song: "Pagbigyang Muli",
          time: "4:29",
        },
        Jaya: {
          image: "jaya.jpg",
          href: "https://open.spotify.com/artist/2TeEZ5rfw62Mw15I4RFjXK?si=3ikvD0iFT7ybbLOTkQ83gw",
          song: "Wala Na Bang Pag-ibig",
          time: "4:15",
        },
        "Jay Durias": {
          image: "jaydurias.jpg",
          href: "https://open.spotify.com/artist/3i3YJ0RtwlBaIFovnYz3GX?si=vV5kpESSS6GV_VfalswFkQ",
          song: "Bakit Pa?",
          time: "4:48",
        },
        "Julie Anne San Jose": {
          image: "julieannesanjose.jpg",
          href: "https://open.spotify.com/artist/4NeCu267LZemnoq44lZYKy?si=5xJq-T5kQkiZ8PwdbBsnag",
          song: "Naririnig Mo Ba",
          time: "4:23",
        },
        Quest: {
          image: "quest.jpg",
          href: "https://open.spotify.com/artist/4N7VMCvYd9Reh5bJLnRVzY?si=wqLWelUgSO6JhWc1OERDnQ",
          song: "Sige Lang",
          time: "4:08",
        },
        "Janno Gibbs": {
          image: "jannogibbs.jpg",
          href: "https://open.spotify.com/artist/6ty99gP6NrhgCOkMF2ONpy?si=3_Bh2NyTR7G60EPzpExaHA",
          song: "Fallin’",
          time: "3:59",
        },
        Karylle: {
          image: "karylle.jpg",
          href: "https://open.spotify.com/artist/3WqnLipraJrtfa6akDued9?si=T0_Bdjs7S62tOXow_H2b-A",
          song: "Say You’ll Never Go",
          time: "4:37",
        },
        "Yeng Constantino": {
          image: "yengconstantino.jpg",
          href: "https://open.spotify.com/artist/0DnjaQqb436AH1idffI6CQ?si=IRCg6oTvS9GhkAxb4B7AIQ",
          song: "Salamat",
          time: "4:07",
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
