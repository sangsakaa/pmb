<x-app-layout>
    @section('title', '| Formulir Calon Mahasiswa' )
    <x-slot name="header">
        <div class="flex bg-white dark:bg-dark-eval-0 dark:text-purple-500 flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="sm:text-xl text-sm p-4 font-semibold leading-tight">
                {{ __('Dashboard | Formulir Calon Mahasiswa') }}
            </h2>

        </div>
    </x-slot>

    @role('mahasiswa')
    <form action="" method="post">
        <div class=" grid gap-1">
            <div class="p-1 sm:p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
                <div class=" grid grid-cols-1">
                    <span class=" text-center uppercase font-semibold">Formulir Calon Mahasiswa</span>
                </div>
                <hr class="  border-2 mb-1 sm:mb-4   ">
                <div class=" grid grid-cols-1 sm:grid-cols-2 gap-1 sm:gap-1">
                    <div class=" w-full  gap-2">
                        <div>
                            <label for="" class="">Tanggal Pendaftaran</label>
                        </div>
                        <div class=" ">
                            <input type="date" name="tanggal_pendafraran" id="" class=" w-full py-1 px-1 " placeholder=" NISN : Nomor Induk Siswa Nasional" required>
                            <small class=" text-red-600">Wajib diisi sesui yang tertera di ijazah</small>
                        </div>
                    </div>
                    <div class=" w-full  gap-2">
                        <div>
                            <label for="" class="">Tahun Akademi</label>
                        </div>
                        <div class="  ">
                            <select name="jenis_kelamin" id="" class="  py-1 w-full">

                                <option value="">2023/2024</option>
                            </select>
                            <small class=" text-red-600">Wajib diisi sesui Kartu Indentitas</small>
                        </div>
                    </div>
                    <div class=" w-full  gap-2">
                        <div>
                            <label for="" class="">Gelombang Pendaftaran</label>
                        </div>
                        <div class="  ">
                            <select name="jenis_kelamin" id="" class="  py-1 w-full">

                                <option value="">Gelombang I</option>
                                <option value="">Gelombang II</option>
                                <option value="">Gelombang III</option>
                            </select>
                            <small class=" text-red-600">Wajib diisi sesui Kartu Indentitas</small>
                        </div>
                    </div>
                    <div class=" w-full  gap-2">
                        <div>
                            <label for="" class="">Jenis Seleksi</label>
                        </div>
                        <div class="  ">
                            <select name="jenis_kelamin" id="" class="  py-1 w-full">
                                <option value="">Reguler</option>
                                <option value="">Beasiswa</option>

                            </select>
                            <small class=" text-red-600">Wajib diisi sesui Kartu Indentitas</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 sm:p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
                <div class=" grid grid-cols-1">
                    <div class=" grid grid-cols-1">
                        <span class=" text-center uppercase font-semibold">BIODATA DIRI</span>
                    </div>
                </div>
                <hr class="  border-2 mb-1 sm:mb-4   ">
                <div class=" grid grid-cols-1 sm:grid-cols-2 gap-1 sm:gap-1">
                    <div class=" w-full  gap-2">
                        <div>
                            <label for="" class="">Nama Lengkap </label>
                        </div>
                        <div class=" ">
                            <input type="text" name="" id="" class=" w-full py-1 px-1 " placeholder=" Masukan Nama Sesui ID " required>
                            <small class=" text-red-600">Wajib diisi sesui Kartu Indentitas : KTP,SIM,IJAZAH</small>
                        </div>
                    </div>
                    <div class=" w-full  gap-2">
                        <div>
                            <label for="" class="">Jenis Kelamin </label>
                        </div>
                        <div class="  ">
                            <select name="jenis_kelamin" id="" class="  py-1 w-full">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="">Laki Laki</option>
                                <option value="">Perempuan</option>
                            </select>
                            <small class=" text-red-600">Wajib diisi sesui Kartu Indentitas</small>
                        </div>
                    </div>
                    <div class=" w-full  gap-2">
                        <div>
                            <label for="" class="">Agama</label>
                        </div>
                        <div class="  ">
                            <select name="agama" id="" class=" py-1 w-full">
                                <option value="">Pilih Agama</option>
                                <option value="">Islam</option>
                                <option value="">Kristen</option>
                                <option value="">Budha</option>
                            </select>
                            <small class=" text-red-600">Wajib diisi sesui Kartu Indentitas</small>
                        </div>
                    </div>
                    <div class=" w-full  gap-2">
                        <div>
                            <label for="" class="">Tempat Lahir </label>
                        </div>
                        <div class=" ">
                            <input type="text" name="" id="" class=" w-full py-1 px-1 " placeholder=" Tempat Lahir sesui dokumen" required>
                            <small class=" text-red-600">Wajib diisi sesui yang tertera di KK KTP sejenisnya </small>
                        </div>
                    </div>
                    <div class=" w-full  gap-2">
                        <div>
                            <label for="" class="">Tanggal Lahir </label>
                        </div>
                        <div class=" ">
                            <input type="date" name="" id="" class=" w-full py-1 px-1 " placeholder=" Tempat Lahir sesui dokumen" required>
                            <small class=" text-red-600">Wajib diisi sesui yang tertera di KK KTP sejenisnya </small>
                        </div>
                    </div>

                    <div class=" w-full  gap-2">
                        <div>
                            <label for="" class="">Jenis Indentitas</label>
                        </div>
                        <div class="  ">
                            <select name="jenis_kelamin" id="" class="  py-1 w-full">
                                <option value="">KTP</option>
                                <option value="">SIM</option>

                            </select>
                            <small class=" text-red-600">Wajib diisi sesui Kartu Indentitas</small>
                        </div>
                    </div>
                    <div class=" w-full  gap-2">
                        <div>
                            <label for="" class="">NIK </label>
                        </div>
                        <div class=" ">
                            <input type="text" name="" id="" class=" w-full py-1 px-1 " placeholder=" NISN : Nomor Induk Siswa Nasional" required>
                            <small class=" text-red-600">Wajib diisi sesui yang tertera di ijazah</small>
                        </div>
                    </div>
                    <div class=" w-full  gap-2">
                        <div>
                            <label for="" class="">NISN </label>
                        </div>
                        <div class=" ">
                            <input type="text" name="" id="" class=" w-full py-1 px-1 " placeholder=" NISN : Nomor Induk Siswa Nasional" required>
                            <small class=" text-red-600">Wajib diisi sesui yang tertera di ijazah</small>
                        </div>
                    </div>
                    <div class=" w-full  gap-2">
                        <div>
                            <label for="" class="">Tempat Lahir </label>
                        </div>
                        <div class=" ">
                            <input type="text" name="" id="" class=" w-full py-1 px-1 " placeholder=" Tempat Lahir sesui dokumen" required>
                            <small class=" text-red-600">Wajib diisi sesui yang tertera di KK KTP sejenisnya </small>
                        </div>
                    </div>
                    <div class=" w-full  gap-2">
                        <div>
                            <label for="" class="">Tanggal Lahir </label>
                        </div>
                        <div class=" ">
                            <input type="date" name="" id="" class=" w-full py-1 px-1 " placeholder=" Tempat Lahir sesui dokumen" required>
                            <small class=" text-red-600">Wajib diisi sesui yang tertera di KK KTP sejenisnya </small>
                        </div>
                    </div>

                    <div class=" w-full  gap-2">
                        <div>
                            <label for="" class="">Jenis Kelamin </label>
                        </div>
                        <div class="  ">
                            <select name="jenis_kelamin" id="" class="  py-1 w-full">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="">Laki Laki</option>
                                <option value="">Perempuan</option>
                            </select>
                            <small class=" text-red-600">Wajib diisi sesui Kartu Indentitas</small>
                        </div>
                    </div>
                    <div class=" w-full  gap-2">
                        <div>
                            <label for="" class="">Program Studi Pilih Ke 1 </label>
                        </div>
                        <div class="  ">
                            <select name="jenis_kelamin" id="" class="  py-1 w-full">
                                <option value="">Pilih Program Studi</option>
                                <option value="">Teknik Informatika</option>
                                <option value="">Teknik Industri</option>
                                <option value="">Teknik Sipil</option>

                            </select>
                            <small class=" text-red-600">Wajib diisi sesui Kartu Indentitas</small>
                        </div>
                    </div>
                    <div class=" w-full  gap-2">
                        <div>
                            <label for="" class="">Program Studi Pilih Ke 2 </label>
                        </div>
                        <div class="  ">
                            <select name="jenis_kelamin" id="" class="  py-1 w-full">
                                <option value="">Pilih Program Studi</option>
                                <option value="">Teknik Informatika</option>
                                <option value="">Teknik Industri</option>
                                <option value="">Teknik Sipil</option>

                            </select>
                            <small class=" text-red-600">Wajib diisi sesui Kartu Indentitas</small>
                        </div>
                    </div>
                    <div class=" w-full  gap-2">
                        <div>
                            <label for="" class="">Jenis Kelamin </label>
                        </div>
                        <div class="  ">
                            <select name="agama" id="" class=" py-1 w-full">
                                <option value="">Pilih Agama</option>
                                <option value="">Islam</option>
                                <option value="">Kristen</option>
                                <option value="">Budha</option>
                            </select>
                            <small class=" text-red-600">Wajib diisi sesui Kartu Indentitas</small>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
    @endrole

</x-app-layout>