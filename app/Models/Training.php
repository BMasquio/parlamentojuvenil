<?php

namespace App\Models;

use Illuminate\Support\Collection;

class Training
{
    public static function find($id)
    {
        return static::all()
            ->where('id', $id)
            ->first();
    }

    public static function all()
    {
        return Collection::make([
            2019 => [
                [
                    'name' => 'Aula 1',

                    'id' => '1',

                    'relations' => [
                        'videos' => [
                            [
                                'id' => 'video.1',
                                'title' => 'Aula 1 - Parlamento Juvenil',
                                'type' => 'video',
                                'lead' =>
                                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.',
                                'thumb-url' =>
                                    '/templates/2017/images/capacitacao/capa-aula1.png',
                                'video-url' =>
                                    'https://www.youtube.com/embed/IGnJOIsg7Ac',
                                'document-url' =>
                                    '/templates/2017/images/capacitacao/capa-aula1.png',
                            ],
                        ],

                        'documents' => [
                            [
                                'id' => 'document.1',
                                'title' =>
                                    '01 - Introdução aos Poderes Constituídos e ao Processo Legislativo',
                                'type' => 'document',
                                'lead' =>
                                    'Consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.',
                                'thumb-url' =>
                                    '/pj2017/images/capacitacao/apostila01.jpg',
                                'video-url' =>
                                    'https://www.youtube.com/embed/watch?v=Hq5QYQsA-Dc',
                                'document-url' =>
                                    '/files/apps/parlamentojuvenil/site/2019/downloads/apostila2019-parteI.pdf',
                            ],
                        ],

                        'quiz' => [
                            [
                                'id' => 'quiz.1.001',
                                'type' => 'quiz',
                                'questions' => [
                                    [
                                        'question' =>
                                            'O Poder Público é constituído por',
                                        'answers' => [
                                            'a' =>
                                                'Poder Legislativo, Poder Executivo e Poder Judiciário.',
                                            'b' =>
                                                'Poder Executivo, Poder Administrativo e Poder de Polícia.',
                                            'c' =>
                                                'Poder de Polícia, Poder Legislativo e Poder Executivo.',
                                            'd' =>
                                                'Poder Executivo, Poder Legislativo e Poder Administrativo.',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.1.002',
                                        'type' => 'quiz',
                                        'question' =>
                                            'A Federação Brasileira é dividida em:',
                                        'answers' => [
                                            'a' =>
                                                'União, Distritos e Estados.',
                                            'b' =>
                                                'Estados, Municípios e Cidades.',
                                            'c' =>
                                                'União, Estados e Municípios.',
                                            'd' =>
                                                'Federação, Estados e Município.',
                                        ],
                                        'correct' => 'c',
                                    ],

                                    [
                                        'id' => 'quiz.1.003',
                                        'type' => 'quiz',
                                        'question' =>
                                            'O Projeto de Lei serve para:',
                                        'answers' => [
                                            'a' =>
                                                'regular as matérias de competência do Poder Legislativo, com a sanção do Governador do Estado.',
                                            'b' =>
                                                'regular matérias fiscais da Câmara Municipal.',
                                            'c' =>
                                                'Estabelecer novas regras de tramitação legislativa.',
                                            'd' =>
                                                'Estabelecer procedimentos das comissões.',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.1.004',
                                        'type' => 'quiz',
                                        'question' =>
                                            'O que é maioria absoluta:',
                                        'answers' => [
                                            'a' =>
                                                'Primeiro número inteiro após a metade dos presentes.',
                                            'b' =>
                                                'Primeiro número inteiro após a metade do universo trabalhado.',
                                            'c' =>
                                                'Maioria qualificada de 2/3.',
                                            'd' =>
                                                'Maioria qualificada de 2/5.',
                                        ],
                                        'correct' => 'b',
                                    ],

                                    [
                                        'id' => 'quiz.1.005',
                                        'type' => 'quiz',
                                        'question' =>
                                            'Após um projeto de lei ser aprovado pela plenário ele será encaminhado ao:',
                                        'answers' => [
                                            'a' => 'Arquivo;',
                                            'b' =>
                                                'Governador para sanção/veto.',
                                            'c' => 'Comissões.',
                                            'd' => 'Publicação.',
                                        ],
                                        'correct' => 'b',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],

                [
                    'name' => 'Aula 2',

                    'id' => '2',

                    'relations' => [
                        'videos' => [
                            [
                                'id' => 'video.1',
                                'title' => 'Aula 2 - Parlamento Juvenil',
                                'type' => 'video',
                                'lead' => '',
                                'thumb-url' =>
                                    '/templates/2017/images/capacitacao/capa-aula2.png',
                                'video-url' =>
                                    'https://www.youtube.com/embed/Z00oWa_1I9g',
                                'document-url' =>
                                    '/templates/2017/images/capacitacao/capa-aula2.png',
                            ],
                        ],

                        'documents' => [
                            [
                                'id' => 'document.1',
                                'title' =>
                                    '02 - Introdução à Técnica Legislativa',
                                'type' => 'document',
                                'lead' =>
                                    'Consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.',
                                'thumb-url' =>
                                    '/pj2017/images/capacitacao/apostila02.jpg',
                                'video-url' =>
                                    'https://www.youtube.com/embed/c-H6p0UFHPo',
                                'document-url' =>
                                    '/files/apps/parlamentojuvenil/site/2019/downloads/apostila2019-parteII.pdf',
                            ],
                        ],

                        'quiz' => [
                            [
                                'id' => 'quiz.2.001',
                                'type' => 'quiz',
                                'questions' => [
                                    [
                                        'question' =>
                                            'Qual item não pode ser considerado uma proposição legislativa:',
                                        'answers' => [
                                            'a' =>
                                                'Proposta de emenda à constituição;',
                                            'b' => 'Projeto de Lei;',
                                            'c' => 'Projeto de Resolução;',
                                            'd' => 'Projeto de Portaria.',
                                        ],
                                        'correct' => 'd',
                                    ],

                                    [
                                        'id' => 'quiz.2.002',
                                        'type' => 'quiz',
                                        'question' =>
                                            'Após o protocolo e a publicação da proposição, ela será encaminhada para:',
                                        'answers' => [
                                            'a' => 'Comissões.',
                                            'b' => 'Governador.',
                                            'c' => 'Secretários de Estado.',
                                            'd' => 'Presidente da ALERJ.',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.2.003',
                                        'type' => 'quiz',
                                        'question' =>
                                            'Uma proposição deve ser redigida com:',
                                        'answers' => [
                                            'a' =>
                                                'clareza, em termos explícitos e concisos.',
                                            'b' =>
                                                'linguagem local, gírias e expressões dúbias.',
                                            'c' =>
                                                'fotos e imagens das pessoas.',
                                            'd' => 'caneta preta ou azul.',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.2.004',
                                        'type' => 'quiz',
                                        'question' =>
                                            'Um projeto de lei é composto de:',
                                        'answers' => [
                                            'a' =>
                                                'Parte preliminar, corpo da lei e parte final.',
                                            'b' => 'Início meio e fim.',
                                            'c' => 'Capítulos e versículos.',
                                            'd' => 'Entrada e saída.',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.2.005',
                                        'type' => 'quiz',
                                        'question' =>
                                            'Todo Projeto de Lei deverá conter, exceto:',
                                        'answers' => [
                                            'a' => 'Justificativa.',
                                            'b' => 'Parte preliminar.',
                                            'c' => 'Corpo da lei.',
                                            'd' => 'Testemunhas.',
                                        ],
                                        'correct' => 'd',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],

            2017 => [
                [
                    'name' => 'Aula 1',

                    'id' => '1',

                    'relations' => [
                        'videos' => [
                            [
                                'id' => 'video.1',
                                'title' => 'Aula 1 - Parlamento Juvenil',
                                'type' => 'video',
                                'lead' =>
                                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.',
                                'thumb-url' =>
                                    '/files/pj2017/images/video-aula1.jpg',
                                'video-url' =>
                                    'https://www.youtube.com/embed/Hq5QYQsA-Dc',
                                'document-url' =>
                                    '/files/pj2017/images/video-aula1.jpg',
                            ],
                        ],

                        'documents' => [
                            [
                                'id' => 'document.1',
                                'title' =>
                                    '01 - Introdução aos Poderes Constituídos e ao Processo Legislativo',
                                'type' => 'document',
                                'lead' =>
                                    'Consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.',
                                'thumb-url' =>
                                    '/pj2017/images/capacitacao/apostila01.jpg',
                                'video-url' =>
                                    'https://www.youtube.com/embed/watch?v=Hq5QYQsA-Dc',
                                'document-url' =>
                                    '/files/apps/parlamentojuvenil/site/2017/downloads/capacitacao-pj-2017-aula01.pdf',
                            ],
                        ],

                        'quiz' => [
                            [
                                'id' => 'quiz.1.001',
                                'type' => 'quiz',
                                'questions' => [
                                    [
                                        'question' =>
                                            'O Poder Público é constituído por',
                                        'answers' => [
                                            'a' =>
                                                'Poder Legislativo, Poder Executivo e Poder Judiciário.',
                                            'b' =>
                                                'Poder Executivo, Poder Administrativo e Poder de Polícia.',
                                            'c' =>
                                                'Poder de Polícia, Poder Legislativo e Poder Executivo.',
                                            'd' =>
                                                'Poder Executivo, Poder Legislativo e Poder Administrativo.',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.1.002',
                                        'type' => 'quiz',
                                        'question' =>
                                            'A Federação Brasileira é dividida em:',
                                        'answers' => [
                                            'a' =>
                                                'União, Distritos e Estados.',
                                            'b' =>
                                                'Estados, Municípios e Cidades.',
                                            'c' =>
                                                'União, Estados e Municípios.',
                                            'd' =>
                                                'Federação, Estados e Município.',
                                        ],
                                        'correct' => 'c',
                                    ],

                                    [
                                        'id' => 'quiz.1.003',
                                        'type' => 'quiz',
                                        'question' =>
                                            'O Projeto de Lei serve para:',
                                        'answers' => [
                                            'a' =>
                                                'regular as matérias de competência do Poder Legislativo, com a sanção do Governador do Estado.',
                                            'b' =>
                                                'regular matérias fiscais da Câmara Municipal.',
                                            'c' =>
                                                'Estabelecer novas regras de tramitação legislativa.',
                                            'd' =>
                                                'Estabelecer procedimentos das comissões.',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.1.004',
                                        'type' => 'quiz',
                                        'question' =>
                                            'O que é maioria absoluta:',
                                        'answers' => [
                                            'a' =>
                                                'Primeiro número inteiro após a metade dos presentes.',
                                            'b' =>
                                                'Primeiro número inteiro após a metade do universo trabalhado.',
                                            'c' =>
                                                'Maioria qualificada de 2/3.',
                                            'd' =>
                                                'Maioria qualificada de 2/5.',
                                        ],
                                        'correct' => 'b',
                                    ],

                                    [
                                        'id' => 'quiz.1.005',
                                        'type' => 'quiz',
                                        'question' =>
                                            'Após um projeto de lei ser aprovado pela plenário ele será encaminhado ao:',
                                        'answers' => [
                                            'a' => 'Arquivo;',
                                            'b' =>
                                                'Governador para sanção/veto.',
                                            'c' => 'Comissões.',
                                            'd' => 'Publicação.',
                                        ],
                                        'correct' => 'b',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],

                [
                    'name' => 'Aula 2',

                    'id' => '2',

                    'relations' => [
                        'videos' => [
                            [
                                'id' => 'video.1',
                                'title' => 'Aula 2 - Parlamento Juvenil',
                                'type' => 'video',
                                'lead' => '',
                                'thumb-url' =>
                                    '/files/pj2017/images/video-aula2.jpg',
                                'video-url' =>
                                    'https://www.youtube.com/embed/F1oSdfhaXl4',
                                'document-url' =>
                                    '/files/pj2017/images/video-aula2.jpg',
                            ],
                        ],

                        'documents' => [
                            [
                                'id' => 'document.1',
                                'title' =>
                                    '02 - Introdução à Técnica Legislativa',
                                'type' => 'document',
                                'lead' =>
                                    'Consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.',
                                'thumb-url' =>
                                    '/pj2017/images/capacitacao/apostila02.jpg',
                                'video-url' =>
                                    'https://www.youtube.com/embed/c-H6p0UFHPo',
                                'document-url' =>
                                    '/files/apps/parlamentojuvenil/site/2017/downloads/capacitacao-pj-2017-aula02.pdf',
                            ],
                        ],

                        'quiz' => [
                            [
                                'id' => 'quiz.2.001',
                                'type' => 'quiz',
                                'questions' => [
                                    [
                                        'question' =>
                                            'Qual item não pode ser considerado uma proposição legislativa:',
                                        'answers' => [
                                            'a' =>
                                                'Proposta de emenda à constituição;',
                                            'b' => 'Projeto de Lei;',
                                            'c' => 'Projeto de Resolução;',
                                            'd' => 'Projeto de Portaria.',
                                        ],
                                        'correct' => 'd',
                                    ],

                                    [
                                        'id' => 'quiz.2.002',
                                        'type' => 'quiz',
                                        'question' =>
                                            'Após o protocolo e a publicação da proposição, ela será encaminhada para:',
                                        'answers' => [
                                            'a' => 'Comissões.',
                                            'b' => 'Governador.',
                                            'c' => 'Secretários de Estado.',
                                            'd' => 'Presidente da ALERJ.',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.2.003',
                                        'type' => 'quiz',
                                        'question' =>
                                            'Uma proposição deve ser redigida com:',
                                        'answers' => [
                                            'a' =>
                                                'clareza, em termos explícitos e concisos.',
                                            'b' =>
                                                'linguagem local, gírias e expressões dúbias.',
                                            'c' =>
                                                'fotos e imagens das pessoas.',
                                            'd' => 'caneta preta ou azul.',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.2.004',
                                        'type' => 'quiz',
                                        'question' =>
                                            'Um projeto de lei é composto de:',
                                        'answers' => [
                                            'a' =>
                                                'Parte preliminar, corpo da lei e parte final.',
                                            'b' => 'Início meio e fim.',
                                            'c' => 'Capítulos e versículos.',
                                            'd' => 'Entrada e saída.',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.2.005',
                                        'type' => 'quiz',
                                        'question' =>
                                            'Todo Projeto de Lei deverá conter, exceto:',
                                        'answers' => [
                                            'a' => 'Justificativa.',
                                            'b' => 'Parte preliminar.',
                                            'c' => 'Corpo da lei.',
                                            'd' => 'Testemunhas.',
                                        ],
                                        'correct' => 'd',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],

            2016 => [
                [
                    'name' => 'Aula 1',

                    'id' => '2016.1',

                    'relations' => [
                        'videos' => [
                            [
                                'id' => 'video.1',
                                'title' => 'Aula 1- Parlamento Juvenil',
                                'type' => 'video',
                                'lead' =>
                                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.',
                                'thumb-url' =>
                                    '/files/pj2016/images/video-aula1.jpg',
                                'video-url' =>
                                    'https://www.youtube.com/embed/RgrZeM9CK7Q',
                                'document-url' =>
                                    '/files/pj2016/images/video-aula1.jpg',
                            ],
                        ],

                        'documents' => [
                            [
                                'id' => 'document.1',
                                'title' =>
                                    '01 - Introdução aos Poderes Constituídos e ao Processo Legislativo',
                                'type' => 'document',
                                'lead' =>
                                    'Consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.',
                                'thumb-url' =>
                                    '/pj2016/images/capacitacao/apostila01.jpg',
                                'video-url' =>
                                    'https://www.youtube.com/watch?v=RgrZeM9CK7Q',
                                'document-url' =>
                                    '/files/apps/parlamentojuvenil/site/2016/capacitation/ApresentacaoParlamentoJuvenil2016-ParteI.pdf',
                            ],
                        ],

                        'quiz' => [
                            [
                                'id' => 'quiz.1.001',
                                'type' => 'quiz',
                                'questions' => [
                                    [
                                        'question' =>
                                            'Quais são os três Poderes da República Federativa do Brasil?',
                                        'answers' => [
                                            'a' =>
                                                'Administrativo, Executivo e Parlamentar.',
                                            'b' =>
                                                'Legislativo, Executivo e Administrativo.',
                                            'c' =>
                                                'Judiciário, Executivo e Parlamentar.',
                                            'd' =>
                                                'Executivo, Judiciário e Legislativo. ',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.1.002',
                                        'type' => 'quiz',
                                        'question' =>
                                            'O Deputado Estadual possui competência para legislar sobre:',
                                        'answers' => [
                                            'a' => 'Salário de servidores.',
                                            'b' => 'Polícia Militar.',
                                            'c' => 'Criação de cargos.',
                                            'd' => 'Educação e cultura.',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.1.003',
                                        'type' => 'quiz',
                                        'question' =>
                                            'Qual destas não se enquadra no conceito de proposição legislativa:',
                                        'answers' => [
                                            'a' => 'Projeto de Lei.',
                                            'b' => 'Projeto de Resolução.',
                                            'c' =>
                                                'Projeto de Indicação Legislativa.',
                                            'd' => 'Atas.',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.1.004',
                                        'type' => 'quiz',
                                        'question' =>
                                            'Não serão admitidas proposições:',
                                        'answers' => [
                                            'a' =>
                                                'Que contenham expressões ofensivas.',
                                            'b' =>
                                                'Que seja redigidas de forma concisa. ',
                                            'c' =>
                                                'Que sejam redigidas de forma coesa.',
                                            'd' =>
                                                'Que sejam redigidas em termos explícitos e claros. ',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.1.005',
                                        'type' => 'quiz',
                                        'question' =>
                                            'Qual a sequência básica correta do processo legislativo:',
                                        'answers' => [
                                            'a' =>
                                                'Criação da proposição - protocolo - sanção - tramitação pelas comissões - aprovação',
                                            'b' =>
                                                'Publicação - discussão - criação da proposição - votação - sanção',
                                            'c' =>
                                                'Criação da proposição - protocolo - tramitação pelas comissões - inclusão na ordem do dia - Votação',
                                            'd' =>
                                                'Discussão - publicação - criação da proposição - iniciativa',
                                        ],
                                        'correct' => 'a',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],

                [
                    'name' => 'Aula 2',

                    'id' => '2016.2',

                    'relations' => [
                        'videos' => [
                            [
                                'id' => 'video.1',
                                'title' => 'Aula 2 - Parlamento Juvenil',
                                'type' => 'video',
                                'lead' => '',
                                'thumb-url' =>
                                    '/files/pj2016/images/video-aula2.jpg',
                                'video-url' =>
                                    'https://www.youtube.com/embed/_sgtPTi-1z4',
                                'document-url' =>
                                    '/files/pj2016/images/video-aula2.jpg',
                            ],
                        ],

                        'documents' => [
                            [
                                'id' => 'document.1',
                                'title' =>
                                    '02 - Introdução à Técnica Legislativa',
                                'type' => 'document',
                                'lead' =>
                                    'Consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.',
                                'thumb-url' =>
                                    '/pj2016/images/capacitacao/apostila02.jpg',
                                'video-url' =>
                                    'https://www.youtube.com/embed/c-H6p0UFHPo',
                                'document-url' =>
                                    '/files/apps/parlamentojuvenil/site/2016/capacitation/ApresentacaoParlamentoJuvenil2016-ParteII.pdf',
                            ],
                        ],

                        'quiz' => [
                            [
                                'id' => 'quiz.2.001',
                                'type' => 'quiz',
                                'questions' => [
                                    [
                                        'question' =>
                                            'O que é proposição legislativa?',
                                        'answers' => [
                                            'a' =>
                                                'Proposição é toda matéria sujeita à deliberação da Assembleia ou de suas comissões, conforme o caso.',
                                            'b' =>
                                                'Proposição é todo texto arquivado pelo Poder Legislativo. ',
                                            'c' =>
                                                'Proposição é todo ato do Executivo que objetiva a criação de direitos. ',
                                            'd' =>
                                                'Proposição é todo andamento processual aprovado na Assembleia Legislativa.',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.2.002',
                                        'type' => 'quiz',
                                        'question' =>
                                            'Qual a divisão obrigatória das proposições legislativas?',
                                        'answers' => [
                                            'a' =>
                                                'Artigos, periódicos e seções.',
                                            'b' =>
                                                'Linhas, parágrafos e artigos.',
                                            'c' =>
                                                'Artigos, parágrafos e incisos.',
                                            'd' =>
                                                'Incisos, artigos e numeros. ',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.2.003',
                                        'type' => 'quiz',
                                        'question' =>
                                            'Como são divididas as leis?',
                                        'answers' => [
                                            'a' =>
                                                'Parte preliminar - Corpo da Lei - Parte Final',
                                            'b' => 'Parte inicial - Meio - Fim',
                                            'c' =>
                                                'Início - Capítulo - Encerramento',
                                            'd' =>
                                                'Endereçamento - Preâmbulo - Encerramento',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.2.004',
                                        'type' => 'quiz',
                                        'question' => 'O que é Ementa?',
                                        'answers' => [
                                            'a' =>
                                                'É o mesmo que artigo de lei.',
                                            'b' =>
                                                'É a parte de encerramento da lei.',
                                            'c' =>
                                                'É o resumo da ideia do Projeto de Lei.',
                                            'd' => 'É o número da lei. ',
                                        ],
                                        'correct' => 'a',
                                    ],

                                    [
                                        'id' => 'quiz.2.005',
                                        'type' => 'quiz',
                                        'question' =>
                                            'O que deve conter na Parte Final de um Projeto de Lei?',
                                        'answers' => [
                                            'a' =>
                                                'Cláusula de Vigência e Revogação.',
                                            'b' =>
                                                'Cláusula de abertura e inovação.',
                                            'c' => 'Vigência e protocolo.',
                                            'd' => 'Cláusula de encerramento. ',
                                        ],
                                        'correct' => 'a',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ]);
    }

    public static function byYear($year)
    {
        $values = self::all()[get_current_year($year)];

        foreach ($values as $key => $value) {
            $values[$key]['year'] = $year;
        }

        return Collection::make($values);
    }
}
