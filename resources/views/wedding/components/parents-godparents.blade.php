{{-- Parents and Godparents --}}
    <div id="fathers" class="fh5co-section-gray" style="margin-top: .2rem;">
        <div class="container" style="margin-bottom: 22px;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center animate-box fadeInUp animated-fast" style="margin-bottom: -30px;">
                    <br><br>
                    <p id="margin-none" class="mt-5 mb-1">&nbsp;</p>
                    <h2 class="d_title" style="font-size: 26px;">Nos Acompañan
                    </h2>
                </div>
            </div>
        </div>
        @foreach ($vip as $v)
            <div class="container">
                <div class="row">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <p class="mb-2" style="font-size: 18px;">
                                <strong>{{$v->category}}</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row animate-box card-wrap" style="margin-left: 5px; margin-right: 5px;">
                    @foreach ($persons as $p)
                        @if ($p->vip_id == $v->id)
                            <div class="card mb-2 me-1">
                                <div class="text-center">
                                    <div class="card-body">
                                        <h4 class="card-title"> {{$p->name}} </h4>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
{{-- Parents and Godparents --}}
