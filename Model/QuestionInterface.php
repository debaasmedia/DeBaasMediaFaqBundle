<?php

  namespace DeBaasMedia\Bundle\FaqBundle\Model;

  interface QuestionInterface
  {

    function getTitle ();

    function getBody ();

    function getRating ();

    function getOwner ();

  }