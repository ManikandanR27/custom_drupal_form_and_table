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

/* themes/lifepoints_sass/templates/input/input--form-control.html.twig */
class __TwigTemplate_8ac36444f2e461dd6caf25d16a5fda3dd4764dac42510ca106b365708892dea1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "input.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        ob_start(function () { return ''; });
        // line 25
        $context["classes"] = [0 => "form-control"];
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 1
        $this->parent = $this->loadTemplate("input.html.twig", "themes/lifepoints_sass/templates/input/input--form-control.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  <div ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => [0 => "form-group", 1 => "form-group-lg"]]), "html", null, true);
        echo ">
    <input";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 31), 31, $this->source), "html", null, true);
        echo " />
  </div>  
  ";
    }

    public function getTemplateName()
    {
        return "themes/lifepoints_sass/templates/input/input--form-control.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 31,  58 => 30,  54 => 29,  49 => 1,  46 => 25,  44 => 23,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/lifepoints_sass/templates/input/input--form-control.html.twig", "C:\\xampp\\htdocs\\drupal-9.3\\themes\\lifepoints_sass\\templates\\input\\input--form-control.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("spaceless" => 23, "set" => 25);
        static $filters = array("escape" => 30);
        static $functions = array("create_attribute" => 30);

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'set'],
                ['escape'],
                ['create_attribute']
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
