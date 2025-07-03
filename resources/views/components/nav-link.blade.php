{{-- props wajib di definisikan --}}
@props(['active' => false])

{{-- <a href="{{ $attributes->get('href') }}">{{$slot}}</a> --}}

{{-- simple way: setiap attribute akan di spread --}}

{{--

== $attribute->merge['attributeYangAkanDIjoin'] ==

Merge adalah sebuah method untuk menggabungkan sesuatu kedalam attribute disini kita melakukkan merge dari attribute ke
attribut class dimana kita ada sebuah kondisi jika active maka kita akan menambahkan class baru ini kita merge ke class
yang ada dalam attribute.
--}}

<a {{ $attributes->merge(['class' => $active ? 'text-teal-500 font-bold ' : '']) }}>{{$slot}}</a>