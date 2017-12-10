
<!--Algunos datos se llaman de forma dinámica como el 'wp_nav_menu', el cual resive un llamado dinámico al menú y para llamar a los archivos que están dentro de function.php está el 'wp_footer' -->


 

<?php wp_footer() ?>

<div class = "footer">
	<p>DESAFIOLATAM 2016 - CURSO FULLSTACK G5</p>
</div>
 
  

<section class = "col-md-6 col-md-offset-3">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
       
       <img class = "img-responsive" src="<?php echo get_bloginfo('template_url') ?>/assets/images/bg22.jpeg"/>
      <div class="carousel-caption">
        Slide 1
      </div>
    </div>
    <div class="item">
      
       <img class = "img-responsive" src="<?php echo get_bloginfo('template_url') ?>/assets/images/conectado.jpg"/>
      <div class="carousel-caption">
        Slide 2
      </div>
    </div>

    <div class="item">
       
      <img class = "img-responsive" src="<?php echo get_bloginfo('template_url') ?>/assets/images/red.jpg"/>
      <div class="carousel-caption">
        Slide 3
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>




</body>
</html>