let data = new Date()
let monthCurrent = String(data.getMonth() + 1).padStart(2, '0')
monthCurrent = parseInt(monthCurrent)
monthCurrent--

//banner
const swiperBanner = new Swiper( '.js-swiper-banner', {
    loop: true,

    autoplay: {
        delay: 6000,
        disableOnInteraction: false
    }
});

//about
const swiperAbout = new Swiper( '.js-swiper-about', {
    breakpoints: {
        320: {
            slidesPerView: 1,
        },

        768: {
            slidesPerView: 2,
            spaceBetween: 30,
        },

        992: {
            slidesPerView: 3,
            spaceBetween: 30,
        }
    },

    navigation: {
        prevEl: '.js-swiper-button-prev-about',
        nextEl: '.js-swiper-button-next-about',
    }
})

//calendar day
const swiperDay = new Swiper( '.js-swiper-day', {
    allowTouchMove: false,
    initialSlide: monthCurrent,
    
    navigation: {
        prevEl: '.js-swiper-button-prev-calendar',
        nextEl: '.js-swiper-button-next-calendar'
    }
})

//here
const swiperHere = new Swiper( '.js-swiper-here', {
    breakpoints: {
        320: {
            slidesPerView: 1
        },

        768: {
            slidesPerView: 2,
            spaceBetween: 30,
        },

        992: {
            slidesPerView: 3,
            spaceBetween: 30,
        }
    },

    navigation: {
        prevEl: '.js-swiper-button-prev-here',
        nextEl: '.js-swiper-button-next-here'
    }
})

//school
const swiperSchool = new Swiper( '.js-swiper-school', {
    navigation: {
        prevEl: '.js-swiper-button-prev-school',
        nextEl: '.js-swiper-button-next-school'
    }
})

//videos
const swiperVideos = new Swiper( '.js-swiper-videos', {
    navigation: {
        prevEl: '.js-swiper-button-prev-videos',
        nextEl: '.js-swiper-button-next-videos'
    },

    breakpoints: {
        320: {
            slidesPerView: 1,
        },

        768: {
            slidesPerView: 3,
            spaceBetween: 6,
        }
    }
}) 

//calendar
const swiperMonth = new Swiper( '.js-swiper-month', {
    allowTouchMove: false,
    initialSlide: monthCurrent,
    
    navigation: {
        prevEl: '.js-swiper-button-prev-calendar',
        nextEl: '.js-swiper-button-next-calendar'
    }
})

const swiperCalendar = new Swiper( '.js-swiper-calendar', {
    allowTouchMove: false,
    initialSlide: monthCurrent,
    
    navigation: {
        prevEl: '.js-swiper-button-prev-calendar',
        nextEl: '.js-swiper-button-next-calendar'
    }
})

//partners 
const swiperPartners = new Swiper( '.js-swiper-partners', {
    spaceBetween: 30,
    loop: true,

    breakpoints: {
        320: {
            slidesPerView: 2,
        },

        768: {
            slidesPerView: 4,
        },

        992: {
            slidesPerView: 5,
        },
    },

    autoplay: {
        delay: 6000,
        disableOnInteraction: false,
    },

    navigation: {
        prevEl: '.js-swiper-button-prev-partners',
        nextEl: '.js-swiper-button-next-partners'
    }
})

if(document.querySelector( '.js-swipers' ) ) {
    const swipersStructures = document.getElementsByClassName( 'js-swipers' ) 
    let count = 0;

    for( const i of swipersStructures ) {
        count++

        let swiper = new Swiper( `.js-swiper-structures-${count}`, {
            navigation: {
                prevEl: `.js-swiper-button-prev-structures-${count}`,
                nextEl: `.js-swiper-button-next-structures-${count}`
            }
        })
    }
}