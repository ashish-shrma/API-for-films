@extends('layouts.app')

@section('content')



<div class="container">
<h3>Add Genre</h3>
<form action="" method="post" enctype="multipart/form-data">
     @csrf

			<div class="form-group">
				<label for="filmGenre">Genre</label>
				<input type="text" class="form-control" id="filmGenre" name="name" placeholder="Enter genre" required>
			</div> 

			<input class="btn btn-primary" type="submit" name="submit" value="Add Genre">

</form>

<h4 class="text-center">Existing Tags</h4>
@foreach($genres as $genre)
<li>{{$genre->name}}</li>
@endforeach
</div>








@endsection
