@extends('layouts.master')
@section('title','Üyelik İptali')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Üyelik İptal</div>
                    <div class="panel-body">
                    <div class="fieldsetContainer myAccountOption">
                        <div class="fieldset"><br>
                            <center>Üyeliğimi İptal Et butonuna bastığınızda hesabınız silinecektir.</center>
                            <form id="withdrawMyMembershipForm" action="#" method="post">
                                <input type="hidden" name="token" value="nqVAjsPKgPDcgMUaSyJmiBTdLunPKw">
                            </form>
                            <br>
                            <div  class="iptalButon">
                                <div class="col-md-12 col-md-offset-4 ">
                                    <button type="submit" class="btn btn-warning">
                                        Üyeliğimi İptal Et
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
