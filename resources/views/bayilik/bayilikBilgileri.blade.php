@extends('layouts.master2')
@section('title','Bayilik Bilgilerim')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Üyelik Bilgilerim</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="#">

                            <div class="form-group ">
                                <label for="name" class="col-md-4 control-label">Mağaza Adı*</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="" required
                                           autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">E-Posta*</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="" required
                                           autofocus>
                                </div>
                            </div>

                            <br>
                            <div class="form-group ">
                                <label for="phoneNumber" class="col-md-4 control-label"> Cep Telefonu </label>
                                <div class="col-md-6">
                                    <input id="phoneNumber" name="phoneNumber" type="text" class="form-control" value=""
                                           autocomplete="off">

                                    <div class="errorMessage" data-errormessagefor="phoneNumber">
                                        <span class="top-arrow"></span>
                                        <div class="errorText"></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group ">
                                <div>
                                    <label for="cinsiyet" class="col-md-4 control-label">Üyelik Türü</label>
                                    <div class="col-md-3">
                                        <INPUT type="radio" name="sex" value="person"> Şahıs
                                            <INPUT type="radio" name="sex" value="company"> Şirket
                                            </INPUT>
                                        </INPUT>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="adres ">
                                    <div class="col-md-3 col-md-offset-2">
                                        <label for="address" class="col-md-8 control-label" >
                                            Adres  <span class="required">*</span>
                                        </label>
                                        <textarea  rows="3" cols="90" id="address" name="address" data-validation="required maxlength minlength" data-maxlength="99" data-minlength="10" data-required-message="Lütfen adres girin."></textarea>
                                        <span class="txtCounter">99</span>
                                    </div>
                                    <div class="errorMessage" data-errormessagefor="address">
                                        <div class="errorText">

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div>
                                        <label class="col-md-9 control-label"> <input type="checkbox" checked="checked" disabled=""> <span>
                                                <a href="#" id="userAgreementBtn">Üyelik Sözleşmesi şartlarını okudum ve kabul ediyorum.</a></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="kaydetButon">
                                    <div class="col-md-9 col-md-offset-4">
                                        <button type="submit" class="btn btn-warning">
                                            Kaydet
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
