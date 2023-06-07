<!DOCTYPE html>
<!-- credit by rahmatraditya 411201054 -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Buat Transaksi</title>
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
                        <b>Buat Transaksi</b>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{ route('transaksi.store') }}" id="myForm">
                            @csrf

                            <div class="form-group">
                                <label for="sales">Sales</label>
                                <select class="form-control" id="id" name="id">
                                <option value="">-- Pilih Sales --</option>
                                @foreach ($users as $u)
                                    <option value="{{ $u->id }}">{{ $u->name }}</option>
                                @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="barang">Barang</label>
                                <select class="form-control" id="barang_id" name="barang_id">
                                <option value="">-- Pilih Barang --</option>
                                @foreach ($barangs as $b)
                                    <option value="{{ $b->barang_id }}">{{ $b->barang_name }}</option>
                                @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="outlet">Outlet</label>
                                <select class="form-control" id="outlet_id" name="outlet_id">
                                <option value="">-- Pilih Outlet --</option>
                                @foreach ($outlets as $o)
                                    <option value="{{ $o->outlet_id }}">{{ $o->outlet_name }}</option>
                                @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="display">Total Display</label>
                                <input type="number" name="transaksi_display" class="form-control" id="transaksi_display" placeholder="Enter total display">
                            </div>

                            <div class="form-group">
                                <label for="visit">Visit Date</label>
                                <input type="date" name="transaksi_visit" class="form-control" id="transaksi_visit" placeholder="Pilih tanggal">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>