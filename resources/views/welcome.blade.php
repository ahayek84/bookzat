@extends('layout.site')
@section('content')
<div class="jumbotron">

    <div class="container text-center" id="price-calc">
        <p class="h1">BookZat ... Less paid More Gained</p>
        <h1 class="h2">We can help you lease or book your favourite home</h1>

        <div class="divider"></div>

        <div class='price-calculator inline'>
            <form action="/available_properties" id="new_price_calculator" method="get" class="simple_form new_price_calculator" >
                <div class="form-group string required price_calculator_address"><label class="control-label string required" for="price_calculator_address"><abbr title="required"></abbr> Address</label><div class="input-group">
                        <div class="input-group-addon shortcut"><i class="fa fa-map-marker"></i></div>
                        <input class="string required form-control" placeholder="Address" type="text" name="price_calculator[address]" id="price_calculator_address" />
                    </div></div>        <div class="form-group hidden price_calculator_lat"><input class="form-control hidden" geo="lat" type="hidden" name="price_calculator[lat]" id="price_calculator_lat" /></div>        <div class="form-group hidden price_calculator_lng"><input class="form-control hidden" geo="lng" type="hidden" name="price_calculator[lng]" id="price_calculator_lng" /></div>        <div class="form-group hidden price_calculator_formatted_address"><input class="form-control hidden" geo="formatted_address" type="hidden" name="price_calculator[formatted_address]" id="price_calculator_formatted_address" /></div>        <div class="form-group hidden price_calculator_route"><input class="form-control hidden" geo="route" type="hidden" name="price_calculator[route]" id="price_calculator_route" /></div>        <div class="form-group hidden price_calculator_street_number"><input class="form-control hidden" geo="street_number" type="hidden" name="price_calculator[street_number]" id="price_calculator_street_number" /></div>        <div class="form-group hidden price_calculator_postal_code"><input class="form-control hidden" geo="postal_code" type="hidden" name="price_calculator[postal_code]" id="price_calculator_postal_code" /></div>        <div class="form-group hidden price_calculator_country"><input class="form-control hidden" geo="country" type="hidden" name="price_calculator[country]" id="price_calculator_country" /></div>        <div class="form-group hidden price_calculator_country_short"><input class="form-control hidden" geo="country_short" type="hidden" name="price_calculator[country_short]" id="price_calculator_country_short" /></div>
                <div class="form-group string required price_calculator_rooms"><label class="control-label string required" for="price_calculator_rooms"><abbr title="required"></abbr> Bedrooms</label><div class="input-group">
                        <div class="input-group-addon shortcut"><i class="fa fa-bed"></i></div>
                        <input class="string required readonly form-control" readonly="readonly" placeholder="Bedrooms" type="text" name="price_calculator[rooms]" id="price_calculator_rooms" />
                        <div class="input-group-addon bedrooms-counter">
                            <a class="up" href="index.html#">+</a>
                            <a class="down" href="index.html#">-</a>
                        </div>
                    </div>
                </div>
                <div class="form-group email required price_calculator_email"><label class="control-label email required" for="price_calculator_email"><abbr title="required"></abbr> Email address</label><div class="input-group">
                        <div class="input-group-addon shortcut"><i class="fa fa-envelope-o"></i></div>
                        <input class="string email required form-control" placeholder="Email address" type="email" name="price_calculator[email]" id="price_calculator_email" /></div></div>
                <input type="submit" name="Get Proposals"  value="Get Proposals" data-disable-with="Get Proposals"  class="btn btn-primary" >
            </form>
        </div>

        <div class="jumbotron-about">
            <a class="h3 header open_edinburgh_popup" href="index.html#"></a>
            BookZat helps you find the condominum of your dreams
        </div>
    </div>
</div>

<section class="stat-section">
    <div class="bg-stat"></div>
    <div class="container text-center">
        <h2 class="section-title">Dubai’s #1 Property Management Agency</h2>
        <div class="divider"></div>
        <p class="basic">We help homeowners turn their homes into a profitable source of income.
        </p>
        <div class="props">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h3><strong>5<sup class="fa fa-star"></sup></strong><span>GUEST<br> REVIEWS</span>
                    </h3>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h3><strong>85%</strong><span>OCCUPANCY<br>PER LISTING</span>
                    </h3>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h3><strong>60%</strong><span>Earn higher<br>income than<br>a long let</span>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row clearfix"></div>
        <a class="btn btn-large btn-primary" href="../hosts/full_property_management_applications/new/index.html">Get Started</a>
        <h3 class="small">And start earning with our 5* Property Management</h3>
        <img alt="stars.png" class="no-filters" src="../../../assets/grey.gif" data-original="/assets/v2/stars-15d4075c350167b312da7527dd9603f7db04bb181a0c66227e26b4ba97abb011.png">
    </div>
</section>

<section class="about-section">
    <div class="container text-center">
        <p class="section-title text-center">Why use BooKZat?</p>
        <div class="divider"></div>
        <div class="about">
            <div class="row">
                <div class="col-md-4">
                    <img alt="Increase your Airbnb income in Dubai" title="Increase your Airbnb income in Dubai" src="../../../assets/grey.gif" data-original="../../../assets/icons/1.png">
                    <h3>Increase your Airbnb income</h3>
                    <p>Increase your rental income by up to 60% through short-term letting. By combining our industry expertise with our deep knowledge of the Dubai real estate and hospitality market, we optimise your Airbnb listing to ensure maximum results.</p>
                </div>
                <div class="col-md-4">
                    <img alt="Hassle Free Airbnb Management Dubai" title="Hassle Free Airbnb Management Dubai" src="../../../assets/grey.gif" data-original="../../../assets/icons/2.png"> <!-- changed by Haya -->
                    <h3>We take the hassle out of hosting</h3>
                    <p>Hosting without having to lift a finger. We take care of everything from setting up your listing, welcoming your guests and cleaning up after each stay. Our excellent level of service results in apartment maintenance, happy guests and happy hosts.</p>
                </div>
                <div class="col-md-4">
                    <img alt="Flexible Airbnb Management Dubai" title="Flexible Airbnb Management Dubai" src="../../../assets/grey.gif" data-original="../../../assets/icons/2-1.png"> <!-- changed by Haya -->
                    <h3>Fully flexible short term bookings</h3>
                    <p>Whether you’re out of the country for a few months, or you have an extra apartment in the city, our vacation rental management solutions are designed to adapt to many different situations. And whenever you come home, you can be sure to find it just the way you left it.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a class="btn btn-primary" href="index.html#price-calc">Find out how much<br>you can earn</a>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-primary" href="../services/index.html">Discover our <br>Management Services in detail</a>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-primary" href="../hosts/full_property_management_applications/new/index.html">Get in touch with<br>our hosting experts</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-section">
    <div class="container text-center">
        <p class="section-title">BookZat takes care of everything</p>
        <div class="divider"></div>
        <p class="basic">As a Management Company for Luxury Vacation Rentals, we have a suite of services designed to provide the best experience to your guests each time they stay at your home.</p>
        <div class="services">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="col-md-4">
                        <a href="../services/index.html#listing-creation">
                            <img alt="BookZat will create an attractive listing on Airbnb for you" title="BookZat will create an attractive listing on Airbnb for you" src="../../../assets/grey.gif" data-original="../../../assets/icons/icon1.png">
                            <span>Listing creation</span>
                        </a>            </div>
                    <div class="col-md-4">
                        <a href="../services/index.html#professional-photography">
                            <img alt="A professional photographer will take photos of your Dubai home" title="A professional photographer will take photos of your Dubai home" src="../../../assets/grey.gif" data-original="../../../assets/icons/icon2.png">
                            <span>Professional Photography</span>
                        </a>            </div>
                    <div class="col-md-4">
                        <a href="../services/index.html#concierge-service">
                            <img alt="Our concierges are available around the clock in Dubai" title="Our concierges are available around the clock in Dubai" src="../../../assets/grey.gif" data-original="../../../assets/icons/icon3.png">
                            <span>24/7 Concierge Service</span>
                        </a>            </div>
                    <div class="col-md-4">
                        <a href="../services/index.html#guest-communication">
                            <img alt="Rent your Dubai Airbnb to the most respectable guests" title="Rent your Dubai Airbnb to the most respectable guests" src="../../../assets/grey.gif" data-original="../../../assets/icons/icon4.png">
                            <span>Guest communication and screening</span>
                        </a>            </div>
                    <div class="col-md-4">
                        <a href="../services/index.html#personal-welcome">
                            <img alt="Personal welcome and key exchange for your guests" title="Personal welcome and key exchange for your guests" src="../../../assets/grey.gif" data-original="../../../assets/icons/icon5.png">
                            <span>Personal welcome &amp; key exchange</span>
                        </a>            </div>
                    <div class="col-md-4">
                        <a href="../services/index.html#price-optimisation">
                            <img alt="Price optimisation for better yield management" title="Price optimisation for better yield management" src="../../../assets/grey.gif" data-original="../../../assets/icons/icon6.png">
                            <span>Price optimisation</span>
                        </a>            </div>
                    <div class="col-md-4">
                        <a href="../services/index.html#premium-amenities">
                            <img alt="Toiletries and essentials for your Dubai guests" title="Toiletries and essentials for your Dubai guests" src="../../../assets/grey.gif" data-original="../../../assets/icons/icon7.png">
                            <span>Premium amenities</span>
                        </a>            </div>
                    <div class="col-md-4">
                        <a href="../services/index.html#cleaning-services">
                            <img alt="Cleaning and fresh linen for your Dubai Airbnb" title="Cleaning and fresh linen for your Dubai Airbnb" src="../../../assets/grey.gif" data-original="../../../assets/icons/icon8.png">
                            <span>Cleaning, linen, and laundry services</span>
                        </a>            </div>
                    <div class="col-md-4">
                        <a href="../services/index.html#professional-maintenance">
                            <img alt="Small repairs and on ground management of your Airbnb in Dubai" title="Small repairs and on ground management of your Airbnb in Dubai" src="../../../assets/grey.gif" data-original="../../../assets/icons/icon9.png">
                            <span>Property maintenance</span>
                        </a>            </div>
                </div>
            </div>
        </div>
        <a class="action" href="../services/index.html">Read more about our services</a>
    </div>
</section>

<section class="partners-section">
    <div class="container swiper-container">
        <h4>Property Management on Airbnb, Booking.com, VRBO, Homeaway and more...</h4>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img alt="AirBnB management Dubai" title="AirBnB management Dubai" src="../../../assets/grey.gif" data-original="/assets/v2/partners/airbnb-89e6d00e1855d47917bf0754ed9c78c3d7869b262d0108de82e9c502f0a0bda5.png">
            </div>
            <div class="swiper-slide">
                <img alt="Booking.com management Dubai" title="Booking.com management Dubai" src="../../../assets/grey.gif" data-original="/assets/v2/partners/booking-eb5e17dd07e152a5a89a8f2bf0c9bb9b88d758c1f91bd8d5646abe914ff2298e.png">
            </div>
            <div class="swiper-slide">
                <img alt="HomeAway management MENA region" title="HomeAway management MENA region" src="../../../assets/grey.gif" data-original="/assets/v2/partners/homeaway-fbf39e0d5fa05bdd61263be09ba0ab247f5159b5c4c9e9ff76687feab46d556b.png">
            </div>
            <div class="swiper-slide">
                <img alt="Tripadvisor management Dubai" title="Tripadvisor management Dubai" src="../../../assets/grey.gif" data-original="/assets/v2/partners/tripadvisor-fbc6967ad0dd5ab40fb24191217c3eb9ed441e4231ab1fa9c2ac8b060efbeb21.png">
            </div>
            <div class="swiper-slide">
                <img alt="Holidaylettings management Dubai" title="Holidaylettings management Dubai" src="../../../assets/grey.gif" data-original="/assets/v2/partners/holidaylettings-777566e7a8c16544c1a2bf1d9f5a946be8d29102b62cd892941ab7d3b5dac3f2.png">
            </div>
            <div class="swiper-slide">
                <img alt="Agoda management MENA region" title="Agoda management MENA region" src="../../../assets/grey.gif" data-original="/assets/v2/partners/agoda-89580d9c1a61e6a3315963e7eb40aa6ca01ef05fd29a67c9ec744c8e624ae998.png">
            </div>
            <div class="swiper-slide">
                <img alt="Ctrip management MENA region" title="Ctrip management MENA region" src="../../../assets/grey.gif" data-original="/assets/v2/partners/ctrip-f7270bee3144bef6d7166e819812499fce4bf0098354b46d1170b496bcb488a2.png">
            </div>
            <div class="swiper-slide">
                <img alt="Expedia management MENA region" title="Expedia management MENA region" src="../../../assets/grey.gif" data-original="/assets/v2/partners/expedia-4b97b75f1e58ae18aebbaaad1c80eaa8d39431288b5cb964354fd9366db34219.png">
            </div>
            <div class="swiper-slide">
                <img alt="flat4day management MENA region" title="flat4day management MENA region" src="../../../assets/grey.gif" data-original="/assets/v2/partners/flat4day-79c951805159126eddea8fce8f7b012fddb0e4c0138fe84b983e7985a9800a7d.png">
            </div>
            <div class="swiper-slide">
                <img alt="FLIPKEY management MENA region" title="FLIPKEY management MENA region" src="../../../assets/grey.gif" data-original="/assets/v2/partners/flipkey-a978408091f1912cc79ceee8d989c3e1aea2fa89b3ab7e2bd52ab7ef64250b24.png">
            </div>
            <div class="swiper-slide">
                <img alt="VRBO management MENA region" title="VRBO management MENA region" src="../../../assets/grey.gif" data-original="/assets/v2/partners/vrbo-a6cd38bcda7dafd18b06acc4872d10803d8ab5bc05594b25f2d5b69afd34e01c.png">
            </div>
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>

<!--
Disabled by bashar
section class="testimonials-section">
    <div class="container">
        <p class="section-title text-center">What our customers are saying…</p>
        <div class="divider"></div>
        <div class="slider">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="card-wrapper">
                        <div data-card-id="0" class="card card-0">
                            <figure>
                                <img alt="Airbnb management in Bloomsbury" title="Airbnb management in Bloomsbury" src="../../../assets/grey.gif" data-original="/assets/v2/dubai_flat_1_small-aee35d1100d4361e9eb8bbd74ec2fde6844f0d296730ec43a5253bc228233a03.jpg">
                            </figure>
                            <div class="meta">
                                <img alt="Gregory is a happy BookZat MENA region host" title="Gregory is a happy BookZat MENA region host" src="../../../assets/grey.gif" data-original="/assets/v2/dubai_owner_1-42864ce15582d2501259764a4f702f3b251c12b6e17893fbade4133aef9770f4.jpg">
                                <p>Sami</p>
                                <a href="../homes/index.html#home1">Dubai</a>
                            </div>
                        </div>
                        <div data-card-id="1" class="card card-1">
                            <figure>
                                <img alt="Property management in South Kensington" title="Property management in South Kensington" src="../../../assets/grey.gif" data-original="/assets/v2/dubai_flat_2_small-8bd84575b5bffed657f845e22afca67fc87ca3577923a491215caeb046bf0768.jpg">
                            </figure>
                            <div class="meta">
                                <img alt="Jeffrey &amp; Rosa are happy BookZat MENA region hosts" title="Jeffrey &amp; Rosa are happy BookZat MENA region hosts" src="../../../assets/grey.gif" data-original="/assets/v2/dubai_owner_2-e78950084efd138434e98e3009339ef151ebfd4cf869aa36ae05bc7fd5666ab1.jpg">
                                <p>Rashid</p>
                                <a href="../homes/index.html#home2">Dubai</a>
                            </div>
                        </div>
                        <div data-card-id="2" class="card card-2">
                            <figure>
                                <img alt="Airbnb management service in Mayfair" title="Airbnb management service in Mayfair" src="../../../assets/grey.gif" data-original="/assets/v2/dubai_flat_3_small-a5d01ad70e6d8a23212f825dd2dc8589a7a2192eae84dcbb1a19c7d194aaf211.jpg">
                            </figure>
                            <div class="meta">
                                <img alt="Pierre is a very happy BookZat MENA region host" title="Pierre is a very happy BookZat MENA region host" src="../../../assets/grey.gif" data-original="/assets/v2/dubai_owner_3-2d7134b9fa5e21798f592f8f5b14d239b35c220f8483d00c259ec8e53a5d7952.jpg">
                                <p>Fahad</p>
                                <a href="../homes/index.html#home3">Dubai</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="dots">
                        <span data-card-id="0" class="select-card active"></span>
                        <span data-card-id="1" class="select-card"></span>
                        <span data-card-id="2" class="select-card"></span>
                    </div>
                    <div data-card-id="0" class="card-desc">
                        <p>“BookZat took care of absolutely everything. From the moment I first reached out, they have been very helpful and effective with everything from taking pictures to communicating with guests. I would highly recommend them!”
                        </p>
                        <h5>Sami</h5>
                        <a href="../homes/index.html#home1">Dubai</a>
                    </div>
                    <div data-card-id="1" class="card-desc hidden">
                        <p>“BookZat helps me keep an eye on my properties while I’m thousands of kilometers away. They saved me a lot of hassle trying to find individual cleaners and caretakers, and I don’t have to worry about calendar mix-ups and days off – it’s all taken care of!”
                        </p>
                        <h5>Rashid</h5>
                        <a href="../homes/index.html#home2">Dubai</a>
                    </div>
                    <div data-card-id="2" class="card-desc hidden">
                        <p>“Thanks to BookZat I can profit off the apartment I own, without having to worry about checking in guests and arranging a helper to clean the apartment every time. BookZat took care of everything, and were quick to answer any questions I had”
                        </p>
                        <h5>Fahad</h5>
                        <a href="../homes/index.html#home3">Dubai</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <a class="action" href="../homes/index.html">Read more about the Dubai homes we manage</a>
    </div>
</section -->

<section class="management-section">
    <div class="container">
        <p class="section-title text-center">Frequently Asked Questions</p>
        <div class="divider"></div>
        <div class="row faq">
            <div class="col-md-6 block">
                <p>With over 40,000 properties available for booking, Dubai&#39;s vacation rental market is one of the biggest in Europe. Favoured by tourists and business travelers alike, these properties enjoy high and ever-increasing levels of occupancy year-round.</p>
                <a class="faq" href="index.html#" data-faq="faq1">
                    <img alt="How much does Airbnb Management cost?" src="../../../assets/grey.gif" data-original="../../../assets/icons/question.png">
                    <span>How much does Airbnb Management cost?</span>
                </a>
                <div class="answ answ-opened" data-faq="faq1"><p>BookZat offers homeowners two ways to earn income from their homes:</p> <ol>
                        <li><strong>Percentage Service Fee</strong> - Homeowners will pay a fee from 12% of their rental income for the Airbnb management services. There will be additional charges for cleaning and laundry services.</li>
                        <li><strong>Fixed Income Guarantee</strong> - Homeowners will be given a pre-determined monthly income from their short term rentals. Every month, BookZat will pay homeowners a defined amount based on your property and unique pricing method. GuestReady understands the value of your property on Airbnb and we are confident to give you a fixed monthly rent.</li>
                    </ol>
                </div>
                <a class="faq" href="index.html#" data-faq="faq2">
                    <img alt="My property is not on Airbnb, can I use BookZat?" src="../../../assets/grey.gif" data-original="../../../assets/icons/question.png">
                    <span>My property is not on Airbnb, can I use BookZat?</span>
                </a>
                <div class="answ answ-opened" data-faq="faq2"><p>Most definitely! As long as you are keen on exploring short term rentals for your home, we will help you do the necessary. Get your home on Airbnb through GuestReady in <a href="../how-it-works/index.html">3 simple steps</a>.</p>
                </div>
            </div>
            <div class="col-md-6 block">
                <p>Whether you own a studio in Chorlton or a charming walk-up in Castlefield, our bespoke property management solutions are the best way to earn some  extra income, and to be part of the increasingly vibrant tourism industry of Dubai.</p>
                <a class="faq" href="index.html#" data-faq="faq3">
                    <img alt="How can I earn more from my rental property through BookZat?" src="../../../assets/grey.gif" data-original="../../../assets/icons/question.png">
                    <span>How can I earn more from my rental property through BookZat?</span>
                </a>
                <div class="answ answ-opened" data-faq="faq3"><p>We have developed a unique pricing strategy that takes into consideration factors such as location, number of bedrooms, historical pricing data and many more factors to maximize your revenue per booking.</p>
                </div>
                <a class="external-link" href="../faq/index.html">
                    <img alt="You have other questions? Go to FAQ" src="../../../assets/grey.gif" data-original="../../../assets/icons/question.png">
                    <span>You have other questions? Go to FAQ</span>
                </a>        </div>
        </div>
    </div>
</section>

<section class="refer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="refer">
                    <h4>Make 1000 AED by introducing us to a new host. They’ll thank you, we promise!</h4>
                    <a class="btn btn-orange" href="/referral">Refer a Host – Earn 1000 AED</a>
                </div>
            </div>
        </div>
    </div>
</section>

@if (!Auth::check())
<section class="subscribe-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="mc_embed_signup">
                    <form action="//GuestReady.us13.list-manage.com/subscribe/post?u=e5cb2dca535631d35814c76ea&amp;id=798f8399da" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <h4>Sign up for our <span>newsletter</span></h4>
                        <input type="email" name="EMAIL" placeholder="Enter your e-mail address" id="mce-EMAIL">
                        <input type="submit" id="mc-embedded-subscribe" value="Sign Up">

                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div><!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_2d9367408e0f70bb0fef9928b_457cfa8179" tabindex="-1" value=""></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endif


<section class="why-guestready-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h1 text-center">Why use BookZat?</h2>
            </div>
            <div class="col-sm-4 text-center feature">
                <img alt="Increase your Rental income" src="../../../assets/grey.gif" data-original="../../../assets/icons/icon6.png">
                <h2 class="h4">Increase your Rental income</h2>
                <p>Make up to 100% more money by renting out short term. We will optimise your Airbnb listing, pricing and occupancy</p>
            </div>
            <div class="col-sm-4 text-center feature">
                <img alt="Hassle free hosting" src="../../../assets/grey.gif" data-original="../../../assets/icons/icon3.png">
                <h2 class="h4">Hassle free hosting</h2>
                <p>We take care of everything from managing your listing to cleaning, laundry, maintenance and much more</p>
            </div>
            <div class="col-sm-4 text-center feature">
                <img alt="Your home is in good hands" src="../../../assets/grey.gif" data-original="../../../assets/icons/icon3.png">
                <h2 class="h4">Your home is in good hands</h2>
                <p>Our local experts will take good care of your property, screen the guests and welcome them personally</p>
            </div>
        </div>
    </div>
</section>

<section class="guestready-blog-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="posts">
                    <a class="post" style="background-image: url('../../../assets/icons/2-1.png')" href="../../../blog/airbnb-long-stay/index.html">
                        <div class="info">
                            <h3>The benefits of guests who stay longer: attracting long-term bookings</h3>
                            <span>If you have been an Airbnb host for a little while you will understand the amount of effort that goes…</span>
                        </div>
                    </a>              <a class="post" style="background-image: url('../../../assets/icons/2-2.png')" href="../../../blog/airbnb-pet-friendly/index.html">
                        <div class="info">
                            <h3>Pets and Airbnb: Making a pet-friendly Airbnb work</h3>
                            <span>What happens when you have an overly friendly dog and want to rent your spare room out on Airbnb? Or…</span>
                        </div>
                    </a>              <a class="post" style="background-image: url('../../../assets/icons/2-3.png')" href="../../../blog/airbnb-as-tenant-landlord-sublet/index.html">
                        <div class="info">
                            <h3>A tenant’s guide to renting your space on Airbnb</h3>
                            <span>Fancy a few months abroad without having to say goodbye to your much-loved rental property? How can you keep your…</span>
                        </div>
                    </a>          </div>
            </div>
        </div>
    </div>
</section>


@endsection



