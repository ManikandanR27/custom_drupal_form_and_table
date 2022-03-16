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

/* themes/lifepoints_sass/templates/system/pager.html.twig */
class __TwigTemplate_abbe0bfe6441ca9397b3b12b88f0061c274aed4efc11bc578637d1b9e5a9a1a1 extends \Twig\Template
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
        // line 34
        if (($context["items"] ?? null)) {
            // line 35
            echo "  <nav class=\"pager-nav text-center\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "</h4>
    <ul class=\"pagination js-pager__items\">

      ";
            // line 40
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 40)) {
                // line 41
                echo "        <li class=\"pager__item pager__item--first\">
          <a href=\"";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 42), "href", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "\" rel=\"first\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 42), "attributes", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 44
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 44), "text", [], "any", true, true, true, 44)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 44), "text", [], "any", false, false, true, 44), 44, $this->source), t("first"))) : (t("first"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 48
            echo "
      ";
            // line 50
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 50)) {
                // line 51
                echo "        <li class=\"pager__item pager__item--previous\">
          <a href=\"";
                // line 52
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 52), "href", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                echo "\" rel=\"prev\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 52), "attributes", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 53
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 54
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 54), "text", [], "any", true, true, true, 54)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 54), "text", [], "any", false, false, true, 54), 54, $this->source), t("previous"))) : (t("previous"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 58
            echo "
      ";
            // line 60
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 60));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 61
                echo "        <li class=\"pager__item";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active active") : ("")));
                echo "\">
          <!-- OP-6260:Remove tooltips from LifePoints -->
          <a href=\"";
                // line 63
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                echo "\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">
              ";
                // line 65
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "
            </span>";
                // line 67
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 67, $this->source), "html", null, true);
                // line 68
                echo "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "
      ";
            // line 73
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 73)) {
                // line 74
                echo "        <li class=\"pager__item pager__item--next\">
          <a href=\"";
                // line 75
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 75), "href", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                echo "\" rel=\"next\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 75), "attributes", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 76
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 77
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 77), "text", [], "any", true, true, true, 77)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 77), "text", [], "any", false, false, true, 77), 77, $this->source), t("next"))) : (t("next"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 81
            echo "
      ";
            // line 83
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 83)) {
                // line 84
                echo "      <li class=\"pager__item pager__item--last\">
        <a href=\"";
                // line 85
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 85), "href", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                echo "\" rel=\"last\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 85), "attributes", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                echo ">
          <span class=\"visually-hidden\">";
                // line 86
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                echo "</span>
          <span aria-hidden=\"true\">";
                // line 87
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 87), "text", [], "any", true, true, true, 87)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 87), "text", [], "any", false, false, true, 87), 87, $this->source), t("last"))) : (t("last"))), "html", null, true);
                echo "</span>
        </a>
      </li>
      ";
            }
            // line 91
            echo "
    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/lifepoints_sass/templates/system/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 91,  179 => 87,  175 => 86,  169 => 85,  166 => 84,  163 => 83,  160 => 81,  153 => 77,  149 => 76,  143 => 75,  140 => 74,  137 => 73,  134 => 71,  126 => 68,  124 => 67,  120 => 65,  113 => 63,  107 => 61,  102 => 60,  99 => 58,  92 => 54,  88 => 53,  82 => 52,  79 => 51,  76 => 50,  73 => 48,  66 => 44,  62 => 43,  56 => 42,  53 => 41,  50 => 40,  44 => 36,  41 => 35,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/lifepoints_sass/templates/system/pager.html.twig", "C:\\xampp\\htdocs\\drupal-9.3\\themes\\lifepoints_sass\\templates\\system\\pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 34, "for" => 60);
        static $filters = array("t" => 36, "escape" => 42, "default" => 44);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['t', 'escape', 'default'],
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
}
