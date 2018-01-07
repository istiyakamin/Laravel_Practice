@extends('layout.app')

@section('title', 'Songs')

@section('songs_list')
	<table id="customers">
  <tr>
  	<th>Serial</th>
    <th>Song Title</th>
    <th>Song Artist</th>
    <th>Edit</th>
  </tr>

  @foreach($songs as $song)
  <tr>
  	<td>{{$serial++}}</td>
    <td>{{$song->title}}</td>
    <td>{{$song->Artist}}</td>
    <td><a href="{{url('songs')}}{{'/'.$song->id.'/edit'}}">Edit</a></td>

  </tr>
   @endforeach	
</table>
	
@endsection