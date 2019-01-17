<?php get_header(); ?>
    <?php
        $args = array( 'post_type'=>'banner_tv' );
        $the_query = new WP_Query( $args );
        $qttPosts = 0;
    ?>

    <div id="bannerTv" class="carousel slide bannerTv" data-ride="carousel">      
      <div class="carousel-inner">
        <?php if ( $the_query->have_posts() ) { while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <?php
            //section config
            $bannerLabel = get_field('banner-label');
            $bannerTexto = get_field('banner-texto');
            ?>

          <div class="<?php echo $qttPosts == 0 ? 'carousel-item active': 'carousel-item'; ?>">
            <img src="<?php echo the_field('banner-imagem') ?>" alt="">
            <div class="carousel-caption text-left">
              <div class="container">
                <small class="bannerTv--label --categoria"><?php echo $bannerLabel ?></small>
                <h2 class="bannerTv--label --titulo"><?php echo $bannerLabel ?></h2>
                <?php edit_post_link(); ?>
              </div>
            </div>
          </div>
          <?php $qttPosts++; endwhile; wp_reset_postdata(); } ?>
          
          <?php if($qttPosts>1) { ?>
            <ol class="carousel-indicators">
              <?php for($i=0; $i<$qttPosts; $i++) { ?>
                <li data-target="#bannerTv" data-slide-to="<?php echo $i ?>" class="<?php $i == 0 ? 'active' : ''; ?>"></li>
              <?php } ?>
            </ol>
          <?php } ?>
      </div>
    </div>

    <?php
        $args = array( 'page_id'=>26 );
        $the_query = new WP_Query( $args );
    ?>

    <?php if ( $the_query->have_posts() ) { while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <section id="sobre">
      <?php edit_post_link(); ?>
      <div class="container">
        <div class="wrap">
          <?php if ( has_post_thumbnail() ) : ?>
            <figure class="image">
              <?php the_post_thumbnail(); ?>
            </figure>
          <?php endif; ?>

          <div class="text">
            <h2 class="titulo">
              <?php the_title(); ?>
            </h2>

            <?php the_content() ?>
          </div>
        </div>

      </div>
    </section>
    <?php endwhile; wp_reset_postdata(); } ?>

    <?php
        $args = array( 'post_type'=>'tratamentos' );
        $the_query = new WP_Query( $args );
    ?>
    <section id="tratamentos">
      <div class="container">
        <ul class="lista-tratamentos">
          <?php if ( $the_query->have_posts() ) { while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <?php
              //section config
              $tratamentoSubTitle = get_field('tratamento-subtitulo');
              $tratamentoTexto = get_field('tratamento-texto');
              $tratamentoTipos = get_field_object('tratamentos-tipos', get_the_ID());
          ?>

          <li class="lista-tratamentos--item">
            
            <?php edit_post_link(); ?>
            <div class="card--header">
              <img src="<?php echo the_field('tratamento_image') ?>" alt="">
              <h2 class="card-label"><?php the_title() ?></h2>
            </div>

            <div class="card--body scrollBar">
              <h5 class="card-title"><?php echo $tratamentoSubTitle ?></h5>
              <?php echo $tratamentoTexto ?>

              <?php
                $field = $tratamentoTipos;
                if( $field['value'] ): ?>
                  <ul class="list-group list-group-flush">
                      <?php
                        foreach( $field['value'] as $value => $label ): $term = get_term($label, $field['taxonomy']);
                          echo '<li class="list-group-item">' . $term->name . '</li>';
                        endforeach;
                      ?>
                  </ul>
              <?php endif; ?>
            </div>
          </li>
          <?php endwhile; wp_reset_postdata(); } ?>
        </ul>
      </div>
    </section>

<?php
        $args = array( 'page_id'=>35 );
        $the_query = new WP_Query( $args );
    ?>
    <?php if ( $the_query->have_posts() ) { while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php
          //section config
          $htmlFacebook = get_field('contato-facebook');
          $htmlInstagram = get_field('contato-instagram');
          $contatoEndereco = get_field('contato-endereco');
          $contatoTelefone = get_field('contato-telefone');
          $contatoWhatsapp = get_field('contato-whatsapp');
        ?>

        <section id="contato">
          <?php edit_post_link(); ?>
          <div class="medias-sociais container">
            <div class="row">
              <?php if( $htmlFacebook ) { ?>
                <div class="box --facebook col-6">
                  <div class="wrap">
                    <?php echo $htmlFacebook ?>
                  </div>
                </div>
              <?php } ?>

              <?php if( $htmlInstagram ) { ?>
                <div class="box --instagram col-6">
                  <div class="wrap">
                    <?php echo $htmlInstagram ?>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>

          <div class="info-contato">
            <div class="wrapper">
              <div>
                <?php if($contatoEndereco) { ?>
                  <address>
                    <?php echo $contatoEndereco ?>
                  </address>
                <?php } ?>
                
                <?php if($contatoTelefone || $contatoWhatsapp) { ?>
                  <ul class="lista-telefones">
                    <?php if($contatoTelefone) { ?>
                      <li class="tel"><?php echo $contatoTelefone ?></li>
                    <?php } ?>

                    <?php if($contatoWhatsapp) { ?>
                      <li class="whats"><a href="//api.whatsapp.com/send?phone=5521981566410"><?php echo $contatoWhatsapp ?></a></li>
                    <?php } ?>
                  </ul>
                <?php } ?>
              </div>
            </div>
          </div>
        </section>
    <?php endwhile; wp_reset_postdata(); } ?>
<?php get_footer(); ?>