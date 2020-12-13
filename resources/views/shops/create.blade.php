@extends('layouts.app')

@section('content')
<h2>Submit your shop</h2>

<form action="{{ route('shops.store') }}" method="post">
    @csrf

    <div class="form-group">
      <label for="">Name of Shop</label>
      <input type="text" name="name" id="" class="form-control" placeholder="">
    </div>

    <div class="form-group">
      <label for="">Description</label>
      <textarea type="text" name="description" id="" class="form-control" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
