@extends('website.layout.app')

@section('title')
    <title>Privacy Policy</title>
@endsection

@section('header')
    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                   start header                                   --}}
    {{-- * -------------------------------------------------------------------------------- --}}
    <section id="cta" class="section section top_header">
        <img  class="w-100 h-100" src="https://www.lagunaresorts.com/wp-content/uploads/2016/02/privacy_policy.jpg" alt="">
        <div class="button_home  p-1">
            <a href="{{ route('home') }}"> <button type="button" class="btn btn-primary rounded-pill" >Back to home </button> </a>
         </div>
    </section>
    {{-- * -------------------------------------------------------------------------------- --}}
    {{-- *                                    end header                                    --}}
    {{-- * -------------------------------------------------------------------------------- --}}
@endsection

@section('content')
    <section id="cta" class="section ">

        {{-- * -------------------------------------------------------------------------------- --}}
        {{-- *                                   start content                                  --}}
        {{-- * -------------------------------------------------------------------------------- --}}

        <div class="container " id="container_contact">
            <div class="row">
                <div class="col-12 text-center p-4">
                    <h2 style="color: black">
                        Privacy Policy
                    </h2>
                </div>

                <div class="col-12 col-lg-12  wow bounce" data-wow-delay="0.2s">
                    <h5 class="text-center">
                      Thank you for visiting https://manhattan-nycwalk.com (the "manhattan-nycwalk.com").<br>Your privacy is important to us, and we are committed to protecting it. This Privacy Policy explains how we collect, use, and disclose information when you use our Website.    
                    </h5>
                </div>
                

              <div class="row">

                    <h3 class="col-12 col-lg-12  wow bounce">
<br>
<br>
                        Information We Collect
                    </h3>

                <div class="col-12 col-lg-12" data-wow-delay="0.2s">
                    <p>
                         <b>We may collect personal information from you in various ways when you interact with our Website. This information may include:</b>
                    </p>
                </div>
                <div class="col-12 col-lg-12" data-wow-delay="0.2s">
                    <li>
                        <b> Log Data:</b>  Like many websites, we collect information that your browser sends whenever you visit our Website. This log data may include your IP address, browser type and version, the pages of our Website that you visit, the time and date of your visit, the time spent on those pages, and other statistics.
                    </li>
                    <li>
                        <b>Cookies:</b>  We may use cookies to enhance your experience on our Website. Cookies are files with a small amount of data that are sent to your browser from a website and stored on your device's hard drive. You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent.
                    </li>
                </div>
                
                    <h3 class="col-12 col-lg-12  wow bounce">
                    <br>
                    <br>
                    How We Use Information

                    </h3>
                    <div class="col-12 col-lg-12" data-wow-delay="0.2s">

                        <b>We may use the information we collect from you for various purposes, including:</b>  
                    </div>                        
                    <div class="col-12 col-lg-12" data-wow-delay="0.2s">
                    <li>
                    To improve our Website: We may use feedback you provide to improve our products and services.
                    </li>
                    <li>
                    To personalize user experience: We may use information in the aggregate to understand how our users as a group use the services and resources provided on our Website.<br>
                    </li>
                    <li>
                    To send periodic emails: We may use the email address you provide to respond to your inquiries, questions, and/or other requests.
                    </li>
                </div>
                
                    <h3 class="col-12 col-lg-12  wow bounce">
                    <br>
                    <br>
                    Information Sharing and Disclosure

                    </h3>
            <div class="col-12 col-lg-12" data-wow-delay="0.2s">
                We do not sell, trade, or rent your personal identification information to others. We may share generic aggregated demographic information not linked to any personal identification information regarding visitors and users with our business partners, trusted affiliates, and advertisers for the purposes outlined above.
                
                Changes to This Privacy Policy
                
                We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page. You are advised to review this Privacy Policy periodically for any changes.
                    </div>
                    
                    
                    <h3 class="col-12 col-lg-12  wow bounce">
                    <br>
                    <br>
                    Contact Us
                    </h3>
                
<div class="col-12 col-lg-12" data-wow-delay="0.2s">


If you have any questions about this Privacy Policy, please contact us via email at info@manhattan-nycwalk.com.
<br>
<br>
</div>
        </div>
        </div>

        {{-- * -------------------------------------------------------------------------------- --}}
        {{-- *                                    end content                                   --}}
        {{-- * -------------------------------------------------------------------------------- --}}

    </section>
@endsection
