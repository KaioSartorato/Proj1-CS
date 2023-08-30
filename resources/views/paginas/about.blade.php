@extends('template.index')

@section('contents')

<!-- ======= About Section ======= -->
<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">

          <p>Novidades e <span>Mecanicas</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
              Visuais de jogabilidade: No Counter-Strike 2, os elementos visuais mais vitais foram redesenhados com a legibilidade em mente. Os impactos de balas podem ser facilmente vistos a distância, e manchas de sangue
               direcionais (que vão desaparecendo com o tempo) dão mais informações enquanto você se move pelo mapa.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Smokes responsivas: As Smokes no Counter-Strike 2 serão feitas de outra maneira. O equipamento não será mais estático no mapa como no CS:GO.</li>
                <li><i class="bi bi-check2-all"></i> Novos mapas: Os mapas reformulados foram refeitos do zero, aproveitando todas as novas ferramentas e recursos do motor gráfico Source 2.</li>
                <li><i class="bi bi-check2-all"></i> Novos efeitos visuais no CS 2: Os efeitos visuais também foram atualizados para o Source 2, então várias coisas se comportam diferente: explosões, labaredas, fumaças, flashes de disparo, traçados de balas, efeitos de impacto e outras.</li>
              </ul>
              <p>
              Com cinco dias de anúncio, Counter-Strike 2 (CS2) já tem o seu Major (campeonato pertencente ao circuito de competições organizados pela Blast) confirmado para março de 2024. 
              A previsão é que o evento aconteça do dia 17 ao dia 31. A PGL, organizadora do evento, afirmou que a competição será em Copenhague, na Dinamarca.

              <div class="position-relative mt-4">
                <img src="img/about-2.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=MbJ6WsVzkB0" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    @endsection