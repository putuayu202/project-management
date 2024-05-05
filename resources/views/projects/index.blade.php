<x-app-layout>

<div class="container mx-auto px-4 sm:px-12">
    <div class="py-8">
        <div class="my-2 flex sm:flex-row flex-col">
            <h2 class="text-2xl font-semibold leading-tight">Projects</h2>
        </div>
        <div class="shadow overflow-hidden rounded border-b border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nama Projek</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Tanggal Projek</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nominal Projek</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">File</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach($projects as $project)
                    <tr>
                        <td class="text-left py-3 px-4">{{ $project->nama_projek }}</td>
                        <td class="text-left py-3 px-4">{{ $project->tanggal_projek }}</td>
                        <td class="text-left py-3 px-4">{{ number_format($project->nominal_projek, 2) }}</td>
                        <td class="text-left py-3 px-4">
                            <a href="{{ Storage::url($project->file_bast_path) }}" class="text-blue-500" target="_blank">View File</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</x-app-layout>

