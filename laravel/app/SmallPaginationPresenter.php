<?php
namespace App;
use Illuminate\Pagination\LenghthAwarePaginator;

class SmallPaginationPresenter extends BootstrapThreePresenter {
    public function render()
    {
        if ($this->hasPages())
        {
            return sprintf(
                '<div class="pagination pagination-xs inline"><a   class="left">%s</a> <a style="margin-left: 40px" class="right">%s  %s</a></div>',
                $this->getLinks(),
                $this->getPreviousButton(),
                $this->getNextButton()
            );
        }
        return '';
    }
}