

@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::user()->name }}
        {!! link_to_route('logout.get', 'Logout') !!}</li>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Microposts</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
                {!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}
            </div>
        </div>
    @endif
@endsection