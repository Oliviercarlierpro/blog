<?php
use App\Entity\Article;
namespace App\DataFixtures;
use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CommentFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {for ($i = 1; $i <= 10; $i++){
        $comment = new Comment();
        $comment->setComment("Ceci est le contenu du commentaire") ;
        $comment->setAuthor("olivier");
        $comment->setDateComment( new \datetime );
$comment->setArticle($this->getReference('article-1'));

$manager->persist($comment);
    }
        $manager->flush();
    }
    public function getDependencies(){
        return[
ArticleFixtures::class       ];
    }
}
