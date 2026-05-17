<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
    <div class="bg-white p-6 shadow rounded-lg">
        <p><strong>Nama:</strong> {{ $nama }}</p>
        <p><strong>NIM:</strong> {{ $nim }}</p>
        <p><strong>Prodi:</strong> {{ $prodi }}</p>
        <p><strong>Mata Kuliah:</strong> {{ $matakuliah }}</p>
        <p><strong>Framework:</strong> {{ $framework }}</p>
    </div>
</x-layout>