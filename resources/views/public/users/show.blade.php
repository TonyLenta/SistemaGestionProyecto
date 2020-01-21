@extends('public.layouts.app')

@section('page_header')
    @include('public.partials.page_header',[
        'title' =>  'Ver perfil'
    ])
@endsection

@section('content')
   
<div class="container">
<div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Perfil de {{ $user->name }}</h3>
                <div class="card-options">
                    <a href="{{ route('home') }}" class="btn btn-radius btn-danger-light btn-sm">Regresar</a>
                </div>
            </div>
            <div class="card-body text-center">
                    <span class="avatar avatar-xxl brround cover-image cover-image" data-image-src="{{ $user->avatar ? $user->avatar : Gravatar::get(Auth::user()->email) }}"></span>
                    <h4 class="h4 mb-0 mt-3">{{ $user->name }}</h4>
                    <p class="card-text">{{ $user->getRoleNames()->implode(', ') }}</p>
                    <div class="ml-auto mt-xl-2 mt-lg-0 ml-lg-2">
                            <a href="{{ route('users.edit', $user) }}" class="btn btn-outline-primary btn-sm mt-1 mb-1"><i class="fe fe-camera mr-1"></i>Edit profile</a>
                            <a href="#" class="btn btn-outline-danger btn-sm mt-1 mb-1"><i class="fe fe-camera-off mr-1"></i>Delete profile</a>
                        </div>
            </div>
            <div class="card-body no-padding">
                            <ul class="list-group no-margin">
                                <li class="list-group-item"><i class="icon icon-ghost mr-5"></i> {{ $user->name }}</li>
                                <li class="list-group-item"><i class="icon icon-envelope mr-5"></i> {{ $user->email }}</li>
                                <li class="list-group-item"><i class="icon icon-lock-open mr-5"></i> {{ $user->getRoleNames()->implode(', ') }}</li>
                                <li class="list-group-item"><i class="icon icon-user mr-5"></i> {{ $user->first_name ? $user->first_name : 'No especificado' }} </li>
                                <li class="list-group-item"><i class="icon icon-user mr-5"></i> {{ $user->last_name ? $user->last_name : 'No especificado' }} </li>

                            </ul>									
            </div>
        </div>
    </div><!-- COL END -->
</div>
@endsection