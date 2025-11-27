@include('layouts.header')
<style>
    .founder-section {
    background: #ffffff;
}

.founder-card {
    max-width: 850px;
    background: #fff;
    padding: 35px;
    border-radius: 20px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
}

.founder-img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    border: 5px solid #d3b137; /* Golden border */
}

.founder-name {
    font-size: 22px;
    font-weight: 700;
    color: #000;
}

.founder-role {
    font-size: 15px;
    color: #555;
    font-weight: 500;
}

.founder-text p {
    color: #444;
    line-height: 1.7;
    font-size: 16px;
    margin-bottom: 15px;
}

/* Button */
.back-btn {
    background: #d3b137;
    padding: 10px 25px;
    border-radius: 30px;
    text-decoration: none;
    color: #fff;
    font-weight: 600;
    transition: 0.3s;
}

.back-btn:hover {
    background: #b5942d;
}

</style>

<section class="founder-section py-5" style="padding-left:190px;">
    <div class="container">
        <div class="founder-card mx-auto">
            
            <!-- Image -->
            <div class="text-center">
                <img src="images/director2.jpeg" class="founder-img" alt="Founder Image">
            </div>

            <!-- Heading -->
            <h3 class="text-center founder-name mt-3">Mr. Madhu Suddan Parida</h3>
            <p class="text-center founder-role">Director of Sales and Marketing</p>

            <!-- Description -->
            <div class="founder-text mt-3">
                <p>
                    As a <strong>Senior Management Professional</strong> with over <strong>25 years of progressive leadership experience</strong>, 
                    I have built a career committed to driving sustainable business growth, operational excellence, 
                    and organizational transformation. My work has consistently focused on accelerating revenue, elevating 
                    performance standards, and shaping high-impact strategies in competitive and evolving markets.
                </p>

                <p>
                    Over the years, I have led large cross-functional teams, managed high–value portfolios, and contributed 
                    to the long-term success of diverse organizations across multiple sectors. My expertise spans business 
                    development, operations leadership, key account management, and innovation-driven growth — all grounded 
                    in a deep understanding of market behaviour, customer experience, and emerging business landscapes.
                </p>

                <p>
                    Known for a strategic vision and execution-focused mindset, I have introduced forward-looking initiatives, 
                    enhanced operational frameworks, and fostered cultures rooted in integrity, accountability, and excellence. 
                    My approach remains centered on building resilient systems, empowering people, and creating measurable value.
                </p>

                <p><strong>My Leadership Philosophy:</strong> Lead with clarity, act with purpose, and inspire transformation that creates lasting impact.</p>
            </div>

            <!-- Button -->
            <div class="text-center mt-4">
                <br>
                <a href="/" class="back-btn">⬅ Back to Home</a>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
