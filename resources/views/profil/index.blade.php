@extends('layouts.master')
@section('title','Anasayfa')
@section('content')
    @include('layouts.partials.alert')
    <div class="container">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-9">
                <div class="panel panel-default " id="profil">
                    <div class="panel-heading">Kombinler</div>
                </div>
                <div class="panel panel-default " id="profil">
                    <div class="panel-body">
                        <table style="width: 100%;">
                            @foreach($kombinler as $kombin)
                                <tr>
                                    <td>
                                        <div align="left">
                                            <img src="/img/bb.jpg" width="50"
                                                 height="50">{{$kombin->kullanici->adsoyad}}
                                        </div>
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="resim"><img
                                                src="{{url('/storage/kombin/'.$kombin->fotograf)}}" width="510" height="510" >
                                            <br>
                                            <div class="begen">
                                                <a href="#"><i class="fa fa-thumbs-up"
                                                               style="font-size:24px"></i>
                                                    Beğen<span
                                                        class="badge badge-theme">1000</span></a>
                                                <a href="#"><i class="fa fa-comment" style="font-size:24px"></i>Yorum
                                                    Yap</a>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
