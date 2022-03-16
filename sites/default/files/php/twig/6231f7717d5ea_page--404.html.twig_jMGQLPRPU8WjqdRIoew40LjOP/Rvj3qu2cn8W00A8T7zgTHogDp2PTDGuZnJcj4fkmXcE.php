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

/* themes/lifepoints_sass/templates/system/page--404.html.twig */
class __TwigTemplate_f788b1e375ebd107f65be947e07e45507723a0347fcd08dc1c9125f10efb3b80 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'cookie_banner' => [$this, 'block_cookie_banner'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "  ";
        // line 60
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cookie_banner", [], "any", false, false, true, 60)) {
            // line 61
            echo "     ";
            $this->displayBlock('cookie_banner', $context, $blocks);
            // line 71
            echo "  ";
        }
        // line 72
        echo "  ";
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 72), "fluid_container", [], "any", false, false, true, 72)) ? (" container-fluid") : ("container"));
        // line 73
        echo "  
  <section class=\"error-page-section alignment text-center\">
    <div class=\"container\">
      <h1 class=\"text-center\">";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Page not found"));
        echo "</h1>
      <div style=\"max-width: 520px; margin: 30px auto\">
        <img src=\"";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["basic_host_url"] ?? null), 78, $this->source), "html", null, true);
        echo "/";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 78, $this->source), "html", null, true);
        echo "/img/404_v3.0.svg\" alt=\"\" class=\"img-responsive\" />
      </div>

      <div class=\"loggedout-block\">
        <p class=\"text-center font18\">";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("We can’t seem to find the page you’re looking for. Let’s find a better place for you to go."));
        echo " </p>
        <a href=\"";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "\" class=\"btn btn-secondary btn-round-lg btn-lg\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("RETURN HOME"));
        echo "</a>
      </div>

      <div class=\"loggedin-block\">
        <p class=\"text-center font18 \">";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("We can’t seem to find the page you’re looking for."));
        echo " </p>
        <p class=\"text-center font18\">";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Try going back to your survey’s dashboard to take more surveys."));
        echo " </p>
        <a href=\"";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "\" class=\"btn btn-secondary btn-round-lg btn-lg\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("TAKE ME THERE"));
        echo "</a>
      </div>

    </div>
  </section>
  
  




";
    }

    // line 61
    public function block_cookie_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "      <div id=\"cookie-modal-box\" class=\"modal fade\" role=\"dialog\" data-backdrop=\"static\" data-keyboard=\"false\">
        <div class=\"modal-dialog\">
          <!-- Modal content-->
          <div class=\"modal-content\">
            <div class=\"cookie_banner_notification\">";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cookie_banner", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "</div>
          </div>
        </div>
      </div>
     ";
    }

    public function getTemplateName()
    {
        return "themes/lifepoints_sass/templates/system/page--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 66,  116 => 62,  112 => 61,  94 => 89,  90 => 88,  86 => 87,  77 => 83,  73 => 82,  64 => 78,  59 => 76,  54 => 73,  51 => 72,  48 => 71,  45 => 61,  42 => 60,  40 => 59,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/lifepoints_sass/templates/system/page--404.html.twig", "C:\\xampp\\htdocs\\drupal-9.3\\themes\\lifepoints_sass\\templates\\system\\page--404.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 60, "block" => 61, "set" => 72);
        static $filters = array("t" => 76, "escape" => 78);
        static $functions = array("path" => 83);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'set'],
                ['t', 'escape'],
                ['path']
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
