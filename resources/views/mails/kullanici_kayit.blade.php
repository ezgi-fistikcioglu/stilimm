<h1>{{ config('app.name') }}</h1>
<p>Merhaba {{ $kullanici->adsoyad }},Kaydınız başarılı bir şekilde gerçekleştirildi.</p>
<p>Kaydınızı aktifleştirmek için <a
        href="{{url('/kullanici/aktiflestir/'.$kullanici->aktivasyon_anahtari )}}">
        tıklayın</a>veya aşağıdaki bağlantıyı tarayıcınızda açın. </p>

<p>{{url('/kullanici/aktiflestir/'.$kullanici->aktivasyon_anahtari )}}</p>
