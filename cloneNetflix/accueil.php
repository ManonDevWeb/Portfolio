
<!DOCTYPE html>
<html>
<?php include('includes/header.php'); ?>

  <body>
  <?php include('includes/navbar.php'); ?>
    
    <section class="films-et-series">

      <section class="section tendances">
        <h2>Nouveautés les plus regardées</h2>

        <div class="slideshow-container">
            <div class="list">
              <div class="mySlides fade">
                <a href=""><img src="img/1.jpg" alt=""></a>
                  <a href=""><img src="img/2.jpg" alt=""></a>
                  <a href=""><img src="img/3.jpg" alt=""></a>
                  <a href=""><img src="img/4.jpg" alt=""></a>
                  <a href=""><img src="img/5.jpg" alt=""></a>
                  <a href=""><img src="img/6.jpg" alt=""></a>
                  <a href=""><img src="img/7.jpg" alt=""></a>  
              </div>

              <div class="mySlides fade">
                <a href=""><img src="img/8.jpg" alt=""></a>
                  <a href=""><img src="img/9.jpg" alt=""></a>
                  <a href=""><img src="img/10.jpg" alt=""></a> 
                  <a href=""><img src="img/11.jpg" alt=""></a> 
              </div>
            </div>
            
              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
      </section>
    
      <section class="section series-violentes">
        <h2>Séries primées</h2>

        <div class="slideshow-container">
          <div class="list">
            <div class="mySlides1 fade">
              <a href=""><img src="img/12.jpg" alt=""></a>
              <a href=""><img src="img/13.jpg" alt=""></a>
              <a href=""><img src="img/14.webp" alt=""></a>
              <a href=""><img src="img/15.jpg" alt=""></a>
              <a href=""><img src="img/16.webp" alt=""></a>
              <a href=""><img src="img/17.webp" alt=""></a>
              <a href=""><img src="img/18.jpg" alt=""></a>
            </div>

            <div class="mySlides1 fade">
              <a href=""><img src="img/19.jpg" alt=""></a>
              <a href=""><img src="img/20.jpg" alt=""></a>
            </div>
          </div>

          <a class="prev" onclick="plusSlides1(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides1(1)">&#10095;</a>

        </div>
      </section>
      
      <section class="section action-aventure">
        <h2>Thrillers</h2>

        <div class="slideshow-container">
          <div class="list">
            <div class="mySlides2 fade">
                <a href=""><img src="img/21.jpg" alt=""></a>
                <a href=""><img src="img/22.jpg" alt=""></a>
                <a href=""><img src="img/23.webp" alt=""></a>
                <a href=""><img src="img/24.jpg" alt=""></a>
                <a href=""><img src="img/25.webp" alt=""></a>
                <a href=""><img src="img/26.webp" alt=""></a>
                <a href=""><img src="img/27.jpg" alt=""></a>
            </div>

            <div class="mySlides2 fade">
            <a href=""><img src="img/59.webp" alt=""></a>
            <a href=""><img src="img/46.webp" alt=""></a>
            <a href=""><img src="img/60.webp" alt=""></a>
            <a href=""><img src="img/61.webp" alt=""></a>
            <a href=""><img src="img/62.webp" alt=""></a>
            <a href=""><img src="img/63.webp" alt=""></a>
            <a href=""><img src="img/65.jpg" alt=""></a>

            </div>
          </div>

          <a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides2(1)">&#10095;</a>

        </div>
      </section>
      
    </section>

      
    <?php include('includes/footer.php'); ?>

    <script src="assets/script.js"></script>
  </body>
</html>