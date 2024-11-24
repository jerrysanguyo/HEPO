@extends('layouts.hepoApp')

@section('content')
<div class="container-fluid">
    @include('components.upper')
    @include('components.lower')
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.card-container');
    const body = document.querySelector('body');

    cards.forEach((cardContainer) => {
        const card = cardContainer.querySelector('.card');

        cardContainer.addEventListener('click', () => {
            let overlay = document.querySelector('.overlay');
            if (!overlay) {
                overlay = document.createElement('div');
                overlay.classList.add('overlay');
                body.appendChild(overlay);
            }

            overlay.innerHTML = '';
            const clonedCard = card.cloneNode(true);
            clonedCard.classList.add('zoomed-card');
            overlay.appendChild(clonedCard);

            clonedCard.style.transform = 'rotateY(0deg) scale(0.2)';
            overlay.classList.add('active');

            setTimeout(() => {
                clonedCard.style.transform = 'rotateY(180deg) scale(1)';
            }, 100);

            overlay.addEventListener('click', (event) => {
                if (event.target === overlay) {
                    clonedCard.style.transform = 'rotateY(0deg) scale(0.2)';
                    overlay.classList.remove('active');

                    setTimeout(() => {
                        overlay.innerHTML = ''; 
                    }, 600);
                }
            });
        });
    });
});
</script>
@endsection