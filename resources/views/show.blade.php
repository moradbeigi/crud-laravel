@extends('layouts.main')

@section('content')
    
<table class="table">
    <thead class="black white-text">
      <tr>
        <th scope="col">name</th>
        <th scope="col">subject</th>
        <th scope="col">writer</th>
        <th scope="col">photo_name</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($books as $book)
      <tr>
      <th>{{$book->name}}</th>
      <td>{{$book->subject}}</td>
      <td>{{$book->writer}}</td>
      {{-- <td>{{$book->photo_name}}</td> --}}
      <td><img src="../public/images/{{$book->photo_name}}"></td>
      <td>
      <a href="{{route('edit',$book->id)}}"> edit </a><br>
      <a href="{{route('delete',$book->id)}}"> delete </a>
      </td>
        </tr>
      @endforeach
      
    </tbody>
</table>
@endsection