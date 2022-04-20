@extends('backend.layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users Create</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
 <section class="content">
<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('global.user.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ url("admin/users/store") }}" method="POST" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6 form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.user.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" value="{{ old('name', isset($user) ? $user->name : '') }}">
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.user.fields.name_helper') }}
                </p>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">{{ trans('global.user.fields.email') }}*</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($user) ? $user->email : '') }}">
                @if($errors->has('email'))
                    <em class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.user.fields.email_helper') }}
                </p>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-6 form-group {{ $errors->has('mobile') ? 'has-error' : '' }}">
                <label for="mobile">Mobile*</label>
                <input type="mobile" id="mobile" name="mobile"  placeholder="Enter your Mobile numbers" pattern="[1-9]{1}[0-9]{9}" maxlength="10" class="form-control" value="{{ old('mobile', isset($user) ? $user->mobile : '') }}">
                @if($errors->has('mobile'))
                    <em class="invalid-feedback">
                        {{ $errors->first('mobile') }}
                    </em>
                @endif
                 
            </div>

            
 
            <div class="col-md-6 col-lg-6 col-sm-6 form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <label for="password">{{ trans('global.user.fields.password') }}</label>
                <input type="password" id="password" name="password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control">
                @if($errors->has('password'))
                    <em class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.user.fields.password_helper') }}
                </p>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 form-group {{ $errors->has('roles') ? 'has-error' : '' }}">
                <label for="roles">{{ trans('global.user.fields.roles') }}*
                    
                <select name="type" id="roles" required class="form-control" style="width:510px;">
                         <option value="1">Patient </option>
					<option value="2">Doctors </option>
                     <option value="3">Diagnostic Centers  </option>
					<option value="4">Pharmacy</option>
                </select>
                @if($errors->has('roles'))
                    <em class="invalid-feedback">
                        {{ $errors->first('roles') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.user.fields.roles_helper') }}
                </p>
            </div>
            <div class="col-md-12 col-lg-12 col-sm-12">
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
</div>
        </form>
    </div>
</div>
</section>

</div>
@endsection

 