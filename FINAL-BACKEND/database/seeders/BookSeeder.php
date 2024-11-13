<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'title' => 'Naruto: Uzumaki Naruto',
                'author' => 'Masashi Kishimoto',
                'published_year' => 1999,
                'genre' => 'Manga',
                'description' => 'Twelve years ago the Village Hidden in the Leaves was attacked by a fearsome threat. A nine-tailed fox spirit claimed the life of the village leader, the Hokage, and many others. Today, the village is at peace and a troublemaking kid named Naruto is struggling to graduate from Ninja Academy. His goal may be to become the next Hokage, but his true destiny will be much more complicated. The adventure begins now!',
            ],
            [
                'title' => 'One Piece: Romance Dawn',
                'author' => 'Eiichiro Oda',
                'published_year' => 1997,
                'genre' => 'Manga',
                'description' => 'As a child, Monkey D. Luffy was inspired to become a pirate by listening to the tales of the buccaneer "Red-Haired" Shanks. But his life changed when Luffy accidentally ate the Gum-Gum Devil Fruit and gained the power to stretch like rubber...at the cost of never being able to swim again! Years later, still vowing to become the king of the pirates, Luffy sets out on his adventure...one guy alone in a rowboat, in search of the legendary "One Piece," said to be the greatest treasure in the world...',
            ],
            [
                'title' => 'Bleach: Strawberry and the Soul Reapers',
                'author' => 'Tite Kubo',
                'published_year' => 2004,
                'genre' => 'Manga',
                'description' => 'Ichigo Kurosaki has always been able to see ghosts, but this ability does not change his life nearly as much as his close encounter with Rukia Kuchiki, a Soul Reaper and member of the mysterious Soul Society. While fighting a Hollow, an evil spirit that preys on humans who display psychic energy, Rukia attempts to lend Ichigo some of her powers so that he can save his family; but much to her surprise, Ichigo absorbs every last drop of her energy.',
            ],
            [
                'title' => 'Dragon Ball: The Monkey King',
                'author' => 'Akira Toriyama',
                'published_year' => 1989,
                'genre' => 'Manga',
                'description' => 'Before there was Dragon Ball Z, there was Akira Toriyama action epic Dragon Ball, starring the younger version of Son Goku and all the other Dragon Ball Z heroes! Meet a naive young monkey-tailed boy named Goku, whose quiet life changes when he meets Bulma, a girl who is on a quest to collect seven Dragon Balls.',
            ],
            [
                'title' => 'Attack on Titan: To You, 2,000 Years From Now',
                'author' => 'Hajime Isayama',
                'published_year' => 2010,
                'genre' => 'Manga',
                'description' => 'In this post-apocalytpic sc-ifi story, humanity has been devastated by the bizarre, giant humanoids known as the Titans. Little is known about where they came from or why they are bent on consuming mankind. Seemingly unintelligent, they have roamed the world for years, killing everyone they see. For the past century, what is left of man has hidden in a giant, three walled city. ',
            ],
            [
                'title' => 'Fullmetal Alchemist:The Two Alchemists',
                'author' => 'Hiromu Arakawa',
                'published_year' => 2002,
                'genre' => 'Manga',
                'description' => 'Alchemy: the mystical power to alter the natural world; something between magic, art, and science. When two brothers, Edward and Alphonse Elric, dabbled in this power to grant their dearest wish, one of them lost an arm and a leg...and the other became nothing but a soul locked into a body of living steel. Now Edward is a agent of the government, a slave of the military-alchemical complex, using his unique powers to obey orders...even to kill.',
            ],
            [
                'title' => 'Hunter x Hunter: The Day of Departure',
                'author' => 'Yoshihiro Togashi',
                'published_year' => 1998,
                'genre' => 'Manga',
                'description' => 'Gon might be a country boy, but he has high aspirations. Despite his Aunt Mito protests, Gon decides to follow in his father footsteps and become a legendary Hunter. The Hunter hopefuls begin their journey by storm-tossed ship, where Gon meets Leorio and Kurapika, the only other applicants who are not devastated by bouts of seasickness.',
            ],
            [
                'title' => 'Death Note: Boredom',
                'author' => 'Tsugumi Ohba',
                'published_year' => 2005,
                'genre' => 'Manga',
                'description' => 'Light tests the boundaries of the Death Notes powers as L and the police begin to close in. Luckily Lights father is the head of the Japanese National Police Agency and leaves vital information about the case lying around the house. With access to his fathers files, Light can keep one step ahead of the authorities. But who is the strange man following him, and how can Light guard against enemies whose names he does not know?',
            ],
            [
                'title' => 'Vinland Saga: Normanni',
                'author' => 'Makoto Yukimura',
                'published_year' => 2005,
                'genre' => 'Manga',
                'description' => 'As a child, Thorfinn sat at the feet of the great Leif Ericson and thrilled to wild tales of a land far to the west. But his youthful fantasies were shattered by a mercenary raid. Raised by the Vikings who murdered his family, Thorfinn became a terrifying warrior, forever seeking to kill the bands leader, Askeladd, and avenge his father. Sustaining Throfinn through his ordeal are his pride in his family and his dreams of a fertile westward land, a land without war or slavery...the land Leif called Vinland.',
            ],
            [
                'title' => 'One Punch Man: One Punch',
                'author' => 'Yusuke Murata',
                'published_year' => 2012,
                'genre' => 'Manga',
                'description' => 'Every time a promising villain appears, Saitama beats the snot out of em with one punch! Can he finally find an opponent who can go toe-to-toe with him and give his life some meaning? Or is he doomed to a life of superpowered boredom?',
            ],
            [
                'title' => 'Kimetsu no Yaiba: Cruelty',
                'author' => 'Koyoharu Gotouge',
                'published_year' => 2016,
                'genre' => 'Manga',
                'description' => 'Learning to destroy demons wont be easy, and Tanjiro barely knows where to start. The surprise appearance of another boy named Giyu, who seems to know whats going on, might provide some answers—but only if Tanjiro can stop Giyu from killing his sister first!',
            ],
            [
                'title' => 'Jujutsu Kaisen: Ryomen Sukuna',
                'author' => 'Gege Akutami',
                'published_year' => 2018,
                'genre' => 'Manga',
                'description' => 'Although Yuji Itadori looks like your average teenager, his immense physical strength is something to behold! Every sports club wants him to join, but Itadori would rather hang out with the school outcasts in the Occult Research Club. One day, the club manages to get their hands on a sealed cursed object. Little do they know the terror they will unleash when they break the seal…',
            ],
            
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
