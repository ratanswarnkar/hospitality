@include('layouts.header')

    <section class="page-section main-content">
        <article class="left-part">
            <div class="container">
                <!--heading section-->
                <div class="common-content">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">

                            <h3>India Special Tour</h3>
                            <p class="overview"> The power to travel the world just gets better with Special tours! A journey of meeting like-minded people, making new friends and creating new stories. Every Speciality tour with  NEXT-WISE Hospitality welcomes travellers to celebrate
                                their passion and enjoy something they truly like! We have Wine tours, bicycle tours, haunted tours and Bollywood tours which are designed to give you one of a kind experience. Enjoy the benefits of special tours which
                                invite people from around the world to explore something new. </p>
                            <!-- <span id="text"> -->
                            <!-- <p>	_</p> -->
                            <!-- </span> -->
                            <!-- <div class="btn-container"> -->
                            <!-- <button id="toggle">+ Read More</button> -->
                            <!-- </div> -->
                        </div>
                    </div>
                    <!--end heading section-->
                    <!--listing category row-->
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a href="{{ asset('/slum-tours') }}">
                                <div class="tour-mig-like-com">
                                    <div class="tour-mig-lc-img">
                                        <img src="../images/india-special-tour/slum-tour.jpg" alt="slum-tour">
                                    </div>
                                    <div class="tour-mig-lc-con tour-mig-lc-con2">
                                        <h5>Slum Tour</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a href="{{ asset('/bicycle-tours') }}">
                                <div class="tour-mig-like-com">
                                    <div class="tour-mig-lc-img">
                                        <img src="../images/india-special-tour/bicycle-tour.jpg" alt="bicycle tour">
                                    </div>
                                    <div class="tour-mig-lc-con tour-mig-lc-con2">
                                        <h5>Bicycle Tour</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a href="{{ asset('/wine-tours') }}">
                                <div class="tour-mig-like-com">
                                    <div class="tour-mig-lc-img">
                                        <img src="../images/india-special-tour/wine-tour.jpg" alt="wine tour">
                                    </div>
                                    <div class="tour-mig-lc-con tour-mig-lc-con2">
                                        <h5>Wine Tour</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a href="{{ asset('/haunted-tours') }}">
                                <div class="tour-mig-like-com">
                                    <div class="tour-mig-lc-img">
                                        <img src="../images/india-special-tour/haunted-tours-india.jpg" alt="haunted tours india">
                                    </div>
                                    <div class="tour-mig-lc-con tour-mig-lc-con2">
                                        <h5>Haunted Tours India</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--end listing category row-->
                    <!--listing category row-->
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a href="{{ asset('/bollywood-tours') }}">
                                <div class="tour-mig-like-com">
                                    <div class="tour-mig-lc-img">
                                        <img src="../images/india-special-tour/bollywood-tour.jpg" alt="bollywood-tour">
                                    </div>
                                    <div class="tour-mig-lc-con tour-mig-lc-con2">
                                        <h5>Bollywood Tour</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--end listing category row-->
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