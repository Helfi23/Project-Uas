
<div class="grid lg:grid-cols-3 sm:grid-cols-1 mt-7 gap-7 mx-28 ">
    @foreach ($destination as $destinations)
  <div class="rounded-md bg-white bg-[url('{{asset('images/'.$destinations->photo) }}')] bg-center bg-cover overflow-hidden">
    <a href="">
      <div class="flex p-5 min-h-[220px] flex-col items-start bg-gradient-to-b from-transparent to-black">
        <div class="flex w-full">
          <span class="flex rounded-3xl bg-[#00000066] py-3 px-5 text-sm ml-auto">
            <img src="./gambar/star.svg" alt="">
            <p class="ml-2 text-white"> (2.1k) </p>
          </span>
        </div>
        <div class="mt-auto">
          <h5 class="text-lg font-bold text-white">{{$destinations->name}}</h5>
        </div>
        <div class="flex w-full mt-0 mb-0">
          <div class="flex mr-auto text-sm">
            <img src="./gambar/user-1.png" class="max-h-[27px] max-w-[27px]" alt=""/>
            <div class="pl-3 text-white">
              <span class="block text-sm">{{$destinations->type}}</span>
            </div>
          </div>
          <div class="flex ml-auto text-sm">
            <span class="h-[22px] w-[22px] bg-gray-300 rounded-full flex text-white justify-center items-center">
              <img src="./gambar/Polygon 1.svg" alt="">
            </span>
            <div class="pl-3 text-white">
              <span class="block text-sm">20 Video</span>
            </div>
          </div>
        </div>
      </div>
    </a>
  </div>
  @endforeach
</div>
