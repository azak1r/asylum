@extends('layouts.main')
@section('title', 'Landing')

@section('content')
<section class="youplay-banner banner-top youplay-banner-parallax full">
    
        <div class="image" data-speed="0.4">
            <img src="{{ asset('images/wow_classic.png') }}" alt="" class="jarallax-img">
        </div>
    

    <div class="info">
        <div>
            <div class="container">
                
                
                
                    
    <div class="text-center">
        <img src="{{ asset('images/wow-classic-logo.png') }}" alt="">
        <h2>World wide release</h2>

        <br><br>

        <!-- See countdown init in bottom of the page -->
        <div class="countdown h2" data-end="2019-08-25 00:00" data-timezone="PDT"></div>

        <br><br>
    </div>

                
                
            </div>
        </div>
    </div>
</section>
@stop

@section('script')
<script>
    $(".countdown").each(function() {
        var tz = $(this).attr('data-timezone');
        var end = $(this).attr('data-end');
            end = moment.tz(end, tz).toDate();
        $(this).countdown(end, function(event) {
            $(this).html(
                event.strftime([
                    '<div class="countdown-item">',
                        '<span>Days</span>',
                        '<span><span>%D</span></span>',
                    '</div>',
                    '<div class="countdown-item">',
                        '<span>Hours</span>',
                        '<span><span>%H</span></span>',
                    '</div>',
                    '<div class="countdown-item">',
                        '<span>Minutes</span>',
                        '<span><span>%M</span></span>',
                    '</div>',
                    '<div class="countdown-item">',
                        '<span>Seconds</span>',
                        '<span><span>%S</span></span>',
                    '</div>'
                ].join(''))
            );
        });
    });
</script>
@stop