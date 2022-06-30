'use strict'
console.log('JS it works');

const song = JSON.parse(document.getElementById('json').textContent);

const headerMenu = (clientWidth) => {
    const headerNav = document.getElementById('header__nav');

    const srcImgBurger = headerNav.dataset.imgBurger;
    const srcImgBurgerCloses = headerNav.dataset.imgBurgerCloses;

    const createBurger = () => {
        return `
            <div class="header__burger">

                <div class="header__burger--btn "><img src="${srcImgBurger}" alt="minu"></div>

                <ul class="header__nav">
                    <div class="header__burger--closes__btn"><img src="${srcImgBurgerCloses}" alt=""></div>
                    <li class="header__nav--a"><a href="">About</a></li>
                    <li class="header__nav--a"><a href="">News</a></li>
                    <li class="header__nav--a"><a href="">Music</a></li>
                    <li class="header__nav--a"><a href="">Media</a></li>
                    <li class="header__nav--a"><a href="">Tours</a></li>
                    <li class="header__nav--a"><a href="">Contacts</a></li>
                </ul>

            </div>
        `
    }
    const createMenu = () => {
        return `
            <ul class="header__nav">
                <li class="header__nav--a"><a href="">About</a></li>
                <li class="header__nav--a"><a href="">News</a></li>
                <li class="header__nav--a"><a href="">Music</a></li>
                <li class="header__nav--a"><a href="">Media</a></li>
                <li class="header__nav--a"><a href="">Tours</a></li>
                <li class="header__nav--a"><a href="">Contacts</a></li>
            </ul>
        `
    }

    const renderMenu = (callback) => headerNav.innerHTML = callback


    if (clientWidth <= 1200) {
        renderMenu(createBurger())
        const burgerBtn = document.querySelector('.header__burger--btn');
        const closesBurgerBtn = document.querySelector('.header__burger--closes__btn');
        const nav = document.querySelector('.header__nav');
        let statusBurgerMenu = false;

        burgerBtn.addEventListener('click', () => {
            if (!statusBurgerMenu) {
                nav.classList.add('active')
                statusBurgerMenu = true
            }
        });

        closesBurgerBtn.addEventListener('click', () => {
            if (statusBurgerMenu) {
                nav.classList.remove('active')
                statusBurgerMenu = false
            }
        })

    } else {
        renderMenu(createMenu())
    }

};

function secondsToTime(time) {
    let h = Math.floor(time / (60 * 60)),
        dm = time % (60 * 60),
        m = Math.floor(dm / 60),
        ds = dm % 60,
        s = Math.ceil(ds),
        fulltime;
    if (s === 60) {
        s = 0;
        m = m + 1;
    }
    if (s < 10) {
        s = '0' + s;
    }
    if (m === 60) {
        m = 0;
        h = h + 1;
    }
    if (m < 10) {
        m = '0' + m;
    }
    if (h === 0) {
        fulltime = m + ':' + s;
    } else {
        fulltime = h + ':' + m + ':' + s;
    }
    return fulltime;
}

const offerAudio = (song) => {
    const track = song[0];
    const audio = new Audio(track.src);
    const newSingle = document.querySelector('.offer__text>p');
    const progres = document.querySelector('.offer__audio--progres');
    const durationOfferAudio = document.querySelector('.offer__audio--duration');
    const btn = document.querySelector('.offer__audio--controls');
    const srcPlay = btn.dataset.imgsrcPlay
    const srcPaus = btn.dataset.imgsrcPaus
    const progresBar = document.querySelector('.offer__audio--progres_bar');

    let statusAudio = false;

    btn.src = srcPlay

    newSingle.textContent = track.name;

    function play() {
        btn.src = srcPaus
        statusAudio = true;
        audio.play();
    };

    function pause() {
        btn.src = srcPlay
        statusAudio = false;
        audio.pause();
    };


    function getProgres() {
        const { duration, currentTime } = audio;
        const resProgres = (currentTime / duration) * 100;
        progres.style.width = `${resProgres}%`
        durationOfferAudio.textContent = `${secondsToTime(currentTime)}-${secondsToTime(duration)}`
    }

    function setProgres(e) {
        const width = this.clientWidth
        const clickX = e.offsetX
        const duration = audio.duration
        audio.currentTime = (clickX / width) * duration
    }

    audio.addEventListener('durationchange', getProgres);
    audio.addEventListener('timeupdate', getProgres);
    btn.addEventListener('click', () => !statusAudio ? play() : pause());
    progresBar.addEventListener('click', setProgres)
};

const lastTracks = (song) => {
    const tracks = song;    //arr
    const audio = new Audio;

    const saundWraper = document.querySelector('.last-tracks__track-list');
    const progresBar = document.querySelector('.last-tracks__audio--progres_bar');
    const progres = document.querySelector('.last-tracks__audio--progres');
    const time = document.querySelector('.last-tracks__audio--duration');
    const btn = document.querySelector('.last-tracks__audio--controls');

    const srcPlay = btn.dataset.imgsrcPlay
    const srcPaus = btn.dataset.imgsrcPaus

    btn.src = srcPlay

    let statusAudio = false;

    function createSaund(obj, index) {
        const saund = document.createElement('div');
        saund.classList.add('tracks-list__track')
        saund.dataset.saund = index
        saund.innerHTML = `
            <span class="track--number">0${index + 1}</span>
            <span class="track--name">${obj.author} — ${obj.name}</span>
        `
        return saund
    };

    // редндер треков
    function renderSaund() {
        tracks.forEach((obj, index) => {
            const saund = createSaund(obj, index);
            saund.addEventListener('click', saundClick);
            saundWraper.append(saund);
        });
    };

    function play() {
        btn.src = srcPaus
        statusAudio = true;
        audio.play();
    };

    function pause() {
        btn.src = srcPlay
        statusAudio = false;
        audio.pause();
    };

    function getProgres() {
        const { duration, currentTime } = audio;
        const resProgres = (currentTime / duration) * 100;
        progres.style.width = `${resProgres}%`
        time.textContent = `${secondsToTime(currentTime)}-${secondsToTime(duration)}`
    }

    function setProgres(e) {
        const width = this.clientWidth
        const clickX = e.offsetX
        const duration = audio.duration
        audio.currentTime = (clickX / width) * duration
    }

    function targetPlay(i) {
        const allSaund = [...document.querySelectorAll('.tracks-list__track')];
        audio.src = tracks[i].src
        allSaund.forEach(element =>
            element.dataset.saund == i ?
                element.classList.add('active') :
                element.classList.remove('active'));
    }

    function saundClick() {
        const index = Number(this.dataset.saund);
        audio.src = tracks[index].src
        targetPlay(index);
        play();
    };

    btn.addEventListener('click', () => !statusAudio ? play() : pause());
    audio.addEventListener('durationchange', getProgres)
    audio.addEventListener('timeupdate', getProgres)
    progresBar.addEventListener('click', setProgres)

    renderSaund()
    targetPlay(0);
};

function slider(clientWidth) {
    // начальная позиция переопрееляется при изменении
    let position = 0;
    // елементы слайдера 
    const container = document.querySelector('.slider');
    const track = document.querySelector('.slider__trecker');
    const item = [...document.querySelectorAll('.slide')];
    // сколько элементов показывать
    let slidesToShow;
    // сколько элементов скролить
    const slidesToScrol = 1;

    if (clientWidth <= 992 && clientWidth > 768) {
        slidesToShow = 2
    } else if (clientWidth <= 768) {
        slidesToShow = 1
    } else {
        slidesToShow = 3
    }
    // конопки
    const btnPrev = document.querySelector('.slider__btn--prev');
    const btnNext = document.querySelector('.slider__btn--next');


    // ширина елемента
    const itemWidth = container.clientWidth / slidesToShow
    // movePosition - растоянее скрола колличество слайдов * ширину
    const movePosition = slidesToScrol * itemWidth;
    // общее колличество элементов
    const itemCount = item.length


    item.forEach(item => {
        item.style.minWidth = itemWidth + "px";
    });


    btnNext.addEventListener('click', () => {
        const itemLeft = itemCount - (Math.abs(position) + slidesToShow * itemWidth) / itemWidth
        // console.log(itemLeft);
        position -= itemLeft >= slidesToScrol ? movePosition : itemLeft * itemWidth;
        // position -= movePosition
        setPosition()
        checkBtns()
    });

    btnPrev.addEventListener('click', () => {
        const itemLeft = Math.abs(position) / itemWidth
        position += itemLeft >= slidesToScrol ? movePosition : itemLeft * itemWidth;
        setPosition();
        checkBtns();
    });

    const setPosition = () => {
        track.style = `transform: translateX(${position}px)`
    };


    const checkBtns = () => {
        btnPrev.disabled = (position === 0)

        /*
            конечная точка остановки
            общее количество элементов - показанные элементы * на ширину элементов
        */
        btnNext.disabled = (position <= -(itemCount - slidesToShow) * itemWidth)

    };

    checkBtns();
}


const animation = () => {
    const observer = new IntersectionObserver(callback, { threshold: .3 })
    const elementAnim = document.querySelectorAll(".element-anim")

    function callback(entry) {
        entry.forEach((e) => {
            const { target, isIntersecting } = e
            // console.log(isIntersecting);
            if (isIntersecting) target.classList.add('animation')
        })
    }
    elementAnim.forEach(element => observer.observe(element))
};

const clientWidth = document.documentElement.clientWidth;
headerMenu(clientWidth);
slider(clientWidth);

window.addEventListener('resize', e => {
    const clientWidth = document.documentElement.clientWidth;
    headerMenu(clientWidth);

    slider(clientWidth);
})

window.addEventListener('load', () => {
    lastTracks(song)
    offerAudio(song)
    animation()
});
