@extends('layout.app')

@section('title', 'Songs')

@section('songs_list')
	<table id="customers">
  <tr>
    <th>Song Title</th>
    <th>Song Artist</th>
  </tr>
  @foreach($songs as $song)
  <tr>
    <td>{{$song->title}}</td>
    <td>{{$song->Artist}}</td>
  </tr>
   @endforeach	
</table>
	
@endsection