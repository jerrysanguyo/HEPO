<div class="row">
    @php
        $cards = ['T', 'A', 'G', 'U', 'I', 'G2'];
    @endphp
    @foreach($cards as $card)
    <div class="col-lg-2 col-md-4 col-sm-12 mt-sm-4 mt-3">
        <div class="card-container">
            <div class="card card-2 border-0 shadow">
                <div class="card-front">
                    <div class="card-body">
                        <div class="card-title">
                            {{ $card === 'G2' ? substr($card, 0, 1) : $card }}
                        </div>
                    </div>
                </div>
                <div class="card-back overflow-auto">
                    <div class="card-body">
                        <div class="card-title">
                            @include('components.upper.' . $card)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>