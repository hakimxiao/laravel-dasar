{{-- slot utama --}}
<x-layout>
    <h1 class="text-xl mb-5 font-bold">Daftar Siswa</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y-2 divide-gray-200">
            <thead class="ltr:text-left rtl:text-right">
                <tr class="*:font-medium *:text-gray-900">
                    <th class="px-3 py-2 whitespace-nowrap">Name</th>
                    <th class="px-3 py-2 whitespace-nowrap">Tanggal Lahir</th>
                    <th class="px-3 py-2 whitespace-nowrap">Jurusan</th>
                    <th class="px-3 py-2 whitespace-nowrap">Nilai</th>
                    <th class="px-3 py-2 whitespace-nowrap">Details</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @foreach ($data as $siswa)
                    <tr class="*:text-gray-900 *:first:font-medium">
                        <td class="px-3 py-2 whitespace-nowrap">{{$siswa['nama']}}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{$siswa['tanggal_lahir']}}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $siswa['jurusan'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{$siswa['nilai']}}</td>
                        <td class="px-3 py-2 whitespace-nowrap"><a href="/siswa/{{ $siswa['id'] }}"
                                class="hover:text-green-500 font-bold opacity-50">View Details Siswa</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- <ol>
        <li>{{$data[0]['nama']}}</li> || Cara Manual : ambil data pertama, ambil key nama ||
        @foreach ($data as $siswa)
        <li>nama: {{$siswa['nama']}} | nilai: {{$siswa['nilai']}} | NPM: {{$siswa['npm']}}</li>
        @endforeach
    </ol> --}}
    {{-- slot baru: harus sesuai namanya di layout --}}
    <x-slot:footer>
        <strong>Siswa Page</strong>
    </x-slot:footer>
</x-layout>