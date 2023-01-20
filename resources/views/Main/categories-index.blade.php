@extends ('layouts.main-layout')
@section ('title', 'The different categories of news')
@section ('heading', 'eNews24 - categories')

@section ('content')

<div class = "row">
<div class = "col-md-8">
<h1> News Categories.....</h1>

<div class = "col-md-4">
    <a class = "btn btn-primary" href="{{ url('categories-create' ) }}"> create</a>

</div>

</div>
</div>
    
@endsection

