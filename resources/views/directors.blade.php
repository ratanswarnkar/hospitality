@include('layouts.header')

<style>
 /* Fix overlapping with header */
body {
    scroll-padding-top: 90px; /* ensures content starts after fixed header */
}

/* Main Section */
.founder-section {
    background: #fff;
    padding: 60px 15px 50px; /* extra space for mobile fixed nav */
    position: relative;
    z-index: 1;
}

/* Card Style */
.founder-card {
    max-width: 900px;
    background: #ffffff;
    padding: 40px;
    border-radius: 20px;
    border: 2px solid #689e46ff;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    margin: auto;
    position: relative;
}

/* Image */
.founder-img {
    width: 170px;
    height: 170px;
    border-radius: 50%;
    object-fit: cover;
    border: 5px solid #689e46ff;
}

/* Titles */
.founder-name {
    font-size: 26px;
    font-weight: 700;
    color: #689e46ff;
    margin-top: 15px;
}

.founder-role {
    font-size: 16px;
    color: #000;
    font-weight: 500;
}

/* Text */
.founder-text p {
    color: #333;
    line-height: 1.8;
    font-size: 17px;
    margin-bottom: 18px;
}

/* Button */
.back-btn {
    background: #689e46ff;
    padding: 12px 30px;
    border-radius: 30px;
    text-decoration: none;
    color: #fff;
    font-weight: 600;
    transition: 0.3s ease-in-out;
    font-size: 16px;
}

.back-btn:hover {
    background: #689e46ff;
}

/* Ensure Navbar Clickability */
header, nav, .mobile-menu-toggle {
    position: relative;
    z-index: 9999 !important;
}

/* Responsive Fixes */
@media (max-width: 992px) {
    .founder-card {
        padding: 30px;
    }
}

@media (max-width: 768px) {

    .founder-section {
        padding-top: 117px; /* more spacing for mobile menu */
    }

    .founder-img {
        width: 130px;
        height: 130px;
    }

    .founder-name {
        font-size: 22px;
    }

    .founder-text p {
        font-size: 15px;
    }

    .founder-card {
        padding: 25px;
    }
}

@media (max-width: 576px) {
    .founder-card {
        padding: 20px;
        border-radius: 15px;
    }

    .back-btn {
        width: 80%;
        display: inline-block;
    }
}

</style>


<section class="founder-section">
    <div class="container">
        <div class="founder-card mx-auto">

            <div class="text-center">
                <img src="images/director2.png" class="founder-img" alt="Founder Image">
            </div>

            <h3 class="text-center founder-name">Mr. Madhu Suddan Parida</h3>
            <p class="text-center founder-role">Director of Sales and Marketing</p>

            <div class="founder-text mt-3">
                <p>
                    As a <strong>Senior Management Professional</strong> with over <strong>25 years of progressive leadership experience</strong>, 
                    I have built a career committed to driving sustainable business growth, operational excellence, 
                    and organizational transformation.
                </p>

                <p>
                    Over the years, I have led large cross-functional teams, managed high–value portfolios, and contributed 
                    to the long-term success of diverse organizations across multiple sectors.
                </p>

                <p>
                    Known for a strategic vision and execution-focused mindset, I have introduced forward-looking initiatives, 
                    enhanced operational frameworks, and fostered cultures rooted in integrity and excellence.
                </p>

                <p><strong>Leadership Philosophy:</strong> Lead with clarity, act with purpose, and inspire transformation.</p>
            </div>

            <div class="text-center mt-4">
                <br>
                <a href="/" class="back-btn">⬅ Back to Home</a>
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
