<x-layout>
    <h1 class="text-xl mb-5 font-bold">Creat Siswa</h1>
    <form action="{{ route('siswa.store') }}" method="POST" class="space-y-4 max-w-4xl">

        {{-- ini adalah keamanan untuk mencegah hacking dan wajib digunakan saat buat form --}}
        @csrf

        {{-- nama --}}
        <div>
            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}"
                class="mt-1 block w-full h-8 border border-slate-700 rounded-lg" />
            @error('nama')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>

        {{-- tanggal lahir --}}
        <div>
            <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                class="mt-1 block w-full h-8 border border-slate-700 rounded-lg" />
            @error('tanggal_lahir')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>

        {{-- jurusan --}}
        <div>
            <label for="jurusan" class="block text-sm font-medium text-gray-700">Jurusan</label>
            <input type="text" id="jurusan" name="jurusan" value="{{ old('jurusan') }}"
                class="mt-1 block w-full h-8 border border-slate-700 rounded-lg" />
            @error('jurusan')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>

        {{-- nilai --}}
        <div>
            <label for="nilai" class="block text-sm font-medium text-gray-700">Nilai</label>
            <input type="number" id="nilai" name="nilai" value="{{ old('nilai') }}"
                class="mt-1 block w-full h-8 border border-slate-700 rounded-lg" />
            @error('nilai')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>

        {{-- mentor --}}
        <div>
            <label for="mentor_id" class="block text-sm font-medium text-gray-700">Mentor</label>
            <select name="mentor_id" id="mentor_id" class="mt-1 block w-full h-8 border border-slate-700 rounded-lg"
                value="{{ old('mentor_id') }}">
                <option value="">-- Pilih Mentor --</option>
                @foreach ($mentors as $mentor)
                    <option value="{{ $mentor->id }}">{{ $mentor->nama}}</option>
                @endforeach
            </select>
            @error('mentor_id')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror

        </div>

        {{-- submit button --}}
        <div class="pt-4">
            <button type="submit"
                class="w-full bg-teal-600 text-white py-2 rounded-lg hover:bg-teal-700 hover:cursor-pointer">Simpan
                Data</button>
        </div>

        {{-- @if ($errors->any())
        <div class="my-5">
            <ul>
                @foreach ($errors->all() as $error)
                <li class="text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        </div>

        @endif --}}


    </form>

    <x-slot:footer>
        <strong>Siswa Create Page</strong>
    </x-slot:footer>
</x-layout>