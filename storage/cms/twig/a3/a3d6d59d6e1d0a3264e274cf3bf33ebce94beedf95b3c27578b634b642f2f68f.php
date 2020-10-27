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

/* C:\Users\efim-\Desktop\projects\online-courses/themes/online_courses/pages/home.htm */
class __TwigTemplate_a94aa5540f2bb586c466992c3b92d707b6a601d26b5044410f7d98cdc75e3174 extends \Twig\Template
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
        $filters = array("theme" => 20);
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
        echo "<div class=\"main__inner main__inner_soc-links\">
    <div class=\"main__left\">
        <div class=\"main__left-links left-links left-links_bold\">
            <div class=\"left-links__soc-links\">
                <a class=\"left-links__soc-link\" href=\"#\">facebook</a>
                <a class=\"left-links__soc-link\" href=\"#\">instagram</a>
            </div>
        </div>
    </div>
    <div class=\"main__content\">
        <div class=\"welcome\">
            <div class=\"welcome__row\">
                <div class=\"welcome__left welcome-title\">
                    Мир творчества рядом с вами
                    <div class=\"welcome-title__circle\"></div>
                </div>
                <div class=\"welcome__right\">
                    <div class=\"welcome__icons\">
                        <img
                            src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/music.png");
        echo "\"
                            alt=\"Музыка\"
                            class=\"welcome__icon\"
                        />
                        <img
                            src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/image.png");
        echo "\"
                            alt=\"Творчество\"
                            class=\"welcome__icon\"
                        />
                        <img
                            src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/photo.png");
        echo "\"
                            alt=\"Фотография\"
                            class=\"welcome__icon\"
                        />
                    </div>
                    <div class=\"welcome__about\">
                        Авторские видео-инструкции для креатива и творчества
                    </div>
                </div>
            </div>
            <div class=\"welcome__image\">
                <img src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/index_welcome.png");
        echo "\" alt=\"Главная\" />
                <div class=\"welcome__arrow-in-circle\">
                    <object
                        data=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/arrow-in-circle.svg");
        echo "\"
                        type=\"image/svg+xml\"
                    ></object>
                </div>
            </div>
        </div>
    </div>
    <div class=\"main__right\"></div>
</div>
<div class=\"musical-constructor\">
    <div class=\"main__inner main__inner_soc-links\">
        <div class=\"main__left\">
            <div class=\"musical-constructor__left-links left-links\">
                <div class=\"left-links__soc-links\">
                    <a class=\"left-links__soc-link\" href=\"#\">facebook</a>
                    <a class=\"left-links__soc-link\" href=\"#\">instagram</a>
                </div>
            </div>
        </div>
        <div class=\"main__content\">
            <div class=\"musical-constructor__row\">
                <div class=\"musical-constructor__info\">
                    <span class=\"musical-constructor__tag-main tag\"
                        >музыка</span
                    >
                    <div class=\"musical-constructor__title\">
                        Музыкальный конструктор
                    </div>
                    <div class=\"musical-constructor__about\">
                        Стань музыкантом. Собери 21 музыкальную композицию в
                        разных музыкальных стилях, с помощью наших видео и
                        иллюстраций.
                    </div>
                    <div class=\"musical-constructor__tags\">
                        <div class=\"musical-constructor__tag tag tag_filled\">
                            24 видео
                        </div>
                        <div class=\"musical-constructor__tag tag tag_filled\">
                            21 композиция
                        </div>
                        <div class=\"musical-constructor__tag tag tag_filled\">
                            18 часов практики
                        </div>
                    </div>
                    <div class=\"musical-constructor__btn-submit btn-submit\">
                        <object
                            data=\"";
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/btn-send.svg");
        echo "\"
                            type=\"image/svg+xml\"
                        ></object>
                    </div>
                </div>
                <div class=\"musical-constructor__image\">
                    <img
                        src=\"";
        // line 97
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/musical_constructor.png");
        echo "\"
                        alt=\"Музыкальный конструктор\"
                    />
                </div>
            </div>
        </div>
        <div class=\"main__right\"></div>
    </div>
</div>
<div class=\"about-project\">
    <div class=\"main__inner main__inner_soc-links\">
        <div class=\"main__left\">
            <div class=\"about-project__left-links left-links\">
                <div class=\"left-links__soc-links\">
                    <a class=\"left-links__soc-link\" href=\"#\">facebook</a>
                    <a class=\"left-links__soc-link\" href=\"#\">instagram</a>
                </div>
            </div>
        </div>
        <div class=\"main__content\">
            <div class=\"about-project__info\">
                <div class=\"about-project__left\">
                    <div class=\"about-project__title\">О проекте</div>
                    <div class=\"about-project__btn-send btn-send\">
                        <object
                            data=\"";
        // line 122
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/btn-send.svg");
        echo "\"
                            type=\"image/svg+xml\"
                        ></object>
                    </div>
                </div>
                <div class=\"about-project__right\">
                    <div class=\"about-project__about1\">
                        Заниматься творчеством может каждый. Стань музыкантом,
                        режиссерром, фотографом. Добавь в каждую работу частицу
                        себя.
                    </div>
                    <div class=\"about-project__about2\">
                        Проведи время креативно и необычно на нашем
                        развлекательно - образовательном проекте “Мир рядом”.
                    </div>
                </div>
            </div>
            <div class=\"about-project__row\">
                <div class=\"about-project__videobox videobox\">
                    <img
                        src=\"";
        // line 142
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about_video1.png");
        echo "\"
                        alt=\"Видео 1\"
                        class=\"videobox__video\"
                    />
                    <div class=\"videobox__label\">Видео о нашем проекте</div>
                </div>
                <div class=\"about-project__videobox videobox\">
                    <img
                        src=\"";
        // line 150
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about_video2.png");
        echo "\"
                        alt=\"Видео 2\"
                        class=\"videobox__video\"
                    />
                    <div class=\"videobox__label\">
                        Создаем трек в стиле эмбиент
                    </div>
                </div>
            </div>
        </div>
        <div class=\"main__right\"></div>
    </div>
    <div class=\"about-education\">
        <div class=\"main__inner main__inner_soc-links\">
            <div class=\"main__left\">
                <div class=\"about-education__left-links left-links\">
                    <div class=\"left-links__soc-links\">
                        <a class=\"left-links__soc-link\" href=\"#\">facebook</a>
                        <a class=\"left-links__soc-link\" href=\"#\">instagram</a>
                    </div>
                </div>
            </div>
            <div class=\"main__content\">
                <div class=\"about-education__algorithm algorithm-education\">
                    <div class=\"algorithm-education__divider-top divider\"></div>
                    <div class=\"algorithm-education__row\">
                        <div class=\"algorithm-education__title\">
                            Как проходит<br />обучение
                        </div>
                        <div class=\"algorithm-education__stages\">
                            <div
                                class=\"algorithm-education__stage algorithm-stage\"
                            >
                                <div class=\"algorithm-stage__row\">
                                    <div class=\"algorithm-stage__dot\"></div>
                                    <div class=\"algorithm-stage__label\">
                                        Вы получаете доступ к видео <br />
                                        и дополнительным материалам.
                                    </div>
                                </div>
                                <div
                                    class=\"algorithm-stage__divider divider\"
                                ></div>
                            </div>
                            <div
                                class=\"algorithm-education__stage algorithm-stage\"
                            >
                                <div class=\"algorithm-stage__row\">
                                    <div class=\"algorithm-stage__dot\"></div>
                                    <div class=\"algorithm-stage__label\">
                                        Изучаете материал в подходящем вам темпе
                                        и в удобное для вас время.
                                    </div>
                                </div>
                                <div
                                    class=\"algorithm-stage__divider divider\"
                                ></div>
                            </div>
                            <div
                                class=\"algorithm-education__stage algorithm-stage\"
                            >
                                <div class=\"algorithm-stage__row\">
                                    <div class=\"algorithm-stage__dot\"></div>
                                    <div class=\"algorithm-stage__label\">
                                        Cоздаете свой креатив, следуя видео
                                        инструкции и дополнительному материалу
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class=\"algorithm-education__divider-bottom divider\"
                    ></div>
                </div>
            </div>
            <div class=\"main__right\"></div>
        </div>
    </div>
    <div class=\"creative-result\">
        <div class=\"main__inner\">
            <div class=\"main__left\"></div>
            <div class=\"main__content\">
                <div class=\"creative-result__schema\">
                    <div class=\"creative-result__image\">
                        <object
                            data=\"";
        // line 236
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/creative-result.svg");
        echo "\"
                            type=\"image/svg+xml\"
                        ></object>
                        <div class=\"creative-result__title\">
                            Творческий результат
                        </div>
                    </div>
                    <div
                        class=\"creative-result__label creative-result-label creative-result-label_n1\"
                    >
                        <img
                            src=\"";
        // line 247
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dot.png");
        echo "\"
                            alt=\"Творческий результат\"
                            class=\"creative-result-label__dot\"
                        />
                        <div class=\"creative-result-label__text\">
                            Проведете время креативно и необычно
                        </div>
                    </div>
                    <div
                        class=\"creative-result__label creative-result-label creative-result-label_n2\"
                    >
                        <img
                            src=\"";
        // line 259
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dot.png");
        echo "\"
                            alt=\"Творческий результат\"
                            class=\"creative-result-label__dot\"
                        />
                        <div class=\"creative-result-label__text\">
                            Проведете время креативно и необычно
                        </div>
                    </div>
                    <div
                        class=\"creative-result__label creative-result-label creative-result-label_n3\"
                    >
                        <img
                            src=\"";
        // line 271
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dot.png");
        echo "\"
                            alt=\"Творческий результат\"
                            class=\"creative-result-label__dot\"
                        />
                        <div class=\"creative-result-label__text\">
                            Проведете время креативно и необычно
                        </div>
                    </div>
                    <div
                        class=\"creative-result__label creative-result-label creative-result-label_n4\"
                    >
                        <img
                            src=\"";
        // line 283
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dot.png");
        echo "\"
                            alt=\"Творческий результат\"
                            class=\"creative-result-label__dot\"
                        />
                        <div class=\"creative-result-label__text\">
                            Проведете время креативно и необычно
                        </div>
                    </div>
                    <div
                        class=\"creative-result__label creative-result-label creative-result-label_n5\"
                    >
                        <img
                            src=\"";
        // line 295
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dot.png");
        echo "\"
                            alt=\"Творческий результат\"
                            class=\"creative-result-label__dot\"
                        />
                        <div class=\"creative-result-label__text\">
                            Проведете время креативно и необычно
                        </div>
                    </div>
                    <div
                        class=\"creative-result__label creative-result-label creative-result-label_n6\"
                    >
                        <img
                            src=\"";
        // line 307
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dot.png");
        echo "\"
                            alt=\"Творческий результат\"
                            class=\"creative-result-label__dot\"
                        />
                        <div class=\"creative-result-label__text\">
                            Проведете время креативно и необычно
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"main__right\"></div>
        </div>
    </div>
</div>
<div class=\"our-telegram\">
    <div class=\"main__inner\">
        <div class=\"main__left\">
            <div class=\"our-telegram__icons our-telegram__icons_left1\">
                <object
                    data=\"";
        // line 326
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/soc/telegram_blue.svg");
        echo "\"
                    type=\"image/svg+xml\"
                    class=\"our-telegram__icon\"
                ></object>
                <object
                    data=\"";
        // line 331
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/soc/telegram_blue.svg");
        echo "\"
                    type=\"image/svg+xml\"
                    class=\"our-telegram__icon\"
                ></object>
            </div>
        </div>
        <div class=\"main__content\">
            <div class=\"our-telegram__icons our-telegram__icons_left2\">
                <object
                    data=\"";
        // line 340
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/soc/telegram_blue_filled.svg");
        echo "\"
                    type=\"image/svg+xml\"
                    class=\"our-telegram__icon our-telegram__icon_main\"
                ></object>
                <object
                    data=\"";
        // line 345
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/soc/telegram_blue.svg");
        echo "\"
                    type=\"image/svg+xml\"
                    class=\"our-telegram__icon\"
                ></object>
                <object
                    data=\"";
        // line 350
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/soc/telegram_blue.svg");
        echo "\"
                    type=\"image/svg+xml\"
                    class=\"our-telegram__icon\"
                ></object>
            </div>
            <div class=\"our-telegram__title\">
                Закрытый телеграм- канал для каждого потока
            </div>
            <div class=\"our-telegram__icons our-telegram__icons_right1\">
                <object
                    data=\"";
        // line 360
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/soc/telegram_blue.svg");
        echo "\"
                    type=\"image/svg+xml\"
                    class=\"our-telegram__icon\"
                ></object>
                <object
                    data=\"";
        // line 365
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/soc/telegram_blue.svg");
        echo "\"
                    type=\"image/svg+xml\"
                    class=\"our-telegram__icon\"
                ></object>
                <object
                    data=\"";
        // line 370
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/soc/telegram_blue_filled.svg");
        echo "\"
                    type=\"image/svg+xml\"
                    class=\"our-telegram__icon our-telegram__icon_main\"
                ></object>
            </div>
        </div>
        <div class=\"main__right\">
            <div class=\"our-telegram__icons our-telegram__icons_right2\">
                <object
                    data=\"";
        // line 379
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/soc/telegram_blue.svg");
        echo "\"
                    type=\"image/svg+xml\"
                    class=\"our-telegram__icon\"
                ></object>
                <object
                    data=\"";
        // line 384
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/soc/telegram_blue.svg");
        echo "\"
                    type=\"image/svg+xml\"
                    class=\"our-telegram__icon\"
                ></object>
            </div>
        </div>
    </div>
</div>
<div
    class=\"project-authors-block project-authors-block_bg-blue project-authors-block_index\"
>
    <div class=\"main__inner main__inner_soc-links\">
        <div class=\"main__left\">
            <div class=\"project-authors-block__left-links left-links\">
                <div class=\"left-links__soc-links\">
                    <a class=\"left-links__soc-link\" href=\"#\">facebook</a>
                    <a class=\"left-links__soc-link\" href=\"#\">instagram</a>
                </div>
            </div>
        </div>
        <div class=\"main__content\">
            <div class=\"project-authors\">
                <div class=\"project-authors__title\">Авторы курсов</div>
                <div class=\"project-authors__authors\">
                    <div class=\"project-authors__author\">
                        <img src=\"";
        // line 409
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about_author.png");
        echo "\" alt=\"Автор\" />
                    </div>
                    <div class=\"project-authors__active-author\">
                        <img src=\"";
        // line 412
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about_author.png");
        echo "\" alt=\"Автор\" />
                    </div>
                    <div class=\"project-authors__author\">
                        <img src=\"";
        // line 415
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about_author.png");
        echo "\" alt=\"Автор\" />
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
<div class=\"faq\">
    <div class=\"main__inner main__inner_soc-links\">
        <div class=\"main__left\">
            <div class=\"faq__left-links left-links\">
                <div class=\"left-links__soc-links\">
                    <a class=\"left-links__soc-link\" href=\"#\">facebook</a>
                    <a class=\"left-links__soc-link\" href=\"#\">instagram</a>
                </div>
            </div>
        </div>
        <div class=\"main__content\">
            <div class=\"about-education__algorithm algorithm-education\">
                <div class=\"algorithm-education__divider-top divider\"></div>
                <div class=\"algorithm-education__row\">
                    <div class=\"algorithm-education__title\">Вопрос - ответ</div>
                    <div class=\"algorithm-education__stages\">
                        <div class=\"algorithm-education__stage algorithm-stage\">
                            <div class=\"algorithm-stage__row\">
                                <div class=\"algorithm-stage__dot\"></div>
                                <div class=\"algorithm-stage__label\">
                                    Вы получаете доступ к видео и дополнительным
                                    материалам.
                                </div>
                            </div>
                            <div class=\"algorithm-stage__divider divider\"></div>
                        </div>
                        <div class=\"algorithm-education__stage algorithm-stage\">
                            <div class=\"algorithm-stage__row\">
                                <div class=\"algorithm-stage__dot\"></div>
                                <div class=\"algorithm-stage__label\">
                                    Изучаете материал в подходящем вам темпе и в
                                    удобное для вас время.
                                </div>
                            </div>
                            <div class=\"algorithm-stage__divider divider\"></div>
                        </div>
                        <div class=\"algorithm-education__stage algorithm-stage\">
                            <div class=\"algorithm-stage__row\">
                                <div class=\"algorithm-stage__dot\"></div>
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
        </div>
        <div class=\"main__right\"></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\efim-\\Desktop\\projects\\online-courses/themes/online_courses/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  565 => 415,  559 => 412,  553 => 409,  525 => 384,  517 => 379,  505 => 370,  497 => 365,  489 => 360,  476 => 350,  468 => 345,  460 => 340,  448 => 331,  440 => 326,  418 => 307,  403 => 295,  388 => 283,  373 => 271,  358 => 259,  343 => 247,  329 => 236,  240 => 150,  229 => 142,  206 => 122,  178 => 97,  168 => 90,  119 => 44,  113 => 41,  99 => 30,  91 => 25,  83 => 20,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"main__inner main__inner_soc-links\">
    <div class=\"main__left\">
        <div class=\"main__left-links left-links left-links_bold\">
            <div class=\"left-links__soc-links\">
                <a class=\"left-links__soc-link\" href=\"#\">facebook</a>
                <a class=\"left-links__soc-link\" href=\"#\">instagram</a>
            </div>
        </div>
    </div>
    <div class=\"main__content\">
        <div class=\"welcome\">
            <div class=\"welcome__row\">
                <div class=\"welcome__left welcome-title\">
                    Мир творчества рядом с вами
                    <div class=\"welcome-title__circle\"></div>
                </div>
                <div class=\"welcome__right\">
                    <div class=\"welcome__icons\">
                        <img
                            src=\"{{ 'assets/images/icons/music.png'|theme }}\"
                            alt=\"Музыка\"
                            class=\"welcome__icon\"
                        />
                        <img
                            src=\"{{ 'assets/images/icons/image.png'|theme }}\"
                            alt=\"Творчество\"
                            class=\"welcome__icon\"
                        />
                        <img
                            src=\"{{ 'assets/images/icons/photo.png'|theme }}\"
                            alt=\"Фотография\"
                            class=\"welcome__icon\"
                        />
                    </div>
                    <div class=\"welcome__about\">
                        Авторские видео-инструкции для креатива и творчества
                    </div>
                </div>
            </div>
            <div class=\"welcome__image\">
                <img src=\"{{ 'assets/images/index_welcome.png'|theme }}\" alt=\"Главная\" />
                <div class=\"welcome__arrow-in-circle\">
                    <object
                        data=\"{{ 'assets/images/arrow-in-circle.svg'|theme }}\"
                        type=\"image/svg+xml\"
                    ></object>
                </div>
            </div>
        </div>
    </div>
    <div class=\"main__right\"></div>
</div>
<div class=\"musical-constructor\">
    <div class=\"main__inner main__inner_soc-links\">
        <div class=\"main__left\">
            <div class=\"musical-constructor__left-links left-links\">
                <div class=\"left-links__soc-links\">
                    <a class=\"left-links__soc-link\" href=\"#\">facebook</a>
                    <a class=\"left-links__soc-link\" href=\"#\">instagram</a>
                </div>
            </div>
        </div>
        <div class=\"main__content\">
            <div class=\"musical-constructor__row\">
                <div class=\"musical-constructor__info\">
                    <span class=\"musical-constructor__tag-main tag\"
                        >музыка</span
                    >
                    <div class=\"musical-constructor__title\">
                        Музыкальный конструктор
                    </div>
                    <div class=\"musical-constructor__about\">
                        Стань музыкантом. Собери 21 музыкальную композицию в
                        разных музыкальных стилях, с помощью наших видео и
                        иллюстраций.
                    </div>
                    <div class=\"musical-constructor__tags\">
                        <div class=\"musical-constructor__tag tag tag_filled\">
                            24 видео
                        </div>
                        <div class=\"musical-constructor__tag tag tag_filled\">
                            21 композиция
                        </div>
                        <div class=\"musical-constructor__tag tag tag_filled\">
                            18 часов практики
                        </div>
                    </div>
                    <div class=\"musical-constructor__btn-submit btn-submit\">
                        <object
                            data=\"{{ 'assets/images/btn-send.svg'|theme }}\"
                            type=\"image/svg+xml\"
                        ></object>
                    </div>
                </div>
                <div class=\"musical-constructor__image\">
                    <img
                        src=\"{{ 'assets/images/musical_constructor.png'|theme }}\"
                        alt=\"Музыкальный конструктор\"
                    />
                </div>
            </div>
        </div>
        <div class=\"main__right\"></div>
    </div>
</div>
<div class=\"about-project\">
    <div class=\"main__inner main__inner_soc-links\">
        <div class=\"main__left\">
            <div class=\"about-project__left-links left-links\">
                <div class=\"left-links__soc-links\">
                    <a class=\"left-links__soc-link\" href=\"#\">facebook</a>
                    <a class=\"left-links__soc-link\" href=\"#\">instagram</a>
                </div>
            </div>
        </div>
        <div class=\"main__content\">
            <div class=\"about-project__info\">
                <div class=\"about-project__left\">
                    <div class=\"about-project__title\">О проекте</div>
                    <div class=\"about-project__btn-send btn-send\">
                        <object
                            data=\"{{ 'assets/images/btn-send.svg'|theme }}\"
                            type=\"image/svg+xml\"
                        ></object>
                    </div>
                </div>
                <div class=\"about-project__right\">
                    <div class=\"about-project__about1\">
                        Заниматься творчеством может каждый. Стань музыкантом,
                        режиссерром, фотографом. Добавь в каждую работу частицу
                        себя.
                    </div>
                    <div class=\"about-project__about2\">
                        Проведи время креативно и необычно на нашем
                        развлекательно - образовательном проекте “Мир рядом”.
                    </div>
                </div>
            </div>
            <div class=\"about-project__row\">
                <div class=\"about-project__videobox videobox\">
                    <img
                        src=\"{{ 'assets/images/about_video1.png'|theme }}\"
                        alt=\"Видео 1\"
                        class=\"videobox__video\"
                    />
                    <div class=\"videobox__label\">Видео о нашем проекте</div>
                </div>
                <div class=\"about-project__videobox videobox\">
                    <img
                        src=\"{{ 'assets/images/about_video2.png'|theme }}\"
                        alt=\"Видео 2\"
                        class=\"videobox__video\"
                    />
                    <div class=\"videobox__label\">
                        Создаем трек в стиле эмбиент
                    </div>
                </div>
            </div>
        </div>
        <div class=\"main__right\"></div>
    </div>
    <div class=\"about-education\">
        <div class=\"main__inner main__inner_soc-links\">
            <div class=\"main__left\">
                <div class=\"about-education__left-links left-links\">
                    <div class=\"left-links__soc-links\">
                        <a class=\"left-links__soc-link\" href=\"#\">facebook</a>
                        <a class=\"left-links__soc-link\" href=\"#\">instagram</a>
                    </div>
                </div>
            </div>
            <div class=\"main__content\">
                <div class=\"about-education__algorithm algorithm-education\">
                    <div class=\"algorithm-education__divider-top divider\"></div>
                    <div class=\"algorithm-education__row\">
                        <div class=\"algorithm-education__title\">
                            Как проходит<br />обучение
                        </div>
                        <div class=\"algorithm-education__stages\">
                            <div
                                class=\"algorithm-education__stage algorithm-stage\"
                            >
                                <div class=\"algorithm-stage__row\">
                                    <div class=\"algorithm-stage__dot\"></div>
                                    <div class=\"algorithm-stage__label\">
                                        Вы получаете доступ к видео <br />
                                        и дополнительным материалам.
                                    </div>
                                </div>
                                <div
                                    class=\"algorithm-stage__divider divider\"
                                ></div>
                            </div>
                            <div
                                class=\"algorithm-education__stage algorithm-stage\"
                            >
                                <div class=\"algorithm-stage__row\">
                                    <div class=\"algorithm-stage__dot\"></div>
                                    <div class=\"algorithm-stage__label\">
                                        Изучаете материал в подходящем вам темпе
                                        и в удобное для вас время.
                                    </div>
                                </div>
                                <div
                                    class=\"algorithm-stage__divider divider\"
                                ></div>
                            </div>
                            <div
                                class=\"algorithm-education__stage algorithm-stage\"
                            >
                                <div class=\"algorithm-stage__row\">
                                    <div class=\"algorithm-stage__dot\"></div>
                                    <div class=\"algorithm-stage__label\">
                                        Cоздаете свой креатив, следуя видео
                                        инструкции и дополнительному материалу
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class=\"algorithm-education__divider-bottom divider\"
                    ></div>
                </div>
            </div>
            <div class=\"main__right\"></div>
        </div>
    </div>
    <div class=\"creative-result\">
        <div class=\"main__inner\">
            <div class=\"main__left\"></div>
            <div class=\"main__content\">
                <div class=\"creative-result__schema\">
                    <div class=\"creative-result__image\">
                        <object
                            data=\"{{ 'assets/images/creative-result.svg'|theme }}\"
                            type=\"image/svg+xml\"
                        ></object>
                        <div class=\"creative-result__title\">
                            Творческий результат
                        </div>
                    </div>
                    <div
                        class=\"creative-result__label creative-result-label creative-result-label_n1\"
                    >
                        <img
                            src=\"{{ 'assets/images/dot.png'|theme }}\"
                            alt=\"Творческий результат\"
                            class=\"creative-result-label__dot\"
                        />
                        <div class=\"creative-result-label__text\">
                            Проведете время креативно и необычно
                        </div>
                    </div>
                    <div
                        class=\"creative-result__label creative-result-label creative-result-label_n2\"
                    >
                        <img
                            src=\"{{ 'assets/images/dot.png'|theme }}\"
                            alt=\"Творческий результат\"
                            class=\"creative-result-label__dot\"
                        />
                        <div class=\"creative-result-label__text\">
                            Проведете время креативно и необычно
                        </div>
                    </div>
                    <div
                        class=\"creative-result__label creative-result-label creative-result-label_n3\"
                    >
                        <img
                            src=\"{{ 'assets/images/dot.png'|theme }}\"
                            alt=\"Творческий результат\"
                            class=\"creative-result-label__dot\"
                        />
                        <div class=\"creative-result-label__text\">
                            Проведете время креативно и необычно
                        </div>
                    </div>
                    <div
                        class=\"creative-result__label creative-result-label creative-result-label_n4\"
                    >
                        <img
                            src=\"{{ 'assets/images/dot.png'|theme }}\"
                            alt=\"Творческий результат\"
                            class=\"creative-result-label__dot\"
                        />
                        <div class=\"creative-result-label__text\">
                            Проведете время креативно и необычно
                        </div>
                    </div>
                    <div
                        class=\"creative-result__label creative-result-label creative-result-label_n5\"
                    >
                        <img
                            src=\"{{ 'assets/images/dot.png'|theme }}\"
                            alt=\"Творческий результат\"
                            class=\"creative-result-label__dot\"
                        />
                        <div class=\"creative-result-label__text\">
                            Проведете время креативно и необычно
                        </div>
                    </div>
                    <div
                        class=\"creative-result__label creative-result-label creative-result-label_n6\"
                    >
                        <img
                            src=\"{{ 'assets/images/dot.png'|theme }}\"
                            alt=\"Творческий результат\"
                            class=\"creative-result-label__dot\"
                        />
                        <div class=\"creative-result-label__text\">
                            Проведете время креативно и необычно
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"main__right\"></div>
        </div>
    </div>
</div>
<div class=\"our-telegram\">
    <div class=\"main__inner\">
        <div class=\"main__left\">
            <div class=\"our-telegram__icons our-telegram__icons_left1\">
                <object
                    data=\"{{ 'assets/images/icons/soc/telegram_blue.svg'|theme }}\"
                    type=\"image/svg+xml\"
                    class=\"our-telegram__icon\"
                ></object>
                <object
                    data=\"{{ 'assets/images/icons/soc/telegram_blue.svg'|theme }}\"
                    type=\"image/svg+xml\"
                    class=\"our-telegram__icon\"
                ></object>
            </div>
        </div>
        <div class=\"main__content\">
            <div class=\"our-telegram__icons our-telegram__icons_left2\">
                <object
                    data=\"{{ 'assets/images/icons/soc/telegram_blue_filled.svg'|theme }}\"
                    type=\"image/svg+xml\"
                    class=\"our-telegram__icon our-telegram__icon_main\"
                ></object>
                <object
                    data=\"{{ 'assets/images/icons/soc/telegram_blue.svg'|theme }}\"
                    type=\"image/svg+xml\"
                    class=\"our-telegram__icon\"
                ></object>
                <object
                    data=\"{{ 'assets/images/icons/soc/telegram_blue.svg'|theme }}\"
                    type=\"image/svg+xml\"
                    class=\"our-telegram__icon\"
                ></object>
            </div>
            <div class=\"our-telegram__title\">
                Закрытый телеграм- канал для каждого потока
            </div>
            <div class=\"our-telegram__icons our-telegram__icons_right1\">
                <object
                    data=\"{{ 'assets/images/icons/soc/telegram_blue.svg'|theme }}\"
                    type=\"image/svg+xml\"
                    class=\"our-telegram__icon\"
                ></object>
                <object
                    data=\"{{ 'assets/images/icons/soc/telegram_blue.svg'|theme }}\"
                    type=\"image/svg+xml\"
                    class=\"our-telegram__icon\"
                ></object>
                <object
                    data=\"{{ 'assets/images/icons/soc/telegram_blue_filled.svg'|theme }}\"
                    type=\"image/svg+xml\"
                    class=\"our-telegram__icon our-telegram__icon_main\"
                ></object>
            </div>
        </div>
        <div class=\"main__right\">
            <div class=\"our-telegram__icons our-telegram__icons_right2\">
                <object
                    data=\"{{ 'assets/images/icons/soc/telegram_blue.svg'|theme }}\"
                    type=\"image/svg+xml\"
                    class=\"our-telegram__icon\"
                ></object>
                <object
                    data=\"{{ 'assets/images/icons/soc/telegram_blue.svg'|theme }}\"
                    type=\"image/svg+xml\"
                    class=\"our-telegram__icon\"
                ></object>
            </div>
        </div>
    </div>
</div>
<div
    class=\"project-authors-block project-authors-block_bg-blue project-authors-block_index\"
>
    <div class=\"main__inner main__inner_soc-links\">
        <div class=\"main__left\">
            <div class=\"project-authors-block__left-links left-links\">
                <div class=\"left-links__soc-links\">
                    <a class=\"left-links__soc-link\" href=\"#\">facebook</a>
                    <a class=\"left-links__soc-link\" href=\"#\">instagram</a>
                </div>
            </div>
        </div>
        <div class=\"main__content\">
            <div class=\"project-authors\">
                <div class=\"project-authors__title\">Авторы курсов</div>
                <div class=\"project-authors__authors\">
                    <div class=\"project-authors__author\">
                        <img src=\"{{ 'assets/images/about_author.png'|theme }}\" alt=\"Автор\" />
                    </div>
                    <div class=\"project-authors__active-author\">
                        <img src=\"{{ 'assets/images/about_author.png'|theme }}\" alt=\"Автор\" />
                    </div>
                    <div class=\"project-authors__author\">
                        <img src=\"{{ 'assets/images/about_author.png'|theme }}\" alt=\"Автор\" />
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
<div class=\"faq\">
    <div class=\"main__inner main__inner_soc-links\">
        <div class=\"main__left\">
            <div class=\"faq__left-links left-links\">
                <div class=\"left-links__soc-links\">
                    <a class=\"left-links__soc-link\" href=\"#\">facebook</a>
                    <a class=\"left-links__soc-link\" href=\"#\">instagram</a>
                </div>
            </div>
        </div>
        <div class=\"main__content\">
            <div class=\"about-education__algorithm algorithm-education\">
                <div class=\"algorithm-education__divider-top divider\"></div>
                <div class=\"algorithm-education__row\">
                    <div class=\"algorithm-education__title\">Вопрос - ответ</div>
                    <div class=\"algorithm-education__stages\">
                        <div class=\"algorithm-education__stage algorithm-stage\">
                            <div class=\"algorithm-stage__row\">
                                <div class=\"algorithm-stage__dot\"></div>
                                <div class=\"algorithm-stage__label\">
                                    Вы получаете доступ к видео и дополнительным
                                    материалам.
                                </div>
                            </div>
                            <div class=\"algorithm-stage__divider divider\"></div>
                        </div>
                        <div class=\"algorithm-education__stage algorithm-stage\">
                            <div class=\"algorithm-stage__row\">
                                <div class=\"algorithm-stage__dot\"></div>
                                <div class=\"algorithm-stage__label\">
                                    Изучаете материал в подходящем вам темпе и в
                                    удобное для вас время.
                                </div>
                            </div>
                            <div class=\"algorithm-stage__divider divider\"></div>
                        </div>
                        <div class=\"algorithm-education__stage algorithm-stage\">
                            <div class=\"algorithm-stage__row\">
                                <div class=\"algorithm-stage__dot\"></div>
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
        </div>
        <div class=\"main__right\"></div>
    </div>
</div>", "C:\\Users\\efim-\\Desktop\\projects\\online-courses/themes/online_courses/pages/home.htm", "");
    }
}
