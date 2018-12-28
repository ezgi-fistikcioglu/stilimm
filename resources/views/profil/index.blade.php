@extends('layouts.master')
@section('title','Anasayfa')
@section('content')
    @include('layouts.partials.alert')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="hb-column hb-col-lg-1 hb-col-md-1 hb-col-tb-1 hb-col-tbs-1">
                        <div class="verticalMenuContainer">
                            <div class="hb-list-box-content">
                                <div class="hb-list-box title"><i class="icon hb-icon-user_icon"></i><span
                                        class="hb-list-title-text">Ezgi Fıstıkçıoğlu</span></div>
                                <div class="hb-list-box list"><span class="hb-list-title-text small"><a href="/hesabim">Hesabım</a></span>
                                    <ul class="hb-list-item-content">
                                        <li class="hb-list-item"><a class="hb-list-title-text"
                                                                    href="//www.hepsiburada.com/liste/MyPage/OrdersNew.aspx">Siparişlerim</a>
                                        </li>
                                        <li class="hb-list-item"><a class="hb-list-title-text"
                                                                    href="//www.hepsiburada.com/ayagina-gelsin/teslimat-adreslerim">Adreslerim</a>
                                        </li>
                                        <li class="hb-list-item"><a class="hb-list-title-text"><!-- react-text: 359 -->
                                                Kolay
                                                İade<!-- /react-text --><i class="icon hb-icon-down_arrow"></i></a>
                                            <ul class="hb-sub-list-item-content">
                                                <li class="hb-list-item"><a class="hb-list-title-text"
                                                                            href="//www.hepsiburada.com/liste/MyPage/RMA/Summary.aspx">Başvuru
                                                        Formu</a></li>
                                                <li class="hb-list-item"><a class="hb-list-title-text"
                                                                            href="//www.hepsiburada.com/liste/MyPage/RMA/RMAFollowUpV2.aspx">Başvuru
                                                        Takibi</a></li>
                                            </ul>
                                        </li>
                                        <li class="hb-list-item"><a class="hb-list-title-text"><!-- react-text: 368 -->
                                                Para
                                                İadesi İşlemlerim<!-- /react-text --><i
                                                    class="icon hb-icon-down_arrow"></i></a>
                                            <ul class="hb-sub-list-item-content">
                                                <li class="hb-list-item"><a class="hb-list-title-text"
                                                                            href="//www.hepsiburada.com/liste/mypage/odemekuponlarim.aspx">Ödeme
                                                        Kuponu Onay/Red</a></li>
                                                <li class="hb-list-item"><a class="hb-list-title-text"
                                                                            href="//www.hepsiburada.com/liste/UserOperations/iban.aspx?ibanguncelle=1#ibanguncelle">IBAN
                                                        Bilgilerim</a></li>
                                            </ul>
                                        </li>

                                        <li class="hb-list-item"><a class="hb-list-title-text"><!-- react-text: 388 -->
                                                Hesap
                                                Ayarlarım<!-- /react-text --><i class="icon hb-icon-down_arrow"></i></a>
                                            <ul class="hb-sub-list-item-content">
                                                <li class="hb-list-item"><a class="hb-list-title-text"
                                                                            href="//www.hepsiburada.com/ayagina-gelsin/bilgilerim">Üyelik
                                                        Bilgisi Güncelleme</a></li>
                                                <li class="hb-list-item"><a class="hb-list-title-text"
                                                                            href="//www.hepsiburada.com/ayagina-gelsin/sifre-guncelleme">Şifre
                                                        Değişikliği</a></li>
                                                <li class="hb-list-item"><a class="hb-list-title-text"
                                                                            href="//www.hepsiburada.com/liste/UserOperations/iban.aspx?ibanguncelle=1#ibanguncelleme">IBAN
                                                        Bilgilerim</a></li>
                                                <li class="hb-list-item"><a class="hb-list-title-text"
                                                                            href="//www.hepsiburada.com/ayagina-gelsin/hizli-odeme-tercihlerim">Hızlı
                                                        Ödeme Tercihlerim</a></li>
                                            </ul>
                                        </li>
                                        <li class="hb-list-item"><a class="hb-list-title-text"
                                                                    href="//www.hepsiburada.com/liste/MyPage/Yorumlarim.aspx">Ürün
                                                Yorumlarım</a></li>
                                    </ul>
                                </div>
                                <div class="hb-list-box list"><span class="hb-list-title-text small"><a
                                            href="">Listelerim</a></span>
                                    <ul class="hb-list-item-content">
                                        <li class="hb-list-item"><a class="hb-list-title-text"
                                                                    href="//www.hepsiburada.com/alisveris-listem">Favori
                                                Listem</a></li>
                                    </ul>
                                </div>
                                <div class="hb-list-box list"><span class="hb-list-title-text small"><a
                                            href="">Posta Kutusu</a></span>
                                    <ul class="hb-list-item-content">
                                        <li class="hb-list-item"><a class="hb-list-title-text" href="/mesajlarim">Müşteri
                                                Hizmetleri Mesajları</a></li>
                                        <li class="hb-list-item"><a class="hb-list-title-text" href="/mesajlarim">Bilgilendirme
                                                Mesajları</a></li>
                                        <li class="hb-list-item"><a class="hb-list-title-text"
                                                                    href="/hesabim/bize-sorun">Bize
                                                Sorun</a></li>
                                    </ul>
                                </div>
                                <div class="hb-list-box"><a class="hb-list-title-text link" href="/yardim">Yardım</a>
                                </div>
                                <div class="hb-list-box"><a class="hb-list-title-text link"
                                                            href="//www.hepsiburada.com/ayagina-gelsin/cikis">Güvenli
                                        Çıkış</a></div>
                            </div>
                        </div>
                    </div>
                </div>

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
