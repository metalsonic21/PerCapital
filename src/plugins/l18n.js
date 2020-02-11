import Vue from 'vue'
import Vuel18n from 'vue-i18n'

Vue.use(Vuel18n)

export const i18n = new Vuel18n({
    locale: 'es',
    fallbackLocale: 'en',
    messages:{
        es:{
            navB: 'EMPRESA',
            navBD1: '¿Por qué PER CAPITAL?',
            navBD2: 'Equipo',
            navBD3: 'Gobierno Corporativo',
            navBD4: 'Contacto',

            navF: 'FONDOS',
            navFD1: 'Fondo Mutual',
            navFD2: 'Fondo Inmobiliario',
            navFD3: 'Capital de riesgo',

            navS: 'SERVICIOS',
            navR: 'REPORTES',
            navRD1: 'Trimestral',
            navRD2: 'Anual',

            navT: 'HERRAMIENTAS',
            navtD1: 'Calculadoras',
            navtD2: 'Estrategias',
            navtD3: 'Noticias',
            navtD4: 'Calendario bancario',
        },
        en:{
            navB: 'ABOUT US',
            navBD1: 'Why PER CAPITAL?',
            navBD2: 'Team',
            navBD3: 'Corporate Governance',
            navBD4: 'Contact',

            navF: 'FUNDS',
            navFD1: 'Mutual Fund',
            navFD2: 'Real State Fund',
            navFD3: 'Venture Capital',

            navS: 'SERVICES',
            navR: 'REPORTS',
            navRD1: 'Quarterly',
            navRD2: 'Annual',

            navT: 'TOOLS',
            navtD1: 'Calculators',
            navtD2: 'Strategies',
            navtD3: 'News',
            navtD4: 'Calendar',
        },

    }
})