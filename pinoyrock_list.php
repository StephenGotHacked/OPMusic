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
      <a href="pinoyrock_list.php" class="active">Pinoy Rock</a>
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
      <h1>TOP PINOY ROCK ARTIST</h1>
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
   
    document.addEventListener('DOMContentLoaded', function () {
        var artistsData = {
            'Callalily': {
                image: 'callalily.jpg',
                href: 'https://open.spotify.com/artist/4HOEnLufwAqJ2qoJPVnL01?si=u7yqriUnRH6P0nKoWCx3vw',
                song: 'Magbalik',
                time: '4:06'
            },
            'Up Dharma Down': {
                image: 'updharmadown.jpg',
                href: 'https://open.spotify.com/artist/3wbCeEPAW6po7J46netxMT?si=cSlAMFGnSv6kpYcQe-lEUQ',
                song: 'Tadhana',
                time: '3:34'
            },
            'Imago': {
                image: 'imago.jpg',
                href: 'https://open.spotify.com/artist/6MXu7TWZnmykwkXiRJeUMh?si=HyHlnzpAQc6AIB4zWU7i_w',
                song: 'Sundo',
                time: '4:26'
            },
            'Siakol': {
                image: 'siakol.jpg',
                href: 'https://open.spotify.com/artist/3l9mRJIGzW7RrEE2H8Ldvq?si=z9R2DTTeRMmQR_6F8l2M_Q',
                song: 'Bakit Ba',
                time: '4:23'
            },
            'Kjwan': {
                image: 'kjwan.jpg',
                href: 'https://open.spotify.com/artist/5kUrUkpqUuCYX0eLEhvcQ3?si=ynA25VBmQ4uDtzAacDK_nw',
                song: 'Daliri',
                time: '4:42'
            },
            'The Dawn': {
                image: 'thedawn.jpg',
                href: 'https://open.spotify.com/artist/2C82tCjOMy2n9Pq4Iz9B6S?si=k7J3YSIkRx67LIFS9wLORg',
                song: 'Salamat',
                time: '4:13'
            },
            'Gloc-9': {
                image: 'gloc9.jpg',
                href: 'https://open.spotify.com/artist/7HJDRQAfEcFiARVehhM6qD?si=WkhC7rfhQJOdwA8wl-e7wg',
                song: 'Hari ng Tondo',
                time: '4:16'
            },
            'Gracenote': {
                image: 'gracenote.jpg',
                href: 'https://open.spotify.com/artist/4mrrcDjpjUq27YEGwlisgs?si=AqMRJIHpTsaFGm1GnVpLbA',
                song: 'When I Dream About You',
                time: '4:20'
            },
            'Rivermaya': {
                image: 'rivermaya.jpg',
                href: 'https://open.spotify.com/artist/1ZTdxfZTeztyAgKUJVLxAI?si=xAmoH42DQAaaffVfEPgOgQ',
                song: '214',
                time: '4:30'
            },
            'Wolfgang': {
                image: 'wolfgang.jpg',
                href: 'https://open.spotify.com/artist/15JvurCmjijcX51RSwsSFc?si=sgtkvav3Q4GxGera3x628A',
                song: 'Halik Ni Hudas',
                time: '5:02'
            },
            'Parokya ni Edgar': {
                image: 'rock_genre.jpg',
                href: 'https://open.spotify.com/artist/2XHTklRsNMOOQT56Zm3WS4?si=0pFWIhMrQXWfMCYn00Zhiw',
                song: 'Harana',
                time: '4:13'
            },
            'Bamboo': {
                image: 'bamboo.jpg',
                href: 'https://open.spotify.com/artist/0c7d9V8rjfT6tzojfBfRf5?si=o8KzuzkQSUuLNN8SNy15lA',
                song: 'Hallelujah',
                time: '4:25'
            },
            'Sandwich': {
                image: 'album3.jpg',
                href: 'https://open.spotify.com/artist/6baezjDaGyBqrW8xGqw3a5?si=qsfkFGhbTRuwpyrw8wdMpQ',
                song: 'Sugod',
                time: '4:26'
            },
            'Pupil': {
                image: 'pupil.jpg',
                href: 'https://open.spotify.com/artist/4QHUb6DgBCnLZTOAIinoQG?si=2-k1m0fZTjmr6MHGJa1u6g',
                song: 'Disconnection Notice',
                time: '4:05'
            },
            'Grin Department': {
                image: 'grindepartment.jpg',
                href: 'https://open.spotify.com/artist/3oP7ApvM9dvIXP6AufxCxt?si=tsqEkKykTVmGE7Zm-xtu6Q',
                song: 'Miss Miss',
                time: '3:39'
            },
            'Cueshé': {
                image: 'cueshe.jpg',
                href: 'https://open.spotify.com/artist/6Xx1uQPrAF37dtVMKEmvx5?si=fGGI9E3GTtOA9pIJs2DuUQ',
                song: 'Stay',
                time: '4:26'
            },
            'Eraserheads': {
                image: 'alt_genre.jpg',
                href: 'https://open.spotify.com/artist/7374lH6kwx9uQATYQ9H3Cp?si=2LYyzI7sQ1yqaHQuKpnExw',
                song: 'Ang Huling El Bimbo',
                time: '6:31'
            },
            'Razorback': {
                image: 'razorback.jpg',
                href: 'https://open.spotify.com/artist/3JcopgtsIIA9bDz5DyX9e6?si=2Q8lDDiEQTKEOCHnDeV1bg',
                song: 'Giyang',
                time: '5:12'
            },
            'The Youth': {
                image: 'theyouth.jpg',
                href: 'https://open.spotify.com/artist/3qO2bYbnRrz5eyb0utAVfn?si=x4DwfmInQQiY8BO9s-k2uQ',
                song: 'Multo sa Paningin',
                time: '4:04'
            },
            'Chicosci': {
                image: 'chicosci.jpg',
                href: 'https://open.spotify.com/artist/1WUdtysXvz9qXuD6toSJqA?si=ZWy5RyLjTf2JGvGE1mfdJw',
                song: 'Rolento',
                time: '4:21'
            },
            '6cyclemind': {
                image: '6cyclemind.jpg',
                href: 'https://open.spotify.com/artist/3nZa8vRD64ueq3d0JNYTsl?si=uOZLCghmQcqKsGTAMLjisQ',
                song: 'Sandalan',
                time: '4:07'
            },
            'December Avenue': {
                image: 'decemberavenue.jpg',
                href: 'https://open.spotify.com/artist/4qFxP3qN9GsnZDOkAE6x2m?si=rrDTnI9yQzmeommzyInJHw',
                song: 'Sa Ngalan Ng Pag-Ibig',
                time: '5:35'
            },
            'Mayonnaise': {
                image: 'mayonnaise.jpg',
                href: 'https://open.spotify.com/artist/7lIVjtsgz0y1oRQFBAVNzq?si=ydZBZXcpR6SZiHEuZUrUBw',
                song: 'Jopay',
                time: '3:21'
            },
            'Brownman Revival': {
                image: 'brownmanrevival.jpg',
                href: 'https://open.spotify.com/artist/7ymgfUyJFViyg1qFo4M2nH?si=orTJgersQEm9k-LaqwdMlQ',
                song: 'Lintik',
                time: '4:15'
            },
            'Hale': {
                image: 'hale.jpg',
                href: 'https://open.spotify.com/artist/6Ww3OMFzCaO33ulKh1LBFN?si=i6QfR9RXQSuEV81EME3EVw',
                song: 'The Day You Said Goodnight',
                time: '4:19'
            },
            'Hilera': {
                image: 'hilera.jpg',
                href: 'https://open.spotify.com/artist/4iCXhwhRhgWLl57sj9hhbY?si=Xb-MlNjASSmNnnjE57ntUw',
                song: 'Karma',
                time: '3:32'
            },
            'Kamikazee': {
                image: 'kamikazee.jpg',
                href: 'https://open.spotify.com/artist/4GBFKKuwmZUnAJt6nBal7A?si=CUCiEcghTpa881XdhK8E3A',
                song: 'Narda',
                time: '4:14'
            },
            'The Itchyworms': {
                image: 'itchyworms.jpg',
                href: 'https://open.spotify.com/artist/5cYJYBMg1n71v7cvthr1SO?si=Zj8Gth_6QliuyWTHFjMcaw',
                song: 'Akin Ka Na Lang',
                time: '3:36'
            },
            'Moonstar88': {
                image: 'moonstar88.jpg',
                href: 'https://open.spotify.com/artist/2kZThDGZcHl4klYYFk0v8n?si=EraWbdogQ2C6Vfhbq7M-9g',
                song: 'Torete',
                time: '4:05'
            },
            'Silent Sanctuary': {
                image: 'silentsanctuary.jpg',
                href: 'https://open.spotify.com/artist/4nGp682WMiKS4X217kPw8C?si=6aWlPFQJTPO8Wrdq2iT0FQ',
                song: 'Pasensya Ka Na',
                time: '4:17'
            }
        };
        
        
        

        var artistListContainer = document.getElementById('artist-list');

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
