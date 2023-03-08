<x-app-layout>
    @section('title', '| Dashboard Akun Manajemen' )

    <x-slot name="header">
        <div class="flex p-2 bg-white dark:bg-dark-eval-1 flex-col gap-2 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl py-1 px-2 font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <div class="   font-semibold grid justify-end grid-cols-1 text-center sm:grid-cols-1">
                <a href="/buatakunMahasiswa" class="  bg-sky-400 py-1 px-4 rounded-md text-white hover:bg-purple-500" title=" Buat Akun Kolektif">Buat akun Mahasiswa</a>
                <div class=" ">
                    @if ($pesan = Session::get('status'))
                    <div id="pesan" class="d-none">{{$pesan}}</div>
                    @endif
                </div>
            </div>


        </div>
    </x-slot>
    <div class="p-2 sm:p-6  overflow-auto bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <table class="  border w-full ">
            <thead>
                <tr>
                    <th class=" px-1 py-1 border">No</th>
                    <th class=" px-1 py-1 border">User</th>
                    <th class=" px-1 py-1 border">Username</th>
                    <th class=" px-1 py-1 border">ACT</th>
                </tr>
            </thead>
            <tbody>
                @foreach($DataUser as $User)
                <tr class=" border">
                    <th class=" border px-1 py-1">{{$loop->iteration}}</th>
                    <td class=" border px-1 py-1 "><a href="/detail-akun/{{$User->id}}">{{$User->name}}</a></td>
                    <td class=" border px-1 py-1 text-center">{{$User->email}}</td>
                    <td class=" sm:flex sm:grid-cols-1 grid gap-1 px-1 py-1 text-center justify-center">
                        <form action="/manajemen-akun/{{$User->id}}" method="post">
                            @method('delete')
                            @csrf
                            <button class=" text-red-600" title="Hapus Akun">
                                <x-icons.hapus-user></x-icons.hapus-user>
                            </button>
                        </form>
                        <a href="/buatakunPerMahasiswa/{{$User->id}}" class=" text-blue-700" title="Tambah Role User">
                            <x-icons.adduser></x-icons.adduser>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</x-app-layout>