<?php get_header(); ?>

<section id="top" style="background-image: url('<?php echo get_field('top_background_image')['url']; ?>');">
  <div class="section-content overlay d-flex justify-content-center align-items-center">
    <div class="container-xxl">
      <div class="row align-items-center">
        <div class="col-md-9 welcome">
          <h1 class="welcome-title fw-light"><?php echo get_field('top_heading'); ?></h1>
          <div class="divider"></div>
          <div class="welcome-desc">
            <p class="lead"><?php echo get_field('top_desc'); ?></p>
          </div>
        </div>
        <div class="col-md-3 d-none d-md-block letsgo">
          <div class="card card-body letsgo-card">
            <?php echo get_field('top_form'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="intro">
  <div class="section-content">
    <div class="container intro">
      <div class="row align-items-center">
        <div class="col-md-6 intro-first">
          <div class="row px-md-3">
            <div class="col-6">
              <div class="card card-body my-3 position-relative rounded-3 shadow-lg intro-first-card"
                style="background-image: url('<?php echo get_field('intro_image_1')['url']; ?>');">
              </div>
            </div>
            <div class="col-6">
              <div class="card card-body my-3 position-relative rounded-3 shadow-lg intro-first-card"
                style="background-image: url('<?php echo get_field('intro_image_2')['url']; ?>');">
              </div>
            </div>
            <div class="col-6">
              <div class="card card-body my-3 position-relative rounded-3 shadow-lg intro-first-card"
                style="background-image: url('<?php echo get_field('intro_image_3')['url']; ?>');">
              </div>
            </div>
            <div class="col-6">
              <div class="card card-body my-3 position-relative rounded-3 shadow-lg intro-first-card"
                style="background-image: url('<?php echo get_field('intro_image_4')['url']; ?>');">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 intro-second">
          <h5 class="fw-light"><?php echo get_field('intro_sub_title') ?>
          </h5>
          <h1 class="mb-4"><?php echo get_field('intro_heading') ?></h1>
          <div class="intro-text">
            <p class="lead"><?php echo get_field('intro_desc') ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="services">
  <!-- Modal of each trigger below dynamically -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Slide title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="<?php echo get_theme_file_uri('assets/images/port1.jpg'); ?>" alt="" class="img-fluid" />
          <p class="mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore a quo dolorum iste totam,
            ducimus, officiis sed sunt iure ipsa voluptates ipsum impedit maxime laborum quidem natus magni. Enim,
            maxime!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="section-content">
    <div class="container services">
      <div class="services-header text-center mb-5">
        <h1 class="display-5">Our amazing services</h1>
        <div class="divider"></div>
        <p class="lead text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet alias temporibus
          est cum autem enim, aperiam quibusdam a veritatis voluptatibus?</p>
      </div>
      <div id="slick-slide" class="sercives-body">
        <div class="services-col mx-2 my-3">
          <div class="card">
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img src="<?php echo get_theme_file_uri('assets/images/port1.jpg'); ?>" alt="" class="card-img-top" />
            </a>
            <div class="card-body">
              <h4 class="card-title">Slide title</h4>
              <p class="card-text fw-light mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod
                laboriosam quisquam totam voluptatibus. Dignissimos laudantium repellendus cum adipisci. Voluptates,
                eligendi!</p>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">View more...</a>
            </div>
          </div>
        </div>
        <div class="services-col mx-2 my-3">
          <div class="card">
            <a href="#">
              <img src="<?php echo get_theme_file_uri('assets/images/port2.jpg'); ?>" alt="" class="card-img-top" />
            </a>
            <div class="card-body">
              <h4 class="card-title">Slide title</h4>
              <p class="card-text fw-light mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod
                laboriosam quisquam totam voluptatibus. Dignissimos laudantium repellendus cum adipisci. Voluptates,
                eligendi!</p>
              <a href="#" class="btn btn-primary">View more...</a>
            </div>
          </div>
        </div>
        <div class="services-col mx-2 my-3">
          <div class="card">
            <a href="#">
              <img src="<?php echo get_theme_file_uri('assets/images/port3.jpg'); ?>" alt="" class="card-img-top" />
            </a>
            <div class="card-body">
              <h4 class="card-title">Slide title</h4>
              <p class="card-text fw-light mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod
                laboriosam quisquam totam voluptatibus. Dignissimos laudantium repellendus cum adipisci. Voluptates,
                eligendi!</p>
              <a href="#" class="btn btn-primary">View more...</a>
            </div>
          </div>
        </div>
        <div class="services-col mx-2 my-3">
          <div class="card">
            <a href="#">
              <img src="<?php echo get_theme_file_uri('assets/images/port4.jpg'); ?>" alt="" class="card-img-top" />
            </a>
            <div class="card-body">
              <h4 class="card-title">Slide title</h4>
              <p class="card-text fw-light mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod
                laboriosam quisquam totam voluptatibus. Dignissimos laudantium repellendus cum adipisci. Voluptates,
                eligendi!</p>
              <a href="#" class="btn btn-primary">View more...</a>
            </div>
          </div>
        </div>
        <div class="services-col mx-2 my-3">
          <div class="card">
            <a href="#">
              <img src="<?php echo get_theme_file_uri('assets/images/port5.jpg'); ?>" alt="" class="card-img-top" />
            </a>
            <div class="card-body">
              <h4 class="card-title">Slide title</h4>
              <p class="card-text fw-light mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod
                laboriosam quisquam totam voluptatibus. Dignissimos laudantium repellendus cum adipisci. Voluptates,
                eligendi!</p>
              <a href="#" class="btn btn-primary">View more...</a>
            </div>
          </div>
        </div>
        <div class="services-col mx-2 my-3">
          <div class="card">
            <a href="#">
              <img src="<?php echo get_theme_file_uri('assets/images/port6.jpg'); ?>" alt="" class="card-img-top" />
            </a>
            <div class="card-body">
              <h4 class="card-title">Slide title</h4>
              <p class="card-text fw-light mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod
                laboriosam quisquam totam voluptatibus. Dignissimos laudantium repellendus cum adipisci. Voluptates,
                eligendi!</p>
              <a href="#" class="btn btn-primary">View more...</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="slogan" style="background-image: url('<?php echo get_theme_file_uri('assets/images/bg-cta.jpg'); ?>');">
  <div class="section-content d-flex align-items-center h-100">
    <div class="container slogan">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-body slogan-card">
            <h1 class="mb-3 mb-3">Our Slogan...</h1>
            <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae, mollitia iure. Numquam eius
              necessitatibus doloribus, minus ex delectus quaerat? Eos quasi saepe repellendus eaque ab optio maxime
              obcaecati consectetur exercitationem.</p>
            <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae, mollitia iure. Numquam eius
              necessitatibus doloribus, minus ex delectus quaerat? Eos quasi saepe repellendus.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="features">
  <div class="section-content">
    <div class="container features">
      <div class="row">
        <div class="col-md-4 mb-3">
          <div class="card card-body shadow border-0 features-card">
            <h4 class="card-title mb-3">
              <span class="fw-bold">1</span>
              Feature 1
            </h4>
            <p class="card-text fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id amet beatae
              eligendi quaerat officiis dignissimos distinctio, magnam aut laborum hic.</p>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card card-body shadow border-0 features-card">
            <h4 class="card-title mb-3">
              <span class="fw-bold">2</span>
              Feature 2
            </h4>
            <p class="card-text fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id amet beatae
              eligendi quaerat officiis dignissimos distinctio, magnam aut laborum hic.</p>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card card-body shadow border-0 features-card">
            <h4 class="card-title mb-3">
              <span class="fw-bold">3</span>
              Feature 3
            </h4>
            <p class="card-text fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id amet beatae
              eligendi quaerat officiis dignissimos distinctio, magnam aut laborum hic.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="gallery">
  <div class="section-content">
    <div class="container gallery">
      <div class="gallery-header text-center mb-5">
        <h1 class="display-4">Our gallery</h1>
        <div class="divider"></div>
        <p class="lead text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, error. Veniam,
          deleniti ullam. Inventore esse ab, amet voluptatum corrupti suscipit.</p>
      </div>
      <div class="row gallery-body">
        <div class="col-md-4 col-sm-6 mb-4 gallery-item">
          <div class="card card-body border-0 p-0"
            style="background-image: url('<?php echo get_theme_file_uri('assets/images/port1.jpg'); ?>');">
            <div class="overlay d-flex flex-column justify-content-center align-items-center h-100 w-100 border-2">
              <h2 class="gallery-title">Gallery 1</h2>
              <a class="link-warning text-decoration-none"
                href="<?php echo get_theme_file_uri('assets/images/port1.jpg'); ?>" data-lightbox="gallery"
                data-title="Gallery 1">View this gallery</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4 gallery-item">
          <div class="card card-body border-0 p-0"
            style="background-image: url('<?php echo get_theme_file_uri('assets/images/port2.jpg'); ?>');">
            <div class="overlay d-flex flex-column justify-content-center align-items-center h-100 w-100 border-2">
              <h2 class="gallery-title">Gallery 2</h2>
              <a class="link-warning text-decoration-none"
                href="<?php echo get_theme_file_uri('assets/images/port2.jpg'); ?>" data-lightbox="gallery"
                data-title="Gallery 2"> View this gallery </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4 gallery-item">
          <div class="card card-body border-0 p-0"
            style="background-image: url('<?php echo get_theme_file_uri('assets/images/port3.jpg'); ?>');">
            <div class="overlay d-flex flex-column justify-content-center align-items-center h-100 w-100 border-2">
              <h2 class="gallery-title">Gallery 3</h2>
              <a class="link-warning text-decoration-none"
                href="<?php echo get_theme_file_uri('assets/images/port3.jpg'); ?>" data-lightbox="gallery"
                data-title="Gallery 3"> View this gallery </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4 gallery-item">
          <div class="card card-body border-0 p-0"
            style="background-image: url('<?php echo get_theme_file_uri('assets/images/port4.jpg'); ?>');">
            <div class="overlay d-flex flex-column justify-content-center align-items-center h-100 w-100 border-2">
              <h2 class="gallery-title">Gallery 4</h2>
              <a class="link-warning text-decoration-none"
                href="<?php echo get_theme_file_uri('assets/images/port4.jpg'); ?>" data-lightbox="gallery"
                data-title="Gallery 4"> View this gallery </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4 gallery-item">
          <div class="card card-body border-0 p-0"
            style="background-image: url('<?php echo get_theme_file_uri('assets/images/port5.jpg'); ?>');">
            <div class="overlay d-flex flex-column justify-content-center align-items-center h-100 w-100 border-2">
              <h2 class="gallery-title">Gallery 5</h2>
              <a class="link-warning text-decoration-none"
                href="<?php echo get_theme_file_uri('assets/images/port5.jpg'); ?>" data-lightbox="gallery"
                data-title="Gallery 5"> View this gallery </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4 gallery-item">
          <div class="card card-body border-0 p-0"
            style="background-image: url('<?php echo get_theme_file_uri('assets/images/port6.jpg'); ?>');">
            <div class="overlay d-flex flex-column justify-content-center align-items-center h-100 w-100 border-2">
              <h2 class="gallery-title">Gallery 6</h2>
              <a class="link-warning text-decoration-none"
                href="<?php echo get_theme_file_uri('assets/images/port6.jpg'); ?>" data-lightbox="gallery"
                data-title="Gallery 6">View this gallery</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="cta" class="position-relative"
  style="background-image: url('<?php echo get_theme_file_uri('assets/images/bg.jpg'); ?>');">
  <div
    class="section-content position-absolute h-100 w-100 overlay d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center cta">
      <h3 class="dispaly-6 text-primary">Contact us anytime!</h3>
      <h2 class="display-4 text-light">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h2>
      <p class="lead text-light mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum modi eaque maxime
        quasi eum eos asperiores amet quas ut? Sit.</p>
      <h1 class="m-0">
        <a href="tel:02-111-1111" class="link-warning text-decoration-none">02-111-1111</a>
      </h1>
    </div>
  </div>
</section>

<section id="find-us">
  <div class="container-fluid px-0 mb-3">
    <div id="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14280.713052870058!2d126.97104083821134!3d37.5704304726405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca37454f683b1%3A0xfa19c5217c6a0bc0!2z6rSR7ZmU66y4!5e0!3m2!1sko!2skr!4v1629755858980!5m2!1sko!2skr"
        width="100%" height="600" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-8 col-10 find-us">
        <h3>Contact us!</h3>
        <div class="divider"></div>
        <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, possimus.</p>
        <div class="d-flex text-secondary">
          <p class="fw-bold me-5">
            <span class="text-uppercase">phone</span>:
            <a href="tel:02-111-1111" class="text-decoration-none">02-111-1111</a>
          </p>
          <p class="fw-bold">
            <span class="text-uppercase">email</span>:
            <a href="mailto:jdoe@email.com" class="text-decoration-none">jdoe@email.com</a>
          </p>
        </div>
        <form action="">
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Your name" />
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Your E-mail" />
          </div>
          <div class="mb-3">
            <textarea rows="3" class="form-control" placeholder="Please write down any questions you have."></textarea>
          </div>
          <div class="mb-3">
            <input type="checkbox" id="checkDefault" class="form-check-input" />
            <label for="checkDefault" class="form-check-label text-secondary"> I agree to provide privacy. </label>
          </div>
          <p class="mb-3">
            <button class="btn btn-primary w-100">Send!</button>
          </p>
        </form>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>