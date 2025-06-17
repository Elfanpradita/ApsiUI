<x-filament::page>
    <div class="overflow-x-auto bg-white dark:bg-gray-900 shadow ring-1 ring-gray-200 dark:ring-gray-700 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-100 dark:bg-gray-800">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">Judul</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">Penulis</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">Tahun Terbit</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">Penerbit</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
                @foreach ($bukuBaru as $buku)
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 transition duration-150">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">{{ $buku->judul }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $buku->penulis }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $buku->tahun_terbit }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $buku->penerbit }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-filament::page>
