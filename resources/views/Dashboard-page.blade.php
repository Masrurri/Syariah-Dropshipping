@extends('Main-page')

@section('container')
    {{-- <h1>Dashboard</h1> --}}
    <div class="container">
        <div class="row">
          <div class="col cards" style="margin-right: 2rem; font-size:14px">
                <div class="row">
                    <div class="col-2" style="padding: 0%; text-align:center">
                        <a><img src="assets/img/spl.png" alt="" style="width: 60%"></a>
                    </div>
                    <div class="col-9" style="padding: 0.8rem 0rem;">
                        <div class="cHead">Toko Jaya Abadi</div>
                        <div class="cBody">Menjual segala peralatan rumah tanggaasdsadasdasdasdasasdassdasdasdas</div>
                        <div class="cBody">Bandung Barat, Indonesia</div>
                        <div class="cBody">+6219903244512</div>
                    </div>
                    <div class="col" style="padding: 0.8rem 0rem;">
                        <a class="txHover" href="/edit-toko">Edit</a>
                    </div>
                </div>
                {{-- <button class="btn btn-lg btn-scn w-75 m-5">Lengkapi Identitas</button> --}}
          </div>
          <div class="col cards">
                <div class="row">
                    <div class="col-9" style="padding: 0.8rem 0rem;">
                        <div class="cHead">Transaksi</div>
                        <div class="row" style="font-weight: 600;">
                            <div class="col-6" style="color: #2FB084">
                                <div style="font-size:24px;">10</div>
                                <div >Sedang Diproses</div>
                            </div>
                            <div class="col-6" style="color: #FF2525">
                                <div style="font-size:24px;">10</div>
                                <div >Belum Diproses</div>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
        </div>
        <div class="row mt-4">
            <div class="col-3 cHead p-0">
              Transaksi Terbaru
            </div>
            <div class="col-9" style="padding-top: 6px; text-align:end">
                <a href="/transaksi" class="txHover">Lihat Semua</a>
            </div>
        </div>
        <div class="row">
            <div class="col cards mt-3">
                <table class="table table-hover" style="font-size: 14px;">
                    <thead style="color:#056AD3">
                      <tr>
                        <th scope="col" style="width: 10rem">Tanggal Order</th>
                        <th scope="col" style="width: 10rem">No Order</th>
                        <th scope="col" style="width: 14rem">Nama Barang</th>
                        <th scope="col" style="width: 10rem; text-align: center">Jumlah</th>
                        <th scope="col" style="width: 8rem">Total Harga</th>
                        <th scope="col" style="width: 10rem; text-align: center">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th >17/03/2022 18:37 WIB</th>
                        <td>202203170ODGJP</td>
                        <td>Alat pembersih lantai otomatis cleaner 4XZ31asdashdi uashduiasa dasdasdasdasdasda sdasdasdaasd asda sdasd</td>
                        <td style="text-align: center">2</td>
                        <td>Rp.1.500.000</td>
                        <td style="text-align: center" > <button disabled class="btnRed">Belum Diproses</button> </td>
                      </tr>
                      <tr>
                        <th >17/03/2022 18:37 WIB</th>
                        <td>202203170ODGJP</td>
                        <td>Alat pembersih lantai otomatis cleaner 4XZ31asdashdi uashduiasa dasdasdasdasdasda sdasdasdaasd asda sdasd</td>
                        <td style="text-align: center">2</td>
                        <td>Rp.1.500.000</td>
                        <td style="text-align: center" > <button disabled class="btnRed">Belum Diproses</button> </td>
                      </tr>
                      <tr>
                        <th >17/03/2022 18:37 WIB</th>
                        <td>202203170ODGJP</td>
                        <td>Alat pembersih lantai otomatis cleaner 4XZ31asdashdi uashduiasa dasdasdasdasdasda sdasdasdaasd asda sdasd</td>
                        <td style="text-align: center">2</td>
                        <td>Rp.1.500.000</td>
                        <td style="text-align: center"> <button disabled class="btnGreen">Sedang Diproses</button> </td>
                      </tr>
                      <tr>
                        <th >17/03/2022 18:37 WIB</th>
                        <td>202203170ODGJP</td>
                        <td>Alat pembersih lantai otomatis cleaner 4XZ31asdashdi uashduiasa dasdasdasdasdasda sdasdasdaasd asda sdasd</td>
                        <td style="text-align: center">2</td>
                        <td>Rp.1.500.000</td>
                        <td style="text-align: center"> <button disabled class="btnGreen">Sedang Diproses</button> </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>

    </div>
@endsection