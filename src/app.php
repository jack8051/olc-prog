<?php

/**
 * Render formulare, seznamu odkazu a galerie.
 *
 * @author Jan Stanek <jack51@seznam.cz>
 */

use Classes\Elements\A;
use Classes\Elements\Input;
use Classes\Elements\Img;
use Classes\Elements\Div;
use Classes\Elements\Label;
use Classes\Elements\Select;
use Classes\Elements\SelectOption;
use Classes\Elements\Form;

$rowDiv = new Div();
$rowDiv->setClass("row");

/**
 * Formular
 */
$form = new Form();
$form->setAction("/")
    ->setMethod("GET");

//jmeno
$input = new Input();
$input->setType("input")
    ->setName("jmeno")
    ->setId("jmeno")
    ->setPlaceholder("Zadejte jméno")
    ->setClass("form-control")
    ->setAutofocus(true);

$label = new Label();
$label->setFor($input->getId())
    ->setLabel("Jméno:");

$div = new Div();
$div->setClass("form-group")
    ->addChildern($label)
    ->addChildern($input);

$form->addChildern($div);

//prijmeni
$input = new Input();
$input->setType("input")
    ->setName("prijmeni")
    ->setId("prijmeni")
    ->setPlaceholder("Zadejte příjmení")
    ->setClass("form-control");

$label = new Label();
$label->setFor($input->getId())
    ->setLabel("Příjmení:");

$div = new Div();
$div->setClass("form-group")
    ->addChildern($label)
    ->addChildern($input);

$form->addChildern($div);

//pohlavi
$label = new Label();
$label->setFor($input->getId())
    ->setLabel("Pohlaví:");

$div = new Div();
$div->setClass("form-group")
    ->addChildern($label);

$form->addChildern($div);


$div = new Div();
$div->setClass("form-group");

$input = new Input();
$input->setType("radio")
    ->setName("pohlavi")
    ->setId("muz");

$label = new Label();
$label->setFor($input->getId())
    ->setLabel("muž")
    ->setClass("radio-inline")
    ->addChildern($input);

$div->addChildern($label);

$input = new Input();
$input->setType("radio")
    ->setName("pohlavi")
    ->setId("zena");

$label = new Label();
$label->setFor($input->getId())
    ->setLabel("žena")
    ->setClass("radio-inline")
    ->addChildern($input);

$div->addChildern($label);

$form->addChildern($div);

//ulice a cislo popisne
$input = new Input();
$input->setType("input")
    ->setName("ulicr")
    ->setId("ulice")
    ->setPlaceholder("Zadejte ulici a číslo popisné")
    ->setClass("form-control")
    ->setAutofocus(true);

$label = new Label();
$label->setFor($input->getId())
    ->setLabel("Ulice:");

$div = new Div();
$div->setClass("form-group")
    ->addChildern($label)
    ->addChildern($input);

$form->addChildern($div);

//mesto
$input = new Input();
$input->setType("input")
    ->setName("mesto")
    ->setId("mesto")
    ->setPlaceholder("Zadejte město")
    ->setClass("form-control")
    ->setAutofocus(true);

$label = new Label();
$label->setFor($input->getId())
    ->setLabel("Město:");

$div = new Div();
$div->setClass("form-group")
    ->addChildern($label)
    ->addChildern($input);

$form->addChildern($div);

//stat
$states['CZ'] = 'Česká republika';
$states['SK'] = 'Slovenská republika';
$states['A'] = 'Rakousko';
$states['D'] = 'Německo';
$states['PL'] = 'Polsko';

$select = new Select();
$select->setId('stat')
    ->setName('stat')
    ->setClass("form-control");

foreach ($states as $value => $title) {
    $option = new SelectOption();
    $option->setValue($value)
        ->setTitle($title);
    $select->addChildern($option);
}

$label = new Label();
$label->setFor($select->getId())
    ->setLabel("Stát:");

$div = new Div();
$div->setClass("form-group")
    ->addChildern($label)
    ->addChildern($select);

$form->addChildern($div);

//odesilaci tlacitko
$submitBtn = new Input();
$submitBtn->setType("submit")
    ->setClass("btn btn-primary");

$form->addChildern($submitBtn);


$formDiv = new Div();
$formDiv->setClass('col-sm-8')
    ->setInnerHtml("<h1>Testovací formulář</h1>")
    ->addChildern($form);

$rowDiv->addChildern($formDiv);


/**
 * Seznam odkazu
 */
$links[] = ["href" => "http://www.seznam.cz", "title" => "http://www.seznam.cz"];
$links[] = ["href" => "http://www.google.com", "title" => "http://www.google.com"];

$linksDiv = new Div();
$linksDiv->setClass("col-sm-4")
    ->setInnerHtml("<h1>Seznam odkazů</h1>");

foreach ($links as $l) {
    $a = new A();
    $a->setHref($l["href"])
        ->setTarget("_blank")
        ->setInnerHtml($l["title"]);

    $div = new Div();
    $div->setClass("col-sm-12")
        ->addChildern($a);

    $linksDiv->addChildern($div);
}

$rowDiv->addChildern($linksDiv);
$rowDiv->render();


/**
* Galerie
*/
$rowDiv = new Div();
$rowDiv->setClass("row");

$images[] = ["src" => "A1.jpg", "title" => "Rakousko - Grossglockner - 1"];
$images[] = ["src" => "A2.jpg", "title" => "Rakousko - Grossglockner - 2"];
$images[] = ["src" => "A3.jpg", "title" => "Rakousko - Grossglockner - 3"];
$images[] = ["src" => "A4.jpg", "title" => "Rakousko - Grossglockner - 4"];
$images[] = ["src" => "A5.jpg", "title" => "Rakousko - Grossglockner - 5"];

$images[] = ["src" => "CZ1.jpg", "title" => "Česká republika - Slapská přehrada - 1"];
$images[] = ["src" => "CZ2.jpg", "title" => "Česká republika - Slapská přehrada - 2"];

foreach ($images as $i) {
    $img = new Img();
    $img->setSrc("img/tn_" . $i['src'])
        ->setAlt($i['title'])
        ->setWidth(250);

    $captionDiv = new Div();
    $captionDiv->setClass("caption")
        ->setInnerHtml("<p>" . $i['title'] . "</p>");

    $link = new A();
    $link->setHref("img/" . $i['src'])
        ->setTarget("image_prev")
        ->addChildern($img)
        ->addChildern($captionDiv);

    $divTn = new Div();
    $divTn->setClass("thumbnail")
        ->addChildern($link);

    $div = new Div();
    $div->setClass("col-sm-4")
        ->addChildern($divTn);

    $rowDiv->addChildern($div);
}


$mainDiv = new Div();
$mainDiv->setClass("col-sm-12")
    ->setInnerHtml("<h1>Galerie</h1>")
    ->addChildern($rowDiv);

$mainRowDiv = new Div();
$mainRowDiv->setClass("row")
    ->addChildern($mainDiv);

$mainRowDiv->render();

