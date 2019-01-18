@extends('yonetim.layouts.master')
@section('title', 'Urun Yönetimi')
@section('content')
    <h1 class="page-header">Ürün Yönetimi</h1>
    {{--//kullanıcı arama--}}
    <h3 class="sub-header"> Ürün Listesi </h3>
    <div class="well">
        <div class="btn-group pull-right">
            <a href="{{ route('yonetim.urunler.yeni' ) }}" class="btn btn-primary"> Yeni </a>
        </div>
        <form method="post" action="{{route('yonetim.urunler')}}" class="form-inline">
            {{csrf_field()}}
            <div class="form-group">
                <label for="search" Ara ></label>
                <input type="text" class="form-control form-control-sm" name="aranan" id="aranan"
                       placeholder="Ürün Ara..." value="{{old('aranan')}}">
            </div>
            <button type="submit" class="btn btn-primary">Ara</button>
            <a href="{{route('yonetim.urunler')}}" class="btn btn-primary">Temizle</a>
        </form>
    </div>

    @include('layouts.partials.alert')
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th> ID</th>
                <th> Slug</th>
                <th> Urun Adı</th>
                <th style="width: 300px"> Açıklama</th>
                <th> Fiyatı</th>
                <th> Stok</th>
                <th> Kayıt Tarihi</th>
                <th> İşlem</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($urunler as $entry)
                <tr>
                    <td>{{$entry->id}}</td>
                    <td>{{$entry->slug}}</td>
                    <td>{{$entry->urun_adi}}</td>
                    <td>{{$entry->aciklama}}</td>
                    <td>{{$entry->fiyati}}</td>
                    <td>{{$entry->stok}}</td>
                    <td>{{$entry->created_at}}</td>

                    <td style="width: 120px;">
                        <a href="{{route('yonetim.urunler.duzenle',$entry->id)}}" class="btn btn-xs btn-success"
                           data-toggle="tooltip" data-placement="top" title="Düzenle">
                            <span class="fa fa-pencil"></span>
                        </a>
                        <a href="{{route('yonetim.urunler.sil', $entry->id)}}" class="btn btn-xs btn-danger"
                           data-toggle="tooltip" data-placement="top" title="Sil"
                           onclick="return confirm('Emin misiniz?')">
                            <span class="fa fa-trash"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $urunler->links() }}
    </div>
@endsection
