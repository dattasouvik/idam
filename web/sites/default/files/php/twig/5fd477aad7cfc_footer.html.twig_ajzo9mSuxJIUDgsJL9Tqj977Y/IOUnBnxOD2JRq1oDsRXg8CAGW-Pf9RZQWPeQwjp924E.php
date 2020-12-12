<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/porto_subtheme/templates/includes/footer.html.twig */
class __TwigTemplate_9c21b85df1166a7073a0fbab2c342a2f7a77df21dbb78335ec7749ed113a1170 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 4];
        $filters = ["escape" => 6];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
        // line 1
        echo "<footer id=\"footer\" class=\"color color-secondary short\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t";
        // line 4
        if ($this->getAttribute(($context["page"] ?? null), "footer_top", [])) {
            // line 5
            echo "\t\t\t<div class=\"col-md-12 center\">
\t\t\t\t";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t";
        }
        // line 9
        echo "\t\t</div>
\t</div>
\t<div class=\"footer-copyright\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 14
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
            // line 15
            echo "\t\t\t\t<div class=\"col-md-12 center\">
\t\t\t\t\t";
            // line 16
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 19
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "themes/porto_subtheme/templates/includes/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 19,  83 => 16,  80 => 15,  78 => 14,  71 => 9,  65 => 6,  62 => 5,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer id=\"footer\" class=\"color color-secondary short\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t{% if page.footer_top %}
\t\t\t<div class=\"col-md-12 center\">
\t\t\t\t{{page.footer_top}}
\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>
\t</div>
\t<div class=\"footer-copyright\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t{% if page.footer_bottom %}
\t\t\t\t<div class=\"col-md-12 center\">
\t\t\t\t\t{{page.footer_bottom}}
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
", "themes/porto_subtheme/templates/includes/footer.html.twig", "/home/drupalnettracker/public_html/idam/web/themes/porto_subtheme/templates/includes/footer.html.twig");
    }
}
