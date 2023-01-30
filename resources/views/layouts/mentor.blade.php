@foreach ($mentors as $mentor)
        <div class=" rounded-lg  p-6 flex flex-col items-center justify-center">
          <img class="w-32 h-32 rounded-full mx-auto mb-4" src="{{ asset('images/'.$mentor->photo) }}" alt="{{ $mentor->name }}">
          <h2 class="text-lg font-medium mb-2 text-bold">{{ $mentor->name }}</h2>
          <p class="text-gray-600 mb-4">{{ $mentor->profession }}</p>
          <p class="text-gray-600">{{ $mentor->description }}</p>
        </div>
@endforeach
