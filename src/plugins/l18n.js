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

            /* Finally you can start */
            start: 'FINALMENTE PUEDES EMPEZAR',
            startdesc: 'PER CAPITAL ofrece fácil acceso a oportunidades de inversión Premium en el mercado de Capitales, Inmobiliario y de Capital de Riesgo, previamente evaluadas y aprobadas por nuestros expertos, para inversionistas institucionales y público en general.',
            strans: 'TRANSPARENCIA',
            stransd: 'Somos una empresa regulada y cumplimos con los mayores estándares de cumplimiento para garantizar la tranquilidad a nuestros clientes.',
            sanali:'ANÁLISIS RIGUROSO',
            sanalid: 'Nuestro equipo investiga y analiza para ti, hasta el más mínimo detalle de cada proyecto de inversión que ofrecemos.',
            sfinance: 'FINANZAS INTELIGENTES',
            sfinanced: 'Estudiamos a fondo los proyectos y mercados buscando solvencia financiera, reputacional y excelencia en gestión empresarial con el objetivo de generar valor. ',
            scomunidad: 'COMUNIDAD INVERSIONISTA',
            scomunidadd: 'Construimos una comunidad de inversionistas institucionales y no institucionales que ofrece una alternativa de financiamiento.',
        
            /* Numbers */
            numbers: 'LOS NÚMEROS CUENTAN',
            indicators: 'Indicadores',
            pib: 'PIB (%)',
            pob: 'Población (MM)',
            ri: 'Reservas Internacionales (MM)',
            tc: 'Tasa de Cambio Bs/$',
            te: 'Tasa de Cambio Bs/€',
            co: 'Cesta OPEP',
            cv: 'Cesta Venezolana',
            sources: 'Fuentes',

            /* Calculators */
            calculators: 'CALCULADORAS',
            roi: 'Rentabilidad de inversión',
            ii: 'Inversión inicial',
            vf: 'Valor final',
            y: 'Años',
            validationY: 'El dato ingresado debe ser numérico, entero, mayor a cero',
            result: 'EL ROI de la inversión es:',
            btncalculate: 'Calcular',
            so: 'Objetivo de Ahorro',
            ia: 'Interés Anual',
            p:'Periodicidad',
            validationP: 'Seleccione periodicidad',
            resultso: 'Para conseguir el objetivo de ahorro cada mes debes invertir',

            /* News */
            news: 'NOTICIAS',

            /* Contact */
            contact: 'CONTACTO',
            location: 'UBICACIÓN',
            phone: 'TELÉFONO',
            email: 'CORREO ELECTRÓNICO',

            /* Footer */
            fservicesd1: 'Administración E.I.C',
            fservicesd2: 'Asesoría Financiera',
            fservicesd3: 'Estructuración',
            fservicesd4: 'Ingeniería financiera',
            f1: 'PER CAPITAL Sociedad Administradora de Entidades de Inversión Colectiva C.A., RIF J-41280239-9 es una empresa autorizada y regulada por la SUNAVAL',
            f2: 'PER CAPITAL Fondo Mutual de Capital Abierto C.A., es una empresa autorizada y regulada por la SUNAVAL',
            f3: 'PER CAPITAL Asesora de Inversión, RIF J-41296024-5 es una empresa autorizada y regulada por la SUNAVAL',
            f4: 'PER CAPITAL sociedad Administradora de E.I.C. C.A. y los Fondos que ofrece son regulados y han sido autorizados por la SUNAVAL. Los prospectos, información clave, contabilidad y reportes periódicos, así como otros documentos de la sociedad y los fondos que administra pueden ser obtenidos en las oficinas del distribuidor. Si usted es un inversionista Privado no',
            f5: 'debe',
            f6: 'tomar la información contenida en este sitio web como una recomendación o sugerencia que afecte su decisión de inversión. Nada en este sitio web debe ser tomado como una asesoría o consejo financiero. Cada inversionista debe informarse del prospecto, estados financieros y política de inversión antes de invertir. El contenido de este sitio web ha sido preparado basándose en los resultados del análisis de información cuidadosamente levantada, con la opinión de que es confiable para el momento que fue publicada. Las opiniones y visiones presentadas son de PER CAPITAL y pueden cambiar. PER CAPITAL hace uso de las técnicas más adecuadas para asegurar que la información presentada es precisa. Sin embargo, pueden ocurrir errores u omisiones fuera de nuestro control. Bajo ninguna circunstancia se permite la copia o distribución de la información aquí presentada. ',
            f7: 'Asesoría:',
            f8: 'Nada en este sitio web debe ser considerado como asesoría financiera personal. ',
            f9: 'Desempeño:',
            f10: 'El desempeño histórico no determina el desempeño a futuro. ',
            f11: 'Fluctuaciones:',
            f12: 'El valor de los activos pertenecientes a los fondos puede subir o bajar ocasionando fluctuaciones en el valor de la unidad de inversión. ',
            f13: 'Riesgos:',
            f14: 'Existen riesgos asociados a las inversiones y la perdida de capital es posible.',
            f15: 'No debe suponerse ni debe asegurarse que las operaciones recomendadas producirán efectivamente los beneficios actualmente estimados, ni que los respectivos valores tendrán en el futuro un comportamiento similar a aquel que fundamento la presente recomendación',
            f16: 'Normas Relativas a la Autorización y Registro de los Corredores Públicos de Valores y Asesores de Inversión. Sección V, Articulo 28.',
            f17: 'Existen riesgos asociados con las inversiones, la pérdida del principal del capital es posible. Algunas restricciones aplican. ',
        
            /* Why */
            why: '¿POR QUÉ PER CAPITAL?',
            whydesc: 'Somos un equipo de trabajo de comprobada experiencia en inversiones y desarrollo de negocios en la búsqueda de hacer crecer el patrimonio mediante la creación de valor. ',
            w1: 'ESCOGE ENTRE INVERSIONES DISEÑADAS PARA FÁCIL SALIDA',
            w1d: 'Desde los Fondos Mutuales hasta Fondos Inmobiliarios, nuestro equipo de expertos revisa a profundidad cada detalle y hace la debida diligencia para su presentación al público.',
            w1d1: 'Nuestro objetivo es lograr dar facilidades de entrada y salida de las inversiones a nuestros clientes. ',
            w2: 'SUPERVISIÓN, CONTROL Y TRANSPARENCIA FINANCIERA',
            w2d: 'Mantenemos evaluación continua de los activos representados en la cartera de inversiones, para asegurar que estén apegadas al plan de negocio.',
            w2d1: 'Los fondos mutuales son monitoreados diariamente para tomar las decisiones que mitiguen riesgos y rentabilicen el capital. Reportes periódicos son emitidos para mantener informados a nuestros clientes. ',
            w3: 'EXPERIENCIA Y CONOCIMIENTO',
            w3d1: 'Nuestro equipo tiene una amplia y exitosa experiencia en las inversiones.',
            w3d2: 'Desarrollamos estrategias de cobertura de riesgo para protegernos de crisis financieras, políticas y naturales.',
            w3d3: 'Sabemos dónde invertir, como maximizar ganancias y minimizar los riesgos, evitando las disminuciones abruptas de capital. ',
        
        
            /* Team */
            teamdesc: 'Nuestra experiencia colectiva de más de 40 años, así como el amplio conocimiento en finanzas, mercados, ingeniería financiera y desarrollo de negocios, te da una ventaja a la hora de elegir la inversión más idónea para ti con el fin de maximizar el potencial de tu capital controlando y minimizando los riesgos asociados. ',
            gg: 'GERENTE GENERAL',
            ggd: 'Administrador Mención Banca y Finanzas y Asesor de Inversión autorizado con más de 17 años de experiencia en finanzas, ingeniería financiera, desarrollo de negocios y estructuración en mercado local e internacional.',
            f: 'FINANZAS ',
            fd: 'Administrador y Asesor de Inversión autorizado con más de 17 años de experiencia en banca y finanzas, mercado de capitales, trading, manejo de portafolio y cobertura de riesgo.',
            ac: 'ADMINISTRACIÓN Y CONTROL ',
            acd: 'C.P.C. y Asesor de Inversión autorizado con más de 15 años de experiencia en auditoría contable y financiera, proyección de estados financieros, valoración de empresas y administración de activos financieros.',
            fc: 'FINANZAS CORPORATIVAS ',
            fcd: 'Economista, Corredor Publico de títulos Valores y Asesor de Inversión autorizado por la SUNAVAL con más de 30 años de experiencia en gestión de portafolio, evaluación de proyectos, estructuración de deuda y capital.',
            l: 'LEGAL',
            ld: 'Abogado con más de 20 años de experiencia en control y regulación, gestiones públicas y desarrollo de proyectos.',
            team: 'EQUIPO',

            /* Corporate */
            corporate:'GOBIERNO CORPORATIVO',
            corporatedesc: 'El marco del gobierno corporativo de PER CAPITAL es un conjunto de principios, guías y prácticas que apoyan la sustentabilidad del desempeño y la creación de valor para nuestros inversionistas en el largo plazo. Nuestro compromiso con el buen proceder, es integral para nuestro negocio y refleja no solo el apego a las regulaciones y los mejores estándares del mercado sino también, eficiencia en liderazgo de nuestra gerencia. ',
            g1: 'Guía de Gobierno Corporativo',
            g1d: 'Pautas de gobierno corporativo 2019',
            g2: 'Código de conducta y ética empresarial',
            g2d: 'Pautas de gobierno corporativo 2019',
            btndownload: 'Descargar',
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

            
            /* Finally you can start */
            start: 'FINALLY YOU CAN START',
            startdesc: 'PER CAPITAL offers easy access to Premium investment opportunities in the Venezuelan Capital, Real Estate and Venture Capital markets, previously evaluated and approved by our experts, for private, corporate and institutional investors.',
            strans: 'Transaparency',
            stransd: 'We are a regulated company and we meet the highest compliance and management standards to ensure peace of mind for our customers. ',
            sanali:'RIGUROUS ANALYSIS',
            sanalid: 'Our team investigates and analyzes for you, even the smallest detail of each investment project we offer. ',
            sfinance: 'SMART FINANCE',
            sfinanced: 'We study in depth the projects and markets seeking financial solvency, reputation and excellence in business management with the objective of generating value.',
            scomunidad: 'INVESTOR COMMUNITY',
            scomunidadd: 'We build a community of institutional and non-institutional investors that offers a financing alternative. ',
    
            /* Numbers */
            numbers: 'THE NUMBERS COUNT',
            indicators: 'Indicators',
            pib: 'GDP (%)',
            pob: 'Population (MM)',
            ri: 'International Reserves',
            tc: 'Bs/$',
            te: 'Bs/€',
            ibc: 'IBC',
            co: 'OPEC',
            cv: 'Venezuelan Basket',
            sources: 'Sources',

            /* Calculators */
            calculators: 'CALCULATORS',
            roi: "Investment's rentability",
            ii: 'Initial Investment',
            vf: 'Final Value',
            y: 'Years',
            validationY: 'Data must be numeric, integer, greater than zero',
            result: 'ROI',
            btncalculate: 'Calculate',
            so: 'Saving Goal',
            ia: 'Interest rate (%)',
            p:'Periodicity',
            validationP: 'Select an option',
            resultso: 'R:',

            /* News */
            news: 'NEWS',
        
            /* Contact */
            contact: 'CONTACT',
            location: 'LOCATION',
            phone: 'PHONE',
            email: 'E-MAIL',

            /* Footer */
            fservicesd1: 'Asset Management',
            fservicesd2: 'Financial Advisory',
            fservicesd3: 'Structuring',
            fservicesd4: 'Financial Engineering',
            f1: 'PER CAPITAL Sociedad Administradora de Entidadesde Inversión Colectiva C.A., RIF J-41280239-9 is a company regulated and authorized by SUNAVAL',
            f2: 'PER CAPITAL Fondo Mutual de Inversion de Capital Abierto C.A., RIF is a company regulated and authorized by SUNAVAL ',
            f3: 'PER CAPITAL Asesora de Inversión C.A., RIF J-41296024-5 is a company regulated and authorized by SUNAVAL',
            f4: "PER CAPITAL Asset Management and the Funds it offers are regulated and have been authorized by the SUNAVAL. Prospects, key information, accounting and periodic reports, as well as other company documents and the funds it manages can be obtained at the distributor's offices, via e mail or this website. If you are a Private Investor you",
            f5: 'should not',
            f6: 'take the information contained in this website as a recommendation or suggestion that affects your investment decision. Nothing on this website should be taken as a financial advice or advice. Each investor should be informed of the prospectus, financial statements and investment policy before investing. The content of this website has been prepared based on the results of the carefully collected information analysis, with the opinion that it is reliable for the moment it was published. The opinions and visions presented are of PER CAPITAL and may change. PER CAPITAL makes use of the most appropriate techniques to ensure that the information presented is accurate. However, errors or omissions may occur beyond our control. Under no circumstances is the copy or distribution of the information presented here allowed.',
            f7: 'Advisory:',
            f8: 'Nothing on this website should be considered personal financial advice.',
            f9: 'Performance:',
            f10: 'Historical performance does not determine future performance.',
            f11: 'Fluctuations:',
            f12: 'The value of the assets belonging to the funds may rise or fall causing fluctuations in the value of the investment unit.',
            f13: 'Risks:',
            f14: 'There are risks associated with investments and the loss of capital is possible.',
            f15: 'It should not be assumed nor should it be ensured that the recommended operations will effectively produce the benefits currently estimated, nor that the respective values will in the future behave similarly to the one that underlies this recommendation',
            f16: 'Rules Relating to the Authorization and Registration of Public Brokers of Securities and Investment Advisors. Section V, Article 28.',
            f17: 'There are risks associated with investments, the loss of principal of capital is possible. Some restrictions apply.',
            
            
            /* Why */
            why: 'WHY PER CAPITAL',
            whydesc: 'We are a team with proven investment and business development experience in the search to grow capital using value investing as strategy. ',
            w1: 'CHOOSE BETWEEN INVESTMENTS DESIGNED FOR EASY EXIT',
            w1d: 'From Mutual Funds to Real Estate Funds, our team of experts thoroughly reviews every detail and makes due diligence for presentation to the public. ',
            w1d1: 'Our goal is to provide our clients with entry and exit facilities for investments. ',
            w2: 'SUPERVISION, CONTROL AND FINANCIAL TRANSPARENCY',
            w2d: 'We maintain continuous evaluation of the assets represented in the investment portfolio, to ensure that they are attached to the business plan. ',
            w2d1: 'Mutual funds are monitored daily to make decisions that mitigate risks and capitalize on capital. Periodic reports are issued to keep our customers informed. ',
            w3: 'EXPERIENCE AND KNOWLEDGE',
            w3d1: 'Our team has extensive and successful investment experience. ',
            w3d2: 'We develop risk coverage strategies to protect us from financial, political and natural crises. ',
            w3d3: 'We know where to invest, how to maximize profits and minimize risks, avoiding abrupt capital decreases. ',

            /* Team */  
            teamdesc: 'Our collective experience of over 40 years, as well as the extensive knowledge in finance, local markets, financial engineering and business development, gives you an advantage when choosing the most suitable investment for you in order to maximize the potential of your capital controlling and minimizing the associated risks.',
            gg: 'GENERAL MANAGER',
            ggd: 'Bank and Finance Administrator and Authorized Investment Advisor with more than 17 years of experience in finance, financial engineering, business development and structuring in local and international markets.',
            f: 'FINANCES',
            fd: 'Business Administrator and Authorized Investment Advisor with more than 17 years of experience in banking and finance, capital markets, trading, portfolio management and risk coverage.',
            ac: 'ADMINISTRATION AND CONTROL ',
            acd: 'C.P.A. and Authorized Investment Advisor with more than 15 years of experience in accounting and financial auditing, projection of financial statements, valuation of companies and administration of financial assets.',
            fc: 'CORPORATE FINANCE',
            fcd: 'Economist, authorized Securities Broker and Investment Advisor with more than 30 years of experience in portfolio management, project evaluation and debt and capital structuring.',
            l: 'LEGAL',
            ld: 'Lawyer with more than 20 years of experience in control and regulation, public management and project development.',
            team: 'TEAM',

            /* Corporate */
            corporate:'CORPORATE GOVERNANCE',
            corporatedesc: 'The PER CAPITAL corporate governance framework is a set of principles, guidelines and practices that support the sustainability of performance and the creation of value for our investors in the long term. Our commitment to good behavior is integral to our business and reflects not only the adherence to regulations and the best standards of the market but also, leadership efficiency of our management.',
            g1: 'Corporate Governance Guide',
            g1d: 'Corporate Governance Guide 2019',
            g2: 'Code of Conduct and Business Ethics',
            g2d: 'Corporate Governance Guide 2019',
            btndownload: 'Download',
        },

    }
})