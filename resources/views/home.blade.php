<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <!-- Hero Section Minimalis (Update berdasarkan image_af3098.png) -->
    <section class="bg-gradient-to-r from-gray-100 to-white rounded-3xl overflow-hidden shadow-sm mb-12 border border-gray-200">
        <div class="px-8 py-16 md:py-24 text-center flex flex-col items-center">
            <!-- Badge Status -->
            <div class="mb-6 px-4 py-1 bg-gray-200 text-gray-700 rounded-full text-sm font-semibold tracking-wide uppercase">
                Available for Collaboration
            </div>

            <!-- Nama Utama -->
            <h1 class="text-4xl md:text-6xl font-black mb-4 tracking-tight text-gray-900">
                RECHAN RIZKY S.
            </h1>

            <!-- Tagline Profesionalk -->
            <p class="text-xl md:text-2xl font-light text-gray-500 max-w-2xl">
                Engineer | Data Analyst Enthusiast | Creative Developer
            </p>
        </div>
    </section>

    <!-- Section Info Tambahan -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Keahlian Teknik -->
        <div class="bg-white p-8 rounded-2xl border border-gray-200 shadow-sm">
            <h3 class="text-lg font-bold mb-4 text-gray-800 border-b pb-2">Technical Focus</h3>
            <ul class="text-gray-600 space-y-2">
                <li>• Pengolahan data statistik kompleks (Excel)</li>
                <li>• Pengembangan sistem & pemrograman (VS Code)</li>
                <li>• Desain animasi edukatif & interaktif</li>
            </ul>
        </div>

        <!-- Tentang Rechan -->
        <div class="bg-white p-8 rounded-2xl border border-gray-200 shadow-sm">
            <h3 class="text-lg font-bold mb-4 text-gray-800 border-b pb-2">Profile Brief</h3>
            <p class="text-gray-600 leading-relaxed">
                Mahasiswa berusia 20 tahun yang berdedikasi dalam bidang engineering. Berfokus pada presisi hasil kerja dan efisiensi pengolahan dataset untuk solusi yang nyata.
            </p>
        </div>
    </div>

    <!-- Quote Minimalis -->
    <div class="mt-12 text-center">
        <p class="text-gray-400 italic text-sm">
            "Presisi dalam data, kreativitas dalam karya."
        </p>
    </div>
</x-layout>