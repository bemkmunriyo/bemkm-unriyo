@extends('layouts.app')

@section('content')

<style>

/*
|--------------------------------------------------------------------------
| DETAIL BERITA
|--------------------------------------------------------------------------
*/

.berita-wrapper{

    background:#F5F7FB;
    min-height:100vh;
    padding:60px 20px;

}

.berita-container{

    max-width:850px;
    margin:auto;

}

.berita-card{

    background:#ffffff;
    border-radius:28px;
    overflow:hidden;
    box-shadow:0 10px 40px rgba(0,0,0,0.08);

}

/*
|--------------------------------------------------------------------------
| THUMBNAIL
|--------------------------------------------------------------------------
*/

.berita-thumbnail{

    position:relative;

    width:100%;

    height:420px;

    overflow:hidden;

    background:#E5E7EB;

}

.berita-thumbnail img{

    width:100%;

    height:100%;

    object-fit:cover;

    display:block;

}

/*
|--------------------------------------------------------------------------
| KATEGORI
|--------------------------------------------------------------------------
*/

.berita-kategori{

    position:absolute;

    top:20px;
    left:20px;

    background:#041C64;

    color:white;

    padding:10px 18px;

    border-radius:999px;

    font-size:13px;

    font-weight:700;

    box-shadow:0 5px 15px rgba(0,0,0,0.08);

}

/*
|--------------------------------------------------------------------------
| CONTENT
|--------------------------------------------------------------------------
*/

.berita-content{

    padding:40px;

}

.berita-title{

    font-size:42px;

    line-height:1.2;

    color:#0B1442;

    font-weight:800;

    margin-bottom:35px;

}

/*
|--------------------------------------------------------------------------
| META
|--------------------------------------------------------------------------
*/

.berita-meta{

    display:flex;

    flex-wrap:wrap;

    gap:40px;

    padding-bottom:30px;

    border-bottom:1px solid #E5E7EB;

    margin-bottom:35px;

}

.meta-item{

    display:flex;

    align-items:center;

    gap:14px;

}

.meta-avatar{

    width:52px;

    height:52px;

    border-radius:16px;

    background:#EEF4FF;

    display:flex;

    align-items:center;

    justify-content:center;

    font-weight:800;

    color:#2563EB;

    font-size:18px;

}

.meta-label{

    font-size:13px;

    color:#9CA3AF;

    margin-bottom:4px;

}

.meta-value{

    font-size:17px;

    font-weight:700;

    color:#0B1442;

}

/*
|--------------------------------------------------------------------------
| ARTICLE
|--------------------------------------------------------------------------
*/

.berita-isi{

    font-size:18px;

    line-height:1.9;

    color:#374151;

}

.berita-isi p{

    margin-bottom:24px;

}

/*
|--------------------------------------------------------------------------
| FOOTER
|--------------------------------------------------------------------------
*/

.berita-footer{

    margin-top:50px;

    padding-top:30px;

    border-top:1px solid #E5E7EB;

    display:flex;

    justify-content:space-between;

    align-items:center;

    gap:20px;

    flex-wrap:wrap;

}

.footer-kategori{

    display:flex;

    align-items:center;

    gap:14px;

}

.footer-label{

    color:#9CA3AF;

    font-size:14px;

}

.footer-badge{

    background:#EEF4FF;

    color:#2563EB;

    padding:10px 18px;

    border-radius:999px;

    font-size:14px;

    font-weight:700;

}

.btn-kembali{

    background:#041C64;

    color:white;

    text-decoration:none;

    padding:14px 24px;

    border-radius:16px;

    font-weight:700;

    transition:0.3s;

}

.btn-kembali:hover{

    background:#02113D;

}

/*
|--------------------------------------------------------------------------
| RESPONSIVE
|--------------------------------------------------------------------------
*/

@media(max-width:768px){

    .berita-content{

        padding:28px;

    }

    .berita-title{

        font-size:30px;

    }

    .berita-thumbnail img{

    max-height:180px;

    }

    .berita-isi{

        font-size:16px;

        line-height:1.8;

    }

}

</style>

<div class="berita-wrapper">

    <div class="berita-container">

        <!-- CARD -->
        <article class="berita-card">

            <!-- THUMBNAIL -->
            @if($berita->thumbnail)

            <div class="berita-thumbnail">

                <img src="{{ asset('uploads/berita/' . $berita->thumbnail) }}">

                <div class="berita-overlay"></div>

                <div class="berita-kategori">

                    {{ $berita->kategori }}

                </div>

            </div>

            @endif

            <!-- CONTENT -->
            <div class="berita-content">

                <!-- TITLE -->
                <h1 class="berita-title">

                    {{ $berita->judul }}

                </h1>

                <!-- META -->
                <div class="berita-meta">

                    <!-- PENULIS -->
                    <div class="meta-item">

                        <div class="meta-avatar">

                            {{ strtoupper(substr($berita->penulis->name ?? 'A', 0, 1)) }}

                        </div>

                        <div>

                            <div class="meta-label">

                                Penulis

                            </div>

                            <div class="meta-value">

                                {{ $berita->penulis->name ?? 'Administrator' }}

                            </div>

                        </div>

                    </div>

                    <!-- TANGGAL -->
                    <div>

                        <div class="meta-label">

                            Dipublikasikan

                        </div>

                        <div class="meta-value">

                            {{ $berita->created_at->format('d F Y') }}

                        </div>

                    </div>

                </div>

                <!-- ISI -->
                <div class="berita-isi">

                    {!! nl2br(e($berita->isi)) !!}

                </div>

                <!-- FOOTER -->
                <div class="berita-footer">

                    <!-- KATEGORI -->
                    <div class="footer-kategori">

                        <span class="footer-label">

                            Kategori:

                        </span>

                        <span class="footer-badge">

                            {{ $berita->kategori }}

                        </span>

                    </div>

                    <!-- BUTTON -->
                    <a href="{{ route('public.berita.index') }}"
                       class="btn-kembali">

                        ← Kembali

                    </a>

                </div>

            </div>

        </article>

    </div>

</div>

@endsection