<h1>{{ config('app.name') }}</h1>
<p>Merhaba {{ $kullanici->adsoyad }},Kaydınız başarılı bir şekilde gerçekleştirildi.</p>
<p>Kaydınızı aktifleştirmek için <a
        href="{{ config_path('app.url') }}/kullanici/aktiflestir/{{ $kullanici->aktivasyon_anahtari }}">
        tıklayın</a>veya aşağıdaki bağlantıyı tarayıcınızda açın. </p>

<p>{{ config_path('app.url') }}/kullanici/aktiflestir/{{ $kullanici->aktivasyon_anahtari }}</p>
