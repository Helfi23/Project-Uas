<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit Review') }}
        </h2>
    </x-slot>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('reviews.update', $review->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')                    
                        <div class="form-group">
                            <label class="block mt-5">
                                <span class="text-gray-700 ">Name</span>
                                <input type="text" name="name"
                                    class="block @error('name') border-red-500 bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    placeholder="" value="{{old('name',$review->name)}}" />
                            </label>
                        </div>    
                        <div class="form-group">
                            <label class="block mt-5">
                                <span class="text-gray-700 ">Profession</span>
                                <input type="text" name="profession"
                                    class="block @error('profession') border-red-500 bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    placeholder="" value="{{old('profession',$review->profession)}}" />
                            </label>
                        </div>
    
                        <div class="form-group">
                            <label class="block mt-5">
                                <span class="text-gray-700 ">Description</span>
                                <input type="text" name="description"
                                    class="block  w-full mt-1 rounded-md"
                                    placeholder="" value="{{old('description',$review->description)}}" />
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="block mt-5">
                                <span class="sr-only">Photo</span>
                                <input type="file" name="photo"
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                            </label>
                            <img class=" block mt-5 h-48 object-cover object-center" src="{{ asset('images/'.$review->photo) }}" alt="{{ $review->name }}">
                        </div>
                        <button type="Update"
                            class="block mt-5 text-white bg-blue-600  rounded text-sm px-5 py-2.5">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
