<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Mentor Create') }}
        </h2>
    </x-slot>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('mentors.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
    
                        <div class="form-group">
                            <label class="block mt-5">
                                <span class="text-gray-700">Name</span>
                                <input type="text" name="name"
                                    class="block w-full mt-1 rounded-md"
                                    placeholder="" value="{{old('name')}}" />
                            </label>
                        </div>
    
                        <div class="form-group">
                            
                            <label class="block mt-5"">
                                <span class="text-gray-700 ">Profession</span>
                                <textarea
                                    class="block  w-full mt-1 rounded-md"
                                    name="profession" rows="3">{{old('profession')}}</textarea>
                            </label>
                        </div>
    
                        <div class="form-group">
                            <label class="block mt-5"">
                                <span class="text-gray-700">Description</span>
                                <textarea
                                    class="block w-full mt-1 rounded-md"
                                    name="description" rows="3">{{old('description')}}</textarea>
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="block mt-5">
                                <span class="sr-only">Choose File</span>
                                <input type="file" name="photo"
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                            </label>
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-600 mt-5 rounded text-sm px-5 py-2.5">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>