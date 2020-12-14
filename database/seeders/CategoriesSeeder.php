<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => "1",
        'nom' => "Hygiène",
        'sermon' => "Dans la culture populaire, il y a de nombreuses idées reçues sur l'attention que les informaticiens portent à leur hygiène.
        Vous avez sûrement déjà entendu des gens dire 'mh, ca sent l'informaticien ici' avec un rictus moqueur.
        Bien que dans les idées traditionelles dépassées l'odeur corporelle a une importance disproportionnée, dans notre monde moderne digital c'est une autre forme d'odeur qui prime.
        Ne vous êtes vous jamais délecté de la fragrance qui émanne d'un code structuré implémantant des deseign patterns à la fois élégants et éfficaces?
        En vérité, seul un informaticien peut produire de telle odeurs. Pendant que le reste du monde, tel des mouches attirés par les excrements, recherchent
        la fragrance corporelle, l'informaticien, tel une abeille, butine le nectar. ",
    ]);
        DB::table('categories')->insert([
        'id' => "2",
        'nom' => "Sexualité",
        'sermon' => "Tout comme le yeti, la sexualité des informaticiens relève de la légende dans la culture populaire.
        Cette idée reçue est très endommageante pour les informaticiens, qui internalisent cette notion et perdent beaucoup de confiance en eux.
        Certains d'entre eux se retrouvent ensuite avec une sexualité déviante voir malsaine(c.f. Fanny)",
    ]);
    DB::table('categories')->insert([
            'id' => "3",
        'nom' => "Maturité",
        'sermon' => "Considérés souvent comme des manchilds, les ingénieurs sont rarement vus comme matures. Leur amour des jeux-vidéo et 
        des animés pourrait en être la cause. Mais est-ce que cela est une preuve de manque de maturité ? Tout le monde a besoin d'un hobby ou d'un moyen de se détendre et cet animé
        avec des filles à gros seins fera pile poils l'affaire.",
    ]);
    DB::table('categories')->insert([
            'id' => "4",
        'nom' => "Physique",
        'sermon' => "Arborant souvent des corps de lâches, les ingénieurs sont souvent victimes de moqueries à l'égard de leur physique.
        Hors, bien qu'il soit vrai qu'ils ne soient pas forcément musclés physiquement, leur esprit est aiguisé grâce aux pompes mentales qu'ils accomplissent au quotidien.
        De plus, bon nombre d'entre eux sont des guerriers aguéris, endurcis par de nombreuses nuits déprivées de sommeil dédiés a l'étude du sabre et des combos smash.
        Ils sont véritablement les chevaliers des temps modernes. En ces periodes de confinement, ",
    ]);
    DB::table('categories')->insert([
            'id' => "5",
        'nom' => "Cuck",
        'sermon' => "On prend souvent les ingénieurs pour des gros cucks au service des autres. Et c'est vrai. Vie de merde.",
    ]);
    DB::table('categories')->insert([
            'id' => "6",
        'nom' => "Autiste",
        'sermon' => "Oui, certains ingénieurs sont autistes, mais est-ce que cela mérite les insultes qu'ils reçoivent ?
        Est-ce que le fait d'aimer les maths mérite les moqueries de tout le monde ? Et bien si vous vous appelez Marty, oui.
        Est-ce qu'être un gros mongole empêche de progresser dans la vie et grimper les échelons sociaux? Et bien si vous vous appelez Marty, oui.
        Mais dans les normes des choses, l'autisme s'avère être un avantage inestimable pour survivre dans la jungle digitale que nous peuplons. Sauf si vous êtes Marty",
    ]);
    }
}
