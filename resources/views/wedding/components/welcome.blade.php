{{-- Welcome --}}
    <div id="welcome" class="mt-3 mb-3" style="margin-top: 110px;">
        <div class="container">
            <div class="couple-wrap animate-box row d-flex fadeInUp animated-fast">
                <div class="col couple-half">
                    <div class="groom">
                        <img src="{{ asset('storage/' . $images->bride) }}" class="img-responsive">
                    </div>
                    <div class="desc-groom">
                        <h3 style="margin-bottom: 0px;">{{$couples->bride_name}} </h3>
                    </div>
                </div>
                <p class="heart text-center">
                    <i class="icon-heart2"></i>
                </p>
                <div class="col couple-half">
                    <div class="bride">
                        <img src="{{ asset('storage/' . $images->groom) }}" alt="groom" class="img-responsive">
                    </div>
                    <div class="desc-bride">
                        <h3 style="margin-bottom: 0px;">{{$couples->groom_name}} </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- Welcome --}}
