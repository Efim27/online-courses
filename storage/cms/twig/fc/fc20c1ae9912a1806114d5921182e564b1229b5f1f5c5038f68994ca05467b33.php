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

/* C:\Users\efim-\Desktop\projects\online-courses/themes/online_courses/partials/header.htm */
class __TwigTemplate_afc03d3cd340efb0f7f3ebcb63630903249a2a44e0b1609f97de9f480360785e extends \Twig\Template
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
        $filters = array("theme" => 6);
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
        echo "<header class=\"header\">
    <div class=\"header__inner\">
        <a href=\"/\"
            ><img
                class=\"header__logo logo\"
                src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/main-logo.png");
        echo "\"
                alt=\"Логотип\"
                class=\"logo__image\"
        /></a>
        <nav class=\"header__nav main-nav\">
            <div class=\"main-nav__links\">
                <a href=\"/catalog\" class=\"main-nav__link\">все курсы</a>
                <a href=\"/about\" class=\"main-nav__link\">о проекте</a>
            </div>
        </nav>
        <div class=\"header__contacts header-contacts\">
            <a class=\"header-contacts__phone\" href=\"tel:+74951234556\"
                >+7 (495) 123 45 56</a
            >
            <div class=\"header-contacts__soc-list\">
                <a href=\"#\" class=\"header-contacts__soc\"
                    ><img
                        src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/soc/telegram.png");
        echo "\"
                        alt=\"Телеграм\"
                /></a>
                <a href=\"#\" class=\"header-contacts__soc\"
                    ><img
                        src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/soc/whatsapp.png");
        echo "\"
                        alt=\"WhatsApp\"
                /></a>
            </div>
        </div>
        <div class=\"header__menu\">
            <div class=\"side-menu-btn\">
                <object
                    data=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/burger.svg");
        echo "\"
                    type=\"image/svg+xml\"
                ></object>
            </div>
            <div class=\"dropdown header-profile-dropdown\">
                <object
                    data=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/profile.svg");
        echo "\"
                    class=\"header-dropdown__icon\"
                    type=\"image/svg+xml\"
                ></object>
                <div class=\"dropdown__content header-profile-dropdown__content\">
                    <div class=\"header-profile-dropdown__filler\"></div>
                    <div class=\"header-profile-dropdown__inner\">
                        <a href=\"#\" class=\"header-profile-dropdown__link\"
                            >Мои курсы</a
                        >
                        <a href=\"#\" class=\"header-profile-dropdown__link\"
                            >Настройки профиля</a
                        >
                        <a href=\"#\" class=\"header-profile-dropdown__link\"
                            >Выход</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\efim-\\Desktop\\projects\\online-courses/themes/online_courses/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 42,  108 => 36,  97 => 28,  89 => 23,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header\">
    <div class=\"header__inner\">
        <a href=\"/\"
            ><img
                class=\"header__logo logo\"
                src=\"{{ 'assets/images/main-logo.png'|theme }}\"
                alt=\"Логотип\"
                class=\"logo__image\"
        /></a>
        <nav class=\"header__nav main-nav\">
            <div class=\"main-nav__links\">
                <a href=\"/catalog\" class=\"main-nav__link\">все курсы</a>
                <a href=\"/about\" class=\"main-nav__link\">о проекте</a>
            </div>
        </nav>
        <div class=\"header__contacts header-contacts\">
            <a class=\"header-contacts__phone\" href=\"tel:+74951234556\"
                >+7 (495) 123 45 56</a
            >
            <div class=\"header-contacts__soc-list\">
                <a href=\"#\" class=\"header-contacts__soc\"
                    ><img
                        src=\"{{ 'assets/images/icons/soc/telegram.png'|theme }}\"
                        alt=\"Телеграм\"
                /></a>
                <a href=\"#\" class=\"header-contacts__soc\"
                    ><img
                        src=\"{{ 'assets/images/icons/soc/whatsapp.png'|theme }}\"
                        alt=\"WhatsApp\"
                /></a>
            </div>
        </div>
        <div class=\"header__menu\">
            <div class=\"side-menu-btn\">
                <object
                    data=\"{{ 'assets/images/icons/burger.svg'|theme }}\"
                    type=\"image/svg+xml\"
                ></object>
            </div>
            <div class=\"dropdown header-profile-dropdown\">
                <object
                    data=\"{{ 'assets/images/icons/profile.svg'|theme }}\"
                    class=\"header-dropdown__icon\"
                    type=\"image/svg+xml\"
                ></object>
                <div class=\"dropdown__content header-profile-dropdown__content\">
                    <div class=\"header-profile-dropdown__filler\"></div>
                    <div class=\"header-profile-dropdown__inner\">
                        <a href=\"#\" class=\"header-profile-dropdown__link\"
                            >Мои курсы</a
                        >
                        <a href=\"#\" class=\"header-profile-dropdown__link\"
                            >Настройки профиля</a
                        >
                        <a href=\"#\" class=\"header-profile-dropdown__link\"
                            >Выход</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>", "C:\\Users\\efim-\\Desktop\\projects\\online-courses/themes/online_courses/partials/header.htm", "");
    }
}
