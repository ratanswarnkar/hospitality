@include('layouts.header')

<style>
/* Caption container styling */
.banner-caption {
  position: absolute;
  top: 63%;
  left: 22%;
  transform: translate(-50%, -50%);
  text-align: left;
  width: auto;
  max-width: 280px; /* ensures it never grows too wide */
}

/* Glass effect box */
.glass-box {
  padding: 20px 30px;
  border-radius: 15px;
  background: rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255,255,255,0.3);
  box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}

/* Heading */
.glass-box h2 {
  font-size: 36px;
  font-weight: 700;
  color: #fff;
  margin-bottom: 12px;
  text-shadow: 0px 3px 10px rgba(0,0,0,0.4);
  line-height: 1.2;
}

/* Button */
.banner-btn {
  display: inline-block;
  padding: 12px 22px;
  font-size: 18px;
  border-radius: 50px;
  background: #d31010;
  color: #fff;
  font-weight: 600;
  text-decoration: none;
}

.banner-btn:hover {
  background: #000;
  transform: scale(1.05);
}

/* ---------- RESPONSIVE FIX ---------- */

/* Tablets */
@media(max-width:1024px){
  .banner-caption {
    left: 26%;
    top: 65%;
    max-width: 240px;
  }
  .glass-box h2 { font-size: 30px; }
}

/* Mobile */
@media(max-width:768px){
  .banner-caption {
    left: 28%;
    top: 68%;
    max-width: 210px;
  }
  .glass-box { padding: 15px 20px; }
  .glass-box h2 { font-size: 24px; }
  .banner-btn { font-size: 15px; padding: 8px 16px; }
}

/* Small Mobile */
@media(max-width:480px){
  .banner-caption {
    left: 30%;
    top: 70%;
    max-width: 180px;
  }
  .glass-box { padding: 1px 20px; }
  .glass-box h2 { font-size: 10px; }
  .banner-btn { font-size: 14px; padding: 7px 14px; }
}

/* Very Small Phones */
@media(max-width:360px){
  .banner-caption {
    max-width: 160px;
    left: 32%;
  }
  .glass-box h2 { font-size: 18px; }
  .banner-btn { font-size: 13px; padding: 6px 12px; }
}




</style>

		<!--BANNER SECTION-->
		<section>
			<div class="tourz-search">
				<div class="container__">
					<div class="row">
						<div class="tourz-search-1">
                             <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                              <!-- Indicators -->														
							  <!-- Wrapper for slides -->							
                              <div class="carousel-inner carousel-inner1" role="listbox">
							  
                                 <div class="item active">
                                 <img src="images/consul-bg-2.png" alt="balukphont" width="1369" height="450"> 
								<!-- <img  src="images/Banner-2.jpg" alt="taj-mahal" width="1369" height="450"> -->
                                 </div>
                                 <div class="banner-caption glass-box">
    <h2>Discover Luxury <br> Travel</h2>
    <a href="{{ asset('/enquiry') }}" class="banner-btn">Plan My Trip →</a>
</div>

								 
                                <div class="item">
                                  <img src="images/consul-bg-1.png" alt="kamakhya-temple-guwahati" width="1369" height="450">  
								 <!-- <img style="background-repeat:no-repeat; background-size:100% 100%; max-width:100%" src="images/banner-1.png" alt="balukphont" width="1369" height="450"> -->
                                 </div> 

                                 <div class="banner-caption glass-box">
    <h2>Discover Luxury <br> Travel</h2>
    <a href="{{ asset('/enquiry') }}" class="banner-btn">Plan My Trip →</a>
</div>

								 
								 <div class="item">
                                  <img src="images/consul-bg-3.png" alt="kamakhya-temple-guwahati" width="1369" height="450">  
								 <!-- <img style="background-repeat:no-repeat; background-size:100% 100%; max-width:100%" src="images/banner-1.png" alt="balukphont" width="1369" height="450"> -->
                                 </div> 

                                 <div class="banner-caption glass-box">
    <h2>Discover Luxury <br> Travel</h2>
    <a href="{{ asset('/enquiry') }}" class="banner-btn">Plan My Trip →</a>
</div>

								
                              </div>
                              <!-- Left and right controls -->  
                            <a class="carousel-control left" href="#myCarousel1" data-slide="prev">
 <span class="glyphicon glyphicon-chevron-left"></span>
 </a>

<a class="carousel-control right" href="#myCarousel1" data-slide="next"> 
<span class="glyphicon glyphicon-chevron-right"></span> 
</a>							  
							  						
                           </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--END BANNER SECTION-->
    <!-- <div class="independence"> -->
	<div >
	<section >
	<div class="container">
	<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
	<article class="home-about">
	<p> Travelling is not just an activity — it is an emotion that brings joy, peace, and a sense of fulfillment. With a vision to turn every travel dream into reality and to create meaningful journeys, NEXT-WISE Hospitality Pvt. Ltd. came into existence. Since then, we have proudly evolved into one of India’s reliable and experience-driven travel and hospitality organizations, headquartered in Delhi. We take immense pride in offering thoughtfully curated travel experiences suitable for every personality, purpose, and preference. </p> <p> At NEXT-WISE Hospitality, we believe that nothing should stand between you and the extraordinary experiences that the world has to offer — not rules, not distance, not language barriers, nor boundaries. With complete dedication, we take care of every hospitality need, ensuring that you overcome every limitation and embrace a truly memorable and seamless journey. </p> <p> We invest passion, precision, and effort into delivering exceptional services that unlock countless enjoyable experiences for our clients. Whether your requirement is Events, Inbound/Outbound Tours, Corporate Travel, Conferences, Destination Weddings, Receptions, or more — our highly experienced and efficient team ensures that every moment with NEXT-WISE Hospitality becomes one of the finest experiences of your life. </p> <p> We understand that no two travellers are the same — preferences, lifestyles, and expectations differ, and so should their journeys. That is why at NEXT-WISE Hospitality, every trip is customized with a personalized touch. With deep expertise in global destinations, hospitality, and tourism, we offer a variety of tailored travel solutions that cater to every unique traveler. </p> <p> <b>NEXT-WISE Hospitality</b> believes in the art of excellence and ensures you discover the right destination and perfect experience that matches your taste. Our purpose goes beyond travel — we aim to earn a place in your memories and bring smiles that last a lifetime. </p> <p> <b>“Atithi Devo Bhava”</b> — meaning *The Guest is God* — remains at the heart of our culture. With warmth, respect, and compassion, we welcome every guest regardless of background, culture, gender, or belief. At NEXT-WISE, hospitality is not just a service — it is a heartfelt promise. </p>
	
	</article>

    
	
	</div>
	</div>
	</div>
	</section>
	<br><br>
    <div style="width: 100%; height: 1px; background-color: #000;"></div>
    <br><br>
	
 
<section class="about-section py-5" style="background-color: #f6f6f6;">
    <div class="container">
        <div class="row align-items-center">
            
            <!-- Image -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="images/about-pi.png" class="img-fluid rounded-4 shadow" alt="About Image">
            </div>

            <!-- Text -->
            <div class="col-lg-6">
                <h2 class="text-uppercase text-muted mb-2">About</h2>
                <h2 class="fw-bold mb-4"><span style="color:#000;">NEXT-WISE </span><span style="color:#d31010;">HOSPITALITY</span></h2>

               <p> Imagine you dream something and it becomes real. That moment of happiness has built us as an organization. We work for your dreams and make them picture perfect. NEXT-WISE Hospitality Pvt. Limited is a dedicated team of enthusiastic people turning visions into meaningful and memorable experiences. </p> 
               <p> We, at NEXT-WISE Hospitality Pvt. Ltd., are committed to ensuring that nothing comes between you and the best that the world has to offer. Neither rules nor distance, neither boundaries nor languages — nothing stands as a barrier. With complete dedication, we take care of all your hospitality needs and make it possible for you to overcome every hurdle in order to live a seamless, premium, and unforgettable experience. </p>
                <p> We ensure to put hard work and passion into capturing the opportunity for our clients to explore diverse, joyful, and personalized experiences. Whether your need is for Events, Inbound / Outbound tours, Corporate Travel, Conferences, Weddings, Receptions, or much more — our experienced and efficient team ensures that every moment with NEXT-WISE Hospitality becomes one of the best experiences you ever have. </p>
            </div>
          <a href="{{ asset('/about') }}">  <button style="background-color:#d31010; color:#fff; border:none; padding:10px 20px; border-radius:5px;">Read More</button></a>
        </div>
    </div>
</section>

<style>
     .about-section p, .extra-about p {
    font-size: 16px;
    line-height: 1.7;
    color: #444;
}

.about-section img {
    padding-top:20px;
    padding-bottom:20px;
    object-fit: cover;
    width: 100%;
    border-radius: 40px;
}

.extra-about h5 {
    font-size: 20px;
}
.testimonial-box {
    text-align: center;
    margin-bottom: 30px;
}

.client-img {
    width: 90%;
    border-radius: 15px;
    margin-bottom: 15px;
}

.review-text {
    background: #f6f6f6;
    padding: 15px;
    border-radius: 10px;
    min-height: 140px;
    font-size: 15px;
    line-height: 1.6;
}

.review-text strong {
    display: block;
    margin-top: 10px;
    font-size: 16px;
    color: #d31010;
}

</style>

<br><br>
    <div style="width: 100%; height: 1px; background-color: #000;"></div>
    <br><br>
	 <!-- <section>
        

            


        <div class="clearfix"></div>

        
        <div class="clearfix"></div> -->
        
   
    <section>
        <div class="rows tips tips-home tb-space home_title">
            <div class="container tips_1">
                <!-- TIPS BEFORE TRAVEL -->
						 <div class="col-md-12 col-sm-12 col-xs-12">
				<h3 class="tour-heading">Incredible India Tour</h3>
                
                    <!-- TESTIMONIAL TITLE -->
                   
                  <p class="home-content"> India is one of the most fascinating countries in the world — a land where history, spirituality, and culture blend seamlessly with modern aspirations. From breathtaking natural landscapes to architectural masterpieces, from ancient palaces to timeless heritage sites, India enchants every traveler with its unmatched beauty and soul-stirring experiences. <br><br> It is the only country where “unity in diversity” is not just a phrase, but a way of life. India offers a spectacular mix of snow-covered mountains, serene beaches, golden deserts, dense forests, vibrant cities, and peaceful rural retreats — making it a paradise for every kind of traveler. Bordered by the majestic Himalayas and surrounded by the Arabian Sea, Bay of Bengal, and Indian Ocean, its geographical diversity is extraordinary. <br><br> India’s rich heritage, food culture, classical dance forms, festivals, ancient temples, wildlife, yoga legacy, Bollywood, sports spirit, and timeless history have made it a dream destination for millions worldwide. From the Wonder of the World — the Taj Mahal — to spiritual sanctuaries, colorful festivals, and unforgettable train journeys, India stands apart as a destination that touches hearts and transforms perspectives. <br><br> India is not just a place to visit — it is a place to feel, explore, and rediscover yourself. So when you travel, don’t just be a visitor; be a wanderer, a learner, a storyteller. Because travel is an investment in yourself — and India promises memories that stay forever. </p> <p class="home-content"> As one of India’s trusted travel experience experts, <b>NEXT-WISE Hospitality Pvt. Ltd.</b> specializes in designing personalized journeys across every region of the country — from famous tourist attractions to hidden gems untouched by mass tourism. <br><br> Your interests, preferences, and travel dreams guide our planning — ensuring every itinerary reflects exactly what you desire. With extensive knowledge of destinations, strong partnerships, and a highly experienced team, we seamlessly manage hotels, transport, tickets, meals, guided experiences, and every detail that enhances your journey. <br><br> With NEXT-WISE Hospitality, you don’t just explore India — you experience it. </p></div>
            </div> 
			
			
			<!-- <div class="container">
                <div class="col-md-12 col-sm-12 col-xs-12">
				<h3 class="client-speak">Client's Speak</h3>
					 <div id="carousel-fb-vid" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                        
                        	<div class="item active">
    <div class="col-md-4 col-sm-6 testimonial-box">
        <img src="images/client1.jpg" class="client-img img-responsive">
        <div class="review-text">
            <p>"Our India trip was simply unforgettable — NEXT-WISE arranged everything so perfectly!"</p>
            <strong>John & Emma</strong><br>
            <span>United Kingdom</span>
        </div>
    </div>

    <div class="col-md-4 col-sm-6 testimonial-box">
        <img src="images/client2.jpg" class="client-img img-responsive">
        <div class="review-text">
            <p>"Amazing hospitality, luxury hotels, smooth travel — highly recommended!"</p>
            <strong>Maria R.</strong><br>
            <span>Philippines</span>
        </div>
    </div>

    <div class="col-md-4 col-sm-6 testimonial-box">
        <img src="images/client3.avif" class="client-img img-responsive">
        <div class="review-text">
            <p>"A beautifully organized travel experience — worth every moment!"</p>
            <strong>William P.</strong><br>
            <span>South Africa</span>
        </div>
    </div>
</div> -->


                        </div>
                        
                         <!--  <div class="client-slide-nav"> 
						   <div class="client-slide-nav-left"><a class="" href="#carousel-fb-vid" role="button" data-slide="prev"><i class="fa fa-arrow-left"></i></a></div>
                           <div class="client-slide-nav-right"> <a class="" href="#carousel-fb-vid" role="button" data-slide="next"><i class="fa fa-arrow-right"></i></span></a></div>
							</div> -->
                        </div>
                        
                        <div class="clearfix"></div>
                 		<br>

                         <!-- <div class="col-md-12 text-center">
                            <a href="testimonials.html" class="sub-view-all link-btn">View All</a>
                         </div> -->
                 
						 <script type="text/javascript">
                            $( "#youtube-img-1" ).click(function() {
							$('#carousel-fb-vid').carousel('pause');
							  
                              $( "#yt-container-1" ).html('<iframe style="width:100%; height:125;" width="375" height="195" src="https://www.youtube.com/embed/T7i66_G4Juk?autoplay=1&rel=0"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');
                           
						   });
                            
                            $( "#youtube-img-2" ).click(function() {
                              $('#carousel-fb-vid').carousel('pause');
                              $( "#yt-container-2" ).html('<iframe style="width:100%; height:150;" width="375" height="195" src="https://www.youtube.com/embed/FNU706dJev4?autoplay=1&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');
                            });
                            
							$( "#youtube-img-3" ).click(function() {
                              $('#carousel-fb-vid').carousel('pause');
                              $( "#yt-container-3" ).html('<iframe style="width:100%; height:150;" width="375" height="195" src="https://www.youtube.com/embed/ZwKK86VNwo8?autoplay=1&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');
                            });
                           
                         </script>
                 
                 </div>
				 </div>
                <!-- CUSTOMER TESTIMONIALS -->
	
        </div>
		</div>
    </section>
	
	</div>

    <section class="pt60 pb50-md" style="background-color: #f6f6f6;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="00ms">
        <div class="main-title">
          <h2 class="title" style="color: #000 !important;">Hear from our satisfied clients</h2>
          <p class="paragraph" style="color: #555 !important;">"Read what our satisfied clients have to say about their remarkable experiences with us!"</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="testimonial-slider navi_pagi_top_right slider-3-grid owl-carousel owl-theme wow fadeInUp" data-wow-delay="300ms">

          <!-- Testimonial Item 1 -->
          <div class="item">
            <div class="testimonial-style1 position-relative" style="background-color: #f6f6f6 !important; padding: 25px; border-radius: 10px; color: #fff !important;">
              <div class="testimonial-content">
                <!-- <span class="icon fa fa-quote-left" style="color: #d4af37 !important; font-size: 22px;"></span> -->
                <p style="color: #000 !important; margin-top: 10px;">Visiting this art gallery was an inspiring experience. The curation, ambiance, and attention to artistic detail were exceptional. The staff was welcoming and knowledgeable. I highly recommend visiting this gallery!</p>
                <div class="testimonial-review">
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                </div>
              </div>
              <div class="thumb d-flex align-items-center mt-3">
                <div class="flex-shrink-0">
                  <img src="images/female3.svg" alt="" style="width:50px;" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-0" style="color: #fff !important;">Mrs. Sophia</h6>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial Item 2 -->
          <div class="item">
            <div class="testimonial-style1 position-relative" style="background-color: #f6f6f6 !important; padding: 25px; border-radius: 10px; color: #fff !important;">
              <div class="testimonial-content">
                <!-- <span class="icon fa fa-quote-left" style="color: #d4af37 !important; font-size: 22px;"></span> -->
                <p style="color: #000 !important; margin-top: 10px;">The gallery experience was excellent, and they really understood my artistic preferences. I would have appreciated slightly quicker responses regarding artwork details, but overall, it was a wonderful visit.</p>
                <div class="testimonial-review">
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                </div>
              </div>
              <div class="thumb d-flex align-items-center mt-3">
                <div class="flex-shrink-0">
                  <img src="images/male3.svg" alt="" style="width:50px;" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-0" style="color: #fff !important;">Mr. Ankit</h6>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial Item 3 -->
          <div class="item">
            <div class="testimonial-style1 position-relative" style="background-color: #f6f6f6 !important; padding: 25px; border-radius: 10px; color: #fff !important;">
              <div class="testimonial-content">
                <!-- <span class="icon fa fa-quote-left" style="color: #d4af37 !important; font-size: 22px;"></span> -->
                <p style="color: #000 !important; margin-top: 10px;">From exploring the collections to selecting the perfect piece, the entire experience felt effortless. The expertise and passion for art truly stood out. Thank you for helping me find artwork I love!</p>
                <div class="testimonial-review">
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                </div>
              </div>
              <div class="thumb d-flex align-items-center mt-3">
                <div class="flex-shrink-0">
                  <img src="images/female3.svg" alt="" style="width:50px;" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-0" style="color: #fff !important;">Mrs. Laila</h6>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial Item 4 -->
          <div class="item">
            <div class="testimonial-style1 position-relative" style="background-color: #f6f6f6 !important; padding: 25px; border-radius: 10px; color: #fff !important;">
              <div class="testimonial-content">
                <!-- <span class="icon fa fa-quote-left" style="color: #d4af37 !important; font-size: 22px;"></span> -->
                <p style="color: #000 !important; margin-top: 10px;">I discovered a beautiful artwork thanks to their assistance. The team was helpful and attentive, though I wish appointment timings were a bit more flexible. Still, I’m very satisfied!</p>
                <div class="testimonial-review">
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                </div>
              </div>
              <div class="thumb d-flex align-items-center mt-3">
                <div class="flex-shrink-0">
                  <img src="images/male3.svg" alt="" style="width:50px;" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-0" style="color: #fff !important;">Mr. Rizwan</h6>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial Item 5 -->
          <div class="item">
            <div class="testimonial-style1 position-relative" style="background-color: #f6f6f6 !important; padding: 25px; border-radius: 10px; color: #fff !important;">
              <div class="testimonial-content">
                <!-- <span class="icon fa fa-quote-left" style="color: #d4af37 !important; font-size: 22px;"></span> -->
                <p style="color: #000 !important; margin-top: 10px;">I am impressed by the level of passion and expertise shown during my art purchase. They provided valuable insights and answered all my questions clearly. I would gladly visit again.</p>
                <div class="testimonial-review">
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                </div>
              </div>
              <div class="thumb d-flex align-items-center mt-3">
                <div class="flex-shrink-0">
                  <img src="images/male3.svg" alt="" style="width:50px;" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-0" style="color: #fff !important;">Mr. Harish</h6>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial Item 6 -->
          <div class="item">
            <div class="testimonial-style1 position-relative" style="background-color: #f6f6f6 !important; padding: 25px; border-radius: 10px; color: #fff !important;">
              <div class="testimonial-content">
                <!-- <span class="icon fa fa-quote-left" style="color: #d4af37 !important; font-size: 22px;"></span> -->
                <p style="color: #000 !important; margin-top: 10px;">Truly a visitor-first experience. They understood my artistic taste and went above and beyond with thoughtful guidance. Very professional, responsive, and knowledgeable — a full 5-star experience!</p>
                <div class="testimonial-review">
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                </div>
              </div>
              <div class="thumb d-flex align-items-center mt-3">
                <div class="flex-shrink-0">
                  <img src="images/female3.svg" alt="" style="width:50px;" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-0" style="color: #fff !important;">Ms. Amelia</h6>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial Item 7 -->
          <div class="item">
            <div class="testimonial-style1 position-relative" style="background-color: #f6f6f6 !important; padding: 25px; border-radius: 10px; color: #fff !important;">
              <div class="testimonial-content">
                <!-- <span class="icon fa fa-quote-left" style="color: #d4af37 !important; font-size: 22px;"></span> -->
                <p style="color: #000 !important; margin-top: 10px;">The entire team was very professional and polite. I only wish we had a few more options to choose from, but the property I chose was still a great match for my needs. Thank you!</p>
                <div class="testimonial-review">
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                  <i class="fa fa-star" style="color: #d4af37 !important;"></i>
                </div>
              </div>
              <div class="thumb d-flex align-items-center mt-3">
                <div class="flex-shrink-0">
                  <img src="images/male3.svg" alt="" style="width:50px;" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-0" style="color: #fff !important;">Mr. Youssef</h6>
                </div>
              </div>
            </div>
          </div>

        </div> <!-- End slider -->
      </div>
    </div>
  </div>
</section>

	<!-- Load jQuery (use only ONE copy) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Load Owl Carousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
$(document).ready(function(){
  $(".testimonial-slider").owlCarousel({
      loop:true,
      margin:20,
      autoplay:true,
      autoplayTimeout:4000,
      autoplayHoverPause:true,
      smartSpeed:800,
      nav:true,
      dots:true,
      responsive:{
          0:{ items:1 },
          576:{ items:1 },
          768:{ items:2 },
          992:{ items:3 }
      }
  });
});
</script>
<style>
.testimonial-slider .owl-stage { display:flex !important; }

.testimonial-style1 {
  background:#fff;
  border:1px solid #e5e5e5;
  border-radius:15px;
  padding:25px;
  min-height:270px;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  transition:0.3s;
}

.testimonial-style1:hover {
  transform:translateY(-5px);
  box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

.testimonial-style1 p {
  color:#f6f6f6;
  line-height:24px;
  font-size:15px;
  margin-bottom:15px;
}

.testimonial-review {
  color:#f6c400;
  font-size:18px;
}

.thumb img {
  width:55px;
  height:55px;
  border-radius:50%;
  border:3px solid #f6c400;
}

.thumb h6 {
  margin-left:10px;
  font-weight:600;
  color:#000;
}

.item {  }
</style>

<br><br>
    <div style="width: 100%; height: 1px; background-color: #000;"></div>
    <br><br>


<section class="pt60 pb50-md" style="background-color: #fff;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="main-title">
          <h2 class="title" style="color: #000;">Latest Blogs</h2>
          <p style="color: #555;">Stay updated with travel insights, guides, and destination stories.</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="blog-slider owl-carousel owl-theme">

          <!-- Blog Item 1 -->
          <div class="item">
            <div class="blog-card">
              <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee" class="blog-img" alt="">
              <h5>Top 10 Must-Visit Places in India</h5>
              <p>Explore breathtaking destinations from Kashmir to Kerala that define India's beauty.</p>
              <a href="{{ asset('/blog1') }}" class="read-more">Read More →</a>
            </div>
          </div>

          <!-- Blog Item 2 -->
          <div class="item">
            <div class="blog-card">
              <img src="https://images.unsplash.com/photo-1523875194681-bedd468c58bf" class="blog-img" alt="">
              <h5>How to Plan a Budget-Friendly Trip</h5>
              <p>Travel smart with expert tips on saving money without compromising experience.</p>
              <a href="{{ asset('/blog2') }}" class="read-more">Read More →</a>
            </div>
          </div>

          <!-- Blog Item 3 -->
          <div class="item">
            <div class="blog-card">
              <img src="https://images.unsplash.com/photo-1493558103817-58b2924bce98" class="blog-img" alt="">
              <h5>Best Time to Visit Rajasthan</h5>
              <p>From Jaipur to Jaisalmer — discover perfect seasons, climate, and itinerary tips.</p>
              <a href="{{ asset('/blog3') }}" class="read-more">Read More →</a>
            </div>
          </div>

          <!-- Blog Item 4 -->
          <div class="item">
            <div class="blog-card">
              <img src="https://images.unsplash.com/photo-1506806732259-39c2d0268443" class="blog-img" alt="">
              <h5>Why India is a Cultural Wonderland</h5>
              <p>Dive into India's festivals, heritage, cuisine, and diverse traditions.</p>
              <a href="{{ asset('/blog4') }}" class="read-more">Read More →</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<style>
.blog-card {
  background:#fff;
  border:1px solid #e5e5e5;
  border-radius:15px;
  padding:20px;
  min-height:320px;
  transition:0.3s;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
}

.blog-card:hover {
  transform:translateY(-5px);
  box-shadow:0px 10px 25px rgba(0,0,0,0.1);
}

.blog-img {
  width:100%;
  height:180px;
  border-radius:12px;
  object-fit:cover;
  margin-bottom:15px;
}

.blog-card h5 {
  font-size:18px;
  font-weight:600;
  color:#000;
  margin-bottom:10px;
}

.blog-card p {
  color:#555;
  font-size:14px;
  line-height:22px;
  margin-bottom:15px;
}

.blog-card .read-more {
  font-weight:bold;
  color:#c71d1d;
  text-decoration:none;
  transition:0.3s;
}

.blog-card .read-more:hover {
  color:#000;
}

.blog-slider .owl-stage { display:flex !important; }
.blog-slider .item { padding:10px; }

</style>
<script>
$(document).ready(function(){
  $(".blog-slider").owlCarousel({
      loop:true,
      margin:20,
      autoplay:true,
      autoplayTimeout:4000,
      autoplayHoverPause:true,
      smartSpeed:900,
      nav:true,
      dots:true,
      responsive:{
          0:{ items:1 },
          576:{ items:1 },
          768:{ items:2 },
          992:{ items:3 }
      }
  });
});
</script>


	
  
@include('layouts.footer')


<!--FORM -->



	<!--========= Scripts ===========-->
	<!-- <script src="js/jquery-latest.min.js"></script> -->
	<script src="js/bootstrap.js"></script>
	<script src="js/custom.js"></script> 
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	</div>
	</body>

	</html>