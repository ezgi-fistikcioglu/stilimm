@extends('yonetim.layouts.master')
@section('title', 'Kullanıcı Yönetimi')
@section('content')
    <h1 class="page-header">Kullanıcı Yönetimi</h1>
   {{--//kullanıcı arama--}}
    <h3 class="sub-header"> Kullanıcı Listesi </h3>
    <div class="well">
        <div class="btn-group pull-right">
            <a href="{{ route('yonetim.kullanici.yeni' ) }}" class="btn btn-primary"> Yeni </a>
        </div>
        <form method="post" action="{{route('yonetim.kullanici')}}" class="form-inline">
            {{csrf_field()}}
            <div class="form-group">
                <label for="search" Ara ></label>
                <input type="text" class="form-control form-control-sm" name="aranan" id="aranan"
                placeholder="Ad, Email Ara..." value="{{old('aranan')}}">
            </div>
            <button type="submit" class="btn btn-primary">Ara</button>
            <a href="{{route('yonetim.kullanici')}}" class="btn btn-primary">Temizle</a>
        </form>
    </div>

    @include('layouts.partials.alert')
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th> ID</th>
                <th> Ad soyad</th>
                <th> Email</th>
                <th> Aktif Mi</th>
                <th> Yönetici Mi</th>
                <th> Kayıt Tarihi</th>
                <th> İşlem</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($list as $entry)
                <tr>
                    <td>{{$entry->id}}</td>
                    <td>{{$entry->adsoyad}}</td>
                    <td>{{$entry->email}}</td>
                    <td>
                        @if ($entry->aktif_mi)
                            <span class="label label-success">Aktif</span>
                        @else
                            <span class="label label-warning">Pasif</span>
                        @endif
                    </td>
                    <td>
                        @if ($entry->yonetici_mi)
                            <span class="label label-success">Yönetici</span>
                        @else
                            <span class="label label-warning">Müşteri</span>
                        @endif
                    </td>
                    <td>{{$entry->created_at}}</td>
                    <td style="width: 120px;">
                        <a href="{{route('yonetim.kullanici.duzenle',$entry->id)}}" class="btn btn-xs btn-success"
                           data-toggle="tooltip" data-placement="top" title="Düzenle">
                            <span class="fa fa-pencil"></span>
                        </a>
                        <a href="{{route('yonetim.kullanici.sil', $entry->id)}}" class="btn btn-xs btn-danger"
                           data-toggle="tooltip" data-placement="top" title="Sil"
                           onclick="return confirm('Emin misiniz?')">
                            <span class="fa fa-trash"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $list->links() }}
    </div>
@endsection
