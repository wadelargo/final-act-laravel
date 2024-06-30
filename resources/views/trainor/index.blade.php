
@extends('pages.base')

@section('content')

@if (session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
@endif

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="{{url('/trainors/create')}}" class="btn btn-primary me-md-2" type="button">
        Add new Trainor
    </a>
  </div>

<table class="table table-bordered table-striped table-sm">
    <thead>
      <th>id</th>
      <th>full_name</th>
      <th>specialty</th>
      <th>created_at</th>
      <th>updated_at</th>
    </thead>
    <tbody>
        @foreach ($trainors as $trainor)
            <tr>
              <td>{{$trainor->id}}</td>
              <td>{{$trainor->user->full_name}}</td>
              <td>{{$trainor->specialty}}</td>
              <td>{{$trainor->created_at}}</td>
              <td>{{$trainor->updated_at}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<style>
  .btn {
  margin-bottom: 20px;
}
</style>


@endsection