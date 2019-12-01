<template>
<div class="landing-page">

    <div id="caracteristicas">
        <div class="block-section">
            <div class="container">
                <div class="center-holder main-heading">
                    <h3 class="title-mine section-title-per">FINALLY YOU CAN START</h3>
                    <p class="text-center">PER CAPITAL offers easy access to Premium investment opportunities
                    <br>in the Venezuelan Capital, Real Estate and Venture Capital markets, previously evaluated and<br>approved by our experts, for private, corporate and institutional investors.</p>
                </div>
                <div class="container-fluid feature-cards">
                    <div class="mt-70">
                        <div class="row">

                            <div class="col-md-3">
                                <article class="hover-shadow article-block article-landing"><i class="fa fa-check" aria-hidden=true></i>
                                    <h4>TRANSPARENCY</h4>
                                    <p>We are a regulated company and we meet the highest compliance and management standards to ensure peace of mind for our customers. <br> <br> <br> </p>

                                </article>
                            </div>
                            <div class="col-md-3">
                                <article class="hover-shadow article-block article-landing"><i class="fa fa-compass" aria-hidden=true></i>
                                    <h4>RIGUROUS ANALYSIS</h4>
                                    <p>Our team investigates and analyzes for you, even the smallest detail of each investment project we offer. <br> <br> <br> <br> </p>
                                </article>
                            </div>
                            <div class="col-md-3">
                                <article class="hover-shadow article-block article-landing"><i class="fa fa-bank" aria-hidden=true></i>
                                    <h4>SMART FINANCE</h4>
                                    <p>We study in depth the projects and markets seeking financial solvency, reputation and excellence in business management with the objective of generating value.</p>
                                </article>
                            </div>
                            <div class="col-md-3">
                                <article class="hover-shadow article-block article-landing"><i class="fa fa-money" aria-hidden=true></i>
                                    <h4>INVESTOR COMMUNITY</h4>
                                    <p>We build a community of institutional and non-institutional investors that offers a financing alternative. <br> <br> </p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <numbers-en></numbers-en>
    <div class="calculator-home">
    <roi-en></roi-en>
    <saving-en></saving-en>
    </div>
    <br>
</div>
</template>

<script>
export default {

}
</script>

<style>
.myullandingp li {
    color: #ffffff;
}

.calculator-home{
    margin-bottom: 50px;
}

/*INDICATORS*/

.list-group-mine .list-group-item {
    background-color: transparent;
    border-top-color: transparent;
    border-bottom: 1px solid #859da9;
    border-left-color: transparent;
    border-right-color: transparent;
}

.list-group-mine .list-group-item:hover {
    background-color: #859da9;
}

.fa-lock {
    color: black;
}

.fa-money {
    color: black;
}

.fa-bar-chart {
    color: black;
}

.grey-section-mine{
    margin-top: -175px;
}

.features-mine{
    margin-top: -5%;
}

.row-team{
    margin-top: -3%;
}

.comments-mine{
    margin-top: -3%;
}

.row-team{
    margin-bottom: -3%;
}

.article-landing{
    height:450px;
}

.h4-mine {
    font-size: 80%;
}

.h5-mine {
    font-size: 80%;
    color: black;
}

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

.feature-cards{
    margin-top: -7%;
    height:550px;
}
</style>
