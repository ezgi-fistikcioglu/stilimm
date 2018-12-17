
@extends('layouts.master')
@section('title','Kombinim')
@section('content')
    <div class="header-banner-cover">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Kombinim</div>
                <div class="panel-body">
                    <form enctype="multipart/form-data" method="post">
                        <div class="form-group ">
                            <label for="name" class="col-sm-2 col-form-label">Kombin Adı</label>
                            <div class="col-sm-10">
                                <input id="name" type="text" class="form-control" name="kombin_adi" value="" required autofocus>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group ">
                            <label for="aciklama" class="col-sm-2 col-form-label">Açıklama</label>
                            <div class="col-sm-10">
                                <textarea id="aciklama" class="form-control" name="aciklama" style="resize: none;"></textarea>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group ">
                            <label for="satilik_mi" class="col-sm-2 col-form-label">Satılık mı?</label>
                            <div class="col-sm-10">
                                <select id="satilik_mi" name="satilik_mi" class="form-control">
                                    <option value="evet">Evet</option>
                                    <option value="hayir">Hayır</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group" id="fiyat_area">
                            <label for="fiyati" class="col-sm-2 col-form-label">Fiyat</label>
                            <div class="col-sm-10">
                                <input id="fiyati" type="number" class="form-control" name="fiyati" value="0.00" required autofocus>
                            </div>
                            <br>
                            <br>
                        </div>
                        <div class="form-group ">
                            <label for="fotograf" class="col-sm-2 col-form-label">Fotoğraf Ekle</label>
                            <div class="col-sm-10">
                                <input name="fotograf" id="fotograf" type="file" class="form-control"> <BR>
                                <img id="onizleme" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="max-width: 150px; max-height: 150px;" />
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group ">
                            <input type="submit" name="yukle" value="Kombin Ekle" class="btn btn-primary mb-2">
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $( document ).ready(function() {
            $("#fotograf").change(function() {
                readURL(this);
            });
            $("#satilik_mi").change(function() {
                var satilik_mi = $(this).val();
                if(satilik_mi=='evet') {
                    $("#fiyat_area").show();
                } else {
                    $("#fiyat_area").hide();
                }
            })
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#onizleme').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection
