<!DOCTYPE html>
<html>
<head>

	<title>Create record </title>

	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>


	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

</head>

<body>

	<div class="col-md-6">
		<h1> Create new AMA record </h1>
		<form method="POST" action="">
			{{csrf_field()}}

			<div class="form-group">
				<label>Title</label>
				<input type="text" name="title" class="form-control" placeholder="Title">
			</div>

			@if ($errors->has('title'))
			<div class="alert alert-danger">{{ $errors->first('title') }}</div>
			@endif

			<div class="form-group">
				<label>Content</label>
				<textarea name="content" id="summernote" class="form-control" placeholder="Content"></textarea>
			</div>
			@if ($errors->has('content'))
			<div class="alert alert-danger">{{ $errors->first('content') }}</div>
			@endif
			<div class="form-group">
				<label>Tags</label>
				<input type="text" name="tags" pattern="[a-zA-Z0-9,]*" class="form-control" placeholder="Tags">
			</div>
			<div class="form-group">
				<label>Date created</label>
				<input input type="date" name="date_created" class="form-control">
			</div>
			<div class="form-group">
				<label>Select announcement</label>
				<select  id="select_announcement"  name="ama_announcements">
					@foreach ($ama_announcements as $announcement)
					<option value="{{$announcement->user_id}}"> {{$announcement->title}} </option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<input type="submit" value="Submit" class="btn btn-primary">
			</div>


			@if(Session::has('success'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Success!</strong>
				{{ Session::get('message', '') }}
			</div>
			@endif

		</form>

	</div>

	<script>
		$(document).ready(function() {
			$('#summernote').summernote();
		});
	</script>

	<script>
		$(document).ready(function(){
			$('#select_announcement').select2({

				placeholder : 'Select announcement'

			});
		});
	</script>

</body>

</html>
