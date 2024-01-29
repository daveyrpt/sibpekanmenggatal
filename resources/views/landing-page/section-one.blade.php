<nav>
    <!-- Authentication Links -->
    @guest
        @if (Route::has('login'))
            <a href="{{ route('login') }}">{{ __('Login') }}</a>
        @endif
        {{--             @if (Route::has('register'))
            <a href="{{ route('register') }}">{{ __('Register') }}</a>
        @endif --}}
    @else
        <a href="{{ route('home.index') }}">Dashboard</a>
    @endguest
    <a href="#section-2">About</a>
    <a href="#section-3">Donate</a>
    <a href="#section-6">Contact</a>
</nav>

<section>
    <h3 class="fst-italic font-main-color fw-bold">Welcome to SIB Church</h3>
    <div class="col-md-8 text-center">
        <h2 class="title mb-5">Be happy for this moment. This moment <span
                class='fst-italic font-main-color'>is</span> your life.</h2>
        <a href="{{ route('register') }}" class='button font-white'>Become a member</a>
        <a href='#section-2' class='button font-white'>Read more</a>
    </div>
</section>

<div class="event-countdown d-flex justify-content-center align-items-center">
    <div class="content col-md-8 d-flex justify-content-center align-items-center">
        <div class="content">
            <p class="text-start lh-1 mt-2">BIBLE STUDY</p>
            <p class="text-start lh-1">At this group (adults ages 50+), we meet to enjoy relationships, have a Bible
                study, and do a variety of other activities.</p>
        </div>

        <div class="countdown">
            <div class="countdown-item" id="days"><span>0</span> Days</div>
            <div class="countdown-item" id="hours"><span>10</span> Hours</div>
            <div class="countdown-item" id="minutes"><span>54</span> Minutes</div>
            <div class="countdown-item" id="seconds"><span>43</span> Seconds</div>
        </div>

        <a href="" id="btn-event-details" class="text-center col-md-2">Event Details</a>
    </div>
</div>
