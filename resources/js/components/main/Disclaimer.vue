<template>
<div>
    <b-modal ref="disc" title="INFORMACIÓN IMPORTANTE" ok-only 
    ok-variant="light" size="lg" body-bg-variant="dark"
    header-bg-variant="dark" header-text-variant="light"
    body-text-variant="light" footer-bg-variant="dark"
    footer-text-variant="light" title-class="text-light">
        <div class="text-justify modal-text">
        <p>Por favor lea cuidadosamente esta información antes de entrar a la página web. Contiene información legal y regulatoria relevante en cuanto a la información contenida en esta página web.</p>
        <p>PER CAPITAL sociedad Administradora de E.I.C. y los Fondos que ofrece son regulados y han sido autorizados por la SUNAVAL. Los prospectos, información clave, contabilidad y reportes periódicos, así como otros documentos de la sociedad y los fondos que administra pueden ser obtenidos en las oficinas del distribuidor.</p>
        <p>Si usted es un inversionista Privado (No Institucional) no debe tomar la información contenida en este sitio web como una recomendación o sugerencia que afecte su decisión de inversión. Nada en este sitio web debe ser tomado como una asesoría o consejo financiero.</p>
        <p>Cada inversionista debe informarse del prospecto, estados financieros y política de inversión antes de invertir.</p>
        <p>El contenido de este sitio web ha sido preparado por PER CAPITAL basándose en los resultados del análisis de información cuidadosamente levantada, con la opinión de que es confiable para el momento que fue publicada. Las opiniones y visiones presentadas son de PER CAPITAL y pueden cambiar.</p>
        <p>PER CAPITAL hace uso de las técnicas más adecuadas para asegurar que la información presentada es precisa. Sin embargo, pueden ocurrir errores u omisiones fuera de nuestro control.</p>
        <p>Bajo ninguna circunstancia se permite la copia o distribución de la información aquí presentada.</p>
        <p><b>Asesoría:</b>
        Nada en este sitio web debe ser considerado como asesoría financiera personal.</p>
        <p><b>Desempeño:</b>
        El desempeño histórico no determina el desempeño a futuro.</p>
        <p><b>Fluctuaciones:</b>
        El valor de los activos pertenecientes a los fondos puede subir o bajar ocasionando fluctuaciones en el valor de la unidad de inversión.</p>
        <p><b>Riesgos:</b> 
        Existen riesgos asociados a las inversiones y la perdida de capital es posible.
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
        console.log('Modal mounted.');
        this.showModal();
    }
}
</script>

<style>
    .modal-text{
        font-size:12px;
    }
</style>
