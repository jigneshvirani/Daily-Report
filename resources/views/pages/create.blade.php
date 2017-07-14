@extends('layouts.master')

@section('content')

<div class="container center_div">
<h1>Create Daily Summary</h1>
<form class="form-horizontal">
  <div class="form-group">
    <label for="user_name">Emplyee:</label>
    <select name="user_name" id="name" class="form-control">
    	<option>1</option>
    	<option>1</option>
    	<option>1</option>
    	<option>1</option>
    </select>
  </div>
  <div class="form-group">
    <label for="pwd">Project:</label>
	   <select name="project" id="project" class="form-control">
	    	<option>1</option>
    	<option>1</option>
    	<option>1</option>
    	<option>1</option>
	    </select>
  </div>
  <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
<script type="text/javascript">
	$(document).ready(function(){

		 $('#datetimepicker1').datetimepicker();
	})

</script>
@stop