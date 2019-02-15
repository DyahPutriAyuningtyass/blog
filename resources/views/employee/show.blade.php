tampilan show
<br />
@foreach ($employee as $employeelist)
{{ $employeelist->employee_id}}
{{ $employeelist->employee_name}}
{{ $employeelist->employee_address}}
{{ $employeelist->employee_phone_number}}
@endforeach
<br />

<a href="{{  url('Employee') }}"> Back </a>
