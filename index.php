<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"/>

    <!-- Font Awesome CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <!-- Lokal CSS -->
    <link rel="stylesheet" href="style.css"/>

    <title>My Netflix</title>
  </head>
  <body>
    <!--------------------------------- Bagian Header -------------------------------------------->
    <header>
      <nav class="navbar navbar-dark bg-black fixed-top" id="nav">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img
              src="img/icon-logo/netflix1.png"
              alt=""
              width="90"
              height="30"
              class="d-inline-block align-text-top"
            />
          </a>
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link" href="#">Movies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Genre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">TV Series</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Marvel Cinematic Universe</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!----------------------------------------- end ----------------------------------------------->

    <!-------------------- Bagian gambar carousel dan judulnya -------------------------------------->
    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <!-- Slide pertama -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="img/carousel-poster/thor-love-and-thunder.png"
            class="d-block w-100"
            alt="..."
          />
          <!-- Judul gambar -->
          <div
            class="carousel-caption d-none d-md-block position-absolute bottom-50 start-3 mt-3 text-start"
          >
            <div class="heropage">
              <span>Sedang Trending</span>
              <div class="line1"></div>
              <h1>Thor: Love and Thunder</h1>
              <p>Aksi,Petualangan,Komedi | 2022 | USA | 13+ | 1j 58m</p>
              <div class="btn1">
                <a href=""><i class="fas fa-play"></i>Nonton Sekarang</a>
                <a href=""><i class="fas fa-heart"></i>Nonton Nanti</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Slide kedua -->
        <div class="carousel-item">
          <img
            src="img/carousel-poster/quantumania-mantap.jpeg"
            class="d-block w-100"
            alt="..."
          />
          <!-- Judul gambar -->
          <div
            class="carousel-caption d-none d-md-block position-absolute bottom-50 start-3 mt-3 text-start"
          >
            <div class="heropage">
              <span>Sedang Tayang</span>
              <div class="line1"></div>
              <h1>Ant-Man and the Wasp: Quantumania</h1>
              <p>Aksi,Petualangan,Komedi | 2023 | USA | SU | 2j 4m</p>
              <div class="btn1">
                <a href=""><i class="fas fa-play"></i>Nonton Sekarang</a>
                <a href=""><i class="fas fa-heart"></i>Nonton Nanti</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Slide ketiga -->
        <div class="carousel-item">
          <img
            src="img/carousel-poster/doctor-strange.jpg"
            class="d-block w-100"
            alt="..."
          />
          <!-- Judul gambar -->
          <div
            class="carousel-caption d-none d-md-block position-absolute bottom-50 start-3 mt-3 text-start"
          >
            <div class="heropage">
              <span>Sedang Tayang</span>
              <div class="line1"></div>
              <h1>Doctor Strange<br />in the Multiverse of Madness</h1>
              <p>Aksi,Petualangan,Fantasi | 2022 | USA | R13+ | 2j 6m</p>
              <div class="btn1">
                <a href=""><i class="fas fa-play"></i>Nonton Sekarang</a>
                <a href=""><i class="fas fa-heart"></i>Nonton Nanti</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!--------------------------------------- end ------------------------------------------------->

    <!-----------------------------Bagian pencarian film------------------------------------------>
    <div class="search">
      <h1>Cari Film</h1>
      <form method="GET" action="index.php">
        <input type="text" name="query" placeholder="Cari judul film..."/>
        <button type="Submit">Cari</button>
      </form>
    </div>
    <!---------------------------------------- end ------------------------------------------------>

    <!---------------------------- Bagian hasil pencarian ----------------------------------------->
    <main>
      <?php
			// API key dan base URL nya
			$api_key = "5f3124ab908cfec27bf8c846894c5b7b"; //API key
			$base_url = "https://api.themoviedb.org/3/search/movie"; //base URL TheMovieDB

			// Untuk mengecek jika pencarian telah di submit
			if (isset($_GET['query'])) {
				$search_query = $_GET['query'];
				$search_results = [];

				// setting URL API
				$query_params = http_build_query([
					'api_key' => $api_key,
					'query' => $search_query
				]);
				$api_url = $base_url . "?" . $query_params;

				// Fungsi CURL untuk mengambil data dari API
				$curl = curl_init($api_url); //Memulai sesi CURL baru dan menentukan URL API sebagai parameter.
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				$response = curl_exec($curl);
				curl_close($curl);
				$api_data = json_decode($response, true);

				// Mengusun data API yang ingin kita tampilkan
				foreach ($api_data['results'] as $result) {
					$search_results[] = [
						"title" => $result['title'],
						"poster_path" => $result['poster_path'],
            "release_date" => $result['release_date'],
					];
				}
		?>
    <!--- Tampilan Hasil --->
      <div class="results">
        <?php foreach ($search_results as $result) : ?>
        <div class="movie">
          <img
            src="https://image.tmdb.org/t/p/w500<?php echo $result['poster_path']; ?>"
            alt="<?php echo $result['title']; ?>"/>
          <h3><?php echo $result['title']; ?></h3>
          <p><?php echo $result['release_date']; ?></p>
        </div>
        <?php endforeach; ?>
      </div>
      <?php } else { ?>
        <h5>Cari film yang ingin anda tonton</h5>
      <?php } ?>
    </main>
    <!------------------------------------- end --------------------------------------------------->

    <!------------------------------------Bagian Film Action---------------------------------->
    <section>
      <div class="film-aksi" id="film-aksi">
        <div class="more">
          <h1>Flm Action</h1>
          <h2>Lihat Lebih »</h2>
        </div>
        <div class="film-aksi-container">
          <div class="film-aksi-inside">
            <img src="img/film-aksi/furious8.jpg" alt="" />
            <h3>Fast and Furious 8 (2017)</h3>
          </div>
          <div class="film-aksi-inside">
            <img src="img/film-aksi/john-wick.jpg" alt="" />
            <h3>John Wick (2016)</h3>
          </div>
          <div class="film-aksi-inside">
            <img src="img/film-aksi/the-revenant.jpg" alt="" />
            <h3>The Revenant (2015)</h3>
          </div>
          <div class="film-aksi-inside">
            <img src="img/film-aksi/knives-out.jpg" alt="" />
            <h3>Knives Out (2018)</h3>
          </div>
          <div class="film-aksi-inside">
            <img src="img/film-aksi/no-time-to-die.jpg" alt="" />
            <h3>No Time to Die (2021)</h3>
          </div>
          <div class="film-aksi-inside">
            <img src="img/film-aksi/black-adam.jpg" alt="" />
            <h3>Black Adam (2022)</h3>
          </div>
          <div class="film-aksi-inside">
            <img src="img/film-aksi/fury.jpg" alt="" />
            <h3>Fury (2014)</h3>
          </div>
        </div>
      </div>
    </section>
    <!---------------------------------------- end ----------------------------------------------->

    <!----------------------------------Bagian Film Anime------------------------------------------->
    <section>
      <div class="film-anime" id="film-anime">
        <h1>Anime Serial</h1>
        <div class="film-anime-container">
          <div class="film-anime-inside">
            <img src="img/film-anime/aot.jpg" alt="" />
            <h3>Attack on Titan (2022)</h3>
          </div>
          <div class="film-anime-inside">
            <img src="img/film-anime/kimetsu-no-yaiba.jpg" alt="" />
            <h3>Demon Slayer (2020)</h3>
          </div>
          <div class="film-anime-inside">
            <img src="img/film-anime/boruto.jpg" alt="" />
            <h3>Boruto (2017)</h3>
          </div>
          <div class="film-anime-inside">
            <img src="img/film-anime/chainsaw-man.jpg" alt="" />
            <h3>Chainsaw Man (2022)</h3>
          </div>
          <div class="film-anime-inside">
            <img src="img/film-anime/jujutsu-kaisen.jpg" alt="" />
            <h3>Jujutsu Kaisen (2020)</h3>
          </div>
          <div class="film-anime-inside">
            <img src="img/film-anime/my-hero-academia.jpg" alt="" />
            <h3>My Hero Academia (2022)</h3>
          </div>
          <div class="film-anime-inside">
            <img src="img/film-anime/tokyo-revengers.jpg" alt="" />
            <h3>Tokyo Revengers (2023)</h3>
          </div>
        </div>
      </div>
    </section>
    <!-------------------------------------- end --------------------------------------------------->

    <!---------------------------------- Bagian serial tv ------------------------------------------>
    <section>
      <div class="tvseries" id="tvseries">
        <h1>TV Serial</h1>
        <div class="tvseries-container">
          <div class="tvseries-inside">
            <img src="img/tv-series/the-last-of-us.jpg" alt="" />
            <h3>The Last of Us (2023)</h3>
          </div>
          <div class="tvseries-inside">
            <img src="img/tv-series/money-heist.jpg" alt="" />
            <h3>Money Heist (2021)</h3>
          </div>
          <div class="tvseries-inside">
            <img src="img/tv-series/loki.jpg" alt="" />
            <h3>Loki: Season 1 (2021)</h3>
          </div>
          <div class="tvseries-inside">
            <img src="img/tv-series/peaky-blinders.jpg" alt="" />
            <h3>Peaky Blinders: S6 (2022)</h3>
          </div>
          <div class="tvseries-inside">
            <img src="img/tv-series/hawkeye.jpg" alt="" />
            <h3>Hawkeye (2021)</h3>
          </div>
          <div class="tvseries-inside">
            <img src="img/tv-series/breaking-bad.jpg" alt="" />
            <h3>Breaking Bad: S5 (2012)</h3>
          </div>
          <div class="tvseries-inside">
            <img src="img/tv-series/viking.jpg" alt="" />
            <h3>Vikings: S6 (2019)</h3>
          </div>
        </div>
      </div>
    </section>
    <!----------------------------------------- end ----------------------------------------------->

    <!------------------------------ Bagian Footer ------------------------------------------------->
    <footer>
      <div class="footer">
        <div class="inside-footer">
          <div class="footer-container">
            <div class="logopart">
              <img src="img/icon-logo/netflix1.png" alt="" />
            </div>
            <div class="copyright">
              <p>&copy 2023 <span>Muh. Jailani</span></p>
            </div>
            <div class="socials">
              <i class="fab fa-facebook-square"></i>
              <i class="fab fa-youtube"></i>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-discord"></i>
              <i class="fab fa-tiktok"></i>
            </div>
            <div class="btn4">
              <a href="">Subcribe Youtube Kami</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--------------------------------------- end ---------------------------------------------------->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
