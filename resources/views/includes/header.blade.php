<div class="hero_area">

  <!-- header section strats -->
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            Timups
          </span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="" title="Home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a href="#" class="btn">Product</a>
                <ul class="dropdown-menu">
                  @foreach ($category as $cat)
                  <li><a class="dropdown-item" href=" {{URL::to('/product' . $cat->id)}} "> {{$cat->name}} </a></li>
                  @endforeach

                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html"> About </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
          </ul>
          <div class="user_option-box">
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <a href="" class="d-flex align-items-center">
                <i class="fa fa-search" aria-hidden="true"></i>
              </a>
            </form>
            <a href="">
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-cart-plus" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </nav>
    </div>
  </header>

</div>