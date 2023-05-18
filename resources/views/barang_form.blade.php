<!DOCTYPE html>
<!-- credit by rahmatraditya 411201054 -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Tambah Barang</title>
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
                        <b>Tambah Barang</b>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{ route('barangs.store') }}" id="myForm">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Barang</label>
                                <input type="text" name="barang_name" class="form-control" id="barang_name" aria-describedby="nameHelp" placeholder="Enter name">
                            </div>

                            <div class="form-group">
                                <label for="qty">Qty</label>
                                <input type="number" name="barang_qty" class="form-control" id="barang_qty" aria-describedby="addressQty" placeholder="Enter qty">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>