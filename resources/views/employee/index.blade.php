<h1 style="color: royalblue">All Data </h1>
@include('layout.header')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">employeeName</th>
        <th scope="col">Email</th>
        <th scope="col">age</th>
        <th scope="col">salary</th>
        <th scope="col">company_id</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
@foreach ($data as $dataa )
<tr>
    <th scope="row">{{$loop->iteration}}</th>
    <td>{{$dataa->name}}</td>
    <td >{{$dataa->email}}</td>
    <td >{{$dataa->age}}</td>
    <td >{{$dataa->salary}}</td>
    <td >{{$dataa->company_id}}</td>
   <td> <a href="{{route('employee.edit' , $dataa->id)}}">edit</a></td>
   <td>
    <form action="{{route('employee.delete' ,$dataa->id)}}" method="Post" >
        @method('DELETE')
        @csrf
    <button type="submit" class="btn btn-danger">delete</button>
   </form></td>
  </tr>
@endforeach


    </tbody>
  </table>
