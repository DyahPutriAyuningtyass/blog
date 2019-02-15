@foreach ($employee as $employeelist)
<form class="" action="{{ route('Employee.update', $employeelist->employee_id) }}" method="post">
{{ csrf_field()}}
       {{ method_field('PUT')}}
<input type="text" name="txt_id" value="{{ $employee_list->$employee_id}}"/>
<br />
<input type="text" name="txt_name" value="{{ $employeelist->$employee_id}}"/>
<br />
<input type="text" name="txt_address" value="{{ $employeelist->$employee_id}}"/>
<br />
<input type="text" name="txt_phone" value="{{ $employeelist->$employee_id}}"/>
<br />
@endforeach
<button type="submit" name="button">Submit</button>
