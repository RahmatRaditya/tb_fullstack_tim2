<!DOCTYPE html>
<!-- credit by rahmatraditya 411201054 -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Tambah Sales</title>
        <style>
            .container,
            .row {
            height: 100%;
            min-height: 100%;
            }
            html,
            body {
            height: 100%;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="card" style="width: 24rem;">
                    <div class="card-header">
                        <b>Tambah Sales</b>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{ route('users.store') }}" id="myForm">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" value="{{ old('password') }}" class="form-control" id="password" aria-describedby="phoneHelp" placeholder="Enter password">
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                            </div>

                            <button type="button" class="btn btn-outline" value="Go back!" onclick="history.back()">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>