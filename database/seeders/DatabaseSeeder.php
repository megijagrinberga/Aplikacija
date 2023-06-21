<?php

namespace Database\Seeders;
use App\Models\Movie;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(10)->create();

        //Vācu filmas
        //1
        Movie::create([
            'title' => 'Der Untergang',
            'genres' => 'Historic, Drama',
            'year' => '2004',
            'directors' => 'Josef Schtiff, Roman Polanski',
            'language' => 'German',
            'length' => '156',
            'description' => 'Traudl Junge, the final secretary for Adolf Hitler, tells of the Nazi dictator\'s final days in his Berlin bunker at the end of WWII.'   
        ]);

        //2
        Movie::create([
            'title' => 'Der Pianist',
            'genres' => 'Historic, Drama',
            'year' => '2002',
            'directors' => 'Roman Polanski',
            'language' => 'German',
            'length' => '180',
            'description' => 'A Polish Jewish musician struggles to survive the destruction of the Warsaw ghetto of World War II.'   
        ]);

        //3
        Movie::create([
            'title' => 'Das Boot',
            'genres' => 'Historic, Drama',
            'year' => '1981',
            'directors' => 'Hans Zimmer',
            'language' => 'German',
            'length' => '179',
            'description' => 'A German U-boat stalks the frigid waters of the North Atlantic as its young crew experience the sheer terror and claustrophobic life of a submariner in World War II.'   
        ]);

        //4
        Movie::create([
            'title' => 'Das Experiment',
            'genres' => 'Thriller, Horror',
            'year' => '2001',
            'directors' => 'Johann Goethe, Hans Zimmer',
            'language' => 'German',
            'length' => '120',
            'description' => 'For two weeks, 20 male participants are hired to play prisoners and guards in a prison. The "prisoners" have to follow seemingly mild rules, and the "guards" are told to retain order without using physical violence.'   
        ]);

        //5
        Movie::create([
            'title' => 'Der Sandmann',
            'genres' => 'Horror',
            'year' => '1995',
            'directors' => 'Angelica Zwiebel',
            'language' => 'German',
            'length' => '88',
            'description' => 'The ambitious young Ina Littmann is investigative journalist for the TV talk show "Eye in Eye". Her current subject is Henry Kupfer, who wrote a bestseller about a psychopathic killer after he was 8 years in prison for manslaughter himself.'   
        ]);

        //6
        Movie::create([
            'title' => 'Das weisse Band',
            'genres' => 'Mystery, Horror',
            'year' => '2009',
            'directors' => 'Kristoff Schill',
            'language' => 'German',
            'length' => '144',
            'description' => 'Strange events happen in a small village in the north of Germany during the years before World War I, which seem to be ritual punishment. Who is responsible?'   
        ]);


       //Ķīniešu filmas
       //1
        Movie::create([
            'title' => 'Dà lóng bùjí',
            'genres' => 'Mystery',
            'year' => '1957',
            'directors' => 'Wei Zhang',
            'language' => 'Chinese',
            'length' => '134',
            'description' => 'In the bustling streets of Shanghai, a young artist named Li Mei discovers an ancient artifact that holds a powerful secret. As she delves deeper into its mysteries, she becomes entangled in a dangerous world of ancient legends and supernatural forces.'   
        ]);
        //2
        Movie::create([
            'title' => 'Xiǎo hóngmǎo',
            'genres' => 'Horror, Mystery',
            'year' => '1971',
            'directors' => 'Hou Lee',
            'language' => 'Chinese',
            'length' => '160',
            'description' => 'In the picturesque countryside of rural China, a young village girl named Mei Ling embarks on a remarkable journey of self-discovery. With dreams of becoming a renowned painter, she defies societal norms and challenges traditional expectations.'   
        ]);
        //3
        Movie::create([
            'title' => 'Hǎitúnghòu',
            'genres' => 'Drama',
            'year' => '2007',
            'directors' => 'Yimou Zhang',
            'language' => 'Chinese',
            'length' => '119',
            'description' => 'In the bustling metropolis of Beijing, two strangers, Li Wei and Zhang Jing, find their lives intertwined by fate. Li Wei, a hardworking taxi driver, crosses paths with Zhang Jing, a talented but struggling musician. As they navigate the complexities of love, dreams, and societal pressures, they embark on a transformative journey of self-discovery and personal growth.'   
        ]);
        //4
        Movie::create([
            'title' => 'Lǎohǔ hé māo',
            'genres' => 'Horror, Action',
            'year' => '2018',
            'directors' => 'Hsiao-hsien Wong',
            'language' => 'Chinese',
            'length' => '130',
            'description' => 'In ancient China, during a time of great turmoil and war, a legendary warrior named Li Xiang embarks on a perilous quest to protect her kingdom from an imminent threat. Armed with exceptional martial arts skills and guided by her unwavering sense of justice, Li Xiang must gather a team of skilled warriors and harness their collective strength to face a formidable enemy.'   
        ]);
        //5
        Movie::create([
            'title' => 'Shíjiè de fēngyún',
            'genres' => 'Action',
            'year' => '2022',
            'directors' => 'Kaige Chen',
            'language' => 'Chinese',
            'length' => '159',
            'description' => 'In a small coastal village of China, a young fisherman named Wei embarks on a daring adventure to uncover the truth behind his father\'s mysterious disappearance at sea. With the help of an enigmatic elder and a spirited village girl, Wei sets sail on a perilous journey filled with ancient legends, hidden treasures, and dangerous encounters.'   
        ]);
        //6
        Movie::create([
            'title' => 'Rénmín Rìbào',
            'genres' => 'Documentary, Horror',
            'year' => '2001',
            'directors' => 'Ang Lee',
            'language' => 'Chinese',
            'length' => '85',
            'description' => 'In the mystical realm of ancient China, a young sorceress named Li Mei embarks on a quest to save her kingdom from dark forces that threaten to engulf the land. Armed with her extraordinary magical abilities and accompanied by a loyal group of companions, Li Mei must unravel the secrets of her lineage and confront her own inner demons.'   
        ]);

        //Franču filmas
        //1
        Movie::create([
            'title' => 'Les Misérables',
            'genres' => 'Drama',
            'year' => '2010',
            'directors' => 'Jean-Philippe Amar',
            'language' => 'French',
            'length' => '200',
            'description' => 'In 19th-century France, Jean Valjean, who for decades has been hunted by the ruthless policeman Javert after breaking parole, agrees to care for a factory worker\'s daughter. The decision changes their lives forever.'   
        ]);
        
        //2
        Movie::create([
            'title' => 'Le Petit Prince',
            'genres' => 'Comedy, Romcom, Drama',
            'year' => '2016',
            'directors' => 'Philippe Triboit',
            'language' => 'French',
            'length' => '100',
            'description' => 'A little girl lives in a very grown-up world with her mother, who tries to prepare her for it. Her neighbor, the Aviator, introduces the girl to an extraordinary world where anything is possible, the world of the Little Prince.'   
        ]);

        //3
        Movie::create([
            'title' => 'La Peste',
            'genres' => 'Thriller, Horror',
            'year' => '2005',
            'directors' => 'Florent Emilio Siri',
            'language' => 'French',
            'length' => '101',
            'description' => 'A series of murders take place in 16th-century Seville, where the plague has taken hold; a condemned man faces the Inquisition as he attempts to save the son of a friend by speaking out.'   
        ]);

        //4
        Movie::create([
            'title' => 'Le Comte de Monte-Cristo',
            'genres' => 'Drama',
            'year' => '1995',
            'directors' => 'Thomas Astruc',
            'language' => 'French',
            'length' => '134',
            'description' => 'In the enchanting streets of Paris, a disillusioned writer named Antoine finds himself at a crossroads in life. Haunted by his past and searching for inspiration, he encounters a free-spirited artist named Sophie. Their chance meeting ignites a passionate and transformative affair that challenges their preconceived notions of love, art, and personal fulfillment.'   
        ]);

        //5
        Movie::create([
            'title' => 'Les Trois Mousquetaires',
            'genres' => 'Comedy, Horror',
            'year' => '2017',
            'directors' => 'David Hourrègue',
            'language' => 'French',
            'length' => '121',
            'description' => 'D\'Artagnan arrives in Paris trying to find his attackers after being left for dead, which leads him to a real war where the future of France is at stake. He aligns himself with Athos, Porthos and Aramis, three musketeers of the King.'   
        ]);

        //6
        Movie::create([
            'title' => 'Les Liaisons dangereuses',
            'genres' => 'Drama',
            'year' => '2002',
            'directors' => 'Frédéric Schoendoerffer',
            'language' => 'French',
            'length' => '104',
            'description' => 'In the picturesque countryside of Provence, a passionate chef named Julien finds himself at a crossroads in his culinary career. Struggling to revive his family\'s once-renowned restaurant, he encounters a spirited young woman named Sophie, whose love for food is as captivating as her zest for life. Together, they embark on a gastronomic journey, exploring the vibrant local markets, unraveling family recipes, and infusing traditional flavors with their own innovative twists.'   
        ]);

        //Spāņu filmas
        //1
        Movie::create([
            'title' => 'Cien años de soledad',
            'genres' => 'Drama, Action, Mystery',
            'year' => '2010',
            'directors' => 'Jesús Colmenar',
            'language' => 'Spanish',
            'length' => '114',
            'description' => 'In the vibrant streets of Barcelona, a young artist named Ana is on a quest to find her voice and her place in the world of art. Inspired by the colors and passion of the city, she immerses herself in a creative journey filled with discoveries and challenges.'   
        ]);

        //2
        Movie::create([
            'title' => 'El Quijote',
            'genres' => 'Comedy',
            'year' => '2018',
            'directors' => 'Oriol Paulo',
            'language' => 'Spanish',
            'length' => '115',
            'description' => 'On the tranquil shores of Mallorca, two lost souls embark on an unexpected journey of self-discovery. Alejandro, a disillusioned photographer, and Marta, a writer in search of inspiration, cross paths in a picturesque fishing village. As they share their stories and explore the mysteries of the island, they immerse themselves in a captivating romance and a path of personal redemption.'   
        ]);

        //3
        Movie::create([
            'title' => 'Don Juan Tenorio',
            'genres' => 'Romcom, Horror',
            'year' => '2014',
            'directors' => 'Aritz Moreno',
            'language' => 'Spanish',
            'length' => '89',
            'description' => 'In the heart of the bustling city of Madrid, a group of friends gathers at a small café every afternoon. Together, they share laughter, tears, and the ups and downs of life. Each one has their own stories and dreams, but they are all bound by deep friendship and an unwavering love for music. As they struggle to overcome obstacles and pursue their passions, they discover the healing power of music and the value of chasing their dreams.'   
        ]);

        //4
        Movie::create([
            'title' => 'Don Quijote de la Mancha',
            'genres' => 'Comedy',
            'year' => '2003',
            'directors' => 'Asghar Farhadi',
            'language' => 'Spanish',
            'length' => '97',
            'description' => 'In a small coastal town in Spain, the peaceful life of its inhabitants is disrupted by the arrival of a mysterious outsider. This enigmatic man sparks curiosity and intrigue among the locals, who begin to suspect that he harbors dark secrets.'   
        ]);

        //5
        Movie::create([
            'title' => 'Crónica de una muerte anunciada',
            'genres' => 'Romance, Drama',
            'year' => '2020',
            'directors' => 'Jun Violet',
            'language' => 'Spanish',
            'length' => '202',
            'description' => 'In the depths of the Amazon jungle, a group of explorers ventures into uncharted territory in search of a legendary treasure. As they face the dangers of the wild nature, they discover they are not alone. An ancient indigenous tribe fiercely protects the treasure and will do everything to defend it.'   
        ]);

        //6
        Movie::create([
            'title' => 'La sombra del viento',
            'genres' => 'Drama',
            'year' => '1995',
            'directors' => 'Alejandro Marzoa, Jun Violet',
            'language' => 'Spanish',
            'length' => '130',
            'description' => 'In a coastal town in Spain, two lonely souls cross paths in a chance encounter that will change their lives forever. He, a talented musician who has lost his inspiration, and she, a young painter in search of her artistic voice, find in love and passion a source of renewal.'   
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
