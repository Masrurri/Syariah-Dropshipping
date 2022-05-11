@extends('Main-page')

@section('container')
    <div class="container">
        <div class="row ">
            <div class="col cards mt-3 tblMax">
                <table class="table table-hover" style="font-size: 14px;">
                    <thead style="color:#056AD3">
                      <tr>
                        <th scope="col" style="width: 12rem">Tanggal Order</th>
                        <th scope="col" style="width: 10rem">No Order</th>
                        <th scope="col" style="width: 14rem">Nama Barang</th>
                        <th scope="col" style="width: 10rem; text-align: center">Jumlah</th>
                        <th scope="col" style="width: 8rem">Total Harga</th>
                        <th scope="col" style="width: 10rem; text-align: center">Pembayaran</th>
                        <th scope="col" style="width: 10rem; text-align: center">Pengiriman</th>
                        <th scope="col" style="width: 10rem; text-align: center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th >17/03/2022 18:37 WIB</th>
                        <td>202203170ODGJP</td>
                        <td>Alat pembersih lantai otomatis cleaner 4XZ31asdashdi uashduiasa dasdasdasdasdasda sdasdasdaasd asda sdasd</td>
                        <td style="text-align: center">2</td>
                        <td>Rp.1.500.000</td>
                        <td style="text-align: center" > <button disabled class="btn-sm btnYellow">Belum Dicek</button> </td>
                        <td style="text-align: center" > <button disabled class="btn-sm btnRed">Belum Dikirim</button> </td>
                        <td style="text-align: center" > <form action="/detail-transaksi"><button  target="/detail-transaksi" class="btn-sm btn-prm">Detail</button></form></td>
                      </tr>
                      <tr>
                        <th >17/03/2022 18:37 WIB</th>
                        <td>202203170ODGJP</td>
                        <td>Alat pembersih lantai otomatis cleaner 4XZ31asdashdi uashduiasa dasdasdasdasdasda sdasdasdaasd asda sdasd</td>
                        <td style="text-align: center">2</td>
                        <td>Rp.1.500.000</td>
                        <td style="text-align: center" > <button disabled class="btn-sm btnYellow">Belum Dicek</button> </td>
                        <td style="text-align: center" > <button disabled class="btn-sm btnRed">Belum Dikirim</button> </td>
                        <td style="text-align: center" > <button class="btn-sm btn-prm">Detail</button> </td>
                      </tr>
                      <tr>
                        <th >17/03/2022 18:37 WIB</th>
                        <td>202203170ODGJP</td>
                        <td>Alat pembersih lantai otomatis cleaner 4XZ31asdashdi uashduiasa dasdasdasdasdasda sdasdasdaasd asda sdasd</td>
                        <td style="text-align: center">2</td>
                        <td>Rp.1.500.000</td>
                        <td style="text-align: center" > <button disabled class="btn-sm btnYellow">Belum Dicek</button> </td>
                        <td style="text-align: center" > <button disabled class="btn-sm btnRed">Belum Dikirim</button> </td>
                        <td style="text-align: center" > <button class="btn-sm btn-prm">Detail</button> </td>
                      </tr>
                      <tr>
                        <th >17/03/2022 18:37 WIB</th>
                        <td>202203170ODGJP</td>
                        <td>Alat pembersih lantai otomatis cleaner 4XZ31asdashdi uashduiasa dasdasdasdasdasda sdasdasdaasd asda sdasd</td>
                        <td style="text-align: center">2</td>
                        <td>Rp.1.500.000</td>
                        <td style="text-align: center" > <button disabled class="btn-sm btnYellow">Belum Dicek</button> </td>
                        <td style="text-align: center" > <button disabled class="btn-sm btnRed">Belum Dikirim</button> </td>
                        <td style="text-align: center" > <button class="btn-sm btn-prm">Detail</button> </td>
                      </tr>
                      
                    </tbody>
                  </table>
            </div>
        </div>

    </div>
@endsection