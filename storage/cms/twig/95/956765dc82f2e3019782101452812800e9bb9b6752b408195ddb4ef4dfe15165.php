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

/* C:\Users\efim-\Desktop\projects\online-courses/themes/online_courses/partials/footer.htm */
class __TwigTemplate_ca18fbb41e39a5a9db1dea5d66a4d7155f237788d35676d9247a4c4361ec8af9 extends \Twig\Template
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
        $filters = array("theme" => 7);
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
        echo "<footer class=\"footer\">
\t<div class=\"footer__inner\">
\t\t<div class=\"footer__words\">
\t\t</div>
\t\t<div class=\"footer__content\">
\t\t\t<div class=\"footer__column footer__column_column1\">
\t\t\t\t<a href=\"/\"><img class=\"footer__logo logo\" src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/main-logo.png");
        echo "\" alt=\"Логотип\" class=\"logo__image\"></a>
\t\t\t\t<a href=\"#\" class=\"footer__regulations\">Политика конфиденциальности и обработки персональных данных.</a>
\t\t\t</div>
\t\t\t<div class=\"footer__column footer__column_column2\">
\t\t\t\t<div class=\"footer__contacts footer-contacts\">
\t\t\t\t\t<div class=\"footer-contacts__row\">
\t\t\t\t\t\t<div class=\"footer-contacts__phone\"><a href=\"tel:+74951234556\">+7 (495) 123 45 56</a></div>
\t\t\t\t\t\t<a href=\"#\" class=\"footer-contacts__soc-icon\"><img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/soc/telegram.png");
        echo "\" alt=\"Телеграм\"></a>
\t\t\t\t\t\t<a href=\"#\" class=\"footer-contacts__soc-icon\"><img src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/soc/whatsapp.png");
        echo "\" alt=\"WhatsApp\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"footer-contacts__row\"><a href=\"mailto:hello@world.com\">hello@world.com</a></div>
\t\t\t\t\t<div class=\"footer-contacts__row\">
\t\t\t\t\t\t<a href=\"#\" class=\"footer-contacts__soc soc-link\">facebook</a>
\t\t\t\t\t\t<a href=\"#\" class=\"footer-contacts__soc soc-link\">instagram</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__rights\">2020©Все права защищены.</div>
\t\t\t</div>
\t\t\t<div class=\"footer__column footer__column_column3\">
\t\t\t\t<div class=\"footer__links\">
\t\t\t\t\t<div class=\"footer__link\"><a href=\"/catalog\">все курсы</a></div>
\t\t\t\t\t<div class=\"footer__link\"><a href=\"/about\">о проекте</a></div>
\t\t\t\t\t<div class=\"footer__link\"><a href=\"#\">контакты</a></div>
\t\t\t\t\t<div class=\"footer__link\"><a href=\"#\">вопрос-ответ</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"footer__column footer__column_column4\">
\t\t\t\t<div class=\"footer__links\">
\t\t\t\t\t<div class=\"footer__link\"><a href=\"#\">личный кабинет</a></div>
\t\t\t\t\t<div class=\"footer__link\"><a href=\"#\">оплата</a></div>
\t\t\t\t\t<div class=\"footer__link\"><a href=\"#\">контакты</a></div>
\t\t\t\t\t<div class=\"footer__link\"><a href=\"#\">вопрос-ответ</a></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__dev\"><a href=\"#\">made by webfam.ru</a></div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\efim-\\Desktop\\projects\\online-courses/themes/online_courses/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 15,  80 => 14,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">
\t<div class=\"footer__inner\">
\t\t<div class=\"footer__words\">
\t\t</div>
\t\t<div class=\"footer__content\">
\t\t\t<div class=\"footer__column footer__column_column1\">
\t\t\t\t<a href=\"/\"><img class=\"footer__logo logo\" src=\"{{ 'assets/images/main-logo.png'|theme }}\" alt=\"Логотип\" class=\"logo__image\"></a>
\t\t\t\t<a href=\"#\" class=\"footer__regulations\">Политика конфиденциальности и обработки персональных данных.</a>
\t\t\t</div>
\t\t\t<div class=\"footer__column footer__column_column2\">
\t\t\t\t<div class=\"footer__contacts footer-contacts\">
\t\t\t\t\t<div class=\"footer-contacts__row\">
\t\t\t\t\t\t<div class=\"footer-contacts__phone\"><a href=\"tel:+74951234556\">+7 (495) 123 45 56</a></div>
\t\t\t\t\t\t<a href=\"#\" class=\"footer-contacts__soc-icon\"><img src=\"{{ 'assets/images/icons/soc/telegram.png'|theme }}\" alt=\"Телеграм\"></a>
\t\t\t\t\t\t<a href=\"#\" class=\"footer-contacts__soc-icon\"><img src=\"{{ 'assets/images/icons/soc/whatsapp.png'|theme }}\" alt=\"WhatsApp\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"footer-contacts__row\"><a href=\"mailto:hello@world.com\">hello@world.com</a></div>
\t\t\t\t\t<div class=\"footer-contacts__row\">
\t\t\t\t\t\t<a href=\"#\" class=\"footer-contacts__soc soc-link\">facebook</a>
\t\t\t\t\t\t<a href=\"#\" class=\"footer-contacts__soc soc-link\">instagram</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__rights\">2020©Все права защищены.</div>
\t\t\t</div>
\t\t\t<div class=\"footer__column footer__column_column3\">
\t\t\t\t<div class=\"footer__links\">
\t\t\t\t\t<div class=\"footer__link\"><a href=\"/catalog\">все курсы</a></div>
\t\t\t\t\t<div class=\"footer__link\"><a href=\"/about\">о проекте</a></div>
\t\t\t\t\t<div class=\"footer__link\"><a href=\"#\">контакты</a></div>
\t\t\t\t\t<div class=\"footer__link\"><a href=\"#\">вопрос-ответ</a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"footer__column footer__column_column4\">
\t\t\t\t<div class=\"footer__links\">
\t\t\t\t\t<div class=\"footer__link\"><a href=\"#\">личный кабинет</a></div>
\t\t\t\t\t<div class=\"footer__link\"><a href=\"#\">оплата</a></div>
\t\t\t\t\t<div class=\"footer__link\"><a href=\"#\">контакты</a></div>
\t\t\t\t\t<div class=\"footer__link\"><a href=\"#\">вопрос-ответ</a></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__dev\"><a href=\"#\">made by webfam.ru</a></div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>", "C:\\Users\\efim-\\Desktop\\projects\\online-courses/themes/online_courses/partials/footer.htm", "");
    }
}
