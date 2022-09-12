<!-- shop section -->
<section class="shop_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2> {{$pageName_apple}} </h2>
    </div>
    <div class="shop_slick row">
      @foreach ($apple as $product)
      <div class="col-sm-6 ">
        <div class="card">
          <a href="">
            <div class="img-box">
              <img src="images/apple-watch-6-40mm.png" alt="">
            </div>
            <div class="card-body">
              <div class="detail-box">
                <h6> {{$product->name}} </h6>
                <h6>Price: <span> {{number_format($product->price) }} VNĐ</span>
                </h6>
              </div>
              <div class="new">
                <span> New </span>
              </div>
            </div>
          </a>
        </div>
      </div>
      @endforeach

    </div>
    <div class="btn-box">
      <a href="">View All </a>
    </div>
  </div>
</section>

<!-- SamSung Watch -->
<section class="shop_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">

      <h2> {{$pageName_samsung}} </h2>
    </div>
    <div class="shop_slick row">
      @foreach ($samsung as $product)
      <div class="col-sm-6 ">
        <div class="card">
          <a href="">
            <div class="img-box">
              <img src="images/apple-watch-6-40mm.png" alt="">
            </div>
            <div class="card-body">
              <div class="detail-box">
                <h6> {{$product->name}} </h6>
                <h6>Price: <span> {{number_format($product->price) }} VNĐ</span>
                </h6>
              </div>
              <div class="new">
                <span> New </span>
              </div>
            </div>
          </a>
        </div>
      </div>
      @endforeach
    </div>
    <div class="btn-box">
      <a href="">View All </a>
    </div>
  </div>
</section>

<!-- Xiaomi Watch -->
<section class="shop_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2> {{$pageName_apple}} </h2>
    </div>
    <div class="shop_slick row">
      @foreach ($apple as $product)
      <div class="col-sm-6 ">
        <div class="card">
          <a href="">
            <div class="img-box">
              <img src="images/apple-watch-6-40mm.png" alt="">
            </div>
            <div class="card-body">
              <div class="detail-box">
                <h6> {{$product->name}} </h6>
                <h6>Price: <span> {{number_format($product->price) }} VNĐ</span>
                </h6>
              </div>
              <div class="new">
                <span> New </span>
              </div>
            </div>
          </a>
        </div>
      </div>
      @endforeach

    </div>
    <div class="btn-box">
      <a href="">View All </a>
    </div>
  </div>
</section>
<!-- end shop section -->