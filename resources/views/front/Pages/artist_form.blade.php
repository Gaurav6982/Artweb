@extends("layouts.root",['title'=>$title,'header'=>2])

@section('content')

    <div v-cloak id="site-wrapper" class="site-wrapper page-contact" >
            @include('front.Pages.partials.artist_form')
    </div>

@endsection

