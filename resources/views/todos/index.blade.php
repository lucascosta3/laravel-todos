@extends('app');


@section('content')

    <div class="container w-25 p-4 mt-4" >
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1">Add task</label>
                <input type="text" class="form-control" name="title" placeholder="Add new task">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection