<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->content() as $value):
            Product::create([
                'title'  => $value['title' ],
                'amount' => $value['amount'],
            ]);
        endforeach;
    }

    public function content()
    {
        return [
            [
                'title' => 'Placa de Vídeo EVGA GeForce RTX 3060 XC GAMING, 12..',
                'amount' => 5499.90,
            ],
            [
                'title' => 'Smartphone Samsung Galaxy M12 64GB, 4GB RAM, Octa-..',
                'amount' => 1079.10,
            ],
            [
                'title' => 'SSD Kingston A400, 240GB, SATA, Leitura 500MB/s, G..',
                'amount' => 279.90,
            ],
            [
                'title' => 'Console Microsoft Xbox Series S, 512GB, Branco - R..',
                'amount' => 2659.90,
            ],
            [
                'title' => 'Teclado Mecânico Gamer HyperX Mars, RGB, Switch Ou..',
                'amount' => 599.90,
            ],
            [
                'title' => 'Soundbar JBL Cinema SB130, 2.0 Canais, Bluetooth, ..',
                'amount' => 854.05,
            ],
            [
                'title' => 'Pc Gamer Smart Pc Fortnite Smt81085 Intel I5, 8gb,..',
                'amount' => 3800.29,
            ],
            [
                'title' => 'Smart TV 43\' Full HD LG, Conversor Digital, 3 HDMI..',
                'amount' => 1999.00,
            ],
            [
                'title' => 'Processador Intel Core i7-10700K, Cache 16MB, 3.8G..',
                'amount' => 2199.90,
            ],
            [
                'title' => 'Nintendo Switch 32GB, 1x Joycon, Neon Azul/Vermelh',
                'amount' => 2499.90,
            ],
            [
                'title' => 'Notebook Gamer Gigabyte G5 Intel Core i5-10500H, 1',
                'amount' => 10399.90,
            ],
            [
                'title' => 'Monitor Gamer LED Ozone 24.5´ Full HD, 144Hz, 1ms',
                'amount' => 1229.00,
            ],
            [
                'title' => 'Smart TV Samsung 55\' 4K QLED 55Q60A, Tela Infinita',
                'amount' => 4699.00,
            ],
            [
                'title' => 'Notebook Acer Aspire 5 Intel Core i5-1035G1, 8GB, 256GB SSD, 15.6\'',
                'amount' => 3639.90,
            ],
            [
                'title' => 'HD Seagate BarraCuda, 1TB, 3.5\', SATA - ST1000DM01',
                'amount' => 279.90,
            ],
            [
                'title' => 'Smartphone Samsung Galaxy S20+, 128GB, 64MP, Tela ..',
                'amount' => 3699.90,
            ],
            [
                'title' => 'Soundbar LG 500W RMS, DTS X, Dolby Atmos, Bluetoot..',
                'amount' => 2799.00,
            ],
            [
                'title' => 'Cadeira Gamer Corsair T2 Road Warrior, Preto - CF-..',
                'amount' => 1899.90,
            ],
            [
                'title' => 'Notebook Positivo Motion Gray C41TEi Intel Celeron..',
                'amount' => 1689.90,
            ],
            [
                'title' => 'Mouse Gamer Lenovo Legion M300, RGB, 8 Botões, 800..',
                'amount' => 229.90,
            ],
            [
                'title' => 'Console PlayStation 4 Mega Pack V18, 1TB, Ghost of..',
                'amount' => 2499.90,
            ],
            [
                'title' => 'Aspirador de Pó Vertical Sem Fio Electrolux ERG24N..',
                'amount' => 699.90,
            ],
            [
                'title' => 'Fone de Ouvido Sem Fio Sennheiser HD 350BT, Blueto..',
                'amount' => 399.00,
            ],
            [
                'title' => 'Microsoft 365 Business Apps, Digital para Download..',
                'amount' => 568.90,
            ],
            [
                'title' => 'Fritadeira sem Óleo Arno Airfry Ultra, 4.2L, 127V,..',
                'amount' => 579.90,
            ],
            [
                'title' => 'Webcam Full HD Logitech C922 Pro Stream com Microf..',
                'amount' => 559.90,
            ],
            [
                'title' => 'Teclado e Mouse Logitech MK345 Sem Fio 1000DPI Pre..',
                'amount' => 179.90,
            ],
            [
                'title' => 'Macbook Apple Pro Retina Intel Core i9, 16GB, SSD',
                'amount' => 27999.90,
            ],
            [
                'title' => 'Gabinete Gamer Corsair Carbide Series Spec Delta R..',
                'amount' => 369.90,
            ],
            [
                'title' => 'Notebook Gamer Aspire Nitro 5, Intel Core I5 - 930',
                'amount' => 5199.00,
            ],
            [
                'title' => 'Projetor Epson 3500 Lumens XGA PowerLite X39',
                'amount' => 3799.99,
            ],
            [
                'title' => 'All In One LG Intel Celeron N4100, 4GB, 500GB, 21\'',
                'amount' => 2219.90,
            ],
            [
                'title' => 'Cadeira Gamer Corsair TC60 Fabric, Preta - CF-9010',
                'amount' => 1599.90,
            ],
            [
                'title' => 'Kit de Chaves MD9 com 31 peças - 5623',
                'amount' => 15.00,
            ],
            [
                'title' => 'Lanterna de LED Elgin, 8 em 1, com Chaves Integradas - 48LLF8I10000',
                'amount' => 17.00,
            ],
            [
                'title' => 'TORNEIRA SLIM 4T 5500W BANCADA PTA 220V',
                'amount' => 209.90,
            ],
            [
                'title' => 'Serra Copo Diamantada 13mm Stamaco 13mm',
                'amount' => 44.92,
            ],
            [
                'title' => 'Serra Copo Com Prolongador 80mm Stamaco 80mm',
                'amount' => 287.32,
            ],
            [
                'title' => 'Serra Copo Com Prolongador 90mm Stamaco 90mm',
                'amount' => 23.52,
            ],
            [
                'title' => 'Serra Copo Bi-Metal 95mm Stamaco 95mm',
                'amount' => 125.33,
            ],
            [
                'title' => 'Cafeteira Elétrica Mondial Dolce Arome Thermo, 24 Xícaras, Jarra Térmica, 800W, 110V, Inox',
                'amount' => 199.00,
            ],
            [
                'title' => 'Cafeteira Elétrica Britânia BCF36I, 30 Xícaras, 750W, 220V, Preto/Inox',
                'amount' => 149.00,
            ],
            [
                'title' => 'Cafeteira Philco Multicápsula, 600ml, 1450W, 110V - PCF19VP',
                'amount' => 599.00,
            ],
            [
                'title' => 'Drive ASUS Gravador Externo CD/DVD ZenDrive U7M, Ultra-Slim, 2 M-DISC, Windows e MAC',
                'amount' => 169.90,
            ],
            [
                'title' => 'Drive ASUS Gravador Externo Stylish Diamond de CD/DVD e Leitor de CD/DVD 8X s/ Base',
                'amount' => 155.90,
            ],
            [
                'title' => 'Placa-Mãe ASRock B450M Steel Legend, AMD AM4, mATX, DDR4 - 90-MXB9Y0-A0BAYZ',
                'amount' => 714.90,
            ],
            [
                'title' => 'Placa-Mãe Asus EX-B460M-V5, Intel LGA 1200, mATX, DDR4',
                'amount' => 699.90,
            ],
            [
                'title' => 'Placa-Mãe Gigabyte GA-AB350M-DS3H V2, AMD AM4, mATX, DDR4',
                'amount' => 579.90,
            ],
            [
                'title' => 'Placa-Mãe Gigabyte B450M DS3H V2, AMD B450, mATX, DDR4, (rev. 1.0)',
                'amount' => 619.90,
            ],
            [
                'title' => 'Placa-Mãe Asus Prime B450M Gaming/BR, AMD AM4, mATX, DDR4',
                'amount' => 579.90,
            ],
            [
                'title' => 'Placa-Mãe Asus TUF H310M-Plus Gaming/BR, Intel LGA 1151, mATX, DDR4',
                'amount' => 929.90,
            ],
            [
                'title' => 'Placa-Mãe Gigabyte B450M DS3H, AMD, mATX, DDR4',
                'amount' => 659.90,
            ],
            [
                'title' => 'Placa-Mãe Asus TUF Gaming X570-PLUS/BR,  AMD AM4, ATX, DDR4',
                'amount' => 1452.90,
            ],
            [
                'title' => 'Jogo Rockstar Games Grand Theft Auto V - PS3',
                'amount' => 119.89,
            ],
            [
                'title' => 'Game Pro Evolution Soccer 2013 - PS3',
                'amount' => 29.89,
            ],
            [
                'title' => 'Adega Easy Cooler, 18 Garrafas, 110V - 4092910003',
                'amount' => 1289.00,
            ],
            [
                'title' => 'Adega Easy Cooler, 28 Garrafas, 110V - 4092910005',
                'amount' => 1599.00,
            ],
            [
                'title' => 'Adega Easy Cooler, 12 Garrafas, 110V - 4092910040',
                'amount' => 1549.00,
            ],
            [
                'title' => 'Adega Climatizada Brastemp, 12 Garrafas, 127V - BZC12BEANA',
                'amount' => 899.00,
            ],
            [
                'title' => 'Suporte Para 03 Tvs Com Porta Pc Ou Console',
                'amount' => 1595.00,
            ],
            [
                'title' => 'Suporte Extreme Simracing SPRO p/ Volantes Simuladores, Comp c Logitech, Fanatec e Thrustmaster',
                'amount' => 659.00,
            ],
            [
                'title' => 'Suporte Extreme Simracing SXT V2 p/ Volantes Simuladores, Comp c Logitech, Fanatec e Thrustmaster',
                'amount' => 989.00,
            ],
        ];
    }
}
