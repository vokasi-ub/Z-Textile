@extends('Master.master')
<!DOCTYPE html>
<html>
<head>
	<title>Search Result Category</title>
</head>
<body>

@section('content')
	@if(count($result))
		<section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Search Result Category</h3>
                        </div>

                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
								<th>Id Category</th>
                                <th>Category Kain</th>
								</tr>
				
								@foreach($result as $item)
        				<tr>
								<td>{{$item->id_category}}</td>
                                <td>{{$item->category_kain}}</td>
                            </tr>
                            @endforeach
        
                        </table>
                    </div>			
                    
    @else
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Data Tidak Ditemukan</h3>
            </div>
        </div>
    </div>
    @endif
				<div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-left">
                    <button type="submit" class="btn btn-default"><a href="category">Back</button>
                    </ul>

                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
	            </div>
			</div>
		</div>
	</div>
@endsection

</body>
</html>