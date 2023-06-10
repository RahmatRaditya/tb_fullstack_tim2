<!DOCTYPE html>
<!-- credit by rahmatraditya 411201054 -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <title>List Transaksi</title>
        <style>
          li {
            list-style: none;
            margin: 20px 0 20px 0;
          }
    
          a {
            text-decoration: none;
          }
    
          .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            margin-left: -300px;
            transition: 0.4s;
          }
    
          .active-main-content {
            margin-left: 250px;
          }
    
          .active-sidebar {
            margin-left: 0;
          }
    
          #main-content {
            transition: 0.4s;
          }
        </style>
    </head>

    <body>
        <div class="sidebar p-4 bg-primary" id="sidebar">
            <h4 class="mb-5 text-white">SalesVisit</h4>
            <li>
              <a class="text-white" href="<?php echo url('transaksi') ?>">
              <i class="fas fa-tags pr-2"></i>
                Transaksi
              </a>
            </li>
            <li>
              <a class="text-white" href="<?php echo url('users') ?>">
                <i class="fas fa-users pr-2"></i>
                Master Sales
              </a>
            </li>
            <li>
              <a class="text-white" href="<?php echo url('barangs') ?>">
                <i class="fas fa-shopping-bag pr-2"></i>
                Master Barang
              </a>
            </li>
            <li>
              <a class="text-white" href="<?php echo url('outlets') ?>">
                <i class="fas fa-store-alt pr-2"></i>
                Master Outlet
              </a>
            </li>
          </div>
        </div>


        <div class="container" id="main-content">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12 pt-4">
                    <button class="btn btn-primary" id="button-toggle">
                        <i class="fas fa-bars"></i>
                    </button>

                    <div class="d-flex justify-content-between mt-5 mb-2">
                        <h3>List Transaksi</h3>
                        <a href="{{ route('transaksi.create') }}"><button class="btn btn-primary alig">Buat Transaksi</button></a>
                    </div>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Nomor</th>
                        <th scope="col">Sales</th>
                        <th scope="col">Barang</th>
                        <th scope="col">Outlet</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Display</th>
                        <th scope="col">Visit Date</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($transaksi as $t)
                        <tr>
                            <td>{{ $t->transaksi_nomor }}</td>
                            <td>{{ $t->name }}</td>
                            <td>{{ $t->barang_name }}</td>
                            <td>{{ $t->outlet_name }}</td>
                            <td>{{ $t->barang_qty }}</td>
                            <td>{{ $t->transaksi_display }}</td>
                            <td>{{ $t->transaksi_visit }}</td>
                            <td>
                                <a href="{{ route('transaksi.edit', $t->transaksi_id) }}">
                                    <button type="button" class="btn btn-warning">Edit</button>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('transaksi.destroy', $t->transaksi_id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin menghapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>

        <script>
            // event will be executed when the toggle-button is clicked
            document.getElementById("button-toggle").addEventListener("click", () => {

            // when the button-toggle is clicked, it will add/remove the active-sidebar class
            document.getElementById("sidebar").classList.toggle("active-sidebar");

            // when the button-toggle is clicked, it will add/remove the active-main-content class
            document.getElementById("main-content").classList.toggle("active-main-content");
            });
        </script>
    </body>
</html>