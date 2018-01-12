@extends('layout.app')

@section('title', 'Passport list')

@section('passport_list')
	<table id="customers">
  <tr>
  	<th>id</th>
    <th>Name</th>
    <th>Passport Number</th>
  </tr>
  @foreach($user as $single_user)
  <tr>
  	
  	<td>{{$single_user->id}}</td>
  	<td>{{$single_user->name}}</td>
  	<td>{{$single_user->p}}</td>
  </tr>
  	
  	
  	@endforeach
 


</table>
	
@endsection