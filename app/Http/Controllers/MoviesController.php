<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{

    public $index = [

        [
            'id' => 1,
            'movieTitle' => 'Inception',
            'movieImgsrc' => 'movies\posters\inception.jpeg',
            'movieDescription' => 'Dom Cobb possiede una qualifica speciale: è in grado di inserirsi nei sogni altrui per prelevare i segreti nascosti nel più profondo del subconscio. Viene contattato da Saito, un potentissimo industriale giapponese.',
            'movieDirector' => 'Nolan',
            'released_at' => 2010,
            'movieGenre' => 'Fantasy'
        ],
        [
            'id' => 2,
            'movieTitle' => 'Titanic',
            'movieImgsrc' => 'movies\posters\titanic.jpg',
            'movieDescription' => 'Il transatlantico Titanic, considerato un gioiello tecnologico ed il più lussuoso piroscafo da crociera mai realizzato, salpa dall\'Inghilterra il dieci aprile del 1912 con oltre 1500 passeggeri a bordo per il suo viaggio inaugurale. I viaggiatori sono collocati in tre classi, riflesso delle differenze sociali.',
            'movieDirector' => 'Cameron',
            'released_at' => 1997,
            'movieGenre' => 'Drama'
        ],
        [
            'id' => 3,
            'movieTitle' => 'Django',
            'movieDescription' => 'Sulle tracce di due criminali in fuga e di una donna, il cacciatore di taglie di origini tedesche Schultz e lo schiavo Django instaurano un atipico sodalizio sullo sfondo della Guerra Civile Americana.',
            'movieImgsrc' => 'movies\posters\django.jpeg',
            'movieDirector' => 'Tarantino',
            'released_at' => 2012,
            'movieGenre' => 'Action'
        ],
        [
            'id' => 4,
            'movieTitle' => 'Shutter Island',
            'movieDescription' => 'Rachel Salado, paziente del manicomio criminale sull\'isola di Shutter, scompare all\'improvviso. L\'agente federale Teddy Daniels, affiancato dall\'ufficiale Chuck Aule, deve indagare per risolvere il mistero.',
            'movieImgsrc' => 'movies\posters\shutter.jpg',
            'movieDirector' => 'Scorsese',
            'released_at' => 2010,
            'movieGenre' => 'Drama'
        ],
        [
            'id' => 5,
            'movieTitle' => 'Don\'t look up',
            'movieImgsrc' => 'movies\posters\dont-look-up.jpg',
            'movieDescription' => 'Una coppia di astronomi si accorge dell\'esistenza di un meteorite in rotta di collisione con la Terra. I due scienziati cercano di avvertire tutti sulla Terra che il meteorite distruggerà il pianeta in sei mesi.',
            'movieDirector' => 'McKay',
            'released_at' => 2021,
            'movieGenre' => 'Fantasy'
        ],
        [
            'id' => 6,
            'movieTitle' => 'Il grande Gatsby',
            'movieImgsrc' => 'movies\posters\gatsby.jpeg',
            'movieDescription' => 'Un aspirante scrittore arriva a New York nel 1922 in cerca del sogno americano. L\'uomo si trasferisce accanto a Jack Gatsby, un milionario conosciuto da tutti per le sue sfarzose feste e per il suo amore impossibile per la sofisticasta Daisy.',
            'movieDirector' => 'Luhrmann',
            'released_at' => 2013,
            'movieGenre' => 'Drama'
        ],
        [
            'id' => 7,
            'movieTitle' => 'Beyond the Screen: Mufasa\'s Redemption',
            'movieDescription' => 'Il Dr. Lorenzo Moretti è uno scienziato di fama mondiale, ma nonostante i suoi successi accademici, nasconde un segreto doloroso: un\'infanzia segnata dalla morte improvvisa del padre, avvenuta mentre guardavano insieme "Il Re Leone". La scena della morte di Mufasa ha particolarmente segnato Lorenzo, facendogli rivivere l\'esperienza traumatica della perdita ogni volta che la rivedeva. Per superare questo trauma, ha dedicato la sua vita a un progetto ambizioso: creare una macchina che gli permetta di entrare fisicamente nei programmi televisivi. Dopo anni di ricerca e sperimentazione, il Dr. Moretti riesce finalmente a perfezionare la sua invenzione, che chiama "TeleVoyager". La prima cosa che decide di fare, spinto dai ricordi dolorosi, è entrare nel mondo de "Il Re Leone" e salvare Mufasa, sperando in questo modo di poter affrontare e superare il suo trauma personale. Una volta entrato nel film, Lorenzo si trova nella savana africana e rapidamente si rende conto delle sfide che lo attendono. Il mondo del cinema ha le sue regole e alterare gli eventi può avere conseguenze imprevedibili. Dapprima tenta di avvisare Mufasa dei piani di Scar, ma il leone reale lo scambia per un intruso e non gli presta attenzione. Lorenzo non si arrende e decide di intervenire direttamente, cercando di sabotare la scena in cui le gazzelle scatenano la tempesta che porterà alla morte di Mufasa. Ma ogni intervento sembra solo rendere le cose peggiori, con Scar che diventa sempre più sospettoso e la realtà del film che inizia a scomporre e riscrivere se stessa per mantenere la coerenza della storia. Mentre Lorenzo combatte contro il tempo e le forze narrative del film, incontra Rafiki, il saggio sciamano babbuino. Rafiki comprende la sofferenza di Lorenzo e gli rivela che non può semplicemente cambiare gli eventi di un film, ma può imparare da essi e trovare la pace interiore accettando la perdita. Ritornato al momento cruciale, Lorenzo non interviene. Invece, si siede accanto al giovane Simba e lo conforta, rivivendo quel momento doloroso, ma questa volta con la comprensione e l\'accettazione della natura impermanente della vita. Quando torna nel mondo reale, Lorenzo spegne il "TeleVoyager" e guarda la foto di suo padre. Con lacrime agli occhi, sorride, avendo finalmente trovato la pace e l\'accettazione del suo passato.',
            'movieImgsrc' => 'movies\posters\Beyond the Screen 1 Mufasa.jpeg',
            'movieDirector' => 'Christopher Nolan',
            'released_at' => 2017,
            'movieGenre' => 'Drama'
        ],
        [
            'id' => 8,
            'movieTitle' => 'Beyond the Screen: Tides of Fate',
            'movieDescription' => 'Sono trascorsi alcuni anni dalla scoperta del "TeleVoyager" da parte del Dr. Lorenzo Moretti. La macchina, dopo la sua morte, viene data in eredità a sua nipote, Clara, una giovane cinefila appassionata e sognatrice. Clara, cresciuta con le storie del nonno e i suoi esperimenti pionieristici, scopre presto la verità sulla macchina e le sue incredibili capacità. Una sera, nostalgica, Clara decide di riguardare "Titanic". Mentre guarda il film, i ricordi dell\'adolescenza tornano prepotentemente: la sua cotta per Jack, interpretato da Leonardo DiCaprio, e il cuore infranto alla sua morte nel film. Sentendo un\'impulso irrefrenabile, Clara decide di usare il "TeleVoyager" per entrare nel film e salvare Jack. Una volta a bordo del Titanic, Clara si rende conto che non sarà facile come pensava. Il mondo del film è un intricato labirinto di eventi e decisioni che sembrano inesorabilmente condurre al tragico destino del transatlantico. Inoltre, c\'è Rose, l\'amore di Jack, e Clara non può fare a meno di sentirsi come un\'estranea, anche se il suo unico desiderio è salvare il giovane pittore. Tuttavia, come nel film precedente, Clara scopre che intervenire nel corso degli eventi potrebbe avere conseguenze imprevedibili. Ma questa volta, c\'è un altro fattore in gioco: la macchina inizia a malfunzionare, rendendo difficile per Clara distinguere la realtà dalla finzione e mettendo a rischio la sua stessa esistenza. Mentre il Titanic si avvicina al fatidico iceberg, Clara deve fare una scelta: salvare Jack e alterare il corso della storia cinematografica o accettare il destino e tornare al suo mondo. Ma una terza via si apre davanti a lei quando incontra l\'anziana Rose, che condivide con Clara un segreto che potrebbe salvare sia Jack che il Titanic.',
            'movieImgsrc' => 'movies\posters\Beyond the Screen 2 Jack Lives.jpeg',
            'movieDirector' => 'Scorsese',
            'released_at' => 2018,
            'movieGenre' => 'Drama'
        ],
        [
            'id' => 11,
            'movieTitle' => 'The True Story of Frank Barrrett (The Second Frank)',
            'movieDescription' => 'The True Story of Frank Brarrett\'s Part II',
            'movieImgsrc' => 'movies\posters\Frank Barret Movie Poster.jpeg',
            'movieDirector' => 'Paolo Sorrentino',
            'released_at' => 2012,
            'movieGenre' => 'Drama'
        ],
        [
            'id' => 12,
            'movieTitle' => 'The True Story of Frank Brarrett',
            'movieDescription' => 'Il film si svolge negli anni \'50 in un piccolo villaggio inglese chiamato Dunbridge. Frank Barrett, un bibliotecario del posto dal carattere introverso, è conosciuto da tutti come un uomo tranquillo e pacifico. Tuttavia, una serie di eventi lo proietteranno al centro di un mistero che ha aleggiato sul villaggio per decenni. Un giorno, mentre Frank cataloga alcuni libri antichi nella cantina della biblioteca, trova un diario nascosto tra le pagine di uno di essi. Questo diario appartiene a un suo antenato, Thomas Barrett, che visse nel villaggio nel XVIII secolo. Leggendolo, scopre che Thomas fu ingiustamente accusato di una serie di crimini che terrorizzarono il villaggio e fu giustiziato per essi. Tuttavia, il diario rivela una verità differente: Thomas era innocente ed era stato tradito da qualcuno che voleva coprire i propri crimini. Frank, intrigato e deciso a ripulire il nome della sua famiglia, inizia una ricerca per scoprire la vera storia dietro ai crimini di Dunbridge. Tuttavia, man mano che si addentra nel mistero, scopre che alcuni segreti attuali del villaggio sono strettamente collegati agli eventi del passato. Alcuni discendenti di coloro che tradirono Thomas vivono ancora a Dunbridge e sono pronti a fare tutto il necessario affinché la verità non emerga. Il film segue Frank nella sua ricerca di giustizia, confrontandosi non solo con i fantasmi del passato della sua famiglia, ma anche con le potenti forze attuali che cercano di zittirlo. Con l\'aiuto di una giovane giornalista, Alice Redwood, e alcuni alleati inaspettati, Frank si imbarca in una pericolosa missione per svelare la verità e ristabilire l\'onore della sua famiglia.',
            'movieImgsrc' => 'movies\posters\Frank Barret Movie 2 Poster.jpeg',
            'movieDirector' => 'Paolo Sorrentino',
            'released_at' => 2022,
            'movieGenre' => 'Drama'
        ],
    ];






    public function index()
    {
        return view('movie_list', ['movies' => $this->index]);
    }





    //Dettagli Docenti
    public function show($id)
    {
        foreach ($this->index as $movie) {
            if ($id == $movie['id']) {
                return view('movie_list', ['movie_list' => $this->index]);
            }
        }
    }
}
