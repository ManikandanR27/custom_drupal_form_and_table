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

/* themes/lifepoints_sass/templates/system/page--front.html.twig */
class __TwigTemplate_4b3bce97664c88d23d04867ec8685d4cc2391fa4f6852dcb0c1c901e30efa83a extends \Twig\Template
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
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'highlighted' => [$this, 'block_highlighted'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("lifepoints_sass/homepage-scripts"), "html", null, true);
        echo "

";
        // line 62
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cookie_banner", [], "any", false, false, true, 62)) {
            // line 63
            echo "\t";
            $this->displayBlock('cookie_banner', $context, $blocks);
        }
        // line 75
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 75), "fluid_container", [], "any", false, false, true, 75)) ? ("container-fluid") : ("container"));
        // line 76
        echo "
";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "global_notifications", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
        echo "

";
        // line 81
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 81) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 81))) {
            // line 82
            echo "\t";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 125
        echo "
";
        // line 127
        $this->displayBlock('main', $context, $blocks);
        // line 295
        echo "
";
        // line 296
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 296)) {
            // line 297
            echo "\t";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 303
        echo "
<div class=\"main-footer main-footer-blue\">
\t<div class=\"container\">
\t\t<div class=\"row\">

\t\t\t<div
\t\t\t\tclass=\"col-md-4\">
\t\t\t\t<!-- logo, our privacy content and privacy menu (block 1 - region footBlock1)-->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-2 hidden-xs\">
\t\t\t\t\t\t<div class=\"footerLogo\"></div>
\t\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t";
        // line 317
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerBlock_A", [], "any", false, false, true, 317), 317, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t<!-- block 2 -->
\t\t\t\t\t\t<br>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-5\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t";
        // line 328
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerBlock_B", [], "any", false, false, true, 328), 328, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t<!-- block 2 -->
\t\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t";
        // line 333
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerBlock_C", [], "any", false, false, true, 333), 333, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t<!-- block 2 -->
\t\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div
\t\t\t\tclass=\"col-md-3\">
\t\t\t\t<!-- social links -->

\t\t\t\t";
        // line 345
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerBlock_D", [], "any", false, false, true, 345), 345, $this->source), "html", null, true);
        echo "
\t\t\t\t<!-- block 2 -->
\t\t\t\t<br>
\t\t\t</div>

\t\t</div>
\t\t<!-- end of main footer row -->
\t</div>
\t<!-- end of container -->
</div>
<!-- end of main footer class -->


<div class=\"main-footer-copyright havelock-blue\">
\t<div class=\"container\">
\t\t";
        // line 360
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_copyright", [], "any", false, false, true, 360), 360, $this->source), "html", null, true);
        echo "
\t</div>
</div>

<div class=\"page_end\">
\t";
        // line 365
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_end", [], "any", false, false, true, 365), 365, $this->source), "html", null, true);
        echo "
</div>

<div id=\"resenddoiemail-box\" class=\"modal fade\" role=\"dialog\">
\t<div
\t\tclass=\"modal-dialog\">

\t\t<!-- Modal content-->
\t\t<div class=\"modal-content\">

\t\t\t<div class=\"modal-body\">
\t\t\t\t<a class=\"close login-box-close pull-right\" data-dismiss=\"modal\">
\t\t\t\t\t<i class=\"fas fa-times icon18\"></i>
\t\t\t\t</a>
\t\t\t\t<div class=\"icon-logo\"></div>

\t\t\t\t<div class=\"alert alert-danger resend-doi-email-errors\"></div>
\t\t\t\t<div class=\"alert alert-success resend-doi-email-success\"></div>
\t\t\t\t";
        // line 383
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["resenddoiemail_form"] ?? null), 383, $this->source), "html", null, true);
        echo "
\t\t\t</div>

\t\t</div>

\t</div>
</div>

<div id=\"login-box\" class=\"modal fade\" role=\"dialog\">
\t<div
\t\tclass=\"modal-dialog\">

\t\t<!-- Modal content-->
\t\t<div class=\"modal-content\">

\t\t\t<div class=\"modal-body\">

\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"hid\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 text-center\">


\t\t\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t\t\t<a class=\"close login-box-close pull-right\" data-dismiss=\"modal\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-times icon18\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-logo\"></div>
\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-center\">";
        // line 412
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("LOG IN"));
        echo "</h2>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<div class=\"loginhtmldata\"></div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t</div>
</div>

<!-- forgotpassword-success box -->
<div id=\"forgotpassword-success-box\" class=\"modal fade\" role=\"dialog\">
\t<div
\t\tclass=\"modal-dialog\">

\t\t<!-- Modal content-->
\t\t<div class=\"modal-content\">

\t\t\t<div class=\"modal-body\">
\t\t\t\t<a class=\"close login-box-close pull-right\" data-dismiss=\"modal\">
\t\t\t\t\t<i class=\"fas fa-times icon18\"></i>
\t\t\t\t</a>
\t\t\t\t<div class=\"icon-logo\"></div>
\t\t\t\t<h2 class=\"text-center\">";
        // line 444
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Forgot your Password?"));
        echo "</h2>
\t\t\t\t<p class=\"text-center\">";
        // line 445
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["fogotpassword_mail_sent_submit"] ?? null), 445, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t<button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-info btn-round-lg btn-lg\">CLOSE</button>
\t\t\t\t</p>
\t\t\t</div>

\t\t</div>

\t</div>
</div>

";
        // line 464
        echo "<div class=\"barc-cookies-box\" style=\"display: none;\"></div>

<!-- FAB form -->
";
        // line 467
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["FabForm"] ?? null), 467, $this->source), "html", null, true);
        echo "
<!-- scroll  OP-7289-->
<a id=\"back2Top\" title=\"Back to top\" href=\"#\">
\t<span class=\"fab\">
\t\t<i class=\"material-arrow-upward-white\">&nbsp;</i>
\t</span>
</a>
";
    }

    // line 63
    public function block_cookie_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "\t\t<div id=\"cookie-modal-box\" class=\"modal fade\" role=\"dialog\" data-backdrop=\"static\" data-keyboard=\"false\">
\t\t\t<div
\t\t\t\tclass=\"modal-dialog\">
\t\t\t\t<!-- Modal content-->
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"cookie_banner_notification\">";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cookie_banner", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
    }

    // line 82
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "\t\t";
        // line 84
        $context["navbar_classes"] = [0 => "navbar", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 86
($context["theme"] ?? null), "settings", [], "any", false, false, true, 86), "navbar_inverse", [], "any", false, false, true, 86)) ? ("navbar-inverse") : ("navbar-default")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 87
($context["theme"] ?? null), "settings", [], "any", false, false, true, 87), "navbar_position", [], "any", false, false, true, 87)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 87), "navbar_position", [], "any", false, false, true, 87), 87, $this->source)))) : (($context["container"] ?? null)))];
        // line 90
        echo "\t\t<header";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 90), 90, $this->source), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
\t\t\t";
        // line 91
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 91)) {
            // line 92
            echo "\t\t\t\t<div
\t\t\t\t\tclass=\"container\">
\t\t\t\t<!-- hard code container div nolonger supported by theme -->
\t\t\t\t";
        }
        // line 96
        echo "
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 100
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 100)) {
            // line 101
            echo "

\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
\t\t\t\t\t\t\t<span class=\"sr-only\">";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation"));
            echo "</span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t";
        }
        // line 110
        echo "\t\t\t\t</div>


\t\t\t\t";
        // line 114
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 114)) {
            // line 115
            echo "\t\t\t\t\t<div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
\t\t\t\t\t\t";
            // line 116
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 119
        echo "\t\t\t\t";
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 119)) {
            // line 120
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 122
        echo "\t\t</header>
\t";
    }

    // line 127
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        echo "

\t";
        // line 131
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 131)) {
            // line 132
            echo "\t\t";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 135
            echo "\t";
        }
        // line 136
        echo "
\t";
        // line 138
        echo "\t";
        // line 156
        echo "\t";
        // line 157
        echo "
\t<div class=\"banner-text-overlay white-font text-center\">
\t\t<div class=\"container\">
\t\t\t";
        // line 160
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_heroBottomTop", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
        echo "
\t\t\t";
        // line 161
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_heroBottomBottom", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
        echo "
\t\t\t";
        // line 176
        echo "
\t\t</div>
\t</div>


\t<section>
\t\t<div
\t\t\tclass=\"container-fluid\">
\t\t\t";
        // line 185
        echo "\t\t\t";
        if (($context["isvisibleRewardSection"] ?? null)) {
            // line 186
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 187
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_homeRewards", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 190
        echo "\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 191
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_homeTestimonials", [], "any", false, false, true, 191), 191, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 194
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_homeCommunity", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 197
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_homeLetsGo", [], "any", false, false, true, 197), 197, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</section>

\t<div class=\"secondary-footer\">
\t\t<div class=\"container text-center\">
\t\t\t";
        // line 204
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_footerStrapline", [], "any", false, false, true, 204), 204, $this->source), "html", null, true);
        echo "
\t\t</div>
\t</div>

\t<div role=\"main\" class=\"main-container ";
        // line 208
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 208, $this->source), "html", null, true);
        echo " js-quickedit-main-content\">
\t\t<div
\t\t\tclass=\"row\">

\t\t\t";
        // line 213
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 213)) {
            // line 214
            echo "\t\t\t\t";
            $this->displayBlock('header', $context, $blocks);
            // line 219
            echo "\t\t\t";
        }
        // line 220
        echo "
\t\t\t";
        // line 222
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 222)) {
            // line 223
            echo "\t\t\t\t";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 228
            echo "\t\t\t";
        }
        // line 229
        echo "
\t\t\t";
        // line 231
        echo "\t\t\t";
        // line 232
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 233
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 233) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 233))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 234
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 234) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 234)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 235
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 235) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 235)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 236
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 236)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 236)))) ? ("col-sm-12") : (""))];
        // line 239
        echo "\t\t\t<section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 239), 239, $this->source), "html", null, true);
        echo ">


\t\t\t\t";
        // line 243
        echo "\t\t\t\t";
        if (($context["breadcrumb"] ?? null)) {
            // line 244
            echo "\t\t\t\t\t";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 247
            echo "\t\t\t\t";
        }
        // line 248
        echo "
\t\t\t\t";
        // line 250
        echo "\t\t\t\t";
        if (($context["action_links"] ?? null)) {
            // line 251
            echo "\t\t\t\t\t";
            $this->displayBlock('action_links', $context, $blocks);
            // line 254
            echo "\t\t\t\t";
        }
        // line 255
        echo "
\t\t\t\t";
        // line 257
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 257)) {
            // line 258
            echo "\t\t\t\t\t";
            $this->displayBlock('help', $context, $blocks);
            // line 261
            echo "\t\t\t\t";
        }
        // line 262
        echo "
\t\t\t\t";
        // line 264
        echo "\t\t\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 280
        echo "\t\t\t\t\t</div>
\t\t\t\t</article>
\t\t\t</section>

\t\t\t";
        // line 285
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 285)) {
            // line 286
            echo "\t\t\t\t";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 291
            echo "\t\t\t";
        }
        // line 292
        echo "\t\t</div>
\t</div>
";
    }

    // line 132
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        echo "\t\t\t<div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
        echo "</div>
\t\t";
    }

    // line 214
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 215
        echo "\t\t\t\t\t<div class=\"col-sm-12\" role=\"heading\">
\t\t\t\t\t\t";
        // line 216
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 216), 216, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t";
    }

    // line 223
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 224
        echo "\t\t\t\t\t<aside class=\"col-sm-3\" role=\"complementary\">
\t\t\t\t\t\t";
        // line 225
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 225), 225, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</aside>
\t\t\t\t";
    }

    // line 244
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 245
        echo "\t\t\t\t\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 245, $this->source), "html", null, true);
        echo "
\t\t\t\t\t";
    }

    // line 251
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 252
        echo "\t\t\t\t\t\t<ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 252, $this->source), "html", null, true);
        echo "</ul>
\t\t\t\t\t";
    }

    // line 258
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 259
        echo "\t\t\t\t\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 259), 259, $this->source), "html", null, true);
        echo "
\t\t\t\t\t";
    }

    // line 264
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 265
        echo "\t\t\t\t\t<a id=\"main-content\"></a>
\t\t\t\t\t";
        // line 267
        $context["classes"] = [0 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 268
($context["node"] ?? null), "bundle", [], "any", false, false, true, 268), 268, $this->source)), 1 => ((twig_get_attribute($this->env, $this->source,         // line 269
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 269)) ? ("is-promoted") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,         // line 270
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 270)) ? ("is-sticky") : ("")), 3 => (( !twig_get_attribute($this->env, $this->source,         // line 271
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 271)) ? ("is-unpublished") : ("")), 4 => ((        // line 272
($context["view_mode"] ?? null)) ? (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 272, $this->source))) : ("")), 5 => "clearfix"];
        // line 276
        echo "\t\t\t\t\t<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 276), 276, $this->source), "html", null, true);
        echo ">
\t\t\t\t\t\t<div";
        // line 277
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method", false, false, true, 277), 277, $this->source), "html", null, true);
        echo ">
\t\t\t\t\t\t\t";
        // line 278
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 278), 278, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t";
    }

    // line 286
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 287
        echo "\t\t\t\t\t<aside class=\"col-sm-3\" role=\"complementary\">
\t\t\t\t\t\t";
        // line 288
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 288), 288, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</aside>
\t\t\t\t";
    }

    // line 297
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 298
        echo "\t\t<footer class=\"footer ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 298, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
\t\t\t";
        // line 299
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 299), 299, $this->source), "html", null, true);
        echo "
\t\t</footer>
\t";
    }

    public function getTemplateName()
    {
        return "themes/lifepoints_sass/templates/system/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  712 => 299,  707 => 298,  703 => 297,  696 => 288,  693 => 287,  689 => 286,  683 => 278,  679 => 277,  674 => 276,  672 => 272,  671 => 271,  670 => 270,  669 => 269,  668 => 268,  667 => 267,  664 => 265,  660 => 264,  653 => 259,  649 => 258,  642 => 252,  638 => 251,  631 => 245,  627 => 244,  620 => 225,  617 => 224,  613 => 223,  606 => 216,  603 => 215,  599 => 214,  592 => 133,  588 => 132,  582 => 292,  579 => 291,  576 => 286,  573 => 285,  567 => 280,  564 => 264,  561 => 262,  558 => 261,  555 => 258,  552 => 257,  549 => 255,  546 => 254,  543 => 251,  540 => 250,  537 => 248,  534 => 247,  531 => 244,  528 => 243,  521 => 239,  519 => 236,  518 => 235,  517 => 234,  516 => 233,  515 => 232,  513 => 231,  510 => 229,  507 => 228,  504 => 223,  501 => 222,  498 => 220,  495 => 219,  492 => 214,  489 => 213,  482 => 208,  475 => 204,  465 => 197,  459 => 194,  453 => 191,  450 => 190,  444 => 187,  441 => 186,  438 => 185,  428 => 176,  424 => 161,  420 => 160,  415 => 157,  413 => 156,  411 => 138,  408 => 136,  405 => 135,  402 => 132,  399 => 131,  395 => 128,  391 => 127,  386 => 122,  382 => 120,  379 => 119,  373 => 116,  370 => 115,  367 => 114,  362 => 110,  353 => 104,  348 => 101,  345 => 100,  341 => 98,  337 => 96,  331 => 92,  329 => 91,  324 => 90,  322 => 87,  321 => 86,  320 => 84,  318 => 83,  314 => 82,  305 => 69,  298 => 64,  294 => 63,  282 => 467,  277 => 464,  263 => 445,  259 => 444,  224 => 412,  192 => 383,  171 => 365,  163 => 360,  145 => 345,  130 => 333,  122 => 328,  108 => 317,  92 => 303,  88 => 297,  86 => 296,  83 => 295,  81 => 127,  78 => 125,  74 => 82,  72 => 81,  67 => 78,  64 => 76,  62 => 75,  58 => 63,  56 => 62,  51 => 59,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/lifepoints_sass/templates/system/page--front.html.twig", "C:\\xampp\\htdocs\\drupal-9.3\\themes\\lifepoints_sass\\templates\\system\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 62, "block" => 63, "set" => 75);
        static $filters = array("escape" => 59, "t" => 412, "clean_class" => 87);
        static $functions = array("attach_library" => 59);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'set'],
                ['escape', 't', 'clean_class'],
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
