
<h2 style="color:cornflowerblue">edit your data</h2>

@include("layout.header")

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
              </div>
            @endforeach
        </ul>
    </div>
@endif
<br>
<form action="{{route('company.update' ,$data->id)}}" method="Post">
    @csrf
    @method('PUT')
    <input  type="text" name="name" value="{{$data->name}}"><br><br>
    <input type="text" name="address" value="{{$data->address}}"><br><br>
    <input type="submit" name="submit">
  </form>



@include("layout.footer")
