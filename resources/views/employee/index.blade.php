@extends('layout/sb-admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> Employee Tables </h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                DataTables Advanced Tables
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Telephone</th>
                            <th>Action</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>

@foreach ($employee as $employeelist)
<td> {{ $employeelist->employee_id}} </td>
<td> {{ $employeelist->employee_name}} </td>
<td> {{ $employeelist->employee_address}} </td>
<td> {{ $employeelist->employee_phone_number}} </td>

<td class="center">
    <a class="btn btn-warning" href="Employee/{{ $employeelist->employee_id}}">Show</a>
    <a class="btn btn-success" href="Employee/{{ $employeelist->employee_id}}/edit">Edit</a>
</td>

<td class="center">
<form action="Employee/{{ $employeelist->employee_id}}" method="post">
  {{ csrf_field() }}
  {{ method_field('DELETE') }}
  <button class="btn btn-danger"> Delete </button>
</form>

    </td>
</tr>

@endforeach
    </tbody>
</table>
<a class="btn btn-info"href="{{url ('Employee/create') }}"> Create Data </a>
</div>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-6 -->
</div>
<!-- /.row -->
@endsection
