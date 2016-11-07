<?php

namespace AppBundle\Entity;

/**
 * homelinks
 */
class homelinks
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $icon;

    /**
     * @var string
     */
    private $iconColor;

    /**
     * @var string
     */
    private $link;

    /**
     * @var string
     */
    private $backgroundImageUrl;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $text;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return homelinks
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return homelinks
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set icon
     *
     * @param string $icon
     *
     * @return homelinks
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set iconColor
     *
     * @param string $iconColor
     *
     * @return homelinks
     */
    public function setIconColor($iconColor)
    {
        $this->iconColor = $iconColor;

        return $this;
    }

    /**
     * Get iconColor
     *
     * @return string
     */
    public function getIconColor()
    {
        return $this->iconColor;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return homelinks
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set backgroundImageUrl
     *
     * @param string $backgroundImageUrl
     *
     * @return homelinks
     */
    public function setBackgroundImageUrl($backgroundImageUrl)
    {
        $this->backgroundImageUrl = $backgroundImageUrl;

        return $this;
    }

    /**
     * Get backgroundImageUrl
     *
     * @return string
     */
    public function getBackgroundImageUrl()
    {
        return $this->backgroundImageUrl;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return homelinks
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return homelinks
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}

