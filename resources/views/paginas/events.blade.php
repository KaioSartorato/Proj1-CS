@extends('template.index')

@section('contents')

    <!-- ======= Events Section ======= -->

    <section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">

          <p>Campeonatos <span> ativos</span> 2023</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(img/events-1.png)">
              <h3>Pro League</h3>
              <div class="price align-self-start">30/08/2023</div>
              <p class="description">
              A ESL Pro League é considerada a principal liga profissional de CS:GO no mundo e uma das principais ligas profissionais de esportes eletrônicos.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(img/events-2.jpg)">
              <h3>Blast Premier [EU]</h3>
              <div class="price align-self-start">04/10/2023</div>
              <p class="description">
A competição da BLAST Premier Spring Final 2023 é composta por duas fases: grupos e playoffs. Na etapa de grupos, os grupos se enfrentam em séries (MD3).
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(img/events-3.jpg)">
              <h3>Asia Championship</h3>
              <div class="price align-self-start">08/11/2023</div>
              <p class="description">
              O CS:GO Asia Championships retorna em 2023 como teste para o Major de 2023 e participação de grandes equipes. A Perfect World anunciou o retorno do CS:GO Asia Championship.
              </p>
            </div><!-- End Event item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

 @endsection