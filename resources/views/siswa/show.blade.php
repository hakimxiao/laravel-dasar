{{-- slot utama --}}
<x-layout>
    <div class="flow-root">
        <dl class="-my-3 divide-y divide-gray-200 text-sm">
            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Nama</dt>

                <dd class="text-gray-700 sm:col-span-2">{{ $detailSiswa->nama }}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Jurusan</dt>

                <dd class="text-gray-700 sm:col-span-2">{{ $detailSiswa->jurusan }}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Tanggal Lahir</dt>

                <dd class="text-gray-700 sm:col-span-2">{{ $detailSiswa->tanggal_lahir }}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Nilai</dt>

                <dd class="text-gray-700 sm:col-span-2">{{ $detailSiswa->nilai }}</dd>
            </div>
            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Siswa Id</dt>

                <dd class="text-blue-700 sm:col-span-2">
                    {{ $detailSiswa->id }}
                </dd>
            </div>
            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Mentor Siswa</dt>

                <dd class="text-blue-700 sm:col-span-2">
                    {{ $detailSiswa->mentor->nama }}
                </dd>
            </div>
        </dl>
    </div>
    {{-- di laravel untuk melakukan delete kita menggunakan form dengan method post dan kemudian kita ganti method nya
    ke delete dengan @form --}}
    <form action="{{ route('siswa.destroy', $detailSiswa->id) }}" method="post">
        @csrf
        @method('DELETE')

        <button type="submit" class="my-8 px-4 py-2 bg-red-400 text-white rounded cursor-pointer">Delete</button>
    </form>

    {{-- slot baru: harus sesuai namanya di layout --}}
    <x-slot:footer>
        <strong>Siswa Detail Page</strong>
    </x-slot:footer>
</x-layout>