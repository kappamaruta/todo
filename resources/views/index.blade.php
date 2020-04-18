

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
            <div class="card m-t-10 m-auto" style="width: 18rem;">
                    <div class="card-header">
                      Todo-list
                    </div>
                    <ul class="list-group list-group-flush">
                      @foreach($todos as $todo)
                      <li class="list-group-item">{{$todo->title()->value()}}</li>
                      @endforeach
                    </ul>
                    <a href="{{route('todo.create')}}" class="btn btn-primary">新規登録</a>
                  </div>



      </div>

</body>
</html>
