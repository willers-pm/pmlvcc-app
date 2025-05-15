<div class="w-full max-w-[960px] mb-7" wire:key="{{ $post->post_id }}">
    <div class="">
        <div class="relative flex mb-3 aspect-16/9 w-full bg-[url(https://placehold.co/1600x900)]">
            <img class="aspect-16/9 rounded-lg" src="{{ $post->postphoto }}" alt="" />
            <div class="@container absolute self-end w-full font-bold bg-linear-to-b from-transparent to-gray-800">
                <h1 class="p-1 pl-5 @md:p-5 @md:text-4xl text-white">
                    {{ $posttitle }}
                </h1>
            </div>
        </div>
        <div class="p-5 pt-2">
            <p>
                {{ $postcontent }}
            </p>
        </div>
    </div>
    <p>
        <a href="/create-post" class="bg-green-lvd text-[#ffffff] py-2 px-9 rounded-full">Zurück zur Übersicht</a>
    </p>
</div>
