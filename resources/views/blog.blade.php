<x-layout>
    {{-- Mengisi slot judul di layout --}}
    <x-slot:judul>{{ $title }}</x-slot:judul>

    {{-- Bagian Header Profil --}}
    <div class="bg-white p-8 shadow-md rounded-lg mb-6 border-l-4 border-blue-600">
        <div class="flex flex-col md:flex-row items-center gap-6">
            <div class="flex-1 text-center md:text-left">
                <h2 class="text-3xl font-extrabold text-gray-800">Rechan Rizky</h2>
                <p class="text-blue-600 font-semibold mb-2">Engineer & Data Specialist</p>
                <div class="text-gray-600 space-y-1">
                    <p><strong>Umur:</strong> 20 Tahun</p>
                    <p><strong>Status:</strong> Mahasiswa Aktif UNISBA BALITAR </p>
                    <p class="italic text-sm">"Menggabungkan presisi logika engineering dengan kreativitas digital untuk menciptakan solusi yang berdampak."</p>
                </div>
            </div>
            <div class="bg-blue-50 p-4 rounded-lg border border-blue-100">
                <h4 class="font-bold text-blue-800 mb-2">Technical Skills</h4>
                <ul class="text-sm text-gray-700 grid grid-cols-2 gap-2">
                    <li>• Advanced Excel & Statistics</li>
                    <li>• Visual Studio Code</li>
                    <li>• Animation Development</li>
                    <li>• System Engineering</li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Konten Utama: Daftar Portofolio --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- Project 1: Engineering Analysis -->
        <div class="bg-white overflow-hidden shadow rounded-lg border border-gray-200 transition hover:shadow-lg">
            <div class="p-5">
                <div class="flex items-center justify-between mb-3">
                    <span class="px-3 py-1 text-xs font-medium bg-blue-100 text-blue-800 rounded-full">Engineering</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900">Statistical Process Control</h3>
                <p class="mt-2 text-sm text-gray-600">Pengolahan dataset kompleks menggunakan Excel untuk menghitung distribusi frekuensi, standar deviasi, dan analisis kuartil pada data teknis.</p>
                <div class="mt-4 flex items-center text-blue-600 text-sm font-medium">
                    <a href="#" class="hover:underline">Lihat Detail Proyek →</a>
                </div>
            </div>
        </div>

        <!-- Project 2: Interactive Animation -->
        <div class="bg-white overflow-hidden shadow rounded-lg border border-gray-200 transition hover:shadow-lg">
            <div class="p-5">
                <div class="flex items-center justify-between mb-3">
                    <span class="px-3 py-1 text-xs font-medium bg-purple-100 text-purple-800 rounded-full">Creative Tech</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900">Educational Animation Design</h3>
                <p class="mt-2 text-sm text-gray-600">Pengembangan aset visual dan logika animasi untuk media pembelajaran interaktif, berfokus pada efisiensi aset dan user experience.</p>
                <div class="mt-4 flex items-center text-blue-600 text-sm font-medium">
                    <a href="#" class="hover:underline">Lihat Detail Proyek →</a>
                </div>
            </div>
        </div>

        <!-- Project 3: Programming -->
        <div class="bg-white overflow-hidden shadow rounded-lg border border-gray-200 transition hover:shadow-lg">
            <div class="p-5">
                <div class="flex items-center justify-between mb-3">
                    <span class="px-3 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">Software</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900">System Development Workflow</h3>
                <p class="mt-2 text-sm text-gray-600">Optimasi lingkungan pengembangan (environment) menggunakan Visual Studio Code untuk meningkatkan produktivitas dalam coding sistem.</p>
                <div class="mt-4 flex items-center text-blue-600 text-sm font-medium">
                    <a href="#" class="hover:underline">Lihat Detail Proyek →</a>
                </div>
            </div>
        </div>

    </div>
</x-layout>