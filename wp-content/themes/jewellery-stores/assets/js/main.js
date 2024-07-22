document.addEventListener('DOMContentLoaded', function() {
    const carouselWrapper = document.querySelector('.carousel__wrapper');
    const carouselInner = document.querySelector('.carousel__inner');
    const items = document.querySelectorAll('.featured-products__item');
    const totalItems = items.length;
    const visibleItems = 3;
    const itemWidthPercent = 100 / visibleItems;

    let currentIndex = 0;

    carouselInner.innerHTML += carouselInner.innerHTML;
    
    const allItems = document.querySelectorAll('.featured-products__item');
    const totalItemsWithClones = allItems.length;

    carouselInner.style.width = `${totalItemsWithClones * 100}%`;

    allItems.forEach(item => {
        item.style.width = `${itemWidthPercent}%`;
    });

    function updateCarousel() {
        const offset = -currentIndex * itemWidthPercent;
        carouselInner.style.transform = `translateX(${offset}%)`;
    }

    document.querySelector('.carousel__arrow--left').addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = totalItems - visibleItems;
            carouselInner.style.transition = 'none';
            carouselInner.style.transform = `translateX(${-currentIndex * itemWidthPercent}%)`;
            setTimeout(() => {
                carouselInner.style.transition = 'transform 0.5s ease';
                currentIndex = totalItemsWithClones - visibleItems;
                updateCarousel();
            }, 50);
            return;
        }
        updateCarousel();
    });

    document.querySelector('.carousel__arrow--right').addEventListener('click', () => {
        if (currentIndex < totalItemsWithClones - visibleItems) {
            currentIndex++;
        } else {
            currentIndex = 0;
            carouselInner.style.transition = 'none';
            carouselInner.style.transform = `translateX(${-currentIndex * itemWidthPercent}%)`;
            setTimeout(() => {
                carouselInner.style.transition = 'transform 0.5s ease';
                currentIndex = visibleItems;
                updateCarousel();
            }, 50);
            return;
        }
        updateCarousel();
    });
    updateCarousel();
});





document.addEventListener('DOMContentLoaded', function() {
    const carouselWrapper = document.querySelector('.jewerly-design-carrousel .carousel__wrapper');
    const carouselInner = document.querySelector('.jewerly-design-carrousel .carousel__inner');
    const items = document.querySelectorAll('.jewerly-design-carrousel-item');
    const totalItems = items.length;
    const visibleItems = 3;
    const itemWidth = 100 / visibleItems;

    let currentIndex = 0;

    carouselInner.innerHTML += carouselInner.innerHTML;
    
    const allItems = document.querySelectorAll('.jewerly-design-carrousel-item');
    const totalItemsWithClones = allItems.length;
    
    carouselInner.style.width = `${totalItemsWithClones * 100}%`; // Шаблонний рядок

    const startIndex = totalItems; 
    carouselInner.style.transform = `translateX(${-startIndex * itemWidth}%)`; // Шаблонний рядок

    function updateCarousel() {
        const offset = -currentIndex * itemWidth;
        carouselInner.style.transform = `translateX(${offset}%)`; // Шаблонний рядок
    }

    document.querySelector('.jewerly-design-carrousel .carousel__arrow-post--left').addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = totalItems - visibleItems;
            carouselInner.style.transition = 'none';
            carouselInner.style.transform = `translateX(${-currentIndex * itemWidth}%)`; // Шаблонний рядок
    
            setTimeout(() => {
                carouselInner.style.transition = 'transform 0.5s ease';
                currentIndex = totalItemsWithClones - visibleItems;
                updateCarousel();
            }, 50);
            return;
        }
        updateCarousel();
    });

    document.querySelector('.jewerly-design-carrousel .carousel__arrow-post--right').addEventListener('click', () => {
        if (currentIndex < totalItemsWithClones - visibleItems) {
            currentIndex++;
        } else {
            currentIndex = 0;
            carouselInner.style.transition = 'none';
            carouselInner.style.transform = `translateX(${-currentIndex * itemWidth}%)`; // Шаблонний рядок
            setTimeout(() => {
                carouselInner.style.transition = 'transform 0.5s ease';
                currentIndex = visibleItems;
                updateCarousel();
            }, 50);
            return;
        }
        updateCarousel();
    });

    updateCarousel();
});
