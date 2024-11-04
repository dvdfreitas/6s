<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">    
    @foreach ($stories as $story)        
        <a href="{{ $story->url }}" class="border rounded hover:bg-slate-100">
            <div>
                @if ($story->image)
                    <img class="h-48 m-auto" src="/images/stories/{{ $story->image }}">
                @else 
                    <img class="h-48 m-auto"  src="/images/logo_color.svg">
                @endif
                <p class="font-bold mt-1 text-xl">{{ $story->title }}</p>                
                @if ($story->subtitle)
                    <p class="font-bold mt-1 leading-tight">{{ $story->subtitle }}</p>                
                @endif
                @if ($story->date)
                    <p class="text-xs">{{ $story->date }}</p>
                @endif
                <p>{{ $story->summary }}</p>                
            </div>
        </a>
    @endforeach
</div>