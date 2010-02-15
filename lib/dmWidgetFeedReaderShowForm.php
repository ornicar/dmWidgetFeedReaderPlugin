<?php

class dmWidgetFeedReaderShowForm extends dmWidgetPluginForm
{
  public function configure()
  {
    $this->widgetSchema['url'] = new sfWidgetFormInputText();
    $this->validatorSchema['url'] = new dmValidatorLinkUrl(array(
      'required' => true
    ));

    $this->widgetSchema['nb_items'] = new sfWidgetFormInputText();
    $this->validatorSchema['nb_items'] = new sfValidatorInteger(array(
      'min' => 0,
      'max' => 100
    ));

    $this->widgetSchema['life_time'] = new sfWidgetFormInputText();
    $this->validatorSchema['life_time'] = new sfValidatorInteger(array(
      'min' => 0
    ));
    $this->widgetSchema->setHelp('life_time', 'Cache life time in seconds');

    if(!$this->getDefault('nb_items'))
    {
      $this->setDefault('nb_items', 10);
    }

    if(!$this->getDefault('life_time'))
    {
      $this->setDefault('life_time', 86400);
    }
    
    parent::configure();
  }
}