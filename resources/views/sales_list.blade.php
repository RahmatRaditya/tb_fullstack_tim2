<!DOCTYPE html>
<!-- credit by rahmatraditya 411201054 -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>List Sales</title>
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="d-flex justify-content-between mt-5 mb-2">
                        <h3>List Sales</h3>
                        <a href="{{ route('sales.create') }}"><button class="btn btn-primary alig">Tambah Sales</button></a>
                    </div>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($sales as $sales)
                        <tr>
                            <td>{{ $sales->sales_name }}</td>
                            <td>{{ $sales->sales_email }}</td>
                            <td>{{ $sales->sales_phone }}</td>
                            <td>
                                <a href="{{ route('sales.edit', $sales->sales_id) }}">
                                    <button type="button" class="btn btn-warning">Edit</button>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('sales.destroy', $sales->sales_id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </body>
</html>