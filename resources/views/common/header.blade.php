<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="row">
            <!-- abed200 -->
            <div class="col-md-2 navbar-logo">
                <a class="navbar-brand" href="/">
                    <img alt="Bookzat - Airbnb Management Service in Dubai" title="Bookzat - Airbnb Management Service in Dubai" src="../../../assets/logo_object.svg" />
                </a>        </div>
            <div class="col-md-10 navbar-header-menu">
                <div class="row">
                    <div class="col-md-10">
                        <button type="button" data-toggle="collapse" data-target="#navbar-collapse_menu" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <ul class="nav navbar-nav navbar-left">
                            <li class="dropdown">
                                <a href="index.html#" class="city dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dubai <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="index.html">Dubai</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="/">Riyadh</a>
                                    </li>
                                    <li>
                                        <a href="/">Amman</a>
                                    </li>
                                    <li>
                                        <a href="/">Cairo</a>
                                    </li>
                                    <li>
                                        <a href="/">Beruit</a>
                                    </li>
                                    <li>
                                        <a href="/">Ramallah</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="hidden-xs hidden-sm">
                                <a href="tel:+972 597524846" class="phone">+972 597524846</a>
                            </li>
                            <li class="email">
                                <a href="mailto:admin@bookzat.com" class="email">admin@bookzat.com</a>
                            </li>

                            <li class="dropdown">
                                <a href="/" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="language dropdown-toggle">
                                    English <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="/">English</a></li>
                                </ul>
                            </li>

                        </ul>

                        <div id="navbar-collapse_menu" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="hidden-sm hidden-md hidden-lg"><a href="/">Home</a></li>
                                <!--li class="">
                                    <a href="/">Our homes</a>
                                </li-->
                                <li class=""><a href="/pricing">Pricing</a></li>
                                <li class=""><a href="/team">About us</a></li>
                                <!--li><a rel="noopener noreferrer"href="/">Hosting Tips</a></li-->
                                <!--li><a rel="noopener noreferrer" href="/">Book Now</a></li-->
                                <li><a rel="noopener noreferrer" href="/available_properties">Avilable properties</a></li>
                                @if (!Auth::check())
                                    <li>
                                        <a href="/register"> {{__('Register')}}</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="/home"> {{__('Home')}}</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>

                            @if (!Auth::check())
                        <div class="col-md-2">
                            <div class="navbar-buttons">
                            <div class="getstarted">
                                <a  href="/login" >{{__('Login')}}</a>
                            </div>
                            <div class="referral">
                                    <a href="/referral">Refer &amp; Earn 1000 AED</a>
                            </div>
                            </div>
                        </div>
                            @else
                        <div class="col-md-2">
                            <div class="navbar-buttons">
                                <div class="getstarted">
                                    <a  href="/logout" >{{__('Logout')}}</a>
                                </div>
                                <div style="display: inline-block">
                                    <div class="referral">
                                        <a href="/referral">Refer &amp; Earn 1000 AED</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>