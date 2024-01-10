{{-- Event Information --}}
    <div id="fh5co-event" class="fh5co-bg event-" style="background-image: url({{ asset('storage/' . $images->event_movil) }})">
        <div class="overlay"></div>
        <div id="cuandodonde" class="container">
            <div class="row">
                <div class="display-t">
                    <div class="display-tc">
                        <div class="col-md-10">
                            <div class="col-md-6 col-sm-6 text-center">
                                <div class="event-wrap animate-box" style="padding: 25px;">
                                    <span><i style="color: #819269;" class="fas fa-church fa-3x"></i></span>
                                    <h3 style="color:black; padding-bottom: 0px !important;">Ceremonia Religiosa
                                    </h3>
                                    <div class="event-col">
                                        <p style="color:black; margin-bottom: 0px;">
                                            {{$event_date}}
                                        </p>
                                        <p style="color:black;">
                                            {{$time_church}}
                                        </p>
                                    </div>
                                    <div>
                                        <i class="icon-location" style="color:#819269;"></i>
                                    </div>
                                    <div>
                                        <p style="color:black;  margin-bottom: 0px;">
                                            {{$information->church}}
                                        </p>
                                        <p style="color:black;">
                                            {{$information->church_adress}}
                                        </p>
                                        <br>
                                    </div>
                                    <div>
                                        <strong>
                                            <p style="margin-bottom: 0px;"><a style="color: #819269;" target="_blank" href="{{$information->church_map_link}}">Google Maps</a></p>
                                        </strong>
                                    </div>
                                    {{-- <div>
                                        <strong><a style="color: #819269; cursor: pointer;" data-toggle="modal" data-target="#parroquiaimg">Foto</a></strong>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 text-center">
                                <div class="event-wrap animate-box" style="padding: 25px;">
                                    <span><i style="color: #819269;" class="fas fa-glass-cheers fa-3x"></i></span>
                                    <h3 style="color:black; padding-bottom: 0px !important;">Evento</h3>
                                    <div class="event-col">
                                        <p style="color:black; margin-bottom: 0px;">
                                            {{$event_date}}
                                        </p>
                                        <p style="color:black;">
                                            {{$time_party}}
                                        </p>
                                    </div>
                                    <div>
                                        <i class="icon-location" style="color:#819269;"></i>
                                    </div>
                                    <div>
                                        <p style="color:black;  margin-bottom: 0px;">{{$information->party}}</p>
                                        <p style="color:black;">{{$information->party_adress}}</p>
                                    </div>
                                    <div>
                                        <strong>
                                            <p style="margin-bottom: 0px;"><a style="color: #819269;" target="_blank" href="{{$information->party_map_link}}">Google Maps</a></p>
                                        </strong>
                                    </div>
                                    {{-- <div>
                                        <strong>
                                            <a style="color: #819269; cursor: pointer;" data-toggle="modal" data-target="#labonitaimg">Foto</a>
                                        </strong>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- Event Information --}}
