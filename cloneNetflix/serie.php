<!-- PAGE SERIE DE LA PLATEFORME -->
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
              <a href=""><img src="img/11.jpg" alt=""></a>
                <a href=""><img src="img/5.jpg" alt=""></a>
                <a href=""><img src="img/7.jpg" alt=""></a>
                <a href=""><img src="img/4.jpg" alt=""></a>
                <a href=""><img src="img/2.jpg" alt=""></a>
                <a href=""><img src="img/6.jpg" alt=""></a>
                <a href=""><img src="img/3.jpg" alt=""></a>
            </div>

            <div class="mySlides fade">
                <a href=""><img src="img/10.jpg" alt=""></a>
                <a href=""><img src="img/9.jpg" alt=""></a>
                <a href=""><img src="img/8.jpg" alt=""></a> 
                <a href=""><img src="img/1.jpg" alt=""></a> 
            </div>
          </div>

          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>

      </section>
 
      <section class="section series-violentes">
        <h2>Séries comiques</h2>

        <div class="slideshow-container">
          <div class="list">
            <div class="mySlides1 fade">
                <a href=""><img src="img/28.jpg" alt=""></a>
                <a href=""><img src="img/29.webp" alt=""></a>
                <a href=""><img src="img/30.webp" alt=""></a>
                <a href=""><img src="img/31.webp" alt=""></a>
                <a href=""><img src="img/32.webp" alt=""></a>
                <a href=""><img src="img/33.webp" alt=""></a>
                <a href=""><img src="img/34.webp" alt=""></a>
            </div>
            <div class="mySlides1 fade">
                <a href=""><img src="img/35.jpg" alt=""></a>
                <a href=""><img src="img/36.jpg" alt=""></a>
                <a href=""><img src="img/37.jpg" alt=""></a>    
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