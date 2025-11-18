<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>

<body>
    @include('admin.h')

    @include('admin.s')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong>Update Game</strong></div>
                        <div class="block-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form action="{{ url('edit_game', $data->id) }}" method="Post" enctype="multipart/form-data"
                                class="form-horizontal">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label" for="nama_game">Nama Game</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_game" class="form-control"
                                            value="{{ $data->nama_game }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label" for="deskripsi">Deskripsi</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3">{{ $data->deskripsi }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label" for="harga">Harga</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="harga" class="form-control"
                                            value="{{ $data->harga }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label" for="genre">genre</label>
                                    <div class="col-sm-9">
                                        <select name="genre" class="form-control mb-3 mb-3">
                                            <option selected value="{{ $data->genre }}">{{ $data->genre }}
                                            </option>
                                            <option value="Moba">Moba</option>
                                            <option value="Rpg">Rpg</option>
                                            <option value="Explorer">Explorer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label" for="seleksi_game">seleksi game</label>
                                    <div class="col-sm-9">
                                        <select name="seleksi_game" class="form-control mb-3 mb-3">
                                            <option value="trending">trending</option>
                                            <option value="most_played">most played</option>
                                            <option value="top_categori">top categori</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label" for="gambar">Input Gambar</label>
                                    <div class="col-sm-9">
                                        <img width="100" src="/gambar/{{ $data->gambar }}" alt="">
                                        <input type="file" name="gambar" class="form-control">
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group row">
                                    <div class="col-sm-9 ml-auto">
                                        <button type="submit" value="" class="btn btn-primary">Update
                                            gambar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.js')
</body>

</html>
