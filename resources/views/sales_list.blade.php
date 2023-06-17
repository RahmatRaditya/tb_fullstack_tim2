<!DOCTYPE html>
<!-- credit by rahmatraditya 411201054 -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <title>Master Sales</title>
        <style>
          li {
            list-style: none;
            margin: 20px 0 20px 0;
          }
    
          a {
            text-decoration: none;
          }
    
          .sidebar {
            height: 100vh;
          }
        </style>
    </head>

    <body>
        <div class="row navbar navbar-light bg-light sticky-top ">
            <nav class="navbar">
                <a class="navbar-brand font-weight-bold pl-4" href="#">SALES VISIT</a>
            </nav>
        </div>  

        <div class="row">
            <div class="col-md-2">
                <div class="sidebar p-4 bg-primary" id="sidebar">
                    <li>
                      <a class="text-white" href="<?php echo url('transaksi') ?>">
                      <i class="fas fa-tags pr-2 "></i>
                        Transaksi
                      </a>
                    </li>
                    <li>
                      <a class="text-white" href="<?php echo url('users') ?>">
                        <i class="fas fa-users pr-2 "></i>
                        Master Sales
                      </a>
                    </li>
                    <li>
                      <a class="text-white" href="<?php echo url('barangs') ?>">
                        <i class="fas fa-shopping-bag pr-2 "></i>
                        Master Barang
                      </a>
                    </li>
                    <li>
                      <a class="text-white" href="<?php echo url('outlets') ?>">
                        <i class="fas fa-store-alt pr-2 "></i>
                        Master Outlet
                      </a>
                    </li>
                </div>
            </div>

            <div class="col mr-4">
                <div class="justify-content-center align-items-center">

                        <div class="d-flex justify-content-between mt-5 mb-2">
                            <h3 class="font-weight-bold">Master Sales</h3>
                            <a href="{{ route('users.create') }}"><button class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp&nbspTambah Sales</button></a>
                        </div>

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('users.edit', $user->id) }}">
                                        <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('users.destroy', $user->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin menghapus data ini?')"><i class="fas fa-trash-alt"></i></button>
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