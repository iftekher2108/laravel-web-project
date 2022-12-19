@extends('webpages.master')
    <!-- ====================================home front section here============================= -->
@section('content')

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-aos="zoom-in">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/10.jpg" width="100%" height="100%">

          <div class="container">
            <div class="carousel-caption text-start">
              <h1>IFTEKHER MAHMUD PERVEZ</h1>
              <p>Some representative placeholder content for the first slide.</p>
              <p><a class="btn btn-success text-bg-white" href="#icon-grid">Explore More</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/3.jpg" width="100%" height="100%">

          <div class="container">
            <div class="carousel-caption">
              <h1>IFTEKHER MAHMUD PERVEZ</h1>
              <p>There is many programming highly qualified course enroll now.</p>
              <p><a class="btn btn-success" href="#hanging-icons">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/6.jpg" width="100%" height="100%">

          <div class="container">
            <div class="carousel-caption text-end">
              <h1>IFTEKHER MAHMUD PERVEZ</h1>
              <p>Some representative placeholder content for the third slide.</p>
              <p><a class="btn btn-success" href="gellery.html">Browse Gallery</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/9.jpg" width="100%" height="100%">

          <div class="container">
            <div class="carousel-caption text-start">
              <h1>IFTEKHER MAHMUD PERVEZ</h1>
              <p>Some representative placeholder content for the forth slide.</p>
              <p><a class="btn btn-success" href="gellery.html">view content</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/11.jpg" width="100%" height="100%">

          <div class="container">
            <div class="carousel-caption">
              <h1>IFTEKHER MAHMUD PERVEZ</h1>
              <p>Some representative placeholder content for the fifth slide.</p>
              <p><a class="btn btn-success" href="gellery.html">See Our Mentor</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/13.jpg" width="100%" height="100%">

          <div class="container">
            <div class="carousel-caption text-end">
              <h1>IFTEKHER MAHMUD PERVEZ</h1>
              <p>Some representative placeholder content for the sixth slide.</p>
              <p><a class="btn btn-success" href="gellery.html">See Our Services</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- ============================================home front section here=================================== -->
    <hr>
    <!-- ==============================================trainer and mentor colomn with icon here================================== -->
    <div class="px-4 py-5 rounded-4" id="featured-3" data-aos="zoom-in-right">
      <h2 class="pb-2 border-bottom">Our Mentor and Trainer</h2>
      <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="feature col" data-aos="zoom-in-right" data-aos-duration="1500">
          <div
            class="d-inline-flex align-items-center justify-content-center rounded text-bg-success bg-gradient fs-2 mb-3 overflow-hidden">
            <img src="image/2.JPG" alt="image" width="250" height="200">
          </div>
          <h3 class="fs-2">Iftekher Mahmud Pervez</h3>
          <h5>Python Programming Expert</h5>
          <p>Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code
            readability with the use of significant indentation.</p>
          <a href="#" class="btn btn-success">
            contact with us
          </a>
        </div>
        <div class="feature col" data-aos="zoom-in-right" data-aos-duration="1300">
          <div
            class="d-inline-flex align-items-center justify-content-center rounded text-bg-success bg-gradient fs-2 mb-3 overflow-hidden">
            <img src="image/5.jpg" alt="image" width="250" height="200">
          </div>
          <h3 class="fs-2">Iftekher Mahmud Pervez</h3>
          <h5>PHP and Laravel Developer</h5>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus at sed commodi enim voluptatem
            iusto quam similique illo soluta ea!</p>
          <a href="#" class="btn btn-success">
            contact with us
          </a>
        </div>
        <div class="feature col" data-aos="zoom-in-right">
          <div
            class="d-inline-flex align-items-center justify-content-center rounded text-bg-success bg-gradient fs-2 mb-3 overflow-hidden">
            <img src="image/1.jpg" alt="image" width="250" height="200">
          </div>
          <h3 class="fs-2">Iftekher Mahmud Pervez</h3>
          <h5>Javascript Programming Expert</h5>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, quidem eius! Ducimus nisi illum saepe,
            eveniet cum numquam sint quaerat.</p>
          <a href="#" class="btn btn-success">
            contact with us
          </a>
        </div>
      </div>
    </div>

    <!-- ================================================trainer and mentor colomn with icon here================================== -->







    <!-- ============================================hanging courses icon here======================================= -->
    <hr>
    <div class="px-4 py-5 rounded-4" id="hanging-icons" data-aos="zoom-in-left">
      <h2 class="pb-2 border-bottom">Our Courses</h2>
      <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col d-flex align-items-start km" data-aos="zoom-in-left">
          <div
            class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <img src="image/Python.png" width="50" height="50">
          </div>
          <div>
            <h3 class="fs-2">Python Programming Language</h3>
            <p>Whether you're new to programming or an experienced developer, it's easy to learn and use Python.Python
              is a programming language that lets you work quickly
              and integrate systems more effectively.</p>
            <p><del> 15,000 TK</del> 12,000 TK</p>
            <a href="#" class="btn btn-success">
              Enroll Now
            </a>
          </div>
        </div>
        <div class="col d-flex align-items-start km" data-aos="zoom-in-left" data-aos-duration="1300">
          <div
            class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <img src="image/laravel.png" width="50" height="50">
          </div>
          <div>
            <h3 class="fs-2">PHP and Laravel Development</h3>
            <p>A popular general-purpose scripting language that is especially suited to web development.
              Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the
              world.A good place to start is by skimming through the ever-growing list.</p>
            <p><del> 15,000 TK</del> 12,000 TK</p>
            <a href="#" class="btn btn-success">
              Enroll Now
            </a>
          </div>
        </div>
        <div class="col d-flex align-items-start km" data-aos="zoom-in-left" data-aos-duration="1500">
          <div
            class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <img src="image/javascript-logo.png" width="70" height="50">
          </div>
          <div>
            <h3 class="fs-2">Javascript Programming Language</h3>
            <p>JavaScript (JS) is a lightweight, interpreted with first-class functions. While it is most well-known as
              the scripting language for Web pages, many non-browser environments also use it, such as Node.js.
              JavaScript is a prototype-based,dynamic language</p>
            <p><del> 15,000 TK</del> 12,000 TK</p>
            <a href="#" class="btn btn-success">
              Enroll Now
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- ========================================hanging courses icon here====================================== -->




    <!-- ================================================icon gird here===================================== -->
    <hr>
    <div class="px-4 py-5 rounded-4" id="icon-grid" data-aos="zoom-in">
      <h2 class="pb-2 border-bottom">Lorem, ipsum.</h2>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
        <div class="col btn">
          <img src="image/1.JPG" width="100" height="100">
          <div>
            <h3 class="fw-bold mb-0 fs-4">Lorem, ipsum.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, provident totam.</p>
          </div>
        </div>
        <div class="col btn">
          <img src="image/10.jpg" width="100" height="100">
          <div>
            <h3 class="fw-bold mb-0 fs-4">Lorem, ipsum.</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, similique voluptates.</p>
          </div>
        </div>
        <div class="col btn">
          <img src="image/11.jpg" width="100" height="100">
            
          <div>
            <h3 class="fw-bold mb-0 fs-4">Lorem, ipsum.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, sit dolorem!</p>
          </div>
        </div>
        <div class="col btn">
          <img src="image/12.jpg" width="100" height="100">
            
          <div>
            <h3 class="fw-bold mb-0 fs-4">Lorem, ipsum.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, beatae inventore!</p>
          </div>
        </div>
        <div class="col btn">
          <img src="image/14.jpg" width="100" height="100">
            
          <div>
            <h3 class="fw-bold mb-0 fs-4">Lorem, ipsum.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, magni excepturi!</p>
          </div>
        </div>
        <div class="col btn">
          <img src="image/15.jpg" width="100" height="100">
            
          <div>
            <h3 class="fw-bold mb-0 fs-4">Lorem, ipsum.</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus, amet doloribus.</p>
          </div>
        </div>
        <div class="col btn">
          <img src="image/18.jpg" width="100" height="100">
            
          <div>
            <h3 class="fw-bold mb-0 fs-4">Lorem, ipsum.</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, earum rerum!</p>
          </div>
        </div>
        <div class="col btn">
          <img src="image/19.jpg" width="100" height="100">
            
          <div>
            <h3 class="fw-bold mb-0 fs-4">Lorem, ipsum.</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus, tempore qui!</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ==============================================icon gird here====================================== -->





    <hr>
    <!-- ==============================================feature title here======================================= -->
    <div class="px-4 py-5 mb-4 rounded-4" data-aos="zoom-in-right">
      <h2 class="pb-2 border-bottom">Lorem, ipsum dolor.</h2>

      <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
        <div class="d-flex flex-column align-items-start gap-2">
          <h3 class="fw-bold">Left-aligned front view stylishing feature</h3>
          <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque sit atque voluptatibus consequuntur repudiandae aspernatur temporibus, pariatur autem tempora dicta.</p>
          <a href="#footer" class="btn btn-success btn-lg">See More</a>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 g-4" data-aos="zoom-in-right" data-aos-duration="1500">
          <div class="d-flex flex-column gap-2 btn">
            <div
              class="rounded-3">
              <img src="image/19.jpg" width="100" height="100">

            </div>
            <h4 class="fw-semibold mb-0">Lorem, ipsum.</h4>
            <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti, saepe consectetur.</p>
          </div>

          <div class="d-flex flex-column gap-2 btn">
            <div
              class="rounded-3">
              <img src="image/10.jpg" width="100" height="100">

            </div>
            <h4 class="fw-semibold mb-0">Lorem, ipsum.</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, beatae asperiores?</p>
          </div>

          <div class="d-flex flex-column gap-2 btn">
            <div
              class="rounded-3">
              <img src="image/13.jpg" width="100" height="100">

            </div>
            <h4 class="fw-semibold mb-0">Lorem, ipsum.</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, harum nisi!</p>
          </div>

          <div class="d-flex flex-column gap-2 btn">
            <div class="rounded-3">
              <img src="image/17.jpg" width="100" height="100">

            </div>
            <h4 class="fw-semibold mb-0">Lorem, ipsum.</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, repellat id?</p>
          </div>
        </div>
      </div>
    </div>
    <!-- ===========================================feature title here========================================== -->
    <hr>


@endsection











    <!-- =============================================footer bar============================================== -->
