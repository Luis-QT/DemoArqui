<?php

use Illuminate\Database\Seeder;
use App\Thesis;
use App\ThesisSpecification;
use App\ThesisCopy;
use App\Stand;

class Theses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	Stand::create([
    		'level' => 1,
	        'name' => 'P1',
	        'type' => 2,
	        'state' => 1,
    	]);

    	Stand::create([
    		'level' => 1,
	        'name' => 'P2',
	        'type' => 2,
	        'state' => 1,
    	]);

    	/** TESIS 1 */
        Thesis::create([
        	'type' => 1,
	        'clasification' => 'FISI 001',
	        'title' => 'Prototipo de una solucion de inteligencia de negocios para la informacion de las compras estatales',
	        'year' => '2013',
	        'school_id' => 1,
	        'editorial_id' => null,
	        'stand_id' => 3,
        ]);
        ThesisSpecification::create([
        	'adviser' => 'Romeo Salazar Gonzales',
        	'extension' => '345',
	        'observations' => 'Tesis de mediano tamaño',
	        'accompaniment' => 'Incluye 2 cds',
	        'content' => 'Imagine una herramienta analítica tan intuitiva que cualquiera en su empresa pueda crear informes personalizados y cuadros dinámicos con gran facilidad para explorar amplias cantidades de datos y hallar conocimientos importantes. Eso es Qlik Sense, una aplicación revolucionaria de auto-servicio de descubrimiento y visualización de datos diseñada para individuos, grupos y empresas. Qlik Sense le permite extraer con rapidez visualizaciones. La vida o el periodo de éxito de un software de inteligencia de negocios dependerá únicamente del éxito de su uso en beneficio de la empresa; si esta empresa es capaz de incrementar su nivel financiero-administrativo y sus decisiones mejoran la actuación de la empresa, el software de inteligencia de negocios seguirá presente mucho tiempo, en caso contrario será sustituido por otro que aporte mejores y más precisos resultados.',
	        'summary' => 'Herramientas de inteligencia de negocios es un tipo de software de aplicaciones diseñado para colaborar con la inteligencia de negocios (BI) en los procesos de las organizaciones. Específicamente se trata de herramientas que asisten el análisis y la presentación de los datos. La vida o el periodo de éxito de un software de inteligencia de negocios dependerá únicamente del éxito de su uso en beneficio de la empresa; si esta empresa es capaz de incrementar su nivel financiero-administrativo y sus decisiones mejoran la actuación de la empresa, el software de inteligencia de negocios seguirá presente mucho tiempo, en caso contrario será sustituido por otro que aporte mejores y más precisos resultados.',
	        'recomendations' => 'Las visualizaciones inteligentes en combinación con los datos Qlik patentados de su motor de indexación descubren todas las relaciones entre las dimensiones de datos, revelando conocimientos que habrían permanecido ocultos en los modelos tradicionales de datos basados en consultas y jerárquicos',
	        'conclusions' => 'Las visualizaciones inteligentes en combinación con los datos Qlik patentados de su motor de indexación descubren todas las relaciones entre las dimensiones de datos, revelando conocimientos que habrían permanecido ocultos en los modelos tradicionales de datos basados en consultas y jerárquicos',
	        'bibliography' => 'Laberge, Robert (2011) The Data Warehouse mentor. Practical Data Warehouse Business Intelligence Insights .Mc Graw Hill Christopher Adamson (2006) Mastering Data Warehouse Aggregates: Solutions for Star Schema Performance. Wiley. ISBN-13: 978-0471777090. Anahory S. & Murray D. (1997), Data Warehousing in the real world: A practical Guide for Building Decision Support Systems. Addison-Wesley Ed. Jill Dyché & Evan Levy (2006) Customer Data Integration: Reaching a Single Version of the Truth (SAS Institute Inc.). Wiley. ISBN-13: 978-0471916970 Franco J. M. (1997) El Data Warehouse. Ed Gestión. Han J. & Kamber M. (2001) Data Mining: Concepts and Techniques. Morgan Kaufmann.',
	        'keywords' => "Palabras Clave 1",
	        'mention' => 'Pregrado',
	        'thesis_id' => 1,
        ]);

        ThesisCopy::create([
	        'incomeNumber' => '000001',
         	'barcode' => '200000000001',
         	'copy' => 1,
         	'availability' => 1,
         	'thesis_id' => 1
        ]);

        ThesisCopy::create([
	        'incomeNumber' => '000002',
	        'barcode' => '200000000002',
	        'copy' => 2,
	        'availability' => 1,
	        'thesis_id' => 1
	    ]);


        /* TESIS 2 */
        Thesis::create([
        	'type' => 2,
	        'clasification' => 'FISI 002',
	        'title' => 'Guia referencial para el plan de contingencia en un centro de computo para una entidad educativa',
	        'year' => '2015',
	        'school_id' => 2,
	        'editorial_id' => null,
	        'stand_id' => 2,
        ]);

        ThesisSpecification::create([
        	'adviser' => 'Pedro Diaz Flores',
        	'extension' => '345',
	        'observations' => 'Tesis de mediano tamaño',
	        'accompaniment' => 'Incluye 1 cd',
	        'summary' => 'Herramientas de inteligencia de negocios es un tipo de software de aplicaciones diseñado para colaborar con la inteligencia de negocios (BI) en los procesos de las organizaciones. Específicamente se trata de herramientas que asisten el análisis y la presentación de los datos. La vida o el periodo de éxito de un software de inteligencia de negocios dependerá únicamente del éxito de su uso en beneficio de la empresa; si esta empresa es capaz de incrementar su nivel financiero-administrativo y sus decisiones mejoran la actuación de la empresa, el software de inteligencia de negocios seguirá presente mucho tiempo, en caso contrario será sustituido por otro que aporte mejores y más precisos resultados.',
	        'content' => 'magine una herramienta analítica tan intuitiva que cualquiera en su empresa pueda crear informes personalizados y cuadros dinámicos con gran facilidad para explorar amplias cantidades de datos y hallar conocimientos importantes. Eso es Qlik Sense, una aplicación revolucionaria de auto-servicio de descubrimiento y visualización de datos diseñada para individuos, grupos y empresas. Qlik Sense le permite extraer con rapidez visualizaciones. La vida o el periodo de éxito de un software de inteligencia de negocios dependerá únicamente del éxito de su uso en beneficio de la empresa; si esta empresa es capaz de incrementar su nivel financiero-administrativo y sus decisiones mejoran la actuación de la empresa, el software de inteligencia de negocios seguirá presente mucho tiempo, en caso contrario será sustituido por otro que aporte mejores y más precisos resultados.',
	        'conclusions' => 'Las visualizaciones inteligentes en combinación con los datos Qlik patentados de su motor de indexación descubren todas las relaciones entre las dimensiones de datos, revelando conocimientos que habrían permanecido ocultos en los modelos tradicionales de datos basados en consultas y jerárquicos',
	        'recomendations' => 'Las visualizaciones inteligentes en combinación con los datos Qlik patentados de su motor de indexación descubren todas las relaciones entre las dimensiones de datos, revelando conocimientos que habrían permanecido ocultos en los modelos tradicionales de datos basados en consultas y jerárquicos',
	        'bibliography' => 'Laberge, Robert (2011) The Data Warehouse mentor. Practical Data Warehouse Business Intelligence Insights .Mc Graw Hill Christopher Adamson (2006) Mastering Data Warehouse Aggregates: Solutions for Star Schema Performance. Wiley. ISBN-13: 978-0471777090. Anahory S. & Murray D. (1997), Data Warehousing in the real world: A practical Guide for Building Decision Support Systems. Addison-Wesley Ed. Jill Dyché & Evan Levy (2006) Customer Data Integration: Reaching a Single Version of the Truth (SAS Institute Inc.). Wiley. ISBN-13: 978-0471916970 Franco J. M. (1997) El Data Warehouse. Ed Gestión. Han J. & Kamber M. (2001) Data Mining: Concepts and Techniques. Morgan Kaufmann.',
	        'keywords' => "Inteligencia de Negocios",
	        'mention' => 'Pregrado',
	        'thesis_id' => 2,
        ]);

        ThesisCopy::create([
	        'incomeNumber' => '000003',
	        'barcode' => '200000000003',
	        'copy' => 1,
	        'availability' => 1,
	        'thesis_id' => 2
	    ]);

    }
}
