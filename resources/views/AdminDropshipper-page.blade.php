@extends('Admin-page')

@section('container-admin')
<div class="container">
  @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row mt-2">
        <div class="col-3 cHead p-0">
          Dropshipper
        </div>
    </div>
    <div class="row">
        <div class="col cards mt-3">
          @if($dropshippers->isNotEmpty())
                <table class="table table-hover" style="font-size: 14px;">
                <thead style="color:#056AD3">
                    <tr>
                    <th scope="col" style="width: 7rem; text-align: center">Dropshipper ID</th>
                    <th scope="col" style="width: 7rem">Tanggal Mendaftar</th>
                    <th scope="col" style="width: 7rem">Nama Lenkap</th>
                    <th scope="col" style="width: 7rem">Email</th>
                    
                    <th scope="col" style="width: 10rem; text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dropshippers as $dropshipper)
                        <tr>
                        <th  style="text-align: center">{{$dropshipper->id}}</th>
                        <td>{{$dropshipper->created_at}}</td>
                        <td>{{$dropshipper->nama_lengkap}}</td>
                        <td>{{$dropshipper->email}}</td>
                        
                        <td style="text-align: center" > <a href="/admin-detail-dropshipper/{{$dropshipper->id}}" type="button" class="btn-sm btn-prm">Detail</a> </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
          @else
            <strong style="font-size: 24px; color:#E0ECFF">Tidak ada transaksi</strong> 
          @endif
            
        </div>
    </div>   
</div>
@endsection