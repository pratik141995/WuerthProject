<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Visitor Data</h2>                                                                            
  <div class="table-responsive">
  <a href="{{url('add_visitor_data')}}"><button class="btn btn-primary"> Add </button> </a>          
  <table class="table">
    <thead>
      <tr>
        <th>Visitor Name</th>
        <th>Company</th>
        <th>EmailID</th>
        <th>Visit Date</th>
        <th>Meeting Room</th>
      </tr>
    </thead>
    <tbody>
    @if(count($visitor) > 0)
      @foreach($visitor as $data)
        <tr>
          <td> {{$data->visitor_name}} </td>
          <td> {{$data->company}} </td>
          <td> {{$data->email}} </td>
          <td> {{$data->visit_date}} </td>
          <td> {{$data->meeting_room}} </td>
        </tr>
      @endforeach
    @else
    <tr>
      <td> No Data Found</td>
    </tr>

    @endif
    </tbody>
  </table>
  </div>
</div>

</body>
</html>
