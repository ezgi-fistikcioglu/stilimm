@extends('layouts.master')
@section('title','Bayilik İlanlarım')
@section('content')
    <div class="header-banner-cover">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Kombinim</div>
                <div class="panel-body">
                    <div class="form-group ">
                        <label for="name" class="col-md-2 ">Kombin Adı</label>
                        <div class="col-md-2">
                            <input id="name" type="text" class="form-control" name="name" value="" required
                                   autofocus>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group ">
                        <label for="name" class="col-md-2 control-label">Satılık mı?</label>
                        <div class="col-md-6">
                            <select style="width: 200px; height: 40px;">
                                <option>Evet</option>
                                <option>Hayır</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 form-group ">
                        <div class="kombin">

                            <form ENCTYPE="multipart/form-data"
                                  action="kombinekle.blade.php"
                                  method="post">
                                Resim Ekle:<BR>
                                <input name="resim"
                                       type="file"> <BR>
                                <input type="submit" name="yukle" value="Resmi Yükle">
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
