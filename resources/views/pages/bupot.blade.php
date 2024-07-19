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
        <div class="py-14 px-10">
            <div class="flex justify-between">
                <div class="flex gap-x-2  border-b-4 border-accent pb-2">
                    <svg width="25" height="29" viewBox="0 0 25 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17.5007 21.5685H7.56384C6.99405 21.5685 6.53162 21.1061 6.53162 20.5363C6.53162 19.9665 6.99405 19.5041 7.56384 19.5041H17.5007C18.0705 19.5041 18.5329 19.9665 18.5329 20.5363C18.5329 21.1061 18.0705 21.5685 17.5007 21.5685Z"
                            fill="black" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17.5007 15.8068H7.56384C6.99405 15.8068 6.53162 15.3443 6.53162 14.7745C6.53162 14.2047 6.99405 13.7423 7.56384 13.7423H17.5007C18.0705 13.7423 18.5329 14.2047 18.5329 14.7745C18.5329 15.3443 18.0705 15.8068 17.5007 15.8068Z"
                            fill="black" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M11.3553 10.0582H7.56359C6.99381 10.0582 6.53137 9.59578 6.53137 9.026C6.53137 8.45621 6.99381 7.99377 7.56359 7.99377H11.3553C11.9251 7.99377 12.3875 8.45621 12.3875 9.026C12.3875 9.59578 11.9251 10.0582 11.3553 10.0582Z"
                            fill="black" />
                        <mask id="mask0_17_28" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0"
                            width="25" height="29">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.960693H25V28.3625H0V0.960693Z"
                                fill="white" />
                        </mask>
                        <g mask="url(#mask0_17_28)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.7661 3.0249L7.18372 3.03041C3.97971 3.04968 2.0639 5.03154 2.0639 8.33328V20.9897C2.0639 24.3134 3.9976 26.2981 7.23327 26.2981L17.8156 26.2939C21.0196 26.2747 22.9354 24.29 22.9354 20.9897V8.33328C22.9354 5.00952 21.0031 3.0249 17.7661 3.0249ZM7.23439 28.3623C2.90732 28.3623 -0.000793457 25.3991 -0.000793457 20.9894V8.33302C-0.000793457 3.88346 2.81648 0.99186 7.17659 0.96571L17.7644 0.960205H17.7658C22.0929 0.960205 24.9996 3.92337 24.9996 8.33302V20.9894C24.9996 25.4376 22.1823 28.3306 17.8222 28.3581L7.23439 28.3623Z"
                                fill="black" />
                        </g>
                    </svg>
                    <h1 class="font-semibold text-2xl">Bukti Potong Pajak</h1>
                </div>
                <div>
                    <button class=" bg-accent px-7 py-1 rounded-md"><a href="{{ url('/bupot/create')}}">Buat BuPot</a></button>
                </div>
            </div>
            <div class="container mx-auto mt-12 py-6 px-4 border">
                <div class="flex justify-between items-center ">
                    <div class="search-container">
                        <span class="search-icon"><i class="fas fa-search"></i></span>
                        <input type="text" placeholder="Search">
                    </div>
                    <div class="flex gap-x-3">
                        <div class="custom-select-container">
                            <select name="" id="" aria-placeholder="Filter by"
                                class="custom-select rounded-md py-2 px-5">
                                <option value="">Filter by</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </select>
                            <i class="fas fa-chevron-down absolute top-3"></i>
                        </div>
                        <div class="custom-select-container">
                            <select name="" id="" aria-placeholder="Sort by"
                                class="custom-select rounded-md py-2 px-5">
                                <option value="">Sort by</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </select>
                            <i class="fas fa-chevron-down absolute top-3 "></i>
                        </div>

                        <button class="border px-2 rounded-md">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.5 14.5L11.7929 15.2071L12.5 15.9142L13.2071 15.2071L12.5 14.5ZM13.5 5.5C13.5 4.94772 13.0523 4.5 12.5 4.5C11.9477 4.5 11.5 4.94771 11.5 5.5L13.5 5.5ZM6.79289 10.2071L11.7929 15.2071L13.2071 13.7929L8.20711 8.79289L6.79289 10.2071ZM13.2071 15.2071L18.2071 10.2071L16.7929 8.79289L11.7929 13.7929L13.2071 15.2071ZM13.5 14.5L13.5 5.5L11.5 5.5L11.5 14.5L13.5 14.5Z"
                                    fill="#FAD120" />
                                <path
                                    d="M5.5 16.5L5.5 17.5C5.5 18.6046 6.39543 19.5 7.5 19.5L17.5 19.5C18.6046 19.5 19.5 18.6046 19.5 17.5V16.5"
                                    stroke="#FAD120" stroke-width="2" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-5 px-4">
                    <div class="flex gap-x-2">
                        <p>Show</p>
                        <div class="select-container-small">
                            <select class="select-small">
                                <option>10</option>
                                <option>20</option>
                                <option>30</option>
                            </select>
                            <i class="fas fa-chevron-down absolute right-2 top-1"></i>
                        </div>
                        <p>entries</p>
                    </div>
                </div>
                <div class="mt-5">
                    <table class="w-full text-[14px]">
                        <tr class="text-center text-xs opacity-30 border-b-2 border-gray-400">
                            <td class="p-3">ID Transaksi</td>
                            <td class="p-3">Nama WP</td>
                            <td class="p-3">Jenis BuPot</td>
                            <td class="p-3">Tahun Pajak</td>
                            <td class="p-3">Masa Pajak</td>
                            <td class="p-3">Tanggal Buat</td>
                            <td colspan="2" class="p-3">Aksi</td>
                        </tr>
                        <tr class="text-center text-xs font-semibold bg-gray-200">
                            <td class="p-3 py-3">1</td>
                            <td class="p-3">Nama WP</td>
                            <td class="p-3">Jenis BuPot</td>
                            <td class="p-3">Tahun Pajak</td>
                            <td class="p-3">Masa Pajak</td>
                            <td class="p-3">Tanggal Buat</td>
                            <td class="p-3">Aksi</td>
                        </tr>
                        <tr class="text-center text-xs font-semibold ">
                            <td class="p-3">2</td>
                            <td class="p-3">Nama WP</td>
                            <td class="p-3">Jenis BuPot</td>
                            <td class="p-3">Tahun Pajak</td>
                            <td class="p-3">Masa Pajak</td>
                            <td class="p-3">Tanggal Buat</td>
                            <td class="p-3">Aksi</td>
                        </tr>
                        <tr class="text-center text-xs font-semibold bg-gray-200">
                            <td class="p-3">3</td>
                            <td class="p-3">Nama WP</td>
                            <td class="p-3">Jenis BuPot</td>
                            <td class="p-3">Tahun Pajak</td>
                            <td class="p-3">Masa Pajak</td>
                            <td class="p-3">Tanggal Buat</td>
                            <td class="p-3">Aksi</td>
                        </tr>
                    </table>
                    <div class="mt-5 px-4 flex justify-between">
                        <div>
                            <p>Showing 3 of 3 entries</p>
                        </div>
                        <div class="flex gap-x-2">
                            <a href="">Prev</a>
                            <p class="opacity-30">1</p>
                            <p>2</p>
                            <p>3</p>
                            <a href="">Next</a>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>
    @endsection

</body>

</html>
