@extends('layouts.master')
@section('title','Profili Güncelle')
@section('content')
  @include('layouts.partials.alert')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Kaydol</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
                              action="{{ route('kullanici.guncelle') }}">
                            {{ csrf_field() }}
                            <meta charset="utf-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1">
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            <div class="form-group {{ $errors->has('') ? 'has-error': '' }}">
                                <label for="adsoyad" class="col-md-4 control-label">Ad Soyad</label>
                                <div class="col-md-6">
                                    <input id="adsoyad" type="text" class="form-control" name="adsoyad"
                                           value="{{ old('adsoyad', $kullanici->adsoyad) }}" autofocus>
                                    @if($errors->has('adsoyad'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('adsoyad') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email"
                                       class="col-md-4 control-label {{ $errors->has('email') ? 'has-error': '' }}">Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email"
                                           value="{{ old('email', $kullanici->email) }}">
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
                                           value="{{ old('phone', $kullanici->telefon_no) }}">
                                    @if($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cinsiyet" class="col-md-4 control-label">Cinsiyet</label>
                                <div class="col-md-6">
                                    <INPUT type="radio" id="gender_male" name="gender"
                                           value="Male" {{(old('gender', $kullanici->cinsiyet)=='Male') ? 'checked' : null}}>
                                        <label for="gender_male">Erkek</label>
                                        <INPUT type="radio" id="gender_female" name="gender"
                                               value="Female" {{(old('gender', $kullanici->cinsiyet)=='Female') ? 'checked' : null}}>
                                            <label for="gender_female">Kadın</label>
                                        </INPUT>
                                    </INPUT>
                                            @if($errors->has('cinsiyet'))
                                                <span class="help-block">
                                               <strong>{{ $errors->first('cinsiyet') }}</strong>
                                               </span>
                                            @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dogum_tarihi" class="col-md-4 control-label"> Doğum Tarihi </label>
                                <div class="col-md-6">
                                    <select id="birthDay" name="dogum_gun" class="day">
                                        <option>Gün</option>
                                        @for($i = 1; $i <= 31; $i++)
                                        <option value="{{$i}}" {{(old('dogum_gun', explode('-', $kullanici->dogum_tarihi)[2])==$i) ? 'selected' : null}}>{{$i}}</option>
                                        @endfor
                                    </select>
                                    <select id="birthMonth" name="dogum_ay" class="month">
                                        <option> Ay</option>
                                        @for($i = 1; $i <= 12; $i++)
                                        <option value="{{$i}}" {{(old('dogum_ay', explode('-', $kullanici->dogum_tarihi)[1])==$i) ? 'selected' : null}}>{{$i}}</option>
                                        @endfor
                                    </select>
                                    <select id="birthYear" name="dogum_yil" class="year">
                                        <option>Yıl</option>
                                        @for($i = 2000; $i >= 1920; $i--)
                                        <option value="{{$i}}" {{(old('dogum_yil', explode('-', $kullanici->dogum_tarihi)[0])==$i) ? 'selected' : null}}>{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                @if($errors->has('dogum_gun'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dogum_gun') }}</strong>
                                    </span>
                                    <br>
                                @endif
                                @if($errors->has('dogum_ay'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dogum_ay') }}</strong>
                                    </span>
                                    <br>
                                @endif
                                @if($errors->has('dogum_yil'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dogum_yil') }}</strong>
                                    </span>
                                    <br>
                                @endif
                                <div class="errorMessage" data-errormessagefor="birthDay">
                                    <span class="top-arrow"></span>
                                    <div class="errorText"></div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="fotograf" class="col-md-4 control-label">Fotoğraf Ekle</label>
                                <div class="col-md-6">
                                    <input name="avatar" id="fotograf" type="file" class="form-control"> <BR>
                                    <img id="onizleme" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="max-width: 150px; max-height: 150px;" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Kaydet
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $( document ).ready(function() {
            $("#fotograf").change(function() {
                readURL(this);
            });
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#onizleme').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection
