@extends('layouts/admin')

@section('title')
	AMAs list
@endsection

@section('content')

			<div class="col-sm-12">
			 <form action="">

			 	<div class="row">
    				<div class="col">
    				  <label>Date From:</label>
    				</div>
   					 <div class="col">
     					<label>Date To:</label>
    				</div>
    				<div class="col">
     					<label>Tags:</label>
    				</div>
  				</div>

 				 <div class="row">
    				<div class="col">
    				  <input input type="date"  name="date_from" class="form-control">
    				</div>
   					 <div class="col">
     					 <input input type="date"  name="date_to" class="form-control">
    				</div>
    				<div class="col">
     					 <select id="select_tags" name="tags" multiple="multiple" style="width: 100%">
     					 	@foreach($tags as $tag)
            				<option value="{{$tag}}"> {{$tag}} </option>
            				@endforeach
					     </select>
    				</div>
  				</div>

  				<div class="row">
  					<div class="col">
    				  <input type="submit" value="Submit" class="btn btn-primary" style="margin-top: 5px; margin-bottom: 5px;">
    				</div>
  				</div>

			</form>
			</div>

              <div class="col-sm-12">
                <table class="table table-bordered table-striped">

                  <thead>
                    <tr>
                      <th>Title:</th>
                      <th>Answred by:</th>
                      <th>Tags:</th>
                      <th>Actions</th>
                    </tr>
                  </thead>

                  <tbody>
                  	@foreach ($amas as $ama)
                  	<tr>
                    <td>{{$ama->title}}</td>
                    <td>{{$ama->person}}</td>
                    <td>{{$ama->tags}}</td>
                    <td>

                          <button type="button" class="btn btn-info">
                          	View Details
                      	  </button>

                          <button type="button" class="btn btn-info">
                          	Edit
                      	  </button>

                          <button type="button" class="btn btn-info">
                          	Delete
                          </button>

                    </td>
                	</tr>
                    @endforeach
                  </tbody>
                </table>
          </div>

 		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	  	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

        <script>
              $(document).ready(function(){
                  $('#select_tags').select2({

                   placeholder : 'Select tag'

               });
              });
          </script>

@endsection
