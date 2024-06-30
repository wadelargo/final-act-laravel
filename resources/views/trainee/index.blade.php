
@extends('pages.base')

@section('content')

<table class="table table-bordered table-striped table-sm">
    <thead>
      <th>id</th>
      <th>full_name</th>
      <th>title</th>
      <th>status</th>
      <th>created_at</th>
      <th>updated_at</th>
    </thead>
    <tbody>
        @foreach ($trainees as $trainee)
            <tr>
              <td>{{ $trainee->id }}</td>
              <td>{{ $trainee->user->full_name}}</td>
              <td>{{ $trainee->course->title}}</td>
              <td>{{ $trainee->status}}</td>
              <td>{{$trainee->created_at}}</td>
              <td>{{$trainee->updated_at}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection