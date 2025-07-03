{{-- slot utama --}}
<x-layout>
    <h1>Hello From About Page View. I am {{$data}}</h1>
    <p>Dan sekarang saya berUmur : {{$umur}}</p>
    @if ($umur > 18)
        <h3>You have license for driving</h3>
    @else
        <h3>You dont have license for driving yet, wait untill 18th of age</h3>
    @endif
    {{-- slot baru: harus sesuai namanya di layout --}}
    <x-slot:footer>
        <strong>About Page</strong>
    </x-slot:footer>
</x-layout>