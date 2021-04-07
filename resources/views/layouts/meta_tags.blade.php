@section('facebook_meta')
@foreach ($blogsearch as $item)
<meta name="article title" content="{{$item->article_title}}">
<meta name="article slug" content="{{$item->article_slug}}">
<meta name="seo title" content="{{$item->seo_title}}">
<meta name="article category" content="{{$item->article_category}}">
<meta name="article content" content="{{$item->article_content}}">
{{-- <meta name="" content="{{$item->seo_keyword}}"> --}}
<meta name="seo keyword" content="{{$item->seo_keyword}}">
<meta name="seo description" content="{{$item->seo_description}}">
<meta name="article content" content="{{$item->article_content}}">
<meta name="seo description" content="{{$item->seo_description}}">
@endforeach
@endsection