@extends('layouts.index')
@section('content-index')

<div class="page-header">
    <h1>
        {{$menus}}
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            {{$menus}}
        </small>
    </h1>
</div>
<!-- /.page-header -->
<div class="row">
    <div class="col-xs-12">
       
       
    <div class="clearfix">
        <div class="pull-right tableTools-container"></div>
      </div>
      <div class="table-header">
        Results for "Latest Registered Domains"
      </div>
      <div>
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Domain</th>
              <th>Price</th>
              <th></th>
            </tr>
          </thead>
        </table>
      </div>
       
    </div>
    <!-- /.col -->
</div>
@endsection
@push('js')
<script type="text/javascript">
    jQuery(function($){
      var t = $('#dynamic-table').DataTable({
        processing: true,
        serverSide: true,
        bAutoWidth: false,
        // dom: 'rti',
        ajax: '/api/v1/category/index-data',
        search: {
          caseInsensitive: true
        },
        columns: [
          {data: 'name', name: 'name'},
          {data: 'description', name: 'description', orderable: false, searchable: false},
          {data: 'action', name: 'action', orderable: false, searchable: false}
        ],
        "order": [[ 0, 'desc' ]],
        "pageLength": 15,
        select: {
						style: 'multi'
					}
      });
    });
  </script>
@endpush