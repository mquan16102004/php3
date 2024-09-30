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
    <div class="container">
        <form action="{{route('book.update',$book->id)}}" method="post">
            @csrf
            @method('put')
            <input type="hidden" name="id" value="{{$book->id}}">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">title</label>
                <input type="text" class="form-control" name="title" value="{{$book->title}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">thumbnail</label>
                <input type="text" class="form-control" name="thumbnail" value="{{$book->thumbnail}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">author</label>
                <input type="text" class="form-control" name="author" value="{{$book->author}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">publisher</label>
                <input type="text" class="form-control" name="publisher" value="{{$book->publisher}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">publication</label>
                <input type="date" class="form-control" name="publication" value="{{$book->publication}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">price</label>
                <input type="number" step="0.1" class="form-control" name="price" value="{{$book->price}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">quantity</label>
                <input type="number" class="form-control" name="quantity" value="{{$book->quantity}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">danh muc</label>
                <select name="category_id" class="form-control">
                    @foreach ($categories as $cate)
                    <option value="{{$cate->id}}"
                        @if ($cate->id === $book->category_id)
                        selected
                        @endif >
                        {{$cate->name}}
                    </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <button type="submit" class="btn btn-primary">list</button>
        </form>
    </div>
</body>

</html>