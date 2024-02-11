<div class="row">
    @foreach($news as $new)
        <div class="col-12 col-md-6 col-lg-4">
            <a href="/news-detail/{{ $new->id }}" class="news-card">

                    <img src="../upload/{{ $new->image }}" alt="">

                <strong>{{ $new->title }}</strong>
                <span class="date">{{ date('d.m.Y', strtotime($new->data)) }}</span>
            </a>
        </div>
    @endforeach
    <div wire:loading.delay class="text-center loading-img">
        <img src="../../images/loading.gif" >
    </div>
    <div class="text-center">
        <button wire:click="load" class="button">Еще</button>
    </div>
</div>
