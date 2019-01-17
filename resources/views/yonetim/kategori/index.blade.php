@extends('yonetim.layouts.master')
@section('title', 'Kategori Yönetimi')
@section('content')
    <h1 class="page-header">Kategori Yönetimi</h1>
    {{--//kullanıcı arama--}}
    <h3 class="sub-header"> Kategori Listesi </h3>
    <div class="well">
        <div class="btn-group pull-right">
            <a href="{{ route('yonetim.kategori.yeni' ) }}" class="btn btn-primary"> Yeni </a>
        </div>
        <form method="post" action="{{route('yonetim.kategori')}}" class="form-inline">
            {{csrf_field()}}
            <div class="form-group">
                <label for="search" Ara ></label>
                <input type="text" class="form-control form-control-sm" name="aranan" id="aranan"
                       placeholder="Kategori Ara..." value="{{old('aranan')}}">
            </div>
            <button type="submit" class="btn btn-primary">Ara</button>
            <a href="{{route('yonetim.kategori')}}" class="btn btn-primary">Temizle</a>
        </form>
    </div>

    @include('layouts.partials.alert')
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th> ID</th>
                <th> ust_id</th>
                <th> kategori_adi</th>
                <th> slug</th>
                <th> created_at</th>
                <th> İşlem</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($kategoriler as $entry)
                <tr>
                    <td>{{$entry->id}}</td>
                    <td>{{$entry->ust_id}}</td>
                    <td>{{$entry->kategori_adi}}</td>
                    <td>{{$entry->slug}}</td>
                    <td>{{$entry->created_at}}</td>

                    <td style="width: 120px;">
                        <a href="{{route('yonetim.kategori.duzenle',$entry->id)}}" class="btn btn-xs btn-success"
                           data-toggle="tooltip" data-placement="top" title="Düzenle">
                            <span class="fa fa-pencil"></span>
                        </a>
                        <a href="{{route('yonetim.kategori.sil', $entry->id)}}" class="btn btn-xs btn-danger"
                           data-toggle="tooltip" data-placement="top" title="Sil"
                           onclick="return confirm('Emin misiniz?')">
                            <span class="fa fa-trash"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
