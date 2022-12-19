{{-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iftekher mahmud</title>
  <link rel="stylesheet" href="custom/style.css">
  <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- aos entry animation libary -->
  <link rel="stylesheet" href="aos/aos.css" />
  <!-- aos entry animation libary -->
  
</head>

<body id="home">
  <!-- ======================================navigation menu bar here====================================== -->
  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img class="rounded-circle" src="image/iftekher.jpg" alt="website logo"
          height="50" width="50"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{url('gellery')}}">gellery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('blog')}}">blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('about')}}">about us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('policy')}}">private policy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('teacher')}}">Teacher</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('student') }}">student</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('form')}}">Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('table')}}">table</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- =========================================navigation menu bar here========================================= -->
  <!-- ==========================================body contrainer here================================= -->
  <div class="container-fluid"> --}}
    <!-- ====================================home front section here============================= -->
    @extends('webpages.master')
    @section("content")
    <div class="col-xxl-12 px-4 py-5 bg-dark text-white" id="gellery-front" data-aos="zoom-in">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6" data-aos="zoom-in-left" data-aos-duration="1300">
          <img src="image/iftekher.jpg" class="d-block mx-lg-auto img-fluid rounded-4" alt="Bootstrap Themes"
            width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6" data-aos="zoom-in-right" data-aos-duration="1300">
          <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
          <p class="lead">Computer programming is the process of performing a particular computation (or more generally,
            accomplishing a specific computing result), usually by designing and building an executable computer
            program.</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="button" class="btn btn-success btn-lg px-4 m-2">Learn More</button>
            <button type="button" class="btn btn-warning text-white btn-lg px-4 m-2">See More</button>
          </div>
        </div>
      </div>




    </div>
    <!-- ============================================home front section here=================================== -->

    <!-- ==============================================gelley is here================================== -->


<div class="container-fluid">

    <section class="py-5 text-center" data-aos="zoom-in">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Lorem, ipsum.</h1>
          <p class="lead text-muted">Lorem ipsum dolor Lorem ipsum dolor sit amet. sit amet consectetur adipisicing elit. Natus soluta commodi, in repudiandae impedit, blanditiis exercitationem officiis molestiae obcaecati necessitatibus temporibus modi reiciendis autem unde reprehenderit aspernatur dolores debitis explicabo?</p>
          <p>
            <a href="#" class="btn btn-success my-2">Learn More</a>
            <a href="#" class="btn btn-warning text-white my-2">See More</a>
          </p>
        </div>
      </div>
    </section>

    <div class="album py-5 bg-light rounded-4" data-aos="zoom-in">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-3 row-cols-xxl-4 g-2">
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="image/1.JPG" width="100%" height="225">
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor adipisicing elit. Assumenda autem quasi id voluptate quos consequatur in quia, possimus amet nemo.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">1 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="image/2.jpg" width="100%" height="225">

            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum ducimus rem itaque nulla, architecto voluptatem tempore provident</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">2 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="image/5.JPG" width="100%" height="225">

            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos, voluptatum ad. Cupiditate culpa nobis enim incidunt. Quas delectus sint provident?</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">3 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="image/iftekher.jpg" width="100%" height="225">

            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis recusandae a tempora iure error quaerat provident animi qui nemo iusto.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">4 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="image/4.JPG" width="100%" height="225">

            <div class="card-body">
              <p class="card-text">Lorem ipsum consectetur adipisicing elit. Suscipit voluptate quibusdam tenetur repudiandae, similique ipsam temporibus officia sunt porro quam.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">5 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="image/7.JPG" width="100%" height="225">

            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ipsum ipsam nisi rerum cum non quaerat saepe blanditiis quibusdam itaque.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">6 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="image/ROBOT.png" width="100%" height="225">

            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam dicta nisi, vel distinctio sed cum molestias! Deleniti quia minus dolor. Lorem ipsum dolor sit amet.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">7 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="image//8.jpeg" width="100%" height="225">

            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ipsam quia consequuntur ducimus veritatis incidunt aperiam repellat commodi perferendis quo!</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">8 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="image/KITTY.png" width="100%" height="225">

            <div class="card-body">
              <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, mollitia quia? Modi, impedit laborum blanditiis ab molestias architecto excepturi consequuntur.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>






    <!-- ================================================gellery is here================================== -->
    <hr>






    <!-- ============================================hanging icon here======================================= -->

    <div class="px-4 py-5 rounded-4" id="hanging-icons" data-aos="zoom-in">
      <h2 class="pb-2 border-bottom">Lorem, ipsum.</h2>
      <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col d-flex align-items-start btn">
          <div
            class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <svg class="bi" width="1em" height="1em">
              <use xlink:href="#toggles2" /></svg>
          </div>
          <div>
            <h3 class="fs-2">Lorem, ipsum.</h3>
            <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. consectetur adipisicing elit. Reiciendis distinctio quod velit quidem? Repellendus cumque id laborum vitae rem qui nesciunt fuga aut dolorum possimus!</p>
            <a href="#" class="btn btn-success">
              Lorem, ipsum.
            </a>
          </div>
        </div>
        <div class="col d-flex align-items-start btn">
          <div
            class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <svg class="bi" width="1em" height="1em">
              <use xlink:href="#cpu-fill" /></svg>
          </div>
          <div>
            <h3 class="fs-2">Lorem, ipsum.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, consequatur nostrum enim assumenda molestias atque amet. Numquam quam consequatur quae ut optio, veniam est dolore.</p>
            <a href="#" class="btn btn-success">
              Primary button
            </a>
          </div>
        </div>
        <div class="col d-flex align-items-start btn">
          <div
            class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <svg class="bi" width="1em" height="1em">
              <use xlink:href="#tools" /></svg>
          </div>
          <div>
            <h3 class="fs-2">Lorem, ipsum.</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas dolorem animi esse modi mollitia, tempora voluptas! Nobis laborum excepturi aspernatur repudiandae optio, provident deleniti rem?</p>
            <a href="#" class="btn btn-success">
              Lorem, ipsum.
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- ========================================hanging icon here====================================== -->


    <hr>

    <!-- ================================================icon gird here===================================== -->



    <!-- ==============================================icon gird here====================================== -->







    <!-- ==============================================feature title here======================================= -->

    <!-- ===========================================feature title here========================================== -->














    <!-- =============================================footer bar============================================== -->

    {{-- <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-bg-dark shadow-lg"
        style="background-image: url('unsplash-photo-2.jpg');">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <!-- <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h3> -->
          <footer class="py-5">
            <div class="row">
              <div class="col-6 col-md-2 mb-3">
                <h5>Developer & IT</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Web app dev</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Javascript dev</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">C# dev</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Android dev</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">desktop app dev</a></li>
                </ul>
              </div>

              <div class="col-6 col-md-2 mb-3">
                <h5>Business Development</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Cloud System</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">System Security</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">DynamicRedirection</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Power Platform</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Industry Works</a></li>
                </ul>
              </div>

              <div class="col-6 col-md-2 mb-3">
                <h5>Companies Services</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">career Development</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Device For Education</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Company Job news</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                  <!-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li> -->
                </ul>
              </div>

              <div class="col-md-5 offset-md-1 mb-3">
                <form>
                  <h5>Subscribe to our Website </h5>
                  <p>Weekly digest of what's new and exciting news from us.</p>
                  <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                    <label for="newsletter1" class="visually-hidden">Email address</label>
                    <input id="newsletter1" type="text" class="form-control" placeholder="Enter Your Email Address">
                    <button class="btn btn-success" type="button">Subscribe</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-2 my-2 border-top">
              <p class="m-auto">&copy; 2022 SK Group LTD, Inc. All rights reserved.</p>
              <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-light" title="Twitter" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                      width="25" height="25" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                      <path
                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg></a></li>
                <li class="ms-3"><a class="link-light" title="Instagram" href="#"><svg
                      xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                      class="bi bi-instagram" viewBox="0 0 16 16">
                      <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg></a></li>
                <li class="ms-3"><a class="link-light" title="Facebook" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                      width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                      <path
                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg></a></li>
                <li class="ms-3"><a class="link-light" title="Whatsapp" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                      width="25" height="25" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                      <path
                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                    </svg></a></li>
              </ul>
            </div>
          </footer>
        </div>
      </div>
    </div> --}}
    @endsection
    <!-- =====================================footer bar================================== -->
{{-- 
  </div>
  <!-- ==========================================contrainer here===================================== -->
  <a href="#home"><img src="image/up.svg" class="arrow" alt="arrow"></a>

  <script src="js/bootstrap.min.js"></script>
  <script src="popper/popper.min.js"></script>
  <script src="aos/aos.js"></script>
  <script>
    AOS.init({
      offset: 250,
      duration: 1000,
      once: false,
      mirror: false

    });
  </script>
</body>

</html> --}}