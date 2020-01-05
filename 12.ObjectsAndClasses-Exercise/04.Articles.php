<?php

Class Article
{
    private $title;
    private $content;
    private $author;


    /**
     * Article constructor.
     * @param $title
     * @param $content
     * @param $author
     */

    public function __construct($title, $content, $author)
    {
        $this->setTitle($title);
        $this->setContent($content);
        $this->setAuthor($author);
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */


    public function __toString()
    {
        return $this->getTitle() . " - " . $this->getContent() . ": " . $this->getAuthor() . PHP_EOL;
    }
}

$input = readline();
$tokens = explode(", ", $input);
$title = $tokens[0];
$content = $tokens[1];
$author = $tokens[2];
$article = new Article($title, $content, $author);

$commandCount = intval(readline());

for ($i = 0; $i < $commandCount; $i++) {
    $input = readline();
    $tokens = explode(": ", $input);
    $command = $tokens[0];
    $data = $tokens[1];
    if ($command == "Edit") {
        $article->setContent($data);
    } else if ($command == "ChangeAuthor") {
        $article->setAuthor($data);
    } else {
        $article->setTitle($data);
    }

}
echo $article;
