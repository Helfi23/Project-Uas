<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Destinations Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('destinations.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('name') text-red-500 @enderror">Name</span>
                                <input type="text" name="name"
                                    class="block @error('name') border-red-500 bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    placeholder="" value="{{old('name')}}" />
                            </label>
                            @error('name')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                              
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('type') text-red-500 @enderror">Type</span>
                                <textarea
                                    class="block @error('type') border-red-500  bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    name="type" rows="3">{{old('type')}}</textarea>
                            </label>
                            @error('type')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('description') text-red-500 @enderror">Description</span>
                                <textarea
                                    class="block @error('description') border-red-500  bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    name="description" rows="3">{{old('description')}}</textarea>
                            </label>
                            @error('description')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('location') text-red-500 @enderror">Location</span>
                                <textarea
                                    class="block @error('location') border-red-500  bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    name="location" rows="3">{{old('location')}}</textarea>
                            </label>
                            @error('location')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="sr-only">Choose File</span>
                                <input type="file" name="photo"
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                            </label>
                            @error('photo')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}

                            </div>
                            @enderror
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>