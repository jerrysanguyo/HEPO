<div class="row mt-3">
    @php
        $cardsLower = ['H', 'E', 'P', 'O'];
    @endphp
    @foreach($cardsLower as $lower)
    <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="card-container">
            <div class="card card-2 border-0 shadow">
                <div class="card-front">
                    <div class="card-body">
                        <div class="card-title">
                            {{ $lower }}
                        </div>
                    </div>
                </div>
                <div class="card-back overflow-auto">
                    <div class="card-body">
                        <div class="card-title">
                            {{ $lower }} Back
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>