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

/* C:\Users\efim-\Desktop\projects\online-courses/themes/online_courses/pages/catalog.htm */
class __TwigTemplate_137ca797320e9f4741d0b4d306f38429434b96fdd671ae829823c8e4c865d176 extends \Twig\Template
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
        $filters = array("theme" => 10);
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
        // line 2
        echo "<div class=\"main__inner\">
    <div class=\"main__left\"></div>
    <div class=\"main__content\">
        <div class=\"all-courses\">
            <div class=\"all-courses__title\">Все курсы</div>
            <div class=\"all-courses__cards\">
                <div class=\"all-courses__card course-card\">
                    <div class=\"course-card__image\">
                        <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/course_card1.png");
        echo "\" alt=\"...\" />
                        <div class=\"course-card__types\">
                            <div class=\"course-card__type type\">музыка</div>
                        </div>
                    </div>
                    <div class=\"course-card__about\">
                        <div class=\"course-card__name\">
                            Музыкальный конструктор
                        </div>
                        <div class=\"course-card__description\">
                            Собери 21 музыкальную композицию в разных
                            музыкальных стилях.
                        </div>
                        <div class=\"course-card__bottom\">
                            <div class=\"course-card__tags\">
                                <div class=\"course-card__tag tag\">24 видео</div>
                                <div class=\"course-card__tag tag\">
                                    21 композиция
                                </div>
                                <div class=\"course-card__tag tag\">
                                    18 часов практики
                                </div>
                                <div class=\"course-card__tag tag\">24 видео</div>
                            </div>
                            <div class=\"course-card__btn\">
                                <div class=\"btn-submit\">
                                    <object
                                        data=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/btn-submit.svg");
        echo "\"
                                        type=\"image/svg+xml\"
                                    ></object>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"all-courses__card course-card\">
                    <div class=\"course-card__image\">
                        <img src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/course_card2.png");
        echo "\" alt=\"...\" />
                        <div class=\"course-card__types\">
                            <div class=\"course-card__type type\">дизайн</div>
                        </div>
                    </div>
                    <div class=\"course-card__about\">
                        <div class=\"course-card__name\">
                            Творческий конструктор
                        </div>
                        <div class=\"course-card__description\">
                            Собери 21 музыкальную композицию в разных
                            музыкальных стилях.
                        </div>
                        <div class=\"course-card__bottom\">
                            <div class=\"course-card__tags\">
                                <div
                                    class=\"course-card__tag tag tag_border-red\"
                                >
                                    24 видео
                                </div>
                                <div
                                    class=\"course-card__tag tag tag_border-red\"
                                >
                                    21 композиция
                                </div>
                                <div
                                    class=\"course-card__tag tag tag_border-red\"
                                >
                                    18 часов практики
                                </div>
                                <div
                                    class=\"course-card__tag tag tag_border-red\"
                                >
                                    24 видео
                                </div>
                            </div>
                            <div class=\"course-card__btn\">
                                <div class=\"btn-submit\">
                                    <object
                                        data=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/btn-submit.svg");
        echo "\"
                                        type=\"image/svg+xml\"
                                    ></object>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"all-courses__card course-card\">
                    <div class=\"course-card__image\">
                        <img src=\"";
        // line 96
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/course_card3.png");
        echo "\" alt=\"...\" />
                        <div class=\"course-card__types\">
                            <div class=\"course-card__type type\">фото</div>
                        </div>
                    </div>
                    <div class=\"course-card__about\">
                        <div class=\"course-card__name\">
                            Музыкальный конструктор
                        </div>
                        <div class=\"course-card__description\">
                            Собери 21 музыкальную композицию в разных
                            музыкальных стилях.
                        </div>
                        <div class=\"course-card__bottom\">
                            <div class=\"course-card__tags\">
                                <div
                                    class=\"course-card__tag tag tag_border-violet\"
                                >
                                    24 видео
                                </div>
                                <div
                                    class=\"course-card__tag tag tag_border-violet\"
                                >
                                    21 композиция
                                </div>
                                <div
                                    class=\"course-card__tag tag tag_border-violet\"
                                >
                                    18 часов практики
                                </div>
                                <div
                                    class=\"course-card__tag tag tag_border-violet\"
                                >
                                    24 видео
                                </div>
                            </div>
                            <div class=\"course-card__btn\">
                                <div class=\"btn-submit\">
                                    <object
                                        data=\"";
        // line 135
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/btn-submit.svg");
        echo "\"
                                        type=\"image/svg+xml\"
                                    ></object>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"all-courses__card course-card\">
                    <div class=\"course-card__image\">
                        <img src=\"";
        // line 145
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/course_card4.png");
        echo "\" alt=\"...\" />
                        <div class=\"course-card__types\">
                            <div class=\"course-card__type type\">музыка</div>
                        </div>
                    </div>
                    <div class=\"course-card__about\">
                        <div class=\"course-card__name\">
                            Творческий конструктор
                        </div>
                        <div class=\"course-card__description\">
                            Собери 21 музыкальную композицию в разных
                            музыкальных стилях.
                        </div>
                        <div class=\"course-card__bottom\">
                            <div class=\"course-card__tags\">
                                <div
                                    class=\"course-card__tag tag tag_border-green\"
                                >
                                    24 видео
                                </div>
                                <div
                                    class=\"course-card__tag tag tag_border-green\"
                                >
                                    21 композиция
                                </div>
                                <div
                                    class=\"course-card__tag tag tag_border-green\"
                                >
                                    18 часов практики
                                </div>
                                <div
                                    class=\"course-card__tag tag tag_border-green\"
                                >
                                    24 видео
                                </div>
                            </div>
                            <div class=\"course-card__btn\">
                                <div class=\"btn-submit\">
                                    <object
                                        data=\"";
        // line 184
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/btn-submit.svg");
        echo "\"
                                        type=\"image/svg+xml\"
                                    ></object>
                                </div>
                            </div>
                        </div>
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
        return "C:\\Users\\efim-\\Desktop\\projects\\online-courses/themes/online_courses/pages/catalog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 184,  225 => 145,  212 => 135,  170 => 96,  157 => 86,  115 => 47,  102 => 37,  72 => 10,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"main__inner\">
    <div class=\"main__left\"></div>
    <div class=\"main__content\">
        <div class=\"all-courses\">
            <div class=\"all-courses__title\">Все курсы</div>
            <div class=\"all-courses__cards\">
                <div class=\"all-courses__card course-card\">
                    <div class=\"course-card__image\">
                        <img src=\"{{ 'assets/images/course_card1.png'|theme }}\" alt=\"...\" />
                        <div class=\"course-card__types\">
                            <div class=\"course-card__type type\">музыка</div>
                        </div>
                    </div>
                    <div class=\"course-card__about\">
                        <div class=\"course-card__name\">
                            Музыкальный конструктор
                        </div>
                        <div class=\"course-card__description\">
                            Собери 21 музыкальную композицию в разных
                            музыкальных стилях.
                        </div>
                        <div class=\"course-card__bottom\">
                            <div class=\"course-card__tags\">
                                <div class=\"course-card__tag tag\">24 видео</div>
                                <div class=\"course-card__tag tag\">
                                    21 композиция
                                </div>
                                <div class=\"course-card__tag tag\">
                                    18 часов практики
                                </div>
                                <div class=\"course-card__tag tag\">24 видео</div>
                            </div>
                            <div class=\"course-card__btn\">
                                <div class=\"btn-submit\">
                                    <object
                                        data=\"{{ 'assets/images/btn-submit.svg'|theme }}\"
                                        type=\"image/svg+xml\"
                                    ></object>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"all-courses__card course-card\">
                    <div class=\"course-card__image\">
                        <img src=\"{{ 'assets/images/course_card2.png'|theme }}\" alt=\"...\" />
                        <div class=\"course-card__types\">
                            <div class=\"course-card__type type\">дизайн</div>
                        </div>
                    </div>
                    <div class=\"course-card__about\">
                        <div class=\"course-card__name\">
                            Творческий конструктор
                        </div>
                        <div class=\"course-card__description\">
                            Собери 21 музыкальную композицию в разных
                            музыкальных стилях.
                        </div>
                        <div class=\"course-card__bottom\">
                            <div class=\"course-card__tags\">
                                <div
                                    class=\"course-card__tag tag tag_border-red\"
                                >
                                    24 видео
                                </div>
                                <div
                                    class=\"course-card__tag tag tag_border-red\"
                                >
                                    21 композиция
                                </div>
                                <div
                                    class=\"course-card__tag tag tag_border-red\"
                                >
                                    18 часов практики
                                </div>
                                <div
                                    class=\"course-card__tag tag tag_border-red\"
                                >
                                    24 видео
                                </div>
                            </div>
                            <div class=\"course-card__btn\">
                                <div class=\"btn-submit\">
                                    <object
                                        data=\"{{ 'assets/images/btn-submit.svg'|theme }}\"
                                        type=\"image/svg+xml\"
                                    ></object>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"all-courses__card course-card\">
                    <div class=\"course-card__image\">
                        <img src=\"{{ 'assets/images/course_card3.png'|theme }}\" alt=\"...\" />
                        <div class=\"course-card__types\">
                            <div class=\"course-card__type type\">фото</div>
                        </div>
                    </div>
                    <div class=\"course-card__about\">
                        <div class=\"course-card__name\">
                            Музыкальный конструктор
                        </div>
                        <div class=\"course-card__description\">
                            Собери 21 музыкальную композицию в разных
                            музыкальных стилях.
                        </div>
                        <div class=\"course-card__bottom\">
                            <div class=\"course-card__tags\">
                                <div
                                    class=\"course-card__tag tag tag_border-violet\"
                                >
                                    24 видео
                                </div>
                                <div
                                    class=\"course-card__tag tag tag_border-violet\"
                                >
                                    21 композиция
                                </div>
                                <div
                                    class=\"course-card__tag tag tag_border-violet\"
                                >
                                    18 часов практики
                                </div>
                                <div
                                    class=\"course-card__tag tag tag_border-violet\"
                                >
                                    24 видео
                                </div>
                            </div>
                            <div class=\"course-card__btn\">
                                <div class=\"btn-submit\">
                                    <object
                                        data=\"{{ 'assets/images/btn-submit.svg'|theme }}\"
                                        type=\"image/svg+xml\"
                                    ></object>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"all-courses__card course-card\">
                    <div class=\"course-card__image\">
                        <img src=\"{{ 'assets/images/course_card4.png'|theme }}\" alt=\"...\" />
                        <div class=\"course-card__types\">
                            <div class=\"course-card__type type\">музыка</div>
                        </div>
                    </div>
                    <div class=\"course-card__about\">
                        <div class=\"course-card__name\">
                            Творческий конструктор
                        </div>
                        <div class=\"course-card__description\">
                            Собери 21 музыкальную композицию в разных
                            музыкальных стилях.
                        </div>
                        <div class=\"course-card__bottom\">
                            <div class=\"course-card__tags\">
                                <div
                                    class=\"course-card__tag tag tag_border-green\"
                                >
                                    24 видео
                                </div>
                                <div
                                    class=\"course-card__tag tag tag_border-green\"
                                >
                                    21 композиция
                                </div>
                                <div
                                    class=\"course-card__tag tag tag_border-green\"
                                >
                                    18 часов практики
                                </div>
                                <div
                                    class=\"course-card__tag tag tag_border-green\"
                                >
                                    24 видео
                                </div>
                            </div>
                            <div class=\"course-card__btn\">
                                <div class=\"btn-submit\">
                                    <object
                                        data=\"{{ 'assets/images/btn-submit.svg'|theme }}\"
                                        type=\"image/svg+xml\"
                                    ></object>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"main__right\"></div>
</div>", "C:\\Users\\efim-\\Desktop\\projects\\online-courses/themes/online_courses/pages/catalog.htm", "");
    }
}
