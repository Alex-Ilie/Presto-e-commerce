<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'User',
             'email' => 'test@example.com',
             'password' => Hash::make('12345678')
         ]);

        $categories =

        ['Elettronica', 'Abbigliamento', 'Arredamento', 'Motori', 'Lavoro', 'Sport', 'Giardinaggio', 'Hobby', 'Infanzia', 'Per animali',];

        foreach($categories as $name){
            Category::create([
                'name'=>$name
            ]);
        }

        $products = [
            [
                'title' => 'iPhone 13 Pro 256GB',
                'price' => '899.99',
                'description' => "Display Super Retina XDR da 6,1' con ProMotion per un’esperienza ancora più fluida e reattiva Modalità Cinema con    profondità di campo smart e spostamento automatico della messa a fuoco nei video
                                  Nuovo sistema di fotocamere Pro da 12MP (teleobiettivo, grandangolo e ultra-grandangolo) con scanner LiDAR, zoom ottico 6x (estensione totale), fotografia macro, Stili fotografici, video ProRes, Smart HDR 4, modalità Notte, Apple ProRAW, registrazione video HDR a 4K con Dolby Vision
                                  Fotocamera anteriore TrueDepth da 12MP con modalità Notte e registrazione video HDR a 4K con Dolby Vision
                                  Chip A15 Bionic per prestazioni fulminee
                                  Fino a 22 ore di riproduzione video
                                  Robusto design con Ceramic Shield
                                  Resistenza all’acqua di grado IP68, la migliore del settore
                                  5G per download velocissimi e streaming ad alta qualità1
                                  iOS 15 e le sue nuove funzioni per fare ancora di più con iPhone6
                                  Compatibilità con gli accessori MagSafe: aggancio rapido e ricarica wireless più veloce",
                'category_id' => 1,
                'user_id' => 1,
                'img' =>'\imgsProdotti\Elettronica\iPhone\iphone.jpg'

            ],

            [
                'title' => 'Air Jordan 1 Mid',
                'price' => '129.99',
                'description' => "Ispirata alla AJ1 originale, Air Jordan 1 Mid offre agli appassionati la possibilità di seguire le orme di MJ. Colori attuali e materiali essenziali e classici aggiornano un design leggendario con un tocco innovativo.

                                  Vantaggi

                                  L'unità Air-Sole offre ammortizzazione e leggerezza.
                                  Tomaia in pelle vera e sintetica per struttura e resistenza.
                                  Battistrada in gomma piena per una trazione ideale su un'ampia varietà di superfici.
                                  Linguetta in tessuto per morbidezza e comfort.
                                  Colore mostrato in foto: Bianco/Ossidiana/Oro metallizzato
                                  Stile: 554724-174",
                'category_id' => 2,
                'user_id' => 1,
                'img' =>'\imgsProdotti\Abbigliamento\AirJordan\jordan.webp'

            ],

            [
                'title' => 'Divano angolare 4 posti in tessuto',
                'price' => '2349',
                'description' => "Per tutti coloro che stanno cercando un nuovo divano, che ne dite del nostro nuovo modello Melva? Il suo look moderno, la seduta profonda e gli ampi braccioli garantiscono un alto livello di comfort. Buono a sapersi: è disponibile in molti colori e forme!

                                  - Divano ad angolo a 4 posti
                                  - Sedile profondo
                                  - Capacità di carico del sedile: max. 260 kg
                                  - Il rivestimento non è rimovibile

                                  La chaise-longue si trova sul lato sinistro quando si è davanti al divano

                                  Dopo aver montato i piedini e aver collegato gli elementi del divano, il divano può essere utilizzato immediatamente.
                                  I piedi si trovano all'interno del corpo del divano in prossimità della cerniera sul lato inferiore.",
                'category_id' => 3,
                'user_id' => 1,
                'img'=>'\imgsProdotti\Arredamento\divano\Divano-angolare-4-posti-in-tessuto-greige-Melva.jpg'

            ],

            [
                'title' => 'Alfa Romeo 8C',
                'price' => '299.000',
                'description' => "Alfa Romeo 8C è una vettura che nacque come semplice Concept Car al Salone di Francoforte del 2003, ma che dopo un entusiasmo incredibile del pubblico diventò realtà nel 2007. Alfa Romeo 8C è realmente una scultura su ruote, una vettura dove ogni linea è studiata per essere bellissima e unica, riportando nel XXI secolo linee e proporzioni senza tempo. Nonostante poi all’atto pratico non fosse così speciale alla guida, sviluppata a sei mani tra Maserati, Alfa Romeo e Dallara, Alfa Romeo 8C è stata un successo commerciale e mediatico eccezionale. Il suo stile ha segnato il nuovo corso stilistico di Alfa Romeo, il suo successo ha aiutato a spingere le vendite delle auto più tradizionali del Biscione ed oggi, a 15 anni dalla sua nascita, è una delle automobili moderne più ricercate e amate.",
                'category_id' => 4,
                'user_id' => 1,
                'img' =>'\imgsProdotti\Motori\AlfaRomeo8C\8C.webp'
            ],
            [
                'title' => 'Web Developer',
                'price' => '100/h',
                'description' => "Produce una propria suite di prodotti legati al mondo dei punti vendita del mercato italiano, soprattutto nel mondo del food, non food generico, parchi commerciali. Sviluppa in ambienti standard Microsoft .NET, sia in ambito WEB che client-server.

                                  Stiamo cercando:

                                  sviluppatore web Senior : figura che abbia acquisito capacità di operare in autonomia, che abbia conoscenze acquisite sui requisiti tecnici richiesti, e che sia predisposto o abbia esperienze dirette di coordinamento di altre risorse. Sarà elemento di valutazione ulteriore l’esperienza maturata nello sviluppo di software in ambito Retail Italiano e/o Internazionale.
                                  Requisiti di esperienza e/o conoscenza richiesti per i seguenti ambienti/componenti :

                                  HTML, CSS, Javascript, React JS, .NET Core, Entity Framework Core, Database Server SQL Server

                                  Contratto di lavoro: Tempo pieno

                                  Orario:

                                  Dal lunedì al venerdì
                                  Straordinari
                                  Sede di lavoro: Un'unica sede",
                'category_id' => 5,
                'user_id' => 1,
                'img' =>'no-image.jpg'

            ],

            [
                'title' => 'Set snowboard Stylus',
                'price' => '380',
                'description' => "Lo snowboard Stylus ha un guscio in legno rinforzato in fibra di vetro leggero, flessibile e robusto. È incollato con una colla Super Sap, un'alternativa più ecologica alla resina epossidica, una colla tossica solitamente utilizzata nella produzione di snowboard. Ecco uno snowboard con una costruzione di qualità, proposto a un prezzo piuttosto ragionevole e che permette di progredire senza problemi in tutta la località.",
                'category_id' => 6,
                'user_id' => 1,
                'img'=>'\imgsProdotti\Sport\Snowboard\snowboard3.webp'

            ],

            [
                'title' => 'Terriccio GEOLIA universale 45 L',
                'price' => '3',
                'description' => "Il Terriccio Universale Geolia è un terriccio nato per soddisfare qualsiasi esigenza: rinvasi di piante fiorite e verdi, trapianti in giardino, semina di piante fiorite e ortaggi, taleaggio ed è inoltre ideale per la manutenzione. La presenza di sostanza organica vegetale umificata ed un bilanciato rapporto di macro e microelementi, naturalmente presenti, garantiscono un graduale e costante nutrimento delle piante ospiti. Universale Geolia Universale è un prodotto consentito in agricoltura biologica, può dunque essere utilizzato da chi vuole condurre una coltivazione con metodi biologici o biodinamici.

                                  Ideale per soddisfare qualsiasi esigenza: rinvasi di piante fiorite e verdi, trapianti in giardino, semina di piante fiorite e ortaggi, taleaggio e per la manutenzione.

                                  La presenza di sostanza organica vegetale umificata ed un bilanciato rapporto di macro e microelementi, naturalmente presenti, garantiscono un graduale e costante nutrimento delle piante ospiti.",
                'category_id' => 7,
                'user_id' => 1,
                'img'=>'\imgsProdotti\Giardinaggio\terriccio\geolia.webp'

            ],

            [
                'title' => 'Millennium Falcon Lego',
                'price' => '849.99',
                'description' => "Ti presentiamo il modello più grande e più dettagliato del Millennium Falcon LEGO® Star Wars mai creato! E con 7.500 pezzi, è sicuramente uno dei modelli LEGO più grandi in assoluto! Questa fantastica interpretazione LEGO dell’indimenticabile nave da trasporto corelliana di Ian Solo ha tutti i dettagli che i fan di Star Wars di ogni età possono desiderare, tra cui intricati particolari esterni, parabole sensore intercambiabili, cannoni a quattro laser superiori e inferiori, gambe di atterraggio, rampa di imbarco abbassabile e una cabina di pilotaggio per 4 minifigure con tettuccio rimovibile. Rimuovi i pannelli individuali della fusoliera per rivelare la sezione principale, altamente dettagliata, il compartimento posteriore e la stazione di artiglieria. Questo fantastico modello è dotato di parabole sensore ed equipaggio intercambiabili per rivivere le classiche avventure LEGO Star Wars con Ian, Leia, Chewbecca e C-3PO o quelle degli Episodi VII e VIII con il vecchio Ian, Rey, Finn e BB-8!",
                'category_id' => 8,
                'user_id' => 1,
                'img'=>'\imgsProdotti\Hobby\MilleniumFalconLEGO\lego.jpg'

            ],

            [
                'title' => 'PegPerego SELFIE',
                'price' => '319.99',
                'description' => "Selfie è il passeggino leggero e compatto, adatto dalla nascita fino a 17Kg che esibisce caratteristiche di tendenza e funzionalità urban. Il passeggino Selfie pensa a tutto. Fin dalla nascita del tuo bebè, ti lascia più libertà nel chiudersi da solo, e sempre con una mano sola, lo apri e lo guidi con grande comodità. Selfie ti permette di vivere la vita con leggerezza grazie al suo peso ridotto e alla facilità nel viaggiare comodamente anche sui terreni più sconnessi. Le prestazioni off-road sono garantite dagli ammortizzatori con cuscinetti a sfera, le ruote piroettanti, i molleggi anteriori e posteriori",
                'category_id' => 9,
                'user_id' => 1,
                'img'=>'\imgsProdotti\Infanzia\PegPeregoSELFIE\selfie.jfif'

            ],

            [
                'title' => 'DOGVILLA',
                'price' => '95',
                'description' => "Realizzata in robusta resina termoplastica, materiale resistente agli urti e ai raggi UV, Dogvilla è una cuccia da esterno per cani dotata di sistema di apertura della parete laterale (brevettato). Il pannello apribile si può montare a scelta su fianco destro o sinistro; una volta aperto diventa una pratica pedana che si appoggia sul terreno e consente al vostro cane di avere tanto spazio in più per sè. Ideale per qualsiasi stagione dell'anno, chiusa in inverno o aperta in estate, la cuccia Dogvilla è dotata di sistema di ventilazione che assicura un'ottima aerazione interna evitando il formarsi di umidità garantendo così un ambiente sempre asciutto; la particolare costruzione del fondo presenta inoltre apposite fessure per consentire il defluire dell'acqua verso l'esterno.
                                  La porta d'ingresso, posta lateralmente per una maggiore protezione dagli agenti atmosferici, presenta appositi profili in alluminio pensati in modo da resistere ad eventuali morsi del cane. Per il modello più piccolo Dogvilla 60, invece, il profilo antimorso in alluminio è acquistabile come optional.
                                  Dogvilla è disponibile in diverse misure, viene venduta completamente smontata per ridurre il più possibile il volume dell'imballo. Il montaggio è estremamente semplice e non richiede strumenti particolari. Questo la rende trasportabile e utilizzabile anche in vacanza. La cuccia è inoltre facile da pulire in quanto dotata di tetto removibile.
                                  Disponibili come accessori per tutti i modelli di cucce, troverete la portina in plastica, il cuscino in tessuto tecnico Jolly oppure l'apposito kit di pannelli di coibentazione che si applicano all'interno della casetta per assicurare maggiore protezione sia in inverno quando il clima è più rigido sia in estate.

                                  Dogvilla è un prodotto ecosostenibile: è infatti realizzato con materiale proveniente da riciclo industriale e post-consumo, per la salvaguardia dell’ambiente in cui viviamo insieme ai nostri amici animali.",
                'category_id' => 10,
                'user_id' => 1,
                'img' =>'\imgsProdotti\PerAnimali\Dogvilla\dogvilla.webp'
            ],

            [
                'title' => 'SONY - PS5 DIGITAL C + GOD OF WAR: RAGNAROK',
                'price' => '659.99',
                'description' => "Console fissa - Piattaforma PS5 - Con porta di rete (Ethernet) - Bluetooth 5.1 - HDMI - USB - Play Has No Limits PlayStation5 PS5 offre nuove possibilità di gioco che non ti saresti mai aspettato. Prova un caricamento ultra rapido con un'unità SSD ad altissima velocità, un coinvolgimento ancora maggiore grazie al supporto per il feedback aptico, ai grilletti adattivi e all'audio 3D e scopri una nuova generazione di incredibili giochi PlayStation Velocità Incredibile La potenza di CPU, GPU e unità SSD personalizzate con sistema I/O integrato permette prestazioni mai viste prima su una console PlayStation. Giochi Straordinari Lasciati stupire da una grafica incredibile e scopri le nuove funzionalità di PS5. Immersione Mozzafiato Scopri un'esperienza di gioco più profonda grazie al supporto per il feedback aptico, ai grilletti adattivi e alla tecnologia audio 3D.",
                'category_id' => 1,
                'user_id' => 1,
                'img' =>'\imgsProdotti\Elettronica\PS5\sony-playstation-5-digital-c-chassis-god-of-war-ragnarok.jpg'

            ],

            [
                'title' => 'BMW 118',
                'price' => '23.900',
                'description' => "Con il lancio della terza, rivoluzionaria generazione di Serie 1, la F40, la 118 rimane un baluardo per via della trazione al posto giusto, dando giustizia allo schema meccanico, oggi già con una BMW 118 si può godere di un’ottima guidabilità e di prestazioni vivaci indipendentemente dall’alimentazione, grazie ai moderni 1.5 tre cilindri turbo rubato dalla 118 sotto il cofano, oltre all’immancabile 2.0 litri da 150 cavalli.",
                'category_id' => 4,
                'user_id' => 1,
                'img' =>'\imgsProdotti\Motori\BMW118\bmw118.webp'

            ],

            [
                'title' => 'Borsa Valentino',
                'price' => '54.99',
                'description' => "Scomparti: Scomparto monete
                                  Chiusura: Con chiusura a scatto
                                  Fantasia: Monocromo
                                  Codice articolo: 5VA51F00Z-J12",
                'category_id' => 2,
                'user_id' => 1,
                'img'=>'\imgsProdotti\Abbigliamento\borsaValentino\borsaValentino.webp'
            ]
            ];

            foreach ($products as $product) {
                Product::create([
                    'title' => $product['title'],
                    'price' => $product['price'],
                    'description' => $product['description'],
                    'category_id' => $product['category_id'],
                    'user_id' => $product['user_id'],
                    'img'=> $product['img']
                ]);
            }
    }
}
