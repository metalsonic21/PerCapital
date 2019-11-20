<template>
<div>
    <div class="swiper-container">
        <div class="mytest">
        </div>
        <div class="swiper-wrapper" data-swiper-autoplay="3000">

            <div class="swiper-slide" style="background-image:url(img/content/landing/slide-1.jpg)"> <br>
                <slide-content></slide-content>

            </div>

            <div class="swiper-slide" style="background-image:url(img/content/landing/slide-3.jpg)"> <br>
                <slide-content></slide-content>

            </div>

        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
</template>

<script>
export default {}
</script>

<style>
.mytest {
    position: absolute;
    left: 130px;
    top: 70px;
    z-index: 2;
}

.bg-secondary {
    background-color: rgba(108, 117, 125, 0.6) !important;
}

.card {
    width: 400px;
    background-color: rgba(133, 157, 169, 0.6) !important;
}

.card-header-mine {
    height: 50px !important;
}

@media (max-width: 767px) {
    .card-title-mine {
        color: white !important;
        margin-top: 0px;
        margin-left: 100px;
        font-family: Gotham;
        font-size: 14px;
    }

    .list-group-item-card {
        margin-left: 100px;
    }

    .btn-text {
        margin-left: 100px;
    }
}

@media (min-width: 768px) {
    .card-title-mine {
        color: white !important;
        margin-top: -50px;
        font-family: Gotham;
        font-size: 14px;
    }
}

.list-group-item-card {
    font-size: 16px;
    color: white;
}

.card-body {
    margin-bottom: -4px !important;
}

.btn-per {
    color: #fff;
    background-color: #859da9;
    border-color: #859da9;
}

.btn-per:hover,
.btn-per:focus,
.btn-per.focus {
    background-color: rgb(108, 117, 125);
    border-color: #859da9;
    color: #FFFFFF;
}

.btn-per:not(:disabled):not(.disabled):active,
.btn-per:not(:disabled):not(.disabled).active,
.show>.btn-per.dropdown-toggle {
    color: #fff;
    background-color: #859da9;
    border-color: #859da9;
}

.btn-text {
    font-size: 18px;
    color: white;
}
</style>
