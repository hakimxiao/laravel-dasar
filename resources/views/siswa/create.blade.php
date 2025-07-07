<x-layout>
    <h1 class="text-xl mb-5 font-bold">Creat Siswa</h1>
    <form action="{{ route('siswa.store') }}" method="POST" class="space-y-4 max-w-4xl">

        {{-- ini adalah keamanan untuk mencegah hacking dan wajib digunakan saat buat form --}}
        @csrf

        {{-- nama --}}
        <div>
            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" id="nama" name="nama" required
                class="mt-1 block w-full h-8 border border-slate-700 rounded-lg">
        </div>

        {{-- tanggal lahir --}}
        <div>
            <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required
                class="mt-1 block w-full h-8 border border-slate-700 rounded-lg">
        </div>

        {{-- jurusan --}}
        <div>
            <label for="jurusan" class="block text-sm font-medium text-gray-700">Jurusan</label>
            <input type="text" id="jurusan" name="jurusan" required
                class="mt-1 block w-full h-8 border border-slate-700 rounded-lg">
        </div>

        {{-- nilai --}}
        <div>
            <label for="nilai" class="block text-sm font-medium text-gray-700">Nilai</label>
            <input type="number" id="nilai" name="nilai" required
                class="mt-1 block w-full h-8 border border-slate-700 rounded-lg">
        </div>

        {{-- mentor --}}
        <div>
            <label for="mentor" class="block text-sm font-medium text-gray-700">Mentor</label>
            <select name="mentor" id="mentor" class="mt-1 block w-full h-8 border border-slate-700 rounded-lg">
                <option value="">-- Pilih Mentor --</option>
                @foreach ($mentors as $mentor)
                    <option value="{{ $mentor->id }}">{{ $mentor->nama}}</option>
                @endforeach
            </select>

        </div>

        {{-- submit button --}}
        <div class="pt-4">
            <button type="submit"
                class="w-full bg-teal-600 text-white py-2 rounded-lg hover:bg-teal-700 hover:cursor-pointer">Simpan
                Data</button>
        </div>
    </form>

    <x-slot:footer>
        <strong>Siswa Create Page</strong>
    </x-slot:footer>
</x-layout>