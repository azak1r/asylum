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
                
                
                    <h1 class="h1">Blank Page</h1>
                
                
                
            </div>
        </div>
    </div>
</div>

<div class="youplay-content container">
    <h2 class="mt-0">Title</h2>
    <p>
        Start your new page here...
    </p>
</div>
@stop