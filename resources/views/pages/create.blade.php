<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Document</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <section class="px-4 md:px-9 py-5">
            <div class="flex justify-between items-center">
                <h1 class="font-semibold text-xl">Buat Bukti Potong</h1>
                <div class="flex gap-x-2">
                    <button class="px-5 md:px-9 py-1 rounded-md btn-secondary">Batal</button>
                    <button class="px-5 md:px-9 py-1 rounded-md btn-primary">Simpan</button>
                </div>
            </div>
            <div class="lg:flex mt-5 gap-x-4">
                <div class="flex-1">
                    <form action="{{ url('/bupot/create') }}" method="POST" class="rounded-md shadow-md border p-6">
                        @csrf
                        <div class="flex flex-col md:flex-row gap-6 items-center">
                            <div class="w-full md:w-1/2">
                                <label for="nama_wajib_pajak" class="block mb-2">Nama Wajib Pajak</label>
                                <div class="relative">
                                    <select name="nama_wajib_pajak" id="nama_wajib_pajak"
                                        class="rounded-lg pl-3 pr-10 text-sm py-2 w-full">
                                        <option value="">Pilih nama wajib pajak</option>
                                        <option value="PT JIMMY GROUP TECHNOLOGY" {{ old('nama_wajib_pajak') == 'PT JIMMY GROUP TECHNOLOGY' ? 'selected' : '' }}>PT JIMMY GROUP TECHNOLOGY</option>
                                    </select>
                                    <i class="fas fa-chevron-down absolute right-2 top-1/2 transform -translate-y-1/2"></i>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2">
                                <label for="npwp_pemotong" class="block mb-2">NPWP Pemotong</label>
                                <input type="text" name="npwp_pemotong" id="npwp_pemotong"
                                    class="bg-gray-300 rounded-md px-3 py-2 text-sm w-full" value="{{ old('npwp_pemotong') }}">
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="w-full">
                                <label for="jenis_pajak" class="block mb-2">Jenis Pajak</label>
                                <div class="relative">
                                    <select name="jenis_pajak" id="jenis_pajak" class="rounded-lg text-sm w-full py-2">
                                        <option value="Bupot PPh Pasal 21 Pegawai" {{ old('jenis_pajak') == 'Bupot PPh Pasal 21 Pegawai' ? 'selected' : '' }}>Bupot PPh Pasal 21 Pegawai</option>
                                        <option value="Bupot PPh Pasal 26 Pegawai" {{ old('jenis_pajak') == 'Bupot PPh Pasal 26 Pegawai' ? 'selected' : '' }}>Bupot PPh Pasal 26 Pegawai</option>
                                    </select>
                                    <i class="fas fa-chevron-down absolute right-2 top-1/2 transform -translate-y-1/2"></i>
                                </div>
                            </div>
                        </div>
                        <div class="lg:flex gap-x-3 mt-3 items-center">
                            <div class="w-full lg:w-1/3">
                                <label for="tahun_pajak" class="block mb-2">Tahun Pajak</label>
                                <div class="relative">
                                    <select name="tahun_pajak" id="tahun_pajak" class="rounded-lg text-sm w-full py-2">
                                        <option value="2024" {{ old('tahun_pajak') == '2024' ? 'selected' : '' }}>2023</option>
                                        <option value="2023" {{ old('tahun_pajak') == '2023' ? 'selected' : '' }}>2024</option>
                                    </select>
                                    <i class="fas fa-chevron-down absolute right-2 top-1/2 transform -translate-y-1/2"></i>
                                </div>
                            </div>
                            <div class="w-full lg:w-1/3 mt-3 lg:mt-0">
                                <label for="masa_pajak" class="block mb-2">Masa Pajak</label>
                                <div class="relative">
                                    <select name="masa_pajak" id="masa_pajak" class="rounded-lg text-sm w-full py-2">
                                        <option value="April" {{ old('masa_pajak') == 'April' ? 'selected' : '' }}>April</option>
                                        <option value="Mei" {{ old('masa_pajak') == 'Mei' ? 'selected' : '' }}>Mei</option>
                                    </select>
                                    <i class="fas fa-chevron-down absolute right-2 top-1/2 transform -translate-y-1/2"></i>
                                </div>
                            </div>
                            <div class="w-full lg:w-1/3 mt-3 lg:mt-0">
                                <label for="tanggal_pemotongan" class="block mb-2">Tanggal Pemotongan</label>
                                <input type="date" class="border-2 rounded-lg border-solid py-2 px-4 text-sm w-full"
                                    name="tanggal_pemotongan" id="tanggal_pemotongan" value="{{ old('tanggal_pemotongan') }}">
                            </div>
                        </div>
                        <div class="flex justify-end mt-5">
                            <button type="submit" class="px-9 py-1 rounded-md btn-primary">Buat</button>
                        </div>
                    </form>
                </div>
                @if (isset($nama_wajib_pajak) &&
                        isset($npwp_pemotong) &&
                        isset($jenis_pajak) &&
                        isset($tahun_pajak) &&
                        isset($masa_pajak) &&
                        isset($tanggal_pemotongan))
                    <div class="mt-6 lg:mt-0 px-7 py-4 rounded-md flex flex-col border shadow-md">
                        <div class="lg:flex justify-between">
                            <div class="pr-5">
                                <h1 class="font-semibold">Detail Pemotong</h1>
                                <table class="mt-3 text-xs">
                                    <tr>
                                        <td>Jenis Pajak</td>
                                        <td>: {{ $jenis_pajak }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama WP</td>
                                        <td>: {{ $nama_wajib_pajak }}</td>
                                    </tr>
                                    <tr>
                                        <td>NPWP</td>
                                        <td>: {{ $npwp_pemotong }}</td>
                                    </tr>
                                    <tr>
                                        <td>Masa Pajak</td>
                                        <td>: {{ $masa_pajak }} {{ $tahun_pajak }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tgl Potongan</td>
                                        <td>: {{ $tanggal_pemotongan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Penandatangan</td>
                                        <td>: Jilan Wijaya</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>: jilanwijaya@email.com</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="mt-4">
                                <form action="">

                                    <div class="file-upload-container flex flex-col">
                                        <label class="text-xs">Upload file PPh 21</label>
                                        <div id="pph21-container" class="hidden">
                                            <div class="uploaded-file">
                                                <span id="pph21-file-name"></span>
                                                <span class="delete-btn" onclick="deleteFile('pph21')">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <input name="file_1" type="file" id="pph21-file" class="file-input"
                                            onchange="uploadFile('pph21')" value="Data PPh 21">
                                        <label for="pph21-file" class="choose-file-label">Choose File</label>
                                    </div>
                                    <div class="file-upload-container flex flex-col mt-3">
                                        <label class="text-xs">Upload file PPh 26</label>
                                        <div id="pph26-container" class="hidden">
                                            <div class="uploaded-file">
                                                <span id="pph26-file-name"></span>
                                                <span class="delete-btn" onclick="deleteFile('pph26')">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <input name="file_2" type="file" id="pph26-file" class="file-input"
                                            onchange="uploadFile('pph26')" value="Data PPh 26">
                                        <label for="pph26-file" class="choose-file-label">Choose File</label>
                                    </div>
                            </div>
                        </div>
                        <div class="flex justify-center mt-10 lg:mt-20">
                            <button type="submit" class="btn-primary items-center px-8 py-1 rounded-md">Proses</button>
                        </div>
                        </form>
                    </div>
                   
                @else
                    <div class="mt-6 lg:mt-0 bg-gray-200 px-10 rounded-md flex justify-center items-center">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-xs text-center">Ops... data belum tersedia, anda dapat isi dan buat informasi
                                bukti potong </h1>
                        </div>
                    </div>
                @endif
            </div>
        </section>
    @endsection
</body>
<script>
    function uploadFile(type) {
        const fileInput = document.getElementById(type + '-file');
        const fileName = fileInput.files[0].name;
        document.getElementById(type + '-file-name').innerText = fileName;
        document.getElementById(type + '-container').classList.remove('hidden');
        fileInput.classList.add('hidden');
        document.querySelector(`label[for=${type}-file]`).classList.add('hidden');
    }

    function deleteFile(type) {
        document.getElementById(type + '-container').classList.add('hidden');
        const fileInput = document.getElementById(type + '-file');
        fileInput.value = '';
        fileInput.classList.remove('hidden');
        document.querySelector(`label[for=${type}-file]`).classList.remove('hidden');
    }
</script>

</html>
