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
      <a href="hiphop_rap.php" class="active">Pinoy Hip-Hop/Rap</a>
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
      <h1>TOP PINOY HIP-HOP/RAP ARTIST</h1>
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
        "Francis Magalona": {
          image: "francism.jpg",
          href: "https://open.spotify.com/artist/1ayiGn4MLc427PozR13p1y?si=_Ij1mCHWQKuAw17fWgmutg",
          song: "Kaleidoscope World",
          time: "4:41",
        },
        "Andrew E.": {
          image: "andrew_e.jpg",
          href: "https://open.spotify.com/artist/6TcTgRYJBQzadIFeXXWA3I?si=0vr9e6FXQ-SfHg1noGc-EA",
          song: "Banyo Queen",
          time: "4:11",
        },
        Abra: {
          image: "abra.jpg",
          href: "https://open.spotify.com/artist/0e7I5fhtxrhsH8xrjGGDiv?si=RVA1-w1AQIO7bx1T89r2Vg",
          song: "Gayuma",
          time: "3:48",
        },
        "Gloc-9": {
          image: "gloc9.jpg",
          href: "https://open.spotify.com/artist/7HJDRQAfEcFiARVehhM6qD?si=b_A2FgnzRF2tpdgp8rqW1A",
          song: "Upuan",
          time: "4:15",
        },
        "Shanti Dope": {
          image: "shantidope.jpg",
          href: "https://open.spotify.com/artist/6ogIjp0fsbUxlqy9q2rvrT?si=GUggUCznTJmroW_fz1Ht7w",
          song: "Nadarang",
          time: "3:51",
        },
        Loonie: {
          image: "loonie.jpg",
          href: "https://open.spotify.com/artist/552jNI1kUtB1FPRZFliQxc?si=yW8tn1lPS9SzJhYZqFTZKA",
          song: "Tao Lang",
          time: "4:53",
        },
        "Ex Battalion": {
          image: "exbattalion.jpg",
          href: "https://open.spotify.com/artist/2iB7AJhJmkWkkehY9ccB0j?si=_0oZ9geeQ0abiM0M4WeKQA",
          song: "Hayaan Mo Sila",
          time: "5:35",
        },
        Smugglaz: {
          image: "smugglaz.jpg",
          href: "https://open.spotify.com/artist/2FvXtuMlYRrEkSF7kdAfFq?si=odeJ0y4hQVei0sxJR5Z_XA",
          song: "Nakakamiss",
          time: "5:26",
        },
        Bassilyo: {
          image: "bassilyo.jpg",
          href: "https://open.spotify.com/artist/24GNt8qmlsj3hwYgRgiTQ9?si=BeTwG9UvSMCpwsG3a6Z5Cg",
          song: "Lord Patawad",
          time: "4:55",
        },
        "Flict-G": {
          image: "flictg.jpg",
          href: "https://open.spotify.com/artist/4K7jEoIMJx2MpmgivAbJsS?si=N89Kx588T0CKLQCgDsnURA",
          song: "Paglisan",
          time: "5:03",
        },
        BLKD: {
          image: "blkd.jpg",
          href: "https://open.spotify.com/artist/4I1iKyF3JdZ8sR9RHdGFfJ?si=Q4rKTEv0SLy5wCGJkXizoQ",
          song: "Gatilyo",
          time: "4:32",
        },
        "Mike Kosa": {
          image: "mikekosa.jpg",
          href: "https://open.spotify.com/artist/6RU3UGNOEiiSZpLCpeP3zE?si=tHpCGKXZTXy9jjPC3ckvCg",
          song: "My Game",
          time: "4:52",
        },
        Zaito: {
          image: "zaito.jpg",
          href: "https://open.spotify.com/artist/35lTa233JxizbmSBOpZsgF?si=T4XT2KRpTpW6N9zvw0vt6A",
          song: "Pain In Da Neck",
          time: "4:22",
        },
        Shehyee: {
          image: "shehyee.jpg",
          href: "https://open.spotify.com/artist/5GdspZ491zr64zzwVJJjJZ?si=_5IK1-9STze1JOYgjuMJew",
          song: "Trip Lang",
          time: "4:47",
        },
        "Flow G": {
          image: "flowg.jpg",
          href: "https://open.spotify.com/artist/3PDFGpPl4ienSn5Vwisfrh?si=svkwqvgmRoeAebv3afmCjQ",
          song: "Pasaload",
          time: "3:47",
        },
        "Skusta Clee": {
          image: "skustaclee.jpg",
          href: "https://open.spotify.com/artist/117XFtbZPnCI1EYKjYZWJc?si=WNqCtpiWQj-d0uq0kmj66Q",
          song: "Zebbiana",
          time: "4:44",
        },
        "Nik Makino": {
          image: "nikmakino.jpg",
          href: "https://open.spotify.com/artist/3lFMRWaEWZlfXdBig97kks?si=hQAqNz_nQASoNMBHCxvfoA",
          song: "Neneng B",
          time: "4:05",
        },
        "Al James": {
          image: "aljames.jpg",
          href: "https://open.spotify.com/artist/2G7VQ1kVhVfNagytlousgm?si=ah9f6MaLSRmnnOrXrLl7Fw",
          song: "Pa-Umaga",
          time: "4:07",
        },
        "Hev Abi": {
          image: "hevabi.jpg",
          href: "https://open.spotify.com/artist/4zpGxqF6oI1h3f6Md2v42T?si=CtPzWKxaSEugbfM9_-7lLg",
          song: "Walang Alam",
          time: "3:05",
        },
        Because: {
          image: "because.jpg",
          href: "https://open.spotify.com/artist/0n4a5imdLBN24fIrBWoqrv?si=3e5EBDYrQJ-XjqpGGaZ9rw",
          song: "BMW",
          time: "2:48",
        },
        Kiyo: {
          image: "kiyo.jpg",
          href: "https://open.spotify.com/artist/6gcteR920pLEynlHzjSRYd?si=xxyttT0cQHaouX2H6QpU-Q",
          song: "Ikaw lang",
          time: "4:01",
        },
        Nateman: {
          image: "nateman.jpg",
          href: "https://open.spotify.com/artist/14AlQdTUuzYESzQYKU6QIE?si=01Iy7G7HR6eUVfPQDw3WZg",
          song: "Parehas Tayo",
          time: "4:16",
        },
        "Lo Ki": {
          image: "loki.jpg",
          href: "https://open.spotify.com/artist/1dFRlDO2Z2gjAARxHlovAS?si=0tHVbo1LQxqFUjgdnaiFvg",
          song: "Kagome",
          time: "3:58",
        },
        "Young JV": {
          image: "youngjv.jpg",
          href: "https://open.spotify.com/artist/7EoWwfaBrm0UbJkKkBMo89?si=-NHCmSxMT5eXMUse10JDqQ",
          song: "Doin' It Big",
          time: "4:01",
        },
        "Apl.de.ap": {
          image: "apldeap.jpg",
          href: "https://open.spotify.com/artist/6LB6kuJjrGvRzAkH6ddeWt?si=f0-txP23SO2VwPgeDbNAOg",
          song: "Bebot",
          time: "4:46",
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
