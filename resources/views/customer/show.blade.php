@foreach ($customer as $customerList)

{{ $customerList->customer_id}}
{{ $customerList->name }}
{{ $customerList->address}}

@endforeach
<a href="{{ url('Customer')}}">
  <br>
Click
</a>
