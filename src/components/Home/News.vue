<template>
<div>
    <section id="news" style="background-color:#f4f4f4;">
        <br>
        <div class="container">
            <div class="navy-line-2" style="opacity:0"></div>
            <h1 class="title-mine" style="color:#000032" align="center">{{$t('news')}}</h1>
            <div class="row">
                <b-col md="4" lg="4" sm="12">
                    <iframe src="//rss.bloople.net/?url=http%3A%2F%2Fwww.bbc.co.uk%2Fmundo%2Ftemas%2Famerica_latina%2Findex.xml&limit=5&showtitle=false&showempty=true&type=html"></iframe> 
                </b-col>

                <b-col md="4" lg="4" sm="12">
                    <iframe src="//rss.bloople.net/?url=https%3A%2F%2Fwww.economist.com%2Fthe-americas%2Frss.xml&limit=5&showtitle=false&showempty=true&type=html"></iframe>
                </b-col>

                <b-col md="4" lg="4" sm="12">
                    <iframe src="//rss.bloople.net/?url=http%3A%2F%2Fwww.latinvex.com%2Frss%2Findex&limit=5&showtitle=false&showempty=true&type=html"></iframe>
                </b-col>
            </div>
        </div>
        <br>
    </section>
</div>
</template>

<script>
export default {

}
</script>

<style>

</style>
