   <div class="col-md-6" data-aos="fade">
       <article class="blog-post">
           @if ($post->image != '')
               <div class="post-slider slider-sm rounded">
                   <img loading="lazy" decoding="async" src=" {{ asset('storage/' . $post->image) }}" alt="Post Thumbnail">
               </div>
           @endif
           <div class="pt-4">
               <p class="mb-3"> {{ \Carbon\Carbon::parse($post->created_at)->format('d M, Y') }}</p>
               <h2 class="h4"><a class="text-black" wire:navigate href="{{ route('post', $post->id) }}"> {{ $post->title }}
                   </a></h2>
               <p>{{ $post->short_desc }}</p> <a href="blog-details.html" class="text-primary fw-bold"
                   aria-label="Read the full article by clicking here">Read More</a>
           </div>
       </article>
   </div>
