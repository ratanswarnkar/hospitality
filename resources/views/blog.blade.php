@include('layouts.header')

<style>
/* Page Banner */
.blog-banner {
  background: url('https://images.unsplash.com/photo-1502920514313-52581002a659') no-repeat center/cover;
  height: 300px;
  position: relative;
}

.blog-banner::after {
  content:"";
  position:absolute;
  top:0; left:0;
  width:100%; height:100%;
  background: rgba(0,0,0,0.5);
}

.blog-banner h1 {
  position:absolute;
  color:white;
  font-size:45px;
  font-weight:700;
  left:50%;
  top:50%;
  transform:translate(-50%, -50%);
}

/* Blog Grid */
.blog-section { padding:60px 0; }

.blog-card {
  background:#fff;
  border:1px solid #ddd;
  border-radius:15px;
  overflow:hidden;
  transition:0.3s;
  box-shadow:0 0 10px rgba(0,0,0,0.05);
}

.blog-card:hover {
  transform:translateY(-5px);
  box-shadow:0px 15px 30px rgba(0,0,0,0.15);
}

.blog-card img {
  width:100%;
  height:220px;
  object-fit:cover;
}

.blog-content { padding:20px; }

.blog-content h4 {
  font-size:20px;
  color:#000;
  font-weight:600;
}

.blog-content p {
  font-size:14px;
  color:#555;
  margin:10px 0;
}

.read-more-btn {
  display:inline-block;
  padding:10px 20px;
  background:#c71d1d;
  color:#fff;
  text-decoration:none;
  border-radius:50px;
  transition:0.3s;
}

.read-more-btn:hover {
  background:#000;
}
</style>


<!-- Banner -->
<section class="blog-banner">
  <h1>Our Blogs</h1>
</section>

<section class="blog-section">
  <div class="container">

    <!-- Blog Grid -->
    <div class="row">

      <!-- Blog 1 -->
      <div class="col-md-4 mb-4">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee">
          <div class="blog-content">
            <h4>Top 10 Must-Visit Places in India</h4>
            <p>Explore breathtaking destinations from Kashmir to Kerala that define India's beauty.</p>
            <a href="{{ asset('blog1') }}" class="read-more-btn">Read More</a>
          </div>
        </div>
      </div>

      <!-- Blog 2 -->
      <div class="col-md-4 mb-4">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1523875194681-bedd468c58bf">
          <div class="blog-content">
            <h4>How to Plan a Budget-Friendly Trip</h4>
            <p>Travel smart with expert tips on saving money without compromising comfort.</p>
            <a href="{{ asset('blog2') }}" class="read-more-btn">Read More</a>
          </div>
        </div>
      </div>

        <!-- Blog 6 -->
     <div class="col-md-4 mb-4">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1506806732259-39c2d0268443">
          <div class="blog-content">
            <h4>Why India is a Cultural Wonderland</h4>
            <p>Dive into India's festivals, heritage, cuisine, and diverse traditions.</p>
            <a href="{{ asset('blog4') }}" class="read-more-btn">Read More</a>
          </div>
        </div>
      </div>

      <!-- Blog 7 -->
      <div class="col-md-4 mb-4">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1529692236671-f1f6cf9683ba">
          <div class="blog-content">
            <h4>10 Travel Mistakes to Avoid</h4>
            <p>Learn how to travel smarter, safer, and stress-free with expert advice.</p>
            <a href="{{ asset('blog5') }}" class="read-more-btn">Read More</a>
          </div>
        </div>
      </div>

      <!-- Blog 3 -->
      <div class="col-md-4 mb-4">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1493558103817-58b2924bce98">
          <div class="blog-content">
            <h4>Best Time to Visit Rajasthan</h4>
            <p>From Jaipur to Jaisalmer — discover perfect seasons, climate, and itinerary tips.</p>
            <a href="{{ asset('blog3') }}" class="read-more-btn">Read More</a>
          </div>
        </div>
      </div>

      <!-- Blog 4 -->
      

      <!-- Blog 5 -->
      <div class="col-md-4 mb-4">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c">
          <div class="blog-content">
            <h4>Luxury Travel Tips</h4>
            <p>From premium hotels to elite experiences — learn how to travel with luxury.</p>
            <a href="{{ asset('blog6') }}" class="read-more-btn">Read More</a>
          </div>
        </div>
      </div>

    

    </div>

  </div>
</section>

@include('layouts.footer')

  <!--========= Scripts ===========-->
    <script src="../js/jquery-latest.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/custom.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
</body>

</html>
