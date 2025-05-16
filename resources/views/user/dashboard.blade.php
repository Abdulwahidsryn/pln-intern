<x-app-layout>
    <nav class="sticky top-16 z-50 bg-white dark:bg-gray-800 z-10 shadow-sm">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex border-b border-gray-200 dark:border-gray-700">
                <button id="tab-data-diri"
                    class="py-4 px-6 block focus:outline-none text-blue-500 border-b-2 font-medium border-blue-500"
                    type="button" onclick="showTab('data-diri')">
                    Data Diri
                </button>
                <button id="tab-daftar-magang"
                    class="py-4 px-6 block focus:outline-none text-gray-500 hover:text-blue-500 font-medium"
                    type="button" onclick="showTab('daftar-magang')">
                    Daftar Magang
                </button>
                <button id="tab-status-pengajuan"
                    class="py-4 px-6 block focus:outline-none text-gray-500 hover:text-blue-500 font-medium"
                    type="button" onclick="showTab('status-pengajuan')">
                    Status Pengajuan
                </button>
            </div>
        </div>
    </nav>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6">
                    <div id="content-data-diri" class="mt-0">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">
                            {{ __('Informasi Data Diri') }}</h3>
                        <form class="space-y-4 grid grid-cols-1 md:grid-cols-2 gap-4" method="POST"
                            action="{{ route('profile.data-diri.update') }}">
                            @csrf
                            <div>
                                <x-input-label for="nama_lengkap" :value="__('Nama Lengkap')" />
                                <x-text-input id="nama_lengkap" class="block mt-1 w-full" type="text"
                                    name="nama_lengkap" value="{{ old('name', Auth::user()->name) }}" required
                                    autofocus />
                                <x-input-error :messages="$errors->get('nama_lengkap')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="nim" :value="__('NIM')" />
                                <x-text-input id="nim" class="block mt-1 w-full" type="text" name="nim"
                                    value="{{ old('nim', Auth::user()->nim) }}" />
                                <x-input-error :messages="$errors->get('nim')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="program_studi" :value="__('Program Studi')" />
                                <x-text-input id="program_studi" class="block mt-1 w-full" type="text"
                                    name="program_studi"
                                    value="{{ old('program_studi', Auth::user()->program_studi) }}" />
                                <x-input-error :messages="$errors->get('program_studi')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="fakultas" :value="__('Fakultas')" />
                                <x-text-input id="fakultas" class="block mt-1 w-full" type="text" name="fakultas"
                                    value="{{ old('fakultas', Auth::user()->fakultas) }}" />
                                <x-input-error :messages="$errors->get('fakultas')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="universitas" :value="__('Universitas')" />
                                <x-text-input id="universitas" class="block mt-1 w-full" type="text" name="universitas"
                                    value="{{ old('universitas', Auth::user()->universitas) }}" />
                                <x-input-error :messages="$errors->get('universitas')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="nomor_telepon" :value="__('Nomor Telepon')" />
                                <x-text-input id="nomor_telepon" class="block mt-1 w-full" type="text"
                                    name="nomor_telepon"
                                    value="{{ old('nomor_telepon', Auth::user()->nomor_telepon) }}" />
                                <x-input-error :messages="$errors->get('nomor_telepon')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="tempat_lahir" :value="__('Tempat Lahir')" />
                                <x-text-input id="tempat_lahir" class="block mt-1 w-full" type="text"
                                    name="tempat_lahir" value="{{ old('tempat_lahir', Auth::user()->tempat_lahir) }}" />
                                <x-input-error :messages="$errors->get('tempat_lahir')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="kota" :value="__('Kota')" />
                                <x-text-input id="kota" class="block mt-1 w-full" type="text" name="kota"
                                    value="{{ old('kota', Auth::user()->kota) }}" />
                                <x-input-error :messages="$errors->get('kota')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="provinsi_id" :value="__('Provinsi') . ' *'" />
                                <select id="provinsi_id" name="provinsi_id" required
                                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                    <option value="">Pilih Provinsi</option>
                                    @foreach ($provinces as $id => $name)
                                    <option value="{{ $id }}"
                                        {{ old('provinsi_id', Auth::user()->provinsi_id) == $id ? 'selected' : '' }}>
                                        {{ $name }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('provinsi_id')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />
                                <x-text-input id="tanggal_lahir" class="block mt-1 w-full" type="date"
                                    name="tanggal_lahir"
                                    value="{{ old('tanggal_lahir', Auth::user()->tanggal_lahir ? Auth::user()->tanggal_lahir->format('Y-m-d') : '') }}" />
                                <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="jenis_kelamin" :value="__('Jenis Kelamin')" />
                                <select id="jenis_kelamin" name="jenis_kelamin"
                                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                    <option value="laki-laki"
                                        {{ old('jenis_kelamin', Auth::user()->jenis_kelamin) == 'laki-laki' ? 'selected' : '' }}>
                                        Laki-laki</option>
                                    <option value="perempuan"
                                        {{ old('jenis_kelamin', Auth::user()->jenis_kelamin) == 'perempuan' ? 'selected' : '' }}>
                                        Perempuan</option>
                                </select>
                                <x-input-error :messages="$errors->get('jenis_kelamin')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="alamat_domisili" :value="__('Alamat Tempat Tinggal/Domisili')" />
                                <textarea id="alamat_domisili" class="block mt-1 w-full" name="alamat_domisili">
            {{ old('alamat_domisili', Auth::user()->alamat_domisili) }}</textarea>
                                <x-input-error :messages="$errors->get('alamat_domisili')" class="mt-2" />
                            </div>
                            <div class="md:col-span-2">
                                <x-input-label for="tentang_saya" :value="__('Tentang Saya')" />
                                <textarea id="tentang_saya" class="block mt-1 w-full" name="tentang_saya">
            {{ old('tentang_saya', Auth::user()->tentang_saya) }}</textarea>
                                <x-input-error :messages="$errors->get('tentang_saya')" class="mt-2" />
                            </div>
                            <div class="md:col-span-2">
                                <x-primary-button>{{ __('Simpan Data Diri') }}</x-primary-button>
                            </div>
                        </form>
                    </div>

                    <div id="content-daftar-magang" class="mt-6 hidden">
                        {{ __('Di sini mahasiswa bisa melakukan pendaftaran magang. Dokumen akan disertakan di form pendaftaran.') }}
                    </div>

                    <div id="content-status-pengajuan" class="mt-6 hidden">
                        {{ __('Ini adalah konten untuk melihat Status Pengajuan Magang.') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    function showTab(tabId) {
        const tabs = ['data-diri', 'daftar-magang', 'status-pengajuan'];
        tabs.forEach(tab => {
            const tabButton = document.getElementById(`tab-${tab}`);
            const tabContent = document.getElementById(`content-${tab}`);
            if (tab === tabId) {
                tabButton.classList.add('text-blue-500', 'border-blue-500', 'border-b-2');
                tabButton.classList.remove('text-gray-500', 'hover:text-blue-500', 'border-b');
                tabContent.classList.remove('hidden');
            } else {
                tabButton.classList.add('text-gray-500', 'hover:text-blue-500', 'border-b');
                tabButton.classList.remove('text-blue-500', 'border-blue-500', 'border-b-2');
                tabContent.classList.add('hidden');
            }
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        showTab('data-diri');
    });
    </script>
</x-app-layout>