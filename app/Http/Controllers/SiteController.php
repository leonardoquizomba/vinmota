<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $data['frases'] = array(
            array('frase' => 'Cozinhar é uma arte, mas toda arte exige saber algo sobre as técnicas e materiais.', 'autor' => 'Nathan Myhrvold'),
            array('frase' => 'Dê a um homem comida, e ele poderá comer por um dia. Dê um emprego a um homem, e ele só poderá comer por 30 minutos no intervalo.', 'autor' => 'Lev L. Spiro'),
            array('frase' => 'Encontre algo pelo qual se apaixone e mantenha um interesse tremendo.', 'autor' => 'Julia Child'),
            array('frase' => 'Nunca trabalhe antes do café da manhã; se você tiver que trabalhar antes do café da manhã, tome seu café da manhã primeiro.', 'autor' => 'Josh Billings')
        );
        $data['destaques'] = array(
            array(
                array('nome' => 'T-Bone', 'preco' => '0.00kz', 'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'img' => asset('images/1.2Grelhados/T-Bone.jpg'), 'posicao' => 'arrow-left', 'class' => ''),
                array('nome' => 'Picanha', 'preco' => '0.00kz', 'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'img' => asset('images/1.2Grelhados/Picanha.jpg'), 'posicao' => 'arrow-right', 'class' => 'fh5co-reversed')
            ),
            array(
                array('nome' => 'Arroz de Legumes', 'preco' => '0.00kz', 'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'img' => asset('images/1.3Guarnicoes/ArrozdeLegumes.jpg'), 'posicao' => 'arrow-right', 'class' => 'fh5co-reversed'),
                array('nome' => 'Salada Mista', 'preco' => '0.00kz', 'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'img' => asset('images/1.3Guarnicoes/SaladaMista.png'), 'posicao' => 'arrow-left', 'class' => '')
            ),
            array(
                array('nome' => 'Carpaccio de Salmão', 'preco' => '0.00kz', 'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'img' => asset('images/2Sushi/CarpaccioeKimuches/CarpacciodeSalmao.jpg'), 'posicao' => 'arrow-left', 'class' => ''),
                array('nome' => 'Combinado de 50 peças', 'preco' => '0.00kz', 'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'img' => asset('images/2Sushi/Combinado/Combinadode50pecas.jpg'), 'posicao' => 'arrow-right', 'class' => 'fh5co-reversed')
            ),
            array(
                array('nome' => 'Yakisoba mista, camarão', 'preco' => '0.00kz', 'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'img' => asset('images/2Sushi/MassaYakisoba/Yakisobamistacamarao6000.jpg'), 'posicao' => 'arrow-right', 'class' => 'fh5co-reversed'),
                array('nome' => 'Bife a Portuguesa', 'preco' => '0.00kz', 'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'img' => asset('images/3.1Carnes/BifeaPortuguesa.jpg'), 'posicao' => 'arrow-left', 'class' => '')
            )
        );
        $data['cardapios'] = array(
            array(
                'nome' => 'Churrasqueira',
                'icon' => '',
                'lista' => array(
                    array('nome' => 'Frango Inteiro', 'descricao' => 'Frango Inteiro', 'preco' => '3500', 'image' => asset('images/res_img_5.jpg')),
                    array('nome' => 'Happy family XL Misto', 'descricao' => '2 Frangos, 4 picanha, 6 linguiça, 3 entremeadas, 4 arroz, 2 feijão preto,
					3 batata, 2 refrigerantes de 1,5 Litros  Para 6 a 8 pessoas', 'preco' => '32500', 'image' => asset('images/res_img_5.jpg')),
                    array('nome' => 'Happy family', 'descricao' => '2 frangos, 3 linguiças, 2 batata frita, 2 arroz , 1 feijão preto, 3 banana frita ,
					1 refrigerante 1,5L', 'preco' => '13500', 'image' => asset('images/res_img_5.jpg')),
                    array('nome' => 'Meio frango', 'descricao' => 'Meio frango', 'preco' => '2000', 'image' => asset('images/res_img_5.jpg')),
                    array('nome' => 'T-Bone na brasa', 'descricao' => 'Com batata frita doce ou rena e salada.', 'preco' => '10500', 'image' => asset('images/res_img_5.jpg')),
                    array('nome' => 'Picanha na Brasa', 'descricao' => 'Picanha na brasa, batata frita, arroz, feijão preto, banana panada, farofa.', 'preco' => '8000', 'image' => asset('images/res_img_5.jpg')),
                    array('nome' => 'Grelhado Misto na Brasa', 'descricao' => 'Picanha, Entremeada, 1/4 de Frango, Linguiça na Brasa, Arroz, Batata frita, Feijão preto, Banana panada.', 'preco' => '8500', 'image' => asset('images/res_img_5.jpg')),
                    array('nome' => 'Costeletas/ Febras na brasa', 'descricao' => 'Com arroz de legumes e batata frita', 'preco' => '5500', 'image' => asset('images/res_img_5.jpg')),
                    array('nome' => 'Entrecosto na Brasa', 'descricao' => '2 Entrecosto na brasa com batata frita e salada ou com a massa linguine Obs: Imagem Ilustrativa.', 'preco' => '7000', 'image' => asset('images/res_img_5.jpg')),
                    array('nome' => 'Entremeadas na brasa com molho de limão', 'descricao' => 'Com batata frita', 'preco' => '6500', 'image' => asset('images/res_img_5.jpg')),
                    array('nome' => 'Alheiras de Mirandela na brasa', 'descricao' => 'Alheiras de Mirandela com Batata frita e Ovo estrelado.', 'preco' => '5950', 'image' => asset('images/res_img_5.jpg'))
                ),
            ),
            array(
                'nome' => 'Peixe e mariscos',
                'icon' => '',
                'lista' => array(
                    array('nome' => 'Caril de gambas', 'descricao' => 'Com arroz branco', 'preco' => '9500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Gambas ao alho', 'descricao' => 'Batata frita', 'preco' => '9500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Choco na brasa', 'descricao' => 'Com batata doce ou rena cozida,legumes e molho verde', 'preco' => '8500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Posta de bacalhau na brasa', 'descricao' => 'Batata doce ou rena cozida, legumes alagado em azeite', 'preco' => '9500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Bife Atum na brasa com molho de maracujá', 'descricao' => 'batata doce ou rena cozida e legumes', 'preco' => '8500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Posta de salmão', 'descricao' => 'Batata doce ou rena cozida, legumes', 'preco' => '9500', 'image' => asset('images/res_img_4.jpg')),
                ),
            ),
            array(
                'nome' => 'Doses Low Cost',
                'icon' => '',
                'lista' => array(
                    array('nome' => 'Picanha', 'descricao' => '2 tiras', 'preco' => '3900', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Entrecosto', 'descricao' => '2 tiras', 'preco' => '3500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Entremeada', 'descricao' => '2 tiras', 'preco' => '3000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Costeletas na brasa', 'descricao' => '2 costeletas', 'preco' => '2500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Frango frito com molho rosé', 'descricao' => '', 'preco' => '2500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => '2 linguiças', 'descricao' => '', 'preco' => '1400', 'image' => asset('images/res_img_4.jpg')),
                )
            ),
            array(
                'nome' => 'Bifes',
                'icon' => '',
                'lista' => array(
                    array('nome' => 'Bife à Casa', 'descricao' => 'Lombinho com Batata frita e Ovo estrelado.', 'preco' => '7200', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Bife à portuguesa', 'descricao' => 'Lombinho com Batata frita às rodelas e bacon.', 'preco' => '7500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Bifão á Vin Mota', 'descricao' => 'Lombinho fresco, Batata frita, Salada, Enroladinhos de Bacon, Fiambre.', 'preco' => '8000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Bife a champgnion', 'descricao' => 'Com batata frita doce ou normal,arroz branco', 'preco' => '7500', 'image' => asset('images/res_img_4.jpg')),
                )
            ),
            array(
                'nome' => 'Massas Yakissoba',
                'icon' => '',
                'lista' => array(
                    array('nome' => 'Massa Yakissoba Camarao', 'descricao' => '', 'preco' => '5500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Massas Yakissoba Frango', 'descricao' => '', 'preco' => '4850', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Massa Yakissoba de Carne', 'descricao' => '', 'preco' => '5300', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Massa Yakissoba Mista', 'descricao' => '', 'preco' => '6000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Massa Yakissoba de Legumes', 'descricao' => '', 'preco' => '3850', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Massa linguine de tinta de choco de camarao', 'descricao' => '', 'preco' => '5500', 'image' => asset('images/res_img_4.jpg'))
                )
            ),
            array(
                'nome' => 'Snacks/Petiscos',
                'icon' => '',
                'lista' => array(
                    array('nome' => 'Tosta de frango+batata frita', 'descricao' => '', 'preco' => '2500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Prego no pão do lombo', 'descricao' => '', 'preco' => '3800', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Picapau do lombo', 'descricao' => '', 'preco' => '4200', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Frango a passarinho', 'descricao' => '', 'preco' => '2800', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Chouriço caseiro', 'descricao' => '', 'preco' => '4000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Choco frito', 'descricao' => '', 'preco' => '4100', 'image' => asset('images/res_img_4.jpg'))
                )
            ),
            array(
                'nome' => 'Guarnições',
                'icon' => '',
                'lista' => array(
                    array('nome' => 'Batata frita', 'descricao' => 'Dose de Batata frita.', 'preco' => '850', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Batata doce frita', 'descricao' => 'Dose de Batata doce frita.', 'preco' => '850', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Arroz branco', 'descricao' => 'Dose de Arroz branco.', 'preco' => '850', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Arroz de Legumes', 'descricao' => 'Dose de Arroz de Legumes.', 'preco' => '850', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Feijão Preto', 'descricao' => 'Dose de Feijão preto.', 'preco' => '850', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Salada Mista', 'descricao' => 'Dose de salada mista.', 'preco' => '850', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Legumes salteados', 'descricao' => 'Dose de legumes salteados.', 'preco' => '850', 'image' => asset('images/res_img_4.jpg'))
                )
            ),
            array(
                'nome' => 'Sobremesas',
                'icon' => '',
                'lista' => array(
                    array('nome' => 'Pudim', 'descricao' => 'Dose de Pudim.', 'preco' => '1100', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Mousse de Chocolate', 'descricao' => 'Dose de Mousse de Chocolate.', 'preco' => '1600', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Mousse de Maracujá', 'descricao' => 'Dose de Mousse de Maracujá.', 'preco' => '1600', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Bolo de chocolate', 'descricao' => '', 'preco' => '1600', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Mousse de bolacha com natas', 'descricao' => '', 'preco' => '1600', 'image' => asset('images/res_img_4.jpg'))
                )
            ),
            array(
                'nome' => 'Pequeno Almoço',
                'icon' => '',
                'lista' => array(
                    array('nome' => 'Omelete Simples', 'descricao' => '', 'preco' => '1500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Omelete composta', 'descricao' => '', 'preco' => '2500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Ovo Estrelado', 'descricao' => '', 'preco' => '450', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Sandes Mista', 'descricao' => '', 'preco' => '950', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Tosta mista', 'descricao' => '', 'preco' => '1000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Galao', 'descricao' => '', 'preco' => '600', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Croissant Misto', 'descricao' => '', 'preco' => '1500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Pao de Leite', 'descricao' => '', 'preco' => '1500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Ovos mexidos', 'descricao' => 'Com farinheira', 'preco' => '2800', 'image' => asset('images/res_img_4.jpg'))
                )
            ),
            array(
                'nome' => 'Bebidas Diversas',
                'icon' => '',
                'lista' => array(
                    array('nome' => 'Sumo natural tropical', 'descricao' => '', 'preco' => '2000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Sumo Natural de Laranja', 'descricao' => '', 'preco' => '1900', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Sumo natural de Ananas/ Gengibre/Hortela', 'descricao' => '', 'preco' => '2000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Sumo natural de limão', 'descricao' => '', 'preco' => '2000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Guarana', 'descricao' => '', 'preco' => '1299', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Coca-Cola', 'descricao' => '', 'preco' => '600', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Fanta', 'descricao' => '', 'preco' => '600', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Sumol', 'descricao' => '', 'preco' => '600', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Sprite', 'descricao' => '', 'preco' => '600', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Compal', 'descricao' => '', 'preco' => '600', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Agua Pura', 'descricao' => '', 'preco' => '400', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Caipirinha de Limao', 'descricao' => '', 'preco' => '2000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Caipirinha de Maracuja', 'descricao' => '', 'preco' => '2000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Caipirinha tropical', 'descricao' => '', 'preco' => '2000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Agua das Pedras', 'descricao' => '', 'preco' => '1400', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Agua Castelo', 'descricao' => '', 'preco' => '1400', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Heineken', 'descricao' => '', 'preco' => '1499', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Cuca preta', 'descricao' => '', 'preco' => '500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Cuca Loira', 'descricao' => '', 'preco' => '600', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Cuca ruiva', 'descricao' => '', 'preco' => '500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Dry Gin e Tonic Gordons', 'descricao' => '', 'preco' => '850', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Smirnoff Preta', 'descricao' => '', 'preco' => '800', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Booster', 'descricao' => '', 'preco' => '800', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Agua Tonica Schweppes Lata', 'descricao' => '', 'preco' => '500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Red Bull', 'descricao' => '', 'preco' => '1300', 'image' => asset('images/res_img_4.jpg'))
                )
            ),
            array(
                'nome' => 'Wraps de salmão',
                'icon' => '',
                'lista' => array(
                    array('nome' => 'Wrap de salmão', 'descricao' => '', 'preco' => '6500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Wrap de peixe atum', 'descricao' => '', 'preco' => '6200', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Wrap misto', 'descricao' => '', 'preco' => '7000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Wrap de frango', 'descricao' => '', 'preco' => '5500', 'image' => asset('images/res_img_4.jpg'))
                )
            ),
            array(
                'nome' => 'Combinado de Sushi',
                'icon' => '',
                'lista' => array(
                    array('nome' => 'Combinado de 20 Peças Variadas', 'descricao' => 'Combinado de 20 peças variadas a sugestão do chefe.', 'preco' => '19000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Combinado de 40 Peças Variadas', 'descricao' => 'Combinado de 40 peças variadas a sugestão do chefe.', 'preco' => '34000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Combinado de 40 Peças (Só Salmão)', 'descricao' => 'Combinado de 40 peças de só Salmão a sugestão do chefe.', 'preco' => '40000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Combinado de 16 Peças (Só Salmão)', 'descricao' => '', 'preco' => '16000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Combinado de 20 Peças (Só Salmão)', 'descricao' => '', 'preco' => '25000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Combinado de 50 Peças (Só Salmão)', 'descricao' => '', 'preco' => '50000', 'image' => asset('images/res_img_4.jpg')),
                )
            ),
            array(
                'nome' => 'Hots (Rolos fritos)',
                'icon' => '',
                'lista' => array(
                    array('nome' => 'Hot Explosão (6 Peças)', 'descricao' => 'Hot explosão (6 peças).', 'preco' => '5000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Hot Fray (6 Peças)', 'descricao' => 'Hot Fray (6 peças).', 'preco' => '4000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Hot Roll Spice Tuna', 'descricao' => '', 'preco' => '7000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Hot Philadelphia (6 Peças)', 'descricao' => '', 'preco' => '4500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Hot Philadelphia (12 Peças)', 'descricao' => '', 'preco' => '8500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Banana Sushi', 'descricao' => '', 'preco' => '3850', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Hot Explosão (12 Peças)', 'descricao' => '', 'preco' => '9500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Hot Fray (12 Peças)', 'descricao' => '', 'preco' => '8000', 'image' => asset('images/res_img_4.jpg')),
                )
            ),
            array(
                'nome' => 'Carpaccio e kimuches',
                'icon' => '',
                'lista' => array(
                    array('nome' => 'Kimuche de Salmao', 'descricao' => '', 'preco' => '6200', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Kimuche misto', 'descricao' => '', 'preco' => '6000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Carpaccio Vin Mota', 'descricao' => '', 'preco' => '7000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Carpaccio Salmao', 'descricao' => '', 'preco' => '7800', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Carpaccio de Peixe Branco', 'descricao' => '', 'preco' => '4800', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Sopa Miso', 'descricao' => '', 'preco' => '4200', 'image' => asset('images/res_img_4.jpg'))
                )
            ),
            array(
                'nome' => 'Sashimis',
                'icon' => '',
                'lista' => array(
                    array('nome' => 'Sashimi 25 pcs variado', 'descricao' => '', 'preco' => '25000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Sashimi 15 pcs braseado salmão', 'descricao' => '', 'preco' => '23000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Sashimi 15 pcs só salmão', 'descricao' => '', 'preco' => '19000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Sashimi Atum 6 pcs', 'descricao' => '', 'preco' => '4000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Sashimi peixe branco', 'descricao' => '', 'preco' => '3500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Sashimi de salmão 5 pcs', 'descricao' => '', 'preco' => '5000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Sashimi 25 pcs so salmao', 'descricao' => '', 'preco' => '28000', 'image' => asset('images/res_img_4.jpg'))
                )
            ),
            array(
                'nome' => 'Tempura',
                'icon' => '',
                'lista' => array(
                    array('nome' => 'Tempura de camarao', 'descricao' => '', 'preco' => '6300', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Tempura misto', 'descricao' => '', 'preco' => '7000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Tempura de legumes', 'descricao' => '', 'preco' => '2800', 'image' => asset('images/res_img_4.jpg'))
                )
            ),
            array(
                'nome' => 'Uramakis',
                'icon' => '',
                'lista' => array(
                    array('nome' => 'Huramaki California (6 pcs)', 'descricao' => 'Enrolado frio com Recheio de Salmao, Abacate e Pepino com Semente s�samo por cima.', 'preco' => '8000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Huramaki Ebiten', 'descricao' => 'Enrolado frio com Recheio de Camarao panado, Queijo Philadelphia, Cebolinha e Salmao por cima.', 'preco' => '8200', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Huramaki Philadelphia', 'descricao' => 'Enrolado frio com Recheio de Salmao, Queijo Philadelphia, Cebolinho e Ovas ou Caviar por cima.', 'preco' => '7200', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Huramaki Skin 6pcs', 'descricao' => 'Enrolado frio com Recheio de Pele skin frita, Queijo Philadelphia e Cebolinho.', 'preco' => '4000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Huramakis Spice Tuna 6pcs', 'descricao' => '', 'preco' => '8000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Ebi panado', 'descricao' => '', 'preco' => '8000', 'image' => asset('images/res_img_4.jpg'))
                )
            ),
            array(
                'nome' => 'Maki Roll',
                'icon' => '',
                'lista' => array(
                    array('nome' => 'Salmao Maki', 'descricao' => '', 'preco' => '3000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Tuna Maki', 'descricao' => '', 'preco' => '2850', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Kappa Maki', 'descricao' => '', 'preco' => '2000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Futomaki 4 pcs', 'descricao' => '', 'preco' => '4800', 'image' => asset('images/res_img_4.jpg'))
                )
            ),
            array(
                'nome' => 'Niguiri Sushi',
                'icon' => '',
                'lista' => array(
                    array('nome' => 'Niguiri de salmao (5 pcs)', 'descricao' => '', 'preco' => '5000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Niguiri de Atum 5 pcs', 'descricao' => 'Niguiri de atum.', 'preco' => '4500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Niguiri Skin', 'descricao' => '', 'preco' => '3500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Niguiri de Camarao', 'descricao' => '', 'preco' => '5000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Niguiri peixe branco', 'descricao' => '', 'preco' => '3500', 'image' => asset('images/res_img_4.jpg')),
                )
            ),
            array(
                'nome' => 'Temakis',
                'icon' => '',
                'lista' => array(
                    array('nome' => 'Temaki de Salmao', 'descricao' => 'Cone de sushi com recheio de salmao, queijo philadelphia e cebolinho.', 'preco' => '5300', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Temaki de Atum', 'descricao' => 'Cone de sushi com recheio de atum e cebolinho.', 'preco' => '4000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Temaki California', 'descricao' => 'Cone de sushi com recheio de abacate, delicias do mar, pepino, manga e semente de s�samo.', 'preco' => '5500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Temaki Skin', 'descricao' => 'Cone de sushi com recheio de skin, queijo philadelphia e cebolinho.', 'preco' => '3800', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Temaki de Camarao Panado', 'descricao' => '', 'preco' => '6100', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Temaki Hot', 'descricao' => '', 'preco' => '3500', 'image' => asset('images/res_img_4.jpg')),
                )
            ),
            array(
                'nome' => 'Gunkan',
                'icon' => '',
                'lista' => array(
                    array('nome' => 'Gunkan Salmao (4 Pcs)', 'descricao' => '', 'preco' => '6500', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Gunkan de camarao', 'descricao' => 'Salmao enrolado com recheio de camarao, queijo e cebolinho.', 'preco' => '6000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Gunkan de pepino', 'descricao' => 'Enrolado de pepino com recheios variados.', 'preco' => '2450', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Gunkan de Atum', 'descricao' => 'Com recheio de atum e kimuche.', 'preco' => '4000', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Gunkan Peixe Branco', 'descricao' => '', 'preco' => '3800', 'image' => asset('images/res_img_4.jpg')),
                    array('nome' => 'Gunkan Braseado', 'descricao' => '', 'preco' => '6300', 'image' => asset('images/res_img_4.jpg'))
                )
            )
        );
        return view('site.home', $data);
    }
}
