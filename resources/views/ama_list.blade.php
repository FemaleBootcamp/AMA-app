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
    				  <input input type="date"  name="date_to" class="form-control">
    				</div>
   					 <div class="col">
     					 <input input type="date"  name="date_to" class="form-control">
    				</div>
    				<div class="col">
     					 <select id="select_tags" name="tags" multiple="multiple" style="width: 100%">
     					 	@foreach($tags as $tags)
            				<option value="{{$tags}}">  {{$tags}} </option>
            				@endforeach
					     </select>
    				</div>
  				</div>

  				<div class="row">
  					<div class="col">
    				  <input type="submit" value="Submit" class="btn btn-primary" style="margin-top: 5px;">
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
                  	@foreach ($amas as $amas)
                  	<tr>
                    <td>{{$amas->title}}</td>
                    <td>{{$amas->person}}</td>
                    <td>{{$amas->tags}}</td>
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
