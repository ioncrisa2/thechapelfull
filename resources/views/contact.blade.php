<x-base-layout>
    <section class="page">
        <!-- ===  Page header === -->

        <div
            class="page-header"
            style="background-image: url({{ asset('images/') }}/header-1.jpg)">
            <div class="container">
                <h2 class="title">Contact</h2>
                <p>Our Location and Contact Information</p>
            </div>
        </div>

        <!-- ===  Contact === -->

        <div class="contact">
            <div class="container">
                <!-- === Google map === -->

                <div class="map" id="map"></div>

                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
                        <!-- === Contact block === -->

                        <div class="contact-block">
                            <!-- === Contact banner === -->

                            <!-- === Contact info === -->

                            <div class="contact-info">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <figure class="text-center">
                                            <span class="icon icon-map-marker"></span>
                                            <figcaption>
                                                <strong>Where are we?</strong>
                                                <span>Telawaan, Kec. Telawaan, Kabupaten Minahasa Utara <br />Sulawesi Utara</span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-sm-4">
                                        <figure class="text-center">
                                            <span class="icon icon-phone"></span>
                                            <figcaption>
                                                <strong>Call us</strong>
                                                <span>
                                                    <strong>Marleen</strong> +62 811 4322 021 <br />
                                                    <strong>Agnes</strong> +62 823 1638 7449
                                                </span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-sm-4">
                                        <figure class="text-center">
                                            <span class="icon icon-clock"></span>
                                            <figcaption>
                                                <strong>Working hours</strong>
                                                <span>
                                                    <strong>Mon - Sat</strong> : 9 am - 10 pm <br />
                                                    <strong>Sun</strong> : 9 am - 8 pm
                                                </span>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/contact-block-->
                    </div>
                    <!--col-sm-8-->
                </div>
                <!--/row-->
            </div>
            <!--/container-->
        </div>
        <!--/contact-->
    </section>

</x-base-layout>
