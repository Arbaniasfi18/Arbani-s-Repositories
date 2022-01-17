@extends('layouts.app')

@section('content')

<section id="competition-page" class="competition-page">
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <h1>Competitions</h1>
                <div class="row my-4">
                    @foreach ($competitions as $competition)
                        <div class="grid-item col-lg-4 col-md-6 py-3">
                            <div class="post-box">
                                <div class="post-img">
                                    <img src="{{ Storage::url($competition['image']) }}" class="img-fluid" alt="{{ $competition['competition_name']  }}">
                                </div>
                                {{-- <span class="post-date"><?= tgl_indonesia($p['created_at']) ;?></span> --}}
                                <div class="text-center">
                                    <h3 class="post-title">{{ $competition['competition_name']  }}</h3>
                                    
                                    @php
                                        if(strlen($competition['description'] ) <= 100){
                                            $desc = $competition['description'] ;
                                        } else{
                                            $desc = substr($competition['description'] , 0, 100) . '...'; 
                                        }
                                    @endphp 
                                
                                    <p>
                                        {{ $desc }}
                                    </p>
                                </div>
                                {{-- {{ route('competition-detail', $competition['slug'] ) }} --}}
                                <a href="{{ route('competition-detail') }}" class="btn btn-primary stretched-link mt-3">Lihat Detail</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection