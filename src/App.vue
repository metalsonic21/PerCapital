<template>
<div id="app">
    <div v-if="!isLoaded" id="preloader">
        <div class="row loader">
            <img src="/img/logo/load.gif" alt="logo" width="220" height="110">
            <br><br>
        </div>
    </div>

    <Ticker></Ticker>
    <Navigation></Navigation>
    <router-view />
    <MyFooter></MyFooter>
</div>
</template>

<script>
import {
    mapState,
    mapMutations
} from "vuex";
import Ticker from '@/components/Home/Ticker.vue'
import Navigation from '@/components/Home/Navbar.vue'
import MyFooter from '@/components/Home/Footer.vue'
export default {
    data() {
        return {
            isLoaded: false,
        }
    },
    components: {
        Ticker,
        Navigation,
        MyFooter,
    },
    computed: {
        ...mapState(["slides"])
    },
    methods: {
        ...mapMutations(['modify']),

    },
    created() {
        this.$store.commit('modify', 'en');
    },
    mounted: function () {
        this.$nextTick(function () {

            setTimeout(() => {  this.isLoaded=true; }, 2000);

        })
    }

}
</script>
