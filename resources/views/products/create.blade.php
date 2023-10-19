<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


    <nav class="navbar navbar-expand-sm bg-dark">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link text-light" href="/">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#">Link</a>
            </li>
        </ul>
    </nav>

    @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif

   <div class="container">
    <div class="row justify-center ">
        <div class="col-sm-8">
            <div class="card mt-3 p-3">
            <form action="/products/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value="{{old('name')}}"/>
                    @if($errors->has('name'))
                     <span class="text-danger">{{ $errors->first('name')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea rows="4" cols="" name="description" class="form-control">{{ old('description') }}</textarea>
                    @if($errors->has('description'))
                     <span class="text-danger">{{ $errors->first('description')}}</span>
                    @endif 
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" value="{{ old('image') }}"/>
                    @if($errors->has('image'))
                     <span class="text-danger">{{ $errors->first('image')}}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
            </div>
        </div>
    </div>
   </div>
</body>

</html>