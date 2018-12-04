@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="Jumbotron text-center">
                    <h1>404</h1>
                    <h2>Aradığınız Sayfa Bulunamadı!</h2>
                    <a href="{{route('anasayfa')}}" class="btn btn-primary">Anasayfa'ya Dön</a>
                </div>
            </div>
        </div>
    </div>
@endsection
