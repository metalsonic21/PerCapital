<template>
<div>
    <div class="my-bg">
        <b-navbar toggleable="lg" fixed class="mx-5 navbar-mine">
            <div class="d-flex align-items-center justify-content-between">
                <b-navbar-toggle target="nav-collapse" class="navbar-toggler navbar-toggler-left" style="background-color:white"></b-navbar-toggle>

                <b-navbar-brand href="/" class="ml-5">
                    <b-img fluid src="/img/logo/Logo-Per-Capital-horizontal-original.png" width="220" height="110" class="mt-4 logo-mine"></b-img>
                </b-navbar-brand>
            </div>

            <b-collapse id="nav-collapse" is-nav>

                <b-navbar-nav class="ml-auto nav-items-mine">
                    <b-nav-item-dropdown :text="$t('navB')" class="hoverli" right>
                        <b-dropdown-item href="/about" class="dropdown-mine">{{$t('navBD1')}}</b-dropdown-item>
                        <b-dropdown-item href="/about#team" class="dropdown-mine">{{$t('navBD2')}}</b-dropdown-item>
                        <b-dropdown-item href="/about#corporate" class="dropdown-mine">{{$t('navBD3')}}</b-dropdown-item>
                        <b-dropdown-item href="/#contacto" class="dropdown-mine">{{$t('navBD4')}}</b-dropdown-item>
                        <b-dropdown-item href="/about#faq" class="dropdown-mine">FAQ</b-dropdown-item>
                    </b-nav-item-dropdown>
                    <b-nav-item-dropdown :text="$t('navF')" right>
                        <b-dropdown-item href="/mutual" class="dropdown-mine">{{$t('navFD1')}}</b-dropdown-item>
                        <b-dropdown-item href="#" class="dropdown-mine">{{$t('navFD2')}}</b-dropdown-item>
                        <b-dropdown-item href="#" class="dropdown-mine">{{$t('navFD3')}}</b-dropdown-item>
                    </b-nav-item-dropdown>
                    <b-nav-item href="/services">{{$t('navS')}}</b-nav-item>
                    <b-nav-item-dropdown :text="$t('navR')" right>
                        <b-dropdown-item href="#" class="dropdown-mine">{{$t('navRD1')}}</b-dropdown-item>
                        <b-dropdown-item href="#" class="dropdown-mine">{{$t('navRD2')}}</b-dropdown-item>
                    </b-nav-item-dropdown>
                    <b-nav-item-dropdown :text="$t('navT')" right>
                        <b-dropdown-item href="/calculators" class="dropdown-mine">{{$t('navtD1')}}</b-dropdown-item>
                        <b-dropdown-item href="/strategies" class="dropdown-mine">{{$t('navtD2')}}</b-dropdown-item>
                        <b-dropdown-item href="/#news" class="dropdown-mine">{{$t('navtD3')}}</b-dropdown-item>
                        <b-dropdown-item href="/calendar" class="dropdown-mine">{{$t('navtD4')}}</b-dropdown-item>
                    </b-nav-item-dropdown>
                    <b-nav-item @click="setLocale('es')" right> <span class="flag-icon flag-icon-es align-middle"></span> </b-nav-item>
                    <b-nav-item @click="setLocale('en')" right> <span class="flag-icon flag-icon-gb align-middle"></span> </b-nav-item>
                </b-navbar-nav>
            </b-collapse>

        </b-navbar>
        <br>
    </div>
</div>
</template>

<script>
export default {
    methods:{
        setLocale(locale){
            this.$i18n.locale = locale;
        }
    }
}
</script>

<style>

</style>
