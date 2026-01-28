



<x-guest-layout>
<div class="container mx-auto px-4">
    <h1 class="text-4xl font-bold text-center my-8">Our Portfolio</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($projects as $project)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <a href="{{ $project['project_link'] }}">

                    <img src="{{ $project['image_url'] }}"  class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-2xl font-semibold">{{  $project['title']}}</h2>
                        <p class="text-gray-600">{{  $project['description'] }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
</x-guest-layout>