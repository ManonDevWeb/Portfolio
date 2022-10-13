<!-- PARTIE FILM DE LA PLATEFORME -->
<!DOCTYPE html>
<html>
<?php include('includes/header.php'); ?>

<body>
  <?php include('includes/navbar.php'); ?>
    
    <section class="films-et-series">

      <section class="section tendances">
        <h2>Les plus gros succès</h2>

        <div class="slideshow-container">
          <div class="list">
            <div class="mySlides fade">
                <a href=""><img src="img/38.jpg" alt=""></a>
                <a href=""><img src="img/39.jpg" alt=""></a>
                <a href=""><img src="img/40.jpg" alt=""></a>
                <a href=""><img src="img/41.webp" alt=""></a>
                <a href=""><img src="img/42.jpg" alt=""></a>
                <a href=""><img src="img/43.webp" alt=""></a>
                <a href=""><img src="img/44.webp" alt=""></a>
            </div>
            <div class="mySlides fade">
                <a href=""><img src="img/45.webp" alt=""></a>
                <a href=""><img src="img/46.webp" alt=""></a>
                <a href=""><img src="img/47.webp" alt=""></a> 
            </div>
          </div>

          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
      </section>
     
      <section class="section action-aventure">
        <h2>Blockbusters</h2>

        <div class="slideshow-container">
          <div class="list">
            <div class="mySlides1 fade">
              <a href=""><img src="img/48.webp" alt=""></a>
              <a href=""><img src="img/49.webp" alt=""></a>
              <a href=""><img src="img/50.webp" alt=""></a>
              <a href=""><img src="img/51.webp" alt=""></a>
              <a href=""><img src="img/52.jpg" alt=""></a>
              <a href=""><img src="img/53.webp" alt=""></a>
              <a href=""><img src="img/54.webp" alt=""></a>
            </div>
            <div class="mySlides1 fade">
              <a href=""><img src="img/55.webp" alt=""></a>
              <a href=""><img src="img/56.webp" alt=""></a>
              <a href=""><img src="img/57.webp" alt=""></a> 
              <a href=""><img src="img/58.webp" alt=""></a> 
            </div>
          </div>

          <a class="prev" onclick="plusSlides1(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides1(1)">&#10095;</a>

        </div>
      </section>

    </section>
   
    <?php include('includes/footer.php'); ?>

    <script src="assets/script.js"></script>
  </body>
</html>