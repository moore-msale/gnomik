<?php


namespace App\vendor\tcg\formFields;


use TCG\Voyager\FormFields\AbstractHandler;

class MultipleTags extends AbstractHandler
{
    protected $codename = "Multiple tags";

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('formfields.tags', [
            'row' => $row,
            'options' => $options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent
        ]);
    }
}