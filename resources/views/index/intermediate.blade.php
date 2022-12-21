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
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
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
                            <tr>
                                <td>{{ $menu[0]->menu }}</td>
                                <td style="text-align: right;">
                                    {{ $total_1_jan }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_1_feb }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_1_mar }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_1_apr }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_1_mei }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_1_jun }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_1_jul }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_1_ags }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_1_sep }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_1_okt }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_1_nov }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_1_des }}
                                </td>
                                <td style="text-align: right;"><b>{{ $total_1 }}</b></td>
                            </tr>
                            <tr>
                                <td>{{ $menu[1]->menu }}</td>
                                <td style="text-align: right;">
                                    {{ $total_2_jan }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_2_feb }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_2_mar }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_2_apr }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_2_mei }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_2_jun }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_2_jul }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_2_ags }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_2_sep }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_2_okt }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_2_nov }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_2_des }}
                                </td>
                                <td style="text-align: right;"><b>{{ $total_2 }}</b></td>
                            </tr>
                            <tr>
                                <td>{{ $menu[2]->menu }}</td>
                                <td style="text-align: right;">
                                    {{ $total_3_jan }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_3_feb }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_3_mar }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_3_apr }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_3_mei }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_3_jun }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_3_jul }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_3_ags }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_3_sep }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_3_okt }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_3_nov }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_3_des }}
                                </td>
                                <td style="text-align: right;"><b>{{ $total_3 }}</b></td>
                            </tr>
                            <tr>
                                <td>{{ $menu[3]->menu }}</td>
                                <td style="text-align: right;">
                                    {{ $total_4_jan }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_4_feb }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_4_mar }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_4_apr }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_4_mei }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_4_jun }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_4_jul }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_4_ags }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_4_sep }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_4_okt }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_4_nov }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_4_des }}
                                </td>
                                <td style="text-align: right;"><b>{{ $total_4 }}</b></td>
                            </tr>
                            <tr>
                                <td>{{ $menu[4]->menu }}</td>
                                <td style="text-align: right;">
                                    {{ $total_5_jan }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_5_feb }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_5_mar }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_5_apr }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_5_mei }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_5_jun }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_5_jul }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_5_ags }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_5_sep }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_5_okt }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_5_nov }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_5_des }}
                                </td>
                                <td style="text-align: right;"><b>{{ $total_5 }}</b></td>
                            </tr>
                            <tr>
                                <td class="table-secondary" colspan="14"><b>Minuman</b></td>
                            </tr>
                            <tr>
                                <td>{{ $menu[5]->menu }}</td>
                                <td style="text-align: right;">
                                    {{ $total_6_jan }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_6_feb }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_6_mar }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_6_apr }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_6_mei }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_6_jun }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_6_jul }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_6_ags }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_6_sep }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_6_okt }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_6_nov }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_6_des }}
                                </td>
                                <td style="text-align: right;"><b>{{ $total_6 }}</b></td>
                            </tr>
                            <tr>
                                <td>{{ $menu[6]->menu }}</td>
                                <td style="text-align: right;">
                                    {{ $total_7_jan }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_7_feb }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_7_mar }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_7_apr }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_7_mei }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_7_jun }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_7_jul }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_7_ags }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_7_sep }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_7_okt }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_7_nov }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_7_des }}
                                </td>
                                <td style="text-align: right;"><b>{{ $total_7 }}</b></td>
                            </tr>
                            <tr>
                                <td>{{ $menu[7]->menu }}</td>
                                <td style="text-align: right;">
                                    {{ $total_8_jan }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_8_feb }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_8_mar }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_8_apr }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_8_mei }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_8_jun }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_8_jul }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_8_ags }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_8_sep }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_8_okt }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_8_nov }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_8_des }}
                                </td>
                                <td style="text-align: right;"><b>{{ $total_8 }}</b></td>
                            </tr>
                            <tr>
                                <td>{{ $menu[8]->menu }}</td>
                                <td style="text-align: right;">
                                    {{ $total_9_jan }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_9_feb }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_9_mar }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_9_apr }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_9_mei }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_9_jun }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_9_jul }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_9_ags }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_9_sep }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_9_okt }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_9_nov }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_9_des }}
                                </td>
                                <td style="text-align: right;"><b>{{ $total_9 }}</b></td>
                            </tr>
                            <tr>
                                <td>{{ $menu[9]->menu }}</td>
                                <td style="text-align: right;">
                                    {{ $total_10_jan }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_10_feb }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_10_mar }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_10_apr }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_10_mei }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_10_jun }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_10_jul }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_10_ags }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_10_sep }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_10_okt }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_10_nov }}
                                </td>
                                <td style="text-align: right;">
                                    {{ $total_10_des }}
                                </td>
                                <td style="text-align: right;"><b>{{ $total_10 }}</b></td>
                            </tr>
                            <tr class="table-dark">
                                <td><b>Total</b></td>
                                <td style="text-align: right;">
                                    <b>{{ $jan_total }}</b>
                                </td>
                                <td style="text-align: right;">
                                    <b>{{ $feb_total }}</b>
                                </td>
                                <td style="text-align: right;">
                                    <b>{{ $mar_total }}</b>
                                </td>
                                <td style="text-align: right;">
                                    <b>{{ $apr_total }}</b>
                                </td>
                                <td style="text-align: right;">
                                    <b>{{ $mei_total }}</b>
                                </td>
                                <td style="text-align: right;">
                                    <b>{{ $jun_total }}</b>
                                </td>
                                <td style="text-align: right;">
                                    <b>{{ $jul_total }}</b>
                                </td>
                                <td style="text-align: right;">
                                    <b>{{ $ags_total }}</b>
                                </td>
                                <td style="text-align: right;">
                                    <b>{{ $sep_total }}</b>
                                </td>
                                <td style="text-align: right;">
                                    <b>{{ $okt_total }}</b>
                                </td>
                                <td style="text-align: right;">
                                    <b>{{ $nov_total }}</b>
                                </td>
                                <td style="text-align: right;">
                                    <b>{{ $des_total }}</b>
                                </td>
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