<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-header">
                Venturo - Laporan penjualan tahunan per menu
            </div>
            <div class="card-body">
                <form method="GET" action="{{ url('/') }}">
                    <div class="row">
                        <div class="col-2">
                            <select class="form-control" name="tahun">
                                <option value="">Pilih Tahun</option>
                                <option value="2021" @isset($tahun) @selected($tahun == 2021) @endisset>2021</option>
                                <option value="2022" @isset($tahun) @selected($tahun == 2022) @endisset>2022</option>
                            </select>
                        </div>
                        <div class="col-8">
                            <button type="submit" class="btn btn-primary">Tampilkan</button>
                            @if(isset($tahun) && $tahun != "")
                            <a href="http://tes-web.landa.id/intermediate/menu" target="_blank" rel="Array Menu" class="btn btn-secondary">
                                Json Menu
                            </a>
                            <a href="http://tes-web.landa.id/intermediate/transaksi?tahun=2021" target="_blank" rel="Array Transaksi" class="btn btn-secondary">
                                Json Transaksi
                            </a>
                            @endisset
                        </div>
                    </div>
                </form>
                @if(isset($tahun) && $tahun != "")
                <hr>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" style="margin: 0;">
                        <thead>
                            <tr class="table-dark">
                                <th rowspan="2" style="text-align:center;vertical-align: middle;width: 250px;">Menu</th>
                                <th colspan="12" style="text-align: center;"> {{ "Periode Pada ".$tahun }}
                                </th>
                                <th rowspan="2" style="text-align:center;vertical-align: middle;width:75px">Total</th>
                            </tr>
                            <tr class="table-dark">
                                <th style="text-align: center;width: 75px;">Jan</th>
                                <th style="text-align: center;width: 75px;">Feb</th>
                                <th style="text-align: center;width: 75px;">Mar</th>
                                <th style="text-align: center;width: 75px;">Apr</th>
                                <th style="text-align: center;width: 75px;">Mei</th>
                                <th style="text-align: center;width: 75px;">Jun</th>
                                <th style="text-align: center;width: 75px;">Jul</th>
                                <th style="text-align: center;width: 75px;">Ags</th>
                                <th style="text-align: center;width: 75px;">Sep</th>
                                <th style="text-align: center;width: 75px;">Okt</th>
                                <th style="text-align: center;width: 75px;">Nov</th>
                                <th style="text-align: center;width: 75px;">Des</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-secondary" colspan="14"><b>Makanan</b></td>
                            </tr>
                            @foreach ($menus as $menu)
                                @if($menu->kategori == 'makanan')
                                    <tr>
                                        <td>{{ $menu->menu }}</td>
                                        @for ($i = 1; $i <= 12 ; $i++)
                                        <td style="text-align: right;">
                                            {{ $hasil[$menu->menu][$i] }}
                                        </td>
                                        @endfor
                                        <td style="text-align: right;"><b>{{ $totalMenu[$menu->menu] }}</b></td>
                                    </tr>
                                @endif
                            @endforeach
                            <tr class="table-dark">
                                <td><b>Total Makanan</b></td>
                                @for($i = 1; $i <= 12 ; $i++)
                                <td style="text-align: right;">
                                    <b>{{ $totalMenu['makanan'][$i] }}</b>
                                </td>
                                @endfor
                                <td style="text-align: right;"><b>{{ $totalMenuAll['makanan'] }}</b></td>
                            </tr>
                            <tr>
                                <td class="table-secondary" colspan="14"><b>Minuman</b></td>
                            </tr>
                            @foreach ($menus as $menu)
                                @if($menu->kategori == 'minuman')
                                    <tr>
                                        <td>{{ $menu->menu }}</td>
                                        @for ($i = 1; $i <= 12 ; $i++)
                                        <td style="text-align: right;">
                                            {{ $hasil[$menu->menu][$i] }}
                                        </td>
                                        @endfor
                                        <td style="text-align: right;"><b>{{ $totalMenu[$menu->menu] }}</b></td>
                                    </tr>
                                @endif
                            @endforeach
                            <tr class="table-dark">
                                <td><b>Total Minuman</b></td>
                                @for($i = 1; $i <= 12 ; $i++)
                                <td style="text-align: right;">
                                    <b>{{ $totalMenu['minuman'][$i] }}</b>
                                </td>
                                @endfor
                                <td style="text-align: right;"><b>{{ $totalMenuAll['minuman'] }}</b></td>
                            </tr>
                            <tr class="table-dark">
                                <td><b>Total</b></td>
                                @for($i = 1; $i <= 12 ; $i++)
                                <td style="text-align: right;">
                                    <b>{{ $totalBulan[$i] }}</b>
                                </td>
                                @endfor
                                <td style="text-align: right;"><b>{{ $total }}</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                @endisset
            </div>
        </div>
    </div>
</body>
</html>