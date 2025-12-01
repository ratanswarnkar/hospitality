@include('layouts.header')


    <section class="page-section main-content">
        <article class="left-part">
            <div class="container">
                <!--heading section-->
                <div class="common-content">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">

                            <!--package name-->
                            <h3>Slum Tour Packages</h3>

                            <!--overview-->
                            <p class="overview">Wander the narrow pathways between sheet iron structures to gain insight into the melting pot of the world’s largest slums, residence to many small-scale industries. While informative, a walk into these streets might be challenging
                                for travellers, so it’s best to explore the area with a local guide who can highlight the experience with context and insight into daily life and show how these natives use their imagination and creativity to dwell in a
                                contrarily challenging socioeconomic environment. </p>


                            <!-- <span id="text"> -->



                            <!-- </span> -->

                            <!-- <div class="btn-container"> -->
                            <!-- <button id="toggle">+ Read More</button> -->
                            <!-- </div> -->
                        </div>
                    </div>










                    <!---hidden form --->
                    <form name="enqForm" action="../enquiry.php" method="POST">
                        <input type="hidden" name="httprefrer" value="https://www.b2bhospitalityindia.com/india-special-tour/slum-tours.html">
                        <input type="hidden" name="title" id="title" value="">
                        <input type="hidden" name="query_type" value="Tour">
                    </form>



                    <div class="row">
                        <div class="hot-page2-alp-con">
                            <!--LEFT LISTINGS-->

                            <!--END LEFT LISTINGS-->
                            <!--RIGHT LISTINGS-->
                            <div class="col-md-12 hot-page2-alp-con-right">
                                <div class="hot-page2-alp-con-right-1">
                                    <!--LISTINGS-->
                                    <div class="row">
















                                        <!--LISTINGS START-->
                                        <div class="col-md-12 col-sm-6 col-xs-12">
                                            <div class="hot-page2-alp-r-list">
                                                <div class="col-md-4 hot-page2-alp-r-list-re-sp">
                                                    <!--link of image-->
                                                    <a href="{{ asset('dharavi-slum-tour-details') }}">

                                                        <div class="hot-page2-hli-1">

                                                            <!--image path-->
                                                            <img src="../images/tourintro/dharavi-slum-tour.jpg" alt="Dharavi Slum Tour"> </div>

                                                    </a>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="trav-list-bod">

                                                        <!--package name link-->
                                                        <a href="{{ asset('dharavi-slum-tour-details') }}">

                                                            <!--package name-->
                                                            <h4>Dharavi Slum Tour</h4>
                                                        </a>

                                                        <!--destinations covered-->
                                                        <p>Mumbai</p>

                                                        <!-- duration -->
                                                        <p> 1 Days</p>

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="col-md-12">

                                                        <!--Price of package-->
                                                        <p class="price-request">Price On Request</p>

                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">

                                                                <!-- detial page link-->
                                                                <a href="{{ asset('dharavi-slum-tour-details') }}" class="hot-page2-alp-quot-btn">View Details</a>

                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                                                                <span class="hot-list-p3-4">

<!--enquiry link-->
<a href="{{ asset('enquiry') }}" class="hot-page2-alp-quot-btn">Enquiry Now</a>
</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>

                                                </div>
                                            </div>
                                        </div>
                                        <!--END LISTINGS-->


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </article>
    </section>



@include('layouts.footer')
   
  
    <!--FORM -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#toggle").click(function() {
                var elem = $("#toggle").text();
                if (elem == "+ Read More") {
                    //Stuff to do when btn is in the read more state
                    $("#toggle").text("- Read Less");
                    $("#text").slideDown();
                } else {
                    //Stuff to do when btn is in the read less state
                    $("#toggle").text("+ Read More");
                    $("#text").slideUp();
                }
            });
        });
    </script>
    <!--========= Scripts ===========-->
    <script src="../js/jquery-latest.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/custom.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
</body>

</html>