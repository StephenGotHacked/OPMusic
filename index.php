<?php
  include('HEADERFOOTER/header.html');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OPMusic</title>
    <link rel="stylesheet" href="CSS/indexstyle.css" />
    <link rel="shortcut icon" type="x-icon" href="sonatrix.png" />
    <script src="JAVASCRIPT/index.js"></script>
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
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
  </head>
  <body>
    <div class="banner[{,}]">
      <div class="slideshow-container">
        <div class="mySlides active-slide">
          <div class="image-container">
            <img src="carousel1.jpg" alt="Artist 1" />
          </div>
          <div class="slide-text">
            <h2>Welcome to Sonatrix: Your Filipino Music Hub</h2>
            <p>
              At Sonatrix, we're all about Filipino music. Our goal is to
              showcase the amazing talent from the Philippines, bringing you the
              best tunes from local artists.
            </p>
          </div>
        </div>
        <div class="mySlides">
          <div class="image-container">
            <img src="carousel2.jpg" alt="Artist 2" />
          </div>
          <div class="slide-text">
            <h2>Discover New Artists</h2>
            <p>
              Explore the rich diversity of Filipino music. From rising stars to
              established artists, discover new favorites on Sonatrix.
            </p>
          </div>
        </div>
        <div class="mySlides">
          <div class="image-container">
            <img src="carousel3.jpg" alt="Artist 3" />
          </div>
          <div class="slide-text">
            <h2>Experience the Best of OPM</h2>
            <p>
              Experience the heart and soul of Original Pilipino Music (OPM).
              Sonatrix brings you the best OPM tracks that capture the Filipino
              spirit.
            </p>
          </div>
        </div>
        <div class="mySlides">
          <div class="image-container">
            <img src="carousel4.jpg" alt="Artist 4" />
          </div>
          <div class="slide-text">
            <h2>Join the Sonatrix Community</h2>
            <p>
              Join our growing community of Filipino music lovers. Share your
              favorite tracks, discover new ones, and celebrate Filipino music
              with us.
            </p>
          </div>
        </div>
      </div>

      <div class="box-container">
        <span class="box active-box" onclick="currentSlide(1)"></span>
        <span class="box" onclick="currentSlide(2)"></span>
        <span class="box" onclick="currentSlide(3)"></span>
        <span class="box" onclick="currentSlide(4)"></span>
      </div>
    </div>
    <div class="block-container">
      <div class="block">
        <h2>What We Do</h2>
        <p id="descript">
          We're a team of music lovers who want to make sure Filipino artists
          get the recognition they deserve. From picking the songs to making
          sure everything runs smoothly, we're here to support our homegrown
          talent.
        </p>
      </div>
      <div class="block">
        <h2>What Makes Us Different</h2>
        <p id="descript">
          What sets us apart is our focus on Filipino music. We only feature
          songs from Filipino artists, from the classics to the latest hits. Our
          platform is your one-stop shop for all things OPM.
        </p>
      </div>
      <div class="block">
        <h2>Our Promise to You</h2>
        <p id="descript">
          At Sonatrix, we're committed to giving you the best Filipino music
          experience. Whether you're discovering new favorites or listening to
          old classics, we're here to make sure you have a great time.
        </p>
      </div>
    </div>

    <div class="featured-artists">
      <h2 class="section-title">FEATURED ARTISTS</h2>
    
      <div class="top-row">
        <div class="artist">
          <a href="https://open.spotify.com/artist/7374lH6kwx9uQATYQ9H3Cp?si=QcJ7hIUaRjCBCuKq_OPaOg" target="_blank">
            <img src="alt_genre.jpg" alt="Eraserheads" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Eraserheads</h3>
            <p class="artist-description">
              Legendary Filipino rock band known for their iconic hits such as 'Ang Huling El Bimbo' and 'Ligaya'.
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li><a href="https://open.spotify.com/track/135ggzbjOogZ75IQ0LQi8r?si=a957a828a1614e5c" target="_blank">Ang Huling El Bimbo</a></li>
              <li><a href="https://open.spotify.com/track/5Ro6MdZGgce4PEuaFCJYPq?si=8c458a2bab9c4678" target="_blank">Ligaya</a></li>
              <li><a href="https://open.spotify.com/track/1NopgVCMVhCKIm64tF7auX?si=4e10cbf8760e4ad7" target="_blank">With a Smile</a></li>
              <li><a href="https://open.spotify.com/track/1lan3CApvveTezmBBGzsGu?si=10b96ee4b4704472" target="_blank">Magasin</a></li>
            </ul>
          </div>
        </div>
    
        <div class="artist">
          <a href="https://open.spotify.com/artist/2XHTklRsNMOOQT56Zm3WS4?si=f6ydAeGoTcqw3EiKbF-xqw" target="_blank">
            <img src="rock_genre.jpg" alt="Parokya ni Edgar" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Parokya ni Edgar</h3>
            <p class="artist-description">
              Popular Filipino band celebrated for their humorous and catchy songs like 'Harana' and 'Buloy'.
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li><a href="https://open.spotify.com/track/6UGrgPcISfwGeDikA4YpEv?si=821aada115b84535" target="_blank">Harana</a></li>
              <li><a href="https://open.spotify.com/track/1sGSzOSb8cJ3xhQW7q2a4g?si=e489ed8d43704a51" target="_blank">Buloy</a></li>
              <li><a href="https://open.spotify.com/track/1o2LWVAyvFP5ZxpHQKOJ0D?si=42db16e15d6146d4" target="_blank">Silvertoes</a></li>
              <li><a href="https://open.spotify.com/track/7nbIGbDitZIYoMrMsXunAu?si=8b99f0d5afed47e7" target="_blank">Gitara</a></li>
            </ul>
          </div>
        </div>
    
        <div class="artist">
          <a href="https://open.spotify.com/artist/1ZTdxfZTeztyAgKUJVLxAI?si=OBmi56K8So656MASZn_Agg" target="_blank">
            <img src="rivermaya.jpg" alt="Rivermaya" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Rivermaya</h3>
            <p class="artist-description">
              Renowned Filipino rock band known for their energetic performances and hit songs.
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li><a href="https://open.spotify.com/track/7gZ3kWNtIxFgxjsm5OTVMB?si=c93d9d1266a34508" target="_blank">214</a></li>
              <li><a href="https://open.spotify.com/track/4N0XG7hGoVnUKI2kuRGN1u?si=0e32afffdcf145b6" target="_blank">Kisapmata</a></li>
              <li><a href="https://open.spotify.com/track/2bhxFc8HDMVtM1okwP7tRs?si=921888f12de243f8" target="_blank">Posible</a></li>
              <li><a href="https://open.spotify.com/track/6RQySI96HtQn9PNSQrqJOs?si=730e37d9e22042ac" target="_blank">Umaaraw, Umuulan</a></li>
            </ul>
          </div>
        </div>
      </div>
    
      <div class="bottom-row">
        <div class="artist">
          <a href="https://open.spotify.com/artist/1GlMjIezcLwV3OFlX0uXOv?si=1CD_HJXBQOm40KyNAezzcA" target="_blank">
            <img src="leasalonga.jpg" alt="Lea Salonga" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Lea Salonga</h3>
            <p class="artist-description">
              Broadway and Filipino music icon known for her powerful vocals and performances.
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li><a href="https://open.spotify.com/track/0k7Shopj669EbywEjsqoqm?si=b13ce581211f40c5" target="_blank">A Whole New World</a></li>
              <li><a href="https://open.spotify.com/track/7tAoKbsjXmAapZagDMAuIE?si=46a297c28e954da7" target="_blank">On My Own</a></li>
              <li><a href="https://open.spotify.com/track/5qd3PVHqZliFLzhHyAdaZk?si=d7fdff2089524b9d" target="_blank">Bakit Labis Kitang Mahal</a></li>
              <li><a href="https://open.spotify.com/track/2AILbz83cBnrAMAG06rZts?si=2a37874972e74a49" target="_blank">Reflection</a></li>
            </ul>
          </div>
        </div>
    
        <div class="artist">
          <a href="https://open.spotify.com/artist/3wNylAjJX1PiCpMKx8Lrfp?si=lOEIoiGlQV-zX9-lu1CTfg" target="_blank">
            <img src="reginevelasquez.jpg" alt="Regine Velazquez" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Regine Velazquez</h3>
            <p class="artist-description">
              Asia's Songbird known for her exceptional vocal range and versatility in various music genres.
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li><a href="https://open.spotify.com/track/5HU1uQSQNk2iFRUCetRuVc?si=e03eb56d92ca4e9b" target="_blank">Dadalhin</a></li>
              <li><a href="https://open.spotify.com/track/5F1mYaDicAzUrQz0aiqljr?si=8571e30556384060" target="_blank">On The Wings of Love</a></li>
              <li><a href="https://open.spotify.com/track/3QNFoB1beEmZiCkqELaBtQ?si=414e1cacde854e43" target="_blank">In Love With You</a></li>
              <li><a href="https://open.spotify.com/track/6IEXakKkSG8Zg12Yna1BHz?si=440ca355331e429f" target="_blank">Forever</a></li>
            </ul>
          </div>
        </div>
    
        <div class="artist">
          <a href="https://open.spotify.com/artist/0c7d9V8rjfT6tzojfBfRf5?si=qz9YF9AlQxKbHm83h9oyIA" target="_blank">
            <img src="bamboo.jpg" alt="Bamboo Mañalac" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Bamboo Mañalac</h3>
            <p class="artist-description">
              Filipino rock icon known for his powerful vocals and stage presence.
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li><a href="https://open.spotify.com/track/56aJJze7MQql2wyqyZde8i?si=cf9f86eba2104fc4" target="_blank">Hallelujah</a></li>
              <li><a href="https://open.spotify.com/track/6sxg4O8Nsiq9NuAiBbL3Nr?si=934a8b8737e44995" target="_blank">Masaya</a></li>
              <li><a href="https://open.spotify.com/track/4xcprHSKwe1n8Q5rRJfgAm?si=48b83c84734d45e6" target="_blank">Noypi</a></li>
              <li><a href="https://open.spotify.com/track/0vNuIL3afg80EB5cwZYZnd?si=5ef652c60658441e" target="_blank">Muli</a></li>
            </ul>
          </div>
        </div>
      </div>
      <a href="artist_list.html" class="more-button">Click Here for More</a>

    </div>
  </body>
<?php
  include('HEADERFOOTER/footer.html');
?>
</html>