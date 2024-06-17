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
      <a href="pop_list.php" class="active">Pinoy Pop</a>
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
      <h1>TOP PINOY POP ARTIST</h1>
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
        "Sarah Geronimo": {
          image: "sarahgeronimo.jpg",
          href: "https://open.spotify.com/artist/6aiCKnIN68hohzU3ZzNq48?si=JDMKe0KMTveZFy2LFxczJw",
          song: "Tala",
          time: "4:19",
        },
        "Gary Valenciano": {
          image: "garyvalenciano.jpg",
          href: "https://open.spotify.com/artist/0RHiqaoRCsFLPeEuj3OQz4?si=ritSWSkJReCmyKqCig01nA",
          song: "Hataw Na",
          time: "4:04",
        },
        "Moira Dela Torre": {
          image: "moiradelatorre.jpg",
          href: "https://open.spotify.com/artist/0rZRTXEmmPmx6gt92tBqIc?si=-EhAs7ZDThujCL7wqdJJZQ",
          song: "Tagpuan",
          time: "4:36",
        },
        Eraserheads: {
          image: "alt_genre.jpg",
          href: "https://open.spotify.com/artist/7374lH6kwx9uQATYQ9H3Cp?si=2LYyzI7sQ1yqaHQuKpnExw",
          song: "Ang Huling El Bimbo",
          time: "6:31",
        },
        "Regine Velasquez": {
          image: "reginevelasquez.jpg",
          href: "https://open.spotify.com/artist/3wNylAjJX1PiCpMKx8Lrfp?si=5YTFfQyMThiKIku3u0aTFA",
          song: "Narito Ako",
          time: "4:08",
        },
        "Parokya ni Edgar": {
          image: "rock_genre.jpg",
          href: "https://open.spotify.com/artist/2XHTklRsNMOOQT56Zm3WS4?si=wbVG0NErRWOvM5F4fkdpIg",
          song: "Harana",
          time: "4:13",
        },
        "Ben&Ben": {
          image: "benandben.jpg",
          href: "https://open.spotify.com/artist/4DAcJXcjX0zlQAZAPAx4Zb?si=epy3isoAQHWw1cY5n_9VQA",
          song: "Kathang Isip",
          time: "4:31",
        },
        "Yeng Constantino": {
          image: "yengconstantino.jpg",
          href: "https://open.spotify.com/artist/0DnjaQqb436AH1idffI6CQ?si=l72gnt8ITdSZgVpeCNyCVw",
          song: "Hawak Kamay",
          time: "4:19",
        },
        "Rico Blanco": {
          image: "ricoblanco.jpg",
          href: "https://open.spotify.com/artist/6l880dxsvN2x5wiceaG6D0?si=kIye68N9Q8mvAfzUrfYKQg",
          song: "Your Universe",
          time: "4:40",
        },
        Aegis: {
          image: "aegis.jpg",
          href: "https://open.spotify.com/artist/65kpH75MFCBJhLy7qvVl6A?si=6cXZU5yRSyqbpDSjadZpLQ",
          song: "Halik",
          time: "5:08",
        },
        "IV of Spades": {
          image: "ivofspades.jpg",
          href: "https://open.spotify.com/artist/4k9wp4ipHdA1bu1T4x1ZTG?si=dUx2O6T7SYy6WbcNOIHQJA",
          song: "Mundo",
          time: "4:32",
        },
        "Up Dharma Down": {
          image: "updharmadown.jpg",
          href: "https://open.spotify.com/artist/3wbCeEPAW6po7J46netxMT?si=cSlAMFGnSv6kpYcQe-lEUQ",
          song: "Oo",
          time: "5:07",
        },
        "Daniel Padilla": {
          image: "danielpadilla.jpg",
          href: "https://open.spotify.com/artist/3DURgF6rHuldgexwVCr7yy?si=f0AaWn0mStqZXl2tlJbz5g",
          song: "Nasa Iyo Na Ang Lahat",
          time: "3:24",
        },
        "KZ Tandingan": {
          image: "rnb_genre.jpg",
          href: "https://open.spotify.com/artist/1mcqfNCReSFxun2vIWvC28?si=mVfcenTjTFixQSLhIr-ZTQ",
          song: "Two Less Lonely People in the World",
          time: "4:05",
        },
        Kamikazee: {
          image: "kamikazee.jpg",
          href: "https://open.spotify.com/artist/4GBFKKuwmZUnAJt6nBal7A?si=CgGZN9AqQ_qGQrfUaktF-w",
          song: "Narda",
          time: "4:14",
        },
        "Silent Sanctuary": {
          image: "silentsanctuary.jpg",
          href: "https://open.spotify.com/artist/4nGp682WMiKS4X217kPw8C?si=HZdRfjRWSAuPr6Yata2hMA",
          song: "Sa'yo",
          time: "4:17",
        },
        Bamboo: {
          image: "bamboo.jpg",
          href: "https://open.spotify.com/artist/0c7d9V8rjfT6tzojfBfRf5?si=o8KzuzkQSUuLNN8SNy15lA",
          song: "Hallelujah",
          time: "4:25",
        },
        Itchyworms: {
          image: "itchyworms.jpg",
          href: "https://open.spotify.com/artist/5cYJYBMg1n71v7cvthr1SO?si=YyD538DYTGSzVv59Z9lxtQ",
          song: "Akin Ka Na Lang",
          time: "3:36",
        },
        Mayonnaise: {
          image: "mayonnaise.jpg",
          href: "https://open.spotify.com/artist/7lIVjtsgz0y1oRQFBAVNzq?si=dTGDTe-hQwWD1QYqzXGhcA",
          song: "Jopay",
          time: "3:21",
        },
        Moonstar88: {
          image: "moonstar88.jpg",
          href: "https://open.spotify.com/artist/2kZThDGZcHl4klYYFk0v8n?si=UOV4HK2KQiOxIKqmyX2Zuw",
          song: "Torete",
          time: "4:05",
        },
        "December Avenue": {
          image: "decemberavenue.jpg",
          href: "https://open.spotify.com/artist/4qFxP3qN9GsnZDOkAE6x2m?si=rrDTnI9yQzmeommzyInJHw",
          song: "Sa Ngalan Ng Pag-Ibig",
          time: "5:35",
        },
        "Sponge Cola": {
          image: "spongecola.jpg",
          href: "https://open.spotify.com/artist/1tXFYQZSAswt4JLB42lpye?si=ATXvcoBWQnyrjicfXdvVVw",
          song: "Jeepney",
          time: "4:05",
        },
        Rivermaya: {
          image: "rivermaya.jpg",
          href: "https://open.spotify.com/artist/1ZTdxfZTeztyAgKUJVLxAI?si=xAmoH42DQAaaffVfEPgOgQ",
          song: "214",
          time: "4:30",
        },
        "True Faith": {
          image: "truefaith.jpg",
          href: "https://open.spotify.com/artist/6RV3CKY0UJIPKXyGs85Thm?si=o3rjlds0Sx2A7W2Kg9vpVA",
          song: "Perfect",
          time: "4:16",
        },
        "Barbie Almalbis": {
          image: "barbiealmalbis.jpg",
          href: "https://open.spotify.com/artist/6XMiJRtSvw0PYHOBSBEsMg?si=ihaZyLwzT-mZ6yF8j-UwqQ",
          song: "Torpe",
          time: "4:19",
        },
        "Side A": {
          image: "sidea.jpg",
          href: "https://open.spotify.com/artist/31oMMIBDMM2Z1RQO7u8irE?si=sgWxCvDiSUO8-1rGN5ydeg",
          song: "Forevermore",
          time: "4:36",
        },
        Callalily: {
          image: "callalily.jpg",
          href: "https://open.spotify.com/artist/4HOEnLufwAqJ2qoJPVnL01?si=KVE7E6g1ToGV7X87d8MhMQ",
          song: "Magbalik",
          time: "4:06",
        },
        Gracenote: {
          image: "gracenote.jpg",
          href: "https://open.spotify.com/artist/4mrrcDjpjUq27YEGwlisgs?si=8zK0CDvnROqTW_o4oJkShQ",
          song: "When I Dream About You",
          time: "4:20",
        },
        Hale: {
          image: "hale.jpg",
          href: "https://open.spotify.com/artist/6Ww3OMFzCaO33ulKh1LBFN?si=THbYR4OERkGCW7VYPFTQ5Q",
          song: "The Day You Said Goodnight",
          time: "4:19",
        },
        "South Border": {
          image: "southborder.jpg",
          href: "https://open.spotify.com/artist/6ZgBJRjJsK1iOJGKGZxEUv?si=cGxfmvkpSXSqEQQmC5_4sQ",
          song: "Rainbow",
          time: "4:28",
        },
        "6cyclemind": {
          image: "6cyclemind.jpg",
          href: "https://open.spotify.com/artist/3nZa8vRD64ueq3d0JNYTsl?si=dJy9D41GReafmmCYrlAzMQ",
          song: "Sandalan",
          time: "4:07",
        },
        Sugarfree: {
          image: "sugarfree.jpg",
          href: "https://open.spotify.com/artist/5I3uAFbAOhuVSKdrcG5mgy?si=Qejf7ua_TSmQ6EXoHLy6Zw",
          song: "Burnout",
          time: "4:08",
        },
        Freestyle: {
          image: "freestyle.jpg",
          href: "https://open.spotify.com/artist/0jarApAsbmiCkYhz0590mE?si=t2c6b9KZRiGIs7lPeZi6cg",
          song: "Before I Let You Go",
          time: "4:21",
        },
        MYMP: {
          image: "mymp.jpg",
          href: "https://open.spotify.com/artist/5elcNQkZ6FCZA3grSOMngY?si=PT2IzJ4KTx-tRvYEj_uTpw",
          song: "A Little Bit",
          time: "4:28",
        },
        "Orange and Lemons": {
          image: "orangeandlemons.jpg",
          href: "https://open.spotify.com/artist/1EUmQM6xgUQLUkJVcvSdey?si=h1nW1RcdSqSxGcEf5Z3e2w",
          song: "Pinoy Ako",
          time: "4:06",
        },
        Imago: {
          image: "imago.jpg",
          href: "https://open.spotify.com/artist/6MXu7TWZnmykwkXiRJeUMh?si=TeUBShzNTCuhXv-XAvrCiQ",
          song: "Sundo",
          time: "4:26",
        },
        "Gloc-9": {
          image: "gloc9.jpg",
          href: "https://open.spotify.com/artist/7HJDRQAfEcFiARVehhM6qD?si=zsy-4GDlTPyGYbBA-Gv0Lw",
          song: "Sirena",
          time: "4:09",
        },
        "Jay R": {
          image: "jayr.jpg",
          href: "https://open.spotify.com/artist/3z0IVhtuFvt9VYUZGT98PU?si=W8NBPvPySQe3dGqbuVRWpw",
          song: "Bakit Pa Ba",
          time: "4:07",
        },
        Juris: {
          image: "juris.jpg",
          href: "https://open.spotify.com/artist/4BNWanhw4AjSXjBm9L1Jzy?si=-B0bViWuSea2YzzWNoXPlw",
          song: "Di Lang Ikaw",
          time: "4:25",
        },
        "Angeline Quinto": {
          image: "angelinequinto.jpg",
          href: "https://open.spotify.com/artist/7DW4ijH3n36QN0RlC0n649?si=UlazrF9dQeqH9yCp61OqUA",
          song: "Patuloy Ang Pangarap",
          time: "4:18",
        },
        "Erik Santos": {
          image: "eriksantos.jpg",
          href: "https://open.spotify.com/artist/7ygtjsCTrCQZAYYPOne9uE?si=C1Glz-YFTDCk3CoJGgNi9w",
          song: "I'll Never Go",
          time: "4:17",
        },
        "Daryl Ong": {
          image: "darylong.jpg",
          href: "https://open.spotify.com/artist/1vg8YXdgvLLPPeXZkM7g5W?si=5aI3lq8STNuz95gl3ZTlSQ",
          song: "Stay",
          time: "4:17",
        },
        Jaya: {
          image: "jaya.jpg",
          href: "https://open.spotify.com/artist/2TeEZ5rfw62Mw15I4RFjXK?si=XW6cj3qnS02V-lhH-N5vOg",
          song: "Dahil Tanging Ikaw",
          time: "4:06",
        },
        Kyla: {
          image: "kyla.jpg",
          href: "https://open.spotify.com/artist/77DAFfvm3O9zT5dIoG0eIO?si=8uCYljUkRGeLAEhwag_Y7Q",
          song: "Hanggang Ngayon",
          time: "4:44",
        },
        "Rachelle Ann Go": {
          image: "rachelleanngo.jpg",
          href: "https://open.spotify.com/artist/0YaTdozvKSQ2UkOTTONmSJ?si=_QHaTTgFQZyO1pbE1K2TBQ",
          song: "From the Start",
          time: "4:24",
        },
        "Kitchie Nadal": {
          image: "kitchienadal.jpg",
          href: "https://open.spotify.com/artist/4OjU5UP0GFWeniBC82sGBY?si=hgzTXypRSdum3N3xnSqUcg",
          song: "Huwag Na Huwag Mong Sasabihin",
          time: "3:42",
        },
        Nina: {
          image: "nina.jpg",
          href: "https://open.spotify.com/artist/1WgXqy2Dd70QQOU7Ay074N?si=f3sU3sV2R0Wp9C2En6Jn1w",
          song: "Jealous",
          time: "4:47",
        },
        "Jessa Zaragoza": {
          image: "jessazaragoza.jpg",
          href: "https://open.spotify.com/artist/3QvWpXOzmGmX7sVcJW9tV5?si=sNgsEC8QTlqbNCNwu4bIYw",
          song: "Bakit Pa",
          time: "3:56",
        },
        Shamrock: {
          image: "shamrock.jpg",
          href: "https://open.spotify.com/artist/4w4UwIuShdWtNtX57QymCV?si=6Mkug9vDQ5Skfj53gi-ViQ",
          song: "Alipin",
          time: "4:27",
        },
        "Michael Pangilinan": {
          image: "michaelpangilinan.jpg",
          href: "https://open.spotify.com/artist/5SvPSg1GjU7XUvPQK0FsNn?si=UVI2TbsQQJmUVfNn5W_gJg",
          song: "Pare Mahal Mo Raw Ako",
          time: "4:33",
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
