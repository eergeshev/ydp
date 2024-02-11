<div class="row">
    @foreach($designers as $designer)
        <div class="col-12 col-md-6 col-lg-4">
            <a href="/designer-detail/{{ $designer->id }}" class="designer-card">
                <div class="designer-img-box">
                    <img src="./upload/{{ $designer->photo }}" alt="">
                </div>
                <strong>{{ $designer->first_name }}  {{ $designer->last_name }}</strong>
                <span>{{ $designer->position }}</span>
            </a>
        </div>
    @endforeach
        <div wire:loading.delay class="text-center loading-img">
            <img src="../images/loading.gif" >
        </div>
        <div class="text-center">
            <button wire:click="load" class="button">Еще</button>
        </div>
</div>
