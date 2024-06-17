<?php
  include('HEADERFOOTER/header.html');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/list.css" />
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
    <main>
      <h1 id="title-list">TOP PINOY ARTIST</h1>
      <header>
        <div class="search-container">
          <input type="text" id="search-input" placeholder="Search artist..." />
          <button type="submit"><i class="fa fa-search"></i></button>
        </div>
      </header>

      <div class="list-artist">
        <div class="artist">
          <a
            href="https://open.spotify.com/artist/7374lH6kwx9uQATYQ9H3Cp?si=QcJ7hIUaRjCBCuKq_OPaOg"
            target="_blank"
          >
            <img src="alt_genre.jpg" alt="Eraserheads" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Eraserheads</h3>
            <p class="artist-description">
              Legendary Filipino rock band known for their iconic hits such as
              'Ang Huling El Bimbo' and 'Ligaya'.
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/135ggzbjOogZ75IQ0LQi8r?si=a957a828a1614e5c"
                  target="_blank"
                  >Ang Huling El Bimbo</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/5Ro6MdZGgce4PEuaFCJYPq?si=8c458a2bab9c4678"
                  target="_blank"
                  >Ligaya</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/1NopgVCMVhCKIm64tF7auX?si=4e10cbf8760e4ad7"
                  target="_blank"
                  >With a Smile</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/1lan3CApvveTezmBBGzsGu?si=10b96ee4b4704472"
                  target="_blank"
                  >Magasin</a
                >
              </li>
            </ul>
          </div>
        </div>

        <div class="artist">
          <a
            href="https://open.spotify.com/artist/2XHTklRsNMOOQT56Zm3WS4?si=f6ydAeGoTcqw3EiKbF-xqw"
            target="_blank"
          >
            <img
              src="rock_genre.jpg"
              alt="Parokya ni Edgar"
              class="artist-img"
            />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Parokya ni Edgar</h3>
            <p class="artist-description">
              Popular Filipino band celebrated for their humorous and catchy
              songs like 'Harana' and 'Buloy'.
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/6UGrgPcISfwGeDikA4YpEv?si=821aada115b84535"
                  target="_blank"
                  >Harana</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/1sGSzOSb8cJ3xhQW7q2a4g?si=e489ed8d43704a51"
                  target="_blank"
                  >Buloy</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/1o2LWVAyvFP5ZxpHQKOJ0D?si=42db16e15d6146d4"
                  target="_blank"
                  >Silvertoes</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/7nbIGbDitZIYoMrMsXunAu?si=8b99f0d5afed47e7"
                  target="_blank"
                  >Gitara</a
                >
              </li>
            </ul>
          </div>
        </div>

        <div class="artist">
          <a
            href="https://open.spotify.com/artist/1ZTdxfZTeztyAgKUJVLxAI?si=OBmi56K8So656MASZn_Agg"
            target="_blank"
          >
            <img src="rivermaya.jpg" alt="Rivermaya" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Rivermaya</h3>
            <p class="artist-description">
              Renowned Filipino rock band known for their energetic performances
              and hit songs.
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/7gZ3kWNtIxFgxjsm5OTVMB?si=c93d9d1266a34508"
                  target="_blank"
                  >214</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/4N0XG7hGoVnUKI2kuRGN1u?si=0e32afffdcf145b6"
                  target="_blank"
                  >Kisapmata</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/2bhxFc8HDMVtM1okwP7tRs?si=921888f12de243f8"
                  target="_blank"
                  >Posible</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/6RQySI96HtQn9PNSQrqJOs?si=730e37d9e22042ac"
                  target="_blank"
                  >Umaaraw, Umuulan</a
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="artist">
          <a
            href="https://open.spotify.com/artist/1GlMjIezcLwV3OFlX0uXOv?si=1CD_HJXBQOm40KyNAezzcA"
            target="_blank"
          >
            <img src="leasalonga.jpg" alt="Lea Salonga" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Lea Salonga</h3>
            <p class="artist-description">
              Broadway and Filipino music icon known for her powerful vocals and
              performances.
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/0k7Shopj669EbywEjsqoqm?si=b13ce581211f40c5"
                  target="_blank"
                  >A Whole New World</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/7tAoKbsjXmAapZagDMAuIE?si=46a297c28e954da7"
                  target="_blank"
                  >On My Own</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/5qd3PVHqZliFLzhHyAdaZk?si=d7fdff2089524b9d"
                  target="_blank"
                  >Bakit Labis Kitang Mahal</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/2AILbz83cBnrAMAG06rZts?si=2a37874972e74a49"
                  target="_blank"
                  >Reflection</a
                >
              </li>
            </ul>
          </div>
        </div>

        <div class="artist">
          <a
            href="https://open.spotify.com/artist/3wNylAjJX1PiCpMKx8Lrfp?si=lOEIoiGlQV-zX9-lu1CTfg"
            target="_blank"
          >
            <img
              src="reginevelasquez.jpg"
              alt="Regine Velazquez"
              class="artist-img"
            />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Regine Velazquez</h3>
            <p class="artist-description">
              Asia's Songbird known for her exceptional vocal range and
              versatility in various music genres.
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/5HU1uQSQNk2iFRUCetRuVc?si=e03eb56d92ca4e9b"
                  target="_blank"
                  >Dadalhin</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/5F1mYaDicAzUrQz0aiqljr?si=8571e30556384060"
                  target="_blank"
                  >On The Wings of Love</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/3QNFoB1beEmZiCkqELaBtQ?si=414e1cacde854e43"
                  target="_blank"
                  >In Love With You</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/6IEXakKkSG8Zg12Yna1BHz?si=440ca355331e429f"
                  target="_blank"
                  >Forever</a
                >
              </li>
            </ul>
          </div>
        </div>

        <div class="artist">
          <a
            href="https://open.spotify.com/artist/0c7d9V8rjfT6tzojfBfRf5?si=qz9YF9AlQxKbHm83h9oyIA"
            target="_blank"
          >
            <img src="bamboo.jpg" alt="Bamboo Mañalac" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Bamboo Mañalac</h3>
            <p class="artist-description">
              Filipino rock icon known for his powerful vocals and stage
              presence.
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/56aJJze7MQql2wyqyZde8i?si=cf9f86eba2104fc4"
                  target="_blank"
                  >Hallelujah</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/6sxg4O8Nsiq9NuAiBbL3Nr?si=934a8b8737e44995"
                  target="_blank"
                  >Masaya</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/4xcprHSKwe1n8Q5rRJfgAm?si=48b83c84734d45e6"
                  target="_blank"
                  >Noypi</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/0vNuIL3afg80EB5cwZYZnd?si=5ef652c60658441e"
                  target="_blank"
                  >Muli</a
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="artist">
          <a
            href="https://open.spotify.com/artist/0DnjaQqb436AH1idffI6CQ?si=KORZH2MbRdiFki3CSbqiCw"
            target="_blank"
          >
            <img src="yengconstantino.jpg" alt="Yeng Constantino" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Yeng Constantino</h3>
            <p class="artist-description">
              Singer-songwriter known for her heartfelt ballads and uplifting songs, capturing the hearts of many Filipinos with hits like "Ikaw"
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/6JqtuQ02UHTLM74aWRFWer?si=8b3aac5100324bc0"
                  target="_blank"
                  >Ikaw</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/7MamPMGJwlY62QyC9M5esV?si=64260df5d2164459"
                  target="_blank"
                  >Cool Off</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/67XgbM6GRVeF6AMKGxl6HT?si=cd8baad6727a42ab"
                  target="_blank"
                  >Chinito</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/5aaFbFYo8G7E2W4DlxboBe?si=c4c55305750f465f"
                  target="_blank"
                  >Jeepney Love Story</a
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="artist">
          <a
            href="https://open.spotify.com/artist/6aiCKnIN68hohzU3ZzNq48?si=4nDqShjnTi6UvQLwq-AsnQ"
            target="_blank"
          >
            <img src="sarahgeronimo.jpg" alt="Sarah Geronimo" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Sarah Geronimo</h3>
            <p class="artist-description">
              Versatile Filipino singer and actress recognized for her powerful vocals and successful career in both music and film.
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/1uwg7BqqCx60EUA24WPB6c?si=fbacd288ee9948b5"
                  target="_blank"
                  >Maybe This Time</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/3g6BBQnxVMuTDbWt6wBX3R?si=4cff336dc1374e31"
                  target="_blank"
                  >Paano Ba Ang Magmahal</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/6C6F2oA7cmZKqq26FPGl0J?si=208c1a3f7b534d9f"
                  target="_blank"
                  >Tala</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/4pT1F1r4ziqa6gT3Grm5MB?si=1e00fe3016654c2b"
                  target="_blank"
                  >Forever's Not Enough</a
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="artist">
          <a
            href="https://open.spotify.com/artist/65kpH75MFCBJhLy7qvVl6A?si=ML6ICBt1TH-Gp7A3UuwuDQ"
            target="_blank"
          >
            <img src="aegis.jpg" alt="Aegis" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Aegis</h3>
            <p class="artist-description">
              Filipino band famous for their emotional and powerful ballads, often characterized by strong vocal performances and heartfelt lyrics, including "Halik"
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/1ghCS63AbOvpo9j4NpPHap?si=40f0c6bd9a9140ed"
                  target="_blank"
                  >Halik</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/0zytj9leQ23cTF2ycSRCug?si=0e6e091eec88413b"
                  target="_blank"
                  >Luha</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/2OVYGJd7HqyaxnuhlHqcTq?si=d1af6e2776144a3e"
                  target="_blank"
                  >Basang Basa Sa Ulan</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/5FwwkCLrqDydT44SAcrsv7?si=805a41ddcc994f9f"
                  target="_blank"
                  >Sayang Na Sayang</a
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="artist">
          <a
            href="https://open.spotify.com/artist/4nGp682WMiKS4X217kPw8C?si=I0TGP680Q_mR-LFolqG9eQ"
            target="_blank"
          >
            <img src="opm_genre.jpg" alt="Silent Sanctuary" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Silent Sanctuary</h3>
            <p class="artist-description">
              Filipino band known for their unique blend of rock and emo music, characterized by introspective lyrics and melodic instrumentals, with hits like "Kundiman"
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/0bhzB5PBUVqZSux5Y7t5ED?si=1bdc92b4694744bb"
                  target="_blank"
                  >Ikaw Lamang</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/1RIqzlphRm2btQO0LgHWsN?si=b636aa120d0e43eb"
                  target="_blank"
                  >Bumalik Ka Na Sa Akin</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/4yrphG2212kF0aIt3qOt3g?si=1497c7577b9449bc"
                  target="_blank"
                  >Pasensya Ka Na</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/6Al0RruBBzC6ft8u1p78hG?si=1f39f725ab994206"
                  target="_blank"
                  >Kundiman</a
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="artist">
          <a
            href="https://open.spotify.com/artist/0RHiqaoRCsFLPeEuj3OQz4?si=E3fUpH_iSnumawQ40Qvu1w"
            target="_blank"
          >
            <img src="garyvalenciano.jpg" alt="Gary Valenciano" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Gary Valenciano</h3>
            <p class="artist-description">
              Iconic Filipino singer and performer known for his energetic stage presence and inspirational songs, including "Natutulog Ba Ang Diyos?"
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/31Z8a8TVSOK5qMtkCfp05m?si=4081e9dc4b104ffb"
                  target="_blank"
                  >Lead Me Lord</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/7iiOLoFR4czrQTjY4cS22L?si=8382249a1cbe46d0"
                  target="_blank"
                  >Sana Maulit Muli</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/4ZaGCl6m49lWCyaQ20wOnI?si=21dbdc24ba4a4615"
                  target="_blank"
                  >Di Na Natuto</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/5c81jjRJzAnCvCdnXt8zEc?si=ff174f34c1d1406b"
                  target="_blank"
                  >Natutulog Ba Ang Diyos?</a
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="artist">
          <a
            href="https://open.spotify.com/artist/7fihhreD4v29FQsWykhCJm?si=fuXNWq-XSjWAVa3EgIYTag"
            target="_blank"
          >
            <img src="freddieaguilar.jpg" alt="Freddie Aguilar" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Freddie Aguilar</h3>
            <p class="artist-description">
              Filipino folk musician known for his socially conscious songs, notably "Anak", which became an international hit
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/4clfDrcEBdZQt3aSTfAWIf?si=03228000f0cf419f"
                  target="_blank"
                  >Anak</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/5FSpX03Lkr4NNGx6Sqm9p8?si=b9af462f3fd242bf"
                  target="_blank"
                  >Minamahal Kita</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/6E9jMLLmxSNRD1jJoO5oD4?si=0ab3d9585b5d4a8a"
                  target="_blank"
                  >Magdalena</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/0ksnWgWc0Xt0aeTHv8trL2?si=083c6a288ccc4bcf"
                  target="_blank"
                  >Bulag, Pipi At Bingi</a
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="artist">
          <a
            href="https://open.spotify.com/artist/1EHAbA1GMYOfkh9ds9eNfS?si=4rsB_gpQSaSCYguGs29tlQ"
            target="_blank"
          >
            <img src="josemarichan.jpg" alt="Jose Mari Chan" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Jose Mari Chan</h3>
            <p class="artist-description">
              OPM legend known for his romantic ballads and Christmas songs, including the timeless classic "Christmas in Our Hearts"
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/2j5gxIwak5rZ0e4jdQInnl?si=f7c769cc2db4469d"
                  target="_blank"
                  >Beautiful Girl</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/1HcODdUvNiiQgV2cRLVm6O?si=110262f884ae43b8"
                  target="_blank"
                  >Be Careful WITH My Heart</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/5qd3PVHqZliFLzhHyAdaZk?si=d7fdff2089524b9d"
                  target="_blank"
                  >Bakit Labis Kitang Mahal</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/6fu6uFC8eSFWnEcZnkIUdJ?si=b4f6f8bbd2594e3a"
                  target="_blank"
                  >Christmas in Our Hearts</a
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="artist">
          <a
            href="https://open.spotify.com/artist/1mcqfNCReSFxun2vIWvC28?si=luxRsPLIQGyKJ0KydEiWaw"
            target="_blank"
          >
            <img src="rnb_genre.jpg" alt="KZ Tandingan" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">KZ Tandingan</h3>
            <p class="artist-description">
              Soulful Filipino singer known for her unique voice and eclectic musical style, blending R&B, soul, and pop, with hits like "Mahal Ko o Mahal Ako"
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/7kH4tKlNik9hGqyFWg17iA?si=6f1c038b4803474b"
                  target="_blank"
                  >Mahal Ko o Mahal Ako</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/3plC0OpTQr2h0M2CUNmgyu?si=d67aafeec40e4762"
                  target="_blank"
                  >Two Less Lonely In The World</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/3dYZHp3H7g64LM0Fva4GC3?si=3d5a72a10cab42e9"
                  target="_blank"
                  >Halik Sa Hangin</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/5nWswD8icrEB76JAckDoxY?si=60fbaaa2ce7147fc"
                  target="_blank"
                  >Till My Hearteaches End</a
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="artist">
          <a
            href="https://open.spotify.com/artist/4DAcJXcjX0zlQAZAPAx4Zb?si=Xc25yLiuTEOGIn28hafMyw"
            target="_blank"
          >
            <img src="pop_genre.jpg" alt="Ben&Ben" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Ben&Ben</h3>
            <p class="artist-description">
              Folk-pop band known for their heartfelt and introspective songs, blending harmonious melodies with poignant lyrics, including "Pagtingin"
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/5l9g7py8RCblcvbZgGQgSd?si=b21339545d6843ce"
                  target="_blank"
                  >Pagtingin</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/3WUEs51GpcvlgU7lehLgLh?si=6b6b8763003b4a00"
                  target="_blank"
                  >Kathang Isip</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/3PgjBOoA5OytNGkglObpOd?si=08a9da2682a64151"
                  target="_blank"
                  >Sa Susunod na Habang Buhay</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/4rG3h1QwgjSSWz8EIjCFrm?si=6cb210775b8747dc"
                  target="_blank"
                  >Araw-Araw</a
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="artist">
          <a
            href="https://open.spotify.com/artist/0rZRTXEmmPmx6gt92tBqIc?si=QTKZdkQwTOeJvM7UU-nadg"
            target="_blank"
          >
            <img src="moiradelatorre.jpg" alt="Moira Dela Torre" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Moira Dela Torre</h3>
            <p class="artist-description">
              Singer-songwriter known for her soulful voice and emotional ballads, capturing audiences with hits like "Tagpuan.
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/6pA9QdHAzg1cyG6I7xI7Ez?si=9216dd1769e84f98"
                  target="_blank"
                  >Tagpuan</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/1OfrAWBcGEsKKUSdMnfs0A?si=17a6292b2dce4a79"
                  target="_blank"
                  >Paubaya</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/2e7iqtA42EPXTtiiAlblC1?si=643e9c9b95c8453e"
                  target="_blank"
                  >Babalik Sayo</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/59L27mlziC9IxqrvThBTMs?si=db5d7a9ab8864f52"
                  target="_blank"
                  >Before It Sinks In</a
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="artist">
          <a
            href="https://open.spotify.com/artist/4k9wp4ipHdA1bu1T4x1ZTG?si=X8M_YEDKRe2rkBYO_mjiUw"
            target="_blank"
          >
            <img src="ivofspades.jpg" alt="IV of Spades" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">IV of Spades</h3>
            <p class="artist-description">
              Filipino band known for their retro-inspired sound and stylish
              performances, with hits like "Mundo" and "Come inside of my heart"
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/61vyXXtY7OSYFRtSzv5ehw?si=f5b148cec455423a"
                  target="_blank"
                  >Mundo</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/3Eb5sztvEMa0Mqnb8DUAlU?si=881fd6f8e7c542a8"
                  target="_blank"
                  >Come inside of my heart</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/3Ast4vbb9axN3mqJb1zjIk?si=3891bfd90de94489"
                  target="_blank"
                  >Hey Barbara</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/5JFX5HIrFablCo0uEkNtKo?si=e7b52f02d6534b00"
                  target="_blank"
                  >Bata, Dahan-Dahan!</a
                >
              </li>
            </ul>
          </div>
        </div>
        
        <div class="artist">
          <a
            href="https://open.spotify.com/artist/4qFxP3qN9GsnZDOkAE6x2m?si=h1N5kx0rQeakbxtqAJkuKA"
            target="_blank"
          >
            <img src="decemberavenue.jpg" alt="December Avenue" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">December Avenue</h3>
            <p class="artist-description">
              OPM band known for their emotional ballads and relatable lyrics,
              resonating with listeners through songs like "Sa Ngalan Ng Pag-ibig"
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/1FnPkOlWCMwRtfXeAAuhMu?si=8707b0da0949407f"
                  target="_blank"
                  >Sa Ngalan Ng Pag-ibig</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/2KjZEVkRS7wStfRygdRnso?si=12979a6d7a8944cb"
                  target="_blank"
                  >Kung 'Di Rin Lang Ikaw</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/5rV7xueHNNXaZqOLroaUta?si=ede02419981c431d"
                  target="_blank"
                  >Bulong</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/6rIx9meOtOHDoo6ryRUdHv?si=66c8a5030f11429e"
                  target="_blank"
                  >Huling Sandali</a
                >
              </li>
            </ul>
          </div>
        </div>
        
        <div class="artist">
          <a
            href="https://open.spotify.com/artist/0a4r2EnsevvHCukoJ1xFwJ?si=1fz8KhgIR_eVrCGg30N-VA"
            target="_blank"
          >
            <img src="juankarlos.jpg" alt="Juan Karlos Labajo" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Juan Karlos Labajo</h3>
            <p class="artist-description">
              Singer-songwriter known for his raw and emotive performances, rising to
              fame with hits like "Buwan"
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/5f9808hpiCpuNyqqdXmpF2?si=4e795924ff144183"
                  target="_blank"
                  >Buwan</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/2BLdelIp46CHvKkyWeqZHL?si=b73ce838e85b41d8"
                  target="_blank"
                  >Ere</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/1WXs4O7mBxXglHJPwYweHq?si=0ee225f2b8c24fbf"
                  target="_blank"
                  >Demonyo</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/2axSXMLQxRlru2cyP7yqD8?si=cac7d8adb67d44fc"
                  target="_blank"
                  >Boston</a
                >
              </li>
            </ul>
          </div>
        </div>
        
        <div class="artist">
          <a
            href="https://open.spotify.com/artist/3g7vYcdDXnqnDKYFwqXBJP?si=epxt_H2oSoONwp9ib-abJw"
            target="_blank"
          >
            <img src="sb19.jpg" alt="SB19" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">SB19</h3>
            <p class="artist-description">
              Filipino boy band known for their K-pop inspired sound and synchronized
              dance performances, gaining popularity with songs like "Mapa."
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/6Fz2TpxUD0YvAPsuG8nDMJ?si=d2e678df10b842d4"
                  target="_blank"
                  >Mapa</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/1o6uF8VmXna99ysHTcQRI2?si=dc307d74cec840ef"
                  target="_blank"
                  >Gento</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/16GGH8OF6LiSUTTbm8421f?si=53adbdbd31434910"
                  target="_blank"
                  >I Want You</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/5GcS9zT4iIL7l0JrqZeG6O?si=349abc675cb7422d"
                  target="_blank"
                  >Crimzone</a
                >
              </li>
            </ul>
          </div>
        </div>
        
        <div class="artist">
          <a
            href="https://open.spotify.com/artist/2KdFoq4IBXMzfia4ZCLDIs?si=EkJsf0icSUisGY4VLn76sA"
            target="_blank"
          >
            <img src="toneejay.jpg" alt="Toneejay" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Toneejay</h3>
            <p class="artist-description">
              Singer-songwriter known for his soulful voice and heartfelt lyrics,
              connecting with listeners through songs like "711."
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/4dnlLz7zpWmuBgGeIHJYL0?si=56ce608d26704cb8"
                  target="_blank"
                  >711</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/68qOMum0kIvub5W3yQsTPo?si=0b0e58f5b1ca49af"
                  target="_blank"
                  >Bawat Piyesa</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/2Eihz8hE4tqOj52NNjf54Q?si=6fc516d961f84306"
                  target="_blank"
                  >Parang Magic</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/6cTSAPV2bCqLby1bMlZm1N?si=4e3b5fd354ca417e"
                  target="_blank"
                  >Bagong Tradisyon</a
                >
              </li>
            </ul>
          </div>
        </div>
        
        <div class="artist">
          <a
            href="https://open.spotify.com/artist/7tNO3vJC9zlHy2IJOx34ga?si=jy9oaAnDTDGc3zqUjXk2sg"
            target="_blank"
          >
            <img src="bini.jpg" alt="BINI" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">BINI</h3>
            <p class="artist-description">
              Filipina girl group known for their catchy pop songs and vibrant
              performances, including "Pantropiko."
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/6Csrqur3IfnVp0EtHskjMw?si=bcb030a869e7488b"
                  target="_blank"
                  >Pantropiko</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/1iIJtD9hkzw4ZHfR7ND9yb?si=a1ac81403827459c"
                  target="_blank"
                  >Salamin, Salamin</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/6xfsvHFXr8GgRzaFAkmjAY?si=4db4a0e2f509422e"
                  target="_blank"
                  >Karera</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/5YV9UyeC3dMV4kuRiTMGJs?si=0a1cb994f01949d8"
                  target="_blank"
                  >Lagi</a
                >
              </li>
            </ul>
          </div>
        </div>
        
        <div class="artist">
          <a
            href="https://open.spotify.com/artist/6Dp4LInLyMVA2qhRqQ6AGL?si=FXpkw7uOQBWg7I-ntmjMUg"
            target="_blank"
          >
            <img src="dilaw.jpg" alt="Dilaw" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Dilaw</h3>
            <p class="artist-description">
              Filipino band known for their alternative rock sound and socially
              relevant lyrics, with hits like "Uhaw"
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/47OFMuRu5lzJHRbtEXPBbs?si=293a7d12267b4184"
                  target="_blank"
                  >Uhaw</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/0BewsYUbEIKdJmdap9oI7V?si=5251da1b5f3d4529"
                  target="_blank"
                  >Janice</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/7tEmYgysfhAr3s5hEa8nlc?si=4e4082bf307d4ef9"
                  target="_blank"
                  >Orasa</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/7jOqzJjLxMTg6yScO5nYDb?si=ec0471fe350341c1"
                  target="_blank"
                  >Sansinukob</a
                >
              </li>
            </ul>
          </div>
        </div>
        
        <div class="artist">
          <a
            href="https://open.spotify.com/artist/3L1qgTsUqavkiygkIKfWJD?si=UgrCySJxSqaxmg4nXBc0Cg"
            target="_blank"
          >
            <img src="denisejulia.jpg" alt="Denise Julia" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Denise Julia</h3>
            <p class="artist-description">
              Singer-songwriter known for her heartfelt ballads and emotional
              performances, capturing audiences with songs like "B.A.D"
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/7ArVzlFsFsQXNseVXmdOyk?si=c9e1ec75528c4e71"
                  target="_blank"
                  >NVMD</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/14YZcGhRR05BTYajt8f9u9?si=a8bcce2548db410c"
                  target="_blank"
                  >B.A.D</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/7C6lV2MBF9SsQfNzb6hWUW?si=8d6b83c45b594bcc"
                  target="_blank"
                  >Lackin</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/30qPjijrLuNwcGD00Rdj07?si=26f28b6ee6344941"
                  target="_blank"
                  >Butterflies</a
                >
              </li>
            </ul>
          </div>
        </div>
        
        <div class="artist">
          <a
            href="https://open.spotify.com/artist/4zpGxqF6oI1h3f6Md2v42T?si=Hf6Z1sqaTmK1xtMSvWsTJA"
            target="_blank"
          >
            <img src="hevabi.jpg" alt="Hev Abi" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Hev Abi</h3>
            <p class="artist-description">
              Singer known for his catchy pop tunes and energetic performances, with
              hits like "Alam mo ba Girl"
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/57Z7lSnhwx82laEb6rdZPB?si=421f9b42d3f64ed0"
                  target="_blank"
                  >Alam mo ba Girl</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/4wZTvLi0khNRqqz4i5XhdV?si=7e0db5452cad4b66"
                  target="_blank"
                  >Walang Alam</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/6zdryckXPbIeQE5npNqvNp?si=16869d162d8f464f"
                  target="_blank"
                  >Lil Kasalanan Shortie</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/35Vt1L1KBP2YoWfErB0FAy?si=46e0a351d43e42c4"
                  target="_blank"
                  >Sumugal</a
                >
              </li>
            </ul>
          </div>
        </div>
        
        <div class="artist">
          <a
            href="https://open.spotify.com/artist/29zSTMejPhY0m7kwNQ9SPI?si=QIxJgRsPQXGS3xTDUsZ99A"
            target="_blank"
          >
            <img src="lolaamour.jpg" alt="Lola Amour" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">Lola Amour</h3>
            <p class="artist-description">
              Indie band known for their nostalgic sound and romantic lyrics,
              captivating listeners with songs like "Pwede Ba."
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/2pGH2MRfqXyFJtVPVBZ7Gx?si=18ddd2524abe4510"
                  target="_blank"
                  >Pwede Ba</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/3pT7wGF5w6Jhgj7w08dCeQ?si=dccfa656e91d4632"
                  target="_blank"
                  >Dahan Dahan</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/4mc3rUoMwwiNTHA4al9nNd?si=9f700029679c4e35"
                  target="_blank"
                  >Fallen</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/21LiJ0I7bH4IzhMdft5x0t?si=b17b3e7749d74d84"
                  target="_blank"
                  >Raining In Manila</a
                >
              </li>
            </ul>
          </div>
        </div>
        
        <div class="artist">
          <a
            href="https://open.spotify.com/artist/31fsDbpNPKe346urriO4ma?si=UW4OeMK5SWmUCpFlwzXtew"
            target="_blank"
          >
            <img src="mrld.jpg" alt="MRLD" class="artist-img" />
          </a>
          <div class="artist-info">
            <h3 class="artist-name">MRLD</h3>
            <p class="artist-description">
              Mrld, also known as Meriel de Jesus, is a rising Filipina singer-songwriter recognized for her captivating husky-toned voice and heartfelt acoustic pop melodies.
            </p>
            <button class="toggle-btn">Show Songs</button>
            <ul class="song-list hidden">
              <li>
                <a
                  href="https://open.spotify.com/track/22Nd3GuO7sHopPjdKccRcq?si=02aade56c7294521"
                  target="_blank"
                  >An Art Gallery Could Never Be As Unique As You</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/4IeuTj1pEHuL9vJSiEqEfR?si=a6402ebdf36d4d38"
                  target="_blank"
                  >Ligaya</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/4z7xboLD3PqY9dOUscS2ly?si=62989da0b58749f3"
                  target="_blank"
                  >Ikaw Pa Rin</a
                >
              </li>
              <li>
                <a
                  href="https://open.spotify.com/track/4GQtzdKig2DtCRcIXpgQZm?si=3491934c4323406e"
                  target="_blank"
                  >Lihim</a
                >
              </li>
            </ul>
          </div>
        </div>
        
      </div>
    </main>
  </body>
  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }

    document.addEventListener("DOMContentLoaded", function () {
      const toggleBtns = document.querySelectorAll(".toggle-btn");

      toggleBtns.forEach((btn) => {
        btn.addEventListener("click", function () {
          const songList = this.nextElementSibling;
          songList.classList.toggle("hidden");
        });
      });
    });

    function searchArtists() {
      var input = document.getElementById("search-input");
      var filter = input.value.toUpperCase();

      var artistsContainer = document.getElementsByClassName("list-artist")[0];

      var artists = artistsContainer.getElementsByClassName("artist");

      var matchedArtists = false;

      for (var i = 0; i < artists.length; i++) {
        var artist = artists[i];
        var artistName = artist.getElementsByClassName("artist-name")[0];
        var name = artistName.textContent || artistName.innerText;

        if (name.toUpperCase().indexOf(filter) > -1) {
          artist.style.display = "";
          matchedArtists = true;
        } else {
          artist.style.display = "none";
        }
      }

      var placeholder = document.getElementById("placeholder");

      if (matchedArtists) {
        placeholder.style.display = "none";
      } else {
        placeholder.style.display = "block";
      }
    }

    document
      .getElementById("search-input")
      .addEventListener("keyup", searchArtists);
  </script>
</html>
<?php
  include('HEADERFOOTER/footer.html');
?>