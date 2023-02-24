
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
<form action="{{route('employee.update' ,$data->id)}}" method="Post">
    @csrf
    @method('PUT')
    <input  type="text" name="name" value="{{$data->name}}"><br><br>
    <input type="text" name="email" value="{{$data->email}}"><br><br>
    <input  type="text" name="age" value="{{$data->age}}"><br><br>
    <input type="text" name="salary" value="{{$data->salary}}"><br><br>
    <div class="form-floating">
        <select class="form-select" name="company_id" id="floatingSelect" aria-label="Floating label select example">
          <option selected>company_id</option>
          @foreach ($total_data as $one)
          <option value="1">{{$one->id}}</option>
          @endforeach
        </select>
        <label for="floatingSelect">update the company_id</label>
      </div>
    <input type="submit" name="submit">
  </form>



@include("layout.footer")
