<x-app-layout>
    @section('title', '| Dashboard Akun Manajemen' )
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard Akun Manajemen') }}
            </h2>

            <a href="/buatakunMahasiswa" class=" bg-sky-400 py-1 px-4 rounded-md text-white hover:bg-purple-500">Buat akun Mahasiswa</a>
        </div>
    </x-slot>
    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <table class=" overflow-auto border w-full ">
            <thead>
                <tr>
                    <th class=" px-1 py-1 border">No</th>
                    <th class=" px-1 py-1 border">Nomor Induk Kependudukan</th>
                    <th class=" px-1 py-1 border">Calon Mahasiswa</th>
                    <th class=" px-1 py-1 border">Username</th>
                    <th class=" px-1 py-1 border">Password</th>
                    <th class=" px-1 py-1 border">ACT</th>

                </tr>
            </thead>
            <tbody>
                @foreach($DataUser as $User)
                <tr class=" border">
                    <th class=" border px-1 py-1">{{$loop->iteration}}</th>
                    <td class=" border px-1 py-1">{{$User->nomor_induk_penduduk}}</td>
                    <td class=" border px-1 py-1">{{$User->name}}</td>
                    <td class=" border px-1 py-1">{{$User->email}}</td>
                    <td class=" border px-1 py-1">{{$User->nomor_induk_penduduk}}</td>
                    <td class=" border px-1 py-1 text-center">
                        <form action="/manajemen-akun/{{$User->id}}" method="post">
                            @method('delete')
                            @csrf
                            <button class=" text-red-600">
                                <x-icons.user></x-icons.user>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</x-app-layout>