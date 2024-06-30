
@extends('pages.base')

@section('content')
    <h1>Create new Trainor</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('trainors/create')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="user_id">Select User</label>
                  <select class="form-select" name="user_id" id="user_id">
                     <option hidden="true">Select User</option>
                     <option selected disabled>Select User</option>
                     @foreach ($users as $userId => $user)
                         <option value="{{$userId}}">{{$user}}</option>
                     @endforeach
                  </select>
                  @error('user_id')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="specialty">Specialty</label>
                    <input class="form-control" type="text" name="specialty">
                    @error('specialty')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                  <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button class="btn btn-primary me-md-2 mt-2" type="submit">
                        Add Trainor</button>
                  </div>
            </form>
        </div>
    </div>

    


@endsection