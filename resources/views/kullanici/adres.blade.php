@extends('layouts.master')
@section('title','Adres ')
@section('content')
    @include('layouts.partials.alert')
    <div class="conteiner-fluid" >
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Yeni Adres Ekle</div>
                    <div class="panel-body">
                        <form method="post" action="{{route('kullanici.adres')}}">
                            <div class="form-group">
                                <label for="adres_basligi">Adres Başlığı </label>
                                <input type="text" class="form-control" id="adres_basligi" name="adres_basligi" value="{{old('adres_basligi')}}"  placeholder="Adres Başlığı">
                                @if($errors->has('adres_basligi'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('adres_basligi') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="adsoyad">Ad Soyad  </label>
                                <input type="text" class="form-control" id="adsoyad" name="adsoyad" value="{{old('adsoyad')}}"   placeholder="Ad Soyad ">
                                @if($errors->has('adsoyad'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('adsoyad') }}</strong>
                                </span>
                                @endif
                            </div>


                            <div class="form-group">
                                <label for="sehir">Şehir </label>
                                <input type="text" class="form-control" id="sehir" name="sehir" value="{{old('sehir')}}"   placeholder="Şehir ">
                                @if($errors->has('sehir'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('sehir') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="ilce">ilçe </label>
                                <input type="text" class="form-control" id="ilce" name="ilce" value="{{old('ilce')}}"   placeholder="ilce ">
                                @if($errors->has('ilce'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('ilce') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="mahalle">Mahalle </label>
                                <input type="text" class="form-control" id="mahalle" name="mahalle" value="{{old('mahalle')}}"    placeholder="mahalle ">
                                @if($errors->has('mahalle'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('mahalle') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="adres">Adres </label>
                                <textarea name="adres" class="form-control" id="adres" rows="3">{{old('adres')}}</textarea>
                                @if($errors->has('adres'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('adres') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="posta_kodu">Posta Kodu </label>
                                <input type="number" class="form-control" name="posta_kodu" id="posta_kodu" value="{{old('posta_kodu')}}"   placeholder="Posta Kodu ">
                                @if($errors->has('posta_kodu'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('posta_kodu') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="cep_telefonu">Cep Telefonu</label>
                                <input type="number" class="form-control" name="cep_telefonu" id="cep_telefonu" value="{{old('cep_telefonu')}}"   placeholder="Cep Telefonu ">
                                @if($errors->has('cep_telefonu'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('cep_telefonu') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="fatura_turu">Fatura Türü</label>
                                <select class="form-control" id="fatura_turu" name="fatura_turu">
                                    <option>Bireysel</option>
                                    <option>Kurumsal</option>
                                </select>
                                @if($errors->has('fatura_turu'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fatura_turu') }}</strong>
                                </span>
                                @endif

                            </div>

                            <div class="form-group">
                                <label for="tc">TC</label>
                                <input type="number" class="form-control" id="tc" name="tc" value="{{old('tc')}}" placeholder="TC ">
                                @if($errors->has('tc'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('tc') }}</strong>
                                </span>
                                @endif
                            </div>
                            @csrf
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
@endsection
