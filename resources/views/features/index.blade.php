@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center wd100P mgb20">
        <span class="fc-gold f-ul fs45">FEATURES</span>
    </div>
    <div class="row mgh0">
        <div class="col-md-4">
            <div class="bgc-lbrown pdv15 text-center">
                <span class="fc-gold fs30 mgb20">ARCHIVE FOR FEATURES</span>
                <ul class="list-unstyled text-left">
                    <li class="fs25 pd15 fc-gold pdl30">2013</li>
                    <li class="fs25 pd15 fc-gold pdl30">2014</li>
                    <li class="fs25 pd15 fc-gold pdl30">2015</li>
                    <li class="fs25 pd15 fc-gold pdl30 bgc-white">2016</li>
                </ul>                
            </div>
        </div>
        <div class="col-md-8 bgc-lbrown mgh0">
        @if($features->isEmpty())
        <div class="alert alert-danger mgt20">
          <strong>Danger!</strong> No features posted.
        </div>
        @else
            @foreach($features as $feature)
            <a href="{{ route('features.show',$feature->id) }}">
                <div class="row bdb-black pdv30 pdh30 bgc-white-hover transition">
                    <div class="col-sm-5 pdl0">
                        <img src="{{ asset('img/uploads/' . $feature->features_img) }}" class="img-responsive">
                    </div>
                    <div class="col-sm-7 pdr0">
                        <span class="dp-bl fc-black fs25 wwrap">{{ $feature->features_title }}</span>
                        <span class="dp-bl fc-black mgv15">Posted by: {{ $feature->feature_user }} | {{ date_format($feature->created_at, 'F d, Y') }}</span>
                        <p class="wwrap fc-black">{{ $feature->features_body }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        @endif
        </div>
    </div>
</div>
@if(Auth::user())
<div class="button-container">
    <a href="{{ route('features.create') }}"><button class="btn btn-primary">Add</button></a>
</div>
@endif
@stop