<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bairro;

class BairrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
       $bairros = array("Aeroporto",
       "Alto Bonito do Triângulo",
       "Alto da Boa Vista",
       "Asa Norte",
       "Bacuri",
       "Beira Rio",
       "Boca da Mata",
       "Bom Jesus",
       "Bom Sucesso",
       "Brasil Novo",
       "Caema",
       "Camaçari",
       "Centro",
       "Centro Novo",
       "Cinco Irmãos",
       "Coco Grande",
       "Conjunto Habitar Brasil",
       "Conjunto Nova Vitória",
       "Entroncamento",
       "Imigrantes",
       "Jardim América",
       "Jardim Andrea",
       "Jardim Camboriú",
       "Jardim Democrata",
       "Jardim Europa",
       "Jardim Lagoa",
       "Jardim Lopes",
       "Jardim Morada do Sol",
       "Jardim Oriental",
       "Jardim Pérola",
       "Jardim Planalto",
       "Jardim São Francisco",
       "Jardim São Luís",
       "Jardim Tropical",
       "Jardim Vitória",
       "João Paulo II",
       "Juçara",
       "Lagoa Verde",
       "Leandra",
       "Maranhão Novo",
       "Mata Verde",
       "Mercadinho",
       "Morada do Bosque",
       "Mutirão",
       "Nova Imperatriz",
       "Novo Horizonte",
       "Ouro Verde",
       "Parque Alvorada",
       "Parque Alvorada II",
       "Parque Amazonas",
       "Parque Anhangüera",
       "Parque Buriti",
       "Parque da Lagoa",
       "Parque das Estrelas",
       "Parque das Mangueiras",
       "Parque das Mansões",
       "Parque das Palmeiras",
       "Parque do Bosque",
       "Parque Independência",
       "Parque Planalto",
       "Parque Sanharol",
       "Parque Santa Lúcia",
       "Parque São José",
       "Parque Sumaré",
       "Parque Tocantins",
       "Portal da Amazônia",
       "Residencial Califórnia",
       "Residencial Cinco Estrelas",
       "Residencial Kubitschek",
       "Santa Inês",
       "Santa Luzia",
       "Santa Rita",
       "Santo Amaro",
       "São José do Egito",
       "São Salvador",
       "Sítio Engenho Velho",
       "Sol Nascente",
       "Super Quadra 602",
       "Três Poderes",
       "União",
       "Vale do Sol",
       "Vila Airton Senna",
       "Vila Bandeirantes",
       "Vila Brasil",
       "Vila Cafeteira",
       "Vila Carajás",
       "Vila Chico do Rádio",
       "Vila Esmeralda",
       "Vila Fiquene",
       "Vila Independente",
       "Vila Ipiranga",
       "Vila João Castelo",
       "Vila Lobão",
       "Vila Macedo",
       "Vila Maderminas",
       "Vila Maria",
       "Vila Mariana",
       "Vila Nova",
       "Vila Parati",
       "Vila Redenção",
       "Vila Redenção I",
       "Vila Santa Luzia",
       "Vila São João",
       "Vila Vitória",
       "Vila Zenira",
       "Vilinha" );
       return $bairros;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $bairros = array(
                "Aeroporto",
                "Alto Bonito do Triângulo",
                "Alto da Boa Vista",
                "Asa Norte",
                "Bacuri",
                "Beira Rio",
                "Boca da Mata",
                "Bom Jesus",
                "Bom Sucesso",
                "Brasil Novo",
                "Caema",
                "Camaçari",
                "Centro",
                "Centro Novo",
                "Cinco Irmãos",
                "Coco Grande",
                "Conjunto Habitar Brasil",
                "Conjunto Nova Vitória",
                "Entroncamento",
                "Imigrantes",
                "Jardim América",
                "Jardim Andrea",
                "Jardim Camboriú",
                "Jardim Democrata",
                "Jardim Europa",
                "Jardim Lagoa",
                "Jardim Lopes",
                "Jardim Morada do Sol",
                "Jardim Oriental",
                "Jardim Pérola",
                "Jardim Planalto",
                "Jardim São Francisco",
                "Jardim São Luís",
                "Jardim Tropical",
                "Jardim Vitória",
                "João Paulo II",
                "Juçara",
                "Lagoa Verde",
                "Leandra",
                "Maranhão Novo",
                "Mata Verde",
                "Mercadinho",
                "Morada do Bosque",
                "Mutirão",
                "Nova Imperatriz",
                "Novo Horizonte",
                "Ouro Verde",
                "Parque Alvorada",
                "Parque Alvorada II",
                "Parque Amazonas",
                "Parque Anhangüera",
                "Parque Buriti",
                "Parque da Lagoa",
                "Parque das Estrelas",
                "Parque das Mangueiras",
                "Parque das Mansões",
                "Parque das Palmeiras",
                "Parque do Bosque",
                "Parque Independência",
                "Parque Planalto",
                "Parque Sanharol",
                "Parque Santa Lúcia",
                "Parque São José",
                "Parque Sumaré",
                "Parque Tocantins",
                "Portal da Amazônia",
                "Residencial Califórnia",
                "Residencial Cinco Estrelas",
                "Residencial Kubitschek",
                "Santa Inês",
                "Santa Luzia",
                "Santa Rita",
                "Santo Amaro",
                "São José do Egito",
                "São Salvador",
                "Sítio Engenho Velho",
                "Sol Nascente",
                "Super Quadra 602",
                "Três Poderes",
                "União",
                "Vale do Sol",
                "Vila Airton Senna",
                "Vila Bandeirantes",
                "Vila Brasil",
                "Vila Cafeteira",
                "Vila Carajás",
                "Vila Chico do Rádio",
                "Vila Esmeralda",
                "Vila Fiquene",
                "Vila Independente",
                "Vila Ipiranga",
                "Vila João Castelo",
                "Vila Lobão",
                "Vila Macedo",
                "Vila Maderminas",
                "Vila Maria",
                "Vila Mariana",
                "Vila Nova",
                "Vila Parati",
                "Vila Redenção",
                "Vila Redenção I",
                "Vila Santa Luzia",
                "Vila São João",
                "Vila Vitória",
                "Vila Zenira",
                "Vilinha"
            );
            foreach ($bairros as $key => $value) {
                $data = new Bairro();
                $data->nome = $value;
                $data->save();
            }
            return ['msg'=>'gravado com sucesso'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Produtos $id)
    {
        return $id;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
