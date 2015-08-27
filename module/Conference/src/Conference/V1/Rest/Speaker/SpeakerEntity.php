<?php
namespace Conference\V1\Rest\Speaker;

class SpeakerEntity
{
    public $id;
    public $name;
    public $title;
    public $company;
    public $url_company;
    public $twitter;

    public function getArrayCopy()
    {
      return array(
        'id'          => $this->id,
        'name'        => $this->name,
        'title'       => $this->title,
        'company'     => $this->company,
        'url_company' => $this->url_company,
        'twitter'     => $this->twitter
      );
    }

    public function exchangeArray(array $array)
    {
      $this->id          = $array['id'];
      $this->name        = $array['name'];
      $this->title       = $array['title'];
      $this->company     = $array['company'];
      $this->url_company = $array['url_company'];
      $this->twitter     = $array['twitter'];
    }
}