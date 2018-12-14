@extends('layouts.master')
@section('title','Bayilik Kaydol')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Kaydol</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST"
                              action="{{route('bayilik.bayilikkayit')}}">
                            {{ csrf_field() }}
                            <meta charset="utf-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1">
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            <div class="form-group ">
                                <label for="magazaadi"
                                       class="col-md-4 control-label {{ $errors->has('magazaadi') ? 'has-error': '' }}">Mağaza
                                    Adı</label>
                                <div class="col-md-6">
                                    <input id="magazaadi" type="text" class="form-control" name="magazaadi"
                                           value="{{ old('magazaadi') }}" autofocus>
                                    @if($errors->has('magazaadi'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('magazaadi') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email"
                                       class="col-md-4 control-label {{ $errors->has('email') ? 'has-error': '' }}">Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email"
                                           value="{{ old('email') }}">
                                    @if($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sifre" class="col-md-4 control-label">Şifre</label>
                                <div class="col-md-6">
                                    <input id="sifre" type="password" class="form-control" name="sifre">
                                    @if($errors->has('sifre'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sifre') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Şifre (Tekrar)</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="sifre_confirmation">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-md-4 control-label ">Telefon Numarası</label>
                                <div class="col-md-6">
                                    <input id="phone" type="tel" class="form-control" name="phone"
                                           value="{{ old('phone') }}">
                                    @if($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="uyelik" class="col-md-4 control-label">Üyelik Türü</label>
                                <div class="col-md-6">
                                    <INPUT type="radio"   name="uyelik"
                                           value="Sahis" {{(old('uyelik')=='Sahis') ? 'checked' : null}}>
                                        <label for="uyelik">Şahıs</label>
                                        <INPUT type="radio" name="uyelik"
                                               value="Sirket" {{(old('uyelik')=='Sirket') ? 'checked' : null}}>
                                            <label for="uyelik">Şirket</label>
                                        </INPUT>
                                    </INPUT>
                                    @if($errors->has('uyelik'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('uyelik') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-2">
                                    <div class="chk_label"><input type="checkbox" name="legalbox" value="false">
                                        Stilim <a onclick="privacyPolicyWindow();" title="Takım Öncülüğü"
                                                  style="font-size:15px; color:#e59686; ;text-decoration: none;cursor:pointer">İş
                                            Birliği ve İlan Sözleşmesi Koşullarını </a>
                                        'nı okudum ve kabul ediyorum
                                    </div>
                                    @if($errors->has('legalbox'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('legalbox') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Üye Ol
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
