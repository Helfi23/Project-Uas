@foreach ($reviews as $review)
        <div class=" rounded-lg  p-6 flex flex-col items-center justify-center">
          <img class="w-32 h-32 rounded-full mx-auto mb-4" src="{{ asset('images/'.$review->photo) }}" alt="{{ $review->name }}">
          <h2 class="text-lg font-medium mb-2 text-bold">{{ $review->name }}</h2>
          <p class="text-gray-600 mb-4">{{ $review->profession }}</p>
          <p class="text-gray-600">{{ $review->description }}</p>
        </div>
@endforeach
