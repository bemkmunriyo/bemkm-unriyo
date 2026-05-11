@foreach($berita as $item)
    <div class="card mb-3">
        <div class="card-body">

            <h4>{{ $item->judul }}</h4>

            <small>
                Kategori: {{ $item->kategori ?? '-' }} |
                {{ $item->published_at }}
            </small>

            <p class="mt-2">{{ Str::limit($item->isi, 150) }}</p>

            <span class="badge bg-success">
                {{ $item->status }}
            </span>

        </div>
    </div>
@endforeach