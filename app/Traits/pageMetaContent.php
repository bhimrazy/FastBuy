<?php
namespace App\Traits;

trait pageMetaContent{
    /**
     * @param $title
     * @param $description
     */
    protected function setPageTitle($title, $description)
    {
        view()->share(['pageTitle' => $title, 'pageDescription' => $description]);
    }
}
