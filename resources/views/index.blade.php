<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">title</th>
      <th scope="col">thumbnail</th>
      <th scope="col">Athor</th>
      <th scope="col">Publisher</th>
      <th scope="col">publication</th>
      <th scope="col">price</th>
      <th scope="col">quantity</th>
      <th scope="col">category_id</th>
      <th>
        <a href="{{route('book.create')}}" class="btn btn-success">them moi</a>
      </th>
    </tr>
  </thead>
  <tbody>
    @foreach ($books as $book )
    <tr>
      <th scope="row">{{$book->id}}</th>
      <td>{{$book->title}}</td>
      <td>
        <img src="{{$book->thumbnail}}" alt="" width="150">
      </td>
      <td>{{$book->author}}</td>
      <td>{{$book->publisher}}</td>
      <td>{{$book->publication}}</td>
      <td>{{$book->price}}</td>
      <td>{{$book->name}}</td>
      <td>
      <a href="{{route('book.edit',$book->id)}}" class="btn btn-success">sua</a>
      <form action="{{route('book.destroy',$book->id)}}" method="post" onclick="return confirm('ban co muon xoa khong ?')">
            @csrf 
            @method('delete')
            <button class="btn btn-danger">xoa</button>
      </form>
      </td>
    </tr>
    @endforeach
   
  </tbody>
</table>
</body>
</html>
