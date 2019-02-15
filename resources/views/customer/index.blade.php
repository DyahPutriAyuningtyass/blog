@extends('layout.sb-admin');

@section('content');

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> Customer </h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                DataTables Customer
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Id_Customer</th>
                            <th>Nama_Customer</th>
                            <th>Address_Customer</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($customer as $customerlist)
                        <tr class="odd gradeX">
                          <td>{{ $customerlist->customer_id}}</td>
                          <td>{{ $customerlist->name}}</td>
                          <td>{{ $customerlist->address}}</td>

                          <td class="center">
                            <a class="btn btn-warning" href="Customer/{{ $customerlist->customer_id }}">Show</a>
                            <a class="btn btn-success" href="Customer/{{ $customerlist->customer_id }}/edit">Edit</a>
                          </td>

                          <td class="center">
                            <form action="Customer/{{ $customerlist->customer_id}}" method="post">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                              <button class="btn btn-danger"> Delete </button>
                            </form>
                          </td>

                          @endforeach

                            </tr>
                        </tbody>
                    </table>
                    <a class="btn btn-info" href="{{url ('Customer/create') }}"> Create Data </a>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->

        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
</div>
<!-- /.row -->
</div>
@endsection
