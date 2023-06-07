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
                                <label for="name">Sales</label>
                                <select  name="sales_name" class="form-control" id="sales_name" aria-describedby="salesHelp" placeholder="Pilih sales">
                                    @foreach ($sales as $s)
                                        <option value="{{ $s->sales_id }}">{{ $s->sales_name }}</option>
                                    @endforeach
                                </select>
                                                
                            </div>

                            
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>