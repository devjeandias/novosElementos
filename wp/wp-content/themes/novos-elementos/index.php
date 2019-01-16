<?php get_header(); ?>
<div id="bannerTv" class="carousel slide bannerTv" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      </ol>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php bloginfo('template_url'); ?>/images/banner.jpg" alt="...">
          <div class="carousel-caption text-left">
            <div class="container">
              <small class="bannerTv--label --categoria">Cirúrgica</small>
              <h2 class="bannerTv--label --titulo">Retirada de sinais</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section id="sobre">
      <div class="container">
        <div class="wrap">
          <figure class="image">
            <img src="<?php bloginfo('template_url'); ?>/images/paula-tansini.jpg" alt="">
          </figure>

          <div class="text">
            <h2 class="titulo">DRA. PAULA TANSINI</h2>

            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

            <p>Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non<br> neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc.</p>
            
            <p>Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis<br> neque. Suspendisse in orci enim.</p>
          </div>
        </div>

      </div>
    </section>

    <section id="tratamentos">
      <div class="container">
        <ul class="lista-tratamentos">
            <li class="lista-tratamentos--item">
              <div class="card--header">
                <img src="<?php bloginfo('template_url'); ?>/images/img-1.jpg" alt="">
                <h2 class="card-label">Clínica</h2>
              </div>

              <div class="card--body scrollBar">
                <h5 class="card-title">Check-up dermatológico</h5>
                <p class="card--text">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                <p class="card--text">Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc.</p>
              </div>
            </li>

            <li class="lista-tratamentos--item">
              <div class="card--header">
                <img src="<?php bloginfo('template_url'); ?>/images/img-2.jpg" alt="">
                <h2 class="card-label">Cirúrgica</h2>
              </div>

              <div class="card--body scrollBar">
                <h5 class="card-title">Retirada de sinais</h5>
                <p class="card--text">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                <p class="card--text">Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc.</p>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Peeling cirúrgico</li>
                </ul>
              </div>
            </li>

            <li class="lista-tratamentos--item">
              <div class="card--header">
                <img src="<?php bloginfo('template_url'); ?>/images/img-3.jpg" alt="">
                <h2 class="card-label">Cosmiatria</h2>
              </div>

              <div class="card--body scrollBar">
                <h5 class="card-title">MD Codes</h5>
                <p class="card--text">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                <p class="card--text">Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc.</p>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Preenchimento</li>
                    <li class="list-group-item">Toxina botulínica</li>
                    <li class="list-group-item">item 3</li>
                </ul>
              </div>
            </li>
        </ul>
      </div>
    </section>

    <section id="contato">
      <div class="medias-sociais container">
        <div class="row">
          <div class="box --facebook col-6">
            <div class="wrap">
              <div class="fb-page" data-href="https://www.facebook.com/drapaulatansini/" data-tabs="timeline" data-width="451" data-height="451" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/drapaulatansini/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/drapaulatansini/">Paula Tansini</a></blockquote></div>
            </div>
          </div>

          <div class="box --instagram col-6">
            <div class="wrap">
              <a class="link-instagram" href="//www.instagram.com/js_blackking/">&nbsp;</a>
              <script src="//cdn.lightwidget.com/widgets/lightwidget.js"></script>
              <iframe src="//lightwidget.com/widgets/5424d13d720a54de8f9d3d6579f72f17.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden"></iframe>
            </div>
          </div>
        </div>
      </div>

      <div class="info-contato">
        <div class="wrapper">
          <div>
            <address>
              Avenida das Américas, 2111<br> BL. 1, sls. 102, 103 3 104, BARRA DA TIJUCA
            </address>
  
            <ul class="lista-telefones">
              <li class="tel">(21) 2493-8418</li> 
              <li class="whats"><a href="//api.whatsapp.com/send?phone=5521981566410">(21) 98156-6410</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>