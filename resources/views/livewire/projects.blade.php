
<section class="projects container">
        @foreach($projects as $project)
            <div class="project">
                <div class="row">
                    @if($loop->odd)
                        <div class="col-12 col-lg-7">
                    @else
                        <div class="col-12 col-lg-7 order-lg-2">
                    @endif
                            <div class="project__img">
                                <img src="./upload/{{ $project->image }}" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <div class="project__body">
                                <h3 class="project__title">{{ $project->title }}</h3>
                                <p class="project__descr">{{ $project->intro_text }}</p>
                                <a href="/project-detail/{{ $project->id }}" class="button">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>

        @endforeach
        <div wire:loading.delay class="text-center loading-img">
            <img src="../images/loading.gif" >
        </div>
        <div class="text-center">
            <button wire:click="load" class="button">Еще</button>
        </div>
</section>
