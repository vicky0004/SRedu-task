<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User Update</title>
    <style>
        .required label::after {
            content: " *";
            color: red;
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-sm">
                <a class="navbar-brand" href="#" style="color: white">Vicky</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}" style="color: white">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/register') }}" style="color: white">Register</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        </nav>
    </div>
    <form action="{{route('users.update', $user->id)}}" method="post">
        @csrf
        <div class="container d-flex justify-content-center">
            <div class="mt-4 p-3 card bg-white" style="width: 19rem;">
                <h3 class="text-center text-primary">
                    User Registration
                </h3>
                {{-- <div class="row"> --}}
                <div class="form-group required">
                    <label for="">Name:</label>
                    <input type="text" name="name" id="" class="form-control" value="{{ old('name', $user->name) }}"/>
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                {{-- </div> --}}
                {{-- <div class="row"> --}}
                <div class="form-group required">
                    <label for="">Email:</label>
                    <input type="email" name="email" id="" class="form-control"  value="{{ old('email', $user->email) }}"/>
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                {{-- </div> --}}
                {{-- <div class="row"> --}}

                <div class="form-group required">
                    <label for="">Mobile Number:</label>
                    <input type="text" name="mobile" id="" class="form-control" value="{{ old('mobile', $user->mobile) }}" />
                    <span class="text-danger">
                        @error('mobile')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group required">
                    <label for="">Password:</label>
                    <input type="text" name="password" id="" class="form-control" />
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                {{-- </div> --}}
                {{-- <div class="row"> --}}
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary col-md-6">Submit</button>
                </div>
                {{-- </div> --}}
            </div>
        </div>
    </form>
</body>

</html>
