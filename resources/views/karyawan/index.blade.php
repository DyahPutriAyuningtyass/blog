<br />
@foreach ($karyawan as $karyawanlist)
{{ $karyawanlist->karyawan_id}}
{{ $karyawanlist->karyawan_name}}
{{ $karyawanlist->karyawan_address}}
{{ $karyawanlist->telpon_karyawan}}
<br />
@endforeach

<a href="{{url ('Karyawan/create') }}"> Tambah </a>