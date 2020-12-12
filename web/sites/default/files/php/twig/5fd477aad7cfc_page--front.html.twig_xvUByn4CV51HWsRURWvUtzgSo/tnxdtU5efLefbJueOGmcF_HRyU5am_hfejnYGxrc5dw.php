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

/* themes/porto_subtheme/templates/page--front.html.twig */
class __TwigTemplate_494e4a22af370f2b7ece182dae0b0ab91a88fc7a266541b3044c9832f915489b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1];
        $filters = ["escape" => 8];
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
        echo "<div class=\"d-flex flex-column min-vh-100\" ";
        if ((($context["language"] ?? null) == "ar")) {
            echo " dir=\"rtl\" ";
        }
        echo ">

 <div class=\"wrap\">
 
\t";
        // line 5
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 6
            echo "\t<!-- Header Start -->
\t<header class=\"w-100 header\">
\t\t";
            // line 8
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
\t</header>
     <!-- Header End --> 
\t";
        }
        // line 12
        echo "\t
\t<div class=\"load-title\">
\t\t<h1><img src=\"/idam/web/themes/porto_subtheme/assets/images/logo.png\" alt=\"MIA\"></h1>
\t</div>\t

\t<section id=\"slider\">

\t\t<div class=\"vegas vegas_Slider\">

\t\t</div>

\t</section>

    ";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "

    ";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top", [])), "html", null, true);
        echo "

 </div>

</div>";
    }

    public function getTemplateName()
    {
        return "themes/porto_subtheme/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 27,  93 => 25,  78 => 12,  71 => 8,  67 => 6,  65 => 5,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-flex flex-column min-vh-100\" {% if language == 'ar' %} dir=\"rtl\" {% endif %}>

 <div class=\"wrap\">
 
\t{% if page.header %}
\t<!-- Header Start -->
\t<header class=\"w-100 header\">
\t\t{{ page.header }}
\t</header>
     <!-- Header End --> 
\t{% endif %}
\t
\t<div class=\"load-title\">
\t\t<h1><img src=\"/idam/web/themes/porto_subtheme/assets/images/logo.png\" alt=\"MIA\"></h1>
\t</div>\t

\t<section id=\"slider\">

\t\t<div class=\"vegas vegas_Slider\">

\t\t</div>

\t</section>

    {{ page.content }}

    {{ page.footer_top }}

 </div>

</div>", "themes/porto_subtheme/templates/page--front.html.twig", "/home/drupalnettracker/public_html/idam/web/themes/porto_subtheme/templates/page--front.html.twig");
    }
}
