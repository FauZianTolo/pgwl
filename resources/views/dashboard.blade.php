<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container py-12">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card shadow-lg bg-white rounded-lg">
                    <div class="card-header bg-gradient-to-r from-blue-500 to-blue-700 text-black p-4 rounded-t-lg">
                        <h3 class="card-title text-xl font-bold">Data</h3>
                    </div>
                    <div class="card-body p-6 bg-gray-100">
                        <div class="row">
                            <div class="col">
                                <div class="alert alert-primary bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4"
                                    role="alert">
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-location-dot text-4xl pr-3"></i>
                                        <div>
                                            <h4 class="font-bold text-lg">Total Point</h4>
                                            <p style="font-size: 28pt">{{ $total_points }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-6 border-gray-300">
                        <p class="text-lg">Anda Login Sebagai <b>{{ Auth::user()->name }}</b> dengan email
                            <i>{{ Auth::user()->email }}</i></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card shadow-lg bg-white rounded-lg">
                    <div class="card-header bg-gradient-to-r from-green-500 to-green-700 text-black p-4 rounded-t-lg">
                        <h3 class="card-title text-xl font-bold">Informasi Tambahan</h3>
                    </div>
                    <div class="card-body p-6 bg-gray-100">
                        <div class="row">
                            <div class="col">
                                <div class="alert alert-info bg-green-100 border-l-4 border-green-500 text-green-700 p-4"
                                    role="alert">
                                    <div class="flex items-center">
                                        <div>
                                            <h4 class="font-bold text-lg">Halaman User</h4>
                                            <p style="font-size: 16pt">User dapat mengedit dan menghapus data ketika sudah Login</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-6 border-gray-300">
                        <div class="text-center">
                            <img src="{{ ('user.png') }}" alt="Informasi Gambar"
                                class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
