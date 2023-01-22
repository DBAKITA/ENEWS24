@extends ('layouts.main-layout')
@section ('title', 'posts page')
@section ('heading', 'Create a post')

@section ('content')

<div class = "row">

 <div class = "col-md-10">
    <h1> Creating a new Post</h1>
<div>

<div class = "col-md-2">
    <a class = "btn btn-primary" href="{{ url('posts' ) }}"> List</a>
</div>

</div>

<form action="" method ="post">
{!! csrf_field() !!}

    <div class="form-group">
        <label for="title"> Post Title</label>
        <input type="text" required class="form-control" id="title" name="title">
    </div>

    <div class="form-group">
    <label for="category_id"> Post Category</label>
    <select required class="form-control" id="category_id" name="category_id">
       <option value=""></option>
       @foreach($categories as $item)
       <option value="{{ $item->id}}"> {{ $item-> name}}  </option>

       @endforeach
    </select>

    </div>

    <div class="form-group">
        <label for="details"> Post details</label>
        <textarea required name="body" rows="5" id="body" class="form-control"></textarea>
    </div>

    <button class="btn btn-primary" type="submit"> SUBMIT</button>

</form>
    
@endsection

