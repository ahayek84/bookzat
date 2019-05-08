@extends('layout.site')
@section('content')
    
<div class="section-price-tables">
  <div class="container">
    <h1 class="site-title">Personalized Airbnb management, at the right price</h1>
    <div class="divider"></div>
    <div class="medium-title text-center">
      BookZat’s flexible pricing options are tailored to meet your needs.<br/>
Simply choose the option that suits your needs and preferences

      <div class="no-fees">
        Unlike many competitors, BookZat charges <strong>no signup and on-boarding fees</strong>!
        <div class="small"><p></p></div>
      </div>
    </div>
    <div class="price-table">
          <div class="row">
    <div class="col-md-4 text-center">
      <div class="table-block">
        <div class="price-column">
          <div class="table-columns">
            <h2>Set Up Fee</h2>
            <div class="price-title">
              <strong>FREE</strong>
            </div>
          </div>
          <h4>Includes:</h4>
<ul>
  <li>Professional photography</li>
  <li>Styling</li>
  <li>Listing Creation</li>
  <li>DTCM compliance</li>
</ul>

        </div>
        <a class="btn btn-primary" href="/register">Get started</a>
      </div>
    </div>

    <div class="col-md-4 text-center">
      <div class="table-block">
        <div class="price-column">
          <div class="table-columns">
            <h2>BASIC</h2>
            <div class="price-title">
              <strong>17%</strong>
            </div>
          </div>
          <h4>Includes:</h4>
<ul>
  <li>BookZat App with host dashboard</li>
  <li>Multichannel marketing</li>
  <li>Screening of guests</li>
  <li>Luxury toiletries</li>
  <li>24/7 guest support</li>
  <li>Calendar and price management</li>
  <li>5-star quality housekeeping</li>
  <li>Free lockbox installation</li>
  <li>Property maintenance</li>
</ul>

        </div>
        <a class="btn btn-primary" href="/register">Get started</a>
      </div>
    </div>

    <div class="col-md-4 text-center">
      <div class="table-block active">
        <div class="price-column">
          <div class="table-columns">
            <h2>PREMIUM</h2>
            <div class="price-title">
              <strong>20%</strong>
            </div>
          </div>
          <h4>Includes:</h4>
<h6 class="basic-package">All services<br> included in<br> Basic Plan</h6>
<ul>
  <li>Personal check-in service</li>
  <li>Assistance with property insurance</li>
  <li>Restocking of home essentials</li>
  <li>Luxury hotel quality linen & towels</li>
  <li>Free on-call maintenance checks</li>
  <li>Guest welcome packs</li>
</ul>

          <h5>*Most popular option</h5>
        </div>
        <a class="btn btn-primary" href="/register">Get started</a>
      </div>
    </div>
  </div>


    </div>
  </div>

  <div class="container text-center">
    <h4 class="small">Not sure which option suits your needs or interested in extra services: furnishing assistance,interior design and utility bill payments?</h4>
    <p class="medium-title">
      <a href="/register">Get in touch</a> to discuss your property and schedule with one of our local professionals.
    </p>
  </div>
</div>
<!--
<div class="small-white-jmb">
  <div class="section-calculator-grey">
    <div class="container text-center">
        <div class='price-calculator inline'>
  <h2 class='h3 header'><img alt="Find out how much you can earn on Airbnb with your property in Dubai:" src="../../../assets/wallet_icon-96174ff7ee246b09ea770c152ea7d1810fdcc49588baf38dc5b8e964c6161e64.png" />Find out how much you can earn on Airbnb with your property in Dubai:</h2>
  <form class="simple_form new_price_calculator" id="new_price_calculator" novalidate="novalidate" action="/en/dubai/price_calculator/?landing=false&amp;wrapper=inline" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
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
</div></div>
      <div class="form-group email required price_calculator_email"><label class="control-label email required" for="price_calculator_email"><abbr title="required"></abbr> Email address</label><div class="input-group">
        <div class="input-group-addon shortcut"><i class="fa fa-envelope-o"></i></div>
        <input class="string email required form-control" placeholder="Email address" type="email" name="price_calculator[email]" id="price_calculator_email" /></div></div>
      <input type="submit" name="commit" value="Calculate" data-disable-with="Calculating" class="btn btn-primary" />
</form></div>

      <p class="jumbotron-info">
        <img alt="info-icon-blue.png" src="../../../assets/grey.gif" data-original="/assets/v2/info-icon-blue-d4c04e404c572e5dc6a882574e4c19c87f362a6b59908b99521a7613a48545d5.png">
        <span>Enter your email to instantly receive the results and by doing so you agree with our <a href="../terms/index.html">Terms & Conditions</a> and we will keep you informed in a compliance with our <a href="../privacy/index.html">Privacy Policy</a>.</span>
      </p>
    </div>
  </div>
</div>

  <section class="refer-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="refer">
            <h4>Make 1000 AED by introducing us to a new host. They’ll thank you, we promise!</h4>
            <a class="btn btn-orange" href="../referral-programme/index.html">Refer a Host – Earn 1000 AED</a>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="subscribe-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="mc_embed_signup">
          <form action="//BookZat.us13.list-manage.com/subscribe/post?u=e5cb2dca535631d35814c76ea&amp;id=798f8399da" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <h4>Sign up for our <span>newsletter</span></h4>
            <input type="email" name="EMAIL" placeholder="Enter your e-mail address" id="mce-EMAIL">
            <input type="submit" id="mc-embedded-subscribe" value="Sign Up">

            <div id="mce-responses" class="clear">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
            </div>

            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_2d9367408e0f70bb0fef9928b_457cfa8179" tabindex="-1" value=""></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
    -->

@endsection