<template>
<div>
    <b-modal ref="disc" title="INFORMACIÓN IMPORTANTE" ok-only ok-variant="light" size="lg" body-bg-variant="dark" header-bg-variant="dark" header-text-variant="light" body-text-variant="light" footer-bg-variant="dark" footer-text-variant="light" title-class="text-light">
        <div class="text-justify modal-text">
            <p>{{$t('dp1')}}
            <br>{{$t('dp2')}}
            <br>{{$t('dp3')}} <b>{{$t('dp4')}}</b>{{$t('dp5')}}
            <br>{{$t('dp6')}}
            <br>{{$t('dp7')}}
            <br>{{$t('dp8')}}
            <br>{{$t('dp9')}}
            <br><b>{{$t('dp10')}}</b>
            {{$t('dp11')}}
            <br><b>{{$t('dp12')}}</b>
            {{$t('dp13')}}
            <br><b>{{$t('dp14')}}</b>
            {{$t('dp15')}}
                <br><b>{{$t('dp16')}}</b>
                {{$t('dp17')}}
            </p>
        </div>
    </b-modal>
</div>
</template>

<script>
export default {
    methods: {
        showModal() {
            this.$refs['disc'].show()
        },
        hideModal() {
            this.$refs['disc'].hide()
        },
    },

    mounted() {
        if(sessionStorage.getItem('wasVisited') === null) {
            this.showModal();
            console.log('Modal mounted.');
            sessionStorage.setItem('wasVisited', '1');
        }
    }
}
</script>

<style>

</style>
