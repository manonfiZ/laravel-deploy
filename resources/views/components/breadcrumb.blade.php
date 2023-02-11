@props(['pageTitle'])

<!-- page title -->
<div class="about-bg centered">
    <div class="container">
        <div class="text">{{ $pageTitle }}</div>
    </div>
</div>
<!-- end page title -->

<!-- bread-crumb -->
<div class="bread-crumb">
    <div class="container">
        <div class="text"><a href="{{route('index')}}">Accueil</a><i class="fa fa-angle-right"></i> {{ $pageTitle }}
        {{-- <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</div> --}}
        </div>
    </div>
</div>
<!-- bread crumb end -->