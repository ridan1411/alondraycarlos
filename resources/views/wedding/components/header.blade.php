{{-- Header --}}
    <div id="page">
        <header id="fh5co-header" class="fh5co-cover" role="banner" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('storage/' . $images->main_movil) }})">
            <div class="overlay"></div>
            <div class="container">

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="display-t">
                            <div class="display-tc animate-box texto-novios" data-animate-effect="fadeIn">
                                <h1>{{$couples->bride_name}} <br> &amp; <br> {{$couples->groom_name}} </h1>
                                <h2><strong> {{$format_date}} </strong></h2>
                                <input type="hidden" name="event_date" value={{$information->event_date}}>
                                <div id="cuenta" class="simply-countdown simply-countdown-one mb-5"
                                    data-year="{{ $year }}"
                                    data-month="{{ $month }}"
                                    data-day="{{ $day }}"
                                    data-hours="{{ $hours }}"
                                    data-minutes="{{ $minutes }}"
                                    data-seconds="{{ $seconds }}"
                                >

                                </div>
                                <!-- aqui uno -->
                                <!--link agenda google calendar-->
                                <!--<p><a target="_blank" href="https://calendar.google.com/event?action=TEMPLATE&tmeid=NzZjM2ljOGM5Z3V2Z2IzcGs2NGcwaW0xYWEgaW12cWczM2sya2owM3FsbzFpOTdpNzI3NzRAZw&tmsrc=imvqg33k2kj03qlo1i97i72774%40group.calendar.google.com" class="btn btn-default btn-sm">Save the date</a></p>-->
                                <!--link agenda google calendar-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
{{-- Header --}}
