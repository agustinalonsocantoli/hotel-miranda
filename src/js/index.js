'use strict'

let rooms = [
  {
      name: 'Minimal Duplex Room',
      description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
      price: 345,
      available: 'Booking Now',
  },
  {
      name: 'Minimal Duplex Room',
      description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
      price: 345,
      available: 'Booking Now',
  },
  {
      name: 'Minimal Duplex Room',
      description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
      price: 345,
      available: 'Booking Now',
  },
  {
      name: 'Minimal Duplex Room',
      description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
      price: 345,
      available: 'Booking Now',
  },
  {
      name: 'Minimal Duplex Room',
      description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
      price: 345,
      available: 'Booking Now',
  },
  {
      name: 'Minimal Duplex Room',
      description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
      price: 345,
      available: 'Booking Now',
  },
  {
      name: 'Minimal Duplex Room',
      description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
      price: 550,
      available: 'Booking Now',
  },
  {
      name: 'Minimal Duplex Room',
      description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
      price: 550,
      available: 'Booking Now',
  },
  {
      name: 'Minimal Duplex Room',
      description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
      price: 550,
      available: 'Booking Now',
  },
  {
      name: 'Minimal Duplex Room',
      description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
      price: 550,
      available: 'Booking Now',
  },
  {
      name: 'Minimal Duplex Room',
      description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
      price: 550,
      available: 'Booking Now',
  },
  {
      name: 'Minimal Duplex Room',
      description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
      price: 550,
      available: 'Booking Now',
  },
  {
    name: 'Minimal Duplex Room',
    description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
    price: 645,
    available: 'Booking Now',
},
{
    name: 'Minimal Duplex Room',
    description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
    price: 645,
    available: 'Booking Now',
},
{
    name: 'Minimal Duplex Room',
    description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
    price: '$645',
    available: 'Booking Now',
},
{
    name: 'Minimal Duplex Room',
    description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
    price: 645,
    available: 'Booking Now',
},
{
    name: 'Minimal Duplex Room',
    description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
    price: 645,
    available: 'Booking Now',
},
{
    name: 'Minimal Duplex Room',
    description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
    price: 645,
    available: 'Booking Now',
},
{
    name: 'Minimal Duplex Room',
    description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
    price: 750,
    available: 'Booking Now',
},
{
    name: 'Minimal Duplex Room',
    description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
    price: 750,
    available: 'Booking Now',
},
{
    name: 'Minimal Duplex Room',
    description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
    price: 750,
    available: 'Booking Now',
},
{
    name: 'Minimal Duplex Room',
    description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
    price: 750,
    available: 'Booking Now',
},
{
    name: 'Minimal Duplex Room',
    description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
    price: 750,
    available: 'Booking Now',
},
{
    name: 'Minimal Duplex Room',
    description: 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
    price: 750,
    available: 'Booking Now',
},
]

// Menu Hamburguesa Header
let open = document.querySelector('.nav__open');
let close = document.querySelector('.nav__close');
let mobile = document.querySelector('.nav__mobile');

open.addEventListener('click', () => {
    open.style.display = 'none';
    close.style.display = 'flex';
    mobile.style.display = 'block';
});

close.addEventListener('click', () => {
    open.style.display = 'flex';
    close.style.display = 'none';
    mobile.style.display = 'none';
});

// Swiper
var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiperData = new Swiper(".DataSwiper", {
  pagination: {
    el: ".swiper-pagination",
  },
});

var swiperMenu = new Swiper(".MenuSwiper", {
  slidesPerView: 1,
  spaceBetween: 20,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// Menu Swiper

if(window.location.href.indexOf('index') > -1) {
  let prev = document.querySelector('.btn-prev');
  let next = document.querySelector('.btn-next');
  let page1 = document.querySelector('.page1');
  let page2 = document.querySelector('.page2');

  page2.style.display = 'none';
  prev.style.background = '#F8F8F8';
  prev.style.color = '#111111';

  next.addEventListener('click', () => {
    page1.style.display = 'none';
    page2.style.display = 'block';
    next.style.background = '#F8F8F8';
    next.style.color = '#111111';
    prev.style.background = '#BEAD8E';
    prev.style.color = '#FFFFFF';

  });

  prev.addEventListener('click', () => {
    page2.style.display = 'none';
    page1.style.display = 'block';
    prev.style.background = '#F8F8F8';
    prev.style.color = '#111111';
    next.style.background = '#BEAD8E';
    next.style.color = '#FFFFFF';

  });
}

// Mostrar Rooms Grid

if(window.location.href.indexOf('rooms-grid') > -1) {

  let responsive = window.innerWidth < 999 ? true : false;
  let divRooms1 = document.querySelector('.rooms-page1');
  let divRooms2 = document.querySelector('.rooms-page2');
  let divRooms3 = document.querySelector('.rooms-page3');
  let divRooms4 = document.querySelector('.rooms-page4');

  rooms.forEach((item, index) => {
    const div = document.createElement("div");
    div.className = `room-grid`;

    
    div.innerHTML = `
            <div class="room-img"> 
              <img src="src/img/imgCount.png" alt="room" />
            
              <div class="rooms-icons">
                <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.27273 4.36364C3.59637 4.36364 3.91274 4.26767 4.18184 4.08786C4.45094 3.90805 4.66068 3.65249 4.78453 3.35348C4.90838 3.05448 4.94079 2.72546 4.87765 2.40803C4.81451 2.09061 4.65866 1.79904 4.42981 1.57019C4.20096 1.34134 3.90939 1.18549 3.59197 1.12235C3.27454 1.05921 2.94552 1.09162 2.64652 1.21547C2.34751 1.33932 2.09195 1.54906 1.91214 1.81816C1.73233 2.08726 1.63636 2.40363 1.63636 2.72727C1.63636 3.16126 1.80877 3.57748 2.11564 3.88436C2.42252 4.19124 2.83874 4.36364 3.27273 4.36364ZM3.27273 2.18182C3.38061 2.18182 3.48607 2.21381 3.57577 2.27374C3.66547 2.33368 3.73538 2.41887 3.77666 2.51854C3.81795 2.61821 3.82875 2.72788 3.8077 2.83369C3.78665 2.93949 3.7347 3.03668 3.65842 3.11297C3.58214 3.18925 3.48495 3.2412 3.37914 3.26225C3.27333 3.28329 3.16366 3.27249 3.06399 3.23121C2.96432 3.18992 2.87913 3.12001 2.8192 3.03031C2.75926 2.94061 2.72727 2.83515 2.72727 2.72727C2.72727 2.58261 2.78474 2.44387 2.88703 2.34158C2.98933 2.23929 3.12806 2.18182 3.27273 2.18182ZM10.3636 1.09091H6C5.85534 1.09091 5.7166 1.14838 5.61431 1.25067C5.51201 1.35296 5.45455 1.4917 5.45455 1.63636V4.90909H1.09091V0.545455C1.09091 0.400791 1.03344 0.262053 0.931149 0.15976C0.828857 0.0574675 0.690118 0 0.545455 0C0.400791 0 0.262052 0.0574675 0.15976 0.15976C0.0574673 0.262053 0 0.400791 0 0.545455V7.63636C0 7.78103 0.0574673 7.91977 0.15976 8.02206C0.262052 8.12435 0.400791 8.18182 0.545455 8.18182C0.690118 8.18182 0.828857 8.12435 0.931149 8.02206C1.03344 7.91977 1.09091 7.78103 1.09091 7.63636V6H10.9091V7.63636C10.9091 7.78103 10.9666 7.91977 11.0689 8.02206C11.1711 8.12435 11.3099 8.18182 11.4545 8.18182C11.5992 8.18182 11.7379 8.12435 11.8402 8.02206C11.9425 7.91977 12 7.78103 12 7.63636V2.72727C12 2.29328 11.8276 1.87707 11.5207 1.57019C11.2138 1.26331 10.7976 1.09091 10.3636 1.09091ZM10.9091 4.90909H6.54545V2.18182H10.3636C10.5083 2.18182 10.647 2.23929 10.7493 2.34158C10.8516 2.44387 10.9091 2.58261 10.9091 2.72727V4.90909Z" fill="#222222"/>
                </svg>

                <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.95 6.32047C5.24315 6.32047 4.53629 6.61153 4.07892 7.15207C3.66312 7.65102 2.91469 6.98575 3.33048 6.48679C3.99576 5.73836 4.95209 5.32256 5.95 5.32256C6.94791 5.32256 7.90424 5.73836 8.56952 6.48679C8.98531 6.98575 8.23688 7.65102 7.82108 7.15207C7.36371 6.61153 6.65685 6.32047 5.95 6.32047ZM5.95 9.81316C5.40946 9.81316 4.95209 9.35579 4.95209 8.81525C4.95209 8.27472 5.40946 7.81734 5.95 7.81734C6.49053 7.81734 6.94791 8.27472 6.94791 8.81525C6.94791 9.35579 6.49053 9.81316 5.95 9.81316ZM5.95 3.8257C4.61945 3.8257 3.41364 4.28307 2.45731 5.2394C2.04151 5.6552 1.2515 5.03151 1.75046 4.53255C2.87311 3.4099 4.36997 2.82779 5.95 2.82779C7.53003 2.82779 9.02689 3.4099 10.1495 4.53255C10.6485 5.03151 9.85849 5.6552 9.44269 5.2394C8.48636 4.28307 7.28055 3.8257 5.95 3.8257ZM5.95 1.33092C4.03734 1.33092 2.24941 2.03777 0.877283 3.32674C0.378328 3.78412 -0.328526 3.07726 0.17043 2.61989C1.79204 1.12302 3.78786 0.333008 5.95 0.333008C8.11214 0.333008 10.108 1.12302 11.7296 2.61989C12.2285 3.07726 11.5217 3.78412 11.0227 3.32674C9.65059 2.03777 7.86266 1.33092 5.95 1.33092Z" fill="#222222"/>
                </svg>

                <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.75638 3.28816L1.93336 2.75725H1.63638C1.36851 2.75725 1.15154 2.54028 1.15154 2.2724C1.15154 2.00452 1.36851 1.78755 1.63638 1.78755C1.93335 1.78755 2.2565 1.78755 2.2565 1.78755C2.2565 1.78755 2.48778 1.09374 2.63105 0.664647C2.69699 0.466586 2.8822 0.333008 3.09093 0.333008C4.22232 0.333008 7.77772 0.333008 8.90911 0.333008C9.11784 0.333008 9.30305 0.466586 9.36899 0.664647L9.74354 1.78755H10.3637C10.6315 1.78755 10.8485 2.00452 10.8485 2.2724C10.8485 2.54028 10.6315 2.75725 10.3637 2.75725H10.0667L10.2437 3.28816C10.8703 3.4501 11.3334 4.01931 11.3334 4.69664V9.06028C11.3334 9.32816 11.1164 9.54513 10.8485 9.54513C10.5523 9.54513 10.1751 9.54513 9.87881 9.54513C9.61093 9.54513 9.39396 9.32816 9.39396 9.06028V8.57543H2.60608V9.06028C2.60608 9.32816 2.38911 9.54513 2.12123 9.54513C1.82499 9.54513 1.44778 9.54513 1.15154 9.54513C0.883657 9.54513 0.666687 9.32816 0.666687 9.06028C0.666687 8.1381 0.666687 6.09834 0.666687 4.69664C0.666687 4.01931 1.12972 3.4501 1.75638 3.28816ZM2.60608 5.18149C2.87396 5.18149 3.09093 5.39846 3.09093 5.66634C3.09093 5.93422 2.87396 6.15119 2.60608 6.15119C2.18305 6.15119 1.63638 6.15119 1.63638 6.15119V7.60574H3.27614C3.27614 7.60574 3.84584 6.46658 4.11178 5.93446C4.19396 5.7701 4.36172 5.66634 4.54547 5.66634C5.20826 5.66634 6.79178 5.66634 7.45457 5.66634C7.63832 5.66634 7.80608 5.7701 7.88826 5.93446C8.1542 6.46658 8.7239 7.60574 8.7239 7.60574H10.3637V6.15119H9.39396C9.12608 6.15119 8.90911 5.93422 8.90911 5.66634C8.90911 5.39846 9.12608 5.18149 9.39396 5.18149C9.81699 5.18149 10.3637 5.18149 10.3637 5.18149V4.69664C10.3637 4.42877 10.1467 4.2118 9.87881 4.2118C8.35105 4.2118 3.64899 4.2118 2.12123 4.2118C1.85335 4.2118 1.63638 4.42877 1.63638 4.69664V5.18149H2.60608ZM7.15493 6.63604H4.84511L4.36026 7.60574H7.63978L7.15493 6.63604ZM3.44051 1.3027L2.79396 3.2421H9.20608L8.55954 1.3027H3.44051Z" fill="#222222"/>
                </svg>

                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.832 8.36893L9.40798 7.55243L10.6456 7.00868C10.818 6.93293 10.8974 6.73118 10.8219 6.55818C10.7479 
                    6.39081 10.54 6.30868 10.3712 6.38243L8.67048 7.12956L6.68736 5.99231L8.66098 4.85306L10.381 5.60206C10.5556 5.67731 
                    10.7577 5.59118 10.8299 5.42456C10.9047 5.25156 10.8252 5.05006 10.6529 4.97531L9.39661 4.42831L10.8279 3.60206C10.9069 
                    3.55643 10.9634 3.48268 10.9869 3.39443C11.0104 3.30618 10.9982 3.21418 10.9525 3.13518C10.8615 2.97868 10.6435 2.91918 
                    10.4857 3.01005L9.06411 3.83068L9.21636 2.48743C9.22686 2.3963 9.20111 2.30668 9.14398 2.23493C9.08711 2.16368 9.00598 
                    2.11893 8.91611 2.10905C8.72486 2.08643 8.55736 2.22468 8.53773 2.41105L8.34461 4.25618L6.37498 5.40206V3.12668L7.86561 
                    2.01268C7.93611 1.96093 7.98223 1.88443 7.99548 1.79718C8.00923 1.70605 7.98498 1.61055 7.92923 1.53505C7.82036 1.38743 7.61236 1.35355 7.46311 1.46343L6.37498 2.27505V0.62568C6.37498 0.42443 6.17686 0.28418 5.99898 0.28418C5.82211 0.28418 5.62498 0.42443 5.62498 0.62568V2.26505L4.55336 1.4633C4.40673 1.35443 4.19298 1.38743 4.08386 1.53493C4.02673 1.61193 4.00211 1.70893 4.01598 1.8008C4.02898 1.88668 4.07448 1.9618 4.14311 2.01193L5.62498 3.11618V5.40093L3.68486 4.28018L3.47823 2.4338C3.45761 2.26155 3.31411 2.13168 3.14411 2.13168C3.13048 2.13168 3.11636 2.13243 3.10336 2.13418C2.91886 2.1553 2.78473 2.32468 2.80448 2.5133L2.96223 3.85681L1.50711 3.02218C1.45561 2.99281 1.39711 2.97718 1.33798 2.97718C1.21573 2.97718 1.10223 3.04293 1.04173 3.14893C0.948859 3.3108 1.00498 3.5198 1.16798 3.6153L2.63236 4.45506L1.37823 5.00581C1.29448 5.04256 1.23011 5.10955 1.19723 5.19443C1.16411 5.27943 1.16623 5.37231 1.20286 5.45543C1.27486 5.62143 1.47623 5.70618 1.65273 5.63193L3.36998 4.87793L5.31686 5.99418L3.36586 7.12056L1.66323 6.37893C1.49411 6.30556 1.28686 6.38793 1.21386 6.55581C1.13836 6.72818 1.21761 6.93006 1.39061 7.00606L2.62961 7.54556L1.17686 8.38431C1.01473 8.47931 0.958984 8.68868 1.05261 8.85106C1.11336 8.95631 1.22711 9.02168 1.34886 9.02168C1.40948 9.02168 1.46873 9.00556 1.51911 8.97593L2.98161 8.13156L2.82648 9.49431C2.81648 9.58518 2.84236 9.67443 2.89961 9.74593C2.95661 9.81706 3.03786 9.86193 3.12536 9.87143C3.13873 9.87331 3.15311 9.87368 3.16736 9.87368C3.34111 9.87368 3.48686 9.74343 3.50648 9.56968L3.70198 7.70618L5.62498 6.58781V8.85781L4.30448 9.96243C4.16348 10.0806 4.14748 10.2962 4.26773 10.4416C4.33098 10.5199 4.43111 10.5667 4.53561 10.5667C4.62998 10.5667 4.69336 10.5262 4.74073 10.4886L5.62498 9.74693V11.3734C5.62498 11.5747 5.82211 11.7149 5.99898 11.7149C6.17686 11.7149 6.37498 11.5747 6.37498 11.3734V9.73593L7.27286 10.4901C7.42236 10.6104 7.62461 10.5819 7.73923 10.4431C7.79673 10.3739 7.82711 10.2881 7.82461 10.2009C7.82198 10.1063 7.78098 10.0214 7.70973 9.96206L6.37498 8.84656V6.58243L8.33848 7.71693L8.54673 9.58068C8.56736 9.75256 8.71123 9.88218 8.88161 9.88218C8.89773 9.88218 8.90773 9.88131 8.91873 9.87968C9.00873 9.86981 9.08948 9.82506 9.14611 9.75406C9.20336 9.68231 9.22911 9.59243 9.21848 9.50106L9.05986 8.14018L10.4922 8.96156C10.5436 8.99118 10.6024 9.00681 10.6621 9.00681C10.7845 9.00681 10.898 8.94093 10.9581 8.83493C11.0512 8.67243 10.995 8.46331 10.832 8.36893Z" fill="#222222"/>
                </svg>

                <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.05095 4.17525L9.03992 6.47828M6.19117 1.50942L4.79503 0.703356C4.62981 0.607961 4.41853 0.664573 4.32313 0.829801L1.7898 5.21766C1.6944 5.38291 1.75102 5.59417 1.91625 5.68956L3.31238 6.49562C3.47761 6.59102 3.68888 6.53442 3.78428 6.36918L6.31762 1.98132C6.41301 1.81609 6.3564 1.60481 6.19117 1.50942ZM12.1746 4.96396L10.7785 4.1579C10.6132 4.0625 10.402 4.11912 10.3066 4.28435L7.77325 8.67221C7.67785 8.83745 7.73445 9.04871 7.89969 9.14411L9.29583 9.95017C9.46107 10.0456 9.67233 9.98897 9.76773 9.82372L12.3011 5.43586C12.3965 5.27063 12.3399 5.05936 12.1746 4.96396ZM0.869696 3.35679L2.25151 0.963407C2.34691 0.798179 2.55819 0.741567 2.72341 0.836961L3.62093 1.35514C3.78616 1.45054 3.84277 1.66181 3.74738 1.82704L2.36556 4.22042C2.27016 4.38567 2.05889 4.44226 1.89366 4.34687L0.996141 3.82869C0.830914 3.73329 0.774293 3.52203 0.869696 3.35679ZM11.8394 9.69012L13.2212 7.29674C13.3166 7.13151 13.26 6.92024 13.0947 6.82484L12.1972 6.30666C12.032 6.21126 11.8207 6.26788 11.7253 6.4331L10.3435 8.82648C10.2481 8.99173 10.3047 9.20298 10.4699 9.29838L11.3675 9.81656C11.5327 9.91197 11.7439 9.85536 11.8394 9.69012Z" stroke="#222222" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.33333 7.66667V10.3333M9.66667 2.33333V2.66667C9.66667 3.02029 9.80714 3.35943 10.0572 3.60948C10.3072 3.85952 10.6464 4 11 4C11.3536 4 11.6928 4.14048 11.9428 4.39052C12.1929 4.64057 12.3333 4.97971 12.3333 5.33333V5.66667M1 1L13 13M10.3333 10.3333H1.66667C1.48986 10.3333 1.32029 10.2631 1.19526 10.1381C1.07024 10.013 1 9.84348 1 9.66667V8.33333C1 8.15652 1.07024 7.98695 1.19526 7.86193C1.32029 7.7369 1.48986 7.66667 1.66667 7.66667H7.66667M10.3333 7.66667H12.3333C12.5101 7.66667 12.6797 7.7369 12.8047 7.86193C12.9298 7.98695 13 8.15652 13 8.33333V9.66667C13 9.85333 12.9233 10.022 12.8 10.1427L10.3333 7.66667Z" stroke="#222222" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.36002 9.87301L1.88669 4.99301H10.8334L6.36002 9.87301ZM6.36002 9.87301C6.36002 10.2797 6.36002 13.533 6.36002 13.533M4.73335 13.533H7.98669M3.51335 6.61967H9.20669M3.10669 2.95967L5.95335 6.61967M0.666687 4.17967L5.14002 1.33301H1.88669L0.666687 4.17967Z" stroke="#222222" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
            </div>

            <h3>${item.name}</h3>
        
            <p>
                ${item.description}
            </p>
        
            <div class="room-price">
              <p class="price">$${item.price}/Night</p>
              <p>${item.available}</p>
            </div>
    `;

    if(index < 6) {
      divRooms1.appendChild(div);
    } else if (index > 5 && index < 12) {
      divRooms2.appendChild(div);
    } else if (index > 11 && index < 18) {
      divRooms3.appendChild(div);
    } else if (index > 17 && index < 24) {
      divRooms4.appendChild(div);
    }

  });

  if(responsive) {
    divRooms2.style.display = 'none';
    divRooms3.style.display = 'none';
    divRooms4.style.display = 'none';
  } else {
    divRooms3.style.display = 'none';
    divRooms4.style.display = 'none';
  }

  let roomPrev = document.querySelector('.btn_room-prev');
  let roomNext = document.querySelector('.btn_room-next');

  roomNext.addEventListener('click', () => {

  });

  roomPrev.addEventListener('click', () => {

  });
}

// Mostrar Rooms List
// Mostrar Rooms

if(window.location.href.indexOf('rooms-list') > -1) {

  let divRooms1 = document.querySelector('.list-page1');
  let divRooms2 = document.querySelector('.list-page2');
  let divRooms3 = document.querySelector('.list-page3');
  let divRooms4 = document.querySelector('.list-page4');

  rooms.forEach((item, index) => {
    const div = document.createElement("div");
    div.className = `room-list`;

    
    div.innerHTML = `
            <div class="room-list__img"> 
              <img src="src/img/imgCount.png" alt="room" />
            </div>

            <div class="room-list_content">
              <div class="rooms-icons">
                <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.27273 4.36364C3.59637 4.36364 3.91274 4.26767 4.18184 4.08786C4.45094 3.90805 4.66068 3.65249 4.78453 3.35348C4.90838 3.05448 4.94079 2.72546 4.87765 2.40803C4.81451 2.09061 4.65866 1.79904 4.42981 1.57019C4.20096 1.34134 3.90939 1.18549 3.59197 1.12235C3.27454 1.05921 2.94552 1.09162 2.64652 1.21547C2.34751 1.33932 2.09195 1.54906 1.91214 1.81816C1.73233 2.08726 1.63636 2.40363 1.63636 2.72727C1.63636 3.16126 1.80877 3.57748 2.11564 3.88436C2.42252 4.19124 2.83874 4.36364 3.27273 4.36364ZM3.27273 2.18182C3.38061 2.18182 3.48607 2.21381 3.57577 2.27374C3.66547 2.33368 3.73538 2.41887 3.77666 2.51854C3.81795 2.61821 3.82875 2.72788 3.8077 2.83369C3.78665 2.93949 3.7347 3.03668 3.65842 3.11297C3.58214 3.18925 3.48495 3.2412 3.37914 3.26225C3.27333 3.28329 3.16366 3.27249 3.06399 3.23121C2.96432 3.18992 2.87913 3.12001 2.8192 3.03031C2.75926 2.94061 2.72727 2.83515 2.72727 2.72727C2.72727 2.58261 2.78474 2.44387 2.88703 2.34158C2.98933 2.23929 3.12806 2.18182 3.27273 2.18182ZM10.3636 1.09091H6C5.85534 1.09091 5.7166 1.14838 5.61431 1.25067C5.51201 1.35296 5.45455 1.4917 5.45455 1.63636V4.90909H1.09091V0.545455C1.09091 0.400791 1.03344 0.262053 0.931149 0.15976C0.828857 0.0574675 0.690118 0 0.545455 0C0.400791 0 0.262052 0.0574675 0.15976 0.15976C0.0574673 0.262053 0 0.400791 0 0.545455V7.63636C0 7.78103 0.0574673 7.91977 0.15976 8.02206C0.262052 8.12435 0.400791 8.18182 0.545455 8.18182C0.690118 8.18182 0.828857 8.12435 0.931149 8.02206C1.03344 7.91977 1.09091 7.78103 1.09091 7.63636V6H10.9091V7.63636C10.9091 7.78103 10.9666 7.91977 11.0689 8.02206C11.1711 8.12435 11.3099 8.18182 11.4545 8.18182C11.5992 8.18182 11.7379 8.12435 11.8402 8.02206C11.9425 7.91977 12 7.78103 12 7.63636V2.72727C12 2.29328 11.8276 1.87707 11.5207 1.57019C11.2138 1.26331 10.7976 1.09091 10.3636 1.09091ZM10.9091 4.90909H6.54545V2.18182H10.3636C10.5083 2.18182 10.647 2.23929 10.7493 2.34158C10.8516 2.44387 10.9091 2.58261 10.9091 2.72727V4.90909Z" fill="#222222"/>
                </svg>

                <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.95 6.32047C5.24315 6.32047 4.53629 6.61153 4.07892 7.15207C3.66312 7.65102 2.91469 6.98575 3.33048 6.48679C3.99576 5.73836 4.95209 5.32256 5.95 5.32256C6.94791 5.32256 7.90424 5.73836 8.56952 6.48679C8.98531 6.98575 8.23688 7.65102 7.82108 7.15207C7.36371 6.61153 6.65685 6.32047 5.95 6.32047ZM5.95 9.81316C5.40946 9.81316 4.95209 9.35579 4.95209 8.81525C4.95209 8.27472 5.40946 7.81734 5.95 7.81734C6.49053 7.81734 6.94791 8.27472 6.94791 8.81525C6.94791 9.35579 6.49053 9.81316 5.95 9.81316ZM5.95 3.8257C4.61945 3.8257 3.41364 4.28307 2.45731 5.2394C2.04151 5.6552 1.2515 5.03151 1.75046 4.53255C2.87311 3.4099 4.36997 2.82779 5.95 2.82779C7.53003 2.82779 9.02689 3.4099 10.1495 4.53255C10.6485 5.03151 9.85849 5.6552 9.44269 5.2394C8.48636 4.28307 7.28055 3.8257 5.95 3.8257ZM5.95 1.33092C4.03734 1.33092 2.24941 2.03777 0.877283 3.32674C0.378328 3.78412 -0.328526 3.07726 0.17043 2.61989C1.79204 1.12302 3.78786 0.333008 5.95 0.333008C8.11214 0.333008 10.108 1.12302 11.7296 2.61989C12.2285 3.07726 11.5217 3.78412 11.0227 3.32674C9.65059 2.03777 7.86266 1.33092 5.95 1.33092Z" fill="#222222"/>
                </svg>

                <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.75638 3.28816L1.93336 2.75725H1.63638C1.36851 2.75725 1.15154 2.54028 1.15154 2.2724C1.15154 2.00452 1.36851 1.78755 1.63638 1.78755C1.93335 1.78755 2.2565 1.78755 2.2565 1.78755C2.2565 1.78755 2.48778 1.09374 2.63105 0.664647C2.69699 0.466586 2.8822 0.333008 3.09093 0.333008C4.22232 0.333008 7.77772 0.333008 8.90911 0.333008C9.11784 0.333008 9.30305 0.466586 9.36899 0.664647L9.74354 1.78755H10.3637C10.6315 1.78755 10.8485 2.00452 10.8485 2.2724C10.8485 2.54028 10.6315 2.75725 10.3637 2.75725H10.0667L10.2437 3.28816C10.8703 3.4501 11.3334 4.01931 11.3334 4.69664V9.06028C11.3334 9.32816 11.1164 9.54513 10.8485 9.54513C10.5523 9.54513 10.1751 9.54513 9.87881 9.54513C9.61093 9.54513 9.39396 9.32816 9.39396 9.06028V8.57543H2.60608V9.06028C2.60608 9.32816 2.38911 9.54513 2.12123 9.54513C1.82499 9.54513 1.44778 9.54513 1.15154 9.54513C0.883657 9.54513 0.666687 9.32816 0.666687 9.06028C0.666687 8.1381 0.666687 6.09834 0.666687 4.69664C0.666687 4.01931 1.12972 3.4501 1.75638 3.28816ZM2.60608 5.18149C2.87396 5.18149 3.09093 5.39846 3.09093 5.66634C3.09093 5.93422 2.87396 6.15119 2.60608 6.15119C2.18305 6.15119 1.63638 6.15119 1.63638 6.15119V7.60574H3.27614C3.27614 7.60574 3.84584 6.46658 4.11178 5.93446C4.19396 5.7701 4.36172 5.66634 4.54547 5.66634C5.20826 5.66634 6.79178 5.66634 7.45457 5.66634C7.63832 5.66634 7.80608 5.7701 7.88826 5.93446C8.1542 6.46658 8.7239 7.60574 8.7239 7.60574H10.3637V6.15119H9.39396C9.12608 6.15119 8.90911 5.93422 8.90911 5.66634C8.90911 5.39846 9.12608 5.18149 9.39396 5.18149C9.81699 5.18149 10.3637 5.18149 10.3637 5.18149V4.69664C10.3637 4.42877 10.1467 4.2118 9.87881 4.2118C8.35105 4.2118 3.64899 4.2118 2.12123 4.2118C1.85335 4.2118 1.63638 4.42877 1.63638 4.69664V5.18149H2.60608ZM7.15493 6.63604H4.84511L4.36026 7.60574H7.63978L7.15493 6.63604ZM3.44051 1.3027L2.79396 3.2421H9.20608L8.55954 1.3027H3.44051Z" fill="#222222"/>
                </svg>

                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.832 8.36893L9.40798 7.55243L10.6456 7.00868C10.818 6.93293 10.8974 6.73118 10.8219 6.55818C10.7479 
                    6.39081 10.54 6.30868 10.3712 6.38243L8.67048 7.12956L6.68736 5.99231L8.66098 4.85306L10.381 5.60206C10.5556 5.67731 
                    10.7577 5.59118 10.8299 5.42456C10.9047 5.25156 10.8252 5.05006 10.6529 4.97531L9.39661 4.42831L10.8279 3.60206C10.9069 
                    3.55643 10.9634 3.48268 10.9869 3.39443C11.0104 3.30618 10.9982 3.21418 10.9525 3.13518C10.8615 2.97868 10.6435 2.91918 
                    10.4857 3.01005L9.06411 3.83068L9.21636 2.48743C9.22686 2.3963 9.20111 2.30668 9.14398 2.23493C9.08711 2.16368 9.00598 
                    2.11893 8.91611 2.10905C8.72486 2.08643 8.55736 2.22468 8.53773 2.41105L8.34461 4.25618L6.37498 5.40206V3.12668L7.86561 
                    2.01268C7.93611 1.96093 7.98223 1.88443 7.99548 1.79718C8.00923 1.70605 7.98498 1.61055 7.92923 1.53505C7.82036 1.38743 7.61236 1.35355 7.46311 1.46343L6.37498 2.27505V0.62568C6.37498 0.42443 6.17686 0.28418 5.99898 0.28418C5.82211 0.28418 5.62498 0.42443 5.62498 0.62568V2.26505L4.55336 1.4633C4.40673 1.35443 4.19298 1.38743 4.08386 1.53493C4.02673 1.61193 4.00211 1.70893 4.01598 1.8008C4.02898 1.88668 4.07448 1.9618 4.14311 2.01193L5.62498 3.11618V5.40093L3.68486 4.28018L3.47823 2.4338C3.45761 2.26155 3.31411 2.13168 3.14411 2.13168C3.13048 2.13168 3.11636 2.13243 3.10336 2.13418C2.91886 2.1553 2.78473 2.32468 2.80448 2.5133L2.96223 3.85681L1.50711 3.02218C1.45561 2.99281 1.39711 2.97718 1.33798 2.97718C1.21573 2.97718 1.10223 3.04293 1.04173 3.14893C0.948859 3.3108 1.00498 3.5198 1.16798 3.6153L2.63236 4.45506L1.37823 5.00581C1.29448 5.04256 1.23011 5.10955 1.19723 5.19443C1.16411 5.27943 1.16623 5.37231 1.20286 5.45543C1.27486 5.62143 1.47623 5.70618 1.65273 5.63193L3.36998 4.87793L5.31686 5.99418L3.36586 7.12056L1.66323 6.37893C1.49411 6.30556 1.28686 6.38793 1.21386 6.55581C1.13836 6.72818 1.21761 6.93006 1.39061 7.00606L2.62961 7.54556L1.17686 8.38431C1.01473 8.47931 0.958984 8.68868 1.05261 8.85106C1.11336 8.95631 1.22711 9.02168 1.34886 9.02168C1.40948 9.02168 1.46873 9.00556 1.51911 8.97593L2.98161 8.13156L2.82648 9.49431C2.81648 9.58518 2.84236 9.67443 2.89961 9.74593C2.95661 9.81706 3.03786 9.86193 3.12536 9.87143C3.13873 9.87331 3.15311 9.87368 3.16736 9.87368C3.34111 9.87368 3.48686 9.74343 3.50648 9.56968L3.70198 7.70618L5.62498 6.58781V8.85781L4.30448 9.96243C4.16348 10.0806 4.14748 10.2962 4.26773 10.4416C4.33098 10.5199 4.43111 10.5667 4.53561 10.5667C4.62998 10.5667 4.69336 10.5262 4.74073 10.4886L5.62498 9.74693V11.3734C5.62498 11.5747 5.82211 11.7149 5.99898 11.7149C6.17686 11.7149 6.37498 11.5747 6.37498 11.3734V9.73593L7.27286 10.4901C7.42236 10.6104 7.62461 10.5819 7.73923 10.4431C7.79673 10.3739 7.82711 10.2881 7.82461 10.2009C7.82198 10.1063 7.78098 10.0214 7.70973 9.96206L6.37498 8.84656V6.58243L8.33848 7.71693L8.54673 9.58068C8.56736 9.75256 8.71123 9.88218 8.88161 9.88218C8.89773 9.88218 8.90773 9.88131 8.91873 9.87968C9.00873 9.86981 9.08948 9.82506 9.14611 9.75406C9.20336 9.68231 9.22911 9.59243 9.21848 9.50106L9.05986 8.14018L10.4922 8.96156C10.5436 8.99118 10.6024 9.00681 10.6621 9.00681C10.7845 9.00681 10.898 8.94093 10.9581 8.83493C11.0512 8.67243 10.995 8.46331 10.832 8.36893Z" fill="#222222"/>
                </svg>

                <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.05095 4.17525L9.03992 6.47828M6.19117 1.50942L4.79503 0.703356C4.62981 0.607961 4.41853 0.664573 4.32313 0.829801L1.7898 5.21766C1.6944 5.38291 1.75102 5.59417 1.91625 5.68956L3.31238 6.49562C3.47761 6.59102 3.68888 6.53442 3.78428 6.36918L6.31762 1.98132C6.41301 1.81609 6.3564 1.60481 6.19117 1.50942ZM12.1746 4.96396L10.7785 4.1579C10.6132 4.0625 10.402 4.11912 10.3066 4.28435L7.77325 8.67221C7.67785 8.83745 7.73445 9.04871 7.89969 9.14411L9.29583 9.95017C9.46107 10.0456 9.67233 9.98897 9.76773 9.82372L12.3011 5.43586C12.3965 5.27063 12.3399 5.05936 12.1746 4.96396ZM0.869696 3.35679L2.25151 0.963407C2.34691 0.798179 2.55819 0.741567 2.72341 0.836961L3.62093 1.35514C3.78616 1.45054 3.84277 1.66181 3.74738 1.82704L2.36556 4.22042C2.27016 4.38567 2.05889 4.44226 1.89366 4.34687L0.996141 3.82869C0.830914 3.73329 0.774293 3.52203 0.869696 3.35679ZM11.8394 9.69012L13.2212 7.29674C13.3166 7.13151 13.26 6.92024 13.0947 6.82484L12.1972 6.30666C12.032 6.21126 11.8207 6.26788 11.7253 6.4331L10.3435 8.82648C10.2481 8.99173 10.3047 9.20298 10.4699 9.29838L11.3675 9.81656C11.5327 9.91197 11.7439 9.85536 11.8394 9.69012Z" stroke="#222222" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.33333 7.66667V10.3333M9.66667 2.33333V2.66667C9.66667 3.02029 9.80714 3.35943 10.0572 3.60948C10.3072 3.85952 10.6464 4 11 4C11.3536 4 11.6928 4.14048 11.9428 4.39052C12.1929 4.64057 12.3333 4.97971 12.3333 5.33333V5.66667M1 1L13 13M10.3333 10.3333H1.66667C1.48986 10.3333 1.32029 10.2631 1.19526 10.1381C1.07024 10.013 1 9.84348 1 9.66667V8.33333C1 8.15652 1.07024 7.98695 1.19526 7.86193C1.32029 7.7369 1.48986 7.66667 1.66667 7.66667H7.66667M10.3333 7.66667H12.3333C12.5101 7.66667 12.6797 7.7369 12.8047 7.86193C12.9298 7.98695 13 8.15652 13 8.33333V9.66667C13 9.85333 12.9233 10.022 12.8 10.1427L10.3333 7.66667Z" stroke="#222222" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.36002 9.87301L1.88669 4.99301H10.8334L6.36002 9.87301ZM6.36002 9.87301C6.36002 10.2797 6.36002 13.533 6.36002 13.533M4.73335 13.533H7.98669M3.51335 6.61967H9.20669M3.10669 2.95967L5.95335 6.61967M0.666687 4.17967L5.14002 1.33301H1.88669L0.666687 4.17967Z" stroke="#222222" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
            
              <h3>${item.name}</h3>
          
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
        
            <div class="room-list__price">
              <p class="price">$${item.price}<span>/Night</span></p>
              <p>${item.available}</p>
            </div>
    `;

    if(index < 6) {
      divRooms1.appendChild(div);
    } else if (index > 5 && index < 12) {
      divRooms2.appendChild(div);
    } else if (index > 11 && index < 18) {
      divRooms3.appendChild(div);
    } else if (index > 17 && index < 24) {
      divRooms4.appendChild(div);
    }

  });

  divRooms2.style.display = 'none';
  divRooms3.style.display = 'none';
  divRooms4.style.display = 'none';
}