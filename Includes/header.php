    <div class="header-top">
      <div class="header-contacts">
        <a class="nav-link links" href="mailto:nyakaziorganics@gmail.com">
          <span class="badge badge-pill bg-danger"></span>
          <span class="socials-header"><i class="fa fa-envelope fa fa-flip-horizontal"></i> <div class="header-text">nyakaziorganics@gmail.com</div></span>
        </a>
        <a class="nav-link links" href="tel:0792940014">
          <span class="badge badge-pill bg-danger"></span>
          <span class="socials-header"><i class="fa fa-phone fa fa-flip-horizontal"></i> <div class="header-text">0792940014</div> </span>
        </a>
        <a class="nav-link links" target="blank" href="https://maps.app.goo.gl/UQk5WxttpFbFmEWQ7">
          <span class="badge badge-pill bg-danger"></span>
          <span class="socials-header"><i class="fa fa-map-marker"> <div class="header-text"  style="margin-top:-16px;margin-left:20px;">Gilgil Nakuru, Kenya</div></i></span>
        </a>
      </div>
      <div class="header-socials">
        <!-- Facebook -->
        <a class="btn btn-link btn-floating btn-lg m-1" href="https://www.facebook.com/" target="_blank" role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="btn btn-link btn-floating btn-lg m-1" href="https://twitter.com/BeaconComp94413/" target="_blank" role="button" data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

        <!-- Instagram -->
        <a class="btn btn-link btn-floating btn-lg m-1" href="https://www.instagram.com/" target="_blank" role="button" data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

        <!-- whats app -->
        <a class="btn btn-link btn-floating btn-lg m-1" href="https://wa.me/+254111628390" target="_blank" role="button" data-mdb-ripple-color="dark"><i class="fab fa-whatsapp"></i></a>
      </div>
    </div>
    <div class="sticky">
    <nav class="navbar navbar-expand-lg navbar-light bg-white" style="padding:0px;">
        <div class="container-fluid">
          <a href="index.php">
            <img src="images/logo.jpg" class="small-screen-logo" align="right" height="80" width=" " alt="" loading="lazy" />
          </a>
          <a
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </a>
          
          <div class="collapse navbar-collapse header-links" id="navbarExample01">
            <a class="navbar-brand large-screen-logo" href="index.php">
              <img src="images/logo.jpg" class="large-screen-logo" height="100" style alt="" loading="lazy" />
            </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-top:15px;">
              <li class="nav-item">
                <a class="nav-link" style="color:black;" aria-current="page" href="aboutus.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color:black; cursor:pointer;" aria-current="page" onclick="products()">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color:black; cursor:pointer;"aria-current="page" onclick="about()">About</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link"style="color:black;" aria-current="page" href="partner.php">Blogs</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link"style="color:black;" aria-current="page" onclick="contact()">Contacts</a>
              </li>
             

            </ul>
            <ul class="navbar-nav d-flex flex-row">
              <!-- Icon dropdown -->
              <!-- <li class="nav-item me-3 me-lg-0 dropdown">
                <a style="color:black;"
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-mdb-toggle="dropdown"
                  aria-expanded="false"> <i class="fas fa-user"></i> Account
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="php/Users/signup.php">Sign Up</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="php/Users/login.php">Log in</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="php/Admin/login.php"><i class="fa fa-lock" aria-hidden="true"></i></a>
                  </li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="cart.php" style="color:red;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <i class="fa fa-heart">Touch a heart</i> </a>
                  </li>
                </ul>
              </li> -->

              <!-- Icons -->
            
              <!-- <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" style="color:black;cursor:pointer;" onclick="store()">
                  <span class="badge badge-pill bg-danger"></span>
                  <span><i class="fas fa-search"></i></span>
                </a>
              </li> -->
            </ul>
            <iframe name="reload" style="display:none;"></iframe>
              <form class="d-flex input-group w-auto" action="index.php" target="reload" method="POST" onsubmit="store()" >
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search"
                  aria-label="Search"
                  name="search"/>
                <button
                  style="color:rgb(34, 177, 34);border-color: rgb(34, 177, 34);"
                  class="btn btn-outline-primary search-btn"
                  type="submit"
                  name="submit"
                  data-mdb-ripple-color="dark">Go
                </button>
              </form>
              

              <script>
                function products(){
                    var search = document.getElementById("products");

                   search.scrollIntoView({
                    behavior:"smooth",
                    block:"end",
                    inline:"nearest"
                })

                }

                function about(){
                    var search = document.getElementById("about");

                   search.scrollIntoView({
                    behavior:"smooth",
                    block:"end",
                    inline:"nearest"
                })

                }
                function contact(){
                    var search = document.getElementById("contact");

                   search.scrollIntoView({
                    behavior:"smooth",
                    block:"end",
                    inline:"nearest"
                })

                }
                
                window.onscroll = function()
                {(srollFunction)};
                  function scrollFunction(){
                     if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
                      document.getElementById("sticky").style.color = "red";
                     }
                  }
            </script>
          </div>
        </div>
      </nav>
    </div>