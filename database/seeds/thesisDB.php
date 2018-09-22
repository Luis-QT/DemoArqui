<?php

use Illuminate\Database\Seeder;
use App\Thesis;
use App\ThesisSpecification;

class thesisDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
		Thesis::create( [
		'type'=>1,
		'clasification'=>'TESIS 001 FISI',
		'title'=>'Sistema Experto de Determinación de Autoavaluo',
		'year'=>'2002',
		'school_id'=>1,
		'stand_id'=>3,
		] );

		ThesisSpecification::create([
    	'adviser' => '',
    	'extension' => '345',
		'observations'=>'Tablas, Cuadros',
		'accompaniment'=>'Incluye 2 Cds Room',
		'content'=>'1.- Generalidades - 2.- Análisis Tributario - 3.- Redes Neuronales Artificiales - 4.- Sistema Experto de Determinación de Autoavaluo - Conclusiones - Recomendaciones.',
		'summary'=>'El presente trabajo tiene como propósito fundamental, efectuar el diseño e implantación de un Sistema Experto de Determinación de Autoavaluo, orientada a cualquier Municipalidad de nuestro país.',
		'recomendations'=>'Se recomienda implantar un modulo de información del contribuyente que se encargue del proceso de almacenamiento de todos los datos personales del mismo. Esto facilitara la generación de reportes y una adecuada actualización de datos en el momento oportuno.',
		'conclusions'=>'Todo el estudio teórico-practico relacionado a los sistemas expertos, el análisis tributario y a las redes neuronales artificiales nos ha servido para profundizar nuestros conocimientos de estos temas, y a la vez nos incentiva tener mayor interés, en el desarrollo de proyectos de investigación, que nos servirán como base durante todo nuestra carrera profesional.',
		'bibliography'=>'p, 112- 114  2 p,',
		'mention'=>'Tesis para optar el Titulo Profesional de Ingeniero de Sistemas',
		'keywords'=>'Sistema Experto, Red Neuronal Artificial, Identificación de Patrones, Autoavaluo, Impuesto predial.',
        'thesis_id' => 3,
        ]);

        DB::table('thesis_authors')->insert([
          'author_id' => 1,
          'thesis_id' => 3,
        ]);

					
		Thesis::create( [
		'type'=>1,
		'clasification'=>'TESIS 002 FISI',
		'title'=>'Implementación de una Solución para el Proceso de Auditoría',
		'year'=>'2002',
		'school_id'=>1,
		'stand_id'=>3,
		] );
			
		ThesisSpecification::create([
    	'adviser' => '',
		'extension'=>'88',
		'observations'=>'cuadros, figuras',
		'accompaniment'=>'Incluye 2 Cds Room',
		'content'=>'1.- Marco Teórico - 2.- Planteamiento Metodológico - 3.- Implementacion de una solución para le procedo de auditoria-Conclusiones-Recomendaciones-Bibliografía',
		'summary'=>'El presente trabajo tiene como propósito fundamental, mostrar la necesidad de automatizar el proceso de Auditoria para incrementar el valor agregado que brinda a las empresas.',
		'recomendations'=>'Se debe fomentar el uso de papeles de trabajo electrónicos con el objeto de ahorrar costos y compartir el conocimiento. Automatizar las labores administrativas en auditoria, considerando para ahorra tiempo, recursos económicos y soluciones desarrolladas.',
		'conclusions'=>'Una adecuada auto capacitación permitirá a un profesional de sistemas hacer frente a situaciones imprevistas. La automatización de tareas administrativas permitirá brindar un mayor agregado.',
		'bibliography'=>'p. 86 -  88  2 p,',
		'mention'=>'Tesis para optar el título de profesional de Ingeniero de Sistemas',
		'keywords'=>'Proceso de auiditoria, COBIT, costo basado en actividades, evaluación de controles.',
        'thesis_id' => 4,
        ]);

        DB::table('thesis_authors')->insert([
          'author_id' => 1,
          'thesis_id' => 4,
        ]);

		Thesis::create( [
		'type'=>1,
		'clasification'=>'TESIS 003 FISI',
		'title'=>'Desarrollo de la auditorio de sistemas informáticos en instituciones privadas y estatales',
		'year'=>'2002',
		'school_id'=>1,
		'stand_id'=>3,
		] );

		ThesisSpecification::create([
    	'adviser' => '',
		'extension'=>'160',
		'observations'=>'Incluye cuadros, figuras, tablas.',
		'accompaniment'=>'Incluye 2 CD-ROM',
		'content'=>'1.-Marco teórico 2.-Auditoria de sistemas informáticos 3.Desarrollo de la auditoria informática 4.-Normas de auditoria 5.-Caso practico de una auditoria de sistemas .-Conclusión - Recomendación - Bibliografia',
		'summary'=>'La auditoria de sistemas es una derivación de la auditoria general, sus inicios han sido fundamentados de acuerdo a el crecimiento de los sistemas de información en las empresas. En la actualidad, todas las empresas dependen de los sistemas de información, ya que todas sus transacciones guardan sus información en un sistemas informático, el cual en su activo mas valioso de la empresa. Entonces la ocupacional de todas las empresas es salvaguardar su información, debido a esta preocupación las instituciones auditan sus sistemas informáticos.',
		'recomendations'=>'La principal recomendación que debe tener un auditor de sistemas, es su capacitador de conocimiento e intuición a fin de poder detectar los problemas existentes y dar las recomendaciones necesarias a la institucion auditada, debido a ello el auditor de sistemas debe ser un profesional con una constante capacitación en las tecnologías de la información y así como tener una gran experiencia en la informática.',
		'conclusions'=>'En cuanto al trabajo de la auditoria, podemos remarcar que se necesita de gran conocimiento de informática, seriedad, minuciosidad y responsabilizada; la auditoria de sistemas debe ser conformada por personas altamente capacitadas, una auditoria mas realizada puede acarrear consecuencias drásticas para la empresa auditada, debido a que el informe de auditoria puede ser de muy bajo nivel, no detectando los problemas principales de la empresa.',
		'bibliography'=>'p,1',
		'mention'=>'Tesis para optar el titulo de  Ingeniero de Sistemas',
		'keywords'=>'Auditaría, sistemas operativos, sistemas de información.',
        'thesis_id' => 5,
        ]);

        DB::table('thesis_authors')->insert([
          'author_id' => 1,
          'thesis_id' => 5,
        ]);
					
		Thesis::create( [
		'type'=>1,
		'clasification'=>'TESIS 004 FISI',
		'title'=>'Sistema Experto de orientación vocacional ORIENTA-T',
		'year'=>'2002',
		'school_id'=>1,
		'stand_id'=>3,
		] );
		
		ThesisSpecification::create([
    	'adviser' => '',
		'extension'=>'96',
		'observations'=>'Incluye cuadros y tablas',
		'accompaniment'=>'No CD-ROM',
		'content'=>'1.- Aspectos básicos de los sistemas expertos  2.-Orientación vocacional 3.-Materia de orientación vocacional 4.-Orientación vocacional usando redes neuronales 5.-Sistema ORIENTA-T 6.-Resultados del sistema experto ORIENTA-T -Conclusiones - Bibliografía',
		'summary'=>'El presente trabajo fue concebido con la finalidad de ser útil a la sociedad. Esta dirigido a los estudiantes de los primeros universidades e institutos superiores. El sistema ORIENTA-T tiene por finalidad orientar a toda persona a elegir convenientemente la profesión mas adecuada según sus intereses. No pretende reemplazar, pero si ser de gran ayuda del momento de análisis de los test.',
		'recomendations'=>'El sistema va a ser de grana ayuda a los jóvenes y adultos para encontrar su propia vocación para que puedan desplegar sus propios recursos y elaboren un proyecto vocacional de manera autónoma, para que lleguen a dedicarse a algo que les guste, les permite ganarse la vida y sean felices.',
		'conclusions'=>'Este sistema no pretende reemplazar al psicólogo, sino que actuara como ayudante a los humanos y como consultor cuando nos e tiene acceso a la experiencia. Los resultados obtenidos personalmente de los test pueden ser utilizados para otros fines según crea conveniente el experto.',
		'bibliography'=>'p. 95 - 96 2 p,',
		'mention'=>'Tesis para optar el titulo profesional de Ingeniero de Sistemas',
		'keywords'=>'ORIENTA-T, Sistemas expertos, Base de conocimientos',
        'thesis_id' => 6,
        ]);

        DB::table('thesis_authors')->insert([
          'author_id' => 1,
          'thesis_id' => 6,
        ]);

		Thesis::create( [
		'type'=>1,
		'clasification'=>'TESIS 005 FISI',
		'title'=>'Datamart Financiero para una Empresa de Seguros y Reaseguros',
		'year'=>'2002',
		'school_id'=>1,
		'stand_id'=>3,
		] );

		ThesisSpecification::create([
    	'adviser' => '',
		'extension'=>'142',
		'observations'=>'Figuras, Cuadros',
		'accompaniment'=>'Incluye 2 CD ROM',
		'content'=>'Resumen - Abstract - Introducción - 1.- Marco teórico - 2.- Análisis de la información de gestión - 3.- Metodología - 4.- Implementacion - Conclusiones - Recomendaciones - Bibliografia.',
		'summary'=>'El presente trabajo tiene como  propósito fundamental, efectuar el análisis , diseño, construcción y explotación de una datamart financiero para una empresa de seguros y reaseguros.\r\npara ello se describe las diferentes alternativas de sistemas de inteligencia de negocios existentes, los requerimientos tanto de información como de solución de la empresa y el desarrollo del datamart financiero.',
		'recomendations'=>'El modelo del datamart vendrá dado por la forma en que el usuario necesite ver la información, mas que prestar información al modelo físico de los datos, el modelo reflejara que quieren ver los usuarios y como querrán que se les presente.',
		'conclusions'=>'La problemática actual de la compañía de Seguros y Reaseguros pacifico peruano Suiza esta referida al área de Finanzas debido a contar con información en demasiados lugares, no  relacionada, un consolidar, incongruente que impide dar a la gerencia un conocimiento claro y real de la situación financiera impidiendo una agilizacion en la toma de decisiones y limitando la posibilidad de reconocer y descu8brir nuevas oportunidades de negocio.',
		'bibliography'=>'p.138-142 p,',
		
		'mention'=>'Tesis para optar el Titulol Profesional de Licenciado en Ingenieria de Sistemas',
		'keywords'=>'Inteligencia de negocios, DataWare House, Data Mark, OLAP',
        'thesis_id' => 7,
        ]);

        DB::table('thesis_authors')->insert([
          'author_id' => 1,
          'thesis_id' => 7,
        ]);
					
		Thesis::create( [
		'type'=>1,
		'clasification'=>'TESIS 007 FISI',
		'title'=>'Planeamiento estrategico aplicado a empresa de soporte tecnologico',
		'year'=>'1',
		'school_id'=>1,
		'stand_id'=>3,
		] );

		ThesisSpecification::create([
    	'adviser' => '',
		'extension'=>'106',
		'observations'=>'Graficas',
		'accompaniment'=>'Incluye 2 CD ROM',
		'content'=>'1.- Marco teórico - 2.- Principios del planeamiento estratégico - 3.- Desarrollo del caso practico - Conclusiones y recomendaciones - Referencias bibliográficas.',
		'summary'=>'El presente trabajo describe detalladamente, el aspecto metodológico que se debe seguir, para realizar el planeamiento estratégico en cualquier empresa del sector TI. para mostrar de manera practica los resultados del presente trabajo, hemos tomado como caso de estudio a una median empresa del rubro, al que hemos denominado ZYZ S.R.L. y en el contexto de los dos primeros capítulos, se desarrolla el marco teórico genérico y especifico aplicado a ese trabajo .',
		'recomendations'=>'Recomendar la importancia del seguimiento y el control que se puede ejercer sombra la aplicación de las estrategias y la retro alimentacion que se pudiera proveer para los sucesivos estudios de planeamiento estratégico. Se recomienda definir los indices de gestión para el seguimiento de control para asignar el presupuesto necesario para la ejecución de las estrategias generales y especificas enunciadas en el presente trabajo.',
		'conclusions'=>'Considerando el entorno empresarial tan cambiante, es necesario re evaluar permanentemente los resultados obtenidos en el planeamiento estratégico realizado, ya que varias de las variables que los sustentan están en constante cambio. La prioridad con que se deban realizar estas evaluaciones, depende del grado de cambio e impacto de las variables asociadas.',
		'bibliography'=>'p, 1',
		'mention'=>'Tesis para optar el Titulol Profesional de Licenciado en Ingenieria de Sistemas',
		'keywords'=>'Planeamiento, Estrategia',
        'thesis_id' => 8,
        ]);

        DB::table('thesis_authors')->insert([
          'author_id' => 2,
          'thesis_id' => 8,
        ]);
					
		Thesis::create( [
		'type'=>1,
		'clasification'=>'TESIS 008 FISI',
		'title'=>'Sistema de soporte de Decisiones  (SSD) para las operaciones de una empresa del Sector Aeronáutico, Implementacion de un Data Mart',
		'year'=>'1',
		'school_id'=>1,
		'stand_id'=>3,
		] );

		ThesisSpecification::create([
    	'adviser' => '',
		'extension'=>'110',
		'observations'=>'Tablas, Ilustracion',
		'accompaniment'=>'Incluye 2 CD ROM',
		'content'=>'Resumen - Summary - Indice - Introducción - 1.- Generalidades - 2.- El problema - 3.- Métodos de desarrollo para data warehouse - 4.- El proyecto - Conclusiones - Recomendaciones - Bibliografia',
		'summary'=>'El presente estudio esta abocado en la aplicación de una metodología de construcción de un Data Mart como base de implementacion para un Sistema de Soporte de Decisiones (SSD),  que permita identificar, obtener, analizar y distribuir la información referida al movimiento de aeronaves para el área de operaciones de una empresa dedicada a la administración de un aeropuerto',
		'recomendations'=>'En esta parte del trabajo nos permitimos sugerir algunas consideraciones que cualquier grupo de proyecto puede tomar eb cuenta para concluir exitosa mente una solución DATAWARE HOUSING. 1. Involucrar a usuarios claves desde el inicio del proyedcto de construccion del modelo orientado al negocio. Solcuonj de las herramientas de extraccion y selección de las herramientas de consulta. 2. Visión parcial del negocio, puertas abiertas para anexar nuevos DATA MARTS, información duplicada, interpretador de resultados.',
		'conclusions'=>'Lo importante es destacar que una base de datos o sistemas de información no tienen la capacidad de resolver las necesidades informativas de toda la organización, por lo que es necesario contar con diferentes sistemas de información.',
		'bibliography'=>'p, 108-110  2 p,',
		'mention'=>'Tesis para optar el Titulo Profesional de: Ingeniero de Sistemas',
		'keywords'=>'Sistema de soporte de Decisiones, SSD, Metodología para la construcción de un SSD, Inteligencia de Negocio, Data warehouse, Data Mart, OLAP',
        'thesis_id' => 9,
        ]);

        DB::table('thesis_authors')->insert([
          'author_id' => 2,
          'thesis_id' => 9,
        ]);
					
		Thesis::create( [
		'type'=>1,
		'clasification'=>'TESIS 010 FISI',
		'title'=>'Sistema de apoyo para la toma de decisiones en la gestión de la sala de operaciones del Instituto Nacional de enfermedades Neoplasicas',
		'year'=>'1',
		'school_id'=>1,
		'stand_id'=>3,
		] );
			
		ThesisSpecification::create([
    	'adviser' => '',
		'extension'=>'140',
		'observations'=>'Tablas, Figuras',
		'accompaniment'=>'Incluye 2 CD ROM',
		'content'=>'Resumen - Abstract - Introducción - 1.- Aspectos básicos - 2.- El problema - 3.- La metodología - 4.- El  proyecto - 5.- El producto - Conclusiones - Recomendaciones - Bibliografia.',
		'summary'=>'El presente trabajo tiene como propósito fundamental el efectuar el desarrollo de un Sistema de Apoyo para la toma de Decisiones. Orientada para la gestión de la Sala de Operaciones del Instituto Nacional de Enfermedades Neoplásicas (INEN)',
		'recomendations'=>'Es conveniente antes de empezar el proyecto hacer un buen análisis para determinar las medidas y dimensiones útiles del Data Mart para no hacer posteriores modificaciones en el modelo de datos  y rutinas de migracion, que provoquen retraso en su construcción e implementacion',
		'conclusions'=>'La solución Data Mart planteada es sencilla de fácil uso y puede ser accedida a través de la web, las restricción de la información que se puede consultar al cubo',
		'bibliography'=>'p, 2',
		'mention'=>'Tesis para optar el Titulo Profesional de: Ingeniero de Sistemas',
		'keywords'=>'Data warehouse, Metodología para la construcción de un Data Warehouse, Inteligencia de Negocios, Toma de decisiones, Olap',
        'thesis_id' => 10,
        ]);

        DB::table('thesis_authors')->insert([
          'author_id' => 3,
          'thesis_id' => 10,
        ]);

		Thesis::create( [
		'type'=>1,
		'clasification'=>'TESIS 016 FISI',
		'title'=>'E-Government, Situación actual en el Perú, Estudio de otras realidades',
		'year'=>'1',
		'school_id'=>1,
		'stand_id'=>3,
		] );

		ThesisSpecification::create([
    	'adviser' => '',
		'extension'=>'192',
		'observations'=>'ninguna',
		'accompaniment'=>'ninguna',
		'content'=>'Introducción - 1.- Antecedentes - 2- Marco Teórico -3- Experiencia de E-Government a nivel mundial -4- Realidad Peruana -5- Organismos e instituciones del Estado Peruano - Bibliografia.',
		'summary'=>'Los organismos Gubernamentales de todo el mundo están evolucionando hacia el gobierno electrónico a fin de mejorar y ampliar el servicio publico a los ciudadanos. Una solución de gobierno electrónico debería tener la capacidad de proporcionar una flexible que integre infraestructura y aplicaciones  diversas.',
		'recomendations'=>'Siendo el fenomeno de cabinas unico en el Perù, es necesario que se mejore el acceso a capital por parte de mp`resas y emprendedores, por ejemplo, estimulando la aparicion de empresas de capital de riezgo (a la americana), y facilitando el contacto entre quien tiene ideas y quien tiene capital, y ademas, que se modifique los esquemas fiscales que dificulten ala aparicion de nuesvas empresas.',
		'conclusions'=>'El resultado mas visible del Gobierne Digital es su presencia en iNTERNET mas allá de la creación de sitios Web de las dependencias. el nivel 4 de gobierno electrónico indica que se generara una puerta o ventanilla uncia con la tecnología de portales  Web.',
		'bibliography'=>'p, 190-192  3 h,',
		'mention'=>'Tesis para optar el Titulo Profesional de: Ingeniero de Sistemas',
		'keywords'=>'Organismos Gubernamentales, Certificación Digital, Internet, Pagina Web, Tarifa Plana.',
        'thesis_id' => 11,
        ]);

        DB::table('thesis_authors')->insert([
          'author_id' => 3,
          'thesis_id' => 11,
        ]);

		Thesis::create( [
		'type'=>1,
		'clasification'=>'TESIS 017 FISI',
		'title'=>'Gestionando las Operaciones con los Clientes de Federal Express a través de Internet utilizando e-CRM',
		'year'=>'1',
		'school_id'=>1,
		'stand_id'=>3,
		] );

		ThesisSpecification::create([
    	'adviser' => '',
		'extension'=>'157',
		'observations'=>'ninguno',
		'accompaniment'=>'ninguno',
		'content'=>'Resumen - Abstract - Introducción - 1.- Marco teórico - 2.- Metodología para la implementacion de un CRM en la organización - 3.- El problema del área de ventas en las organizaciones del país',
		'summary'=>'El presente trabajo tiene como propósito fundamental, implementar un e-CRM  dentro de Federal Express, empresa de comercio exterior que en el Perú es representada por el Grupo Scharff.\r\nPara ello se describe previamente aspectos teóricos de lo que es un CRM y la Metodología empleada en la implantación de un e- CRM , asi mismo se hace un estudio de la problemática de las áreas de ventas y de la organización en estudio.',
		'recomendations'=>'No ver al CRM o al e-CRM como soluciones tecnológicas sino como, implantaciones metodológicas centradas en cambiar la visión del cliente dentro de la empresa.\r\nCompartir la información generada en todos los niveles de la organización, esto es importante por cuanto se debe manejar una información consolidada que permita un manejo de relaciones mas fructíferas en todos los departamentos tanto en los que tengan contacto directo con el cliente como aquellos que utilicen dicha información para fines analíticos o estadísticos.',
		'conclusions'=>'Hay diversas maneras de captar los gustos y preferencias de los clientes; si la aplicación es e-CRM o basada en técnicas de Internet es posible registrar las zonas visitadas por los clientes, el tiempo de permanencia en cada una de ellas, permitirle asociar favoritos con productos o servicios ofrecidos, ofrecerle comunicación en linea, etc.',
		'bibliography'=>'p, 158-159  2 h,',
		'mention'=>'Tesis para optar el Titulo Profesional de: Ingeniero de Sistemas',
		'keywords'=>'CRM, e-CRM, Metodología para la implantación de un CRM, Canal de contacto, Retención de clientes, Cultura Organizativa.',
        'thesis_id' => 12,
        ]);

        DB::table('thesis_authors')->insert([
          'author_id' => 1,
          'thesis_id' => 12,
        ]);

					
		Thesis::create( [
		'type'=>1,
		'clasification'=>'TESIS 020 FISI',
		'title'=>'Propuesta Tecnologica para Administrar el Conocimiento de Cosapi S.A.',
		'year'=>'2002',
		'school_id'=>1,
		'stand_id'=>3,
		] );

		ThesisSpecification::create([
    	'adviser' => '',
		'extension'=>'72',
		'observations'=>'Figuras, Tablas',
		'accompaniment'=>'ninguno',
		'content'=>'Dedicatoria - Resumen - Abstracto - Indice - 1.- Definición del problema y generalidades - 2.- Marco teórico - - 3.- Estado del arte - 4.- Metodología de la investigación - 5.- Desarrollo de la solución propuesta - Bibliografia.',
		'summary'=>'El presente trabajo de titulación documenta el estudio asociado al rol del conocimiento en las organizaciones, la gestión de este recurso en tomo a aprovechar las oportunidades de desarrollo que ofrece, y los criterios asociado a las Tecnologías de información como una herramienta de apoyo necesaria para la implementacion éxitos de la Gestión del conocimiento.',
		'recomendations'=>'-',
		'conclusions'=>'No presenta Conclusiones',
		'bibliography'=>'p, 67-72  6 h,',
		'mention'=>'Tesis para optar el Titulo Profesional de: Ingeniero de Sistemas',
		'keywords'=>'Tecnología del Conocimiento, Propuesta Tecnológica',
        'thesis_id' => 13,
        ]);

        DB::table('thesis_authors')->insert([
          'author_id' => 3,
          'thesis_id' => 13,
        ]);

    }
}
