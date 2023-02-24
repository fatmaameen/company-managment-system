<h1 style="color: royalblue">All Data </h1>
@include('layout.header')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">companyName</th>
        <th scope="col">companyAddress</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
@foreach ($data as $dataa )
<tr>
    <th scope="row">{{$loop->iteration}}</th>
    <td>{{$dataa->name}}</td>
    <td >{{$dataa->address}}</td>
   <td> <a href="{{route('company.edit' , $dataa->id)}}">edit</a></td>
   <td>
    <form action="{{route('company.delete' ,$dataa->id)}}" method="Post" >
        @method('DELETE')
        @csrf
    <button type="submit" class="btn btn-danger">delete</button>
   </form></td>
  </tr>
@endforeach


    </tbody>
  </table>
