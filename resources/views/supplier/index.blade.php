<br />
@foreach ($supplier as $supplierlist)
{{ $supplierlist->supplier_id}}
{{ $supplierlist->supplier_name}}
{{ $supplierlist->supplier_address}}
<br />
@endforeach

<a href="{{url ('Supplier/create') }}"> Tambah </a>
