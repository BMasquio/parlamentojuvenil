<?php

use App\Data\Models\City;
use App\Data\Models\Country;
use App\Data\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CitiesSeeder extends Seeder
{
    private $country;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->seedCountries();
        $this->seedStates();
        $this->seedCities();

        Model::reguard();
    }

    private function seedCountries()
    {
        // Country::truncate();

        try {
            $this->country = Country::create([
                'code' => 'BR',
                'name' => 'Brasil',
            ]);
        } catch (Exception $e) {
            // do nothing
        }
    }

    private function seedStates()
    {
        // State::truncate();

        $states = [
            [
                'internal' => 1,
                'name' => 'Acre',
                'code' => 'AC',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 2,
                'name' => 'Alagoas',
                'code' => 'AL',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 3,
                'name' => 'Amazonas',
                'code' => 'AM',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 4,
                'name' => 'Amapá',
                'code' => 'AP',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 5,
                'name' => 'Bahia',
                'code' => 'BA',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 6,
                'name' => 'Ceará',
                'code' => 'CE',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 7,
                'name' => 'Distrito Federal',
                'code' => 'DF',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 8,
                'name' => 'Espírito Santo',
                'code' => 'ES',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 9,
                'name' => 'Goiás',
                'code' => 'GO',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 10,
                'name' => 'Maranhão',
                'code' => 'MA',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 11,
                'name' => 'Minas Gerais',
                'code' => 'MG',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 12,
                'name' => 'Mato Grosso do Sul',
                'code' => 'MS',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 13,
                'name' => 'Mato Grosso',
                'code' => 'MT',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 14,
                'name' => 'Pará',
                'code' => 'PA',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 15,
                'name' => 'Paraíba',
                'code' => 'PB',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 16,
                'name' => 'Pernambuco',
                'code' => 'PE',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 17,
                'name' => 'Piauí',
                'code' => 'PI',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 18,
                'name' => 'Paraná',
                'code' => 'PR',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 19,
                'name' => 'Rio de Janeiro',
                'code' => 'RJ',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 20,
                'name' => 'Rio Grande do Norte',
                'code' => 'RN',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 21,
                'name' => 'Rondônia',
                'code' => 'RO',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 22,
                'name' => 'Roraima',
                'code' => 'RR',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 23,
                'name' => 'Rio Grande do Sul',
                'code' => 'RS',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 24,
                'name' => 'Santa Catarina',
                'code' => 'SC',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 25,
                'name' => 'Sergipe',
                'code' => 'SE',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 26,
                'name' => 'São Paulo',
                'code' => 'SP',
                'country_id' => $this->country->id,
            ],
            [
                'internal' => 27,
                'name' => 'Tocantins',
                'code' => 'TO',
                'country_id' => $this->country->id,
            ],
        ];

        foreach ($states as $state) {
            try {
                State::create($state);
            } catch (Exception $e) {
                // do nothing
            }
        }
    }

    private function seedCities()
    {
        // City::truncate();

        $cities = [
            [
                'name' => 'Água Doce do Norte',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Águia Branca',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Alegre',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Alfredo Chaves',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Alto Rio Novo',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Anchieta',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Apiacá',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Aracruz',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Atilio Vivacqua',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Baixo Guandu',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Barra de São Francisco',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Boa Esperança',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Bom Jesus do Norte',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Brejetuba',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Cachoeiro de Itapemirim',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Cariacica',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Castelo',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Colatina',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Conceição da Barra',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Conceição do Castelo',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Divino de São Lourenço',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Domingos Martins',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Dores do Rio Preto',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Ecoporanga',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Fundão',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Governador Lindenberg',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Guaçuí',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Guarapari',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Ibatiba',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Ibiraçu',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Ibitirama',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Iconha',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Irupi',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Itaguaçu',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Itapemirim',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Itarana',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Iúna',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Jaguaré',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Jerônimo Monteiro',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'João Neiva',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Laranja da Terra',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Linhares',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Mantenópolis',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Marataízes',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Marechal Floriano',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Marilândia',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Mimoso do Sul',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Montanha',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Mucurici',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Muniz Freire',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Muqui',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Nova Venécia',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Pancas',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Pedro Canário',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Pinheiros',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Piúma',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Ponto Belo',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Presidente Kennedy',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Rio Bananal',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Rio Novo do Sul',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Santa Leopoldina',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Santa Maria de Jetibá',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Santa Teresa',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'São Domingos do Norte',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'São Gabriel da Palha',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'São José do Calçado',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'São Mateus',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'São Roque do Canaã',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Serra',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Sooretama',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Vargem Alta',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Venda Nova do Imigrante',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Viana',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Vila Pavão',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Vila Valério',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Vila Velha',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Vitória',
                'state_id' => State::where('internal', 8)->first()->id,
            ],
            [
                'name' => 'Acrelândia',
                'state_id' => State::where('internal', 1)->first()->id,
            ],
            [
                'name' => 'Assis Brasil',
                'state_id' => State::where('internal', 1)->first()->id,
            ],
            [
                'name' => 'Brasiléia',
                'state_id' => State::where('internal', 1)->first()->id,
            ],
            [
                'name' => 'Bujari',
                'state_id' => State::where('internal', 1)->first()->id,
            ],
            [
                'name' => 'Capixaba',
                'state_id' => State::where('internal', 1)->first()->id,
            ],
            [
                'name' => 'Cruzeiro do Sul',
                'state_id' => State::where('internal', 1)->first()->id,
            ],
            [
                'name' => 'Epitaciolândia',
                'state_id' => State::where('internal', 1)->first()->id,
            ],
            [
                'name' => 'Feijó',
                'state_id' => State::where('internal', 1)->first()->id,
            ],
            [
                'name' => 'Jordão',
                'state_id' => State::where('internal', 1)->first()->id,
            ],
            [
                'name' => 'Mâncio Lima',
                'state_id' => State::where('internal', 1)->first()->id,
            ],
            [
                'name' => 'Manoel Urbano',
                'state_id' => State::where('internal', 1)->first()->id,
            ],
            [
                'name' => 'Marechal Thaumaturgo',
                'state_id' => State::where('internal', 1)->first()->id,
            ],
            [
                'name' => 'Plácido de Castro',
                'state_id' => State::where('internal', 1)->first()->id,
            ],
            [
                'name' => 'Porto Acre',
                'state_id' => State::where('internal', 1)->first()->id,
            ],
            [
                'name' => 'Porto Walter',
                'state_id' => State::where('internal', 1)->first()->id,
            ],
            [
                'name' => 'Rio Branco',
                'state_id' => State::where('internal', 1)->first()->id,
            ],
            [
                'name' => 'Rodrigues Alves',
                'state_id' => State::where('internal', 1)->first()->id,
            ],
            [
                'name' => 'Santa Rosa do Purus',
                'state_id' => State::where('internal', 1)->first()->id,
            ],
            [
                'name' => 'Sena Madureira',
                'state_id' => State::where('internal', 1)->first()->id,
            ],
            [
                'name' => 'Senador Guiomard',
                'state_id' => State::where('internal', 1)->first()->id,
            ],
            [
                'name' => 'Tarauacá',
                'state_id' => State::where('internal', 1)->first()->id,
            ],
            [
                'name' => 'Xapuri',
                'state_id' => State::where('internal', 1)->first()->id,
            ],
            [
                'name' => 'Água Branca',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Anadia',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Arapiraca',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Atalaia',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Barra de Santo Antônio',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Barra de São Miguel',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Batalha',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Belém',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Belo Monte',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Boca da Mata',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Branquinha',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Cacimbinhas',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Cajueiro',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Campestre',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Campo Alegre',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Campo Grande',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Canapi',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Capela',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Carneiros',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Chã Preta',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Coité do Nóia',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Colônia Leopoldina',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Coqueiro Seco',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Coruripe',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Craíbas',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Delmiro Gouveia',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Dois Riachos',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Estrela de Alagoas',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Feira Grande',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Feliz Deserto',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Flexeiras',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Girau do Ponciano',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Ibateguara',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Igaci',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Igreja Nova',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Inhapi',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Jacaré dos Homens',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Jacuípe',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Japaratinga',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Jaramataia',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Jequiá da Praia',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Joaquim Gomes',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Jundiá',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Junqueiro',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Lagoa da Canoa',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Limoeiro de Anadia',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Maceió',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Major Isidoro',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Mar Vermelho',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Maragogi',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Maravilha',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Marechal Deodoro',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Maribondo',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Mata Grande',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Matriz de Camaragibe',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Messias',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Minador do Negrão',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Monteirópolis',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Murici',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Novo Lino',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Olho d`Água das Flores',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Olho d`Água do Casado',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Olho d`Água Grande',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Olivença',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Ouro Branco',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Palestina',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Palmeira dos Índios',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Pão de Açúcar',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Pariconha',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Paripueira',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Passo de Camaragibe',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Paulo Jacinto',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Penedo',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Piaçabuçu',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Pilar',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Pindoba',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Piranhas',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Poço das Trincheiras',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Porto Calvo',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Porto de Pedras',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Porto Real do Colégio',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Quebrangulo',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Rio Largo',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Roteiro',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Santa Luzia do Norte',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Santana do Ipanema',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Santana do Mundaú',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'São Brás',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'São José da Laje',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'São José da Tapera',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'São Luís do Quitunde',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'São Miguel dos Campos',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'São Miguel dos Milagres',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'São Sebastião',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Satuba',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Senador Rui Palmeira',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Tanque d`Arca',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Taquarana',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Teotônio Vilela',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Traipu',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'União dos Palmares',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Viçosa',
                'state_id' => State::where('internal', 2)->first()->id,
            ],
            [
                'name' => 'Amapá',
                'state_id' => State::where('internal', 4)->first()->id,
            ],
            [
                'name' => 'Calçoene',
                'state_id' => State::where('internal', 4)->first()->id,
            ],
            [
                'name' => 'Cutias',
                'state_id' => State::where('internal', 4)->first()->id,
            ],
            [
                'name' => 'Ferreira Gomes',
                'state_id' => State::where('internal', 4)->first()->id,
            ],
            [
                'name' => 'Itaubal',
                'state_id' => State::where('internal', 4)->first()->id,
            ],
            [
                'name' => 'Laranjal do Jari',
                'state_id' => State::where('internal', 4)->first()->id,
            ],
            [
                'name' => 'Macapá',
                'state_id' => State::where('internal', 4)->first()->id,
            ],
            [
                'name' => 'Mazagão',
                'state_id' => State::where('internal', 4)->first()->id,
            ],
            [
                'name' => 'Oiapoque',
                'state_id' => State::where('internal', 4)->first()->id,
            ],
            [
                'name' => 'Pedra Branca do Amaparí',
                'state_id' => State::where('internal', 4)->first()->id,
            ],
            [
                'name' => 'Porto Grande',
                'state_id' => State::where('internal', 4)->first()->id,
            ],
            [
                'name' => 'Pracuúba',
                'state_id' => State::where('internal', 4)->first()->id,
            ],
            [
                'name' => 'Santana',
                'state_id' => State::where('internal', 4)->first()->id,
            ],
            [
                'name' => 'Serra do Navio',
                'state_id' => State::where('internal', 4)->first()->id,
            ],
            [
                'name' => 'Tartarugalzinho',
                'state_id' => State::where('internal', 4)->first()->id,
            ],
            [
                'name' => 'Vitória do Jari',
                'state_id' => State::where('internal', 4)->first()->id,
            ],
            [
                'name' => 'Alvarães',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Amaturá',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Anamã',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Anori',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Apuí',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Atalaia do Norte',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Autazes',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Barcelos',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Barreirinha',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Benjamin Constant',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Beruri',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Boa Vista do Ramos',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Boca do Acre',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Borba',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Caapiranga',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Canutama',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Carauari',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Careiro',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Careiro da Várzea',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Coari',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Codajás',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Eirunepé',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Envira',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Fonte Boa',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Guajará',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Humaitá',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Ipixuna',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Iranduba',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Itacoatiara',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Itamarati',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Itapiranga',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Japurá',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Juruá',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Jutaí',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Lábrea',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Manacapuru',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Manaquiri',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Manaus',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Manicoré',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Maraã',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Maués',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Nhamundá',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Nova Olinda do Norte',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Novo Airão',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Novo Aripuanã',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Parintins',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Pauini',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Presidente Figueiredo',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Rio Preto da Eva',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Santa Isabel do Rio Negro',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Santo Antônio do Içá',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'São Gabriel da Cachoeira',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'São Paulo de Olivença',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'São Sebastião do Uatumã',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Silves',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Tabatinga',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Tapauá',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Tefé',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Tonantins',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Uarini',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Urucará',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Urucurituba',
                'state_id' => State::where('internal', 3)->first()->id,
            ],
            [
                'name' => 'Abaíra',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Abaré',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Acajutiba',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Adustina',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Água Fria',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Aiquara',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Alagoinhas',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Alcobaça',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Almadina',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Amargosa',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Amélia Rodrigues',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'América Dourada',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Anagé',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Andaraí',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Andorinha',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Angical',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Anguera',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Antas',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Antônio Cardoso',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Antônio Gonçalves',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Aporá',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Apuarema',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Araças',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Aracatu',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Araci',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Aramari',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Arataca',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Aratuípe',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Aurelino Leal',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Baianópolis',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Baixa Grande',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Banzaê',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Barra',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Barra da Estiva',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Barra do Choça',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Barra do Mendes',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Barra do Rocha',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Barreiras',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Barro Alto',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Barro Preto (antigo Gov. Lomanto Jr.)',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Barrocas',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Belmonte',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Belo Campo',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Biritinga',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Boa Nova',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Boa Vista do Tupim',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Bom Jesus da Lapa',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Bom Jesus da Serra',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Boninal',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Bonito',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Boquira',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Botuporã',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Brejões',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Brejolândia',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Brotas de Macaúbas',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Brumado',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Buerarema',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Buritirama',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Caatiba',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Cabaceiras do Paraguaçu',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Cachoeira',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Caculé',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Caém',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Caetanos',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Caetité',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Cafarnaum',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Cairu',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Caldeirão Grande',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Camacan',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Camaçari',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Camamu',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Campo Alegre de Lourdes',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Campo Formoso',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Canápolis',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Canarana',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Canavieiras',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Candeal',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Candeias',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Candiba',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Cândido Sales',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Cansanção',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Canudos',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Capela do Alto Alegre',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Capim Grosso',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Caraíbas',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Caravelas',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Cardeal da Silva',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Carinhanha',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Casa Nova',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Castro Alves',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Catolândia',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Catu',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Caturama',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Central',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Chorrochó',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Cícero Dantas',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Cipó',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Coaraci',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Cocos',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Conceição da Feira',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Conceição do Almeida',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Conceição do Coité',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Conceição do Jacuípe',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Conde',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Condeúba',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Contendas do Sincorá',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Coração de Maria',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Cordeiros',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Coribe',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Coronel João Sá',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Correntina',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Cotegipe',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Cravolândia',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Crisópolis',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Cristópolis',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Cruz das Almas',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Curaçá',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Dário Meira',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Dias d`Ávila',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Dom Basílio',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Dom Macedo Costa',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Elísio Medrado',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Encruzilhada',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Entre Rios',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Érico Cardoso',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Esplanada',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Euclides da Cunha',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Eunápolis',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Fátima',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Feira da Mata',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Feira de Santana',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Filadélfia',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Firmino Alves',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Floresta Azul',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Formosa do Rio Preto',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Gandu',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Gavião',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Gentio do Ouro',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Glória',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Gongogi',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Governador Mangabeira',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Guajeru',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Guanambi',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Guaratinga',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Heliópolis',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Iaçu',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ibiassucê',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ibicaraí',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ibicoara',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ibicuí',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ibipeba',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ibipitanga',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ibiquera',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ibirapitanga',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ibirapuã',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ibirataia',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ibitiara',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ibititá',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ibotirama',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ichu',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Igaporã',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Igrapiúna',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Iguaí',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ilhéus',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Inhambupe',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ipecaetá',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ipiaú',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ipirá',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ipupiara',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Irajuba',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Iramaia',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Iraquara',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Irará',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Irecê',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itabela',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itaberaba',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itabuna',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itacaré',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itaeté',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itagi',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itagibá',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itagimirim',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itaguaçu da Bahia',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itaju do Colônia',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itajuípe',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itamaraju',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itamari',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itambé',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itanagra',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itanhém',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itaparica',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itapé',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itapebi',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itapetinga',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itapicuru',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itapitanga',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itaquara',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itarantim',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itatim',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itiruçu',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itiúba',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Itororó',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ituaçu',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ituberá',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Iuiú',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Jaborandi',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Jacaraci',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Jacobina',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Jaguaquara',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Jaguarari',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Jaguaripe',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Jandaíra',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Jequié',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Jeremoabo',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Jiquiriçá',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Jitaúna',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'João Dourado',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Juazeiro',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Jucuruçu',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Jussara',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Jussari',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Jussiape',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Lafaiete Coutinho',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Lagoa Real',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Laje',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Lajedão',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Lajedinho',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Lajedo do Tabocal',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Lamarão',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Lapão',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Lauro de Freitas',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Lençóis',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Licínio de Almeida',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Livramento de Nossa Senhora',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Luís Eduardo Magalhães',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Macajuba',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Macarani',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Macaúbas',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Macururé',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Madre de Deus',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Maetinga',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Maiquinique',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Mairi',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Malhada',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Malhada de Pedras',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Manoel Vitorino',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Mansidão',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Maracás',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Maragogipe',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Maraú',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Marcionílio Souza',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Mascote',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Mata de São João',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Matina',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Medeiros Neto',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Miguel Calmon',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Milagres',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Mirangaba',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Mirante',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Monte Santo',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Morpará',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Morro do Chapéu',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Mortugaba',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Mucugê',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Mucuri',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Mulungu do Morro',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Mundo Novo',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Muniz Ferreira',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Muquém de São Francisco',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Muritiba',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Mutuípe',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Nazaré',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Nilo Peçanha',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Nordestina',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Nova Canaã',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Nova Fátima',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Nova Ibiá',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Nova Itarana',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Nova Redenção',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Nova Soure',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Nova Viçosa',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Novo Horizonte',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Novo Triunfo',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Olindina',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Oliveira dos Brejinhos',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ouriçangas',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ourolândia',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Palmas de Monte Alto',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Palmeiras',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Paramirim',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Paratinga',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Paripiranga',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Pau Brasil',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Paulo Afonso',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Pé de Serra',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Pedrão',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Pedro Alexandre',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Piatã',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Pilão Arcado',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Pindaí',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Pindobaçu',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Pintadas',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Piraí do Norte',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Piripá',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Piritiba',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Planaltino',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Planalto',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Poções',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Pojuca',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ponto Novo',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Porto Seguro',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Potiraguá',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Prado',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Presidente Dutra',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Presidente Jânio Quadros',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Presidente Tancredo Neves',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Queimadas',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Quijingue',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Quixabeira',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Rafael Jambeiro',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Remanso',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Retirolândia',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Riachão das Neves',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Riachão do Jacuípe',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Riacho de Santana',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ribeira do Amparo',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ribeira do Pombal',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ribeirão do Largo',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Rio de Contas',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Rio do Antônio',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Rio do Pires',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Rio Real',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Rodelas',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ruy Barbosa',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Salinas da Margarida',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Salvador',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Santa Bárbara',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Santa Brígida',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Santa Cruz Cabrália',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Santa Cruz da Vitória',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Santa Inês',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Santa Luzia',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Santa Maria da Vitória',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Santa Rita de Cássia',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Santa Teresinha',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Santaluz',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Santana',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Santanópolis',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Santo Amaro',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Santo Antônio de Jesus',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Santo Estêvão',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'São Desidério',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'São Domingos',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'São Felipe',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'São Félix',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'São Félix do Coribe',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'São Francisco do Conde',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'São Gabriel',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'São Gonçalo dos Campos',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'São José da Vitória',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'São José do Jacuípe',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'São Miguel das Matas',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'São Sebastião do Passé',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Sapeaçu',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Sátiro Dias',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Saubara',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Saúde',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Seabra',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Sebastião Laranjeiras',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Senhor do Bonfim',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Sento Sé',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Serra do Ramalho',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Serra Dourada',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Serra Preta',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Serrinha',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Serrolândia',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Simões Filho',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Sítio do Mato',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Sítio do Quinto',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Sobradinho',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Souto Soares',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Tabocas do Brejo Velho',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Tanhaçu',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Tanque Novo',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Tanquinho',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Taperoá',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Tapiramutá',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Teixeira de Freitas',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Teodoro Sampaio',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Teofilândia',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Teolândia',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Terra Nova',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Tremedal',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Tucano',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Uauá',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ubaíra',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ubaitaba',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Ubatã',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Uibaí',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Umburanas',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Una',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Urandi',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Uruçuca',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Utinga',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Valença',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Valente',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Várzea da Roça',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Várzea do Poço',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Várzea Nova',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Varzedo',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Vera Cruz',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Vereda',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Vitória da Conquista',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Wagner',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Wanderley',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Wenceslau Guimarães',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Xique-Xique',
                'state_id' => State::where('internal', 5)->first()->id,
            ],
            [
                'name' => 'Abaiara',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Acarape',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Acaraú',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Acopiara',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Aiuaba',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Alcântaras',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Altaneira',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Alto Santo',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Amontada',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Antonina do Norte',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Apuiarés',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Aquiraz',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Aracati',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Aracoiaba',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Ararendá',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Araripe',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Aratuba',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Arneiroz',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Assaré',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Aurora',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Baixio',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Banabuiú',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Barbalha',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Barreira',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Barro',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Barroquinha',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Baturité',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Beberibe',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Bela Cruz',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Boa Viagem',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Brejo Santo',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Camocim',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Campos Sales',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Canindé',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Capistrano',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Caridade',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Cariré',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Caririaçu',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Cariús',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Carnaubal',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Cascavel',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Catarina',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Catunda',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Caucaia',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Cedro',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Chaval',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Choró',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Chorozinho',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Coreaú',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Crateús',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Crato',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Croatá',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Cruz',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Deputado Irapuan Pinheiro',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Ererê',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Eusébio',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Farias Brito',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Forquilha',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Fortaleza',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Fortim',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Frecheirinha',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'General Sampaio',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Graça',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Granja',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Granjeiro',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Groaíras',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Guaiúba',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Guaraciaba do Norte',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Guaramiranga',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Hidrolândia',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Horizonte',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Ibaretama',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Ibiapina',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Ibicuitinga',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Icapuí',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Icó',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Iguatu',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Independência',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Ipaporanga',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Ipaumirim',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Ipu',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Ipueiras',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Iracema',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Irauçuba',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Itaiçaba',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Itaitinga',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Itapagé',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Itapipoca',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Itapiúna',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Itarema',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Itatira',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Jaguaretama',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Jaguaribara',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Jaguaribe',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Jaguaruana',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Jardim',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Jati',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Jijoca de Jericoacoara',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Juazeiro do Norte',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Jucás',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Lavras da Mangabeira',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Limoeiro do Norte',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Madalena',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Maracanaú',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Maranguape',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Marco',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Martinópole',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Massapê',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Mauriti',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Meruoca',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Milagres',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Milhã',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Miraíma',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Missão Velha',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Mombaça',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Monsenhor Tabosa',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Morada Nova',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Moraújo',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Morrinhos',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Mucambo',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Mulungu',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Nova Olinda',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Nova Russas',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Novo Oriente',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Ocara',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Orós',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Pacajus',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Pacatuba',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Pacoti',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Pacujá',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Palhano',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Palmácia',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Paracuru',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Paraipaba',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Parambu',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Paramoti',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Pedra Branca',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Penaforte',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Pentecoste',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Pereiro',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Pindoretama',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Piquet Carneiro',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Pires Ferreira',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Poranga',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Porteiras',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Potengi',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Potiretama',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Quiterianópolis',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Quixadá',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Quixelô',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Quixeramobim',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Quixeré',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Redenção',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Reriutaba',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Russas',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Saboeiro',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Salitre',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Santa Quitéria',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Santana do Acaraú',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Santana do Cariri',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'São Benedito',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'São Gonçalo do Amarante',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'São João do Jaguaribe',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'São Luís do Curu',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Senador Pompeu',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Senador Sá',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Sobral',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Solonópole',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Tabuleiro do Norte',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Tamboril',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Tarrafas',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Tauá',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Tejuçuoca',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Tianguá',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Trairi',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Tururu',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Ubajara',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Umari',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Umirim',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Uruburetama',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Uruoca',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Varjota',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Várzea Alegre',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Viçosa do Ceará',
                'state_id' => State::where('internal', 6)->first()->id,
            ],
            [
                'name' => 'Brasília',
                'state_id' => State::where('internal', 7)->first()->id,
            ],
            [
                'name' => 'Abadia de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Abadiânia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Acreúna',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Adelândia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Água Fria de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Água Limpa',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Águas Lindas de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Alexânia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Aloândia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Alto Horizonte',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Alto Paraíso de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Alvorada do Norte',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Amaralina',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Americano do Brasil',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Amorinópolis',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Anápolis',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Anhanguera',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Anicuns',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Aparecida de Goiânia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Aparecida do Rio Doce',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Aporé',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Araçu',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Aragarças',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Aragoiânia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Araguapaz',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Arenópolis',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Aruanã',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Aurilândia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Avelinópolis',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Baliza',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Barro Alto',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Bela Vista de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Bom Jardim de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Bom Jesus de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Bonfinópolis',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Bonópolis',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Brazabrantes',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Britânia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Buriti Alegre',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Buriti de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Buritinópolis',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Cabeceiras',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Cachoeira Alta',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Cachoeira de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Cachoeira Dourada',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Caçu',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Caiapônia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Caldas Novas',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Caldazinha',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Campestre de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Campinaçu',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Campinorte',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Campo Alegre de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Campo Limpo de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Campos Belos',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Campos Verdes',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Carmo do Rio Verde',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Castelândia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Catalão',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Caturaí',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Cavalcante',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Ceres',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Cezarina',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Chapadão do Céu',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Cidade Ocidental',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Cocalzinho de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Colinas do Sul',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Córrego do Ouro',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Corumbá de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Corumbaíba',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Cristalina',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Cristianópolis',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Crixás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Cromínia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Cumari',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Damianópolis',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Damolândia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Davinópolis',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Diorama',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Divinópolis de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Doverlândia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Edealina',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Edéia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Estrela do Norte',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Faina',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Fazenda Nova',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Firminópolis',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Flores de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Formosa',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Formoso',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Gameleira de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Goianápolis',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Goiandira',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Goianésia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Goiânia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Goianira',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Goiatuba',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Gouvelândia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Guapó',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Guaraíta',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Guarani de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Guarinos',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Heitoraí',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Hidrolândia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Hidrolina',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Iaciara',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Inaciolândia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Indiara',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Inhumas',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Ipameri',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Ipiranga de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Iporá',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Israelândia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Itaberaí',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Itaguari',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Itaguaru',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Itajá',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Itapaci',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Itapirapuã',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Itapuranga',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Itarumã',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Itauçu',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Itumbiara',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Ivolândia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Jandaia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Jaraguá',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Jataí',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Jaupaci',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Jesúpolis',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Joviânia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Jussara',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Lagoa Santa',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Leopoldo de Bulhões',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Luziânia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Mairipotaba',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Mambaí',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Mara Rosa',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Marzagão',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Matrinchã',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Maurilândia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Mimoso de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Minaçu',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Mineiros',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Moiporá',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Monte Alegre de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Montes Claros de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Montividiu',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Montividiu do Norte',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Morrinhos',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Morro Agudo de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Mossâmedes',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Mozarlândia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Mundo Novo',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Mutunópolis',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Nazário',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Nerópolis',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Niquelândia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Nova América',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Nova Aurora',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Nova Crixás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Nova Glória',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Nova Iguaçu de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Nova Roma',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Nova Veneza',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Novo Brasil',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Novo Gama',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Novo Planalto',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Orizona',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Ouro Verde de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Ouvidor',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Padre Bernardo',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Palestina de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Palmeiras de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Palmelo',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Palminópolis',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Panamá',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Paranaiguara',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Paraúna',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Perolândia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Petrolina de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Pilar de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Piracanjuba',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Piranhas',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Pirenópolis',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Pires do Rio',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Planaltina',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Pontalina',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Porangatu',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Porteirão',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Portelândia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Posse',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Professor Jamil',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Quirinópolis',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Rialma',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Rianápolis',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Rio Quente',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Rio Verde',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Rubiataba',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Sanclerlândia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Santa Bárbara de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Santa Cruz de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Santa Fé de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Santa Helena de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Santa Isabel',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Santa Rita do Araguaia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Santa Rita do Novo Destino',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Santa Rosa de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Santa Tereza de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Santa Terezinha de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Santo Antônio da Barra',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Santo Antônio de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Santo Antônio do Descoberto',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'São Domingos',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'São Francisco de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'São João d`Aliança',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'São João da Paraúna',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'São Luís de Montes Belos',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'São Luíz do Norte',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'São Miguel do Araguaia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'São Miguel do Passa Quatro',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'São Patrício',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'São Simão',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Senador Canedo',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Serranópolis',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Silvânia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Simolândia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Sítio d`Abadia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Taquaral de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Teresina de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Terezópolis de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Três Ranchos',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Trindade',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Trombas',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Turvânia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Turvelândia',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Uirapuru',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Uruaçu',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Uruana',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Urutaí',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Valparaíso de Goiás',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Varjão',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Vianópolis',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Vicentinópolis',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Vila Boa',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Vila Propício',
                'state_id' => State::where('internal', 9)->first()->id,
            ],
            [
                'name' => 'Açailândia',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Afonso Cunha',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Água Doce do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Alcântara',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Aldeias Altas',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Altamira do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Alto Alegre do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Alto Alegre do Pindaré',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Alto Parnaíba',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Amapá do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Amarante do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Anajatuba',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Anapurus',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Apicum-Açu',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Araguanã',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Araioses',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Arame',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Arari',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Axixá',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Bacabal',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Bacabeira',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Bacuri',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Bacurituba',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Balsas',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Barão de Grajaú',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Barra do Corda',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Barreirinhas',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Bela Vista do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Belágua',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Benedito Leite',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Bequimão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Bernardo do Mearim',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Boa Vista do Gurupi',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Bom Jardim',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Bom Jesus das Selvas',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Bom Lugar',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Brejo',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Brejo de Areia',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Buriti',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Buriti Bravo',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Buriticupu',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Buritirana',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Cachoeira Grande',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Cajapió',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Cajari',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Campestre do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Cândido Mendes',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Cantanhede',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Capinzal do Norte',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Carolina',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Carutapera',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Caxias',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Cedral',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Central do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Centro do Guilherme',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Centro Novo do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Chapadinha',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Cidelândia',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Codó',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Coelho Neto',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Colinas',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Conceição do Lago-Açu',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Coroatá',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Cururupu',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Davinópolis',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Dom Pedro',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Duque Bacelar',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Esperantinópolis',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Estreito',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Feira Nova do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Fernando Falcão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Formosa da Serra Negra',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Fortaleza dos Nogueiras',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Fortuna',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Godofredo Viana',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Gonçalves Dias',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Governador Archer',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Governador Edison Lobão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Governador Eugênio Barros',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Governador Luiz Rocha',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Governador Newton Bello',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Governador Nunes Freire',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Graça Aranha',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Grajaú',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Guimarães',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Humberto de Campos',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Icatu',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Igarapé do Meio',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Igarapé Grande',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Imperatriz',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Itaipava do Grajaú',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Itapecuru Mirim',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Itinga do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Jatobá',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Jenipapo dos Vieiras',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'João Lisboa',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Joselândia',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Junco do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Lago da Pedra',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Lago do Junco',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Lago dos Rodrigues',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Lago Verde',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Lagoa do Mato',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Lagoa Grande do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Lajeado Novo',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Lima Campos',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Loreto',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Luís Domingues',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Magalhães de Almeida',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Maracaçumé',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Marajá do Sena',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Maranhãozinho',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Mata Roma',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Matinha',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Matões',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Matões do Norte',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Milagres do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Mirador',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Miranda do Norte',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Mirinzal',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Monção',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Montes Altos',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Morros',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Nina Rodrigues',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Nova Colinas',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Nova Iorque',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Nova Olinda do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Olho d`Água das Cunhãs',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Olinda Nova do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Paço do Lumiar',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Palmeirândia',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Paraibano',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Parnarama',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Passagem Franca',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Pastos Bons',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Paulino Neves',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Paulo Ramos',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Pedreiras',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Pedro do Rosário',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Penalva',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Peri Mirim',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Peritoró',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Pindaré-Mirim',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Pinheiro',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Pio XII',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Pirapemas',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Poção de Pedras',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Porto Franco',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Porto Rico do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Presidente Dutra',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Presidente Juscelino',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Presidente Médici',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Presidente Sarney',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Presidente Vargas',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Primeira Cruz',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Raposa',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Riachão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Ribamar Fiquene',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Rosário',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Sambaíba',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Santa Filomena do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Santa Helena',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Santa Inês',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Santa Luzia',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Santa Luzia do Paruá',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Santa Quitéria do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Santa Rita',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Santana do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Santo Amaro do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Santo Antônio dos Lopes',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São Benedito do Rio Preto',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São Bento',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São Bernardo',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São Domingos do Azeitão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São Domingos do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São Félix de Balsas',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São Francisco do Brejão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São Francisco do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São João Batista',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São João do Carú',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São João do Paraíso',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São João do Soter',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São João dos Patos',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São José de Ribamar',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São José dos Basílios',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São Luís',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São Luís Gonzaga do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São Mateus do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São Pedro da Água Branca',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São Pedro dos Crentes',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São Raimundo das Mangabeiras',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São Raimundo do Doca Bezerra',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São Roberto',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'São Vicente Ferrer',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Satubinha',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Senador Alexandre Costa',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Senador La Rocque',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Serrano do Maranhão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Sítio Novo',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Sucupira do Norte',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Sucupira do Riachão',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Tasso Fragoso',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Timbiras',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Timon',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Trizidela do Vale',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Tufilândia',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Tuntum',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Turiaçu',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Turilândia',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Tutóia',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Urbano Santos',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Vargem Grande',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Viana',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Vila Nova dos Martírios',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Vitória do Mearim',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Vitorino Freire',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Zé Doca',
                'state_id' => State::where('internal', 10)->first()->id,
            ],
            [
                'name' => 'Acorizal',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Água Boa',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Alta Floresta',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Alto Araguaia',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Alto Boa Vista',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Alto Garças',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Alto Paraguai',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Alto Taquari',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Apiacás',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Araguaiana',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Araguainha',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Araputanga',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Arenápolis',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Aripuanã',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Barão de Melgaço',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Barra do Bugres',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Barra do Garças',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Bom Jesus do Araguaia',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Brasnorte',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Cáceres',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Campinápolis',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Campo Novo do Parecis',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Campo Verde',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Campos de Júlio',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Canabrava do Norte',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Canarana',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Carlinda',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Castanheira',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Chapada dos Guimarães',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Cláudia',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Cocalinho',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Colíder',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Colniza',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Comodoro',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Confresa',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Conquista d`Oeste',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Cotriguaçu',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Cuiabá',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Curvelândia',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Curvelândia',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Denise',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Diamantino',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Dom Aquino',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Feliz Natal',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Figueirópolis d`Oeste',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Gaúcha do Norte',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'General Carneiro',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Glória d`Oeste',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Guarantã do Norte',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Guiratinga',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Indiavaí',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Ipiranga do Norte',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Itanhangá',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Itaúba',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Itiquira',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Jaciara',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Jangada',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Jauru',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Juara',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Juína',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Juruena',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Juscimeira',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Lambari d`Oeste',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Lucas do Rio Verde',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Luciára',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Marcelândia',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Matupá',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Mirassol d`Oeste',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Nobres',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Nortelândia',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Nossa Senhora do Livramento',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Nova Bandeirantes',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Nova Brasilândia',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Nova Canaã do Norte',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Nova Guarita',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Nova Lacerda',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Nova Marilândia',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Nova Maringá',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Nova Monte verde',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Nova Mutum',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Nova Olímpia',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Nova Santa Helena',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Nova Ubiratã',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Nova Xavantina',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Novo Horizonte do Norte',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Novo Mundo',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Novo Santo Antônio',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Novo São Joaquim',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Paranaíta',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Paranatinga',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Pedra Preta',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Peixoto de Azevedo',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Planalto da Serra',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Poconé',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Pontal do Araguaia',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Ponte Branca',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Pontes e Lacerda',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Porto Alegre do Norte',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Porto dos Gaúchos',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Porto Esperidião',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Porto Estrela',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Poxoréo',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Primavera do Leste',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Querência',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Reserva do Cabaçal',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Ribeirão Cascalheira',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Ribeirãozinho',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Rio Branco',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Rondolândia',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Rondonópolis',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Rosário Oeste',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Salto do Céu',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Santa Carmem',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Santa Cruz do Xingu',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Santa Rita do Trivelato',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Santa Terezinha',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Santo Afonso',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Santo Antônio do Leste',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Santo Antônio do Leverger',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'São Félix do Araguaia',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'São José do Povo',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'São José do Rio Claro',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'São José do Xingu',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'São José dos Quatro Marcos',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'São Pedro da Cipa',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Sapezal',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Serra Nova Dourada',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Sinop',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Sorriso',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Tabaporã',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Tangará da Serra',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Tapurah',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Terra Nova do Norte',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Tesouro',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Torixoréu',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'União do Sul',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Vale de São Domingos',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Várzea Grande',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Vera',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Vila Bela da Santíssima Trindade',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Vila Rica',
                'state_id' => State::where('internal', 13)->first()->id,
            ],
            [
                'name' => 'Água Clara',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Alcinópolis',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Amambaí',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Anastácio',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Anaurilândia',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Angélica',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Antônio João',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Aparecida do Taboado',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Aquidauana',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Aral Moreira',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Bandeirantes',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Bataguassu',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Bataiporã',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Bela Vista',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Bodoquena',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Bonito',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Brasilândia',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Caarapó',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Camapuã',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Campo Grande',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Caracol',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Cassilândia',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Chapadão do Sul',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Corguinho',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Coronel Sapucaia',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Corumbá',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Costa Rica',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Coxim',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Deodápolis',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Dois Irmãos do Buriti',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Douradina',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Dourados',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Eldorado',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Fátima do Sul',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Figueirão',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Glória de Dourados',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Guia Lopes da Laguna',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Iguatemi',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Inocência',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Itaporã',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Itaquiraí',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Ivinhema',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Japorã',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Jaraguari',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Jardim',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Jateí',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Juti',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Ladário',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Laguna Carapã',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Maracaju',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Miranda',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Mundo Novo',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Naviraí',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Nioaque',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Nova Alvorada do Sul',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Nova Andradina',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Novo Horizonte do Sul',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Paranaíba',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Paranhos',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Pedro Gomes',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Ponta Porã',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Porto Murtinho',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Ribas do Rio Pardo',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Rio Brilhante',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Rio Negro',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Rio Verde de Mato Grosso',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Rochedo',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Santa Rita do Pardo',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'São Gabriel do Oeste',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Selvíria',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Sete Quedas',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Sidrolândia',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Sonora',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Tacuru',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Taquarussu',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Terenos',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Três Lagoas',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Vicentina',
                'state_id' => State::where('internal', 12)->first()->id,
            ],
            [
                'name' => 'Abadia dos Dourados',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Abaeté',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Abre Campo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Acaiaca',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Açucena',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Água Boa',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Água Comprida',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Aguanil',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Águas Formosas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Águas Vermelhas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Aimorés',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Aiuruoca',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Alagoa',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Albertina',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Além Paraíba',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Alfenas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Alfredo Vasconcelos',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Almenara',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Alpercata',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Alpinópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Alterosa',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Alto Caparaó',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Alto Jequitibá',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Alto Rio Doce',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Alvarenga',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Alvinópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Alvorada de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Amparo do Serra',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Andradas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Andrelândia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Angelândia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Antônio Carlos',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Antônio Dias',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Antônio Prado de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Araçaí',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Aracitaba',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Araçuaí',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Araguari',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Arantina',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Araponga',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Araporã',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Arapuá',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Araújos',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Araxá',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Arceburgo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Arcos',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Areado',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Argirita',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Aricanduva',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Arinos',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Astolfo Dutra',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ataléia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Augusto de Lima',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Baependi',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Baldim',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Bambuí',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Bandeira',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Bandeira do Sul',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Barão de Cocais',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Barão de Monte Alto',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Barbacena',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Barra Longa',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Barroso',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Bela Vista de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Belmiro Braga',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Belo Horizonte',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Belo Oriente',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Belo Vale',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Berilo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Berizal',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Bertópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Betim',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Bias Fortes',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Bicas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Biquinhas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Boa Esperança',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Bocaina de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Bocaiúva',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Bom Despacho',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Bom Jardim de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Bom Jesus da Penha',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Bom Jesus do Amparo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Bom Jesus do Galho',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Bom Repouso',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Bom Sucesso',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Bonfim',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Bonfinópolis de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Bonito de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Borda da Mata',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Botelhos',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Botumirim',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Brás Pires',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Brasilândia de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Brasília de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Brasópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Braúnas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Brumadinho',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Bueno Brandão',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Buenópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Bugre',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Buritis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Buritizeiro',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cabeceira Grande',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cabo Verde',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cachoeira da Prata',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cachoeira de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cachoeira de Pajeú',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cachoeira Dourada',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Caetanópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Caeté',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Caiana',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cajuri',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Caldas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Camacho',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Camanducaia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cambuí',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cambuquira',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Campanário',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Campanha',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Campestre',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Campina Verde',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Campo Azul',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Campo Belo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Campo do Meio',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Campo Florido',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Campos Altos',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Campos Gerais',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cana Verde',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Canaã',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Canápolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Candeias',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cantagalo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Caparaó',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Capela Nova',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Capelinha',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Capetinga',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Capim Branco',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Capinópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Capitão Andrade',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Capitão Enéas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Capitólio',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Caputira',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Caraí',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Caranaíba',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Carandaí',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Carangola',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Caratinga',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Carbonita',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Careaçu',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Carlos Chagas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Carmésia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Carmo da Cachoeira',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Carmo da Mata',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Carmo de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Carmo do Cajuru',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Carmo do Paranaíba',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Carmo do Rio Claro',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Carmópolis de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Carneirinho',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Carrancas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Carvalhópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Carvalhos',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Casa Grande',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cascalho Rico',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cássia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cataguases',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Catas Altas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Catas Altas da Noruega',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Catuji',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Catuti',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Caxambu',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cedro do Abaeté',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Central de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Centralina',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Chácara',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Chalé',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Chapada do Norte',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Chapada Gaúcha',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Chiador',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cipotânea',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Claraval',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Claro dos Poções',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cláudio',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Coimbra',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Coluna',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Comendador Gomes',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Comercinho',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Conceição da Aparecida',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Conceição da Barra de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Conceição das Alagoas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Conceição das Pedras',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Conceição de Ipanema',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Conceição do Mato Dentro',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Conceição do Pará',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Conceição do Rio Verde',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Conceição dos Ouros',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cônego Marinho',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Confins',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Congonhal',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Congonhas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Congonhas do Norte',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Conquista',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Conselheiro Lafaiete',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Conselheiro Pena',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Consolação',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Contagem',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Coqueiral',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Coração de Jesus',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cordisburgo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cordislândia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Corinto',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Coroaci',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Coromandel',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Coronel Fabriciano',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Coronel Murta',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Coronel Pacheco',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Coronel Xavier Chaves',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Córrego Danta',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Córrego do Bom Jesus',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Córrego Fundo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Córrego Novo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Couto de Magalhães de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Crisólita',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cristais',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cristália',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cristiano Otoni',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cristina',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Crucilândia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cruzeiro da Fortaleza',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cruzília',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Cuparaque',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Curral de Dentro',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Curvelo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Datas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Delfim Moreira',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Delfinópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Delta',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Descoberto',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Desterro de Entre Rios',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Desterro do Melo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Diamantina',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Diogo de Vasconcelos',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Dionísio',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Divinésia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Divino',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Divino das Laranjeiras',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Divinolândia de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Divinópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Divisa Alegre',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Divisa Nova',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Divisópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Dom Bosco',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Dom Cavati',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Dom Joaquim',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Dom Silvério',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Dom Viçoso',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Dona Eusébia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Dores de Campos',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Dores de Guanhães',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Dores do Indaiá',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Dores do Turvo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Doresópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Douradoquara',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Durandé',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Elói Mendes',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Engenheiro Caldas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Engenheiro Navarro',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Entre Folhas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Entre Rios de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ervália',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Esmeraldas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Espera Feliz',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Espinosa',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Espírito Santo do Dourado',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Estiva',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Estrela Dalva',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Estrela do Indaiá',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Estrela do Sul',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Eugenópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ewbank da Câmara',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Extrema',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Fama',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Faria Lemos',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Felício dos Santos',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Felisburgo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Felixlândia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Fernandes Tourinho',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ferros',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Fervedouro',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Florestal',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Formiga',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Formoso',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Fortaleza de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Fortuna de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Francisco Badaró',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Francisco Dumont',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Francisco Sá',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Franciscópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Frei Gaspar',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Frei Inocêncio',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Frei Lagonegro',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Fronteira',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Fronteira dos Vales',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Fruta de Leite',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Frutal',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Funilândia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Galiléia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Gameleiras',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Glaucilândia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Goiabeira',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Goianá',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Gonçalves',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Gonzaga',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Gouveia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Governador Valadares',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Grão Mogol',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Grupiara',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Guanhães',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Guapé',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Guaraciaba',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Guaraciama',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Guaranésia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Guarani',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Guarará',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Guarda-Mor',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Guaxupé',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Guidoval',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Guimarânia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Guiricema',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Gurinhatã',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Heliodora',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Iapu',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ibertioga',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ibiá',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ibiaí',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ibiracatu',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ibiraci',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ibirité',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ibitiúra de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ibituruna',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Icaraí de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Igarapé',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Igaratinga',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Iguatama',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ijaci',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ilicínea',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Imbé de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Inconfidentes',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Indaiabira',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Indianópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ingaí',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Inhapim',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Inhaúma',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Inimutaba',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ipaba',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ipanema',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ipatinga',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ipiaçu',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ipuiúna',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Iraí de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itabira',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itabirinha de Mantena',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itabirito',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itacambira',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itacarambi',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itaguara',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itaipé',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itajubá',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itamarandiba',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itamarati de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itambacuri',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itambé do Mato Dentro',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itamogi',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itamonte',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itanhandu',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itanhomi',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itaobim',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itapagipe',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itapecerica',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itapeva',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itatiaiuçu',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itaú de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itaúna',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itaverava',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itinga',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itueta',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ituiutaba',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itumirim',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Iturama',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Itutinga',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Jaboticatubas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Jacinto',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Jacuí',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Jacutinga',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Jaguaraçu',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Jaíba',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Jampruca',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Janaúba',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Januária',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Japaraíba',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Japonvar',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Jeceaba',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Jenipapo de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Jequeri',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Jequitaí',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Jequitibá',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Jequitinhonha',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Jesuânia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Joaíma',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Joanésia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'João Monlevade',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'João Pinheiro',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Joaquim Felício',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Jordânia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'José Gonçalves de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'José Raydan',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Josenópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Juatuba',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Juiz de Fora',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Juramento',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Juruaia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Juvenília',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ladainha',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Lagamar',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Lagoa da Prata',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Lagoa dos Patos',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Lagoa Dourada',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Lagoa Formosa',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Lagoa Grande',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Lagoa Santa',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Lajinha',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Lambari',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Lamim',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Laranjal',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Lassance',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Lavras',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Leandro Ferreira',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Leme do Prado',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Leopoldina',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Liberdade',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Lima Duarte',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Limeira do Oeste',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Lontra',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Luisburgo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Luislândia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Luminárias',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Luz',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Machacalis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Machado',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Madre de Deus de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Malacacheta',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Mamonas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Manga',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Manhuaçu',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Manhumirim',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Mantena',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Mar de Espanha',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Maravilhas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Maria da Fé',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Mariana',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Marilac',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Mário Campos',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Maripá de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Marliéria',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Marmelópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Martinho Campos',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Martins Soares',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Mata Verde',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Materlândia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Mateus Leme',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Mathias Lobato',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Matias Barbosa',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Matias Cardoso',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Matipó',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Mato Verde',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Matozinhos',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Matutina',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Medeiros',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Medina',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Mendes Pimentel',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Mercês',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Mesquita',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Minas Novas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Minduri',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Mirabela',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Miradouro',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Miraí',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Miravânia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Moeda',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Moema',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Monjolos',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Monsenhor Paulo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Montalvânia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Monte Alegre de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Monte Azul',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Monte Belo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Monte Carmelo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Monte Formoso',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Monte Santo de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Monte Sião',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Montes Claros',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Montezuma',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Morada Nova de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Morro da Garça',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Morro do Pilar',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Munhoz',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Muriaé',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Mutum',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Muzambinho',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Nacip Raydan',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Nanuque',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Naque',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Natalândia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Natércia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Nazareno',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Nepomuceno',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ninheira',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Nova Belém',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Nova Era',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Nova Lima',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Nova Módica',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Nova Ponte',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Nova Porteirinha',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Nova Resende',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Nova Serrana',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Nova União',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Novo Cruzeiro',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Novo Oriente de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Novorizonte',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Olaria',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Olhos-d`Água',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Olímpio Noronha',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Oliveira',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Oliveira Fortes',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Onça de Pitangui',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Oratórios',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Orizânia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ouro Branco',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ouro Fino',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ouro Preto',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ouro Verde de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Padre Carvalho',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Padre Paraíso',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pai Pedro',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Paineiras',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pains',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Paiva',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Palma',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Palmópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Papagaios',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pará de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Paracatu',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Paraguaçu',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Paraisópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Paraopeba',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Passa Quatro',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Passa Tempo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Passabém',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Passa-Vinte',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Passos',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Patis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Patos de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Patrocínio',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Patrocínio do Muriaé',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Paula Cândido',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Paulistas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pavão',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Peçanha',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pedra Azul',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pedra Bonita',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pedra do Anta',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pedra do Indaiá',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pedra Dourada',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pedralva',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pedras de Maria da Cruz',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pedrinópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pedro Leopoldo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pedro Teixeira',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pequeri',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pequi',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Perdigão',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Perdizes',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Perdões',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Periquito',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pescador',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Piau',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Piedade de Caratinga',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Piedade de Ponte Nova',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Piedade do Rio Grande',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Piedade dos Gerais',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pimenta',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pingo-d`Água',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pintópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Piracema',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pirajuba',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Piranga',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Piranguçu',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Piranguinho',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pirapetinga',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pirapora',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Piraúba',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pitangui',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Piumhi',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Planura',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Poço Fundo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Poços de Caldas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pocrane',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pompéu',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ponte Nova',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ponto Chique',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ponto dos Volantes',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Porteirinha',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Porto Firme',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Poté',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pouso Alegre',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pouso Alto',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Prados',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Prata',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pratápolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Pratinha',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Presidente Bernardes',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Presidente Juscelino',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Presidente Kubitschek',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Presidente Olegário',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Prudente de Morais',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Quartel Geral',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Queluzito',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Raposos',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Raul Soares',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Recreio',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Reduto',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Resende Costa',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Resplendor',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ressaquinha',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Riachinho',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Riacho dos Machados',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ribeirão das Neves',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ribeirão Vermelho',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Rio Acima',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Rio Casca',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Rio do Prado',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Rio Doce',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Rio Espera',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Rio Manso',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Rio Novo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Rio Paranaíba',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Rio Pardo de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Rio Piracicaba',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Rio Pomba',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Rio Preto',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Rio Vermelho',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ritápolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Rochedo de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Rodeiro',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Romaria',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Rosário da Limeira',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Rubelita',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Rubim',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Sabará',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Sabinópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Sacramento',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Salinas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Salto da Divisa',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Bárbara',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Bárbara do Leste',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Bárbara do Monte Verde',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Bárbara do Tugúrio',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Cruz de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Cruz de Salinas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Cruz do Escalvado',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Efigênia de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Fé de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Helena de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Juliana',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Luzia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Margarida',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Maria de Itabira',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Maria do Salto',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Maria do Suaçuí',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Rita de Caldas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Rita de Ibitipoca',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Rita de Jacutinga',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Rita de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Rita do Itueto',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Rita do Sapucaí',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Rosa da Serra',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santa Vitória',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santana da Vargem',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santana de Cataguases',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santana de Pirapama',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santana do Deserto',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santana do Garambéu',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santana do Jacaré',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santana do Manhuaçu',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santana do Paraíso',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santana do Riacho',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santana dos Montes',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santo Antônio do Amparo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santo Antônio do Aventureiro',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santo Antônio do Grama',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santo Antônio do Itambé',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santo Antônio do Jacinto',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santo Antônio do Monte',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santo Antônio do Retiro',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santo Antônio do Rio Abaixo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santo Hipólito',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Santos Dumont',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Bento Abade',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Brás do Suaçuí',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Domingos das Dores',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Domingos do Prata',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Félix de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Francisco',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Francisco de Paula',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Francisco de Sales',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Francisco do Glória',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Geraldo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Geraldo da Piedade',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Geraldo do Baixio',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Gonçalo do Abaeté',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Gonçalo do Pará',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Gonçalo do Rio Abaixo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Gonçalo do Rio Preto',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Gonçalo do Sapucaí',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Gotardo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São João Batista do Glória',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São João da Lagoa',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São João da Mata',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São João da Ponte',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São João das Missões',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São João del Rei',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São João do Manhuaçu',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São João do Manteninha',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São João do Oriente',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São João do Pacuí',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São João do Paraíso',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São João Evangelista',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São João Nepomuceno',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Joaquim de Bicas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São José da Barra',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São José da Lapa',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São José da Safira',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São José da Varginha',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São José do Alegre',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São José do Divino',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São José do Goiabal',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São José do Jacuri',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São José do Mantimento',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Lourenço',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Miguel do Anta',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Pedro da União',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Pedro do Suaçuí',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Pedro dos Ferros',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Romão',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Roque de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Sebastião da Bela Vista',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Sebastião da Vargem Alegre',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Sebastião do Anta',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Sebastião do Maranhão',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Sebastião do Oeste',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Sebastião do Paraíso',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Sebastião do Rio Preto',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Sebastião do Rio Verde',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Thomé das Letras',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Tiago',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Tomás de Aquino',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'São Vicente de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Sapucaí-Mirim',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Sardoá',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Sarzedo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Sem-Peixe',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Senador Amaral',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Senador Cortes',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Senador Firmino',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Senador José Bento',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Senador Modestino Gonçalves',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Senhora de Oliveira',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Senhora do Porto',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Senhora dos Remédios',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Sericita',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Seritinga',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Serra Azul de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Serra da Saudade',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Serra do Salitre',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Serra dos Aimorés',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Serrania',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Serranópolis de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Serranos',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Serro',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Sete Lagoas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Setubinha',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Silveirânia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Silvianópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Simão Pereira',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Simonésia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Sobrália',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Soledade de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Tabuleiro',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Taiobeiras',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Taparuba',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Tapira',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Tapiraí',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Taquaraçu de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Tarumirim',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Teixeiras',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Teófilo Otoni',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Timóteo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Tiradentes',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Tiros',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Tocantins',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Tocos do Moji',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Toledo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Tombos',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Três Corações',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Três Marias',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Três Pontas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Tumiritinga',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Tupaciguara',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Turmalina',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Turvolândia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ubá',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ubaí',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Ubaporanga',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Uberaba',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Uberlândia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Umburatiba',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Unaí',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'União de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Uruana de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Urucânia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Urucuia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Vargem Alegre',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Vargem Bonita',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Vargem Grande do Rio Pardo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Varginha',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Varjão de Minas',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Várzea da Palma',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Varzelândia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Vazante',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Verdelândia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Veredinha',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Veríssimo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Vermelho Novo',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Vespasiano',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Viçosa',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Vieiras',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Virgem da Lapa',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Virgínia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Virginópolis',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Virgolândia',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Visconde do Rio Branco',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Volta Grande',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Wenceslau Braz',
                'state_id' => State::where('internal', 11)->first()->id,
            ],
            [
                'name' => 'Abaetetuba',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Abel Figueiredo',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Acará',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Afuá',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Água Azul do Norte',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Alenquer',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Almeirim',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Altamira',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Anajás',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Ananindeua',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Anapu',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Augusto Corrêa',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Aurora do Pará',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Aveiro',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Bagre',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Baião',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Bannach',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Barcarena',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Belém',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Belterra',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Benevides',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Bom Jesus do Tocantins',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Bonito',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Bragança',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Brasil Novo',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Brejo Grande do Araguaia',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Breu Branco',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Breves',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Bujaru',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Cachoeira do Arari',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Cachoeira do Piriá',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Cametá',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Canaã dos Carajás',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Capanema',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Capitão Poço',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Castanhal',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Chaves',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Colares',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Conceição do Araguaia',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Concórdia do Pará',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Cumaru do Norte',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Curionópolis',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Curralinho',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Curuá',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Curuçá',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Dom Eliseu',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Eldorado dos Carajás',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Faro',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Floresta do Araguaia',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Garrafão do Norte',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Goianésia do Pará',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Gurupá',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Igarapé-Açu',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Igarapé-Miri',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Inhangapi',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Ipixuna do Pará',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Irituia',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Itaituba',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Itupiranga',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Jacareacanga',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Jacundá',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Juruti',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Limoeiro do Ajuru',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Mãe do Rio',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Magalhães Barata',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Marabá',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Maracanã',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Marapanim',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Marituba',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Medicilândia',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Melgaço',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Mocajuba',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Moju',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Monte Alegre',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Muaná',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Nova Esperança do Piriá',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Nova Ipixuna',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Nova Timboteua',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Novo Progresso',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Novo Repartimento',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Óbidos',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Oeiras do Pará',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Oriximiná',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Ourém',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Ourilândia do Norte',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Pacajá',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Palestina do Pará',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Paragominas',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Parauapebas',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Pau d`Arco',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Peixe-Boi',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Piçarra',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Placas',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Ponta de Pedras',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Portel',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Porto de Moz',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Prainha',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Primavera',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Quatipuru',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Redenção',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Rio Maria',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Rondon do Pará',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Rurópolis',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Salinópolis',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Salvaterra',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Santa Bárbara do Pará',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Santa Cruz do Arari',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Santa Isabel do Pará',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Santa Luzia do Pará',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Santa Maria das Barreiras',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Santa Maria do Pará',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Santana do Araguaia',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Santarém',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Santarém Novo',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Santo Antônio do Tauá',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'São Caetano de Odivelas',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'São Domingos do Araguaia',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'São Domingos do Capim',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'São Félix do Xingu',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'São Francisco do Pará',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'São Geraldo do Araguaia',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'São João da Ponta',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'São João de Pirabas',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'São João do Araguaia',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'São Miguel do Guamá',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'São Sebastião da Boa Vista',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Sapucaia',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Senador José Porfírio',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Soure',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Tailândia',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Terra Alta',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Terra Santa',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Tomé-Açu',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Tracuateua',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Trairão',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Tucumã',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Tucuruí',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Ulianópolis',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Uruará',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Vigia',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Viseu',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Vitória do Xingu',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Xinguara',
                'state_id' => State::where('internal', 14)->first()->id,
            ],
            [
                'name' => 'Água Branca',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Aguiar',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Alagoa Grande',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Alagoa Nova',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Alagoinha',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Alcantil',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Algodão de Jandaíra',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Alhandra',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Amparo',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Aparecida',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Araçagi',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Arara',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Araruna',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Areia',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Areia de Baraúnas',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Areial',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Aroeiras',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Assunção',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Baía da Traição',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Bananeiras',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Baraúna',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Barra de Santa Rosa',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Barra de Santana',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Barra de São Miguel',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Bayeux',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Belém',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Belém do Brejo do Cruz',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Bernardino Batista',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Boa Ventura',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Boa Vista',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Bom Jesus',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Bom Sucesso',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Bonito de Santa Fé',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Boqueirão',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Borborema',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Brejo do Cruz',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Brejo dos Santos',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Caaporã',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Cabaceiras',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Cabedelo',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Cachoeira dos Índios',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Cacimba de Areia',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Cacimba de Dentro',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Cacimbas',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Caiçara',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Cajazeiras',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Cajazeirinhas',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Caldas Brandão',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Camalaú',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Campina Grande',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Campo de Santana',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Capim',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Caraúbas',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Carrapateira',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Casserengue',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Catingueira',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Catolé do Rocha',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Caturité',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Conceição',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Condado',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Conde',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Congo',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Coremas',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Coxixola',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Cruz do Espírito Santo',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Cubati',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Cuité',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Cuité de Mamanguape',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Cuitegi',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Curral de Cima',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Curral Velho',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Damião',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Desterro',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Diamante',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Dona Inês',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Duas Estradas',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Emas',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Esperança',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Fagundes',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Frei Martinho',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Gado Bravo',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Guarabira',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Gurinhém',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Gurjão',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Ibiara',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Igaracy',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Imaculada',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Ingá',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Itabaiana',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Itaporanga',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Itapororoca',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Itatuba',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Jacaraú',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Jericó',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'João Pessoa',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Juarez Távora',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Juazeirinho',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Junco do Seridó',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Juripiranga',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Juru',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Lagoa',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Lagoa de Dentro',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Lagoa Seca',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Lastro',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Livramento',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Logradouro',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Lucena',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Mãe d`Água',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Malta',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Mamanguape',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Manaíra',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Marcação',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Mari',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Marizópolis',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Massaranduba',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Mataraca',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Matinhas',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Mato Grosso',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Maturéia',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Mogeiro',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Montadas',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Monte Horebe',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Monteiro',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Mulungu',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Natuba',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Nazarezinho',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Nova Floresta',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Nova Olinda',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Nova Palmeira',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Olho d`Água',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Olivedos',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Ouro Velho',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Parari',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Passagem',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Patos',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Paulista',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Pedra Branca',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Pedra Lavrada',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Pedras de Fogo',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Pedro Régis',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Piancó',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Picuí',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Pilar',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Pilões',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Pilõezinhos',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Pirpirituba',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Pitimbu',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Pocinhos',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Poço Dantas',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Poço de José de Moura',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Pombal',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Prata',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Princesa Isabel',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Puxinanã',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Queimadas',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Quixabá',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Remígio',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Riachão',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Riachão do Bacamarte',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Riachão do Poço',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Riacho de Santo Antônio',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Riacho dos Cavalos',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Rio Tinto',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Salgadinho',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Salgado de São Félix',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Santa Cecília',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Santa Cruz',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Santa Helena',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Santa Inês',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Santa Luzia',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Santa Rita',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Santa Teresinha',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Santana de Mangueira',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Santana dos Garrotes',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Santarém',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Santo André',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'São Bentinho',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'São Bento',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'São Domingos de Pombal',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'São Domingos do Cariri',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'São Francisco',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'São João do Cariri',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'São João do Rio do Peixe',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'São João do Tigre',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'São José da Lagoa Tapada',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'São José de Caiana',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'São José de Espinharas',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'São José de Piranhas',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'São José de Princesa',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'São José do Bonfim',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'São José do Brejo do Cruz',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'São José do Sabugi',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'São José dos Cordeiros',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'São José dos Ramos',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'São Mamede',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'São Miguel de Taipu',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'São Sebastião de Lagoa de Roça',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'São Sebastião do Umbuzeiro',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Sapé',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Seridó',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Serra Branca',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Serra da Raiz',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Serra Grande',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Serra Redonda',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Serraria',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Sertãozinho',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Sobrado',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Solânea',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Soledade',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Sossêgo',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Sousa',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Sumé',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Taperoá',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Tavares',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Teixeira',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Tenório',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Triunfo',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Uiraúna',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Umbuzeiro',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Várzea',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Vieirópolis',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Vista Serrana',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Zabelê',
                'state_id' => State::where('internal', 15)->first()->id,
            ],
            [
                'name' => 'Abatiá',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Adrianópolis',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Agudos do Sul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Almirante Tamandaré',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Altamira do Paraná',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Alto Paraíso',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Alto Paraná',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Alto Piquiri',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Altônia',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Alvorada do Sul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Amaporã',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Ampére',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Anahy',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Andirá',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Ângulo',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Antonina',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Antônio Olinto',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Apucarana',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Arapongas',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Arapoti',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Arapuã',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Araruna',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Araucária',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Ariranha do Ivaí',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Assaí',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Assis Chateaubriand',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Astorga',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Atalaia',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Balsa Nova',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Bandeirantes',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Barbosa Ferraz',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Barra do Jacaré',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Barracão',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Bela Vista da Caroba',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Bela Vista do Paraíso',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Bituruna',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Boa Esperança',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Boa Esperança do Iguaçu',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Boa Ventura de São Roque',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Boa Vista da Aparecida',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Bocaiúva do Sul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Bom Jesus do Sul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Bom Sucesso',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Bom Sucesso do Sul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Borrazópolis',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Braganey',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Brasilândia do Sul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Cafeara',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Cafelândia',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Cafezal do Sul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Califórnia',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Cambará',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Cambé',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Cambira',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Campina da Lagoa',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Campina do Simão',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Campina Grande do Sul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Campo Bonito',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Campo do Tenente',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Campo Largo',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Campo Magro',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Campo Mourão',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Cândido de Abreu',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Candói',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Cantagalo',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Capanema',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Capitão Leônidas Marques',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Carambeí',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Carlópolis',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Cascavel',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Castro',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Catanduvas',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Centenário do Sul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Cerro Azul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Céu Azul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Chopinzinho',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Cianorte',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Cidade Gaúcha',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Clevelândia',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Colombo',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Colorado',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Congonhinhas',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Conselheiro Mairinck',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Contenda',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Corbélia',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Cornélio Procópio',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Coronel Domingos Soares',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Coronel Vivida',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Corumbataí do Sul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Cruz Machado',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Cruzeiro do Iguaçu',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Cruzeiro do Oeste',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Cruzeiro do Sul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Cruzmaltina',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Curitiba',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Curiúva',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Diamante d`Oeste',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Diamante do Norte',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Diamante do Sul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Dois Vizinhos',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Douradina',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Doutor Camargo',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Doutor Ulysses',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Enéas Marques',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Engenheiro Beltrão',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Entre Rios do Oeste',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Esperança Nova',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Espigão Alto do Iguaçu',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Farol',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Faxinal',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Fazenda Rio Grande',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Fênix',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Fernandes Pinheiro',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Figueira',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Flor da Serra do Sul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Floraí',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Floresta',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Florestópolis',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Flórida',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Formosa do Oeste',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Foz do Iguaçu',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Foz do Jordão',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Francisco Alves',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Francisco Beltrão',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'General Carneiro',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Godoy Moreira',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Goioerê',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Goioxim',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Grandes Rios',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Guaíra',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Guairaçá',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Guamiranga',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Guapirama',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Guaporema',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Guaraci',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Guaraniaçu',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Guarapuava',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Guaraqueçaba',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Guaratuba',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Honório Serpa',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Ibaiti',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Ibema',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Ibiporã',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Icaraíma',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Iguaraçu',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Iguatu',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Imbaú',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Imbituva',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Inácio Martins',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Inajá',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Indianópolis',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Ipiranga',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Iporã',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Iracema do Oeste',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Irati',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Iretama',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Itaguajé',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Itaipulândia',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Itambaracá',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Itambé',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Itapejara d`Oeste',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Itaperuçu',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Itaúna do Sul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Ivaí',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Ivaiporã',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Ivaté',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Ivatuba',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Jaboti',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Jacarezinho',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Jaguapitã',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Jaguariaíva',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Jandaia do Sul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Janiópolis',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Japira',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Japurá',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Jardim Alegre',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Jardim Olinda',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Jataizinho',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Jesuítas',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Joaquim Távora',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Jundiaí do Sul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Juranda',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Jussara',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Kaloré',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Lapa',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Laranjal',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Laranjeiras do Sul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Leópolis',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Lidianópolis',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Lindoeste',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Loanda',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Lobato',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Londrina',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Luiziana',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Lunardelli',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Lupionópolis',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Mallet',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Mamborê',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Mandaguaçu',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Mandaguari',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Mandirituba',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Manfrinópolis',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Mangueirinha',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Manoel Ribas',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Marechal Cândido Rondon',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Maria Helena',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Marialva',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Marilândia do Sul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Marilena',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Mariluz',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Maringá',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Mariópolis',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Maripá',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Marmeleiro',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Marquinho',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Marumbi',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Matelândia',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Matinhos',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Mato Rico',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Mauá da Serra',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Medianeira',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Mercedes',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Mirador',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Miraselva',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Missal',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Moreira Sales',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Morretes',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Munhoz de Melo',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Nossa Senhora das Graças',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Nova Aliança do Ivaí',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Nova América da Colina',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Nova Aurora',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Nova Cantu',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Nova Esperança',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Nova Esperança do Sudoeste',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Nova Fátima',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Nova Laranjeiras',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Nova Londrina',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Nova Olímpia',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Nova Prata do Iguaçu',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Nova Santa Bárbara',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Nova Santa Rosa',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Nova Tebas',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Novo Itacolomi',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Ortigueira',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Ourizona',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Ouro Verde do Oeste',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Paiçandu',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Palmas',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Palmeira',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Palmital',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Palotina',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Paraíso do Norte',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Paranacity',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Paranaguá',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Paranapoema',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Paranavaí',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Pato Bragado',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Pato Branco',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Paula Freitas',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Paulo Frontin',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Peabiru',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Perobal',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Pérola',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Pérola d`Oeste',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Piên',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Pinhais',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Pinhal de São Bento',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Pinhalão',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Pinhão',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Piraí do Sul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Piraquara',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Pitanga',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Pitangueiras',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Planaltina do Paraná',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Planalto',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Ponta Grossa',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Pontal do Paraná',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Porecatu',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Porto Amazonas',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Porto Barreiro',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Porto Rico',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Porto Vitória',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Prado Ferreira',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Pranchita',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Presidente Castelo Branco',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Primeiro de Maio',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Prudentópolis',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Quarto Centenário',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Quatiguá',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Quatro Barras',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Quatro Pontes',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Quedas do Iguaçu',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Querência do Norte',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Quinta do Sol',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Quitandinha',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Ramilândia',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Rancho Alegre',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Rancho Alegre d`Oeste',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Realeza',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Rebouças',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Renascença',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Reserva',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Reserva do Iguaçu',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Ribeirão Claro',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Ribeirão do Pinhal',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Rio Azul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Rio Bom',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Rio Bonito do Iguaçu',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Rio Branco do Ivaí',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Rio Branco do Sul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Rio Negro',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Rolândia',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Roncador',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Rondon',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Rosário do Ivaí',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Sabáudia',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Salgado Filho',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Salto do Itararé',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Salto do Lontra',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Santa Amélia',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Santa Cecília do Pavão',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Santa Cruz de Monte Castelo',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Santa Fé',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Santa Helena',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Santa Inês',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Santa Isabel do Ivaí',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Santa Izabel do Oeste',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Santa Lúcia',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Santa Maria do Oeste',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Santa Mariana',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Santa Mônica',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Santa Tereza do Oeste',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Santa Terezinha de Itaipu',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Santana do Itararé',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Santo Antônio da Platina',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Santo Antônio do Caiuá',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Santo Antônio do Paraíso',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Santo Antônio do Sudoeste',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Santo Inácio',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'São Carlos do Ivaí',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'São Jerônimo da Serra',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'São João',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'São João do Caiuá',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'São João do Ivaí',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'São João do Triunfo',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'São Jorge d`Oeste',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'São Jorge do Ivaí',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'São Jorge do Patrocínio',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'São José da Boa Vista',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'São José das Palmeiras',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'São José dos Pinhais',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'São Manoel do Paraná',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'São Mateus do Sul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'São Miguel do Iguaçu',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'São Pedro do Iguaçu',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'São Pedro do Ivaí',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'São Pedro do Paraná',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'São Sebastião da Amoreira',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'São Tomé',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Sapopema',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Sarandi',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Saudade do Iguaçu',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Sengés',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Serranópolis do Iguaçu',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Sertaneja',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Sertanópolis',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Siqueira Campos',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Sulina',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Tamarana',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Tamboara',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Tapejara',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Tapira',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Teixeira Soares',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Telêmaco Borba',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Terra Boa',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Terra Rica',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Terra Roxa',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Tibagi',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Tijucas do Sul',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Toledo',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Tomazina',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Três Barras do Paraná',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Tunas do Paraná',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Tuneiras do Oeste',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Tupãssi',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Turvo',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Ubiratã',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Umuarama',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'União da Vitória',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Uniflor',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Uraí',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Ventania',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Vera Cruz do Oeste',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Verê',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Virmond',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Vitorino',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Wenceslau Braz',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Xambrê',
                'state_id' => State::where('internal', 18)->first()->id,
            ],
            [
                'name' => 'Abreu e Lima',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Afogados da Ingazeira',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Afrânio',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Agrestina',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Água Preta',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Águas Belas',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Alagoinha',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Aliança',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Altinho',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Amaraji',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Angelim',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Araçoiaba',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Araripina',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Arcoverde',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Barra de Guabiraba',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Barreiros',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Belém de Maria',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Belém de São Francisco',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Belo Jardim',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Betânia',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Bezerros',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Bodocó',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Bom Conselho',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Bom Jardim',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Bonito',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Brejão',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Brejinho',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Brejo da Madre de Deus',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Buenos Aires',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Buíque',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Cabo de Santo Agostinho',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Cabrobó',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Cachoeirinha',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Caetés',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Calçado',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Calumbi',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Camaragibe',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Camocim de São Félix',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Camutanga',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Canhotinho',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Capoeiras',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Carnaíba',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Carnaubeira da Penha',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Carpina',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Caruaru',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Casinhas',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Catende',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Cedro',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Chã de Alegria',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Chã Grande',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Condado',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Correntes',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Cortês',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Cumaru',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Cupira',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Custódia',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Dormentes',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Escada',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Exu',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Feira Nova',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Fernando de Noronha',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Ferreiros',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Flores',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Floresta',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Frei Miguelinho',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Gameleira',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Garanhuns',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Glória do Goitá',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Goiana',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Granito',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Gravatá',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Iati',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Ibimirim',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Ibirajuba',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Igarassu',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Iguaraci',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Ilha de Itamaracá',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Inajá',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Ingazeira',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Ipojuca',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Ipubi',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Itacuruba',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Itaíba',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Itambé',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Itapetim',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Itapissuma',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Itaquitinga',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Jaboatão dos Guararapes',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Jaqueira',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Jataúba',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Jatobá',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'João Alfredo',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Joaquim Nabuco',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Jucati',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Jupi',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Jurema',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Lagoa do Carro',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Lagoa do Itaenga',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Lagoa do Ouro',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Lagoa dos Gatos',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Lagoa Grande',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Lajedo',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Limoeiro',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Macaparana',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Machados',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Manari',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Maraial',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Mirandiba',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Moreilândia',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Moreno',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Nazaré da Mata',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Olinda',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Orobó',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Orocó',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Ouricuri',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Palmares',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Palmeirina',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Panelas',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Paranatama',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Parnamirim',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Passira',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Paudalho',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Paulista',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Pedra',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Pesqueira',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Petrolândia',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Petrolina',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Poção',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Pombos',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Primavera',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Quipapá',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Quixaba',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Recife',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Riacho das Almas',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Ribeirão',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Rio Formoso',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Sairé',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Salgadinho',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Salgueiro',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Saloá',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Sanharó',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Santa Cruz',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Santa Cruz da Baixa Verde',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Santa Cruz do Capibaribe',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Santa Filomena',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Santa Maria da Boa Vista',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Santa Maria do Cambucá',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Santa Terezinha',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'São Benedito do Sul',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'São Bento do Una',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'São Caitano',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'São João',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'São Joaquim do Monte',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'São José da Coroa Grande',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'São José do Belmonte',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'São José do Egito',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'São Lourenço da Mata',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'São Vicente Ferrer',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Serra Talhada',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Serrita',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Sertânia',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Sirinhaém',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Solidão',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Surubim',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Tabira',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Tacaimbó',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Tacaratu',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Tamandaré',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Taquaritinga do Norte',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Terezinha',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Terra Nova',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Timbaúba',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Toritama',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Tracunhaém',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Trindade',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Triunfo',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Tupanatinga',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Tuparetama',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Venturosa',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Verdejante',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Vertente do Lério',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Vertentes',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Vicência',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Vitória de Santo Antão',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Xexéu',
                'state_id' => State::where('internal', 16)->first()->id,
            ],
            [
                'name' => 'Acauã',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Agricolândia',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Água Branca',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Alagoinha do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Alegrete do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Alto Longá',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Altos',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Alvorada do Gurguéia',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Amarante',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Angical do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Anísio de Abreu',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Antônio Almeida',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Aroazes',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Aroeiras do Itaim',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Arraial',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Assunção do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Avelino Lopes',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Baixa Grande do Ribeiro',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Barra d`Alcântara',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Barras',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Barreiras do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Barro Duro',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Batalha',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Bela Vista do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Belém do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Beneditinos',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Bertolínia',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Betânia do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Boa Hora',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Bocaina',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Bom Jesus',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Bom Princípio do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Bonfim do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Boqueirão do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Brasileira',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Brejo do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Buriti dos Lopes',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Buriti dos Montes',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Cabeceiras do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Cajazeiras do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Cajueiro da Praia',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Caldeirão Grande do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Campinas do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Campo Alegre do Fidalgo',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Campo Grande do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Campo Largo do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Campo Maior',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Canavieira',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Canto do Buriti',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Capitão de Campos',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Capitão Gervásio Oliveira',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Caracol',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Caraúbas do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Caridade do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Castelo do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Caxingó',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Cocal',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Cocal de Telha',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Cocal dos Alves',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Coivaras',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Colônia do Gurguéia',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Colônia do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Conceição do Canindé',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Coronel José Dias',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Corrente',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Cristalândia do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Cristino Castro',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Curimatá',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Currais',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Curral Novo do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Curralinhos',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Demerval Lobão',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Dirceu Arcoverde',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Dom Expedito Lopes',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Dom Inocêncio',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Domingos Mourão',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Elesbão Veloso',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Eliseu Martins',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Esperantina',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Fartura do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Flores do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Floresta do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Floriano',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Francinópolis',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Francisco Ayres',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Francisco Macedo',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Francisco Santos',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Fronteiras',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Geminiano',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Gilbués',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Guadalupe',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Guaribas',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Hugo Napoleão',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Ilha Grande',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Inhuma',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Ipiranga do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Isaías Coelho',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Itainópolis',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Itaueira',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Jacobina do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Jaicós',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Jardim do Mulato',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Jatobá do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Jerumenha',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'João Costa',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Joaquim Pires',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Joca Marques',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'José de Freitas',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Juazeiro do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Júlio Borges',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Jurema',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Lagoa Alegre',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Lagoa de São Francisco',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Lagoa do Barro do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Lagoa do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Lagoa do Sítio',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Lagoinha do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Landri Sales',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Luís Correia',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Luzilândia',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Madeiro',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Manoel Emídio',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Marcolândia',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Marcos Parente',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Massapê do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Matias Olímpio',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Miguel Alves',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Miguel Leão',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Milton Brandão',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Monsenhor Gil',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Monsenhor Hipólito',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Monte Alegre do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Morro Cabeça no Tempo',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Morro do Chapéu do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Murici dos Portelas',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Nazaré do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Nossa Senhora de Nazaré',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Nossa Senhora dos Remédios',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Nova Santa Rita',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Novo Oriente do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Novo Santo Antônio',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Oeiras',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Olho d`Água do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Padre Marcos',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Paes Landim',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Pajeú do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Palmeira do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Palmeirais',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Paquetá',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Parnaguá',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Parnaíba',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Passagem Franca do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Patos do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Pau d`Arco do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Paulistana',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Pavussu',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Pedro II',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Pedro Laurentino',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Picos',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Pimenteiras',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Pio IX',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Piracuruca',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Piripiri',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Porto',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Porto Alegre do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Prata do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Queimada Nova',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Redenção do Gurguéia',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Regeneração',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Riacho Frio',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Ribeira do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Ribeiro Gonçalves',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Rio Grande do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Santa Cruz do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Santa Cruz dos Milagres',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Santa Filomena',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Santa Luz',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Santa Rosa do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Santana do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Santo Antônio de Lisboa',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Santo Antônio dos Milagres',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Santo Inácio do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'São Braz do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'São Félix do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'São Francisco de Assis do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'São Francisco do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'São Gonçalo do Gurguéia',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'São Gonçalo do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'São João da Canabrava',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'São João da Fronteira',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'São João da Serra',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'São João da Varjota',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'São João do Arraial',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'São João do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'São José do Divino',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'São José do Peixe',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'São José do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'São Julião',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'São Lourenço do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'São Luis do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'São Miguel da Baixa Grande',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'São Miguel do Fidalgo',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'São Miguel do Tapuio',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'São Pedro do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'São Raimundo Nonato',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Sebastião Barros',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Sebastião Leal',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Sigefredo Pacheco',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Simões',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Simplício Mendes',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Socorro do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Sussuapara',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Tamboril do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Tanque do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Teresina',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'União',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Uruçuí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Valença do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Várzea Branca',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Várzea Grande',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Vera Mendes',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Vila Nova do Piauí',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Wall Ferraz',
                'state_id' => State::where('internal', 17)->first()->id,
            ],
            [
                'name' => 'Angra dos Reis',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Aperibé',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Araruama',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Areal',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Armação dos Búzios',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Arraial do Cabo',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Barra do Piraí',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Barra Mansa',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Belford Roxo',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Bom Jardim',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Bom Jesus do Itabapoana',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Cabo Frio',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Cachoeiras de Macacu',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Cambuci',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Campos dos Goytacazes',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Cantagalo',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Carapebus',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Cardoso Moreira',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Carmo',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Casimiro de Abreu',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Comendador Levy Gasparian',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Conceição de Macabu',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Cordeiro',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Duas Barras',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Duque de Caxias',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Engenheiro Paulo de Frontin',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Guapimirim',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Iguaba Grande',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Itaboraí',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Itaguaí',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Italva',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Itaocara',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Itaperuna',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Itatiaia',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Japeri',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Laje do Muriaé',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Macaé',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Macuco',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Magé',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Mangaratiba',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Maricá',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Mendes',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Mesquita',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Miguel Pereira',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Miracema',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Natividade',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Nilópolis',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Niterói',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Nova Friburgo',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Nova Iguaçu',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Paracambi',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Paraíba do Sul',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Parati',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Paty do Alferes',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Petrópolis',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Pinheiral',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Piraí',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Porciúncula',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Porto Real',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Quatis',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Queimados',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Quissamã',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Resende',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Rio Bonito',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Rio Claro',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Rio das Flores',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Rio das Ostras',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Rio de Janeiro',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Santa Maria Madalena',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Santo Antônio de Pádua',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'São Fidélis',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'São Francisco de Itabapoana',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'São Gonçalo',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'São João da Barra',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'São João de Meriti',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'São José de Ubá',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'São José do Vale do Rio Preto',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'São Pedro da Aldeia',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'São Sebastião do Alto',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Sapucaia',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Saquarema',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Seropédica',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Silva Jardim',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Sumidouro',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Tanguá',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Teresópolis',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Trajano de Moraes',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Três Rios',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Valença',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Varre-Sai',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Vassouras',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Volta Redonda',
                'state_id' => State::where('internal', 19)->first()->id,
            ],
            [
                'name' => 'Acari',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Açu',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Afonso Bezerra',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Água Nova',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Alexandria',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Almino Afonso',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Alto do Rodrigues',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Angicos',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Antônio Martins',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Apodi',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Areia Branca',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Arês',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Augusto Severo',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Baía Formosa',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Baraúna',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Barcelona',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Bento Fernandes',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Bodó',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Bom Jesus',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Brejinho',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Caiçara do Norte',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Caiçara do Rio do Vento',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Caicó',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Campo Redondo',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Canguaretama',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Caraúbas',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Carnaúba dos Dantas',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Carnaubais',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Ceará-Mirim',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Cerro Corá',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Coronel Ezequiel',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Coronel João Pessoa',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Cruzeta',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Currais Novos',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Doutor Severiano',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Encanto',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Equador',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Espírito Santo',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Extremoz',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Felipe Guerra',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Fernando Pedroza',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Florânia',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Francisco Dantas',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Frutuoso Gomes',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Galinhos',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Goianinha',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Governador Dix-Sept Rosado',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Grossos',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Guamaré',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Ielmo Marinho',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Ipanguaçu',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Ipueira',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Itajá',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Itaú',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Jaçanã',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Jandaíra',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Janduís',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Januário Cicco',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Japi',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Jardim de Angicos',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Jardim de Piranhas',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Jardim do Seridó',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'João Câmara',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'João Dias',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'José da Penha',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Jucurutu',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Jundiá',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Lagoa d`Anta',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Lagoa de Pedras',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Lagoa de Velhos',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Lagoa Nova',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Lagoa Salgada',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Lajes',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Lajes Pintadas',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Lucrécia',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Luís Gomes',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Macaíba',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Macau',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Major Sales',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Marcelino Vieira',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Martins',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Maxaranguape',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Messias Targino',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Montanhas',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Monte Alegre',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Monte das Gameleiras',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Mossoró',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Natal',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Nísia Floresta',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Nova Cruz',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Olho-d`Água do Borges',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Ouro Branco',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Paraná',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Paraú',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Parazinho',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Parelhas',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Parnamirim',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Passa e Fica',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Passagem',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Patu',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Pau dos Ferros',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Pedra Grande',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Pedra Preta',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Pedro Avelino',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Pedro Velho',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Pendências',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Pilões',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Poço Branco',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Portalegre',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Porto do Mangue',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Presidente Juscelino',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Pureza',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Rafael Fernandes',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Rafael Godeiro',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Riacho da Cruz',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Riacho de Santana',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Riachuelo',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Rio do Fogo',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Rodolfo Fernandes',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Ruy Barbosa',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Santa Cruz',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Santa Maria',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Santana do Matos',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Santana do Seridó',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Santo Antônio',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'São Bento do Norte',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'São Bento do Trairí',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'São Fernando',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'São Francisco do Oeste',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'São Gonçalo do Amarante',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'São João do Sabugi',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'São José de Mipibu',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'São José do Campestre',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'São José do Seridó',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'São Miguel',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'São Miguel do Gostoso',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'São Paulo do Potengi',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'São Pedro',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'São Rafael',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'São Tomé',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'São Vicente',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Senador Elói de Souza',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Senador Georgino Avelino',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Serra de São Bento',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Serra do Mel',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Serra Negra do Norte',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Serrinha',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Serrinha dos Pintos',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Severiano Melo',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Sítio Novo',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Taboleiro Grande',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Taipu',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Tangará',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Tenente Ananias',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Tenente Laurentino Cruz',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Tibau',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Tibau do Sul',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Timbaúba dos Batistas',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Touros',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Triunfo Potiguar',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Umarizal',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Upanema',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Várzea',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Venha-Ver',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Vera Cruz',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Viçosa',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Vila Flor',
                'state_id' => State::where('internal', 20)->first()->id,
            ],
            [
                'name' => 'Aceguá',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Água Santa',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Agudo',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Ajuricaba',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Alecrim',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Alegrete',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Alegria',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Almirante Tamandaré do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Alpestre',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Alto Alegre',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Alto Feliz',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Alvorada',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Amaral Ferrador',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Ametista do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'André da Rocha',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Anta Gorda',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Antônio Prado',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Arambaré',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Araricá',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Aratiba',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Arroio do Meio',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Arroio do Padre',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Arroio do Sal',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Arroio do Tigre',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Arroio dos Ratos',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Arroio Grande',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Arvorezinha',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Augusto Pestana',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Áurea',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Bagé',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Balneário Pinhal',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Barão',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Barão de Cotegipe',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Barão do Triunfo',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Barra do Guarita',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Barra do Quaraí',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Barra do Ribeiro',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Barra do Rio Azul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Barra Funda',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Barracão',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Barros Cassal',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Benjamin Constant do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Bento Gonçalves',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Boa Vista das Missões',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Boa Vista do Buricá',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Boa Vista do Cadeado',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Boa Vista do Incra',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Boa Vista do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Bom Jesus',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Bom Princípio',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Bom Progresso',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Bom Retiro do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Boqueirão do Leão',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Bossoroca',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Bozano',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Braga',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Brochier',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Butiá',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Caçapava do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Cacequi',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Cachoeira do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Cachoeirinha',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Cacique Doble',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Caibaté',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Caiçara',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Camaquã',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Camargo',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Cambará do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Campestre da Serra',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Campina das Missões',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Campinas do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Campo Bom',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Campo Novo',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Campos Borges',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Candelária',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Cândido Godói',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Candiota',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Canela',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Canguçu',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Canoas',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Canudos do Vale',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Capão Bonito do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Capão da Canoa',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Capão do Cipó',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Capão do Leão',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Capela de Santana',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Capitão',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Capivari do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Caraá',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Carazinho',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Carlos Barbosa',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Carlos Gomes',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Casca',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Caseiros',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Catuípe',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Caxias do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Centenário',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Cerrito',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Cerro Branco',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Cerro Grande',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Cerro Grande do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Cerro Largo',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Chapada',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Charqueadas',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Charrua',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Chiapeta',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Chuí',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Chuvisca',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Cidreira',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Ciríaco',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Colinas',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Colorado',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Condor',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Constantina',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Coqueiro Baixo',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Coqueiros do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Coronel Barros',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Coronel Bicaco',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Coronel Pilar',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Cotiporã',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Coxilha',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Crissiumal',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Cristal',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Cristal do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Cruz Alta',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Cruzaltense',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Cruzeiro do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'David Canabarro',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Derrubadas',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Dezesseis de Novembro',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Dilermando de Aguiar',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Dois Irmãos',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Dois Irmãos das Missões',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Dois Lajeados',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Dom Feliciano',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Dom Pedrito',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Dom Pedro de Alcântara',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Dona Francisca',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Doutor Maurício Cardoso',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Doutor Ricardo',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Eldorado do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Encantado',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Encruzilhada do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Engenho Velho',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Entre Rios do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Entre-Ijuís',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Erebango',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Erechim',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Ernestina',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Erval Grande',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Erval Seco',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Esmeralda',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Esperança do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Espumoso',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Estação',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Estância Velha',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Esteio',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Estrela',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Estrela Velha',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Eugênio de Castro',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Fagundes Varela',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Farroupilha',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Faxinal do Soturno',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Faxinalzinho',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Fazenda Vilanova',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Feliz',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Flores da Cunha',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Floriano Peixoto',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Fontoura Xavier',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Formigueiro',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Forquetinha',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Fortaleza dos Valos',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Frederico Westphalen',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Garibaldi',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Garruchos',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Gaurama',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'General Câmara',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Gentil',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Getúlio Vargas',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Giruá',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Glorinha',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Gramado',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Gramado dos Loureiros',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Gramado Xavier',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Gravataí',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Guabiju',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Guaíba',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Guaporé',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Guarani das Missões',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Harmonia',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Herval',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Herveiras',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Horizontina',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Hulha Negra',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Humaitá',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Ibarama',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Ibiaçá',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Ibiraiaras',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Ibirapuitã',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Ibirubá',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Igrejinha',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Ijuí',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Ilópolis',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Imbé',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Imigrante',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Independência',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Inhacorá',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Ipê',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Ipiranga do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Iraí',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Itaara',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Itacurubi',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Itapuca',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Itaqui',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Itati',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Itatiba do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Ivorá',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Ivoti',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Jaboticaba',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Jacuizinho',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Jacutinga',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Jaguarão',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Jaguari',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Jaquirana',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Jari',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Jóia',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Júlio de Castilhos',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Lagoa Bonita do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Lagoa dos Três Cantos',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Lagoa Vermelha',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Lagoão',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Lajeado',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Lajeado do Bugre',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Lavras do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Liberato Salzano',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Lindolfo Collor',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Linha Nova',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Maçambara',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Machadinho',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Mampituba',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Manoel Viana',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Maquiné',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Maratá',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Marau',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Marcelino Ramos',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Mariana Pimentel',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Mariano Moro',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Marques de Souza',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Mata',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Mato Castelhano',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Mato Leitão',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Mato Queimado',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Maximiliano de Almeida',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Minas do Leão',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Miraguaí',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Montauri',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Monte Alegre dos Campos',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Monte Belo do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Montenegro',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Mormaço',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Morrinhos do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Morro Redondo',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Morro Reuter',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Mostardas',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Muçum',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Muitos Capões',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Muliterno',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Não-Me-Toque',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Nicolau Vergueiro',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Nonoai',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Nova Alvorada',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Nova Araçá',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Nova Bassano',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Nova Boa Vista',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Nova Bréscia',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Nova Candelária',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Nova Esperança do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Nova Hartz',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Nova Pádua',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Nova Palma',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Nova Petrópolis',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Nova Prata',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Nova Ramada',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Nova Roma do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Nova Santa Rita',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Novo Barreiro',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Novo Cabrais',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Novo Hamburgo',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Novo Machado',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Novo Tiradentes',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Novo Xingu',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Osório',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Paim Filho',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Palmares do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Palmeira das Missões',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Palmitinho',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Panambi',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Pantano Grande',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Paraí',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Paraíso do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Pareci Novo',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Parobé',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Passa Sete',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Passo do Sobrado',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Passo Fundo',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Paulo Bento',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Paverama',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Pedras Altas',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Pedro Osório',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Pejuçara',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Pelotas',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Picada Café',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Pinhal',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Pinhal da Serra',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Pinhal Grande',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Pinheirinho do Vale',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Pinheiro Machado',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Pirapó',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Piratini',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Planalto',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Poço das Antas',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Pontão',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Ponte Preta',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Portão',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Porto Alegre',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Porto Lucena',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Porto Mauá',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Porto Vera Cruz',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Porto Xavier',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Pouso Novo',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Presidente Lucena',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Progresso',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Protásio Alves',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Putinga',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Quaraí',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Quatro Irmãos',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Quevedos',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Quinze de Novembro',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Redentora',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Relvado',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Restinga Seca',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Rio dos Índios',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Rio Grande',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Rio Pardo',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Riozinho',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Roca Sales',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Rodeio Bonito',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Rolador',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Rolante',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Ronda Alta',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Rondinha',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Roque Gonzales',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Rosário do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Sagrada Família',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Saldanha Marinho',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Salto do Jacuí',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Salvador das Missões',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Salvador do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Sananduva',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Santa Bárbara do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Santa Cecília do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Santa Clara do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Santa Cruz do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Santa Margarida do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Santa Maria',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Santa Maria do Herval',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Santa Rosa',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Santa Tereza',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Santa Vitória do Palmar',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Santana da Boa Vista',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Santana do Livramento',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Santiago',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Santo Ângelo',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Santo Antônio da Patrulha',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Santo Antônio das Missões',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Santo Antônio do Palma',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Santo Antônio do Planalto',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Santo Augusto',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Santo Cristo',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Santo Expedito do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Borja',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Domingos do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Francisco de Assis',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Francisco de Paula',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Gabriel',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Jerônimo',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São João da Urtiga',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São João do Polêsine',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Jorge',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São José das Missões',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São José do Herval',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São José do Hortêncio',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São José do Inhacorá',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São José do Norte',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São José do Ouro',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São José do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São José dos Ausentes',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Leopoldo',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Lourenço do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Luiz Gonzaga',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Marcos',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Martinho',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Martinho da Serra',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Miguel das Missões',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Nicolau',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Paulo das Missões',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Pedro da Serra',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Pedro das Missões',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Pedro do Butiá',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Pedro do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Sebastião do Caí',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Sepé',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Valentim',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Valentim do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Valério do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Vendelino',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'São Vicente do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Sapiranga',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Sapucaia do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Sarandi',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Seberi',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Sede Nova',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Segredo',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Selbach',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Senador Salgado Filho',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Sentinela do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Serafina Corrêa',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Sério',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Sertão',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Sertão Santana',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Sete de Setembro',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Severiano de Almeida',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Silveira Martins',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Sinimbu',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Sobradinho',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Soledade',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Tabaí',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Tapejara',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Tapera',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Tapes',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Taquara',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Taquari',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Taquaruçu do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Tavares',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Tenente Portela',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Terra de Areia',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Teutônia',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Tio Hugo',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Tiradentes do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Toropi',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Torres',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Tramandaí',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Travesseiro',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Três Arroios',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Três Cachoeiras',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Três Coroas',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Três de Maio',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Três Forquilhas',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Três Palmeiras',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Três Passos',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Trindade do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Triunfo',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Tucunduva',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Tunas',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Tupanci do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Tupanciretã',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Tupandi',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Tuparendi',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Turuçu',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Ubiretama',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'União da Serra',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Unistalda',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Uruguaiana',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Vacaria',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Vale do Sol',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Vale Real',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Vale Verde',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Vanini',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Venâncio Aires',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Vera Cruz',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Veranópolis',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Vespasiano Correa',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Viadutos',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Viamão',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Vicente Dutra',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Victor Graeff',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Vila Flores',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Vila Lângaro',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Vila Maria',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Vila Nova do Sul',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Vista Alegre',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Vista Alegre do Prata',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Vista Gaúcha',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Vitória das Missões',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Westfália',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Xangri-lá',
                'state_id' => State::where('internal', 23)->first()->id,
            ],
            [
                'name' => 'Alta Floresta d`Oeste',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Alto Alegre dos Parecis',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Alto Paraíso',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Alvorada d`Oeste',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Ariquemes',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Buritis',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Cabixi',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Cacaulândia',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Cacoal',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Campo Novo de Rondônia',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Candeias do Jamari',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Castanheiras',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Cerejeiras',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Chupinguaia',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Colorado do Oeste',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Corumbiara',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Costa Marques',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Cujubim',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Espigão d`Oeste',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Governador Jorge Teixeira',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Guajará-Mirim',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Itapuã do Oeste',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Jaru',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Ji-Paraná',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Machadinho d`Oeste',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Ministro Andreazza',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Mirante da Serra',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Monte Negro',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Nova Brasilândia d`Oeste',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Nova Mamoré',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Nova União',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Novo Horizonte do Oeste',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Ouro Preto do Oeste',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Parecis',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Pimenta Bueno',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Pimenteiras do Oeste',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Porto Velho',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Presidente Médici',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Primavera de Rondônia',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Rio Crespo',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Rolim de Moura',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Santa Luzia d`Oeste',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'São Felipe d`Oeste',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'São Francisco do Guaporé',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'São Miguel do Guaporé',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Seringueiras',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Teixeirópolis',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Theobroma',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Urupá',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Vale do Anari',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Vale do Paraíso',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Vilhena',
                'state_id' => State::where('internal', 21)->first()->id,
            ],
            [
                'name' => 'Alto Alegre',
                'state_id' => State::where('internal', 22)->first()->id,
            ],
            [
                'name' => 'Amajari',
                'state_id' => State::where('internal', 22)->first()->id,
            ],
            [
                'name' => 'Boa Vista',
                'state_id' => State::where('internal', 22)->first()->id,
            ],
            [
                'name' => 'Bonfim',
                'state_id' => State::where('internal', 22)->first()->id,
            ],
            [
                'name' => 'Cantá',
                'state_id' => State::where('internal', 22)->first()->id,
            ],
            [
                'name' => 'Caracaraí',
                'state_id' => State::where('internal', 22)->first()->id,
            ],
            [
                'name' => 'Caroebe',
                'state_id' => State::where('internal', 22)->first()->id,
            ],
            [
                'name' => 'Iracema',
                'state_id' => State::where('internal', 22)->first()->id,
            ],
            [
                'name' => 'Mucajaí',
                'state_id' => State::where('internal', 22)->first()->id,
            ],
            [
                'name' => 'Normandia',
                'state_id' => State::where('internal', 22)->first()->id,
            ],
            [
                'name' => 'Pacaraima',
                'state_id' => State::where('internal', 22)->first()->id,
            ],
            [
                'name' => 'Rorainópolis',
                'state_id' => State::where('internal', 22)->first()->id,
            ],
            [
                'name' => 'São João da Baliza',
                'state_id' => State::where('internal', 22)->first()->id,
            ],
            [
                'name' => 'São Luiz',
                'state_id' => State::where('internal', 22)->first()->id,
            ],
            [
                'name' => 'Uiramutã',
                'state_id' => State::where('internal', 22)->first()->id,
            ],
            [
                'name' => 'Abdon Batista',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Abelardo Luz',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Agrolândia',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Agronômica',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Água Doce',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Águas de Chapecó',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Águas Frias',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Águas Mornas',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Alfredo Wagner',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Alto Bela Vista',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Anchieta',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Angelina',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Anita Garibaldi',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Anitápolis',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Antônio Carlos',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Apiúna',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Arabutã',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Araquari',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Araranguá',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Armazém',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Arroio Trinta',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Arvoredo',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Ascurra',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Atalanta',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Aurora',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Balneário Arroio do Silva',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Balneário Barra do Sul',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Balneário Camboriú',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Balneário Gaivota',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Bandeirante',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Barra Bonita',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Barra Velha',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Bela Vista do Toldo',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Belmonte',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Benedito Novo',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Biguaçu',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Blumenau',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Bocaina do Sul',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Bom Jardim da Serra',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Bom Jesus',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Bom Jesus do Oeste',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Bom Retiro',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Bombinhas',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Botuverá',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Braço do Norte',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Braço do Trombudo',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Brunópolis',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Brusque',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Caçador',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Caibi',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Calmon',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Camboriú',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Campo Alegre',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Campo Belo do Sul',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Campo Erê',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Campos Novos',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Canelinha',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Canoinhas',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Capão Alto',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Capinzal',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Capivari de Baixo',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Catanduvas',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Caxambu do Sul',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Celso Ramos',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Cerro Negro',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Chapadão do Lageado',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Chapecó',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Cocal do Sul',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Concórdia',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Cordilheira Alta',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Coronel Freitas',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Coronel Martins',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Correia Pinto',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Corupá',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Criciúma',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Cunha Porã',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Cunhataí',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Curitibanos',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Descanso',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Dionísio Cerqueira',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Dona Emma',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Doutor Pedrinho',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Entre Rios',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Ermo',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Erval Velho',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Faxinal dos Guedes',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Flor do Sertão',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Florianópolis',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Formosa do Sul',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Forquilhinha',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Fraiburgo',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Frei Rogério',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Galvão',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Garopaba',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Garuva',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Gaspar',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Governador Celso Ramos',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Grão Pará',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Gravatal',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Guabiruba',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Guaraciaba',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Guaramirim',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Guarujá do Sul',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Guatambú',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Herval d`Oeste',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Ibiam',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Ibicaré',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Ibirama',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Içara',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Ilhota',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Imaruí',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Imbituba',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Imbuia',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Indaial',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Iomerê',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Ipira',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Iporã do Oeste',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Ipuaçu',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Ipumirim',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Iraceminha',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Irani',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Irati',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Irineópolis',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Itá',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Itaiópolis',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Itajaí',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Itapema',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Itapiranga',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Itapoá',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Ituporanga',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Jaborá',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Jacinto Machado',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Jaguaruna',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Jaraguá do Sul',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Jardinópolis',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Joaçaba',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Joinville',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'José Boiteux',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Jupiá',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Lacerdópolis',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Lages',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Laguna',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Lajeado Grande',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Laurentino',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Lauro Muller',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Lebon Régis',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Leoberto Leal',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Lindóia do Sul',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Lontras',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Luiz Alves',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Luzerna',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Macieira',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Mafra',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Major Gercino',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Major Vieira',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Maracajá',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Maravilha',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Marema',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Massaranduba',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Matos Costa',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Meleiro',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Mirim Doce',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Modelo',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Mondaí',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Monte Carlo',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Monte Castelo',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Morro da Fumaça',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Morro Grande',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Navegantes',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Nova Erechim',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Nova Itaberaba',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Nova Trento',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Nova Veneza',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Novo Horizonte',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Orleans',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Otacílio Costa',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Ouro',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Ouro Verde',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Paial',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Painel',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Palhoça',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Palma Sola',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Palmeira',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Palmitos',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Papanduva',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Paraíso',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Passo de Torres',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Passos Maia',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Paulo Lopes',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Pedras Grandes',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Penha',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Peritiba',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Petrolândia',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Piçarras',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Pinhalzinho',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Pinheiro Preto',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Piratuba',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Planalto Alegre',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Pomerode',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Ponte Alta',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Ponte Alta do Norte',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Ponte Serrada',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Porto Belo',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Porto União',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Pouso Redondo',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Praia Grande',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Presidente Castelo Branco',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Presidente Getúlio',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Presidente Nereu',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Princesa',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Quilombo',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Rancho Queimado',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Rio das Antas',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Rio do Campo',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Rio do Oeste',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Rio do Sul',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Rio dos Cedros',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Rio Fortuna',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Rio Negrinho',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Rio Rufino',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Riqueza',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Rodeio',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Romelândia',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Salete',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Saltinho',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Salto Veloso',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Sangão',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Santa Cecília',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Santa Helena',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Santa Rosa de Lima',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Santa Rosa do Sul',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Santa Terezinha',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Santa Terezinha do Progresso',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Santiago do Sul',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Santo Amaro da Imperatriz',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'São Bento do Sul',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'São Bernardino',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'São Bonifácio',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'São Carlos',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'São Cristovão do Sul',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'São Domingos',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'São Francisco do Sul',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'São João Batista',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'São João do Itaperiú',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'São João do Oeste',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'São João do Sul',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'São Joaquim',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'São José',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'São José do Cedro',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'São José do Cerrito',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'São Lourenço do Oeste',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'São Ludgero',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'São Martinho',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'São Miguel da Boa Vista',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'São Miguel do Oeste',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'São Pedro de Alcântara',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Saudades',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Schroeder',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Seara',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Serra Alta',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Siderópolis',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Sombrio',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Sul Brasil',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Taió',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Tangará',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Tigrinhos',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Tijucas',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Timbé do Sul',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Timbó',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Timbó Grande',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Três Barras',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Treviso',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Treze de Maio',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Treze Tílias',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Trombudo Central',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Tubarão',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Tunápolis',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Turvo',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'União do Oeste',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Urubici',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Urupema',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Urussanga',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Vargeão',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Vargem',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Vargem Bonita',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Vidal Ramos',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Videira',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Vitor Meireles',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Witmarsum',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Xanxerê',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Xavantina',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Xaxim',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Zortéa',
                'state_id' => State::where('internal', 24)->first()->id,
            ],
            [
                'name' => 'Adamantina',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Adolfo',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Aguaí',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Águas da Prata',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Águas de Lindóia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Águas de Santa Bárbara',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Águas de São Pedro',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Agudos',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Alambari',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Alfredo Marcondes',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Altair',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Altinópolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Alto Alegre',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Alumínio',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Álvares Florence',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Álvares Machado',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Álvaro de Carvalho',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Alvinlândia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Americana',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Américo Brasiliense',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Américo de Campos',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Amparo',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Analândia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Andradina',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Angatuba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Anhembi',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Anhumas',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Aparecida',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Aparecida d`Oeste',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Apiaí',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Araçariguama',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Araçatuba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Araçoiaba da Serra',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Aramina',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Arandu',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Arapeí',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Araraquara',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Araras',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Arco-Íris',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Arealva',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Areias',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Areiópolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ariranha',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Artur Nogueira',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Arujá',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Aspásia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Assis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Atibaia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Auriflama',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Avaí',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Avanhandava',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Avaré',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Bady Bassitt',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Balbinos',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Bálsamo',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Bananal',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Barão de Antonina',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Barbosa',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Bariri',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Barra Bonita',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Barra do Chapéu',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Barra do Turvo',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Barretos',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Barrinha',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Barueri',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Bastos',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Batatais',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Bauru',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Bebedouro',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Bento de Abreu',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Bernardino de Campos',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Bertioga',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Bilac',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Birigui',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Biritiba-Mirim',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Boa Esperança do Sul',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Bocaina',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Bofete',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Boituva',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Bom Jesus dos Perdões',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Bom Sucesso de Itararé',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Borá',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Boracéia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Borborema',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Borebi',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Botucatu',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Bragança Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Braúna',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Brejo Alegre',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Brodowski',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Brotas',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Buri',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Buritama',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Buritizal',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cabrália Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cabreúva',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Caçapava',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cachoeira Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Caconde',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cafelândia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Caiabu',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Caieiras',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Caiuá',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cajamar',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cajati',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cajobi',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cajuru',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Campina do Monte Alegre',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Campinas',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Campo Limpo Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Campos do Jordão',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Campos Novos Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cananéia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Canas',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cândido Mota',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cândido Rodrigues',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Canitar',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Capão Bonito',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Capela do Alto',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Capivari',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Caraguatatuba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Carapicuíba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cardoso',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Casa Branca',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cássia dos Coqueiros',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Castilho',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Catanduva',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Catiguá',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cedral',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cerqueira César',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cerquilho',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cesário Lange',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Charqueada',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Chavantes',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Clementina',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Colina',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Colômbia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Conchal',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Conchas',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cordeirópolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Coroados',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Coronel Macedo',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Corumbataí',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cosmópolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cosmorama',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cotia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cravinhos',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cristais Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cruzália',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cruzeiro',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cubatão',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Cunha',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Descalvado',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Diadema',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Dirce Reis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Divinolândia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Dobrada',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Dois Córregos',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Dolcinópolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Dourado',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Dracena',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Duartina',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Dumont',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Echaporã',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Eldorado',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Elias Fausto',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Elisiário',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Embaúba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Embu',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Embu-Guaçu',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Emilianópolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Engenheiro Coelho',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Espírito Santo do Pinhal',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Espírito Santo do Turvo',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Estiva Gerbi',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Estrela d`Oeste',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Estrela do Norte',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Euclides da Cunha Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Fartura',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Fernando Prestes',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Fernandópolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Fernão',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ferraz de Vasconcelos',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Flora Rica',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Floreal',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Flórida Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Florínia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Franca',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Francisco Morato',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Franco da Rocha',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Gabriel Monteiro',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Gália',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Garça',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Gastão Vidigal',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Gavião Peixoto',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'General Salgado',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Getulina',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Glicério',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Guaiçara',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Guaimbê',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Guaíra',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Guapiaçu',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Guapiara',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Guará',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Guaraçaí',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Guaraci',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Guarani d`Oeste',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Guarantã',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Guararapes',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Guararema',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Guaratinguetá',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Guareí',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Guariba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Guarujá',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Guarulhos',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Guatapará',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Guzolândia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Herculândia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Holambra',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Hortolândia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Iacanga',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Iacri',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Iaras',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ibaté',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ibirá',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ibirarema',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ibitinga',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ibiúna',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Icém',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Iepê',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Igaraçu do Tietê',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Igarapava',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Igaratá',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Iguape',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ilha Comprida',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ilha Solteira',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ilhabela',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Indaiatuba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Indiana',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Indiaporã',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Inúbia Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ipaussu',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Iperó',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ipeúna',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ipiguá',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Iporanga',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ipuã',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Iracemápolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Irapuã',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Irapuru',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itaberá',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itaí',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itajobi',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itaju',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itanhaém',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itaóca',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itapecerica da Serra',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itapetininga',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itapeva',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itapevi',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itapira',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itapirapuã Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itápolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itaporanga',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itapuí',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itapura',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itaquaquecetuba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itararé',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itariri',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itatiba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itatinga',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itirapina',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itirapuã',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itobi',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itu',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Itupeva',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ituverava',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Jaborandi',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Jaboticabal',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Jacareí',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Jaci',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Jacupiranga',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Jaguariúna',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Jales',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Jambeiro',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Jandira',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Jardinópolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Jarinu',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Jaú',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Jeriquara',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Joanópolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'João Ramalho',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'José Bonifácio',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Júlio Mesquita',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Jumirim',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Jundiaí',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Junqueirópolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Juquiá',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Juquitiba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Lagoinha',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Laranjal Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Lavínia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Lavrinhas',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Leme',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Lençóis Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Limeira',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Lindóia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Lins',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Lorena',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Lourdes',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Louveira',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Lucélia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Lucianópolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Luís Antônio',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Luiziânia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Lupércio',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Lutécia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Macatuba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Macaubal',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Macedônia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Magda',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Mairinque',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Mairiporã',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Manduri',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Marabá Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Maracaí',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Marapoama',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Mariápolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Marília',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Marinópolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Martinópolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Matão',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Mauá',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Mendonça',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Meridiano',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Mesópolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Miguelópolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Mineiros do Tietê',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Mira Estrela',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Miracatu',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Mirandópolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Mirante do Paranapanema',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Mirassol',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Mirassolândia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Mococa',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Mogi das Cruzes',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Mogi Guaçu',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Moji Mirim',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Mombuca',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Monções',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Mongaguá',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Monte Alegre do Sul',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Monte Alto',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Monte Aprazível',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Monte Azul Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Monte Castelo',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Monte Mor',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Monteiro Lobato',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Morro Agudo',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Morungaba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Motuca',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Murutinga do Sul',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Nantes',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Narandiba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Natividade da Serra',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Nazaré Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Neves Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Nhandeara',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Nipoã',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Nova Aliança',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Nova Campina',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Nova Canaã Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Nova Castilho',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Nova Europa',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Nova Granada',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Nova Guataporanga',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Nova Independência',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Nova Luzitânia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Nova Odessa',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Novais',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Novo Horizonte',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Nuporanga',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ocauçu',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Óleo',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Olímpia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Onda Verde',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Oriente',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Orindiúva',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Orlândia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Osasco',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Oscar Bressane',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Osvaldo Cruz',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ourinhos',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ouro Verde',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ouroeste',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pacaembu',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Palestina',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Palmares Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Palmeira d`Oeste',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Palmital',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Panorama',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Paraguaçu Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Paraibuna',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Paraíso',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Paranapanema',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Paranapuã',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Parapuã',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pardinho',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pariquera-Açu',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Parisi',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Patrocínio Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Paulicéia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Paulínia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Paulistânia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Paulo de Faria',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pederneiras',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pedra Bela',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pedranópolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pedregulho',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pedreira',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pedrinhas Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pedro de Toledo',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Penápolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pereira Barreto',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pereiras',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Peruíbe',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Piacatu',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Piedade',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pilar do Sul',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pindamonhangaba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pindorama',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pinhalzinho',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Piquerobi',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Piquete',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Piracaia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Piracicaba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Piraju',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pirajuí',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pirangi',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pirapora do Bom Jesus',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pirapozinho',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pirassununga',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Piratininga',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pitangueiras',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Planalto',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Platina',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Poá',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Poloni',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pompéia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pongaí',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pontal',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pontalinda',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pontes Gestal',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Populina',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Porangaba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Porto Feliz',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Porto Ferreira',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Potim',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Potirendaba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pracinha',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pradópolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Praia Grande',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Pratânia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Presidente Alves',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Presidente Bernardes',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Presidente Epitácio',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Presidente Prudente',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Presidente Venceslau',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Promissão',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Quadra',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Quatá',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Queiroz',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Queluz',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Quintana',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Rafard',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Rancharia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Redenção da Serra',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Regente Feijó',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Reginópolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Registro',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Restinga',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ribeira',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ribeirão Bonito',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ribeirão Branco',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ribeirão Corrente',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ribeirão do Sul',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ribeirão dos Índios',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ribeirão Grande',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ribeirão Pires',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ribeirão Preto',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Rifaina',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Rincão',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Rinópolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Rio Claro',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Rio das Pedras',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Rio Grande da Serra',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Riolândia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Riversul',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Rosana',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Roseira',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Rubiácea',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Rubinéia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Sabino',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Sagres',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Sales',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Sales Oliveira',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Salesópolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Salmourão',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Saltinho',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Salto',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Salto de Pirapora',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Salto Grande',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Sandovalina',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santa Adélia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santa Albertina',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santa Bárbara d`Oeste',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santa Branca',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santa Clara d`Oeste',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santa Cruz da Conceição',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santa Cruz da Esperança',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santa Cruz das Palmeiras',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santa Cruz do Rio Pardo',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santa Ernestina',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santa Fé do Sul',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santa Gertrudes',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santa Isabel',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santa Lúcia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santa Maria da Serra',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santa Mercedes',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santa Rita d`Oeste',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santa Rita do Passa Quatro',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santa Rosa de Viterbo',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santa Salete',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santana da Ponte Pensa',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santana de Parnaíba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santo Anastácio',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santo André',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santo Antônio da Alegria',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santo Antônio de Posse',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santo Antônio do Aracanguá',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santo Antônio do Jardim',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santo Antônio do Pinhal',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santo Expedito',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santópolis do Aguapeí',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Santos',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São Bento do Sapucaí',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São Bernardo do Campo',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São Caetano do Sul',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São Carlos',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São Francisco',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São João da Boa Vista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São João das Duas Pontes',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São João de Iracema',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São João do Pau d`Alho',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São Joaquim da Barra',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São José da Bela Vista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São José do Barreiro',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São José do Rio Pardo',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São José do Rio Preto',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São José dos Campos',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São Lourenço da Serra',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São Luís do Paraitinga',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São Manuel',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São Miguel Arcanjo',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São Paulo',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São Pedro',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São Pedro do Turvo',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São Roque',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São Sebastião',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São Sebastião da Grama',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São Simão',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'São Vicente',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Sarapuí',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Sarutaiá',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Sebastianópolis do Sul',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Serra Azul',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Serra Negra',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Serrana',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Sertãozinho',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Sete Barras',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Severínia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Silveiras',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Socorro',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Sorocaba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Sud Mennucci',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Sumaré',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Suzanápolis',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Suzano',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Tabapuã',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Tabatinga',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Taboão da Serra',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Taciba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Taguaí',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Taiaçu',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Taiúva',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Tambaú',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Tanabi',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Tapiraí',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Tapiratiba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Taquaral',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Taquaritinga',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Taquarituba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Taquarivaí',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Tarabai',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Tarumã',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Tatuí',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Taubaté',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Tejupá',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Teodoro Sampaio',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Terra Roxa',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Tietê',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Timburi',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Torre de Pedra',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Torrinha',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Trabiju',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Tremembé',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Três Fronteiras',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Tuiuti',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Tupã',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Tupi Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Turiúba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Turmalina',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ubarana',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ubatuba',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Ubirajara',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Uchoa',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'União Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Urânia',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Uru',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Urupês',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Valentim Gentil',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Valinhos',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Valparaíso',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Vargem',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Vargem Grande do Sul',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Vargem Grande Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Várzea Paulista',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Vera Cruz',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Vinhedo',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Viradouro',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Vista Alegre do Alto',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Vitória Brasil',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Votorantim',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Votuporanga',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Zacarias',
                'state_id' => State::where('internal', 26)->first()->id,
            ],
            [
                'name' => 'Amparo de São Francisco',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Aquidabã',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Aracaju',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Arauá',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Areia Branca',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Barra dos Coqueiros',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Boquim',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Brejo Grande',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Campo do Brito',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Canhoba',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Canindé de São Francisco',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Capela',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Carira',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Carmópolis',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Cedro de São João',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Cristinápolis',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Cumbe',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Divina Pastora',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Estância',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Feira Nova',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Frei Paulo',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Gararu',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'General Maynard',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Gracho Cardoso',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Ilha das Flores',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Indiaroba',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Itabaiana',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Itabaianinha',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Itabi',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Itaporanga d`Ajuda',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Japaratuba',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Japoatã',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Lagarto',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Laranjeiras',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Macambira',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Malhada dos Bois',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Malhador',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Maruim',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Moita Bonita',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Monte Alegre de Sergipe',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Muribeca',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Neópolis',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Nossa Senhora Aparecida',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Nossa Senhora da Glória',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Nossa Senhora das Dores',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Nossa Senhora de Lourdes',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Nossa Senhora do Socorro',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Pacatuba',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Pedra Mole',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Pedrinhas',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Pinhão',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Pirambu',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Poço Redondo',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Poço Verde',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Porto da Folha',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Propriá',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Riachão do Dantas',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Riachuelo',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Ribeirópolis',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Rosário do Catete',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Salgado',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Santa Luzia do Itanhy',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Santa Rosa de Lima',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Santana do São Francisco',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Santo Amaro das Brotas',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'São Cristóvão',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'São Domingos',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'São Francisco',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'São Miguel do Aleixo',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Simão Dias',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Siriri',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Telha',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Tobias Barreto',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Tomar do Geru',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Umbaúba',
                'state_id' => State::where('internal', 25)->first()->id,
            ],
            [
                'name' => 'Abreulândia',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Aguiarnópolis',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Aliança do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Almas',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Alvorada',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Ananás',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Angico',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Aparecida do Rio Negro',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Aragominas',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Araguacema',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Araguaçu',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Araguaína',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Araguanã',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Araguatins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Arapoema',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Arraias',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Augustinópolis',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Aurora do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Axixá do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Babaçulândia',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Bandeirantes do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Barra do Ouro',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Barrolândia',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Bernardo Sayão',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Bom Jesus do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Brasilândia do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Brejinho de Nazaré',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Buriti do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Cachoeirinha',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Campos Lindos',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Cariri do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Carmolândia',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Carrasco Bonito',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Caseara',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Centenário',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Chapada da Natividade',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Chapada de Areia',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Colinas do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Colméia',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Combinado',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Conceição do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Couto de Magalhães',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Cristalândia',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Crixás do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Darcinópolis',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Dianópolis',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Divinópolis do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Dois Irmãos do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Dueré',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Esperantina',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Fátima',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Figueirópolis',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Filadélfia',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Formoso do Araguaia',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Fortaleza do Tabocão',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Goianorte',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Goiatins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Guaraí',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Gurupi',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Ipueiras',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Itacajá',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Itaguatins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Itapiratins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Itaporã do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Jaú do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Juarina',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Lagoa da Confusão',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Lagoa do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Lajeado',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Lavandeira',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Lizarda',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Luzinópolis',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Marianópolis do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Mateiros',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Maurilândia do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Miracema do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Miranorte',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Monte do Carmo',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Monte Santo do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Muricilândia',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Natividade',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Nazaré',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Nova Olinda',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Nova Rosalândia',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Novo Acordo',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Novo Alegre',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Novo Jardim',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Oliveira de Fátima',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Palmas',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Palmeirante',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Palmeiras do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Palmeirópolis',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Paraíso do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Paranã',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Pau d`Arco',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Pedro Afonso',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Peixe',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Pequizeiro',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Pindorama do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Piraquê',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Pium',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Ponte Alta do Bom Jesus',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Ponte Alta do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Porto Alegre do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Porto Nacional',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Praia Norte',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Presidente Kennedy',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Pugmil',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Recursolândia',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Riachinho',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Rio da Conceição',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Rio dos Bois',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Rio Sono',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Sampaio',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Sandolândia',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Santa Fé do Araguaia',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Santa Maria do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Santa Rita do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Santa Rosa do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Santa Tereza do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Santa Terezinha do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'São Bento do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'São Félix do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'São Miguel do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'São Salvador do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'São Sebastião do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'São Valério da Natividade',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Silvanópolis',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Sítio Novo do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Sucupira',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Taguatinga',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Taipas do Tocantins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Talismã',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Tocantínia',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Tocantinópolis',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Tupirama',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Tupiratins',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Wanderlândia',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
            [
                'name' => 'Xambioá',
                'state_id' => State::where('internal', 27)->first()->id,
            ],
        ];

        foreach ($cities as $city) {
            try {
                City::create($city);
            } catch (Exception $e) {
                // do nothing
            }
        }
    }
}
