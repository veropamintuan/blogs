@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default bd-rad0 box-shadow panel-bg">
                <div style="height: 20px;" class="bgc-red mg0"></div>
                <div class="panel-body pdh45">
                    <div class="mgb20">
                        <div class="row">
                            <div class="col-sm-6">
                                <span class="fs40">My Posts</span>
                            </div>
                            <div class="col-sm-4 col-sm-offset-2 mgt10">
                            <form action="{{ route('myposts.sortBy',Auth::user()->id) }}" method="get">
                                <div class="box-shadow">
                                    <select class="form-control input-sm bd-rad0" name="key" onchange="this.form.submit()">
                                        <option disabled selected>Sort By</option>
                                        <option value="date">Date</option>
                                        <option value="name">Name</option>
                                        <!-- <option value="3">Popularity</option> -->
                                    </select>
                                </div>
                            </form>
                            </div>
                        </div>
                        <div style="height: 2px;" class="bgc-red mg0"></div>
                    </div>
                    @if(!$users->isEmpty())
                    @foreach($users as $user)
                    <div class="row mgb20">
                        <div class="col-md-12">
                            <a href="{{ route($user->category.'.show', $user->id) }}"><span class="dp-bl fs25 fc-red">{{ $user->title }}</span></a>
                            <span class="text-muted">Author: </span>{{ $user->user }} <span class="text-muted mgl10">Posted: </span>{{ date_format($user->created_at, 'F d, Y') }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('/img/uploads/' . $user->image) }}" class="img-responsive img-thumbnail">
                        </div>
                        <div class="col-md-8">
                            {{ strip_tags(substr($user->body,0,400)) }}...
                        </div>
                    </div>
                    <div style="height: 1px;" class="bgc-gray mgv20"></div>
                    @endforeach
                    @else
                    Nothing posted.
                    @endif
                    
                </div>
            </div>        
        </div>
    </div>
</div>
@endsection