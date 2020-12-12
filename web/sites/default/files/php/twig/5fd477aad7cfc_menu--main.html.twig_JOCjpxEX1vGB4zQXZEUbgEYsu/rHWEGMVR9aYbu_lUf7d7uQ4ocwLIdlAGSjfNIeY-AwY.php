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

/* themes/porto_subtheme/templates/navigation/menu--main.html.twig */
class __TwigTemplate_7993bdaebbd002be8bc5de181fda5d32f7b61afcdc46484126933c096063737e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 21, "macro" => 29, "if" => 40, "for" => 46, "set" => 48];
        $filters = ["escape" => 42];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
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
        // line 21
        $context["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0));
        echo "

";
    }

    // line 29
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 30
            echo "\t<div class=\"floating_menu\">
\t\t<a class=\"btn_reservation\">RESERVATION</a>
\t\t<div id=\"langChanger\">
\t\t\t<ul>
\t\t\t\t<li class=\"ar-link\"><a href=\"\">Ar</a></li>
\t\t\t\t<li class=\"en-link\"><a href=\"\">EN</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>
  ";
            // line 39
            $context["menus"] = $this;
            // line 40
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 41
                echo "\t\t";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 42
                    echo "\t\t  <ul";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "nav_list"], "method")), "html", null, true);
                    echo " >
\t\t";
                } else {
                    // line 44
                    echo "\t\t  <ul class=\"menu\">
\t\t";
                }
                // line 46
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 47
                    echo "\t\t  ";
                    // line 48
                    $context["classes"] = [0 => (($this->getAttribute(                    // line 49
$context["item"], "is_expanded", [])) ? ("menu-item--expanded") : ("")), 1 => (($this->getAttribute(                    // line 50
$context["item"], "is_collapsed", [])) ? ("menu-item--collapsed") : ("")), 2 => (($this->getAttribute(                    // line 51
$context["item"], "in_active_trail", [])) ? ("menu-item--active-trail") : (""))];
                    // line 54
                    echo "\t\t  <li";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
                    echo ">
\t\t\t<a href=\"";
                    // line 55
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                    echo "</a>
\t\t\t";
                    // line 56
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 57
                        echo "\t\t\t  ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                        echo "
\t\t\t";
                    }
                    // line 59
                    echo "\t\t  </li>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "\t\t</ul>
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/porto_subtheme/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 61,  141 => 59,  135 => 57,  133 => 56,  127 => 55,  122 => 54,  120 => 51,  119 => 50,  118 => 49,  117 => 48,  115 => 47,  110 => 46,  106 => 44,  100 => 42,  97 => 41,  94 => 40,  92 => 39,  81 => 30,  67 => 29,  60 => 27,  57 => 22,  55 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
\t<div class=\"floating_menu\">
\t\t<a class=\"btn_reservation\">RESERVATION</a>
\t\t<div id=\"langChanger\">
\t\t\t<ul>
\t\t\t\t<li class=\"ar-link\"><a href=\"\">Ar</a></li>
\t\t\t\t<li class=\"en-link\"><a href=\"\">EN</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>
  {% import _self as menus %}
  {% if items %}
\t\t{% if menu_level == 0 %}
\t\t  <ul{{ attributes.addClass('nav_list') }} >
\t\t{% else %}
\t\t  <ul class=\"menu\">
\t\t{% endif %}
\t\t{% for item in items %}
\t\t  {%
\t\t\tset classes = [
\t\t\t  item.is_expanded ? 'menu-item--expanded',
\t\t\t  item.is_collapsed ? 'menu-item--collapsed',
\t\t\t  item.in_active_trail ? 'menu-item--active-trail',
\t\t\t]
\t\t  %}
\t\t  <li{{ item.attributes.addClass(classes) }}>
\t\t\t<a href=\"{{ item.url }}\">{{ item.title }}</a>
\t\t\t{% if item.below %}
\t\t\t  {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
\t\t\t{% endif %}
\t\t  </li>
\t\t{% endfor %}
\t\t</ul>
  {% endif %}
{% endmacro %}
", "themes/porto_subtheme/templates/navigation/menu--main.html.twig", "/home/drupalnettracker/public_html/idam/web/themes/porto_subtheme/templates/navigation/menu--main.html.twig");
    }
}
