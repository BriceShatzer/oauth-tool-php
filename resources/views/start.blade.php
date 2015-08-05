@extends('layouts.master')

@section('content')
<section>
    <div class="row">
        <div class="small-12 columns">
            <h1>Begin OAuth Authentication Flow</h1>

            @if (count($errors) > 0 || session('message'))
            <div data-alert class="alert-box warning">
                <ul>
                    @if (session('message'))
                    <li>{{ session('message') }}</li>
                    @endif
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="panel">
                <ul class="tabs" data-tab>
                    <li class="tab-title active">
                        <a href="#oauth1">
                            <figure><img src="/assets/oauth-logo.png" alt="OAuth logo" /></figure>
                            <h5>OAuth 1</h5>
                        </a>
                    </li>
                    <li class="tab-title">
                        <a href="#oauth2">
                            <figure><img src="/assets/oauth-2-logo.png" alt="OAuth 2 logo" /></figure>
                            <h5>OAuth 2</h5>
                        </a>
                    </li>                
                </ul>
                <div class="tabs-content">

                    <div class="content active" id="oauth1">
                        <form method="post" action="{{ route('auth.redirect') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <label>Provider</label>
                            <select name="protocol_provider">
                                @foreach ($protocols["oauth1"] as $provider)
                                    <option value="{{$provider}}">{{$provider}}</option>
                                @endforeach
                            </select>  
                            <label>client key</label>
                            <input type="text" name="key" value="{{ old('key') }}" />
                            <label>client secret</label>
                            <input type="text" name="secret" value="{{ old('secret') }}" />
                            <label>scopes (comma separated)</label>
                            <input type="text" name="scopes" value="{{ old('scopes') }}" />
                            <input type="submit" value="begin" class="button" />
                        </form>                    
                    </div>

                    <div class="content" id="oauth2">
                        <form method="post" action="{{ route('auth.redirect') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <select name="protocol_provider">
                                @foreach ($protocols["oauth2"] as $provider)
                                    <option value="{{$provider}}">{{$provider}}</option>
                                @endforeach   
                            </select>
                            <label>client key</label>
                            <input type="text" name="key" value="{{ old('key') }}" />
                            <label>client secret</label>
                            <input type="text" name="secret" value="{{ old('secret') }}" />
                            <label>scopes (comma separated)</label>
                            <input type="text" name="scopes" value="{{ old('scopes') }}" />
                            <input type="submit" value="begin" class="button" />
                        </form>
                    </div>    
                </div>

            </div>

        </div>
    </div>
</section>
@endsection
