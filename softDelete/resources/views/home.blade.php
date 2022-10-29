<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($user as $key=>$users)
    <tr>
      <td>{{$key+1}}</td>
      <td>{{$users->name}}</td>
      <td>{{$users->email}}</td>
      <td>{{$users->created_at->toDateString()}}</td>
      <td>
       <a href="{{url('delete/'.$users->id)}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
{!! $user->links() !!}
<style>
  .w-5{
    display: none;
  }
</style>
<!--soft delete data -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($deleteuser as $key=>$users)
    <tr>
      <td>{{$key+1}}</td>
      <td>{{$users->name}}</td>
      <td>{{$users->email}}</td>
      <td>{{$users->created_at->toDateString()}}</td>
      <td>
       <a href="{{url('restore/'.$users->id)}}" class="btn btn-primary">Restore</a>

       <a href="{{url('pdelete/'.$users->id)}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
{!! $user->links() !!}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>