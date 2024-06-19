<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Gunakan Http dari Illuminate\Support\Facades\Http
use GuzzleHttp\Exception\GuzzleException;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            // Memanggil method karyawan dan barang untuk mengambil data
            $employees = $this->karyawan();
            $barang = $this->barang();
            $pemasaran = $this->pemasaran();
    
    
            // Memastikan variabel bukan null sebelum mengirimkan ke view
            $employees = $employees ?? [];
            $barang = $barang ?? [];
            $pemasaran = $pemasaran ?? [];

            $totalKaryawan = count($employees);
    
            // Mengirimkan data ke tampilan untuk ditampilkan
            return view('admin.dashboard', compact('employees', 'barang', 'pemasaran', 'totalKaryawan'));
    
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            \Log::error('Failed to fetch data: ' . $e->getMessage());
            return back()->withError('Failed to fetch data: ' . $e->getMessage());
        }
    }
    
    private function karyawan()
    {
        try {
            // Panggil API untuk data karyawan
            $response = Http::get('https://sdm.kelompok10.erpkel12.my.id/api/fetch-employee');
    
            // Periksa apakah permintaan berhasil
            if ($response->successful()) {
                return $response->json('data');
            }
    
            return []; // Kembalikan array kosong jika tidak berhasil
    
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            \Log::error('Failed to fetch karyawan data: ' . $e->getMessage());
            return null; // Kembalikan null jika terjadi kesalahan
        }
    }
    
    private function barang()
    {
        try {
            // Panggil API untuk data barang
            $response = Http::get('https://erpkel12.my.id/api/product');
    
            // Periksa apakah permintaan berhasil
            if ($response->successful()) {
                return $response->json('data');
            }
    
            return []; // Kembalikan array kosong jika tidak berhasil
    
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            \Log::error('Failed to fetch barang data: ' . $e->getMessage());
            return null; // Kembalikan null jika terjadi kesalahan
        }
    }

    private function pemasaran()
    {
        try {
            // Panggil API untuk data barang
            $response = Http::get('https://marketingerp11.000webhostapp.com/api.php');
    
            // Periksa apakah permintaan berhasil
            if ($response->successful()) {
                return $response->json('data');
            }
    
            return []; // Kembalikan array kosong jika tidak berhasil
    
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            \Log::error('Failed to fetch barang data: ' . $e->getMessage());
            return null; // Kembalikan null jika terjadi kesalahan
        }
    }
}