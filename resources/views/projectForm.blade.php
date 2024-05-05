<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <form method="POST" action="{{ route('project.submit') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <x-input-label for="project_name" :value="__('Project Name')" />
                        <x-text-input id="project_name" class="block mt-1 w-full" type="text" name="project_name" :value="old('project_name')" required autofocus autocomplete="project_name" />
                        <x-input-error :messages="$errors->get('Project Name')" class="mt-2" />
                    </div>

                    <div class="max-w-xl mt-4">
                        <x-input-label for="project_date" :value="__('Project Date')" />
                        <x-text-input id="project_date" class="block mt-1 w-full" type="date" name="project_date" :value="old('project_date')" required autofocus autocomplete="project_date" />
                        <x-input-error :messages="$errors->get('Project Date')" class="mt-2" />
                    </div>

                    <div class="max-w-xl mt-4">
                        <x-input-label for="project_value" :value="__('Project Value')" />
                        <x-text-input id="project_value" class="block mt-1 w-full" type="number" name="project_value" :value="old('project_value')" required autofocus autocomplete="project_date" />
                        <x-input-error :messages="$errors->get('Project Value')" class="mt-2" />
                    </div>

                    <div class="max-w-xl mt-4">
                        <x-input-label for="file_bast" :value="__('File Bast')" />
                        <x-text-input id="file_bast" class="block mt-1 w-full" type="file" name="file_bast" :value="old('file_bast')" required autofocus autocomplete="file_bast" />
                        <x-input-error :messages="$errors->get('File Bast')" class="mt-2" />
                    </div>

                    
                </div>
                <x-primary-button class="ms-3">
                    {{ __('Submit') }}
                </x-primary-button>
                {{ session('success') }}
            </form>
        </div>
    </div>
</x-app-layout>

@if(session('success'))
<script>
    $(document).ready(function() {
        $('#successModal').modal('show');
    });
</script>
@endif
