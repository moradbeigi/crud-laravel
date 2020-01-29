<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Striped Rows</h2>
  <p>show users:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>نام</th>
        <th>ایمیل</th>
        <th>تلفن</th>
        <th>نقش</th>
      </tr>
  </thead>
  
    <tbody>
      @foreach ($users as $user)
      @switch($user->role)
          @case(1)
              @php   $role = 'admin'   @endphp
              @break
          @case(2)
              @php    $role ='normal user'  @endphp
              @break
          @default
              
      @endswitch
      <tr>
       <td>{{$user->name}}</td>
       <td>{{$user->email}}</td>
       <td>{{$user->phone}}</td>
       <td>{{$role}}</td>
       
       <td>
       <a href="{{route('adminedit',$user->id)}}">edit </a><br>
       <a href="{{route('deleteadmin',$user->id)}}">delete</a>
       </td>
      
      </tr>
      @endforeach
    </tbody> 
  </table>  