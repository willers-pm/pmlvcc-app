<div>
@foreach ($posts as $post)
    <div class="w-full max-w-[960px] shadow-lvc rounded-lg mb-7 pt-4 pr-3 pb-3 pl-3">
        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-3 md:col-span-1">
                <img src="{{ $post->postphoto }}" alt="">
            </div>
            <h2 class="col-span-3 text-4xl font-bold md:order-first">
                {{ $post->posttitle }}
            </h2>
            <div class="col-span-3 md:col-span-2">
                <p>
                    {{ $post->postcontent }}
                </p>
            </div>
        </div>
    </div>
@endforeach
<hr class="height-1px border-[#ddd] mb-5">
</div>
