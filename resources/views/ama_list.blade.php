@extends('layouts/admin')


@section('title')

	AMAs list

@endsection

@section('content')
		
	
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


          <p> Filter data by: </p>
          	<form action="">
		        
		        From:<input type="date" min="2018-01-01" max="2019-12-31" name="date_from"> 

		        To:<input type="date" min="2018-01-01" max="2019-12-31" name="date_to"> 
		    	</br>

		    		Tags: 
		    	<select  id="select_tags" name="tags"  style="width: 20%">

  					@foreach($amas as $amas)

  						
            			<option value=" $amas->tags" > amas </option>
            			<option value=" tags" > tags </option>

            		@endforeach

				</select>


		        

		    	</br>
		 		<input type="submit" value="Submit">

			</form>
         
          </div>


    
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@2.1.6/dist/vue.js"></script>
    <script src="/js/app.js"></script> 
    

   

  



@endsection

