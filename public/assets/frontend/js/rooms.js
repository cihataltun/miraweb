// ACCOMMODATION FAMILY ROOM SWIPER
const accomFamilyRoom = document.querySelector('.accomFamilyRoom')
if (accomFamilyRoom) {
    new Swiper(accomFamilyRoom, {
        slidesPerView: 1,
        loop: true,
        pagination: {
            el: '.swiper-pagination-family',
            type: 'bullets',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
}
// ACCOMMODATION KING ROOM SWIPER
const accomKingRoom = document.querySelector('.accomKingRoom')
if (accomKingRoom) {
    new Swiper(accomKingRoom, {
        slidesPerView: 1,
        loop: true,
        pagination: {
            el: '.swiper-pagination-king',
            type: 'bullets',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
}
// ACCOMMODATION STANDARD ROOM SWIPER
const accomStandardRoom = document.querySelector('.accomStandardRoom')
if (accomStandardRoom) {
    new Swiper(accomStandardRoom, {
        slidesPerView: 1,
        loop: true,
        pagination: {
            el: '.swiper-pagination-standard',
            type: 'bullets',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
}
