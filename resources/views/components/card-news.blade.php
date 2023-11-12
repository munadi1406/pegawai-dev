@props(['image','title','link','desc'])


<div class="bg-color2/50 backdrop-blur-sm w-full h-max rounded-lg flex justify-center items-center flex-col">
    <div class="flex p-2 gap-1 w-full">
        <div class="">
            <span class="bg-red-500 inline-block center w-3 h-3 rounded-full"></span>
        </div>
        <div class="circle">
            <span class="bg-yellow-500 inline-block center w-3 h-3 rounded-full"></span>
        </div>
        <div class="circle">
            <span class="bg-green-500 box inline-block center w-3 h-3 rounded-full"></span>
        </div>
    </div>
    <div class="card__content">
        <div class="px-3 pb-2 flex flex-col gap-2  w-full">
            <div class="w-full rounded-md overflow-clip">
                <img src="{{ asset($image) }}" class="w-96 h-44 object-cover" loading="lazy" />
            </div>
            <div>
                <h5 class="text-white font-semibold text-xl capitalize">{{$title}}
                </h5>
                <p class="text-sm">{{$desc}} ...</p>
            </div>
            <div>
                <x-link :href="route($link)">
                    {{ __('Read More') }}
                </x-link >
            </div>
        </div>
    </div>
</div>