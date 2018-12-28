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
                                                <div class="resim">
                                                    <img src="{{url('/storage/kombin/'.$kombin->fotograf)}}" width="510" height="510" >
                                                    <br>
                                                    <div class="begen">
                                                        <div onclick="javascript: begen( {{$kombin->id}} );" style="cursor: pointer; margin: 10px auto 10px 20px;">
                                                            <i class="fa fa-thumbs-up" style="font-size:24px; cursor: pointer;"></i>
                                                            <label id="like-count-{{$kombin->id}}-text" style="cursor: pointer;">
                                                                @if(auth()->check() && App\Models\Begen::where(['combin_id' => $kombin->id, 'kullanici_id' => auth()->user()->id])->count())
                                                                    Beğenmekten Vazgeç
                                                                @else
                                                                    Beğen
                                                                @endif
                                                            </label>
                                                            &nbsp;
                                                            <span class="badge badge-theme" id="like-count-{{$kombin->id}}">
                                                                {{App\Models\Begen::where('combin_id', $kombin->id)->count()}}
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="yorum"  id="comments-{{$kombin->id}}" >
                                                        @foreach(App\Models\Yorum::where('combin_id', $kombin->id)->get() As $yorum)
                                                            <strong>{{App\Models\Kullanici::where('id', $yorum->kullanici_id)->pluck('adsoyad')->first()}}:</strong> {{htmlspecialchars_decode($yorum->text)}} <br>
                                                        @endforeach
                                                    </div>
                                                    <div>
                                                        <textarea class="comment-box" id="comment-box-{{$kombin->id}}" combin-id="{{$kombin->id}}" cols="30" rows="10"></textarea>
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
        @auth
        function begen( combin_id ) {
            $.post( "{{url('/ajax/begen')}}", {
                combin_id: combin_id,
                _token: '{{csrf_token()}}',
            }).done(function( data ) {
                $("#like-count-"+combin_id).html(data.like_count);
                if(data.action=='like') {
                    $("#like-count-"+combin_id+"-text").html("Beğenmekten Vazgeç");
                } else {
                    $("#like-count-"+combin_id+"-text").html("Beğen");
                }
            }).fail(function(error) {
                console.log(error);
            });
        }
        function yorum( combin_id, text) {
            $.post( "{{url('/ajax/yorum')}}", {
                combin_id: combin_id,
                text: text,
                _token: '{{csrf_token()}}',
            }).done(function( data ) {
                if(data.code == 200) {
                    $("#comments-"+combin_id).append("<strong>"+data.kullanici.adsoyad+":</strong> "+data.text+" <br>");
                }
            }).fail(function(error) {
                console.log(error);
            });
        }
        @endauth
        @guest
        function begen( combin_id ) {
            alert('Lütfen giriş yapın!');
        }
        function yorum( combin_id ) {
            alert('Lütfen giriş yapın!');
        }
        @endguest
        $(document).ready(function () {
            $('.comment-box').keypress(function(e){
                if(e.keyCode==13) {
                    var combin_id = $(this).attr('combin-id');
                    var comment = $(this).val();
                    yorum( combin_id, comment);
                    $(this).val(null);
                    e.preventDefault();
                }
            });
        });
    </script>
@endsection
