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

/* themes/porto_subtheme/templates/html.html.twig */
class __TwigTemplate_5c9b559cd8e3939d62fa943b60832f707910745c9082b5e5ef084e15526915bf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "if" => 17];
        $filters = ["clean_class" => 7, "escape" => 17, "raw" => 20, "safe_join" => 21, "t" => 6249];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
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
        // line 2
        $context["body_classes"] = [0 => "d-flex", 1 => "min-vh-100", 2 => "flex-column", 3 => ((        // line 6
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 4 => (( !        // line 7
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null)))))), 5 => ((        // line 8
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null))))) : ("")), 6 => ((        // line 9
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), 7 => ((        // line 10
($context["current_path"] ?? null)) ? (("context" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["current_path"] ?? null))))) : ("")), 8 => (( !        // line 11
($context["is_front"] ?? null)) ? ("inner_pages") : (""))];
        // line 14
        echo "

<!DOCTYPE html>
<html";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null)), "html", null, true);
        echo " class=\"";
        if ((($context["h_semi_transparent_option"] ?? null) == 1)) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-semi-transparent ");
        } else {
            if ((($context["arg"] ?? null) == "index-header-side-header-semi-transparent")) {
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-semi-transparent");
            }
        }
        if ((($context["header_option"] ?? null) == "h_left")) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header");
        } elseif ((($context["header_option"] ?? null) == "h_right")) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-right");
        } else {
            if ((($context["arg"] ?? null) == "index-header-side-header-left")) {
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header");
            } elseif ((($context["arg"] ?? null) == "index-header-side-header-right")) {
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-right");
            }
        }
        echo " ";
        if ((($context["arg"] ?? null) == "index-layout-boxed")) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("boxed");
        } elseif ((($context["arg"] ?? null) == "index-layout-dark")) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("dark");
        } else {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["layout_option"] ?? null)), "html", null, true);
        }
        echo "\">

<head>
    <head-placeholder token=\"";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
        <title>";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null)), " | "));
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\" rel=\"stylesheet\">
        <css-placeholder token=\"";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">

            ";
        // line 26
        if ((($context["skin_option"] ?? null) == "custom")) {
            // line 27
            echo "                <style>
                    a {
                        color: ";
            // line 29
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";
                    }

                    a:hover {
                        color: ";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";
                    }

                    a:focus {
                        color: ";
            // line 37
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";
                    }

                    a:active {
                        color: ";
            // line 41
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";
                    }

                    html .heading-primary,
                    html .lnk-primary,
                    html .text-color-primary {
                        color: ";
            // line 47
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " !important;
                    }

                    html .heading.heading-primary h1,
                    html .heading.heading-primary h2,
                    html .heading.heading-primary h3,
                    html .heading.heading-primary h4,
                    html .heading.heading-primary h5,
                    html .heading.heading-primary h6 {
                        border-color: ";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";
                    }
                    html .background-color-primary {

                        background-color: ";
            // line 60
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " !important;

                    }
                    .alternative-font {

                        color: ";
            // line 65
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }
                    html .blockquote-primary {

                        border-color: ";
            // line 70
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " !important;

                    }
                    p.drop-caps:first-letter {

                        color: ";
            // line 75
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    p.drop-caps.drop-caps-style-2:first-letter {

                        background-color: ";
            // line 83
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    ul.nav-pills > li.active > a {

                        background-color: ";
            // line 91
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    ul.nav-pills > li.active > a:hover,

                    ul.nav-pills > li.active > a:focus {

                        background-color: ";
            // line 101
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html ul.nav-pills-primary a {

                        color: ";
            // line 109
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html ul.nav-pills-primary a:hover {

                        color: ";
            // line 117
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html ul.nav-pills-primary a:focus {

                        color: ";
            // line 125
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html ul.nav-pills-primary a:active {

                        color: ";
            // line 133
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html ul.nav-pills-primary > li.active > a {

                        background-color: ";
            // line 141
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html ul.nav-pills-primary > li.active > a:hover,

                    html ul.nav-pills-primary > li.active > a:focus {

                        background-color: ";
            // line 151
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }
                    .sort-source-wrapper .nav > li.active > a {

                        color: ";
            // line 156
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .sort-source-wrapper .nav > li.active > a:hover,

                    .sort-source-wrapper .nav > li.active > a:focus {

                        color: ";
            // line 166
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .sort-source.sort-source-style-2 > li.active > a:after {

                        border-top-color: ";
            // line 174
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .label-primary {

                        background-color: ";
            // line 182
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }
                    .btn-link {

                        color: ";
            // line 187
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .btn-link:hover {

                        color: ";
            // line 195
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .btn-link:active {

                        color: ";
            // line 203
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .btn-primary {

                        color: #ffffff;

                        background-color: ";
            // line 213
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        border-color: ";
            // line 215
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .btn-primary:hover {

                        border-color: ";
            // line 223
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        background-color: ";
            // line 225
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .btn-primary:active,

                    html .btn-primary:focus,

                    html .btn-primary:active:hover,

                    html .btn-primary:active:focus {

                        border-color: ";
            // line 239
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        background-color: ";
            // line 241
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .btn-primary.dropdown-toggle {

                        border-left-color: ";
            // line 249
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }
                    html .btn-primary-scale-2 {

                        color: #ffffff;

                        background-color: ";
            // line 256
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        border-color: ";
            // line 258
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " #8a5e13;

                    }



                    html .btn-primary-scale-2:hover {

                        border-color: ";
            // line 266
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        background-color: ";
            // line 268
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .btn-primary-scale-2:active,

                    html .btn-primary-scale-2:focus,

                    html .btn-primary-scale-2:active:hover,

                    html .btn-primary-scale-2:active:focus {

                        border-color: ";
            // line 282
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        background-color: ";
            // line 284
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .btn-primary-scale-2.dropdown-toggle {

                        border-left-color: ";
            // line 292
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }
                    html .btn-borders.btn-primary {

                        background: transparent;

                        border-color: ";
            // line 299
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        color: ";
            // line 301
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        text-shadow: none;

                    }



                    html .btn-borders.btn-primary:hover,

                    html .btn-borders.btn-primary:focus {

                        background-color: ";
            // line 313
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        border-color: ";
            // line 315
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        border-color: ";
            // line 317
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " !important;

                        color: #ffffff;

                    }



                    html .btn-borders.btn-primary:hover:hover,

                    html .btn-borders.btn-primary:focus:hover {

                        border-color: ";
            // line 329
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        background-color: ";
            // line 331
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .btn-borders.btn-primary:hover:active,

                    html .btn-borders.btn-primary:focus:active,

                    html .btn-borders.btn-primary:hover:focus,

                    html .btn-borders.btn-primary:focus:focus,

                    html .btn-borders.btn-primary:hover:active:hover,

                    html .btn-borders.btn-primary:focus:active:hover,

                    html .btn-borders.btn-primary:hover:active:focus,

                    html .btn-borders.btn-primary:focus:active:focus {

                        border-color: ";
            // line 353
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        background-color: ";
            // line 355
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .btn-borders.btn-primary:hover.dropdown-toggle,

                    html .btn-borders.btn-primary:focus.dropdown-toggle {

                        border-left-color: ";
            // line 365
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }
                    .pagination > li > a,

                    .pagination > li > span,

                    .pagination > li > a:hover,

                    .pagination > li > span:hover,

                    .pagination > li > a:focus,

                    .pagination > li > span:focus {

                        color: ";
            // line 380
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .pagination > .active > a,

                    .pagination > .active > span,

                    .pagination > .active > a:hover,

                    .pagination > .active > span:hover,

                    .pagination > .active > a:focus,

                    .pagination > .active > span:focus {

                        background-color: ";
            // line 398
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " !important;

                        border-color: ";
            // line 400
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    body.dark .pagination > li > a,

                    body.dark .pagination > li > span,

                    body.dark .pagination > li > a:hover,

                    body.dark .pagination > li > span:hover,

                    body.dark .pagination > li > a:focus,

                    body.dark .pagination > li > span:focus {

                        color: ";
            // line 418
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    body.dark .pagination > .active > a,

                    body.dark .pagination > .active > span,

                    body.dark .pagination > .active > a:hover,

                    body.dark .pagination > .active > span:hover,

                    body.dark .pagination > .active > a:focus,

                    body.dark .pagination > .active > span:focus {

                        background-color: ";
            // line 436
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        border-color: ";
            // line 438
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .pagination > .active > a,

                    body.dark .pagination > .active > a {

                        color: #ffffff;

                        background-color: ";
            // line 450
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        border-color: ";
            // line 452
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .pagination > .active > a:hover,

                    body.dark .pagination > .active > a:hover {

                        border-color: ";
            // line 462
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        background-color: ";
            // line 464
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .pagination > .active > a:active,

                    body.dark .pagination > .active > a:active,

                    .pagination > .active > a:focus,

                    body.dark .pagination > .active > a:focus,

                    .pagination > .active > a:active:hover,

                    body.dark .pagination > .active > a:active:hover,

                    .pagination > .active > a:active:focus,

                    body.dark .pagination > .active > a:active:focus {

                        border-color: ";
            // line 486
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        background-color: ";
            // line 488
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .pagination > .active > a.dropdown-toggle,

                    body.dark .pagination > .active > a.dropdown-toggle {

                        border-left-color: ";
            // line 498
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }
                    html .alert-primary {

                        background-color: ";
            // line 503
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        border-color: ";
            // line 505
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        color: #ffffff;

                    }
                    html .progress-bar-primary {

                        background-color: ";
            // line 512
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }
                    html section.section-primary {

                        background-color: ";
            // line 517
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " !important;

                        border-color: ";
            // line 519
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " !important;

                    }
                    html section.section-primary-scale-2 {

                        background-color: ";
            // line 524
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " !important;

                        border-color: ";
            // line 526
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " !important;

                    }
                    html section.section-primary-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {

                        border-top-color: ";
            // line 531
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }

                    .thumb-info-ribbon {

                        background: ";
            // line 537
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .thumb-info-ribbon:before {

                        border-right-color: ";
            // line 545
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        border-left-color: ";
            // line 547
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .inverted {

                        background-color: ";
            // line 555
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .inverted-primary {

                        background-color: ";
            // line 563
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .inverted-secondary {

                        background-color: #344257;

                    }



                    html .inverted-tertiary {

                        background-color: #d1e7e7;

                    }



                    html .inverted-quaternary {

                        background-color: #edeada;

                    }



                    html .inverted-dark {

                        background-color: #2e353e;

                    }



                    html .inverted-light {

                        background-color: #ffffff;

                    }



                    .owl-carousel .owl-dots .owl-dot.active span,

                    .owl-carousel .owl-dots .owl-dot:hover span {

                        background-color: #c8891c;

                    }



                    .owl-carousel.show-nav-title .owl-nav [class*=\"owl-\"] {

                        color: ";
            // line 621
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .owl-carousel .owl-nav [class*=\"owl-\"] {

                        color: #ffffff;

                        background-color: ";
            // line 631
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        border-color: ";
            // line 633
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .owl-carousel .owl-nav [class*=\"owl-\"]:hover {

                        border-color: ";
            // line 641
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        background-color: ";
            // line 643
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .owl-carousel .owl-nav [class*=\"owl-\"]:active,

                    .owl-carousel .owl-nav [class*=\"owl-\"]:focus,

                    .owl-carousel .owl-nav [class*=\"owl-\"]:active:hover,

                    .owl-carousel .owl-nav [class*=\"owl-\"]:active:focus {

                        border-color: ";
            // line 657
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        background-color: ";
            // line 659
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .owl-carousel .owl-nav [class*=\"owl-\"].dropdown-toggle {

                        border-left-color: ";
            // line 667
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .owl-carousel .owl-nav [class*=\"owl-\"][disabled],

                    .owl-carousel .owl-nav [class*=\"owl-\"][disabled]:hover,

                    .owl-carousel .owl-nav [class*=\"owl-\"][disabled]:active,

                    .owl-carousel .owl-nav [class*=\"owl-\"][disabled]:focus {

                        border-color: #edc47c;

                        background-color: #edc47c;

                    }



                    html body .tabs .nav-tabs a,

                    html.dark body .tabs .nav-tabs a,

                    html body .tabs .nav-tabs a:hover,

                    html.dark body .tabs .nav-tabs a:hover {

                        color: ";
            // line 697
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html body .tabs .nav-tabs a:hover,

                    html.dark body .tabs .nav-tabs a:hover,

                    html body .tabs .nav-tabs a:focus,

                    html.dark body .tabs .nav-tabs a:focus {

                        border-top-color: ";
            // line 711
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html body .tabs .nav-tabs li.active a,

                    html.dark body .tabs .nav-tabs li.active a {

                        border-top-color: ";
            // line 721
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        color: ";
            // line 723
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html body .tabs .nav-tabs.nav-justified a:hover,

                    html.dark body .tabs .nav-tabs.nav-justified a:hover,

                    html body .tabs .nav-tabs.nav-justified a:focus,

                    html.dark body .tabs .nav-tabs.nav-justified a:focus {

                        border-top-color: ";
            // line 737
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html body .tabs.tabs-bottom .nav-tabs li a:hover,

                    html.dark body .tabs.tabs-bottom .nav-tabs li a:hover,

                    html body .tabs.tabs-bottom .nav-tabs li.active a,

                    html.dark body .tabs.tabs-bottom .nav-tabs li.active a,

                    html body .tabs.tabs-bottom .nav-tabs li.active a:hover,

                    html.dark body .tabs.tabs-bottom .nav-tabs li.active a:hover,

                    html body .tabs.tabs-bottom .nav-tabs li.active a:focus,

                    html.dark body .tabs.tabs-bottom .nav-tabs li.active a:focus {

                        border-bottom-color: ";
            // line 759
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html body .tabs.tabs-vertical.tabs-left .nav-tabs li a:hover,

                    html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li a:hover,

                    html body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a,

                    html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a,

                    html body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:hover,

                    html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:hover,

                    html body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:focus,

                    html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:focus {

                        border-left-color: ";
            // line 781
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html body .tabs.tabs-vertical.tabs-right .nav-tabs li a:hover,

                    html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li a:hover,

                    html body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a,

                    html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a,

                    html body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:hover,

                    html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:hover,

                    html body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:focus,

                    html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:focus {

                        border-right-color: ";
            // line 803
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html body .tabs.tabs-simple .nav-tabs > li.active a,

                    html.dark body .tabs.tabs-simple .nav-tabs > li.active a,

                    html body .tabs.tabs-simple .nav-tabs > li.active a:focus,

                    html.dark body .tabs.tabs-simple .nav-tabs > li.active a:focus,

                    html body .tabs.tabs-simple .nav-tabs > li a:hover,

                    html.dark body .tabs.tabs-simple .nav-tabs > li a:hover,

                    html body .tabs.tabs-simple .nav-tabs > li.active a:hover,

                    html.dark body .tabs.tabs-simple .nav-tabs > li.active a:hover {

                        border-top-color: ";
            // line 825
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        color: ";
            // line 827
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html body .tabs-primary .nav-tabs li a,

                    html.dark body .tabs-primary .nav-tabs li a,

                    html body .tabs-primary .nav-tabs.nav-justified li a,

                    html.dark body .tabs-primary .nav-tabs.nav-justified li a,

                    html body .tabs-primary .nav-tabs li a:hover,

                    html.dark body .tabs-primary .nav-tabs li a:hover,

                    html body .tabs-primary .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-primary .nav-tabs.nav-justified li a:hover {

                        color: ";
            // line 849
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html body .tabs-primary .nav-tabs li a:hover,

                    html.dark body .tabs-primary .nav-tabs li a:hover,

                    html body .tabs-primary .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-primary .nav-tabs.nav-justified li a:hover {

                        border-top-color: ";
            // line 863
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html body .tabs-primary .nav-tabs li.active a,

                    html.dark body .tabs-primary .nav-tabs li.active a,

                    html body .tabs-primary .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-primary .nav-tabs.nav-justified li.active a,

                    html body .tabs-primary .nav-tabs li.active a:hover,

                    html.dark body .tabs-primary .nav-tabs li.active a:hover,

                    html body .tabs-primary .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-primary .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-primary .nav-tabs li.active a:focus,

                    html.dark body .tabs-primary .nav-tabs li.active a:focus,

                    html body .tabs-primary .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-primary .nav-tabs.nav-justified li.active a:focus {

                        border-top-color: ";
            // line 893
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        color: ";
            // line 895
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html body .tabs-primary.tabs-bottom .nav-tabs li a:hover,

                    html.dark body .tabs-primary.tabs-bottom .nav-tabs li a:hover,

                    html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li a:hover {

                        border-bottom-color: ";
            // line 909
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html body .tabs-primary.tabs-bottom .nav-tabs li.active a,

                    html.dark body .tabs-primary.tabs-bottom .nav-tabs li.active a,

                    html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html body .tabs-primary.tabs-bottom .nav-tabs li.active a:hover,

                    html.dark body .tabs-primary.tabs-bottom .nav-tabs li.active a:hover,

                    html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-primary.tabs-bottom .nav-tabs li.active a:focus,

                    html.dark body .tabs-primary.tabs-bottom .nav-tabs li.active a:focus,

                    html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {

                        border-bottom-color: ";
            // line 939
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html body .tabs-primary.tabs-vertical.tabs-left li a:hover,

                    html.dark body .tabs-primary.tabs-vertical.tabs-left li a:hover {

                        border-left-color: ";
            // line 949
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html body .tabs-primary.tabs-vertical.tabs-left li.active a,

                    html.dark body .tabs-primary.tabs-vertical.tabs-left li.active a,

                    html body .tabs-primary.tabs-vertical.tabs-left li.active a:hover,

                    html.dark body .tabs-primary.tabs-vertical.tabs-left li.active a:hover,

                    html body .tabs-primary.tabs-vertical.tabs-left li.active a:focus,

                    html.dark body .tabs-primary.tabs-vertical.tabs-left li.active a:focus {

                        border-left-color: ";
            // line 967
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html body .tabs-primary.tabs-vertical.tabs-right li a:hover,

                    html.dark body .tabs-primary.tabs-vertical.tabs-right li a:hover {

                        border-right-color: ";
            // line 977
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html body .tabs-primary.tabs-vertical.tabs-right li.active a,

                    html.dark body .tabs-primary.tabs-vertical.tabs-right li.active a,

                    html body .tabs-primary.tabs-vertical.tabs-right li.active a:hover,

                    html.dark body .tabs-primary.tabs-vertical.tabs-right li.active a:hover,

                    html body .tabs-primary.tabs-vertical.tabs-right li.active a:focus,

                    html.dark body .tabs-primary.tabs-vertical.tabs-right li.active a:focus {

                        border-right-color: ";
            // line 995
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html body .tabs-secondary .nav-tabs li a,

                    html.dark body .tabs-secondary .nav-tabs li a,

                    html body .tabs-secondary .nav-tabs.nav-justified li a,

                    html.dark body .tabs-secondary .nav-tabs.nav-justified li a,

                    html body .tabs-secondary .nav-tabs li a:hover,

                    html.dark body .tabs-secondary .nav-tabs li a:hover,

                    html body .tabs-secondary .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-secondary .nav-tabs.nav-justified li a:hover {

                        color: #344257;

                    }



                    html body .tabs-secondary .nav-tabs li a:hover,

                    html.dark body .tabs-secondary .nav-tabs li a:hover,

                    html body .tabs-secondary .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-secondary .nav-tabs.nav-justified li a:hover {

                        border-top-color: #344257;

                    }



                    html body .tabs-secondary .nav-tabs li.active a,

                    html.dark body .tabs-secondary .nav-tabs li.active a,

                    html body .tabs-secondary .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-secondary .nav-tabs.nav-justified li.active a,

                    html body .tabs-secondary .nav-tabs li.active a:hover,

                    html.dark body .tabs-secondary .nav-tabs li.active a:hover,

                    html body .tabs-secondary .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-secondary .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-secondary .nav-tabs li.active a:focus,

                    html.dark body .tabs-secondary .nav-tabs li.active a:focus,

                    html body .tabs-secondary .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-secondary .nav-tabs.nav-justified li.active a:focus {

                        border-top-color: #344257;

                        color: #344257;

                    }



                    html body .tabs-secondary.tabs-bottom .nav-tabs li a:hover,

                    html.dark body .tabs-secondary.tabs-bottom .nav-tabs li a:hover,

                    html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li a:hover {

                        border-bottom-color: #344257;

                    }



                    html body .tabs-secondary.tabs-bottom .nav-tabs li.active a,

                    html.dark body .tabs-secondary.tabs-bottom .nav-tabs li.active a,

                    html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html body .tabs-secondary.tabs-bottom .nav-tabs li.active a:hover,

                    html.dark body .tabs-secondary.tabs-bottom .nav-tabs li.active a:hover,

                    html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-secondary.tabs-bottom .nav-tabs li.active a:focus,

                    html.dark body .tabs-secondary.tabs-bottom .nav-tabs li.active a:focus,

                    html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {

                        border-bottom-color: #344257;

                    }



                    html body .tabs-secondary.tabs-vertical.tabs-left li a:hover,

                    html.dark body .tabs-secondary.tabs-vertical.tabs-left li a:hover {

                        border-left-color: #344257;

                    }



                    html body .tabs-secondary.tabs-vertical.tabs-left li.active a,

                    html.dark body .tabs-secondary.tabs-vertical.tabs-left li.active a,

                    html body .tabs-secondary.tabs-vertical.tabs-left li.active a:hover,

                    html.dark body .tabs-secondary.tabs-vertical.tabs-left li.active a:hover,

                    html body .tabs-secondary.tabs-vertical.tabs-left li.active a:focus,

                    html.dark body .tabs-secondary.tabs-vertical.tabs-left li.active a:focus {

                        border-left-color: #344257;

                    }



                    html body .tabs-secondary.tabs-vertical.tabs-right li a:hover,

                    html.dark body .tabs-secondary.tabs-vertical.tabs-right li a:hover {

                        border-right-color: #344257;

                    }



                    html body .tabs-secondary.tabs-vertical.tabs-right li.active a,

                    html.dark body .tabs-secondary.tabs-vertical.tabs-right li.active a,

                    html body .tabs-secondary.tabs-vertical.tabs-right li.active a:hover,

                    html.dark body .tabs-secondary.tabs-vertical.tabs-right li.active a:hover,

                    html body .tabs-secondary.tabs-vertical.tabs-right li.active a:focus,

                    html.dark body .tabs-secondary.tabs-vertical.tabs-right li.active a:focus {

                        border-right-color: #344257;

                    }



                    html body .tabs-tertiary .nav-tabs li a,

                    html.dark body .tabs-tertiary .nav-tabs li a,

                    html body .tabs-tertiary .nav-tabs.nav-justified li a,

                    html.dark body .tabs-tertiary .nav-tabs.nav-justified li a,

                    html body .tabs-tertiary .nav-tabs li a:hover,

                    html.dark body .tabs-tertiary .nav-tabs li a:hover,

                    html body .tabs-tertiary .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-tertiary .nav-tabs.nav-justified li a:hover {

                        color: #d1e7e7;

                    }



                    html body .tabs-tertiary .nav-tabs li a:hover,

                    html.dark body .tabs-tertiary .nav-tabs li a:hover,

                    html body .tabs-tertiary .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-tertiary .nav-tabs.nav-justified li a:hover {

                        border-top-color: #d1e7e7;

                    }



                    html body .tabs-tertiary .nav-tabs li.active a,

                    html.dark body .tabs-tertiary .nav-tabs li.active a,

                    html body .tabs-tertiary .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-tertiary .nav-tabs.nav-justified li.active a,

                    html body .tabs-tertiary .nav-tabs li.active a:hover,

                    html.dark body .tabs-tertiary .nav-tabs li.active a:hover,

                    html body .tabs-tertiary .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-tertiary .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-tertiary .nav-tabs li.active a:focus,

                    html.dark body .tabs-tertiary .nav-tabs li.active a:focus,

                    html body .tabs-tertiary .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-tertiary .nav-tabs.nav-justified li.active a:focus {

                        border-top-color: #d1e7e7;

                        color: #d1e7e7;

                    }



                    html body .tabs-tertiary.tabs-bottom .nav-tabs li a:hover,

                    html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li a:hover,

                    html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li a:hover {

                        border-bottom-color: #d1e7e7;

                    }



                    html body .tabs-tertiary.tabs-bottom .nav-tabs li.active a,

                    html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li.active a,

                    html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:hover,

                    html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:hover,

                    html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:focus,

                    html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:focus,

                    html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {

                        border-bottom-color: #d1e7e7;

                    }



                    html body .tabs-tertiary.tabs-vertical.tabs-left li a:hover,

                    html.dark body .tabs-tertiary.tabs-vertical.tabs-left li a:hover {

                        border-left-color: #d1e7e7;

                    }



                    html body .tabs-tertiary.tabs-vertical.tabs-left li.active a,

                    html.dark body .tabs-tertiary.tabs-vertical.tabs-left li.active a,

                    html body .tabs-tertiary.tabs-vertical.tabs-left li.active a:hover,

                    html.dark body .tabs-tertiary.tabs-vertical.tabs-left li.active a:hover,

                    html body .tabs-tertiary.tabs-vertical.tabs-left li.active a:focus,

                    html.dark body .tabs-tertiary.tabs-vertical.tabs-left li.active a:focus {

                        border-left-color: #d1e7e7;

                    }



                    html body .tabs-tertiary.tabs-vertical.tabs-right li a:hover,

                    html.dark body .tabs-tertiary.tabs-vertical.tabs-right li a:hover {

                        border-right-color: #d1e7e7;

                    }



                    html body .tabs-tertiary.tabs-vertical.tabs-right li.active a,

                    html.dark body .tabs-tertiary.tabs-vertical.tabs-right li.active a,

                    html body .tabs-tertiary.tabs-vertical.tabs-right li.active a:hover,

                    html.dark body .tabs-tertiary.tabs-vertical.tabs-right li.active a:hover,

                    html body .tabs-tertiary.tabs-vertical.tabs-right li.active a:focus,

                    html.dark body .tabs-tertiary.tabs-vertical.tabs-right li.active a:focus {

                        border-right-color: #d1e7e7;

                    }



                    html body .tabs-quaternary .nav-tabs li a,

                    html.dark body .tabs-quaternary .nav-tabs li a,

                    html body .tabs-quaternary .nav-tabs.nav-justified li a,

                    html.dark body .tabs-quaternary .nav-tabs.nav-justified li a,

                    html body .tabs-quaternary .nav-tabs li a:hover,

                    html.dark body .tabs-quaternary .nav-tabs li a:hover,

                    html body .tabs-quaternary .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-quaternary .nav-tabs.nav-justified li a:hover {

                        color: #edeada;

                    }



                    html body .tabs-quaternary .nav-tabs li a:hover,

                    html.dark body .tabs-quaternary .nav-tabs li a:hover,

                    html body .tabs-quaternary .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-quaternary .nav-tabs.nav-justified li a:hover {

                        border-top-color: #edeada;

                    }



                    html body .tabs-quaternary .nav-tabs li.active a,

                    html.dark body .tabs-quaternary .nav-tabs li.active a,

                    html body .tabs-quaternary .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-quaternary .nav-tabs.nav-justified li.active a,

                    html body .tabs-quaternary .nav-tabs li.active a:hover,

                    html.dark body .tabs-quaternary .nav-tabs li.active a:hover,

                    html body .tabs-quaternary .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-quaternary .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-quaternary .nav-tabs li.active a:focus,

                    html.dark body .tabs-quaternary .nav-tabs li.active a:focus,

                    html body .tabs-quaternary .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-quaternary .nav-tabs.nav-justified li.active a:focus {

                        border-top-color: #edeada;

                        color: #edeada;

                    }



                    html body .tabs-quaternary.tabs-bottom .nav-tabs li a:hover,

                    html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li a:hover,

                    html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li a:hover {

                        border-bottom-color: #edeada;

                    }



                    html body .tabs-quaternary.tabs-bottom .nav-tabs li.active a,

                    html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li.active a,

                    html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:hover,

                    html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:hover,

                    html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:focus,

                    html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:focus,

                    html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {

                        border-bottom-color: #edeada;

                    }



                    html body .tabs-quaternary.tabs-vertical.tabs-left li a:hover,

                    html.dark body .tabs-quaternary.tabs-vertical.tabs-left li a:hover {

                        border-left-color: #edeada;

                    }



                    html body .tabs-quaternary.tabs-vertical.tabs-left li.active a,

                    html.dark body .tabs-quaternary.tabs-vertical.tabs-left li.active a,

                    html body .tabs-quaternary.tabs-vertical.tabs-left li.active a:hover,

                    html.dark body .tabs-quaternary.tabs-vertical.tabs-left li.active a:hover,

                    html body .tabs-quaternary.tabs-vertical.tabs-left li.active a:focus,

                    html.dark body .tabs-quaternary.tabs-vertical.tabs-left li.active a:focus {

                        border-left-color: #edeada;

                    }



                    html body .tabs-quaternary.tabs-vertical.tabs-right li a:hover,

                    html.dark body .tabs-quaternary.tabs-vertical.tabs-right li a:hover {

                        border-right-color: #edeada;

                    }



                    html body .tabs-quaternary.tabs-vertical.tabs-right li.active a,

                    html.dark body .tabs-quaternary.tabs-vertical.tabs-right li.active a,

                    html body .tabs-quaternary.tabs-vertical.tabs-right li.active a:hover,

                    html.dark body .tabs-quaternary.tabs-vertical.tabs-right li.active a:hover,

                    html body .tabs-quaternary.tabs-vertical.tabs-right li.active a:focus,

                    html.dark body .tabs-quaternary.tabs-vertical.tabs-right li.active a:focus {

                        border-right-color: #edeada;

                    }



                    html body .tabs-dark .nav-tabs li a,

                    html.dark body .tabs-dark .nav-tabs li a,

                    html body .tabs-dark .nav-tabs.nav-justified li a,

                    html.dark body .tabs-dark .nav-tabs.nav-justified li a,

                    html body .tabs-dark .nav-tabs li a:hover,

                    html.dark body .tabs-dark .nav-tabs li a:hover,

                    html body .tabs-dark .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-dark .nav-tabs.nav-justified li a:hover {

                        color: #2e353e;

                    }



                    html body .tabs-dark .nav-tabs li a:hover,

                    html.dark body .tabs-dark .nav-tabs li a:hover,

                    html body .tabs-dark .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-dark .nav-tabs.nav-justified li a:hover {

                        border-top-color: #2e353e;

                    }



                    html body .tabs-dark .nav-tabs li.active a,

                    html.dark body .tabs-dark .nav-tabs li.active a,

                    html body .tabs-dark .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-dark .nav-tabs.nav-justified li.active a,

                    html body .tabs-dark .nav-tabs li.active a:hover,

                    html.dark body .tabs-dark .nav-tabs li.active a:hover,

                    html body .tabs-dark .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-dark .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-dark .nav-tabs li.active a:focus,

                    html.dark body .tabs-dark .nav-tabs li.active a:focus,

                    html body .tabs-dark .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-dark .nav-tabs.nav-justified li.active a:focus {

                        border-top-color: #2e353e;

                        color: #2e353e;

                    }



                    html body .tabs-dark.tabs-bottom .nav-tabs li a:hover,

                    html.dark body .tabs-dark.tabs-bottom .nav-tabs li a:hover,

                    html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li a:hover {

                        border-bottom-color: #2e353e;

                    }



                    html body .tabs-dark.tabs-bottom .nav-tabs li.active a,

                    html.dark body .tabs-dark.tabs-bottom .nav-tabs li.active a,

                    html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html body .tabs-dark.tabs-bottom .nav-tabs li.active a:hover,

                    html.dark body .tabs-dark.tabs-bottom .nav-tabs li.active a:hover,

                    html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-dark.tabs-bottom .nav-tabs li.active a:focus,

                    html.dark body .tabs-dark.tabs-bottom .nav-tabs li.active a:focus,

                    html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:focus {

                        border-bottom-color: #2e353e;

                    }



                    html body .tabs-dark.tabs-vertical.tabs-left li a:hover,

                    html.dark body .tabs-dark.tabs-vertical.tabs-left li a:hover {

                        border-left-color: #2e353e;

                    }



                    html body .tabs-dark.tabs-vertical.tabs-left li.active a,

                    html.dark body .tabs-dark.tabs-vertical.tabs-left li.active a,

                    html body .tabs-dark.tabs-vertical.tabs-left li.active a:hover,

                    html.dark body .tabs-dark.tabs-vertical.tabs-left li.active a:hover,

                    html body .tabs-dark.tabs-vertical.tabs-left li.active a:focus,

                    html.dark body .tabs-dark.tabs-vertical.tabs-left li.active a:focus {

                        border-left-color: #2e353e;

                    }



                    html body .tabs-dark.tabs-vertical.tabs-right li a:hover,

                    html.dark body .tabs-dark.tabs-vertical.tabs-right li a:hover {

                        border-right-color: #2e353e;

                    }



                    html body .tabs-dark.tabs-vertical.tabs-right li.active a,

                    html.dark body .tabs-dark.tabs-vertical.tabs-right li.active a,

                    html body .tabs-dark.tabs-vertical.tabs-right li.active a:hover,

                    html.dark body .tabs-dark.tabs-vertical.tabs-right li.active a:hover,

                    html body .tabs-dark.tabs-vertical.tabs-right li.active a:focus,

                    html.dark body .tabs-dark.tabs-vertical.tabs-right li.active a:focus {

                        border-right-color: #2e353e;

                    }



                    html body .tabs-light .nav-tabs li a,

                    html.dark body .tabs-light .nav-tabs li a,

                    html body .tabs-light .nav-tabs.nav-justified li a,

                    html.dark body .tabs-light .nav-tabs.nav-justified li a,

                    html body .tabs-light .nav-tabs li a:hover,

                    html.dark body .tabs-light .nav-tabs li a:hover,

                    html body .tabs-light .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-light .nav-tabs.nav-justified li a:hover {

                        color: #ffffff;

                    }



                    html body .tabs-light .nav-tabs li a:hover,

                    html.dark body .tabs-light .nav-tabs li a:hover,

                    html body .tabs-light .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-light .nav-tabs.nav-justified li a:hover {

                        border-top-color: #ffffff;

                    }



                    html body .tabs-light .nav-tabs li.active a,

                    html.dark body .tabs-light .nav-tabs li.active a,

                    html body .tabs-light .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-light .nav-tabs.nav-justified li.active a,

                    html body .tabs-light .nav-tabs li.active a:hover,

                    html.dark body .tabs-light .nav-tabs li.active a:hover,

                    html body .tabs-light .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-light .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-light .nav-tabs li.active a:focus,

                    html.dark body .tabs-light .nav-tabs li.active a:focus,

                    html body .tabs-light .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-light .nav-tabs.nav-justified li.active a:focus {

                        border-top-color: #ffffff;

                        color: #ffffff;

                    }



                    html body .tabs-light.tabs-bottom .nav-tabs li a:hover,

                    html.dark body .tabs-light.tabs-bottom .nav-tabs li a:hover,

                    html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li a:hover {

                        border-bottom-color: #ffffff;

                    }



                    html body .tabs-light.tabs-bottom .nav-tabs li.active a,

                    html.dark body .tabs-light.tabs-bottom .nav-tabs li.active a,

                    html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html body .tabs-light.tabs-bottom .nav-tabs li.active a:hover,

                    html.dark body .tabs-light.tabs-bottom .nav-tabs li.active a:hover,

                    html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-light.tabs-bottom .nav-tabs li.active a:focus,

                    html.dark body .tabs-light.tabs-bottom .nav-tabs li.active a:focus,

                    html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:focus {

                        border-bottom-color: #ffffff;

                    }



                    html body .tabs-light.tabs-vertical.tabs-left li a:hover,

                    html.dark body .tabs-light.tabs-vertical.tabs-left li a:hover {

                        border-left-color: #ffffff;

                    }



                    html body .tabs-light.tabs-vertical.tabs-left li.active a,

                    html.dark body .tabs-light.tabs-vertical.tabs-left li.active a,

                    html body .tabs-light.tabs-vertical.tabs-left li.active a:hover,

                    html.dark body .tabs-light.tabs-vertical.tabs-left li.active a:hover,

                    html body .tabs-light.tabs-vertical.tabs-left li.active a:focus,

                    html.dark body .tabs-light.tabs-vertical.tabs-left li.active a:focus {

                        border-left-color: #ffffff;

                    }



                    html body .tabs-light.tabs-vertical.tabs-right li a:hover,

                    html.dark body .tabs-light.tabs-vertical.tabs-right li a:hover {

                        border-right-color: #ffffff;

                    }



                    html body .tabs-light.tabs-vertical.tabs-right li.active a,

                    html.dark body .tabs-light.tabs-vertical.tabs-right li.active a,

                    html body .tabs-light.tabs-vertical.tabs-right li.active a:hover,

                    html.dark body .tabs-light.tabs-vertical.tabs-right li.active a:hover,

                    html body .tabs-light.tabs-vertical.tabs-right li.active a:focus,

                    html.dark body .tabs-light.tabs-vertical.tabs-right li.active a:focus {

                        border-right-color: #ffffff;

                    }



                    html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-left .nav-tabs li a:hover,

                    html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-left .nav-tabs li.active a,

                    html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:hover,

                    html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:focus {

                        border-right-color: ";
            // line 1849
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        border-left-color: transparent;

                    }



                    html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-right .nav-tabs li a:hover,

                    html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-right .nav-tabs li.active a,

                    html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:hover,

                    html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:focus {

                        border-right-color: transparent;

                        border-left-color: ";
            // line 1867
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .list.list-icons li > .fa:first-child,

                    .list.list-icons li a:first-child > .fa:first-child,

                    .list.list-icons li > .icons:first-child,

                    .list.list-icons li a:first-child > .icons:first-child {

                        color: ";
            // line 1881
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        border-color: ";
            // line 1883
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .list.list-icons.list-icons-style-3 li > .fa:first-child,

                    .list.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,

                    .list.list-icons.list-icons-style-3 li > .icons:first-child,

                    .list.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {

                        background-color: ";
            // line 1897
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .list.list-ordened li:before {

                        color: ";
            // line 1905
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        border-color: ";
            // line 1907
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .list.list-ordened.list-ordened-style-3 li:before {

                        background-color: ";
            // line 1915
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .list-primary.list-icons li > .fa:first-child,

                    html .list-primary.list-icons li a:first-child > .fa:first-child,

                    html .list-primary.list-icons li > .icons:first-child,

                    html .list-primary.list-icons li a:first-child > .icons:first-child {

                        color: ";
            // line 1929
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        border-color: ";
            // line 1931
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .list-primary.list-icons.list-icons-style-3 li > .fa:first-child,

                    html .list-primary.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,

                    html .list-primary.list-icons.list-icons-style-3 li > .icons:first-child,

                    html .list-primary.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {

                        background-color: ";
            // line 1945
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        color: #ffffff;

                    }



                    html .list-primary.list-ordened li:before {

                        color: ";
            // line 1955
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .list-primary.list-ordened.list-ordened-style-3 li:before {

                        background-color: ";
            // line 1963
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        color: #ffffff;

                    }



                    html .list-secondary.list-icons li > .fa:first-child,

                    html .list-secondary.list-icons li a:first-child > .fa:first-child,

                    html .list-secondary.list-icons li > .icons:first-child,

                    html .list-secondary.list-icons li a:first-child > .icons:first-child {

                        color: #344257;

                        border-color: #344257;

                    }



                    html .list-secondary.list-icons.list-icons-style-3 li > .fa:first-child,

                    html .list-secondary.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,

                    html .list-secondary.list-icons.list-icons-style-3 li > .icons:first-child,

                    html .list-secondary.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {

                        background-color: #344257;

                        color: #ffffff;

                    }



                    html .list-secondary.list-ordened li:before {

                        color: #344257;

                    }



                    html .list-secondary.list-ordened.list-ordened-style-3 li:before {

                        background-color: #344257;

                        color: #ffffff;

                    }



                    html .list-tertiary.list-icons li > .fa:first-child,

                    html .list-tertiary.list-icons li a:first-child > .fa:first-child,

                    html .list-tertiary.list-icons li > .icons:first-child,

                    html .list-tertiary.list-icons li a:first-child > .icons:first-child {

                        color: #d1e7e7;

                        border-color: #d1e7e7;

                    }



                    html .list-tertiary.list-icons.list-icons-style-3 li > .fa:first-child,

                    html .list-tertiary.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,

                    html .list-tertiary.list-icons.list-icons-style-3 li > .icons:first-child,

                    html .list-tertiary.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {

                        background-color: #d1e7e7;

                        color: #777777;

                    }



                    html .list-tertiary.list-ordened li:before {

                        color: #d1e7e7;

                    }



                    html .list-tertiary.list-ordened.list-ordened-style-3 li:before {

                        background-color: #d1e7e7;

                        color: #777777;

                    }



                    html .list-quaternary.list-icons li > .fa:first-child,

                    html .list-quaternary.list-icons li a:first-child > .fa:first-child,

                    html .list-quaternary.list-icons li > .icons:first-child,

                    html .list-quaternary.list-icons li a:first-child > .icons:first-child {

                        color: #edeada;

                        border-color: #edeada;

                    }



                    html .list-quaternary.list-icons.list-icons-style-3 li > .fa:first-child,

                    html .list-quaternary.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,

                    html .list-quaternary.list-icons.list-icons-style-3 li > .icons:first-child,

                    html .list-quaternary.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {

                        background-color: #edeada;

                        color: #777777;

                    }



                    html .list-quaternary.list-ordened li:before {

                        color: #edeada;

                    }



                    html .list-quaternary.list-ordened.list-ordened-style-3 li:before {

                        background-color: #edeada;

                        color: #777777;

                    }



                    html .list-dark.list-icons li > .fa:first-child,

                    html .list-dark.list-icons li a:first-child > .fa:first-child,

                    html .list-dark.list-icons li > .icons:first-child,

                    html .list-dark.list-icons li a:first-child > .icons:first-child {

                        color: #2e353e;

                        border-color: #2e353e;

                    }



                    html .list-dark.list-icons.list-icons-style-3 li > .fa:first-child,

                    html .list-dark.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,

                    html .list-dark.list-icons.list-icons-style-3 li > .icons:first-child,

                    html .list-dark.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {

                        background-color: #2e353e;

                        color: #ffffff;

                    }



                    html .list-dark.list-ordened li:before {

                        color: #2e353e;

                    }



                    html .list-dark.list-ordened.list-ordened-style-3 li:before {

                        background-color: #2e353e;

                        color: #ffffff;

                    }



                    html .list-light.list-icons li > .fa:first-child,

                    html .list-light.list-icons li a:first-child > .fa:first-child,

                    html .list-light.list-icons li > .icons:first-child,

                    html .list-light.list-icons li a:first-child > .icons:first-child {

                        color: #ffffff;

                        border-color: #ffffff;

                    }



                    html .list-light.list-icons.list-icons-style-3 li > .fa:first-child,

                    html .list-light.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,

                    html .list-light.list-icons.list-icons-style-3 li > .icons:first-child,

                    html .list-light.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {

                        background-color: #ffffff;

                        color: #777777;

                    }



                    html .list-light.list-ordened li:before {

                        color: #ffffff;

                    }



                    html .list-light.list-ordened.list-ordened-style-3 li:before {

                        background-color: #ffffff;

                        color: #777777;

                    }



                    .parallax blockquote i.fa-quote-left {

                        color: ";
            // line 2223
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    section.video blockquote i.fa-quote-left {

                        color: ";
            // line 2231
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .panel-group .panel-heading a {

                        color: ";
            // line 2239
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .panel-group.panel-group-primary .panel-heading {

                        background-color: ";
            // line 2247
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " !important;

                    }



                    html .panel-group.panel-group-primary .panel-heading a {

                        color: #ffffff;

                    }



                    html .panel-group.panel-group-secondary .panel-heading {

                        background-color: #344257 !important;

                    }



                    html .panel-group.panel-group-secondary .panel-heading a {

                        color: #ffffff;

                    }



                    html .panel-group.panel-group-tertiary .panel-heading {

                        background-color: #d1e7e7 !important;

                    }



                    html .panel-group.panel-group-tertiary .panel-heading a {

                        color: #777777;

                    }



                    html .panel-group.panel-group-quaternary .panel-heading {

                        background-color: #edeada !important;

                    }



                    html .panel-group.panel-group-quaternary .panel-heading a {

                        color: #777777;

                    }



                    html .panel-group.panel-group-dark .panel-heading {

                        background-color: #2e353e !important;

                    }



                    html .panel-group.panel-group-dark .panel-heading a {

                        color: #ffffff;

                    }



                    html .panel-group.panel-group-light .panel-heading {

                        background-color: #ffffff !important;

                    }



                    html .panel-group.panel-group-light .panel-heading a {

                        color: #777777;

                    }



                    html .divider.divider-primary .fa,

                    html .divider.divider-primary .icons {

                        color: ";
            // line 2345
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .divider.divider-primary.divider-small hr {

                        background: ";
            // line 2353
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .divider.divider-secondary .fa,

                    html .divider.divider-secondary .icons {

                        color: #344257;

                    }



                    html .divider.divider-secondary.divider-small hr {

                        background: #344257;

                    }



                    html .divider.divider-tertiary .fa,

                    html .divider.divider-tertiary .icons {

                        color: #d1e7e7;

                    }



                    html .divider.divider-tertiary.divider-small hr {

                        background: #d1e7e7;

                    }



                    html .divider.divider-quaternary .fa,

                    html .divider.divider-quaternary .icons {

                        color: #edeada;

                    }



                    html .divider.divider-quaternary.divider-small hr {

                        background: #edeada;

                    }



                    html .divider.divider-dark .fa,

                    html .divider.divider-dark .icons {

                        color: #2e353e;

                    }



                    html .divider.divider-dark.divider-small hr {

                        background: #2e353e;

                    }



                    html .divider.divider-light .fa,

                    html .divider.divider-light .icons {

                        color: #ffffff;

                    }



                    html .divider.divider-light.divider-small hr {

                        background: #ffffff;

                    }



                    html .divider.divider-style-2.divider-primary .fa,

                    html .divider.divider-style-2.divider-primary .icons {

                        background: ";
            // line 2453
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        color: #ffffff;

                    }



                    html .divider.divider-style-2.divider-secondary .fa,

                    html .divider.divider-style-2.divider-secondary .icons {

                        background: #344257;

                        color: #ffffff;

                    }



                    html .divider.divider-style-2.divider-tertiary .fa,

                    html .divider.divider-style-2.divider-tertiary .icons {

                        background: #d1e7e7;

                        color: #777777;

                    }



                    html .divider.divider-style-2.divider-quaternary .fa,

                    html .divider.divider-style-2.divider-quaternary .icons {

                        background: #edeada;

                        color: #777777;

                    }



                    html .divider.divider-style-2.divider-dark .fa,

                    html .divider.divider-style-2.divider-dark .icons {

                        background: #2e353e;

                        color: #ffffff;

                    }



                    html .divider.divider-style-2.divider-light .fa,

                    html .divider.divider-style-2.divider-light .icons {

                        background: #ffffff;

                        color: #777777;

                    }



                    html .divider.divider-style-3.divider-primary .fa,

                    html .divider.divider-style-3.divider-primary .icons {

                        border-color: ";
            // line 2525
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .divider.divider-style-3.divider-secondary .fa,

                    html .divider.divider-style-3.divider-secondary .icons {

                        border-color: #344257;

                    }



                    html .divider.divider-style-3.divider-tertiary .fa,

                    html .divider.divider-style-3.divider-tertiary .icons {

                        border-color: #d1e7e7;

                    }



                    html .divider.divider-style-3.divider-quaternary .fa,

                    html .divider.divider-style-3.divider-quaternary .icons {

                        border-color: #edeada;

                    }



                    html .divider.divider-style-3.divider-dark .fa,

                    html .divider.divider-style-3.divider-dark .icons {

                        border-color: #2e353e;

                    }



                    html .divider.divider-style-3.divider-light .fa,

                    html .divider.divider-style-3.divider-light .icons {

                        border-color: #ffffff;

                    }



                    #header .tip {

                        background: ";
            // line 2583
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        color: #ffffff;

                    }



                    #header .tip:before {

                        border-right-color: ";
            // line 2593
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html #header .tip-primary {

                        background: ";
            // line 2601
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " !important;

                        color: #ffffff !important;

                    }



                    html #header .tip-primary:before {

                        border-right-color: ";
            // line 2611
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " !important;

                    }



                    html #header .tip-secondary {

                        background: #344257 !important;

                        color: #ffffff !important;

                    }



                    html #header .tip-secondary:before {

                        border-right-color: #344257 !important;

                    }



                    html #header .tip-tertiary {

                        background: #d1e7e7 !important;

                        color: #777777 !important;

                    }



                    html #header .tip-tertiary:before {

                        border-right-color: #d1e7e7 !important;

                    }



                    html #header .tip-quaternary {

                        background: #edeada !important;

                        color: #777777 !important;

                    }



                    html #header .tip-quaternary:before {

                        border-right-color: #edeada !important;

                    }



                    html #header .tip-dark {

                        background: #2e353e !important;

                        color: #ffffff !important;

                    }



                    html #header .tip-dark:before {

                        border-right-color: #2e353e !important;

                    }



                    html #header .tip-light {

                        background: #ffffff !important;

                        color: #777777 !important;

                    }



                    html #header .tip-light:before {

                        border-right-color: #ffffff !important;

                    }



                    html[dir=\"rtl\"] #header .tip.skin:before {

                        border-left-color: ";
            // line 2709
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    #header .header-btn-collapse-nav {

                        background: ";
            // line 2717
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    @media (min-width: 992px) {

                        #header .header-nav-main nav > ul > li.open > a,

                        #header .header-nav-main nav > ul > li:hover > a {

                            background: ";
            // line 2729
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        }



                        #header .header-nav-main nav > ul > li.dropdown .dropdown-menu {

                            border-top-color: ";
            // line 2737
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        }



                        #header .header-nav-main nav > ul > li.dropdown .dropdown-menu li.dropdown-submenu > a:after {

                            border-color: transparent transparent transparent ";
            // line 2745
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        }



                        #header .header-nav-main nav > ul > li.dropdown-reverse .dropdown-menu {

                            border-top-color: ";
            // line 2753
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        }



                        #header .header-nav-main nav > ul > li.dropdown-reverse .dropdown-menu li.dropdown-submenu > a:after {

                            border-color: transparent ";
            // line 2761
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " transparent;

                        }



                        #header .header-nav-main nav > ul > li.dropdown-mega-signin .dropdown-menu {

                            border-top-color: ";
            // line 2769
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        }



                        #header .header-nav-main nav > ul > li.dropdown-mega-signin .dropdown-menu li a {

                            color: ";
            // line 2777
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        }



                        #header .header-nav.header-nav-stripe nav > ul > li:not(:hover).active > a {

                            color: ";
            // line 2785
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        }



                        #header .header-nav.header-nav-stripe nav > ul > li:not(:hover).active > a.dropdown-toggle:after {

                            border-color: ";
            // line 2793
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " transparent transparent transparent;

                        }



                        #header .header-nav.header-nav-stripe nav > ul > li:hover > a {

                            background-color: ";
            // line 2801
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        }



                        #header .header-nav.header-nav-top-line nav > ul li.active > a,

                        #header .header-nav.header-nav-top-line nav > ul li:hover > a {

                            color: ";
            // line 2811
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        }



                        #header .header-nav.header-nav-top-line nav > ul li.active > a:before,

                        #header .header-nav.header-nav-top-line nav > ul li:hover > a:before {

                            background: ";
            // line 2821
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        }



                        #header .header-nav.header-nav-top-line nav > ul li.active > a.dropdown-toggle:after,

                        #header .header-nav.header-nav-top-line nav > ul li:hover > a.dropdown-toggle:after {

                            border-color: ";
            // line 2831
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " transparent transparent transparent;

                        }



                        #header .header-nav.header-nav-dark-dropdown nav > ul li.active > a,

                        #header .header-nav.header-nav-dark-dropdown nav > ul li:hover > a {

                            color: ";
            // line 2841
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        }



                        #header .header-nav.header-nav-dark-dropdown nav > ul li.active > a.dropdown-toggle:after,

                        #header .header-nav.header-nav-dark-dropdown nav > ul li:hover > a.dropdown-toggle:after {

                            border-color: ";
            // line 2851
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " transparent transparent transparent;

                        }



                        html.side-header #header .header-nav-main nav > ul li.dropdown.open > .dropdown-menu,

                        html.side-header #header .header-nav-main nav > ul li.dropdown:hover > .dropdown-menu {

                            border-left-color: ";
            // line 2861
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        }



                        html.side-header-right #header .header-nav-main nav > ul li.dropdown.open > .dropdown-menu,

                        html.side-header-right #header .header-nav-main nav > ul li.dropdown:hover > .dropdown-menu {

                            border-right-color: ";
            // line 2871
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        }

                    }



                    @media (min-width: 992px) {

                        #header .header-nav-main nav > ul > li > a.dropdown-toggle:after {

                            border-color: ";
            // line 2883
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " transparent transparent transparent;

                        }



                        html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,

                        html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {

                            border-color: ";
            // line 2893
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " transparent transparent transparent;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary a {

                            color: ";
            // line 2901
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary a:focus,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary a:hover {

                            background: ";
            // line 2911
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                            color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary.active > a,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary:hover > a {

                            background: ";
            // line 2923
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                            color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu {

                            border-top-color: ";
            // line 2933
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                            background-color: ";
            // line 2935
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu li a {

                            color: #ffffff;

                            border-bottom-color: ";
            // line 2945
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu li:hover > a {

                            background: ";
            // line 2953
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu li.dropdown-submenu > a:after {

                            border-color: transparent transparent transparent #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-primary .dropdown-mega-sub-title {

                            color: #ffffff;

                            opacity: 0.70;

                        }



                        html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,

                        html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {

                            border-color: #344257 transparent transparent transparent;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary a {

                            color: #344257;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary a:focus,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary a:hover {

                            background: #344257;

                            color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary.active > a,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary:hover > a {

                            background: #344257;

                            color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu {

                            border-top-color: #344257;

                            background-color: #344257;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu li a {

                            color: #ffffff;

                            border-bottom-color: #3e4e67;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu li:hover > a {

                            background: #3e4e67;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu li.dropdown-submenu > a:after {

                            border-color: transparent transparent transparent #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-secondary .dropdown-mega-sub-title {

                            color: #ffffff;

                            opacity: 0.70;

                        }



                        html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,

                        html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {

                            border-color: #d1e7e7 transparent transparent transparent;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary a {

                            color: #d1e7e7;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary a:focus,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary a:hover {

                            background: #d1e7e7;

                            color: #777777;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary.active > a,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary:hover > a {

                            background: #d1e7e7;

                            color: #777777;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu {

                            border-top-color: #d1e7e7;

                            background-color: #d1e7e7;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu li a {

                            color: #777777;

                            border-bottom-color: #e2f0f0;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu li:hover > a {

                            background: #e2f0f0;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu li.dropdown-submenu > a:after {

                            border-color: transparent transparent transparent #777777;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-tertiary .dropdown-mega-sub-title {

                            color: #777777;

                            opacity: 0.70;

                        }



                        html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,

                        html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {

                            border-color: #edeada transparent transparent transparent;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary a {

                            color: #edeada;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary a:focus,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary a:hover {

                            background: #edeada;

                            color: #777777;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary.active > a,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary:hover > a {

                            background: #edeada;

                            color: #777777;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu {

                            border-top-color: #edeada;

                            background-color: #edeada;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu li a {

                            color: #777777;

                            border-bottom-color: #f5f4eb;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu li:hover > a {

                            background: #f5f4eb;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu li.dropdown-submenu > a:after {

                            border-color: transparent transparent transparent #777777;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-quaternary .dropdown-mega-sub-title {

                            color: #777777;

                            opacity: 0.70;

                        }



                        html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,

                        html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {

                            border-color: #2e353e transparent transparent transparent;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark a {

                            color: #2e353e;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark a:focus,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark a:hover {

                            background: #2e353e;

                            color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark.active > a,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark:hover > a {

                            background: #2e353e;

                            color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu {

                            border-top-color: #2e353e;

                            background-color: #2e353e;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu li a {

                            color: #ffffff;

                            border-bottom-color: #39424d;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu li:hover > a {

                            background: #39424d;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu li.dropdown-submenu > a:after {

                            border-color: transparent transparent transparent #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-dark .dropdown-mega-sub-title {

                            color: #ffffff;

                            opacity: 0.70;

                        }



                        html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,

                        html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {

                            border-color: #ffffff transparent transparent transparent;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light a {

                            color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light a:focus,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light a:hover {

                            background: #ffffff;

                            color: #777777;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light.active > a,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light:hover > a {

                            background: #ffffff;

                            color: #777777;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu {

                            border-top-color: #ffffff;

                            background-color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu li a {

                            color: #777777;

                            border-bottom-color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu li:hover > a {

                            background: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu li.dropdown-submenu > a:after {

                            border-color: transparent transparent transparent #777777;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-light .dropdown-mega-sub-title {

                            color: #777777;

                            opacity: 0.70;

                        }



                        html[dir=\"rtl\"] #header .header-nav-main nav > ul > li.dropdown .dropdown-menu li.dropdown-submenu > a:after {

                            border-color: transparent ";
            // line 3419
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " transparent transparent;

                        }

                    }



                    @media (max-width: 991px) {

                        #header .header-nav-main nav > ul > li > a,

                        #header .header-nav-main nav > ul > li > a:focus,

                        #header .header-nav-main nav > ul > li > a:hover {

                            color: ";
            // line 3435
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        }



                        #header .header-nav-main nav > ul > li.active > a,

                        #header .header-nav-main nav > ul > li.active > a:focus,

                        #header .header-nav-main nav > ul > li.active > a:hover {

                            background-color: ";
            // line 3447
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        }

                    }



                    @media (max-width: 991px) {

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary > a {

                            color: ";
            // line 3459
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary.active > a {

                            background: ";
            // line 3467
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                            color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary > a {

                            color: #344257;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary.active > a {

                            background: #344257;

                            color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary > a {

                            color: #d1e7e7;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary.active > a {

                            background: #d1e7e7;

                            color: #777777;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary > a {

                            color: #edeada;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary.active > a {

                            background: #edeada;

                            color: #777777;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark > a {

                            color: #2e353e;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark.active > a {

                            background: #2e353e;

                            color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light > a {

                            color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light.active > a {

                            background: #ffffff;

                            color: #777777;

                        }

                    }



                    html #header .header-top.header-top-primary {

                        background: ";
            // line 3569
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        border-top-color: ";
            // line 3571
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html #header .header-top.header-top-primary .header-nav-top ul > li.open > a {

                        background: ";
            // line 3579
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html #header .header-top.header-top-primary .header-nav-top ul > li > a:hover,

                    html #header .header-top.header-top-primary .header-nav-top ul > li.open > a:hover,

                    html #header .header-top.header-top-primary .header-nav-top ul > li > a:focus,

                    html #header .header-top.header-top-primary .header-nav-top ul > li.open > a:focus {

                        background: ";
            // line 3593
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html #header .header-top.header-top-primary .dropdown-menu {

                        background: ";
            // line 3601
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        border-color: ";
            // line 3603
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html #header .header-top.header-top-primary .dropdown-menu a:hover,

                    html #header .header-top.header-top-primary .dropdown-menu a:focus {

                        background: #e6af50 !important;

                    }



                    html #header .header-top.header-top-secondary {

                        background: #344257;

                        border-top-color: #2a3647;

                    }



                    html #header .header-top.header-top-secondary .header-nav-top ul > li.open > a {

                        background: #3e4e67;

                    }



                    html #header .header-top.header-top-secondary .header-nav-top ul > li > a:hover,

                    html #header .header-top.header-top-secondary .header-nav-top ul > li.open > a:hover,

                    html #header .header-top.header-top-secondary .header-nav-top ul > li > a:focus,

                    html #header .header-top.header-top-secondary .header-nav-top ul > li.open > a:focus {

                        background: #3e4e67;

                    }



                    html #header .header-top.header-top-secondary .dropdown-menu {

                        background: #3e4e67;

                        border-color: #3e4e67;

                    }



                    html #header .header-top.header-top-secondary .dropdown-menu a:hover,

                    html #header .header-top.header-top-secondary .dropdown-menu a:focus {

                        background: #475a77 !important;

                    }



                    html #header .header-top.header-top-tertiary {

                        background: #d1e7e7;

                        border-top-color: #c0dede;

                    }



                    html #header .header-top.header-top-tertiary .header-nav-top ul > li.open > a {

                        background: #e2f0f0;

                    }



                    html #header .header-top.header-top-tertiary .header-nav-top ul > li > a:hover,

                    html #header .header-top.header-top-tertiary .header-nav-top ul > li.open > a:hover,

                    html #header .header-top.header-top-tertiary .header-nav-top ul > li > a:focus,

                    html #header .header-top.header-top-tertiary .header-nav-top ul > li.open > a:focus {

                        background: #e2f0f0;

                    }



                    html #header .header-top.header-top-tertiary .dropdown-menu {

                        background: #e2f0f0;

                        border-color: #e2f0f0;

                    }



                    html #header .header-top.header-top-tertiary .dropdown-menu a:hover,

                    html #header .header-top.header-top-tertiary .dropdown-menu a:focus {

                        background: #f3f8f8 !important;

                    }



                    html #header .header-top.header-top-quaternary {

                        background: #edeada;

                        border-top-color: #e5e0c9;

                    }



                    html #header .header-top.header-top-quaternary .header-nav-top ul > li.open > a {

                        background: #f5f4eb;

                    }



                    html #header .header-top.header-top-quaternary .header-nav-top ul > li > a:hover,

                    html #header .header-top.header-top-quaternary .header-nav-top ul > li.open > a:hover,

                    html #header .header-top.header-top-quaternary .header-nav-top ul > li > a:focus,

                    html #header .header-top.header-top-quaternary .header-nav-top ul > li.open > a:focus {

                        background: #f5f4eb;

                    }



                    html #header .header-top.header-top-quaternary .dropdown-menu {

                        background: #f5f4eb;

                        border-color: #f5f4eb;

                    }



                    html #header .header-top.header-top-quaternary .dropdown-menu a:hover,

                    html #header .header-top.header-top-quaternary .dropdown-menu a:focus {

                        background: #fefdfc !important;

                    }



                    html #header .header-top.header-top-dark {

                        background: #2e353e;

                        border-top-color: #23282f;

                    }



                    html #header .header-top.header-top-dark .header-nav-top ul > li.open > a {

                        background: #39424d;

                    }



                    html #header .header-top.header-top-dark .header-nav-top ul > li > a:hover,

                    html #header .header-top.header-top-dark .header-nav-top ul > li.open > a:hover,

                    html #header .header-top.header-top-dark .header-nav-top ul > li > a:focus,

                    html #header .header-top.header-top-dark .header-nav-top ul > li.open > a:focus {

                        background: #39424d;

                    }



                    html #header .header-top.header-top-dark .dropdown-menu {

                        background: #39424d;

                        border-color: #39424d;

                    }



                    html #header .header-top.header-top-dark .dropdown-menu a:hover,

                    html #header .header-top.header-top-dark .dropdown-menu a:focus {

                        background: #444e5b !important;

                    }



                    html #header .header-top.header-top-light {

                        background: #ffffff;

                        border-top-color: #f2f2f2;

                    }



                    html #header .header-top.header-top-light .header-nav-top ul > li.open > a {

                        background: #ffffff;

                    }



                    html #header .header-top.header-top-light .header-nav-top ul > li > a:hover,

                    html #header .header-top.header-top-light .header-nav-top ul > li.open > a:hover,

                    html #header .header-top.header-top-light .header-nav-top ul > li > a:focus,

                    html #header .header-top.header-top-light .header-nav-top ul > li.open > a:focus {

                        background: #ffffff;

                    }



                    html #header .header-top.header-top-light .dropdown-menu {

                        background: #ffffff;

                        border-color: #ffffff;

                    }



                    html #header .header-top.header-top-light .dropdown-menu a:hover,

                    html #header .header-top.header-top-light .dropdown-menu a:focus {

                        background: #ffffff !important;

                    }



                    @media (min-width: 992px) {

                        html #header .header-nav-bar-primary {

                            background: ";
            // line 3883
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " !important;

                            color: #ffffff !important;

                        }



                        html #header .header-nav-bar-secondary {

                            background: #344257 !important;

                            color: #ffffff !important;

                        }



                        html #header .header-nav-bar-tertiary {

                            background: #d1e7e7 !important;

                            color: #777777 !important;

                        }



                        html #header .header-nav-bar-quaternary {

                            background: #edeada !important;

                            color: #777777 !important;

                        }



                        html #header .header-nav-bar-dark {

                            background: #2e353e !important;

                            color: #ffffff !important;

                        }



                        html #header .header-nav-bar-light {

                            background: #ffffff !important;

                            color: #777777 !important;

                        }

                    }



                    @media (min-width: 992px) {

                        #header .header-nav-main.header-nav-main-light nav > ul > li.open > a,

                        #header .header-nav-main.header-nav-main-light nav > ul > li:hover > a {

                            color: ";
            // line 3949
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        }



                        #header .header-nav-main.header-nav-main-light nav > ul > li.active > a {

                            color: ";
            // line 3957
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        }

                    }



                    .testimonial blockquote {

                        background: ";
            // line 3967
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .testimonial .testimonial-arrow-down {

                        border-top-color: ";
            // line 3975
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .testimonial-primary blockquote {

                        background: ";
            // line 3983
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .testimonial-primary .testimonial-arrow-down {

                        border-top-color: ";
            // line 3991
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .testimonial-secondary blockquote {

                        background: #3e4e67;

                    }



                    html .testimonial-secondary .testimonial-arrow-down {

                        border-top-color: #3e4e67;

                    }



                    html .testimonial-tertiary blockquote {

                        background: #e2f0f0;

                    }



                    html .testimonial-tertiary .testimonial-arrow-down {

                        border-top-color: #e2f0f0;

                    }



                    html .testimonial-quaternary blockquote {

                        background: #f5f4eb;

                    }



                    html .testimonial-quaternary .testimonial-arrow-down {

                        border-top-color: #f5f4eb;

                    }



                    html .testimonial-dark blockquote {

                        background: #39424d;

                    }



                    html .testimonial-dark .testimonial-arrow-down {

                        border-top-color: #39424d;

                    }



                    html .testimonial-light blockquote {

                        background: #ffffff;

                    }



                    html .testimonial-light .testimonial-arrow-down {

                        border-top-color: #ffffff;

                    }



                    .circular-bar.only-icon .fa,

                    .circular-bar.only-icon .icons {

                        color: ";
            // line 4081
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .counters .counter-primary .fa,

                    html .counters .counter-primary .icons,

                    html .counters .counter-primary strong {

                        color: ";
            // line 4093
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .counters .counter-secondary .fa,

                    html .counters .counter-secondary .icons,

                    html .counters .counter-secondary strong {

                        color: #344257;

                    }



                    html .counters .counter-tertiary .fa,

                    html .counters .counter-tertiary .icons,

                    html .counters .counter-tertiary strong {

                        color: #d1e7e7;

                    }



                    html .counters .counter-quaternary .fa,

                    html .counters .counter-quaternary .icons,

                    html .counters .counter-quaternary strong {

                        color: #edeada;

                    }



                    html .counters .counter-dark .fa,

                    html .counters .counter-dark .icons,

                    html .counters .counter-dark strong {

                        color: #2e353e;

                    }



                    html .counters .counter-light .fa,

                    html .counters .counter-light .icons,

                    html .counters .counter-light strong {

                        color: #ffffff;

                    }



                    .icon-featured {

                        background-color: ";
            // line 4161
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .featured-box-primary .icon-featured {

                        background-color: ";
            // line 4169
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .featured-box-primary .icon-featured:after {

                        border-color: ";
            // line 4177
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .featured-box-primary h4 {

                        color: ";
            // line 4185
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .featured-box-primary .box-content {

                        border-top-color: ";
            // line 4193
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .featured-box-primary .icon-featured {

                        background-color: ";
            // line 4201
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .featured-box-primary h4 {

                        color: ";
            // line 4209
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .featured-box-primary .box-content {

                        border-top-color: ";
            // line 4217
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .featured-box-secondary .icon-featured {

                        background-color: #344257;

                    }



                    html .featured-box-secondary h4 {

                        color: #344257;

                    }



                    html .featured-box-secondary .box-content {

                        border-top-color: #344257;

                    }



                    html .featured-box-tertiary .icon-featured {

                        background-color: #d1e7e7;

                    }



                    html .featured-box-tertiary h4 {

                        color: #d1e7e7;

                    }



                    html .featured-box-tertiary .box-content {

                        border-top-color: #d1e7e7;

                    }



                    html .featured-box-quaternary .icon-featured {

                        background-color: #edeada;

                    }



                    html .featured-box-quaternary h4 {

                        color: #edeada;

                    }



                    html .featured-box-quaternary .box-content {

                        border-top-color: #edeada;

                    }



                    html .featured-box-dark .icon-featured {

                        background-color: #2e353e;

                    }



                    html .featured-box-dark h4 {

                        color: #2e353e;

                    }



                    html .featured-box-dark .box-content {

                        border-top-color: #2e353e;

                    }



                    html .featured-box-light .icon-featured {

                        background-color: #ffffff;

                    }



                    html .featured-box-light h4 {

                        color: #ffffff;

                    }



                    html .featured-box-light .box-content {

                        border-top-color: #ffffff;

                    }



                    html .featured-boxes-style-3 .featured-box.featured-box-primary .icon-featured {

                        border-color: ";
            // line 4345
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        color: ";
            // line 4347
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .featured-boxes-style-3 .featured-box.featured-box-secondary .icon-featured {

                        border-color: #344257;

                        color: #344257;

                    }



                    html .featured-boxes-style-3 .featured-box.featured-box-tertiary .icon-featured {

                        border-color: #d1e7e7;

                        color: #d1e7e7;

                    }



                    html .featured-boxes-style-3 .featured-box.featured-box-quaternary .icon-featured {

                        border-color: #edeada;

                        color: #edeada;

                    }



                    html .featured-boxes-style-3 .featured-box.featured-box-dark .icon-featured {

                        border-color: #2e353e;

                        color: #2e353e;

                    }



                    html .featured-boxes-style-3 .featured-box.featured-box-light .icon-featured {

                        border-color: #ffffff;

                        color: #ffffff;

                    }



                    html .featured-boxes-style-4 .featured-box.featured-box-primary .icon-featured {

                        border-color: ";
            // line 4405
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        color: ";
            // line 4407
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .featured-boxes-style-4 .featured-box.featured-box-secondary .icon-featured {

                        border-color: #344257;

                        color: #344257;

                    }



                    html .featured-boxes-style-4 .featured-box.featured-box-tertiary .icon-featured {

                        border-color: #d1e7e7;

                        color: #d1e7e7;

                    }



                    html .featured-boxes-style-4 .featured-box.featured-box-quaternary .icon-featured {

                        border-color: #edeada;

                        color: #edeada;

                    }



                    html .featured-boxes-style-4 .featured-box.featured-box-dark .icon-featured {

                        border-color: #2e353e;

                        color: #2e353e;

                    }



                    html .featured-boxes-style-4 .featured-box.featured-box-light .icon-featured {

                        border-color: #ffffff;

                        color: #ffffff;

                    }



                    html .featured-boxes-style-5 .featured-box.featured-box-primary .icon-featured {

                        color: ";
            // line 4465
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .featured-boxes-style-5 .featured-box.featured-box-secondary .icon-featured {

                        color: #344257;

                    }



                    html .featured-boxes-style-5 .featured-box.featured-box-tertiary .icon-featured {

                        color: #d1e7e7;

                    }



                    html .featured-boxes-style-5 .featured-box.featured-box-quaternary .icon-featured {

                        color: #edeada;

                    }



                    html .featured-boxes-style-5 .featured-box.featured-box-dark .icon-featured {

                        color: #2e353e;

                    }



                    html .featured-boxes-style-5 .featured-box.featured-box-light .icon-featured {

                        color: #ffffff;

                    }



                    html .featured-boxes-style-6 .featured-box.featured-box-primary .icon-featured {

                        color: ";
            // line 4513
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .featured-boxes-style-6 .featured-box.featured-box-secondary .icon-featured {

                        color: #344257;

                    }



                    html .featured-boxes-style-6 .featured-box.featured-box-tertiary .icon-featured {

                        color: #d1e7e7;

                    }



                    html .featured-boxes-style-6 .featured-box.featured-box-quaternary .icon-featured {

                        color: #edeada;

                    }



                    html .featured-boxes-style-6 .featured-box.featured-box-dark .icon-featured {

                        color: #2e353e;

                    }



                    html .featured-boxes-style-6 .featured-box.featured-box-light .icon-featured {

                        color: #ffffff;

                    }



                    html .featured-boxes-style-8 .featured-box.featured-box-primary .icon-featured {

                        color: ";
            // line 4561
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .featured-boxes-style-8 .featured-box.featured-box-secondary .icon-featured {

                        color: #344257;

                    }



                    html .featured-boxes-style-8 .featured-box.featured-box-tertiary .icon-featured {

                        color: #d1e7e7;

                    }



                    html .featured-boxes-style-8 .featured-box.featured-box-quaternary .icon-featured {

                        color: #edeada;

                    }



                    html .featured-boxes-style-8 .featured-box.featured-box-dark .icon-featured {

                        color: #2e353e;

                    }



                    html .featured-boxes-style-8 .featured-box.featured-box-light .icon-featured {

                        color: #ffffff;

                    }



                    html .featured-box-effect-2.featured-box-primary .icon-featured:after {

                        box-shadow: 0 0 0 3px ";
            // line 4609
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .featured-box-effect-2.featured-box-secondary .icon-featured:after {

                        box-shadow: 0 0 0 3px #344257;

                    }



                    html .featured-box-effect-2.featured-box-tertiary .icon-featured:after {

                        box-shadow: 0 0 0 3px #d1e7e7;

                    }



                    html .featured-box-effect-2.featured-box-quaternary .icon-featured:after {

                        box-shadow: 0 0 0 3px #edeada;

                    }



                    html .featured-box-effect-2.featured-box-dark .icon-featured:after {

                        box-shadow: 0 0 0 3px #2e353e;

                    }



                    html .featured-box-effect-2.featured-box-light .icon-featured:after {

                        box-shadow: 0 0 0 3px #ffffff;

                    }



                    html .featured-box-effect-3.featured-box-primary .icon-featured:after {

                        box-shadow: 0 0 0 10px ";
            // line 4657
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .featured-box-effect-3.featured-box-primary:hover .icon-featured {

                        background: ";
            // line 4665
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " !important;

                    }



                    html .featured-box-effect-3.featured-box-secondary .icon-featured:after {

                        box-shadow: 0 0 0 10px #344257;

                    }



                    html .featured-box-effect-3.featured-box-secondary:hover .icon-featured {

                        background: #344257 !important;

                    }



                    html .featured-box-effect-3.featured-box-tertiary .icon-featured:after {

                        box-shadow: 0 0 0 10px #d1e7e7;

                    }



                    html .featured-box-effect-3.featured-box-tertiary:hover .icon-featured {

                        background: #d1e7e7 !important;

                    }



                    html .featured-box-effect-3.featured-box-quaternary .icon-featured:after {

                        box-shadow: 0 0 0 10px #edeada;

                    }



                    html .featured-box-effect-3.featured-box-quaternary:hover .icon-featured {

                        background: #edeada !important;

                    }



                    html .featured-box-effect-3.featured-box-dark .icon-featured:after {

                        box-shadow: 0 0 0 10px #2e353e;

                    }



                    html .featured-box-effect-3.featured-box-dark:hover .icon-featured {

                        background: #2e353e !important;

                    }



                    html .featured-box-effect-3.featured-box-light .icon-featured:after {

                        box-shadow: 0 0 0 10px #ffffff;

                    }



                    html .featured-box-effect-3.featured-box-light:hover .icon-featured {

                        background: #ffffff !important;

                    }



                    .feature-box .feature-box-icon {

                        background-color: ";
            // line 4753
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .feature-box-primary .feature-box-icon {

                        background-color: ";
            // line 4761
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .feature-box-secondary .feature-box-icon {

                        background-color: #344257;

                    }



                    html .feature-box-tertiary .feature-box-icon {

                        background-color: #d1e7e7;

                    }



                    html .feature-box-quaternary .feature-box-icon {

                        background-color: #edeada;

                    }



                    html .feature-box-dark .feature-box-icon {

                        background-color: #2e353e;

                    }



                    html .feature-box-light .feature-box-icon {

                        background-color: #ffffff;

                    }



                    .feature-box.feature-box-style-2 .feature-box-icon i.fa,

                    .feature-box.feature-box-style-2 .feature-box-icon .icons {

                        color: ";
            // line 4811
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .feature-box-primary.feature-box-style-2 .feature-box-icon i.fa,

                    html .feature-box-primary.feature-box-style-2 .feature-box-icon .icons {

                        color: ";
            // line 4821
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .feature-box-secondary.feature-box-style-2 .feature-box-icon i.fa,

                    html .feature-box-secondary.feature-box-style-2 .feature-box-icon .icons {

                        color: #344257;

                    }



                    html .feature-box-tertiary.feature-box-style-2 .feature-box-icon i.fa,

                    html .feature-box-tertiary.feature-box-style-2 .feature-box-icon .icons {

                        color: #d1e7e7;

                    }



                    html .feature-box-quaternary.feature-box-style-2 .feature-box-icon i.fa,

                    html .feature-box-quaternary.feature-box-style-2 .feature-box-icon .icons {

                        color: #edeada;

                    }



                    html .feature-box-dark.feature-box-style-2 .feature-box-icon i.fa,

                    html .feature-box-dark.feature-box-style-2 .feature-box-icon .icons {

                        color: #2e353e;

                    }



                    html .feature-box-light.feature-box-style-2 .feature-box-icon i.fa,

                    html .feature-box-light.feature-box-style-2 .feature-box-icon .icons {

                        color: #ffffff;

                    }



                    .feature-box.feature-box-style-3 .feature-box-icon {

                        border-color: ";
            // line 4879
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .feature-box.feature-box-style-3 .feature-box-icon i.fa,

                    .feature-box.feature-box-style-3 .feature-box-icon .icons {

                        color: ";
            // line 4889
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .feature-box-primary.feature-box-style-3 .feature-box-icon {

                        border-color: ";
            // line 4897
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .feature-box-primary.feature-box-style-3 .feature-box-icon i.fa,

                    html .feature-box-primary.feature-box-style-3 .feature-box-icon .icons {

                        color: ";
            // line 4907
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .feature-box-secondary.feature-box-style-3 .feature-box-icon {

                        border-color: #344257;

                    }



                    html .feature-box-secondary.feature-box-style-3 .feature-box-icon i.fa,

                    html .feature-box-secondary.feature-box-style-3 .feature-box-icon .icons {

                        color: #344257;

                    }



                    html .feature-box-tertiary.feature-box-style-3 .feature-box-icon {

                        border-color: #d1e7e7;

                    }



                    html .feature-box-tertiary.feature-box-style-3 .feature-box-icon i.fa,

                    html .feature-box-tertiary.feature-box-style-3 .feature-box-icon .icons {

                        color: #d1e7e7;

                    }



                    html .feature-box-quaternary.feature-box-style-3 .feature-box-icon {

                        border-color: #edeada;

                    }



                    html .feature-box-quaternary.feature-box-style-3 .feature-box-icon i.fa,

                    html .feature-box-quaternary.feature-box-style-3 .feature-box-icon .icons {

                        color: #edeada;

                    }



                    html .feature-box-dark.feature-box-style-3 .feature-box-icon {

                        border-color: #2e353e;

                    }



                    html .feature-box-dark.feature-box-style-3 .feature-box-icon i.fa,

                    html .feature-box-dark.feature-box-style-3 .feature-box-icon .icons {

                        color: #2e353e;

                    }



                    html .feature-box-light.feature-box-style-3 .feature-box-icon {

                        border-color: #ffffff;

                    }



                    html .feature-box-light.feature-box-style-3 .feature-box-icon i.fa,

                    html .feature-box-light.feature-box-style-3 .feature-box-icon .icons {

                        color: #ffffff;

                    }



                    .feature-box.feature-box-style-4 .feature-box-icon i.fa,

                    .feature-box.feature-box-style-4 .feature-box-icon .icons {

                        color: ";
            // line 5007
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .feature-box-primary.feature-box-style-4 .feature-box-icon i.fa,

                    html .feature-box-primary.feature-box-style-4 .feature-box-icon .icons {

                        color: ";
            // line 5017
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .feature-box-secondary.feature-box-style-4 .feature-box-icon i.fa,

                    html .feature-box-secondary.feature-box-style-4 .feature-box-icon .icons {

                        color: #344257;

                    }



                    html .feature-box-tertiary.feature-box-style-4 .feature-box-icon i.fa,

                    html .feature-box-tertiary.feature-box-style-4 .feature-box-icon .icons {

                        color: #d1e7e7;

                    }



                    html .feature-box-quaternary.feature-box-style-4 .feature-box-icon i.fa,

                    html .feature-box-quaternary.feature-box-style-4 .feature-box-icon .icons {

                        color: #edeada;

                    }



                    html .feature-box-dark.feature-box-style-4 .feature-box-icon i.fa,

                    html .feature-box-dark.feature-box-style-4 .feature-box-icon .icons {

                        color: #2e353e;

                    }



                    html .feature-box-light.feature-box-style-4 .feature-box-icon i.fa,

                    html .feature-box-light.feature-box-style-4 .feature-box-icon .icons {

                        color: #ffffff;

                    }



                    .feature-box.feature-box-style-5 .feature-box-icon i.fa,

                    .feature-box.feature-box-style-5 .feature-box-icon i.icons {

                        color: ";
            // line 5077
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .feature-box-primary.feature-box-style-5 .feature-box-icon i.fa,

                    html .feature-box-primary.feature-box-style-5 .feature-box-icon i.icons {

                        color: ";
            // line 5087
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .feature-box-secondary.feature-box-style-5 .feature-box-icon i.fa,

                    html .feature-box-secondary.feature-box-style-5 .feature-box-icon i.icons {

                        color: #344257;

                    }



                    html .feature-box-tertiary.feature-box-style-5 .feature-box-icon i.fa,

                    html .feature-box-tertiary.feature-box-style-5 .feature-box-icon i.icons {

                        color: #d1e7e7;

                    }



                    html .feature-box-quaternary.feature-box-style-5 .feature-box-icon i.fa,

                    html .feature-box-quaternary.feature-box-style-5 .feature-box-icon i.icons {

                        color: #edeada;

                    }



                    html .feature-box-dark.feature-box-style-5 .feature-box-icon i.fa,

                    html .feature-box-dark.feature-box-style-5 .feature-box-icon i.icons {

                        color: #2e353e;

                    }



                    html .feature-box-light.feature-box-style-5 .feature-box-icon i.fa,

                    html .feature-box-light.feature-box-style-5 .feature-box-icon i.icons {

                        color: #ffffff;

                    }



                    html .feature-box-primary.feature-box-style-6 .feature-box-icon i.fa,

                    html .feature-box-primary.feature-box-style-6 .feature-box-icon i.icons {

                        color: ";
            // line 5147
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .feature-box-secondary.feature-box-style-6 .feature-box-icon i.fa,

                    html .feature-box-secondary.feature-box-style-6 .feature-box-icon i.icons {

                        color: #344257;

                    }



                    html .feature-box-tertiary.feature-box-style-6 .feature-box-icon i.fa,

                    html .feature-box-tertiary.feature-box-style-6 .feature-box-icon i.icons {

                        color: #d1e7e7;

                    }



                    html .feature-box-quaternary.feature-box-style-6 .feature-box-icon i.fa,

                    html .feature-box-quaternary.feature-box-style-6 .feature-box-icon i.icons {

                        color: #edeada;

                    }



                    html .feature-box-dark.feature-box-style-6 .feature-box-icon i.fa,

                    html .feature-box-dark.feature-box-style-6 .feature-box-icon i.icons {

                        color: #2e353e;

                    }



                    html .feature-box-light.feature-box-style-6 .feature-box-icon i.fa,

                    html .feature-box-light.feature-box-style-6 .feature-box-icon i.icons {

                        color: #ffffff;

                    }



                    html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(1) .featured-box-full-primary {

                        background-color: ";
            // line 5205
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(2) .featured-box-full-primary {

                        background-color: ";
            // line 5213
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(3) .featured-box-full-primary {

                        background-color: ";
            // line 5221
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(4) .featured-box-full-primary {

                        background-color: ";
            // line 5229
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(5) .featured-box-full-primary {

                        background-color: #e6af50;

                    }



                    html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(6) .featured-box-full-primary {

                        background-color: #e9b966;

                    }



                    html .featured-boxes-full .featured-box-full-primary {

                        background-color: ";
            // line 5253
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        color: #ffffff;

                    }



                    html .featured-boxes-full .featured-box-full-secondary {

                        background-color: #344257;

                        color: #ffffff;

                    }



                    html .featured-boxes-full .featured-box-full-tertiary {

                        background-color: #d1e7e7;

                        color: #777777;

                    }



                    html .featured-boxes-full .featured-box-full-quaternary {

                        background-color: #edeada;

                        color: #777777;

                    }



                    html .featured-boxes-full .featured-box-full-dark {

                        background-color: #2e353e;

                        color: #ffffff;

                    }



                    html .featured-boxes-full .featured-box-full-light {

                        background-color: #ffffff;

                        color: #777777;

                    }



                    .pricing-table .most-popular {

                        border-color: ";
            // line 5313
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .pricing-table .most-popular h3 {

                        background-color: ";
            // line 5321
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " !important;

                    }



                    .pricing-table.princig-table-flat .plan h3 {

                        background-color: ";
            // line 5329
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .pricing-table.princig-table-flat .plan h3 span {

                        background: ";
            // line 5337
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .call-to-action.featured.featured-primary {

                        border-top-color: ";
            // line 5345
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .call-to-action.call-to-action-primary {

                        background: ";
            // line 5353
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .call-to-action.with-full-borders-primary {

                        border-color: ";
            // line 5361
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .call-to-action.call-to-action-primary {

                        background: ";
            // line 5369
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .call-to-action.call-to-action-primary h3,

                    html .call-to-action.call-to-action-primary p {

                        color: #ffffff;

                    }



                    html .call-to-action.featured.featured-secondary {

                        border-top-color: #344257;

                    }



                    html .call-to-action.call-to-action-secondary {

                        background: #344257;

                    }



                    html .call-to-action.with-full-borders-secondary {

                        border-color: #344257;

                    }



                    html .call-to-action.call-to-action-secondary {

                        background: #344257;

                    }



                    html .call-to-action.call-to-action-secondary h3,

                    html .call-to-action.call-to-action-secondary p {

                        color: #ffffff;

                    }



                    html .call-to-action.featured.featured-tertiary {

                        border-top-color: #d1e7e7;

                    }



                    html .call-to-action.call-to-action-tertiary {

                        background: #d1e7e7;

                    }



                    html .call-to-action.with-full-borders-tertiary {

                        border-color: #d1e7e7;

                    }



                    html .call-to-action.call-to-action-tertiary {

                        background: #d1e7e7;

                    }



                    html .call-to-action.call-to-action-tertiary h3,

                    html .call-to-action.call-to-action-tertiary p {

                        color: #777777;

                    }



                    html .call-to-action.featured.featured-quaternary {

                        border-top-color: #edeada;

                    }



                    html .call-to-action.call-to-action-quaternary {

                        background: #edeada;

                    }



                    html .call-to-action.with-full-borders-quaternary {

                        border-color: #edeada;

                    }



                    html .call-to-action.call-to-action-quaternary {

                        background: #edeada;

                    }



                    html .call-to-action.call-to-action-quaternary h3,

                    html .call-to-action.call-to-action-quaternary p {

                        color: #777777;

                    }



                    html .call-to-action.featured.featured-dark {

                        border-top-color: #2e353e;

                    }



                    html .call-to-action.call-to-action-dark {

                        background: #2e353e;

                    }



                    html .call-to-action.with-full-borders-dark {

                        border-color: #2e353e;

                    }



                    html .call-to-action.call-to-action-dark {

                        background: #2e353e;

                    }



                    html .call-to-action.call-to-action-dark h3,

                    html .call-to-action.call-to-action-dark p {

                        color: #ffffff;

                    }



                    html .call-to-action.featured.featured-light {

                        border-top-color: #ffffff;

                    }



                    html .call-to-action.call-to-action-light {

                        background: #ffffff;

                    }



                    html .call-to-action.with-full-borders-light {

                        border-color: #ffffff;

                    }



                    html .call-to-action.call-to-action-light {

                        background: #ffffff;

                    }



                    html .call-to-action.call-to-action-light h3,

                    html .call-to-action.call-to-action-light p {

                        color: #777777;

                    }



                    section.timeline .timeline-box.left:before,

                    section.timeline .timeline-box.right:before {

                        background: ";
            // line 5599
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        box-shadow: 0 0 0 3px #ffffff, 0 0 0 6px ";
            // line 5601
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    ul.history li .featured-box .box-content {

                        border-top-color: ";
            // line 5609
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .recent-posts .date .month,

                    article.post .post-date .month {

                        background-color: ";
            // line 5619
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .recent-posts .date .day,

                    article.post .post-date .day {

                        color: ";
            // line 5629
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .slider .tp-bannertimer {

                        background-color: ";
            // line 5637
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .home-concept strong {

                        color: ";
            // line 5645
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .home-intro-primary {

                        background: ";
            // line 5653
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .home-intro-secondary {

                        background: #344257;

                    }



                    html .home-intro-tertiary {

                        background: #d1e7e7;

                    }



                    html .home-intro-quaternary {

                        background: #edeada;

                    }



                    html .home-intro-dark {

                        background: #2e353e;

                    }



                    html .home-intro-light {

                        background: #ffffff;

                    }



                    .home-intro p em {

                        color: #e6af50;

                    }



                    html .slider-container .tp-caption-overlay-primary {

                        background: ";
            // line 5709
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html .slider-container .tp-caption-overlay-opacity-primary {

                        background: rgba(224, 155, 35, 0.4);

                    }



                    html .slider-container .tp-caption-overlay-secondary {

                        background: #344257;

                    }



                    html .slider-container .tp-caption-overlay-opacity-secondary {

                        background: rgba(52, 66, 87, 0.4);

                    }



                    html .slider-container .tp-caption-overlay-tertiary {

                        background: #d1e7e7;

                    }



                    html .slider-container .tp-caption-overlay-opacity-tertiary {

                        background: rgba(209, 231, 231, 0.4);

                    }



                    html .slider-container .tp-caption-overlay-quaternary {

                        background: #edeada;

                    }



                    html .slider-container .tp-caption-overlay-opacity-quaternary {

                        background: rgba(237, 234, 218, 0.4);

                    }



                    html .slider-container .tp-caption-overlay-dark {

                        background: #2e353e;

                    }



                    html .slider-container .tp-caption-overlay-opacity-dark {

                        background: rgba(46, 53, 62, 0.4);

                    }



                    html .slider-container .tp-caption-overlay-light {

                        background: #ffffff;

                    }



                    html .slider-container .tp-caption-overlay-opacity-light {

                        background: rgba(255, 255, 255, 0.4);

                    }

                    /* Arrows */

                    .tparrows.tparrows-carousel.tp-leftarrow,

                    .tparrows.tparrows-carousel.tp-rightarrow {

                        color: #ffffff;

                        background-color: ";
            // line 5809
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        border-color: ";
            // line 5811
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .tparrows.tparrows-carousel.tp-leftarrow:hover,

                    .tparrows.tparrows-carousel.tp-rightarrow:hover {

                        border-color: ";
            // line 5821
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        background-color: ";
            // line 5823
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .tparrows.tparrows-carousel.tp-leftarrow:active,

                    .tparrows.tparrows-carousel.tp-rightarrow:active,

                    .tparrows.tparrows-carousel.tp-leftarrow:focus,

                    .tparrows.tparrows-carousel.tp-rightarrow:focus,

                    .tparrows.tparrows-carousel.tp-leftarrow:active:hover,

                    .tparrows.tparrows-carousel.tp-rightarrow:active:hover,

                    .tparrows.tparrows-carousel.tp-leftarrow:active:focus,

                    .tparrows.tparrows-carousel.tp-rightarrow:active:focus {

                        border-color: ";
            // line 5845
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        background-color: ";
            // line 5847
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .tparrows.tparrows-carousel.tp-leftarrow.dropdown-toggle,

                    .tparrows.tparrows-carousel.tp-rightarrow.dropdown-toggle {

                        border-left-color: ";
            // line 5857
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .tparrows.tparrows-carousel.tp-leftarrow[disabled],

                    .tparrows.tparrows-carousel.tp-rightarrow[disabled],

                    .tparrows.tparrows-carousel.tp-leftarrow[disabled]:hover,

                    .tparrows.tparrows-carousel.tp-rightarrow[disabled]:hover,

                    .tparrows.tparrows-carousel.tp-leftarrow[disabled]:active,

                    .tparrows.tparrows-carousel.tp-rightarrow[disabled]:active,

                    .tparrows.tparrows-carousel.tp-leftarrow[disabled]:focus,

                    .tparrows.tparrows-carousel.tp-rightarrow[disabled]:focus {

                        border-color: #edc47c;

                        background-color: #edc47c;

                    }



                    .shop ul.products li.product .onsale {

                        background-color: ";
            // line 5889
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        border-bottom-color: ";
            // line 5891
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    .shop .star-rating span,

                    .shop .cart-totals tr.total .amount {

                        color: ";
            // line 5901
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    #footer .footer-ribbon {

                        background: ";
            // line 5909
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    #footer .footer-ribbon:before {

                        border-right-color: ";
            // line 5917
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        border-left-color: ";
            // line 5919
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    #footer.light h1,

                    #footer.light h2,

                    #footer.light h3,

                    #footer.light h4,

                    #footer.light a {

                        color: ";
            // line 5935
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    #footer.color {

                        background: ";
            // line 5943
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        border-top-color: ";
            // line 5945
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    #footer.color .footer-ribbon {

                        background: ";
            // line 5953
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    #footer.color .footer-ribbon:before {

                        border-right-color: #734f10;

                    }



                    #footer.color .footer-copyright {

                        background: ";
            // line 5969
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        border-top-color: ";
            // line 5971
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html #footer.color-primary {

                        background: ";
            // line 5979
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        border-top-color: ";
            // line 5981
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html #footer.color-primary .footer-ribbon {

                        background: ";
            // line 5989
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html #footer.color-primary .footer-ribbon:before {

                        border-right-color: #734f10;

                    }



                    html #footer.color-primary .footer-copyright {

                        background: ";
            // line 6005
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                        border-top-color: ";
            // line 6007
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }



                    html #footer.color-secondary {

                        background: #344257;

                        border-top-color: #344257;

                    }



                    html #footer.color-secondary .footer-ribbon {

                        background: #212a37;

                    }



                    html #footer.color-secondary .footer-ribbon:before {

                        border-right-color: #040507;

                    }



                    html #footer.color-secondary .footer-copyright {

                        background: #2a3647;

                        border-top-color: #2a3647;

                    }



                    html #footer.color-tertiary {

                        background: #d1e7e7;

                        border-top-color: #d1e7e7;

                    }



                    html #footer.color-tertiary .footer-ribbon {

                        background: #afd6d6;

                    }



                    html #footer.color-tertiary .footer-ribbon:before {

                        border-right-color: #7dbbbb;

                    }



                    html #footer.color-tertiary .footer-copyright {

                        background: #c0dede;

                        border-top-color: #c0dede;

                    }



                    html #footer.color-quaternary {

                        background: #edeada;

                        border-top-color: #edeada;

                    }



                    html #footer.color-quaternary .footer-ribbon {

                        background: #dcd7b8;

                    }



                    html #footer.color-quaternary .footer-ribbon:before {

                        border-right-color: #c3b984;

                    }



                    html #footer.color-quaternary .footer-copyright {

                        background: #e5e0c9;

                        border-top-color: #e5e0c9;

                    }



                    html #footer.color-dark {

                        background: #2e353e;

                        border-top-color: #2e353e;

                    }



                    html #footer.color-dark .footer-ribbon {

                        background: #181c21;

                    }



                    html #footer.color-dark .footer-ribbon:before {

                        border-right-color: #000000;

                    }



                    html #footer.color-dark .footer-copyright {

                        background: #23282f;

                        border-top-color: #23282f;

                    }



                    html #footer.color-light {

                        background: #ffffff;

                        border-top-color: #ffffff;

                    }



                    html #footer.color-light .footer-ribbon {

                        background: #e6e6e6;

                    }



                    html #footer.color-light .footer-ribbon:before {

                        border-right-color: #bfbfbf;

                    }



                    html #footer.color-light .footer-copyright {

                        background: #f2f2f2;

                        border-top-color: #f2f2f2;

                    }
                    
                    .sample-icon-list .sample-icon a:hover {

                        background-color: ";
            // line 6193
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }
                    html.boxed .body {

                        border-top-color: ";
            // line 6198
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";

                    }
                    #header .header-body .header-container .header-row .header-column .header-row .header-nav .header-nav-main nav > #mainNav > .dropdown-full-color.dropdown-secondary .is-active{
                        color: ";
            // line 6202
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";
                    }
                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary:hover > a.is-active{
                        background: ";
            // line 6205
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";
                    }
                    #contact-message-feedback-form #edit-submit{
                        background-color: ";
            // line 6208
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";
                        border-color: ";
            // line 6209
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";
                    }

                    input#edit-submit:hover {
                        border-color: ";
            // line 6213
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";
                        background-color: ";
            // line 6214
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";
                    }
                    .tabs ul.tabs a {
                        color: ";
            // line 6217
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";
                    }
                    .tabs ul.tabs a.is-active, .tabs ul.tabs a:hover {
                        border-top-color: ";
            // line 6220
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";
                    }
                    .user-login-form .button,
                    .user-pass .button,
                    .user-register-form .button{
                        background-color: ";
            // line 6225
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";
                        border-color: ";
            // line 6226
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";
                    }
                    .user-login-form .button:hover,
                    .user-pass .button:hover,
                    .user-register-form .button:hover{
                        border-color: ";
            // line 6231
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";
                        background-color: ";
            // line 6232
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_color"] ?? null)), "html", null, true);
            echo ";
                    }
                </style>
            ";
        }
        // line 6236
        echo "            
            ";
        // line 6237
        if ( !twig_test_empty(($context["your_css"] ?? null))) {
            // line 6238
            echo "                <style>
                    ";
            // line 6239
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["your_css"] ?? null)), "html", null, true);
            echo "
                </style>
            ";
        }
        // line 6242
        echo "            <js-placeholder token=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
            <meta name=\"HandheldFriendly\" content=\"true\" />
            <meta name=\"apple-touch-fullscreen\" content=\"YES\" />
</head>
<body ";
        // line 6246
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method")), "html", null, true);
        echo " data-spy=\"scroll\" data-offset=\"100\">

<a href=\"#main-content\" class=\"visually-hidden focusable\">
    ";
        // line 6249
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content"));
        echo "
</a>
    ";
        // line 6251
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null)), "html", null, true);
        echo "
    ";
        // line 6252
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null)), "html", null, true);
        echo "
    ";
        // line 6253
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null)), "html", null, true);
        echo "
<js-bottom-placeholder token=\"";
        // line 6254
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "themes/porto_subtheme/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  7264 => 6254,  7260 => 6253,  7256 => 6252,  7252 => 6251,  7247 => 6249,  7241 => 6246,  7233 => 6242,  7227 => 6239,  7224 => 6238,  7222 => 6237,  7219 => 6236,  7212 => 6232,  7204 => 6231,  7192 => 6226,  7188 => 6225,  7180 => 6220,  7174 => 6217,  7168 => 6214,  7160 => 6213,  7149 => 6209,  7145 => 6208,  7139 => 6205,  7133 => 6202,  7126 => 6198,  7118 => 6193,  6929 => 6007,  6924 => 6005,  6905 => 5989,  6894 => 5981,  6889 => 5979,  6878 => 5971,  6873 => 5969,  6854 => 5953,  6843 => 5945,  6838 => 5943,  6827 => 5935,  6808 => 5919,  6803 => 5917,  6792 => 5909,  6781 => 5901,  6768 => 5891,  6763 => 5889,  6728 => 5857,  6715 => 5847,  6706 => 5845,  6681 => 5823,  6672 => 5821,  6655 => 5811,  6650 => 5809,  6547 => 5709,  6488 => 5653,  6477 => 5645,  6466 => 5637,  6455 => 5629,  6442 => 5619,  6429 => 5609,  6418 => 5601,  6413 => 5599,  6180 => 5369,  6169 => 5361,  6158 => 5353,  6147 => 5345,  6136 => 5337,  6125 => 5329,  6114 => 5321,  6103 => 5313,  6040 => 5253,  6013 => 5229,  6002 => 5221,  5991 => 5213,  5980 => 5205,  5919 => 5147,  5856 => 5087,  5843 => 5077,  5780 => 5017,  5767 => 5007,  5664 => 4907,  5651 => 4897,  5640 => 4889,  5627 => 4879,  5566 => 4821,  5553 => 4811,  5500 => 4761,  5489 => 4753,  5398 => 4665,  5387 => 4657,  5336 => 4609,  5285 => 4561,  5234 => 4513,  5183 => 4465,  5122 => 4407,  5117 => 4405,  5056 => 4347,  5051 => 4345,  4920 => 4217,  4909 => 4209,  4898 => 4201,  4887 => 4193,  4876 => 4185,  4865 => 4177,  4854 => 4169,  4843 => 4161,  4772 => 4093,  4757 => 4081,  4664 => 3991,  4653 => 3983,  4642 => 3975,  4631 => 3967,  4618 => 3957,  4607 => 3949,  4538 => 3883,  4255 => 3603,  4250 => 3601,  4239 => 3593,  4222 => 3579,  4211 => 3571,  4206 => 3569,  4101 => 3467,  4090 => 3459,  4075 => 3447,  4060 => 3435,  4041 => 3419,  3572 => 2953,  3561 => 2945,  3548 => 2935,  3543 => 2933,  3530 => 2923,  3515 => 2911,  3502 => 2901,  3491 => 2893,  3478 => 2883,  3463 => 2871,  3450 => 2861,  3437 => 2851,  3424 => 2841,  3411 => 2831,  3398 => 2821,  3385 => 2811,  3372 => 2801,  3361 => 2793,  3350 => 2785,  3339 => 2777,  3328 => 2769,  3317 => 2761,  3306 => 2753,  3295 => 2745,  3284 => 2737,  3273 => 2729,  3258 => 2717,  3247 => 2709,  3146 => 2611,  3133 => 2601,  3122 => 2593,  3109 => 2583,  3048 => 2525,  2973 => 2453,  2870 => 2353,  2859 => 2345,  2758 => 2247,  2747 => 2239,  2736 => 2231,  2725 => 2223,  2462 => 1963,  2451 => 1955,  2438 => 1945,  2421 => 1931,  2416 => 1929,  2399 => 1915,  2388 => 1907,  2383 => 1905,  2372 => 1897,  2355 => 1883,  2350 => 1881,  2333 => 1867,  2312 => 1849,  1455 => 995,  1434 => 977,  1421 => 967,  1400 => 949,  1387 => 939,  1354 => 909,  1337 => 895,  1332 => 893,  1299 => 863,  1282 => 849,  1257 => 827,  1252 => 825,  1227 => 803,  1202 => 781,  1177 => 759,  1152 => 737,  1135 => 723,  1130 => 721,  1117 => 711,  1100 => 697,  1067 => 667,  1056 => 659,  1047 => 657,  1030 => 643,  1021 => 641,  1006 => 633,  1001 => 631,  988 => 621,  927 => 563,  916 => 555,  905 => 547,  900 => 545,  889 => 537,  880 => 531,  872 => 526,  867 => 524,  859 => 519,  854 => 517,  846 => 512,  836 => 505,  831 => 503,  823 => 498,  810 => 488,  801 => 486,  776 => 464,  767 => 462,  750 => 452,  745 => 450,  730 => 438,  725 => 436,  704 => 418,  683 => 400,  678 => 398,  657 => 380,  639 => 365,  626 => 355,  617 => 353,  592 => 331,  583 => 329,  568 => 317,  559 => 315,  554 => 313,  539 => 301,  534 => 299,  524 => 292,  513 => 284,  504 => 282,  487 => 268,  478 => 266,  465 => 258,  460 => 256,  450 => 249,  439 => 241,  430 => 239,  413 => 225,  404 => 223,  389 => 215,  384 => 213,  371 => 203,  360 => 195,  349 => 187,  341 => 182,  330 => 174,  319 => 166,  306 => 156,  298 => 151,  285 => 141,  274 => 133,  263 => 125,  252 => 117,  241 => 109,  230 => 101,  217 => 91,  206 => 83,  195 => 75,  187 => 70,  179 => 65,  171 => 60,  164 => 56,  152 => 47,  143 => 41,  136 => 37,  129 => 33,  122 => 29,  118 => 27,  116 => 26,  111 => 24,  105 => 21,  101 => 20,  68 => 17,  63 => 14,  61 => 11,  60 => 10,  59 => 9,  58 => 8,  57 => 7,  56 => 6,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{%
set body_classes = [
'd-flex',
'min-vh-100',
'flex-column',
logged_in ? 'user-logged-in',
not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,
node_type ? 'page-node-type-' ~ node_type|clean_class,
db_offline ? 'db-offline',
current_path ? 'context' ~ current_path|clean_class,
not is_front ? 'inner_pages': ''
]
%}


<!DOCTYPE html>
<html{{ html_attributes }} class=\"{% if h_semi_transparent_option == 1 %}{{ 'side-header side-header-semi-transparent ' }}{% else %}{% if arg == 'index-header-side-header-semi-transparent' %}{{ 'side-header side-header-semi-transparent' }}{% endif %}{% endif %}{% if header_option == 'h_left' %}{{ 'side-header' }}{% elseif header_option == 'h_right' %}{{ 'side-header side-header-right' }}{% else %}{% if arg == 'index-header-side-header-left' %}{{ 'side-header' }}{% elseif arg == 'index-header-side-header-right' %}{{ 'side-header side-header-right' }}{% endif %}{% endif %} {% if arg == 'index-layout-boxed' %}{{ 'boxed' }}{% elseif arg == 'index-layout-dark' %}{{ 'dark' }}{% else %}{{ layout_option }}{% endif %}\">

<head>
    <head-placeholder token=\"{{ placeholder_token|raw }}\">
        <title>{{ head_title|safe_join(' | ') }}</title>
        <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\" rel=\"stylesheet\">
        <css-placeholder token=\"{{ placeholder_token|raw }}\">

            {% if skin_option == 'custom' %}
                <style>
                    a {
                        color: {{ custom_color }};
                    }

                    a:hover {
                        color: {{ custom_color }};
                    }

                    a:focus {
                        color: {{ custom_color }};
                    }

                    a:active {
                        color: {{ custom_color }};
                    }

                    html .heading-primary,
                    html .lnk-primary,
                    html .text-color-primary {
                        color: {{ custom_color }} !important;
                    }

                    html .heading.heading-primary h1,
                    html .heading.heading-primary h2,
                    html .heading.heading-primary h3,
                    html .heading.heading-primary h4,
                    html .heading.heading-primary h5,
                    html .heading.heading-primary h6 {
                        border-color: {{ custom_color }};
                    }
                    html .background-color-primary {

                        background-color: {{ custom_color }} !important;

                    }
                    .alternative-font {

                        color: {{ custom_color }};

                    }
                    html .blockquote-primary {

                        border-color: {{ custom_color }} !important;

                    }
                    p.drop-caps:first-letter {

                        color: {{ custom_color }};

                    }



                    p.drop-caps.drop-caps-style-2:first-letter {

                        background-color: {{ custom_color }};

                    }



                    ul.nav-pills > li.active > a {

                        background-color: {{ custom_color }};

                    }



                    ul.nav-pills > li.active > a:hover,

                    ul.nav-pills > li.active > a:focus {

                        background-color: {{ custom_color }};

                    }



                    html ul.nav-pills-primary a {

                        color: {{ custom_color }};

                    }



                    html ul.nav-pills-primary a:hover {

                        color: {{ custom_color }};

                    }



                    html ul.nav-pills-primary a:focus {

                        color: {{ custom_color }};

                    }



                    html ul.nav-pills-primary a:active {

                        color: {{ custom_color }};

                    }



                    html ul.nav-pills-primary > li.active > a {

                        background-color: {{ custom_color }};

                    }



                    html ul.nav-pills-primary > li.active > a:hover,

                    html ul.nav-pills-primary > li.active > a:focus {

                        background-color: {{ custom_color }};

                    }
                    .sort-source-wrapper .nav > li.active > a {

                        color: {{ custom_color }};

                    }



                    .sort-source-wrapper .nav > li.active > a:hover,

                    .sort-source-wrapper .nav > li.active > a:focus {

                        color: {{ custom_color }};

                    }



                    .sort-source.sort-source-style-2 > li.active > a:after {

                        border-top-color: {{ custom_color }};

                    }



                    html .label-primary {

                        background-color: {{ custom_color }};

                    }
                    .btn-link {

                        color: {{ custom_color }};

                    }



                    .btn-link:hover {

                        color: {{ custom_color }};

                    }



                    .btn-link:active {

                        color: {{ custom_color }};

                    }



                    html .btn-primary {

                        color: #ffffff;

                        background-color: {{ custom_color }};

                        border-color: {{ custom_color }} {{ custom_color }} {{ custom_color }};

                    }



                    html .btn-primary:hover {

                        border-color: {{ custom_color }} {{ custom_color }} {{ custom_color }};

                        background-color: {{ custom_color }};

                    }



                    html .btn-primary:active,

                    html .btn-primary:focus,

                    html .btn-primary:active:hover,

                    html .btn-primary:active:focus {

                        border-color: {{ custom_color }} {{ custom_color }} {{ custom_color }};

                        background-color: {{ custom_color }};

                    }



                    html .btn-primary.dropdown-toggle {

                        border-left-color: {{ custom_color }};

                    }
                    html .btn-primary-scale-2 {

                        color: #ffffff;

                        background-color: {{ custom_color }};

                        border-color: {{ custom_color }} {{ custom_color }} #8a5e13;

                    }



                    html .btn-primary-scale-2:hover {

                        border-color: {{ custom_color }} {{ custom_color }} {{ custom_color }};

                        background-color: {{ custom_color }};

                    }



                    html .btn-primary-scale-2:active,

                    html .btn-primary-scale-2:focus,

                    html .btn-primary-scale-2:active:hover,

                    html .btn-primary-scale-2:active:focus {

                        border-color: {{ custom_color }} {{ custom_color }} {{ custom_color }};

                        background-color: {{ custom_color }};

                    }



                    html .btn-primary-scale-2.dropdown-toggle {

                        border-left-color: {{ custom_color }};

                    }
                    html .btn-borders.btn-primary {

                        background: transparent;

                        border-color: {{ custom_color }};

                        color: {{ custom_color }};

                        text-shadow: none;

                    }



                    html .btn-borders.btn-primary:hover,

                    html .btn-borders.btn-primary:focus {

                        background-color: {{ custom_color }};

                        border-color: {{ custom_color }} {{ custom_color }} {{ custom_color }};

                        border-color: {{ custom_color }} !important;

                        color: #ffffff;

                    }



                    html .btn-borders.btn-primary:hover:hover,

                    html .btn-borders.btn-primary:focus:hover {

                        border-color: {{ custom_color }} {{ custom_color }} {{ custom_color }};

                        background-color: {{ custom_color }};

                    }



                    html .btn-borders.btn-primary:hover:active,

                    html .btn-borders.btn-primary:focus:active,

                    html .btn-borders.btn-primary:hover:focus,

                    html .btn-borders.btn-primary:focus:focus,

                    html .btn-borders.btn-primary:hover:active:hover,

                    html .btn-borders.btn-primary:focus:active:hover,

                    html .btn-borders.btn-primary:hover:active:focus,

                    html .btn-borders.btn-primary:focus:active:focus {

                        border-color: {{ custom_color }} {{ custom_color }} {{ custom_color }};

                        background-color: {{ custom_color }};

                    }



                    html .btn-borders.btn-primary:hover.dropdown-toggle,

                    html .btn-borders.btn-primary:focus.dropdown-toggle {

                        border-left-color: {{ custom_color }};

                    }
                    .pagination > li > a,

                    .pagination > li > span,

                    .pagination > li > a:hover,

                    .pagination > li > span:hover,

                    .pagination > li > a:focus,

                    .pagination > li > span:focus {

                        color: {{ custom_color }};

                    }



                    .pagination > .active > a,

                    .pagination > .active > span,

                    .pagination > .active > a:hover,

                    .pagination > .active > span:hover,

                    .pagination > .active > a:focus,

                    .pagination > .active > span:focus {

                        background-color: {{ custom_color }} !important;

                        border-color: {{ custom_color }};

                    }



                    body.dark .pagination > li > a,

                    body.dark .pagination > li > span,

                    body.dark .pagination > li > a:hover,

                    body.dark .pagination > li > span:hover,

                    body.dark .pagination > li > a:focus,

                    body.dark .pagination > li > span:focus {

                        color: {{ custom_color }};

                    }



                    body.dark .pagination > .active > a,

                    body.dark .pagination > .active > span,

                    body.dark .pagination > .active > a:hover,

                    body.dark .pagination > .active > span:hover,

                    body.dark .pagination > .active > a:focus,

                    body.dark .pagination > .active > span:focus {

                        background-color: {{ custom_color }};

                        border-color: {{ custom_color }};

                    }



                    .pagination > .active > a,

                    body.dark .pagination > .active > a {

                        color: #ffffff;

                        background-color: {{ custom_color }};

                        border-color: {{ custom_color }} {{ custom_color }} {{ custom_color }};

                    }



                    .pagination > .active > a:hover,

                    body.dark .pagination > .active > a:hover {

                        border-color: {{ custom_color }} {{ custom_color }} {{ custom_color }};

                        background-color: {{ custom_color }};

                    }



                    .pagination > .active > a:active,

                    body.dark .pagination > .active > a:active,

                    .pagination > .active > a:focus,

                    body.dark .pagination > .active > a:focus,

                    .pagination > .active > a:active:hover,

                    body.dark .pagination > .active > a:active:hover,

                    .pagination > .active > a:active:focus,

                    body.dark .pagination > .active > a:active:focus {

                        border-color: {{ custom_color }} {{ custom_color }} {{ custom_color }};

                        background-color: {{ custom_color }};

                    }



                    .pagination > .active > a.dropdown-toggle,

                    body.dark .pagination > .active > a.dropdown-toggle {

                        border-left-color: {{ custom_color }};

                    }
                    html .alert-primary {

                        background-color: {{ custom_color }};

                        border-color: {{ custom_color }};

                        color: #ffffff;

                    }
                    html .progress-bar-primary {

                        background-color: {{ custom_color }};

                    }
                    html section.section-primary {

                        background-color: {{ custom_color }} !important;

                        border-color: {{ custom_color }} !important;

                    }
                    html section.section-primary-scale-2 {

                        background-color: {{ custom_color }} !important;

                        border-color: {{ custom_color }} !important;

                    }
                    html section.section-primary-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {

                        border-top-color: {{ custom_color }};

                    }

                    .thumb-info-ribbon {

                        background: {{ custom_color }};

                    }



                    .thumb-info-ribbon:before {

                        border-right-color: {{ custom_color }};

                        border-left-color: {{ custom_color }};

                    }



                    .inverted {

                        background-color: {{ custom_color }};

                    }



                    html .inverted-primary {

                        background-color: {{ custom_color }};

                    }



                    html .inverted-secondary {

                        background-color: #344257;

                    }



                    html .inverted-tertiary {

                        background-color: #d1e7e7;

                    }



                    html .inverted-quaternary {

                        background-color: #edeada;

                    }



                    html .inverted-dark {

                        background-color: #2e353e;

                    }



                    html .inverted-light {

                        background-color: #ffffff;

                    }



                    .owl-carousel .owl-dots .owl-dot.active span,

                    .owl-carousel .owl-dots .owl-dot:hover span {

                        background-color: #c8891c;

                    }



                    .owl-carousel.show-nav-title .owl-nav [class*=\"owl-\"] {

                        color: {{ custom_color }};

                    }



                    .owl-carousel .owl-nav [class*=\"owl-\"] {

                        color: #ffffff;

                        background-color: {{ custom_color }};

                        border-color: {{ custom_color }} {{ custom_color }} {{ custom_color }};

                    }



                    .owl-carousel .owl-nav [class*=\"owl-\"]:hover {

                        border-color: {{ custom_color }} {{ custom_color }} {{ custom_color }};

                        background-color: {{ custom_color }};

                    }



                    .owl-carousel .owl-nav [class*=\"owl-\"]:active,

                    .owl-carousel .owl-nav [class*=\"owl-\"]:focus,

                    .owl-carousel .owl-nav [class*=\"owl-\"]:active:hover,

                    .owl-carousel .owl-nav [class*=\"owl-\"]:active:focus {

                        border-color: {{ custom_color }} {{ custom_color }} {{ custom_color }};

                        background-color: {{ custom_color }};

                    }



                    .owl-carousel .owl-nav [class*=\"owl-\"].dropdown-toggle {

                        border-left-color: {{ custom_color }};

                    }



                    .owl-carousel .owl-nav [class*=\"owl-\"][disabled],

                    .owl-carousel .owl-nav [class*=\"owl-\"][disabled]:hover,

                    .owl-carousel .owl-nav [class*=\"owl-\"][disabled]:active,

                    .owl-carousel .owl-nav [class*=\"owl-\"][disabled]:focus {

                        border-color: #edc47c;

                        background-color: #edc47c;

                    }



                    html body .tabs .nav-tabs a,

                    html.dark body .tabs .nav-tabs a,

                    html body .tabs .nav-tabs a:hover,

                    html.dark body .tabs .nav-tabs a:hover {

                        color: {{ custom_color }};

                    }



                    html body .tabs .nav-tabs a:hover,

                    html.dark body .tabs .nav-tabs a:hover,

                    html body .tabs .nav-tabs a:focus,

                    html.dark body .tabs .nav-tabs a:focus {

                        border-top-color: {{ custom_color }};

                    }



                    html body .tabs .nav-tabs li.active a,

                    html.dark body .tabs .nav-tabs li.active a {

                        border-top-color: {{ custom_color }};

                        color: {{ custom_color }};

                    }



                    html body .tabs .nav-tabs.nav-justified a:hover,

                    html.dark body .tabs .nav-tabs.nav-justified a:hover,

                    html body .tabs .nav-tabs.nav-justified a:focus,

                    html.dark body .tabs .nav-tabs.nav-justified a:focus {

                        border-top-color: {{ custom_color }};

                    }



                    html body .tabs.tabs-bottom .nav-tabs li a:hover,

                    html.dark body .tabs.tabs-bottom .nav-tabs li a:hover,

                    html body .tabs.tabs-bottom .nav-tabs li.active a,

                    html.dark body .tabs.tabs-bottom .nav-tabs li.active a,

                    html body .tabs.tabs-bottom .nav-tabs li.active a:hover,

                    html.dark body .tabs.tabs-bottom .nav-tabs li.active a:hover,

                    html body .tabs.tabs-bottom .nav-tabs li.active a:focus,

                    html.dark body .tabs.tabs-bottom .nav-tabs li.active a:focus {

                        border-bottom-color: {{ custom_color }};

                    }



                    html body .tabs.tabs-vertical.tabs-left .nav-tabs li a:hover,

                    html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li a:hover,

                    html body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a,

                    html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a,

                    html body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:hover,

                    html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:hover,

                    html body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:focus,

                    html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:focus {

                        border-left-color: {{ custom_color }};

                    }



                    html body .tabs.tabs-vertical.tabs-right .nav-tabs li a:hover,

                    html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li a:hover,

                    html body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a,

                    html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a,

                    html body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:hover,

                    html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:hover,

                    html body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:focus,

                    html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:focus {

                        border-right-color: {{ custom_color }};

                    }



                    html body .tabs.tabs-simple .nav-tabs > li.active a,

                    html.dark body .tabs.tabs-simple .nav-tabs > li.active a,

                    html body .tabs.tabs-simple .nav-tabs > li.active a:focus,

                    html.dark body .tabs.tabs-simple .nav-tabs > li.active a:focus,

                    html body .tabs.tabs-simple .nav-tabs > li a:hover,

                    html.dark body .tabs.tabs-simple .nav-tabs > li a:hover,

                    html body .tabs.tabs-simple .nav-tabs > li.active a:hover,

                    html.dark body .tabs.tabs-simple .nav-tabs > li.active a:hover {

                        border-top-color: {{ custom_color }};

                        color: {{ custom_color }};

                    }



                    html body .tabs-primary .nav-tabs li a,

                    html.dark body .tabs-primary .nav-tabs li a,

                    html body .tabs-primary .nav-tabs.nav-justified li a,

                    html.dark body .tabs-primary .nav-tabs.nav-justified li a,

                    html body .tabs-primary .nav-tabs li a:hover,

                    html.dark body .tabs-primary .nav-tabs li a:hover,

                    html body .tabs-primary .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-primary .nav-tabs.nav-justified li a:hover {

                        color: {{ custom_color }};

                    }



                    html body .tabs-primary .nav-tabs li a:hover,

                    html.dark body .tabs-primary .nav-tabs li a:hover,

                    html body .tabs-primary .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-primary .nav-tabs.nav-justified li a:hover {

                        border-top-color: {{ custom_color }};

                    }



                    html body .tabs-primary .nav-tabs li.active a,

                    html.dark body .tabs-primary .nav-tabs li.active a,

                    html body .tabs-primary .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-primary .nav-tabs.nav-justified li.active a,

                    html body .tabs-primary .nav-tabs li.active a:hover,

                    html.dark body .tabs-primary .nav-tabs li.active a:hover,

                    html body .tabs-primary .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-primary .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-primary .nav-tabs li.active a:focus,

                    html.dark body .tabs-primary .nav-tabs li.active a:focus,

                    html body .tabs-primary .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-primary .nav-tabs.nav-justified li.active a:focus {

                        border-top-color: {{ custom_color }};

                        color: {{ custom_color }};

                    }



                    html body .tabs-primary.tabs-bottom .nav-tabs li a:hover,

                    html.dark body .tabs-primary.tabs-bottom .nav-tabs li a:hover,

                    html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li a:hover {

                        border-bottom-color: {{ custom_color }};

                    }



                    html body .tabs-primary.tabs-bottom .nav-tabs li.active a,

                    html.dark body .tabs-primary.tabs-bottom .nav-tabs li.active a,

                    html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html body .tabs-primary.tabs-bottom .nav-tabs li.active a:hover,

                    html.dark body .tabs-primary.tabs-bottom .nav-tabs li.active a:hover,

                    html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-primary.tabs-bottom .nav-tabs li.active a:focus,

                    html.dark body .tabs-primary.tabs-bottom .nav-tabs li.active a:focus,

                    html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {

                        border-bottom-color: {{ custom_color }};

                    }



                    html body .tabs-primary.tabs-vertical.tabs-left li a:hover,

                    html.dark body .tabs-primary.tabs-vertical.tabs-left li a:hover {

                        border-left-color: {{ custom_color }};

                    }



                    html body .tabs-primary.tabs-vertical.tabs-left li.active a,

                    html.dark body .tabs-primary.tabs-vertical.tabs-left li.active a,

                    html body .tabs-primary.tabs-vertical.tabs-left li.active a:hover,

                    html.dark body .tabs-primary.tabs-vertical.tabs-left li.active a:hover,

                    html body .tabs-primary.tabs-vertical.tabs-left li.active a:focus,

                    html.dark body .tabs-primary.tabs-vertical.tabs-left li.active a:focus {

                        border-left-color: {{ custom_color }};

                    }



                    html body .tabs-primary.tabs-vertical.tabs-right li a:hover,

                    html.dark body .tabs-primary.tabs-vertical.tabs-right li a:hover {

                        border-right-color: {{ custom_color }};

                    }



                    html body .tabs-primary.tabs-vertical.tabs-right li.active a,

                    html.dark body .tabs-primary.tabs-vertical.tabs-right li.active a,

                    html body .tabs-primary.tabs-vertical.tabs-right li.active a:hover,

                    html.dark body .tabs-primary.tabs-vertical.tabs-right li.active a:hover,

                    html body .tabs-primary.tabs-vertical.tabs-right li.active a:focus,

                    html.dark body .tabs-primary.tabs-vertical.tabs-right li.active a:focus {

                        border-right-color: {{ custom_color }};

                    }



                    html body .tabs-secondary .nav-tabs li a,

                    html.dark body .tabs-secondary .nav-tabs li a,

                    html body .tabs-secondary .nav-tabs.nav-justified li a,

                    html.dark body .tabs-secondary .nav-tabs.nav-justified li a,

                    html body .tabs-secondary .nav-tabs li a:hover,

                    html.dark body .tabs-secondary .nav-tabs li a:hover,

                    html body .tabs-secondary .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-secondary .nav-tabs.nav-justified li a:hover {

                        color: #344257;

                    }



                    html body .tabs-secondary .nav-tabs li a:hover,

                    html.dark body .tabs-secondary .nav-tabs li a:hover,

                    html body .tabs-secondary .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-secondary .nav-tabs.nav-justified li a:hover {

                        border-top-color: #344257;

                    }



                    html body .tabs-secondary .nav-tabs li.active a,

                    html.dark body .tabs-secondary .nav-tabs li.active a,

                    html body .tabs-secondary .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-secondary .nav-tabs.nav-justified li.active a,

                    html body .tabs-secondary .nav-tabs li.active a:hover,

                    html.dark body .tabs-secondary .nav-tabs li.active a:hover,

                    html body .tabs-secondary .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-secondary .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-secondary .nav-tabs li.active a:focus,

                    html.dark body .tabs-secondary .nav-tabs li.active a:focus,

                    html body .tabs-secondary .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-secondary .nav-tabs.nav-justified li.active a:focus {

                        border-top-color: #344257;

                        color: #344257;

                    }



                    html body .tabs-secondary.tabs-bottom .nav-tabs li a:hover,

                    html.dark body .tabs-secondary.tabs-bottom .nav-tabs li a:hover,

                    html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li a:hover {

                        border-bottom-color: #344257;

                    }



                    html body .tabs-secondary.tabs-bottom .nav-tabs li.active a,

                    html.dark body .tabs-secondary.tabs-bottom .nav-tabs li.active a,

                    html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html body .tabs-secondary.tabs-bottom .nav-tabs li.active a:hover,

                    html.dark body .tabs-secondary.tabs-bottom .nav-tabs li.active a:hover,

                    html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-secondary.tabs-bottom .nav-tabs li.active a:focus,

                    html.dark body .tabs-secondary.tabs-bottom .nav-tabs li.active a:focus,

                    html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {

                        border-bottom-color: #344257;

                    }



                    html body .tabs-secondary.tabs-vertical.tabs-left li a:hover,

                    html.dark body .tabs-secondary.tabs-vertical.tabs-left li a:hover {

                        border-left-color: #344257;

                    }



                    html body .tabs-secondary.tabs-vertical.tabs-left li.active a,

                    html.dark body .tabs-secondary.tabs-vertical.tabs-left li.active a,

                    html body .tabs-secondary.tabs-vertical.tabs-left li.active a:hover,

                    html.dark body .tabs-secondary.tabs-vertical.tabs-left li.active a:hover,

                    html body .tabs-secondary.tabs-vertical.tabs-left li.active a:focus,

                    html.dark body .tabs-secondary.tabs-vertical.tabs-left li.active a:focus {

                        border-left-color: #344257;

                    }



                    html body .tabs-secondary.tabs-vertical.tabs-right li a:hover,

                    html.dark body .tabs-secondary.tabs-vertical.tabs-right li a:hover {

                        border-right-color: #344257;

                    }



                    html body .tabs-secondary.tabs-vertical.tabs-right li.active a,

                    html.dark body .tabs-secondary.tabs-vertical.tabs-right li.active a,

                    html body .tabs-secondary.tabs-vertical.tabs-right li.active a:hover,

                    html.dark body .tabs-secondary.tabs-vertical.tabs-right li.active a:hover,

                    html body .tabs-secondary.tabs-vertical.tabs-right li.active a:focus,

                    html.dark body .tabs-secondary.tabs-vertical.tabs-right li.active a:focus {

                        border-right-color: #344257;

                    }



                    html body .tabs-tertiary .nav-tabs li a,

                    html.dark body .tabs-tertiary .nav-tabs li a,

                    html body .tabs-tertiary .nav-tabs.nav-justified li a,

                    html.dark body .tabs-tertiary .nav-tabs.nav-justified li a,

                    html body .tabs-tertiary .nav-tabs li a:hover,

                    html.dark body .tabs-tertiary .nav-tabs li a:hover,

                    html body .tabs-tertiary .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-tertiary .nav-tabs.nav-justified li a:hover {

                        color: #d1e7e7;

                    }



                    html body .tabs-tertiary .nav-tabs li a:hover,

                    html.dark body .tabs-tertiary .nav-tabs li a:hover,

                    html body .tabs-tertiary .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-tertiary .nav-tabs.nav-justified li a:hover {

                        border-top-color: #d1e7e7;

                    }



                    html body .tabs-tertiary .nav-tabs li.active a,

                    html.dark body .tabs-tertiary .nav-tabs li.active a,

                    html body .tabs-tertiary .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-tertiary .nav-tabs.nav-justified li.active a,

                    html body .tabs-tertiary .nav-tabs li.active a:hover,

                    html.dark body .tabs-tertiary .nav-tabs li.active a:hover,

                    html body .tabs-tertiary .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-tertiary .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-tertiary .nav-tabs li.active a:focus,

                    html.dark body .tabs-tertiary .nav-tabs li.active a:focus,

                    html body .tabs-tertiary .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-tertiary .nav-tabs.nav-justified li.active a:focus {

                        border-top-color: #d1e7e7;

                        color: #d1e7e7;

                    }



                    html body .tabs-tertiary.tabs-bottom .nav-tabs li a:hover,

                    html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li a:hover,

                    html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li a:hover {

                        border-bottom-color: #d1e7e7;

                    }



                    html body .tabs-tertiary.tabs-bottom .nav-tabs li.active a,

                    html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li.active a,

                    html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:hover,

                    html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:hover,

                    html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:focus,

                    html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:focus,

                    html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {

                        border-bottom-color: #d1e7e7;

                    }



                    html body .tabs-tertiary.tabs-vertical.tabs-left li a:hover,

                    html.dark body .tabs-tertiary.tabs-vertical.tabs-left li a:hover {

                        border-left-color: #d1e7e7;

                    }



                    html body .tabs-tertiary.tabs-vertical.tabs-left li.active a,

                    html.dark body .tabs-tertiary.tabs-vertical.tabs-left li.active a,

                    html body .tabs-tertiary.tabs-vertical.tabs-left li.active a:hover,

                    html.dark body .tabs-tertiary.tabs-vertical.tabs-left li.active a:hover,

                    html body .tabs-tertiary.tabs-vertical.tabs-left li.active a:focus,

                    html.dark body .tabs-tertiary.tabs-vertical.tabs-left li.active a:focus {

                        border-left-color: #d1e7e7;

                    }



                    html body .tabs-tertiary.tabs-vertical.tabs-right li a:hover,

                    html.dark body .tabs-tertiary.tabs-vertical.tabs-right li a:hover {

                        border-right-color: #d1e7e7;

                    }



                    html body .tabs-tertiary.tabs-vertical.tabs-right li.active a,

                    html.dark body .tabs-tertiary.tabs-vertical.tabs-right li.active a,

                    html body .tabs-tertiary.tabs-vertical.tabs-right li.active a:hover,

                    html.dark body .tabs-tertiary.tabs-vertical.tabs-right li.active a:hover,

                    html body .tabs-tertiary.tabs-vertical.tabs-right li.active a:focus,

                    html.dark body .tabs-tertiary.tabs-vertical.tabs-right li.active a:focus {

                        border-right-color: #d1e7e7;

                    }



                    html body .tabs-quaternary .nav-tabs li a,

                    html.dark body .tabs-quaternary .nav-tabs li a,

                    html body .tabs-quaternary .nav-tabs.nav-justified li a,

                    html.dark body .tabs-quaternary .nav-tabs.nav-justified li a,

                    html body .tabs-quaternary .nav-tabs li a:hover,

                    html.dark body .tabs-quaternary .nav-tabs li a:hover,

                    html body .tabs-quaternary .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-quaternary .nav-tabs.nav-justified li a:hover {

                        color: #edeada;

                    }



                    html body .tabs-quaternary .nav-tabs li a:hover,

                    html.dark body .tabs-quaternary .nav-tabs li a:hover,

                    html body .tabs-quaternary .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-quaternary .nav-tabs.nav-justified li a:hover {

                        border-top-color: #edeada;

                    }



                    html body .tabs-quaternary .nav-tabs li.active a,

                    html.dark body .tabs-quaternary .nav-tabs li.active a,

                    html body .tabs-quaternary .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-quaternary .nav-tabs.nav-justified li.active a,

                    html body .tabs-quaternary .nav-tabs li.active a:hover,

                    html.dark body .tabs-quaternary .nav-tabs li.active a:hover,

                    html body .tabs-quaternary .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-quaternary .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-quaternary .nav-tabs li.active a:focus,

                    html.dark body .tabs-quaternary .nav-tabs li.active a:focus,

                    html body .tabs-quaternary .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-quaternary .nav-tabs.nav-justified li.active a:focus {

                        border-top-color: #edeada;

                        color: #edeada;

                    }



                    html body .tabs-quaternary.tabs-bottom .nav-tabs li a:hover,

                    html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li a:hover,

                    html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li a:hover {

                        border-bottom-color: #edeada;

                    }



                    html body .tabs-quaternary.tabs-bottom .nav-tabs li.active a,

                    html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li.active a,

                    html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:hover,

                    html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:hover,

                    html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:focus,

                    html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:focus,

                    html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {

                        border-bottom-color: #edeada;

                    }



                    html body .tabs-quaternary.tabs-vertical.tabs-left li a:hover,

                    html.dark body .tabs-quaternary.tabs-vertical.tabs-left li a:hover {

                        border-left-color: #edeada;

                    }



                    html body .tabs-quaternary.tabs-vertical.tabs-left li.active a,

                    html.dark body .tabs-quaternary.tabs-vertical.tabs-left li.active a,

                    html body .tabs-quaternary.tabs-vertical.tabs-left li.active a:hover,

                    html.dark body .tabs-quaternary.tabs-vertical.tabs-left li.active a:hover,

                    html body .tabs-quaternary.tabs-vertical.tabs-left li.active a:focus,

                    html.dark body .tabs-quaternary.tabs-vertical.tabs-left li.active a:focus {

                        border-left-color: #edeada;

                    }



                    html body .tabs-quaternary.tabs-vertical.tabs-right li a:hover,

                    html.dark body .tabs-quaternary.tabs-vertical.tabs-right li a:hover {

                        border-right-color: #edeada;

                    }



                    html body .tabs-quaternary.tabs-vertical.tabs-right li.active a,

                    html.dark body .tabs-quaternary.tabs-vertical.tabs-right li.active a,

                    html body .tabs-quaternary.tabs-vertical.tabs-right li.active a:hover,

                    html.dark body .tabs-quaternary.tabs-vertical.tabs-right li.active a:hover,

                    html body .tabs-quaternary.tabs-vertical.tabs-right li.active a:focus,

                    html.dark body .tabs-quaternary.tabs-vertical.tabs-right li.active a:focus {

                        border-right-color: #edeada;

                    }



                    html body .tabs-dark .nav-tabs li a,

                    html.dark body .tabs-dark .nav-tabs li a,

                    html body .tabs-dark .nav-tabs.nav-justified li a,

                    html.dark body .tabs-dark .nav-tabs.nav-justified li a,

                    html body .tabs-dark .nav-tabs li a:hover,

                    html.dark body .tabs-dark .nav-tabs li a:hover,

                    html body .tabs-dark .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-dark .nav-tabs.nav-justified li a:hover {

                        color: #2e353e;

                    }



                    html body .tabs-dark .nav-tabs li a:hover,

                    html.dark body .tabs-dark .nav-tabs li a:hover,

                    html body .tabs-dark .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-dark .nav-tabs.nav-justified li a:hover {

                        border-top-color: #2e353e;

                    }



                    html body .tabs-dark .nav-tabs li.active a,

                    html.dark body .tabs-dark .nav-tabs li.active a,

                    html body .tabs-dark .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-dark .nav-tabs.nav-justified li.active a,

                    html body .tabs-dark .nav-tabs li.active a:hover,

                    html.dark body .tabs-dark .nav-tabs li.active a:hover,

                    html body .tabs-dark .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-dark .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-dark .nav-tabs li.active a:focus,

                    html.dark body .tabs-dark .nav-tabs li.active a:focus,

                    html body .tabs-dark .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-dark .nav-tabs.nav-justified li.active a:focus {

                        border-top-color: #2e353e;

                        color: #2e353e;

                    }



                    html body .tabs-dark.tabs-bottom .nav-tabs li a:hover,

                    html.dark body .tabs-dark.tabs-bottom .nav-tabs li a:hover,

                    html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li a:hover {

                        border-bottom-color: #2e353e;

                    }



                    html body .tabs-dark.tabs-bottom .nav-tabs li.active a,

                    html.dark body .tabs-dark.tabs-bottom .nav-tabs li.active a,

                    html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html body .tabs-dark.tabs-bottom .nav-tabs li.active a:hover,

                    html.dark body .tabs-dark.tabs-bottom .nav-tabs li.active a:hover,

                    html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-dark.tabs-bottom .nav-tabs li.active a:focus,

                    html.dark body .tabs-dark.tabs-bottom .nav-tabs li.active a:focus,

                    html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:focus {

                        border-bottom-color: #2e353e;

                    }



                    html body .tabs-dark.tabs-vertical.tabs-left li a:hover,

                    html.dark body .tabs-dark.tabs-vertical.tabs-left li a:hover {

                        border-left-color: #2e353e;

                    }



                    html body .tabs-dark.tabs-vertical.tabs-left li.active a,

                    html.dark body .tabs-dark.tabs-vertical.tabs-left li.active a,

                    html body .tabs-dark.tabs-vertical.tabs-left li.active a:hover,

                    html.dark body .tabs-dark.tabs-vertical.tabs-left li.active a:hover,

                    html body .tabs-dark.tabs-vertical.tabs-left li.active a:focus,

                    html.dark body .tabs-dark.tabs-vertical.tabs-left li.active a:focus {

                        border-left-color: #2e353e;

                    }



                    html body .tabs-dark.tabs-vertical.tabs-right li a:hover,

                    html.dark body .tabs-dark.tabs-vertical.tabs-right li a:hover {

                        border-right-color: #2e353e;

                    }



                    html body .tabs-dark.tabs-vertical.tabs-right li.active a,

                    html.dark body .tabs-dark.tabs-vertical.tabs-right li.active a,

                    html body .tabs-dark.tabs-vertical.tabs-right li.active a:hover,

                    html.dark body .tabs-dark.tabs-vertical.tabs-right li.active a:hover,

                    html body .tabs-dark.tabs-vertical.tabs-right li.active a:focus,

                    html.dark body .tabs-dark.tabs-vertical.tabs-right li.active a:focus {

                        border-right-color: #2e353e;

                    }



                    html body .tabs-light .nav-tabs li a,

                    html.dark body .tabs-light .nav-tabs li a,

                    html body .tabs-light .nav-tabs.nav-justified li a,

                    html.dark body .tabs-light .nav-tabs.nav-justified li a,

                    html body .tabs-light .nav-tabs li a:hover,

                    html.dark body .tabs-light .nav-tabs li a:hover,

                    html body .tabs-light .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-light .nav-tabs.nav-justified li a:hover {

                        color: #ffffff;

                    }



                    html body .tabs-light .nav-tabs li a:hover,

                    html.dark body .tabs-light .nav-tabs li a:hover,

                    html body .tabs-light .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-light .nav-tabs.nav-justified li a:hover {

                        border-top-color: #ffffff;

                    }



                    html body .tabs-light .nav-tabs li.active a,

                    html.dark body .tabs-light .nav-tabs li.active a,

                    html body .tabs-light .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-light .nav-tabs.nav-justified li.active a,

                    html body .tabs-light .nav-tabs li.active a:hover,

                    html.dark body .tabs-light .nav-tabs li.active a:hover,

                    html body .tabs-light .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-light .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-light .nav-tabs li.active a:focus,

                    html.dark body .tabs-light .nav-tabs li.active a:focus,

                    html body .tabs-light .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-light .nav-tabs.nav-justified li.active a:focus {

                        border-top-color: #ffffff;

                        color: #ffffff;

                    }



                    html body .tabs-light.tabs-bottom .nav-tabs li a:hover,

                    html.dark body .tabs-light.tabs-bottom .nav-tabs li a:hover,

                    html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li a:hover,

                    html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li a:hover {

                        border-bottom-color: #ffffff;

                    }



                    html body .tabs-light.tabs-bottom .nav-tabs li.active a,

                    html.dark body .tabs-light.tabs-bottom .nav-tabs li.active a,

                    html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a,

                    html body .tabs-light.tabs-bottom .nav-tabs li.active a:hover,

                    html.dark body .tabs-light.tabs-bottom .nav-tabs li.active a:hover,

                    html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:hover,

                    html body .tabs-light.tabs-bottom .nav-tabs li.active a:focus,

                    html.dark body .tabs-light.tabs-bottom .nav-tabs li.active a:focus,

                    html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:focus,

                    html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:focus {

                        border-bottom-color: #ffffff;

                    }



                    html body .tabs-light.tabs-vertical.tabs-left li a:hover,

                    html.dark body .tabs-light.tabs-vertical.tabs-left li a:hover {

                        border-left-color: #ffffff;

                    }



                    html body .tabs-light.tabs-vertical.tabs-left li.active a,

                    html.dark body .tabs-light.tabs-vertical.tabs-left li.active a,

                    html body .tabs-light.tabs-vertical.tabs-left li.active a:hover,

                    html.dark body .tabs-light.tabs-vertical.tabs-left li.active a:hover,

                    html body .tabs-light.tabs-vertical.tabs-left li.active a:focus,

                    html.dark body .tabs-light.tabs-vertical.tabs-left li.active a:focus {

                        border-left-color: #ffffff;

                    }



                    html body .tabs-light.tabs-vertical.tabs-right li a:hover,

                    html.dark body .tabs-light.tabs-vertical.tabs-right li a:hover {

                        border-right-color: #ffffff;

                    }



                    html body .tabs-light.tabs-vertical.tabs-right li.active a,

                    html.dark body .tabs-light.tabs-vertical.tabs-right li.active a,

                    html body .tabs-light.tabs-vertical.tabs-right li.active a:hover,

                    html.dark body .tabs-light.tabs-vertical.tabs-right li.active a:hover,

                    html body .tabs-light.tabs-vertical.tabs-right li.active a:focus,

                    html.dark body .tabs-light.tabs-vertical.tabs-right li.active a:focus {

                        border-right-color: #ffffff;

                    }



                    html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-left .nav-tabs li a:hover,

                    html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-left .nav-tabs li.active a,

                    html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:hover,

                    html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:focus {

                        border-right-color: {{ custom_color }};

                        border-left-color: transparent;

                    }



                    html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-right .nav-tabs li a:hover,

                    html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-right .nav-tabs li.active a,

                    html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:hover,

                    html[dir=\"rtl\"] .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:focus {

                        border-right-color: transparent;

                        border-left-color: {{ custom_color }};

                    }



                    .list.list-icons li > .fa:first-child,

                    .list.list-icons li a:first-child > .fa:first-child,

                    .list.list-icons li > .icons:first-child,

                    .list.list-icons li a:first-child > .icons:first-child {

                        color: {{ custom_color }};

                        border-color: {{ custom_color }};

                    }



                    .list.list-icons.list-icons-style-3 li > .fa:first-child,

                    .list.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,

                    .list.list-icons.list-icons-style-3 li > .icons:first-child,

                    .list.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {

                        background-color: {{ custom_color }};

                    }



                    .list.list-ordened li:before {

                        color: {{ custom_color }};

                        border-color: {{ custom_color }};

                    }



                    .list.list-ordened.list-ordened-style-3 li:before {

                        background-color: {{ custom_color }};

                    }



                    html .list-primary.list-icons li > .fa:first-child,

                    html .list-primary.list-icons li a:first-child > .fa:first-child,

                    html .list-primary.list-icons li > .icons:first-child,

                    html .list-primary.list-icons li a:first-child > .icons:first-child {

                        color: {{ custom_color }};

                        border-color: {{ custom_color }};

                    }



                    html .list-primary.list-icons.list-icons-style-3 li > .fa:first-child,

                    html .list-primary.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,

                    html .list-primary.list-icons.list-icons-style-3 li > .icons:first-child,

                    html .list-primary.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {

                        background-color: {{ custom_color }};

                        color: #ffffff;

                    }



                    html .list-primary.list-ordened li:before {

                        color: {{ custom_color }};

                    }



                    html .list-primary.list-ordened.list-ordened-style-3 li:before {

                        background-color: {{ custom_color }};

                        color: #ffffff;

                    }



                    html .list-secondary.list-icons li > .fa:first-child,

                    html .list-secondary.list-icons li a:first-child > .fa:first-child,

                    html .list-secondary.list-icons li > .icons:first-child,

                    html .list-secondary.list-icons li a:first-child > .icons:first-child {

                        color: #344257;

                        border-color: #344257;

                    }



                    html .list-secondary.list-icons.list-icons-style-3 li > .fa:first-child,

                    html .list-secondary.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,

                    html .list-secondary.list-icons.list-icons-style-3 li > .icons:first-child,

                    html .list-secondary.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {

                        background-color: #344257;

                        color: #ffffff;

                    }



                    html .list-secondary.list-ordened li:before {

                        color: #344257;

                    }



                    html .list-secondary.list-ordened.list-ordened-style-3 li:before {

                        background-color: #344257;

                        color: #ffffff;

                    }



                    html .list-tertiary.list-icons li > .fa:first-child,

                    html .list-tertiary.list-icons li a:first-child > .fa:first-child,

                    html .list-tertiary.list-icons li > .icons:first-child,

                    html .list-tertiary.list-icons li a:first-child > .icons:first-child {

                        color: #d1e7e7;

                        border-color: #d1e7e7;

                    }



                    html .list-tertiary.list-icons.list-icons-style-3 li > .fa:first-child,

                    html .list-tertiary.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,

                    html .list-tertiary.list-icons.list-icons-style-3 li > .icons:first-child,

                    html .list-tertiary.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {

                        background-color: #d1e7e7;

                        color: #777777;

                    }



                    html .list-tertiary.list-ordened li:before {

                        color: #d1e7e7;

                    }



                    html .list-tertiary.list-ordened.list-ordened-style-3 li:before {

                        background-color: #d1e7e7;

                        color: #777777;

                    }



                    html .list-quaternary.list-icons li > .fa:first-child,

                    html .list-quaternary.list-icons li a:first-child > .fa:first-child,

                    html .list-quaternary.list-icons li > .icons:first-child,

                    html .list-quaternary.list-icons li a:first-child > .icons:first-child {

                        color: #edeada;

                        border-color: #edeada;

                    }



                    html .list-quaternary.list-icons.list-icons-style-3 li > .fa:first-child,

                    html .list-quaternary.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,

                    html .list-quaternary.list-icons.list-icons-style-3 li > .icons:first-child,

                    html .list-quaternary.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {

                        background-color: #edeada;

                        color: #777777;

                    }



                    html .list-quaternary.list-ordened li:before {

                        color: #edeada;

                    }



                    html .list-quaternary.list-ordened.list-ordened-style-3 li:before {

                        background-color: #edeada;

                        color: #777777;

                    }



                    html .list-dark.list-icons li > .fa:first-child,

                    html .list-dark.list-icons li a:first-child > .fa:first-child,

                    html .list-dark.list-icons li > .icons:first-child,

                    html .list-dark.list-icons li a:first-child > .icons:first-child {

                        color: #2e353e;

                        border-color: #2e353e;

                    }



                    html .list-dark.list-icons.list-icons-style-3 li > .fa:first-child,

                    html .list-dark.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,

                    html .list-dark.list-icons.list-icons-style-3 li > .icons:first-child,

                    html .list-dark.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {

                        background-color: #2e353e;

                        color: #ffffff;

                    }



                    html .list-dark.list-ordened li:before {

                        color: #2e353e;

                    }



                    html .list-dark.list-ordened.list-ordened-style-3 li:before {

                        background-color: #2e353e;

                        color: #ffffff;

                    }



                    html .list-light.list-icons li > .fa:first-child,

                    html .list-light.list-icons li a:first-child > .fa:first-child,

                    html .list-light.list-icons li > .icons:first-child,

                    html .list-light.list-icons li a:first-child > .icons:first-child {

                        color: #ffffff;

                        border-color: #ffffff;

                    }



                    html .list-light.list-icons.list-icons-style-3 li > .fa:first-child,

                    html .list-light.list-icons.list-icons-style-3 li a:first-child > .fa:first-child,

                    html .list-light.list-icons.list-icons-style-3 li > .icons:first-child,

                    html .list-light.list-icons.list-icons-style-3 li a:first-child > .icons:first-child {

                        background-color: #ffffff;

                        color: #777777;

                    }



                    html .list-light.list-ordened li:before {

                        color: #ffffff;

                    }



                    html .list-light.list-ordened.list-ordened-style-3 li:before {

                        background-color: #ffffff;

                        color: #777777;

                    }



                    .parallax blockquote i.fa-quote-left {

                        color: {{ custom_color }};

                    }



                    section.video blockquote i.fa-quote-left {

                        color: {{ custom_color }};

                    }



                    .panel-group .panel-heading a {

                        color: {{ custom_color }};

                    }



                    html .panel-group.panel-group-primary .panel-heading {

                        background-color: {{ custom_color }} !important;

                    }



                    html .panel-group.panel-group-primary .panel-heading a {

                        color: #ffffff;

                    }



                    html .panel-group.panel-group-secondary .panel-heading {

                        background-color: #344257 !important;

                    }



                    html .panel-group.panel-group-secondary .panel-heading a {

                        color: #ffffff;

                    }



                    html .panel-group.panel-group-tertiary .panel-heading {

                        background-color: #d1e7e7 !important;

                    }



                    html .panel-group.panel-group-tertiary .panel-heading a {

                        color: #777777;

                    }



                    html .panel-group.panel-group-quaternary .panel-heading {

                        background-color: #edeada !important;

                    }



                    html .panel-group.panel-group-quaternary .panel-heading a {

                        color: #777777;

                    }



                    html .panel-group.panel-group-dark .panel-heading {

                        background-color: #2e353e !important;

                    }



                    html .panel-group.panel-group-dark .panel-heading a {

                        color: #ffffff;

                    }



                    html .panel-group.panel-group-light .panel-heading {

                        background-color: #ffffff !important;

                    }



                    html .panel-group.panel-group-light .panel-heading a {

                        color: #777777;

                    }



                    html .divider.divider-primary .fa,

                    html .divider.divider-primary .icons {

                        color: {{ custom_color }};

                    }



                    html .divider.divider-primary.divider-small hr {

                        background: {{ custom_color }};

                    }



                    html .divider.divider-secondary .fa,

                    html .divider.divider-secondary .icons {

                        color: #344257;

                    }



                    html .divider.divider-secondary.divider-small hr {

                        background: #344257;

                    }



                    html .divider.divider-tertiary .fa,

                    html .divider.divider-tertiary .icons {

                        color: #d1e7e7;

                    }



                    html .divider.divider-tertiary.divider-small hr {

                        background: #d1e7e7;

                    }



                    html .divider.divider-quaternary .fa,

                    html .divider.divider-quaternary .icons {

                        color: #edeada;

                    }



                    html .divider.divider-quaternary.divider-small hr {

                        background: #edeada;

                    }



                    html .divider.divider-dark .fa,

                    html .divider.divider-dark .icons {

                        color: #2e353e;

                    }



                    html .divider.divider-dark.divider-small hr {

                        background: #2e353e;

                    }



                    html .divider.divider-light .fa,

                    html .divider.divider-light .icons {

                        color: #ffffff;

                    }



                    html .divider.divider-light.divider-small hr {

                        background: #ffffff;

                    }



                    html .divider.divider-style-2.divider-primary .fa,

                    html .divider.divider-style-2.divider-primary .icons {

                        background: {{ custom_color }};

                        color: #ffffff;

                    }



                    html .divider.divider-style-2.divider-secondary .fa,

                    html .divider.divider-style-2.divider-secondary .icons {

                        background: #344257;

                        color: #ffffff;

                    }



                    html .divider.divider-style-2.divider-tertiary .fa,

                    html .divider.divider-style-2.divider-tertiary .icons {

                        background: #d1e7e7;

                        color: #777777;

                    }



                    html .divider.divider-style-2.divider-quaternary .fa,

                    html .divider.divider-style-2.divider-quaternary .icons {

                        background: #edeada;

                        color: #777777;

                    }



                    html .divider.divider-style-2.divider-dark .fa,

                    html .divider.divider-style-2.divider-dark .icons {

                        background: #2e353e;

                        color: #ffffff;

                    }



                    html .divider.divider-style-2.divider-light .fa,

                    html .divider.divider-style-2.divider-light .icons {

                        background: #ffffff;

                        color: #777777;

                    }



                    html .divider.divider-style-3.divider-primary .fa,

                    html .divider.divider-style-3.divider-primary .icons {

                        border-color: {{ custom_color }};

                    }



                    html .divider.divider-style-3.divider-secondary .fa,

                    html .divider.divider-style-3.divider-secondary .icons {

                        border-color: #344257;

                    }



                    html .divider.divider-style-3.divider-tertiary .fa,

                    html .divider.divider-style-3.divider-tertiary .icons {

                        border-color: #d1e7e7;

                    }



                    html .divider.divider-style-3.divider-quaternary .fa,

                    html .divider.divider-style-3.divider-quaternary .icons {

                        border-color: #edeada;

                    }



                    html .divider.divider-style-3.divider-dark .fa,

                    html .divider.divider-style-3.divider-dark .icons {

                        border-color: #2e353e;

                    }



                    html .divider.divider-style-3.divider-light .fa,

                    html .divider.divider-style-3.divider-light .icons {

                        border-color: #ffffff;

                    }



                    #header .tip {

                        background: {{ custom_color }};

                        color: #ffffff;

                    }



                    #header .tip:before {

                        border-right-color: {{ custom_color }};

                    }



                    html #header .tip-primary {

                        background: {{ custom_color }} !important;

                        color: #ffffff !important;

                    }



                    html #header .tip-primary:before {

                        border-right-color: {{ custom_color }} !important;

                    }



                    html #header .tip-secondary {

                        background: #344257 !important;

                        color: #ffffff !important;

                    }



                    html #header .tip-secondary:before {

                        border-right-color: #344257 !important;

                    }



                    html #header .tip-tertiary {

                        background: #d1e7e7 !important;

                        color: #777777 !important;

                    }



                    html #header .tip-tertiary:before {

                        border-right-color: #d1e7e7 !important;

                    }



                    html #header .tip-quaternary {

                        background: #edeada !important;

                        color: #777777 !important;

                    }



                    html #header .tip-quaternary:before {

                        border-right-color: #edeada !important;

                    }



                    html #header .tip-dark {

                        background: #2e353e !important;

                        color: #ffffff !important;

                    }



                    html #header .tip-dark:before {

                        border-right-color: #2e353e !important;

                    }



                    html #header .tip-light {

                        background: #ffffff !important;

                        color: #777777 !important;

                    }



                    html #header .tip-light:before {

                        border-right-color: #ffffff !important;

                    }



                    html[dir=\"rtl\"] #header .tip.skin:before {

                        border-left-color: {{ custom_color }};

                    }



                    #header .header-btn-collapse-nav {

                        background: {{ custom_color }};

                    }



                    @media (min-width: 992px) {

                        #header .header-nav-main nav > ul > li.open > a,

                        #header .header-nav-main nav > ul > li:hover > a {

                            background: {{ custom_color }};

                        }



                        #header .header-nav-main nav > ul > li.dropdown .dropdown-menu {

                            border-top-color: {{ custom_color }};

                        }



                        #header .header-nav-main nav > ul > li.dropdown .dropdown-menu li.dropdown-submenu > a:after {

                            border-color: transparent transparent transparent {{ custom_color }};

                        }



                        #header .header-nav-main nav > ul > li.dropdown-reverse .dropdown-menu {

                            border-top-color: {{ custom_color }};

                        }



                        #header .header-nav-main nav > ul > li.dropdown-reverse .dropdown-menu li.dropdown-submenu > a:after {

                            border-color: transparent {{ custom_color }} transparent;

                        }



                        #header .header-nav-main nav > ul > li.dropdown-mega-signin .dropdown-menu {

                            border-top-color: {{ custom_color }};

                        }



                        #header .header-nav-main nav > ul > li.dropdown-mega-signin .dropdown-menu li a {

                            color: {{ custom_color }};

                        }



                        #header .header-nav.header-nav-stripe nav > ul > li:not(:hover).active > a {

                            color: {{ custom_color }};

                        }



                        #header .header-nav.header-nav-stripe nav > ul > li:not(:hover).active > a.dropdown-toggle:after {

                            border-color: {{ custom_color }} transparent transparent transparent;

                        }



                        #header .header-nav.header-nav-stripe nav > ul > li:hover > a {

                            background-color: {{ custom_color }};

                        }



                        #header .header-nav.header-nav-top-line nav > ul li.active > a,

                        #header .header-nav.header-nav-top-line nav > ul li:hover > a {

                            color: {{ custom_color }};

                        }



                        #header .header-nav.header-nav-top-line nav > ul li.active > a:before,

                        #header .header-nav.header-nav-top-line nav > ul li:hover > a:before {

                            background: {{ custom_color }};

                        }



                        #header .header-nav.header-nav-top-line nav > ul li.active > a.dropdown-toggle:after,

                        #header .header-nav.header-nav-top-line nav > ul li:hover > a.dropdown-toggle:after {

                            border-color: {{ custom_color }} transparent transparent transparent;

                        }



                        #header .header-nav.header-nav-dark-dropdown nav > ul li.active > a,

                        #header .header-nav.header-nav-dark-dropdown nav > ul li:hover > a {

                            color: {{ custom_color }};

                        }



                        #header .header-nav.header-nav-dark-dropdown nav > ul li.active > a.dropdown-toggle:after,

                        #header .header-nav.header-nav-dark-dropdown nav > ul li:hover > a.dropdown-toggle:after {

                            border-color: {{ custom_color }} transparent transparent transparent;

                        }



                        html.side-header #header .header-nav-main nav > ul li.dropdown.open > .dropdown-menu,

                        html.side-header #header .header-nav-main nav > ul li.dropdown:hover > .dropdown-menu {

                            border-left-color: {{ custom_color }};

                        }



                        html.side-header-right #header .header-nav-main nav > ul li.dropdown.open > .dropdown-menu,

                        html.side-header-right #header .header-nav-main nav > ul li.dropdown:hover > .dropdown-menu {

                            border-right-color: {{ custom_color }};

                        }

                    }



                    @media (min-width: 992px) {

                        #header .header-nav-main nav > ul > li > a.dropdown-toggle:after {

                            border-color: {{ custom_color }} transparent transparent transparent;

                        }



                        html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,

                        html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {

                            border-color: {{ custom_color }} transparent transparent transparent;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary a {

                            color: {{ custom_color }};

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary a:focus,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary a:hover {

                            background: {{ custom_color }};

                            color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary.active > a,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary:hover > a {

                            background: {{ custom_color }};

                            color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu {

                            border-top-color: {{ custom_color }};

                            background-color: {{ custom_color }};

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu li a {

                            color: #ffffff;

                            border-bottom-color: {{ custom_color }};

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu li:hover > a {

                            background: {{ custom_color }};

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu li.dropdown-submenu > a:after {

                            border-color: transparent transparent transparent #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-primary .dropdown-mega-sub-title {

                            color: #ffffff;

                            opacity: 0.70;

                        }



                        html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,

                        html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {

                            border-color: #344257 transparent transparent transparent;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary a {

                            color: #344257;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary a:focus,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary a:hover {

                            background: #344257;

                            color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary.active > a,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary:hover > a {

                            background: #344257;

                            color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu {

                            border-top-color: #344257;

                            background-color: #344257;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu li a {

                            color: #ffffff;

                            border-bottom-color: #3e4e67;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu li:hover > a {

                            background: #3e4e67;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu li.dropdown-submenu > a:after {

                            border-color: transparent transparent transparent #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-secondary .dropdown-mega-sub-title {

                            color: #ffffff;

                            opacity: 0.70;

                        }



                        html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,

                        html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {

                            border-color: #d1e7e7 transparent transparent transparent;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary a {

                            color: #d1e7e7;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary a:focus,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary a:hover {

                            background: #d1e7e7;

                            color: #777777;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary.active > a,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary:hover > a {

                            background: #d1e7e7;

                            color: #777777;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu {

                            border-top-color: #d1e7e7;

                            background-color: #d1e7e7;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu li a {

                            color: #777777;

                            border-bottom-color: #e2f0f0;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu li:hover > a {

                            background: #e2f0f0;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu li.dropdown-submenu > a:after {

                            border-color: transparent transparent transparent #777777;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-tertiary .dropdown-mega-sub-title {

                            color: #777777;

                            opacity: 0.70;

                        }



                        html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,

                        html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {

                            border-color: #edeada transparent transparent transparent;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary a {

                            color: #edeada;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary a:focus,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary a:hover {

                            background: #edeada;

                            color: #777777;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary.active > a,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary:hover > a {

                            background: #edeada;

                            color: #777777;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu {

                            border-top-color: #edeada;

                            background-color: #edeada;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu li a {

                            color: #777777;

                            border-bottom-color: #f5f4eb;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu li:hover > a {

                            background: #f5f4eb;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu li.dropdown-submenu > a:after {

                            border-color: transparent transparent transparent #777777;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-quaternary .dropdown-mega-sub-title {

                            color: #777777;

                            opacity: 0.70;

                        }



                        html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,

                        html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {

                            border-color: #2e353e transparent transparent transparent;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark a {

                            color: #2e353e;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark a:focus,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark a:hover {

                            background: #2e353e;

                            color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark.active > a,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark:hover > a {

                            background: #2e353e;

                            color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu {

                            border-top-color: #2e353e;

                            background-color: #2e353e;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu li a {

                            color: #ffffff;

                            border-bottom-color: #39424d;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu li:hover > a {

                            background: #39424d;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu li.dropdown-submenu > a:after {

                            border-color: transparent transparent transparent #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-dark .dropdown-mega-sub-title {

                            color: #ffffff;

                            opacity: 0.70;

                        }



                        html #header .header-nav-main nav > ul > li.active > a.dropdown-toggle:after,

                        html #header .header-nav-main nav > ul > li:hover > a.dropdown-toggle:after {

                            border-color: #ffffff transparent transparent transparent;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light a {

                            color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light a:focus,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light a:hover {

                            background: #ffffff;

                            color: #777777;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light.active > a,

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light:hover > a {

                            background: #ffffff;

                            color: #777777;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu {

                            border-top-color: #ffffff;

                            background-color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu li a {

                            color: #777777;

                            border-bottom-color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu li:hover > a {

                            background: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu li.dropdown-submenu > a:after {

                            border-color: transparent transparent transparent #777777;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-light .dropdown-mega-sub-title {

                            color: #777777;

                            opacity: 0.70;

                        }



                        html[dir=\"rtl\"] #header .header-nav-main nav > ul > li.dropdown .dropdown-menu li.dropdown-submenu > a:after {

                            border-color: transparent {{ custom_color }} transparent transparent;

                        }

                    }



                    @media (max-width: 991px) {

                        #header .header-nav-main nav > ul > li > a,

                        #header .header-nav-main nav > ul > li > a:focus,

                        #header .header-nav-main nav > ul > li > a:hover {

                            color: {{ custom_color }};

                        }



                        #header .header-nav-main nav > ul > li.active > a,

                        #header .header-nav-main nav > ul > li.active > a:focus,

                        #header .header-nav-main nav > ul > li.active > a:hover {

                            background-color: {{ custom_color }};

                        }

                    }



                    @media (max-width: 991px) {

                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary > a {

                            color: {{ custom_color }};

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary.active > a {

                            background: {{ custom_color }};

                            color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary > a {

                            color: #344257;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary.active > a {

                            background: #344257;

                            color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary > a {

                            color: #d1e7e7;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary.active > a {

                            background: #d1e7e7;

                            color: #777777;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary > a {

                            color: #edeada;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary.active > a {

                            background: #edeada;

                            color: #777777;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark > a {

                            color: #2e353e;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark.active > a {

                            background: #2e353e;

                            color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light > a {

                            color: #ffffff;

                        }



                        html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light.active > a {

                            background: #ffffff;

                            color: #777777;

                        }

                    }



                    html #header .header-top.header-top-primary {

                        background: {{ custom_color }};

                        border-top-color: {{ custom_color }};

                    }



                    html #header .header-top.header-top-primary .header-nav-top ul > li.open > a {

                        background: {{ custom_color }};

                    }



                    html #header .header-top.header-top-primary .header-nav-top ul > li > a:hover,

                    html #header .header-top.header-top-primary .header-nav-top ul > li.open > a:hover,

                    html #header .header-top.header-top-primary .header-nav-top ul > li > a:focus,

                    html #header .header-top.header-top-primary .header-nav-top ul > li.open > a:focus {

                        background: {{ custom_color }};

                    }



                    html #header .header-top.header-top-primary .dropdown-menu {

                        background: {{ custom_color }};

                        border-color: {{ custom_color }};

                    }



                    html #header .header-top.header-top-primary .dropdown-menu a:hover,

                    html #header .header-top.header-top-primary .dropdown-menu a:focus {

                        background: #e6af50 !important;

                    }



                    html #header .header-top.header-top-secondary {

                        background: #344257;

                        border-top-color: #2a3647;

                    }



                    html #header .header-top.header-top-secondary .header-nav-top ul > li.open > a {

                        background: #3e4e67;

                    }



                    html #header .header-top.header-top-secondary .header-nav-top ul > li > a:hover,

                    html #header .header-top.header-top-secondary .header-nav-top ul > li.open > a:hover,

                    html #header .header-top.header-top-secondary .header-nav-top ul > li > a:focus,

                    html #header .header-top.header-top-secondary .header-nav-top ul > li.open > a:focus {

                        background: #3e4e67;

                    }



                    html #header .header-top.header-top-secondary .dropdown-menu {

                        background: #3e4e67;

                        border-color: #3e4e67;

                    }



                    html #header .header-top.header-top-secondary .dropdown-menu a:hover,

                    html #header .header-top.header-top-secondary .dropdown-menu a:focus {

                        background: #475a77 !important;

                    }



                    html #header .header-top.header-top-tertiary {

                        background: #d1e7e7;

                        border-top-color: #c0dede;

                    }



                    html #header .header-top.header-top-tertiary .header-nav-top ul > li.open > a {

                        background: #e2f0f0;

                    }



                    html #header .header-top.header-top-tertiary .header-nav-top ul > li > a:hover,

                    html #header .header-top.header-top-tertiary .header-nav-top ul > li.open > a:hover,

                    html #header .header-top.header-top-tertiary .header-nav-top ul > li > a:focus,

                    html #header .header-top.header-top-tertiary .header-nav-top ul > li.open > a:focus {

                        background: #e2f0f0;

                    }



                    html #header .header-top.header-top-tertiary .dropdown-menu {

                        background: #e2f0f0;

                        border-color: #e2f0f0;

                    }



                    html #header .header-top.header-top-tertiary .dropdown-menu a:hover,

                    html #header .header-top.header-top-tertiary .dropdown-menu a:focus {

                        background: #f3f8f8 !important;

                    }



                    html #header .header-top.header-top-quaternary {

                        background: #edeada;

                        border-top-color: #e5e0c9;

                    }



                    html #header .header-top.header-top-quaternary .header-nav-top ul > li.open > a {

                        background: #f5f4eb;

                    }



                    html #header .header-top.header-top-quaternary .header-nav-top ul > li > a:hover,

                    html #header .header-top.header-top-quaternary .header-nav-top ul > li.open > a:hover,

                    html #header .header-top.header-top-quaternary .header-nav-top ul > li > a:focus,

                    html #header .header-top.header-top-quaternary .header-nav-top ul > li.open > a:focus {

                        background: #f5f4eb;

                    }



                    html #header .header-top.header-top-quaternary .dropdown-menu {

                        background: #f5f4eb;

                        border-color: #f5f4eb;

                    }



                    html #header .header-top.header-top-quaternary .dropdown-menu a:hover,

                    html #header .header-top.header-top-quaternary .dropdown-menu a:focus {

                        background: #fefdfc !important;

                    }



                    html #header .header-top.header-top-dark {

                        background: #2e353e;

                        border-top-color: #23282f;

                    }



                    html #header .header-top.header-top-dark .header-nav-top ul > li.open > a {

                        background: #39424d;

                    }



                    html #header .header-top.header-top-dark .header-nav-top ul > li > a:hover,

                    html #header .header-top.header-top-dark .header-nav-top ul > li.open > a:hover,

                    html #header .header-top.header-top-dark .header-nav-top ul > li > a:focus,

                    html #header .header-top.header-top-dark .header-nav-top ul > li.open > a:focus {

                        background: #39424d;

                    }



                    html #header .header-top.header-top-dark .dropdown-menu {

                        background: #39424d;

                        border-color: #39424d;

                    }



                    html #header .header-top.header-top-dark .dropdown-menu a:hover,

                    html #header .header-top.header-top-dark .dropdown-menu a:focus {

                        background: #444e5b !important;

                    }



                    html #header .header-top.header-top-light {

                        background: #ffffff;

                        border-top-color: #f2f2f2;

                    }



                    html #header .header-top.header-top-light .header-nav-top ul > li.open > a {

                        background: #ffffff;

                    }



                    html #header .header-top.header-top-light .header-nav-top ul > li > a:hover,

                    html #header .header-top.header-top-light .header-nav-top ul > li.open > a:hover,

                    html #header .header-top.header-top-light .header-nav-top ul > li > a:focus,

                    html #header .header-top.header-top-light .header-nav-top ul > li.open > a:focus {

                        background: #ffffff;

                    }



                    html #header .header-top.header-top-light .dropdown-menu {

                        background: #ffffff;

                        border-color: #ffffff;

                    }



                    html #header .header-top.header-top-light .dropdown-menu a:hover,

                    html #header .header-top.header-top-light .dropdown-menu a:focus {

                        background: #ffffff !important;

                    }



                    @media (min-width: 992px) {

                        html #header .header-nav-bar-primary {

                            background: {{ custom_color }} !important;

                            color: #ffffff !important;

                        }



                        html #header .header-nav-bar-secondary {

                            background: #344257 !important;

                            color: #ffffff !important;

                        }



                        html #header .header-nav-bar-tertiary {

                            background: #d1e7e7 !important;

                            color: #777777 !important;

                        }



                        html #header .header-nav-bar-quaternary {

                            background: #edeada !important;

                            color: #777777 !important;

                        }



                        html #header .header-nav-bar-dark {

                            background: #2e353e !important;

                            color: #ffffff !important;

                        }



                        html #header .header-nav-bar-light {

                            background: #ffffff !important;

                            color: #777777 !important;

                        }

                    }



                    @media (min-width: 992px) {

                        #header .header-nav-main.header-nav-main-light nav > ul > li.open > a,

                        #header .header-nav-main.header-nav-main-light nav > ul > li:hover > a {

                            color: {{ custom_color }};

                        }



                        #header .header-nav-main.header-nav-main-light nav > ul > li.active > a {

                            color: {{ custom_color }};

                        }

                    }



                    .testimonial blockquote {

                        background: {{ custom_color }};

                    }



                    .testimonial .testimonial-arrow-down {

                        border-top-color: {{ custom_color }};

                    }



                    html .testimonial-primary blockquote {

                        background: {{ custom_color }};

                    }



                    html .testimonial-primary .testimonial-arrow-down {

                        border-top-color: {{ custom_color }};

                    }



                    html .testimonial-secondary blockquote {

                        background: #3e4e67;

                    }



                    html .testimonial-secondary .testimonial-arrow-down {

                        border-top-color: #3e4e67;

                    }



                    html .testimonial-tertiary blockquote {

                        background: #e2f0f0;

                    }



                    html .testimonial-tertiary .testimonial-arrow-down {

                        border-top-color: #e2f0f0;

                    }



                    html .testimonial-quaternary blockquote {

                        background: #f5f4eb;

                    }



                    html .testimonial-quaternary .testimonial-arrow-down {

                        border-top-color: #f5f4eb;

                    }



                    html .testimonial-dark blockquote {

                        background: #39424d;

                    }



                    html .testimonial-dark .testimonial-arrow-down {

                        border-top-color: #39424d;

                    }



                    html .testimonial-light blockquote {

                        background: #ffffff;

                    }



                    html .testimonial-light .testimonial-arrow-down {

                        border-top-color: #ffffff;

                    }



                    .circular-bar.only-icon .fa,

                    .circular-bar.only-icon .icons {

                        color: {{ custom_color }};

                    }



                    html .counters .counter-primary .fa,

                    html .counters .counter-primary .icons,

                    html .counters .counter-primary strong {

                        color: {{ custom_color }};

                    }



                    html .counters .counter-secondary .fa,

                    html .counters .counter-secondary .icons,

                    html .counters .counter-secondary strong {

                        color: #344257;

                    }



                    html .counters .counter-tertiary .fa,

                    html .counters .counter-tertiary .icons,

                    html .counters .counter-tertiary strong {

                        color: #d1e7e7;

                    }



                    html .counters .counter-quaternary .fa,

                    html .counters .counter-quaternary .icons,

                    html .counters .counter-quaternary strong {

                        color: #edeada;

                    }



                    html .counters .counter-dark .fa,

                    html .counters .counter-dark .icons,

                    html .counters .counter-dark strong {

                        color: #2e353e;

                    }



                    html .counters .counter-light .fa,

                    html .counters .counter-light .icons,

                    html .counters .counter-light strong {

                        color: #ffffff;

                    }



                    .icon-featured {

                        background-color: {{ custom_color }};

                    }



                    .featured-box-primary .icon-featured {

                        background-color: {{ custom_color }};

                    }



                    .featured-box-primary .icon-featured:after {

                        border-color: {{ custom_color }};

                    }



                    .featured-box-primary h4 {

                        color: {{ custom_color }};

                    }



                    .featured-box-primary .box-content {

                        border-top-color: {{ custom_color }};

                    }



                    html .featured-box-primary .icon-featured {

                        background-color: {{ custom_color }};

                    }



                    html .featured-box-primary h4 {

                        color: {{ custom_color }};

                    }



                    html .featured-box-primary .box-content {

                        border-top-color: {{ custom_color }};

                    }



                    html .featured-box-secondary .icon-featured {

                        background-color: #344257;

                    }



                    html .featured-box-secondary h4 {

                        color: #344257;

                    }



                    html .featured-box-secondary .box-content {

                        border-top-color: #344257;

                    }



                    html .featured-box-tertiary .icon-featured {

                        background-color: #d1e7e7;

                    }



                    html .featured-box-tertiary h4 {

                        color: #d1e7e7;

                    }



                    html .featured-box-tertiary .box-content {

                        border-top-color: #d1e7e7;

                    }



                    html .featured-box-quaternary .icon-featured {

                        background-color: #edeada;

                    }



                    html .featured-box-quaternary h4 {

                        color: #edeada;

                    }



                    html .featured-box-quaternary .box-content {

                        border-top-color: #edeada;

                    }



                    html .featured-box-dark .icon-featured {

                        background-color: #2e353e;

                    }



                    html .featured-box-dark h4 {

                        color: #2e353e;

                    }



                    html .featured-box-dark .box-content {

                        border-top-color: #2e353e;

                    }



                    html .featured-box-light .icon-featured {

                        background-color: #ffffff;

                    }



                    html .featured-box-light h4 {

                        color: #ffffff;

                    }



                    html .featured-box-light .box-content {

                        border-top-color: #ffffff;

                    }



                    html .featured-boxes-style-3 .featured-box.featured-box-primary .icon-featured {

                        border-color: {{ custom_color }};

                        color: {{ custom_color }};

                    }



                    html .featured-boxes-style-3 .featured-box.featured-box-secondary .icon-featured {

                        border-color: #344257;

                        color: #344257;

                    }



                    html .featured-boxes-style-3 .featured-box.featured-box-tertiary .icon-featured {

                        border-color: #d1e7e7;

                        color: #d1e7e7;

                    }



                    html .featured-boxes-style-3 .featured-box.featured-box-quaternary .icon-featured {

                        border-color: #edeada;

                        color: #edeada;

                    }



                    html .featured-boxes-style-3 .featured-box.featured-box-dark .icon-featured {

                        border-color: #2e353e;

                        color: #2e353e;

                    }



                    html .featured-boxes-style-3 .featured-box.featured-box-light .icon-featured {

                        border-color: #ffffff;

                        color: #ffffff;

                    }



                    html .featured-boxes-style-4 .featured-box.featured-box-primary .icon-featured {

                        border-color: {{ custom_color }};

                        color: {{ custom_color }};

                    }



                    html .featured-boxes-style-4 .featured-box.featured-box-secondary .icon-featured {

                        border-color: #344257;

                        color: #344257;

                    }



                    html .featured-boxes-style-4 .featured-box.featured-box-tertiary .icon-featured {

                        border-color: #d1e7e7;

                        color: #d1e7e7;

                    }



                    html .featured-boxes-style-4 .featured-box.featured-box-quaternary .icon-featured {

                        border-color: #edeada;

                        color: #edeada;

                    }



                    html .featured-boxes-style-4 .featured-box.featured-box-dark .icon-featured {

                        border-color: #2e353e;

                        color: #2e353e;

                    }



                    html .featured-boxes-style-4 .featured-box.featured-box-light .icon-featured {

                        border-color: #ffffff;

                        color: #ffffff;

                    }



                    html .featured-boxes-style-5 .featured-box.featured-box-primary .icon-featured {

                        color: {{ custom_color }};

                    }



                    html .featured-boxes-style-5 .featured-box.featured-box-secondary .icon-featured {

                        color: #344257;

                    }



                    html .featured-boxes-style-5 .featured-box.featured-box-tertiary .icon-featured {

                        color: #d1e7e7;

                    }



                    html .featured-boxes-style-5 .featured-box.featured-box-quaternary .icon-featured {

                        color: #edeada;

                    }



                    html .featured-boxes-style-5 .featured-box.featured-box-dark .icon-featured {

                        color: #2e353e;

                    }



                    html .featured-boxes-style-5 .featured-box.featured-box-light .icon-featured {

                        color: #ffffff;

                    }



                    html .featured-boxes-style-6 .featured-box.featured-box-primary .icon-featured {

                        color: {{ custom_color }};

                    }



                    html .featured-boxes-style-6 .featured-box.featured-box-secondary .icon-featured {

                        color: #344257;

                    }



                    html .featured-boxes-style-6 .featured-box.featured-box-tertiary .icon-featured {

                        color: #d1e7e7;

                    }



                    html .featured-boxes-style-6 .featured-box.featured-box-quaternary .icon-featured {

                        color: #edeada;

                    }



                    html .featured-boxes-style-6 .featured-box.featured-box-dark .icon-featured {

                        color: #2e353e;

                    }



                    html .featured-boxes-style-6 .featured-box.featured-box-light .icon-featured {

                        color: #ffffff;

                    }



                    html .featured-boxes-style-8 .featured-box.featured-box-primary .icon-featured {

                        color: {{ custom_color }};

                    }



                    html .featured-boxes-style-8 .featured-box.featured-box-secondary .icon-featured {

                        color: #344257;

                    }



                    html .featured-boxes-style-8 .featured-box.featured-box-tertiary .icon-featured {

                        color: #d1e7e7;

                    }



                    html .featured-boxes-style-8 .featured-box.featured-box-quaternary .icon-featured {

                        color: #edeada;

                    }



                    html .featured-boxes-style-8 .featured-box.featured-box-dark .icon-featured {

                        color: #2e353e;

                    }



                    html .featured-boxes-style-8 .featured-box.featured-box-light .icon-featured {

                        color: #ffffff;

                    }



                    html .featured-box-effect-2.featured-box-primary .icon-featured:after {

                        box-shadow: 0 0 0 3px {{ custom_color }};

                    }



                    html .featured-box-effect-2.featured-box-secondary .icon-featured:after {

                        box-shadow: 0 0 0 3px #344257;

                    }



                    html .featured-box-effect-2.featured-box-tertiary .icon-featured:after {

                        box-shadow: 0 0 0 3px #d1e7e7;

                    }



                    html .featured-box-effect-2.featured-box-quaternary .icon-featured:after {

                        box-shadow: 0 0 0 3px #edeada;

                    }



                    html .featured-box-effect-2.featured-box-dark .icon-featured:after {

                        box-shadow: 0 0 0 3px #2e353e;

                    }



                    html .featured-box-effect-2.featured-box-light .icon-featured:after {

                        box-shadow: 0 0 0 3px #ffffff;

                    }



                    html .featured-box-effect-3.featured-box-primary .icon-featured:after {

                        box-shadow: 0 0 0 10px {{ custom_color }};

                    }



                    html .featured-box-effect-3.featured-box-primary:hover .icon-featured {

                        background: {{ custom_color }} !important;

                    }



                    html .featured-box-effect-3.featured-box-secondary .icon-featured:after {

                        box-shadow: 0 0 0 10px #344257;

                    }



                    html .featured-box-effect-3.featured-box-secondary:hover .icon-featured {

                        background: #344257 !important;

                    }



                    html .featured-box-effect-3.featured-box-tertiary .icon-featured:after {

                        box-shadow: 0 0 0 10px #d1e7e7;

                    }



                    html .featured-box-effect-3.featured-box-tertiary:hover .icon-featured {

                        background: #d1e7e7 !important;

                    }



                    html .featured-box-effect-3.featured-box-quaternary .icon-featured:after {

                        box-shadow: 0 0 0 10px #edeada;

                    }



                    html .featured-box-effect-3.featured-box-quaternary:hover .icon-featured {

                        background: #edeada !important;

                    }



                    html .featured-box-effect-3.featured-box-dark .icon-featured:after {

                        box-shadow: 0 0 0 10px #2e353e;

                    }



                    html .featured-box-effect-3.featured-box-dark:hover .icon-featured {

                        background: #2e353e !important;

                    }



                    html .featured-box-effect-3.featured-box-light .icon-featured:after {

                        box-shadow: 0 0 0 10px #ffffff;

                    }



                    html .featured-box-effect-3.featured-box-light:hover .icon-featured {

                        background: #ffffff !important;

                    }



                    .feature-box .feature-box-icon {

                        background-color: {{ custom_color }};

                    }



                    html .feature-box-primary .feature-box-icon {

                        background-color: {{ custom_color }};

                    }



                    html .feature-box-secondary .feature-box-icon {

                        background-color: #344257;

                    }



                    html .feature-box-tertiary .feature-box-icon {

                        background-color: #d1e7e7;

                    }



                    html .feature-box-quaternary .feature-box-icon {

                        background-color: #edeada;

                    }



                    html .feature-box-dark .feature-box-icon {

                        background-color: #2e353e;

                    }



                    html .feature-box-light .feature-box-icon {

                        background-color: #ffffff;

                    }



                    .feature-box.feature-box-style-2 .feature-box-icon i.fa,

                    .feature-box.feature-box-style-2 .feature-box-icon .icons {

                        color: {{ custom_color }};

                    }



                    html .feature-box-primary.feature-box-style-2 .feature-box-icon i.fa,

                    html .feature-box-primary.feature-box-style-2 .feature-box-icon .icons {

                        color: {{ custom_color }};

                    }



                    html .feature-box-secondary.feature-box-style-2 .feature-box-icon i.fa,

                    html .feature-box-secondary.feature-box-style-2 .feature-box-icon .icons {

                        color: #344257;

                    }



                    html .feature-box-tertiary.feature-box-style-2 .feature-box-icon i.fa,

                    html .feature-box-tertiary.feature-box-style-2 .feature-box-icon .icons {

                        color: #d1e7e7;

                    }



                    html .feature-box-quaternary.feature-box-style-2 .feature-box-icon i.fa,

                    html .feature-box-quaternary.feature-box-style-2 .feature-box-icon .icons {

                        color: #edeada;

                    }



                    html .feature-box-dark.feature-box-style-2 .feature-box-icon i.fa,

                    html .feature-box-dark.feature-box-style-2 .feature-box-icon .icons {

                        color: #2e353e;

                    }



                    html .feature-box-light.feature-box-style-2 .feature-box-icon i.fa,

                    html .feature-box-light.feature-box-style-2 .feature-box-icon .icons {

                        color: #ffffff;

                    }



                    .feature-box.feature-box-style-3 .feature-box-icon {

                        border-color: {{ custom_color }};

                    }



                    .feature-box.feature-box-style-3 .feature-box-icon i.fa,

                    .feature-box.feature-box-style-3 .feature-box-icon .icons {

                        color: {{ custom_color }};

                    }



                    html .feature-box-primary.feature-box-style-3 .feature-box-icon {

                        border-color: {{ custom_color }};

                    }



                    html .feature-box-primary.feature-box-style-3 .feature-box-icon i.fa,

                    html .feature-box-primary.feature-box-style-3 .feature-box-icon .icons {

                        color: {{ custom_color }};

                    }



                    html .feature-box-secondary.feature-box-style-3 .feature-box-icon {

                        border-color: #344257;

                    }



                    html .feature-box-secondary.feature-box-style-3 .feature-box-icon i.fa,

                    html .feature-box-secondary.feature-box-style-3 .feature-box-icon .icons {

                        color: #344257;

                    }



                    html .feature-box-tertiary.feature-box-style-3 .feature-box-icon {

                        border-color: #d1e7e7;

                    }



                    html .feature-box-tertiary.feature-box-style-3 .feature-box-icon i.fa,

                    html .feature-box-tertiary.feature-box-style-3 .feature-box-icon .icons {

                        color: #d1e7e7;

                    }



                    html .feature-box-quaternary.feature-box-style-3 .feature-box-icon {

                        border-color: #edeada;

                    }



                    html .feature-box-quaternary.feature-box-style-3 .feature-box-icon i.fa,

                    html .feature-box-quaternary.feature-box-style-3 .feature-box-icon .icons {

                        color: #edeada;

                    }



                    html .feature-box-dark.feature-box-style-3 .feature-box-icon {

                        border-color: #2e353e;

                    }



                    html .feature-box-dark.feature-box-style-3 .feature-box-icon i.fa,

                    html .feature-box-dark.feature-box-style-3 .feature-box-icon .icons {

                        color: #2e353e;

                    }



                    html .feature-box-light.feature-box-style-3 .feature-box-icon {

                        border-color: #ffffff;

                    }



                    html .feature-box-light.feature-box-style-3 .feature-box-icon i.fa,

                    html .feature-box-light.feature-box-style-3 .feature-box-icon .icons {

                        color: #ffffff;

                    }



                    .feature-box.feature-box-style-4 .feature-box-icon i.fa,

                    .feature-box.feature-box-style-4 .feature-box-icon .icons {

                        color: {{ custom_color }};

                    }



                    html .feature-box-primary.feature-box-style-4 .feature-box-icon i.fa,

                    html .feature-box-primary.feature-box-style-4 .feature-box-icon .icons {

                        color: {{ custom_color }};

                    }



                    html .feature-box-secondary.feature-box-style-4 .feature-box-icon i.fa,

                    html .feature-box-secondary.feature-box-style-4 .feature-box-icon .icons {

                        color: #344257;

                    }



                    html .feature-box-tertiary.feature-box-style-4 .feature-box-icon i.fa,

                    html .feature-box-tertiary.feature-box-style-4 .feature-box-icon .icons {

                        color: #d1e7e7;

                    }



                    html .feature-box-quaternary.feature-box-style-4 .feature-box-icon i.fa,

                    html .feature-box-quaternary.feature-box-style-4 .feature-box-icon .icons {

                        color: #edeada;

                    }



                    html .feature-box-dark.feature-box-style-4 .feature-box-icon i.fa,

                    html .feature-box-dark.feature-box-style-4 .feature-box-icon .icons {

                        color: #2e353e;

                    }



                    html .feature-box-light.feature-box-style-4 .feature-box-icon i.fa,

                    html .feature-box-light.feature-box-style-4 .feature-box-icon .icons {

                        color: #ffffff;

                    }



                    .feature-box.feature-box-style-5 .feature-box-icon i.fa,

                    .feature-box.feature-box-style-5 .feature-box-icon i.icons {

                        color: {{ custom_color }};

                    }



                    html .feature-box-primary.feature-box-style-5 .feature-box-icon i.fa,

                    html .feature-box-primary.feature-box-style-5 .feature-box-icon i.icons {

                        color: {{ custom_color }};

                    }



                    html .feature-box-secondary.feature-box-style-5 .feature-box-icon i.fa,

                    html .feature-box-secondary.feature-box-style-5 .feature-box-icon i.icons {

                        color: #344257;

                    }



                    html .feature-box-tertiary.feature-box-style-5 .feature-box-icon i.fa,

                    html .feature-box-tertiary.feature-box-style-5 .feature-box-icon i.icons {

                        color: #d1e7e7;

                    }



                    html .feature-box-quaternary.feature-box-style-5 .feature-box-icon i.fa,

                    html .feature-box-quaternary.feature-box-style-5 .feature-box-icon i.icons {

                        color: #edeada;

                    }



                    html .feature-box-dark.feature-box-style-5 .feature-box-icon i.fa,

                    html .feature-box-dark.feature-box-style-5 .feature-box-icon i.icons {

                        color: #2e353e;

                    }



                    html .feature-box-light.feature-box-style-5 .feature-box-icon i.fa,

                    html .feature-box-light.feature-box-style-5 .feature-box-icon i.icons {

                        color: #ffffff;

                    }



                    html .feature-box-primary.feature-box-style-6 .feature-box-icon i.fa,

                    html .feature-box-primary.feature-box-style-6 .feature-box-icon i.icons {

                        color: {{ custom_color }};

                    }



                    html .feature-box-secondary.feature-box-style-6 .feature-box-icon i.fa,

                    html .feature-box-secondary.feature-box-style-6 .feature-box-icon i.icons {

                        color: #344257;

                    }



                    html .feature-box-tertiary.feature-box-style-6 .feature-box-icon i.fa,

                    html .feature-box-tertiary.feature-box-style-6 .feature-box-icon i.icons {

                        color: #d1e7e7;

                    }



                    html .feature-box-quaternary.feature-box-style-6 .feature-box-icon i.fa,

                    html .feature-box-quaternary.feature-box-style-6 .feature-box-icon i.icons {

                        color: #edeada;

                    }



                    html .feature-box-dark.feature-box-style-6 .feature-box-icon i.fa,

                    html .feature-box-dark.feature-box-style-6 .feature-box-icon i.icons {

                        color: #2e353e;

                    }



                    html .feature-box-light.feature-box-style-6 .feature-box-icon i.fa,

                    html .feature-box-light.feature-box-style-6 .feature-box-icon i.icons {

                        color: #ffffff;

                    }



                    html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(1) .featured-box-full-primary {

                        background-color: {{ custom_color }};

                    }



                    html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(2) .featured-box-full-primary {

                        background-color: {{ custom_color }};

                    }



                    html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(3) .featured-box-full-primary {

                        background-color: {{ custom_color }};

                    }



                    html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(4) .featured-box-full-primary {

                        background-color: {{ custom_color }};

                    }



                    html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(5) .featured-box-full-primary {

                        background-color: #e6af50;

                    }



                    html .featured-boxes-full-scale > [class*=\"col-\"]:nth-child(6) .featured-box-full-primary {

                        background-color: #e9b966;

                    }



                    html .featured-boxes-full .featured-box-full-primary {

                        background-color: {{ custom_color }};

                        color: #ffffff;

                    }



                    html .featured-boxes-full .featured-box-full-secondary {

                        background-color: #344257;

                        color: #ffffff;

                    }



                    html .featured-boxes-full .featured-box-full-tertiary {

                        background-color: #d1e7e7;

                        color: #777777;

                    }



                    html .featured-boxes-full .featured-box-full-quaternary {

                        background-color: #edeada;

                        color: #777777;

                    }



                    html .featured-boxes-full .featured-box-full-dark {

                        background-color: #2e353e;

                        color: #ffffff;

                    }



                    html .featured-boxes-full .featured-box-full-light {

                        background-color: #ffffff;

                        color: #777777;

                    }



                    .pricing-table .most-popular {

                        border-color: {{ custom_color }};

                    }



                    .pricing-table .most-popular h3 {

                        background-color: {{ custom_color }} !important;

                    }



                    .pricing-table.princig-table-flat .plan h3 {

                        background-color: {{ custom_color }};

                    }



                    .pricing-table.princig-table-flat .plan h3 span {

                        background: {{ custom_color }};

                    }



                    html .call-to-action.featured.featured-primary {

                        border-top-color: {{ custom_color }};

                    }



                    html .call-to-action.call-to-action-primary {

                        background: {{ custom_color }};

                    }



                    html .call-to-action.with-full-borders-primary {

                        border-color: {{ custom_color }};

                    }



                    html .call-to-action.call-to-action-primary {

                        background: {{ custom_color }};

                    }



                    html .call-to-action.call-to-action-primary h3,

                    html .call-to-action.call-to-action-primary p {

                        color: #ffffff;

                    }



                    html .call-to-action.featured.featured-secondary {

                        border-top-color: #344257;

                    }



                    html .call-to-action.call-to-action-secondary {

                        background: #344257;

                    }



                    html .call-to-action.with-full-borders-secondary {

                        border-color: #344257;

                    }



                    html .call-to-action.call-to-action-secondary {

                        background: #344257;

                    }



                    html .call-to-action.call-to-action-secondary h3,

                    html .call-to-action.call-to-action-secondary p {

                        color: #ffffff;

                    }



                    html .call-to-action.featured.featured-tertiary {

                        border-top-color: #d1e7e7;

                    }



                    html .call-to-action.call-to-action-tertiary {

                        background: #d1e7e7;

                    }



                    html .call-to-action.with-full-borders-tertiary {

                        border-color: #d1e7e7;

                    }



                    html .call-to-action.call-to-action-tertiary {

                        background: #d1e7e7;

                    }



                    html .call-to-action.call-to-action-tertiary h3,

                    html .call-to-action.call-to-action-tertiary p {

                        color: #777777;

                    }



                    html .call-to-action.featured.featured-quaternary {

                        border-top-color: #edeada;

                    }



                    html .call-to-action.call-to-action-quaternary {

                        background: #edeada;

                    }



                    html .call-to-action.with-full-borders-quaternary {

                        border-color: #edeada;

                    }



                    html .call-to-action.call-to-action-quaternary {

                        background: #edeada;

                    }



                    html .call-to-action.call-to-action-quaternary h3,

                    html .call-to-action.call-to-action-quaternary p {

                        color: #777777;

                    }



                    html .call-to-action.featured.featured-dark {

                        border-top-color: #2e353e;

                    }



                    html .call-to-action.call-to-action-dark {

                        background: #2e353e;

                    }



                    html .call-to-action.with-full-borders-dark {

                        border-color: #2e353e;

                    }



                    html .call-to-action.call-to-action-dark {

                        background: #2e353e;

                    }



                    html .call-to-action.call-to-action-dark h3,

                    html .call-to-action.call-to-action-dark p {

                        color: #ffffff;

                    }



                    html .call-to-action.featured.featured-light {

                        border-top-color: #ffffff;

                    }



                    html .call-to-action.call-to-action-light {

                        background: #ffffff;

                    }



                    html .call-to-action.with-full-borders-light {

                        border-color: #ffffff;

                    }



                    html .call-to-action.call-to-action-light {

                        background: #ffffff;

                    }



                    html .call-to-action.call-to-action-light h3,

                    html .call-to-action.call-to-action-light p {

                        color: #777777;

                    }



                    section.timeline .timeline-box.left:before,

                    section.timeline .timeline-box.right:before {

                        background: {{ custom_color }};

                        box-shadow: 0 0 0 3px #ffffff, 0 0 0 6px {{ custom_color }};

                    }



                    ul.history li .featured-box .box-content {

                        border-top-color: {{ custom_color }};

                    }



                    .recent-posts .date .month,

                    article.post .post-date .month {

                        background-color: {{ custom_color }};

                    }



                    .recent-posts .date .day,

                    article.post .post-date .day {

                        color: {{ custom_color }};

                    }



                    .slider .tp-bannertimer {

                        background-color: {{ custom_color }};

                    }



                    .home-concept strong {

                        color: {{ custom_color }};

                    }



                    html .home-intro-primary {

                        background: {{ custom_color }};

                    }



                    html .home-intro-secondary {

                        background: #344257;

                    }



                    html .home-intro-tertiary {

                        background: #d1e7e7;

                    }



                    html .home-intro-quaternary {

                        background: #edeada;

                    }



                    html .home-intro-dark {

                        background: #2e353e;

                    }



                    html .home-intro-light {

                        background: #ffffff;

                    }



                    .home-intro p em {

                        color: #e6af50;

                    }



                    html .slider-container .tp-caption-overlay-primary {

                        background: {{ custom_color }};

                    }



                    html .slider-container .tp-caption-overlay-opacity-primary {

                        background: rgba(224, 155, 35, 0.4);

                    }



                    html .slider-container .tp-caption-overlay-secondary {

                        background: #344257;

                    }



                    html .slider-container .tp-caption-overlay-opacity-secondary {

                        background: rgba(52, 66, 87, 0.4);

                    }



                    html .slider-container .tp-caption-overlay-tertiary {

                        background: #d1e7e7;

                    }



                    html .slider-container .tp-caption-overlay-opacity-tertiary {

                        background: rgba(209, 231, 231, 0.4);

                    }



                    html .slider-container .tp-caption-overlay-quaternary {

                        background: #edeada;

                    }



                    html .slider-container .tp-caption-overlay-opacity-quaternary {

                        background: rgba(237, 234, 218, 0.4);

                    }



                    html .slider-container .tp-caption-overlay-dark {

                        background: #2e353e;

                    }



                    html .slider-container .tp-caption-overlay-opacity-dark {

                        background: rgba(46, 53, 62, 0.4);

                    }



                    html .slider-container .tp-caption-overlay-light {

                        background: #ffffff;

                    }



                    html .slider-container .tp-caption-overlay-opacity-light {

                        background: rgba(255, 255, 255, 0.4);

                    }

                    /* Arrows */

                    .tparrows.tparrows-carousel.tp-leftarrow,

                    .tparrows.tparrows-carousel.tp-rightarrow {

                        color: #ffffff;

                        background-color: {{ custom_color }};

                        border-color: {{ custom_color }} {{ custom_color }} {{ custom_color }};

                    }



                    .tparrows.tparrows-carousel.tp-leftarrow:hover,

                    .tparrows.tparrows-carousel.tp-rightarrow:hover {

                        border-color: {{ custom_color }} {{ custom_color }} {{ custom_color }};

                        background-color: {{ custom_color }};

                    }



                    .tparrows.tparrows-carousel.tp-leftarrow:active,

                    .tparrows.tparrows-carousel.tp-rightarrow:active,

                    .tparrows.tparrows-carousel.tp-leftarrow:focus,

                    .tparrows.tparrows-carousel.tp-rightarrow:focus,

                    .tparrows.tparrows-carousel.tp-leftarrow:active:hover,

                    .tparrows.tparrows-carousel.tp-rightarrow:active:hover,

                    .tparrows.tparrows-carousel.tp-leftarrow:active:focus,

                    .tparrows.tparrows-carousel.tp-rightarrow:active:focus {

                        border-color: {{ custom_color }} {{ custom_color }} {{ custom_color }};

                        background-color: {{ custom_color }};

                    }



                    .tparrows.tparrows-carousel.tp-leftarrow.dropdown-toggle,

                    .tparrows.tparrows-carousel.tp-rightarrow.dropdown-toggle {

                        border-left-color: {{ custom_color }};

                    }



                    .tparrows.tparrows-carousel.tp-leftarrow[disabled],

                    .tparrows.tparrows-carousel.tp-rightarrow[disabled],

                    .tparrows.tparrows-carousel.tp-leftarrow[disabled]:hover,

                    .tparrows.tparrows-carousel.tp-rightarrow[disabled]:hover,

                    .tparrows.tparrows-carousel.tp-leftarrow[disabled]:active,

                    .tparrows.tparrows-carousel.tp-rightarrow[disabled]:active,

                    .tparrows.tparrows-carousel.tp-leftarrow[disabled]:focus,

                    .tparrows.tparrows-carousel.tp-rightarrow[disabled]:focus {

                        border-color: #edc47c;

                        background-color: #edc47c;

                    }



                    .shop ul.products li.product .onsale {

                        background-color: {{ custom_color }};

                        border-bottom-color: {{ custom_color }};

                    }



                    .shop .star-rating span,

                    .shop .cart-totals tr.total .amount {

                        color: {{ custom_color }};

                    }



                    #footer .footer-ribbon {

                        background: {{ custom_color }};

                    }



                    #footer .footer-ribbon:before {

                        border-right-color: {{ custom_color }};

                        border-left-color: {{ custom_color }};

                    }



                    #footer.light h1,

                    #footer.light h2,

                    #footer.light h3,

                    #footer.light h4,

                    #footer.light a {

                        color: {{ custom_color }};

                    }



                    #footer.color {

                        background: {{ custom_color }};

                        border-top-color: {{ custom_color }};

                    }



                    #footer.color .footer-ribbon {

                        background: {{ custom_color }};

                    }



                    #footer.color .footer-ribbon:before {

                        border-right-color: #734f10;

                    }



                    #footer.color .footer-copyright {

                        background: {{ custom_color }};

                        border-top-color: {{ custom_color }};

                    }



                    html #footer.color-primary {

                        background: {{ custom_color }};

                        border-top-color: {{ custom_color }};

                    }



                    html #footer.color-primary .footer-ribbon {

                        background: {{ custom_color }};

                    }



                    html #footer.color-primary .footer-ribbon:before {

                        border-right-color: #734f10;

                    }



                    html #footer.color-primary .footer-copyright {

                        background: {{ custom_color }};

                        border-top-color: {{ custom_color }};

                    }



                    html #footer.color-secondary {

                        background: #344257;

                        border-top-color: #344257;

                    }



                    html #footer.color-secondary .footer-ribbon {

                        background: #212a37;

                    }



                    html #footer.color-secondary .footer-ribbon:before {

                        border-right-color: #040507;

                    }



                    html #footer.color-secondary .footer-copyright {

                        background: #2a3647;

                        border-top-color: #2a3647;

                    }



                    html #footer.color-tertiary {

                        background: #d1e7e7;

                        border-top-color: #d1e7e7;

                    }



                    html #footer.color-tertiary .footer-ribbon {

                        background: #afd6d6;

                    }



                    html #footer.color-tertiary .footer-ribbon:before {

                        border-right-color: #7dbbbb;

                    }



                    html #footer.color-tertiary .footer-copyright {

                        background: #c0dede;

                        border-top-color: #c0dede;

                    }



                    html #footer.color-quaternary {

                        background: #edeada;

                        border-top-color: #edeada;

                    }



                    html #footer.color-quaternary .footer-ribbon {

                        background: #dcd7b8;

                    }



                    html #footer.color-quaternary .footer-ribbon:before {

                        border-right-color: #c3b984;

                    }



                    html #footer.color-quaternary .footer-copyright {

                        background: #e5e0c9;

                        border-top-color: #e5e0c9;

                    }



                    html #footer.color-dark {

                        background: #2e353e;

                        border-top-color: #2e353e;

                    }



                    html #footer.color-dark .footer-ribbon {

                        background: #181c21;

                    }



                    html #footer.color-dark .footer-ribbon:before {

                        border-right-color: #000000;

                    }



                    html #footer.color-dark .footer-copyright {

                        background: #23282f;

                        border-top-color: #23282f;

                    }



                    html #footer.color-light {

                        background: #ffffff;

                        border-top-color: #ffffff;

                    }



                    html #footer.color-light .footer-ribbon {

                        background: #e6e6e6;

                    }



                    html #footer.color-light .footer-ribbon:before {

                        border-right-color: #bfbfbf;

                    }



                    html #footer.color-light .footer-copyright {

                        background: #f2f2f2;

                        border-top-color: #f2f2f2;

                    }
                    
                    .sample-icon-list .sample-icon a:hover {

                        background-color: {{ custom_color }};

                    }
                    html.boxed .body {

                        border-top-color: {{ custom_color }};

                    }
                    #header .header-body .header-container .header-row .header-column .header-row .header-nav .header-nav-main nav > #mainNav > .dropdown-full-color.dropdown-secondary .is-active{
                        color: {{ custom_color }};
                    }
                    html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary:hover > a.is-active{
                        background: {{ custom_color }};
                    }
                    #contact-message-feedback-form #edit-submit{
                        background-color: {{ custom_color }};
                        border-color: {{ custom_color }} {{ custom_color }} {{ custom_color }};
                    }

                    input#edit-submit:hover {
                        border-color: {{ custom_color }} {{ custom_color }} {{ custom_color }};
                        background-color: {{ custom_color }};
                    }
                    .tabs ul.tabs a {
                        color: {{ custom_color }};
                    }
                    .tabs ul.tabs a.is-active, .tabs ul.tabs a:hover {
                        border-top-color: {{ custom_color }};
                    }
                    .user-login-form .button,
                    .user-pass .button,
                    .user-register-form .button{
                        background-color: {{ custom_color }};
                        border-color: {{ custom_color }} {{ custom_color }} {{ custom_color }};
                    }
                    .user-login-form .button:hover,
                    .user-pass .button:hover,
                    .user-register-form .button:hover{
                        border-color: {{ custom_color }} {{ custom_color }} {{ custom_color }};
                        background-color: {{ custom_color }};
                    }
                </style>
            {% endif %}
            
            {% if your_css is not empty %}
                <style>
                    {{ your_css }}
                </style>
            {% endif %}
            <js-placeholder token=\"{{ placeholder_token|raw }}\">
            <meta name=\"HandheldFriendly\" content=\"true\" />
            <meta name=\"apple-touch-fullscreen\" content=\"YES\" />
</head>
<body {{ attributes.addClass(body_classes) }} data-spy=\"scroll\" data-offset=\"100\">

<a href=\"#main-content\" class=\"visually-hidden focusable\">
    {{ 'Skip to main content'|t }}
</a>
    {{ page_top }}
    {{ page }}
    {{ page_bottom }}
<js-bottom-placeholder token=\"{{ placeholder_token|raw }}\">
</body>
</html>

", "themes/porto_subtheme/templates/html.html.twig", "/home/drupalnettracker/public_html/idam/web/themes/porto_subtheme/templates/html.html.twig");
    }
}
