<?php

use Illuminate\Database\Seeder;
use App\Thesis;
use App\ThesisSpecification;

class thesisDB2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
		ThesisSpecification::create( [
		'adviser'=>'','thesis_id'=>14,
		'extension'=>'81',
		'observations'=>'Lista de Figuras',
		'accompaniment'=>'ninguno',
		'content'=>'Resumen - Summary - Introducción - 1.- Marco teórico - 2.- Metodología usada - 3.- Desarrollo del caso practico - Conclusiones y recomendaciones - Bibliografia.',
		'summary'=>'El presente trabajo tiene como objetivo mostrar la aplicación de un Sistema de Costeo Basado en Actividades en una empresa que presta servicios de manufactura de productos de tipo farmacéutico, cosmético y natural; CIFARMA S.A. para este propósito se llevo un proyecto en el consorcio QUÍMICA SUIZA con una duración de 8 meses para el estudio del caso y la implantación de esta metodología.',
		'recomendations'=>'Se debe poner especial énfasis en el llenado de horas por maquina en el área de producción pues presentar uno de los inductores de costo mas importante que definen otros inductores para los objetos lote y producto.',
		'conclusions'=>'Es necesario capacitar adecuadamente al personal que intervendrá en la implantación de un proyecto ABC  dentro de cualquier empresa, ya que esto determinara que los resultados sean de la mejor calidad posible.',
		'bibliography'=>'No presenta bibliografia',
		'mention'=>'Tesis para optar el Titulo Profesional de: Ingeniero de Sistemas',
		'keywords'=>'hkakdhkdhk',
		] );
					
		ThesisSpecification::create( [
		'adviser'=>'','thesis_id'=>15,
		'extension'=>'105',
		'observations'=>'Figuras, Cuadros',
		'accompaniment'=>'ninguno',
		'content'=>'Resumen - Summary - Indice - Introducción - 1.- Marco Teórico - 2.- Metodologías de desarrollo de Data Warehouse - 3.- La Empresa - 4.- Aplicación de la Metodología - Conclusiones - Recomendaciones - Bibliografia.',
		'summary'=>'El presente trabajo tiene como objetivo primordial, elaborar el esquema de implementacion de un Data Mart para el proceso de negocio \"Monitoreo\", de la Gerencia Técnica Normativa de CONSUCODE.',
		'recomendations'=>'Para llevar a cabo la implementacion de un datawarehousing es necesario escoger una metodología adecuada.\r\nPoner énfasis en la determinación de los requerimientos del negocio porque son el centro de una solución  datawarehousing.\r\nsi se tiene múltiples fuentes de datos, es recomendable hacer una copia inicial para realizar la transformación de datos.',
		'conclusions'=>'Los sistemas transaccionales automatizan el día a día del negocio, buscando la eficiencia. Los sistemas analíticos se centran en la estrategia a largo plazo y están dirigidos por el negocio.\r\nSe elaboro una primera versión de un Data Mart de los proceso de selección de entidades, diseñado para el área de negocio;',
		'bibliography'=>'p, 100   1 h,',
		'mention'=>'Tesis para optar el Titulo Profesional de: Ingeniero de Sistemas',
		'keywords'=>'Data Mart, Procesos de Selección, Metodología para construir un Data Warehouse, OLAP',
		] );
					
		ThesisSpecification::create( [
		'adviser'=>'','thesis_id'=>16,
		'extension'=>'106',
		'observations'=>'Cuadros, Figuras',
		'accompaniment'=>'ninguno',
		'content'=>'Resumen Ejecutivo - Resumen Ejecutivo (Ingles) - Introducción - 1.- Marco Teórico - Tecnología de Redes - Redes Privadas Virtuales - 3.- Proyecto de Implementacion de una Red Privada Virtual en Federal Express Corp. A Nivel de Sudamerica - Conclusiones - Recomendaciones - Referencias Bibliográficas.',
		'summary'=>'Una de las tendencias mas relevantes que experimentaron las organizaciones en la ultima década a sido definitivamente el proceso de globalizacion, esto hizo que muchas organizaciones traspasen sus fronteras geográficas ya sea con oficinas propio}as, con alianzas estratégicas con otras empresas o con socios como proveedores y clientes.',
		'recomendations'=>'Para el buen VNP en las compañías, se sugiere las siguientes razones.\r\n- Para ahorrar costos d telecomunicaciones reduciendo el numero de lineas de acceso en un sitio corporativo.\r\n- Para ahorrar costos de telecomunicaciones  usando una plataforma publica  IP  para llevar el trafico.',
		'conclusions'=>'Para concluir, diremos que las VPN proporcionan acceso remoto cómodo, fiable, seguro y economico, simplificando la gestión de infraestructuras y racionalizando la asunción de responsabilidades operativas.',
		'bibliography'=>'p, 106  1 h,',
		'mention'=>'Tesis para optar el Titulo Profesional de: Ingeniero de Sistemas',
		'keywords'=>'Red Privada Red Virtual',
		] );
					
		ThesisSpecification::create( [
		'adviser'=>'','thesis_id'=>17,
		'extension'=>'141',
		'observations'=>'Figuras, Tablas',
		'accompaniment'=>'2 CDS ROM',
		'content'=>'Indice de Figuras - Indice de tablas - 1.- Planeamiento metodológico - 2.- Marco Teórico - 3.- Estado del arte metodológico - 4.- Aporte teórico - 5.- Aporte practico - 6.- Conclusiones y Recomendaciones.',
		'summary'=>'Los eventos acontecidos a lo largo del tiempo en el sector salud en el Perú, han generado problemas en la calidad de la atención medica, problemas de carácter epidemiologico y la segmentación del sistema de salud nacional.\r\nEsta segmentacion ha producido la fragmentario de la información medica, lo cual dificulta su acceso, uso y actualización; problema que se ve reflejado en ; información medica redundante y desactualizada, negligencias medicas, largos y tediosos papeleos, información almacenada en registros físicos expuestos a riesgos inminentes, dificultad en la toma de decisiones, entre otros.',
		'recomendations'=>'Se recomienda implementar un componente software adicional que permita realizar búsquedas imprecisas en el sistema de integración desarrollado. esta funcionalidad debería ponerse a pruebas, utilizando fuentes de datos no estructurados, tal como paginas Web, archivos de texto plano y documentos en repositorios digitales.',
		'conclusions'=>'Se ha determinado que la mayor latencia de la solución implementada se da en el proceso de integración d datos, por lo tanto, los futuros esfuerzos para optimizar el tiempo de respuesta de la solución deben estar enfocados en agilizar dicho proceso.',
		'bibliography'=>'p, 127 -130  4, h',
		'mention'=>'Tesis para optar el Titulo Profesional de: Ingeniero de Sistemas',
		'keywords'=>'Expediente medico electrónico, Plataforma como servicio, Integración de datos, OpenEHR, Apache Hadoop.',
		] );
					
		ThesisSpecification::create( [
		'adviser'=>'','thesis_id'=>18,
		'extension'=>'71',
		'observations'=>'ninguno',
		'accompaniment'=>'Ninguno.',
		'content'=>'1.- Planeamiento estrategico de Información - 2.- Factores Críticos - 3.- Planificación de tecnologías sistemas  de Información en paralelo con la estrategia de negocio.',
		'summary'=>'Esta metodología nos muestra a los TI como medio para obtener ventajas competitivas y generar acciones genéricas para que dichas ventajas competitivas sean sostenidas.',
		'recomendations'=>'Antes de elaborar un sistema de información, se deben identificar claramente la misión y los objetivos de la empresa, con el fin que nos brinde una visión integral y estructurada de las necesidades de información y poder así establecer la prioridades dela empresa.',
		'conclusions'=>'El alineamiento estratégico realizado entre las estrategias del negocio y la tecnologia de informacion (matriz de impacto Tecnologico) viene a ser la base para el desarrollo de ventajas competitivas en la empresa, ya que nos permite por un lado estar al día sobre la evolución de las nuevas  tecnologías de la información y sus posibilidades y por otro lado activar el aprendizaje organizativo del negocio y de toda la empresa.',
		'bibliography'=>'p, 10, 11  2 h,',
		'mention'=>'Tesis para obtener el Titulo Profesional de: Ingeniero de Sistemas',
		'keywords'=>'Sistemas de Informacion - Tecnologia de la Información - Planeamiento estrategico - Alineamiento Estrategico.',
		] );
					
		ThesisSpecification::create( [
		'adviser'=>'','thesis_id'=>19,
		'extension'=>'103',
		'observations'=>'Contiene tablas.',
		'accompaniment'=>'Ninguno.',
		'content'=>'1.-Generalidades - 2.-Planteamiento del Problema - 3.-Estudio del Caso - 4.-Desarrollo del Caso -Conclusiones -Recomendaciones -Bibliografía',
		'summary'=>'El planeamiento estratégico surge como una actividad exclusiva de la alta dirección, en tanto su esencia tiene que ver con el futuro, su anticipación y su comprensión y es el proceso de determinar cuáles son principales objetivos de una organización y los criterios que presidirán la adquisición, uso y disposición de recursos en cuanto a la consecución de los referidos objetivos; éstos , en el proceso de la planificación estratégica, engloban misiones o propósitos, determinados previamente, así como los objetivos específicos buscados por la Clínica del Cabello y la Piel.',
		'recomendations'=>'La empresa debe empezar el análisis de área del negocio con el área de Administración ya que se ha efectuado un estudio sobre la base de prioridades rankeadas del 1 al 7, en donde la mencionada área ha obtenido el mayor puntaje por ser la mas importante, la mas factible para la empresa por tener información regular de esta área que se explican detalladamente en la matriz de área del negocio.',
		'conclusions'=>'Los componentes fundamentales en un proceso de planeación estratégica incluyen: definir la misión y las principales metas de la organización, escoger estrategia que alineen, o adecuen, las fortalezas y debilidades de la organización a las oportunidades y amenazas externas y adoptar estructuras y sistemas de control organizacional con el fin de implementar la estrategia adoptada por la organización.',
		'bibliography'=>'p 102,103 2h,',
		'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		'keywords'=>'Estrategia Competitiva - FODA - Fuerzas Competitivas - Metas',
		] );
					
		ThesisSpecification::create( [
		'adviser'=>'','thesis_id'=>20,
		'extension'=>'168',
		'observations'=>'Contiene  ilustraciones.',
		'accompaniment'=>'Ninguno.',
		'content'=>'1.-El Comercio Electrónico - 2.-Tecnologías de desarrollo para contenido dinámico e interactiva en WEB - 3.-Metodología a utilizar -4.-Precedencias de Constitución de Sitios Dinámicos WEB -5.-Diseño del Sistema Administrador de Tienda Virtual -Conclusiones y Recomendaciones -Diseño de pantallas -Anexos -Glosarios -Bibliografía',
		'summary'=>'El Comercio Electrónico se ha convertido en un componente prácticamente imprescindible de las estrategias de negocios actuales de las empresas, que están aprovechando las ventajas que trae consigo la tecnología para mejorar sus procesos y sus relaciones, tanto internamente como a sus socios, proveedores y clientes.',
		'recomendations'=>'Recomendamos usar el formato(estándar) que se ha extendido casi para todas las aplicaciones, este es el llamado X.509. Este formato contiene los datos del poseedor del certificado, la clave pública del propietario, y al firma de un Autoridad certificadora. La mejor propiedad del formato X.509 es que contiene el mínimo necesario de información para poder realizar muchas transacciones, principalmente comerciales y financieras.Sin embargo para otras aplicaciones puede ser un poco robusto.',
		'conclusions'=>'Para el intercambio Electrónico de Datos(EDI) existen dos componentes esenciales: Primero, los documentos electrónicos reemplazan a los documentos en papel. Segundo, el intercambio de documentos se realiza en un formato estandarizado. Usando estos dos conceptos, cualquier empresa puede entrar al mundo EDI y empezar a tomar ventaja de la rapidez y economía del comercio electrónico.',
		'bibliography'=>'p 166,167,168  3h,',
		'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		'keywords'=>'Comercio Electrónico - Tienda Virtual -  Tecnología de Desarrollo Dinámico e Interactivo Web  - Sistema Administrador',
		] );
					
		ThesisSpecification::create( [
		'adviser'=>'','thesis_id'=>21,
		'extension'=>'193',
		'observations'=>'Contiene ilustraciones y tablas.',
		'accompaniment'=>'Ninguno.',
		'content'=>'1.-Introducción -2.-Fundamentos del Puerto Paralelo -3.-Fundamentos del Temporizador 555 -4.-Fundamentos del Motor paso a paso -5.-Construcción del circuito de excitación del Motor paso a paso -6.-Fundamentos de Memoria -7.-Modelo Conceptual  del Sistema Industrial de Empaque -8.-Modelo Conceptual de Objetos del Sistema Industrial de Empaque -9.-Modelo Conceptual de Procesos del Sistema Industrial de Empaque -10.-Modelo Conceptual del Dispositivo de Control del Sistema Industrial de Empaque -11.-Dispositivos de Control del Sistema Industrial de Empaque -12.-Funcionamiento de los Dispositivos de Control del Sistema Industrial de Empaque -Conclusiones -Bibliografía',
		'summary'=>'Consiste en el análisis y diseño para la construcción de un sistema industrial de empaque de objetos, con la finalidad de permitir que los diferentes procesos de empaque de objetos que se realizan principalmente de forma manual en los pequeños negocios se puedan realizar de manera automatizada con la respectiva administración, supervisión y control de parte del computador y la valiosa supervisión y gestión del ser humano. El sistema esta estructurado en base  a los elementos fundamentales: el sistema de alimentación de objetos, el sistema de transporte de envases y el sistema que cumple el papel fundamental de administrarlos.',
		'recomendations'=>'Con el uso de la computadora se puede lograr automatizar la gestión, administración y control de sistemas de control industrial de producción, permitiendo así hacer más ágil, rápido y óptimo la producción.',
		'conclusions'=>'Los procedimientos manuales que se utilizan en los procesos de producción que realizan las pequeñas industrias y/o negocios pueden ser automatizados en base a un buen análisis y diseño del conjunto de actividades que intervienen en la producción.',
		'bibliography'=>'p 193,  1h,',
		'mention'=>'Tesis para obtener el Titulo Profesional de :  Licenciado en Computación',
		'keywords'=>'Ordenador - Sistema de Alimentación de Objetos - Sistema de Transporte de Envases - Dispositivo de Interface',
		] );
					
		ThesisSpecification::create( [
		'adviser'=>'','thesis_id'=>22,
		'extension'=>'97',
		'observations'=>'Contiene  ilustraciones.',
		'accompaniment'=>'Ninguno.',
		'content'=>'Introducción -Investigación de Mercado y Sistemas de Información -Introducción al concepto DATAWAREHOUSING -Metodología de Desarrollo(Caso práctico) -Descripción del Producto -Conclusiones -Recomendaciones -Referencias Bibliográficas',
		'summary'=>'El presente trabajo tiene como propósito fundamental, efectuar un estudio detallado del papel de los sistemas estratégicos en las empresas en al actualidad, principalmente.\r\nSe describen en este trabajo detalles acerca de la importancia de los sistemas estratégicos en las organizaciones actuales, haciéndose hincapié en aquellas que se concentran en el conocimiento y análisis del mercado objetivo.',
		'recomendations'=>'Es recomendable para una mayor comprensión del presente trabajo tener muy claro los conceptos relacionados a las Bases de Datos, su diseño y utilización; ya que es un tema sobre el cual se basa una gran parte del caso práctico propuesto.',
		'conclusions'=>'Los sistemas estratégicos actúan como generadores de ventajas competitivas para las empresas; es por esta razón, que las TI actualmente se han constituido en las herramientas usualmente más usadas para la innovación y el cambio del que hemos hablado. Asimismo, dada la importancia de la estructura informática dentro de las empresas, se ha notado por parte de éstas, una preocupación cada vez más creciente, por desarrollar sistemas más estables, con menos riesgos y sobre todo de mayor productividad.',
		'bibliography'=>'p 96,  1h,',
		'mention'=>'Tesis para obtener el Titulo Profesional de : Licenciado en Ingenieria de Sistemas',
		'keywords'=>'Sistemas Estratégicos - Calificación de Clientes - Características del Producto',
		] );
					
		ThesisSpecification::create( [
		'adviser'=>'','thesis_id'=>23,
		'extension'=>'75',
		'observations'=>'Contiene ilustraciones y tablas.',
		'accompaniment'=>'Ninguno.',
		'content'=>'Introducción -1.-Conceptos Básicos y Marco Teórico -2.-Metodología o Técnicas a utilizar-contribución  -3.-Sinopsis de la Empresa, Objetivos y Necesidades -4.-Desarrollo del Caso -Conclusiones -Recomendaciones -Glosario -Bibliografía',
		'summary'=>'En el Perú el sector de Agencias Turísticas Medianas generalmente ha usado con éxito sistemas operacionales para el funcionamiento de la organización en el día a día. El trabajo presente muestra como la implementación de la tecnología datamart para atención al cliente se puede generar una ventaja competitiva para la organización. Se demuestra la factibilidad de usar esta tecnología en empresas relativamente pequeñas en el Perú y también la gran ayuda que representa la aplicación de la tecnología de Inteligencia de Negocios en el sector turístico peruano. Además se muestra qué metodología usar para llevar a cabo con éxito un proyecto de implementación de un datamart.',
		'recomendations'=>'Se deben tener objetivos inmediatos y tan claros como sea posible, esto se logra involucrando a los usuarios y tratando de entender realmente sus necesidades de información, propiciando un diálogo abierto en el que se pueda descubrir las mejor manera de poner a su disposición lo que necesitan contrastandolo con lo que es posible ofrecer: lo que existe en la bases de datos operacionales o en otros medios que pueda ser cargado en el datamart.',
		'conclusions'=>'Se determinó que es mejor empezar a implementar un datamart que tenga un ROI rápido en un primer momento, sobre todo en una empresa que no ha tenido contacto con esta tecnología, considerando las necesidades más inmediatas para la toma de decisiones y luego, mediante un proceso iterativo, ir agregando las demás.',
		'bibliography'=>'p 74,75  2h,',
		'mention'=>'Tesis para obtener el Título Profesional de : Ingeniero de Sistemas',
		'keywords'=>'DataMart - DataWarehouse - PYME - Servicio al Cliente',
		] );
					
		ThesisSpecification::create( [
		'adviser'=>'','thesis_id'=>24,
		'extension'=>'126',
		'observations'=>'Contiene  ilustraciones.',
		'accompaniment'=>'Ninguno.',
		'content'=>'1.-Conceptos básicos de conceptos de Transporte Público -2.-Metodología para el Diseño de Sistemas de Información -3.-Desarrollo del Caso -Conclusiones -Recomendaciones -Glosario -Anexos -Bibliografía',
		'summary'=>'El presente trabajo tiene como propósito fundamental, dar una solución informática al problema de gestión de la información de la Dirección de Transporte urbano de la Municipalidad Metropolitano de Lima. Para ello se ha realizado un diagnóstico de la situación de los actuales sistemas informáticos que la organización maneja, Así como cuáles son los requerimientos para un sistema informático moderno y escalable necesario para la dirección de transporte de Municipal de Lima Metropolitana, como paso inicial para poder dar solución al grave problema del transporte en nuestra ciudad.',
		'recomendations'=>'Contar con un sistema que logre hacer las validaciones de datos con las entidades extremas dueñas de estas ( validaciones en línea) agilizará enormemente los procesos manuales que conllevan a un gran margen de error e interpretación.',
		'conclusions'=>'Es de extrema necesidad para la Dirección de Transporte de la Municipalidad de Lima Metropolitana contar con una solución informática como la planteada para la gestión de su información para que le permita agilizar en la solución de los actuales problemas del transporte en nuestra sociedad ya que contará con información gerencial para la toma de decisiones.',
		'bibliography'=>'p 126,  1h,',
		'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		'keywords'=>'SIG - Dirección de Transporte Urbano - Esquema de Desarrollo de Prototipeo - Sistema de colaboración en línea',
		] );
					
		ThesisSpecification::create( [
		'adviser'=>'','thesis_id'=>25,
		'extension'=>'125',
		'observations'=>'Contiene ilustraciones y tablas.',
		'accompaniment'=>'Ninguno.',
		'content'=>'1.-Conceptos Básicos y Marco Teórico -2.-Metodologías y técnicas a utilizar -3.-Desarrollo del Caso -4.-Aspectos técnicos del caso -Conclusiones -Recomendaciones -Glosario -Anexos -Bibiografía',
		'summary'=>'El trabajo elaborado tiene como propósito mostrar a través de una aplicación práctica las posibilidades que brinda la tecnología WAP(Wireless Application Protocol) en diversos campos de aplicación, para ello se tomó como base un problema específico de una empresa de estado, INFES ( Instituto Nacional de Infraestructura Educativa y de Salud), el Reporte de Avance de Obras desde zonas distantes a las oficinas zonales de este organismo, principalmente en zonas rurales o alejadas de las capitales de provincia. La solución contemplada abarca desde el análisis , hasta el desarrollo de la aplicación.',
		'recomendations'=>'En la medida de lo posible se recomienda buscar la modularidad de la solución planteada, lo cual permite presentar previos a la solución final, los cuales pueden entrar a evaluación para que reciban el visto bueno de las personas encargadas en la organización, lo que conllevará a una compresión de los requerimientos y a aprobaciones previas de la funcionalidad con lo que de alguna forma se puede recibir un apoyo mas notorio y tal vez una mayor motivación y compromiso por parte de los usuarios para continuar con la implementación de la solución, o para próximos proyecto.',
		'conclusions'=>'La tecnología WAP, hasta el momento no ha llegado a cumplir con las expectativas que se tenía sobre ella, es más se podría decir que el WAP Forum ha fracasado en su intento de llevar la Web ( tal y como la vemos en los browsers) a los dispositivos móviles.Sin embargo se aguardan esperanzas con la llegada de los teléfonos celulares de 3ra generación y la expansión de UMTS como tecnología de transmisión de datos.',
		'bibliography'=>'p 123,124,125,  3h,',
		'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		'keywords'=>'WAP - INFES - Wireless - Reporte de Avance de Obras',
		] );

		ThesisSpecification::create( [
		'adviser'=>'','thesis_id'=>26,
		'extension'=>'124',
		'observations'=>'Contiene  ilustraciones.',
		'accompaniment'=>'Ninguno.',
		'content'=>'1.-Teoría de Sistemas Expertos -2.-Técnicas Aplicadas a Sistemas Expertos -3.-Diagnóstico de Fallas en Equipos de Cómputo \"SEDFEC\" -4.-Un Sistema Experto para el Diagnóstico de Fallas en Equipos de Computo -5.-Pruebas realizadas al Sistema -6.-Conclusiones y Recomendaciones -Bibliografía -Anexos',
		'summary'=>'El objetivo general de la realización de esta Tesis es la del estudio y aplicación del Tema de Sistemas Expertos del Área de la Inteligencia Artificial que, aunque en la actualidad este campo dispone de una amplia bibliografía, no se realizan muchas aplicaciones en el País, siendo un tema muy interesante el desarrollar estos aplicativos debido a la gran ayuda que pueden brindar, además de que se pueden aplicar en distinto campos que veremos más adelante.',
		'recomendations'=>'El sistema tiene que ser alimentado periódicamente a fin de adquirir conocimiento vigente,pues sobre la temática que trabaja, esta cambia muy rápidamente y un retardo en la alimentación de su base de conocimiento haría que el sistema se desface de la realidad tecnológica de los equipos de computo.',
		'conclusions'=>'La aplicación sobre la Red Internet permite que el conocimiento de SEDFEC pueda llegar a más usuarios, esto si bien no es lo mismo que la presencia de un experto de alguna manera ayuda a aquellos usuarios que necesitan alguna idea de cómo resolver el problema que presentan sus equipos y poder así intentar resolverlos ellos mientras un experto llegue para ayudarlos con la solución de la falla de su equipo.',
		'bibliography'=>'p 120,121,122,123,124,  5h,',
		'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		'keywords'=>'Sistemas Expertos',
		] );

		
					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>33,
		// 'type'=>1,
		// 'clasification'=>'TESIS 041 FISI',
		// 'title'=>'Sistema de Información para la Obtención de una dieta balanceada para el Sector Publico',
		// 'year'=>'2003',
		// 'school_id'=>1,
		// 'extension'=>'87',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Marco Teórico -2.-Desarrollo de la Metodología -3.-Estudio del Caso -Conclusiones -Recomendaciones -Bibliografía',
		// 'summary'=>'Para vivir y mantener nuestro estado de salud y bienestar , el organismo debe conseguir unas determinadas cantidades energéticas para su funcionamiento vital básico y el desarrollo de las labores diarias. El Sistema de Información de Dietas ha sido implementado para la planificación de dietas, menús y administración de alimentos , siguiendo las normas más actuales y de acuerdo a las recomendaciones de personas expertas en nutrición. \r\nEl Sistema de Información de Dietas es una herramienta de trabajo eficiente la cual brinda información oportuna en la toma de decisiones para una mejor administración de los recursos.',
		// 'recomendations'=>'Las Entidades Públicas que implementen este Sistema de Información de Dietas Balanceadas deben brindar capacitación a sus Expertos en Nutrición, con el fin de garantizar su uso. Esta capacitación no sólo debe abarcar el uso del sistema sino también todo el entorno en el cual funciona, contribuyendo así incrementar los conocimientos tecnológicos de su personal.',
		// 'conclusions'=>'En la compleja sociedad actual el conocimiento de sistemas de información es vital para el individuo, especialmente para los profesionales. Para la mayoría de organizaciones el factor determinante para lograr mayor competitividad es el procesamiento y análisis de información.',
		// 'bibliography'=>'p 85,86,87,  3h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Sistema de Información - Planificación de Dietas - Micronutrientes - Calorías',
		// 'stand_id'=>79,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-21 03:58:39',
		// 'updated_at'=>'2018-04-21 03:58:39',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>34,
		// 'type'=>1,
		// 'clasification'=>'TESIS 042 FISI',
		// 'title'=>'Implementación de Sistema de Gestión Presupuestaria para Entidades Públicas basado en Metodología UML',
		// 'year'=>'2003',
		// 'school_id'=>1,
		// 'extension'=>'128',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Marco Teórico -2.-Marco Legal -3.-Desarrollo de Metodología UML -4.-Aplicación de Metodología UML -5.-Conclusiones y Recomendaciones -Glosario  -Anexos -Bibliografía',
		// 'summary'=>'La Gestión Presupuestaria es el procedimiento que logra una expresión cuantitativa de los objetivos gerenciales y un medio para controlar el progreso hacia el logro de tales objetivos.\r\nEn este estudio, se realiza una mayor descripción en la Fase del Análisis de la Implementación de un Sistema de la Gestión Presupuestaria en una institución estatal, siguiendo los procedimientos legales establecidos. La implementación de este sistema será la herramienta, independiente de la estructura organizacional y de giro del negocio de la institución, que permitirá el seguimiento y control del desarrollo de la ejecución presupuestaria, en cualquier momento y cualquier situación que exija la necesidad de información para una adecuada y oportuna toma de decisiones.',
		// 'recomendations'=>'La utilización de implementación de la metodología UML tiene mucho potencial que aportar a los proyectos de sistemas, si se tienen las habilidades apropiadas, además que proporciona las plantillas para la documentación en cada fase de la implementación del Sistema. Asimismo, exige un considerable nivel de análisis para obtener un producto que cubra los requerimientos y expectativas institucionales.',
		// 'conclusions'=>'La administración de los recursos, requiere de maneras más eficientes para cumplir sus compromisos, mediante el uso eficiente de las tecnologías de información y los sistemas de información, reduciendo de manera considerable el alto costo del tiempo y dinero de la administración pública, que será un paso importante en la evolución de un país.',
		// 'bibliography'=>'p 127,128,  2h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Entidad Pública - Presupuestos - Eficiencia - Integración',
		// 'stand_id'=>79,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-21 04:17:54',
		// 'updated_at'=>'2018-04-21 04:17:54',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>35,
		// 'type'=>1,
		// 'clasification'=>'TESIS 054 FISI',
		// 'title'=>'Análisis y Diseño de un Sistema de Control de Producción para Compañías Manufactureras Textiles',
		// 'year'=>'2003',
		// 'school_id'=>1,
		// 'extension'=>'117',
		
		// 'observations'=>'Contiene  ilustraciones.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Estado del Arte -2.-Marco Teórico -3.-Adaptación del Método Seleccionado -4.-Contribución Práctica -Conclusiones -Bibliografía -Anexos',
		// 'summary'=>'El presente trabajo tiene como propósito fundamental, efectuar el análisis y diseño de un Sistema de Control de Producción para Compañías Manufactureras Textiles, enfocada a empresas con uso intensivo de mano de obra, adaptando el Modelo Modular de Trabajo en Equipo.\r\nPara ello se describe previamente aspectos teóricos de lo que es un Sistema de Producción Textil, sobre la Teoría Modular y la Metodología empleada en el desarrollo de dicho sistema, haciendo comparación con otras metodologías existentes.',
		// 'recomendations'=>'Internet y las Nuevas Tecnologías presentan a las empresas herramientas que posibilitan nuevas formas de realizar negocios así como de reorientar su estrategia. El sistema propuesto presenta la oportunidad de integrar la cadena de valor como un todo, de forma que valga más que la suma de sus partes.',
		// 'conclusions'=>'El proceso Unificado de Desarrollo de Software es muy completo y abarca la mayoría de aspectos implicados en el desarrollo de software de calidad. Si bien para proyectos de duración corta de tiempo resulta excesivo en documentación, esta Metodología nos ha permitido el Análisis y Diseño del Sistema de Control de Producción válida para la mayoría de empresas del ramo textil confecciones.',
		// 'bibliography'=>'p 68,69,  2h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Sistema de Control de Producción Textil - Modelo Modular de Trabajo en Equipo - Proceso Unificado Rational(RUP) - Lenguaje para Modelamiento Unificado(UML)',
		// 'stand_id'=>79,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-21 04:56:47',
		// 'updated_at'=>'2018-04-21 04:56:47',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>36,
		// 'type'=>1,
		// 'clasification'=>'TESIS 049 FISI',
		// 'title'=>'Implementación de un Datamart aplicado a Instituciones de Seguridad Ciudadana',
		// 'year'=>'2003',
		// 'school_id'=>1,
		// 'extension'=>'171',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Conceptos básicos y Marco Teórico -2.-Metodología o Técnicas a utilizar  -3.-Impacto en un Datamart -4.-Software en un Datamart -5.-Desarrollo del Caso -Conclusiones -Recomendaciones -Glosario -Anexos -Bibliografía',
		// 'summary'=>'El presente trabajo tiene como propósito fundamental, efectuar el análisis, diseño, implementación y puesta en marcha de un Datamart, orientado a Instituciones de Seguridad Ciudadana, como es el caso del Serenazgo de Miraflores.\r\nPara ello se describe previamente aspectos teóricos de lo que es un Datamart y la Metodología empleada en el desarrollo de dicha tecnología, siguiendo para ellos los pasos que se mencionan en la presente tesis.',
		// 'recomendations'=>'Los profesionales informáticos  que participen en el proyecto, deben tener un conocimiento del tema de negocios que contempla existiendo un trabajo en conjunto con los usuarios finales de la aplicación, esto debido a que se debe tener por lo menos una proyección de los requerimientos futuros para poder darle un cierto nivel de flexibilidad a la estructura dimensional.',
		// 'conclusions'=>'Datamart es un gran aporte para los usuarios que son, al fin y al cabo quienes tienen bajo su responsabilidad la labor de gestión de la organización, decidiendo no sólo el futuro de su organización sino también del propio desarrollo del país y porque no decirlo, de la seguridad ciudadana.',
		// 'bibliography'=>'p 168,169,170,171,  4h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Datamart - Datawarehouse - OLTP - Inteligencia de Negocios',
		// 'stand_id'=>79,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-21 05:10:10',
		// 'updated_at'=>'2018-04-21 05:10:10',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>37,
		// 'type'=>1,
		// 'clasification'=>'TESIS 045 FISI',
		// 'title'=>'El Balanced Scorecard en la Gestión de las Municipalidades de Lima',
		// 'year'=>'2003',
		// 'school_id'=>1,
		// 'extension'=>'123',
		
		// 'observations'=>'Contiene  ilustraciones.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Introducción -2.-Fundamento Teórico -3.-Descripción del Problema -4.-Herramientas de Gestión -5.-Solución al problema -Conclusiones -Recomendaciones -Referencias bibliográficas  -Anexo',
		// 'summary'=>'La presente investigación tiene como objetivo principal contribuir en el logro de una Gestión Estratégica Municipal, para lo cual se efectúa un análisis de la situación actual de las localidades del departamento de Lima y se presenta una propuesta de aplicación de la herramienta de gestión Balanced Scorecard en la Gestión Municipal.',
		// 'recomendations'=>'Definir objetivos e indicadores de nivel más bajo para los empleados que estén relacionados con los objetivos e indicadores de los niveles más altos. Al sentirse incentivados a seguir la estrategia de la compañía a través de sus objetivos personales, no estarán siendo dirigidos a  una serie de procedimientos para lograr los resultados deseados sino, tendrán la libertad necesaria para poder alcanzar dichos resultados de forma innovadora.',
		// 'conclusions'=>'La metodología del Balance Scorecard permite obtener resultados cuantitativos de la gestión, con la consecuencia de poder centrarse en la creación de valor para la sociedad(\"accionistas\"), satisfacer en forma clara las expectativas de los ciudadanos y donantes(\"clientes\"), optimizar los procesos internos claves, incrementar el valor del recurso humano.',
		// 'bibliography'=>'p 103,104,  2h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Estrategias - Gestión Estratégica - Organización - Indicadores',
		// 'stand_id'=>79,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-21 05:25:18',
		// 'updated_at'=>'2018-04-21 05:25:18',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>38,
		// 'type'=>1,
		// 'clasification'=>'TESIS 043 FISI',
		// 'title'=>'Propuesta Metodológica para el desarrollo de un Sistema de Información Gerencial - (SIG) Caso: Empresa Nacional de Puertos(ENAPU S.A)',
		// 'year'=>'2003',
		// 'school_id'=>1,
		// 'extension'=>'96',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Conceptos Generales -2.-Marco Teórico y Definición Formal del Problema -3.-Propuesta Metodológica para el Desarrollo de un Sistema de Información Gerencial -4.-Caso de Estudio desarrollada de la Propuesta -Conclusiones -Recomendaciones -Glosario -Anexo -Bibliografía',
		// 'summary'=>'El presente trabajo muestra una propuesta metodológica de cómo llevar a cabo el desarrollo de un Sistema de Información Gerencial en una Organización. Para el caso de Estudio se toma a la Empresa Nacional de Puertos (ENAPU S.A). Para ello se describen aspectos teóricos que permitirá al lector conocer todo lo relacionado sobre este tipo de Sistema de Toma de Decisiones, además de mostrar las herramientas utilizadas, como la Planeación Estratégica, para facilitar su desarrollo. Se concluye con el caso de estudio las dificultades que representan su desarrollo en una empresa del Estado. Este documento pretende servir como base teórica para futuras investigaciones que deseen desarrollar tal Sistema.',
		// 'recomendations'=>'Sea cual sea la metodología de desarrollo que quiera utilizar para implantar el SIG en su organización tenga siempre presente de cumplir los pasos de esta. No haga un trabajo a medias, puede caer una gran incertidumbre si no ve resultados, podría generar suspicacias dentro de su Organización, haciendo pensar a sus miembros que el SIG es más una carga que una solución.',
		// 'conclusions'=>'Un Sistema de información será mas valido cuanto mejor se adapte a las nuevas necesidades de la organización,que van cambiando con el tiempo. Lo cual contribuirá a la durabilidad del sistema y a tener mayor tiempo de vida operacional de la misma.',
		// 'bibliography'=>'p 96,  1h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Sistemas de Información - Sistemas de Toma de Decisiones - Planeación Estratégica - Cultura Organizacional',
		// 'stand_id'=>79,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-21 05:38:39',
		// 'updated_at'=>'2018-04-21 05:38:39',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>39,
		// 'type'=>1,
		// 'clasification'=>'TESIS 063 FISI',
		// 'title'=>'Sistema de Apoyo a la Toma de Decisiones para la Gerencia de Ventas de un Empresa Industrial',
		// 'year'=>'2003',
		// 'school_id'=>1,
		// 'extension'=>'134',
		
		// 'observations'=>'Contiene ilustraciones y cuadros.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Fundamento Teórico -2.-Metodologías -3.-Descripción del Negocio -4.-El problema -5.-Implementación del Data Mart -6.-El Producto Final -Conclusiones -Recomendaciones -Glosario -Bibliografía -Anexos',
		// 'summary'=>'El presente trabajo da una visión general sobre el tema del manejo de la información en las bases de datos, haciendo uso de una herramienta denominada \" Datamart\" que a partir del modelo del negocio de área de Ventas de la Empresa Hans Service S.A.C., permitirá, entre otras cosas, el poder contar con una posibilidad amplia de soluciones en la toma de decisiones y esto se debe justamente al mejor manejo de la información que hagamos.',
		// 'recomendations'=>'Contar con mecanismos que puedan predecir desastres, deberían desarrollarse sistemas que puedan anticipar al 100% los riesgos, la dirección y las estrategias de una empresa.',
		// 'conclusions'=>'Esta tecnología permite a los analistas, gerentes y ejecutivos de obtener un mejor discernimiento y perspicacia de los datos de manera rápida, consistente, con un acceso interactivo a una amplia variedad de posibles vistas de información.\r\nTransforma los datos en información que refleja la real dimensión y mejor entendimiento del negocio.',
		// 'bibliography'=>'p   120,121,122,123,124,  5h',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'DataWarehouse - Inteligencia de Negocios - Toma de Decisiones - OLAP',
		// 'stand_id'=>80,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-21 05:55:22',
		// 'updated_at'=>'2018-04-21 05:55:22',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>40,
		// 'type'=>1,
		// 'clasification'=>'TESIS 064 FISI',
		// 'title'=>'Lenguaje de Modelado Unificado Aplicado a un Sistema de Educación Virtual',
		// 'year'=>'2003',
		// 'school_id'=>1,
		// 'extension'=>'177',
		
		// 'observations'=>'Contiene ilustraciones y cuadros.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Introducción -2.-Educación Virtual -3.-Lenguaje de Modelado Unificado -4.-El problema del Análisis y Diseño de un Sistema de Educación Virtual -5.-El análisis y diseño de un Sistema de Educación Virtual -6.-Desarrollo del Software -7.-Conclusiones y Recomendaciones -Bibliografía',
		// 'summary'=>'En el presente trabajo se desarrolla el análisis y diseño de un Sistema de Educación Virtual aplicando el Lenguaje de Modelado Unificado y como resultado se obtienen los diferentes diagramas del UML, los cuales conforman el modelo base para la construcción del sistema.',
		// 'recomendations'=>'Usar UML como herramienta para el análisis y diseño de un Sistema de Educación Virtual facilitó el desarrollo del software, Módulo Docente, porque se definió de manera fácil, concisa y clara los requerimientos y funcionalidades del sistema, como se puede apreciar en los diagramas expuestos en el capítulo V, evitando las pérdidas de tiempo y esfuerzo que se dan cuando no se realiza un adecuado análisis y diseño del sistema.',
		// 'conclusions'=>'El UML es un lenguaje para el análisis y diseño de sistemas complejos como un Sistema de Educación Virtual el cual se encuentra en constante crecimiento por el uso de las tecnologías y que requiere de modelos seguros, confiables, comprensibles, fáciles de cambiar y comunicar, según lo desarrollado en el capitulo V.',
		// 'bibliography'=>'p 174,175,176,177,  4h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Educación Virtual - Educación a Distancia - Aula Virtual - Lenguaje de Modelado Unificado',
		// 'stand_id'=>80,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-21 06:09:11',
		// 'updated_at'=>'2018-04-21 06:09:11',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>41,
		// 'type'=>1,
		// 'clasification'=>'TESIS 073 FISI',
		// 'title'=>'Sistema de Gestión de Pedidos para un Broker Textil',
		// 'year'=>'2003',
		// 'school_id'=>1,
		// 'extension'=>'175',
		
		// 'observations'=>'Contiene  ilustraciones.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Conceptos básicos y Marco Teórico -2.-Metodologías o Técnicas a utilizar -3.-Análisis del Sistema -4.-Diseño del Sistema -5.-Conclusiones -6.-Glosario -7.-Anexos -8.-Bibliografía',
		// 'summary'=>'El trabajo elaborado tiene como propósito fundamental, obtener un Sistema de Gestión de Pedidos a Brokers Textiles, aprovechando al máximo las tecnologías actuales y proporcionando estándares de trabajo que buscarán optimizar el trabajo en dichas empresas.\r\nPara tal propósito se describen previamente algunos aspectos teóricos que nos servirán de base para el análisis , diseño y desarrollo del Sistema de Gestión de Pedidos. Asimismo es necesario estandarizar tanto el ingreso y salida de datos para la información que es manejada por la empresa.',
		// 'recomendations'=>'Es necesario conocer las metodologías existentes y evaluar cada una de ellas, identificando sus fortalezas y debilidades, las cuales nos servirán de guía para la solución de los problemas que se presenten.',
		// 'conclusions'=>'La tecnología .NET, hasta el momento esta todavía en un proceso de maduración, los conceptos y el enfoque que se utilizan son los correctos, pero todavía hay algunas limitaciones que nos ofrece el Framework en el momento de la programación, sin embargo estas limitaciones se irán solucionando progresivamente conforme existan más usuarios que hagan sentir sus necesidades a los Grupos de Usuarios de Microsoft.',
		// 'bibliography'=>'p 173,174,175  3h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'UML - Windows DNA - .NET',
		// 'stand_id'=>80,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-21 19:10:18',
		// 'updated_at'=>'2018-04-21 19:10:18',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>42,
		// 'type'=>1,
		// 'clasification'=>'TESIS 072 FISI',
		// 'title'=>'Formularios Dinamicos Configurables para Entrada y Mantenimiento de Datos',
		// 'year'=>'2003',
		// 'school_id'=>1,
		// 'extension'=>'72',
		
		// 'observations'=>'Contiene  ilustraciones.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Conceptos básicos -2.-Metodología de la Investigación -3.-Prototipo del Sistema de Ingreso Dinámico de Información',
		// 'summary'=>'La vertiginosa evolución de la Informática y el tratamiento de la información en masa obliga a muchas empresas a capturar estas para un mejor tratamiento ya sea de gestión o como un tratamiento históricos con propósitos de proyecciones. Surge en este contexto la necesidad de ofrecer mecanismos que puedan capturar estos datos si bien es cierto se han creados diferentes métodos para la captura de datos de forma masiva llámese código de barras, escaneados, hoy por hoy nuestra realidad peruana nos indica que la mayoría de las empresas en el medio no estarían en la capacidad de manejar esos costos, por lo cual no lleva a utilizar la mano del hombre con sus errores y defectos.',
		// 'recomendations'=>'Es recomendable el uso de un modelo ontológico que tenga como primitiva de modelado la relación Parte_de, o en su defecto que sea fácilmente definible, debido a que la mayor parte de las estructuras tienen sus relaciones Parte_de, con lo cual se puede manejar la reusabilidad de diferentes definiciones y/o estructuras.',
		// 'conclusions'=>'Con respecto a lograr los objetivos del problema la respuesta es satisfactoria logrando con una definición simple de las estructuras una completa administración de los diferentes formulario de entrada de datos así como de mantenimiento con mínimos tiempos de desarrollo de formularios y/o mantenimiento ser usado en diferentes empresas de diferentes rubros adaptándose al principio de toma de datos.',
		// 'bibliography'=>'p 69,70,71,72,  4h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Dinámicos - Ontología',
		// 'stand_id'=>80,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-21 19:26:07',
		// 'updated_at'=>'2018-04-21 19:26:07',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>43,
		// 'type'=>1,
		// 'clasification'=>'TESIS 071 FISI',
		// 'title'=>'Historia Clínica Informatizada para un Hospital Materno Perinatal',
		// 'year'=>'2003',
		// 'school_id'=>1,
		// 'extension'=>'117',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Conceptos básicos y Marco Teórico -2.-Historia Clínica Informatizada como una Metodología Eficiente -3.-Desarrollo del Caso -4.-Plan y Análisis de Sistema -5.-Plan y Análisis de la Aplicación -Conclusiones -Recomendaciones -Anexos -Bibliografía',
		// 'summary'=>'El presente trabajo tiene como objetivo primordial, analizar y elaborar un esquema de implementación de la Historia Clínica a una Historia Clínica Informatizada para un Hospital Materno Perinatal.\r\nPara ello se describe previamente aspectos teóricos de la Historia Clínica y la metodología usada para implementar haciendo uso de las herramientas informáticas.',
		// 'recomendations'=>'Se tiene que hacer un estudio del tipo de personal capacitado para poder operar un ordenador sin dificultad , para determinar la factibilidad y las fechas de capacitación necesarias para poder llevar a cabo la Informatización de la Historia Clínica.',
		// 'conclusions'=>'La implantación de la HCI en instituciones con actividad asistencial previa a la decisión de informatizar la asistencia debe ser contemplada como un proceso progresivo que necesariamente tendrá una transitoriedad con las metodologías tradicionales. Son básicos la estrategia de la implantación y el diseño de la misma para ir consolidando objetivos exitosos de forma gradual y que le confirmen al médico la validez del cambio.',
		// 'bibliography'=>'p 116,117,  2h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingenieria de Sistemas',
		// 'keywords'=>'Historia clínica - Evolución de la Historia Clínica - Histomática - Tendencias Estratégicas en Sanidad',
		// 'stand_id'=>80,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-21 19:39:57',
		// 'updated_at'=>'2018-04-21 19:39:57',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>44,
		// 'type'=>1,
		// 'clasification'=>'TESIS 067 FISI',
		// 'title'=>'Integración de Sistemas de Información usando Servicios Web (XML Web Services)',
		// 'year'=>'2003',
		// 'school_id'=>1,
		// 'extension'=>'110',
		
		// 'observations'=>'Contiene  ilustraciones.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Generalidades y Definición Formal del Problema -2.-Marco Teórico -3.-Negocios Emergentes -4.-Comparación de Plataformas para Servicios Web -5.-Beneficios y Limitaciones de los Servicios Web -6.-Esquema práctico: Tarificación de Llamadas -Conclusiones -Recomendaciones -Glosario -Anexos  - Bibliografía',
		// 'summary'=>'Un servicio web es una aplicación que acepta peticiones de otros sistemas a través de Internet o una intranet. Gracias al uso de XML, ésta comunicación se da aún si ambas partes están usando diferentes sistemas de información. XML es un lenguaje de marcas que hace que la información sea portable, ésta tecnología es clave debido a esta característica.\r\nLos Servicios Web se encuentran basados en tres estándares , SOAP, WSDL y UDDI, los cuales permiten la comunicación , descripción y descubrimiento de los servicios.',
		// 'recomendations'=>'Es preferible que las empresas que hacen uso de Servicios Web en forma dinámica, validen previamente la información obtenida del registro UDDI público, pues actualmente hay bastante información de empresas que no es válida, así como también servicios que no están listos para producción.',
		// 'conclusions'=>'El uso de Servicios Web permite aumentar las fronteras de nuestros mercados, gracias a su naturaleza web, éstos servicios pueden ser accesados desde cualquier lugar del mundo ,es decir, la organización puede tener clientes lejos o fuera de su localidad. La distancia deja de ser un problema ya que no existen limitaciones para el alcance del servicio.',
		// 'bibliography'=>'p 109,110,  2h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Servicios - Integración - Interoperabilidad - Web',
		// 'stand_id'=>80,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-21 19:54:59',
		// 'updated_at'=>'2018-04-21 19:54:59',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>45,
		// 'type'=>1,
		// 'clasification'=>'TESIS 076 FISI',
		// 'title'=>'Sistema de Gestión de Información Académica de la Facultad de Ingeniería de Sistemas e Informática de la UNMSM  Aplicación del lenguaje UML en el proceso de desarrollo RUP',
		// 'year'=>'2003',
		// 'school_id'=>1,
		// 'extension'=>'178',
		
		// 'observations'=>'Contiene ilustraciones y cuadros.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Conceptos básicos y Marco Teórico -2.-Descripción del Caso -3.-Desarrollo del Caso -Conclusiones -Glosario -Bibliografía',
		// 'summary'=>'El presente trabajo tiene como propósito proporcionar al lector los fundamentos necesarios para desarrollar el tema de la Aplicación del Lenguaje UML en el proceso de desarrollo utilizando la metodología RUP en un Sistema de Gestión de Información Académica.\r\nSe describe previamente aspectos teóricos del proceso de desarrollo RUP, el lenguaje UML y su aplicación en la documentación del desarrollo de un Sistema de Gestión de Información Académica , utilizando las plantillas estándar de RUP, y la solución tecnológica para el caso.',
		// 'recomendations'=>'Se recomienda el uso de las plantillas estándar de documentación y específicamente las de RUP, ya que hacen posible una lectura y referencia de manera fácil a cualquier nivel de explicación del software en cualquiera de sus fases.',
		// 'conclusions'=>'El manejo de las tecnologías de la información para resolver situaciones complejas está adquiriendo rápidamente importancia en el mundo de las organizaciones , es por esto que es necesaria una metodología ordenada que permita el control y la administración de los recursos de desarrollo, ésta necesidad ha dado origen a una de la mas exitosas metodologías que permita el control y la administración de los recursos de desarrollo, ésta necesidad ha dado origen a una de  las mas exitosas metodologías que generaliza el manejo de los procesos de una manera estandarizada e inteligente, esta metodología es llamada RUP( Rational Unified Process).',
		// 'bibliography'=>'p 177,178,  2h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Objeto - Lenguaje - Modelamiento - Tecnologías de Información',
		// 'stand_id'=>80,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-21 20:11:22',
		// 'updated_at'=>'2018-04-21 20:11:22',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>46,
		// 'type'=>1,
		// 'clasification'=>'TESIS 077 FISI',
		// 'title'=>'Aulas Virtuales como Herramienta de Apoyo en la Educación de la Universidad Nacional Mayor de San Marcos',
		// 'year'=>'2003',
		// 'school_id'=>1,
		// 'extension'=>'143',
		
		// 'observations'=>'Contiene ilustraciones y cuadros.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Marco Teórico -2.-Modelos Existentes -3.-Metodología presentada para el Desarrollo del Aula Virtual -4.-Metodología para el Desarrollo de la Aplicación: Aula Virtual UNMSM -5.-Pruebas y Seguimiento de la Aplicación -6.-Conclusiones y Recomendaciones -Bibliografía -Anexos',
		// 'summary'=>'La tesis presenta una investigación sobre las Aulas Virtuales y los aspectos que involucran la implementación de éstas como apoyo en la Educación. Hemos considerado como caso de estudio a la Universidad Nacional Mayor de San Marcos quien tiene a su disposición este tipo de servicio disponible vía internet. Comenzaremos esbozando los principales técnicos que la sustentan y la metodología de trabajo para su desarrollo. Esta se compone de tres fases: concepción y análisis de viabilidad , proceso de desarrollo e impartición y seguimiento de las acciones formativas.',
		// 'recomendations'=>'Se sugiere que en un futuro cercano se realice un estudio comparativo entre grupos de alumnos que participan en cursos de manera profesional, que no se apoyan de este soporte virtual , con otros que si utilizan esta herramienta; y con ello obtener resultados del aprendizaje que se adquiere entre ambos casos. De este estudio que se realizará en un determinado intervalo de tiempo se podrá obtener el impacto que tiene el Aula Virtual entre los alumnos y docentes.',
		// 'conclusions'=>'El Aula virtual debe ser manejado desde el enfoque constructivista , es decir que el alumno debe construir su propio aprendizaje a través de conocimientos previos. Estos conocimientos previos se adquieren por recepción o por descubrimiento. Concluimos que el Aula Virtual debe incentivar sobretodo la adquisición de conocimientos e información a través de la indagación , pero para esto, es importante que los docentes , desarrollen sus materiales educativos de diferente forma a la que ya estaban acostumbrados a realizarlos.',
		// 'bibliography'=>'p 130,131,132,133,   4h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'educación virtual - educación a distancia - universidad virtual - campus virtual',
		// 'stand_id'=>80,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-21 20:28:17',
		// 'updated_at'=>'2018-04-21 20:28:17',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>47,
		// 'type'=>1,
		// 'clasification'=>'TESIS 085 FISI',
		// 'title'=>'Alineamiento Estratégico de TI/SI en CINFO-UNMSM',
		// 'year'=>'2004',
		// 'school_id'=>1,
		// 'extension'=>'122',
		
		// 'observations'=>'Contiene ilustraciones y cuadros.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Conceptos de Planeamiento Estratégico y Planeamiento Estratégico de TI/SI -2.-Problemática en Relación al Alineamiento Estratégico de TI/SI en las Organizaciones -3.-Metodologías Empleadas en Desarrollo del Planeamiento Estratégico de TI/SI -4.-Aplicación de Metodologías en el Desarrollo Del Planeamiento Estratégico de TI/SI -Conclusiones -Bibliografía -Anexos',
		// 'summary'=>'El propósito de este trabajo es el dar a conocer las herramientas necesarias que uniendo características propias contribuyen al alineamiento estratégico de las TI/SI con el plan estratégico de la organización , de tal manera que se logre el cumplimiento de los objetivos de la organización , creando valor , ventajas competitivas y actuando como un apalancador de la misma. En este caso particular será aplicada al Centro de informática de la UNMSM.',
		// 'recomendations'=>'Es necesario seguir una metodología adecuada la cual nos permita integrar a toda la organización ante una acción, asegurando el éxito mediante el compromiso de los mismos. En este caso no solo la aplicación de una metodología sino aquellas que en conjunto permitan alcanzar mejores resultados.',
		// 'conclusions'=>'Los TI/SI bien gestionadas y alineadas son los mejores aliados para los directivos de la organización , pues con la información adecuada en el momento adecuado permitirá estar siempre preparado para la toma de decisiones que generen ventaja y valor a la organización.',
		// 'bibliography'=>'p 117,118,  2h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'TI/SI - Estratégico',
		// 'stand_id'=>80,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-21 20:41:50',
		// 'updated_at'=>'2018-04-21 20:41:50',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>48,
		// 'type'=>1,
		// 'clasification'=>'TESIS 083 FISI',
		// 'title'=>'Un Algoritmo de Búsqueda Adaptativa Aleatoria y Golosa para la Resolución del Problema de Cortes',
		// 'year'=>'2004',
		// 'school_id'=>1,
		// 'extension'=>'112',
		
		// 'observations'=>'Contiene ilustraciones y código de programación.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Generalidades -2.-El problema de Cortes -3.-Algoritmo GRASP -4.-Un Algoritmo de Búsqueda Adaptativa Aleatoria y Golosa Para la resolución del Problema de Cortes -5.-Descripción del Sistema -6.-Experimentos Numéricos -7.-Conclusiones y Recomendaciones -Apéndices -Bibliografía',
		// 'summary'=>'Dado un conjuntos de requerimientos lineales y un número ilimitado de barras de metal ( u otro material) de tamaño estándar, con dimensión mayor a la de los requerimientos. El problema de Cortes consiste en realizar cortes sobre las barras de tamaño estándar, de tal manera que se obtengan todos los requerimientos con el menor número de barras de tamaño estándar y el menor desperdicio posible. El problema es NP-Difícil, y presenta diversas aplicaciones en los diversos sectores de la industria, tales como la maderera, metal, plástico,etc.\r\nLa presente Tesis, muestra un Procedimiento de Búsqueda Aleatoria, Adaptativa y Golosa (GRASP), para la resolución del problema de cortes.',
		// 'recomendations'=>'Los experimentos sugieren en general usar α = 0.5, y con un número de iteraciones de por lo menos 2000.',
		// 'conclusions'=>'Después de realizar las pruebas experimentales y comparativas, se ha concluido que, en general GRASP mejora, en la mayoría de los casos, las soluciones de las heurísticas desarrolladas , es decir, sus resultados se acercan más al resultado óptimo minimizando el desperdicio en los cortes.',
		// 'bibliography'=>'p 110,111,112,  3h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas e Informatica',
		// 'keywords'=>'Problema de Cortes - algoritmo Goloso - GRASP',
		// 'stand_id'=>80,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-21 20:56:43',
		// 'updated_at'=>'2018-04-21 20:56:43',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>49,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 092 FISI',
		// 'title'=>'Un algoritmo GRASP para resolver el problema de la programación de la programación de tareas dependientes en máquinas diferentes ( task scheduling)',
		// 'year'=>'2005',
		// 'school_id'=>2,
		// 'extension'=>'128',
		
		// 'observations'=>'Contiene ilustraciones y código de programación.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Introducción -2.-Marco teórico -3.-Un modelo matemático de optimización de optimización para el problema del task scheduling en la planificación de los recursos en los proyectos de Ingeniería de Software -4.-Algoritmos propuestos -5.-Implementación de los algoritmos -6.-Experimentos numéricos -7.-Análisis de los experimentos realizados -8.-Conclusiones -Referencias Bibliográficas -Anexos',
		// 'summary'=>'El presente trabajo de tesis presenta una meta heurística GRASP para resolver la variante en donde las tareas son dependientes y los organismos ejecutores son diferentes entre sí: con esto se podrían planificar las tareas de las etapas iniciales de un proceso particular de desarrollo de software. En la tesis, se incide en la metodología RUP, y en particular en sus disciplinas de modelamiento de negocios ( business modeling) y captación de requerimientos ( requirement).',
		// 'recomendations'=>'En la tesis se ha propuesto dos algoritmos para el problema de planificación de los recursos en proyectos de Ingeniería de Software(variación del task scheduling) :\r\n-Un algoritmo voraz\r\n-Un algoritmo GRASP construcción, con doble criterio de relajación.',
		// 'conclusions'=>'Los sistemas existentes en el mercado que pueden ser considerados como planificadores de tareas, no han aplicado técnicas meta heurísticas sino más bien métodos exactos. No buscan la optimización del ordenamiento de las tareas a ejecutar, sino más bien dan énfasis a encontrar planes factibles de ser ejecutados, analizando la carga de los recursos  involucrados ( MS PROJECT, PRIMAVERA PROJECT, etc.); sean estas planificaciones para proyectos de Ingeniería de Software y líneas de producción industrial.',
		// 'bibliography'=>'p 109-118,  10h,',
		
		// 'mention'=>'Tesis para obtener el Título Profesional de : Magíster-Post Grado',
		// 'keywords'=>'Programación de tareas - algoritmos GRASP - Desarrollo de Software - RUP',
		// 'stand_id'=>81,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-21 21:25:16',
		// 'updated_at'=>'2018-04-21 21:25:16',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>50,
		// 'type'=>1,
		// 'clasification'=>'TESIS 093 FISI',
		// 'title'=>'Aplicación de un algoritmo genético para la solución de modelos de inventario estocásticos',
		// 'year'=>'2005',
		// 'school_id'=>1,
		// 'extension'=>'99',
		
		// 'observations'=>'Contiene ilustraciones y gráficos.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Modelos de inventario estocásticos -2.-Algoritmos Genéticos -3.-Simulación -4.-Diseño experimental -5.-Resultados experimentales -Conclusiones y Recomendaciones - Apéndices -Bibliografía',
		// 'summary'=>'El presente trabajo busca presentar una alternativa para la solución de modelos de inventario estocásticos para los cuales los métodos usualmente aplicados no son factibles. Generalmente la obtención de políticas óptimas para gestión de inventarios se basa en métodos analíticos en el campo de la investigación de operaciones. Los modelos que representan estas políticas muchas veces pueden llegar a ser tan complejos que su solución mediante métodos analíticos sea difícil e ineficiente.',
		// 'recomendations'=>'Aunque el algoritmo genético propuesto alcanzó un buen desempeño en la búsqueda de un solución cercana a la óptima a las modelos de inventarios presentados, sería útil evaluar el desempeño de otras variables de heurísticas evolutivas como los algoritmos genéticos auto adaptativos o los algoritmos coevolutivos. Estas evaluaciones ayudarían a determinar qué características de alguna de estas variables favorecen este tipo de búsqueda y cuales no son apropiados.',
		// 'conclusions'=>'La optimización basada en simulación establece un límite entre el modelo a optimizar y el componente de optimización haciendo independientes estos dos elementos. Esta separación permite que se cambien algunos supuestos del modelo a optimizar sin necesidad de realizar cambios en el algoritmo genético . Más aún, se podría reemplazar el modelo de inventario por el de otro proceso.',
		// 'bibliography'=>'p 97,98,99,  3h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Optimización - Modelo - algoritmo genético - simulación',
		// 'stand_id'=>81,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-21 21:43:22',
		// 'updated_at'=>'2018-04-21 21:43:22',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>51,
		// 'type'=>1,
		// 'clasification'=>'TESIS 088 FISI',
		// 'title'=>'Generación Dinámica de Tiendas Virtuales para e-Commerce y m-Commerce Orientada a las Pymes',
		// 'year'=>'2005',
		// 'school_id'=>1,
		// 'extension'=>'245',
		
		// 'observations'=>'Contiene ilustraciones y cuadros.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Nuevos Paradigmas: El comercio Electrónico y El comercio Móvil -2.-Tecnologías de Desarrollo para Contenido Dinámico e Interactivo en la Web -3.-Metodología Propuesta para el desarrollo del Sistema -4.-Posición de las Pymes en el Perú frente a la Utilización del E-Commerce y M-Commerce -5.-Desarrollo y Descripción del Sistema Mediante la Tecnología Propuesta -6.-Análisis de Factibilidad de la Solución Propuesta -Conclusiones -Recomendaciones -Referencias Bibliográficas',
		// 'summary'=>'La presente investigación fundamenta las posibilidades que brinda una solución de administración y generación dinámica de tiendas virtuales orientadas a las Pymes, cuya finalidad es integrar las bondades del e-commerce y m-commerce en una única aplicación, que puede ser administrada de manera remota, que permite a los clientes poder acceder a ella mediante tecnología móvil y PCs con acceso a Internet , y que es desarrollada íntegramente con herramientas freeware, permitiendo que la adquisición de la misma por parte de la industria nacional sea mucho más accesible.',
		// 'recomendations'=>'Dentro de la línea de especialización de servicios para las tiendas virtuales, estas pueden tecnológicamente aprovechar la información adquirida para ser explotada en servicios no tradicionales de e-marketing o agentes virtuales de estudio de mercado y clientes; los cuales permiten proyectar mejores estrategias al ofrecer productos y servicios por parte de las Pymes a través de la web.',
		// 'conclusions'=>'La actual coyuntura económica de nuestro país demanda el desarrollo de estrategias comerciales, orientadas a maximizar la inversión de las empresas, que inician proyectos de comercio electrónico. Si bien el gobierno peruano, posee una marcada orientación a fomentar e impulsar Internet, es necesario consolidar propuestas más tangibles y sobre todo orientadas a sectores específicos.',
		// 'bibliography'=>'p 240-245,  6h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Comercio Electrónico - Comercio Móvil - Tienda Virtual - Transacciones en Línea',
		// 'stand_id'=>81,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-21 22:04:03',
		// 'updated_at'=>'2018-04-21 22:04:03',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>52,
		// 'type'=>1,
		// 'clasification'=>'TESIS 086 FISI',
		// 'title'=>'Definición de un Proceso de Desarrollo de Software orientado a Aplicaciones Web basado en UML',
		// 'year'=>'2002',
		// 'school_id'=>1,
		// 'extension'=>'131',
		
		// 'observations'=>'Contiene ilustraciones y cuadros.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Generalidades y Definición del Problema -2.Especificación del Proceso de Desarrollo de Software -3.-Extensión del Proceso de Software a los componentes Web de una aplicación -4.-Aplicación del Proceso de software a un caso de estudio -5.-Verificación del Proceso de Software Definido -Conclusiones -Recomendaciones -Anexos -Referencias Bibliográficas -Glosario',
		// 'summary'=>'El presente trabajo tiene como propósito definir un proceso de desarrollo de software para aplicaciones orientadas al web basándonos en la notación UML(Lenguaje de Modelamiento Unificado).\r\nEmpezamos describiendo los conceptos básicos que se deben tener en cuenta para comprender el proceso propuesto, para luego especificar detalladamente las etapas del mismo.',
		// 'recomendations'=>'Se puede ampliar la validación del proceso a través de un análisis para cada una de las etapas definidas a través de la definición de nuevas métricas que se encuentren ligadas directamente al contenido de cada etapa; con el fin de obtener resultados más detallados.',
		// 'conclusions'=>'La importancia de la investigación adquiere valor al haber logrado especificar minuciosamente el contenido de cada una de las etapas y subetapas del proceso de software, para lo cual hemos puesto énfasis en las tareas de las primeras etapas del proceso de desarrollo de software, ya que se conoce que el problema del software radica en que el entendimiento sobre el producto en construcción es raramente completo al inicio y muchos requerimientos tienden a desarrollarse durante el proceso de construcción de software.',
		// 'bibliography'=>'p 124,125,  2h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Proceso de Desarrollo de Software - Aplicaciones Web - UML - Casos de Uso',
		// 'stand_id'=>81,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-21 22:19:28',
		// 'updated_at'=>'2018-04-21 22:19:28',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>53,
		// 'type'=>1,
		// 'clasification'=>'TESIS 087 FISI',
		// 'title'=>'Orientación Vocacional y Profesional Vía redes Neuronales Artificiales Basado en conocimiento',
		// 'year'=>'2005',
		// 'school_id'=>1,
		// 'extension'=>'160',
		
		// 'observations'=>'Contiene ilustraciones y gráficos.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Introducción -2.-Marco Teórico -3.-El problema de Orientación Vocacional -4.-Orientación Vocacional Vía Redes Neuronales Artificiales -5.-Sistema de Información OVP-RNA: Orientación Vocacional y Profesional -6.-Evaluación del Sistema OVP-RNA -7.-Conclusiones -8.-Bibliografía -9.-Anexos',
		// 'summary'=>'El propósito de este trabajo es diseñar y desarrollar un sistema inteligente de Orientación Vocacional acondicionado a la realidad peruana, que no compita con los psicólogos, sino al contrario, realice ciertas tareas de rango intelectual que permita apoyar al orientador en su labor de asesorar sobre cuál es la mejor opción profesional acorde con las aptitudes del alumno.',
		// 'recomendations'=>'Se recomienda utilizar la metodología utilizadas por la mayoría de psicólogos : Exploración de Rasgos Personales, pues suponen un reconocimiento de los propios gustos , intereses y aptitudes del ser. Pero esta metodología no puede ser aplicada de manera independiente, es necesario que se combine con las otras técnicas ya mencionadas , pues somos conscientes que hay que tener en cuenta a la persona en su integridad y los factores sociales que le influyen.',
		// 'conclusions'=>'La eficiencia del sistema, luego de la evaluación de los resultados, resultó ser bastante buena (95.30%). \r\nSu utilización , además de los resultados confiables que se puedan obtener, va a permitir la reducción enorme de tiempo en un 99.3875% y por ende el costo que involucre la contratación de personal extra calificado para el desarrollo del proceso de corrección de las pruebas psicológicas.',
		// 'bibliography'=>'p 113-117,  5h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas e Informatica',
		// 'keywords'=>'Sistemas Expertos - Redes Neuronales Artificiales - Orientación Vocacional',
		// 'stand_id'=>81,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-21 22:38:18',
		// 'updated_at'=>'2018-04-21 22:38:18',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>54,
		// 'type'=>1,
		// 'clasification'=>'TESIS 081 FISI',
		// 'title'=>'Marco Teórico de la Realidad Virtual como Herramienta para la Educación Universitaria',
		// 'year'=>'2004',
		// 'school_id'=>1,
		// 'extension'=>'52',
		
		// 'observations'=>'Contiene  ilustraciones.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Generalidades -2.-Marco Teórico -3.-Propuesta Técnica y Metodológica del Sistema -Contribución del proyecto de tesis -Conclusiones -Recomendaciones -Glosario -Bibliografía',
		// 'summary'=>'El objetivo del trabajo es dar a conocer la contribución de la realidad virtual como herramienta para la educación universitaria que posibilite simular mundos en las diferentes áreas; dar a conocer las aplicaciones existentes, además de conocer sus ventajas y desventajas.\r\nSe presenta una propuesta de un simulador de entrenamiento en anatomía, destinado a ser utilizado por estudiantes de Medicina.',
		// 'recomendations'=>'Tomar en cuentas las limitaciones de las soluciones actuales , ya que existen algunos problemas en áreas de audio, visual , táctil y navegación que no eliminan del todo la discontinuidad.',
		// 'conclusions'=>'La Realidad Virtual no suplirá completamente a los laboratorios, ya que los estudiantes necesitan conocer, por ejemplo, cómo luce y huele realmente cierta reacción química , o el olor y consistencia de la sangre, en el caso de los estudiantes de medicina, la tecnología de RV quizás logre suplir en un futuro cercano al menos ciertos cursos de laboratorio considerados peligrosos.',
		// 'bibliography'=>'p 52,  1h,',
		
		// 'mention'=>'Tesis para optar por el grado de Bachiller en : Ingeniería de Sistemas e Informática',
		// 'keywords'=>'Mundo Virtual - Realidad inmersiva - Dispositivos para la inmersión - Simulador de anatomía',
		// 'stand_id'=>80,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-21 22:49:12',
		// 'updated_at'=>'2018-04-21 22:49:12',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>55,
		// 'type'=>1,
		// 'clasification'=>'TESIS 125 FISI',
		// 'title'=>'BIOINGENIERÍA: Utilización de Redes Neuronales-Artificiales(RNA) de un Sistema de automatización y control de procesos industriales pesqueros de esterilización',
		// 'year'=>'2005',
		// 'school_id'=>1,
		// 'extension'=>'94',
		
		// 'observations'=>'Contiene  ilustraciones y código de programación.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Definición del Estudio -2.-Marco Teórico -3.-Estado del Arte -4.-Desarrollo del Caso -5.-Software Simulador(SPAC-RNA) -Conclusiones -Recomendaciones -Bibliografía',
		// 'summary'=>'La presente tesis plantea el desarrollo de un Sistema de Automatización y Control Industrial utilizando Redes Neuronales Artificiales(RNA), destinado al proceso de esterilización de las latas de conservas de pescado en una planta pesquera.\r\nLa necesidad de automatizar  y controlar es resultado de la importancia crítica que adquiere el proceso de esterilización dentro de la larga cadena de procesos asociados a la transformación del pescado en harina, debido a que este proceso es el que dará calidad al producto terminado y de su eficiencia depende el éxito o fracaso de toda la producción.',
		// 'recomendations'=>'Recomendamos asimismo la instalación de un monitor de procesos en el lugar mismo de producción para que los operarios o el personal puedan verificar y observar la manera en que el proceso se está realizando. Sin embargo desde la pantalla no es posible controlar el sistema, puesto que esto se hace desde un local central.',
		// 'conclusions'=>'Los sistemas SCADA y los PLC´s, si bien son ampliamente empleados en muchas industrias, resultan demasiado caros y muy complejos de operar y diseñar. El trabajo presentado en esta tesis, se vale de técnicas de RNA para lograr lo que estas plataformas hardware pueden hacer, pero sin las complicaciones y los altos costos que suponen la implementación de aquellos sistemas.',
		// 'bibliography'=>'p 92,93,94,  3h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Inteligencia Artificial - Redes Neuronales Artificiales (RNA) - Sistemas Expertos - Automatización Industrial',
		// 'stand_id'=>82,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-23 20:18:37',
		// 'updated_at'=>'2018-04-23 20:18:37',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>56,
		// 'type'=>1,
		// 'clasification'=>'TESIS 166 FISI',
		// 'title'=>'Implementación de un Sistema de Ventas utilizando WAP para la empresa K-RRITO',
		// 'year'=>'2006',
		// 'school_id'=>1,
		// 'extension'=>'160',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Planteamiento del Problema -2.-Objetivos -3.-Marco Teórico Conceptual -4.-Metodología de la Investigación -5.-Conclusiones -6.-Recomendaciones -7.-Glosario de Términos -8.-Bibliografía -9.-Anexos',
		// 'summary'=>'El presente trabajo es una investigación de tipo aplicada, debido a que los conocimientos teóricos serán aplicados en la solución de un problema en una empresa, en este caso la investigación será aplicada en la empresa K-rrito para hacer posible que ésta logre un incremento en sus ventas y mejore su posicionamiento en el mercado.',
		// 'recomendations'=>'El sistema propuesto fue desarrollado utilizando en su mayoría software libre pero utilizando software propietario la aplicación podrá mejorar en desempeño, escalabilidad, seguridad y otros aspectos.',
		// 'conclusions'=>'El sistema de ventas propuesto servirá solamente para las personas que se encuentran en la zona del Departamento de Lima, debido a que la empresa cuenta con infraestructura y soporte necesarios para comercializar sus productos solo dentro de esta zona.',
		// 'bibliography'=>'p 132,133,134,  3h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas+',
		// 'keywords'=>'WAp - eCommerce',
		// 'stand_id'=>67,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-23 20:34:30',
		// 'updated_at'=>'2018-04-23 20:36:46',
		// 'deleted_at'=>NULL
		// ] );

		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>57,
		// 'type'=>1,
		// 'clasification'=>'TESIS 163 FISI',
		// 'title'=>'Identificación de Personas Mediante El Reconocimiento Dactilar y su Aplicación a la Seguridad Organizacional',
		// 'year'=>'2006',
		// 'school_id'=>1,
		// 'extension'=>'168',
		
		// 'observations'=>'Contiene ilustraciones y diagramas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Planteamiento del Problema -2.-Objetivos -3.Marco Teórico Conceptual -4.-Metodología de la Investigación -5.-Conclusiones -6.-Recomendaciones -7.-Bibliografía -Anexos',
		// 'summary'=>'La huella dactilar es un medio confiable de identificación de personas; es por ello que el reconocimiento de huellas dactilares por medios computacionales ha despertado un gran interés en el desarrollo de sistemas de información computacionales.\r\nLa aplicación de este trabajo de tesis está orientado a la seguridad organizacional, basado en la huella dactilar, específicamente tomamos como objeto de aplicación a nuestra Facultad de Ingeniería de Sistemas e Informática de la Universidad Nacional Mayor de San Marcos.',
		// 'recomendations'=>'Utilizar estos sistemas biométricos para solucionar problemas como : evitar la suplantación de exámenes ya sea en la PRE o en los examenes de Admisión, asi como en otros sistemas en los cuales sea necesario identificar a las personas unívocamente.',
		// 'conclusions'=>'La aplicación de los sistemas que usen tecnología biométrica dactilar se puede dar en distintos ámbitos, entre los que podemos mencionar: acceso físico a recintos, acceso virtual a sistemas de aplicación , control de asistencia, aplicaciones de comercio electronico , voto electronico , transacciones bancarias, entre otras.',
		// 'bibliography'=>'p 65,66,  2h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Biometría - Huella Dactilar - Patrón - Seguridad Organizacional',
		// 'stand_id'=>67,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-23 20:49:10',
		// 'updated_at'=>'2018-04-23 20:49:10',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>58,
		// 'type'=>1,
		// 'clasification'=>'TESIS 162 FISI',
		// 'title'=>'SAMI: Un robot de charla desarrollado con la técnica de Razonamiento basado en Casos',
		// 'year'=>'2006',
		// 'school_id'=>1,
		// 'extension'=>'173',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Introducción -2.-Marco Teórico -3.-Robots de Charla -4.-Estructura de la Base de Conocimientos de SAMI -5.-Recuperación del conocimiento -6.-Construcción del Robot SAMI -7.-Análisis y Evaluación de Resultados -8.-Conclusiones y trabajo futuro -Glosario -Referencia Bibliográficas -Anexos',
		// 'summary'=>'La presente tesis se presenta en varios capítulos que abarcan todo el proceso de creación del robot de charla SAMI mediante la técnica RBC, la estructura de los casos, el almacenamiento de los mismos en la base de conocimientos, así como el método de recuperación del conocimiento.',
		// 'recomendations'=>'La construcción de la interfaz del robot de charla SAMI, utilizando tecnología ASP.NET y AJAX , que la hicieron realmente eficiente y amigable al usuario final.',
		// 'conclusions'=>'El conocimiento que se ha incluido en SAMI resultó ser más que suficiente para los fines de la tesis, sin embargo se puede ampliar base de conocimientos, lo cual haría más humano el comportamiento de SAMI, incrementando su eficiencia al responder las preguntas de los usuarios.',
		// 'bibliography'=>'p 131-136,  7h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Robot - Casos',
		// 'stand_id'=>67,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-23 21:10:33',
		// 'updated_at'=>'2018-04-23 21:10:33',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>59,
		// 'type'=>1,
		// 'clasification'=>'TESIS 204 FISI',
		// 'title'=>'Implementación del Balanced Scorecard en una empresa que brinda Soluciones Integrales de Sistemas',
		// 'year'=>'2006',
		// 'school_id'=>1,
		// 'extension'=>'260',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Planteamiento del Problema -2.-Objetivos -3.-Marco Teórico -4.-Metodología de la Investigación -5.-Guía de Implantación -6.-Conclusiones -7.-Recomendaciones -8.-Glosario -9.-Referencias bibliográficas -10.-Anexos de los Indicadores del BSC -11.-Índice de Ilustraciones -12.-Índice de tablas',
		// 'summary'=>'El presente trabajo aplica la herramienta de gestión Balanced Scorecard, para obtener indicadores que midan la gestión de la unidad de negocio del Departamento de Sistemas, en una  empresa que brinda soluciones integrales de sistemas, en alineación con los objetivos estratégicos de la empresa.\r\nLa metodología brinda una visión integral del sistema de negocio, que permite convertir la estrategia y la visión de la organización en objetivos e indicadores estratégicos.',
		// 'recomendations'=>'Hacer lo correcto: Significa entregar al cliente el producto con las características especificadas, en la cantidad requerida, en el tiempo pactado, en el lugar convenido y el precio estipulado. Es la satisfacción del cliente respecto del producto que se entrega.',
		// 'conclusions'=>'El uso de indicadores de gestión es una herramienta valiosa para medir y canalizar las energías, habilidades y conocimientos específicos de todos los trabajadores de la empresa, hacia la consecución de objetivos estratégicos a largo plazo.',
		// 'bibliography'=>'p 142,143,144,  3h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Plan Estratétigo - Mapa de Objetivos Estratégicos - Indicadores de medición - Implantación del Balanced Scorecard',
		// 'stand_id'=>69,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-23 21:38:17',
		// 'updated_at'=>'2018-04-23 21:38:17',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>60,
		// 'type'=>1,
		// 'clasification'=>'TESIS 226 FISI',
		// 'title'=>'Sistema de Localización y Consulta de Servicios por celular haciendo uso de la Tecnología Inalámbrica',
		// 'year'=>'2006',
		// 'school_id'=>1,
		// 'extension'=>'248',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Planteamiento Metodológico del Problema -2.-Presentación de Propuestas y Aplicativos Existentes para la solución del Problema -3.-Análisis y Selección de las tecnologías y metodologías -4.-Implementación del Sistema de Localización y Consulta de Servicios -5.-Descripción General del Procedimiento del Sistema de Localización y Consulta de Servicios por celular -6.- Especificaciones técnicas -7.-Aportes del Sistema del Localización y Consulta de Servicios por celular -8.-Conclusiones y Recomendaciones',
		// 'summary'=>'Desarrollar un sistema de localización de servicios en base a la posición del usuario de un terminal móvil es enseñarles a los proveedores de servicios un nuevo mercado aun no explotado y a los operadores de la red móvil darles nuevos abonados. Nuestra propuesta se basa en ello para desarrollar un sistema capaz de localizar al servicio ( Banco,supermercado,etc) más cercano a la posición del usuario que lo solicite.',
		// 'recomendations'=>'Nos gustaría comentar que aunque consideramos que Mysql es un motor bastante potente y se adecua perfectamente a las necesidades del proyecto es posible que en un futuro nos convenga migrar a otro tipo de gestor, sobre todo a medida que vaya creciendo la base de datos, ya que hemos comprobado que Mysql pierde mucha eficacia a la hora de manejar grandes archivos.',
		// 'conclusions'=>'La realización de este tema ha servido para notar la cantidad de factores que hay que tener en cuenta a la hora de embarcarse en un proyecto de esta magnitud. Lo primero es dar una pauta de su realización y como evaluar su exitoso desarrollo.',
		// 'bibliography'=>'p 186,187,188,189,  4h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'GSM(Global System for Mobile Communications) - GPRS(General PAcket Radio Services) - UMTS(Universal Mobile Telecomunications System)',
		// 'stand_id'=>70,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-23 21:53:24',
		// 'updated_at'=>'2018-04-23 21:53:24',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>61,
		// 'type'=>1,
		// 'clasification'=>'TESIS 225 FISI',
		// 'title'=>'Una Metodología para Sectorizar pacientes en el consumo de medicamentos aplicando DataMart y Datamining en un hospital Nacional',
		// 'year'=>'2006',
		// 'school_id'=>1,
		// 'extension'=>'111',
		
		// 'observations'=>'Contiene  ilustraciones y tablas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Planteamiento Metodológico -2.-Marco Teórico -3.-Modelado y Construcción de un DataMart como fuente de información para un algoritmo de minería de datos en hospital nacional -4.-Resultados, Discusión e Interpretación de la Investigación -Bibliografía -Lista de abreviaturas',
		// 'summary'=>'El presente trabajo , propone un método para el análisis de datos, para evaluar la forma con la que se consumen los medicamentos en un hospital peruano , poder identificar algunas realidades o características no observables que producirían desabastecimiento o insatisfacción del paciente, y para que sirva como una herramienta en la toma de decisión sobre el abastecimiento de medicamentos en el hospital.',
		// 'recomendations'=>'Complementar el trabajo, con Herramientas Especializadas de Inteligencia de Negocio  como por ejemplo: Herramientas de Reporting y Aplicación de Algoritmos de Predicción .',
		// 'conclusions'=>'Se pretende que este proyecto , sirva como modelo para futuros proyectos que tengan relación con la medicina, la psicología y en  todo campo donde se puede identificar tendencias de conductas o patrones de las mismas.',
		// 'bibliography'=>'p 106,107,  2h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Minería de Datos - DataMart - Inteligencia de Negocio - Algoritmo K-Means',
		// 'stand_id'=>70,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-23 22:05:57',
		// 'updated_at'=>'2018-04-23 22:05:57',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>62,
		// 'type'=>1,
		// 'clasification'=>'TESIS 224 FISI',
		// 'title'=>'Un algoritmo GRASP para la resolución del 3D-BPP con estabilidad estática',
		// 'year'=>'2006',
		// 'school_id'=>1,
		// 'extension'=>'99',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Técnicas de Optimización -2.-El empaquetamiento Tridimensional o 3D-BPP -3.-Algoritmo GRASP para la resolución del 3D-BPP con estabilidad estática -4.-El Sistema PackingSoft -5.-Experimentos Numéricos -Conclusiones -Recomendaciones -Referencias bibliográficas -Apéndices y anexos',
		// 'summary'=>'En esta tesis se presenta un algoritmo basado en una metaheurística GRASP que resuelve el problema del 3D-BPP con estabilidad estática. Evidenciando que con el uso de esta metaheurística se obtiene mejores resultados en comparación a los algoritmos antes aplicados al problema. LA consecuencia inmediata de este estudio se plasma en nuestro sistema computacional \"PackingSoft\", aplicado en la gestión de contenedores en la industria.',
		// 'recomendations'=>'Para un mejorar los tiempos de procesamiento que nos tome encontrar una optima solución, se recomienda llevarse a cabo en un ambiente de procesamiento paralelo. Cada procesador puede inicializarse con su propia copia del procedimiento , los datos del caso ,y una sucesión de numero de azar independiente.',
		// 'conclusions'=>'En la actualidad no existe en la literatura un aplicativo que utiliza la metodología GRASP para la resolución del BPP tres dimensiones, como consecuencia de esta tesis hemos desarrollado un aplicativo denominado PackingSoft, que genera un nuevo banco de datos para fines de pruebas en futuras investigaciones.',
		// 'bibliography'=>'p 77,78,79,80,  4h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'GRASP - Box Packing - 3D-BPP - Cutting Stock Problem',
		// 'stand_id'=>70,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-23 22:19:56',
		// 'updated_at'=>'2018-04-23 22:19:56',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>63,
		// 'type'=>1,
		// 'clasification'=>'TESIS 236 FISI',
		// 'title'=>'Implementación de una Red Peruana de Bibliotecas Digitales, utilizando el Protocolo OAI-PMH( Open Archives Initiative Protocol for Metadata Harvesting)',
		// 'year'=>'2007',
		// 'school_id'=>1,
		// 'extension'=>'112',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Introducción -2.-Objetivos -3.-Marco conceptual -4.-Metodología de Estudio -5.-Protocolo OAI-PMH -6.-Propuesta del Proyecto Red Peruana de Bibliotecas Digitales -7.-Arquitectura de la Red Peruana de Biblioteca Digitales -8.-Diseño e Implementación de la Red Peruana de Bibliotecas Digitales -9.-Análisis de los Resultados -Conclusiones - Recomendaciones - Referencias Bibliográficas - Anexo',
		// 'summary'=>'Uno de los objetivos es conocer la importancia del Proceso de Mejora Continua de protocolos para la transmisión de contenidos en internet en las Bibliotecas Digitales , ya que para eso implementaremos el protocolo de cosechamiento de metadata OAI y presentar este avance aplicado de manera particular a las tesis nacionales partiendo de sus antecedentes , pasando por su desarrollo , su filosofía , base teóricas ; y finalmente su aporte como aplicación a la biblioteca Central de la UNMSM, teniendo como fin supremo dar una herramienta de saciedad de sede de información de la masa intelectual e investigadora de nuestro país.',
		// 'recomendations'=>'Se recomienda trabajar en cada institución el tema de \"Open Access\" y lo que implica eso, ya que se relaciona mucho el libre acceso con la pirateria, las políticas y restricciones de derechos de autor, para esto hay mecanismos internacionales que se están convirtiendo en estándares como creative commons, que nos permite adherir una licencia a las publicaciones.',
		// 'conclusions'=>'Al crecer esta Red, se ha logrado que cada vez mas bibliotecas o centros de información de universidades e instituciones académicas, vean con otros ojos el rol principal de una biblioteca moderna, dejando de ser solo un centro de documentación y pasar a ser todo un centro de información.',
		// 'bibliography'=>'p 100,101,  2h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Bibliotecas Digitales - Protocolos de Internet - Metadatos - XML',
		// 'stand_id'=>70,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-23 22:33:41',
		// 'updated_at'=>'2018-04-23 22:33:41',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>64,
		// 'type'=>1,
		// 'clasification'=>'TESIS 228 FISI',
		// 'title'=>'Fiscalización del Proceso de Votación en las elecciones Generales Presidenciales Peruanas usando tecnología WAP bajo plataforma de Software Libre',
		// 'year'=>'2006',
		// 'school_id'=>1,
		// 'extension'=>'125',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Marco Teórico -2.-Estudio del Caso -3.-Método utilizado -4.-Desarrollo del Caso -5.-Conclusiones, Recomendaciones y Contribuciones -6.-Anexos -7.-Referencias bibliográficas',
		// 'summary'=>'En la presente tesis se explica la integración de la Tecnología Móvil con Tecnología Web. Se hace uso de cuestionarios idóneos hechos por expertos en materia de fiscalización electoral, cuyas respuestas son almacenadas en una base de datos usando como interfase la tecnología móvil, en este caso el uso de un celular.',
		// 'recomendations'=>'La tecnología WAP y móvil en general es relativamente nueva, la cual tiene como objetivo usar nuestro celular, PDA y otro dispositivo móvil como una herramienta que nos ayude a realizar de una manera más sencilla nuestros procesos.',
		// 'conclusions'=>'Una tecnología es una herramienta que nos ayuda a realizar mejor nuestro trabajo, como es en este caso , nuestra aplicación que hace uso de la Tecnología WAP, ayuda a mejorar y precisar la fiscalización durante el proceso e Votación.\r\nEn este caso nos ha ayudado a mejorar la fiscalización del proceso de votación haciendo uso de los cuestionario, registrados en nuestra Base de datos y visualizados desde dispositivos móviles.',
		// 'bibliography'=>'p 123,124,125,  3h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Tecnología WAP - GSM - GPRS - Servicio SMS',
		// 'stand_id'=>70,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-23 22:44:35',
		// 'updated_at'=>'2018-04-23 22:44:35',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>65,
		// 'type'=>1,
		// 'clasification'=>'TESIS 227 FISI',
		// 'title'=>'Desarrollo de una Virtual Private Network(VPN) para la interconexión de una empresa con sus sucursales en provincias y trabajadores externos',
		// 'year'=>'2006',
		// 'school_id'=>1,
		// 'extension'=>'127',
		
		// 'observations'=>'Contiene  ilustraciones.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Marco Teórico -2.-Redes Virtuales Privadas -3.-El problema -4.-Implementación de la Solución -5.-Conclusiones -6.-Recomendaciones -7.-Apéndice -8.-Bibliografía',
		// 'summary'=>'Una Red se extiende sobre un área geográfica amplia, entre departamentos , a veces un país o un continente ; además , contiene una colección de máquinas dedicadas a ejecutar programas de usuario(aplicaciones). En los últimos años las redes se han convertido en factor crítico para cualquier organización . Cada vez en mayor  medida, las redes transmiten información vital, por tanto , dichas redes cumplen con atributos tales como seguridad, confiabilidad , alcance geográfico y efectividad en costos.',
		// 'recomendations'=>'Cabe destacar que algunas aplicaciones que necesitan de procesos bastantes complejos se tienen que correr en maquinas solamente dedicadas a esas operaciones ya que como son procesos bastantes pesados como calculo de  planillas, requieren ser procesadas por maquinas potentes y dedicadas a esta labor para que no se sienta algún retardo o problema de interconexión.',
		// 'conclusions'=>'Los innegables beneficios en infraestructura y costos que ofrece la implantación de Redes Privadas Virtuales como soporte de las comunicaciones corporativas en la empresa Santo Domingo son el principal logro que otorga este proyecto de tesis en la interconexión de una empresa. Esta implementación de la VPN ofrece garantía de seguridad  en los datos y que hace fácil y factible su empleo, mucho mas cuando el medio sobre el que se montan es totalmente abierto y ,para determinados propósitos incluso hostil.',
		// 'bibliography'=>'p 125,126,127,  3h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'VPN - Interconexión',
		// 'stand_id'=>70,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-23 22:59:11',
		// 'updated_at'=>'2018-04-23 22:59:11',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>66,
		// 'type'=>1,
		// 'clasification'=>'TESIS 238 FISI',
		// 'title'=>'E-MARKETPLACE: Basado en un Arquitectura Orientada a Servicios (SOA)',
		// 'year'=>'2007',
		// 'school_id'=>1,
		// 'extension'=>'187',
		
		// 'observations'=>'Contiene ilustraciones y diagramas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Planteamiento del Problema -2.-Objetivos e Hipótesis de la Investigación -3.-Marco Teórico Conceptual -4.-Estudio de pre-factibilidad y factibilidad de un e-marketplace basado en SOA para Pymes -5.-Aplicación del SOA en un marketplace -PROMPYME',
		// 'summary'=>'El principal propósito de la presente tesis, es fomentar y difundir el uso estratégico de las Tecnologías de Información , especialmente entre las pequeñas y medianas empresas, mediante la implantación de un e-Marketplace basado en un Arquitectura Orientado a Servicios; que además de aumentar su nivel de competitividad , ofrece la posibilidad de usar métodos y/o servicios desde sus actuales sistemas, sin necesidad de hacer cambios drásticos en la actual forma de trabajo.',
		// 'recomendations'=>'Alentar a las administraciones públicas a ser pioneras en la prestación de servicios en linea y a ofrecer incentivos adecuados a las Pymes para acceder a ellos, sobre todo en ámbitos clave, como la licitación electrónica, la fiscalidad electrónica, concesión de licencias, etc.',
		// 'conclusions'=>'El E-Marketplace es una solución prometedora para todas las pequeñas y medianas empresas que deseen mejorar el nivel de venta de sus productos, y además de alguna manera estar interconectadas entre ellas, para tener un beneficio adicional.',
		// 'bibliography'=>'p 185,186,  2h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'e-Marketplace - Arquitectura Orientada a Servicios - Web Services - Pymes',
		// 'stand_id'=>70,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-24 04:28:01',
		// 'updated_at'=>'2018-04-24 04:28:01',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>67,
		// 'type'=>1,
		// 'clasification'=>'TESIS 242 FISI',
		// 'title'=>'Gestión por procesos (BPM) usando mejora continua y Reingeniería de Procesos de Negocio',
		// 'year'=>'2007',
		// 'school_id'=>1,
		// 'extension'=>'264',
		
		// 'observations'=>'Contiene ilustraciones y diagramas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Planteamiento del Problema -2.-Objetivos -3.-Marco Teórico Conceptual -4.-Metodología de la Investigación -5.-Estado del Arte -6.-Aplicación de la Metodología : Casos de Estudio -7.-Análisis e Interpretación de Resultados',
		// 'summary'=>'El siguiente trabajo tiene como objetivo presentar el paradigma de gestión por procesos, el cual es muy importante como parte principal de la estrategia organizacional. Éste concepto hoy  en día conocido como BPM( Gestión de Procesos de Negocio) consta de dos partes fundamentales: la Gestión y las Tecnologías. En éste aspecto , el presente trabajo hace énfasis en la primera parte, mostrando dos metodologías necesarias en la Gestión: La mejora continua y la Reingeniería; aplicándolas en dos casos para organizaciones reales(Telecom y DataSec).',
		// 'recomendations'=>'Antes de intentar modificar un proceso, se debe tener un entendimiento claro del proceso tal y cuál es actualmente, y no como se quisiera que sea. Esto ayudará a tener una visión completa del proceso, y evitará solucionar los problemas presentados y no las causas de los mismos.',
		// 'conclusions'=>'Con la aplicación de la Reingeniería vemos las ventajas de realizar un cambio radical en los procesos de negocio, cuando la circunstancia así lo requieren , tal y como ocurrió en DataSec. ASí mismo un gran cambio en los procesos implica, invertir en habilitadores tecnológicos que los soporten.',
		// 'bibliography'=>'p 235-242,  8h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas e Informatica',
		// 'keywords'=>'Procesos - Gestión de Procesos de Negocio(BPM) - Tecnología - Mejora Continua',
		// 'stand_id'=>71,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-24 04:42:59',
		// 'updated_at'=>'2018-04-24 04:42:59',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>68,
		// 'type'=>1,
		// 'clasification'=>'TESIS 246 FISI',
		// 'title'=>'Aplicación de la Simulación Discreta a la Optimización de la Distribución de Medicamentos en la DIRESA-JUNIN',
		// 'year'=>'2007',
		// 'school_id'=>1,
		// 'extension'=>'131',
		
		// 'observations'=>'Contiene ilustraciones y diagramas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Planteamiento del problema -2.-Objetivos -3.-Aspectos Básicos -4.-Metodología de la Investigación -5.-Conclusiones -6.-Recomendaciones',
		// 'summary'=>'El propósito fundamental de este trabajo es el desarrollo de un sistema de información que utiliza la simulación para calcular la demanda de medicamentos en los centros y puestos de salud que pertenecen a la Dirección Regional de Salud de Junín , este sistema permitirá optimizar la distribución de medicamentos; todo esto a través de la simulación discreta utilizando el método Monte Carlo.',
		// 'recomendations'=>'Se ve necesario que el comité Farmacológico de la DIRESA elabore los petitorios de medicamentos para el primer nivel de atención ( centros y puestos de salud) y se pueda trabajar en base a éste.',
		// 'conclusions'=>'El método de Monte Carlo ha demostrado ser útil para estimar la demanda de medicamentos de acuerdo a un perfil epidemiológico, pues es capaz de modelar la probabilidad que tiene cada enfermedad y la probabilidad que esta afecta a una persona de determinado grupo etáreo.',
		// 'bibliography'=>'p 129,130,131,  3h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Simulación de sistemas - Método Monte Carlo - Reducción de varianza - Suministro de medicamentos',
		// 'stand_id'=>71,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-24 04:54:21',
		// 'updated_at'=>'2018-04-24 04:54:21',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>69,
		// 'type'=>1,
		// 'clasification'=>'TESIS 252 FISI',
		// 'title'=>'Gestión de Reglas de Negocio para Optimizar Pago de impuestos predial y arbitrios en Municipalidades',
		// 'year'=>'2007',
		// 'school_id'=>1,
		// 'extension'=>'138',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Resumen -2.-Abstract -3.-Índice -4.-Tablas -5.-Gráficos -6.-Introducción -7.-Planteamiento del Problema -8.-Objetivo General -9.-Hipótesis General -10.-Identificación de las Variables -11.-Marco Teórico -12.-Metodología de Investigación -13.-Prototipos de Sistema de Caja -14.-Análisis y Recolección de Datos -15.-Análisis de datos -16.-Conclusiones y Recomendaciones -17.-Glosario de Términos -18.-Bibliografía -19.-Anexos',
		// 'summary'=>'Las reglas de negocio son lineamientos que siguen los negocios en su día a día , suelen ser explicitas o tacitas ( semejante al conocimiento) que están embebidas en procesos, aplicaciones informáticas, documentos , etc. Pueden residir en la cabeza de algunas personas o en el código fuente de programas informáticos,',
		// 'recomendations'=>'Se recomienda continuar con la investigación y buscar mayores beneficios a los contribuyentes , generalizando toda la clase de los pagos que se realizan en las municipalidades como actas matrimoniales, partidas de nacimiento , solicitud de licencias de funcionamiento,etc.',
		// 'conclusions'=>'La utilización de motores de reglas de negocio permite integrar reglas de diversos sistemas unificarlos en un repositorio y usandolo solo cuando sea necesario, esto es importante para generalizar reglas similares o comunes entre varios sistemas, haciéndolos más ligeros y más eficientes.',
		// 'bibliography'=>'p 124,125,126,  3h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Flag - Arquitectura - Interface',
		// 'stand_id'=>71,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-24 05:08:29',
		// 'updated_at'=>'2018-04-24 05:45:12',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>70,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 243 FISI',
		// 'title'=>'Una Arquitectura de e-learning basado en la integración de VoIP, audio y video',
		// 'year'=>'2007',
		// 'school_id'=>1,
		// 'extension'=>'244',
		
		// 'observations'=>'Contiene ilustraciones y gráficos.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Introducción -2.-Marco Teórico de Tecnologías Aplicadas al E-learning -3.-Sistemas de Videoconferencias en las Universidades -4.-Análisis de los datos -5.-Una Arquitectura de E-learning basado en la integración de \r\nVOIP, Audio y Video -6.-Conclusiones',
		// 'summary'=>'Esta investigación se centra principalmente en demostrar que es posible armar una arquitectura de e-learning basadas en la integración de voz,audio y video por IP soportadas por software Open Source , de tal forma que no solo pueda minimizarse en todo el mundo y con buena calidad de servicio, así como , poder realizar videoconferencias multipunto tan solo un software de control.',
		// 'recomendations'=>'Se evidenció que por la carencia de interactividad de las actuales plataformas virtuales, se ha limitado el lanzamiento de cursos virtuales, que por sus características didácticas es necesario e indispensable la interactividad, perdiéndose así, la posibilidad de llegar a  un amplio espectro del dictado de cursos en todas las materias de todos los campos.',
		// 'conclusions'=>'Se demostró que la arquitectura propuesta tiene amplia cobertura en el acceso a clases virtuales , ya que a través de Internet no solo se podrán conectar a través de sus PC\'s sino también se podrán enlazar usuarios vía terminales y dispositivos móviles de última generación sin limitación de tiempo y espacio.',
		// 'bibliography'=>'p 162,163,164,165,166,  5h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Ingeniería de Sistemas e Informática',
		// 'keywords'=>'Videoconferencia IP - Cámaras IP - videoconferencia asterisk',
		// 'stand_id'=>71,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-24 05:13:49',
		// 'updated_at'=>'2018-04-24 05:23:52',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>71,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 244 FISI',
		// 'title'=>'Participación de las empresas peruanas en el mercado electrónico minero : PROPUESTA DE UN MODELO DE FACTORES QUE AFECTAN LA PARTICIPACIÓN Y ESTRATEGIAS PARA SU DESARROLLO',
		// 'year'=>'2007',
		// 'school_id'=>1,
		// 'extension'=>'268',
		
		// 'observations'=>'Contiene ilustraciones y gráficos.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-El Problema -2.-Marco Teórico -3.-Estado del Arte -4.-Metodología de la Investigación -5.-Análisis del Modelo Adoptado para el sector minero peruano -6.-Modelo presupuesto para el marco peruano -7.-Administración estratégica para la participación',
		// 'summary'=>'El presente estudio sobre la participación de las empresas peruanas en el Mercado Electrónico Minero ( a partir de ahora MEM) , identificando las razones que estimulan y amenazan su participación, basado en estudios realizados sobre los mercados electrónicos, el intercambio electrónico de datos (EDI) y el análisis del sector minero peruano.',
		// 'recomendations'=>'Los mercados electrónicos, constructores de mercados y empresas involucradas en el sector minero deberían de hacer uso del modelo y de las estrategias propuestas como herramientas para tomar decisiones en forma óptima.',
		// 'conclusions'=>'Los factores beneficios percibidos, amenazas percibidas y presión externa engloban algunos sub. factores que no son los mismos para los compradores y proveedores; y esto debido a que en caso de los beneficios percibidos y amenazas no son los mismos para ambos , mientras el factor presión externa contiene dos sub.factores relevantes para las empresas proveedoras que son el poder del comprador y la dependencia del proveedor y que no tienen influencia en las empresas compradoras.',
		// 'bibliography'=>'p 235,236,237,238,239,240,  6h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Ingeniería de Sistemas e Informática',
		// 'keywords'=>'Mercado electrónico - sistema inter organizacional - intercambio electrónicos de datos - sector minero peruano',
		// 'stand_id'=>71,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-24 05:39:49',
		// 'updated_at'=>'2018-04-24 05:39:49',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>72,
		// 'type'=>1,
		// 'clasification'=>'TESIS 272 FISI',
		// 'title'=>'Un Estudio Algorítmico del Problema de Corte y Empaquetado 2D',
		// 'year'=>'2007',
		// 'school_id'=>1,
		// 'extension'=>'110',
		
		// 'observations'=>'Contiene ilustraciones y código de programación.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Conceptos y Notaciones Preliminares -2.-Métodos Exactos -3.-Métodos Heurísticos -4.-Meta heurísticas  -5.-Conclusiones y Perspectivas futuras -Bibliografía',
		// 'summary'=>'El problema de corte y empaquetado en dos dimensiones, es un problema NP-difícil perteneciente a la familia de problemas de la optimización combinatoria. El problema combinatorio estriba en la gran cantidad de patrones de corte que puede construirse a partir de un número determinado de requerimientos y un conjunto de objetos los cuales deben ser cortados para satisfacer estos.',
		// 'recomendations'=>'Los métodos no-guillotinables obtienen mejores resultados respecto a la pérdida residual (merma) , pero presentan mayor dificultad en la construcción de los patrones.',
		// 'conclusions'=>'De los métodos exactos el método de generación de columnas es uno de los clásicos para resolver el problema de corte y empaquetado 2D; sin embargo el más estudiado por su versatilidad para construir patrones guillotinables es el método de Wang y programación dinámica.',
		// 'bibliography'=>'p 103-110,  8h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Licenciado en Investigación Operativa',
		// 'keywords'=>'Optimización Combinatoria - Algoritmos - Heurísticas - Meta Heurísticas',
		// 'stand_id'=>50,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-25 00:37:00',
		// 'updated_at'=>'2018-04-25 00:37:00',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>73,
		// 'type'=>1,
		// 'clasification'=>'TESIS 284 FISI',
		// 'title'=>'Aplicación de Gestión de Conocimiento para la mejora de los procesos de una empresa de Courier Internacional',
		// 'year'=>'2007',
		// 'school_id'=>1,
		// 'extension'=>'125',
		
		// 'observations'=>'Contiene ilustraciones y diagramas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Planteamiento del Problema -2.-Formulación del problema -3.-Marco Teórico Conceptual -4.-Metodología de la Investigación -5.-Conclusiones -6.-Recomendaciones',
		// 'summary'=>'El presente trabajo tiene como objetivo aplicar gestión de conocimiento para la mejora de los procesos de la organización, brindando así un mejor servicio que permita obtener ventajas competitivas. \r\nSe plantea la aplicación de la gestión de conocimiento en una empresa courier local (Grupo-Scharff), para mejorar su servicio y que esto sirva de base para la fidelización de clientes, además de hacer frente a un mercado altamente cambiante y competitivo.',
		// 'recomendations'=>'Es recomendable el uso de mapas de conocimiento porque ayudan a identificar a los expertos y fuentes de conocimiento en la organización y pueden ser considerados como una técnica de ventaja competitiva.',
		// 'conclusions'=>'Para el servicio courier, en la actualidad, proveer información sobre la situación de los envios es tan importante como el servicio mismo, por ello resulta importante, para FedEX Perú, el poder brindar información actualizada, confiable, rápida y de manera oportuna a los clientes, aplicando a partir de ahora, gestión de conocimiento para la mejora de los procesos en la organización.',
		// 'bibliography'=>'p 120-123,  4h,',
		
		// 'mention'=>'Programa de Actualización Profesional para Optar el Titulo para Optar el Titulo de Ingeniero de Sistemas por la Modalidad de Suficiencia Profesional',
		// 'keywords'=>'Gestión del Conocimiento - Datos - Intranet - Conocimiento',
		// 'stand_id'=>51,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-25 00:57:04',
		// 'updated_at'=>'2018-04-25 00:57:04',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>74,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 290 FISI',
		// 'title'=>'GRASPKM en la Recuperación eficiente de la Estructura de Software',
		// 'year'=>'2007',
		// 'school_id'=>2,
		// 'extension'=>'63',
		
		// 'observations'=>'Contiene  ilustraciones y código de programación.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Introducción -2.-Clustering y Trabajos relacionados -3.-Metaheurística GRASP -4.-GRASP para el Problema del Clustering -5.-Validación de GraspKM -6.-GraspKM en el Clustering de Software -7.-Conclusiones y Trabajos Futuros',
		// 'summary'=>'El clustering puede ser abordado como un problema de optimización combinatoria cuando los clusters son una partición de un conjunto de objetos. La metaheurística GRASP es una técnica relativamente reciente que ha sido utilizada para resolver de manera eficiente múltiples problemas de optimización combinatorio.',
		// 'recomendations'=>'El método propuesto puede ser transferido su uso, al área de recuperación de información, donde se necesita encontrar grupos de documentos similares. Estos documentos generalmente se encuentran representados por vectores binarios donde 1 indica la presencia de cierta palabra en el documento; o vectores que contienen la frecuencia de ocurrencia de cierta palabra en el documento.',
		// 'conclusions'=>'El método GraspKM se concentra en dos de las principales inconvenientes del algoritmo K-Means. El inconveniente de la convergencia a óptimos locales es acometida con la forma golosa adaptativa de construir soluciones. Esta característica , a su vez, alivia el inconveniente de la inicialización , al generar soluciones iniciales de buena calidad , que ayuda a la fase MejoríaKM a encontrar una mejor solución.',
		// 'bibliography'=>'p 58-63,  6h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Ingeniería de Sistemas e Informática con mención en Ingeniería de Software',
		// 'keywords'=>'clustering - GRASP - algoritmo K-Means',
		// 'stand_id'=>51,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-25 01:46:29',
		// 'updated_at'=>'2018-04-25 01:46:29',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>75,
		// 'type'=>1,
		// 'clasification'=>'TESIS 308 FISI',
		// 'title'=>'MUSUJ QUIPU: Metodología para la preservación y publicación de documentos digitales, aplicado a la Biblioteca Central Pedro Zulen de la UNMSM',
		// 'year'=>'2007',
		// 'school_id'=>1,
		// 'extension'=>'187',
		
		// 'observations'=>'Contiene ilustraciones y diagramas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Introducción -2.-Planteamiento del Problema -3.-Biblioteca Digitales -4.-Preservación digital -5.-Revisión de estándares -6.-Recuperación de Información -7.-Metodología Musuj Quipu -8.-Análisis de los resultados obtenidos y trabajos futuros -9.-Conclusiones',
		// 'summary'=>'En este trabajo de tesis se plantea una metodología para la preservación, publicación y recuperación de los libros en formato digital, usando los estándares internacionales como la iniciativa de texto codificado(TEI), el Dublin Core(DC), y tecnologías de archivos de formatos abiertos como el XML y HTML.',
		// 'recomendations'=>'Es necesario un buen análisis de la estructura de datos que va soportar una biblioteca virtual , y que debe permitir una óptima recuperación.',
		// 'conclusions'=>'La metodología Musuj Quipu permite la preservación, publicación digital de ediciones de libros completos, organización en base de datos del metadato y organización de archivos de textos completos, indexación y recuperación eficiente e inmediata de información por contenido.',
		// 'bibliography'=>'p 140-148,  9h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Biblioteca digital - Lucene - XML - TEI',
		// 'stand_id'=>52,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-25 02:41:19',
		// 'updated_at'=>'2018-04-25 02:41:19',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>76,
		// 'type'=>1,
		// 'clasification'=>'TESIS 147 FISI',
		// 'title'=>'Implementación del Modelo CRM para una Institución Educativa: Caso de Aplicación FISI-UNMSM',
		// 'year'=>'2005',
		// 'school_id'=>1,
		// 'extension'=>'104',
		// 'dimensions'=>'30 x 32',
		// 'observations'=>'Contiene figuras y tablas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Generalidades -2.-Marco Teórico -3.-Estudio del Caso -4.-Contribución o Aporte del Proyecto -5.-Metodología de Implantación del Modelo CRM -6.-Diagnostico de la FISI en base al modelo propuesto -7.-Propuesta de Implantacón del CRM en la FISI -8.-Conclusiones y Recomendaciones',
		// 'summary'=>'CRM tiene que ver con la captura, procesamiento , análisis y distribución de datos( lo que ocurre en todos los tipos de sistemas) pero con total preocupación por el cliente ( lo que no ocurre en los sistemas tradicionales). El cliente es el centro del modelo de datos. Para el presente estudio, el cliente de la organización es el alumno , y la enseñanza el servicio, por lo tanto la implementación del modelo implica una enseñanza centrada en el alumno.',
		// 'recomendations'=>'Análisis de adaptación y posterior reevaluación constante de los procesos para observar posibles características de mejora y su aplicabilidad.',
		// 'conclusions'=>'Se puede verificar según el Test de Cameron aplicado a una muestra de 30% de personal Administrativo , que nuestra facultad en términos de cultura organizacional se encuentra sesgada hacia la rigidez y control , y en un segundo plano a la competitividad externa.',
		// 'bibliography'=>'p 101-104,  4h,',
		
		// 'mention'=>'Tesis para optar por el Título de : Ingeniero de Sistemas',
		// 'keywords'=>'CRM - OSP - Gestión del Conocimiento - Fidelización',
		// 'stand_id'=>66,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-26 03:56:58',
		// 'updated_at'=>'2018-04-26 03:56:58',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>77,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 306 FISI',
		// 'title'=>'Sistema Multi-Agente para medir la confiabilidad en las dimensiones de Disponibilidad y Fiabilidad de un sistema ERP',
		// 'year'=>'2007',
		// 'school_id'=>2,
		// 'extension'=>'87',
		// 'dimensions'=>'30 x 32',
		// 'observations'=>'Contiene ilustraciones y diagramas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Introducciòn -2.-Antecedentes -3.-Sistemas Crìticos -4.-Sistemas ERP -5.-Agentes de Software -6.-Identificación de Identificadores -7.-Modelo de Agentes -8.-El Sistema CODA -9.-Experimentos numéricos del Sistema CODA -10.-Conclusiones y Trabajos Futuros',
		// 'summary'=>'El presente trabajo busca desarrollar un modelo y un prototipo del sistema multi-agente para medir la confiabilidad en las dimensiones de disponibilidad y fiabilidad de un sistema ERP. Se describe cómo se monitorea, actualmente , los sistemas ERP, sea manualmente o con apoyo de otros sistemas; se menciona cuales son los roles que actualmente administran cada uno de estos sistemas ; se muestra el problema actual de manera gráfica; se formula el problema.',
		// 'recomendations'=>'Las empresas grandes, medianas y pequeñas pueden contar con este modelo para implementarlo dentro de su organización. Estas empresas desarrollarán los sistemas de acuerdo a los sistemas existentes, se ahorrará tanto en número de recursos humanos como por la compra de software , se contará con indicadores de disponibilidad , confiabilidad y fiabilidad para tomar medidas en caso de que estos se desvíen del curso normal.',
		// 'conclusions'=>'Se ha modelado un sistema multi-agente denominado sistema CODA que permite generar los indicadores de confiabilidad , disponibilidad y fiabilidad del sistema ERP Baan y mostrar estos indicadores a través de diagramas y tablas.',
		// 'bibliography'=>'p 86,87,  2h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Ingeniería de Sistemas e Informática con Mención en Ingeniería de Software',
		// 'keywords'=>'Sistemas críticos - Indicadores - Agentes de Software - Sistemas ERP',
		// 'stand_id'=>52,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-26 04:29:53',
		// 'updated_at'=>'2018-04-26 04:29:53',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>78,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 310 FISI',
		// 'title'=>'Adaptaciòn del algoritmo Grasp en el diseño eficiente de la interfaz gráfica de Usuario',
		// 'year'=>'2007',
		// 'school_id'=>2,
		// 'extension'=>'93',
		// 'dimensions'=>'30 x 32',
		// 'observations'=>'Contiene ilustraciones.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Introducción -2.-GUI en la Interacción Usuario - Computadora -3.-Métricas en la Evaluación de la GUI -4.-Metaheurística en la evaluación de una GUI -5.-Experimentos Numéricos -6.-Conclusiones y Futuros trabajos',
		// 'summary'=>'Existen algunos métodos en la actualidad para el mejoramiento de la interfaz gráfica de usuario(GUI), métodos que , muchas veces, se basan en la recopilación de información vía test de usuarios y en la creatividad del diseñador; de acuerdo a las funcionalidades que debe proporcionar la GUI para el procesamiento de los datos .',
		// 'recomendations'=>'Las GUI en el futuro formaran parte esencial de nuestras vidas, las computadoras realizaran casi todas nuestras tareas cotidianas y tendremos GUI por todos lados, así que preparémonos para un mundo formado por interfaces graficas de usuario.',
		// 'conclusions'=>'Tenemos que entender que las interfaces gráficas de usuarios es el inicio de la interacción entre el usuario y la computadora y que si se posee una GUI deficiente esta comunicación resultará totalmente errónea.',
		// 'bibliography'=>'p 86-89,  4h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Ingeniería de Sistemas e Informática con Mención en Ingeniería de Software',
		// 'keywords'=>'GRASP - GUI - usuario - interfaz',
		// 'stand_id'=>53,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-26 04:50:50',
		// 'updated_at'=>'2018-04-26 04:50:50',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>79,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 311 FISI',
		// 'title'=>'Un Algoritmo GRASP con Simulación Dinámica para Resolver el Problema de Cortes Irregulares',
		// 'year'=>'2007',
		// 'school_id'=>2,
		// 'extension'=>'126',
		// 'dimensions'=>'30 x 32',
		// 'observations'=>'Contiene ilustraciones y código de programación.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Introducción -2.-El problema de Cortes Irregulares en dos Dimensiones -3.-Arquitectura del Sistema -4.-Un Algoritmo GRASP para Resolver el Problema de Cortes Irregulares -5.-Posicionamiento de Objetos -6.-Dinámica de los Cuerpos -7.-Análisis de Compactación -8.-Un Sistema SimulaCort para resolver el problema de cortes irregulares -9.-Experimentos Numéricos -10.-Conclusiones y trabajos futuros',
		// 'summary'=>'El objetivo principal de este trabajo es implementar un algoritmo que permita resolver el problema de corte de piezas irregulares el cual consiste básicamente en minimizar el número de superficies que alojen a una determinada cantidad de piezas irregulares en demanda, posicionar las piezas en las respectivas superficies, permitiendo minimizar la pérdida de material.',
		// 'recomendations'=>'Sería recomendable incentivar más la investigación en esta área , puesto que la mayoría de problemas encontrados en la literatura pueden tener solución utilizando metaheuristicas.',
		// 'conclusions'=>'En este trabajo de tesis se ha propuesto un Algoritmo GRASP con Simulación Dinámica para resolver el Problema de Cortes Irregulares, el cual tiene diversas aplicaciones en al industria.',
		// 'bibliography'=>'p 100-109,  10h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Ingeniería de Sistemas e Informática con Mención en Ingeniería de Software',
		// 'keywords'=>'Problema de Corte de Piezas Irregulares - Simulación Dinámica - GRASP',
		// 'stand_id'=>53,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-26 05:16:00',
		// 'updated_at'=>'2018-04-26 05:16:00',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>80,
		// 'type'=>1,
		// 'clasification'=>'TESIS 313 FISI',
		// 'title'=>'Modelo de Gestión del Conocimiento aplicado a la Gestión de Procesos de Negocio',
		// 'year'=>'2007',
		// 'school_id'=>1,
		// 'extension'=>'164',
		// 'dimensions'=>'30 x 32',
		// 'observations'=>'Contiene ilustraciones y diagramas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Planteamiento del Problema -2.-Formulación del Problema -3.-Marco Teórico Conceptual -4.-Metodología de Términos Básicos',
		// 'summary'=>'El presente trabajo de investigación tiene como objetivo proponer un modelo de Gestión del Conocimiento que se aplique a la Gestión de Procesos de Negocio (Business Process Management, BPM) en las organizaciones , ante los enormes desafíos de competitividad, y la problemática de una deficiente gestión de los recursos intangibles, siendo entre ellos los fundamentales: el conocimiento y las personas - con sus competencias y habilidades-.',
		// 'recomendations'=>'Sería recomendable que en el alcance de futuras investigaciones o estudios se contemple Definir el Plan Estratégico de la Organización que define el programa de GC.',
		// 'conclusions'=>'La Gestión del Conocimiento posee una fuerte orientación en las personas, donde las Tecnologías de Información se presentan como una herramienta útil y necesaria para facilitar la comunicación y las relaciones entre ellas.',
		// 'bibliography'=>'p 156-159,  4h,',
		
		// 'mention'=>'Tesis para optar el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Conocimiento - BPM - Modelo - Comunicación del Conocimiento',
		// 'stand_id'=>53,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-26 05:37:55',
		// 'updated_at'=>'2018-04-26 05:37:55',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>81,
		// 'type'=>1,
		// 'clasification'=>'TESIS 337 FISI',
		// 'title'=>'Automatización del Área de Siembra de Agroindustrial Paramonga utilizando UML',
		// 'year'=>'2008',
		// 'school_id'=>1,
		// 'extension'=>'179',
		
		// 'observations'=>'Contiene ilustraciones y diagramas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Introducción General -2.-Planteamiento del Problema -3.-Marco Teórico -4.-Estado del Arte -5.-Planteamiento de la Solución  -6.-Desarrollo de la solución -7.-Conclusiones -8.-Bibliografía',
		// 'summary'=>'El presente trabajo de investigación plantea una solución a corto plazo para la problemática presentada, redefiniendo las funciones actuales de registro de parte diario y automatizando el proceso de generación de ordenes de servicio, utilizando UML y Proceso Unificado de desarrollo de software que conduce a desarrollar software con altos niveles de calidad, que se traducen en menor tiempo y costo.',
		// 'recomendations'=>'En todo trabajo o investigación , es necesario realizar planes sobre la ejecución del mismo, pues esto permitirá llevar un control de su desarrollo, así como poder tomar las medidas correctivas de ser el caso.',
		// 'conclusions'=>'El conocimiento de una gran variedad de tecnologías y herramientas, permiten proponer una mayor cantidad de alternativas de solución ante un problema en particular.',
		// 'bibliography'=>'p 165,166,  2h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'AGROINDUSTRIA - SIEMBRA - AUTOMATIZACIÓN - UML',
		// 'stand_id'=>54,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 00:05:45',
		// 'updated_at'=>'2018-04-28 00:05:45',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>82,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 330 FISI',
		// 'title'=>'Un Modelo de Tecnologías de Información de Contact Centers',
		// 'year'=>'2008',
		// 'school_id'=>1,
		// 'extension'=>'146',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Introducción -2.-Del Call Center al Contact Center -3.-Estado del Arte -4.-Un modelo de Tecnologías de Información de Contact Centers -5.-Metodología de Implantación -6.-Caso de Estudio -7.-Conclusiones y Trabajos futuros',
		// 'summary'=>'El presente trabajo describe la problemática existente en los actuales modelos de tecnología de información de Contact Centers y su relación con las demás aplicaciones basadas en la estrategia CRM de la organización y propone un modelo que resuelve esta problemática a través del uso de tecnologías de información que favorecen la integración de todos los componentes tecnológicos corporativos.',
		// 'recomendations'=>'Tecnologías de Información tales como Analytics, Up cross selling, Text Mining , Workflow, Middlewares y Sistemas Expertos resultan muy útiles como soporte de tecnología de información a plataformas de Contact Center que son críticas almacenando información del Cliente.',
		// 'conclusions'=>'Este trabajo concluye además , que la mayor dificultad de los actuales modelos de TI de Contact Centers se encuentra en la integración de su arquitectura a otros sistemas legacy de la organización , y por otro lado , la no pro actividad de los modelos tradicionales ocasiona alta insatisfacción en la \" experiencia del cliente\" con la empresa.',
		// 'bibliography'=>'p 143-146,  4h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Ingeniería de Sistemas e Informática con mención en Dirección y Gestión de Tecnologías de Información',
		// 'keywords'=>'Call Center - Contact Center - CRM - CEM',
		// 'stand_id'=>54,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 00:20:08',
		// 'updated_at'=>'2018-04-28 00:20:08',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>83,
		// 'type'=>1,
		// 'clasification'=>'TESIS 329 FISI',
		// 'title'=>'Evaluación de la capacidad de los procesos de RUP respecto a los procesos de operación de MoProSoft usando ISO/IEC 15504',
		// 'year'=>'2008',
		// 'school_id'=>1,
		// 'extension'=>'154',
		
		// 'observations'=>'Contiene ilustraciones y diagramas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Planteamiento del problema -2.-Marco teórico conceptual -3.-Aporte de investigación -4.-Observaciones, conclusiones y trabajos futuros',
		// 'summary'=>'COMPETISOFT es un proyecto iberoamericano cuyo objetivo es incrementar la productividad de las pymes desarrolladoras de software utilizando un modelo adecuado para ellas. El modelo de procesos base establecido en el proyecto es MoProSoft . También se conoce como Rational Unified Process (RUP) es un marco de trabajo de gran difusión en nuestro medio.',
		// 'recomendations'=>'Asimismo se plante la elaboración de una guía de implementación de MoProSoft utilizando Rational Unified Process.',
		// 'conclusions'=>'En este trabajo se realizó un análisis de los elementos del modelo MoProSoft y el framework de Procesos Rational Unified Process. También se llevó a cabo la determinación del análisis de cobertura de MoProSoft respecto al RUP y se hizo una evaluación para determinar el nivel de capacidad de los procesos del Mapeo.',
		// 'bibliography'=>'p 46,47,48,  3h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas e Informatica',
		// 'keywords'=>'RUP - MoProSoft - COMPETISOFT - ISO/IEC 15504',
		// 'stand_id'=>54,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 00:37:18',
		// 'updated_at'=>'2018-04-28 00:37:18',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>84,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 356 FISI',
		// 'title'=>'Un Modelo de Universidad Virtual : El caso de la Universidad Virtual de la UNMSM',
		// 'year'=>'2009',
		// 'school_id'=>1,
		// 'extension'=>'211',
		
		// 'observations'=>'Contiene gráficos  y diagramas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Introducción -2.-Marco Teórico de la Educación Virtual -3.-Estado del Arte -4.-Modelos Tecnológicos Estudiados -5.-Un Modelo de Educación Virtual -6.-Plan de Negocios de la Universidad Virtual de San Marcos -7.-Estrategia para la Implementación de la Universidad Virtual San Marcos y Aportes',
		// 'summary'=>'El desarrollo del presente trabajo ha surgido como producto de la necesidad que se da en países como el nuestro , con pocas oportunidades de que la población acceda a una universidad a seguir estudios tanto a nivel postgrado como pregrado. Creemos que la pobre o nula instrucción y débil cultura de las grandes mayorías de ciudadanos es una gran impedimento para que el país pueda salir adelante, por más que sea privilegiados en sus incontables recursos naturales que posee.',
		// 'recomendations'=>'Creemos que para llegar a implementar con éxito este proyecto, es fundamental la definición e implementación de los modelos Pedagógico y Organizacional , ya que sobre ellos depende la marcha de la futura Universidad Virtual.',
		// 'conclusions'=>'Resulta muy conveniente y oportuno desarrollar este proyecto de Universidad Virtual, dado que se cuenta con los R.R.H.H , profesionales , docentes y egresados altamente capacitados y con mucho dominio de los aspectos académicos y formativos, quienes organizados de manera multidisciplinaria , podrán diseñar , construir e implementarlo ; de manera que sea una alternativa seria que beneficie a la población marginada y menos favorecida.',
		// 'bibliography'=>'p 201-205,  6h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Ingeniería de Sistemas e Informática con mención en Dirección y Gestión de Tecnologías de Información',
		// 'keywords'=>'E-Learning - B-Learning - Capacitación a Distancia - Modelos de E-Learning',
		// 'stand_id'=>55,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 00:55:33',
		// 'updated_at'=>'2018-04-28 00:55:33',
		// 'deleted_at'=>NULL
		// ] );

		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>85,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 364 FISI',
		// 'title'=>'Una Metodología de Diseño en la Implementación de Incubadoras de Empresas de Tecnologías de Información en Universidades Peruanas y su aplicación en la UNMSM',
		// 'year'=>'2008',
		// 'school_id'=>1,
		// 'extension'=>'320',
		
		// 'observations'=>'Contiene gráficos y tablas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Introducción -2.-Marco Teórico -3.-Estado del Arte -4.-Una Metodología de Diseño en la Implementación de Incubadoras de Empresas de Tecnologías de la Información en Universidades Peruanas',
		// 'summary'=>'Las \"Incubadoras de Empresas\" están dentro de las alternativas que fueron ideadas para crear un ambiente mayor protección para la creación e implantación de nuevas empresas. Estas nacieron en la mayoría de los casos de algunas universidades con fuerte inclinación a la investigación y desarrollo en países desarrollados, ideadas como mecanismo de vinculación con la empresa y , además , para canalizar en gran medida el espíritu empresarial de sus alumnos y profesores.',
		// 'recomendations'=>'Para la implantación de esta nueva metodología de diseño, en la Universidad Mayor de San Marcos se deberán considerar todos los temas tratados en la presente investigación, se propone que para el involucramiento de la comunidad universitaria y no universitaria en el proceso de implementación.',
		// 'conclusions'=>'Los resultados demuestran claramente que la metodología , brinda todas las características que se requieren para una adecuada implementación de una incubadora de empresa, cubre los vacíos de otras investigaciones , da lineamientos a seguir para una adecuada gestión en la implementación basada en las mejores practicas internacionales en gestión de proyectos de gran envergadura y riesgos asociados , por esto es considerada como la mejor alternativa.',
		// 'bibliography'=>'p 272-279,  8h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Ingeniería de Sistemas e Informática con mención en Dirección y Gestión de Tecnologías de Información',
		// 'keywords'=>'Metodología - Incubadoras de Empresas',
		// 'stand_id'=>55,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 01:10:25',
		// 'updated_at'=>'2018-04-28 01:10:25',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>86,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 353 FISI',
		// 'title'=>'Un algoritmo GRASP para el Balanceo de Carga Multi-Objetivo en Computación Grid',
		// 'year'=>'2008',
		// 'school_id'=>1,
		// 'extension'=>'204',
		
		// 'observations'=>'Contiene gráficos  y código de programación.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Introducción -2.-Computación GRID -3.-Estado del Arte -4.-Un Modelo Matemático de Optimización para el Problema de Balanceo de Carga Multi-Objetivo en Computación GRID -5.-Algoritmos Propuestos para el Problema de Balanceo de Carga Multi-Objetivo  -6.-Sistema -7.-Experimentos numéricos -8.-Conclusiones y trabajos futuros',
		// 'summary'=>'El grid no sólo es una aplicación para interconexión de equipos de cómputo, su : concepto es tan amplio como el mismo problema a resolver, puesto que es una tecnología que ofrece una solución por medio de una estructura abierta la cual, además de permitir el manejo de recursos locales y remotos , plantea la convivencia entre sistemas distribuidos heterogéneos por: medios de redes tanto comerciales como privadas.',
		// 'recomendations'=>'Los tiempos de procesamiento podrían ser mejorados , si se modifica el algoritmo GRASP haciendo uso de una de sus variantes, para almacenar los mejores resultados obtenidos y sobre éstos mejores resultados obtenidos realizar las diferentes iteraciones.',
		// 'conclusions'=>'Los paquetes de software para implementar Computación Grid , que se han revisado en la presente investigación no han aplicado técnicas metaheurísticas, sino más bien métodos exactos.',
		// 'bibliography'=>'p 151,152,153,  3h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Ingeniería de Sistemas e Informática con mención en Dirección y Gestión de Tecnologías de Información',
		// 'keywords'=>'Computación GRID - Balanceo de Carga - Multi-Objetivo',
		// 'stand_id'=>55,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 01:22:39',
		// 'updated_at'=>'2018-04-28 01:22:39',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>87,
		// 'type'=>1,
		// 'clasification'=>'TESIS 351 FISI',
		// 'title'=>'Un Sistema de Información Ejecutiva basado en DataMart para la prevención, análisis y supervisión de las Operaciones de Lavado de Activos Caso \"CONCORDE\"',
		// 'year'=>'2008',
		// 'school_id'=>1,
		// 'extension'=>'220',
		
		// 'observations'=>'Contiene diagramas y tablas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Planteamiento del Problema -2.-Marco Teórico Conceptual -3.-Metodología de la Investigación -4.-Estado del Arte -5.-Aplicaciones de la Metodología -6.-Análisis e Interpretación de Resultados',
		// 'summary'=>'El presente trabajo tiene como objetivo presentar el diseño e implementación de una solución Business Intelligence mediante la utilización de un sistema de información ejecutiva, basado en Datamart con el fin de proporcionar apoyo a la toma de decisiones contra el blanqueo de dinero.',
		// 'recomendations'=>'A fin de explotar al máximo el recurso obtenido en base de DataMart del área de Riesgos , para futuros trabajos se recomienda la implementación de un Datawarehouse con mayores alcances para una total integración de todos los procesos de la empresa a fin de obtener un sistema que tenga bases en sus reportes de todas las áreas de manera mas detallada , al ser capaz de obtener mayor información en otros posibles cubos de Información.',
		// 'conclusions'=>'Con el Modelo de los procesos vinculados al tema de Lavado de Activos obtenido a partir de la aplicación del MSF, se logró tener un mejor entendimiento del Sistema de Prevención , Análisis y Supervisión de las actividades relacionadas al lavado de activos pudiéndose identificar las deficiencias en el sistema actual.',
		// 'bibliography'=>'p 176-179,  4h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas e Informatica',
		// 'keywords'=>'Sistema de Información Ejecutiva (EIS) - Datamart - Cubos - Procesamiento Analítico en Línea (OLAP)',
		// 'stand_id'=>55,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 01:34:18',
		// 'updated_at'=>'2018-04-28 01:34:18',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>88,
		// 'type'=>1,
		// 'clasification'=>'TESIS 434 FISI',
		// 'title'=>'Metodología Táctica para la Implantación de Sistemas de Información basado en METRICA y COBIT',
		// 'year'=>'2010',
		// 'school_id'=>1,
		// 'extension'=>'82',
		
		// 'observations'=>'Contiene diagramas y tablas.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Marco Teórico /Conceptual -3.-Estado del Arte -4.-Presentación de la Metodología -5.-Desarrollo de la Metodología -6.-Caso de Aplicación de la Metodología -7.-Conclusiones y Recomendaciones',
		// 'summary'=>'El propósito de este trabajo es proponer una metodología para la implantación de un sistema de información basándose en los lineamientos de METRICA ( metodología de planificación , desarrollo y mantenimiento de sistemas de información) y en COBIT ( Objetivos de Control para la información y Tecnologías relacionadas) el cual es un conjunto de mejores prácticas para el manejo de información.',
		// 'recomendations'=>'No es requisito pero se recomienda un conocimiento básico sobre los estándares más utilizados tales como COBIT y METRICA V3, los cuales forman parte de esta metodología.',
		// 'conclusions'=>'El proceso de puesta en marcha de un sistema de información será realizado con mayor fluidez y ordenamiento.',
		// 'bibliography'=>'p 81,  1h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'COBIT - Metodología - METRICA',
		// 'stand_id'=>34,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 01:58:52',
		// 'updated_at'=>'2018-04-28 01:58:52',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>89,
		// 'type'=>1,
		// 'clasification'=>'TESIS 385 FISI',
		// 'title'=>'Sistema de Identificación del Grado Académico del Egresado de San Marcos Vía Web y el Impacto de la Tecnología RFID',
		// 'year'=>'2009',
		// 'school_id'=>1,
		// 'extension'=>'128',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Introducción -2.-Marco Teórico -3.-Estado del Arte -4.-Caso de Estudio -5.-Aporte Teórico -6.-Aporte Práctico -7.-Conclusiones y Trabajos futuros -8.-Bibliografía',
		// 'summary'=>'Las entidades y/o empresas a nivel nacional y en el extranjero no cuentan con un sistema Web de identificación que les permita corroborar el grado académico de los alumnos egresados de la UNMSM, dado que actualmente hay una alto grado de falsificación de documentos y dentro de ellos se encuentran los grados y títulos universitarios tanto a nivel nacional como en el extranjero.',
		// 'recomendations'=>'Respecto a los trabajos futuros a realizarse podemos precisar para complementar esta investigación, el uso de la tecnología RFID en los Fotocheck de identificación del Egresado , permitiendo la gestión académica que permitirá muchos beneficios.',
		// 'conclusions'=>'El RFID es una tecnología emergente más prometedora de los últimos años, que facilitara la gestion de informacion en  todos los ámbitos de negocio, proponiendo nuevas formas de servicio y estilo de vida.',
		// 'bibliography'=>'P 122-128,  9h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'RFID - WEB',
		// 'stand_id'=>37,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 02:13:14',
		// 'updated_at'=>'2018-04-28 02:13:14',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>90,
		// 'type'=>1,
		// 'clasification'=>'TESIS 362 FISI',
		// 'title'=>'Implementación de Sistema Integrado de Calificación de Riesgo de Crédito empleando Metodología Ágil XP',
		// 'year'=>'2009',
		// 'school_id'=>1,
		// 'extension'=>'154',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Ninguno.',
		// 'content'=>'1.-Introducción -2.-Marco Teórico -3.-Estado del Arte -4.-Aporte Teórico -5.-Aporte Práctico -6.-Conclusiones y Futuros Trabajos',
		// 'summary'=>'XP intenta minimizar el riesgo en el proceso de desarrollo, contando permanentemente con la participación del cliente(usuario) , quien deberá estar en condiciones de contestar rápida y correctamente cualquier consulta del equipo de desarrollo.',
		// 'recomendations'=>'Evaluar y analizar escenarios en los que se podrían desarrollar un Sistema de Información, utilizando metodologías ágiles de forma híbridas, ya que se identificó que en algunos casos las metodologías son complementarias.',
		// 'conclusions'=>'La metodología XP, se debe contar con el líder usuario del sistema como parte del equipo, él deberá estar involucrado en el proyecto y ser capaz de resolver cualquier inquietud del equipo de desarrollo.',
		// 'bibliography'=>'p 153,154,155,  3h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'XP - Sistema Integrado',
		// 'stand_id'=>38,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 02:23:08',
		// 'updated_at'=>'2018-04-28 02:23:08',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>91,
		// 'type'=>1,
		// 'clasification'=>'TESIS 472 FISI',
		// 'title'=>'Sistema de Pronóstico de la Demanda de Productos Farmacéuticos basados en Redes Neuronales',
		// 'year'=>'2010',
		// 'school_id'=>1,
		// 'extension'=>'126',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Pronóstico de la demanda -3.-Redes Neuronales -4.-Estado del Arte -5.-Diseño de la RNA para el Pronóstico -6.-Sistema de Pronóstico -7.-Conclusiones y Trabajos futuros',
		// 'summary'=>'La supervivencia en los negocios altamente competitivos de hoy requiere una visión, precisa de la demanda para poner en marcha los planes de producción, inventario, distribución y compra dentro de las empresas ; el sector farmacéutico no es la excepción, pues los efectos de las temporadas, promociones, cambios de precios , publicidad , productos con bajo o alto nivel de movimiento y datos atípicos en general afectan en la determinación de la misma.',
		// 'recomendations'=>'Recomienda ampliar el número de parámetros y su variabilidad para obtener mayor precisión en los pronósticos realizados de acuerdo a los cambios que ocurran en el entorno de la distribuidora mencionada.',
		// 'conclusions'=>'La red neuronal seleccionada nos muestra el patrón de comportamiento de la demanda de los productos farmacéuticos. Las variables que han sido identificadas han sido cuantificadas de acuerdo a datos históricos brindados por la empresa FARMOTC y gracias a la ayuda del experto que labora en dicha empresa.',
		// 'bibliography'=>'p 97-100,  4h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Pronóstico de la demanda - Backpropagation - sector farmacéutico',
		// 'stand_id'=>39,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 02:41:59',
		// 'updated_at'=>'2018-04-28 02:41:59',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>92,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 471 FISI',
		// 'title'=>'Una Metodología de Implementación de Cluster Satelital y Radial de Empresas de TI',
		// 'year'=>'2010',
		// 'school_id'=>1,
		// 'extension'=>'151',
		
		// 'observations'=>'Contiene  ilustraciones.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Estado del Arte de Cluster de Empresas de TI -3.-Metodología Propuesta para Implementación de Cluster de Empresas de TI -4.-Conclusiones y Trabajos futuros',
		// 'summary'=>'El concepto de los Cluster de Empresas se inicia en la década de los noventa, cuando Porter en su libro llamado \"La Ventaja Competitiva de las Naciones\" desarrolla por primera vez el concepto de Cluster; en el cual argumenta que las empresas que trabajan en relación estrecha con otras, así como con instituciones que las apoyan, son generalmente más competitivas que las empresas que actúan en forma aislada.',
		// 'recomendations'=>'El método propuesto puede ser aplicado a un caso de estudio, inicialmente en forma teórica ; ejecutando las relaciones y manejo de procesos para formar un prototipo de un caso futuro real.',
		// 'conclusions'=>'La investigación presentada parte de la necesidad de buscar alternativas de buscar alternativas para impulsar nuevas estrategias de crecimiento en las empresas, especialmente de tecnologías , las cuales en un futuro se verán reflejadas en ventajas para el desarrollo de las regiones o países en los que se implemente en este caso los Clusters de empresas como estrategia.',
		// 'bibliography'=>'p 138-142,  7h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Ingeniería de Sistemas e Informática con mención en Dirección y Gestión de Tecnologías de Información',
		// 'keywords'=>'Cluster - Metodología',
		// 'stand_id'=>39,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 02:56:49',
		// 'updated_at'=>'2018-04-28 02:56:49',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>93,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 470 FISI',
		// 'title'=>'Factores Inhibidores en la Implementación de Sistemas de Gestión de la Seguridad de la Información basado en la NTP-ISO/IEC 17799 en la Administración Pública',
		// 'year'=>'2010',
		// 'school_id'=>1,
		// 'extension'=>'174',
		
		// 'observations'=>'Contiene gráficos y tablas.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Marco Teórico -3.-Metodología  -4.-Presentación y Análisis de Datos -5.-Conclusiones y Recomendaciones',
		// 'summary'=>'La tesis titulada \" Factores Inhibidores en la Implementación de Sistemas de Gestión de la Seguridad de la Información basado en la NTP-ISO/IEC 17799 en la Administración Pública\" es un estudio cuantitativo, transversal, hipotético-deductivo sobre el proceso de implantación de la Norma Técnica NTP-ISO/IEC 17799. Código de buenas prácticas para la gestión de la seguridad de la información en las Entidades del Sistema Nacional de Informática del Perú.',
		// 'recomendations'=>'Se recomienda que la ONGEI en el marco de sus atribuciones disponga en forma obligatoria la incorporación de la seguridad de la información dentro del proceso de Planeamiento Estratégico de cada una de las Instituciones asegurando que las metas presupuestarias se reflejan en el POI de las instituciones , en cumplimiento de la Ley 28411 Ley General del Sistema Nacional de Presupuesto.',
		// 'conclusions'=>'Del resultado de la investigación se tiene que los organismos públicos descentralizados adscritos a la PCM, valoran la importancia de la Norma de Seguridad para la Institución, sin embargo esto no guarda relación con el nivel de implementación alcanzado.',
		// 'bibliography'=>'p 106-110,  5h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Ingeniería de Sistemas e Informática con mención en Dirección y Gestión de Tecnologías de Información',
		// 'keywords'=>'La Agenda Digital Peruana - Oficina Nacional de Gobierno Electrónico e Informática (ONGEI) - Seguridad de la Información - Organismos Públicos Descentralizados (ODP)',
		// 'stand_id'=>39,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 03:11:54',
		// 'updated_at'=>'2018-04-28 03:11:54',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>94,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 469 FISI',
		// 'title'=>'Una Propuesta para Manejar aspectos no funcionales con un Enfoque de Ingeniería dirigida por Modelos (DADM)',
		// 'year'=>'2010',
		// 'school_id'=>2,
		// 'extension'=>'267',
		
		// 'observations'=>'Contiene ilustraciones y diagramas.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Marco Teórico -3.-Estado del Arte -4.-Modelo Conceptual DADM -5.-Diseño de la Implementación DADM -6.-Caso de Estudio -7.-Conclusiones y Trabajo Futuro',
		// 'summary'=>'Hoy en día los sistemas de información están operando en diversos campos del quehacer humano, por ejemplo en el campo de la medicina , comercio , enseñanza, etc. , la actividad humana a la que apoyan determina la criticidad de las propiedades del sistema, por ello más y más se exige que los sistemas de información sean de alta calidad, por esta exigencia el estudio en el desarrollo de software es un área muy explorada, con el objetivo de conseguir sistemas más robustos.',
		// 'recomendations'=>'Consideramos importante realizar un estudio sobre otro tipo de sistemas, ya que en nuestra propuesta sólo trabajamos con sistemas comunes de tiempo real, podríamos ampliar este estudio para incluir sistemas embebidos, sistemas enlatados, entre otros, y así ampliar el campo de utilización de esta propuesta.',
		// 'conclusions'=>'Concluimos con este trabajo de tesis que los conceptos de aspectos y desarrollo por modelos se relacionan de manera satisfactoria , son conceptos que han nacido en distintas épocas y lugares pero que se pueden complementar de manera favorable, aquí presentamos un enfoque que adiciona conocimiento a las muchas investigaciones que se han venido dando.',
		// 'bibliography'=>'p 265,266,267,  3h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Ingeniería de Sistemas e Informática con mención en Ingeniería de Software',
		// 'keywords'=>'RUP - IDM - DADM',
		// 'stand_id'=>39,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 03:25:58',
		// 'updated_at'=>'2018-04-28 03:25:58',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>95,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 468 FISI',
		// 'title'=>'Impacto del Riesgo en el Gobierno de las Tecnologías de Información y Comunicación en la Gestión y Comunicación en la Gestión Empresarial Industrial del Siglo XXI',
		// 'year'=>'2010',
		// 'school_id'=>1,
		// 'extension'=>'218',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Estado de Arte -3.-Metodología de la Investigación -4.-Presentación y Análisis de Datos -5.-Conclusiones y Recomendaciones',
		// 'summary'=>'La investigación se realizó en Lima Metropolitana y la Provincia Constitucional del Callao entre 2008 y 2009, participaron las empresas industriales metalmecánicas seleccionadas , las variables fueron la Gestión de Riesgo en el Gobierno de TI y las ventajas competitivas obtenidas.',
		// 'recomendations'=>'Todas las empresas están expuestas al riesgo operacional por lo que debe establecerse una planificación de la gestión del riesgo a través de los diversos grados de madurez en administración del riesgo.',
		// 'conclusions'=>'El objetivo de este estudio fue el de analizar , sistematizar e identificar en qué medida la implementación de un sistema de gestión del riesgo dentro del gobierno de TIC en la gestión de los procesos puede contribuir en la creación de ventajas competitivas en la gestión de los procesos de las organizaciones industriales del sector metal mecánico.',
		// 'bibliography'=>'p 197-204,  8h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Ingeniería de Sistemas e Informática con mención en Dirección y Gestión de Tecnologías de Información',
		// 'keywords'=>'Gestión de Riesgo - Gobierno Corporativo - Tecnologías de Información - Gestión Empresarial',
		// 'stand_id'=>39,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 03:38:17',
		// 'updated_at'=>'2018-04-28 03:38:17',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>96,
		// 'type'=>1,
		// 'clasification'=>'TESIS 477 FISI',
		// 'title'=>'Solución de Inteligencia de Negocios bajo la Tecnología AQL para mejorar el rendimiento del Negocio Caso : Contact Center del TACP',
		// 'year'=>'2010',
		// 'school_id'=>1,
		// 'extension'=>'70',
		
		// 'observations'=>'Contiene ilustraciones y diagramas.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Inteligencia de Negocios -3.-Estado del arte -4.-Aporte Teórico -5.-Arquitectura de IN bajo la tecnología AQL -6.-Solución de IN bajo la tecnología AQL en el Contact Center del TACP -7.-Conclusiones y trabajos futuros',
		// 'summary'=>'Este trabajo tiene por objetivo presentar una Solución de Inteligencia de Negocios bajo la metodología AQL, como apoyo en la mejora del rendimiento del negocio, ya que en estos tiempos las organizaciones se mueven en un mercado altamente competitivo donde el cubrir las necesidades y buscar la satisfacción del cliente es primordial.',
		// 'recomendations'=>'En la solución desarrollada no se ha abarcado el tema de minería de datos que nos va a permitir obtener información más relevante , tendencias de negocio, segmentación de clientes, patrones ocultos, etc. Lo cual va a permitir darle un valor agregado a los servicios que presta la organización.',
		// 'conclusions'=>'La tecnología OLAP fue buena para la época en que se implementó , pero tiene grandes desventajas. Los cubos basados en OLAP limitan a los usuarios en la cantidad de dimensiones. Las medidas son definidas al momento de la construcción pero cuando se les quiere cambiar toma tiempo.',
		// 'bibliography'=>'p 62,63,  2h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'Ventaja Comparativa - Inteligencia de Negocios - Toma de Decisiones - AQL',
		// 'stand_id'=>39,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 03:51:08',
		// 'updated_at'=>'2018-04-28 03:51:08',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>97,
		// 'type'=>1,
		// 'clasification'=>'TESIS 476 FISI',
		// 'title'=>'Estrategias de Tecnología de Sistemas y Comunicaciones para la Optimización del Tráfico Marítimo de Contenedores en el Puerto del Callao',
		// 'year'=>'2010',
		// 'school_id'=>1,
		// 'extension'=>'83',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Marco Teórico -3.-Estado del Arte -4.-Aporte Teórico -5.-Aporte Práctico',
		// 'summary'=>'Esta investigación mostrará como facilitar y mejorar el ejercicio de la planificación y ejecución de las operaciones diarias de importancia crítica para la función planificadora a mediano  y largo plazo, así que se plantea conseguir la optimización de los procesos de operación y gestión de contenedores marítimos adoptando las Tecnologías de la Información y de las Comunicaciones (TIC) e integrando armónicamente este nuevo servicio a los otros ya existentes, como el de control de la carga, en la empresa naviera y las conferencias a la que pertenece.',
		// 'recomendations'=>'Es evidente que un trabajo para un futuro inmediato tendrá que ver con la continuidad de la aplicación de los resultados obtenidos, es imperioso profundizar en las respuestas encontradas , el uso de las técnicas de evaluación estadísticas y modelos matemáticos , se indica la importancia y necesidad de desarrollar nuevos métodos y modelos para llegar a una total optimización de las operaciones.',
		// 'conclusions'=>'El resultado nos confirma la hipótesis , basados en nuestros valores , se determina que el grado de desarrollo de TIC, está directamente relacionado al grado de eficiencia en las operaciones, esto es a mas integración de los sistemas de información con las operaciones críticas de la empresa, es mejor la eficiencia y eficacia en la producción y operaciones.',
		// 'bibliography'=>'p 79,80,81,82,  4h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'TIC - Trafico marítimo - Modelo - Optimación',
		// 'stand_id'=>39,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 04:04:28',
		// 'updated_at'=>'2018-04-28 04:04:28',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>98,
		// 'type'=>1,
		// 'clasification'=>'TESIS 475 FISI',
		// 'title'=>'Un Algoritmo GRASP-Reactivo para Resolver el Problema de Cortes 1D',
		// 'year'=>'2010',
		// 'school_id'=>1,
		// 'extension'=>'83',
		
		// 'observations'=>'Contiene gráficos y tablas.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Marco Teórico -3.-Estado del Arte del Problema de Cortes 1D -4.-Un Algoritmo GRASP Reactivo -5.-Sistema de Optimización de Corte 1D -6.-Experimentos Numéricos -7.-Conclusiones  y Trabajos futuros',
		// 'summary'=>'La presente tesis propone , algoritmos GRASP Reactivo para el problema de cortes 1D, basado  en los algoritmos GRASP BFD y GRASP FFD , además , desarrolla un sistema de optimización basado en los algoritmos propuesto.',
		// 'recomendations'=>'Se puede complementar al GRASP Construcción Reactivo técnicas alternativas tales como las variantes GRASP con bias y Path Relinking.',
		// 'conclusions'=>'Se observó que el algoritmo GRASP provee una forma sencilla de implementar y obtener mejores resultados a comparación de otras meta heurísticas descritas , así mismo , ofrece flexibilidad y robustez para implementarla en algún tipo de problema específico.',
		// 'bibliography'=>'p 79-83,  5h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'GRASP Reactivo - optimización combinatoria - problema de corte - empaquetado',
		// 'stand_id'=>39,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 04:17:22',
		// 'updated_at'=>'2018-04-28 04:17:22',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>99,
		// 'type'=>1,
		// 'clasification'=>'TESIS 474 FISI',
		// 'title'=>'Sistema Experto para Diagnosticar Dificultades Respiratorias en Neonatos de Alto Riesgo usando la Metodología CommomKADS',
		// 'year'=>'2010',
		// 'school_id'=>1,
		// 'extension'=>'124',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Marco Teórico -3.-Estado del Arte -4.-Modelos del CommonKADS para el desarrollo del Sistema Experto -5.-Aporte Práctico -6.-Conclusiones y Trabajos futuros',
		// 'summary'=>'El presente trabajo propone un software basado en el conocimiento que , a través de técnicas de Inteligencia Artificial ,brinde ayuda para diagnosticar patologías causantes del síndrome de dificultad respiratoria(SDR).',
		// 'recomendations'=>'Sería muy útil poder abordar el diagnostico de otros casos de patologías respiratorias de origen pulmonar como la Enfermedad Pulmonar Crónica que complementarán el trabajo presentado.',
		// 'conclusions'=>'La metodología empleada para la construcción del sistema experto fue la de CommonKADS, metodología de facto para el desarrollo de sistemas basados en el conocimiento y que proporciona muchas bondades.',
		// 'bibliography'=>'p 97,98,99,100,101,102,  6h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'CommomKADS - Síndrome de Dificultad Respiratoria - Sistema Experto',
		// 'stand_id'=>39,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 04:27:34',
		// 'updated_at'=>'2018-04-28 04:27:34',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>100,
		// 'type'=>1,
		// 'clasification'=>'TESIS 473 FISI',
		// 'title'=>'Sistema de Optimización de cortes de Guillotina en 2D basado en algoritmo GRASP BFD Reactivo con 2 parámetros de relajación',
		// 'year'=>'2010',
		// 'school_id'=>1,
		// 'extension'=>'82',
		
		// 'observations'=>'Contiene  ilustraciones y código de programación.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Estado del Arte -3.-Algoritmo Propuesto -4.-Sistema de Optimización -5.-Pruebas -6.-Conclusiones y Trabajos futuros',
		// 'summary'=>'Este trabajo presenta el algoritmo GRASP BFD haciendo uso del método Reactivo para llegar una solución óptima , así como el agrupamiento y un método de mejoría basada en la reubicación de piezas.Asimismo, se implementó el sistema basado en el algoritmo propuesto y se realizaron las pruebas respectivas tomando instancias de prueba del Mg.José Cevallos Peralta.',
		// 'recomendations'=>'Realizar nuevas estrategias de agrupamiento tomando como base de piezas de similar dimensión ya sea por el largo o ancho y no necesariamente piezas iguales.',
		// 'conclusions'=>'Se implementó la estrategia Reactiva que nos permitió trabajar con parámetros de relajación cambiantes enfocadas a las soluciones óptimas encontradas, haciendo que las soluciones finales en el proceso de cortes de guillotina en 2 Dimensiones sean de mayor calidad.',
		// 'bibliography'=>'p 79,80,81,82,  4h,',
		
		// 'mention'=>'Tesis para obtener el Titulo Profesional de : Ingeniero de Sistemas',
		// 'keywords'=>'GRASP - reactivo - corte - agrupamiento',
		// 'stand_id'=>39,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 04:42:36',
		// 'updated_at'=>'2018-04-28 04:42:36',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>101,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 485 FISI',
		// 'title'=>'Sistema Inteligente para Calificar Alpacas en función a su Fibra Fina',
		// 'year'=>'2011',
		// 'school_id'=>1,
		// 'extension'=>'96',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Marco Teórico -3.-Estado del Arte -4.-Ingeniería del Artefacto -5.-Caso de Estudio -6.-Conclusiones y Trabajos futuros',
		// 'summary'=>'Este trabajo esta sustentado sobre publicaciones relacionadas a las características de la fibra en sus diferentes dimensiones, proponiendo una solución que permita asignar un valor característico en los individuos, que resulte equiparable entre su morfología y genética.',
		// 'recomendations'=>'Se recomienda definir un nuevo modelo que asocie elementos con múltiples marcadores moleculares.',
		// 'conclusions'=>'Se puede concluir que el artefacto tendrá un efecto positivo en la metrización y medición en los individuos. No obstante, se estima que el artefacto tiene una tendencia hacia la eficiencia, en cuanto a medir la potencialidad global del animal en relación a la fibra fina, dado a los acertados reconocimientos de patrones obtenidos.',
		// 'bibliography'=>'p 83,84,85,86,87,  5h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Ingeniería de Sistemas e Informática con mención de Gestión de la Tecnología',
		// 'keywords'=>'Redes Neuronales Artificiales - Reglas de Asociación - Fibra Fina - OFDA',
		// 'stand_id'=>40,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 05:15:47',
		// 'updated_at'=>'2018-04-28 05:15:47',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>102,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 486 FISI',
		// 'title'=>'Metodología Ágil para el Desarrollo de Software Educativo',
		// 'year'=>'2011',
		// 'school_id'=>2,
		// 'extension'=>'214',
		
		// 'observations'=>'Contiene gráficos y tablas.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Marco Teórico -3.-Estado del Arte -4.- Elaboración de la Metodología propuesta \"MADSE\" -5.-Caso de Estudio -6.-Desarrollo del Caso de Estudio -7.-Análisis de los Resultados -8.-Conclusiones y Recomendaciones',
		// 'summary'=>'En el presente trabajo se desarrolló una metodología de software orientada al desarrollo de software educativo, el cual tuvo como base el principio de los procesos ágiles y contemplado aspectos pedagógicos.',
		// 'recomendations'=>'Abordar la elaboración de SE de los tipos , Sistemas de Ejercitación y Práctica , Simuladores y Juegos, Sistemas Expertos , Sistemas Tutoriales Inteligentes (ITS ) para verificar el alcance de MADSE.',
		// 'conclusions'=>'Las metodologías tradicionales históricamente han intentado abordar la mayor cantidad de situaciones del contexto del proyecto, exigiendo un esfuerzo considerable para ser adaptadas, sobre todo en proyectos pequeños y de requisitos cambiantes.Hemos visto que las metodologías ágiles ofrecen una solución casi a medida para las necesidades cambiantes del software educativo, pero estas necesitan necesariamente la adopción de criterios didácticos y pedagógicos para satisfacer la calidad de los mismos del proceso enseñanza-aprendizaje.',
		// 'bibliography'=>'p 209-214,  6h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Ingeniería de Sistemas e Informática con mención en Ingeniería de Software',
		// 'keywords'=>'Ingeniería de Software - Metodología Ágiles - Ciclo de Vida - Software Educativo',
		// 'stand_id'=>40,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 05:31:18',
		// 'updated_at'=>'2018-04-28 05:31:18',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>103,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 541 FISI',
		// 'title'=>'Gestión del departamento de beneficios de una compañía de seguros de vida bajo la metodología del Balanced Scorecard',
		// 'year'=>'2012',
		// 'school_id'=>1,
		// 'extension'=>'109',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Marco Teórico -3.-Implementación del Balanced Scorecard o Cuadro de Mando Integral como Herramienta de Gestión -4.-Resultados',
		// 'summary'=>'El presente estudio, muestra el desarrollo de un trabajo profesional para la definición e implantación de un modelo de gestión aplicada en el departamento de beneficios de una compañía de seguros de vida, aplicando la metodología del Balanced Scorecard o Cuadro de Mando Integral desarrollada por Kaplan y Norton , con una modificación propuesta por Paul Niven para la gestión de performance de organizaciones sin fines lucro.',
		// 'recomendations'=>'Como recomendación para la implementación del Balanced Scorecard, podemos indicar la importancia de construir un mapa estratégico donde se muestre solo los objetivos que realmente son estratégicos para la organización.',
		// 'conclusions'=>'El concepto del Balanced Scorecard, herramienta seleccionada para mejorar la gestión de la organización estudiada, se muestra como una herramienta simple, al personal que labora en esta, alineando esfuerzos con el objetivo de alcanzar una meta común.',
		// 'bibliography'=>'p 70,71,  2h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Maestro en Gobierno de Tecnología de Información',
		// 'keywords'=>'procesos - tecnología de información - cuadro de mando integral - balanced scorecard',
		// 'stand_id'=>43,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 22:26:34',
		// 'updated_at'=>'2018-04-28 22:26:34',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>104,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 540 FISI',
		// 'title'=>'Proyecto de Diseño e Implementación de una Oficina de Gestión de Proyectos para La Positiva Seguros',
		// 'year'=>'2012',
		// 'school_id'=>1,
		// 'extension'=>'79',
		
		// 'observations'=>'Contiene tablas.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Marco Teórico -3.-Plan de Implementación de la PMO',
		// 'summary'=>'En el mundo empresarial existe una conciencia global de la importancia del logro de los objetivos trazados y por ende la búsqueda constante de nuevas formas para lograrlo, en ese ínterin los involucrados han venido intercambiando experiencias exitosas y no exitosas como formas de aprender de los demás.',
		// 'recomendations'=>'Culminada la implantación de la PMO, se recomienda como pasos a seguir el diseñar e implementar un proceso formal de maduración, el cual deberá basasrse en buenas prácticas internacionales tales como las definidas por el OPM3.',
		// 'conclusions'=>'La demanda por una gerencia centralizada de proyectos que permita optimizar costos y tiempos, la necesidad de formalizar los flujos de trabajo , el aumento del número de proyectos , así como la creciente complejidad de los mismos, son consideraciones suficientes que justifican la implementación de una PMO.',
		// 'bibliography'=>'p 79, 1h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Gobierno de Tecnologías de Información',
		// 'keywords'=>'PMI - PMO - Gestión de Proyectos',
		// 'stand_id'=>43,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 22:43:56',
		// 'updated_at'=>'2018-04-28 22:43:56',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>105,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 539 FISI',
		// 'title'=>'Metodología Uso Balance Scorecard para hallar la Tasa Interbancaria de la Gerencia de Operaciones Monetarias y Estabilidad Financiera',
		// 'year'=>'2012',
		// 'school_id'=>1,
		// 'extension'=>'62',
		
		// 'observations'=>'Contiene teoría.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Marco Teórico -3.-Metodología -4.-Resultado y Discusión',
		// 'summary'=>'Para el Banco Central de Reserva (BCR) es de alta importancia tener una metodología para medir el progreso actual y suministrar la dirección futura para tener mejores decisiones en función a los resultados. El Banco Central necesita ejecutar medidas preventivas para resguardar la estabilidad financiera y los mecanismos de transmisión de la política monetaria.',
		// 'recomendations'=>'Los niveles de las tasas de interés se han reducido en los últimos años en paralelo con la reducción registrada en los niveles esperados de inflación hasta tasas de un dígito y con la mayor competencia existente en el sistema financiero producto de la entrada de nuevas instituciones financieras del país y del exterior.',
		// 'conclusions'=>'La experiencia ha mostrado que los controles directos sobre la tasas de interés de las operaciones bancarias reducen la intermediación financiera e inducen su informalidad , dado que afectan los niveles de ahorro y crédito de la economía.',
		// 'bibliography'=>'p 61,62,  2h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Gobierno de Tecnología de Información',
		// 'keywords'=>'Banco Central de Reserva(BCR) - metodología - estabilidad financiera - política monetaria',
		// 'stand_id'=>43,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-28 23:06:47',
		// 'updated_at'=>'2018-04-28 23:06:47',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>106,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 544 FISI',
		// 'title'=>'Alineamiento Estratégico de las TICS con los objetivos estratégicos y su impacto en el Desarrollo Organizacional de las Consultoras de Ingenierías en el Perú, 2009-2011',
		// 'year'=>'2012',
		// 'school_id'=>1,
		// 'extension'=>'175',
		
		// 'observations'=>'Contiene gráficos y tablas.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Marco Teórico -3.-Estado de Arte -4.-Metodología de la Investigación -5.-Propuesta -6.-Análisis de Datos -7.-Conclusiones -8.-Recomendaciones -9.-Referencias Bibliográficas -10.-Apéndices',
		// 'summary'=>'El presente trabajo de investigación se justificó, porque es beneficioso para los Gerentes de TIC de las organizaciones , poder medir y ser conscientes del nivel de alineamiento que tienen actualmente, y con ello poder saber si están contribuyendo para la organización logre sus objetivos estratégicos y de esta manera caminar en el mismo rumbo.',
		// 'recomendations'=>'Para la toma de decisiones, tomar en cuenta las opiniones e información que proporcionan los empleados de la empresa , así como también el uso de herramientas informáticas que brinden información oportuna, veraz, fidedigna y en tiempo real.',
		// 'conclusions'=>'El análisis realizado demuestra que la cultura de las consultoras de ingeniería con respecto al uso de las TICs no es lo suficientemente fuerte para la optimización de los recursos , encontrándose en proceso de iniciación , debido a que la alta dirección no se encuentra convencida con el empleo de TICs.',
		// 'bibliography'=>'p 138-145,  8h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Ingeniería de Sistemas e Informática con mención en Dirección y Gestión de Tecnologías de Información',
		// 'keywords'=>'Alineamiento Estratégico - Desarrollo Organizacional - Cultura Organizacional - Gobierno Corporativo',
		// 'stand_id'=>43,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-30 19:53:27',
		// 'updated_at'=>'2018-04-30 19:53:27',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>107,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 543 FISI',
		// 'title'=>'Optimización de los procesos del departamento de Reclamos de una Compañia de Seguros, mediante la aplicación del Cuadro de Mando Integral',
		// 'year'=>'2012',
		// 'school_id'=>1,
		// 'extension'=>'109',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Marco Teórico -3.-Resultados y Discusión -4.-Impactos',
		// 'summary'=>'La presente investigación presenta la teorización de un trabajo profesional para la definición e implantación de un modelo de gestión del departamento de Reclamos de una compañía de seguros de vida, aplicando la metodología del Cuadro de Mando Integral propuesto por Kaplan y Norton, con una modificación para la gestión de performance de organizaciones sin fines de lucro.',
		// 'recomendations'=>'Como recomendación para la implementación del Cuadro de Mando Integral, podemos indicar la importancia de construir un mapa estratégico donde se muestren sólo unos cuantos objetivos que efectivamente sean estratégicos para la organización .',
		// 'conclusions'=>'Las aplicaciones de software comerciales, que trabajan en conjunto con Centrales Telefónicas, brindan soluciones de comunicación antes impensables, convirtiendo información que es emitida a través de medios síncronos a asíncronos.\r\nTal es el caso de mensajes de voz convertidos a correos electrónicos.',
		// 'bibliography'=>'p 70,71,  2h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Gobierno de Tecnología de Información',
		// 'keywords'=>'procesos - seguros - tecnología de información - Cuadro de Mando Integral',
		// 'stand_id'=>43,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-30 20:04:31',
		// 'updated_at'=>'2018-04-30 20:04:31',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>108,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 542 FISI',
		// 'title'=>'Un Modelo de Razonamiento Basado en Casos para La Captación de Requisitos en el Desarrollo de Proyectos de Software',
		// 'year'=>'2012',
		// 'school_id'=>2,
		// 'extension'=>'194',
		
		// 'observations'=>'Contiene ilustraciones y diagramas.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Marco Teórico -3.-Estado del Arte -4.-Modelo Propuesto -5.-Una Herramienta para la Captación de Requisitos aplicando CBR',
		// 'summary'=>'Los estudios muestran que una de los atrasos de los proyectos de software se encuentra en la Capacitación de Requisitos. Se sabe que el costo para reparar un error en los requisitos es 5 a 10 veces menos que en la codificación y 200 veces menos que en el mantenimiento.',
		// 'recomendations'=>'En la etapa Retener, el analista, de acuerdo a los cambios que se ha realizado a la solución del requisito , toma su criterio para retenerlos en la L.R. Se recomienda usar alguna técnica , que ayude al analista ha tomar  esta decisión, de esta forma, estaremos evitando llenar la LR con requisitos repetidos y optimizamos nuestra LR.',
		// 'conclusions'=>'El presente trabajo de investigación tiene como obejtivo general proponer un modelo para la Captación de Requisito en el desarrollo de proyectos de software aplicando Razonamiento Basado en Casos(CBR). \r\nDicho objetivo se ha cumplido al presentar el modelo CBR expuesto ampliamente en el capítulo 4, en el cual se puedo observar el éxito del empleo de esta propuesta, analizando y comparando los resultados obtenidos en los dos casos de estudio y aplicando también otras dos técnicas: Casos de Usos  y Win Win , y métricas de calidad expuestas en el capítulo 6.',
		// 'bibliography'=>'p 142-146,  5h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Ingeniería de Sistemas e Informática con mención en Ingeniería de Software',
		// 'keywords'=>'Razonamiento basado en casos - Requisito - Captación de Requisitos',
		// 'stand_id'=>43,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-30 20:18:44',
		// 'updated_at'=>'2018-04-30 20:18:44',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>109,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 550 FISI',
		// 'title'=>'Modelo de RNA para predecir la Morosidad de MicroCredito en la Baca Estatal Peruana',
		// 'year'=>'2012',
		// 'school_id'=>2,
		// 'extension'=>'137',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Marco Teórico -3.-Estado del Arte -4.-Metodología de la Investigación -5.-Ingeniería de los Artefactos -6.-Pruebas- Experimentos numéricos -7.-Conclusiones y Recomendaciones',
		// 'summary'=>'El presente trabajo de tesis pretende realizar una propuesta sobre un nuevo servicio de Microcrédito, el cual se intenta vincularlo a un aspecto muy puntual de la computación moderna aplicada, donde se muestre que es posible predecir la morosidad de los clientes, planteando un modelo basado en RNA. Este acercamiento innovador también incluirá la metodología de Minería de Datos para proyectos relacionados con redes neuronales artificiales.',
		// 'recomendations'=>'Se sugiere el estudio de otras variables de los clientes de microcréditos de otras entidades de micro finanzas que se hayan realizado, así como analizar el manejo de parámetros adicionales que puedan afectar la decisión de aprobar o no un crédito a un cliente como son: asuntos legales, aspectos locales o  regionales, etc.',
		// 'conclusions'=>'El modelo también permite al Banco de la Nación analizar otros tipos de modelos para otras áreas como son : Servicios Financieros, Tesorería, Riesgos , Fraudes, Seguridad de Información , Oficialía de Cumplimiento(lavado de activos), etc, con el apoyo de las RNA.',
		// 'bibliography'=>'p 104-108,  5h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Ingeniería de Sistemas e Informática con mención en Ingeniería de Software',
		// 'keywords'=>'Microcrédito - Redes Neuronales - Minería de Datos',
		// 'stand_id'=>43,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-30 20:34:33',
		// 'updated_at'=>'2018-04-30 20:34:33',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>110,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 549 FISI',
		// 'title'=>'Impacto de la Tecnología de la Información y Comunicación sobre la Evolución del Sector Pesca en el Perú : 2000-2009',
		// 'year'=>'2012',
		// 'school_id'=>1,
		// 'extension'=>'208',
		
		// 'observations'=>'Contiene gráficos y tablas.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Marco Teórico -3.-Estado del Arte -4.-Desarrollo de la Tesis -5.-Evaluación de Resultados -6.-Recomendaciones',
		// 'summary'=>'El desarrollo de la presente tesis  dará a conocer el impacto de la tecnología de la información y la comunicación (TIC) sobre la evolución del sector pesca nacional y es por ello que , a continuación, se realiza una breve descripción tanto del sector pesca como de la TIC y de su buen gobierno en un contexto mundial cada vez más globalizado.',
		// 'recomendations'=>'Optimizar e Integrar la Base de Datos Científica de las OPDS con la finalidad de que los investigadores tenga una sola fuente de datos para sus investigaciones.',
		// 'conclusions'=>'El sector pesquero artesanal o mejor dicho la comunidad pesquera artesanal conformada por los pescadores artesanales y los armadores pesqueros artesanales , desde ya buen tiempo se encuentra atravesando momentos difíciles debido a la disminución ostensible de los recursos hidrológicos.',
		// 'bibliography'=>'p 115,  1h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Ingeniería de Sistemas e Informática',
		// 'keywords'=>'Gobierno de TI - alineamiento estratégico - Inversiones de TI - Gobierno Corporativo',
		// 'stand_id'=>43,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-30 20:48:33',
		// 'updated_at'=>'2018-04-30 20:48:33',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>111,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 548 FISI',
		// 'title'=>'Análisis de la Aceptación de la Normativa de Tecnologías en las Instituciones Públicas del Estado Peruano',
		// 'year'=>'2012',
		// 'school_id'=>1,
		// 'extension'=>'126',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Revisión de la Literatura -3.-Metodología -4.-Presentación y Análisis de Datos -5.-Resumen y Recomendaciones',
		// 'summary'=>'La presente tesis tiene el propósito de validar la aplicacbilidad del Modelo de Aceptación de la Tecnología -TAM en un contexto como Perú; asimismo evalúa y explica la adopción de una tecnología en particular como es la NTP-ISO/IEC 12207 por los usuarios de tecnología de la información en las Instituciones Publicas, se aplico el TAM ya que goza de un mayor reconocimiento en la literatura en estas últimas décadas, con el fin de entender la fuerza que motiva o impide una adecuada relación de tecnología con los usuarios especialistas, pues es considerado como el más difícil de analizar pero en el que recae la decisión de uso de la Tecnología.',
		// 'recomendations'=>'Realizar una investigación de carácter longitudinal del modelo de aceptación de la tecnología, con el fin de saber si los trabajadores de tecnología de la información de las Instituciones Públicas modificarían su nivel de uso y aceptación de la tecnología después de pasar más tiempo expuesto a la tecnología.',
		// 'conclusions'=>'El estudio aplico la técnica de las ecuaciones estructurales(SEM) para analizar las relaciones, y simultáneamente examinar los efectos directos entre las variables latentes de interés en la presente investigación.',
		// 'bibliography'=>'p 116,117,118,119,  4h,',
		
		// 'mention'=>'Tesis para optar el Titulo profesional de : -Maestría en Dirección y Gestión de Tecnologías de Información',
		// 'keywords'=>'TAM - Instituciones Publicas - NTP-ISO/IEC 12207',
		// 'stand_id'=>43,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-30 21:03:31',
		// 'updated_at'=>'2018-04-30 21:03:31',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>112,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 547 FISI',
		// 'title'=>'Sistema Experto para el Control de los Procesos de Monitoreo , Control y Evaluación de Desempeño de los Órganos de Control Institucional del Perú',
		// 'year'=>'2012',
		// 'school_id'=>1,
		// 'extension'=>'131',
		
		// 'observations'=>'Contiene ilustraciones y tablas.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Marco Teórico -3.-Estado del Arte -4.-Propuesta del Modelo Conceptual -5.-Prototipo del Sistema Experto Propuesto -6.-Validación del Sistema -7.-Conclusiones',
		// 'summary'=>'El presente trabajo propone la automatización del monitoreo, control y evaluación de desempeño de los OCI a través de un prototipo informático, a fin de mostrar la operatividad y la factibilidad de la implementación y automatización a través del diseño y desarrollo de un Sistema Experto.',
		// 'recomendations'=>'Incrementar la base de conocimiento para que el proceso de evaluación automática a través del sistema experto , perfecciones cada vez más el proceso de evaluación y se incluya un nuevo conocimiento y variables no contempladas.',
		// 'conclusions'=>'Se ha logrado diseñar y desarrollar un sistema experto del proceso de ejecución y evaluación del Plan Anual de Control de los Órganos de Control Institucional, lograndose integrar con los otros sistemas a fin de obtener en forma automatizada un control de la ejecución de los Planes Anuales, mostrando los resultados de cumplimiento de manera objetiva y estableciendo un factor de desempeño en mérito a unidades de medida tangibles, registrados en los otros sistemas.',
		// 'bibliography'=>'p 105,106,107,108,  4h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Ingeniería de Sistemas e Informática con mención en Dirección y Gestión de Tecnologías de Información',
		// 'keywords'=>'Sistema Expertos - Auditoría - Desempeño - Contraloría',
		// 'stand_id'=>43,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-30 21:17:20',
		// 'updated_at'=>'2018-04-30 21:17:20',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>113,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 546 FISI',
		// 'title'=>'Modelo para la Medición del Nivel de la Flexibilidad de la Infraestructura de las Tecnologías de Información en las Organizaciones',
		// 'year'=>'2012',
		// 'school_id'=>1,
		// 'extension'=>'117',
		
		// 'observations'=>'Contiene ilustraciones y cuadros.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Marco Teórico -3.-Modelo Propuesto -4.-Validación del Modelo -5.-Resultados -6.-Conclusiones',
		// 'summary'=>'La presente tesis describe el desarrollo de un modelo que permite medir la flexibilidad de la infraestructura de las tecnologías de información en las organizaciones. Se analiza los modelos existentes y se propone un nuevo modelo soportado con un instrumento de medición confiable y valido que conlleve a su estandarización de la población en estudio, se utilizó procedimientos de análisis estadísticos probados en investigaciones anteriores.',
		// 'recomendations'=>'Continuar los estudios de flexibilidad de la infraestructura de tecnologías  de información y su relación con otros factores tales como la ventaja competitiva, agilidad, costos entre otros.',
		// 'conclusions'=>'Se desarrolló un modelo que permite la medición de la flexibilidad de la infraestructura de las tecnologías de información. El instrumento de medición que sustenta el modelo fue operacionalizado y juzgado confiablemente a través de rigurosos procesos estadísticos de análisis exploratorio, las dimensiones del modelo fueron valorados por expertos en el tema de las tecnologías de información.',
		// 'bibliography'=>'p 101-106,  6h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Ingeniería de Sistemas e Informática con mención en Dirección y Gestión de Tecnologías de Información',
		// 'keywords'=>'Tecnologías de información - Flexibilidad de la infraestructura de las tecnologías de información',
		// 'stand_id'=>43,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-30 21:31:03',
		// 'updated_at'=>'2018-04-30 21:31:03',
		// 'deleted_at'=>NULL
		// ] );


					
		// ThesisSpecification::create( [
		// 'adviser'=>'','thesis_id'=>114,
		// 'type'=>1,
		// 'clasification'=>'TESIS UPG 545 FISI',
		// 'title'=>'Modelo para el análisis de Impacto de Tecnologías de Información en PYMES basado en el modelo de evaluación de atributos críticos de éxito',
		// 'year'=>'2012',
		// 'school_id'=>1,
		// 'extension'=>'131',
		
		// 'observations'=>'Contiene diagramas y tablas.',
		// 'accompaniment'=>'Contiene CD',
		// 'content'=>'1.-Introducción -2.-Marco Teórico -3.-Revisión de Literatura sobre Análisis de Impacto de TIC -4.-Modelo de Evaluación de Atributos Críticos de Éxito -5.-Caso de Estudio -6.-Conclusiones y Trabajos futuros',
		// 'summary'=>'El análisis de impacto de tecnologías de información requiere permanente actualización en sus diferentes variables de análisis, por cuanto los escenarios son cambiantes y sujetos a la oferta tecnológica en el mercado, el Banco Interamericano de Desarrollo realiza una revisión a los adelantos más recientes del mundo de las tecnologías de la información  y comunicaciones ( telefonía celualar, computadorsa e Internet), emplea métodos rigurosos para evaluar sus efectos en el bienestar de las sociedades, dicha investigación nos demuestra que por sí solo no produce desarrollo económico en la región.',
		// 'recomendations'=>'Las estructuras de las Pequeñas y Medianas empresas de manera permanente van cambiando sus estrategias de negocios, incorporando nuevas tecnologías de información que le permitan mejorar sus beneficios.',
		// 'conclusions'=>'Se ha cumplido el objetivo de determinar el impacto del uso de las tecnologías de información y comunicaciones en el desempeño organizacional de la gestión de la comunicación comercial de las PYME´s.',
		// 'bibliography'=>'p 113-119,  7h,',
		
		// 'mention'=>'Tesis para optar el Grado Académico de : Magíster en Ingeniería de Sistemas e Informática con mención en Dirección y Gestión de Tecnologías de Información',
		// 'keywords'=>'Tecnologías de información y comunicaciones - Impacto de las Tecnologías - PYMES - Gestión comercial',
		// 'stand_id'=>43,
		// 'editorialId'=>17,
		// 'created_at'=>'2018-04-30 21:44:21',
		// 'updated_at'=>'2018-04-30 21:44:21',
		// 'deleted_at'=>NULL
		// ] );
			
    }
}
