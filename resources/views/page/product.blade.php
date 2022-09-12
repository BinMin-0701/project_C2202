<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product</title>
  @include('link')
</head>

<body>
  @include('includes.header')
  @foreach ($all_product as $product)
  <div class="col-sm-6 ">
    <div class="card">
      <a href="">
        <div class="img-box">
          <img src="../images/apple-watch-6-40mm.png" alt="">
        </div>
        <div class="card-body">
          <div class="detail-box">
            <h6> </h6>
            <h6>Price: <span> VNĐ</span>
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

  @include('includes.footer')
</body>

</html>