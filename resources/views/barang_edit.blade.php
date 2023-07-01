<!DOCTYPE html>
<!-- credit by rahmatraditya 411201054 -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Edit Barang</title>
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
                        <b>Edit Barang</b>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{ route('barangs.update', $barang->barang_id) }}" id="myForm">
                        @method('PUT')
                        @csrf

                            <div class="form-group">
                                <label for="name">Code Barang</label>
                                <input type="text" value="{{ $barang->barang_code }}" name="barang_code" class="form-control" id="barang_code" aria-describedby="codeBarang" placeholder="Enter code">
                                    @error('barang_code')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">Nama Barang</label>
                                <input type="text" value="{{ $barang->barang_name }}" name="barang_name" class="form-control" id="barang_name" aria-describedby="nameBarang" placeholder="Enter name">
                                    @error('barang_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="qty">Qty</label>
                                <input type="number" value="{{ $barang->barang_qty }}" name="barang_qty" class="form-control" id="barang_qty" aria-describedby="addressQty" placeholder="Enter qty">
                                    @error('barang_qty')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                            </div>

                            <button type="button" class="btn btn-outline" value="Go back!" onclick="history.back()">Batal</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>