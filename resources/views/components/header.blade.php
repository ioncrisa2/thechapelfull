<header>

    <!-- ======================== Navigation ======================== -->

    <div class="container">

        <!-- === navigation-top === -->

        <nav class="navigation-top clearfix">

            <!-- navigation-top-left -->

            <div class="navigation-top-left">
                <a class="box" target="_blank" href="https://www.facebook.com/thechapeltropicalview">
                    <i class="fa fa-facebook"></i>
                </a>
                <a class="box" target="_blank" href="https://www.instagram.com/thechapeltropicalview">
                    <i class="fa fa-instagram"></i>
                </a>
                <a class="box" target="_blank" href="https://api.whatsapp.com/send?phone=6282316387449">
                    <i class="fa fa-whatsapp"></i>
                </a>
            </div>

            <!-- navigation-top-right -->

            <div class="navigation-top-right">
                <p class="box">
                    <i class="icon icon-tag"></i>
                    Reservations
                </a>
                <a class="box" target="_blank" href="https://api.whatsapp.com/send?phone=6282316387449">
                    <i class="icon icon-phone-handset"></i>
                    (+62) 823 1638-7449
                </a>
            </div>
        </nav>

        <!-- === navigation-main === -->

        <nav class="navigation-main clearfix">

            <!-- logo -->

            <div class="logo animated fadeIn">
                <a href="/">
                    <img class="logo-desktop" src="{{ asset('images/chapel.jpg') }}" width="150px" style="border-radius: 25px;" alt="Alternate Text" />
                    <img class="logo-mobile" src="{{ asset('images/chapel-mobile.jpg') }}" style="width: 148px;margin-left: 5px; margin-top:5px;border-radius:10px" alt="Alternate Text" />
                </a>
            </div>

            <!-- toggle-menu -->

            <div class="toggle-menu"><i class="icon icon-menu"></i></div>

            <!-- navigation-block -->

            <div class="navigation-block clearfix">

                <!-- navigation-left -->

                <ul class="navigation-left">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=6282316387449">Booking </a>
                    </li>
                </ul>

                <!-- navigation-right -->

                <ul class="navigation-right">
                    <li>
                        <a href="{{ route('package') }}">Package</a>
                    </li>
                    <!-- <li>
                        <a href="/facility">Facilities</a>
                    </li> -->
                   <li>
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>

            </div> <!--/navigation-block-->

        </nav>
    </div> <!--/container-->

</header>
