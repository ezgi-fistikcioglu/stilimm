@extends('layouts.master')
@section('title','Anasayfa')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Kategoriler</div>
                    <div class="list-group categories">
                        <a href="#" class="list-group-item"><i class="fa fa-television"></i> KADIN</a>
                        <a href="#" class="list-group-item"><i class="fa fa-television"></i> ERKEK</a>
                        <a href="#" class="list-group-item"><i class="fa fa-television"></i> GENÇ</a>
                        <a href="#" class="list-group-item"><i class="fa fa-television"></i> ÇOCUK</a>
                        <a href="#" class="list-group-item"><i class="fa fa-television"></i> AKSESUAR</a>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Askı Bölümü</div>
                            <div class="image-div clearfix">
                                <div style="width: 700px; height: 250px;">

                                    <img src="/img/mhw203.jpg" width="260" height="260">
                                </div>

                                <input type="submit" class="gonder" value="Askıya Git"/>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <div class="panel panel-default " id="profil">
                            <div class="panel-heading">Kombinler</div>
                        </div>
                        <div class="panel panel-default " id="profil">
                            <div class="panel-body">
                                <table>
                                    <tr>
                                        <div align="left"><img src="/img/bb.jpg" width="50" height="50">Ezgi</div>
                                        <br>
                                        <div align="left">Ezgi</div>
                                        <td >
                                            <div class="resim"><img src="/img/stl.jpg"  width="500" height="250">
                                                <br>
                                                <div class="begen">
                                                    <a href="#"><i class="fa fa-thumbs-up" style="font-size:24px"></i> Beğen<span
                                                            class="badge badge-theme">1000</span></a>
                                                    <a href="#"><i class="fa fa-comment" style="font-size:24px"></i>Yorum Yap</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="panel panel-default " id="profil">
                            <div class="panel-body">
                                <table>
                                    <tr>
                                        <div align="left"><img src="/img/111.jpg" width="50" height="50">Ezgi</div>
                                        <br>
                                        <div align="left">Ezgi</div>
                                        <td>
                                            <div class="resim"><img src="/img/kll.jpg" width="500" height="250">
                                                <br>
                                                <div class="begen">
                                                    <a href="#"><i class="fa fa-thumbs-up" style="font-size:24px"></i> Beğen<span
                                                            class="badge badge-theme">1000</span></a>
                                                    <a href="#"><i class="fa fa-comment" style="font-size:24px"></i>Yorum Yap</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default" id="sidebar-product">
                            <div class="panel-heading">Kazanan Kişi</div>
                            <div class="panel-body">
                                <table>
                                    <tr>
                                        <div align="left"><img src="/img/6.jpg" width="50" height="50">Ezgi</div>
                                        <br>
                                        <div align="left">Ezgi</div>
                                        <td>
                                            <div class="kazanan">
                                                <a href="#">
                                                    <img src="/img/style.jpg" class="img-responsive">
                                                </a>
                                            </div>

                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
