<x-base-layout>

    <section class="page">

        <!-- ========================  Page header ======================== -->

        <div class="page-header" style="background-image:url({{ asset('images/') }}/header-1.jpg)">
            <div class="container">
                <h2 class="title">Rooms & Package</h2>
            </div>
        </div>

        <!-- === rooms content === -->

        <div class="rooms rooms-category">
            <div class="container">

                <div class="row">

                    <!-- === rooms item === -->

                    <div class="col-sm-6 col-md-6 col-lg-6 d-flex align-items-stretch">
                        <div class="item">
                            <article>
                                <div class="image">
                                    <img src="{{ asset('images') }}/room-1.jpg" alt="" class="img-responsive" />
                                </div>
                                <div class="details">
                                    <div class="text">
                                        <h2 class="title"><a href="{{ route('family-room') }}">Family Room</a></h2>
                                        <p>for 2 - 3 People</p>
                                    </div>
                                    <div class="book">
                                        <div>
                                            <a href="https://api.whatsapp.com/send?phone=6282316387449" target="_blank"
                                                class="btn btn-main">Book now</a>
                                            <a href="{{ route('family-room') }}" class="btn btn-main">More Info</a>
                                        </div>
                                        <div>
                                            <span class="price h2">IDR 650 K</span>
                                            <span>per night</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- === rooms item === -->

                    <div class="col-sm-6 col-md-6 col-lg-6 d-flex align-items-stretch">
                        <div class="item">
                            <article class="card">
                                <div class="image">
                                    <img src="{{ asset('images') }}/room-2.jpg" alt="" class="img-responsive" />
                                </div>
                                <div class="details">
                                    <div class="text">
                                        <h2 class="title"><a href="{{ route('lombok-room') }}">Lombok Room</a></h2>
                                        <p>for 2 People</p>
                                    </div>
                                    <div class="book">
                                        <div>
                                            <a href="https://api.whatsapp.com/send?phone=6282316387449" target="_blank"
                                                class="btn btn-main">Book now</a>
                                            <a href="{{ route('lombok-room') }}" class="btn btn-main">More Info</a>
                                        </div>
                                        <div>
                                            <span class="price h2">IDR 450 K</span>
                                            <span>per night</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- === rooms item === -->

                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                        <div class="item">
                            <article class="card">
                                <div class="image">
                                    <img src="{{ asset('images') }}/wedding-venue.jpg" alt="" />
                                </div>
                                <div class="details">
                                    <div class="text">
                                        <h2 class="title"><a href="{{ route('outdoor-wedding') }}">Wedding Venue</a></h2>
                                        <p>For Outdoor Wedding</p>
                                    </div>
                                    <div class="book">
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('outdoor-wedding') }}" class="btn btn-main btn-block">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- === rooms item === -->

                    <div class="col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                        <div class="item">
                            <article class="card">
                                <div class="image">
                                    <img src="{{ asset('images') }}/gathering.jpg" alt="" />
                                </div>
                                <div class="details">
                                    <div class="text">
                                        <h2 class="title"><a href="{{ route('gathering') }}">Gathering Package</a></h2>
                                        <p>Minimum 50 pax</p>
                                    </div>
                                    <div class="book">
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('gathering') }}" class="btn btn-main btn-block">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                        <div class="item">
                            <article class="card">
                                <div class="image">
                                    <img src="{{ asset('images') }}/meeting-pic.jpg" alt="" />
                                </div>
                                <div class="details">
                                    <div class="text">
                                        <h2 class="title"><a href="{{ route('meeting') }}">Meeting Package</a></h2>
                                        <p>For Meeting Room</p>
                                    </div>
                                    <div class="book">
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('meeting') }}" class="btn btn-main btn-block">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <!-- === rooms item === -->

                    <div class="col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                        <div class="item">
                            <article class="card">
                                <div class="image">
                                    <img src="{{ asset('images') }}/swiming-pool.jpg" alt="" />
                                </div>
                                <div class="details">
                                    <div class="text">
                                        <h2 class="title"><a href="{{ route('swiming-pool') }}">Swimming Pool</a></h2>
                                        <p>For Swimming Pool</p>
                                    </div>
                                    <div class="book">
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('swiming-pool') }}" class="btn btn-main btn-block">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                </div>

            </div> <!--/container-->
        </div>
    </section>


</x-base-layout>
