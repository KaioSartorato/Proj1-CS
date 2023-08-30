@extends('template.index')

@section('contents')

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Counter Strike 2<br>Chega no verão de 2023!</h2>
          <p data-aos="fade-up" data-aos-delay="100">O Counter-Strike começou como um mod do jogo Half-Life, lançado em 1998 pela Valve. Após o grande sucesso e pelo pedido de muitos, o Cs2 está chegando com cara nova e sua privisão de lançamento é para ainda este ano! </p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="https://www.youtube.com/watch?v=ExZtISgOxEQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Veja as novidades</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

      <!-- ======= Gallery Section ======= -->
      <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Skins Destaque</h2>
          <p>Melhores <span>Facas</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/gallery/fiura1.png"><img src="img/gallery/fiura1.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/gallery/fiura2.png"><img src="img/gallery/fiura2.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/gallery/fiura3.png"><img src="img/gallery/fiura3.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/gallery/fiura4.png"><img src="img/gallery/fiura4.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/gallery/fiura5.png"><img src="img/gallery/fiura5.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/gallery/fiura6.png"><img src="img/gallery/fiura6.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/gallery/fiura7.png"><img src="img/gallery/fiura7.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/gallery/fiura8.png"><img src="img/gallery/fiura8.png" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Quer saber mais sobre a atualização?</h3>
              <p>
              Novo visual dos mapas de CS2
Além do polimento geral nas texturas, um dos pontos mais notáveis do visual de Counter-Strike 2 é o uso de iluminação e reflexo em cada canto, tornando os mapas muito mais atraentes. A Valve também mencionou que os locais foram refeitos do zero para aproveitar a Source 2 ao máximo.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Ver mais<i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>K/D/A</h4>
                  <p>(Kill/Death/Assistance) é a soma de abates e assistências dividida pelo número de mortes. Ele mede a performance de um atleta levando em consideração sua participação em lutas. Quanto maior o KDA, maior o desempenho!</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Economia</h4>
                  <p>O que é economia e por que ela é necessária? A economia no CS:GO faz com que qualquer arma seja procurada - cada rifle tem seu próprio preço, dependendo de vários indicadores. Isso funciona para o equilíbrio.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Inventário</h4>
                  <p>Conforme citado anteriormente, todo o inventário dos jogadores de CS:GO serão migrados para o CS 2, e os itens serão aprimorados para a inserção no novo motor gráfico.</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

      </div>
    </section><!-- End Stats Counter Section -->

  @endsection