<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    <x-sidebar.link title="Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <!-- <x-sidebar.dropdown title="Buttons" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
        <x-sidebar.sublink title="Text button" href="{{ route('setting') }}" :active="request()->routeIs('setting.setting')" />
        <x-sidebar.sublink title="Icon button" href="{{ route('buttons.icon') }}" :active="request()->routeIs('buttons.icon')" />
        <x-sidebar.sublink title="Text with icon" href="{{ route('buttons.text-icon') }}" :active="request()->routeIs('buttons.text-icon')" />
    </x-sidebar.dropdown> -->

    <div x-transition x-show="isSidebarOpen || isSidebarHovered" class="text-sm text-gray-500">
        Menu Utama
    </div>
    <x-sidebar.link title="Info Penting" href="{{ route('info-formulir') }}" :isActive="request()->routeIs('info-formulir')">
        <x-slot name="icon">
            <x-icons.info class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    @role('super admin')
    <x-sidebar.link title="Manajemen Akun" href="{{ route('manajemen-akun') }}" :isActive="request()->routeIs('manajemen-akun')">
        <x-slot name="icon">
            <x-icons.user class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    <div x-transition x-show="isSidebarOpen || isSidebarHovered" class="text-sm text-gray-500">
        Menu Pendukung
    </div>

    <x-sidebar.dropdown title="Setting" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-icons.setting class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
        <x-sidebar.sublink title="Semester" href="{{ route('semester') }}" :active="request()->routeIs('semester')" />
        <x-sidebar.sublink title="Periode" href="{{ route('periode') }}" :active="request()->routeIs('periode')" />
        <x-sidebar.sublink title="Gelombang" href="{{ route('gelombang') }}" :active="request()->routeIs('gelombang')" />
        <x-sidebar.sublink title="Jenis Seleksi" href="{{ route('jenis-seleksi') }}" :active="request()->routeIs('jenis-seleksi')" />
    </x-sidebar.dropdown>

    @endrole
    @role('mahasiswa')



    <x-sidebar.link title="Registrasi" href="{{ route('registrasi-awal') }}" :isActive="request()->routeIs('registrasi-awal')">
        <x-slot name="icon">
            <x-icons.user class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    <div x-transition x-show="isSidebarOpen || isSidebarHovered" class="text-sm text-gray-500">
        Menu Pendukung
    </div>
    @endrole




</x-perfect-scrollbar>