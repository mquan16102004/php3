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
        <form action="{{route('book.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">thumbnail</label>
                <input type="text" class="form-control" name="thumbnail">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">author</label>
                <input type="text" class="form-control" name="author">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">publisher</label>
                <input type="text" class="form-control" name="publisher">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">publication</label>
                <input type="date" class="form-control" name="publication">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">price</label>
                <input type="number" step="0.1" class="form-control"name="price">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">quantity</label>
                <input type="number" class="form-control"name="quantity">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">danh muc</label>
               <select name="category_id" class="form-control">
                    @foreach ($categories as $cate)
                        <option value="{{$cate->id}}">
                            {{$cate->name}}
                        </option>
                    @endforeach
               </select>
            </div>

            <button type="submit" class="btn btn-primary">add new</button>
            <button type="submit" class="btn btn-primary">list</button>
        </form>
    </div>
</body>

</html>