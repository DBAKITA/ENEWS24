@extends ('layouts.main-layout')
@section ('title', 'Login page')
@section ('heading', 'Create your account')

@section ('content')

<div class = "row">

 <div class = "col-md-10">
    <h1> Create An Account</h1>
<div>


</div>

<form action="" method ="post">
{!! csrf_field() !!}

    <div class="form-group">
        <label for="title"> Full Name</label>
        <input type="text" required class="form-control" id="title" name="title">
    </div>

    <div class="form-group">
         <label for="Email"> Email</label>
        <input type="text" required class="form-control" id="title" name="title">
    </div>

    <div class="form-group">
        <label for="details"> Password</label>
        <input type="text" required class="form-control" id="title" name="title">
    </div>

    <button class="btn btn-primary" type="submit"> REGISTER</button>

</form>
    
@endsection

