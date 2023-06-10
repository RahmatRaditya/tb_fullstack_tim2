<!DOCTYPE html>
<!-- credit by rahmatraditya 411201054 -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Edit Outlet</title>
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
                        <b>Edit Outlet</b>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{ route('outlets.update', $outlet->outlet_id) }}" id="myForm">
                        @method('PUT')
                        @csrf
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" value="{{ $outlet->outlet_name }}" name="outlet_name" class="form-control" id="outlet_name" aria-describedby="nameHelp" placeholder="Enter name">
                            </div>

                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <input type="text" value="{{ $outlet->outlet_address }}" name="outlet_address" class="form-control" id="outlet_address" aria-describedby="addressHelp" placeholder="Enter address">
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