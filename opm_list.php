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
      <a href="opm_list.php" class="active">OPM</a>
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
      <h1>TOP OPM ARTIST</h1>
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
        Eraserheads: {
          image: "alt_genre.jpg",
          href: "https://open.spotify.com/artist/7374lH6kwx9uQATYQ9H3Cp?si=2LYyzI7sQ1yqaHQuKpnExw",
          song: "Ang Huling El Bimbo",
          time: "6:31",
        },
        "Parokya ni Edgar": {
          image: "rock_genre.jpg",
          href: "https://open.spotify.com/artist/2XHTklRsNMOOQT56Zm3WS4?si=wbVG0NErRWOvM5F4fkdpIg",
          song: "Harana",
          time: "4:12",
        },
        Aegis: {
          image: "aegis.jpg",
          href: "https://open.spotify.com/artist/65kpH75MFCBJhLy7qvVl6A?si=6cXZU5yRSyqbpDSjadZpLQ",
          song: "Halik",
          time: "5:12",
        },
        Bamboo: {
          image: "bamboo.jpg",
          href: "https://open.spotify.com/artist/0c7d9V8rjfT6tzojfBfRf5?si=o8KzuzkQSUuLNN8SNy15lA",
          song: "Hallelujah",
          time: "4:00",
        },
        Rivermaya: {
          image: "rivermaya.jpg",
          href: "https://open.spotify.com/artist/1ZTdxfZTeztyAgKUJVLxAI?si=xAmoH42DQAaaffVfEPgOgQ",
          song: "Hinahanap-hanap Kita",
          time: "4:19",
        },
        "Regine Velasquez": {
          image: "reginevelasquez.jpg",
          href: "https://open.spotify.com/artist/3wNylAjJX1PiCpMKx8Lrfp?si=5YTFfQyMThiKIku3u0aTFA",
          song: "Dadalhin",
          time: "4:05",
        },
        "Sarah Geronimo": {
          image: "sarahgeronimo.jpg",
          href: "https://open.spotify.com/artist/6aiCKnIN68hohzU3ZzNq48?si=JDMKe0KMTveZFy2LFxczJw",
          song: "Tala",
          time: "4:34",
        },
        Kamikazee: {
          image: "kamikazee.jpg",
          href: "https://open.spotify.com/artist/4GBFKKuwmZUnAJt6nBal7A?si=CgGZN9AqQ_qGQrfUaktF-w",
          song: "Narda",
          time: "4:24",
        },
        "Silent Sanctuary": {
          image: "silentsanctuary.jpg",
          href: "https://open.spotify.com/artist/4nGp682WMiKS4X217kPw8C?si=HZdRfjRWSAuPr6Yata2hMA",
          song: "Pasensya Ka Na",
          time: "4:12",
        },
        "Yeng Constantino": {
          image: "yengconstantino.jpg",
          href: "https://open.spotify.com/artist/0DnjaQqb436AH1idffI6CQ?si=l72gnt8ITdSZgVpeCNyCVw",
          song: "Hawak Kamay",
          time: "4:19",
        },
        "Gary Valenciano": {
          image: "garyvalenciano.jpg",
          href: "https://open.spotify.com/artist/0RHiqaoRCsFLPeEuj3OQz4?si=ritSWSkJReCmyKqCig01nA",
          song: "Wag Ka Nang Umiyak",
          time: "4:25",
        },
        "Up Dharma Down": {
          image: "updharmadown.jpg",
          href: "https://open.spotify.com/artist/3wbCeEPAW6po7J46netxMT?si=cSlAMFGnSv6kpYcQe-lEUQ",
          song: "Tadhana",
          time: "4:16",
        },
        "Rico Blanco": {
          image: "ricoblanco.jpg",
          href: "https://open.spotify.com/artist/6l880dxsvN2x5wiceaG6D0?si=kIye68N9Q8mvAfzUrfYKQg",
          song: "Your Universe",
          time: "4:49",
        },
        Itchyworms: {
          image: "itchyworms.jpg",
          href: "https://open.spotify.com/artist/5cYJYBMg1n71v7cvthr1SO?si=YyD538DYTGSzVv59Z9lxtQ",
          song: "Akin Ka Na Lang",
          time: "3:36",
        },
        "IV of Spades": {
          image: "ivofspades.jpg",
          href: "https://open.spotify.com/artist/4k9wp4ipHdA1bu1T4x1ZTG?si=dUx2O6T7SYy6WbcNOIHQJA",
          song: "Mundo",
          time: "4:24",
        },
        "Moira Dela Torre": {
          image: "moiradelatorre.jpg",
          href: "https://open.spotify.com/artist/0rZRTXEmmPmx6gt92tBqIc?si=-EhAs7ZDThujCL7wqdJJZQ",
          song: "Malaya",
          time: "4:19",
        },
        "Janno Gibbs": {
          image: "jannogibbs.jpg",
          href: "https://open.spotify.com/artist/6ty99gP6NrhgCOkMF2ONpy?si=0ob_pHgNTJ6-cW81GS_f7Q",
          song: "Fallin'",
          time: "4:37",
        },
        "Kitchie Nadal": {
          image: "kitchienadal.jpg",
          href: "https://open.spotify.com/artist/4OjU5UP0GFWeniBC82sGBY?si=RkrZAQx0S3KcfcL_mlsqgQ",
          song: "Wag Na Wag Mong Sasabihin",
          time: "4:15",
        },
        Callalily: {
          image: "callalily.jpg",
          href: "https://open.spotify.com/artist/4HOEnLufwAqJ2qoJPVnL01?si=u7yqriUnRH6P0nKoWCx3vw",
          song: "Magbalik",
          time: "4:52",
        },
        Freestyle: {
          image: "freestyle.jpg",
          href: "https://open.spotify.com/artist/0jarApAsbmiCkYhz0590mE?si=vKhw3iDjRrqoWoaMcRoDzQ",
          song: "Bakit Ngayon Ka Lang?",
          time: "4:04",
        },
        "Sponge Cola": {
          image: "spongecola.jpg",
          href: "https://open.spotify.com/artist/1tXFYQZSAswt4JLB42lpye?si=ATXvcoBWQnyrjicfXdvVVw",
          song: "Jeepney",
          time: "4:15",
        },
        Moonstar88: {
          image: "moonstar88.jpg",
          href: "https://open.spotify.com/artist/2kZThDGZcHl4klYYFk0v8n?si=UOV4HK2KQiOxIKqmyX2Zuw",
          song: "Torete",
          time: "4:08",
        },
        "Side A": {
          image: "sidea.jpg",
          href: "https://open.spotify.com/artist/31oMMIBDMM2Z1RQO7u8irE?si=sgWxCvDiSUO8-1rGN5ydeg",
          song: "Forevermore",
          time: "4:33",
        },
        "Barbie Almalbis": {
          image: "barbiealmalbis.jpg",
          href: "https://open.spotify.com/artist/6XMiJRtSvw0PYHOBSBEsMg?si=ihaZyLwzT-mZ6yF8j-UwqQ",
          song: "Torpe",
          time: "4:24",
        },
        "South Border": {
          image: "southborder.jpg",
          href: "https://open.spotify.com/artist/0OQTpHozHskoMT1PPKdsX3?si=5HAW4U5NSbqHzIf-GLozUQ",
          song: "Kahit Kailan",
          time: "4:17",
        },
        Hale: {
          image: "hale.jpg",
          href: "https://open.spotify.com/artist/6Ww3OMFzCaO33ulKh1LBFN?si=i6QfR9RXQSuEV81EME3EVw",
          song: "The Day You Said Goodnight",
          time: "4:05",
        },
        Sandwich: {
          image: "album3.jpg",
          href: "https://open.spotify.com/artist/6baezjDaGyBqrW8xGqw3a5?si=K9kSg4w1SnCrlUcHvJp7jA",
          song: "Sugod",
          time: "4:05",
        },
        "Ebe Dancel": {
          image: "ebedancel.jpg",
          href: "https://open.spotify.com/artist/543f0NvGig5Moo9XROTUur?si=JD_MssEdR1SVzOJLsgP8Gg",
          song: "Wag Ka Nang Umiyak",
          time: "4:16",
        },
        "KZ Tandingan": {
          image: "rnb_genre.jpg",
          href: "https://open.spotify.com/artist/1mcqfNCReSFxun2vIWvC28?si=mVfcenTjTFixQSLhIr-ZTQ",
          song: "Mahal Ko o Mahal Ako",
          time: "4:31",
        },
        "6cyclemind": {
          image: "6cyclemind.jpg",
          href: "https://open.spotify.com/artist/3nZa8vRD64ueq3d0JNYTsl?si=uOZLCghmQcqKsGTAMLjisQ",
          song: "Biglaan",
          time: "3:50",
        },
        "True Faith": {
          image: "truefaith.jpg",
          href: "https://open.spotify.com/artist/6RV3CKY0UJIPKXyGs85Thm?si=o3rjlds0Sx2A7W2Kg9vpVA",
          song: "Huwag Na Lang Kaya",
          time: "4:06",
        },
        "Christian Bautista": {
          image: "christianbautista.jpg",
          href: "https://open.spotify.com/artist/4U78sK2D3zASSB6oSR38GQ?si=fi4g-Ch-Re2tREpIJjcdog",
          song: "The Way You Look at Me",
          time: "3:33",
        },
        Siakol: {
          image: "siakol.jpg",
          href: "https://open.spotify.com/artist/3l9mRJIGzW7RrEE2H8Ldvq?si=z9R2DTTeRMmQR_6F8l2M_Q",
          song: "Tropa",
          time: "4:25",
        },
        MYMP: {
          image: "mymp.jpg",
          href: "https://open.spotify.com/artist/5elcNQkZ6FCZA3grSOMngY?si=3FO1aBoJRhSghZVGJ2fnQQ",
          song: "A Little Bit",
          time: "3:51",
        },
        Juris: {
          image: "juris.jpg",
          href: "https://open.spotify.com/artist/4BNWanhw4AjSXjBm9L1Jzy?si=rmjyUPqkSMGpk3qmziM8KQ",
          song: "Di Lang Ikaw",
          time: "4:39",
        },
        Cueshé: {
          image: "cueshe.jpg",
          href: "https://open.spotify.com/artist/6Xx1uQPrAF37dtVMKEmvx5?si=fGGI9E3GTtOA9pIJs2DuUQ",
          song: "Stay",
          time: "4:11",
        },
        "Orange and Lemons": {
          image: "orangeandlemons.jpg",
          href: "https://open.spotify.com/artist/1EUmQM6xgUQLUkJVcvSdey?si=9RLyDkEKRGmkBHMUbzITSA",
          song: "Hanggang Kailan",
          time: "4:06",
        },
        "December Avenue": {
          image: "decemberavenue.jpg",
          href: "https://open.spotify.com/artist/4qFxP3qN9GsnZDOkAE6x2m?si=rrDTnI9yQzmeommzyInJHw",
          song: "Sa Ngalan ng Pag-ibig",
          time: "5:29",
        },
        Gracenote: {
          image: "gracenote.jpg",
          href: "https://open.spotify.com/artist/4mrrcDjpjUq27YEGwlisgs?si=AqMRJIHpTsaFGm1GnVpLbA",
          song: "Bakit Ganyan Ka?",
          time: "4:00",
        },
        "Ben&Ben": {
          image: "benandben.jpg",
          href: "https://open.spotify.com/artist/4DAcJXcjX0zlQAZAPAx4Zb?si=epy3isoAQHWw1cY5n_9VQA",
          song: "Kathang Isip",
          time: "5:07",
        },
        "Juan Karlos": {
          image: "juankarlos.jpg",
          href: "https://open.spotify.com/artist/0a4r2EnsevvHCukoJ1xFwJ?si=T-9_RrfwT16EmiHmK8_4qw",
          song: "Buwan",
          time: "4:02",
        },
        Autotelic: {
          image: "autotelic.jpg",
          href: "https://open.spotify.com/artist/3Hvxz2oZPYuo61ChHKcqQI?si=byz6Qi68RO6xFYLbgkeegg",
          song: "Languyin",
          time: "4:47",
        },
        "This Band": {
          image: "thisband.jpg",
          href: "https://open.spotify.com/artist/5HIZU0JzM0AgfItVOm4E08?si=goVUsDvPTpCTjmiY3XS-1A",
          song: "Kahit Ayaw Mo Na",
          time: "3:55",
        },
        Unique: {
          image: "unique.jpg",
          href: "https://open.spotify.com/artist/30mZI7Hw2MhoarTVYxfyZM?si=TogOl2aiT6W1Pa6LlkpsFA",
          song: "Sino",
          time: "4:11",
        },
        "I Belong to the Zoo": {
          image: "contemporary_genre.jpg",
          href: "https://open.spotify.com/artist/7tKpXx21KVUOR6vvDs6xtg?si=YGteDd0MTziGNqShLxvzXA",
          song: "Balang Araw",
          time: "4:22",
        },
        SB19: {
          image: "sb19.jpg",
          href: "https://open.spotify.com/artist/3g7vYcdDXnqnDKYFwqXBJP?si=tvEnA1SqTj6tvqdZmuGZYQ",
          song: "Alab (Burning)",
          time: "4:19",
        },
        "Al James": {
          image: "aljames.jpg",
          href: "https://open.spotify.com/artist/2G7VQ1kVhVfNagytlousgm?si=JeIYlWusSj276BRVc9jmSA",
          song: "Pa-Umaga",
          time: "4:43",
        },
        Zsaris: {
          image: "zsaris.jpg",
          href: "https://open.spotify.com/artist/5nQaLW2m4fzJwUVluO03hQ?si=oePAkI6cRXyin-kcsntmeA",
          song: "Pusong Naliligaw",
          time: "3:33",
        },
        "Leanne & Naara": {
          image: "leanneandnaara.jpg",
          href: "https://open.spotify.com/artist/2nZ18B9RTjJH56v2NTnNAI?si=G-TisuLwTNuBAeHmztyaRQ",
          song: "Rest",
          time: "3:40",
        },
        "Syd Hartha": {
          image: "sydhartha.jpg",
          href: "https://open.spotify.com/artist/3BQ7MYNeB0wMPtHYPWvu1C?si=_c7tV05TRPGFd2PnE6dGDg",
          song: "Ayaw",
          time: "4:17",
        },
        "The Itchyworms": {
          image: "itchyworms.jpg",
          href: "https://open.spotify.com/artist/5cYJYBMg1n71v7cvthr1SO?si=Mp9DGNJXTJqTN1ee0jKBqg",
          song: "Di Na Muli",
          time: "5:11",
        },
        "Ang Bandang Shirley": {
          image: "angbandangshirley.jpg",
          href: "https://open.spotify.com/artist/7goaQP1sgbWsKOjrHenxFJ?si=3-M2DdFDRXqzAEbonp-t_g",
          song: "Umaapaw",
          time: "5:02",
        },
        "Inigo Pascual": {
          image: "inigopascual.jpg",
          href: "https://open.spotify.com/artist/0XOSmu9Qn1agQULUVe0dAK?si=GlWJVVScSNaSaCB8me-7Yw",
          song: "Dahil Sa'yo",
          time: "3:20",
        },
        "Kean Cipriano": {
          image: "keancipriano.jpg",
          href: "https://open.spotify.com/artist/1RkRG7rQC8UlUTFrsVYUGj?si=qHe_nBOlRd2PPbYQil6X8Q",
          song: "Song For Mary",
          time: "3:46",
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
