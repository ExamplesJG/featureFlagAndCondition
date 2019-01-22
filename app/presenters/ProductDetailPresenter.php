<?php
declare(strict_types=1);

namespace App\Presenters;


use MyApp\BusinessLogic\Shopping\ProductDetail\Tablet\DisplayCondition;
use Nette\Application\UI\Presenter;


class ProductDetailPresenter extends Presenter
{
    /** @var DisplayCondition @inject */
    public $displayTabletCondition;

    public function actionDefault()
    {
        if ($this->displayTabletCondition->isPossible() === false) {
            $this->terminate();
        }
        // ....
    }
}