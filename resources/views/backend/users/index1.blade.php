@extends('backend.layouts.app')

@section('content')
 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Doctors</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Doctors</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
 <section class="content">
 
 <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success float-right" href="{{ url('admin/doctor/create') }}">
                {{ trans('global.add') }} Doctor
            </a>
        </div>
    </div> 
 
<div class="card">
    <div class="card-header">
          Doctor List
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
						 
                        <th>
                            {{ trans('global.user.fields.name') }}
                        </th>
                        <th>
                            {{ trans('global.user.fields.email') }}
                        </th>
                        <th>
                            Mobile
                        </th>
                        <th>
                            {{ trans('global.user.fields.roles') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key => $user)
                        <tr data-entry-id="{{ $user->id }}">
                            <td>

                            </td>
							 
                            <td>
                                {{ $user->name ?? '' }}
                            </td>
                            <td>
                                {{ $user->email ?? '' }}
                            </td>
                            <td>
                                {{ $user->mobile ?? '' }}
                            </td>
                            <td>
                              	@if($user->type=='1')
			Patient
			@elseif($user->type=='2')
			Doctor
			@elseif($user->type=='3')
			Diagnostic Centers
			@elseif($user->type=='4')
			Pharmacy
			
			
			@else
			
			@endif
                            </td>
                            <td>
                                @can('user_show')
                                    <a class="btn btn-xs btn-primary" href="{{ url('admin/users/show', $user->id) }}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                @endcan
                                @can('user_edit')
                                 <a class="btn btn-xs btn-info" href="{{ url('admin/doctor/edit', $user->id) }}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a> 
                                @endcan
                                @can('user_delete')
                                    <form action="{{ url('admin/users/destroy', $user->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
										@csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                       
                                    <button type="submit" class="btn btn-xs btn-danger " 	><i class="fa fa-trash"></i></button>
                                    </form>
                                @endcan
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>
</div>
@section('scripts')
@parent
<script>
    $(function () {
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ url('admin/users/massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('user_delete')
  dtButtons.push(deleteButton)
@endcan

  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection
@endsection