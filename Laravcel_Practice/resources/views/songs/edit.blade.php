@extends('layout.app')

@section('title','Edit')

@section('songs_list')
	<table id="customers">
  <tr>
  	<th>Serial</th>
    <th>Song Title</th>
    <th>Song Artist</th>
    <th>Back</th>
  </tr>
  <tr>
  	<td>{{$song->id}}</td>
  	<td>{{$song->title}}</td>
  	<td>{{$song->Artist}}</td>
  	<td><a href="{{url('songs')}}">Back</a></td>
  	
  </tr>	
</table>
	
@endsection