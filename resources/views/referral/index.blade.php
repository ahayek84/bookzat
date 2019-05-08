@extends('layout.site')
@section('content')
      <div class="jumbotron">
    <div class="container">
      <h1>Make 1000 AED by introducing us to a new host. They’ll thank you, we promise!</h1>
      <div class="row">
        <div class="col-md-8">
          <h2 class="subheading">“A joy that’s shared is a joy made double” - Proverbs</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="container referral">
    <div class="text-center">
      <h2>Refer a Friend: earn 1000 AED in our host referral program | BookZat Dubai</h2>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <p><b>BookZat brings you the opportunity to be an awesome friend by introducing our service to your friends and earn up to 1000 AED in cash for every sign-up! And to sweeten the deal, their first booking will be serviced free of charge!</b></p>
<br/>
<b>Benefits</b>
<ol>
  <li>For every Successful Referral of an Eligible Property, you will receive 1000 AED payable on the date of the first check-in managed by BookZat and the rest after 8 weeks of successful hosting.</li>
  <li>The host you refer to us will receive their first booking free of charge.</li>
</ol>

      </div>
    </div>
    <div class="row referral-program-container">
      <div class="col-md-8 col-md-offset-2 referral-program-show">
        <a class="btn btn-lg btn-block btn-primary" href="javascript:;">I want referral link for my friend, he&#39;ll give you all information</a>
      </div>
      <div class="col-md-8 col-md-offset-2 referral-program-form" style="display: none;">
        <form class="simple_form new_referrals_program" id="new_referrals_program" novalidate="novalidate" action="/en/dubai/referrals/programs/" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
  <div class="row">
    <div class="col-md-6">
      <div class="form-group string required referrals_program_full_name"><label class="control-label string required" for="referrals_program_full_name"><abbr title="required"></abbr> Your name(*)</label><input class="form-control string required" type="text" name="referrals_program[full_name]" id="referrals_program_full_name" /></div>
    </div>
    <div class="col-md-6">
      <div class="form-group email required referrals_program_email"><label class="control-label email required" for="referrals_program_email"><abbr title="required"></abbr> Your email(*)</label><input class="form-control string email required" type="email" name="referrals_program[email]" id="referrals_program_email" /></div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="form-group phone required referrals_program_phone"><label class="control-label phone required" for="referrals_program_phone"><abbr title="required"></abbr> Your phone(*)</label><input class="form-control string phone required phone-validation" type="number" id="referrals_program_phone_national_format" data-hidden-input-id="referrals_program_phone" /><input class="hidden" type="hidden" name="referrals_program[phone]" id="referrals_program_phone" /></div>
    </div>
  </div>
  <div class="actions">
    <input type="submit" name="commit" value="Create referral link" class="btn btn-lg btn-block btn-primary" data-disable-with="Create referral link" />
  </div>
</form>
      </div>
    </div>
    <div class="row referral-form-container">
      <div class="col-md-8 col-md-offset-2">
        <div class="title">Or fill in your friend’s details – we&#39;ll then get in touch to see how our property management services can help them make the most from their property.</div>
        <form class="simple_form new_referrals_application" id="new_referrals_application" novalidate="novalidate" action="/en/dubai/referrals/applications/" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
  <div class="row">
    <div class="col-md-6">
      <div class="form-group string required referrals_application_name"><label class="control-label string required" for="referrals_application_name"><abbr title="required"></abbr> Your name(*)</label><input class="form-control string required" type="text" name="referrals_application[name]" id="referrals_application_name" /></div>
    </div>
    <div class="col-md-6">
      <div class="form-group email required referrals_application_email"><label class="control-label email required" for="referrals_application_email"><abbr title="required"></abbr> Your email(*)</label><input class="form-control string email required" type="email" name="referrals_application[email]" id="referrals_application_email" /></div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group string required referrals_application_friend_name"><label class="control-label string required" for="referrals_application_friend_name"><abbr title="required"></abbr> Friend name(*)</label><input class="form-control string required" type="text" name="referrals_application[friend_name]" id="referrals_application_friend_name" /></div>
    </div>
    <div class="col-md-6">
      <div class="form-group email required referrals_application_friend_email"><label class="control-label email required" for="referrals_application_friend_email"><abbr title="required"></abbr> Friend email(*)</label><input class="form-control string email required" type="email" name="referrals_application[friend_email]" id="referrals_application_friend_email" /></div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group phone required referrals_application_friend_phone"><label class="control-label phone required" for="referrals_application_friend_phone"><abbr title="required"></abbr> Friend phone(*)</label><input class="form-control string phone required phone-validation" type="number" id="referrals_application_friend_phone_national_format" data-hidden-input-id="referrals_application_friend_phone" /><input class="hidden" type="hidden" name="referrals_application[friend_phone]" id="referrals_application_friend_phone" /></div>
    </div>
    <div class="col-md-6">
      <div class="form-group select required referrals_application_city_name"><label class="control-label select required" for="referrals_application_city_name"><abbr title="required"></abbr> City of friend&#39;s property(*)</label><select class="form-control select required" name="referrals_application[city_name]" id="referrals_application_city_name"><option value="">Select a city</option>
<option value="Bordeaux">Bordeaux</option>
<option value="Brighton">Brighton</option>
<option value="Bristol">Bristol</option>
<option value="Cambridge">Cambridge</option>
<option value="Cannes">Cannes</option>
<option value="Dubai">Dubai</option>
<option value="Edinburgh">Edinburgh</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Kuala Lumpur">Kuala Lumpur</option>
<option value="Lisbon">Lisbon</option>
<option value="Liverpool">Liverpool</option>
<option value="London">London</option>
<option value="Lyon">Lyon</option>
<option value="Manchester">Manchester</option>
<option value="Nice">Nice</option>
<option value="Oxford">Oxford</option>
<option value="Paris">Paris</option>
<option value="Porto">Porto</option></select></div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-md-offset-6">
      <div class="form-group string optional referrals_application_friend_area"><label class="control-label string optional" for="referrals_application_friend_area">Area of friend&#39;s property</label><input class="form-control string optional" type="text" name="referrals_application[friend_area]" id="referrals_application_friend_area" /></div>
    </div>
  </div>
  <div class="actions">
    <input type="submit" name="commit" value="Apply" class="btn btn-lg btn-block btn-primary" data-disable-with="Apply" />
  </div>
</form>
      </div>
    </div>
    <div class="row row-content">
      <div class="col-md-8 col-md-offset-2">
        <b>Terms & Conditions</b>
<ol>
<li>For a referral to qualify as a Successful Referral, the new Client referred by you must sign a Full Property Management contract with BookZat and must provide at least 8 weeks of availability for bookings before 31st December 2018, of which at least 4 weeks must be continuous.</li>
<li>The referred property will be listed to accept bookings on websites like Airbnb, HomeAway, etc. as BookZat chooses fit and all guest communication, advertisement, and operations shall be managed directly by BookZat. </li>
<li>An Eligible Property shall be a fully furnished property located within an area that BookZat services, and meets the eligibility criteria of BookZat including but not limited to average daily rate achievable, condition of the property, and any such factors affecting its saleability. The assessment of whether a property qualifies as an Eligible Property rests on the sole discretion of BookZat.</li>
<li>A referee may not benefit from the reward for referring their own principal place of residence, or any other properties otherwise owned by them.</li>
<li>A referral reward may be paid out only once per property, and only to the first person referring the new property to BookZat.</li>
<li>The reward for a successful referral would be transferred to the bank account of the referrer’s choice by bank transfer. You would receive 1000 AED on the date of the first check in and the remainder after 8 weeks of successful hosting.</li>
<li>Any dispute with regards to the referral programme underlined in this document are subject to the jurisdiction of the courts of the Swiss Confederation.</li>
<li>BookZat reserves the right to change, amend, and cancel the terms of this offer at any time without notice. </li>
</ol>

      </div>
    </div>
  </div>

@endsection