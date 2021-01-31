@extends('layouts.master')

@section('title')
settings | welcome
@endsection

@section('header')
@include('layouts.header')
@endsection

@section('content')
@include('settings.layouts.searchbar')
<div class="setting-mainsection py-5">
    {{-- sidebar --}}
    @include('settings.layouts.sidebar')
    {{-- end sidebar --}}
    <div class="main-wrapper">
        <div class="w-100 d-flex">
            <a href="#" id="toggle_sidebar" class="">
                <div class="toggle-sidebar">
                    <i class="fa fa-caret-left"></i>
                </div>
            </a>
        </div>
        <div class="px-3 px-md-5">
            <div class="w-100 header">
                <h2 class="title">Evento especial 1</h2>
                {{-- toolbar --}}
                <div class="toolbar w-100 d-flex justify-content-between">
                    <div class="py-3">
                        <span><i class="fa fa-calendar-o"></i></span>
                        <span class="pl-1">18 Nov 2020  -  10:00AM</span>
                    </div>
                    <div class="d-flex">
                        <div class="pl-3 py-3">
                            <span class="star">
                                <i class="fa fa-star-o"></i>
                                Me interesa
                            </span>
                        </div>
                    </div>
                </div>
                
                {{-- end toolbar --}}
            </div>
            <div class="body">
                <div class="m-auto d-flex container-size-md py-5">
                    <div class="video-bg d-flex" style="height: 480px;">   
                        <a href="" class="m-auto btn-video-circle">
                            <div class="bg-btn-circle">
                                <span class="btn-circle-text"><i class="fa fa-caret-right"></i></span>                        
                            </div>       
                        </a>              
                    </div>           
                </div>  
                <div class="mb-4">
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliqua erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.  Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                    </p>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection


@section('footer')
@include('layouts.footer')
@endsection

@section('script')
<script>
    // $(document).ready(function () {
    //     $("#sidebar").mCustomScrollbar({
    //         theme: "minimal"
    //     });

    //     $('#sidebarCollapse').on('click', function () {
    //         $('#sidebar, #content').toggleClass('active');
    //         $('.collapse.in').toggleClass('in');
    //         $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    //     });
    // });  

</script>
@endsection
