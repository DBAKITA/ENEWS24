@extends ('layouts.main-layout')
@section ('title', 'Categories page')
@section ('heading', 'Create a category')

@section ('content')

<div class = "row">

 <div class = "col-md-10">
    <h1> Creating a new Category</h1>
<div>

<div class = "col-md-2">
    <a class = "btn btn-primary" href="{{ url('categories' ) }}"> List</a>
</div>

</div>

<form action="" method ="post">
{!! csrf_field() !!}

    <div class="form-group">
        <label for="name"> Category name</label>
        <input type="text" required class="form-control" id="name" name="name">

    </div>

    <div class="form-group">
        <label for="details"> Category details</label>
        <textarea required name="details" rows="5" id="details" class="form-control"></textarea>

    </div>

    <button class="btn btn-primary" type="submit"> SUBMIT</button>

</form>
    
@endsection

