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

/* themes/lifepoints_sass/templates/system/html.html.twig */
class __TwigTemplate_cec54c74ed9997c150b2f11c57b6e866ce52b6fb34faef27cf5d808da3919a88 extends \Twig\Template
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
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        $context["body_classes"] = [0 => ((        // line 49
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 50
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 50, $this->source))))), 2 => ((        // line 51
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 51, $this->source)))) : ("")), 3 => ((        // line 52
($context["language"] ?? null)) ? (("lang-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 52, $this->source)))) : ("")), 4 => ((        // line 53
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), 5 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 54
($context["theme"] ?? null), "settings", [], "any", false, false, true, 54), "navbar_position", [], "any", false, false, true, 54)) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 54), "navbar_position", [], "any", false, false, true, 54), 54, $this->source))) : ("")), 6 => ((twig_get_attribute($this->env, $this->source,         // line 55
($context["theme"] ?? null), "has_glyphicons", [], "any", false, false, true, 55)) ? ("has-glyphicons") : (""))];
        // line 58
        echo "<!DOCTYPE html>
<html ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 59, $this->source), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 61, $this->source));
        echo "\">
    <title>";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 62, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 63, $this->source));
        echo "\">
    <js-placeholder token=\"";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 64, $this->source));
        echo "\">
      <script type=text/javascript>
          //setting data layer variable based on cookie permission
          var marketing_optimization_cookie_name = '3rd_party_optimization';
          var user_accepted_marking_optimization_cookies = false;
          var cookies = document.cookie.split(\";\");
          for (var i = 0; i < cookies.length; i++) {
              var c = cookies[i].trim();
              if (c.indexOf(marketing_optimization_cookie_name) == 0) {
                  user_accepted_marking_optimization_cookies = c.substring(marketing_optimization_cookie_name.length + 1, c.length);
              }
          }

          window.dataLayer.push({'3rd_party_marking_optimization_consent': user_accepted_marking_optimization_cookies });

      </script>

  </head>
  <body";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 82), 82, $this->source), "html", null, true);
        echo " onload=\"lpLoaderInit();\">
    ";
        // line 84
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 84, $this->source), "html", null, true);
        echo "
    ";
        // line 86
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("lifepoints_sass/adobe_analytics_user_status"), "html", null, true);
        echo "
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 90, $this->source), "html", null, true);
        echo "
    ";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 91, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 92, $this->source));
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/lifepoints_sass/templates/system/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 92,  113 => 91,  109 => 90,  104 => 88,  98 => 86,  93 => 84,  89 => 82,  68 => 64,  64 => 63,  60 => 62,  56 => 61,  51 => 59,  48 => 58,  46 => 55,  45 => 54,  44 => 53,  43 => 52,  42 => 51,  41 => 50,  40 => 49,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/lifepoints_sass/templates/system/html.html.twig", "C:\\xampp\\htdocs\\drupal-9.3\\themes\\lifepoints_sass\\templates\\system\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 48);
        static $filters = array("clean_class" => 50, "escape" => 59, "raw" => 61, "safe_join" => 62, "t" => 88);
        static $functions = array("attach_library" => 86);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
                ['attach_library']
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
}
