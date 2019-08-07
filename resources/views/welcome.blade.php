@extends('layouts.main')
@section('title', 'Landing')

@section('content')
<div class="youplay-banner banner-top youplay-banner-parallax small">
    
        <div class="image" data-speed="0.4">
            <img src="{{ asset('images/background.jpg') }}" alt="" class="jarallax-img">
        </div>
    

    <div class="info">
        <div>
            <div class="container">
                
                
                    <h1 class="h1">Welcome to The Geek Asylum</h1>
                
                
                
            </div>
        </div>
    </div>
</div>

<div class="youplay-content container">
    <h2 class="mt-0">In development</h2>
    <p>
        I am currently working on developing this app. For more information click the join our discord button below. I will however try to maintain a blog on my progress and some of its features that are developed. For now i will add the most recent changelog to this landing page until the blog section is functional. <br /> Current Deployed version: <span style="color:green">0.0.3</span><br><br> <b>// Azak1r AKA Yehee/Joery</b><br><br><br>
        ## [0.0.03] - 2019-08-07<br>
        ### Added<br>
        - BlogEtc package<br>
        - User authentication<br>
        - Login and register forms<br><br>
        
        ### TODO for next version<br>
        - Email Verification of users<br>
        - Password reset functionality<br>
        - Basic ACL for blog entries<br><br>
        
        ### Removed<br>
        - Blog post migration<br>
        - Blog post Model<br>
        - Blog controller<br>
        - Blog routing
    </p>
</div>
@stop