@extends ('layouts.main-layout')
@section ('title', 'The different categories of news')
@section ('heading', 'eNews24 - categories')

@section ('content')
{{--NewNew
body 
category_id 
photo 
title 
user_id --}}

<div class = "row">
<div class = "col-md-8">
<h1> Posts </h1>

<div class = "col-md-4">
    <a class = "btn btn-primary" href="{{ url('posts-create' ) }}"> create</a>

</div>

</div>
</div>
    
<div class="row">
        <div class="col-12">
             <table class="table table-bordered table-striped" >
                <thead>
                    <tr>
                        <th> Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $item)

                    <tr>
                        <td> {{ $item->title }}</td>
                        <td>Edit,
                            <a href={{url('posts?delete='.$item->id)}} class="text-danger">Delete</a>
                        </td>
                    </tr>

                    @endforeach
                    

                    

                </tbody>
             </table>
        </div>
</div>
@endsection

