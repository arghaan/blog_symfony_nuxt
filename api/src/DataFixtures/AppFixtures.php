<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Comment;
use App\Entity\Tag;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private UserPasswordEncoderInterface $encoder;


    /**
     * AppFixtures constructor.
     */
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('test');
        $user->setPassword($this->encoder->encodePassword($user, 'test'));
        $user->setEmail('email@example.com');
        $user->setAvatar('https://randomuser.me/api/portraits/men/21.jpg');
        $manager->persist($user);

        for ($i = 0; $i < 10; $i++) {
            $article = new Article();
            $article->setTitle("Article #$i");
            $article->setText(
                "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae risus ut metus gravida congue in ac nisl. Praesent leo urna, venenatis sit amet tortor vitae, commodo tincidunt libero. Maecenas porta pharetra sem, vel dapibus odio eleifend non. Suspendisse lobortis ipsum at diam congue condimentum. Mauris aliquam, dolor in gravida sagittis, metus metus tincidunt nisi, a blandit nisl leo consequat purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam et nunc condimentum, consequat mauris ut, accumsan sem.</p>
<img src='https://hsto.org/webt/af/ns/d6/afnsd6pdnqhezs-ge1tjjl34xeo.jpeg' />
<p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
<cut>
<p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
<p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
<p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
<p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
<p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
<p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
<p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
<p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
<p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
<p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
<p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
<p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
<p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
<p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
<p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>"
            );

            $article->setAuthor($user);

            $tag = new Tag();
            $manager->persist($tag);
            $article->addTag($tag);

            $category = new Category();
            $category->setTitle("Category #$i");
            $manager->persist($category);
            $article->addCategory($category);

            for ($i2 = 0; $i2 < $i; $i2++) {
                $comment = new Comment();
                $comment->setText("This is test comment #$i2");
                $comment->setAuthor($user);
                $comment->setArticle($article);
                $article->addComment($comment);
                $manager->persist($comment);
            }
            $manager->persist($article);
        }

        $manager->flush();
    }
}
