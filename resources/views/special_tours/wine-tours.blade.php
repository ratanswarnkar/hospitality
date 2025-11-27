@include('layouts.header')


    <section class="page-section main-content">
        <article class="left-part">
            <div class="container">
                <!--heading section-->
                <div class="common-content">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">

                            <!--package name-->
                            <h3>Wine Tour Packages</h3>

                            <!--overview-->
                            <p class="overview">With various flavours making up for the country’s vastness, there is so much that you can explore and experience here in India. To taste wonderful tastes of the Indian vineyards, our Wine Tour Package in India. Our package
                                allows you to find your way to the best of Indian vineyards and allows you to find the perfect way to relax.</p>


                            <!-- <span id="text"> -->



                            <!-- </span> -->

                            <!-- <div class="btn-container"> -->
                            <!-- <button id="toggle">+ Read More</button> -->
                            <!-- </div> -->
                        </div>
                    </div>










                    <!---hidden form --->
                    <form name="enqForm" action="../enquiry.php" method="POST">
                        <input type="hidden" name="httprefrer" value="https://www.b2bhospitalityindia.com/india-special-tour/wine-tours.html">
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
                                                    <a href="../india-special-tour/wine-tour-packages.html">

                                                        <div class="hot-page2-hli-1">

                                                            <!--image path-->
                                                            <img src="../images/tourintro/wine-tour-packages.jpg" alt="Wine Tour Packages"> </div>

                                                    </a>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="trav-list-bod">

                                                        <!--package name link-->
                                                        <a href="../india-special-tour/wine-tour-packages.html">

                                                            <!--package name-->
                                                            <h4>Wine Tour Packages</h4>
                                                        </a>

                                                        <!--destinations covered-->
                                                        <p>Nashik</p>

                                                        <!-- duration -->
                                                        <p> 01 Nights / 02 Days</p>

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
                                                                <a href="../india-special-tour/wine-tour-packages.html" class="hot-page2-alp-quot-btn">View Details</a>

                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                                                                <span class="hot-list-p3-4">

<!--enquiry link-->
<a href="#" onclick="doEnquiry('wine-tour-packages'); return false;" class="hot-page2-alp-quot-btn">Enquiry Now</a>
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

    <div style="position: fixed; right: 0px; top:200px; z-index: 997;">
        <a href="../enquiry.php" class=""><img src="../images/contact-butt.png"></a>
    </div>
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