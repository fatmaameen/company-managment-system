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
<form action="{{route('company.store')}}" method="Post">
    @csrf
    <input  type="text" name="name" placeholder=" company name"><br><br>
    <input type="text" name="address" placeholder="company address"><br><br>
    <input type="submit" name="submit">
  </form>



@include("layout.footer")
