<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class CommentFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $comment1 = new Comment();
        $comment1->setContent("Super cette nouvelle version");
        $comment1->setCreatedAt(new \DateTime("2019-05-12"));
        $comment1->setArticle($this->getReference("article-1"));
        $comment1->setUser($this->getReference("user-john"));
        $manager->persist($comment1);

        $comment2 = new Comment();
        $comment2->setContent("Oui c'est bien pratique");
        $comment2->setCreatedAt(new \DateTime("2019-05-13"));
        $comment2->setArticle($this->getReference("article-1"));
        $comment2->setUser($this->getReference("user-admin"));
        $manager->persist($comment2);

        $comment3 = new Comment();
        $comment3->setContent("C'est plus simple en utilisant Symfony !!");
        $comment3->setCreatedAt(new \DateTime("2019-06-22"));
        $comment3->setArticle($this->getReference("article-2"));
        $comment3->setUser($this->getReference("user-john"));
        $manager->persist($comment3);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [ArticleFixtures::class];
    }
}
