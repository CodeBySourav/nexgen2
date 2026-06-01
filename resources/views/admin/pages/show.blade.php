 @extends('layouts.app')

 @section('title', $page->seo_title ?? $page->title)

 @section('meta')
     <meta name="description" content="{{ $page->seo_description }}">

     @if ($page->schema_markup)
         <script type="application/ld+json">
{!! $page->schema_markup !!}
</script>
     @endif
 @endsection

 @section('content')

     <section class="py-20">
         <div class="max-w-4xl mx-auto px-6">

             <h1 class="text-4xl font-bold text-gray-900 mb-8">
                 {{ $page->title }}
             </h1>

             <div class="prose max-w-none">
                 {!! $page->content !!}
             </div>

         </div>
     </section>

 @endsection
