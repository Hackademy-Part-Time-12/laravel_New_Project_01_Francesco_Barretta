<div class="card" style="width: 18rem;">
    <img src="{{ $movieImgsrc ?? ''}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><strong>{{ $movieTitle ?? ''}}</strong></h5>
        <p class="card-text">{{ $movieDescription ?? ''}}</p>
        <p class="card-text">{{ $movieDirector ?? ''}}</p>
        <p class="card-text">{{ $movieGenre ?? ''}}</p>
        <p class="card-text">{{ $movieImgsrc ?? ''}}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>

