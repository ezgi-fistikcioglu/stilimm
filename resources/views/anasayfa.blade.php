@extends('layouts.master')
@section('title','Anasayfa')
@section('content')
    @include('layouts.partials.alert')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Kategoriler</div>
                    <div class="list-group categories">
                        @foreach($kategoriler as $kategori)
                            <a href="{{ route('kategori',$kategori->slug) }}" class="list-group-item">
                                <i class="fa fa-arrow-circle-o-right"></i>
                                {{$kategori->kategori_adi }}
                            </a>
                        @endforeach
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Askı Bölümü</div>
                            <div class="image-div clearfix">
                                <div style="width: 700px; height: 250px;">

                                    <img src="/img/fa.jpg" width="260" height="240">
                                </div>

                                <a href="{{url('aski')}}">
                                    <button type="button" style="width:100%; margin-bottom: 15px;" class="btn btn-warning">Askıya Git</button>
                                </a>

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
                                    @foreach($kombinler as $kombin)
                                        <tr>
                                            <td>
                                                <div align="left">
                                                    <img src="/img/bb.jpg" width="50"
                                                         height="50">
                                                    {{$kombin->kullanici->adsoyad}}
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
                                                        <a href="javascript: void(0);" onclick="javascript: begen( {{$kombin->id}} );";><i class="fa fa-thumbs-up"
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
                    <div class="col-md-3">
                        @if(auth()->check())
                        <a href="{{url('kullanici/kombin')}}">
                            <button type="button" style="width:100%; margin-bottom: 15px;" class="btn btn-primary">Kombin Ekle</button>
                        </a>
                        @endif
                        <div class="panel panel-default" id="sidebar-product">
                            <div class="panel-heading">Kazanan Kişi</div>
                            <a href="{{url('profil/5')}}">
                                <div class="panel-body" style="width:200%;  margin-bottom: 15px;">
                                    <table>
                                        <tr>
                                            <div align="left"><img src="/img/6.jpg" width="50" height="50">Gamze</div>
                                            <br>
                                            <div align="left">Gamze</div>
                                            <td>
                                                <div class="kazanan">
                                                    <a href="#">
                                                        <img src="/img/style.jpg" width="210" height="210" class="img-responsive">
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        function begen( combin_id ) {
            $.post( "{{url('/ajax/begen')}}", {
                combin_id: combin_id,
                _token: '{{csrf_token()}}',
            }).done(function( data ) {
                console.log(data);
            });
        }
    </script>
@endsection
