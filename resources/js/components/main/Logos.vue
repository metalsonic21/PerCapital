<template>
    <div>
        
    <div class="container">
        <div class="row row-logos">
            <div class="column col-sm-3">
                <a href="http://www.bcv.org.ve"><img class="logof-mine" src="/img/content/landing/bcv.png" alt="BCV"></a>
            </div>
            <div class="column col-sm-3">
                <a href="http://www.bolsadecaracas.com/esp/indexF.jsp"><img class="logof-mine" src="/img/content/landing/bdv.png" alt="BDV"></a>
            </div>
            <div class="column col-sm-3">
                <a href="http://www.sunaval.gob.ve"><img class="logof-mine" src="/img/content/landing/sunaval.png" alt="Sunaval"></a>
            </div>
            <div class="column col-sm-3">
                <a href="https://www.cajavenezolana.com/cvv/indexs.asp"><img class="logof-mine" src="/img/content/landing/cvv.png" alt="CVV"></a>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
export default {
    
}
</script>

<style>
    
/* Three image containers (use 25% for four, and 50% for two, etc) */
.column {
    float: left;
    width: 25%;
    padding: -100px;
}

/* Clear floats after image containers */
.row::after {
    content: "";
    clear: both;
    display: table;
}

@media (max-width:797px) {
    .logof-mine{
        width:120px;
        height:60px;
    }
}

@media (min-width:798px) {
.logof-mine{
    width:120px;
    height:120px;
}    
}

</style>