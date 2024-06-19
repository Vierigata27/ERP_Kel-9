@extends('admin.layout.appadmin')

@section('content')

<div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

                <div class="card-body">
                <h5 class="card-title">Total Karyawan</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person"></i> <!-- Mengganti ikon agar lebih relevan dengan karyawan -->
                    </div>
                    <div class="ps-3">
                    <h6>{{ $totalKaryawan }}</h6> <!-- Menggunakan $totalKaryawan -->
                    <!-- <span class="text-success small pt-1 fw-bold">12%</span> 
                    <span class="text-muted small pt-2 ps-1">increase</span> -->
                    </div>
                </div>
                </div>

            </div>
            </div><!-- End Sales Card -->
            

                        <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Total Barang</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>
                
              </div>
            </div><!-- End Sales Card -->

                        <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Total Pemasaran</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>
                
              </div>
            </div><!-- End Sales Card -->


    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tabel karyawan</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      <b>N</b>ame
                    </th>
                    <th>Divisi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($employees as $e)
                <tr>
                    <td>{{ $e['name'] }}</td>
                    <td>{{ $e['divisi'] }}</td>
                </tr>
                @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="section">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Tabel Barang</h5>
                                    <!-- Table with stripped rows -->
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <b>N</b>ame
                                                </th>
                                                <th>Stock</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($barang as $b)
                                            <tr>
                                                <td>{{ $b['id'] }}</td>
                                                <td>{{ $b['name'] }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!-- End Table with stripped rows -->

                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Tabel pemasaran</h5>
                                    <!-- Table with stripped rows -->
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>
                                                    id
                                                </th>
                                                <th>tanggal</th>
                                                <th>jenis_pemasaran</th>
                                                <th>target_pemasaran</th>
                                                <th>hasil_pemasaran</th>
                                                <th>durasi_pemasaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($pemasaran as $p)
                                            <tr>
                                                <td>{{ $p['id_pemasaran'] }}</td>
                                                <td>{{ $p['tanggal'] }}</td>
                                                <td>{{ $p['jenis_pemasaran'] }}</td>
                                                <td>{{ $p['target_pemasaran'] }}</td>
                                                <td>{{ $p['hasil_pemasaran'] }}</td>
                                                <td>{{ $p['durasi_pemasaran'] }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!-- End Table with stripped rows -->

                                </div>
                            </div>

                        </div>
                    </div>
                </section>



@endsection