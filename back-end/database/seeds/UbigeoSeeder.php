<?php

use Illuminate\Database\Seeder;

use App\Departamento;
use App\Distrito;
use App\Provincia;

class UbigeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departmentos = [
            ["id"=>"010000", "nombre"=>"AMAZONAS"],
            ["id"=>"020000", "nombre"=>"ANCASH"],
            ["id"=>"030000", "nombre"=>"APURIMAC"],
            ["id"=>"040000", "nombre"=>"AREQUIPA"],
            ["id"=>"050000", "nombre"=>"AYACUCHO"],
            ["id"=>"060000", "nombre"=>"CAJAMARCA"],
            ["id"=>"070000", "nombre"=>"CALLAO"],
            ["id"=>"080000", "nombre"=>"CUSCO"],
            ["id"=>"090000", "nombre"=>"HUANCAVELICA"],
            ["id"=>"100000", "nombre"=>"HUANUCO"],
            ["id"=>"110000", "nombre"=>"ICA"],
            ["id"=>"120000", "nombre"=>"JUNIN"],
            ["id"=>"130000", "nombre"=>"LA LIBERTAD"],
            ["id"=>"140000", "nombre"=>"LAMBAYEQUE"],
            ["id"=>"150000", "nombre"=>"LIMA"],
            ["id"=>"160000", "nombre"=>"LORETO"],
            ["id"=>"170000", "nombre"=>"MADRE DE DIOS"],
            ["id"=>"180000", "nombre"=>"MOQUEGUA"],
            ["id"=>"190000", "nombre"=>"PASCO"],
            ["id"=>"200000", "nombre"=>"PIURA"],
            ["id"=>"210000", "nombre"=>"PUNO"],
            ["id"=>"220000", "nombre"=>"SAN MARTIN"],
            ["id"=>"230000", "nombre"=>"TACNA"],
            ["id"=>"240000", "nombre"=>"TUMBES"],
            ["id"=>"250000", "nombre"=>"UCAYALI"]
        ];

        Departamento::insert($departmentos);

        $provincias = [
            ["id"=>"010100", "departamento_id"=>"010000","nombre"=>"CHACHAPOYAS"],
            ["id"=>"010200", "departamento_id"=>"010000","nombre"=>"BAGUA"],
            ["id"=>"010300", "departamento_id"=>"010000","nombre"=>"BONGARA"],
            ["id"=>"010400", "departamento_id"=>"010000","nombre"=>"CONDORCANQUI"],
            ["id"=>"010500", "departamento_id"=>"010000","nombre"=>"LUYA"],
            ["id"=>"010600", "departamento_id"=>"010000","nombre"=>"RODRIGUEZ DE MENDOZA"],
            ["id"=>"010700", "departamento_id"=>"010000","nombre"=>"UTCUBAMBA"],
            ["id"=>"020100", "departamento_id"=>"020000","nombre"=>"HUARAZ"],
            ["id"=>"020200", "departamento_id"=>"020000","nombre"=>"AIJA"],
            ["id"=>"020300", "departamento_id"=>"020000","nombre"=>"ANTONIO RAYMONDI"],
            ["id"=>"020400", "departamento_id"=>"020000","nombre"=>"ASUNCION"],
            ["id"=>"020500", "departamento_id"=>"020000","nombre"=>"BOLOGNESI"],
            ["id"=>"020600", "departamento_id"=>"020000","nombre"=>"CARHUAZ"],
            ["id"=>"020700", "departamento_id"=>"020000","nombre"=>"CARLOS FERMIN FITZCARRALD"],
            ["id"=>"020800", "departamento_id"=>"020000","nombre"=>"CASMA"],
            ["id"=>"020900", "departamento_id"=>"020000","nombre"=>"CORONGO"],
            ["id"=>"021000", "departamento_id"=>"020000","nombre"=>"HUARI"],
            ["id"=>"021100", "departamento_id"=>"020000","nombre"=>"HUARMEY"],
            ["id"=>"021200", "departamento_id"=>"020000","nombre"=>"HUAYLAS"],
            ["id"=>"021300", "departamento_id"=>"020000","nombre"=>"MARISCAL LUZURIAGA"],
            ["id"=>"021400", "departamento_id"=>"020000","nombre"=>"OCROS"],
            ["id"=>"021500", "departamento_id"=>"020000","nombre"=>"PALLASCA"],
            ["id"=>"021600", "departamento_id"=>"020000","nombre"=>"POMABAMBA"],
            ["id"=>"021700", "departamento_id"=>"020000","nombre"=>"RECUAY"],
            ["id"=>"021800", "departamento_id"=>"020000","nombre"=>"SANTA"],
            ["id"=>"021900", "departamento_id"=>"020000","nombre"=>"SIHUAS"],
            ["id"=>"022000", "departamento_id"=>"020000","nombre"=>"YUNGAY"],
            ["id"=>"030100", "departamento_id"=>"030000","nombre"=>"ABANCAY"],
            ["id"=>"030200", "departamento_id"=>"030000","nombre"=>"ANDAHUAYLAS"],
            ["id"=>"030300", "departamento_id"=>"030000","nombre"=>"ANTABAMBA"],
            ["id"=>"030400", "departamento_id"=>"030000","nombre"=>"AYMARAES"],
            ["id"=>"030500", "departamento_id"=>"030000","nombre"=>"COTABAMBAS"],
            ["id"=>"030600", "departamento_id"=>"030000","nombre"=>"CHINCHEROS"],
            ["id"=>"030700", "departamento_id"=>"030000","nombre"=>"GRAU"],
            ["id"=>"040100", "departamento_id"=>"040000","nombre"=>"AREQUIPA"],
            ["id"=>"040200", "departamento_id"=>"040000","nombre"=>"CAMANA"],
            ["id"=>"040300", "departamento_id"=>"040000","nombre"=>"CARAVELI"],
            ["id"=>"040400", "departamento_id"=>"040000","nombre"=>"CASTILLA"],
            ["id"=>"040500", "departamento_id"=>"040000","nombre"=>"CAYLLOMA"],
            ["id"=>"040600", "departamento_id"=>"040000","nombre"=>"CONDESUYOS"],
            ["id"=>"040700", "departamento_id"=>"040000","nombre"=>"ISLAY"],
            ["id"=>"040800", "departamento_id"=>"040000","nombre"=>"LA UNION"],
            ["id"=>"050100", "departamento_id"=>"050000","nombre"=>"HUAMANGA"],
            ["id"=>"050200", "departamento_id"=>"050000","nombre"=>"CANGALLO"],
            ["id"=>"050300", "departamento_id"=>"050000","nombre"=>"HUANCA SANCOS"],
            ["id"=>"050400", "departamento_id"=>"050000","nombre"=>"HUANTA"],
            ["id"=>"050500", "departamento_id"=>"050000","nombre"=>"LA MAR"],
            ["id"=>"050600", "departamento_id"=>"050000","nombre"=>"LUCANAS"],
            ["id"=>"050700", "departamento_id"=>"050000","nombre"=>"PARINACOCHAS"],
            ["id"=>"050800", "departamento_id"=>"050000","nombre"=>"PAUCAR DEL SARA SARA"],
            ["id"=>"050900", "departamento_id"=>"050000","nombre"=>"SUCRE"],
            ["id"=>"051000", "departamento_id"=>"050000","nombre"=>"VICTOR FAJARDO"],
            ["id"=>"051100", "departamento_id"=>"050000","nombre"=>"VILCAS HUAMAN"],
            ["id"=>"060100", "departamento_id"=>"060000","nombre"=>"CAJAMARCA"],
            ["id"=>"060200", "departamento_id"=>"060000","nombre"=>"CAJABAMBA"],
            ["id"=>"060300", "departamento_id"=>"060000","nombre"=>"CELENDIN"],
            ["id"=>"060400", "departamento_id"=>"060000","nombre"=>"CHOTA"],
            ["id"=>"060500", "departamento_id"=>"060000","nombre"=>"CONTUMAZA"],
            ["id"=>"060600", "departamento_id"=>"060000","nombre"=>"CUTERVO"],
            ["id"=>"060700", "departamento_id"=>"060000","nombre"=>"HUALGAYOC"],
            ["id"=>"060800", "departamento_id"=>"060000","nombre"=>"JAEN"],
            ["id"=>"060900", "departamento_id"=>"060000","nombre"=>"SAN IGNACIO"],
            ["id"=>"061000", "departamento_id"=>"060000","nombre"=>"SAN MARCOS"],
            ["id"=>"061100", "departamento_id"=>"060000","nombre"=>"SAN MIGUEL"],
            ["id"=>"061200", "departamento_id"=>"060000","nombre"=>"SAN PABLO"],
            ["id"=>"061300", "departamento_id"=>"060000","nombre"=>"SANTA CRUZ"],
            ["id"=>"070100", "departamento_id"=>"070000","nombre"=>"CALLAO"],
            ["id"=>"080100", "departamento_id"=>"080000","nombre"=>"CUSCO"],
            ["id"=>"080200", "departamento_id"=>"080000","nombre"=>"ACOMAYO"],
            ["id"=>"080300", "departamento_id"=>"080000","nombre"=>"ANTA"],
            ["id"=>"080400", "departamento_id"=>"080000","nombre"=>"CALCA"],
            ["id"=>"080500", "departamento_id"=>"080000","nombre"=>"CANAS"],
            ["id"=>"080600", "departamento_id"=>"080000","nombre"=>"CANCHIS"],
            ["id"=>"080700", "departamento_id"=>"080000","nombre"=>"CHUMBIVILCAS"],
            ["id"=>"080800", "departamento_id"=>"080000","nombre"=>"ESPINAR"],
            ["id"=>"080900", "departamento_id"=>"080000","nombre"=>"LA CONVENCION"],
            ["id"=>"081000", "departamento_id"=>"080000","nombre"=>"PARURO"],
            ["id"=>"081100", "departamento_id"=>"080000","nombre"=>"PAUCARTAMBO"],
            ["id"=>"081200", "departamento_id"=>"080000","nombre"=>"QUISPICANCHI"],
            ["id"=>"081300", "departamento_id"=>"080000","nombre"=>"URUBAMBA"],
            ["id"=>"090100", "departamento_id"=>"090000","nombre"=>"HUANCAVELICA"],
            ["id"=>"090200", "departamento_id"=>"090000","nombre"=>"ACOBAMBA"],
            ["id"=>"090300", "departamento_id"=>"090000","nombre"=>"ANGARAES"],
            ["id"=>"090400", "departamento_id"=>"090000","nombre"=>"CASTROVIRREYNA"],
            ["id"=>"090500", "departamento_id"=>"090000","nombre"=>"CHURCAMPA"],
            ["id"=>"090600", "departamento_id"=>"090000","nombre"=>"HUAYTARA"],
            ["id"=>"090700", "departamento_id"=>"090000","nombre"=>"TAYACAJA"],
            ["id"=>"100100", "departamento_id"=>"100000","nombre"=>"HUANUCO"],
            ["id"=>"100200", "departamento_id"=>"100000","nombre"=>"AMBO"],
            ["id"=>"100300", "departamento_id"=>"100000","nombre"=>"DOS DE MAYO"],
            ["id"=>"100400", "departamento_id"=>"100000","nombre"=>"HUACAYBAMBA"],
            ["id"=>"100500", "departamento_id"=>"100000","nombre"=>"HUAMALIES"],
            ["id"=>"100600", "departamento_id"=>"100000","nombre"=>"LEONCIO PRADO"],
            ["id"=>"100700", "departamento_id"=>"100000","nombre"=>"MARAÑON"],
            ["id"=>"100800", "departamento_id"=>"100000","nombre"=>"PACHITEA"],
            ["id"=>"100900", "departamento_id"=>"100000","nombre"=>"PUERTO INCA"],
            ["id"=>"101000", "departamento_id"=>"100000","nombre"=>"LAURICOCHA"],
            ["id"=>"101100", "departamento_id"=>"100000","nombre"=>"YAROWILCA"],
            ["id"=>"110100", "departamento_id"=>"110000","nombre"=>"ICA"],
            ["id"=>"110200", "departamento_id"=>"110000","nombre"=>"CHINCHA"],
            ["id"=>"110300", "departamento_id"=>"110000","nombre"=>"NAZCA"],
            ["id"=>"110400", "departamento_id"=>"110000","nombre"=>"PALPA"],
            ["id"=>"110500", "departamento_id"=>"110000","nombre"=>"PISCO"],
            ["id"=>"120100", "departamento_id"=>"120000","nombre"=>"HUANCAYO"],
            ["id"=>"120200", "departamento_id"=>"120000","nombre"=>"CONCEPCION"],
            ["id"=>"120300", "departamento_id"=>"120000","nombre"=>"CHANCHAMAYO"],
            ["id"=>"120400", "departamento_id"=>"120000","nombre"=>"JAUJA"],
            ["id"=>"120500", "departamento_id"=>"120000","nombre"=>"JUNIN"],
            ["id"=>"120600", "departamento_id"=>"120000","nombre"=>"SATIPO"],
            ["id"=>"120700", "departamento_id"=>"120000","nombre"=>"TARMA"],
            ["id"=>"120800", "departamento_id"=>"120000","nombre"=>"YAULI"],
            ["id"=>"120900", "departamento_id"=>"120000","nombre"=>"CHUPACA"],
            ["id"=>"130100", "departamento_id"=>"130000","nombre"=>"TRUJILLO"],
            ["id"=>"130200", "departamento_id"=>"130000","nombre"=>"ASCOPE"],
            ["id"=>"130300", "departamento_id"=>"130000","nombre"=>"BOLIVAR"],
            ["id"=>"130400", "departamento_id"=>"130000","nombre"=>"CHEPEN"],
            ["id"=>"130500", "departamento_id"=>"130000","nombre"=>"JULCAN"],
            ["id"=>"130600", "departamento_id"=>"130000","nombre"=>"OTUZCO"],
            ["id"=>"130700", "departamento_id"=>"130000","nombre"=>"PACASMAYO"],
            ["id"=>"130800", "departamento_id"=>"130000","nombre"=>"PATAZ"],
            ["id"=>"130900", "departamento_id"=>"130000","nombre"=>"SANCHEZ CARRION"],
            ["id"=>"131000", "departamento_id"=>"130000","nombre"=>"SANTIAGO DE CHUCO"],
            ["id"=>"131100", "departamento_id"=>"130000","nombre"=>"GRAN CHIMU"],
            ["id"=>"131200", "departamento_id"=>"130000","nombre"=>"VIRU"],
            ["id"=>"140100", "departamento_id"=>"140000","nombre"=>"CHICLAYO"],
            ["id"=>"140200", "departamento_id"=>"140000","nombre"=>"FERREÑAFE"],
            ["id"=>"140300", "departamento_id"=>"140000","nombre"=>"LAMBAYEQUE"],
            ["id"=>"150100", "departamento_id"=>"150000","nombre"=>"LIMA"],
            ["id"=>"150200", "departamento_id"=>"150000","nombre"=>"BARRANCA"],
            ["id"=>"150300", "departamento_id"=>"150000","nombre"=>"CAJATAMBO"],
            ["id"=>"150400", "departamento_id"=>"150000","nombre"=>"CANTA"],
            ["id"=>"150500", "departamento_id"=>"150000","nombre"=>"CAÑETE"],
            ["id"=>"150600", "departamento_id"=>"150000","nombre"=>"HUARAL"],
            ["id"=>"150700", "departamento_id"=>"150000","nombre"=>"HUAROCHIRI"],
            ["id"=>"150800", "departamento_id"=>"150000","nombre"=>"HUAURA"],
            ["id"=>"150900", "departamento_id"=>"150000","nombre"=>"OYON"],
            ["id"=>"151000", "departamento_id"=>"150000","nombre"=>"YAUYOS"],
            ["id"=>"160100", "departamento_id"=>"160000","nombre"=>"MAYNAS"],
            ["id"=>"160200", "departamento_id"=>"160000","nombre"=>"ALTO AMAZONAS"],
            ["id"=>"160300", "departamento_id"=>"160000","nombre"=>"LORETO"],
            ["id"=>"160400", "departamento_id"=>"160000","nombre"=>"MARISCAL RAMON CASTILLA"],
            ["id"=>"160500", "departamento_id"=>"160000","nombre"=>"REQUENA"],
            ["id"=>"160600", "departamento_id"=>"160000","nombre"=>"UCAYALI"],
            ["id"=>"160700", "departamento_id"=>"160000","nombre"=>"DATEM DEL MARAÑON"],
            ["id"=>"170100", "departamento_id"=>"170000","nombre"=>"TAMBOPATA"],
            ["id"=>"170200", "departamento_id"=>"170000","nombre"=>"MANU"],
            ["id"=>"170300", "departamento_id"=>"170000","nombre"=>"TAHUAMANU"],
            ["id"=>"180100", "departamento_id"=>"180000","nombre"=>"MARISCAL NIETO"],
            ["id"=>"180200", "departamento_id"=>"180000","nombre"=>"GENERAL SANCHEZ CERRO"],
            ["id"=>"180300", "departamento_id"=>"180000","nombre"=>"ILO"],
            ["id"=>"190100", "departamento_id"=>"190000","nombre"=>"PASCO"],
            ["id"=>"190200", "departamento_id"=>"190000","nombre"=>"DANIEL ALCIDES CARRION"],
            ["id"=>"190300", "departamento_id"=>"190000","nombre"=>"OXAPAMPA"],
            ["id"=>"200100", "departamento_id"=>"200000","nombre"=>"PIURA"],
            ["id"=>"200200", "departamento_id"=>"200000","nombre"=>"AYABACA"],
            ["id"=>"200300", "departamento_id"=>"200000","nombre"=>"HUANCABAMBA"],
            ["id"=>"200400", "departamento_id"=>"200000","nombre"=>"MORROPON"],
            ["id"=>"200500", "departamento_id"=>"200000","nombre"=>"PAITA"],
            ["id"=>"200600", "departamento_id"=>"200000","nombre"=>"SULLANA"],
            ["id"=>"200700", "departamento_id"=>"200000","nombre"=>"TALARA"],
            ["id"=>"200800", "departamento_id"=>"200000","nombre"=>"SECHURA"],
            ["id"=>"210100", "departamento_id"=>"210000","nombre"=>"PUNO"],
            ["id"=>"210200", "departamento_id"=>"210000","nombre"=>"AZANGARO"],
            ["id"=>"210300", "departamento_id"=>"210000","nombre"=>"CARABAYA"],
            ["id"=>"210400", "departamento_id"=>"210000","nombre"=>"CHUCUITO"],
            ["id"=>"210500", "departamento_id"=>"210000","nombre"=>"EL COLLAO"],
            ["id"=>"210600", "departamento_id"=>"210000","nombre"=>"HUANCANE"],
            ["id"=>"210700", "departamento_id"=>"210000","nombre"=>"LAMPA"],
            ["id"=>"210800", "departamento_id"=>"210000","nombre"=>"MELGAR"],
            ["id"=>"210900", "departamento_id"=>"210000","nombre"=>"MOHO"],
            ["id"=>"211000", "departamento_id"=>"210000","nombre"=>"SAN ANTONIO DE PUTINA"],
            ["id"=>"211100", "departamento_id"=>"210000","nombre"=>"SAN ROMAN"],
            ["id"=>"211200", "departamento_id"=>"210000","nombre"=>"SANDIA"],
            ["id"=>"211300", "departamento_id"=>"210000","nombre"=>"YUNGUYO"],
            ["id"=>"220100", "departamento_id"=>"220000","nombre"=>"MOYOBAMBA"],
            ["id"=>"220200", "departamento_id"=>"220000","nombre"=>"BELLAVISTA"],
            ["id"=>"220300", "departamento_id"=>"220000","nombre"=>"EL DORADO"],
            ["id"=>"220400", "departamento_id"=>"220000","nombre"=>"HUALLAGA"],
            ["id"=>"220500", "departamento_id"=>"220000","nombre"=>"LAMAS"],
            ["id"=>"220600", "departamento_id"=>"220000","nombre"=>"MARISCAL CACERES"],
            ["id"=>"220700", "departamento_id"=>"220000","nombre"=>"PICOTA"],
            ["id"=>"220800", "departamento_id"=>"220000","nombre"=>"RIOJA"],
            ["id"=>"220900", "departamento_id"=>"220000","nombre"=>"SAN MARTIN"],
            ["id"=>"221000", "departamento_id"=>"220000","nombre"=>"TOCACHE"],
            ["id"=>"230100", "departamento_id"=>"230000","nombre"=>"TACNA"],
            ["id"=>"230200", "departamento_id"=>"230000","nombre"=>"CANDARAVE"],
            ["id"=>"230300", "departamento_id"=>"230000","nombre"=>"JORGE BASADRE"],
            ["id"=>"230400", "departamento_id"=>"230000","nombre"=>"TARATA"],
            ["id"=>"240100", "departamento_id"=>"240000","nombre"=>"TUMBES"],
            ["id"=>"240200", "departamento_id"=>"240000","nombre"=>"CONTRALMIRANTE VILLAR"],
            ["id"=>"240300", "departamento_id"=>"240000","nombre"=>"ZARUMILLA"],
            ["id"=>"250100", "departamento_id"=>"250000","nombre"=>"CORONEL PORTILLO"],
            ["id"=>"250200", "departamento_id"=>"250000","nombre"=>"ATALAYA"],
            ["id"=>"250300", "departamento_id"=>"250000","nombre"=>"PADRE ABAD"],
            ["id"=>"250400", "departamento_id"=>"250000","nombre"=>"PURUS"]
        ];

        Provincia::insert($provincias);

        $distritos = [
            [
                "id"=> "010101",
                "provincia_id"=> "010100",
                "nombre"=> "CHACHAPOYAS"
            ],
            [
                "id"=> "010102",
                "provincia_id"=> "010100",
                "nombre"=> "ASUNCION"
            ],
            [
                "id"=> "010103",
                "provincia_id"=> "010100",
                "nombre"=> "BALSAS"
            ],
            [
                "id"=> "010104",
                "provincia_id"=> "010100",
                "nombre"=> "CHETO"
            ],
            [
                "id"=> "010105",
                "provincia_id"=> "010100",
                "nombre"=> "CHILIQUIN"
            ],
            [
                "id"=> "010106",
                "provincia_id"=> "010100",
                "nombre"=> "CHUQUIBAMBA"
            ],
            [
                "id"=> "010107",
                "provincia_id"=> "010100",
                "nombre"=> "GRANADA"
            ],
            [
                "id"=> "010108",
                "provincia_id"=> "010100",
                "nombre"=> "HUANCAS"
            ],
            [
                "id"=> "010109",
                "provincia_id"=> "010100",
                "nombre"=> "LA JALCA"
            ],
            [
                "id"=> "010110",
                "provincia_id"=> "010100",
                "nombre"=> "LEIMEBAMBA"
            ],
            [
                "id"=> "010111",
                "provincia_id"=> "010100",
                "nombre"=> "LEVANTO"
            ],
            [
                "id"=> "010112",
                "provincia_id"=> "010100",
                "nombre"=> "MAGDALENA"
            ],
            [
                "id"=> "010113",
                "provincia_id"=> "010100",
                "nombre"=> "MARISCAL CASTILLA"
            ],
            [
                "id"=> "010114",
                "provincia_id"=> "010100",
                "nombre"=> "MOLINOPAMPA"
            ],
            [
                "id"=> "010115",
                "provincia_id"=> "010100",
                "nombre"=> "MONTEVIDEO"
            ],
            [
                "id"=> "010116",
                "provincia_id"=> "010100",
                "nombre"=> "OLLEROS"
            ],
            [
                "id"=> "010117",
                "provincia_id"=> "010100",
                "nombre"=> "QUINJALCA"
            ],
            [
                "id"=> "010118",
                "provincia_id"=> "010100",
                "nombre"=> "SAN FRANCISCO DE DAGUAS"
            ],
            [
                "id"=> "010119",
                "provincia_id"=> "010100",
                "nombre"=> "SAN ISIDRO DE MAINO"
            ],
            [
                "id"=> "010120",
                "provincia_id"=> "010100",
                "nombre"=> "SOLOCO"
            ],
            [
                "id"=> "010121",
                "provincia_id"=> "010100",
                "nombre"=> "SONCHE"
            ],
            [
                "id"=> "010201",
                "provincia_id"=> "010200",
                "nombre"=> "BAGUA"
            ],
            [
                "id"=> "010202",
                "provincia_id"=> "010200",
                "nombre"=> "ARAMANGO"
            ],
            [
                "id"=> "010203",
                "provincia_id"=> "010200",
                "nombre"=> "COPALLIN"
            ],
            [
                "id"=> "010204",
                "provincia_id"=> "010200",
                "nombre"=> "EL PARCO"
            ],
            [
                "id"=> "010205",
                "provincia_id"=> "010200",
                "nombre"=> "IMAZA"
            ],
            [
                "id"=> "010206",
                "provincia_id"=> "010200",
                "nombre"=> "LA PECA"
            ],
            [
                "id"=> "010301",
                "provincia_id"=> "010300",
                "nombre"=> "JUMBILLA"
            ],
            [
                "id"=> "010302",
                "provincia_id"=> "010300",
                "nombre"=> "CHISQUILLA"
            ],
            [
                "id"=> "010303",
                "provincia_id"=> "010300",
                "nombre"=> "CHURUJA"
            ],
            [
                "id"=> "010304",
                "provincia_id"=> "010300",
                "nombre"=> "COROSHA"
            ],
            [
                "id"=> "010305",
                "provincia_id"=> "010300",
                "nombre"=> "CUISPES"
            ],
            [
                "id"=> "010306",
                "provincia_id"=> "010300",
                "nombre"=> "FLORIDA"
            ],
            [
                "id"=> "010307",
                "provincia_id"=> "010300",
                "nombre"=> "JAZAN"
            ],
            [
                "id"=> "010308",
                "provincia_id"=> "010300",
                "nombre"=> "RECTA"
            ],
            [
                "id"=> "010309",
                "provincia_id"=> "010300",
                "nombre"=> "SAN CARLOS"
            ],
            [
                "id"=> "010310",
                "provincia_id"=> "010300",
                "nombre"=> "SHIPASBAMBA"
            ],
            [
                "id"=> "010311",
                "provincia_id"=> "010300",
                "nombre"=> "VALERA"
            ],
            [
                "id"=> "010312",
                "provincia_id"=> "010300",
                "nombre"=> "YAMBRASBAMBA"
            ],
            [
                "id"=> "010401",
                "provincia_id"=> "010400",
                "nombre"=> "NIEVA"
            ],
            [
                "id"=> "010402",
                "provincia_id"=> "010400",
                "nombre"=> "EL CENEPA"
            ],
            [
                "id"=> "010403",
                "provincia_id"=> "010400",
                "nombre"=> "RIO SANTIAGO"
            ],
            [
                "id"=> "010501",
                "provincia_id"=> "010500",
                "nombre"=> "LAMUD"
            ],
            [
                "id"=> "010502",
                "provincia_id"=> "010500",
                "nombre"=> "CAMPORREDONDO"
            ],
            [
                "id"=> "010503",
                "provincia_id"=> "010500",
                "nombre"=> "COCABAMBA"
            ],
            [
                "id"=> "010504",
                "provincia_id"=> "010500",
                "nombre"=> "COLCAMAR"
            ],
            [
                "id"=> "010505",
                "provincia_id"=> "010500",
                "nombre"=> "CONILA"
            ],
            [
                "id"=> "010506",
                "provincia_id"=> "010500",
                "nombre"=> "INGUILPATA"
            ],
            [
                "id"=> "010507",
                "provincia_id"=> "010500",
                "nombre"=> "LONGUITA"
            ],
            [
                "id"=> "010508",
                "provincia_id"=> "010500",
                "nombre"=> "LONYA CHICO"
            ],
            [
                "id"=> "010509",
                "provincia_id"=> "010500",
                "nombre"=> "LUYA"
            ],
            [
                "id"=> "010510",
                "provincia_id"=> "010500",
                "nombre"=> "LUYA VIEJO"
            ],
            [
                "id"=> "010511",
                "provincia_id"=> "010500",
                "nombre"=> "MARIA"
            ],
            [
                "id"=> "010512",
                "provincia_id"=> "010500",
                "nombre"=> "OCALLI"
            ],
            [
                "id"=> "010513",
                "provincia_id"=> "010500",
                "nombre"=> "OCUMAL"
            ],
            [
                "id"=> "010514",
                "provincia_id"=> "010500",
                "nombre"=> "PISUQUIA"
            ],
            [
                "id"=> "010515",
                "provincia_id"=> "010500",
                "nombre"=> "PROVIDENCIA"
            ],
            [
                "id"=> "010516",
                "provincia_id"=> "010500",
                "nombre"=> "SAN CRISTOBAL"
            ],
            [
                "id"=> "010517",
                "provincia_id"=> "010500",
                "nombre"=> "SAN FRANCISCO DEL YESO"
            ],
            [
                "id"=> "010518",
                "provincia_id"=> "010500",
                "nombre"=> "SAN JERONIMO"
            ],
            [
                "id"=> "010519",
                "provincia_id"=> "010500",
                "nombre"=> "SAN JUAN DE LOPECANCHA"
            ],
            [
                "id"=> "010520",
                "provincia_id"=> "010500",
                "nombre"=> "SANTA CATALINA"
            ],
            [
                "id"=> "010521",
                "provincia_id"=> "010500",
                "nombre"=> "SANTO TOMAS"
            ],
            [
                "id"=> "010522",
                "provincia_id"=> "010500",
                "nombre"=> "TINGO"
            ],
            [
                "id"=> "010523",
                "provincia_id"=> "010500",
                "nombre"=> "TRITA"
            ],
            [
                "id"=> "010601",
                "provincia_id"=> "010600",
                "nombre"=> "SAN NICOLAS"
            ],
            [
                "id"=> "010602",
                "provincia_id"=> "010600",
                "nombre"=> "CHIRIMOTO"
            ],
            [
                "id"=> "010603",
                "provincia_id"=> "010600",
                "nombre"=> "COCHAMAL"
            ],
            [
                "id"=> "010604",
                "provincia_id"=> "010600",
                "nombre"=> "HUAMBO"
            ],
            [
                "id"=> "010605",
                "provincia_id"=> "010600",
                "nombre"=> "LIMABAMBA"
            ],
            [
                "id"=> "010606",
                "provincia_id"=> "010600",
                "nombre"=> "LONGAR"
            ],
            [
                "id"=> "010607",
                "provincia_id"=> "010600",
                "nombre"=> "MARISCAL BENAVIDES"
            ],
            [
                "id"=> "010608",
                "provincia_id"=> "010600",
                "nombre"=> "MILPUC"
            ],
            [
                "id"=> "010609",
                "provincia_id"=> "010600",
                "nombre"=> "OMIA"
            ],
            [
                "id"=> "010610",
                "provincia_id"=> "010600",
                "nombre"=> "SANTA ROSA"
            ],
            [
                "id"=> "010611",
                "provincia_id"=> "010600",
                "nombre"=> "TOTORA"
            ],
            [
                "id"=> "010612",
                "provincia_id"=> "010600",
                "nombre"=> "VISTA ALEGRE"
            ],
            [
                "id"=> "010701",
                "provincia_id"=> "010700",
                "nombre"=> "BAGUA GRANDE"
            ],
            [
                "id"=> "010702",
                "provincia_id"=> "010700",
                "nombre"=> "CAJARURO"
            ],
            [
                "id"=> "010703",
                "provincia_id"=> "010700",
                "nombre"=> "CUMBA"
            ],
            [
                "id"=> "010704",
                "provincia_id"=> "010700",
                "nombre"=> "EL MILAGRO"
            ],
            [
                "id"=> "010705",
                "provincia_id"=> "010700",
                "nombre"=> "JAMALCA"
            ],
            [
                "id"=> "010706",
                "provincia_id"=> "010700",
                "nombre"=> "LONYA GRANDE"
            ],
            [
                "id"=> "010707",
                "provincia_id"=> "010700",
                "nombre"=> "YAMON"
            ],
            [
                "id"=> "020101",
                "provincia_id"=> "020100",
                "nombre"=> "HUARAZ"
            ],
            [
                "id"=> "020102",
                "provincia_id"=> "020100",
                "nombre"=> "COCHABAMBA"
            ],
            [
                "id"=> "020103",
                "provincia_id"=> "020100",
                "nombre"=> "COLCABAMBA"
            ],
            [
                "id"=> "020104",
                "provincia_id"=> "020100",
                "nombre"=> "HUANCHAY"
            ],
            [
                "id"=> "020105",
                "provincia_id"=> "020100",
                "nombre"=> "INDEPENDENCIA"
            ],
            [
                "id"=> "020106",
                "provincia_id"=> "020100",
                "nombre"=> "JANGAS"
            ],
            [
                "id"=> "020107",
                "provincia_id"=> "020100",
                "nombre"=> "LA LIBERTAD"
            ],
            [
                "id"=> "020108",
                "provincia_id"=> "020100",
                "nombre"=> "OLLEROS"
            ],
            [
                "id"=> "020109",
                "provincia_id"=> "020100",
                "nombre"=> "PAMPAS"
            ],
            [
                "id"=> "020110",
                "provincia_id"=> "020100",
                "nombre"=> "PARIACOTO"
            ],
            [
                "id"=> "020111",
                "provincia_id"=> "020100",
                "nombre"=> "PIRA"
            ],
            [
                "id"=> "020112",
                "provincia_id"=> "020100",
                "nombre"=> "TARICA"
            ],
            [
                "id"=> "020201",
                "provincia_id"=> "020200",
                "nombre"=> "AIJA"
            ],
            [
                "id"=> "020202",
                "provincia_id"=> "020200",
                "nombre"=> "CORIS"
            ],
            [
                "id"=> "020203",
                "provincia_id"=> "020200",
                "nombre"=> "HUACLLAN"
            ],
            [
                "id"=> "020204",
                "provincia_id"=> "020200",
                "nombre"=> "LA MERCED"
            ],
            [
                "id"=> "020205",
                "provincia_id"=> "020200",
                "nombre"=> "SUCCHA"
            ],
            [
                "id"=> "020301",
                "provincia_id"=> "020300",
                "nombre"=> "LLAMELLIN"
            ],
            [
                "id"=> "020302",
                "provincia_id"=> "020300",
                "nombre"=> "ACZO"
            ],
            [
                "id"=> "020303",
                "provincia_id"=> "020300",
                "nombre"=> "CHACCHO"
            ],
            [
                "id"=> "020304",
                "provincia_id"=> "020300",
                "nombre"=> "CHINGAS"
            ],
            [
                "id"=> "020305",
                "provincia_id"=> "020300",
                "nombre"=> "MIRGAS"
            ],
            [
                "id"=> "020306",
                "provincia_id"=> "020300",
                "nombre"=> "SAN JUAN DE RONTOY"
            ],
            [
                "id"=> "020401",
                "provincia_id"=> "020400",
                "nombre"=> "CHACAS"
            ],
            [
                "id"=> "020402",
                "provincia_id"=> "020400",
                "nombre"=> "ACOCHACA"
            ],
            [
                "id"=> "020501",
                "provincia_id"=> "020500",
                "nombre"=> "CHIQUIAN"
            ],
            [
                "id"=> "020502",
                "provincia_id"=> "020500",
                "nombre"=> "ABELARDO PARDO LEZAMETA"
            ],
            [
                "id"=> "020503",
                "provincia_id"=> "020500",
                "nombre"=> "ANTONIO RAYMONDI"
            ],
            [
                "id"=> "020504",
                "provincia_id"=> "020500",
                "nombre"=> "AQUIA"
            ],
            [
                "id"=> "020505",
                "provincia_id"=> "020500",
                "nombre"=> "CAJACAY"
            ],
            [
                "id"=> "020506",
                "provincia_id"=> "020500",
                "nombre"=> "CANIS"
            ],
            [
                "id"=> "020507",
                "provincia_id"=> "020500",
                "nombre"=> "COLQUIOC"
            ],
            [
                "id"=> "020508",
                "provincia_id"=> "020500",
                "nombre"=> "HUALLANCA"
            ],
            [
                "id"=> "020509",
                "provincia_id"=> "020500",
                "nombre"=> "HUASTA"
            ],
            [
                "id"=> "020510",
                "provincia_id"=> "020500",
                "nombre"=> "HUAYLLACAYAN"
            ],
            [
                "id"=> "020511",
                "provincia_id"=> "020500",
                "nombre"=> "LA PRIMAVERA"
            ],
            [
                "id"=> "020512",
                "provincia_id"=> "020500",
                "nombre"=> "MANGAS"
            ],
            [
                "id"=> "020513",
                "provincia_id"=> "020500",
                "nombre"=> "PACLLON"
            ],
            [
                "id"=> "020514",
                "provincia_id"=> "020500",
                "nombre"=> "SAN MIGUEL DE CORPANQUI"
            ],
            [
                "id"=> "020515",
                "provincia_id"=> "020500",
                "nombre"=> "TICLLOS"
            ],
            [
                "id"=> "020601",
                "provincia_id"=> "020600",
                "nombre"=> "CARHUAZ"
            ],
            [
                "id"=> "020602",
                "provincia_id"=> "020600",
                "nombre"=> "ACOPAMPA"
            ],
            [
                "id"=> "020603",
                "provincia_id"=> "020600",
                "nombre"=> "AMASHCA"
            ],
            [
                "id"=> "020604",
                "provincia_id"=> "020600",
                "nombre"=> "ANTA"
            ],
            [
                "id"=> "020605",
                "provincia_id"=> "020600",
                "nombre"=> "ATAQUERO"
            ],
            [
                "id"=> "020606",
                "provincia_id"=> "020600",
                "nombre"=> "MARCARA"
            ],
            [
                "id"=> "020607",
                "provincia_id"=> "020600",
                "nombre"=> "PARIAHUANCA"
            ],
            [
                "id"=> "020608",
                "provincia_id"=> "020600",
                "nombre"=> "SAN MIGUEL DE ACO"
            ],
            [
                "id"=> "020609",
                "provincia_id"=> "020600",
                "nombre"=> "SHILLA"
            ],
            [
                "id"=> "020610",
                "provincia_id"=> "020600",
                "nombre"=> "TINCO"
            ],
            [
                "id"=> "020611",
                "provincia_id"=> "020600",
                "nombre"=> "YUNGAR"
            ],
            [
                "id"=> "020701",
                "provincia_id"=> "020700",
                "nombre"=> "SAN LUIS"
            ],
            [
                "id"=> "020702",
                "provincia_id"=> "020700",
                "nombre"=> "SAN NICOLAS"
            ],
            [
                "id"=> "020703",
                "provincia_id"=> "020700",
                "nombre"=> "YAUYA"
            ],
            [
                "id"=> "020801",
                "provincia_id"=> "020800",
                "nombre"=> "CASMA"
            ],
            [
                "id"=> "020802",
                "provincia_id"=> "020800",
                "nombre"=> "BUENA VISTA ALTA"
            ],
            [
                "id"=> "020803",
                "provincia_id"=> "020800",
                "nombre"=> "COMANDANTE NOEL"
            ],
            [
                "id"=> "020804",
                "provincia_id"=> "020800",
                "nombre"=> "YAUTAN"
            ],
            [
                "id"=> "020901",
                "provincia_id"=> "020900",
                "nombre"=> "CORONGO"
            ],
            [
                "id"=> "020902",
                "provincia_id"=> "020900",
                "nombre"=> "ACO"
            ],
            [
                "id"=> "020903",
                "provincia_id"=> "020900",
                "nombre"=> "BAMBAS"
            ],
            [
                "id"=> "020904",
                "provincia_id"=> "020900",
                "nombre"=> "CUSCA"
            ],
            [
                "id"=> "020905",
                "provincia_id"=> "020900",
                "nombre"=> "LA PAMPA"
            ],
            [
                "id"=> "020906",
                "provincia_id"=> "020900",
                "nombre"=> "YANAC"
            ],
            [
                "id"=> "020907",
                "provincia_id"=> "020900",
                "nombre"=> "YUPAN"
            ],
            [
                "id"=> "021001",
                "provincia_id"=> "021000",
                "nombre"=> "HUARI"
            ],
            [
                "id"=> "021002",
                "provincia_id"=> "021000",
                "nombre"=> "ANRA"
            ],
            [
                "id"=> "021003",
                "provincia_id"=> "021000",
                "nombre"=> "CAJAY"
            ],
            [
                "id"=> "021004",
                "provincia_id"=> "021000",
                "nombre"=> "CHAVIN DE HUANTAR"
            ],
            [
                "id"=> "021005",
                "provincia_id"=> "021000",
                "nombre"=> "HUACACHI"
            ],
            [
                "id"=> "021006",
                "provincia_id"=> "021000",
                "nombre"=> "HUACCHIS"
            ],
            [
                "id"=> "021007",
                "provincia_id"=> "021000",
                "nombre"=> "HUACHIS"
            ],
            [
                "id"=> "021008",
                "provincia_id"=> "021000",
                "nombre"=> "HUANTAR"
            ],
            [
                "id"=> "021009",
                "provincia_id"=> "021000",
                "nombre"=> "MASIN"
            ],
            [
                "id"=> "021010",
                "provincia_id"=> "021000",
                "nombre"=> "PAUCAS"
            ],
            [
                "id"=> "021011",
                "provincia_id"=> "021000",
                "nombre"=> "PONTO"
            ],
            [
                "id"=> "021012",
                "provincia_id"=> "021000",
                "nombre"=> "RAHUAPAMPA"
            ],
            [
                "id"=> "021013",
                "provincia_id"=> "021000",
                "nombre"=> "RAPAYAN"
            ],
            [
                "id"=> "021014",
                "provincia_id"=> "021000",
                "nombre"=> "SAN MARCOS"
            ],
            [
                "id"=> "021015",
                "provincia_id"=> "021000",
                "nombre"=> "SAN PEDRO DE CHANA"
            ],
            [
                "id"=> "021016",
                "provincia_id"=> "021000",
                "nombre"=> "UCO"
            ],
            [
                "id"=> "021101",
                "provincia_id"=> "021100",
                "nombre"=> "HUARMEY"
            ],
            [
                "id"=> "021102",
                "provincia_id"=> "021100",
                "nombre"=> "COCHAPETI"
            ],
            [
                "id"=> "021103",
                "provincia_id"=> "021100",
                "nombre"=> "CULEBRAS"
            ],
            [
                "id"=> "021104",
                "provincia_id"=> "021100",
                "nombre"=> "HUAYAN"
            ],
            [
                "id"=> "021105",
                "provincia_id"=> "021100",
                "nombre"=> "MALVAS"
            ],
            [
                "id"=> "021201",
                "provincia_id"=> "021200",
                "nombre"=> "CARAZ"
            ],
            [
                "id"=> "021202",
                "provincia_id"=> "021200",
                "nombre"=> "HUALLANCA"
            ],
            [
                "id"=> "021203",
                "provincia_id"=> "021200",
                "nombre"=> "HUATA"
            ],
            [
                "id"=> "021204",
                "provincia_id"=> "021200",
                "nombre"=> "HUAYLAS"
            ],
            [
                "id"=> "021205",
                "provincia_id"=> "021200",
                "nombre"=> "MATO"
            ],
            [
                "id"=> "021206",
                "provincia_id"=> "021200",
                "nombre"=> "PAMPAROMAS"
            ],
            [
                "id"=> "021207",
                "provincia_id"=> "021200",
                "nombre"=> "PUEBLO LIBRE"
            ],
            [
                "id"=> "021208",
                "provincia_id"=> "021200",
                "nombre"=> "SANTA CRUZ"
            ],
            [
                "id"=> "021209",
                "provincia_id"=> "021200",
                "nombre"=> "SANTO TORIBIO"
            ],
            [
                "id"=> "021210",
                "provincia_id"=> "021200",
                "nombre"=> "YURACMARCA"
            ],
            [
                "id"=> "021301",
                "provincia_id"=> "021300",
                "nombre"=> "PISCOBAMBA"
            ],
            [
                "id"=> "021302",
                "provincia_id"=> "021300",
                "nombre"=> "CASCA"
            ],
            [
                "id"=> "021303",
                "provincia_id"=> "021300",
                "nombre"=> "ELEAZAR GUZMAN BARRON"
            ],
            [
                "id"=> "021304",
                "provincia_id"=> "021300",
                "nombre"=> "FIDEL OLIVAS ESCUDERO"
            ],
            [
                "id"=> "021305",
                "provincia_id"=> "021300",
                "nombre"=> "LLAMA"
            ],
            [
                "id"=> "021306",
                "provincia_id"=> "021300",
                "nombre"=> "LLUMPA"
            ],
            [
                "id"=> "021307",
                "provincia_id"=> "021300",
                "nombre"=> "LUCMA"
            ],
            [
                "id"=> "021308",
                "provincia_id"=> "021300",
                "nombre"=> "MUSGA"
            ],
            [
                "id"=> "021401",
                "provincia_id"=> "021400",
                "nombre"=> "OCROS"
            ],
            [
                "id"=> "021402",
                "provincia_id"=> "021400",
                "nombre"=> "ACAS"
            ],
            [
                "id"=> "021403",
                "provincia_id"=> "021400",
                "nombre"=> "CAJAMARQUILLA"
            ],
            [
                "id"=> "021404",
                "provincia_id"=> "021400",
                "nombre"=> "CARHUAPAMPA"
            ],
            [
                "id"=> "021405",
                "provincia_id"=> "021400",
                "nombre"=> "COCHAS"
            ],
            [
                "id"=> "021406",
                "provincia_id"=> "021400",
                "nombre"=> "CONGAS"
            ],
            [
                "id"=> "021407",
                "provincia_id"=> "021400",
                "nombre"=> "LLIPA"
            ],
            [
                "id"=> "021408",
                "provincia_id"=> "021400",
                "nombre"=> "SAN CRISTOBAL DE RAJAN"
            ],
            [
                "id"=> "021409",
                "provincia_id"=> "021400",
                "nombre"=> "SAN PEDRO"
            ],
            [
                "id"=> "021410",
                "provincia_id"=> "021400",
                "nombre"=> "SANTIAGO DE CHILCAS"
            ],
            [
                "id"=> "021501",
                "provincia_id"=> "021500",
                "nombre"=> "CABANA"
            ],
            [
                "id"=> "021502",
                "provincia_id"=> "021500",
                "nombre"=> "BOLOGNESI"
            ],
            [
                "id"=> "021503",
                "provincia_id"=> "021500",
                "nombre"=> "CONCHUCOS"
            ],
            [
                "id"=> "021504",
                "provincia_id"=> "021500",
                "nombre"=> "HUACASCHUQUE"
            ],
            [
                "id"=> "021505",
                "provincia_id"=> "021500",
                "nombre"=> "HUANDOVAL"
            ],
            [
                "id"=> "021506",
                "provincia_id"=> "021500",
                "nombre"=> "LACABAMBA"
            ],
            [
                "id"=> "021507",
                "provincia_id"=> "021500",
                "nombre"=> "LLAPO"
            ],
            [
                "id"=> "021508",
                "provincia_id"=> "021500",
                "nombre"=> "PALLASCA"
            ],
            [
                "id"=> "021509",
                "provincia_id"=> "021500",
                "nombre"=> "PAMPAS"
            ],
            [
                "id"=> "021510",
                "provincia_id"=> "021500",
                "nombre"=> "SANTA ROSA"
            ],
            [
                "id"=> "021511",
                "provincia_id"=> "021500",
                "nombre"=> "TAUCA"
            ],
            [
                "id"=> "021601",
                "provincia_id"=> "021600",
                "nombre"=> "POMABAMBA"
            ],
            [
                "id"=> "021602",
                "provincia_id"=> "021600",
                "nombre"=> "HUAYLLAN"
            ],
            [
                "id"=> "021603",
                "provincia_id"=> "021600",
                "nombre"=> "PAROBAMBA"
            ],
            [
                "id"=> "021604",
                "provincia_id"=> "021600",
                "nombre"=> "QUINUABAMBA"
            ],
            [
                "id"=> "021701",
                "provincia_id"=> "021700",
                "nombre"=> "RECUAY"
            ],
            [
                "id"=> "021702",
                "provincia_id"=> "021700",
                "nombre"=> "CATAC"
            ],
            [
                "id"=> "021703",
                "provincia_id"=> "021700",
                "nombre"=> "COTAPARACO"
            ],
            [
                "id"=> "021704",
                "provincia_id"=> "021700",
                "nombre"=> "HUAYLLAPAMPA"
            ],
            [
                "id"=> "021705",
                "provincia_id"=> "021700",
                "nombre"=> "LLACLLIN"
            ],
            [
                "id"=> "021706",
                "provincia_id"=> "021700",
                "nombre"=> "MARCA"
            ],
            [
                "id"=> "021707",
                "provincia_id"=> "021700",
                "nombre"=> "PAMPAS CHICO"
            ],
            [
                "id"=> "021708",
                "provincia_id"=> "021700",
                "nombre"=> "PARARIN"
            ],
            [
                "id"=> "021709",
                "provincia_id"=> "021700",
                "nombre"=> "TAPACOCHA"
            ],
            [
                "id"=> "021710",
                "provincia_id"=> "021700",
                "nombre"=> "TICAPAMPA"
            ],
            [
                "id"=> "021801",
                "provincia_id"=> "021800",
                "nombre"=> "CHIMBOTE"
            ],
            [
                "id"=> "021802",
                "provincia_id"=> "021800",
                "nombre"=> "CACERES DEL PERU"
            ],
            [
                "id"=> "021803",
                "provincia_id"=> "021800",
                "nombre"=> "COISHCO"
            ],
            [
                "id"=> "021804",
                "provincia_id"=> "021800",
                "nombre"=> "MACATE"
            ],
            [
                "id"=> "021805",
                "provincia_id"=> "021800",
                "nombre"=> "MORO"
            ],
            [
                "id"=> "021806",
                "provincia_id"=> "021800",
                "nombre"=> "NEPEÑA"
            ],
            [
                "id"=> "021807",
                "provincia_id"=> "021800",
                "nombre"=> "SAMANCO"
            ],
            [
                "id"=> "021808",
                "provincia_id"=> "021800",
                "nombre"=> "SANTA"
            ],
            [
                "id"=> "021809",
                "provincia_id"=> "021800",
                "nombre"=> "NUEVO CHIMBOTE"
            ],
            [
                "id"=> "021901",
                "provincia_id"=> "021900",
                "nombre"=> "SIHUAS"
            ],
            [
                "id"=> "021902",
                "provincia_id"=> "021900",
                "nombre"=> "ACOBAMBA"
            ],
            [
                "id"=> "021903",
                "provincia_id"=> "021900",
                "nombre"=> "ALFONSO UGARTE"
            ],
            [
                "id"=> "021904",
                "provincia_id"=> "021900",
                "nombre"=> "CASHAPAMPA"
            ],
            [
                "id"=> "021905",
                "provincia_id"=> "021900",
                "nombre"=> "CHINGALPO"
            ],
            [
                "id"=> "021906",
                "provincia_id"=> "021900",
                "nombre"=> "HUAYLLABAMBA"
            ],
            [
                "id"=> "021907",
                "provincia_id"=> "021900",
                "nombre"=> "QUICHES"
            ],
            [
                "id"=> "021908",
                "provincia_id"=> "021900",
                "nombre"=> "RAGASH"
            ],
            [
                "id"=> "021909",
                "provincia_id"=> "021900",
                "nombre"=> "SAN JUAN"
            ],
            [
                "id"=> "021910",
                "provincia_id"=> "021900",
                "nombre"=> "SICSIBAMBA"
            ],
            [
                "id"=> "022001",
                "provincia_id"=> "022000",
                "nombre"=> "YUNGAY"
            ],
            [
                "id"=> "022002",
                "provincia_id"=> "022000",
                "nombre"=> "CASCAPARA"
            ],
            [
                "id"=> "022003",
                "provincia_id"=> "022000",
                "nombre"=> "MANCOS"
            ],
            [
                "id"=> "022004",
                "provincia_id"=> "022000",
                "nombre"=> "MATACOTO"
            ],
            [
                "id"=> "022005",
                "provincia_id"=> "022000",
                "nombre"=> "QUILLO"
            ],
            [
                "id"=> "022006",
                "provincia_id"=> "022000",
                "nombre"=> "RANRAHIRCA"
            ],
            [
                "id"=> "022007",
                "provincia_id"=> "022000",
                "nombre"=> "SHUPLUY"
            ],
            [
                "id"=> "022008",
                "provincia_id"=> "022000",
                "nombre"=> "YANAMA"
            ],
            [
                "id"=> "030101",
                "provincia_id"=> "030100",
                "nombre"=> "ABANCAY"
            ],
            [
                "id"=> "030102",
                "provincia_id"=> "030100",
                "nombre"=> "CHACOCHE"
            ],
            [
                "id"=> "030103",
                "provincia_id"=> "030100",
                "nombre"=> "CIRCA"
            ],
            [
                "id"=> "030104",
                "provincia_id"=> "030100",
                "nombre"=> "CURAHUASI"
            ],
            [
                "id"=> "030105",
                "provincia_id"=> "030100",
                "nombre"=> "HUANIPACA"
            ],
            [
                "id"=> "030106",
                "provincia_id"=> "030100",
                "nombre"=> "LAMBRAMA"
            ],
            [
                "id"=> "030107",
                "provincia_id"=> "030100",
                "nombre"=> "PICHIRHUA"
            ],
            [
                "id"=> "030108",
                "provincia_id"=> "030100",
                "nombre"=> "SAN PEDRO DE CACHORA"
            ],
            [
                "id"=> "030109",
                "provincia_id"=> "030100",
                "nombre"=> "TAMBURCO"
            ],
            [
                "id"=> "030201",
                "provincia_id"=> "030200",
                "nombre"=> "ANDAHUAYLAS"
            ],
            [
                "id"=> "030202",
                "provincia_id"=> "030200",
                "nombre"=> "ANDARAPA"
            ],
            [
                "id"=> "030203",
                "provincia_id"=> "030200",
                "nombre"=> "CHIARA"
            ],
            [
                "id"=> "030204",
                "provincia_id"=> "030200",
                "nombre"=> "HUANCARAMA"
            ],
            [
                "id"=> "030205",
                "provincia_id"=> "030200",
                "nombre"=> "HUANCARAY"
            ],
            [
                "id"=> "030206",
                "provincia_id"=> "030200",
                "nombre"=> "HUAYANA"
            ],
            [
                "id"=> "030207",
                "provincia_id"=> "030200",
                "nombre"=> "KISHUARA"
            ],
            [
                "id"=> "030208",
                "provincia_id"=> "030200",
                "nombre"=> "PACOBAMBA"
            ],
            [
                "id"=> "030209",
                "provincia_id"=> "030200",
                "nombre"=> "PACUCHA"
            ],
            [
                "id"=> "030210",
                "provincia_id"=> "030200",
                "nombre"=> "PAMPACHIRI"
            ],
            [
                "id"=> "030211",
                "provincia_id"=> "030200",
                "nombre"=> "POMACOCHA"
            ],
            [
                "id"=> "030212",
                "provincia_id"=> "030200",
                "nombre"=> "SAN ANTONIO DE CACHI"
            ],
            [
                "id"=> "030213",
                "provincia_id"=> "030200",
                "nombre"=> "SAN JERONIMO"
            ],
            [
                "id"=> "030214",
                "provincia_id"=> "030200",
                "nombre"=> "SAN MIGUEL DE CHACCRAMPA"
            ],
            [
                "id"=> "030215",
                "provincia_id"=> "030200",
                "nombre"=> "SANTA MARIA DE CHICMO"
            ],
            [
                "id"=> "030216",
                "provincia_id"=> "030200",
                "nombre"=> "TALAVERA"
            ],
            [
                "id"=> "030217",
                "provincia_id"=> "030200",
                "nombre"=> "TUMAY HUARACA"
            ],
            [
                "id"=> "030218",
                "provincia_id"=> "030200",
                "nombre"=> "TURPO"
            ],
            [
                "id"=> "030219",
                "provincia_id"=> "030200",
                "nombre"=> "KAQUIABAMBA"
            ],
            [
                "id"=> "030220",
                "provincia_id"=> "030200",
                "nombre"=> "JOSE MARIA ARGUEDAS"
            ],
            [
                "id"=> "030301",
                "provincia_id"=> "030300",
                "nombre"=> "ANTABAMBA"
            ],
            [
                "id"=> "030302",
                "provincia_id"=> "030300",
                "nombre"=> "EL ORO"
            ],
            [
                "id"=> "030303",
                "provincia_id"=> "030300",
                "nombre"=> "HUAQUIRCA"
            ],
            [
                "id"=> "030304",
                "provincia_id"=> "030300",
                "nombre"=> "JUAN ESPINOZA MEDRANO"
            ],
            [
                "id"=> "030305",
                "provincia_id"=> "030300",
                "nombre"=> "OROPESA"
            ],
            [
                "id"=> "030306",
                "provincia_id"=> "030300",
                "nombre"=> "PACHACONAS"
            ],
            [
                "id"=> "030307",
                "provincia_id"=> "030300",
                "nombre"=> "SABAINO"
            ],
            [
                "id"=> "030401",
                "provincia_id"=> "030400",
                "nombre"=> "CHALHUANCA"
            ],
            [
                "id"=> "030402",
                "provincia_id"=> "030400",
                "nombre"=> "CAPAYA"
            ],
            [
                "id"=> "030403",
                "provincia_id"=> "030400",
                "nombre"=> "CARAYBAMBA"
            ],
            [
                "id"=> "030404",
                "provincia_id"=> "030400",
                "nombre"=> "CHAPIMARCA"
            ],
            [
                "id"=> "030405",
                "provincia_id"=> "030400",
                "nombre"=> "COLCABAMBA"
            ],
            [
                "id"=> "030406",
                "provincia_id"=> "030400",
                "nombre"=> "COTARUSE"
            ],
            [
                "id"=> "030407",
                "provincia_id"=> "030400",
                "nombre"=> "HUAYLLO"
            ],
            [
                "id"=> "030408",
                "provincia_id"=> "030400",
                "nombre"=> "JUSTO APU SAHUARAURA"
            ],
            [
                "id"=> "030409",
                "provincia_id"=> "030400",
                "nombre"=> "LUCRE"
            ],
            [
                "id"=> "030410",
                "provincia_id"=> "030400",
                "nombre"=> "POCOHUANCA"
            ],
            [
                "id"=> "030411",
                "provincia_id"=> "030400",
                "nombre"=> "SAN JUAN DE CHACÑA"
            ],
            [
                "id"=> "030412",
                "provincia_id"=> "030400",
                "nombre"=> "SAÑAYCA"
            ],
            [
                "id"=> "030413",
                "provincia_id"=> "030400",
                "nombre"=> "SORAYA"
            ],
            [
                "id"=> "030414",
                "provincia_id"=> "030400",
                "nombre"=> "TAPAIRIHUA"
            ],
            [
                "id"=> "030415",
                "provincia_id"=> "030400",
                "nombre"=> "TINTAY"
            ],
            [
                "id"=> "030416",
                "provincia_id"=> "030400",
                "nombre"=> "TORAYA"
            ],
            [
                "id"=> "030417",
                "provincia_id"=> "030400",
                "nombre"=> "YANACA"
            ],
            [
                "id"=> "030501",
                "provincia_id"=> "030500",
                "nombre"=> "TAMBOBAMBA"
            ],
            [
                "id"=> "030502",
                "provincia_id"=> "030500",
                "nombre"=> "COTABAMBAS"
            ],
            [
                "id"=> "030503",
                "provincia_id"=> "030500",
                "nombre"=> "COYLLURQUI"
            ],
            [
                "id"=> "030504",
                "provincia_id"=> "030500",
                "nombre"=> "HAQUIRA"
            ],
            [
                "id"=> "030505",
                "provincia_id"=> "030500",
                "nombre"=> "MARA"
            ],
            [
                "id"=> "030506",
                "provincia_id"=> "030500",
                "nombre"=> "CHALLHUAHUACHO"
            ],
            [
                "id"=> "030601",
                "provincia_id"=> "030600",
                "nombre"=> "CHINCHEROS"
            ],
            [
                "id"=> "030602",
                "provincia_id"=> "030600",
                "nombre"=> "ANCO_HUALLO"
            ],
            [
                "id"=> "030603",
                "provincia_id"=> "030600",
                "nombre"=> "COCHARCAS"
            ],
            [
                "id"=> "030604",
                "provincia_id"=> "030600",
                "nombre"=> "HUACCANA"
            ],
            [
                "id"=> "030605",
                "provincia_id"=> "030600",
                "nombre"=> "OCOBAMBA"
            ],
            [
                "id"=> "030606",
                "provincia_id"=> "030600",
                "nombre"=> "ONGOY"
            ],
            [
                "id"=> "030607",
                "provincia_id"=> "030600",
                "nombre"=> "URANMARCA"
            ],
            [
                "id"=> "030608",
                "provincia_id"=> "030600",
                "nombre"=> "RANRACANCHA"
            ],
            [
                "id"=> "030701",
                "provincia_id"=> "030700",
                "nombre"=> "CHUQUIBAMBILLA"
            ],
            [
                "id"=> "030702",
                "provincia_id"=> "030700",
                "nombre"=> "CURPAHUASI"
            ],
            [
                "id"=> "030703",
                "provincia_id"=> "030700",
                "nombre"=> "GAMARRA"
            ],
            [
                "id"=> "030704",
                "provincia_id"=> "030700",
                "nombre"=> "HUAYLLATI"
            ],
            [
                "id"=> "030705",
                "provincia_id"=> "030700",
                "nombre"=> "MAMARA"
            ],
            [
                "id"=> "030706",
                "provincia_id"=> "030700",
                "nombre"=> "MICAELA BASTIDAS"
            ],
            [
                "id"=> "030707",
                "provincia_id"=> "030700",
                "nombre"=> "PATAYPAMPA"
            ],
            [
                "id"=> "030708",
                "provincia_id"=> "030700",
                "nombre"=> "PROGRESO"
            ],
            [
                "id"=> "030709",
                "provincia_id"=> "030700",
                "nombre"=> "SAN ANTONIO"
            ],
            [
                "id"=> "030710",
                "provincia_id"=> "030700",
                "nombre"=> "SANTA ROSA"
            ],
            [
                "id"=> "030711",
                "provincia_id"=> "030700",
                "nombre"=> "TURPAY"
            ],
            [
                "id"=> "030712",
                "provincia_id"=> "030700",
                "nombre"=> "VILCABAMBA"
            ],
            [
                "id"=> "030713",
                "provincia_id"=> "030700",
                "nombre"=> "VIRUNDO"
            ],
            [
                "id"=> "030714",
                "provincia_id"=> "030700",
                "nombre"=> "CURASCO"
            ],
            [
                "id"=> "040101",
                "provincia_id"=> "040100",
                "nombre"=> "AREQUIPA"
            ],
            [
                "id"=> "040102",
                "provincia_id"=> "040100",
                "nombre"=> "ALTO SELVA ALEGRE"
            ],
            [
                "id"=> "040103",
                "provincia_id"=> "040100",
                "nombre"=> "CAYMA"
            ],
            [
                "id"=> "040104",
                "provincia_id"=> "040100",
                "nombre"=> "CERRO COLORADO"
            ],
            [
                "id"=> "040105",
                "provincia_id"=> "040100",
                "nombre"=> "CHARACATO"
            ],
            [
                "id"=> "040106",
                "provincia_id"=> "040100",
                "nombre"=> "CHIGUATA"
            ],
            [
                "id"=> "040107",
                "provincia_id"=> "040100",
                "nombre"=> "JACOBO HUNTER"
            ],
            [
                "id"=> "040108",
                "provincia_id"=> "040100",
                "nombre"=> "LA JOYA"
            ],
            [
                "id"=> "040109",
                "provincia_id"=> "040100",
                "nombre"=> "MARIANO MELGAR"
            ],
            [
                "id"=> "040110",
                "provincia_id"=> "040100",
                "nombre"=> "MIRAFLORES"
            ],
            [
                "id"=> "040111",
                "provincia_id"=> "040100",
                "nombre"=> "MOLLEBAYA"
            ],
            [
                "id"=> "040112",
                "provincia_id"=> "040100",
                "nombre"=> "PAUCARPATA"
            ],
            [
                "id"=> "040113",
                "provincia_id"=> "040100",
                "nombre"=> "POCSI"
            ],
            [
                "id"=> "040114",
                "provincia_id"=> "040100",
                "nombre"=> "POLOBAYA"
            ],
            [
                "id"=> "040115",
                "provincia_id"=> "040100",
                "nombre"=> "QUEQUEÑA"
            ],
            [
                "id"=> "040116",
                "provincia_id"=> "040100",
                "nombre"=> "SABANDIA"
            ],
            [
                "id"=> "040117",
                "provincia_id"=> "040100",
                "nombre"=> "SACHACA"
            ],
            [
                "id"=> "040118",
                "provincia_id"=> "040100",
                "nombre"=> "SAN JUAN DE SIGUAS"
            ],
            [
                "id"=> "040119",
                "provincia_id"=> "040100",
                "nombre"=> "SAN JUAN DE TARUCANI"
            ],
            [
                "id"=> "040120",
                "provincia_id"=> "040100",
                "nombre"=> "SANTA ISABEL DE SIGUAS"
            ],
            [
                "id"=> "040121",
                "provincia_id"=> "040100",
                "nombre"=> "SANTA RITA DE SIGUAS"
            ],
            [
                "id"=> "040122",
                "provincia_id"=> "040100",
                "nombre"=> "SOCABAYA"
            ],
            [
                "id"=> "040123",
                "provincia_id"=> "040100",
                "nombre"=> "TIABAYA"
            ],
            [
                "id"=> "040124",
                "provincia_id"=> "040100",
                "nombre"=> "UCHUMAYO"
            ],
            [
                "id"=> "040125",
                "provincia_id"=> "040100",
                "nombre"=> "VITOR"
            ],
            [
                "id"=> "040126",
                "provincia_id"=> "040100",
                "nombre"=> "YANAHUARA"
            ],
            [
                "id"=> "040127",
                "provincia_id"=> "040100",
                "nombre"=> "YARABAMBA"
            ],
            [
                "id"=> "040128",
                "provincia_id"=> "040100",
                "nombre"=> "YURA"
            ],
            [
                "id"=> "040129",
                "provincia_id"=> "040100",
                "nombre"=> "JOSE LUIS BUSTAMANTE Y RIVERO"
            ],
            [
                "id"=> "040201",
                "provincia_id"=> "040200",
                "nombre"=> "CAMANA"
            ],
            [
                "id"=> "040202",
                "provincia_id"=> "040200",
                "nombre"=> "JOSE MARIA QUIMPER"
            ],
            [
                "id"=> "040203",
                "provincia_id"=> "040200",
                "nombre"=> "MARIANO NICOLAS VALCARCEL"
            ],
            [
                "id"=> "040204",
                "provincia_id"=> "040200",
                "nombre"=> "MARISCAL CACERES"
            ],
            [
                "id"=> "040205",
                "provincia_id"=> "040200",
                "nombre"=> "NICOLAS DE PIEROLA"
            ],
            [
                "id"=> "040206",
                "provincia_id"=> "040200",
                "nombre"=> "OCOÑA"
            ],
            [
                "id"=> "040207",
                "provincia_id"=> "040200",
                "nombre"=> "QUILCA"
            ],
            [
                "id"=> "040208",
                "provincia_id"=> "040200",
                "nombre"=> "SAMUEL PASTOR"
            ],
            [
                "id"=> "040301",
                "provincia_id"=> "040300",
                "nombre"=> "CARAVELI"
            ],
            [
                "id"=> "040302",
                "provincia_id"=> "040300",
                "nombre"=> "ACARI"
            ],
            [
                "id"=> "040303",
                "provincia_id"=> "040300",
                "nombre"=> "ATICO"
            ],
            [
                "id"=> "040304",
                "provincia_id"=> "040300",
                "nombre"=> "ATIQUIPA"
            ],
            [
                "id"=> "040305",
                "provincia_id"=> "040300",
                "nombre"=> "BELLA UNION"
            ],
            [
                "id"=> "040306",
                "provincia_id"=> "040300",
                "nombre"=> "CAHUACHO"
            ],
            [
                "id"=> "040307",
                "provincia_id"=> "040300",
                "nombre"=> "CHALA"
            ],
            [
                "id"=> "040308",
                "provincia_id"=> "040300",
                "nombre"=> "CHAPARRA"
            ],
            [
                "id"=> "040309",
                "provincia_id"=> "040300",
                "nombre"=> "HUANUHUANU"
            ],
            [
                "id"=> "040310",
                "provincia_id"=> "040300",
                "nombre"=> "JAQUI"
            ],
            [
                "id"=> "040311",
                "provincia_id"=> "040300",
                "nombre"=> "LOMAS"
            ],
            [
                "id"=> "040312",
                "provincia_id"=> "040300",
                "nombre"=> "QUICACHA"
            ],
            [
                "id"=> "040313",
                "provincia_id"=> "040300",
                "nombre"=> "YAUCA"
            ],
            [
                "id"=> "040401",
                "provincia_id"=> "040400",
                "nombre"=> "APLAO"
            ],
            [
                "id"=> "040402",
                "provincia_id"=> "040400",
                "nombre"=> "ANDAGUA"
            ],
            [
                "id"=> "040403",
                "provincia_id"=> "040400",
                "nombre"=> "AYO"
            ],
            [
                "id"=> "040404",
                "provincia_id"=> "040400",
                "nombre"=> "CHACHAS"
            ],
            [
                "id"=> "040405",
                "provincia_id"=> "040400",
                "nombre"=> "CHILCAYMARCA"
            ],
            [
                "id"=> "040406",
                "provincia_id"=> "040400",
                "nombre"=> "CHOCO"
            ],
            [
                "id"=> "040407",
                "provincia_id"=> "040400",
                "nombre"=> "HUANCARQUI"
            ],
            [
                "id"=> "040408",
                "provincia_id"=> "040400",
                "nombre"=> "MACHAGUAY"
            ],
            [
                "id"=> "040409",
                "provincia_id"=> "040400",
                "nombre"=> "ORCOPAMPA"
            ],
            [
                "id"=> "040410",
                "provincia_id"=> "040400",
                "nombre"=> "PAMPACOLCA"
            ],
            [
                "id"=> "040411",
                "provincia_id"=> "040400",
                "nombre"=> "TIPAN"
            ],
            [
                "id"=> "040412",
                "provincia_id"=> "040400",
                "nombre"=> "UÑON"
            ],
            [
                "id"=> "040413",
                "provincia_id"=> "040400",
                "nombre"=> "URACA"
            ],
            [
                "id"=> "040414",
                "provincia_id"=> "040400",
                "nombre"=> "VIRACO"
            ],
            [
                "id"=> "040501",
                "provincia_id"=> "040500",
                "nombre"=> "CHIVAY"
            ],
            [
                "id"=> "040502",
                "provincia_id"=> "040500",
                "nombre"=> "ACHOMA"
            ],
            [
                "id"=> "040503",
                "provincia_id"=> "040500",
                "nombre"=> "CABANACONDE"
            ],
            [
                "id"=> "040504",
                "provincia_id"=> "040500",
                "nombre"=> "CALLALLI"
            ],
            [
                "id"=> "040505",
                "provincia_id"=> "040500",
                "nombre"=> "CAYLLOMA"
            ],
            [
                "id"=> "040506",
                "provincia_id"=> "040500",
                "nombre"=> "COPORAQUE"
            ],
            [
                "id"=> "040507",
                "provincia_id"=> "040500",
                "nombre"=> "HUAMBO"
            ],
            [
                "id"=> "040508",
                "provincia_id"=> "040500",
                "nombre"=> "HUANCA"
            ],
            [
                "id"=> "040509",
                "provincia_id"=> "040500",
                "nombre"=> "ICHUPAMPA"
            ],
            [
                "id"=> "040510",
                "provincia_id"=> "040500",
                "nombre"=> "LARI"
            ],
            [
                "id"=> "040511",
                "provincia_id"=> "040500",
                "nombre"=> "LLUTA"
            ],
            [
                "id"=> "040512",
                "provincia_id"=> "040500",
                "nombre"=> "MACA"
            ],
            [
                "id"=> "040513",
                "provincia_id"=> "040500",
                "nombre"=> "MADRIGAL"
            ],
            [
                "id"=> "040514",
                "provincia_id"=> "040500",
                "nombre"=> "SAN ANTONIO DE CHUCA"
            ],
            [
                "id"=> "040515",
                "provincia_id"=> "040500",
                "nombre"=> "SIBAYO"
            ],
            [
                "id"=> "040516",
                "provincia_id"=> "040500",
                "nombre"=> "TAPAY"
            ],
            [
                "id"=> "040517",
                "provincia_id"=> "040500",
                "nombre"=> "TISCO"
            ],
            [
                "id"=> "040518",
                "provincia_id"=> "040500",
                "nombre"=> "TUTI"
            ],
            [
                "id"=> "040519",
                "provincia_id"=> "040500",
                "nombre"=> "YANQUE"
            ],
            [
                "id"=> "040520",
                "provincia_id"=> "040500",
                "nombre"=> "MAJES"
            ],
            [
                "id"=> "040601",
                "provincia_id"=> "040600",
                "nombre"=> "CHUQUIBAMBA"
            ],
            [
                "id"=> "040602",
                "provincia_id"=> "040600",
                "nombre"=> "ANDARAY"
            ],
            [
                "id"=> "040603",
                "provincia_id"=> "040600",
                "nombre"=> "CAYARANI"
            ],
            [
                "id"=> "040604",
                "provincia_id"=> "040600",
                "nombre"=> "CHICHAS"
            ],
            [
                "id"=> "040605",
                "provincia_id"=> "040600",
                "nombre"=> "IRAY"
            ],
            [
                "id"=> "040606",
                "provincia_id"=> "040600",
                "nombre"=> "RIO GRANDE"
            ],
            [
                "id"=> "040607",
                "provincia_id"=> "040600",
                "nombre"=> "SALAMANCA"
            ],
            [
                "id"=> "040608",
                "provincia_id"=> "040600",
                "nombre"=> "YANAQUIHUA"
            ],
            [
                "id"=> "040701",
                "provincia_id"=> "040700",
                "nombre"=> "MOLLENDO"
            ],
            [
                "id"=> "040702",
                "provincia_id"=> "040700",
                "nombre"=> "COCACHACRA"
            ],
            [
                "id"=> "040703",
                "provincia_id"=> "040700",
                "nombre"=> "DEAN VALDIVIA"
            ],
            [
                "id"=> "040704",
                "provincia_id"=> "040700",
                "nombre"=> "ISLAY"
            ],
            [
                "id"=> "040705",
                "provincia_id"=> "040700",
                "nombre"=> "MEJIA"
            ],
            [
                "id"=> "040706",
                "provincia_id"=> "040700",
                "nombre"=> "PUNTA DE BOMBON"
            ],
            [
                "id"=> "040801",
                "provincia_id"=> "040800",
                "nombre"=> "COTAHUASI"
            ],
            [
                "id"=> "040802",
                "provincia_id"=> "040800",
                "nombre"=> "ALCA"
            ],
            [
                "id"=> "040803",
                "provincia_id"=> "040800",
                "nombre"=> "CHARCANA"
            ],
            [
                "id"=> "040804",
                "provincia_id"=> "040800",
                "nombre"=> "HUAYNACOTAS"
            ],
            [
                "id"=> "040805",
                "provincia_id"=> "040800",
                "nombre"=> "PAMPAMARCA"
            ],
            [
                "id"=> "040806",
                "provincia_id"=> "040800",
                "nombre"=> "PUYCA"
            ],
            [
                "id"=> "040807",
                "provincia_id"=> "040800",
                "nombre"=> "QUECHUALLA"
            ],
            [
                "id"=> "040808",
                "provincia_id"=> "040800",
                "nombre"=> "SAYLA"
            ],
            [
                "id"=> "040809",
                "provincia_id"=> "040800",
                "nombre"=> "TAURIA"
            ],
            [
                "id"=> "040810",
                "provincia_id"=> "040800",
                "nombre"=> "TOMEPAMPA"
            ],
            [
                "id"=> "040811",
                "provincia_id"=> "040800",
                "nombre"=> "TORO"
            ],
            [
                "id"=> "050101",
                "provincia_id"=> "050100",
                "nombre"=> "AYACUCHO"
            ],
            [
                "id"=> "050102",
                "provincia_id"=> "050100",
                "nombre"=> "ACOCRO"
            ],
            [
                "id"=> "050103",
                "provincia_id"=> "050100",
                "nombre"=> "ACOS VINCHOS"
            ],
            [
                "id"=> "050104",
                "provincia_id"=> "050100",
                "nombre"=> "CARMEN ALTO"
            ],
            [
                "id"=> "050105",
                "provincia_id"=> "050100",
                "nombre"=> "CHIARA"
            ],
            [
                "id"=> "050106",
                "provincia_id"=> "050100",
                "nombre"=> "OCROS"
            ],
            [
                "id"=> "050107",
                "provincia_id"=> "050100",
                "nombre"=> "PACAYCASA"
            ],
            [
                "id"=> "050108",
                "provincia_id"=> "050100",
                "nombre"=> "QUINUA"
            ],
            [
                "id"=> "050109",
                "provincia_id"=> "050100",
                "nombre"=> "SAN JOSE DE TICLLAS"
            ],
            [
                "id"=> "050110",
                "provincia_id"=> "050100",
                "nombre"=> "SAN JUAN BAUTISTA"
            ],
            [
                "id"=> "050111",
                "provincia_id"=> "050100",
                "nombre"=> "SANTIAGO DE PISCHA"
            ],
            [
                "id"=> "050112",
                "provincia_id"=> "050100",
                "nombre"=> "SOCOS"
            ],
            [
                "id"=> "050113",
                "provincia_id"=> "050100",
                "nombre"=> "TAMBILLO"
            ],
            [
                "id"=> "050114",
                "provincia_id"=> "050100",
                "nombre"=> "VINCHOS"
            ],
            [
                "id"=> "050115",
                "provincia_id"=> "050100",
                "nombre"=> "JESUS NAZARENO"
            ],
            [
                "id"=> "050116",
                "provincia_id"=> "050100",
                "nombre"=> "ANDRES AVELINO CACERES DORREGARAY"
            ],
            [
                "id"=> "050201",
                "provincia_id"=> "050200",
                "nombre"=> "CANGALLO"
            ],
            [
                "id"=> "050202",
                "provincia_id"=> "050200",
                "nombre"=> "CHUSCHI"
            ],
            [
                "id"=> "050203",
                "provincia_id"=> "050200",
                "nombre"=> "LOS MOROCHUCOS"
            ],
            [
                "id"=> "050204",
                "provincia_id"=> "050200",
                "nombre"=> "MARIA PARADO DE BELLIDO"
            ],
            [
                "id"=> "050205",
                "provincia_id"=> "050200",
                "nombre"=> "PARAS"
            ],
            [
                "id"=> "050206",
                "provincia_id"=> "050200",
                "nombre"=> "TOTOS"
            ],
            [
                "id"=> "050301",
                "provincia_id"=> "050300",
                "nombre"=> "SANCOS"
            ],
            [
                "id"=> "050302",
                "provincia_id"=> "050300",
                "nombre"=> "CARAPO"
            ],
            [
                "id"=> "050303",
                "provincia_id"=> "050300",
                "nombre"=> "SACSAMARCA"
            ],
            [
                "id"=> "050304",
                "provincia_id"=> "050300",
                "nombre"=> "SANTIAGO DE LUCANAMARCA"
            ],
            [
                "id"=> "050401",
                "provincia_id"=> "050400",
                "nombre"=> "HUANTA"
            ],
            [
                "id"=> "050402",
                "provincia_id"=> "050400",
                "nombre"=> "AYAHUANCO"
            ],
            [
                "id"=> "050403",
                "provincia_id"=> "050400",
                "nombre"=> "HUAMANGUILLA"
            ],
            [
                "id"=> "050404",
                "provincia_id"=> "050400",
                "nombre"=> "IGUAIN"
            ],
            [
                "id"=> "050405",
                "provincia_id"=> "050400",
                "nombre"=> "LURICOCHA"
            ],
            [
                "id"=> "050406",
                "provincia_id"=> "050400",
                "nombre"=> "SANTILLANA"
            ],
            [
                "id"=> "050407",
                "provincia_id"=> "050400",
                "nombre"=> "SIVIA"
            ],
            [
                "id"=> "050408",
                "provincia_id"=> "050400",
                "nombre"=> "LLOCHEGUA"
            ],
            [
                "id"=> "050501",
                "provincia_id"=> "050500",
                "nombre"=> "SAN MIGUEL"
            ],
            [
                "id"=> "050502",
                "provincia_id"=> "050500",
                "nombre"=> "ANCO"
            ],
            [
                "id"=> "050503",
                "provincia_id"=> "050500",
                "nombre"=> "AYNA"
            ],
            [
                "id"=> "050504",
                "provincia_id"=> "050500",
                "nombre"=> "CHILCAS"
            ],
            [
                "id"=> "050505",
                "provincia_id"=> "050500",
                "nombre"=> "CHUNGUI"
            ],
            [
                "id"=> "050506",
                "provincia_id"=> "050500",
                "nombre"=> "LUIS CARRANZA"
            ],
            [
                "id"=> "050507",
                "provincia_id"=> "050500",
                "nombre"=> "SANTA ROSA"
            ],
            [
                "id"=> "050508",
                "provincia_id"=> "050500",
                "nombre"=> "TAMBO"
            ],
            [
                "id"=> "050509",
                "provincia_id"=> "050500",
                "nombre"=> "SAMUGARI"
            ],
            [
                "id"=> "050510",
                "provincia_id"=> "050500",
                "nombre"=> "ANCHIHUAY"
            ],
            [
                "id"=> "050601",
                "provincia_id"=> "050600",
                "nombre"=> "PUQUIO"
            ],
            [
                "id"=> "050602",
                "provincia_id"=> "050600",
                "nombre"=> "AUCARA"
            ],
            [
                "id"=> "050603",
                "provincia_id"=> "050600",
                "nombre"=> "CABANA"
            ],
            [
                "id"=> "050604",
                "provincia_id"=> "050600",
                "nombre"=> "CARMEN SALCEDO"
            ],
            [
                "id"=> "050605",
                "provincia_id"=> "050600",
                "nombre"=> "CHAVIÑA"
            ],
            [
                "id"=> "050606",
                "provincia_id"=> "050600",
                "nombre"=> "CHIPAO"
            ],
            [
                "id"=> "050607",
                "provincia_id"=> "050600",
                "nombre"=> "HUAC-HUAS"
            ],
            [
                "id"=> "050608",
                "provincia_id"=> "050600",
                "nombre"=> "LARAMATE"
            ],
            [
                "id"=> "050609",
                "provincia_id"=> "050600",
                "nombre"=> "LEONCIO PRADO"
            ],
            [
                "id"=> "050610",
                "provincia_id"=> "050600",
                "nombre"=> "LLAUTA"
            ],
            [
                "id"=> "050611",
                "provincia_id"=> "050600",
                "nombre"=> "LUCANAS"
            ],
            [
                "id"=> "050612",
                "provincia_id"=> "050600",
                "nombre"=> "OCAÑA"
            ],
            [
                "id"=> "050613",
                "provincia_id"=> "050600",
                "nombre"=> "OTOCA"
            ],
            [
                "id"=> "050614",
                "provincia_id"=> "050600",
                "nombre"=> "SAISA"
            ],
            [
                "id"=> "050615",
                "provincia_id"=> "050600",
                "nombre"=> "SAN CRISTOBAL"
            ],
            [
                "id"=> "050616",
                "provincia_id"=> "050600",
                "nombre"=> "SAN JUAN"
            ],
            [
                "id"=> "050617",
                "provincia_id"=> "050600",
                "nombre"=> "SAN PEDRO"
            ],
            [
                "id"=> "050618",
                "provincia_id"=> "050600",
                "nombre"=> "SAN PEDRO DE PALCO"
            ],
            [
                "id"=> "050619",
                "provincia_id"=> "050600",
                "nombre"=> "SANCOS"
            ],
            [
                "id"=> "050620",
                "provincia_id"=> "050600",
                "nombre"=> "SANTA ANA DE HUAYCAHUACHO"
            ],
            [
                "id"=> "050621",
                "provincia_id"=> "050600",
                "nombre"=> "SANTA LUCIA"
            ],
            [
                "id"=> "050701",
                "provincia_id"=> "050700",
                "nombre"=> "CORACORA"
            ],
            [
                "id"=> "050702",
                "provincia_id"=> "050700",
                "nombre"=> "CHUMPI"
            ],
            [
                "id"=> "050703",
                "provincia_id"=> "050700",
                "nombre"=> "CORONEL CASTAÑEDA"
            ],
            [
                "id"=> "050704",
                "provincia_id"=> "050700",
                "nombre"=> "PACAPAUSA"
            ],
            [
                "id"=> "050705",
                "provincia_id"=> "050700",
                "nombre"=> "PULLO"
            ],
            [
                "id"=> "050706",
                "provincia_id"=> "050700",
                "nombre"=> "PUYUSCA"
            ],
            [
                "id"=> "050707",
                "provincia_id"=> "050700",
                "nombre"=> "SAN FRANCISCO DE RAVACAYCO"
            ],
            [
                "id"=> "050708",
                "provincia_id"=> "050700",
                "nombre"=> "UPAHUACHO"
            ],
            [
                "id"=> "050801",
                "provincia_id"=> "050800",
                "nombre"=> "PAUSA"
            ],
            [
                "id"=> "050802",
                "provincia_id"=> "050800",
                "nombre"=> "COLTA"
            ],
            [
                "id"=> "050803",
                "provincia_id"=> "050800",
                "nombre"=> "CORCULLA"
            ],
            [
                "id"=> "050804",
                "provincia_id"=> "050800",
                "nombre"=> "LAMPA"
            ],
            [
                "id"=> "050805",
                "provincia_id"=> "050800",
                "nombre"=> "MARCABAMBA"
            ],
            [
                "id"=> "050806",
                "provincia_id"=> "050800",
                "nombre"=> "OYOLO"
            ],
            [
                "id"=> "050807",
                "provincia_id"=> "050800",
                "nombre"=> "PARARCA"
            ],
            [
                "id"=> "050808",
                "provincia_id"=> "050800",
                "nombre"=> "SAN JAVIER DE ALPABAMBA"
            ],
            [
                "id"=> "050809",
                "provincia_id"=> "050800",
                "nombre"=> "SAN JOSE DE USHUA"
            ],
            [
                "id"=> "050810",
                "provincia_id"=> "050800",
                "nombre"=> "SARA SARA"
            ],
            [
                "id"=> "050901",
                "provincia_id"=> "050900",
                "nombre"=> "QUEROBAMBA"
            ],
            [
                "id"=> "050902",
                "provincia_id"=> "050900",
                "nombre"=> "BELEN"
            ],
            [
                "id"=> "050903",
                "provincia_id"=> "050900",
                "nombre"=> "CHALCOS"
            ],
            [
                "id"=> "050904",
                "provincia_id"=> "050900",
                "nombre"=> "CHILCAYOC"
            ],
            [
                "id"=> "050905",
                "provincia_id"=> "050900",
                "nombre"=> "HUACAÑA"
            ],
            [
                "id"=> "050906",
                "provincia_id"=> "050900",
                "nombre"=> "MORCOLLA"
            ],
            [
                "id"=> "050907",
                "provincia_id"=> "050900",
                "nombre"=> "PAICO"
            ],
            [
                "id"=> "050908",
                "provincia_id"=> "050900",
                "nombre"=> "SAN PEDRO DE LARCAY"
            ],
            [
                "id"=> "050909",
                "provincia_id"=> "050900",
                "nombre"=> "SAN SALVADOR DE QUIJE"
            ],
            [
                "id"=> "050910",
                "provincia_id"=> "050900",
                "nombre"=> "SANTIAGO DE PAUCARAY"
            ],
            [
                "id"=> "050911",
                "provincia_id"=> "050900",
                "nombre"=> "SORAS"
            ],
            [
                "id"=> "051001",
                "provincia_id"=> "051000",
                "nombre"=> "HUANCAPI"
            ],
            [
                "id"=> "051002",
                "provincia_id"=> "051000",
                "nombre"=> "ALCAMENCA"
            ],
            [
                "id"=> "051003",
                "provincia_id"=> "051000",
                "nombre"=> "APONGO"
            ],
            [
                "id"=> "051004",
                "provincia_id"=> "051000",
                "nombre"=> "ASQUIPATA"
            ],
            [
                "id"=> "051005",
                "provincia_id"=> "051000",
                "nombre"=> "CANARIA"
            ],
            [
                "id"=> "051006",
                "provincia_id"=> "051000",
                "nombre"=> "CAYARA"
            ],
            [
                "id"=> "051007",
                "provincia_id"=> "051000",
                "nombre"=> "COLCA"
            ],
            [
                "id"=> "051008",
                "provincia_id"=> "051000",
                "nombre"=> "HUAMANQUIQUIA"
            ],
            [
                "id"=> "051009",
                "provincia_id"=> "051000",
                "nombre"=> "HUANCARAYLLA"
            ],
            [
                "id"=> "051010",
                "provincia_id"=> "051000",
                "nombre"=> "HUAYA"
            ],
            [
                "id"=> "051011",
                "provincia_id"=> "051000",
                "nombre"=> "SARHUA"
            ],
            [
                "id"=> "051012",
                "provincia_id"=> "051000",
                "nombre"=> "VILCANCHOS"
            ],
            [
                "id"=> "051101",
                "provincia_id"=> "051100",
                "nombre"=> "VILCAS HUAMAN"
            ],
            [
                "id"=> "051102",
                "provincia_id"=> "051100",
                "nombre"=> "ACCOMARCA"
            ],
            [
                "id"=> "051103",
                "provincia_id"=> "051100",
                "nombre"=> "CARHUANCA"
            ],
            [
                "id"=> "051104",
                "provincia_id"=> "051100",
                "nombre"=> "CONCEPCION"
            ],
            [
                "id"=> "051105",
                "provincia_id"=> "051100",
                "nombre"=> "HUAMBALPA"
            ],
            [
                "id"=> "051106",
                "provincia_id"=> "051100",
                "nombre"=> "INDEPENDENCIA"
            ],
            [
                "id"=> "051107",
                "provincia_id"=> "051100",
                "nombre"=> "SAURAMA"
            ],
            [
                "id"=> "051108",
                "provincia_id"=> "051100",
                "nombre"=> "VISCHONGO"
            ],
            [
                "id"=> "060101",
                "provincia_id"=> "060100",
                "nombre"=> "CAJAMARCA"
            ],
            [
                "id"=> "060102",
                "provincia_id"=> "060100",
                "nombre"=> "ASUNCION"
            ],
            [
                "id"=> "060103",
                "provincia_id"=> "060100",
                "nombre"=> "CHETILLA"
            ],
            [
                "id"=> "060104",
                "provincia_id"=> "060100",
                "nombre"=> "COSPAN"
            ],
            [
                "id"=> "060105",
                "provincia_id"=> "060100",
                "nombre"=> "ENCAÑADA"
            ],
            [
                "id"=> "060106",
                "provincia_id"=> "060100",
                "nombre"=> "JESUS"
            ],
            [
                "id"=> "060107",
                "provincia_id"=> "060100",
                "nombre"=> "LLACANORA"
            ],
            [
                "id"=> "060108",
                "provincia_id"=> "060100",
                "nombre"=> "LOS BAÑOS DEL INCA"
            ],
            [
                "id"=> "060109",
                "provincia_id"=> "060100",
                "nombre"=> "MAGDALENA"
            ],
            [
                "id"=> "060110",
                "provincia_id"=> "060100",
                "nombre"=> "MATARA"
            ],
            [
                "id"=> "060111",
                "provincia_id"=> "060100",
                "nombre"=> "NAMORA"
            ],
            [
                "id"=> "060112",
                "provincia_id"=> "060100",
                "nombre"=> "SAN JUAN"
            ],
            [
                "id"=> "060201",
                "provincia_id"=> "060200",
                "nombre"=> "CAJABAMBA"
            ],
            [
                "id"=> "060202",
                "provincia_id"=> "060200",
                "nombre"=> "CACHACHI"
            ],
            [
                "id"=> "060203",
                "provincia_id"=> "060200",
                "nombre"=> "CONDEBAMBA"
            ],
            [
                "id"=> "060204",
                "provincia_id"=> "060200",
                "nombre"=> "SITACOCHA"
            ],
            [
                "id"=> "060301",
                "provincia_id"=> "060300",
                "nombre"=> "CELENDIN"
            ],
            [
                "id"=> "060302",
                "provincia_id"=> "060300",
                "nombre"=> "CHUMUCH"
            ],
            [
                "id"=> "060303",
                "provincia_id"=> "060300",
                "nombre"=> "CORTEGANA"
            ],
            [
                "id"=> "060304",
                "provincia_id"=> "060300",
                "nombre"=> "HUASMIN"
            ],
            [
                "id"=> "060305",
                "provincia_id"=> "060300",
                "nombre"=> "JORGE CHAVEZ"
            ],
            [
                "id"=> "060306",
                "provincia_id"=> "060300",
                "nombre"=> "JOSE GALVEZ"
            ],
            [
                "id"=> "060307",
                "provincia_id"=> "060300",
                "nombre"=> "MIGUEL IGLESIAS"
            ],
            [
                "id"=> "060308",
                "provincia_id"=> "060300",
                "nombre"=> "OXAMARCA"
            ],
            [
                "id"=> "060309",
                "provincia_id"=> "060300",
                "nombre"=> "SOROCHUCO"
            ],
            [
                "id"=> "060310",
                "provincia_id"=> "060300",
                "nombre"=> "SUCRE"
            ],
            [
                "id"=> "060311",
                "provincia_id"=> "060300",
                "nombre"=> "UTCO"
            ],
            [
                "id"=> "060312",
                "provincia_id"=> "060300",
                "nombre"=> "LA LIBERTAD DE PALLAN"
            ],
            [
                "id"=> "060401",
                "provincia_id"=> "060400",
                "nombre"=> "CHOTA"
            ],
            [
                "id"=> "060402",
                "provincia_id"=> "060400",
                "nombre"=> "ANGUIA"
            ],
            [
                "id"=> "060403",
                "provincia_id"=> "060400",
                "nombre"=> "CHADIN"
            ],
            [
                "id"=> "060404",
                "provincia_id"=> "060400",
                "nombre"=> "CHIGUIRIP"
            ],
            [
                "id"=> "060405",
                "provincia_id"=> "060400",
                "nombre"=> "CHIMBAN"
            ],
            [
                "id"=> "060406",
                "provincia_id"=> "060400",
                "nombre"=> "CHOROPAMPA"
            ],
            [
                "id"=> "060407",
                "provincia_id"=> "060400",
                "nombre"=> "COCHABAMBA"
            ],
            [
                "id"=> "060408",
                "provincia_id"=> "060400",
                "nombre"=> "CONCHAN"
            ],
            [
                "id"=> "060409",
                "provincia_id"=> "060400",
                "nombre"=> "HUAMBOS"
            ],
            [
                "id"=> "060410",
                "provincia_id"=> "060400",
                "nombre"=> "LAJAS"
            ],
            [
                "id"=> "060411",
                "provincia_id"=> "060400",
                "nombre"=> "LLAMA"
            ],
            [
                "id"=> "060412",
                "provincia_id"=> "060400",
                "nombre"=> "MIRACOSTA"
            ],
            [
                "id"=> "060413",
                "provincia_id"=> "060400",
                "nombre"=> "PACCHA"
            ],
            [
                "id"=> "060414",
                "provincia_id"=> "060400",
                "nombre"=> "PION"
            ],
            [
                "id"=> "060415",
                "provincia_id"=> "060400",
                "nombre"=> "QUEROCOTO"
            ],
            [
                "id"=> "060416",
                "provincia_id"=> "060400",
                "nombre"=> "SAN JUAN DE LICUPIS"
            ],
            [
                "id"=> "060417",
                "provincia_id"=> "060400",
                "nombre"=> "TACABAMBA"
            ],
            [
                "id"=> "060418",
                "provincia_id"=> "060400",
                "nombre"=> "TOCMOCHE"
            ],
            [
                "id"=> "060419",
                "provincia_id"=> "060400",
                "nombre"=> "CHALAMARCA"
            ],
            [
                "id"=> "060501",
                "provincia_id"=> "060500",
                "nombre"=> "CONTUMAZA"
            ],
            [
                "id"=> "060502",
                "provincia_id"=> "060500",
                "nombre"=> "CHILETE"
            ],
            [
                "id"=> "060503",
                "provincia_id"=> "060500",
                "nombre"=> "CUPISNIQUE"
            ],
            [
                "id"=> "060504",
                "provincia_id"=> "060500",
                "nombre"=> "GUZMANGO"
            ],
            [
                "id"=> "060505",
                "provincia_id"=> "060500",
                "nombre"=> "SAN BENITO"
            ],
            [
                "id"=> "060506",
                "provincia_id"=> "060500",
                "nombre"=> "SANTA CRUZ DE TOLED"
            ],
            [
                "id"=> "060507",
                "provincia_id"=> "060500",
                "nombre"=> "TANTARICA"
            ],
            [
                "id"=> "060508",
                "provincia_id"=> "060500",
                "nombre"=> "YONAN"
            ],
            [
                "id"=> "060601",
                "provincia_id"=> "060600",
                "nombre"=> "CUTERVO"
            ],
            [
                "id"=> "060602",
                "provincia_id"=> "060600",
                "nombre"=> "CALLAYUC"
            ],
            [
                "id"=> "060603",
                "provincia_id"=> "060600",
                "nombre"=> "CHOROS"
            ],
            [
                "id"=> "060604",
                "provincia_id"=> "060600",
                "nombre"=> "CUJILLO"
            ],
            [
                "id"=> "060605",
                "provincia_id"=> "060600",
                "nombre"=> "LA RAMADA"
            ],
            [
                "id"=> "060606",
                "provincia_id"=> "060600",
                "nombre"=> "PIMPINGOS"
            ],
            [
                "id"=> "060607",
                "provincia_id"=> "060600",
                "nombre"=> "QUEROCOTILLO"
            ],
            [
                "id"=> "060608",
                "provincia_id"=> "060600",
                "nombre"=> "SAN ANDRES DE CUTERVO"
            ],
            [
                "id"=> "060609",
                "provincia_id"=> "060600",
                "nombre"=> "SAN JUAN DE CUTERVO"
            ],
            [
                "id"=> "060610",
                "provincia_id"=> "060600",
                "nombre"=> "SAN LUIS DE LUCMA"
            ],
            [
                "id"=> "060611",
                "provincia_id"=> "060600",
                "nombre"=> "SANTA CRUZ"
            ],
            [
                "id"=> "060612",
                "provincia_id"=> "060600",
                "nombre"=> "SANTO DOMINGO DE LA CAPILLA"
            ],
            [
                "id"=> "060613",
                "provincia_id"=> "060600",
                "nombre"=> "SANTO TOMAS"
            ],
            [
                "id"=> "060614",
                "provincia_id"=> "060600",
                "nombre"=> "SOCOTA"
            ],
            [
                "id"=> "060615",
                "provincia_id"=> "060600",
                "nombre"=> "TORIBIO CASANOVA"
            ],
            [
                "id"=> "060701",
                "provincia_id"=> "060700",
                "nombre"=> "BAMBAMARCA"
            ],
            [
                "id"=> "060702",
                "provincia_id"=> "060700",
                "nombre"=> "CHUGUR"
            ],
            [
                "id"=> "060703",
                "provincia_id"=> "060700",
                "nombre"=> "HUALGAYOC"
            ],
            [
                "id"=> "060801",
                "provincia_id"=> "060800",
                "nombre"=> "JAEN"
            ],
            [
                "id"=> "060802",
                "provincia_id"=> "060800",
                "nombre"=> "BELLAVISTA"
            ],
            [
                "id"=> "060803",
                "provincia_id"=> "060800",
                "nombre"=> "CHONTALI"
            ],
            [
                "id"=> "060804",
                "provincia_id"=> "060800",
                "nombre"=> "COLASAY"
            ],
            [
                "id"=> "060805",
                "provincia_id"=> "060800",
                "nombre"=> "HUABAL"
            ],
            [
                "id"=> "060806",
                "provincia_id"=> "060800",
                "nombre"=> "LAS PIRIAS"
            ],
            [
                "id"=> "060807",
                "provincia_id"=> "060800",
                "nombre"=> "POMAHUACA"
            ],
            [
                "id"=> "060808",
                "provincia_id"=> "060800",
                "nombre"=> "PUCARA"
            ],
            [
                "id"=> "060809",
                "provincia_id"=> "060800",
                "nombre"=> "SALLIQUE"
            ],
            [
                "id"=> "060810",
                "provincia_id"=> "060800",
                "nombre"=> "SAN FELIPE"
            ],
            [
                "id"=> "060811",
                "provincia_id"=> "060800",
                "nombre"=> "SAN JOSE DEL ALTO"
            ],
            [
                "id"=> "060812",
                "provincia_id"=> "060800",
                "nombre"=> "SANTA ROSA"
            ],
            [
                "id"=> "060901",
                "provincia_id"=> "060900",
                "nombre"=> "SAN IGNACIO"
            ],
            [
                "id"=> "060902",
                "provincia_id"=> "060900",
                "nombre"=> "CHIRINOS"
            ],
            [
                "id"=> "060903",
                "provincia_id"=> "060900",
                "nombre"=> "HUARANGO"
            ],
            [
                "id"=> "060904",
                "provincia_id"=> "060900",
                "nombre"=> "LA COIPA"
            ],
            [
                "id"=> "060905",
                "provincia_id"=> "060900",
                "nombre"=> "NAMBALLE"
            ],
            [
                "id"=> "060906",
                "provincia_id"=> "060900",
                "nombre"=> "SAN JOSE DE LOURDES"
            ],
            [
                "id"=> "060907",
                "provincia_id"=> "060900",
                "nombre"=> "TABACONAS"
            ],
            [
                "id"=> "061001",
                "provincia_id"=> "061000",
                "nombre"=> "PEDRO GALVEZ"
            ],
            [
                "id"=> "061002",
                "provincia_id"=> "061000",
                "nombre"=> "CHANCAY"
            ],
            [
                "id"=> "061003",
                "provincia_id"=> "061000",
                "nombre"=> "EDUARDO VILLANUEVA"
            ],
            [
                "id"=> "061004",
                "provincia_id"=> "061000",
                "nombre"=> "GREGORIO PITA"
            ],
            [
                "id"=> "061005",
                "provincia_id"=> "061000",
                "nombre"=> "ICHOCAN"
            ],
            [
                "id"=> "061006",
                "provincia_id"=> "061000",
                "nombre"=> "JOSE MANUEL QUIROZ"
            ],
            [
                "id"=> "061007",
                "provincia_id"=> "061000",
                "nombre"=> "JOSE SABOGAL"
            ],
            [
                "id"=> "061101",
                "provincia_id"=> "061100",
                "nombre"=> "SAN MIGUEL"
            ],
            [
                "id"=> "061102",
                "provincia_id"=> "061100",
                "nombre"=> "BOLIVAR"
            ],
            [
                "id"=> "061103",
                "provincia_id"=> "061100",
                "nombre"=> "CALQUIS"
            ],
            [
                "id"=> "061104",
                "provincia_id"=> "061100",
                "nombre"=> "CATILLUC"
            ],
            [
                "id"=> "061105",
                "provincia_id"=> "061100",
                "nombre"=> "EL PRADO"
            ],
            [
                "id"=> "061106",
                "provincia_id"=> "061100",
                "nombre"=> "LA FLORIDA"
            ],
            [
                "id"=> "061107",
                "provincia_id"=> "061100",
                "nombre"=> "LLAPA"
            ],
            [
                "id"=> "061108",
                "provincia_id"=> "061100",
                "nombre"=> "NANCHOC"
            ],
            [
                "id"=> "061109",
                "provincia_id"=> "061100",
                "nombre"=> "NIEPOS"
            ],
            [
                "id"=> "061110",
                "provincia_id"=> "061100",
                "nombre"=> "SAN GREGORIO"
            ],
            [
                "id"=> "061111",
                "provincia_id"=> "061100",
                "nombre"=> "SAN SILVESTRE DE COCHAN"
            ],
            [
                "id"=> "061112",
                "provincia_id"=> "061100",
                "nombre"=> "TONGOD"
            ],
            [
                "id"=> "061113",
                "provincia_id"=> "061100",
                "nombre"=> "UNION AGUA BLANCA"
            ],
            [
                "id"=> "061201",
                "provincia_id"=> "061200",
                "nombre"=> "SAN PABLO"
            ],
            [
                "id"=> "061202",
                "provincia_id"=> "061200",
                "nombre"=> "SAN BERNARDINO"
            ],
            [
                "id"=> "061203",
                "provincia_id"=> "061200",
                "nombre"=> "SAN LUIS"
            ],
            [
                "id"=> "061204",
                "provincia_id"=> "061200",
                "nombre"=> "TUMBADEN"
            ],
            [
                "id"=> "061301",
                "provincia_id"=> "061300",
                "nombre"=> "SANTA CRUZ"
            ],
            [
                "id"=> "061302",
                "provincia_id"=> "061300",
                "nombre"=> "ANDABAMBA"
            ],
            [
                "id"=> "061303",
                "provincia_id"=> "061300",
                "nombre"=> "CATACHE"
            ],
            [
                "id"=> "061304",
                "provincia_id"=> "061300",
                "nombre"=> "CHANCAYBAÑOS"
            ],
            [
                "id"=> "061305",
                "provincia_id"=> "061300",
                "nombre"=> "LA ESPERANZA"
            ],
            [
                "id"=> "061306",
                "provincia_id"=> "061300",
                "nombre"=> "NINABAMBA"
            ],
            [
                "id"=> "061307",
                "provincia_id"=> "061300",
                "nombre"=> "PULAN"
            ],
            [
                "id"=> "061308",
                "provincia_id"=> "061300",
                "nombre"=> "SAUCEPAMPA"
            ],
            [
                "id"=> "061309",
                "provincia_id"=> "061300",
                "nombre"=> "SEXI"
            ],
            [
                "id"=> "061310",
                "provincia_id"=> "061300",
                "nombre"=> "UTICYACU"
            ],
            [
                "id"=> "061311",
                "provincia_id"=> "061300",
                "nombre"=> "YAUYUCAN"
            ],
            [
                "id"=> "070101",
                "provincia_id"=> "070100",
                "nombre"=> "CALLAO"
            ],
            [
                "id"=> "070102",
                "provincia_id"=> "070100",
                "nombre"=> "BELLAVISTA"
            ],
            [
                "id"=> "070103",
                "provincia_id"=> "070100",
                "nombre"=> "CARMEN DE LA LEGUA REYNOSO"
            ],
            [
                "id"=> "070104",
                "provincia_id"=> "070100",
                "nombre"=> "LA PERLA"
            ],
            [
                "id"=> "070105",
                "provincia_id"=> "070100",
                "nombre"=> "LA PUNTA"
            ],
            [
                "id"=> "070106",
                "provincia_id"=> "070100",
                "nombre"=> "VENTANILLA"
            ],
            [
                "id"=> "070107",
                "provincia_id"=> "070100",
                "nombre"=> "MI PERU"
            ],
            [
                "id"=> "080101",
                "provincia_id"=> "080100",
                "nombre"=> "CUSCO"
            ],
            [
                "id"=> "080102",
                "provincia_id"=> "080100",
                "nombre"=> "CCORCA"
            ],
            [
                "id"=> "080103",
                "provincia_id"=> "080100",
                "nombre"=> "POROY"
            ],
            [
                "id"=> "080104",
                "provincia_id"=> "080100",
                "nombre"=> "SAN JERONIMO"
            ],
            [
                "id"=> "080105",
                "provincia_id"=> "080100",
                "nombre"=> "SAN SEBASTIAN"
            ],
            [
                "id"=> "080106",
                "provincia_id"=> "080100",
                "nombre"=> "SANTIAGO"
            ],
            [
                "id"=> "080107",
                "provincia_id"=> "080100",
                "nombre"=> "SAYLLA"
            ],
            [
                "id"=> "080108",
                "provincia_id"=> "080100",
                "nombre"=> "WANCHAQ"
            ],
            [
                "id"=> "080201",
                "provincia_id"=> "080200",
                "nombre"=> "ACOMAYO"
            ],
            [
                "id"=> "080202",
                "provincia_id"=> "080200",
                "nombre"=> "ACOPIA"
            ],
            [
                "id"=> "080203",
                "provincia_id"=> "080200",
                "nombre"=> "ACOS"
            ],
            [
                "id"=> "080204",
                "provincia_id"=> "080200",
                "nombre"=> "MOSOC LLACTA"
            ],
            [
                "id"=> "080205",
                "provincia_id"=> "080200",
                "nombre"=> "POMACANCHI"
            ],
            [
                "id"=> "080206",
                "provincia_id"=> "080200",
                "nombre"=> "RONDOCAN"
            ],
            [
                "id"=> "080207",
                "provincia_id"=> "080200",
                "nombre"=> "SANGARARA"
            ],
            [
                "id"=> "080301",
                "provincia_id"=> "080300",
                "nombre"=> "ANTA"
            ],
            [
                "id"=> "080302",
                "provincia_id"=> "080300",
                "nombre"=> "ANCAHUASI"
            ],
            [
                "id"=> "080303",
                "provincia_id"=> "080300",
                "nombre"=> "CACHIMAYO"
            ],
            [
                "id"=> "080304",
                "provincia_id"=> "080300",
                "nombre"=> "CHINCHAYPUJIO"
            ],
            [
                "id"=> "080305",
                "provincia_id"=> "080300",
                "nombre"=> "HUAROCONDO"
            ],
            [
                "id"=> "080306",
                "provincia_id"=> "080300",
                "nombre"=> "LIMATAMBO"
            ],
            [
                "id"=> "080307",
                "provincia_id"=> "080300",
                "nombre"=> "MOLLEPATA"
            ],
            [
                "id"=> "080308",
                "provincia_id"=> "080300",
                "nombre"=> "PUCYURA"
            ],
            [
                "id"=> "080309",
                "provincia_id"=> "080300",
                "nombre"=> "ZURITE"
            ],
            [
                "id"=> "080401",
                "provincia_id"=> "080400",
                "nombre"=> "CALCA"
            ],
            [
                "id"=> "080402",
                "provincia_id"=> "080400",
                "nombre"=> "COYA"
            ],
            [
                "id"=> "080403",
                "provincia_id"=> "080400",
                "nombre"=> "LAMAY"
            ],
            [
                "id"=> "080404",
                "provincia_id"=> "080400",
                "nombre"=> "LARES"
            ],
            [
                "id"=> "080405",
                "provincia_id"=> "080400",
                "nombre"=> "PISAC"
            ],
            [
                "id"=> "080406",
                "provincia_id"=> "080400",
                "nombre"=> "SAN SALVADOR"
            ],
            [
                "id"=> "080407",
                "provincia_id"=> "080400",
                "nombre"=> "TARAY"
            ],
            [
                "id"=> "080408",
                "provincia_id"=> "080400",
                "nombre"=> "YANATILE"
            ],
            [
                "id"=> "080501",
                "provincia_id"=> "080500",
                "nombre"=> "YANAOCA"
            ],
            [
                "id"=> "080502",
                "provincia_id"=> "080500",
                "nombre"=> "CHECCA"
            ],
            [
                "id"=> "080503",
                "provincia_id"=> "080500",
                "nombre"=> "KUNTURKANKI"
            ],
            [
                "id"=> "080504",
                "provincia_id"=> "080500",
                "nombre"=> "LANGUI"
            ],
            [
                "id"=> "080505",
                "provincia_id"=> "080500",
                "nombre"=> "LAYO"
            ],
            [
                "id"=> "080506",
                "provincia_id"=> "080500",
                "nombre"=> "PAMPAMARCA"
            ],
            [
                "id"=> "080507",
                "provincia_id"=> "080500",
                "nombre"=> "QUEHUE"
            ],
            [
                "id"=> "080508",
                "provincia_id"=> "080500",
                "nombre"=> "TUPAC AMARU"
            ],
            [
                "id"=> "080601",
                "provincia_id"=> "080600",
                "nombre"=> "SICUANI"
            ],
            [
                "id"=> "080602",
                "provincia_id"=> "080600",
                "nombre"=> "CHECACUPE"
            ],
            [
                "id"=> "080603",
                "provincia_id"=> "080600",
                "nombre"=> "COMBAPATA"
            ],
            [
                "id"=> "080604",
                "provincia_id"=> "080600",
                "nombre"=> "MARANGANI"
            ],
            [
                "id"=> "080605",
                "provincia_id"=> "080600",
                "nombre"=> "PITUMARCA"
            ],
            [
                "id"=> "080606",
                "provincia_id"=> "080600",
                "nombre"=> "SAN PABLO"
            ],
            [
                "id"=> "080607",
                "provincia_id"=> "080600",
                "nombre"=> "SAN PEDRO"
            ],
            [
                "id"=> "080608",
                "provincia_id"=> "080600",
                "nombre"=> "TINTA"
            ],
            [
                "id"=> "080701",
                "provincia_id"=> "080700",
                "nombre"=> "SANTO TOMAS"
            ],
            [
                "id"=> "080702",
                "provincia_id"=> "080700",
                "nombre"=> "CAPACMARCA"
            ],
            [
                "id"=> "080703",
                "provincia_id"=> "080700",
                "nombre"=> "CHAMACA"
            ],
            [
                "id"=> "080704",
                "provincia_id"=> "080700",
                "nombre"=> "COLQUEMARCA"
            ],
            [
                "id"=> "080705",
                "provincia_id"=> "080700",
                "nombre"=> "LIVITACA"
            ],
            [
                "id"=> "080706",
                "provincia_id"=> "080700",
                "nombre"=> "LLUSCO"
            ],
            [
                "id"=> "080707",
                "provincia_id"=> "080700",
                "nombre"=> "QUIÑOTA"
            ],
            [
                "id"=> "080708",
                "provincia_id"=> "080700",
                "nombre"=> "VELILLE"
            ],
            [
                "id"=> "080801",
                "provincia_id"=> "080800",
                "nombre"=> "ESPINAR"
            ],
            [
                "id"=> "080802",
                "provincia_id"=> "080800",
                "nombre"=> "CONDOROMA"
            ],
            [
                "id"=> "080803",
                "provincia_id"=> "080800",
                "nombre"=> "COPORAQUE"
            ],
            [
                "id"=> "080804",
                "provincia_id"=> "080800",
                "nombre"=> "OCORURO"
            ],
            [
                "id"=> "080805",
                "provincia_id"=> "080800",
                "nombre"=> "PALLPATA"
            ],
            [
                "id"=> "080806",
                "provincia_id"=> "080800",
                "nombre"=> "PICHIGUA"
            ],
            [
                "id"=> "080807",
                "provincia_id"=> "080800",
                "nombre"=> "SUYCKUTAMBO"
            ],
            [
                "id"=> "080808",
                "provincia_id"=> "080800",
                "nombre"=> "ALTO PICHIGUA"
            ],
            [
                "id"=> "080901",
                "provincia_id"=> "080900",
                "nombre"=> "SANTA ANA"
            ],
            [
                "id"=> "080902",
                "provincia_id"=> "080900",
                "nombre"=> "ECHARATE"
            ],
            [
                "id"=> "080903",
                "provincia_id"=> "080900",
                "nombre"=> "HUAYOPATA"
            ],
            [
                "id"=> "080904",
                "provincia_id"=> "080900",
                "nombre"=> "MARANURA"
            ],
            [
                "id"=> "080905",
                "provincia_id"=> "080900",
                "nombre"=> "OCOBAMBA"
            ],
            [
                "id"=> "080906",
                "provincia_id"=> "080900",
                "nombre"=> "QUELLOUNO"
            ],
            [
                "id"=> "080907",
                "provincia_id"=> "080900",
                "nombre"=> "KIMBIRI"
            ],
            [
                "id"=> "080908",
                "provincia_id"=> "080900",
                "nombre"=> "SANTA TERESA"
            ],
            [
                "id"=> "080909",
                "provincia_id"=> "080900",
                "nombre"=> "VILCABAMBA"
            ],
            [
                "id"=> "080910",
                "provincia_id"=> "080900",
                "nombre"=> "PICHARI"
            ],
            [
                "id"=> "080913",
                "provincia_id"=> "080900",
                "nombre"=> "VILLA KINTIARINA"
            ],
            [
                "id"=> "080914",
                "provincia_id"=> "080900",
                "nombre"=> "MEGANTONI"
            ],
            [
                "id"=> "080915",
                "provincia_id"=> "080900",
                "nombre"=> "KUMPIRUSHIATO"
            ],
            [
                "id"=> "081001",
                "provincia_id"=> "081000",
                "nombre"=> "PARURO"
            ],
            [
                "id"=> "081002",
                "provincia_id"=> "081000",
                "nombre"=> "ACCHA"
            ],
            [
                "id"=> "081003",
                "provincia_id"=> "081000",
                "nombre"=> "CCAPI"
            ],
            [
                "id"=> "081004",
                "provincia_id"=> "081000",
                "nombre"=> "COLCHA"
            ],
            [
                "id"=> "081005",
                "provincia_id"=> "081000",
                "nombre"=> "HUANOQUITE"
            ],
            [
                "id"=> "081006",
                "provincia_id"=> "081000",
                "nombre"=> "OMACHA"
            ],
            [
                "id"=> "081007",
                "provincia_id"=> "081000",
                "nombre"=> "PACCARITAMBO"
            ],
            [
                "id"=> "081008",
                "provincia_id"=> "081000",
                "nombre"=> "PILLPINTO"
            ],
            [
                "id"=> "081009",
                "provincia_id"=> "081000",
                "nombre"=> "YAURISQUE"
            ],
            [
                "id"=> "081101",
                "provincia_id"=> "081100",
                "nombre"=> "PAUCARTAMBO"
            ],
            [
                "id"=> "081102",
                "provincia_id"=> "081100",
                "nombre"=> "CAICAY"
            ],
            [
                "id"=> "081103",
                "provincia_id"=> "081100",
                "nombre"=> "CHALLABAMBA"
            ],
            [
                "id"=> "081104",
                "provincia_id"=> "081100",
                "nombre"=> "COLQUEPATA"
            ],
            [
                "id"=> "081105",
                "provincia_id"=> "081100",
                "nombre"=> "HUANCARANI"
            ],
            [
                "id"=> "081106",
                "provincia_id"=> "081100",
                "nombre"=> "KOSÑIPATA"
            ],
            [
                "id"=> "081201",
                "provincia_id"=> "081200",
                "nombre"=> "URCOS"
            ],
            [
                "id"=> "081202",
                "provincia_id"=> "081200",
                "nombre"=> "ANDAHUAYLILLAS"
            ],
            [
                "id"=> "081203",
                "provincia_id"=> "081200",
                "nombre"=> "CAMANTI"
            ],
            [
                "id"=> "081204",
                "provincia_id"=> "081200",
                "nombre"=> "CCARHUAYO"
            ],
            [
                "id"=> "081205",
                "provincia_id"=> "081200",
                "nombre"=> "CCATCA"
            ],
            [
                "id"=> "081206",
                "provincia_id"=> "081200",
                "nombre"=> "CUSIPATA"
            ],
            [
                "id"=> "081207",
                "provincia_id"=> "081200",
                "nombre"=> "HUARO"
            ],
            [
                "id"=> "081208",
                "provincia_id"=> "081200",
                "nombre"=> "LUCRE"
            ],
            [
                "id"=> "081209",
                "provincia_id"=> "081200",
                "nombre"=> "MARCAPATA"
            ],
            [
                "id"=> "081210",
                "provincia_id"=> "081200",
                "nombre"=> "OCONGATE"
            ],
            [
                "id"=> "081211",
                "provincia_id"=> "081200",
                "nombre"=> "OROPESA"
            ],
            [
                "id"=> "081212",
                "provincia_id"=> "081200",
                "nombre"=> "QUIQUIJANA"
            ],
            [
                "id"=> "081301",
                "provincia_id"=> "081300",
                "nombre"=> "URUBAMBA"
            ],
            [
                "id"=> "081302",
                "provincia_id"=> "081300",
                "nombre"=> "CHINCHERO"
            ],
            [
                "id"=> "081303",
                "provincia_id"=> "081300",
                "nombre"=> "HUAYLLABAMBA"
            ],
            [
                "id"=> "081304",
                "provincia_id"=> "081300",
                "nombre"=> "MACHUPICCHU"
            ],
            [
                "id"=> "081305",
                "provincia_id"=> "081300",
                "nombre"=> "MARAS"
            ],
            [
                "id"=> "081306",
                "provincia_id"=> "081300",
                "nombre"=> "OLLANTAYTAMBO"
            ],
            [
                "id"=> "081307",
                "provincia_id"=> "081300",
                "nombre"=> "YUCAY"
            ],
            [
                "id"=> "090101",
                "provincia_id"=> "090100",
                "nombre"=> "HUANCAVELICA"
            ],
            [
                "id"=> "090102",
                "provincia_id"=> "090100",
                "nombre"=> "ACOBAMBILLA"
            ],
            [
                "id"=> "090103",
                "provincia_id"=> "090100",
                "nombre"=> "ACORIA"
            ],
            [
                "id"=> "090104",
                "provincia_id"=> "090100",
                "nombre"=> "CONAYCA"
            ],
            [
                "id"=> "090105",
                "provincia_id"=> "090100",
                "nombre"=> "CUENCA"
            ],
            [
                "id"=> "090106",
                "provincia_id"=> "090100",
                "nombre"=> "HUACHOCOLPA"
            ],
            [
                "id"=> "090107",
                "provincia_id"=> "090100",
                "nombre"=> "HUAYLLAHUARA"
            ],
            [
                "id"=> "090108",
                "provincia_id"=> "090100",
                "nombre"=> "IZCUCHACA"
            ],
            [
                "id"=> "090109",
                "provincia_id"=> "090100",
                "nombre"=> "LARIA"
            ],
            [
                "id"=> "090110",
                "provincia_id"=> "090100",
                "nombre"=> "MANTA"
            ],
            [
                "id"=> "090111",
                "provincia_id"=> "090100",
                "nombre"=> "MARISCAL CACERES"
            ],
            [
                "id"=> "090112",
                "provincia_id"=> "090100",
                "nombre"=> "MOYA"
            ],
            [
                "id"=> "090113",
                "provincia_id"=> "090100",
                "nombre"=> "NUEVO OCCORO"
            ],
            [
                "id"=> "090114",
                "provincia_id"=> "090100",
                "nombre"=> "PALCA"
            ],
            [
                "id"=> "090115",
                "provincia_id"=> "090100",
                "nombre"=> "PILCHACA"
            ],
            [
                "id"=> "090116",
                "provincia_id"=> "090100",
                "nombre"=> "VILCA"
            ],
            [
                "id"=> "090117",
                "provincia_id"=> "090100",
                "nombre"=> "YAULI"
            ],
            [
                "id"=> "090118",
                "provincia_id"=> "090100",
                "nombre"=> "ASCENSION"
            ],
            [
                "id"=> "090119",
                "provincia_id"=> "090100",
                "nombre"=> "HUANDO"
            ],
            [
                "id"=> "090201",
                "provincia_id"=> "090200",
                "nombre"=> "ACOBAMBA"
            ],
            [
                "id"=> "090202",
                "provincia_id"=> "090200",
                "nombre"=> "ANDABAMBA"
            ],
            [
                "id"=> "090203",
                "provincia_id"=> "090200",
                "nombre"=> "ANTA"
            ],
            [
                "id"=> "090204",
                "provincia_id"=> "090200",
                "nombre"=> "CAJA"
            ],
            [
                "id"=> "090205",
                "provincia_id"=> "090200",
                "nombre"=> "MARCAS"
            ],
            [
                "id"=> "090206",
                "provincia_id"=> "090200",
                "nombre"=> "PAUCARA"
            ],
            [
                "id"=> "090207",
                "provincia_id"=> "090200",
                "nombre"=> "POMACOCHA"
            ],
            [
                "id"=> "090208",
                "provincia_id"=> "090200",
                "nombre"=> "ROSARIO"
            ],
            [
                "id"=> "090301",
                "provincia_id"=> "090300",
                "nombre"=> "LIRCAY"
            ],
            [
                "id"=> "090302",
                "provincia_id"=> "090300",
                "nombre"=> "ANCHONGA"
            ],
            [
                "id"=> "090303",
                "provincia_id"=> "090300",
                "nombre"=> "CALLANMARCA"
            ],
            [
                "id"=> "090304",
                "provincia_id"=> "090300",
                "nombre"=> "CCOCHACCASA"
            ],
            [
                "id"=> "090305",
                "provincia_id"=> "090300",
                "nombre"=> "CHINCHO"
            ],
            [
                "id"=> "090306",
                "provincia_id"=> "090300",
                "nombre"=> "CONGALLA"
            ],
            [
                "id"=> "090307",
                "provincia_id"=> "090300",
                "nombre"=> "HUANCA-HUANCA"
            ],
            [
                "id"=> "090308",
                "provincia_id"=> "090300",
                "nombre"=> "HUAYLLAY GRANDE"
            ],
            [
                "id"=> "090309",
                "provincia_id"=> "090300",
                "nombre"=> "JULCAMARCA"
            ],
            [
                "id"=> "090310",
                "provincia_id"=> "090300",
                "nombre"=> "SAN ANTONIO DE ANTAPARCO"
            ],
            [
                "id"=> "090311",
                "provincia_id"=> "090300",
                "nombre"=> "SANTO TOMAS DE PATA"
            ],
            [
                "id"=> "090312",
                "provincia_id"=> "090300",
                "nombre"=> "SECCLLA"
            ],
            [
                "id"=> "090401",
                "provincia_id"=> "090400",
                "nombre"=> "CASTROVIRREYNA"
            ],
            [
                "id"=> "090402",
                "provincia_id"=> "090400",
                "nombre"=> "ARMA"
            ],
            [
                "id"=> "090403",
                "provincia_id"=> "090400",
                "nombre"=> "AURAHUA"
            ],
            [
                "id"=> "090404",
                "provincia_id"=> "090400",
                "nombre"=> "CAPILLAS"
            ],
            [
                "id"=> "090405",
                "provincia_id"=> "090400",
                "nombre"=> "CHUPAMARCA"
            ],
            [
                "id"=> "090406",
                "provincia_id"=> "090400",
                "nombre"=> "COCAS"
            ],
            [
                "id"=> "090407",
                "provincia_id"=> "090400",
                "nombre"=> "HUACHOS"
            ],
            [
                "id"=> "090408",
                "provincia_id"=> "090400",
                "nombre"=> "HUAMATAMBO"
            ],
            [
                "id"=> "090409",
                "provincia_id"=> "090400",
                "nombre"=> "MOLLEPAMPA"
            ],
            [
                "id"=> "090410",
                "provincia_id"=> "090400",
                "nombre"=> "SAN JUAN"
            ],
            [
                "id"=> "090411",
                "provincia_id"=> "090400",
                "nombre"=> "SANTA ANA"
            ],
            [
                "id"=> "090412",
                "provincia_id"=> "090400",
                "nombre"=> "TANTARA"
            ],
            [
                "id"=> "090413",
                "provincia_id"=> "090400",
                "nombre"=> "TICRAPO"
            ],
            [
                "id"=> "090501",
                "provincia_id"=> "090500",
                "nombre"=> "CHURCAMPA"
            ],
            [
                "id"=> "090502",
                "provincia_id"=> "090500",
                "nombre"=> "ANCO"
            ],
            [
                "id"=> "090503",
                "provincia_id"=> "090500",
                "nombre"=> "CHINCHIHUASI"
            ],
            [
                "id"=> "090504",
                "provincia_id"=> "090500",
                "nombre"=> "EL CARMEN"
            ],
            [
                "id"=> "090505",
                "provincia_id"=> "090500",
                "nombre"=> "LA MERCED"
            ],
            [
                "id"=> "090506",
                "provincia_id"=> "090500",
                "nombre"=> "LOCROJA"
            ],
            [
                "id"=> "090507",
                "provincia_id"=> "090500",
                "nombre"=> "PAUCARBAMBA"
            ],
            [
                "id"=> "090508",
                "provincia_id"=> "090500",
                "nombre"=> "SAN MIGUEL DE MAYOCC"
            ],
            [
                "id"=> "090509",
                "provincia_id"=> "090500",
                "nombre"=> "SAN PEDRO DE CORIS"
            ],
            [
                "id"=> "090510",
                "provincia_id"=> "090500",
                "nombre"=> "PACHAMARCA"
            ],
            [
                "id"=> "090511",
                "provincia_id"=> "090500",
                "nombre"=> "COSME"
            ],
            [
                "id"=> "090601",
                "provincia_id"=> "090600",
                "nombre"=> "HUAYTARA"
            ],
            [
                "id"=> "090602",
                "provincia_id"=> "090600",
                "nombre"=> "AYAVI"
            ],
            [
                "id"=> "090603",
                "provincia_id"=> "090600",
                "nombre"=> "CORDOVA"
            ],
            [
                "id"=> "090604",
                "provincia_id"=> "090600",
                "nombre"=> "HUAYACUNDO ARMA"
            ],
            [
                "id"=> "090605",
                "provincia_id"=> "090600",
                "nombre"=> "LARAMARCA"
            ],
            [
                "id"=> "090606",
                "provincia_id"=> "090600",
                "nombre"=> "OCOYO"
            ],
            [
                "id"=> "090607",
                "provincia_id"=> "090600",
                "nombre"=> "PILPICHACA"
            ],
            [
                "id"=> "090608",
                "provincia_id"=> "090600",
                "nombre"=> "QUERCO"
            ],
            [
                "id"=> "090609",
                "provincia_id"=> "090600",
                "nombre"=> "QUITO-ARMA"
            ],
            [
                "id"=> "090610",
                "provincia_id"=> "090600",
                "nombre"=> "SAN ANTONIO DE CUSICANCHA"
            ],
            [
                "id"=> "090611",
                "provincia_id"=> "090600",
                "nombre"=> "SAN FRANCISCO DE SANGAYAICO"
            ],
            [
                "id"=> "090612",
                "provincia_id"=> "090600",
                "nombre"=> "SAN ISIDRO"
            ],
            [
                "id"=> "090613",
                "provincia_id"=> "090600",
                "nombre"=> "SANTIAGO DE CHOCORVOS"
            ],
            [
                "id"=> "090614",
                "provincia_id"=> "090600",
                "nombre"=> "SANTIAGO DE QUIRAHUARA"
            ],
            [
                "id"=> "090615",
                "provincia_id"=> "090600",
                "nombre"=> "SANTO DOMINGO DE CAPILLAS"
            ],
            [
                "id"=> "090616",
                "provincia_id"=> "090600",
                "nombre"=> "TAMBO"
            ],
            [
                "id"=> "090701",
                "provincia_id"=> "090700",
                "nombre"=> "PAMPAS"
            ],
            [
                "id"=> "090702",
                "provincia_id"=> "090700",
                "nombre"=> "ACOSTAMBO"
            ],
            [
                "id"=> "090703",
                "provincia_id"=> "090700",
                "nombre"=> "ACRAQUIA"
            ],
            [
                "id"=> "090704",
                "provincia_id"=> "090700",
                "nombre"=> "AHUAYCHA"
            ],
            [
                "id"=> "090705",
                "provincia_id"=> "090700",
                "nombre"=> "COLCABAMBA"
            ],
            [
                "id"=> "090706",
                "provincia_id"=> "090700",
                "nombre"=> "DANIEL HERNANDEZ"
            ],
            [
                "id"=> "090707",
                "provincia_id"=> "090700",
                "nombre"=> "HUACHOCOLPA"
            ],
            [
                "id"=> "090709",
                "provincia_id"=> "090700",
                "nombre"=> "HUARIBAMBA"
            ],
            [
                "id"=> "090710",
                "provincia_id"=> "090700",
                "nombre"=> "ÑAHUIMPUQUIO"
            ],
            [
                "id"=> "090711",
                "provincia_id"=> "090700",
                "nombre"=> "PAZOS"
            ],
            [
                "id"=> "090713",
                "provincia_id"=> "090700",
                "nombre"=> "QUISHUAR"
            ],
            [
                "id"=> "090714",
                "provincia_id"=> "090700",
                "nombre"=> "SALCABAMBA"
            ],
            [
                "id"=> "090715",
                "provincia_id"=> "090700",
                "nombre"=> "SALCAHUASI"
            ],
            [
                "id"=> "090716",
                "provincia_id"=> "090700",
                "nombre"=> "SAN MARCOS DE ROCCHAC"
            ],
            [
                "id"=> "090717",
                "provincia_id"=> "090700",
                "nombre"=> "SURCUBAMBA"
            ],
            [
                "id"=> "090718",
                "provincia_id"=> "090700",
                "nombre"=> "TINTAY PUNCU"
            ],
            [
                "id"=> "100101",
                "provincia_id"=> "100100",
                "nombre"=> "HUANUCO"
            ],
            [
                "id"=> "100102",
                "provincia_id"=> "100100",
                "nombre"=> "AMARILIS"
            ],
            [
                "id"=> "100103",
                "provincia_id"=> "100100",
                "nombre"=> "CHINCHAO"
            ],
            [
                "id"=> "100104",
                "provincia_id"=> "100100",
                "nombre"=> "CHURUBAMBA"
            ],
            [
                "id"=> "100105",
                "provincia_id"=> "100100",
                "nombre"=> "MARGOS"
            ],
            [
                "id"=> "100106",
                "provincia_id"=> "100100",
                "nombre"=> "QUISQUI (KICHKI)"
            ],
            [
                "id"=> "100107",
                "provincia_id"=> "100100",
                "nombre"=> "SAN FRANCISCO DE CAYRAN"
            ],
            [
                "id"=> "100108",
                "provincia_id"=> "100100",
                "nombre"=> "SAN PEDRO DE CHAULAN"
            ],
            [
                "id"=> "100109",
                "provincia_id"=> "100100",
                "nombre"=> "SANTA MARIA DEL VALLE"
            ],
            [
                "id"=> "100110",
                "provincia_id"=> "100100",
                "nombre"=> "YARUMAYO"
            ],
            [
                "id"=> "100111",
                "provincia_id"=> "100100",
                "nombre"=> "PILLCO MARCA"
            ],
            [
                "id"=> "100112",
                "provincia_id"=> "100100",
                "nombre"=> "YACUS"
            ],
            [
                "id"=> "100201",
                "provincia_id"=> "100200",
                "nombre"=> "AMBO"
            ],
            [
                "id"=> "100202",
                "provincia_id"=> "100200",
                "nombre"=> "CAYNA"
            ],
            [
                "id"=> "100203",
                "provincia_id"=> "100200",
                "nombre"=> "COLPAS"
            ],
            [
                "id"=> "100204",
                "provincia_id"=> "100200",
                "nombre"=> "CONCHAMARCA"
            ],
            [
                "id"=> "100205",
                "provincia_id"=> "100200",
                "nombre"=> "HUACAR"
            ],
            [
                "id"=> "100206",
                "provincia_id"=> "100200",
                "nombre"=> "SAN FRANCISCO"
            ],
            [
                "id"=> "100207",
                "provincia_id"=> "100200",
                "nombre"=> "SAN RAFAEL"
            ],
            [
                "id"=> "100208",
                "provincia_id"=> "100200",
                "nombre"=> "TOMAY KICHWA"
            ],
            [
                "id"=> "100301",
                "provincia_id"=> "100300",
                "nombre"=> "LA UNION"
            ],
            [
                "id"=> "100307",
                "provincia_id"=> "100300",
                "nombre"=> "CHUQUIS"
            ],
            [
                "id"=> "100311",
                "provincia_id"=> "100300",
                "nombre"=> "MARIAS"
            ],
            [
                "id"=> "100313",
                "provincia_id"=> "100300",
                "nombre"=> "PACHAS"
            ],
            [
                "id"=> "100316",
                "provincia_id"=> "100300",
                "nombre"=> "QUIVILLA"
            ],
            [
                "id"=> "100317",
                "provincia_id"=> "100300",
                "nombre"=> "RIPAN"
            ],
            [
                "id"=> "100321",
                "provincia_id"=> "100300",
                "nombre"=> "SHUNQUI"
            ],
            [
                "id"=> "100322",
                "provincia_id"=> "100300",
                "nombre"=> "SILLAPATA"
            ],
            [
                "id"=> "100323",
                "provincia_id"=> "100300",
                "nombre"=> "YANAS"
            ],
            [
                "id"=> "100401",
                "provincia_id"=> "100400",
                "nombre"=> "HUACAYBAMBA"
            ],
            [
                "id"=> "100402",
                "provincia_id"=> "100400",
                "nombre"=> "CANCHABAMBA"
            ],
            [
                "id"=> "100403",
                "provincia_id"=> "100400",
                "nombre"=> "COCHABAMBA"
            ],
            [
                "id"=> "100404",
                "provincia_id"=> "100400",
                "nombre"=> "PINRA"
            ],
            [
                "id"=> "100501",
                "provincia_id"=> "100500",
                "nombre"=> "LLATA"
            ],
            [
                "id"=> "100502",
                "provincia_id"=> "100500",
                "nombre"=> "ARANCAY"
            ],
            [
                "id"=> "100503",
                "provincia_id"=> "100500",
                "nombre"=> "CHAVIN DE PARIARCA"
            ],
            [
                "id"=> "100504",
                "provincia_id"=> "100500",
                "nombre"=> "JACAS GRANDE"
            ],
            [
                "id"=> "100505",
                "provincia_id"=> "100500",
                "nombre"=> "JIRCAN"
            ],
            [
                "id"=> "100506",
                "provincia_id"=> "100500",
                "nombre"=> "MIRAFLORES"
            ],
            [
                "id"=> "100507",
                "provincia_id"=> "100500",
                "nombre"=> "MONZON"
            ],
            [
                "id"=> "100508",
                "provincia_id"=> "100500",
                "nombre"=> "PUNCHAO"
            ],
            [
                "id"=> "100509",
                "provincia_id"=> "100500",
                "nombre"=> "PUÑOS"
            ],
            [
                "id"=> "100510",
                "provincia_id"=> "100500",
                "nombre"=> "SINGA"
            ],
            [
                "id"=> "100511",
                "provincia_id"=> "100500",
                "nombre"=> "TANTAMAYO"
            ],
            [
                "id"=> "100601",
                "provincia_id"=> "100600",
                "nombre"=> "RUPA-RUPA"
            ],
            [
                "id"=> "100602",
                "provincia_id"=> "100600",
                "nombre"=> "DANIEL ALOMIA ROBLES"
            ],
            [
                "id"=> "100603",
                "provincia_id"=> "100600",
                "nombre"=> "HERMILIO VALDIZAN"
            ],
            [
                "id"=> "100604",
                "provincia_id"=> "100600",
                "nombre"=> "JOSE CRESPO Y CASTILLO"
            ],
            [
                "id"=> "100605",
                "provincia_id"=> "100600",
                "nombre"=> "LUYANDO"
            ],
            [
                "id"=> "100606",
                "provincia_id"=> "100600",
                "nombre"=> "MARIANO DAMASO BERAUN"
            ],
            [
                "id"=> "100607",
                "provincia_id"=> "100600",
                "nombre"=> "PUCAYACU"
            ],
            [
                "id"=> "100608",
                "provincia_id"=> "100600",
                "nombre"=> "CASTILLO GRANDE"
            ],
            [
                "id"=> "100701",
                "provincia_id"=> "100700",
                "nombre"=> "HUACRACHUCO"
            ],
            [
                "id"=> "100702",
                "provincia_id"=> "100700",
                "nombre"=> "CHOLON"
            ],
            [
                "id"=> "100703",
                "provincia_id"=> "100700",
                "nombre"=> "SAN BUENAVENTURA"
            ],
            [
                "id"=> "100704",
                "provincia_id"=> "100700",
                "nombre"=> "LA MORADA"
            ],
            [
                "id"=> "100705",
                "provincia_id"=> "100700",
                "nombre"=> "SANTA ROSA DE ALTO YANAJANCA"
            ],
            [
                "id"=> "100801",
                "provincia_id"=> "100800",
                "nombre"=> "PANAO"
            ],
            [
                "id"=> "100802",
                "provincia_id"=> "100800",
                "nombre"=> "CHAGLLA"
            ],
            [
                "id"=> "100803",
                "provincia_id"=> "100800",
                "nombre"=> "MOLINO"
            ],
            [
                "id"=> "100804",
                "provincia_id"=> "100800",
                "nombre"=> "UMARI"
            ],
            [
                "id"=> "100901",
                "provincia_id"=> "100900",
                "nombre"=> "PUERTO INCA"
            ],
            [
                "id"=> "100902",
                "provincia_id"=> "100900",
                "nombre"=> "CODO DEL POZUZO"
            ],
            [
                "id"=> "100903",
                "provincia_id"=> "100900",
                "nombre"=> "HONORIA"
            ],
            [
                "id"=> "100904",
                "provincia_id"=> "100900",
                "nombre"=> "TOURNAVISTA"
            ],
            [
                "id"=> "100905",
                "provincia_id"=> "100900",
                "nombre"=> "YUYAPICHIS"
            ],
            [
                "id"=> "101001",
                "provincia_id"=> "101000",
                "nombre"=> "JESUS"
            ],
            [
                "id"=> "101002",
                "provincia_id"=> "101000",
                "nombre"=> "BAÑOS"
            ],
            [
                "id"=> "101003",
                "provincia_id"=> "101000",
                "nombre"=> "JIVIA"
            ],
            [
                "id"=> "101004",
                "provincia_id"=> "101000",
                "nombre"=> "QUEROPALCA"
            ],
            [
                "id"=> "101005",
                "provincia_id"=> "101000",
                "nombre"=> "RONDOS"
            ],
            [
                "id"=> "101006",
                "provincia_id"=> "101000",
                "nombre"=> "SAN FRANCISCO DE ASIS"
            ],
            [
                "id"=> "101007",
                "provincia_id"=> "101000",
                "nombre"=> "SAN MIGUEL DE CAURI"
            ],
            [
                "id"=> "101101",
                "provincia_id"=> "101100",
                "nombre"=> "CHAVINILLO"
            ],
            [
                "id"=> "101102",
                "provincia_id"=> "101100",
                "nombre"=> "CAHUAC"
            ],
            [
                "id"=> "101103",
                "provincia_id"=> "101100",
                "nombre"=> "CHACABAMBA"
            ],
            [
                "id"=> "101104",
                "provincia_id"=> "101100",
                "nombre"=> "APARICIO POMARES"
            ],
            [
                "id"=> "101105",
                "provincia_id"=> "101100",
                "nombre"=> "JACAS CHICO"
            ],
            [
                "id"=> "101106",
                "provincia_id"=> "101100",
                "nombre"=> "OBAS"
            ],
            [
                "id"=> "101107",
                "provincia_id"=> "101100",
                "nombre"=> "PAMPAMARCA"
            ],
            [
                "id"=> "101108",
                "provincia_id"=> "101100",
                "nombre"=> "CHORAS"
            ],
            [
                "id"=> "110101",
                "provincia_id"=> "110100",
                "nombre"=> "ICA"
            ],
            [
                "id"=> "110102",
                "provincia_id"=> "110100",
                "nombre"=> "LA TINGUIÑA"
            ],
            [
                "id"=> "110103",
                "provincia_id"=> "110100",
                "nombre"=> "LOS AQUIJES"
            ],
            [
                "id"=> "110104",
                "provincia_id"=> "110100",
                "nombre"=> "OCUCAJE"
            ],
            [
                "id"=> "110105",
                "provincia_id"=> "110100",
                "nombre"=> "PACHACUTEC"
            ],
            [
                "id"=> "110106",
                "provincia_id"=> "110100",
                "nombre"=> "PARCONA"
            ],
            [
                "id"=> "110107",
                "provincia_id"=> "110100",
                "nombre"=> "PUEBLO NUEVO"
            ],
            [
                "id"=> "110108",
                "provincia_id"=> "110100",
                "nombre"=> "SALAS"
            ],
            [
                "id"=> "110109",
                "provincia_id"=> "110100",
                "nombre"=> "SAN JOSE DE LOS MOLINOS"
            ],
            [
                "id"=> "110110",
                "provincia_id"=> "110100",
                "nombre"=> "SAN JUAN BAUTISTA"
            ],
            [
                "id"=> "110111",
                "provincia_id"=> "110100",
                "nombre"=> "SANTIAGO"
            ],
            [
                "id"=> "110112",
                "provincia_id"=> "110100",
                "nombre"=> "SUBTANJALLA"
            ],
            [
                "id"=> "110113",
                "provincia_id"=> "110100",
                "nombre"=> "TATE"
            ],
            [
                "id"=> "110114",
                "provincia_id"=> "110100",
                "nombre"=> "YAUCA DEL ROSARIO"
            ],
            [
                "id"=> "110201",
                "provincia_id"=> "110200",
                "nombre"=> "CHINCHA ALTA"
            ],
            [
                "id"=> "110202",
                "provincia_id"=> "110200",
                "nombre"=> "ALTO LARAN"
            ],
            [
                "id"=> "110203",
                "provincia_id"=> "110200",
                "nombre"=> "CHAVIN"
            ],
            [
                "id"=> "110204",
                "provincia_id"=> "110200",
                "nombre"=> "CHINCHA BAJA"
            ],
            [
                "id"=> "110205",
                "provincia_id"=> "110200",
                "nombre"=> "EL CARMEN"
            ],
            [
                "id"=> "110206",
                "provincia_id"=> "110200",
                "nombre"=> "GROCIO PRADO"
            ],
            [
                "id"=> "110207",
                "provincia_id"=> "110200",
                "nombre"=> "PUEBLO NUEVO"
            ],
            [
                "id"=> "110208",
                "provincia_id"=> "110200",
                "nombre"=> "SAN JUAN DE YANAC"
            ],
            [
                "id"=> "110209",
                "provincia_id"=> "110200",
                "nombre"=> "SAN PEDRO DE HUACARPANA"
            ],
            [
                "id"=> "110210",
                "provincia_id"=> "110200",
                "nombre"=> "SUNAMPE"
            ],
            [
                "id"=> "110211",
                "provincia_id"=> "110200",
                "nombre"=> "TAMBO DE MORA"
            ],
            [
                "id"=> "110301",
                "provincia_id"=> "110300",
                "nombre"=> "NAZCA"
            ],
            [
                "id"=> "110302",
                "provincia_id"=> "110300",
                "nombre"=> "CHANGUILLO"
            ],
            [
                "id"=> "110303",
                "provincia_id"=> "110300",
                "nombre"=> "EL INGENIO"
            ],
            [
                "id"=> "110304",
                "provincia_id"=> "110300",
                "nombre"=> "MARCONA"
            ],
            [
                "id"=> "110305",
                "provincia_id"=> "110300",
                "nombre"=> "VISTA ALEGRE"
            ],
            [
                "id"=> "110401",
                "provincia_id"=> "110400",
                "nombre"=> "PALPA"
            ],
            [
                "id"=> "110402",
                "provincia_id"=> "110400",
                "nombre"=> "LLIPATA"
            ],
            [
                "id"=> "110403",
                "provincia_id"=> "110400",
                "nombre"=> "RIO GRANDE"
            ],
            [
                "id"=> "110404",
                "provincia_id"=> "110400",
                "nombre"=> "SANTA CRUZ"
            ],
            [
                "id"=> "110405",
                "provincia_id"=> "110400",
                "nombre"=> "TIBILLO"
            ],
            [
                "id"=> "110501",
                "provincia_id"=> "110500",
                "nombre"=> "PISCO"
            ],
            [
                "id"=> "110502",
                "provincia_id"=> "110500",
                "nombre"=> "HUANCANO"
            ],
            [
                "id"=> "110503",
                "provincia_id"=> "110500",
                "nombre"=> "HUMAY"
            ],
            [
                "id"=> "110504",
                "provincia_id"=> "110500",
                "nombre"=> "INDEPENDENCIA"
            ],
            [
                "id"=> "110505",
                "provincia_id"=> "110500",
                "nombre"=> "PARACAS"
            ],
            [
                "id"=> "110506",
                "provincia_id"=> "110500",
                "nombre"=> "SAN ANDRES"
            ],
            [
                "id"=> "110507",
                "provincia_id"=> "110500",
                "nombre"=> "SAN CLEMENTE"
            ],
            [
                "id"=> "110508",
                "provincia_id"=> "110500",
                "nombre"=> "TUPAC AMARU INCA"
            ],
            [
                "id"=> "120101",
                "provincia_id"=> "120100",
                "nombre"=> "HUANCAYO"
            ],
            [
                "id"=> "120104",
                "provincia_id"=> "120100",
                "nombre"=> "CARHUACALLANGA"
            ],
            [
                "id"=> "120105",
                "provincia_id"=> "120100",
                "nombre"=> "CHACAPAMPA"
            ],
            [
                "id"=> "120106",
                "provincia_id"=> "120100",
                "nombre"=> "CHICCHE"
            ],
            [
                "id"=> "120107",
                "provincia_id"=> "120100",
                "nombre"=> "CHILCA"
            ],
            [
                "id"=> "120108",
                "provincia_id"=> "120100",
                "nombre"=> "CHONGOS ALTO"
            ],
            [
                "id"=> "120111",
                "provincia_id"=> "120100",
                "nombre"=> "CHUPURO"
            ],
            [
                "id"=> "120112",
                "provincia_id"=> "120100",
                "nombre"=> "COLCA"
            ],
            [
                "id"=> "120113",
                "provincia_id"=> "120100",
                "nombre"=> "CULLHUAS"
            ],
            [
                "id"=> "120114",
                "provincia_id"=> "120100",
                "nombre"=> "EL TAMBO"
            ],
            [
                "id"=> "120116",
                "provincia_id"=> "120100",
                "nombre"=> "HUACRAPUQUIO"
            ],
            [
                "id"=> "120117",
                "provincia_id"=> "120100",
                "nombre"=> "HUALHUAS"
            ],
            [
                "id"=> "120119",
                "provincia_id"=> "120100",
                "nombre"=> "HUANCAN"
            ],
            [
                "id"=> "120120",
                "provincia_id"=> "120100",
                "nombre"=> "HUASICANCHA"
            ],
            [
                "id"=> "120121",
                "provincia_id"=> "120100",
                "nombre"=> "HUAYUCACHI"
            ],
            [
                "id"=> "120122",
                "provincia_id"=> "120100",
                "nombre"=> "INGENIO"
            ],
            [
                "id"=> "120124",
                "provincia_id"=> "120100",
                "nombre"=> "PARIAHUANCA"
            ],
            [
                "id"=> "120125",
                "provincia_id"=> "120100",
                "nombre"=> "PILCOMAYO"
            ],
            [
                "id"=> "120126",
                "provincia_id"=> "120100",
                "nombre"=> "PUCARA"
            ],
            [
                "id"=> "120127",
                "provincia_id"=> "120100",
                "nombre"=> "QUICHUAY"
            ],
            [
                "id"=> "120128",
                "provincia_id"=> "120100",
                "nombre"=> "QUILCAS"
            ],
            [
                "id"=> "120129",
                "provincia_id"=> "120100",
                "nombre"=> "SAN AGUSTIN"
            ],
            [
                "id"=> "120130",
                "provincia_id"=> "120100",
                "nombre"=> "SAN JERONIMO DE TUNAN"
            ],
            [
                "id"=> "120132",
                "provincia_id"=> "120100",
                "nombre"=> "SAÑO"
            ],
            [
                "id"=> "120133",
                "provincia_id"=> "120100",
                "nombre"=> "SAPALLANGA"
            ],
            [
                "id"=> "120134",
                "provincia_id"=> "120100",
                "nombre"=> "SICAYA"
            ],
            [
                "id"=> "120135",
                "provincia_id"=> "120100",
                "nombre"=> "SANTO DOMINGO DE ACOBAMBA"
            ],
            [
                "id"=> "120136",
                "provincia_id"=> "120100",
                "nombre"=> "VIQUES"
            ],
            [
                "id"=> "120201",
                "provincia_id"=> "120200",
                "nombre"=> "CONCEPCION"
            ],
            [
                "id"=> "120202",
                "provincia_id"=> "120200",
                "nombre"=> "ACO"
            ],
            [
                "id"=> "120203",
                "provincia_id"=> "120200",
                "nombre"=> "ANDAMARCA"
            ],
            [
                "id"=> "120204",
                "provincia_id"=> "120200",
                "nombre"=> "CHAMBARA"
            ],
            [
                "id"=> "120205",
                "provincia_id"=> "120200",
                "nombre"=> "COCHAS"
            ],
            [
                "id"=> "120206",
                "provincia_id"=> "120200",
                "nombre"=> "COMAS"
            ],
            [
                "id"=> "120207",
                "provincia_id"=> "120200",
                "nombre"=> "HEROINAS TOLEDO"
            ],
            [
                "id"=> "120208",
                "provincia_id"=> "120200",
                "nombre"=> "MANZANARES"
            ],
            [
                "id"=> "120209",
                "provincia_id"=> "120200",
                "nombre"=> "MARISCAL CASTILLA"
            ],
            [
                "id"=> "120210",
                "provincia_id"=> "120200",
                "nombre"=> "MATAHUASI"
            ],
            [
                "id"=> "120211",
                "provincia_id"=> "120200",
                "nombre"=> "MITO"
            ],
            [
                "id"=> "120212",
                "provincia_id"=> "120200",
                "nombre"=> "NUEVE DE JULIO"
            ],
            [
                "id"=> "120213",
                "provincia_id"=> "120200",
                "nombre"=> "ORCOTUNA"
            ],
            [
                "id"=> "120214",
                "provincia_id"=> "120200",
                "nombre"=> "SAN JOSE DE QUERO"
            ],
            [
                "id"=> "120215",
                "provincia_id"=> "120200",
                "nombre"=> "SANTA ROSA DE OCOPA"
            ],
            [
                "id"=> "120301",
                "provincia_id"=> "120300",
                "nombre"=> "CHANCHAMAYO"
            ],
            [
                "id"=> "120302",
                "provincia_id"=> "120300",
                "nombre"=> "PERENE"
            ],
            [
                "id"=> "120303",
                "provincia_id"=> "120300",
                "nombre"=> "PICHANAQUI"
            ],
            [
                "id"=> "120304",
                "provincia_id"=> "120300",
                "nombre"=> "SAN LUIS DE SHUARO"
            ],
            [
                "id"=> "120305",
                "provincia_id"=> "120300",
                "nombre"=> "SAN RAMON"
            ],
            [
                "id"=> "120306",
                "provincia_id"=> "120300",
                "nombre"=> "VITOC"
            ],
            [
                "id"=> "120401",
                "provincia_id"=> "120400",
                "nombre"=> "JAUJA"
            ],
            [
                "id"=> "120402",
                "provincia_id"=> "120400",
                "nombre"=> "ACOLLA"
            ],
            [
                "id"=> "120403",
                "provincia_id"=> "120400",
                "nombre"=> "APATA"
            ],
            [
                "id"=> "120404",
                "provincia_id"=> "120400",
                "nombre"=> "ATAURA"
            ],
            [
                "id"=> "120405",
                "provincia_id"=> "120400",
                "nombre"=> "CANCHAYLLO"
            ],
            [
                "id"=> "120406",
                "provincia_id"=> "120400",
                "nombre"=> "CURICACA"
            ],
            [
                "id"=> "120407",
                "provincia_id"=> "120400",
                "nombre"=> "EL MANTARO"
            ],
            [
                "id"=> "120408",
                "provincia_id"=> "120400",
                "nombre"=> "HUAMALI"
            ],
            [
                "id"=> "120409",
                "provincia_id"=> "120400",
                "nombre"=> "HUARIPAMPA"
            ],
            [
                "id"=> "120410",
                "provincia_id"=> "120400",
                "nombre"=> "HUERTAS"
            ],
            [
                "id"=> "120411",
                "provincia_id"=> "120400",
                "nombre"=> "JANJAILLO"
            ],
            [
                "id"=> "120412",
                "provincia_id"=> "120400",
                "nombre"=> "JULCAN"
            ],
            [
                "id"=> "120413",
                "provincia_id"=> "120400",
                "nombre"=> "LEONOR ORDOÑEZ"
            ],
            [
                "id"=> "120414",
                "provincia_id"=> "120400",
                "nombre"=> "LLOCLLAPAMPA"
            ],
            [
                "id"=> "120415",
                "provincia_id"=> "120400",
                "nombre"=> "MARCO"
            ],
            [
                "id"=> "120416",
                "provincia_id"=> "120400",
                "nombre"=> "MASMA"
            ],
            [
                "id"=> "120417",
                "provincia_id"=> "120400",
                "nombre"=> "MASMA CHICCHE"
            ],
            [
                "id"=> "120418",
                "provincia_id"=> "120400",
                "nombre"=> "MOLINOS"
            ],
            [
                "id"=> "120419",
                "provincia_id"=> "120400",
                "nombre"=> "MONOBAMBA"
            ],
            [
                "id"=> "120420",
                "provincia_id"=> "120400",
                "nombre"=> "MUQUI"
            ],
            [
                "id"=> "120421",
                "provincia_id"=> "120400",
                "nombre"=> "MUQUIYAUYO"
            ],
            [
                "id"=> "120422",
                "provincia_id"=> "120400",
                "nombre"=> "PACA"
            ],
            [
                "id"=> "120423",
                "provincia_id"=> "120400",
                "nombre"=> "PACCHA"
            ],
            [
                "id"=> "120424",
                "provincia_id"=> "120400",
                "nombre"=> "PANCAN"
            ],
            [
                "id"=> "120425",
                "provincia_id"=> "120400",
                "nombre"=> "PARCO"
            ],
            [
                "id"=> "120426",
                "provincia_id"=> "120400",
                "nombre"=> "POMACANCHA"
            ],
            [
                "id"=> "120427",
                "provincia_id"=> "120400",
                "nombre"=> "RICRAN"
            ],
            [
                "id"=> "120428",
                "provincia_id"=> "120400",
                "nombre"=> "SAN LORENZO"
            ],
            [
                "id"=> "120429",
                "provincia_id"=> "120400",
                "nombre"=> "SAN PEDRO DE CHUNAN"
            ],
            [
                "id"=> "120430",
                "provincia_id"=> "120400",
                "nombre"=> "SAUSA"
            ],
            [
                "id"=> "120431",
                "provincia_id"=> "120400",
                "nombre"=> "SINCOS"
            ],
            [
                "id"=> "120432",
                "provincia_id"=> "120400",
                "nombre"=> "TUNAN MARCA"
            ],
            [
                "id"=> "120433",
                "provincia_id"=> "120400",
                "nombre"=> "YAULI"
            ],
            [
                "id"=> "120434",
                "provincia_id"=> "120400",
                "nombre"=> "YAUYOS"
            ],
            [
                "id"=> "120501",
                "provincia_id"=> "120500",
                "nombre"=> "JUNIN"
            ],
            [
                "id"=> "120502",
                "provincia_id"=> "120500",
                "nombre"=> "CARHUAMAYO"
            ],
            [
                "id"=> "120503",
                "provincia_id"=> "120500",
                "nombre"=> "ONDORES"
            ],
            [
                "id"=> "120504",
                "provincia_id"=> "120500",
                "nombre"=> "ULCUMAYO"
            ],
            [
                "id"=> "120601",
                "provincia_id"=> "120600",
                "nombre"=> "SATIPO"
            ],
            [
                "id"=> "120602",
                "provincia_id"=> "120600",
                "nombre"=> "COVIRIALI"
            ],
            [
                "id"=> "120603",
                "provincia_id"=> "120600",
                "nombre"=> "LLAYLLA"
            ],
            [
                "id"=> "120604",
                "provincia_id"=> "120600",
                "nombre"=> "MAZAMARI"
            ],
            [
                "id"=> "120605",
                "provincia_id"=> "120600",
                "nombre"=> "PAMPA HERMOSA"
            ],
            [
                "id"=> "120606",
                "provincia_id"=> "120600",
                "nombre"=> "PANGOA"
            ],
            [
                "id"=> "120607",
                "provincia_id"=> "120600",
                "nombre"=> "RIO NEGRO"
            ],
            [
                "id"=> "120608",
                "provincia_id"=> "120600",
                "nombre"=> "RIO TAMBO"
            ],
            [
                "id"=> "120701",
                "provincia_id"=> "120700",
                "nombre"=> "TARMA"
            ],
            [
                "id"=> "120702",
                "provincia_id"=> "120700",
                "nombre"=> "ACOBAMBA"
            ],
            [
                "id"=> "120703",
                "provincia_id"=> "120700",
                "nombre"=> "HUARICOLCA"
            ],
            [
                "id"=> "120704",
                "provincia_id"=> "120700",
                "nombre"=> "HUASAHUASI"
            ],
            [
                "id"=> "120705",
                "provincia_id"=> "120700",
                "nombre"=> "LA UNION"
            ],
            [
                "id"=> "120706",
                "provincia_id"=> "120700",
                "nombre"=> "PALCA"
            ],
            [
                "id"=> "120707",
                "provincia_id"=> "120700",
                "nombre"=> "PALCAMAYO"
            ],
            [
                "id"=> "120708",
                "provincia_id"=> "120700",
                "nombre"=> "SAN PEDRO DE CAJAS"
            ],
            [
                "id"=> "120709",
                "provincia_id"=> "120700",
                "nombre"=> "TAPO"
            ],
            [
                "id"=> "120801",
                "provincia_id"=> "120800",
                "nombre"=> "LA OROYA"
            ],
            [
                "id"=> "120802",
                "provincia_id"=> "120800",
                "nombre"=> "CHACAPALPA"
            ],
            [
                "id"=> "120803",
                "provincia_id"=> "120800",
                "nombre"=> "HUAY-HUAY"
            ],
            [
                "id"=> "120804",
                "provincia_id"=> "120800",
                "nombre"=> "MARCAPOMACOCHA"
            ],
            [
                "id"=> "120805",
                "provincia_id"=> "120800",
                "nombre"=> "MOROCOCHA"
            ],
            [
                "id"=> "120806",
                "provincia_id"=> "120800",
                "nombre"=> "PACCHA"
            ],
            [
                "id"=> "120807",
                "provincia_id"=> "120800",
                "nombre"=> "SANTA BARBARA DE CARHUACAYAN"
            ],
            [
                "id"=> "120808",
                "provincia_id"=> "120800",
                "nombre"=> "SANTA ROSA DE SACCO"
            ],
            [
                "id"=> "120809",
                "provincia_id"=> "120800",
                "nombre"=> "SUITUCANCHA"
            ],
            [
                "id"=> "120810",
                "provincia_id"=> "120800",
                "nombre"=> "YAULI"
            ],
            [
                "id"=> "120901",
                "provincia_id"=> "120900",
                "nombre"=> "CHUPACA"
            ],
            [
                "id"=> "120902",
                "provincia_id"=> "120900",
                "nombre"=> "AHUAC"
            ],
            [
                "id"=> "120903",
                "provincia_id"=> "120900",
                "nombre"=> "CHONGOS BAJO"
            ],
            [
                "id"=> "120904",
                "provincia_id"=> "120900",
                "nombre"=> "HUACHAC"
            ],
            [
                "id"=> "120905",
                "provincia_id"=> "120900",
                "nombre"=> "HUAMANCACA CHICO"
            ],
            [
                "id"=> "120906",
                "provincia_id"=> "120900",
                "nombre"=> "SAN JUAN DE ISCOS"
            ],
            [
                "id"=> "120907",
                "provincia_id"=> "120900",
                "nombre"=> "SAN JUAN DE JARPA"
            ],
            [
                "id"=> "120908",
                "provincia_id"=> "120900",
                "nombre"=> "TRES DE DICIEMBRE"
            ],
            [
                "id"=> "120909",
                "provincia_id"=> "120900",
                "nombre"=> "YANACANCHA"
            ],
            [
                "id"=> "130101",
                "provincia_id"=> "130100",
                "nombre"=> "TRUJILLO"
            ],
            [
                "id"=> "130102",
                "provincia_id"=> "130100",
                "nombre"=> "EL PORVENIR"
            ],
            [
                "id"=> "130103",
                "provincia_id"=> "130100",
                "nombre"=> "FLORENCIA DE MORA"
            ],
            [
                "id"=> "130104",
                "provincia_id"=> "130100",
                "nombre"=> "HUANCHACO"
            ],
            [
                "id"=> "130105",
                "provincia_id"=> "130100",
                "nombre"=> "LA ESPERANZA"
            ],
            [
                "id"=> "130106",
                "provincia_id"=> "130100",
                "nombre"=> "LAREDO"
            ],
            [
                "id"=> "130107",
                "provincia_id"=> "130100",
                "nombre"=> "MOCHE"
            ],
            [
                "id"=> "130108",
                "provincia_id"=> "130100",
                "nombre"=> "POROTO"
            ],
            [
                "id"=> "130109",
                "provincia_id"=> "130100",
                "nombre"=> "SALAVERRY"
            ],
            [
                "id"=> "130110",
                "provincia_id"=> "130100",
                "nombre"=> "SIMBAL"
            ],
            [
                "id"=> "130111",
                "provincia_id"=> "130100",
                "nombre"=> "VICTOR LARCO HERRERA"
            ],
            [
                "id"=> "130201",
                "provincia_id"=> "130200",
                "nombre"=> "ASCOPE"
            ],
            [
                "id"=> "130202",
                "provincia_id"=> "130200",
                "nombre"=> "CHICAMA"
            ],
            [
                "id"=> "130203",
                "provincia_id"=> "130200",
                "nombre"=> "CHOCOPE"
            ],
            [
                "id"=> "130204",
                "provincia_id"=> "130200",
                "nombre"=> "MAGDALENA DE CAO"
            ],
            [
                "id"=> "130205",
                "provincia_id"=> "130200",
                "nombre"=> "PAIJAN"
            ],
            [
                "id"=> "130206",
                "provincia_id"=> "130200",
                "nombre"=> "RAZURI"
            ],
            [
                "id"=> "130207",
                "provincia_id"=> "130200",
                "nombre"=> "SANTIAGO DE CAO"
            ],
            [
                "id"=> "130208",
                "provincia_id"=> "130200",
                "nombre"=> "CASA GRANDE"
            ],
            [
                "id"=> "130301",
                "provincia_id"=> "130300",
                "nombre"=> "BOLIVAR"
            ],
            [
                "id"=> "130302",
                "provincia_id"=> "130300",
                "nombre"=> "BAMBAMARCA"
            ],
            [
                "id"=> "130303",
                "provincia_id"=> "130300",
                "nombre"=> "CONDORMARCA"
            ],
            [
                "id"=> "130304",
                "provincia_id"=> "130300",
                "nombre"=> "LONGOTEA"
            ],
            [
                "id"=> "130305",
                "provincia_id"=> "130300",
                "nombre"=> "UCHUMARCA"
            ],
            [
                "id"=> "130306",
                "provincia_id"=> "130300",
                "nombre"=> "UCUNCHA"
            ],
            [
                "id"=> "130401",
                "provincia_id"=> "130400",
                "nombre"=> "CHEPEN"
            ],
            [
                "id"=> "130402",
                "provincia_id"=> "130400",
                "nombre"=> "PACANGA"
            ],
            [
                "id"=> "130403",
                "provincia_id"=> "130400",
                "nombre"=> "PUEBLO NUEVO"
            ],
            [
                "id"=> "130501",
                "provincia_id"=> "130500",
                "nombre"=> "JULCAN"
            ],
            [
                "id"=> "130502",
                "provincia_id"=> "130500",
                "nombre"=> "CALAMARCA"
            ],
            [
                "id"=> "130503",
                "provincia_id"=> "130500",
                "nombre"=> "CARABAMBA"
            ],
            [
                "id"=> "130504",
                "provincia_id"=> "130500",
                "nombre"=> "HUASO"
            ],
            [
                "id"=> "130601",
                "provincia_id"=> "130600",
                "nombre"=> "OTUZCO"
            ],
            [
                "id"=> "130602",
                "provincia_id"=> "130600",
                "nombre"=> "AGALLPAMPA"
            ],
            [
                "id"=> "130604",
                "provincia_id"=> "130600",
                "nombre"=> "CHARAT"
            ],
            [
                "id"=> "130605",
                "provincia_id"=> "130600",
                "nombre"=> "HUARANCHAL"
            ],
            [
                "id"=> "130606",
                "provincia_id"=> "130600",
                "nombre"=> "LA CUESTA"
            ],
            [
                "id"=> "130608",
                "provincia_id"=> "130600",
                "nombre"=> "MACHE"
            ],
            [
                "id"=> "130610",
                "provincia_id"=> "130600",
                "nombre"=> "PARANDAY"
            ],
            [
                "id"=> "130611",
                "provincia_id"=> "130600",
                "nombre"=> "SALPO"
            ],
            [
                "id"=> "130613",
                "provincia_id"=> "130600",
                "nombre"=> "SINSICAP"
            ],
            [
                "id"=> "130614",
                "provincia_id"=> "130600",
                "nombre"=> "USQUIL"
            ],
            [
                "id"=> "130701",
                "provincia_id"=> "130700",
                "nombre"=> "SAN PEDRO DE LLOC"
            ],
            [
                "id"=> "130702",
                "provincia_id"=> "130700",
                "nombre"=> "GUADALUPE"
            ],
            [
                "id"=> "130703",
                "provincia_id"=> "130700",
                "nombre"=> "JEQUETEPEQUE"
            ],
            [
                "id"=> "130704",
                "provincia_id"=> "130700",
                "nombre"=> "PACASMAYO"
            ],
            [
                "id"=> "130705",
                "provincia_id"=> "130700",
                "nombre"=> "SAN JOSE"
            ],
            [
                "id"=> "130801",
                "provincia_id"=> "130800",
                "nombre"=> "TAYABAMBA"
            ],
            [
                "id"=> "130802",
                "provincia_id"=> "130800",
                "nombre"=> "BULDIBUYO"
            ],
            [
                "id"=> "130803",
                "provincia_id"=> "130800",
                "nombre"=> "CHILLIA"
            ],
            [
                "id"=> "130804",
                "provincia_id"=> "130800",
                "nombre"=> "HUANCASPATA"
            ],
            [
                "id"=> "130805",
                "provincia_id"=> "130800",
                "nombre"=> "HUAYLILLAS"
            ],
            [
                "id"=> "130806",
                "provincia_id"=> "130800",
                "nombre"=> "HUAYO"
            ],
            [
                "id"=> "130807",
                "provincia_id"=> "130800",
                "nombre"=> "ONGON"
            ],
            [
                "id"=> "130808",
                "provincia_id"=> "130800",
                "nombre"=> "PARCOY"
            ],
            [
                "id"=> "130809",
                "provincia_id"=> "130800",
                "nombre"=> "PATAZ"
            ],
            [
                "id"=> "130810",
                "provincia_id"=> "130800",
                "nombre"=> "PIAS"
            ],
            [
                "id"=> "130811",
                "provincia_id"=> "130800",
                "nombre"=> "SANTIAGO DE CHALLAS"
            ],
            [
                "id"=> "130812",
                "provincia_id"=> "130800",
                "nombre"=> "TAURIJA"
            ],
            [
                "id"=> "130813",
                "provincia_id"=> "130800",
                "nombre"=> "URPAY"
            ],
            [
                "id"=> "130901",
                "provincia_id"=> "130900",
                "nombre"=> "HUAMACHUCO"
            ],
            [
                "id"=> "130902",
                "provincia_id"=> "130900",
                "nombre"=> "CHUGAY"
            ],
            [
                "id"=> "130903",
                "provincia_id"=> "130900",
                "nombre"=> "COCHORCO"
            ],
            [
                "id"=> "130904",
                "provincia_id"=> "130900",
                "nombre"=> "CURGOS"
            ],
            [
                "id"=> "130905",
                "provincia_id"=> "130900",
                "nombre"=> "MARCABAL"
            ],
            [
                "id"=> "130906",
                "provincia_id"=> "130900",
                "nombre"=> "SANAGORAN"
            ],
            [
                "id"=> "130907",
                "provincia_id"=> "130900",
                "nombre"=> "SARIN"
            ],
            [
                "id"=> "130908",
                "provincia_id"=> "130900",
                "nombre"=> "SARTIMBAMBA"
            ],
            [
                "id"=> "131001",
                "provincia_id"=> "131000",
                "nombre"=> "SANTIAGO DE CHUCO"
            ],
            [
                "id"=> "131002",
                "provincia_id"=> "131000",
                "nombre"=> "ANGASMARCA"
            ],
            [
                "id"=> "131003",
                "provincia_id"=> "131000",
                "nombre"=> "CACHICADAN"
            ],
            [
                "id"=> "131004",
                "provincia_id"=> "131000",
                "nombre"=> "MOLLEBAMBA"
            ],
            [
                "id"=> "131005",
                "provincia_id"=> "131000",
                "nombre"=> "MOLLEPATA"
            ],
            [
                "id"=> "131006",
                "provincia_id"=> "131000",
                "nombre"=> "QUIRUVILCA"
            ],
            [
                "id"=> "131007",
                "provincia_id"=> "131000",
                "nombre"=> "SANTA CRUZ DE CHUCA"
            ],
            [
                "id"=> "131008",
                "provincia_id"=> "131000",
                "nombre"=> "SITABAMBA"
            ],
            [
                "id"=> "131101",
                "provincia_id"=> "131100",
                "nombre"=> "CASCAS"
            ],
            [
                "id"=> "131102",
                "provincia_id"=> "131100",
                "nombre"=> "LUCMA"
            ],
            [
                "id"=> "131103",
                "provincia_id"=> "131100",
                "nombre"=> "MARMOT"
            ],
            [
                "id"=> "131104",
                "provincia_id"=> "131100",
                "nombre"=> "SAYAPULLO"
            ],
            [
                "id"=> "131201",
                "provincia_id"=> "131200",
                "nombre"=> "VIRU"
            ],
            [
                "id"=> "131202",
                "provincia_id"=> "131200",
                "nombre"=> "CHAO"
            ],
            [
                "id"=> "131203",
                "provincia_id"=> "131200",
                "nombre"=> "GUADALUPITO"
            ],
            [
                "id"=> "140101",
                "provincia_id"=> "140100",
                "nombre"=> "CHICLAYO"
            ],
            [
                "id"=> "140102",
                "provincia_id"=> "140100",
                "nombre"=> "CHONGOYAPE"
            ],
            [
                "id"=> "140103",
                "provincia_id"=> "140100",
                "nombre"=> "ETEN"
            ],
            [
                "id"=> "140104",
                "provincia_id"=> "140100",
                "nombre"=> "ETEN PUERTO"
            ],
            [
                "id"=> "140105",
                "provincia_id"=> "140100",
                "nombre"=> "JOSE LEONARDO ORTIZ"
            ],
            [
                "id"=> "140106",
                "provincia_id"=> "140100",
                "nombre"=> "LA VICTORIA"
            ],
            [
                "id"=> "140107",
                "provincia_id"=> "140100",
                "nombre"=> "LAGUNAS"
            ],
            [
                "id"=> "140108",
                "provincia_id"=> "140100",
                "nombre"=> "MONSEFU"
            ],
            [
                "id"=> "140109",
                "provincia_id"=> "140100",
                "nombre"=> "NUEVA ARICA"
            ],
            [
                "id"=> "140110",
                "provincia_id"=> "140100",
                "nombre"=> "OYOTUN"
            ],
            [
                "id"=> "140111",
                "provincia_id"=> "140100",
                "nombre"=> "PICSI"
            ],
            [
                "id"=> "140112",
                "provincia_id"=> "140100",
                "nombre"=> "PIMENTEL"
            ],
            [
                "id"=> "140113",
                "provincia_id"=> "140100",
                "nombre"=> "REQUE"
            ],
            [
                "id"=> "140114",
                "provincia_id"=> "140100",
                "nombre"=> "SANTA ROSA"
            ],
            [
                "id"=> "140115",
                "provincia_id"=> "140100",
                "nombre"=> "SAÑA"
            ],
            [
                "id"=> "140116",
                "provincia_id"=> "140100",
                "nombre"=> "CAYALTI"
            ],
            [
                "id"=> "140117",
                "provincia_id"=> "140100",
                "nombre"=> "PATAPO"
            ],
            [
                "id"=> "140118",
                "provincia_id"=> "140100",
                "nombre"=> "POMALCA"
            ],
            [
                "id"=> "140119",
                "provincia_id"=> "140100",
                "nombre"=> "PUCALA"
            ],
            [
                "id"=> "140120",
                "provincia_id"=> "140100",
                "nombre"=> "TUMAN"
            ],
            [
                "id"=> "140201",
                "provincia_id"=> "140200",
                "nombre"=> "FERREÑAFE"
            ],
            [
                "id"=> "140202",
                "provincia_id"=> "140200",
                "nombre"=> "CAÑARIS"
            ],
            [
                "id"=> "140203",
                "provincia_id"=> "140200",
                "nombre"=> "INCAHUASI"
            ],
            [
                "id"=> "140204",
                "provincia_id"=> "140200",
                "nombre"=> "MANUEL ANTONIO MESONES MURO"
            ],
            [
                "id"=> "140205",
                "provincia_id"=> "140200",
                "nombre"=> "PITIPO"
            ],
            [
                "id"=> "140206",
                "provincia_id"=> "140200",
                "nombre"=> "PUEBLO NUEVO"
            ],
            [
                "id"=> "140301",
                "provincia_id"=> "140300",
                "nombre"=> "LAMBAYEQUE"
            ],
            [
                "id"=> "140302",
                "provincia_id"=> "140300",
                "nombre"=> "CHOCHOPE"
            ],
            [
                "id"=> "140303",
                "provincia_id"=> "140300",
                "nombre"=> "ILLIMO"
            ],
            [
                "id"=> "140304",
                "provincia_id"=> "140300",
                "nombre"=> "JAYANCA"
            ],
            [
                "id"=> "140305",
                "provincia_id"=> "140300",
                "nombre"=> "MOCHUMI"
            ],
            [
                "id"=> "140306",
                "provincia_id"=> "140300",
                "nombre"=> "MORROPE"
            ],
            [
                "id"=> "140307",
                "provincia_id"=> "140300",
                "nombre"=> "MOTUPE"
            ],
            [
                "id"=> "140308",
                "provincia_id"=> "140300",
                "nombre"=> "OLMOS"
            ],
            [
                "id"=> "140309",
                "provincia_id"=> "140300",
                "nombre"=> "PACORA"
            ],
            [
                "id"=> "140310",
                "provincia_id"=> "140300",
                "nombre"=> "SALAS"
            ],
            [
                "id"=> "140311",
                "provincia_id"=> "140300",
                "nombre"=> "SAN JOSE"
            ],
            [
                "id"=> "140312",
                "provincia_id"=> "140300",
                "nombre"=> "TUCUME"
            ],
            [
                "id"=> "150101",
                "provincia_id"=> "150100",
                "nombre"=> "LIMA"
            ],
            [
                "id"=> "150102",
                "provincia_id"=> "150100",
                "nombre"=> "ANCON"
            ],
            [
                "id"=> "150103",
                "provincia_id"=> "150100",
                "nombre"=> "ATE"
            ],
            [
                "id"=> "150104",
                "provincia_id"=> "150100",
                "nombre"=> "BARRANCO"
            ],
            [
                "id"=> "150105",
                "provincia_id"=> "150100",
                "nombre"=> "BREÑA"
            ],
            [
                "id"=> "150106",
                "provincia_id"=> "150100",
                "nombre"=> "CARABAYLLO"
            ],
            [
                "id"=> "150107",
                "provincia_id"=> "150100",
                "nombre"=> "CHACLACAYO"
            ],
            [
                "id"=> "150108",
                "provincia_id"=> "150100",
                "nombre"=> "CHORRILLOS"
            ],
            [
                "id"=> "150109",
                "provincia_id"=> "150100",
                "nombre"=> "CIENEGUILLA"
            ],
            [
                "id"=> "150110",
                "provincia_id"=> "150100",
                "nombre"=> "COMAS"
            ],
            [
                "id"=> "150111",
                "provincia_id"=> "150100",
                "nombre"=> "EL AGUSTINO"
            ],
            [
                "id"=> "150112",
                "provincia_id"=> "150100",
                "nombre"=> "INDEPENDENCIA"
            ],
            [
                "id"=> "150113",
                "provincia_id"=> "150100",
                "nombre"=> "JESUS MARIA"
            ],
            [
                "id"=> "150114",
                "provincia_id"=> "150100",
                "nombre"=> "LA MOLINA"
            ],
            [
                "id"=> "150115",
                "provincia_id"=> "150100",
                "nombre"=> "LA VICTORIA"
            ],
            [
                "id"=> "150116",
                "provincia_id"=> "150100",
                "nombre"=> "LINCE"
            ],
            [
                "id"=> "150117",
                "provincia_id"=> "150100",
                "nombre"=> "LOS OLIVOS"
            ],
            [
                "id"=> "150118",
                "provincia_id"=> "150100",
                "nombre"=> "LURIGANCHO"
            ],
            [
                "id"=> "150119",
                "provincia_id"=> "150100",
                "nombre"=> "LURIN"
            ],
            [
                "id"=> "150120",
                "provincia_id"=> "150100",
                "nombre"=> "MAGDALENA DEL MAR"
            ],
            [
                "id"=> "150121",
                "provincia_id"=> "150100",
                "nombre"=> "PUEBLO LIBRE"
            ],
            [
                "id"=> "150122",
                "provincia_id"=> "150100",
                "nombre"=> "MIRAFLORES"
            ],
            [
                "id"=> "150123",
                "provincia_id"=> "150100",
                "nombre"=> "PACHACAMAC"
            ],
            [
                "id"=> "150124",
                "provincia_id"=> "150100",
                "nombre"=> "PUCUSANA"
            ],
            [
                "id"=> "150125",
                "provincia_id"=> "150100",
                "nombre"=> "PUENTE PIEDRA"
            ],
            [
                "id"=> "150126",
                "provincia_id"=> "150100",
                "nombre"=> "PUNTA HERMOSA"
            ],
            [
                "id"=> "150127",
                "provincia_id"=> "150100",
                "nombre"=> "PUNTA NEGRA"
            ],
            [
                "id"=> "150128",
                "provincia_id"=> "150100",
                "nombre"=> "RIMAC"
            ],
            [
                "id"=> "150129",
                "provincia_id"=> "150100",
                "nombre"=> "SAN BARTOLO"
            ],
            [
                "id"=> "150130",
                "provincia_id"=> "150100",
                "nombre"=> "SAN BORJA"
            ],
            [
                "id"=> "150131",
                "provincia_id"=> "150100",
                "nombre"=> "SAN ISIDRO"
            ],
            [
                "id"=> "150132",
                "provincia_id"=> "150100",
                "nombre"=> "SAN JUAN DE LURIGANCHO"
            ],
            [
                "id"=> "150133",
                "provincia_id"=> "150100",
                "nombre"=> "SAN JUAN DE MIRAFLORES"
            ],
            [
                "id"=> "150134",
                "provincia_id"=> "150100",
                "nombre"=> "SAN LUIS"
            ],
            [
                "id"=> "150135",
                "provincia_id"=> "150100",
                "nombre"=> "SAN MARTIN DE PORRES"
            ],
            [
                "id"=> "150136",
                "provincia_id"=> "150100",
                "nombre"=> "SAN MIGUEL"
            ],
            [
                "id"=> "150137",
                "provincia_id"=> "150100",
                "nombre"=> "SANTA ANITA"
            ],
            [
                "id"=> "150138",
                "provincia_id"=> "150100",
                "nombre"=> "SANTA MARIA DEL MAR"
            ],
            [
                "id"=> "150139",
                "provincia_id"=> "150100",
                "nombre"=> "SANTA ROSA"
            ],
            [
                "id"=> "150140",
                "provincia_id"=> "150100",
                "nombre"=> "SANTIAGO DE SURCO"
            ],
            [
                "id"=> "150141",
                "provincia_id"=> "150100",
                "nombre"=> "SURQUILLO"
            ],
            [
                "id"=> "150142",
                "provincia_id"=> "150100",
                "nombre"=> "VILLA EL SALVADOR"
            ],
            [
                "id"=> "150143",
                "provincia_id"=> "150100",
                "nombre"=> "VILLA MARIA DEL TRIUNFO"
            ],
            [
                "id"=> "150201",
                "provincia_id"=> "150200",
                "nombre"=> "BARRANCA"
            ],
            [
                "id"=> "150202",
                "provincia_id"=> "150200",
                "nombre"=> "PARAMONGA"
            ],
            [
                "id"=> "150203",
                "provincia_id"=> "150200",
                "nombre"=> "PATIVILCA"
            ],
            [
                "id"=> "150204",
                "provincia_id"=> "150200",
                "nombre"=> "SUPE"
            ],
            [
                "id"=> "150205",
                "provincia_id"=> "150200",
                "nombre"=> "SUPE PUERTO"
            ],
            [
                "id"=> "150301",
                "provincia_id"=> "150300",
                "nombre"=> "CAJATAMBO"
            ],
            [
                "id"=> "150302",
                "provincia_id"=> "150300",
                "nombre"=> "COPA"
            ],
            [
                "id"=> "150303",
                "provincia_id"=> "150300",
                "nombre"=> "GORGOR"
            ],
            [
                "id"=> "150304",
                "provincia_id"=> "150300",
                "nombre"=> "HUANCAPON"
            ],
            [
                "id"=> "150305",
                "provincia_id"=> "150300",
                "nombre"=> "MANAS"
            ],
            [
                "id"=> "150401",
                "provincia_id"=> "150400",
                "nombre"=> "CANTA"
            ],
            [
                "id"=> "150402",
                "provincia_id"=> "150400",
                "nombre"=> "ARAHUAY"
            ],
            [
                "id"=> "150403",
                "provincia_id"=> "150400",
                "nombre"=> "HUAMANTANGA"
            ],
            [
                "id"=> "150404",
                "provincia_id"=> "150400",
                "nombre"=> "HUAROS"
            ],
            [
                "id"=> "150405",
                "provincia_id"=> "150400",
                "nombre"=> "LACHAQUI"
            ],
            [
                "id"=> "150406",
                "provincia_id"=> "150400",
                "nombre"=> "SAN BUENAVENTURA"
            ],
            [
                "id"=> "150407",
                "provincia_id"=> "150400",
                "nombre"=> "SANTA ROSA DE QUIVES"
            ],
            [
                "id"=> "150501",
                "provincia_id"=> "150500",
                "nombre"=> "SAN VICENTE DE CAÑETE"
            ],
            [
                "id"=> "150502",
                "provincia_id"=> "150500",
                "nombre"=> "ASIA"
            ],
            [
                "id"=> "150503",
                "provincia_id"=> "150500",
                "nombre"=> "CALANGO"
            ],
            [
                "id"=> "150504",
                "provincia_id"=> "150500",
                "nombre"=> "CERRO AZUL"
            ],
            [
                "id"=> "150505",
                "provincia_id"=> "150500",
                "nombre"=> "CHILCA"
            ],
            [
                "id"=> "150506",
                "provincia_id"=> "150500",
                "nombre"=> "COAYLLO"
            ],
            [
                "id"=> "150507",
                "provincia_id"=> "150500",
                "nombre"=> "IMPERIAL"
            ],
            [
                "id"=> "150508",
                "provincia_id"=> "150500",
                "nombre"=> "LUNAHUANA"
            ],
            [
                "id"=> "150509",
                "provincia_id"=> "150500",
                "nombre"=> "MALA"
            ],
            [
                "id"=> "150510",
                "provincia_id"=> "150500",
                "nombre"=> "NUEVO IMPERIAL"
            ],
            [
                "id"=> "150511",
                "provincia_id"=> "150500",
                "nombre"=> "PACARAN"
            ],
            [
                "id"=> "150512",
                "provincia_id"=> "150500",
                "nombre"=> "QUILMANA"
            ],
            [
                "id"=> "150513",
                "provincia_id"=> "150500",
                "nombre"=> "SAN ANTONIO"
            ],
            [
                "id"=> "150514",
                "provincia_id"=> "150500",
                "nombre"=> "SAN LUIS"
            ],
            [
                "id"=> "150515",
                "provincia_id"=> "150500",
                "nombre"=> "SANTA CRUZ DE FLORES"
            ],
            [
                "id"=> "150516",
                "provincia_id"=> "150500",
                "nombre"=> "ZUÑIGA"
            ],
            [
                "id"=> "150601",
                "provincia_id"=> "150600",
                "nombre"=> "HUARAL"
            ],
            [
                "id"=> "150602",
                "provincia_id"=> "150600",
                "nombre"=> "ATAVILLOS ALTO"
            ],
            [
                "id"=> "150603",
                "provincia_id"=> "150600",
                "nombre"=> "ATAVILLOS BAJO"
            ],
            [
                "id"=> "150604",
                "provincia_id"=> "150600",
                "nombre"=> "AUCALLAMA"
            ],
            [
                "id"=> "150605",
                "provincia_id"=> "150600",
                "nombre"=> "CHANCAY"
            ],
            [
                "id"=> "150606",
                "provincia_id"=> "150600",
                "nombre"=> "IHUARI"
            ],
            [
                "id"=> "150607",
                "provincia_id"=> "150600",
                "nombre"=> "LAMPIAN"
            ],
            [
                "id"=> "150608",
                "provincia_id"=> "150600",
                "nombre"=> "PACARAOS"
            ],
            [
                "id"=> "150609",
                "provincia_id"=> "150600",
                "nombre"=> "SAN MIGUEL DE ACOS"
            ],
            [
                "id"=> "150610",
                "provincia_id"=> "150600",
                "nombre"=> "SANTA CRUZ DE ANDAMARCA"
            ],
            [
                "id"=> "150611",
                "provincia_id"=> "150600",
                "nombre"=> "SUMBILCA"
            ],
            [
                "id"=> "150612",
                "provincia_id"=> "150600",
                "nombre"=> "VEINTISIETE DE NOVIEMBRE"
            ],
            [
                "id"=> "150701",
                "provincia_id"=> "150700",
                "nombre"=> "MATUCANA"
            ],
            [
                "id"=> "150702",
                "provincia_id"=> "150700",
                "nombre"=> "ANTIOQUIA"
            ],
            [
                "id"=> "150703",
                "provincia_id"=> "150700",
                "nombre"=> "CALLAHUANCA"
            ],
            [
                "id"=> "150704",
                "provincia_id"=> "150700",
                "nombre"=> "CARAMPOMA"
            ],
            [
                "id"=> "150705",
                "provincia_id"=> "150700",
                "nombre"=> "CHICLA"
            ],
            [
                "id"=> "150706",
                "provincia_id"=> "150700",
                "nombre"=> "CUENCA"
            ],
            [
                "id"=> "150707",
                "provincia_id"=> "150700",
                "nombre"=> "HUACHUPAMPA"
            ],
            [
                "id"=> "150708",
                "provincia_id"=> "150700",
                "nombre"=> "HUANZA"
            ],
            [
                "id"=> "150709",
                "provincia_id"=> "150700",
                "nombre"=> "HUAROCHIRI"
            ],
            [
                "id"=> "150710",
                "provincia_id"=> "150700",
                "nombre"=> "LAHUAYTAMBO"
            ],
            [
                "id"=> "150711",
                "provincia_id"=> "150700",
                "nombre"=> "LANGA"
            ],
            [
                "id"=> "150712",
                "provincia_id"=> "150700",
                "nombre"=> "LARAOS"
            ],
            [
                "id"=> "150713",
                "provincia_id"=> "150700",
                "nombre"=> "MARIATANA"
            ],
            [
                "id"=> "150714",
                "provincia_id"=> "150700",
                "nombre"=> "RICARDO PALMA"
            ],
            [
                "id"=> "150715",
                "provincia_id"=> "150700",
                "nombre"=> "SAN ANDRES DE TUPICOCHA"
            ],
            [
                "id"=> "150716",
                "provincia_id"=> "150700",
                "nombre"=> "SAN ANTONIO"
            ],
            [
                "id"=> "150717",
                "provincia_id"=> "150700",
                "nombre"=> "SAN BARTOLOME"
            ],
            [
                "id"=> "150718",
                "provincia_id"=> "150700",
                "nombre"=> "SAN DAMIAN"
            ],
            [
                "id"=> "150719",
                "provincia_id"=> "150700",
                "nombre"=> "SAN JUAN DE IRIS"
            ],
            [
                "id"=> "150720",
                "provincia_id"=> "150700",
                "nombre"=> "SAN JUAN DE TANTARANCHE"
            ],
            [
                "id"=> "150721",
                "provincia_id"=> "150700",
                "nombre"=> "SAN LORENZO DE QUINTI"
            ],
            [
                "id"=> "150722",
                "provincia_id"=> "150700",
                "nombre"=> "SAN MATEO"
            ],
            [
                "id"=> "150723",
                "provincia_id"=> "150700",
                "nombre"=> "SAN MATEO DE OTAO"
            ],
            [
                "id"=> "150724",
                "provincia_id"=> "150700",
                "nombre"=> "SAN PEDRO DE CASTA"
            ],
            [
                "id"=> "150725",
                "provincia_id"=> "150700",
                "nombre"=> "SAN PEDRO DE HUANCAYRE"
            ],
            [
                "id"=> "150726",
                "provincia_id"=> "150700",
                "nombre"=> "SANGALLAYA"
            ],
            [
                "id"=> "150727",
                "provincia_id"=> "150700",
                "nombre"=> "SANTA CRUZ DE COCACHACRA"
            ],
            [
                "id"=> "150728",
                "provincia_id"=> "150700",
                "nombre"=> "SANTA EULALIA"
            ],
            [
                "id"=> "150729",
                "provincia_id"=> "150700",
                "nombre"=> "SANTIAGO DE ANCHUCAYA"
            ],
            [
                "id"=> "150730",
                "provincia_id"=> "150700",
                "nombre"=> "SANTIAGO DE TUNA"
            ],
            [
                "id"=> "150731",
                "provincia_id"=> "150700",
                "nombre"=> "SANTO DOMINGO DE LOS OLLEROS"
            ],
            [
                "id"=> "150732",
                "provincia_id"=> "150700",
                "nombre"=> "SURCO"
            ],
            [
                "id"=> "150801",
                "provincia_id"=> "150800",
                "nombre"=> "HUACHO"
            ],
            [
                "id"=> "150802",
                "provincia_id"=> "150800",
                "nombre"=> "AMBAR"
            ],
            [
                "id"=> "150803",
                "provincia_id"=> "150800",
                "nombre"=> "CALETA DE CARQUIN"
            ],
            [
                "id"=> "150804",
                "provincia_id"=> "150800",
                "nombre"=> "CHECRAS"
            ],
            [
                "id"=> "150805",
                "provincia_id"=> "150800",
                "nombre"=> "HUALMAY"
            ],
            [
                "id"=> "150806",
                "provincia_id"=> "150800",
                "nombre"=> "HUAURA"
            ],
            [
                "id"=> "150807",
                "provincia_id"=> "150800",
                "nombre"=> "LEONCIO PRADO"
            ],
            [
                "id"=> "150808",
                "provincia_id"=> "150800",
                "nombre"=> "PACCHO"
            ],
            [
                "id"=> "150809",
                "provincia_id"=> "150800",
                "nombre"=> "SANTA LEONOR"
            ],
            [
                "id"=> "150810",
                "provincia_id"=> "150800",
                "nombre"=> "SANTA MARIA"
            ],
            [
                "id"=> "150811",
                "provincia_id"=> "150800",
                "nombre"=> "SAYAN"
            ],
            [
                "id"=> "150812",
                "provincia_id"=> "150800",
                "nombre"=> "VEGUETA"
            ],
            [
                "id"=> "150901",
                "provincia_id"=> "150900",
                "nombre"=> "OYON"
            ],
            [
                "id"=> "150902",
                "provincia_id"=> "150900",
                "nombre"=> "ANDAJES"
            ],
            [
                "id"=> "150903",
                "provincia_id"=> "150900",
                "nombre"=> "CAUJUL"
            ],
            [
                "id"=> "150904",
                "provincia_id"=> "150900",
                "nombre"=> "COCHAMARCA"
            ],
            [
                "id"=> "150905",
                "provincia_id"=> "150900",
                "nombre"=> "NAVAN"
            ],
            [
                "id"=> "150906",
                "provincia_id"=> "150900",
                "nombre"=> "PACHANGARA"
            ],
            [
                "id"=> "151001",
                "provincia_id"=> "151000",
                "nombre"=> "YAUYOS"
            ],
            [
                "id"=> "151002",
                "provincia_id"=> "151000",
                "nombre"=> "ALIS"
            ],
            [
                "id"=> "151003",
                "provincia_id"=> "151000",
                "nombre"=> "ALLAUCA"
            ],
            [
                "id"=> "151004",
                "provincia_id"=> "151000",
                "nombre"=> "AYAVIRI"
            ],
            [
                "id"=> "151005",
                "provincia_id"=> "151000",
                "nombre"=> "AZANGARO"
            ],
            [
                "id"=> "151006",
                "provincia_id"=> "151000",
                "nombre"=> "CACRA"
            ],
            [
                "id"=> "151007",
                "provincia_id"=> "151000",
                "nombre"=> "CARANIA"
            ],
            [
                "id"=> "151008",
                "provincia_id"=> "151000",
                "nombre"=> "CATAHUASI"
            ],
            [
                "id"=> "151009",
                "provincia_id"=> "151000",
                "nombre"=> "CHOCOS"
            ],
            [
                "id"=> "151010",
                "provincia_id"=> "151000",
                "nombre"=> "COCHAS"
            ],
            [
                "id"=> "151011",
                "provincia_id"=> "151000",
                "nombre"=> "COLONIA"
            ],
            [
                "id"=> "151012",
                "provincia_id"=> "151000",
                "nombre"=> "HONGOS"
            ],
            [
                "id"=> "151013",
                "provincia_id"=> "151000",
                "nombre"=> "HUAMPARA"
            ],
            [
                "id"=> "151014",
                "provincia_id"=> "151000",
                "nombre"=> "HUANCAYA"
            ],
            [
                "id"=> "151015",
                "provincia_id"=> "151000",
                "nombre"=> "HUANGASCAR"
            ],
            [
                "id"=> "151016",
                "provincia_id"=> "151000",
                "nombre"=> "HUANTAN"
            ],
            [
                "id"=> "151017",
                "provincia_id"=> "151000",
                "nombre"=> "HUAÑEC"
            ],
            [
                "id"=> "151018",
                "provincia_id"=> "151000",
                "nombre"=> "LARAOS"
            ],
            [
                "id"=> "151019",
                "provincia_id"=> "151000",
                "nombre"=> "LINCHA"
            ],
            [
                "id"=> "151020",
                "provincia_id"=> "151000",
                "nombre"=> "MADEAN"
            ],
            [
                "id"=> "151021",
                "provincia_id"=> "151000",
                "nombre"=> "MIRAFLORES"
            ],
            [
                "id"=> "151022",
                "provincia_id"=> "151000",
                "nombre"=> "OMAS"
            ],
            [
                "id"=> "151023",
                "provincia_id"=> "151000",
                "nombre"=> "PUTINZA"
            ],
            [
                "id"=> "151024",
                "provincia_id"=> "151000",
                "nombre"=> "QUINCHES"
            ],
            [
                "id"=> "151025",
                "provincia_id"=> "151000",
                "nombre"=> "QUINOCAY"
            ],
            [
                "id"=> "151026",
                "provincia_id"=> "151000",
                "nombre"=> "SAN JOAQUIN"
            ],
            [
                "id"=> "151027",
                "provincia_id"=> "151000",
                "nombre"=> "SAN PEDRO DE PILAS"
            ],
            [
                "id"=> "151028",
                "provincia_id"=> "151000",
                "nombre"=> "TANTA"
            ],
            [
                "id"=> "151029",
                "provincia_id"=> "151000",
                "nombre"=> "TAURIPAMPA"
            ],
            [
                "id"=> "151030",
                "provincia_id"=> "151000",
                "nombre"=> "TOMAS"
            ],
            [
                "id"=> "151031",
                "provincia_id"=> "151000",
                "nombre"=> "TUPE"
            ],
            [
                "id"=> "151032",
                "provincia_id"=> "151000",
                "nombre"=> "VIÑAC"
            ],
            [
                "id"=> "151033",
                "provincia_id"=> "151000",
                "nombre"=> "VITIS"
            ],
            [
                "id"=> "160101",
                "provincia_id"=> "160100",
                "nombre"=> "IQUITOS"
            ],
            [
                "id"=> "160102",
                "provincia_id"=> "160100",
                "nombre"=> "ALTO NANAY"
            ],
            [
                "id"=> "160103",
                "provincia_id"=> "160100",
                "nombre"=> "FERNANDO LORES"
            ],
            [
                "id"=> "160104",
                "provincia_id"=> "160100",
                "nombre"=> "INDIANA"
            ],
            [
                "id"=> "160105",
                "provincia_id"=> "160100",
                "nombre"=> "LAS AMAZONAS"
            ],
            [
                "id"=> "160106",
                "provincia_id"=> "160100",
                "nombre"=> "MAZAN"
            ],
            [
                "id"=> "160107",
                "provincia_id"=> "160100",
                "nombre"=> "NAPO"
            ],
            [
                "id"=> "160108",
                "provincia_id"=> "160100",
                "nombre"=> "PUNCHANA"
            ],
            [
                "id"=> "160109",
                "provincia_id"=> "160100",
                "nombre"=> "PUTUMAYO"
            ],
            [
                "id"=> "160110",
                "provincia_id"=> "160100",
                "nombre"=> "TORRES CAUSANA"
            ],
            [
                "id"=> "160112",
                "provincia_id"=> "160100",
                "nombre"=> "BELEN"
            ],
            [
                "id"=> "160113",
                "provincia_id"=> "160100",
                "nombre"=> "SAN JUAN BAUTISTA"
            ],
            [
                "id"=> "160114",
                "provincia_id"=> "160100",
                "nombre"=> "TENIENTE MANUEL CLAVERO"
            ],
            [
                "id"=> "160201",
                "provincia_id"=> "160200",
                "nombre"=> "YURIMAGUAS"
            ],
            [
                "id"=> "160202",
                "provincia_id"=> "160200",
                "nombre"=> "BALSAPUERTO"
            ],
            [
                "id"=> "160205",
                "provincia_id"=> "160200",
                "nombre"=> "JEBEROS"
            ],
            [
                "id"=> "160206",
                "provincia_id"=> "160200",
                "nombre"=> "LAGUNAS"
            ],
            [
                "id"=> "160210",
                "provincia_id"=> "160200",
                "nombre"=> "SANTA CRUZ"
            ],
            [
                "id"=> "160211",
                "provincia_id"=> "160200",
                "nombre"=> "TENIENTE CESAR LOPEZ ROJAS"
            ],
            [
                "id"=> "160301",
                "provincia_id"=> "160300",
                "nombre"=> "NAUTA"
            ],
            [
                "id"=> "160302",
                "provincia_id"=> "160300",
                "nombre"=> "PARINARI"
            ],
            [
                "id"=> "160303",
                "provincia_id"=> "160300",
                "nombre"=> "TIGRE"
            ],
            [
                "id"=> "160304",
                "provincia_id"=> "160300",
                "nombre"=> "TROMPETEROS"
            ],
            [
                "id"=> "160305",
                "provincia_id"=> "160300",
                "nombre"=> "URARINAS"
            ],
            [
                "id"=> "160401",
                "provincia_id"=> "160400",
                "nombre"=> "RAMON CASTILLA"
            ],
            [
                "id"=> "160402",
                "provincia_id"=> "160400",
                "nombre"=> "PEBAS"
            ],
            [
                "id"=> "160403",
                "provincia_id"=> "160400",
                "nombre"=> "YAVARI"
            ],
            [
                "id"=> "160404",
                "provincia_id"=> "160400",
                "nombre"=> "SAN PABLO"
            ],
            [
                "id"=> "160501",
                "provincia_id"=> "160500",
                "nombre"=> "REQUENA"
            ],
            [
                "id"=> "160502",
                "provincia_id"=> "160500",
                "nombre"=> "ALTO TAPICHE"
            ],
            [
                "id"=> "160503",
                "provincia_id"=> "160500",
                "nombre"=> "CAPELO"
            ],
            [
                "id"=> "160504",
                "provincia_id"=> "160500",
                "nombre"=> "EMILIO SAN MARTIN"
            ],
            [
                "id"=> "160505",
                "provincia_id"=> "160500",
                "nombre"=> "MAQUIA"
            ],
            [
                "id"=> "160506",
                "provincia_id"=> "160500",
                "nombre"=> "PUINAHUA"
            ],
            [
                "id"=> "160507",
                "provincia_id"=> "160500",
                "nombre"=> "SAQUENA"
            ],
            [
                "id"=> "160508",
                "provincia_id"=> "160500",
                "nombre"=> "SOPLIN"
            ],
            [
                "id"=> "160509",
                "provincia_id"=> "160500",
                "nombre"=> "TAPICHE"
            ],
            [
                "id"=> "160510",
                "provincia_id"=> "160500",
                "nombre"=> "JENARO HERRERA"
            ],
            [
                "id"=> "160511",
                "provincia_id"=> "160500",
                "nombre"=> "YAQUERANA"
            ],
            [
                "id"=> "160601",
                "provincia_id"=> "160600",
                "nombre"=> "CONTAMANA"
            ],
            [
                "id"=> "160602",
                "provincia_id"=> "160600",
                "nombre"=> "INAHUAYA"
            ],
            [
                "id"=> "160603",
                "provincia_id"=> "160600",
                "nombre"=> "PADRE MARQUEZ"
            ],
            [
                "id"=> "160604",
                "provincia_id"=> "160600",
                "nombre"=> "PAMPA HERMOSA"
            ],
            [
                "id"=> "160605",
                "provincia_id"=> "160600",
                "nombre"=> "SARAYACU"
            ],
            [
                "id"=> "160606",
                "provincia_id"=> "160600",
                "nombre"=> "VARGAS GUERRA"
            ],
            [
                "id"=> "160701",
                "provincia_id"=> "160700",
                "nombre"=> "BARRANCA"
            ],
            [
                "id"=> "160702",
                "provincia_id"=> "160700",
                "nombre"=> "CAHUAPANAS"
            ],
            [
                "id"=> "160703",
                "provincia_id"=> "160700",
                "nombre"=> "MANSERICHE"
            ],
            [
                "id"=> "160704",
                "provincia_id"=> "160700",
                "nombre"=> "MORONA"
            ],
            [
                "id"=> "160705",
                "provincia_id"=> "160700",
                "nombre"=> "PASTAZA"
            ],
            [
                "id"=> "160706",
                "provincia_id"=> "160700",
                "nombre"=> "ANDOAS"
            ],
            [
                "id"=> "170101",
                "provincia_id"=> "170100",
                "nombre"=> "TAMBOPATA"
            ],
            [
                "id"=> "170102",
                "provincia_id"=> "170100",
                "nombre"=> "INAMBARI"
            ],
            [
                "id"=> "170103",
                "provincia_id"=> "170100",
                "nombre"=> "LAS PIEDRAS"
            ],
            [
                "id"=> "170104",
                "provincia_id"=> "170100",
                "nombre"=> "LABERINTO"
            ],
            [
                "id"=> "170201",
                "provincia_id"=> "170200",
                "nombre"=> "MANU"
            ],
            [
                "id"=> "170202",
                "provincia_id"=> "170200",
                "nombre"=> "FITZCARRALD"
            ],
            [
                "id"=> "170203",
                "provincia_id"=> "170200",
                "nombre"=> "MADRE DE DIOS"
            ],
            [
                "id"=> "170204",
                "provincia_id"=> "170200",
                "nombre"=> "HUEPETUHE"
            ],
            [
                "id"=> "170301",
                "provincia_id"=> "170300",
                "nombre"=> "IÑAPARI"
            ],
            [
                "id"=> "170302",
                "provincia_id"=> "170300",
                "nombre"=> "IBERIA"
            ],
            [
                "id"=> "170303",
                "provincia_id"=> "170300",
                "nombre"=> "TAHUAMANU"
            ],
            [
                "id"=> "180101",
                "provincia_id"=> "180100",
                "nombre"=> "MOQUEGUA"
            ],
            [
                "id"=> "180102",
                "provincia_id"=> "180100",
                "nombre"=> "CARUMAS"
            ],
            [
                "id"=> "180103",
                "provincia_id"=> "180100",
                "nombre"=> "CUCHUMBAYA"
            ],
            [
                "id"=> "180104",
                "provincia_id"=> "180100",
                "nombre"=> "SAMEGUA"
            ],
            [
                "id"=> "180105",
                "provincia_id"=> "180100",
                "nombre"=> "SAN CRISTOBAL"
            ],
            [
                "id"=> "180106",
                "provincia_id"=> "180100",
                "nombre"=> "TORATA"
            ],
            [
                "id"=> "180201",
                "provincia_id"=> "180200",
                "nombre"=> "OMATE"
            ],
            [
                "id"=> "180202",
                "provincia_id"=> "180200",
                "nombre"=> "CHOJATA"
            ],
            [
                "id"=> "180203",
                "provincia_id"=> "180200",
                "nombre"=> "COALAQUE"
            ],
            [
                "id"=> "180204",
                "provincia_id"=> "180200",
                "nombre"=> "ICHUÑA"
            ],
            [
                "id"=> "180205",
                "provincia_id"=> "180200",
                "nombre"=> "LA CAPILLA"
            ],
            [
                "id"=> "180206",
                "provincia_id"=> "180200",
                "nombre"=> "LLOQUE"
            ],
            [
                "id"=> "180207",
                "provincia_id"=> "180200",
                "nombre"=> "MATALAQUE"
            ],
            [
                "id"=> "180208",
                "provincia_id"=> "180200",
                "nombre"=> "PUQUINA"
            ],
            [
                "id"=> "180209",
                "provincia_id"=> "180200",
                "nombre"=> "QUINISTAQUILLAS"
            ],
            [
                "id"=> "180210",
                "provincia_id"=> "180200",
                "nombre"=> "UBINAS"
            ],
            [
                "id"=> "180211",
                "provincia_id"=> "180200",
                "nombre"=> "YUNGA"
            ],
            [
                "id"=> "180301",
                "provincia_id"=> "180300",
                "nombre"=> "ILO"
            ],
            [
                "id"=> "180302",
                "provincia_id"=> "180300",
                "nombre"=> "EL ALGARROBAL"
            ],
            [
                "id"=> "180303",
                "provincia_id"=> "180300",
                "nombre"=> "PACOCHA"
            ],
            [
                "id"=> "190101",
                "provincia_id"=> "190100",
                "nombre"=> "CHAUPIMARCA"
            ],
            [
                "id"=> "190102",
                "provincia_id"=> "190100",
                "nombre"=> "HUACHON"
            ],
            [
                "id"=> "190103",
                "provincia_id"=> "190100",
                "nombre"=> "HUARIACA"
            ],
            [
                "id"=> "190104",
                "provincia_id"=> "190100",
                "nombre"=> "HUAYLLAY"
            ],
            [
                "id"=> "190105",
                "provincia_id"=> "190100",
                "nombre"=> "NINACACA"
            ],
            [
                "id"=> "190106",
                "provincia_id"=> "190100",
                "nombre"=> "PALLANCHACRA"
            ],
            [
                "id"=> "190107",
                "provincia_id"=> "190100",
                "nombre"=> "PAUCARTAMBO"
            ],
            [
                "id"=> "190108",
                "provincia_id"=> "190100",
                "nombre"=> "SAN FRANCISCO DE ASIS DE YARUSYACAN"
            ],
            [
                "id"=> "190109",
                "provincia_id"=> "190100",
                "nombre"=> "SIMON BOLIVAR"
            ],
            [
                "id"=> "190110",
                "provincia_id"=> "190100",
                "nombre"=> "TICLACAYAN"
            ],
            [
                "id"=> "190111",
                "provincia_id"=> "190100",
                "nombre"=> "TINYAHUARCO"
            ],
            [
                "id"=> "190112",
                "provincia_id"=> "190100",
                "nombre"=> "VICCO"
            ],
            [
                "id"=> "190113",
                "provincia_id"=> "190100",
                "nombre"=> "YANACANCHA"
            ],
            [
                "id"=> "190201",
                "provincia_id"=> "190200",
                "nombre"=> "YANAHUANCA"
            ],
            [
                "id"=> "190202",
                "provincia_id"=> "190200",
                "nombre"=> "CHACAYAN"
            ],
            [
                "id"=> "190203",
                "provincia_id"=> "190200",
                "nombre"=> "GOYLLARISQUIZGA"
            ],
            [
                "id"=> "190204",
                "provincia_id"=> "190200",
                "nombre"=> "PAUCAR"
            ],
            [
                "id"=> "190205",
                "provincia_id"=> "190200",
                "nombre"=> "SAN PEDRO DE PILLAO"
            ],
            [
                "id"=> "190206",
                "provincia_id"=> "190200",
                "nombre"=> "SANTA ANA DE TUSI"
            ],
            [
                "id"=> "190207",
                "provincia_id"=> "190200",
                "nombre"=> "TAPUC"
            ],
            [
                "id"=> "190208",
                "provincia_id"=> "190200",
                "nombre"=> "VILCABAMBA"
            ],
            [
                "id"=> "190301",
                "provincia_id"=> "190300",
                "nombre"=> "OXAPAMPA"
            ],
            [
                "id"=> "190302",
                "provincia_id"=> "190300",
                "nombre"=> "CHONTABAMBA"
            ],
            [
                "id"=> "190303",
                "provincia_id"=> "190300",
                "nombre"=> "HUANCABAMBA"
            ],
            [
                "id"=> "190304",
                "provincia_id"=> "190300",
                "nombre"=> "PALCAZU"
            ],
            [
                "id"=> "190305",
                "provincia_id"=> "190300",
                "nombre"=> "POZUZO"
            ],
            [
                "id"=> "190306",
                "provincia_id"=> "190300",
                "nombre"=> "PUERTO BERMUDEZ"
            ],
            [
                "id"=> "190307",
                "provincia_id"=> "190300",
                "nombre"=> "VILLA RICA"
            ],
            [
                "id"=> "190308",
                "provincia_id"=> "190300",
                "nombre"=> "CONSTITUCION"
            ],
            [
                "id"=> "200101",
                "provincia_id"=> "200100",
                "nombre"=> "PIURA"
            ],
            [
                "id"=> "200104",
                "provincia_id"=> "200100",
                "nombre"=> "CASTILLA"
            ],
            [
                "id"=> "200105",
                "provincia_id"=> "200100",
                "nombre"=> "CATACAOS"
            ],
            [
                "id"=> "200107",
                "provincia_id"=> "200100",
                "nombre"=> "CURA MORI"
            ],
            [
                "id"=> "200108",
                "provincia_id"=> "200100",
                "nombre"=> "EL TALLAN"
            ],
            [
                "id"=> "200109",
                "provincia_id"=> "200100",
                "nombre"=> "LA ARENA"
            ],
            [
                "id"=> "200110",
                "provincia_id"=> "200100",
                "nombre"=> "LA UNION"
            ],
            [
                "id"=> "200111",
                "provincia_id"=> "200100",
                "nombre"=> "LAS LOMAS"
            ],
            [
                "id"=> "200114",
                "provincia_id"=> "200100",
                "nombre"=> "TAMBO GRANDE"
            ],
            [
                "id"=> "200115",
                "provincia_id"=> "200100",
                "nombre"=> "VEINTISEIS DE OCTUBRE"
            ],
            [
                "id"=> "200201",
                "provincia_id"=> "200200",
                "nombre"=> "AYABACA"
            ],
            [
                "id"=> "200202",
                "provincia_id"=> "200200",
                "nombre"=> "FRIAS"
            ],
            [
                "id"=> "200203",
                "provincia_id"=> "200200",
                "nombre"=> "JILILI"
            ],
            [
                "id"=> "200204",
                "provincia_id"=> "200200",
                "nombre"=> "LAGUNAS"
            ],
            [
                "id"=> "200205",
                "provincia_id"=> "200200",
                "nombre"=> "MONTERO"
            ],
            [
                "id"=> "200206",
                "provincia_id"=> "200200",
                "nombre"=> "PACAIPAMPA"
            ],
            [
                "id"=> "200207",
                "provincia_id"=> "200200",
                "nombre"=> "PAIMAS"
            ],
            [
                "id"=> "200208",
                "provincia_id"=> "200200",
                "nombre"=> "SAPILLICA"
            ],
            [
                "id"=> "200209",
                "provincia_id"=> "200200",
                "nombre"=> "SICCHEZ"
            ],
            [
                "id"=> "200210",
                "provincia_id"=> "200200",
                "nombre"=> "SUYO"
            ],
            [
                "id"=> "200301",
                "provincia_id"=> "200300",
                "nombre"=> "HUANCABAMBA"
            ],
            [
                "id"=> "200302",
                "provincia_id"=> "200300",
                "nombre"=> "CANCHAQUE"
            ],
            [
                "id"=> "200303",
                "provincia_id"=> "200300",
                "nombre"=> "EL CARMEN DE LA FRONTERA"
            ],
            [
                "id"=> "200304",
                "provincia_id"=> "200300",
                "nombre"=> "HUARMACA"
            ],
            [
                "id"=> "200305",
                "provincia_id"=> "200300",
                "nombre"=> "LALAQUIZ"
            ],
            [
                "id"=> "200306",
                "provincia_id"=> "200300",
                "nombre"=> "SAN MIGUEL DE EL FAIQUE"
            ],
            [
                "id"=> "200307",
                "provincia_id"=> "200300",
                "nombre"=> "SONDOR"
            ],
            [
                "id"=> "200308",
                "provincia_id"=> "200300",
                "nombre"=> "SONDORILLO"
            ],
            [
                "id"=> "200401",
                "provincia_id"=> "200400",
                "nombre"=> "CHULUCANAS"
            ],
            [
                "id"=> "200402",
                "provincia_id"=> "200400",
                "nombre"=> "BUENOS AIRES"
            ],
            [
                "id"=> "200403",
                "provincia_id"=> "200400",
                "nombre"=> "CHALACO"
            ],
            [
                "id"=> "200404",
                "provincia_id"=> "200400",
                "nombre"=> "LA MATANZA"
            ],
            [
                "id"=> "200405",
                "provincia_id"=> "200400",
                "nombre"=> "MORROPON"
            ],
            [
                "id"=> "200406",
                "provincia_id"=> "200400",
                "nombre"=> "SALITRAL"
            ],
            [
                "id"=> "200407",
                "provincia_id"=> "200400",
                "nombre"=> "SAN JUAN DE BIGOTE"
            ],
            [
                "id"=> "200408",
                "provincia_id"=> "200400",
                "nombre"=> "SANTA CATALINA DE MOSSA"
            ],
            [
                "id"=> "200409",
                "provincia_id"=> "200400",
                "nombre"=> "SANTO DOMINGO"
            ],
            [
                "id"=> "200410",
                "provincia_id"=> "200400",
                "nombre"=> "YAMANGO"
            ],
            [
                "id"=> "200501",
                "provincia_id"=> "200500",
                "nombre"=> "PAITA"
            ],
            [
                "id"=> "200502",
                "provincia_id"=> "200500",
                "nombre"=> "AMOTAPE"
            ],
            [
                "id"=> "200503",
                "provincia_id"=> "200500",
                "nombre"=> "ARENAL"
            ],
            [
                "id"=> "200504",
                "provincia_id"=> "200500",
                "nombre"=> "COLAN"
            ],
            [
                "id"=> "200505",
                "provincia_id"=> "200500",
                "nombre"=> "LA HUACA"
            ],
            [
                "id"=> "200506",
                "provincia_id"=> "200500",
                "nombre"=> "TAMARINDO"
            ],
            [
                "id"=> "200507",
                "provincia_id"=> "200500",
                "nombre"=> "VICHAYAL"
            ],
            [
                "id"=> "200601",
                "provincia_id"=> "200600",
                "nombre"=> "SULLANA"
            ],
            [
                "id"=> "200602",
                "provincia_id"=> "200600",
                "nombre"=> "BELLAVISTA"
            ],
            [
                "id"=> "200603",
                "provincia_id"=> "200600",
                "nombre"=> "IGNACIO ESCUDERO"
            ],
            [
                "id"=> "200604",
                "provincia_id"=> "200600",
                "nombre"=> "LANCONES"
            ],
            [
                "id"=> "200605",
                "provincia_id"=> "200600",
                "nombre"=> "MARCAVELICA"
            ],
            [
                "id"=> "200606",
                "provincia_id"=> "200600",
                "nombre"=> "MIGUEL CHECA"
            ],
            [
                "id"=> "200607",
                "provincia_id"=> "200600",
                "nombre"=> "QUERECOTILLO"
            ],
            [
                "id"=> "200608",
                "provincia_id"=> "200600",
                "nombre"=> "SALITRAL"
            ],
            [
                "id"=> "200701",
                "provincia_id"=> "200700",
                "nombre"=> "PARIÑAS"
            ],
            [
                "id"=> "200702",
                "provincia_id"=> "200700",
                "nombre"=> "EL ALTO"
            ],
            [
                "id"=> "200703",
                "provincia_id"=> "200700",
                "nombre"=> "LA BREA"
            ],
            [
                "id"=> "200704",
                "provincia_id"=> "200700",
                "nombre"=> "LOBITOS"
            ],
            [
                "id"=> "200705",
                "provincia_id"=> "200700",
                "nombre"=> "LOS ORGANOS"
            ],
            [
                "id"=> "200706",
                "provincia_id"=> "200700",
                "nombre"=> "MANCORA"
            ],
            [
                "id"=> "200801",
                "provincia_id"=> "200800",
                "nombre"=> "SECHURA"
            ],
            [
                "id"=> "200802",
                "provincia_id"=> "200800",
                "nombre"=> "BELLAVISTA DE LA UNION"
            ],
            [
                "id"=> "200803",
                "provincia_id"=> "200800",
                "nombre"=> "BERNAL"
            ],
            [
                "id"=> "200804",
                "provincia_id"=> "200800",
                "nombre"=> "CRISTO NOS VALGA"
            ],
            [
                "id"=> "200805",
                "provincia_id"=> "200800",
                "nombre"=> "VICE"
            ],
            [
                "id"=> "200806",
                "provincia_id"=> "200800",
                "nombre"=> "RINCONADA LLICUAR"
            ],
            [
                "id"=> "210101",
                "provincia_id"=> "210100",
                "nombre"=> "PUNO"
            ],
            [
                "id"=> "210102",
                "provincia_id"=> "210100",
                "nombre"=> "ACORA"
            ],
            [
                "id"=> "210103",
                "provincia_id"=> "210100",
                "nombre"=> "AMANTANI"
            ],
            [
                "id"=> "210104",
                "provincia_id"=> "210100",
                "nombre"=> "ATUNCOLLA"
            ],
            [
                "id"=> "210105",
                "provincia_id"=> "210100",
                "nombre"=> "CAPACHICA"
            ],
            [
                "id"=> "210106",
                "provincia_id"=> "210100",
                "nombre"=> "CHUCUITO"
            ],
            [
                "id"=> "210107",
                "provincia_id"=> "210100",
                "nombre"=> "COATA"
            ],
            [
                "id"=> "210108",
                "provincia_id"=> "210100",
                "nombre"=> "HUATA"
            ],
            [
                "id"=> "210109",
                "provincia_id"=> "210100",
                "nombre"=> "MAÑAZO"
            ],
            [
                "id"=> "210110",
                "provincia_id"=> "210100",
                "nombre"=> "PAUCARCOLLA"
            ],
            [
                "id"=> "210111",
                "provincia_id"=> "210100",
                "nombre"=> "PICHACANI"
            ],
            [
                "id"=> "210112",
                "provincia_id"=> "210100",
                "nombre"=> "PLATERIA"
            ],
            [
                "id"=> "210113",
                "provincia_id"=> "210100",
                "nombre"=> "SAN ANTONIO"
            ],
            [
                "id"=> "210114",
                "provincia_id"=> "210100",
                "nombre"=> "TIQUILLACA"
            ],
            [
                "id"=> "210115",
                "provincia_id"=> "210100",
                "nombre"=> "VILQUE"
            ],
            [
                "id"=> "210201",
                "provincia_id"=> "210200",
                "nombre"=> "AZANGARO"
            ],
            [
                "id"=> "210202",
                "provincia_id"=> "210200",
                "nombre"=> "ACHAYA"
            ],
            [
                "id"=> "210203",
                "provincia_id"=> "210200",
                "nombre"=> "ARAPA"
            ],
            [
                "id"=> "210204",
                "provincia_id"=> "210200",
                "nombre"=> "ASILLO"
            ],
            [
                "id"=> "210205",
                "provincia_id"=> "210200",
                "nombre"=> "CAMINACA"
            ],
            [
                "id"=> "210206",
                "provincia_id"=> "210200",
                "nombre"=> "CHUPA"
            ],
            [
                "id"=> "210207",
                "provincia_id"=> "210200",
                "nombre"=> "JOSE DOMINGO CHOQUEHUANCA"
            ],
            [
                "id"=> "210208",
                "provincia_id"=> "210200",
                "nombre"=> "MUÑANI"
            ],
            [
                "id"=> "210209",
                "provincia_id"=> "210200",
                "nombre"=> "POTONI"
            ],
            [
                "id"=> "210210",
                "provincia_id"=> "210200",
                "nombre"=> "SAMAN"
            ],
            [
                "id"=> "210211",
                "provincia_id"=> "210200",
                "nombre"=> "SAN ANTON"
            ],
            [
                "id"=> "210212",
                "provincia_id"=> "210200",
                "nombre"=> "SAN JOSE"
            ],
            [
                "id"=> "210213",
                "provincia_id"=> "210200",
                "nombre"=> "SAN JUAN DE SALINAS"
            ],
            [
                "id"=> "210214",
                "provincia_id"=> "210200",
                "nombre"=> "SANTIAGO DE PUPUJA"
            ],
            [
                "id"=> "210215",
                "provincia_id"=> "210200",
                "nombre"=> "TIRAPATA"
            ],
            [
                "id"=> "210301",
                "provincia_id"=> "210300",
                "nombre"=> "MACUSANI"
            ],
            [
                "id"=> "210302",
                "provincia_id"=> "210300",
                "nombre"=> "AJOYANI"
            ],
            [
                "id"=> "210303",
                "provincia_id"=> "210300",
                "nombre"=> "AYAPATA"
            ],
            [
                "id"=> "210304",
                "provincia_id"=> "210300",
                "nombre"=> "COASA"
            ],
            [
                "id"=> "210305",
                "provincia_id"=> "210300",
                "nombre"=> "CORANI"
            ],
            [
                "id"=> "210306",
                "provincia_id"=> "210300",
                "nombre"=> "CRUCERO"
            ],
            [
                "id"=> "210307",
                "provincia_id"=> "210300",
                "nombre"=> "ITUATA"
            ],
            [
                "id"=> "210308",
                "provincia_id"=> "210300",
                "nombre"=> "OLLACHEA"
            ],
            [
                "id"=> "210309",
                "provincia_id"=> "210300",
                "nombre"=> "SAN GABAN"
            ],
            [
                "id"=> "210310",
                "provincia_id"=> "210300",
                "nombre"=> "USICAYOS"
            ],
            [
                "id"=> "210401",
                "provincia_id"=> "210400",
                "nombre"=> "JULI"
            ],
            [
                "id"=> "210402",
                "provincia_id"=> "210400",
                "nombre"=> "DESAGUADERO"
            ],
            [
                "id"=> "210403",
                "provincia_id"=> "210400",
                "nombre"=> "HUACULLANI"
            ],
            [
                "id"=> "210404",
                "provincia_id"=> "210400",
                "nombre"=> "KELLUYO"
            ],
            [
                "id"=> "210405",
                "provincia_id"=> "210400",
                "nombre"=> "PISACOMA"
            ],
            [
                "id"=> "210406",
                "provincia_id"=> "210400",
                "nombre"=> "POMATA"
            ],
            [
                "id"=> "210407",
                "provincia_id"=> "210400",
                "nombre"=> "ZEPITA"
            ],
            [
                "id"=> "210501",
                "provincia_id"=> "210500",
                "nombre"=> "ILAVE"
            ],
            [
                "id"=> "210502",
                "provincia_id"=> "210500",
                "nombre"=> "CAPAZO"
            ],
            [
                "id"=> "210503",
                "provincia_id"=> "210500",
                "nombre"=> "PILCUYO"
            ],
            [
                "id"=> "210504",
                "provincia_id"=> "210500",
                "nombre"=> "SANTA ROSA"
            ],
            [
                "id"=> "210505",
                "provincia_id"=> "210500",
                "nombre"=> "CONDURIRI"
            ],
            [
                "id"=> "210601",
                "provincia_id"=> "210600",
                "nombre"=> "HUANCANE"
            ],
            [
                "id"=> "210602",
                "provincia_id"=> "210600",
                "nombre"=> "COJATA"
            ],
            [
                "id"=> "210603",
                "provincia_id"=> "210600",
                "nombre"=> "HUATASANI"
            ],
            [
                "id"=> "210604",
                "provincia_id"=> "210600",
                "nombre"=> "INCHUPALLA"
            ],
            [
                "id"=> "210605",
                "provincia_id"=> "210600",
                "nombre"=> "PUSI"
            ],
            [
                "id"=> "210606",
                "provincia_id"=> "210600",
                "nombre"=> "ROSASPATA"
            ],
            [
                "id"=> "210607",
                "provincia_id"=> "210600",
                "nombre"=> "TARACO"
            ],
            [
                "id"=> "210608",
                "provincia_id"=> "210600",
                "nombre"=> "VILQUE CHICO"
            ],
            [
                "id"=> "210701",
                "provincia_id"=> "210700",
                "nombre"=> "LAMPA"
            ],
            [
                "id"=> "210702",
                "provincia_id"=> "210700",
                "nombre"=> "CABANILLA"
            ],
            [
                "id"=> "210703",
                "provincia_id"=> "210700",
                "nombre"=> "CALAPUJA"
            ],
            [
                "id"=> "210704",
                "provincia_id"=> "210700",
                "nombre"=> "NICASIO"
            ],
            [
                "id"=> "210705",
                "provincia_id"=> "210700",
                "nombre"=> "OCUVIRI"
            ],
            [
                "id"=> "210706",
                "provincia_id"=> "210700",
                "nombre"=> "PALCA"
            ],
            [
                "id"=> "210707",
                "provincia_id"=> "210700",
                "nombre"=> "PARATIA"
            ],
            [
                "id"=> "210708",
                "provincia_id"=> "210700",
                "nombre"=> "PUCARA"
            ],
            [
                "id"=> "210709",
                "provincia_id"=> "210700",
                "nombre"=> "SANTA LUCIA"
            ],
            [
                "id"=> "210710",
                "provincia_id"=> "210700",
                "nombre"=> "VILAVILA"
            ],
            [
                "id"=> "210801",
                "provincia_id"=> "210800",
                "nombre"=> "AYAVIRI"
            ],
            [
                "id"=> "210802",
                "provincia_id"=> "210800",
                "nombre"=> "ANTAUTA"
            ],
            [
                "id"=> "210803",
                "provincia_id"=> "210800",
                "nombre"=> "CUPI"
            ],
            [
                "id"=> "210804",
                "provincia_id"=> "210800",
                "nombre"=> "LLALLI"
            ],
            [
                "id"=> "210805",
                "provincia_id"=> "210800",
                "nombre"=> "MACARI"
            ],
            [
                "id"=> "210806",
                "provincia_id"=> "210800",
                "nombre"=> "NUÑOA"
            ],
            [
                "id"=> "210807",
                "provincia_id"=> "210800",
                "nombre"=> "ORURILLO"
            ],
            [
                "id"=> "210808",
                "provincia_id"=> "210800",
                "nombre"=> "SANTA ROSA"
            ],
            [
                "id"=> "210809",
                "provincia_id"=> "210800",
                "nombre"=> "UMACHIRI"
            ],
            [
                "id"=> "210901",
                "provincia_id"=> "210900",
                "nombre"=> "MOHO"
            ],
            [
                "id"=> "210902",
                "provincia_id"=> "210900",
                "nombre"=> "CONIMA"
            ],
            [
                "id"=> "210903",
                "provincia_id"=> "210900",
                "nombre"=> "HUAYRAPATA"
            ],
            [
                "id"=> "210904",
                "provincia_id"=> "210900",
                "nombre"=> "TILALI"
            ],
            [
                "id"=> "211001",
                "provincia_id"=> "211000",
                "nombre"=> "PUTINA"
            ],
            [
                "id"=> "211002",
                "provincia_id"=> "211000",
                "nombre"=> "ANANEA"
            ],
            [
                "id"=> "211003",
                "provincia_id"=> "211000",
                "nombre"=> "PEDRO VILCA APAZA"
            ],
            [
                "id"=> "211004",
                "provincia_id"=> "211000",
                "nombre"=> "QUILCAPUNCU"
            ],
            [
                "id"=> "211005",
                "provincia_id"=> "211000",
                "nombre"=> "SINA"
            ],
            [
                "id"=> "211101",
                "provincia_id"=> "211100",
                "nombre"=> "JULIACA"
            ],
            [
                "id"=> "211102",
                "provincia_id"=> "211100",
                "nombre"=> "CABANA"
            ],
            [
                "id"=> "211103",
                "provincia_id"=> "211100",
                "nombre"=> "CABANILLAS"
            ],
            [
                "id"=> "211104",
                "provincia_id"=> "211100",
                "nombre"=> "CARACOTO"
            ],
            [
                "id"=> "211201",
                "provincia_id"=> "211200",
                "nombre"=> "SANDIA"
            ],
            [
                "id"=> "211202",
                "provincia_id"=> "211200",
                "nombre"=> "CUYOCUYO"
            ],
            [
                "id"=> "211203",
                "provincia_id"=> "211200",
                "nombre"=> "LIMBANI"
            ],
            [
                "id"=> "211204",
                "provincia_id"=> "211200",
                "nombre"=> "PATAMBUCO"
            ],
            [
                "id"=> "211205",
                "provincia_id"=> "211200",
                "nombre"=> "PHARA"
            ],
            [
                "id"=> "211206",
                "provincia_id"=> "211200",
                "nombre"=> "QUIACA"
            ],
            [
                "id"=> "211207",
                "provincia_id"=> "211200",
                "nombre"=> "SAN JUAN DEL ORO"
            ],
            [
                "id"=> "211208",
                "provincia_id"=> "211200",
                "nombre"=> "YANAHUAYA"
            ],
            [
                "id"=> "211209",
                "provincia_id"=> "211200",
                "nombre"=> "ALTO INAMBARI"
            ],
            [
                "id"=> "211210",
                "provincia_id"=> "211200",
                "nombre"=> "SAN PEDRO DE PUTINA PUNCO"
            ],
            [
                "id"=> "211301",
                "provincia_id"=> "211300",
                "nombre"=> "YUNGUYO"
            ],
            [
                "id"=> "211302",
                "provincia_id"=> "211300",
                "nombre"=> "ANAPIA"
            ],
            [
                "id"=> "211303",
                "provincia_id"=> "211300",
                "nombre"=> "COPANI"
            ],
            [
                "id"=> "211304",
                "provincia_id"=> "211300",
                "nombre"=> "CUTURAPI"
            ],
            [
                "id"=> "211305",
                "provincia_id"=> "211300",
                "nombre"=> "OLLARAYA"
            ],
            [
                "id"=> "211306",
                "provincia_id"=> "211300",
                "nombre"=> "TINICACHI"
            ],
            [
                "id"=> "211307",
                "provincia_id"=> "211300",
                "nombre"=> "UNICACHI"
            ],
            [
                "id"=> "220101",
                "provincia_id"=> "220100",
                "nombre"=> "MOYOBAMBA"
            ],
            [
                "id"=> "220102",
                "provincia_id"=> "220100",
                "nombre"=> "CALZADA"
            ],
            [
                "id"=> "220103",
                "provincia_id"=> "220100",
                "nombre"=> "HABANA"
            ],
            [
                "id"=> "220104",
                "provincia_id"=> "220100",
                "nombre"=> "JEPELACIO"
            ],
            [
                "id"=> "220105",
                "provincia_id"=> "220100",
                "nombre"=> "SORITOR"
            ],
            [
                "id"=> "220106",
                "provincia_id"=> "220100",
                "nombre"=> "YANTALO"
            ],
            [
                "id"=> "220201",
                "provincia_id"=> "220200",
                "nombre"=> "BELLAVISTA"
            ],
            [
                "id"=> "220202",
                "provincia_id"=> "220200",
                "nombre"=> "ALTO BIAVO"
            ],
            [
                "id"=> "220203",
                "provincia_id"=> "220200",
                "nombre"=> "BAJO BIAVO"
            ],
            [
                "id"=> "220204",
                "provincia_id"=> "220200",
                "nombre"=> "HUALLAGA"
            ],
            [
                "id"=> "220205",
                "provincia_id"=> "220200",
                "nombre"=> "SAN PABLO"
            ],
            [
                "id"=> "220206",
                "provincia_id"=> "220200",
                "nombre"=> "SAN RAFAEL"
            ],
            [
                "id"=> "220301",
                "provincia_id"=> "220300",
                "nombre"=> "SAN JOSE DE SISA"
            ],
            [
                "id"=> "220302",
                "provincia_id"=> "220300",
                "nombre"=> "AGUA BLANCA"
            ],
            [
                "id"=> "220303",
                "provincia_id"=> "220300",
                "nombre"=> "SAN MARTIN"
            ],
            [
                "id"=> "220304",
                "provincia_id"=> "220300",
                "nombre"=> "SANTA ROSA"
            ],
            [
                "id"=> "220305",
                "provincia_id"=> "220300",
                "nombre"=> "SHATOJA"
            ],
            [
                "id"=> "220401",
                "provincia_id"=> "220400",
                "nombre"=> "SAPOSOA"
            ],
            [
                "id"=> "220402",
                "provincia_id"=> "220400",
                "nombre"=> "ALTO SAPOSOA"
            ],
            [
                "id"=> "220403",
                "provincia_id"=> "220400",
                "nombre"=> "EL ESLABON"
            ],
            [
                "id"=> "220404",
                "provincia_id"=> "220400",
                "nombre"=> "PISCOYACU"
            ],
            [
                "id"=> "220405",
                "provincia_id"=> "220400",
                "nombre"=> "SACANCHE"
            ],
            [
                "id"=> "220406",
                "provincia_id"=> "220400",
                "nombre"=> "TINGO DE SAPOSOA"
            ],
            [
                "id"=> "220501",
                "provincia_id"=> "220500",
                "nombre"=> "LAMAS"
            ],
            [
                "id"=> "220502",
                "provincia_id"=> "220500",
                "nombre"=> "ALONSO DE ALVARADO"
            ],
            [
                "id"=> "220503",
                "provincia_id"=> "220500",
                "nombre"=> "BARRANQUITA"
            ],
            [
                "id"=> "220504",
                "provincia_id"=> "220500",
                "nombre"=> "CAYNARACHI"
            ],
            [
                "id"=> "220505",
                "provincia_id"=> "220500",
                "nombre"=> "CUÑUMBUQUI"
            ],
            [
                "id"=> "220506",
                "provincia_id"=> "220500",
                "nombre"=> "PINTO RECODO"
            ],
            [
                "id"=> "220507",
                "provincia_id"=> "220500",
                "nombre"=> "RUMISAPA"
            ],
            [
                "id"=> "220508",
                "provincia_id"=> "220500",
                "nombre"=> "SAN ROQUE DE CUMBAZA"
            ],
            [
                "id"=> "220509",
                "provincia_id"=> "220500",
                "nombre"=> "SHANAO"
            ],
            [
                "id"=> "220510",
                "provincia_id"=> "220500",
                "nombre"=> "TABALOSOS"
            ],
            [
                "id"=> "220511",
                "provincia_id"=> "220500",
                "nombre"=> "ZAPATERO"
            ],
            [
                "id"=> "220601",
                "provincia_id"=> "220600",
                "nombre"=> "JUANJUI"
            ],
            [
                "id"=> "220602",
                "provincia_id"=> "220600",
                "nombre"=> "CAMPANILLA"
            ],
            [
                "id"=> "220603",
                "provincia_id"=> "220600",
                "nombre"=> "HUICUNGO"
            ],
            [
                "id"=> "220604",
                "provincia_id"=> "220600",
                "nombre"=> "PACHIZA"
            ],
            [
                "id"=> "220605",
                "provincia_id"=> "220600",
                "nombre"=> "PAJARILLO"
            ],
            [
                "id"=> "220701",
                "provincia_id"=> "220700",
                "nombre"=> "PICOTA"
            ],
            [
                "id"=> "220702",
                "provincia_id"=> "220700",
                "nombre"=> "BUENOS AIRES"
            ],
            [
                "id"=> "220703",
                "provincia_id"=> "220700",
                "nombre"=> "CASPISAPA"
            ],
            [
                "id"=> "220704",
                "provincia_id"=> "220700",
                "nombre"=> "PILLUANA"
            ],
            [
                "id"=> "220705",
                "provincia_id"=> "220700",
                "nombre"=> "PUCACACA"
            ],
            [
                "id"=> "220706",
                "provincia_id"=> "220700",
                "nombre"=> "SAN CRISTOBAL"
            ],
            [
                "id"=> "220707",
                "provincia_id"=> "220700",
                "nombre"=> "SAN HILARION"
            ],
            [
                "id"=> "220708",
                "provincia_id"=> "220700",
                "nombre"=> "SHAMBOYACU"
            ],
            [
                "id"=> "220709",
                "provincia_id"=> "220700",
                "nombre"=> "TINGO DE PONASA"
            ],
            [
                "id"=> "220710",
                "provincia_id"=> "220700",
                "nombre"=> "TRES UNIDOS"
            ],
            [
                "id"=> "220801",
                "provincia_id"=> "220800",
                "nombre"=> "RIOJA"
            ],
            [
                "id"=> "220802",
                "provincia_id"=> "220800",
                "nombre"=> "AWAJUN"
            ],
            [
                "id"=> "220803",
                "provincia_id"=> "220800",
                "nombre"=> "ELIAS SOPLIN VARGAS"
            ],
            [
                "id"=> "220804",
                "provincia_id"=> "220800",
                "nombre"=> "NUEVA CAJAMARCA"
            ],
            [
                "id"=> "220805",
                "provincia_id"=> "220800",
                "nombre"=> "PARDO MIGUEL"
            ],
            [
                "id"=> "220806",
                "provincia_id"=> "220800",
                "nombre"=> "POSIC"
            ],
            [
                "id"=> "220807",
                "provincia_id"=> "220800",
                "nombre"=> "SAN FERNANDO"
            ],
            [
                "id"=> "220808",
                "provincia_id"=> "220800",
                "nombre"=> "YORONGOS"
            ],
            [
                "id"=> "220809",
                "provincia_id"=> "220800",
                "nombre"=> "YURACYACU"
            ],
            [
                "id"=> "220901",
                "provincia_id"=> "220900",
                "nombre"=> "TARAPOTO"
            ],
            [
                "id"=> "220902",
                "provincia_id"=> "220900",
                "nombre"=> "ALBERTO LEVEAU"
            ],
            [
                "id"=> "220903",
                "provincia_id"=> "220900",
                "nombre"=> "CACATACHI"
            ],
            [
                "id"=> "220904",
                "provincia_id"=> "220900",
                "nombre"=> "CHAZUTA"
            ],
            [
                "id"=> "220905",
                "provincia_id"=> "220900",
                "nombre"=> "CHIPURANA"
            ],
            [
                "id"=> "220906",
                "provincia_id"=> "220900",
                "nombre"=> "EL PORVENIR"
            ],
            [
                "id"=> "220907",
                "provincia_id"=> "220900",
                "nombre"=> "HUIMBAYOC"
            ],
            [
                "id"=> "220908",
                "provincia_id"=> "220900",
                "nombre"=> "JUAN GUERRA"
            ],
            [
                "id"=> "220909",
                "provincia_id"=> "220900",
                "nombre"=> "LA BANDA DE SHILCAYO"
            ],
            [
                "id"=> "220910",
                "provincia_id"=> "220900",
                "nombre"=> "MORALES"
            ],
            [
                "id"=> "220911",
                "provincia_id"=> "220900",
                "nombre"=> "PAPAPLAYA"
            ],
            [
                "id"=> "220912",
                "provincia_id"=> "220900",
                "nombre"=> "SAN ANTONIO"
            ],
            [
                "id"=> "220913",
                "provincia_id"=> "220900",
                "nombre"=> "SAUCE"
            ],
            [
                "id"=> "220914",
                "provincia_id"=> "220900",
                "nombre"=> "SHAPAJA"
            ],
            [
                "id"=> "221001",
                "provincia_id"=> "221000",
                "nombre"=> "TOCACHE"
            ],
            [
                "id"=> "221002",
                "provincia_id"=> "221000",
                "nombre"=> "NUEVO PROGRESO"
            ],
            [
                "id"=> "221003",
                "provincia_id"=> "221000",
                "nombre"=> "POLVORA"
            ],
            [
                "id"=> "221004",
                "provincia_id"=> "221000",
                "nombre"=> "SHUNTE"
            ],
            [
                "id"=> "221005",
                "provincia_id"=> "221000",
                "nombre"=> "UCHIZA"
            ],
            [
                "id"=> "221006",
                "provincia_id"=> "221000",
                "nombre"=> "SANTA LUCIA"
            ],
            [
                "id"=> "230101",
                "provincia_id"=> "230100",
                "nombre"=> "TACNA"
            ],
            [
                "id"=> "230102",
                "provincia_id"=> "230100",
                "nombre"=> "ALTO DE LA ALIANZA"
            ],
            [
                "id"=> "230103",
                "provincia_id"=> "230100",
                "nombre"=> "CALANA"
            ],
            [
                "id"=> "230104",
                "provincia_id"=> "230100",
                "nombre"=> "CIUDAD NUEVA"
            ],
            [
                "id"=> "230105",
                "provincia_id"=> "230100",
                "nombre"=> "INCLAN"
            ],
            [
                "id"=> "230106",
                "provincia_id"=> "230100",
                "nombre"=> "PACHIA"
            ],
            [
                "id"=> "230107",
                "provincia_id"=> "230100",
                "nombre"=> "PALCA"
            ],
            [
                "id"=> "230108",
                "provincia_id"=> "230100",
                "nombre"=> "POCOLLAY"
            ],
            [
                "id"=> "230109",
                "provincia_id"=> "230100",
                "nombre"=> "SAMA"
            ],
            [
                "id"=> "230110",
                "provincia_id"=> "230100",
                "nombre"=> "CORONEL GREGORIO ALBARRACIN LANCHIPA"
            ],
            [
                "id"=> "230111",
                "provincia_id"=> "230100",
                "nombre"=> "LA YARADA LOS PALOS"
            ],
            [
                "id"=> "230201",
                "provincia_id"=> "230200",
                "nombre"=> "CANDARAVE"
            ],
            [
                "id"=> "230202",
                "provincia_id"=> "230200",
                "nombre"=> "CAIRANI"
            ],
            [
                "id"=> "230203",
                "provincia_id"=> "230200",
                "nombre"=> "CAMILACA"
            ],
            [
                "id"=> "230204",
                "provincia_id"=> "230200",
                "nombre"=> "CURIBAYA"
            ],
            [
                "id"=> "230205",
                "provincia_id"=> "230200",
                "nombre"=> "HUANUARA"
            ],
            [
                "id"=> "230206",
                "provincia_id"=> "230200",
                "nombre"=> "QUILAHUANI"
            ],
            [
                "id"=> "230301",
                "provincia_id"=> "230300",
                "nombre"=> "LOCUMBA"
            ],
            [
                "id"=> "230302",
                "provincia_id"=> "230300",
                "nombre"=> "ILABAYA"
            ],
            [
                "id"=> "230303",
                "provincia_id"=> "230300",
                "nombre"=> "ITE"
            ],
            [
                "id"=> "230401",
                "provincia_id"=> "230400",
                "nombre"=> "TARATA"
            ],
            [
                "id"=> "230402",
                "provincia_id"=> "230400",
                "nombre"=> "HEROES ALBARRACIN"
            ],
            [
                "id"=> "230403",
                "provincia_id"=> "230400",
                "nombre"=> "ESTIQUE"
            ],
            [
                "id"=> "230404",
                "provincia_id"=> "230400",
                "nombre"=> "ESTIQUE-PAMPA"
            ],
            [
                "id"=> "230405",
                "provincia_id"=> "230400",
                "nombre"=> "SITAJARA"
            ],
            [
                "id"=> "230406",
                "provincia_id"=> "230400",
                "nombre"=> "SUSAPAYA"
            ],
            [
                "id"=> "230407",
                "provincia_id"=> "230400",
                "nombre"=> "TARUCACHI"
            ],
            [
                "id"=> "230408",
                "provincia_id"=> "230400",
                "nombre"=> "TICACO"
            ],
            [
                "id"=> "240101",
                "provincia_id"=> "240100",
                "nombre"=> "TUMBES"
            ],
            [
                "id"=> "240102",
                "provincia_id"=> "240100",
                "nombre"=> "CORRALES"
            ],
            [
                "id"=> "240103",
                "provincia_id"=> "240100",
                "nombre"=> "LA CRUZ"
            ],
            [
                "id"=> "240104",
                "provincia_id"=> "240100",
                "nombre"=> "PAMPAS DE HOSPITAL"
            ],
            [
                "id"=> "240105",
                "provincia_id"=> "240100",
                "nombre"=> "SAN JACINTO"
            ],
            [
                "id"=> "240106",
                "provincia_id"=> "240100",
                "nombre"=> "SAN JUAN DE LA VIRGEN"
            ],
            [
                "id"=> "240201",
                "provincia_id"=> "240200",
                "nombre"=> "ZORRITOS"
            ],
            [
                "id"=> "240202",
                "provincia_id"=> "240200",
                "nombre"=> "CASITAS"
            ],
            [
                "id"=> "240203",
                "provincia_id"=> "240200",
                "nombre"=> "CANOAS DE PUNTA SAL"
            ],
            [
                "id"=> "240301",
                "provincia_id"=> "240300",
                "nombre"=> "ZARUMILLA"
            ],
            [
                "id"=> "240302",
                "provincia_id"=> "240300",
                "nombre"=> "AGUAS VERDES"
            ],
            [
                "id"=> "240303",
                "provincia_id"=> "240300",
                "nombre"=> "MATAPALO"
            ],
            [
                "id"=> "240304",
                "provincia_id"=> "240300",
                "nombre"=> "PAPAYAL"
            ],
            [
                "id"=> "250101",
                "provincia_id"=> "250100",
                "nombre"=> "CALLERIA"
            ],
            [
                "id"=> "250102",
                "provincia_id"=> "250100",
                "nombre"=> "CAMPOVERDE"
            ],
            [
                "id"=> "250103",
                "provincia_id"=> "250100",
                "nombre"=> "IPARIA"
            ],
            [
                "id"=> "250104",
                "provincia_id"=> "250100",
                "nombre"=> "MASISEA"
            ],
            [
                "id"=> "250105",
                "provincia_id"=> "250100",
                "nombre"=> "YARINACOCHA"
            ],
            [
                "id"=> "250106",
                "provincia_id"=> "250100",
                "nombre"=> "NUEVA REQUENA"
            ],
            [
                "id"=> "250107",
                "provincia_id"=> "250100",
                "nombre"=> "MANANTAY"
            ],
            [
                "id"=> "250201",
                "provincia_id"=> "250200",
                "nombre"=> "RAYMONDI"
            ],
            [
                "id"=> "250202",
                "provincia_id"=> "250200",
                "nombre"=> "SEPAHUA"
            ],
            [
                "id"=> "250203",
                "provincia_id"=> "250200",
                "nombre"=> "TAHUANIA"
            ],
            [
                "id"=> "250204",
                "provincia_id"=> "250200",
                "nombre"=> "YURUA"
            ],
            [
                "id"=> "250301",
                "provincia_id"=> "250300",
                "nombre"=> "PADRE ABAD"
            ],
            [
                "id"=> "250302",
                "provincia_id"=> "250300",
                "nombre"=> "IRAZOLA"
            ],
            [
                "id"=> "250303",
                "provincia_id"=> "250300",
                "nombre"=> "CURIMANA"
            ],
            [
                "id"=> "250401",
                "provincia_id"=> "250400",
                "nombre"=> "PURUS"
            ]
        ];

        Distrito::insert($distritos);
    }
}
