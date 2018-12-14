<h1>{{config('app.name') }}</h1>
<p>Merhabaa {{ $bayilik->magazaadi }}, Kaydınız başarılı bir şekilde gerçekleştirildiii.</p>
<p>Kaydınızı aktifleştirmek için <a
        href="{{url('/bayilik/aktiflestir/'.$bayilik->aktivasyon_anahtari )}}">
        tıklayın</a>veya aşağıdaki bağlantıyı tarayıcınızda açın. </p>

<p>{{url('/bayilik/aktiflestir/'.$bayilik->aktivasyon_anahtari )}}</p>
