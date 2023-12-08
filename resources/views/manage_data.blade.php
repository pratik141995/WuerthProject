<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add form</h2>

  @if($errors->any())

  <ul>
     @foreach($errors->all() as $error)
     <li style="color:red"> {{$error}}</li>
    @endforeach
  </ul>
  @endif
  <form class="form-horizontal" action="{{url('save_data')}}" method="POST">
    @csrf
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Purpose of Visit:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="purpose_visit"  name="purpose_visit">
      </div>
    </div>


    <div class="form-group">
      <div class="col-sm-2">
      </div>
      <div class="col-sm-3">
        <label class="control-label col-sm-2" for="email">Name:</label>
        <input type="text" class="form-control" id="visitor_name"  name="visitor_name[]">
      </div>
      <div class="col-sm-3">
        <label class="control-label col-sm-2" for="company">company:</label>
        <input type="text" class="form-control" id="company"  name="company[]">
      </div>
      <div class="col-sm-3">
        <label class="control-label col-sm-2" for="email">email:</label>
        <input type="email" class="form-control" id="email"  name="email[]">
      </div>
    </div>

    <div id="append_data">
      
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Manage:</label>
      <button type="button" class="btn btn-primary" id="add_data"> Add </button>
      <button type="button" class="btn btn-danger"  id="remove_data"> Remove </button>

      
    </div>





    <div class="form-group">
      <label class="control-label col-sm-2" for="email">cc_email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="cc_email"  name="cc_email">
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="email">visit_date:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="visit_date"  name="visit_date">
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="email">start_time:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="start_time"  name="start_time">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="email">end_time:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="end_time"  name="end_time">
      </div>
    </div>

      <div class="form-group">
      <label class="control-label col-sm-2" for="email">end_time:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="end_time"  name="end_time">
      </div>
    </div>



    <div class="form-group">
      <label class="control-label col-sm-2" for="email">meeting_room:</label>
      <div class="col-sm-10">
       <select class="form-control" name="meeting_room">
         <option value="room1"> Room 1 </option>
         <option value="room2"> Room 2 </option>
         <option value="room3"> Room 3 </option>

       </select>
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
<script type="text/javascript">
  $(document).ready(function(){
   
   $("#add_data").click(function(){
    var html='<div class="form-group"><div class="col-sm-2"></div><div class="col-sm-3"><label class="control-label col-sm-2" for="email">Name:</label><input type="text" class="form-control" id="visitor_name"  name="visitor_name[]"></div><div class="col-sm-3"><label class="control-label col-sm-2" for="company">company:</label><input type="text" class="form-control" id="company"  name="company[]"></div><div class="col-sm-3"><label class="control-label col-sm-2" for="email">email:</label><input type="email" class="form-control" id="email"  name="email[]"></div></div>';
      $('#append_data').append(html);
   });

    $("#remove_data").click(function(){
       $('#append_data').children().last().remove();
    })


  });
</script>
</body>
</html>

 
