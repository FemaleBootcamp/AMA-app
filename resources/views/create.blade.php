@extends('layouts/admin')

@section('title')
	Create AMA record
@endsection

@section('content')


	<div class="col-sm-12">
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
				<select id="select_tags" name="tags" multiple="multiple" style="width: 100%">
     					 	@foreach($tags as $tag)
            				<option value="{{$tag}}"> {{$tag}} </option>
            				@endforeach
					     </select>
			</div>
			<div class="form-group">
				<label>Person</label>
				<input type="text" name="person" class="form-control" placeholder="Person">
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

			@if (session('success'))
    			<div class="alert alert-success">
        			{{ session('success') }}
    			</div>
			@endif

		</form>

	</div>

	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>


	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

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

	<script>
        $(document).ready(function(){
            $('#select_tags').select2({

            	placeholder : 'Select tag'

            });
        });
    </script>


@endsection
