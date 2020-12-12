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

/* themes/porto_subtheme/templates/page.html.twig */
class __TwigTemplate_ae2d13582397565574deb22fecad051979addb6481c17e3f9ed29af1a8603ec1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 2, "if" => 5];
        $filters = ["escape" => 6];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
        echo "<div id=\"wrapper\">
    ";
        // line 2
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/header.html.twig"), "themes/porto_subtheme/templates/page.html.twig", 2)->display($context);
        // line 3
        echo "    <div role=\"main\" class=\"main\">

        ";
        // line 5
        if ($this->getAttribute(($context["page"] ?? null), "slide_show", [])) {
            // line 6
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slide_show", [])), "html", null, true);
            echo "
        ";
        }
        // line 8
        echo "
        ";
        // line 9
        if (($context["messages"] ?? null)) {
            // line 10
            echo "            <section id=\"messages\" class=\"messages\">
                <div class=\"container\">
                    ";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null)), "html", null, true);
            echo "
                </div>
            </section>
        ";
        }
        // line 16
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "before_content", [])) {
            // line 17
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "before_content", [])), "html", null, true);
            echo "
        ";
        }
        // line 19
        echo "        ";
        if ((($context["arg"] ?? null) == "page-coming-soon")) {
            // line 20
            echo "            <div class=\"page-coming-soon\">
                ";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
                ";
            // line 22
            if ($this->getAttribute(($context["page"] ?? null), "after_content", [])) {
                // line 23
                echo "                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-6 col-md-offset-3\">
                                ";
                // line 26
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "after_content", [])), "html", null, true);
                echo "
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 31
            echo "            </div>
        ";
        } else {
            // line 33
            echo "
            ";
            // line 34
            if (($this->getAttribute(($context["page"] ?? null), "left_sidebar", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "right_sidebar", [])))) {
                // line 35
                echo "                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3 sidebar shop-sidebar\">
                            <div class=\"panel-group\">
                                ";
                // line 39
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "left_sidebar", [])), "html", null, true);
                echo "
                            </div>
                        </div>
                        <div class=\"col-md-9\">
                            ";
                // line 43
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
                echo "
                        </div>
                    </div>
                </div>
            ";
            } elseif (($this->getAttribute(            // line 47
($context["page"] ?? null), "right_sidebar", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "left_sidebar", [])))) {
                // line 48
                echo "                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-9\">
                            ";
                // line 51
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
                echo "
                            ";
                // line 52
                if ($this->getAttribute(($context["page"] ?? null), "related_product", [])) {
                    // line 53
                    echo "                            ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "related_product", [])), "html", null, true);
                    echo "
                            ";
                }
                // line 55
                echo "                        </div>
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                ";
                // line 58
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "right_sidebar", [])), "html", null, true);
                echo "
                            </aside>
                        </div>
                    </div>
                </div>
            ";
            } elseif (($this->getAttribute(            // line 63
($context["page"] ?? null), "right_sidebar", []) && $this->getAttribute(($context["page"] ?? null), "left_sidebar", []))) {
                // line 64
                echo "                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                ";
                // line 68
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "left_sidebar", [])), "html", null, true);
                echo "
                            </aside>
                        </div>
                        <div class=\"col-md-6\">
                            ";
                // line 72
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
                echo "
                        </div>
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                ";
                // line 76
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "right_sidebar", [])), "html", null, true);
                echo "
                            </aside>
                        </div>
                    </div>
                </div>
            ";
            } else {
                // line 82
                echo "                <div>
                    ";
                // line 83
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
                echo "
                    ";
                // line 84
                if ($this->getAttribute(($context["page"] ?? null), "related_product", [])) {
                    // line 85
                    echo "                        ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "related_product", [])), "html", null, true);
                    echo "
                    ";
                }
                // line 87
                echo "                </div>
            ";
            }
            // line 89
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "after_content", [])) {
                // line 90
                echo "                ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "after_content", [])), "html", null, true);
                echo "
            ";
            }
            // line 92
            echo "        ";
        }
        // line 93
        echo "    </div>
    ";
        // line 94
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer.html.twig"), "themes/porto_subtheme/templates/page.html.twig", 94)->display($context);
        // line 95
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "themes/porto_subtheme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 95,  248 => 94,  245 => 93,  242 => 92,  236 => 90,  233 => 89,  229 => 87,  223 => 85,  221 => 84,  217 => 83,  214 => 82,  205 => 76,  198 => 72,  191 => 68,  185 => 64,  183 => 63,  175 => 58,  170 => 55,  164 => 53,  162 => 52,  158 => 51,  153 => 48,  151 => 47,  144 => 43,  137 => 39,  131 => 35,  129 => 34,  126 => 33,  122 => 31,  114 => 26,  109 => 23,  107 => 22,  103 => 21,  100 => 20,  97 => 19,  91 => 17,  88 => 16,  81 => 12,  77 => 10,  75 => 9,  72 => 8,  66 => 6,  64 => 5,  60 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"wrapper\">
    {% include directory ~ '/templates/includes/header.html.twig' %}
    <div role=\"main\" class=\"main\">

        {% if page.slide_show %}
                {{ page.slide_show }}
        {% endif %}

        {% if messages %}
            <section id=\"messages\" class=\"messages\">
                <div class=\"container\">
                    {{ messages }}
                </div>
            </section>
        {% endif %}
        {% if page.before_content %}
            {{ page.before_content }}
        {% endif %}
        {% if arg == 'page-coming-soon' %}
            <div class=\"page-coming-soon\">
                {{ page.content }}
                {% if page.after_content %}
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-6 col-md-offset-3\">
                                {{ page.after_content }}
                            </div>
                        </div>
                    </div>
                {% endif %}
            </div>
        {% else %}

            {% if page.left_sidebar and page.right_sidebar is empty %}
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3 sidebar shop-sidebar\">
                            <div class=\"panel-group\">
                                {{ page.left_sidebar }}
                            </div>
                        </div>
                        <div class=\"col-md-9\">
                            {{ page.content }}
                        </div>
                    </div>
                </div>
            {% elseif page.right_sidebar and page.left_sidebar is empty %}
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-9\">
                            {{ page.content }}
                            {% if page.related_product %}
                            {{ page.related_product }}
                            {% endif %}
                        </div>
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                {{ page.right_sidebar }}
                            </aside>
                        </div>
                    </div>
                </div>
            {% elseif page.right_sidebar and page.left_sidebar %}
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                {{ page.left_sidebar }}
                            </aside>
                        </div>
                        <div class=\"col-md-6\">
                            {{ page.content }}
                        </div>
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                {{ page.right_sidebar }}
                            </aside>
                        </div>
                    </div>
                </div>
            {% else %}
                <div>
                    {{ page.content }}
                    {% if page.related_product %}
                        {{ page.related_product }}
                    {% endif %}
                </div>
            {% endif %}
            {% if page.after_content %}
                {{ page.after_content }}
            {% endif %}
        {% endif %}
    </div>
    {% include directory ~ '/templates/includes/footer.html.twig' %}
</div>

", "themes/porto_subtheme/templates/page.html.twig", "/home/drupalnettracker/public_html/idam/web/themes/porto_subtheme/templates/page.html.twig");
    }
}
