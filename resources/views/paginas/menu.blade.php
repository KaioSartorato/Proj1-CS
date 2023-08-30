@extends('template.index')

@section('contents')

   <!-- ======= Menu Section ======= -->
   <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">

          <p>Os <span> Melhores</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Players</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Times</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Casters</h4>
            </a>
          </li><!-- End tab nav item -->

           <!--<li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
              <h4>Streamers</h4>
            </a>
          </li>-->
          <!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <!--<p>Menu</p>
              <h3>Starters</h3> -->
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-1.png" class="glightbox"><img src="img/menu/menu-item-1.webp" class="menu-img img-fluid" alt=""></a>
                <h4>FalleN</h4>
                <p class="ingredients">
                Gabriel Toledo
                </p>
                <p class="price">
                FURIA
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-2.png" class="glightbox"><img src="img/menu/menu-item-2.webp" class="menu-img img-fluid" alt=""></a>
                <h4>s1mple</h4>
                <p class="ingredients">
                Oleksandr Kostyliev
                </p>
                <p class="price">
                Natus Vincere
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-3.png" class="glightbox"><img src="img/menu/menu-item-3.webp" class="menu-img img-fluid" alt=""></a>
                <h4>TACO</h4>
                <p class="ingredients">
                Epitacio de Melo
                </p>
                <p class="price">
                (F.A)
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-4.png" class="glightbox"><img src="img/menu/menu-item-4.webp" class="menu-img img-fluid" alt=""></a>
                <h4>LUCAS1</h4>
                <p class="ingredients">
                Lucas Teles
                </p>
                <p class="price">
                  (F.A)
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-5.png" class="glightbox"><img src="img/menu/menu-item-5.webp" class="menu-img img-fluid" alt=""></a>
                <h4>KSCERATO</h4>
                <p class="ingredients">
                Kaike Cerato
                </p>
                <p class="price">
                FURIA
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-6.png" class="glightbox"><img src="img/menu/menu-item-6.webp" class="menu-img img-fluid" alt=""></a>
                <h4>fnx</h4>
                <p class="ingredients">
                Lincoln Lau
                </p>
                <p class="price">
                  (F.A)
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <!--<p>Menu</p>
              <h3>Breakfast</h3>-->
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-1.png" class="glightbox"><img src="img/menu/m-item-1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Vitality</h4>
                <p class="ingredients">
                Europe
                </p>
                <p class="price">
                World ranking #1
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-2.png" class="glightbox"><img src="img/menu/m-item-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Heroic</h4>
                <p class="ingredients">
                Dinamarca
                </p>
                <p class="price">
                World ranking #2
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-3.png" class="glightbox"><img src="img/menu/m-item-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>G2</h4>
                <p class="ingredients">
                Europa
                </p>
                <p class="price">
                World ranking #3
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-4.png" class="glightbox"><img src="img/menu/m-item-4.png" class="menu-img img-fluid" alt=""></a>
                <h4>ENCE</h4>
                <p class="ingredients">
                  Europa
                </p>
                <p class="price">
                World ranking #4
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-5.png" class="glightbox"><img src="img/menu/m-item-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>FaZe</h4>
                <p class="ingredients">
                  Europa
                </p>
                <p class="price">
                World ranking #5
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-6.png" class="glightbox"><img src="img/menu/m-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Astralis</h4>
                <p class="ingredients">
                  Dinamarca
                </p>
                <p class="price">
                World ranking #6
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <!--<p>Menu</p>
              <h3>Lunch</h3>-->

            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-1.png" class="glightbox"><img src="img/menu/C-item-1.webp" class="menu-img img-fluid" alt=""></a>
                <h4>gAuLeS</h4>
                <p class="ingredients">
                Alexandre Chiqueta
                </p>
                <p class="price">
                   Brasil
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-2.png" class="glightbox"><img src="img/menu/C-item-2.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Apoka</h4>
                <p class="ingredients">
                Alessandro Marcucci
                </p>
                <p class="price">
                 Brasil
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-3.png" class="glightbox"><img src="img/menu/C-item-3.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>bt0</h4>
                <p class="ingredients">
                Fillipe Moreno
                </p>
                <p class="price">
                  Brasil
                </p>
              </div><!-- Menu Item 

              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-4.png" class="glightbox"><img src="img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div>
              
              Menu Item 

              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-5.png" class="glightbox"><img src="img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
               </div> 

              Menu Item 

              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-6.png" class="glightbox"><img src="img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Laboriosam Direva</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $9.95
                </p>
              </div> 

              Menu Item 

            </div>
          </div>

           End Lunch Menu Content 

          <div class="tab-pane fade" id="menu-dinner">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Dinner</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-1.png" class="glightbox"><img src="img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Magnam Tiste</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $5.95
                </p>
              </div>
              
              Menu Item 

              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-2.png" class="glightbox"><img src="img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Aut Luia</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $14.95
                </p>
              </div>
              
              Menu Item 

              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-3.png" class="glightbox"><img src="img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Est Eligendi</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $8.95
                </p>
              </div>
              
              Menu Item 


              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-4.png" class="glightbox"><img src="img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div>
              
              Menu Item 

              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-5.png" class="glightbox"><img src="img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
              </div>
              
              Menu Item 

              <div class="col-lg-4 menu-item">
                <a href="img/menu/menu-item-6.png" class="glightbox"><img src="img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Laboriosam Direva</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $9.95
                </p>
              </div>
              
              Menu Item 

            </div>
          </div><!-- End Dinner Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->

    @endsection