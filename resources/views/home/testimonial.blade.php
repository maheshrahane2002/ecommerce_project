<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
  <div class="hero_area">
    <!-- header section starts -->
    @include('home.header')
    <!-- end header section -->

    <!-- client section -->
    <section class="client_section layout_padding">
      <div class="container">
        <div class="heading_container heading_center">
          <h2>Testimonials</h2>
        </div>
      </div>
      <div class="container px-0">
        <div id="customCarousel2" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="box">
                <div class="client_info">
                  <div class="client_name">
                    <h5>Jane Doe</h5>
                    <h6>Verified Buyer</h6>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  "I am extremely satisfied with my purchase. The quality of the products exceeded my expectations and the customer service was fantastic. I will definitely be shopping here again!"
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="box">
                <div class="client_info">
                  <div class="client_name">
                    <h5>John Smith</h5>
                    <h6>Verified Buyer</h6>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  "The delivery was quick and the items were well-packaged. I appreciate the great customer support and the quality of the products. Highly recommended!"
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="box">
                <div class="client_info">
                  <div class="client_name">
                    <h5>Emily Johnson</h5>
                    <h6>Verified Buyer</h6>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  "Shopping here was a great experience. The website is easy to navigate and the products are top-notch. I am very pleased with my purchase and will be coming back for more!"
                </p>
              </div>
            </div>
          </div>
          <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
              <i class="fa fa-angle-right" aria-hidden="true"></i>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- end client section -->

    <!-- Footer section -->
    @include('home.footer')
    <!-- End of Footer section -->

  </div>

  <!-- jQuery and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>