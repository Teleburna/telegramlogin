@extends('app')

@section('navbar')
    <li><a href="/faq">FAQ</a></li>
    <li><a href="/docs">Documentation</a></li>
    @if(Auth::user())
        <li><a href="/dashboard">Dashboard</a></li>
    @endif
@endsection

@section('content')
    <div class="hero">
        <div class="logo">
            <i class="fa fa-6 fa-key logo-key"></i>
        </div>
        <h1>TelegramLogin</h1>
        <div class="text-muted"><small>(unofficial)</small></div>
    </div
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Authenticate users via Telegram Messenger</h2>
            </div>
        </div
    </div>
    <div class="container mtl mbl">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3>Features</h3>
            </div>
        </div>
        <div class="row mtl">
            <div class="col-sm-4 text-center">
                <i class="fa fa-paper-plane fa-4x"></i>
                <h4>Telegram Messenger</h4>
                <p class="text-left">Let users authenticate with the official Telegram Messenger,
                either on Mobile or Desktop devices.</p>
            </div>
            <div class="col-sm-4 text-center">
                <i class="fa fa-puzzle-piece fa-4x"></i>
                <h4>Easy Integration</h4>
                <p class="text-left">TelegramLogin conforms to the <a href="http://openid.net/connect/" taret="_blank">OpenID Connect</a> specification.
                Register your webservice on TelegramLogin and get started with hands-on examples in our <a href="/docs">docs</a> section.</p>
            </div>
            <div class="col-sm-4 text-center">
                <i class="fa fa-sliders fa-4x"></i>
                <h4>Full control</h4>
                <p class="text-left">Users have full control which services they give access to.
                They can easily revoke access from a service directly from Telegram Messenger.</p>
            </div>
        </div>
    </div>
    <!-- <div class="container mbl mtl">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3>Used and trusted by</h3>
            </div>
        </div>
        <div class="row mtl">
            <div class="col-sm-4 col-sm-offset-2 text-center">
                <a href="https://orat.io" target="_blank">
                    <img src="https://orat.io/img/logo.png" alt="orat.io - Connecting businesses and customers through messengers">
                </a>
            </div>
            <div class="col-sm-4 text-center">
                <a href="https://orat.io" target="_blank">
                    <img src="https://orat.io/img/logo.png" alt="orat.io - Connecting businesses and customers through messengers">
                </a>
            </div>
        </div>
    </div> -->
@endsection