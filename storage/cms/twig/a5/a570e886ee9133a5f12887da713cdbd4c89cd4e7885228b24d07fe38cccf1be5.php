<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\Users\efim-\Desktop\projects\online-courses/themes/online_courses/pages/about.htm */
class __TwigTemplate_6b6cce4d1e44d7fb439c5aa7f8ca8696815883b07bdcfaa4a8fbe07440ffee8e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array("theme" => 57);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"main__inner\">
    <div class=\"main__left\"></div>
    <div class=\"main__content\">
        <div class=\"project-about\">
            <div class=\"project-about__label\">о проекте</div>
            <div class=\"project-about__row\">
                <div class=\"project-about__info\">
                    <div class=\"project-about__title\">Мир рядом</div>
                    <div class=\"project-about__description\">
                        Развлекательно-образовательный проект. Помогаем раскрыть
                        окружающий мир через творчество
                    </div>
                </div>
                <div class=\"project-about__statistics\">
                    <div class=\"project-about__cell cell\">
                        <div class=\"cell__value\">5</div>
                        <div class=\"cell__label\">направлений</div>
                    </div>
                    <div class=\"project-about__cell cell\">
                        <div class=\"cell__value\">10</div>
                        <div class=\"cell__label\">лет опыта</div>
                    </div>
                    <div class=\"project-about__cell cell\">
                        <div class=\"cell__value\">200+</div>
                        <div class=\"cell__label\">видео</div>
                    </div>
                    <div class=\"project-about__cell cell\">
                        <div class=\"cell__value\">100+</div>
                        <div class=\"cell__label\">студентов</div>
                    </div>
                </div>
            </div>
            <div class=\"project-about__image\"></div>
        </div>
        <div class=\"project-aim\">
            <div class=\"project-aim__row\">
                <div class=\"project-aim__aim\">Наша цель</div>
                <div class=\"project-aim__description\">
                    <div class=\"project-aim__title\">
                        Заниматься творчеством может каждый. Стань музыкантом,
                        режиссерром, фотографом. Добавь в каждую работу частицу
                        себя.
                    </div>
                    <div class=\"project-aim__about\">
                        Проведи время креативно и необычно на нашем
                        развлекательно - образовательном проекте “Мир рядом”
                        Проведи время креативно и необычно на нашем
                        развлекательно - образовательном проекте “Мир рядом”.
                        Проведи время креативно и необычно на нашем
                        развлекательно - образовательном проекте “Мир рядом”
                    </div>
                </div>
            </div>
            <div class=\"project-aim__images\">
                <div class=\"project-aim__image\">
                    <img
                        src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/project_aim1.png");
        echo "\"
                        alt=\"Цель\"
                    />
                </div>
                <div class=\"project-aim__image\">
                    <img
                        src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/project_aim2.png");
        echo "\"
                        alt=\"Цель\"
                    />
                </div>
            </div>
            <div class=\"our-worth\">
                <div class=\"our-worth__title\">Наши ценности</div>
                <div class=\"our-worth__cards\">
                    <div class=\"our-worth__card worth-card\">
                        <div class=\"worth-card__circle\"></div>
                        <div class=\"worth-card__label\">
                            Стань музыкантом, режиссерром, фотографом.
                        </div>
                    </div>
                    <div class=\"our-worth__card worth-card\">
                        <div class=\"worth-card__circle\"></div>
                        <div class=\"worth-card__label\">
                            Стань музыкантом, режиссерром, фотографом.
                        </div>
                    </div>
                    <div class=\"our-worth__card worth-card\">
                        <div class=\"worth-card__circle\"></div>
                        <div class=\"worth-card__label\">
                            Стань музыкантом, режиссерром, фотографом.
                        </div>
                    </div>
                    <div class=\"our-worth__card worth-card\">
                        <div class=\"worth-card__circle\"></div>
                        <div class=\"worth-card__label\">
                            Стань музыкантом, режиссерром, фотографом.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"main__right\"></div>
</div>
<div class=\"about-education\">
    <div class=\"main__inner\">
        <div class=\"main__left\"></div>
        <div class=\"main__content\">
            <div class=\"about-education__algorithm algorithm-education\">
                <div class=\"algorithm-education__mini-title\">
                    Как проходит обучение
                </div>
                <div class=\"algorithm-education__divider-top divider\"></div>
                <div class=\"algorithm-education__row\">
                    <div class=\"algorithm-education__title\">
                        Как проходит<br />обучение
                    </div>
                    <div class=\"algorithm-education__stages\">
                        <div class=\"algorithm-education__stage algorithm-stage\">
                            <div class=\"algorithm-stage__row\">
                                <div class=\"algorithm-stage__dot dot\"></div>
                                <div class=\"algorithm-stage__label\">
                                    Вы получаете доступ к видео <br />
                                    и дополнительным материалам.
                                </div>
                            </div>
                            <div class=\"algorithm-stage__divider divider\"></div>
                        </div>
                        <div class=\"algorithm-education__stage algorithm-stage\">
                            <div class=\"algorithm-stage__row\">
                                <div class=\"algorithm-stage__dot dot\"></div>
                                <div class=\"algorithm-stage__label\">
                                    Изучаете материал в подходящем вам темпе и в
                                    удобное для вас время.
                                </div>
                            </div>
                            <div class=\"algorithm-stage__divider divider\"></div>
                        </div>
                        <div class=\"algorithm-education__stage algorithm-stage\">
                            <div class=\"algorithm-stage__row\">
                                <div class=\"algorithm-stage__dot dot\"></div>
                                <div class=\"algorithm-stage__label\">
                                    Cоздаете свой креатив, следуя видео
                                    инструкции и дополнительному материалу
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"algorithm-education__divider-bottom divider\"></div>
            </div>
            <div class=\"about-education__videos\">
                <div class=\"about-education__videobox videobox\">
                    <img
                        class=\"videobox__video\"
                        src=\"";
        // line 152
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about_video1.png");
        echo "\"
                        alt=\"Видео 1\"
                    />
                    <div class=\"videobox__label\">Видео о нашем проекте</div>
                </div>
                <div class=\"about-education__videobox videobox\">
                    <img
                        class=\"videobox__video\"
                        src=\"";
        // line 160
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about_video2.png");
        echo "\"
                        alt=\"Видео 2\"
                    />
                    <div class=\"videobox__label\">
                        Создаем трек в стиле эмбиент
                    </div>
                </div>
            </div>
        </div>
        <div class=\"main__right\"></div>
    </div>
</div>
<div class=\"project-authors-block\">
    <div class=\"main__inner\">
        <div class=\"main__left\"></div>
        <div class=\"main__content\">
            <div class=\"project-authors-about project-authors\">
                <div class=\"project-authors__title\">Авторы курсов</div>
                <div class=\"project-authors__authors\">
                    <div class=\"project-authors__author\">
                        <img
                            src=\"";
        // line 181
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about_author.png");
        echo "\"
                            alt=\"Автор\"
                        />
                    </div>
                    <div class=\"project-authors__active-author\">
                        <img
                            src=\"";
        // line 187
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about_author.png");
        echo "\"
                            alt=\"Автор\"
                        />
                    </div>
                    <div class=\"project-authors__author\">
                        <img
                            src=\"";
        // line 193
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about_author.png");
        echo "\"
                            alt=\"Автор\"
                        />
                    </div>
                </div>
                <div class=\"project-authors__author-about author-about\">
                    <div class=\"author-about__name\">Александ Караваев</div>
                    <div class=\"author-about__about\">
                        Проведи время креативно и необычно на нашем
                        развлекательно - образовательном проекте “Мир рядом”.
                    </div>
                </div>
            </div>
        </div>
        <div class=\"main__right\"></div>
    </div>
</div>
<div class=\"project-reviews\">
    <div class=\"main__inner\">
        <div class=\"main__left\"></div>
        <div class=\"main__content project-reviews__content\">
            <div class=\"project-reviews__left\">
                <div class=\"project-reviews__title\">
                    Отзывы <br />
                    о проекте
                </div>
                <div class=\"project-reviews__submit btn-submit\">
                    <object
                        data=\"";
        // line 221
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/btn-send.svg");
        echo "\"
                        type=\"image/svg+xml\"
                    ></object>
                </div>
            </div>
            <div class=\"project-reviews__right\">
                <div class=\"project-reviews__row\">
                    <div class=\"project-reviews__type\">музыка</div>
                    <div
                        class=\"project-reviews__btns project-reviews__btns_main arrows-pagination\"
                    >
                        <div class=\"project-reviews__btn-left arrow-left\">
                            <object
                                data=\"";
        // line 234
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/btn-arrow.svg");
        echo "\"
                                type=\"image/svg+xml\"
                            ></object>
                        </div>
                        <div class=\"project-reviews__btn-right arrow-right\">
                            <object
                                data=\"";
        // line 240
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/btn-arrow.svg");
        echo "\"
                                type=\"image/svg+xml\"
                            ></object>
                        </div>
                    </div>
                </div>
                <div class=\"project-reviews__sender\">
                    Александра, Нижний Новгород
                </div>
                <div class=\"project-reviews__review\">
                    «Проведи время креативно и необычно на нашем развлекательно
                    - образовательном проекте “Мир рядом” Проведи время
                    креативно и необычно на нашем развлекательно -
                    образовательном проекте “Мир рядом”. Проведи время креативно
                    и необычно на нашем развлекательно - образовательном проекте
                    “Мир рядом”...»
                </div>
                <div class=\"project-reviews__btn-more\">
                    <a href=\"#\"
                        >Подробнее
                        <img
                            src=\"";
        // line 261
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/plus.png");
        echo "\"
                            alt=\"Подробнее\"
                    /></a>
                </div>
                <div
                    class=\"project-reviews__btns project-reviews__btns_mini arrows-pagination\"
                >
                    <div class=\"project-reviews__btn-left arrow-left\">
                        <object
                            data=\"";
        // line 270
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/btn-arrow.svg");
        echo "\"
                            type=\"image/svg+xml\"
                        ></object>
                    </div>
                    <div class=\"project-reviews__btn-right arrow-right\">
                        <object
                            data=\"";
        // line 276
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/btn-arrow.svg");
        echo "\"
                            type=\"image/svg+xml\"
                        ></object>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"main__right\"></div>
    </div>
</div>
<div class=\"main__inner\">
    <div class=\"main__left\"></div>
    <div class=\"main__content\">
        <div class=\"news\">
            <div class=\"news__title\">Новости</div>
            <div class=\"news__row\">
                <div class=\"news__news-card news-card\">
                    <div class=\"news-card__image\">
                        <img
                            src=\"";
        // line 295
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/card-news1.png");
        echo "\"
                            alt=\"Музыкальный конструктор\"
                        />
                    </div>
                    <div class=\"news-card__date\">12 октября 2020</div>
                    <div class=\"news-card__title\">Музыкальный конструктор</div>
                    <div class=\"news-card__about\">
                        Проведи время креативно и необычно на нашем
                        развлекательно - образовательном проекте “Мир рядом”
                    </div>
                    <div class=\"news-card__btn-view btn-send\">
                        <object
                            data=\"";
        // line 307
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/btn-send.svg");
        echo "\"
                            type=\"image/svg+xml\"
                        ></object>
                    </div>
                </div>
                <div class=\"news__news-card news-card\">
                    <div class=\"news-card__image\">
                        <img
                            src=\"";
        // line 315
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/card-news2.png");
        echo "\"
                            alt=\"Музыкальный конструктор\"
                        />
                    </div>
                    <div class=\"news-card__date\">12 октября 2020</div>
                    <div class=\"news-card__title\">Музыкальный конструктор</div>
                    <div class=\"news-card__about\">
                        Проведи время креативно и необычно на нашем
                        развлекательно - образовательном проекте “Мир рядом”
                    </div>
                    <div class=\"news-card__btn-view btn-send\">
                        <object
                            data=\"";
        // line 327
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/btn-send.svg");
        echo "\"
                            type=\"image/svg+xml\"
                        ></object>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"main__right\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\efim-\\Desktop\\projects\\online-courses/themes/online_courses/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 327,  423 => 315,  412 => 307,  397 => 295,  375 => 276,  366 => 270,  354 => 261,  330 => 240,  321 => 234,  305 => 221,  274 => 193,  265 => 187,  256 => 181,  232 => 160,  221 => 152,  129 => 63,  120 => 57,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"main__inner\">
    <div class=\"main__left\"></div>
    <div class=\"main__content\">
        <div class=\"project-about\">
            <div class=\"project-about__label\">о проекте</div>
            <div class=\"project-about__row\">
                <div class=\"project-about__info\">
                    <div class=\"project-about__title\">Мир рядом</div>
                    <div class=\"project-about__description\">
                        Развлекательно-образовательный проект. Помогаем раскрыть
                        окружающий мир через творчество
                    </div>
                </div>
                <div class=\"project-about__statistics\">
                    <div class=\"project-about__cell cell\">
                        <div class=\"cell__value\">5</div>
                        <div class=\"cell__label\">направлений</div>
                    </div>
                    <div class=\"project-about__cell cell\">
                        <div class=\"cell__value\">10</div>
                        <div class=\"cell__label\">лет опыта</div>
                    </div>
                    <div class=\"project-about__cell cell\">
                        <div class=\"cell__value\">200+</div>
                        <div class=\"cell__label\">видео</div>
                    </div>
                    <div class=\"project-about__cell cell\">
                        <div class=\"cell__value\">100+</div>
                        <div class=\"cell__label\">студентов</div>
                    </div>
                </div>
            </div>
            <div class=\"project-about__image\"></div>
        </div>
        <div class=\"project-aim\">
            <div class=\"project-aim__row\">
                <div class=\"project-aim__aim\">Наша цель</div>
                <div class=\"project-aim__description\">
                    <div class=\"project-aim__title\">
                        Заниматься творчеством может каждый. Стань музыкантом,
                        режиссерром, фотографом. Добавь в каждую работу частицу
                        себя.
                    </div>
                    <div class=\"project-aim__about\">
                        Проведи время креативно и необычно на нашем
                        развлекательно - образовательном проекте “Мир рядом”
                        Проведи время креативно и необычно на нашем
                        развлекательно - образовательном проекте “Мир рядом”.
                        Проведи время креативно и необычно на нашем
                        развлекательно - образовательном проекте “Мир рядом”
                    </div>
                </div>
            </div>
            <div class=\"project-aim__images\">
                <div class=\"project-aim__image\">
                    <img
                        src=\"{{ 'assets/images/project_aim1.png'|theme }}\"
                        alt=\"Цель\"
                    />
                </div>
                <div class=\"project-aim__image\">
                    <img
                        src=\"{{ 'assets/images/project_aim2.png'|theme }}\"
                        alt=\"Цель\"
                    />
                </div>
            </div>
            <div class=\"our-worth\">
                <div class=\"our-worth__title\">Наши ценности</div>
                <div class=\"our-worth__cards\">
                    <div class=\"our-worth__card worth-card\">
                        <div class=\"worth-card__circle\"></div>
                        <div class=\"worth-card__label\">
                            Стань музыкантом, режиссерром, фотографом.
                        </div>
                    </div>
                    <div class=\"our-worth__card worth-card\">
                        <div class=\"worth-card__circle\"></div>
                        <div class=\"worth-card__label\">
                            Стань музыкантом, режиссерром, фотографом.
                        </div>
                    </div>
                    <div class=\"our-worth__card worth-card\">
                        <div class=\"worth-card__circle\"></div>
                        <div class=\"worth-card__label\">
                            Стань музыкантом, режиссерром, фотографом.
                        </div>
                    </div>
                    <div class=\"our-worth__card worth-card\">
                        <div class=\"worth-card__circle\"></div>
                        <div class=\"worth-card__label\">
                            Стань музыкантом, режиссерром, фотографом.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"main__right\"></div>
</div>
<div class=\"about-education\">
    <div class=\"main__inner\">
        <div class=\"main__left\"></div>
        <div class=\"main__content\">
            <div class=\"about-education__algorithm algorithm-education\">
                <div class=\"algorithm-education__mini-title\">
                    Как проходит обучение
                </div>
                <div class=\"algorithm-education__divider-top divider\"></div>
                <div class=\"algorithm-education__row\">
                    <div class=\"algorithm-education__title\">
                        Как проходит<br />обучение
                    </div>
                    <div class=\"algorithm-education__stages\">
                        <div class=\"algorithm-education__stage algorithm-stage\">
                            <div class=\"algorithm-stage__row\">
                                <div class=\"algorithm-stage__dot dot\"></div>
                                <div class=\"algorithm-stage__label\">
                                    Вы получаете доступ к видео <br />
                                    и дополнительным материалам.
                                </div>
                            </div>
                            <div class=\"algorithm-stage__divider divider\"></div>
                        </div>
                        <div class=\"algorithm-education__stage algorithm-stage\">
                            <div class=\"algorithm-stage__row\">
                                <div class=\"algorithm-stage__dot dot\"></div>
                                <div class=\"algorithm-stage__label\">
                                    Изучаете материал в подходящем вам темпе и в
                                    удобное для вас время.
                                </div>
                            </div>
                            <div class=\"algorithm-stage__divider divider\"></div>
                        </div>
                        <div class=\"algorithm-education__stage algorithm-stage\">
                            <div class=\"algorithm-stage__row\">
                                <div class=\"algorithm-stage__dot dot\"></div>
                                <div class=\"algorithm-stage__label\">
                                    Cоздаете свой креатив, следуя видео
                                    инструкции и дополнительному материалу
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"algorithm-education__divider-bottom divider\"></div>
            </div>
            <div class=\"about-education__videos\">
                <div class=\"about-education__videobox videobox\">
                    <img
                        class=\"videobox__video\"
                        src=\"{{ 'assets/images/about_video1.png'|theme }}\"
                        alt=\"Видео 1\"
                    />
                    <div class=\"videobox__label\">Видео о нашем проекте</div>
                </div>
                <div class=\"about-education__videobox videobox\">
                    <img
                        class=\"videobox__video\"
                        src=\"{{ 'assets/images/about_video2.png'|theme }}\"
                        alt=\"Видео 2\"
                    />
                    <div class=\"videobox__label\">
                        Создаем трек в стиле эмбиент
                    </div>
                </div>
            </div>
        </div>
        <div class=\"main__right\"></div>
    </div>
</div>
<div class=\"project-authors-block\">
    <div class=\"main__inner\">
        <div class=\"main__left\"></div>
        <div class=\"main__content\">
            <div class=\"project-authors-about project-authors\">
                <div class=\"project-authors__title\">Авторы курсов</div>
                <div class=\"project-authors__authors\">
                    <div class=\"project-authors__author\">
                        <img
                            src=\"{{ 'assets/images/about_author.png'|theme }}\"
                            alt=\"Автор\"
                        />
                    </div>
                    <div class=\"project-authors__active-author\">
                        <img
                            src=\"{{ 'assets/images/about_author.png'|theme }}\"
                            alt=\"Автор\"
                        />
                    </div>
                    <div class=\"project-authors__author\">
                        <img
                            src=\"{{ 'assets/images/about_author.png'|theme }}\"
                            alt=\"Автор\"
                        />
                    </div>
                </div>
                <div class=\"project-authors__author-about author-about\">
                    <div class=\"author-about__name\">Александ Караваев</div>
                    <div class=\"author-about__about\">
                        Проведи время креативно и необычно на нашем
                        развлекательно - образовательном проекте “Мир рядом”.
                    </div>
                </div>
            </div>
        </div>
        <div class=\"main__right\"></div>
    </div>
</div>
<div class=\"project-reviews\">
    <div class=\"main__inner\">
        <div class=\"main__left\"></div>
        <div class=\"main__content project-reviews__content\">
            <div class=\"project-reviews__left\">
                <div class=\"project-reviews__title\">
                    Отзывы <br />
                    о проекте
                </div>
                <div class=\"project-reviews__submit btn-submit\">
                    <object
                        data=\"{{ 'assets/images/btn-send.svg'|theme }}\"
                        type=\"image/svg+xml\"
                    ></object>
                </div>
            </div>
            <div class=\"project-reviews__right\">
                <div class=\"project-reviews__row\">
                    <div class=\"project-reviews__type\">музыка</div>
                    <div
                        class=\"project-reviews__btns project-reviews__btns_main arrows-pagination\"
                    >
                        <div class=\"project-reviews__btn-left arrow-left\">
                            <object
                                data=\"{{ 'assets/images/btn-arrow.svg'|theme }}\"
                                type=\"image/svg+xml\"
                            ></object>
                        </div>
                        <div class=\"project-reviews__btn-right arrow-right\">
                            <object
                                data=\"{{ 'assets/images/btn-arrow.svg'|theme }}\"
                                type=\"image/svg+xml\"
                            ></object>
                        </div>
                    </div>
                </div>
                <div class=\"project-reviews__sender\">
                    Александра, Нижний Новгород
                </div>
                <div class=\"project-reviews__review\">
                    «Проведи время креативно и необычно на нашем развлекательно
                    - образовательном проекте “Мир рядом” Проведи время
                    креативно и необычно на нашем развлекательно -
                    образовательном проекте “Мир рядом”. Проведи время креативно
                    и необычно на нашем развлекательно - образовательном проекте
                    “Мир рядом”...»
                </div>
                <div class=\"project-reviews__btn-more\">
                    <a href=\"#\"
                        >Подробнее
                        <img
                            src=\"{{ 'assets/images/icons/plus.png'|theme }}\"
                            alt=\"Подробнее\"
                    /></a>
                </div>
                <div
                    class=\"project-reviews__btns project-reviews__btns_mini arrows-pagination\"
                >
                    <div class=\"project-reviews__btn-left arrow-left\">
                        <object
                            data=\"{{ 'assets/images/btn-arrow.svg'|theme }}\"
                            type=\"image/svg+xml\"
                        ></object>
                    </div>
                    <div class=\"project-reviews__btn-right arrow-right\">
                        <object
                            data=\"{{ 'assets/images/btn-arrow.svg'|theme }}\"
                            type=\"image/svg+xml\"
                        ></object>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"main__right\"></div>
    </div>
</div>
<div class=\"main__inner\">
    <div class=\"main__left\"></div>
    <div class=\"main__content\">
        <div class=\"news\">
            <div class=\"news__title\">Новости</div>
            <div class=\"news__row\">
                <div class=\"news__news-card news-card\">
                    <div class=\"news-card__image\">
                        <img
                            src=\"{{ 'assets/images/card-news1.png'|theme }}\"
                            alt=\"Музыкальный конструктор\"
                        />
                    </div>
                    <div class=\"news-card__date\">12 октября 2020</div>
                    <div class=\"news-card__title\">Музыкальный конструктор</div>
                    <div class=\"news-card__about\">
                        Проведи время креативно и необычно на нашем
                        развлекательно - образовательном проекте “Мир рядом”
                    </div>
                    <div class=\"news-card__btn-view btn-send\">
                        <object
                            data=\"{{ 'assets/images/btn-send.svg'|theme }}\"
                            type=\"image/svg+xml\"
                        ></object>
                    </div>
                </div>
                <div class=\"news__news-card news-card\">
                    <div class=\"news-card__image\">
                        <img
                            src=\"{{ 'assets/images/card-news2.png'|theme }}\"
                            alt=\"Музыкальный конструктор\"
                        />
                    </div>
                    <div class=\"news-card__date\">12 октября 2020</div>
                    <div class=\"news-card__title\">Музыкальный конструктор</div>
                    <div class=\"news-card__about\">
                        Проведи время креативно и необычно на нашем
                        развлекательно - образовательном проекте “Мир рядом”
                    </div>
                    <div class=\"news-card__btn-view btn-send\">
                        <object
                            data=\"{{ 'assets/images/btn-send.svg'|theme }}\"
                            type=\"image/svg+xml\"
                        ></object>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"main__right\"></div>
</div>", "C:\\Users\\efim-\\Desktop\\projects\\online-courses/themes/online_courses/pages/about.htm", "");
    }
}
