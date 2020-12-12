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

/* themes/porto_subtheme/templates/includes/header.html.twig */
class __TwigTemplate_a97584b5abcd894ea1b03d359e3248267912bee8ded13a0918c472538b299ec7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 5];
        $filters = ["escape" => 7];
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
        echo "<header id=\"header\" class=\"header-narrow\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 57, \"stickySetTop\": \"-57px\", \"stickyChangeLogo\": false}'>
\t<div class=\"header-body\">
\t\t<div class=\"header-top header-top-secondary header-top-style-3\">
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 5
        if ($this->getAttribute(($context["page"] ?? null), "nav_top", [])) {
            // line 6
            echo "\t\t\t\t<nav class=\"header-nav-top pull-right\">
\t\t\t\t\t";
            // line 7
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "nav_top", [])), "html", null, true);
            echo "
\t\t\t\t</nav>
\t\t\t\t";
        }
        // line 10
        echo "\t\t\t\t";
        if ($this->getAttribute(($context["page"] ?? null), "slogan_top", [])) {
            // line 11
            echo "\t\t\t\t<div class=\"hidden-xs text-color-tertiary\">
\t\t\t\t\t";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slogan_top", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 15
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"header-container container\">
\t\t\t<div class=\"header-row\">
\t\t\t\t";
        // line 19
        if (($context["logopath"] ?? null)) {
            // line 20
            echo "\t\t\t\t<div class=\"header-column\">
\t\t\t\t\t<div class=\"header-logo\">
\t\t\t\t\t\t<a href=\"";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<img alt=\"Porto\" width=\"164\" height=\"55\" src=\"";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logopath"] ?? null)), "html", null, true);
            echo "\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t<div class=\"header-column\">
\t\t\t\t\t<div class=\"header-row\">
\t\t\t\t\t\t<div class=\"header-nav\">
\t\t\t\t\t\t\t<button class=\"btn header-btn-collapse-nav\" data-toggle=\"collapse\" data-target=\".header-nav-main\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t";
        // line 34
        if ($this->getAttribute(($context["page"] ?? null), "main_navigaton", [])) {
            // line 35
            echo "\t\t\t\t\t\t\t<div class=\"header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse\">
\t\t\t\t\t\t\t\t";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_navigaton", [])), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>
";
    }

    public function getTemplateName()
    {
        return "themes/porto_subtheme/templates/includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 39,  121 => 36,  118 => 35,  116 => 34,  108 => 28,  100 => 23,  96 => 22,  92 => 20,  90 => 19,  84 => 15,  78 => 12,  75 => 11,  72 => 10,  66 => 7,  63 => 6,  61 => 5,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\" class=\"header-narrow\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": true, \"stickyStartAt\": 57, \"stickySetTop\": \"-57px\", \"stickyChangeLogo\": false}'>
\t<div class=\"header-body\">
\t\t<div class=\"header-top header-top-secondary header-top-style-3\">
\t\t\t<div class=\"container\">
\t\t\t\t{% if page.nav_top %}
\t\t\t\t<nav class=\"header-nav-top pull-right\">
\t\t\t\t\t{{page.nav_top}}
\t\t\t\t</nav>
\t\t\t\t{% endif %}
\t\t\t\t{% if page.slogan_top%}
\t\t\t\t<div class=\"hidden-xs text-color-tertiary\">
\t\t\t\t\t{{page.slogan_top}}
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t\t<div class=\"header-container container\">
\t\t\t<div class=\"header-row\">
\t\t\t\t{% if logopath %}
\t\t\t\t<div class=\"header-column\">
\t\t\t\t\t<div class=\"header-logo\">
\t\t\t\t\t\t<a href=\"{{ front_page }}\">
\t\t\t\t\t\t\t<img alt=\"Porto\" width=\"164\" height=\"55\" src=\"{{ logopath }}\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"header-column\">
\t\t\t\t\t<div class=\"header-row\">
\t\t\t\t\t\t<div class=\"header-nav\">
\t\t\t\t\t\t\t<button class=\"btn header-btn-collapse-nav\" data-toggle=\"collapse\" data-target=\".header-nav-main\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t{% if page.main_navigaton %}
\t\t\t\t\t\t\t<div class=\"header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse\">
\t\t\t\t\t\t\t\t{{page.main_navigaton}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>
", "themes/porto_subtheme/templates/includes/header.html.twig", "/home/drupalnettracker/public_html/idam/web/themes/porto_subtheme/templates/includes/header.html.twig");
    }
}
