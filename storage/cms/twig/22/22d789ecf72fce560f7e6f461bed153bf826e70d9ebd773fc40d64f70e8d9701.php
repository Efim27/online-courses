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

/* /home/w/webpar3z/mir/public_html/themes/online_courses/partials/header.htm */
class __TwigTemplate_cbb8e9904e56ed89c19776e3e347c02ab7b2c262a50a3031220092caa321648e extends \Twig\Template
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
        $filters = array("theme" => 3);
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
\t<div class=\"header__inner\">
\t\t<a href=\"/\"><img class=\"header__logo logo\" src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/main-logo.png");
        echo "\" alt=\"Логотип\" class=\"logo__image\"></a>
\t\t<nav class=\"header__nav main-nav\">
\t\t\t<div class=\"main-nav__links\">
\t\t\t\t<a href=\"/catalog\" class=\"main-nav__link\">все курсы</a>
\t\t\t\t<a href=\"/about\" class=\"main-nav__link\">о проекте</a>
\t\t\t</div>
\t\t</nav>
\t\t<div class=\"header__contacts header-contacts\">
\t\t\t<a class=\"header-contacts__phone\" href=\"tel:+74951234556\">+7 (495) 123 45 56</a>
\t\t\t<div class=\"header-contacts__soc-list\">
\t\t\t\t<a href=\"#\" class=\"header-contacts__soc\"><img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/soc/telegram.png");
        echo "\" alt=\"Телеграм\"></a>
\t\t\t\t<a href=\"#\" class=\"header-contacts__soc\"><img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/soc/whatsapp.png");
        echo "\" alt=\"WhatsApp\"></a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"header__menu\">
\t\t\t<div class=\"profile-dropdown\">
\t\t\t\t<img src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/profile.png");
        echo "\" alt=\"Профиль\" class=\"header-dropdown__icon\">
\t\t\t\t<div class=\"profile-dropdown__content\">
\t\t\t\t\t<a href=\"#\" class=\"profile-dropdown__link\">Мои курсы</a>
\t\t\t\t\t<a href=\"#\" class=\"profile-dropdown__link\">Настройки профиля</a>
\t\t\t\t\t<a href=\"#\" class=\"profile-dropdown__link\">Выход</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"burger-dropdown\">
\t\t\t\t<img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/burger.png");
        echo "\" alt=\"Профиль\" class=\"header-dropdown__icon\">
\t\t\t</div>
\t\t</div>
\t</div>
</header>";
    }

    public function getTemplateName()
    {
        return "/home/w/webpar3z/mir/public_html/themes/online_courses/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 27,  91 => 19,  83 => 14,  79 => 13,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header\">
\t<div class=\"header__inner\">
\t\t<a href=\"/\"><img class=\"header__logo logo\" src=\"{{ 'assets/images/main-logo.png'|theme }}\" alt=\"Логотип\" class=\"logo__image\"></a>
\t\t<nav class=\"header__nav main-nav\">
\t\t\t<div class=\"main-nav__links\">
\t\t\t\t<a href=\"/catalog\" class=\"main-nav__link\">все курсы</a>
\t\t\t\t<a href=\"/about\" class=\"main-nav__link\">о проекте</a>
\t\t\t</div>
\t\t</nav>
\t\t<div class=\"header__contacts header-contacts\">
\t\t\t<a class=\"header-contacts__phone\" href=\"tel:+74951234556\">+7 (495) 123 45 56</a>
\t\t\t<div class=\"header-contacts__soc-list\">
\t\t\t\t<a href=\"#\" class=\"header-contacts__soc\"><img src=\"{{ 'assets/images/icons/soc/telegram.png'|theme }}\" alt=\"Телеграм\"></a>
\t\t\t\t<a href=\"#\" class=\"header-contacts__soc\"><img src=\"{{ 'assets/images/icons/soc/whatsapp.png'|theme }}\" alt=\"WhatsApp\"></a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"header__menu\">
\t\t\t<div class=\"profile-dropdown\">
\t\t\t\t<img src=\"{{ 'assets/images/icons/profile.png'|theme }}\" alt=\"Профиль\" class=\"header-dropdown__icon\">
\t\t\t\t<div class=\"profile-dropdown__content\">
\t\t\t\t\t<a href=\"#\" class=\"profile-dropdown__link\">Мои курсы</a>
\t\t\t\t\t<a href=\"#\" class=\"profile-dropdown__link\">Настройки профиля</a>
\t\t\t\t\t<a href=\"#\" class=\"profile-dropdown__link\">Выход</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"burger-dropdown\">
\t\t\t\t<img src=\"{{ 'assets/images/icons/burger.png'|theme }}\" alt=\"Профиль\" class=\"header-dropdown__icon\">
\t\t\t</div>
\t\t</div>
\t</div>
</header>", "/home/w/webpar3z/mir/public_html/themes/online_courses/partials/header.htm", "");
    }
}
