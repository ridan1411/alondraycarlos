{{-- Dress Code --}}
    <div id="fh5co-services" class="fh5co-section-gray" style="background-color: rgba(218, 215, 210, 1);">
        <div id="codigovestimenta" class="container">

            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading" style='margin-bottom: 5px;'>
                    <h2 class="d_title" style="color: #819269 !important;">Código de Vestimenta</h2>
                </div>
            </div>

            <div class="row">
                <div class="animate-box text-center">
                    <div class="col-md-12">
                        <div>
                            <h4>{{$information->dress_code_type}}</h4>
                            <p>
                                {{$information->dress_code_observations}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="animate-box text-center">
                    <div class="col-md-12">
                        <div class="animate-box" style="margin: 20px 0px">
                            <img class="img-fluid" src="{{ asset('storage/' . $images->dress_code) }}" alt="" style="max-width: 90%;">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
{{-- Dress Code --}}
