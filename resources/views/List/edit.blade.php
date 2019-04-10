@extends('Master.master')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css">
  <script src="main.js"></script>
</head>
<body>
  
  @section('content')
  
    @foreach ($data as $row)
  <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Item</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{route('admin.update',$row->id_item)}}" method="post">
            {{ csrf_field() }}
            {{method_field('PUT')}}
              <div class="box-body">
                <!-- ID Item -->
                <div class="form-group">
                  
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="inputIDItem" placeholder="ID Item" name="inputIDItem" value="{{$row->id_item}}">
                  </div>
                </div>

                <!-- ID Category -->
                <div class="form-group">
                  <label for="inputIDCategory" class="col-sm-2 control-label">ID Category</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputIDCategory" placeholder="ID Category" name="inputIDCategory" value="{{$row->id_category}}">
                  </div>
                </div>

                <!-- Nama Item -->
                <div class="form-group">
                  <label for="inputNamaItem" class="col-sm-2 control-label">Nama Item</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNamaItem" placeholder="Nama Item" name="inputNamaItem" value="{{$row->nama_item}}">
                  </div>
                </div>

                <!-- Warna -->
                <div class="form-group">
                  <label for="inputWarna" class="col-sm-2 control-label">Warna</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputWarna" placeholder="Warna" name="inputWarna" value="{{$row->warna}}">
                  </div>
                </div>

                <!-- Stok -->
                <div class="form-group">
                  <label for="inputStok" class="col-sm-2 control-label">Stok</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputStok" placeholder="Stok" name="inputStok" value="{{$row->stok}}">
                  </div>
                </div>

                <!-- Harga -->
                <div class="form-group">
                  <label for="inputHarga" class="col-sm-2 control-label">Harga</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputHarga" placeholder="Harga" name="inputHarga" value="{{$row->harga}}">
                  </div>
                </div>

                <!-- Satuan -->
                <div class="form-group">
                  <label for="inputSatuan" class="col-sm-2 control-label">Satuan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputSatuan" placeholder="Satuan" name="inputSatuan" value="{{$row->satuan}}">
                  </div>
                </div>

                <!-- Keterangan -->
                <div class="form-group">
                  <label for="inputKeterangan" class="col-sm-2 control-label">Keterangan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputKeterangan" placeholder="Keterangan" name="inputKeterangan" value="{{$row->keterangan}}">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default"><a href="master">Cancel</a></button>
                <button type="submit" class="btn btn-info pull-right">Edit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
        @endforeach
        @endsection
</body>
</html>