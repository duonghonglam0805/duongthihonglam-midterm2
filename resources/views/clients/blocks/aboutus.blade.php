<div class="untree_co-section">
    <div class="container">

        <div class="row mb-5">
            <div class="col-lg-5 mx-auto text-center">
                <h2 class="section-title">Our Team</h2>
            </div>
        </div>

        <div class="row">

            <!-- Start Column 1 -->
            @foreach($images as $key => $value)
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                {{-- <img src="{{asset('assets/images/{{$image['image']}}')}}" class="img-fluid mb-5"> --}}
                <img src="{{asset('assets/images/person_2.jpg')}}" class="img-fluid mb-5">
                    <h3 clas=""><a href="#"><span class="">{{$value['name']}}</span></a></h3>
                <span class="d-block position mb-4">CEO, Founder, Atty.</span>
                <p>Separated they live in.
                Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p class="mb-0"><a href="#" class="more dark">Learn More <span class="icon-arrow_forward"></span></a></p>
            </div> 
            @endforeach
        </div>
    </div>
</div>
<div class="testimonial-section before-footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="section-title">Testimonials</h2>
            </div>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="tns-outer" id="tns1-ow"><div class="tns-nav" aria-label="Carousel Pagination"><button data-nav="0" aria-controls="tns1" style="" aria-label="Carousel Page 1" class="" tabindex="-1"></button><button data-nav="1" aria-controls="tns1" style="" aria-label="Carousel Page 2" class="" tabindex="-1"></button><button data-nav="2" aria-controls="tns1" style="" aria-label="Carousel Page 3 (Current Slide)" class="tns-nav-active"></button></div><div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">4</span>  of 3</div><div id="tns1-mw" class="tns-ovh"><div class="tns-inner" id="tns1-iw"><div class="testimonial-slider  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" id="tns1" style="transform: translate3d(-60%, 0px, 0px);"><div class="item tns-item" aria-hidden="true" tabindex="-1">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 mx-auto">

                            <div class="testimonial-block text-center">
                                <blockquote class="mb-5">
                                    <p>“Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.”</p>
                                </blockquote>

                                <div class="author-info">
                                    <div class="author-pic">
                                        <img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
                                    </div>
                                    <h3 class="font-weight-bold">Maria Jones</h3>
                                    <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
</div>