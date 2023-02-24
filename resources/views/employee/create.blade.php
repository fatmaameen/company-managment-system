<h1 style="color:blue">Hello in your company...</h1><br>
<h2 style="color:cornflowerblue"> Please inter this data</h2>

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
<form action="{{route('employee.store')}}" method="Post">
    @csrf
    <input  type="text" name="name" placeholder=" employee name"><br><br>
    <input type="email" name="email" placeholder="employee email"><br><br>
    <input type="text" name="age" placeholder="employee age"><br><br>
    <input type="text" name="salary" placeholder="employee salary"><br><br>
    <div class="form-floating">
        <select class="form-select" name="company_id" id="floatingSelect" aria-label="Floating label select example">
          <option selected>company_id</option>
          @foreach ($total_data as $data)
          <option value="{{$data->id}}">{{$data->id}}</option>
          @endforeach
        </select>
        <label for="floatingSelect">choose the company_id</label>
      </div>
    <input type="submit" name="submit">
  </form>



@include("layout.footer")
