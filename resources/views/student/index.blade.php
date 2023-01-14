<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <x-splade-form action="/users/store">
                    <input v-model="form.name" type="text" />
                    <input v-model="form.email" type="email" />
                    <button dusk="confirm-delete-account" type="submit" class="ml-3 inline-flex rounded-md shadow-sm bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 focus:outline-none focus:shadow-outline">
                    {{ __('Delete Account') }}
                </button>
                </x-splade-form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
