@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Disease</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Disease Create</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
 <section class="content">
<div class="card">
	 
	<div class="card-body">
		<form action="{{ url("admin/disease/store") }}" method="POST" enctype="multipart/form-data">
			{{csrf_field()}}

			
<div class="row">
					 <div class="form-group col-md-6">
						<label>Disease</label>
						<input type="text" name="disease" value="{{ old('disease', isset($disease) ? $services->disease : '') }}" placehoder="Enter Address" class="form-control" >      
						@if($errors->has('disease'))
                        <p class="help-block">
                        {{ $errors->first('disease') }}
						</p>
                    	 @endif 
					</div>
					 
			</div>

<div>
			<input class="btn btn-danger" type="submit" value="Save">
			</div>
		</form>
	</div>
</div>
	</section>
</div>
@endsection