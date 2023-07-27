<div class="max-w-screen-lg mx-auto">
    <div class="flex flex-col gap-10">
        <div class="text-center font-semibold text-2xl text-primary-color-mtma  ">
            <h2>Update Terbaru</h2>
        </div>
        <div class="grid grid-flow-row grid-cols-2 gap-5">
            @foreach ($blogs as $item)
                <div class="flex-1 flex flex-col">
                    <div class="flex-1 max-h-48 ">
                        <img class="h-full w-full object-cover" src="{{ '/storage/img/blog-news/' . $item->image }}"
                            alt="{{ $item->title }}">
                    </div>
                    <div class="flex-1 my-2 flex flex-col gap-2">
                        <div class="flex flex-col gap-1">
                            <a class=" hover:font-semibold  font-italic text-primary-color-mtma "
                                href="{{ '/blogs/' . $item->slug }}"> {{ $item->title }}</a>
                            <div class="text-xs text-gray-700 font-semibold">
                                {{ \Carbon\Carbon::parse($item->created_at)->diffForhumans() }}
                            </div>
                        </div>
                        <div class="text-sm">
                            {!! Str::limit($item->content, 230, '...') !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center text-sm">
            <button
                class=" text-primary-color-mtma py-2 rounded-full  border-primary-color-mtma border-2 hover:bg-primary-color-mtma hover:text-white">
                <a href="/blogs" class="py-2 px-6">
                    Selengkapnya
                </a>
            </button>

        </div>
    </div>
</div>
