@extends('layouts.master')
@section('title','Üye ol')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Kaydol</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ route('kullanici.kaydol') }}">
                            {{ csrf_field() }}
                            <meta charset="utf-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1">
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            <div class="form-group {{ $errors->has('') ? 'has-error': '' }}">
                                <label for="adsoyad" class="col-md-4 control-label">Ad Soyad</label>
                                <div class="col-md-6">
                                    <input id="adsoyad" type="text" class="form-control" name="adsoyad"
                                           value="{{ old('adsoyad') }}" autofocus>
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
                                <label for="cinsiyet" class="col-md-4 control-label">Cinsiyet</label>
                                <div class="col-md-6">
                                    <INPUT type="radio" id="gender_male" name="gender"
                                           value="Male" {{(old('gender')=='Male') ? 'checked' : null}}>
                                        <label for="gender_male">Erkek</label>
                                        <INPUT type="radio" id="gender_female" name="gender"
                                               value="Female" {{(old('gender')=='Female') ? 'checked' : null}}>
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
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                    <select id="birthMonth" name="dogum_ay" class="month">
                                        <option> Ay</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                    <select id="birthYear" name="dogum_yil" class="year">
                                        <option>Yıl</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                        <option value="1959">1959</option>
                                        <option value="1958">1958</option>
                                        <option value="1957">1957</option>
                                        <option value="1956">1956</option>
                                        <option value="1955">1955</option>
                                        <option value="1954">1954</option>
                                        <option value="1953">1953</option>
                                        <option value="1952">1952</option>
                                        <option value="1951">1951</option>
                                        <option value="1950">1950</option>
                                        <option value="1949">1949</option>
                                        <option value="1948">1948</option>
                                        <option value="1947">1947</option>
                                        <option value="1946">1946</option>
                                        <option value="1945">1945</option>
                                        <option value="1944">1944</option>
                                        <option value="1943">1943</option>
                                        <option value="1942">1942</option>
                                        <option value="1941">1941</option>
                                        <option value="1940">1940</option>
                                        <option value="1939">1939</option>
                                        <option value="1938">1938</option>
                                        <option value="1937">1937</option>
                                        <option value="1936">1936</option>
                                        <option value="1935">1935</option>
                                        <option value="1934">1934</option>
                                        <option value="1933">1933</option>
                                        <option value="1932">1932</option>
                                        <option value="1931">1931</option>
                                        <option value="1930">1930</option>
                                        <option value="1929">1929</option>
                                        <option value="1928">1928</option>
                                        <option value="1927">1927</option>
                                        <option value="1926">1926</option>
                                        <option value="1925">1925</option>
                                        <option value="1924">1924</option>
                                        <option value="1923">1923</option>
                                        <option value="1922">1922</option>
                                        <option value="1921">1921</option>
                                        <option value="1920">1920</option>
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
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-2">
                                    <div class="chk_label"><input type="checkbox" name="legalbox" value="false">
                                        Stilim <a onclick="privacyPolicyWindow();" title="Takım Öncülüğü"
                                                  style="font-size:15px; color:#e59686; ;text-decoration: none;cursor:pointer">Üyelik
                                            Sözleşmesi Şartlarını </a> 'nı okudum ve kabul ediyorum
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
                                        Kaydol
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
