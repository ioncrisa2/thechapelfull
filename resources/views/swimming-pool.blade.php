<x-base-layout>

    <section class="page">

        <!-- ===  Page header === -->

        <div class="page-header" style="background-image:url({{ asset('images') }}/header-1.jpg)">
            <div class="container">
                <h2 class="title">Outdoor Swimming Pool</h2>
                <p>Enjoy a refreshing dip in our outdoor swimming pool</p>
            </div>
        </div>

        <div class="room">

            <!-- === Room gallery === -->

            <div class="room-gallery">
                <div class="container">
                    <div class="owl-slider-gallery">

                        <!-- === slide item === -->

                        <div class="item" style="background-image:url({{ asset('images') }}/swimming-pool.jpg)">
                            <img src="{{ asset('images') }}/swimming-pool.jpg" alt="" />
                        </div>

                    </div> <!--/owl-slider-->

                </div>
            </div> <!--/room-gallery-->
            <!-- === Booking === -->

            <div class="booking booking-inner">

                <div class="container">

                    <div class="booking-wrapper">
                        <div class="row">

                            <!--=== button ===-->

                            <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
                                <a href="reservation-1.html" class="btn btn-clean ">
                                    Book now
                                    <small>Best Prices Guaranteed</small>
                                </a>
                            </div>

                        </div> <!--/row-->
                    </div><!--/booking-wrapper-->
                </div> <!--/container-->
            </div> <!--/booking-->
            <!-- ===  Room overview === -->

            <div class="room-overview">

                <div class="container">
                    <div class="row">

                        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                            <div class="room-block">
                                <h2 class="title">Package overview</h2>
                                <p>
                                    Dive into unforgettable moments at our luxurious resort, where a stunning swimming
                                    pool surrounded by breathtaking tropical views awaits you. Whether you're looking to
                                    relax, enjoy a refreshing swim, or spend quality time with friends and family, our
                                    pool offers the perfect setting. Take advantage of exclusive amenities and services
                                    to make your experience truly remarkable and rejuvenating.
                                </p>
                            </div>

                            <!-- === Room block === -->

                            <div class="room-block">

                                <h2 class="title">Package Details and rules</h2>

                                <!-- === box === -->

                                <div class="box">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><strong>Price </strong></p>
                                        </div>
                                        <div class="col-md-8">
                                            <p>IDR 20.000 / pax</p><br>
                                        </div>
                                    </div>
                                </div>

                                <!-- === box === -->

                                <div class="box">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><strong>Cancellation/prepayment</strong></p>
                                        </div>
                                        <div class="col-md-8">
                                            <p>
                                                Cancellation and prepayment policies vary according to room type. Please
                                                reach us via contact or booking contact.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- === box === -->

                                <div class="box">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><strong>Pets</strong></p>
                                        </div>
                                        <div class="col-md-8">
                                            <p>Pets are not allowed.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- === box === -->

                                <div class="box">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><strong>Additional info</strong></p>
                                        </div>
                                        <div class="col-md-8">
                                            <p>Food and beverages from outside are not allowed.</p>
                                            <p>Children aged 2 years and above will be charged the regular price.</p>
                                            <p>Guests are required to maintain cleanliness.</p>
                                            <p>Guests are responsible for the safety of their personal and valuable
                                                items.</p>
                                            <p>
                                                Guests must maintain order while queuing in all areas (selfie spots,
                                                restaurants, food stalls, and other shared facilities at The Chapel
                                                Tropical View).
                                            </p>
                                            <p>Bringing alcoholic beverages is prohibited.</p>
                                            <p>Intoxicated individuals or those causing disturbances are not allowed to
                                                enter.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!--/col-sm-10-->
                    </div> <!--/row-->
                </div> <!--/container-->
            </div> <!--/room-overview-->
        </div>

    </section>

</x-base-layout>
