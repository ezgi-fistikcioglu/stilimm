@extends('yonetim.layouts.master')
@section('title', 'Urun Yönetimi')
@section('content')
    <h1 class="page-header">Ürün Yönetimi</h1>
    <form method="post" action="{{ route('yonetim.kategori.kaydet', @$entry->id) }}">
        {{ csrf_field() }}
        <div class="pull-right">
            <button type="submit" class="btn btn-primary">
                {{ @$entry->id > 0 ? "Güncelle": "Kaydet"}}
            </button>
        </div>
        <h2 class="sub-header">
            Kategori {{ @$entry->id > 0 ? "Düzenle": "Ekle"}}
        </h2>
        @include('layouts.partials.errors')
        @include('layouts.partials.alert')
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="urun_adi">Ürün Adı</label>
                    <input type="text" class="form-control" id="urun_adi" name="urun_adi" placeholder="Ürün Adı " value="{{ old('urun_adi', $entry->urun_adi) }}">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" value="{{ old('slug', $entry->slug) }}">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="aciklama">Açıklama</label>
                    <textarea  class="form-control" id="aciklama" name="aciklama" placeholder="aciklama" >{{ old('aciklama', $entry->aciklama) }}</textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="fiyat">Fiyatı</label>
                    <input type="number" class="form-control" id="fiyat" name="fiyat" placeholder="fiyat" value="{{ old('fiyat', $entry->fiyat) }}">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="number" class="form-control" id="stok" name="stok" placeholder="stok" value="{{ old('stok', $entry->stok) }}">
                </div>
            </div>
        </div>
    </form>
@endsection
