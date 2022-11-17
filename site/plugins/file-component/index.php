<?php
//DISABLE COPYING FILES FROM CONTENT FOLDER TO MEDIA FOLDER
// import App class
use Kirby\Cms\App as Kirby;

Kirby::plugin('cookbook/file-component', [
  'components' => [
    'file::url' => function (Kirby $kirby, $file) {
        return $kirby->url() . '/content/' . $file->parent()->diruri() . '/' . $file->filename();
    },
  ]
]);