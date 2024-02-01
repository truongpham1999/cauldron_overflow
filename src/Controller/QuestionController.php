<?php

namespace App\Controller;

use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Cache\CacheInterface;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('question/homepage.html.twig');
    }

    /**
     * @Route("/questions/{slug}", name="app_question_show")
     */
    public function show($slug, MarkdownParserInterface $markdownParser, CacheInterface $cache)
    {
        $anwsers = ['one', '**two**', 'three'];

        $questionText = "I've been turned into a cat, any *thoughts* on how to turn back? While I'm **adorable**, I don't really care for cat food.";

        $parsedQuestionText = $cache->get('markdown_'.md5($questionText),
                                          function() use ($questionText, $markdownParser) {
            return $markdownParser->transformMarkdown($questionText);
        });

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),    // ucwords() is used to capitalize the first letter of each word, str_replace() is used to replace the '-' with a space
            'answers' => $anwsers,
            'questionText' => $parsedQuestionText,
            ]);
    }
}
