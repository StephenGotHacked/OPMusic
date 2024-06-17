<?php
  include('HEADERFOOTER/header.html');
?>
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

    <header>
      <div class="search-container">
        <input type="text" id="search-input" placeholder="Search artist..." />
        <button type="submit"><i class="fa fa-search"></i></button>
      </div>
    </header>

    <div class="container">
      <h1>TOP PINOY ALTERNATIVE ARTIST</h1>
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
          time: "4:13",
        },
        "Up Dharma Down": {
          image: "updharmadown.jpg",
          href: "https://open.spotify.com/artist/3wbCeEPAW6po7J46netxMT?si=cSlAMFGnSv6kpYcQe-lEUQ",
          song: "Oo",
          time: "5:07",
        },
        Sandwich: {
          image: "album3.jpg",
          href: "https://open.spotify.com/artist/6baezjDaGyBqrW8xGqw3a5?si=trfJV0CwT4ula1Yv0LIA0A",
          song: "Sugod",
          time: "4:26",
        },
        "Silent Sanctuary": {
          image: "silentsanctuary.jpg",
          href: "https://open.spotify.com/artist/4nGp682WMiKS4X217kPw8C?si=HZdRfjRWSAuPr6Yata2hMA",
          song: "Sa'yo",
          time: "4:17",
        },
        Wolfgang: {
          image: "wolfgang.jpg",
          href: "https://open.spotify.com/artist/15JvurCmjijcX51RSwsSFc?si=Hy0wrFsQSHm-RPO6xnXuow",
          song: "Halik Ni Hudas",
          time: "5:02",
        },
        "The Dawn": {
          image: "thedawn.jpg",
          href: "https://open.spotify.com/artist/2C82tCjOMy2n9Pq4Iz9B6S?si=xOcmGrX0RmW1cybAH_rHFw",
          song: "Salamat",
          time: "4:13",
        },
        Typecast: {
          image: "typecast.jpg",
          href: "https://open.spotify.com/artist/7vbAIeiw0afuAqTiReJItY?si=bzWn8BfYTwygkmFknH8-Ng",
          song: "Will You Ever Learn",
          time: "4:24",
        },
        "Ang Bandang Shirley": {
          image: "angbandangshirley.jpg",
          href: "https://open.spotify.com/artist/7goaQP1sgbWsKOjrHenxFJ?si=CSMdG_J_QGeo_nvDBYmoQw",
          song: "Nakauwi Na",
          time: "4:48",
        },
        Itchyworms: {
          image: "itchyworms.jpg",
          href: "https://open.spotify.com/artist/5cYJYBMg1n71v7cvthr1SO?si=YyD538DYTGSzVv59Z9lxtQ",
          song: "Akin Ka Na Lang",
          time: "3:36",
        },
        Moonstar88: {
          image: "moonstar88.jpg",
          href: "https://open.spotify.com/artist/2kZThDGZcHl4klYYFk0v8n?si=UOV4HK2KQiOxIKqmyX2Zuw",
          song: "Torete",
          time: "4:05",
        },
        Hale: {
          image: "hale.jpg",
          href: "https://open.spotify.com/artist/6Ww3OMFzCaO33ulKh1LBFN?si=THbYR4OERkGCW7VYPFTQ5Q",
          song: "The Day You Said Goodnight",
          time: "4:19",
        },
        Mayonnaise: {
          image: "mayonnaise.jpg",
          href: "https://open.spotify.com/artist/7lIVjtsgz0y1oRQFBAVNzq?si=dTGDTe-hQwWD1QYqzXGhcA",
          song: "Jopay",
          time: "3:21",
        },
        Autotelic: {
          image: "autotelic.jpg",
          href: "https://open.spotify.com/artist/3Hvxz2oZPYuo61ChHKcqQI?si=hOiDMYBxRLO7wN_TIZOZ0w",
          song: "Languyin",
          time: "5:00",
        },
        Imago: {
          image: "imago.jpg",
          href: "https://open.spotify.com/artist/6MXu7TWZnmykwkXiRJeUMh?si=TeUBShzNTCuhXv-XAvrCiQ",
          song: "Sundo",
          time: "4:26",
        },
        Ciudad: {
          image: "ciudad.jpg",
          href: "https://open.spotify.com/artist/2cIdxmVcyAfdjazKKq0YmR?si=ptz9P-MCSnKD9vIyA_JGhQ",
          song: "Sometimes You Need",
          time: "4:44",
        },
        "Dicta License": {
          image: "dictalicense.jpg",
          href: "https://open.spotify.com/artist/2P1fUbY6ybDIE8JEinJHH6?si=-1sPC4kESYexZVxX6u6rhQ",
          song: "Pagbigyan",
          time: "4:35",
        },
        Gracenote: {
          image: "gracenote.jpg",
          href: "https://open.spotify.com/artist/4mrrcDjpjUq27YEGwlisgs?si=8zK0CDvnROqTW_o4oJkShQ",
          song: "When I Dream About You",
          time: "4:20",
        },
        "Join The Club": {
          image: "jointheclub.jpg",
          href: "https://open.spotify.com/artist/70ljCILl0aVXitf3K39YvT?si=CxBftr9ATWCw0KzHrab5jA",
          song: "Nobela",
          time: "4:30",
        },
        "December Avenue": {
          image: "decemberavenue.jpg",
          href: "https://open.spotify.com/artist/4qFxP3qN9GsnZDOkAE6x2m?si=rrDTnI9yQzmeommzyInJHw",
          song: "Sa Ngalan Ng Pag-Ibig",
          time: "5:35",
        },
        Angulo: {
          image: "angulo.jpg",
          href: "https://open.spotify.com/artist/6Rs4pn1rjuxvh2UQY9JjC5?si=gWO7w9HpSvC7zrs7GuwCoA",
          song: "Lihim",
          time: "4:44",
        },
        Pedicab: {
          image: "pedicab.jpg",
          href: "https://open.spotify.com/artist/270BokezkycFfTTlGEKVKZ?si=KfkxjUL4RNKz49xsd6J6dw",
          song: "Dizzy Boy",
          time: "2:37",
        },
        "6cyclemind": {
          image: "6cyclemind.jpg",
          href: "https://open.spotify.com/artist/3nZa8vRD64ueq3d0JNYTsl?si=dJy9D41GReafmmCYrlAzMQ",
          song: "Biglaan",
          time: "4:16",
        },
        Kjwan: {
          image: "kjwan.jpg",
          href: "https://open.spotify.com/artist/5kUrUkpqUuCYX0eLEhvcQ3?si=tRROK5XUQLeidR0L1wd98Q",
          song: "Daliri",
          time: "4:42",
        },
        "Grin Department": {
          image: "grindepartment.jpg",
          href: "https://open.spotify.com/artist/3oP7ApvM9dvIXP6AufxCxt?si=IGN6jAXHQHWYxHBZZUn7rA",
          song: "Miss Miss",
          time: "3:39",
        },
        "Tanya Markova": {
          image: "tanyamarkova.jpg",
          href: "https://open.spotify.com/artist/6ZwnyHAtqKLBYwRhZePddV?si=ViKNbouYRTK4ihzyKvgWoQ",
          song: "Linda Blair",
          time: "3:47",
        },
        "She’s Only Sixteen": {
          image: "shesonlysixteen.jpg",
          href: "https://open.spotify.com/artist/6sYQTuRBvPAaQ9Ba5ca1Yc?si=54D-NvLqQjWCQ7Qy4Dkmtg",
          song: "Dying to Meet You",
          time: "4:18",
        },
        "The Ransom Collective": {
          image: "theransomcollective.jpg",
          href: "https://open.spotify.com/artist/5TPt1cZ847Fr9CWd9vAm7s?si=D8zPtCKWRy-fqNAf9NT6gQ",
          song: "Fools",
          time: "4:35",
        },
        Faspitch: {
          image: "faspitch.jpg",
          href: "https://open.spotify.com/artist/5AwOtKmWIklp5sBjK8NZwn?si=XDzsOugfSf-oK6tsa6pTHw",
          song: "All Under Heaven",
          time: "3:47",
        },
        Paramita: {
          image: "paramita.jpg",
          href: "https://open.spotify.com/artist/5f47Fld8JNcu76WgCn3kRH?si=tcPjL7_9QDO6FrYdB48nPg",
          song: "Hiling",
          time: "4:36",
        },
        Razorback: {
          image: "razorback.jpg",
          href: "https://open.spotify.com/artist/3JcopgtsIIA9bDz5DyX9e6?si=aklOLBJ-SRy4hLYXpbH73g",
          song: "Giyang",
          time: "5:12",
        },
        Cambio: {
          image: "cambio.jpg",
          href: "https://open.spotify.com/artist/26kql5K1XVh6un3IosdIhi?si=GhOcxMOtTP2uPCbJWSxZVQ",
          song: "Deretso",
          time: "4:29",
        },
        "Color It Red": {
          image: "coloritred.jpg",
          href: "https://open.spotify.com/artist/0rxVEH8yyRYbuwYSioqIFb?si=SkvLELD0TKqvx9SYKU7FwQ",
          song: "Paglisan",
          time: "5:35",
        },
        "Flying Ipis": {
          image: "flyingipis.jpg",
          href: "https://open.spotify.com/artist/3M0tVDphonNo5klHCySYtR?si=sWjmNJ5vSGCineHxzfLKZg",
          song: "Sssikreto",
          time: "4:06",
        },
        Pupil: {
          image: "pupil.jpg",
          href: "https://open.spotify.com/artist/4QHUb6DgBCnLZTOAIinoQG?si=KoDkPWSjQjiDxT-TwBSv0w",
          song: "Disconnection Notice",
          time: "4:05",
        },
        "The Purplechickens": {
          image: "thepurplechickens.jpg",
          href: "https://open.spotify.com/artist/6ETc60suRwOflu5atMPncG?si=Ps9-SFKzRBimOt0C9PgpaA",
          song: "Kahit Na",
          time: "4:43",
        },
        "The Youth": {
          image: "theyouth.jpg",
          href: "https://open.spotify.com/artist/3qO2bYbnRrz5eyb0utAVfn?si=zpwdoLFQTfySOUw8dYqDvg",
          song: "Multo sa Paningin",
          time: "4:04",
        },
        chicosci: {
          image: "chicosci.jpg",
          href: "https://open.spotify.com/artist/1WUdtysXvz9qXuD6toSJqA?si=9afwfL1VQMG8o0lgayjAwQ",
          song: "Paris",
          time: "4:47",
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
<?php
  include('HEADERFOOTER/header.html');
?>