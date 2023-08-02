<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['JavaScript', 'ReactNative'],
                'title' => 'Aplicativo simples feito com React Native, o app foi feito para uma bolsa de estudos, a ideia do mesmo veio de um TCC',
                'image' => url('/img/appBolsa.png'),
                'github' => 'https://github.com/BMVBrun0/AppArborizacao'
            ],
            [
                'category' => ['PHP', 'Laravel', 'HTML'],
                'title' => 'Portfólio para expor projetos. Feito utilizando PHP e Laravel',
                'image' => url('/img/portifolioIMG.png'),
                'github' => 'https://github.com/BMVBrun0/Portifolio'
            ],
            [
                'category' => ['JavaScript', 'HTML'],
                'title' => 'IntraNet utilizando JavaScript, modelo simples com base para usar o Microsoft Azure',
                'image' => url('/img/intranetIMG.png'),
                'github' => 'https://github.com/BMVBrun0/IntraNet'
            ],
            // [
            //     'category' => ['PHP'],
            //     'title' => 'PHP MVC Framework',
            //     'image' => url('/img/php-mvc-framework.png'),
            //     'github' => 'https://github.com/thecodeholic/php-mvc-framework'
            // ],
            // [
            //     'category' => ['Yii2', 'Bootstrap'],
            //     'title' => 'YouTube clone with Yii2',
            //     'image' => url('/img/yii2-youtube-clone.png'),
            //     'github' => 'https://github.com/thecodeholic/Yii2-Youtube-Clone'
            // ],
            // [
            //     'category' => ['Yii2', 'VueJs'],
            //     'title' => 'Yii2 + VueJs Notes application',
            //     'image' => url('/img/yii2-vue-notes.png'),
            //     'github' =>  'https://github.com/thecodeholic/vue.js-yii2-notes'
            // ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
