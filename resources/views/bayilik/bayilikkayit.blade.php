@extends('layouts.master')
@section('title','BayilikKaydol')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Kaydol</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="#">

                            <div class="form-group ">
                                <label for="name" class="col-md-4 control-label">Mağaza Adı</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="" required
                                           autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Şifre</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Şifre (Tekrar)</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-md-4 control-label">Telefon Numarası</label>
                                <div class="col-md-6">
                                    <input id="phone" type="tel" class="form-control" name="phone" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cinsiyet" class="col-md-4 control-label">Üyelik Türü</label>
                                <div class="col-md-6">
                                    <INPUT type="radio" name="sex" value="Sahis"> Şahıs
                                        <INPUT type="radio" name="sex" value="Sirket"> Şirket
                                        </INPUT>
                                    </INPUT>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-2">
                                    <div class="chk_label"><input type="checkbox" name="legalbox" value="false">
                                        Stilim <a onclick="privacyPolicyWindow();" title="Takım Öncülüğü" style="font-size:15px; color:#e59686; ;text-decoration: none;cursor:pointer">İş Birliği ve İlan Sözleşmesi Koşullarını </a>
                                        'nı okudum ve kabul ediyorum</div>
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
