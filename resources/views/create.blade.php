

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>タイトル</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Navbar</a>
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </nav>

    <div class="container ">

            @if($errors->any())
            <h4>{{$errors->first()}}</h4>
            @endif

            <div class="card m-t-10 m-auto" style="width: 18rem;">
                    <form action="{{route('todo.store')}}">
                            <div class="form-group">
                              <label for="exampleFormControlInput1">内容</label>
                              <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="内容">
                            </div>

                            <input type="hidden" name="is_complete" value=0>
                                <button class="btn btn-primary" type="submit">submit
                                </button>
                   </form>
           </div>

</body>
</html>
